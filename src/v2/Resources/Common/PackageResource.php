<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class PackageResource
{
    protected ?float $price = null;
    protected ?float $discount = null;
    protected ?string $format = null;
    protected ?DimensionsResource $dimensions = null;
    protected ?float $weight = null;
    protected ?float $insuranceValue = null;
    /**
     * @var ProductResource[]
     */
    protected array $products = [];


    /* GETTERS/SETTERS */

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float|null $price
     * @return PackageResource
     */
    public function setPrice(?float $price): PackageResource
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @param float|null $discount
     * @return PackageResource
     */
    public function setDiscount(?float $discount): PackageResource
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string|null $format
     * @return PackageResource
     */
    public function setFormat(?string $format): PackageResource
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return DimensionsResource|null
     */
    public function getDimensions(): ?DimensionsResource
    {
        return $this->dimensions;
    }

    /**
     * @param DimensionsResource|null $dimensions
     * @return PackageResource
     */
    public function setDimensions(?DimensionsResource $dimensions): PackageResource
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     * @return PackageResource
     */
    public function setWeight(?float $weight): PackageResource
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getInsuranceValue(): ?float
    {
        return $this->insuranceValue;
    }

    /**
     * @param float|null $insuranceValue
     * @return PackageResource
     */
    public function setInsuranceValue(?float $insuranceValue): PackageResource
    {
        $this->insuranceValue = $insuranceValue;
        return $this;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param array $products
     * @return PackageResource
     */
    public function setProducts(array $products): PackageResource
    {
        $this->products = $products;
        return $this;
    }
}
