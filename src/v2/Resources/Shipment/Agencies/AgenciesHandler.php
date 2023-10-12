<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Agencies;

use CanisLupus\ApiClients\MelhorEnvio\v2\Enums\MethodEnum;
use CanisLupus\ApiClients\MelhorEnvio\v2\Exceptions\MelhorEnvioApiException;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiConfig;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiHandler;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\AddressResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\CityResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\CountryResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\PhoneResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\StateResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies\CompaniesHandler;
use DateTime;
use Exception;

class AgenciesHandler extends MelhorEnvioApiHandler
{
    /**
     * @param MelhorEnvioApiConfig $config
     */
    public function __construct(
        MelhorEnvioApiConfig $config
    )
    {
        parent::__construct($config);
    }


    /* ACTIONS */

    /**
     * @param array|null $filters
     * @return array
     * @throws MelhorEnvioApiException
     * @throws Exception
     */
    public function list(array $filters = null): array
    {
        $queryString = '';
        if ($filters) {
            $queryString = '?';
            foreach ($filters as $field => $value) {
                $queryString .= $field . '=' . $value . '&';
            }
        }
        $queryString = rtrim($queryString, '&');

        $result = $this->call(MethodEnum::GET, 'shipment/agencies' . $queryString);

        $agencies = [];
        foreach ($result as $agencyData) {
            $agencies[] = $this->hidrateResource($agencyData);
        }

        return $agencies;
    }

    /**
     * @param int $agencyId
     *
     * @return AgencyResource|null
     * @throws MelhorEnvioApiException
     * @throws Exception
     */
    public function view(int $agencyId): ?AgencyResource
    {
        $result = $this->call(MethodEnum::GET, 'shipment/agencies/' . $agencyId);

        if ($result) {
            return $this->hidrateResource($result);
        }

        return null;
    }


    /* SUPPORT METHODS */

    /**
     * @param array $data
     * @return AgencyResource
     * @throws Exception
     */
    public static function hidrateResource(array $data): AgencyResource
    {
        $object = new AgencyResource($data['id'], $data['name']);
        $object->setInitials($data['initials']);
        $object->setCode($data['code']);
        $object->setCompanyName($data['company_name']);
        $object->setStatus($data['status']);
        $object->setEmail($data['email']);
        $object->setNote($data['note']);
        $object->setType($data['type']);
        $object->setOwnership($data['ownership']);

        if (isset($data['address'])) {
            $addressData = $data['address'];
            $address = new AddressResource($addressData['id']);
            $address->setLabel($addressData['label']);
            $address->setPostalCode($addressData['postal_code']);
            $address->setAddress($addressData['address']);
            $address->setNumber($addressData['number']);
            $address->setComplement($addressData['complement']);
            $address->setDistrict($addressData['district']);
            $address->setLatitude($addressData['latitude']);
            $address->setLongitude($addressData['longitude']);
            $address->setConfirmedAt($addressData['confirmed_at'] ? new DateTime($addressData['confirmed_at']) : null);
            $address->setCreatedAt($addressData['created_at'] ? new DateTime($addressData['created_at']) : null);
            $address->setUpdatedAt($addressData['updated_at'] ? new DateTime($addressData['updated_at']) : null);

            if (isset($addressData['city'])) {
                $cityData = $addressData['city'];
                $city = new CityResource($cityData['id'], $cityData['city']);

                if (isset($cityData['state'])) {
                    $stateData = $cityData['state'];
                    $state = new StateResource($stateData['id'], $stateData['state'], $stateData['state_abbr']);

                    if (isset($stateData['country'])) {
                        $countryData = $stateData['country'];
                        $country = new CountryResource($countryData['id'], $countryData['country']);

                        $state->setCountry($country);
                    }

                    $city->setState($state);
                }

                $address->setCity($city);
            }

            $object->setAddress($address);
        }

        if (isset($data['phone'])) {
            $phoneData = $data['phone'];
            $phone = new PhoneResource($phoneData['id']);
            $phone->setLabel($phoneData['label']);
            $phone->setPhone($phoneData['phone']);
            $phone->setType($phoneData['type']);
            $phone->setCountryId($phoneData['country_id']);
            $phone->setConfirmedAt($phoneData['confirmed_at'] ? new DateTime($phoneData['confirmed_at']) : null);
            $phone->setCreatedAt($phoneData['created_at'] ? new DateTime($phoneData['created_at']) : null);
            $phone->setUpdatedAt($phoneData['updated_at'] ? new DateTime($phoneData['updated_at']) : null);

            $object->setPhone($phone);
        }

        if (isset($data['companies'])) {
            $companies = [];
            foreach ($data['companies'] as $companyData) {
                $companies[] = CompaniesHandler::hidrateResource($companyData);
            }
            $object->setCompanies($companies);
        }

        return $object;
    }
}
