<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class ProductResource
{
    protected string $id;
    protected float $quantity;


    /**
     * @param string $id
     * @param float $quantity
     */
    public function __construct(string $id, float $quantity)
    {
        $this->id = $id;
        $this->quantity = $quantity;
    }


    /* GETTERS/SETTERS */

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ProductResource
     */
    public function setId(string $id): ProductResource
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return ProductResource
     */
    public function setQuantity(float $quantity): ProductResource
    {
        $this->quantity = $quantity;
        return $this;
    }
}
