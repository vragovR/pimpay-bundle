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
    public $sum;

    /**
     * @var \DateTime
     */
    public $paymentDate;

    /**
     * @var \DateTime
     */
    public $registeredAt;
}
