<?php
namespace PimpayBundle\Model;

/**
 * Class OrderItem
 * @package PimpayBundle\Model
 */
class OrderItem
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $value;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var float
     */
    public $weight;

    /**
     * @var string
     */
    public $category;
}
