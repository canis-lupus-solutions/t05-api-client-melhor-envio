<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2;

use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\ShipmentHandler;

class MelhorEnvioApiClient
{
    public ShipmentHandler $shipment;


    /**
     * @param MelhorEnvioApiConfig $config
     */
    public function __construct(
        MelhorEnvioApiConfig $config
    )
    {
        $this->shipment = new ShipmentHandler($config);
    }
}
