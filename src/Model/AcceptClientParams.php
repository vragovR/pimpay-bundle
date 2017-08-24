<?php

namespace PimpayBundle\Model;

/**
 * Class AcceptClientParams
 * @package PimpayBundle\Model
 */
class AcceptClientParams
{
    /**
     * @var string
     */
    private $legalEntityName;

    /**
     * @var string
     */
    private $tin;

    /**
     * @var string
     */
    private $shopName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @return string
     */
    public function getLegalEntityName(): string
    {
        return $this->legalEntityName;
    }

    /**
     * @param string $legalEntityName
     * @return $this
     */
    public function setLegalEntityName(string $legalEntityName)
    {
        $this->legalEntityName = $legalEntityName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTin(): string
    {
        return $this->tin;
    }

    /**
     * @param string $tin
     * @return $this
     */
    public function setTin(string $tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * @return string
     */
    public function getShopName(): string
    {
        return $this->shopName;
    }

    /**
     * @param string $shopName
     * @return $this
     */
    public function setShopName(string $shopName)
    {
        $this->shopName = $shopName;

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
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return $this
     */
    public function setMobile(string $mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }
}
