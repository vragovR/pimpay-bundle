<?php

namespace PimpayBundle\Model;

/**
 * Class ClientInfo
 * @package PimpayBundle\Model
 */
class ClientInfo
{
    /**
     * @var string
     */
    private $tin;

    /**
     * @var string
     */
    private $status;

    /**
     * @var boolean
     */
    private $isMoneyTransferPossible;

    /**
     * @var string
     */
    private $paymentOrderPurpose;

    /**
     * @var integer
     */
    private $ordersCount;

    /**
     * @return string
     */
    public function getTin(): string
    {
        return $this->tin;
    }

    /**
     * @param string $tin
     */
    public function setTin(string $tin)
    {
        $this->tin = $tin;
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
     * @return bool
     */
    public function isMoneyTransferPossible(): bool
    {
        return $this->isMoneyTransferPossible;
    }

    /**
     * @param bool $isMoneyTransferPossible
     */
    public function setIsMoneyTransferPossible(bool $isMoneyTransferPossible)
    {
        $this->isMoneyTransferPossible = $isMoneyTransferPossible;
    }

    /**
     * @return string
     */
    public function getPaymentOrderPurpose(): string
    {
        return $this->paymentOrderPurpose;
    }

    /**
     * @param string $paymentOrderPurpose
     */
    public function setPaymentOrderPurpose(string $paymentOrderPurpose)
    {
        $this->paymentOrderPurpose = $paymentOrderPurpose;
    }

    /**
     * @return int
     */
    public function getOrdersCount(): int
    {
        return $this->ordersCount;
    }

    /**
     * @param int $ordersCount
     */
    public function setOrdersCount(int $ordersCount)
    {
        $this->ordersCount = $ordersCount;
    }
}
