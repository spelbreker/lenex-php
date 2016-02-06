<?php
/**
 * @author Leon Verschuren <lverschuren@hotmail.com>
 */

namespace leonverschuren\Lenex\Model;

use DateTime;

class Qualify
{
    /** @var string */
    protected $conversion;

    /** @var DateTime */
    protected $from;

    /** @var int */
    protected $percent;

    /** @var DateTime */
    protected $until;

    /**
     * @return string
     */
    public function getConversion()
    {
        return $this->conversion;
    }

    /**
     * @param string $conversion
     * @return $this
     */
    public function setConversion($conversion)
    {
        $this->conversion = $conversion;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param DateTime $from
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return int
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param int $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @param DateTime $until
     * @return $this
     */
    public function setUntil($until)
    {
        $this->until = $until;

        return $this;
    }
}
