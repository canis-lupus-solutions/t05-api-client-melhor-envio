<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Calculate;

use CanisLupus\ApiClients\MelhorEnvio\v2\Enums\MethodEnum;
use CanisLupus\ApiClients\MelhorEnvio\v2\Exceptions\MelhorEnvioApiException;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiConfig;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiHandler;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\AdditionalServiceResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\CustomDeliveryRangeResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\DeliveryRangeResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\DimensionsResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\PackageResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\ProductResource;
use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Companies\CompaniesHandler;

class CalculateHandler extends MelhorEnvioApiHandler
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
     * @param array|null $data
     * @return CalculationResource[]
     * @throws MelhorEnvioApiException
     */
    public function post(array $data = null): array
    {
        $result = $this->call(MethodEnum::GET, 'shipment/calculate', $data);

        $calculations = [];
        foreach ($result as $calculationData) {
            $calculations[] = $this->hidrateResource($calculationData);
        }

        return $calculations;
    }


    /* SUPPORT METHODS */

    /**
     * @param array $data
     * @return CalculationResource
     */
    public static function hidrateResource(array $data): CalculationResource
    {
        $object = new CalculationResource($data['id'], $data['name']);

        if (isset($data['company'])) {
            $object->setCompany(CompaniesHandler::hidrateResource($data['company']));
        }

        if (isset($data['error'])) {
            $object->setError($data['error']);

            return $object;
        }

        $object->setPrice(isset($data['price']) ? (float)$data['price'] : null);
        $object->setCustomPrice(isset($data['custom_price']) ? (float)$data['custom_price'] : null);
        $object->setDiscount(isset($data['discount']) ? (float)$data['discount'] : null);
        $object->setCurrency($data['currency']);
        $object->setDeliveryTime($data['delivery_time']);
        $object->setDeliveryRange(
            new DeliveryRangeResource($data['delivery_range']['min'], $data['delivery_range']['max'])
        );
        $object->setCustomDeliveryTime($data['custom_delivery_time']);
        $object->setCustomDeliveryRange(
            new CustomDeliveryRangeResource($data['custom_delivery_range']['min'], $data['custom_delivery_range']['max'])
        );

        if (isset($data['packages'])) {
            $packages = [];
            foreach ($data['packages'] as $packageData) {
                $package = new PackageResource();
                $package->setPrice(isset($packageData['price']) ? (float)$packageData['price'] : null);
                $package->setDiscount(isset($packageData['discount']) ? (float)$packageData['discount'] : null);
                $package->setFormat($packageData['format']);
                $package->setWeight(isset($packageData['weight']) ? (float)$packageData['weight'] : null);
                $package->setInsuranceValue((float)$packageData['insurance_value']);

                if (isset($packageData['dimensions'])) {
                    $dimensionsData = $packageData['dimensions'];
                    $dimensions = new DimensionsResource(
                        $dimensionsData['height'],
                        $dimensionsData['width'],
                        $dimensionsData['length']
                    );

                    $package->setDimensions($dimensions);
                }

                if (isset($packageData['products'])) {
                    $products = [];
                    foreach ($packageData['products'] as $productData) {
                        $products[] = new ProductResource($productData['id'], $productData['quantity']);
                    }
                    $package->setProducts($products);
                }

                $packages[] = $package;
            }
            $object->setPackages($packages);
        }

        if (isset($data['additional_services'])) {
            $additionalServicesData = $data['additional_services'];
            $additionalServices = new AdditionalServiceResource();
            $additionalServices->setReceipt($additionalServicesData['receipt']);
            $additionalServices->setOwnHand($additionalServicesData['own_hand']);
            $additionalServices->setCollect($additionalServicesData['collect']);

            $object->setAdditionalServices($additionalServices);
        }

        return $object;
    }
}
