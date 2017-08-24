<?php

namespace PimpayBundle\Model;

/**
 * Class VerificationStatusResponse
 * @package PimpayBundle\Model
 */
class VerificationStatusResponse
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var VerificationError[]
     */
    private $errors = [];

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @return VerificationError[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param VerificationError[] $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }
}
