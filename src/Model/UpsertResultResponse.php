<?php
namespace PimpayBundle\Model;

class UpsertResultResponse
{
    /**
     * @var integer
     */
    public $count;

    /**
     * @var UpsertResultItem[]
     */
    public $orders;
}
