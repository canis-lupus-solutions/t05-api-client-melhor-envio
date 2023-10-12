<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Calculate;

use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\AdditionalServiceResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\CustomDeliveryRangeResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\DeliveryRangeResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\PackageResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies\CompanyResource;

class CalculationResource
{
    protected int $serviceId;
    protected string $serviceName;
    protected ?string $error = null;
    protected ?float $price = null;
    protected ?float $customPrice = null;
    protected ?float $discount = null;
    protected ?string $currency = null;
    protected ?int $deliveryTime = null;
    protected ?DeliveryRangeResource $deliveryRange = null;
    protected ?int $customDeliveryTime = null;
    protected ?CustomDeliveryRangeResource $customDeliveryRange = null;
    /**
     * @var PackageResource[]
     */
    protected array $packages = [];
    protected ?AdditionalServiceResource $additionalServices = null;
    protected ?CompanyResource $company = null;


    /**
     * @param int $serviceId
     * @param string $serviceName
     */
    public function __construct(int $serviceId, string $serviceName)
    {
        $this->serviceId = $serviceId;
        $this->serviceName = $serviceName;
    }


    /* GETTERS/SETTERS */

    /**
     * @return int
     */
    public function getServiceId(): int
    {
        return $this->serviceId;
    }

    /**
     * @param int $serviceId
     * @return CalculationResource
     */
    public function setServiceId(int $serviceId): CalculationResource
    {
        $this->serviceId = $serviceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return CalculationResource
     */
    public function setServiceName(string $serviceName): CalculationResource
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string|null $error
     * @return CalculationResource
     */
    public function setError(?string $error): CalculationResource
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float|null $price
     * @return CalculationResource
     */
    public function setPrice(?float $price): CalculationResource
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getCustomPrice(): ?float
    {
        return $this->customPrice;
    }

    /**
     * @param float|null $customPrice
     * @return CalculationResource
     */
    public function setCustomPrice(?float $customPrice): CalculationResource
    {
        $this->customPrice = $customPrice;
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
     * @return CalculationResource
     */
    public function setDiscount(?float $discount): CalculationResource
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     * @return CalculationResource
     */
    public function setCurrency(?string $currency): CalculationResource
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDeliveryTime(): ?int
    {
        return $this->deliveryTime;
    }

    /**
     * @param int|null $deliveryTime
     * @return CalculationResource
     */
    public function setDeliveryTime(?int $deliveryTime): CalculationResource
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return DeliveryRangeResource|null
     */
    public function getDeliveryRange(): ?DeliveryRangeResource
    {
        return $this->deliveryRange;
    }

    /**
     * @param DeliveryRangeResource|null $deliveryRange
     * @return CalculationResource
     */
    public function setDeliveryRange(?DeliveryRangeResource $deliveryRange): CalculationResource
    {
        $this->deliveryRange = $deliveryRange;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCustomDeliveryTime(): ?int
    {
        return $this->customDeliveryTime;
    }

    /**
     * @param int|null $customDeliveryTime
     * @return CalculationResource
     */
    public function setCustomDeliveryTime(?int $customDeliveryTime): CalculationResource
    {
        $this->customDeliveryTime = $customDeliveryTime;
        return $this;
    }

    /**
     * @return CustomDeliveryRangeResource|null
     */
    public function getCustomDeliveryRange(): ?CustomDeliveryRangeResource
    {
        return $this->customDeliveryRange;
    }

    /**
     * @param CustomDeliveryRangeResource|null $customDeliveryRange
     * @return CalculationResource
     */
    public function setCustomDeliveryRange(?CustomDeliveryRangeResource $customDeliveryRange): CalculationResource
    {
        $this->customDeliveryRange = $customDeliveryRange;
        return $this;
    }

    /**
     * @return array
     */
    public function getPackages(): array
    {
        return $this->packages;
    }

    /**
     * @param array $packages
     * @return CalculationResource
     */
    public function setPackages(array $packages): CalculationResource
    {
        $this->packages = $packages;
        return $this;
    }

    /**
     * @return AdditionalServiceResource|null
     */
    public function getAdditionalServices(): ?AdditionalServiceResource
    {
        return $this->additionalServices;
    }

    /**
     * @param AdditionalServiceResource|null $additionalServices
     * @return CalculationResource
     */
    public function setAdditionalServices(?AdditionalServiceResource $additionalServices): CalculationResource
    {
        $this->additionalServices = $additionalServices;
        return $this;
    }

    /**
     * @return CompanyResource|null
     */
    public function getCompany(): ?CompanyResource
    {
        return $this->company;
    }

    /**
     * @param CompanyResource|null $company
     * @return CalculationResource
     */
    public function setCompany(?CompanyResource $company): CalculationResource
    {
        $this->company = $company;
        return $this;
    }
}
