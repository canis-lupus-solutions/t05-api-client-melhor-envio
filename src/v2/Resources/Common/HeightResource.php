<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class HeightResource
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
     * @return HeightResource
     */
    public function setMin(int $min): HeightResource
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
     * @return HeightResource
     */
    public function setMax(int $max): HeightResource
    {
        $this->max = $max;
        return $this;
    }
}
