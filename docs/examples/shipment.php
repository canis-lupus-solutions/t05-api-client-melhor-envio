<?php
/**********************************************************************************************************************/
/* THIS IS AN EXAMPLE FILE                                                                                            */
/**********************************************************************************************************************/
declare(strict_types=1);

use CanisLupus\ApiClients\MelhorEnvio\v2\Exceptions\MelhorEnvioApiException;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiClient;
use CanisLupus\ApiClients\MelhorEnvio\v2\Enums\EnvironmentEnum;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiConfig;

require('../../vendor/autoload.php');

$appName = 'Canis Lupus';
$appSupportEmail = 'leoaguiarpereira@gmail.com';
$token = '#TOKEN#';

$clientMelhorEnvio = new MelhorEnvioApiClient(
    new MelhorEnvioApiConfig(EnvironmentEnum::Sandbox, $appName, $appSupportEmail, $token)
);

try {
    /*********************************************************/
    /* SHIPMENT - CALCULATE                                  */
    /*********************************************************/

    // Cálculo de Fretes
    /*
    $fretes = $clientMelhorEnvio->shipment->calculate([
        'from' => ['postal_code' => "36085400"],
        'to' => ['postal_code' => "36025007"],
        'products' => [
            [
                'id' => 1,
                'width' => 10,
                'height' => 10,
                'length' => 10,
                'weight' => 1,
                'insurance_value' => 200,
                'quantity' => 1
            ]
        ]
    ]);

    $fretesComValor = [];
    foreach ($fretes as $frete) {
        if ($frete->getError()) continue;

        $fretesComValor[] = [
            'empresa' => $frete->getCompany()->getName(),
            'servico' => $frete->getServiceName(),
            'preco' => $frete->getPrice(),
            'prazoEntrega' => $frete->getDeliveryTime() . ' dias úteis'
        ];
    }
    echo "<pre>";
    var_dump($fretesComValor);
    echo "</pre>";
    die;
    */


    /*********************************************************/
    /* SHIPMENT - COMPANIES                                  */
    /*********************************************************/

    // Listar Transportadoras
    /*
    $transportadoras = $clientMelhorEnvio->shipment->companies->list();

    echo "<pre>";
    var_dump($transportadoras);
    echo "</pre>";
    die;
    */

    // Listar Informações de uma Transportadora
    /*
    $transportadora = $clientMelhorEnvio->shipment->companies->view(1);

    echo "<pre>";
    var_dump($transportadora);
    echo "</pre>";
    die;
    */


    /*********************************************************/
    /* SHIPMENT - SERVICES                                   */
    /*********************************************************/

    // Listar Serviços
    /*
    $servicos = $clientMelhorEnvio->shipment->services->list();

    echo "<pre>";
    var_dump($servicos);
    echo "</pre>";
    die;
    */


    // Listar Informações de um Serviço
    /*
    $servico = $clientMelhorEnvio->shipment->services->view(1);

    echo "<pre>";
    var_dump($servico);
    echo "</pre>";
    die;
    */


    /*********************************************************/
    /* SHIPMENT - AGENCIES                                   */
    /*********************************************************/

    // Listar Agências
    /*
    //$agencias = $clientMelhorEnvio->shipment->agencies->list();
    $agenciasJadLogEmSaoPaulo = $clientMelhorEnvio->shipment->agencies->list([
        'company' => 2,
        'state' => 'SP',
    ]);

    echo "<pre>";
    var_dump($agenciasJadLogEmSaoPaulo);
    echo "</pre>";
    die;
    */


    // Listar Informações de uma Agência
    /*
    $agencia = $clientMelhorEnvio->shipment->agencies->view(1);

    echo "<pre>";
    var_dump($agencia);
    echo "</pre>";
    die;
    */


} catch (MelhorEnvioApiException $e) {
    die($e->getMessage());
}
