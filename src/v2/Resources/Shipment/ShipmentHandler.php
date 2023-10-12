<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment;

use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiConfig;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies\CompaniesHandler;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Services\ServicesHandler;

class ShipmentHandler
{
    public CompaniesHandler $companies;
    public ServicesHandler $services;


    /**
     * @param MelhorEnvioApiConfig $config
     */
    public function __construct(
        MelhorEnvioApiConfig $config
    )
    {
        $this->companies = new CompaniesHandler($config);
        $this->services = new ServicesHandler($config);
    }
}
