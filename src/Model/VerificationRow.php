<?php
namespace PimpayBundle\Model;

/**
 * Class VerificationRow
 * @package PimpayBundle\Model
 */
class VerificationRow
{
    /**
     * @var string
     */
    public $oid;

    /**
     * @var float
     */
    public $pfr;

    /**
     * @var float
     */
    public $ptp;

    /**
     * @var float
     */
    public $dc;

    /**
     * @var float
     */
    public $cs;

    /**
     * @var float
     */
    public $ins;

    /**
     * @var CustomTransaction[]
     */
    public $txs = [];
}
