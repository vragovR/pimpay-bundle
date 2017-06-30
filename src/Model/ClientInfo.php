<?php
namespace PimpayBundle\Model;

/**
 * Class ClientInfo
 * @package PimpayBundle\Model
 */
class ClientInfo
{
    /**
     * @var string
     */
    public $tin;

    /**
     * @var string
     */
    public $status;

    /**
     * @var boolean
     */
    public $isMoneyTransferPossible;

    /**
     * @var string
     */
    public $paymentOrderPurpose;

    /**
     * @var integer
     */
    public $ordersCount;
}
