<?php

namespace PimpayBundle\Model;

/**
 * Class Address
 * @package PimpayBundle\Model
 */
class Address
{
    /**
     * @var string
     */
    private $full;

    /**
     * @var string
     */
    private $zipcode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $kladr;

    /**
     * @var string|null
     */
    private $fias;

    /**
     * @return string
     */
    public function getFull(): string
    {
        return $this->full;
    }

    /**
     * @param string $full
     * @return $this
     */
    public function setFull(string $full)
    {
        $this->full = $full;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode(string $zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity(string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getKladr(): string
    {
        return $this->kladr;
    }

    /**
     * @param string $kladr
     * @return $this
     */
    public function setKladr(string $kladr)
    {
        $this->kladr = $kladr;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFias()
    {
        return $this->fias;
    }

    /**
     * @param string|null $fias
     * @return $this
     */
    public function setFias(string $fias = null)
    {
        $this->fias = $fias;

        return $this;
    }
}
