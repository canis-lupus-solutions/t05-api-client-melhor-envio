<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class RollResource
{
    protected WeightResource $weight;
    protected DiameterResource $diameter;
    protected LengthResource $length;
    protected int $sum;


    /**
     * @param WeightResource $weight
     * @param DiameterResource $diameter
     * @param LengthResource $length
     * @param int $sum
     */
    public function __construct(
        WeightResource $weight,
        DiameterResource $diameter,
        LengthResource $length,
        int $sum
    )
    {
        $this->weight = $weight;
        $this->diameter = $diameter;
        $this->length = $length;
        $this->sum = $sum;
    }


    /* GETTERS/SETTERS */

    /**
     * @return WeightResource
     */
    public function getWeight(): WeightResource
    {
        return $this->weight;
    }

    /**
     * @param WeightResource $weight
     * @return RollResource
     */
    public function setWeight(WeightResource $weight): RollResource
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return DiameterResource
     */
    public function getDiameter(): DiameterResource
    {
        return $this->diameter;
    }

    /**
     * @param DiameterResource $diameter
     * @return RollResource
     */
    public function setDiameter(DiameterResource $diameter): RollResource
    {
        $this->diameter = $diameter;
        return $this;
    }

    /**
     * @return LengthResource
     */
    public function getLength(): LengthResource
    {
        return $this->length;
    }

    /**
     * @param LengthResource $length
     * @return RollResource
     */
    public function setLength(LengthResource $length): RollResource
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return int
     */
    public function getSum(): int
    {
        return $this->sum;
    }

    /**
     * @param int $sum
     * @return RollResource
     */
    public function setSum(int $sum): RollResource
    {
        $this->sum = $sum;
        return $this;
    }
}
