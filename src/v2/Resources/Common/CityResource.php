<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class CityResource
{
    protected int $id;
    protected string $city;
    protected ?StateResource $state = null;


    /**
     * @param int $id
     * @param string $city
     */
    public function __construct(int $id, string $city)
    {
        $this->id = $id;
        $this->city = $city;
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
     * @return CityResource
     */
    public function setId(int $id): CityResource
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return CityResource
     */
    public function setCity(string $city): CityResource
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return StateResource|null
     */
    public function getState(): ?StateResource
    {
        return $this->state;
    }

    /**
     * @param StateResource|null $state
     * @return CityResource
     */
    public function setState(?StateResource $state): CityResource
    {
        $this->state = $state;
        return $this;
    }
}
