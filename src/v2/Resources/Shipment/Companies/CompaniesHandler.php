<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies;

use CanisLupus\ApiClients\MelhorEnvio\v2\Enums\MethodEnum;
use CanisLupus\ApiClients\MelhorEnvio\v2\Exceptions\MelhorEnvioApiException;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiConfig;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiHandler;

class CompaniesHandler extends MelhorEnvioApiHandler
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
     * @return CompanyResource[]
     * @throws MelhorEnvioApiException
     */
    public function list(): array
    {
        $result = $this->call(MethodEnum::GET, 'shipment/companies');

        $companies = [];
        foreach ($result as $companyData) {
            $companies[] = $this->hidrateResource($companyData);
        }

        return $companies;
    }

    /**
     * @param $companyId
     *
     * @return CompanyResource|null
     * @throws MelhorEnvioApiException
     */
    public function view($companyId): ?CompanyResource
    {
        $result = $this->call(MethodEnum::GET, 'shipment/companies/'.$companyId);

        if(count($result) > 0){
            return $this->hidrateResource($result[0]);
        }

        return null;
    }


    /* SUPPORT METHODS */

    public function hidrateResource(array $data): CompanyResource
    {
        $object = new CompanyResource($data['id'], $data['name']);
        $object->setPicture($data['picture']);

        return $object;
    }
}
