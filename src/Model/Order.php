<?php
namespace PimpayBundle\Model;

/**
 * Class Order
 * @package PimpayBundle\Model
 */
class Order
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $tin;

    /**
     * @var string
     */
    public $shopExternalId;

    /**
     * @var OrderBase
     */
    public $base;

    /**
     * @var \DateTime
     */
    public $createdAt;

    /**
     * @var OrderItem[]
     */
    public $items;

    /**
     * @var Address
     */
    public $destinationAddress;

    /**
     * @var Recipient
     */
    public $recipient;

    /**
     * @var F103
     */
    public $f103;

    /**
     * @var string
     */
    public $moneyRecipient;
}
