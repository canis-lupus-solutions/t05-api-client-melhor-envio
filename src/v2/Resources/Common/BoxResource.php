<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class BoxResource
{
    protected WeightResource $weight;
    protected WidthResource $width;
    protected HeightResource $height;
    protected LengthResource $length;
    protected int $sum;


    /**
     * @param WeightResource $weight
     * @param WidthResource $width
     * @param HeightResource $height
     * @param LengthResource $length
     * @param int $sum
     */
    public function __construct(
        WeightResource $weight,
        WidthResource  $width,
        HeightResource $height,
        LengthResource $length,
        int            $sum
    )
    {
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
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
     * @return BoxResource
     */
    public function setWeight(WeightResource $weight): BoxResource
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return WidthResource
     */
    public function getWidth(): WidthResource
    {
        return $this->width;
    }

    /**
     * @param WidthResource $width
     * @return BoxResource
     */
    public function setWidth(WidthResource $width): BoxResource
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return HeightResource
     */
    public function getHeight(): HeightResource
    {
        return $this->height;
    }

    /**
     * @param HeightResource $height
     * @return BoxResource
     */
    public function setHeight(HeightResource $height): BoxResource
    {
        $this->height = $height;
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
     * @return BoxResource
     */
    public function setLength(LengthResource $length): BoxResource
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
     * @return BoxResource
     */
    public function setSum(int $sum): BoxResource
    {
        $this->sum = $sum;
        return $this;
    }
}
