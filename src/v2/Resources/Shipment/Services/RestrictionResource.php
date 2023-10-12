<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Shipment\Services;

use CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common\FormatResource;

class RestrictionResource
{
    protected InsuranceValueResource $insuranceValue;
    protected FormatResource $formats;


    /**
     * @param InsuranceValueResource $insuranceValue
     * @param FormatResource $formats
     */
    public function __construct(InsuranceValueResource $insuranceValue, FormatResource $formats)
    {
        $this->insuranceValue = $insuranceValue;
        $this->formats = $formats;
    }


    /* GETTERS/SETTERS */

    /**
     * @return InsuranceValueResource
     */
    public function getInsuranceValue(): InsuranceValueResource
    {
        return $this->insuranceValue;
    }

    /**
     * @param InsuranceValueResource $insuranceValue
     * @return RestrictionResource
     */
    public function setInsuranceValue(InsuranceValueResource $insuranceValue): RestrictionResource
    {
        $this->insuranceValue = $insuranceValue;
        return $this;
    }

    /**
     * @return FormatResource
     */
    public function getFormats(): FormatResource
    {
        return $this->formats;
    }

    /**
     * @param FormatResource $formats
     * @return RestrictionResource
     */
    public function setFormats(FormatResource $formats): RestrictionResource
    {
        $this->formats = $formats;
        return $this;
    }
}
