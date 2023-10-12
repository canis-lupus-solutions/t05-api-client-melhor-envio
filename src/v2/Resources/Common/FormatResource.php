<?php
declare(strict_types=1);

namespace CanisLupus\ApiClients\MelhorEnvio\v2\Resources\Common;

class FormatResource
{
    protected ?BoxResource $box = null;
    protected ?RollResource $roll = null;
    protected ?LetterResource $letter = null;


    /* GETTERS/SETTERS */

    /**
     * @return BoxResource|null
     */
    public function getBox(): ?BoxResource
    {
        return $this->box;
    }

    /**
     * @param BoxResource|null $box
     * @return FormatResource
     */
    public function setBox(?BoxResource $box): FormatResource
    {
        $this->box = $box;
        return $this;
    }

    /**
     * @return RollResource|null
     */
    public function getRoll(): ?RollResource
    {
        return $this->roll;
    }

    /**
     * @param RollResource|null $roll
     * @return FormatResource
     */
    public function setRoll(?RollResource $roll): FormatResource
    {
        $this->roll = $roll;
        return $this;
    }

    /**
     * @return LetterResource|null
     */
    public function getLetter(): ?LetterResource
    {
        return $this->letter;
    }

    /**
     * @param LetterResource|null $letter
     * @return FormatResource
     */
    public function setLetter(?LetterResource $letter): FormatResource
    {
        $this->letter = $letter;
        return $this;
    }
}
