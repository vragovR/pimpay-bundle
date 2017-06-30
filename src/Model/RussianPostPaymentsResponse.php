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
    public $tin;

    /**
     * @var RussianPostPaymentInfo[]
     */
    public $russianPostPaymentsInfo;
}
