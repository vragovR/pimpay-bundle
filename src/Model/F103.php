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
     * @var string
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
     * @return $this
     */
    public function setNumber(int $number)
    {
        $this->number = $number;

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
}
