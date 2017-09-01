<?php

namespace PimpayBundle\Model;

/**
 * Class PaymentOrder
 * @package PimpayBundle\Model
 */
class PaymentOrder
{
    /**
     * @var integer
     */
    private $num;

    /**
     * @var string
     */
    private $date;

    /**
     * @var float
     */
    private $sum;

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     * @return $this
     */
    public function setNum(int $num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return $this
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date->format('Y-m-d');

        return $this;
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }

    /**
     * @param float $sum
     * @return $this
     */
    public function setSum(float $sum)
    {
        $this->sum = $sum;

        return $this;
    }
}
