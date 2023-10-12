<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class StateResource
{
    protected int $id;
    protected string $state;
    protected string $stateAbbr;
    protected ?CountryResource $country = null;


    /**
     * @param int $id
     * @param string $state
     * @param string $stateAbbr
     */
    public function __construct(int $id, string $state, string $stateAbbr)
    {
        $this->id = $id;
        $this->state = $state;
        $this->stateAbbr = $stateAbbr;
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
     * @return StateResource
     */
    public function setId(int $id): StateResource
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return StateResource
     */
    public function setState(string $state): StateResource
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateAbbr(): string
    {
        return $this->stateAbbr;
    }

    /**
     * @param string $stateAbbr
     * @return StateResource
     */
    public function setStateAbbr(string $stateAbbr): StateResource
    {
        $this->stateAbbr = $stateAbbr;
        return $this;
    }

    /**
     * @return CountryResource|null
     */
    public function getCountry(): ?CountryResource
    {
        return $this->country;
    }

    /**
     * @param CountryResource|null $country
     * @return StateResource
     */
    public function setCountry(?CountryResource $country): StateResource
    {
        $this->country = $country;
        return $this;
    }
}
