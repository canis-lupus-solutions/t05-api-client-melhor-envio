<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class CountryResource
{
    protected string $id;
    protected string $country;


    /**
     * @param string $id
     * @param string $country
     */
    public function __construct(string $id, string $country)
    {
        $this->id = $id;
        $this->country = $country;
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
     * @return CountryResource
     */
    public function setId(string $id): CountryResource
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return CountryResource
     */
    public function setCountry(string $country): CountryResource
    {
        $this->country = $country;
        return $this;
    }
}
