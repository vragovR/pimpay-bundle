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
    CONST CURRENCY_RUB = 'RUB';

    /**
     * @var string
     */
    CONST CURRENCY_KZT = 'KZT';

    /**
     * @var string
     */
    CONST COURIER_SHIPTOR = 'shiptor';

    /**
     * @var string
     */
    CONST COURIER_BOXBERY = 'boxberry';

    /**
     * @var string
     */
    CONST COURIER_SDEK = 'sdek';

    /**
     * @var string
     */
    CONST COURIER_DPD = 'dpd';

    /**
     * @var string
     */
    CONST COURIER_IML = 'iml';

    /**
     * @var string
     */
    CONST COURIER_PICKPOINT = 'pick_point';

    /**
     * @var string
     */
    CONST COURIER_RUSSIAN_POST = 'post';

    /**
     * @var string Создан запрос/черновик на отправку
     */
    CONST STATUS_PENDING = 'pending';

    /**
     * @var string Заказ принят/принят на склад
     */
    CONST STATUS_PREPARED = 'prepared';

    /**
     * @var string Заказ транспортируется
     */
    CONST STATUS_INTRANSIT = 'intransit';

    /**
     * @var string Заказ оставлен в ПВЗ
     */
    CONST STATUS_STORED = 'stored';

    /**
     * @var string Заказ доставлен до конечного покупателя
     */
    CONST STATUS_DELIVERED = 'delivered';

    /**
     * @var string Частичный возврат
     */
    CONST STATUS_PARTIAL_RETURN = 'partialReturn';

    /**
     * @var string Полный возврат
     */
    CONST STATUS_RETURN = 'return';

    /**
     * @var string Утеря/Порча
     */
    CONST STATUS_LOST = 'lost';

    /**
     * @var string Ошибка
     */
    CONST STATUS_ERROR = 'error';

    /**
     * @var string Неизвестно
     */
    CONST STATUS_UNKNOWN = 'unknown';

    /**
     * @var string
     */
    private $currency;

    /**
     * @var float
     */
    private $paymentFromRecipient;

    /**
     * @var float
     */
    private $declaredOrderCost;

    /**
     * @var float
     */
    private $estimatedDeliveryCost;

    /**
     * @var string
     */
    private $deliveryService;

    /**
     * @var string
     */
    private $deliveryServiceExternalId;

    /**
     * @var string
     */
    private $uniformPimpayDeliveryStatus;

    /**
     * @var string
     */
    private $customDeliveryStatus;

    /**
     * @var string
     */
    private $deliveryServiceDeliveryStatus;

    /**
     * @var DeliveryStatusHistoryItem[]
     */
    private $history = [];

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency(string $currency)
    {
        if (!in_array($currency, [self::CURRENCY_RUB, self::CURRENCY_KZT], true)) {
            throw new \LogicException('Invalid currency');
        }

        $this->currency = $currency;

        return $this;
    }

    /**
     * @return float
     */
    public function getPaymentFromRecipient(): float
    {
        return $this->paymentFromRecipient;
    }

    /**
     * @param float $paymentFromRecipient
     * @return $this
     */
    public function setPaymentFromRecipient(float $paymentFromRecipient)
    {
        $this->paymentFromRecipient = $paymentFromRecipient;

        return $this;
    }

    /**
     * @return float
     */
    public function getDeclaredOrderCost(): float
    {
        return $this->declaredOrderCost;
    }

    /**
     * @param float $declaredOrderCost
     * @return $this
     */
    public function setDeclaredOrderCost(float $declaredOrderCost)
    {
        $this->declaredOrderCost = $declaredOrderCost;

        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedDeliveryCost(): float
    {
        return $this->estimatedDeliveryCost;
    }

    /**
     * @param float $estimatedDeliveryCost
     * @return $this
     */
    public function setEstimatedDeliveryCost(float $estimatedDeliveryCost)
    {
        $this->estimatedDeliveryCost = $estimatedDeliveryCost;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryService(): string
    {
        return $this->deliveryService;
    }

    /**
     * @param string $deliveryService
     * @return $this
     */
    public function setDeliveryService(string $deliveryService)
    {
        $this->deliveryService = $deliveryService;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryServiceExternalId(): string
    {
        return $this->deliveryServiceExternalId;
    }

    /**
     * @param string $deliveryServiceExternalId
     * @return $this
     */
    public function setDeliveryServiceExternalId(string $deliveryServiceExternalId)
    {
        $this->deliveryServiceExternalId = $deliveryServiceExternalId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUniformPimpayDeliveryStatus(): string
    {
        return $this->uniformPimpayDeliveryStatus;
    }

    /**
     * @param string $uniformPimpayDeliveryStatus
     * @return $this
     */
    public function setUniformPimpayDeliveryStatus(string $uniformPimpayDeliveryStatus)
    {
        $this->uniformPimpayDeliveryStatus = $uniformPimpayDeliveryStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomDeliveryStatus(): string
    {
        return $this->customDeliveryStatus;
    }

    /**
     * @param string $customDeliveryStatus
     * @return $this
     */
    public function setCustomDeliveryStatus(string $customDeliveryStatus)
    {
        $this->customDeliveryStatus = $customDeliveryStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryServiceDeliveryStatus(): string
    {
        return $this->deliveryServiceDeliveryStatus;
    }

    /**
     * @param string $deliveryServiceDeliveryStatus
     * @return $this
     */
    public function setDeliveryServiceDeliveryStatus(string $deliveryServiceDeliveryStatus)
    {
        $this->deliveryServiceDeliveryStatus = $deliveryServiceDeliveryStatus;

        return $this;
    }

    /**
     * @return DeliveryStatusHistoryItem[]
     */
    public function getHistory(): array
    {
        return $this->history;
    }

    /**
     * @param DeliveryStatusHistoryItem $history
     * @return $this
     */
    public function addHistory(DeliveryStatusHistoryItem $history)
    {
        $this->history[] = $history;

        return $this;
    }

    /**
     * @param DeliveryStatusHistoryItem[] $history
     * @return $this
     */
    public function setHistory(array $history)
    {
        $this->history = $history;

        return $this;
    }
}
