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
    const MONEY_RECIPIENT_DELIVERY_SERVICE = 'delivery_service';

    /**
     * @var string
     */
    const MONEY_RECIPIENT_CLIENT = 'client';

    /**
     * @var string
     */
    const MONEY_RECIPIENT_PIMPAY = 'pimpay';

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $tin;

    /**
     * @var string|null
     */
    private $shopExternalId;

    /**
     * @var OrderBase
     */
    private $base;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var OrderItem[]
     */
    private $items;

    /**
     * @var Address
     */
    private $destinationAddress;

    /**
     * @var Recipient
     */
    private $recipient;

    /**
     * @var F103
     */
    private $f103;

    /**
     * @var string
     */
    private $moneyRecipient;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTin(): string
    {
        return $this->tin;
    }

    /**
     * @param string $tin
     * @return $this
     */
    public function setTin(string $tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getShopExternalId()
    {
        return $this->shopExternalId;
    }

    /**
     * @param string|null $shopExternalId
     * @return $this
     */
    public function setShopExternalId(string $shopExternalId = null)
    {
        $this->shopExternalId = $shopExternalId;

        return $this;
    }

    /**
     * @return OrderBase
     */
    public function getBase(): OrderBase
    {
        return $this->base;
    }

    /**
     * @param OrderBase $base
     * @return $this
     */
    public function setBase(OrderBase $base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return $this
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return OrderItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param OrderItem $item
     * @return $this
     */
    public function addItem(OrderItem $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @param OrderItem[] $items
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return Address
     */
    public function getDestinationAddress(): Address
    {
        return $this->destinationAddress;
    }

    /**
     * @param Address $destinationAddress
     * @return $this
     */
    public function setDestinationAddress(Address $destinationAddress)
    {
        $this->destinationAddress = $destinationAddress;

        return $this;
    }

    /**
     * @return Recipient
     */
    public function getRecipient(): Recipient
    {
        return $this->recipient;
    }

    /**
     * @param Recipient $recipient
     * @return $this
     */
    public function setRecipient(Recipient $recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * @return F103
     */
    public function getF103(): F103
    {
        return $this->f103;
    }

    /**
     * @param F103 $f103
     * @return $this
     */
    public function setF103(F103 $f103)
    {
        $this->f103 = $f103;

        return $this;
    }

    /**
     * @return string
     */
    public function getMoneyRecipient(): string
    {
        return $this->moneyRecipient;
    }

    /**
     * @param string $moneyRecipient
     * @return $this
     */
    public function setMoneyRecipient(string $moneyRecipient)
    {
        $this->moneyRecipient = $moneyRecipient;

        return $this;
    }
}
