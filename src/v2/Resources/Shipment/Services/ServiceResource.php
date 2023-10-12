<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Services;

use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies\CompanyResource;

class ServiceResource
{
    protected int $id;
    protected string $name;
    protected ?string $status = null;
    protected ?string $type = null;
    protected ?string $range = null;
    protected ?RestrictionResource $restrictions = null;
    protected array $requirements = [];
    protected array $optionals = [];
    protected ?CompanyResource $company = null;


    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }


    /* GETTERS/SETTERS */

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ServiceResource
     */
    public function setId(int $id): ServiceResource
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ServiceResource
     */
    public function setName(string $name): ServiceResource
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return ServiceResource
     */
    public function setStatus(?string $status): ServiceResource
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return ServiceResource
     */
    public function setType(?string $type): ServiceResource
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRange(): ?string
    {
        return $this->range;
    }

    /**
     * @param string|null $range
     * @return ServiceResource
     */
    public function setRange(?string $range): ServiceResource
    {
        $this->range = $range;
        return $this;
    }

    /**
     * @return RestrictionResource|null
     */
    public function getRestrictions(): ?RestrictionResource
    {
        return $this->restrictions;
    }

    /**
     * @param RestrictionResource|null $restrictions
     * @return ServiceResource
     */
    public function setRestrictions(?RestrictionResource $restrictions): ServiceResource
    {
        $this->restrictions = $restrictions;
        return $this;
    }

    /**
     * @return array
     */
    public function getRequirements(): array
    {
        return $this->requirements;
    }

    /**
     * @param array $requirements
     * @return ServiceResource
     */
    public function setRequirements(array $requirements): ServiceResource
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * @return array
     */
    public function getOptionals(): array
    {
        return $this->optionals;
    }

    /**
     * @param array $optionals
     * @return ServiceResource
     */
    public function setOptionals(array $optionals): ServiceResource
    {
        $this->optionals = $optionals;
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
     * @return ServiceResource
     */
    public function setCompany(?CompanyResource $company): ServiceResource
    {
        $this->company = $company;
        return $this;
    }
}
