<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class AdditionalServiceResource
{
    protected bool $receipt = false;
    protected bool $ownHand = false;
    protected bool $collect = false;


    /* GETTERS/SETTERS */

    /**
     * @return bool
     */
    public function isReceipt(): bool
    {
        return $this->receipt;
    }

    /**
     * @param bool $receipt
     * @return AdditionalServiceResource
     */
    public function setReceipt(bool $receipt): AdditionalServiceResource
    {
        $this->receipt = $receipt;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOwnHand(): bool
    {
        return $this->ownHand;
    }

    /**
     * @param bool $ownHand
     * @return AdditionalServiceResource
     */
    public function setOwnHand(bool $ownHand): AdditionalServiceResource
    {
        $this->ownHand = $ownHand;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCollect(): bool
    {
        return $this->collect;
    }

    /**
     * @param bool $collect
     * @return AdditionalServiceResource
     */
    public function setCollect(bool $collect): AdditionalServiceResource
    {
        $this->collect = $collect;
        return $this;
    }
}
