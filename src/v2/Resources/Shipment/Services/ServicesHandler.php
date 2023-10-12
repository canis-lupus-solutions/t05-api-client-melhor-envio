<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Services;

use CanisLupus\ApiClients\MelhorEnvio\v2\Enums\MethodEnum;
use CanisLupus\ApiClients\MelhorEnvio\v2\Exceptions\MelhorEnvioApiException;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiConfig;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiHandler;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\BoxResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\DiameterResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\FormatResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\HeightResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\LengthResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\LetterResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\RollResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\WeightResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\WidthResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies\CompaniesHandler;

class ServicesHandler extends MelhorEnvioApiHandler
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
     * @return ServiceResource[]
     * @throws MelhorEnvioApiException
     */
    public function list(): array
    {
        $result = $this->call(MethodEnum::GET, 'shipment/services');

        $services = [];
        foreach ($result as $serviceData) {
            $services[] = $this->hidrateResource($serviceData);
        }

        return $services;
    }

    /**
     * @param int $serviceId
     *
     * @return ServiceResource|null
     * @throws MelhorEnvioApiException
     */
    public function view(int $serviceId): ?ServiceResource
    {
        $result = $this->call(MethodEnum::GET, 'shipment/services/' . $serviceId);

        if ($result) {
            return $this->hidrateResource($result);
        }

        return null;
    }


    /* SUPPORT METHODS */

    public static function hidrateResource(array $data): ServiceResource
    {
        $object = new ServiceResource($data['id'], $data['name']);
        $object->setStatus($data['status'] ?? null);
        $object->setType($data['type'] ?? null);
        $object->setRange($data['range'] ?? null);
        $object->setRequirements($data['requirements'] ?? []);
        $object->setOptionals($data['optionals'] ?? []);

        if (isset($data['restrictions'])) {
            $insuranceValueData = $data['restrictions']['insurance_value'];

            $format = new FormatResource();
            if(isset($data['restrictions']['formats'])){
                $formatsData = $data['restrictions']['formats'];

                if(isset($formatsData['box'])){
                    $box = new BoxResource(
                        new WeightResource($formatsData['box']['weight']['min'], $formatsData['box']['weight']['max']),
                        new WidthResource($formatsData['box']['width']['min'], $formatsData['box']['width']['max']),
                        new HeightResource($formatsData['box']['height']['min'], $formatsData['box']['height']['max']),
                        new LengthResource($formatsData['box']['length']['min'], $formatsData['box']['length']['max']),
                        $formatsData['box']['sum']
                    );

                    $format->setBox($box);
                }

                if(isset($formatsData['roll'])){
                    $roll = new RollResource(
                        new WeightResource($formatsData['roll']['weight']['min'], $formatsData['roll']['weight']['max']),
                        new DiameterResource($formatsData['roll']['diameter']['min'], $formatsData['roll']['diameter']['max']),
                        new LengthResource($formatsData['roll']['length']['min'], $formatsData['roll']['length']['max']),
                        $formatsData['roll']['sum']
                    );

                    $format->setRoll($roll);
                }

                if(isset($formatsData['letter'])){
                    $letter = new LetterResource(
                        new WeightResource($formatsData['letter']['weight']['min'], $formatsData['letter']['weight']['max']),
                        new WidthResource($formatsData['letter']['width']['min'], $formatsData['letter']['width']['max']),
                        new LengthResource($formatsData['letter']['length']['min'], $formatsData['letter']['length']['max'])
                    );

                    $format->setLetter($letter);
                }
            }

            $restriction = new RestrictionResource(
                new InsuranceValueResource($insuranceValueData['min'], $insuranceValueData['max'], $insuranceValueData['max_dec']),
                $format,
            );

            $object->setRestrictions($restriction);
        }

        if (isset($data['company'])) {
            $object->setCompany(CompaniesHandler::hidrateResource($data['company']));
        }

        return $object;
    }
}
