<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2;

use CanisLupus\ApiClients\MelhorEnvio\v2\Enums\EnvironmentEnum;

class MelhorEnvioApiConfig
{
    protected EnvironmentEnum $environment;
    protected string $appName;
    protected string $appSupportEmail;
    protected ?string $token = null;


    /**
     * @param EnvironmentEnum $environment
     * @param string $appName
     * @param string $appSupportEmail
     * @param string|null $token
     */
    public function __construct(
        EnvironmentEnum $environment,
        string          $appName,
        string          $appSupportEmail,
        ?string         $token
    )
    {
        $this->environment = $environment;
        $this->appName = $appName;
        $this->appSupportEmail = $appSupportEmail;
        $this->token = $token;
    }


    /**
     * @return EnvironmentEnum
     */
    public function getEnvironment(): EnvironmentEnum
    {
        return $this->environment;
    }

    /**
     * @param EnvironmentEnum $environment
     */
    public function setEnvironment(EnvironmentEnum $environment): void
    {
        $this->environment = $environment;
    }

    /**
     * @return string
     */
    public function getAppName(): string
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     */
    public function setAppName(string $appName): void
    {
        $this->appName = $appName;
    }

    /**
     * @return string
     */
    public function getAppSupportEmail(): string
    {
        return $this->appSupportEmail;
    }

    /**
     * @param string $appSupportEmail
     */
    public function setAppSupportEmail(string $appSupportEmail): void
    {
        $this->appSupportEmail = $appSupportEmail;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }
}
