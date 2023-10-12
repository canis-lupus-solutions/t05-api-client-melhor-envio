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
    $transportadoras = $clientMelhorEnvio->shipment->companies->list();

    echo "<pre>";
    var_dump($transportadoras);
    echo "</pre>";
    die;
    */

    // Listar Informações de uma Agência
    /*
    $transportadora = $clientMelhorEnvio->shipment->companies->view(1);

    echo "<pre>";
    var_dump($transportadora);
    echo "</pre>";
    die;
    */


} catch (MelhorEnvioApiException $e) {
    die($e->getMessage());
}
