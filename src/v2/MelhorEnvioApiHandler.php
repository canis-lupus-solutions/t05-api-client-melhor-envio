<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2;

use CanisLupus\ApiClients\MelhorEnvio\v2\Enums\EnvironmentEnum;
use CanisLupus\ApiClients\MelhorEnvio\v2\Enums\MethodEnum;
use CanisLupus\ApiClients\MelhorEnvio\v2\Exceptions\MelhorEnvioApiException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;

class MelhorEnvioApiHandler
{
    protected MelhorEnvioApiConfig $config;
    protected string $baseEndpoint;


    /**
     * @param MelhorEnvioApiConfig $config
     */
    public function __construct(
        MelhorEnvioApiConfig $config
    )
    {
        $this->config = $config;

        switch ($config->getEnvironment()) {
            default:
            case EnvironmentEnum::Production:
                $this->baseEndpoint = 'https://melhorenvio.com.br/api/v2/me/';
                break;

            case EnvironmentEnum::Sandbox:
                $this->baseEndpoint = 'https://sandbox.melhorenvio.com.br/api/v2/me/';
                break;
        }
    }


    /**
     * @param MethodEnum $method
     * @param string $endpoint
     * @param array|null $param
     *
     * @return array|null
     * @throws MelhorEnvioApiException
     */
    protected function call(MethodEnum $method, string $endpoint, array $param = null): array
    {
        $endpoint = $this->baseEndpoint . $endpoint;

        try {
            $guzzleClient = new Client();

            $res = $guzzleClient->request($method->value, $endpoint, [
                RequestOptions::JSON => $param,
                RequestOptions::HEADERS => [
                    'User-Agent' => $this->config->getAppName() . ' ' . $this->config->getAppSupportEmail(),
                    'Accept' => 'application/json'
                ]
            ]);

            $result = json_decode((string)$res->getBody(), true);

            if (!$result) {
                return [];
            }

            return $result;

        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $errorData = json_decode((string)$e->getResponse()->getBody(), true);

                $errorMessage = $errorData['message'];

                throw (new MelhorEnvioApiException($errorMessage));

            } else {
                $response = $e->getHandlerContext();

                if (isset($response['error'])) {
                    throw new MelhorEnvioApiException($response['error']);
                } else {
                    throw new MelhorEnvioApiException("An unknow error ocurred calling: $endpoint with method: $method->value");
                }
            }

        } catch (GuzzleException $e) {
            throw new MelhorEnvioApiException($e->getMessage());
        }
    }
}
