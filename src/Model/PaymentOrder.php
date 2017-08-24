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
     * @var \DateTime
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
     */
    public function setNum(int $num)
    {
        $this->num = $num;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
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
     */
    public function setSum(float $sum)
    {
        $this->sum = $sum;
    }
}
