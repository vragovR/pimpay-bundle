<?php

namespace PimpayBundle\Service;

/**
 * Class SoapClientService
 * @package PimpayBundle\Service
 */
class SoapClientService extends \SoapClient
{
    /**
     * @var ApiService
     */
    protected $apiService;

    /**
     * @var resource
     */
    protected $context;

    /**
     * SoapClient constructor.
     * @param ApiService $apiService
     * @param mixed      $wsdl
     * @param array|null $options
     */
    public function __construct(ApiService $apiService, string $wsdl, array $options = null)
    {
        $this->apiService = $apiService;
        $this->context = stream_context_create();
        $options = array_merge($options, ['stream_context' => $this->context]);

        parent::__construct($wsdl, $options);

        $clientHeader = new \SoapHeader('urn:PlatformApiWsdl', 'client', 'phpSdk @ 2017-06-27 12:35:57', false);
        $versionHeader = new \SoapHeader('urn:PlatformApiWsdl', 'version', 'v2_6', false);
        $signatureHeader = new \SoapHeader('urn:PlatformApiWsdl', 'signature', null, false);

        $this->__setSoapHeaders([$clientHeader, $versionHeader, $signatureHeader]);
    }

    /**
     * @param string $request
     * @param string $location
     * @param string $action
     * @param int    $version
     * @param int    $oneWay
     * @return string
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = 0)
    {
        $request = $this->apiService->getCryptoHandler()->injectSignature($this, $request);

        return parent::__doRequest($request, $location, $action, $version, $oneWay);
    }

    /**
     * @return resource
     */
    public function getStreamContext()
    {
        return $this->context;
    }
}
