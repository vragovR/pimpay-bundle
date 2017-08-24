<?php

namespace PimpayBundle\Handler;

use PimpayBundle\Service\SoapClientService;

/**
 * Interface CryptoHandlerInterface
 * @package PimpayBundle\Handler
 */
interface CryptoHandlerInterface
{
    /**
     * @param string $data
     * @return string
     */
    public function sign(string $data): string;

    /**
     * @param SoapClientService $client
     * @param string            $request
     * @return mixed
     */
    public function injectSignature(SoapClientService $client, string $request): string;
}
