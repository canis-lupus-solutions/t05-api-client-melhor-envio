<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class DeliveryRangeResource
{
    protected int $min;
    protected int $max;


    /**
     * @param int $min
     * @param int $max
     */
    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
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
     * @return DeliveryRangeResource
     */
    public function setMin(int $min): DeliveryRangeResource
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
     * @return DeliveryRangeResource
     */
    public function setMax(int $max): DeliveryRangeResource
    {
        $this->max = $max;
        return $this;
    }
}
