<?php

namespace PimpayBundle\Model;

/**
 * Class F103
 * @package PimpayBundle\Model
 */
class F103
{
    /**
     * @var int
     */
    private $number;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
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
}
