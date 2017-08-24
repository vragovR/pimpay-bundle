<?php

namespace PimpayBundle\Model;

/**
 * Class OrderBase
 * @package PimpayBundle\Model
 */
class OrderBase
{
    /**
     * @var string|null
     */
    private $postId;

    /**
     * @var OrderParams
     */
    private $params;

    /**
     * @return string
     */
    public function getPostId(): string
    {
        return $this->postId;
    }

    /**
     * @param string|null $postId
     * @return $this
     */
    public function setPostId(string $postId = null)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * @return OrderParams
     */
    public function getParams(): OrderParams
    {
        return $this->params;
    }

    /**
     * @param OrderParams $params
     * @return $this
     */
    public function setParams(OrderParams $params)
    {
        $this->params = $params;

        return $this;
    }
}
