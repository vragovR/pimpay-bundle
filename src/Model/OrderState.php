<?php
namespace PimpayBundle\Model;

/**
 * Class OrderState
 * @package PimpayBundle\Model
 */
class OrderState
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var float
     */
    public $cost;

    /**
     * @var string
     */
    public $uniformPimpayDeliveryStatus;

    /**
     * @var string
     */
    public $customDeliveryStatus;

    /**
     * @var string
     */
    public $deliveryServiceDeliveryStatus;

    /**
     * @var \DateTime
     */
    public $time;
}
