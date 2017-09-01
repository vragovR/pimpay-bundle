<?php

namespace PimpayBundle\Model;

/**
 * Class RussianPostPayment
 * @package PimpayBundle\Model
 */
class RussianPostPayment
{
    /**
     * @var float
     */
    private $sum;

    /**
     * @var string
     */
    private $paymentDate;

    /**
     * @var string
     */
    private $registeredAt;

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }

    /**
     * @param float $sum
     */
    public function setSum(float $sum)
    {
        $this->sum = $sum;
    }

    /**
     * @return string
     */
    public function getPaymentDate(): string
    {
        return $this->paymentDate;
    }

    /**
     * @param \DateTime $paymentDate
     */
    public function setPaymentDate(\DateTime $paymentDate)
    {
        $this->paymentDate = $paymentDate->format('Y-m-d');
    }

    /**
     * @return string
     */
    public function getRegisteredAt(): string
    {
        return $this->registeredAt;
    }

    /**
     * @param \DateTime $registeredAt
     */
    public function setRegisteredAt(\DateTime $registeredAt)
    {
        $this->registeredAt = $registeredAt->format('Y-m-d H:i:s');
    }
}
