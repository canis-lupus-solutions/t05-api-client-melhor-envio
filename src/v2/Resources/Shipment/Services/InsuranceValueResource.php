<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Services;

class InsuranceValueResource
{
    protected int $min;
    protected int $max;
    protected int $maxDec;


    /**
     * @param int $min
     * @param int $max
     * @param int $maxDec
     */
    public function __construct(int $min, int $max, int $maxDec)
    {
        $this->min = $min;
        $this->max = $max;
        $this->maxDec = $maxDec;
    }


    /* GETTERS/SETTERS */

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @param int $min
     * @return InsuranceValueResource
     */
    public function setMin(int $min): InsuranceValueResource
    {
        $this->min = $min;
        return $this;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @param int $max
     * @return InsuranceValueResource
     */
    public function setMax(int $max): InsuranceValueResource
    {
        $this->max = $max;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDec(): int
    {
        return $this->maxDec;
    }

    /**
     * @param int $maxDec
     * @return InsuranceValueResource
     */
    public function setMaxDec(int $maxDec): InsuranceValueResource
    {
        $this->maxDec = $maxDec;
        return $this;
    }
}
