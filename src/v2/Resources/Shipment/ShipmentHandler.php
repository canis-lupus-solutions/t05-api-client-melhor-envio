<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment;

use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiConfig;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies\CompaniesHandler;

class ShipmentHandler
{
    public CompaniesHandler $companies;


    /**
     * @param MelhorEnvioApiConfig $config
     */
    public function __construct(
        MelhorEnvioApiConfig $config
    )
    {
        $this->companies = new CompaniesHandler($config);
    }
}
