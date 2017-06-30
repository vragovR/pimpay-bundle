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
    public $id;

    /**
     * @var string
     */
    public $postId;

    /**
     * @var RussianPostPayment[]
     */
    public $payments;
}
