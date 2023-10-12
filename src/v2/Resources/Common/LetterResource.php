<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class LetterResource
{
    protected WeightResource $weight;
    protected WidthResource $width;
    protected LengthResource $length;


    /**
     * @param WeightResource $weight
     * @param WidthResource $width
     * @param LengthResource $length
     */
    public function __construct(WeightResource $weight, WidthResource $width, LengthResource $length)
    {
        $this->weight = $weight;
        $this->width = $width;
        $this->length = $length;
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
     * @return LetterResource
     */
    public function setWeight(WeightResource $weight): LetterResource
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
     * @return LetterResource
     */
    public function setWidth(WidthResource $width): LetterResource
    {
        $this->width = $width;
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
     * @return LetterResource
     */
    public function setLength(LengthResource $length): LetterResource
    {
        $this->length = $length;
        return $this;
    }
}
