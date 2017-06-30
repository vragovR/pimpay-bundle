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
    public $num;

    /**
     * @var \DateTime
     */
    public $date;

    /**
     * @var float
     */
    public $sum;
}
