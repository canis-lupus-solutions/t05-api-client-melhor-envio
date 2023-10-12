<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2;

use DateTime;
use Exception;

class MelhorEnvioApiCommon
{
    /**
     * @param $dateString
     *
     * @return DateTime
     * @throws Exception
     */
    public static function dateTimeConverter($dateString): DateTime
    {
        $dateStringParts = explode('/', $dateString);

        return new DateTime($dateStringParts[2] . '-' . $dateStringParts[1] . '-' . $dateStringParts[0]);
    }
}
