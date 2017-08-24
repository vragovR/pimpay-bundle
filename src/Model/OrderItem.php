<?php

namespace PimpayBundle\Model;

/**
 * Class OrderItem
 * @package PimpayBundle\Model
 */
class OrderItem
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var float|null
     */
    private $value;

    /**
     * @var integer|null
     */
    private $count;

    /**
     * @var float|null
     */
    private $weight;

    /**
     * @var string|null
     */
    private $category;

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(string $name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float|null $value
     * @return $this
     */
    public function setValue(float $value = null)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int|null $count
     * @return $this
     */
    public function setCount(int $count = null)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     * @return $this
     */
    public function setWeight(float $weight = null)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|null $category
     * @return $this
     */
    public function setCategory(string $category = null)
    {
        $this->category = $category;

        return $this;
    }
}
