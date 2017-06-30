<?php
namespace PimpayBundle\Model;

/**
 * Class VerificationStatusResponse
 * @package PimpayBundle\Model
 */
class VerificationStatusResponse
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var VerificationError[]
     */
    public $errors = [];
}
