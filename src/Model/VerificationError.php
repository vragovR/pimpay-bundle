<?php

namespace PimpayBundle\Model;

/**
 * Class VerificationError
 * @package PimpayBundle\Model
 */
class VerificationError
{
    /**
     * @var string
     */
    private $message;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }
}
