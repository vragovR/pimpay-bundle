<?php

namespace PimpayBundle\Model;

/**
 * Class CustomTransaction
 * @package PimpayBundle\Model
 */
class CustomTransaction
{
    /**
     * @var float
     */
    private $val;

    /**
     * @var string
     */
    private $cmt;

    /**
     * @return float
     */
    public function getVal(): float
    {
        return $this->val;
    }

    /**
     * @param float $val
     */
    public function setVal(float $val)
    {
        $this->val = $val;
    }

    /**
     * @return string
     */
    public function getCmt(): string
    {
        return $this->cmt;
    }

    /**
     * @param string $cmt
     */
    public function setCmt(string $cmt)
    {
        $this->cmt = $cmt;
    }
}
