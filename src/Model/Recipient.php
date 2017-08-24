<?php

namespace PimpayBundle\Model;

/**
 * Class Recipient
 * @package PimpayBundle\Model
 */
class Recipient
{
    /**
     * @var string|null
     */
    private $fio;

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @return string
     */
    public function getFio(): string
    {
        return $this->fio;
    }

    /**
     * @param string|null $fio
     * @return $this
     */
    public function setFio(string $fio = null)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return $this
     */
    public function setPhone(string $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return $this
     */
    public function setEmail(string $email = null)
    {
        $this->email = $email;

        return $this;
    }
}
