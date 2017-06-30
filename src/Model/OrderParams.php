<?php
namespace PimpayBundle\Model;

/**
 * Class OrderParams
 * @package PimpayBundle\Model
 */
class OrderParams
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $paymentFromRecipient;

    /**
     * @var float
     */
    public $declaredOrderCost;

    /**
     * @var float
     */
    public $estimatedDeliveryCost;

    /**
     * @var string
     */
    public $deliveryService;

    /**
     * @var string
     */
    public $deliveryServiceExternalId;

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
     * @var DeliveryStatusHistoryItem[]
     */
    public $history;
}
