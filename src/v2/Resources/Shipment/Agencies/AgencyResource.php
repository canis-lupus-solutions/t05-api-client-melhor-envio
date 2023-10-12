<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Agencies;

use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\AddressResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\PhoneResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies\CompanyResource;

class AgencyResource
{
    protected int $id;
    protected string $name;
    protected ?string $initials = null;
    protected ?string $code = null;
    protected ?string $company_name = null;
    protected ?string $status = null;
    protected ?string $email = null;
    protected ?string $note = null;
    protected ?string $type = null;
    protected ?string $ownership = null;
    protected ?AddressResource $address = null;
    protected ?PhoneResource $phone = null;

    /**
     * @var CompanyResource[]
     */
    protected array $companies = [];


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
     * @return AgencyResource
     */
    public function setId(int $id): AgencyResource
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
     * @return AgencyResource
     */
    public function setName(string $name): AgencyResource
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInitials(): ?string
    {
        return $this->initials;
    }

    /**
     * @param string|null $initials
     * @return AgencyResource
     */
    public function setInitials(?string $initials): AgencyResource
    {
        $this->initials = $initials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     * @return AgencyResource
     */
    public function setCode(?string $code): AgencyResource
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->company_name;
    }

    /**
     * @param string|null $company_name
     * @return AgencyResource
     */
    public function setCompanyName(?string $company_name): AgencyResource
    {
        $this->company_name = $company_name;
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
     * @return AgencyResource
     */
    public function setStatus(?string $status): AgencyResource
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return AgencyResource
     */
    public function setEmail(?string $email): AgencyResource
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string|null $note
     * @return AgencyResource
     */
    public function setNote(?string $note): AgencyResource
    {
        $this->note = $note;
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
     * @return AgencyResource
     */
    public function setType(?string $type): AgencyResource
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOwnership(): ?string
    {
        return $this->ownership;
    }

    /**
     * @param string|null $ownership
     * @return AgencyResource
     */
    public function setOwnership(?string $ownership): AgencyResource
    {
        $this->ownership = $ownership;
        return $this;
    }

    /**
     * @return AddressResource|null
     */
    public function getAddress(): ?AddressResource
    {
        return $this->address;
    }

    /**
     * @param AddressResource|null $address
     * @return AgencyResource
     */
    public function setAddress(?AddressResource $address): AgencyResource
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return PhoneResource|null
     */
    public function getPhone(): ?PhoneResource
    {
        return $this->phone;
    }

    /**
     * @param PhoneResource|null $phone
     * @return AgencyResource
     */
    public function setPhone(?PhoneResource $phone): AgencyResource
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return array
     */
    public function getCompanies(): array
    {
        return $this->companies;
    }

    /**
     * @param array $companies
     * @return AgencyResource
     */
    public function setCompanies(array $companies): AgencyResource
    {
        $this->companies = $companies;
        return $this;
    }
}
