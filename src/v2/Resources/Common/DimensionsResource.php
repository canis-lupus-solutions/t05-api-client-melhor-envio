<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class DimensionsResource
{
    protected int $height;
    protected int $width;
    protected int $length;


    /**
     * @param int $height
     * @param int $width
     * @param int $length
     */
    public function __construct(int $height, int $width, int $length)
    {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }


    /* GETTERS/SETTERS */

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return DimensionsResource
     */
    public function setHeight(int $height): DimensionsResource
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return DimensionsResource
     */
    public function setWidth(int $width): DimensionsResource
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return DimensionsResource
     */
    public function setLength(int $length): DimensionsResource
    {
        $this->length = $length;
        return $this;
    }
}
