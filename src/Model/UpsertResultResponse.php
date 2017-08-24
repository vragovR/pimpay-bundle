<?php

namespace PimpayBundle\Model;

class UpsertResultResponse
{
    /**
     * @var integer
     */
    private $count;

    /**
     * @var UpsertResultItem[]
     */
    private $orders;

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count)
    {
        $this->count = $count;
    }

    /**
     * @return UpsertResultItem[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    /**
     * @param UpsertResultItem[] $orders
     */
    public function setOrders(array $orders)
    {
        $this->orders = $orders;
    }
}
