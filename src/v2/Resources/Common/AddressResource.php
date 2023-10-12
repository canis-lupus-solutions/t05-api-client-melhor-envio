<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

use DateTime;

class AddressResource
{
    protected int $id;
    protected ?string $label = null;
    protected ?string $postalCode = null;
    protected ?string $address = null;
    protected ?string $number = null;
    protected ?string $complement = null;
    protected ?string $district = null;
    protected ?float $latitude = null;
    protected ?float $longitude = null;
    protected ?DateTime $confirmed_at = null;
    protected ?DateTime $created_at = null;
    protected ?DateTime $updated_at = null;
    protected ?CityResource $city = null;


    /**
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
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
     * @return AddressResource
     */
    public function setId(int $id): AddressResource
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $label
     * @return AddressResource
     */
    public function setLabel(?string $label): AddressResource
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $postalCode
     * @return AddressResource
     */
    public function setPostalCode(?string $postalCode): AddressResource
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     * @return AddressResource
     */
    public function setAddress(?string $address): AddressResource
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param string|null $number
     * @return AddressResource
     */
    public function setNumber(?string $number): AddressResource
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }

    /**
     * @param string|null $complement
     * @return AddressResource
     */
    public function setComplement(?string $complement): AddressResource
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param string|null $district
     * @return AddressResource
     */
    public function setDistrict(?string $district): AddressResource
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @param float|null $latitude
     * @return AddressResource
     */
    public function setLatitude(?float $latitude): AddressResource
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * @param float|null $longitude
     * @return AddressResource
     */
    public function setLongitude(?float $longitude): AddressResource
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getConfirmedAt(): ?DateTime
    {
        return $this->confirmed_at;
    }

    /**
     * @param DateTime|null $confirmed_at
     * @return AddressResource
     */
    public function setConfirmedAt(?DateTime $confirmed_at): AddressResource
    {
        $this->confirmed_at = $confirmed_at;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getCreatedAt(): ?DateTime
    {
        return $this->created_at;
    }

    /**
     * @param DateTime|null $created_at
     * @return AddressResource
     */
    public function setCreatedAt(?DateTime $created_at): AddressResource
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updated_at;
    }

    /**
     * @param DateTime|null $updated_at
     * @return AddressResource
     */
    public function setUpdatedAt(?DateTime $updated_at): AddressResource
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return CityResource|null
     */
    public function getCity(): ?CityResource
    {
        return $this->city;
    }

    /**
     * @param CityResource|null $city
     * @return AddressResource
     */
    public function setCity(?CityResource $city): AddressResource
    {
        $this->city = $city;
        return $this;
    }
}
