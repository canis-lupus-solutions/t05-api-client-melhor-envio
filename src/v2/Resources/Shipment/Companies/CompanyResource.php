<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies;

class CompanyResource
{
    protected int $id;
    protected string $name;
    protected ?string $picture = null;
    protected array $services = [];


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
     * @return CompanyResource
     */
    public function setId(int $id): CompanyResource
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
     * @return CompanyResource
     */
    public function setName(string $name): CompanyResource
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPicture(): ?string
    {
        return $this->picture;
    }

    /**
     * @param string|null $picture
     * @return CompanyResource
     */
    public function setPicture(?string $picture): CompanyResource
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return array
     */
    public function getServices(): array
    {
        return $this->services;
    }

    /**
     * @param array $services
     * @return CompanyResource
     */
    public function setServices(array $services): CompanyResource
    {
        $this->services = $services;
        return $this;
    }
}
