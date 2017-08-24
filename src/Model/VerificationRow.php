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
    private $oid;

    /**
     * @var float
     */
    private $pfr;

    /**
     * @var float
     */
    private $ptp;

    /**
     * @var float
     */
    private $dc;

    /**
     * @var float
     */
    private $cs;

    /**
     * @var float
     */
    private $ins;

    /**
     * @var CustomTransaction[]
     */
    private $txs = [];

    /**
     * @return string
     */
    public function getOid(): string
    {
        return $this->oid;
    }

    /**
     * @param string $oid
     */
    public function setOid(string $oid)
    {
        $this->oid = $oid;
    }

    /**
     * @return float
     */
    public function getPfr(): float
    {
        return $this->pfr;
    }

    /**
     * @param float $pfr
     */
    public function setPfr(float $pfr)
    {
        $this->pfr = $pfr;
    }

    /**
     * @return float
     */
    public function getPtp(): float
    {
        return $this->ptp;
    }

    /**
     * @param float $ptp
     */
    public function setPtp(float $ptp)
    {
        $this->ptp = $ptp;
    }

    /**
     * @return float
     */
    public function getDc(): float
    {
        return $this->dc;
    }

    /**
     * @param float $dc
     */
    public function setDc(float $dc)
    {
        $this->dc = $dc;
    }

    /**
     * @return float
     */
    public function getCs(): float
    {
        return $this->cs;
    }

    /**
     * @param float $cs
     */
    public function setCs(float $cs)
    {
        $this->cs = $cs;
    }

    /**
     * @return float
     */
    public function getIns(): float
    {
        return $this->ins;
    }

    /**
     * @param float $ins
     */
    public function setIns(float $ins)
    {
        $this->ins = $ins;
    }

    /**
     * @return CustomTransaction[]
     */
    public function getTxs(): array
    {
        return $this->txs;
    }

    /**
     * @param CustomTransaction[] $txs
     */
    public function setTxs(array $txs)
    {
        $this->txs = $txs;
    }
}
