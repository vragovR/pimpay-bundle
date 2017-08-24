<?php

namespace PimpayBundle\Model;

/**
 * Class RussianPostPaymentInfo
 * @package PimpayBundle\Model
 */
class RussianPostPaymentInfo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $postId;

    /**
     * @var RussianPostPayment[]
     */
    private $payments;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPostId(): string
    {
        return $this->postId;
    }

    /**
     * @param string $postId
     */
    public function setPostId(string $postId)
    {
        $this->postId = $postId;
    }

    /**
     * @return RussianPostPayment[]
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    /**
     * @param RussianPostPayment[] $payments
     */
    public function setPayments(array $payments)
    {
        $this->payments = $payments;
    }
}
