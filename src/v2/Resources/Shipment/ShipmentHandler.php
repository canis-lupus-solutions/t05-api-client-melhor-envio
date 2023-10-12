<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment;

use CanisLupus\ApiClients\MelhorEnvio\v2\Exceptions\MelhorEnvioApiException;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiConfig;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Agencies\AgenciesHandler;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Calculate\CalculateHandler;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Calculate\CalculationResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies\CompaniesHandler;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Services\ServicesHandler;

class ShipmentHandler
{
    public CalculateHandler $calculate;
    public CompaniesHandler $companies;
    public ServicesHandler $services;
    public AgenciesHandler $agencies;


    /**
     * @param MelhorEnvioApiConfig $config
     */
    public function __construct(
        MelhorEnvioApiConfig $config
    )
    {
        $this->calculate = new CalculateHandler($config);
        $this->companies = new CompaniesHandler($config);
        $this->services = new ServicesHandler($config);
        $this->agencies = new AgenciesHandler($config);
    }


    /**
     * @param array|null $data
     * @return CalculationResource[]
     * @throws MelhorEnvioApiException
     */
    public function calculate(array $data = null): array
    {
        return $this->calculate->post($data);
    }
}
