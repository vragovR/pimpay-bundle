<?php

namespace PimpayBundle\Handler;

use PimpayBundle\Exception\HashNotSupportedException;
use PimpayBundle\Exception\OpenSslNotInstalledException;
use PimpayBundle\Service\SoapClientService;

/**
 * Class OpenSslСryptoHandler
 * @package PimpayBundle\Handler
 */
class OpenSslCryptoHandler implements CryptoHandlerInterface
{
    /**
     * @var array
     */
    const SUPPORT_HASH = [
        'SHA',
        'SHA1',
        'SHA224',
        'SHA256',
        'SHA384',
        'SHA512',
        'DSA',
        'DSA-SHA',
        'ecdsa-with-SHA1',
        'MD4',
        'MD5',
        'RIPEMD160',
        'whirlpool',
    ];

    /**
     * @var string
     */
    private $pathKey;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var string
     */
    private $passphrase;

    /**
     * OpenSslCryptoHandler constructor.
     * @param array $params
     * @throws HashNotSupportedException
     * @throws OpenSslNotInstalledException
     */
    public function __construct(array $params)
    {
        if (!extension_loaded('openssl')) {
            throw new OpenSslNotInstalledException('OpenSSL extension is not installed.');
        }

        if (!in_array($params['hash'], self::SUPPORT_HASH, true)) {
            throw new HashNotSupportedException("Unsupported OpenSSL type hash {$params['hash']}.");
        }

        $this->pathKey = $params['path_key'];
        $this->passphrase = $params['passphrase'];
        $this->hash = $params['hash'];
    }

    /**
     * @param string $data
     * @return string
     */
    public function sign(string $data): string
    {
        $signature = '';
        $privateKey = openssl_pkey_get_private('file://'.$this->pathKey, $this->passphrase);
        openssl_sign($data, $signature, $privateKey, $this->hash);

        return base64_encode($signature);
    }

    /**
     * @param SoapClientService $soapClient
     * @param string            $request
     * @return string
     */
    public function injectSignature(SoapClientService $soapClient, string $request): string
    {
        $signature = $this->sign($request);
        stream_context_set_option($soapClient->getStreamContext(), 'http', 'header', 'X-Request-Signature: '.$signature);

        return $request;
    }
}
