<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class WeightResource
{
    protected float $min;
    protected float $max;


    /**
     * @param float $min
     * @param float $max
     */
    public function __construct(float $min, float $max)
    {
        $this->min = $min;
        $this->max = $max;
    }


    /* GETTERS/SETTERS */

    /**
     * @return float
     */
    public function getMin(): float
    {
        return $this->min;
    }

    /**
     * @param float $min
     * @return WeightResource
     */
    public function setMin(float $min): WeightResource
    {
        $this->min = $min;
        return $this;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return $this->max;
    }

    /**
     * @param float $max
     * @return WeightResource
     */
    public function setMax(float $max): WeightResource
    {
        $this->max = $max;
        return $this;
    }
}
