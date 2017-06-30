<?php
namespace PimpayBundle\Model;

/**
 * Class DeliveryStatusHistoryItem
 * @package PimpayBundle\Model
 */
class DeliveryStatusHistoryItem
{
    /**
     * @var \DateTime
     */
    public $time;

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
}
