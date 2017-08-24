<?php

namespace PimpayBundle\Model;

/**
 * Class RussianPostPaymentsResponse
 * @package PimpayBundle\Model
 */
class RussianPostPaymentsResponse
{
    /**
     * @var string
     */
    private $tin;

    /**
     * @var RussianPostPaymentInfo[]
     */
    private $russianPostPaymentsInfo;

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
     * @return RussianPostPaymentInfo[]
     */
    public function getRussianPostPaymentsInfo(): array
    {
        return $this->russianPostPaymentsInfo;
    }

    /**
     * @param RussianPostPaymentInfo[] $russianPostPaymentsInfo
     */
    public function setRussianPostPaymentsInfo(array $russianPostPaymentsInfo)
    {
        $this->russianPostPaymentsInfo = $russianPostPaymentsInfo;
    }
}
