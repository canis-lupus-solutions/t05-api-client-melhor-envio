<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

use DateTime;

class PhoneResource
{
    protected int $id;
    protected ?string $label = null;
    protected ?string $phone = null;
    protected ?string $type = null;
    protected ?string $country_id = null;
    protected ?DateTime $confirmed_at = null;
    protected ?DateTime $created_at = null;
    protected ?DateTime $updated_at = null;


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
     * @return PhoneResource
     */
    public function setId(int $id): PhoneResource
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
     * @return PhoneResource
     */
    public function setLabel(?string $label): PhoneResource
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return PhoneResource
     */
    public function setPhone(?string $phone): PhoneResource
    {
        $this->phone = $phone;
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
     * @return PhoneResource
     */
    public function setType(?string $type): PhoneResource
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->country_id;
    }

    /**
     * @param string|null $country_id
     * @return PhoneResource
     */
    public function setCountryId(?string $country_id): PhoneResource
    {
        $this->country_id = $country_id;
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
     * @return PhoneResource
     */
    public function setConfirmedAt(?DateTime $confirmed_at): PhoneResource
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
     * @return PhoneResource
     */
    public function setCreatedAt(?DateTime $created_at): PhoneResource
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
     * @return PhoneResource
     */
    public function setUpdatedAt(?DateTime $updated_at): PhoneResource
    {
        $this->updated_at = $updated_at;
        return $this;
    }
}
