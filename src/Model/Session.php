<?php
/**
 * @author Leon Verschuren <lverschuren@hotmail.com>
 */

namespace leonverschuren\Lenex\Model;

use DateTime;

class Session
{
    /** @var string */
    protected $course;

    /** @var DateTime */
    protected $date;

    /** @var DateTime */
    protected $daytime;

    /** @var DateTime */
    protected $endTime;

    /** @var Event[] */
    protected $events;

    /** @var Fee[] */
    protected $fees;

    /** @var Judge[] */
    protected $judges;

    /** @var int */
    protected $maxEntriesAthlete;

    /** @var int */
    protected $maxEntriesRelay;

    /** @var string */
    protected $name;

    /** @var int */
    protected $number;

    /** @var DateTime */
    protected $officialMeeting;

    /** @var Pool */
    protected $pool;

    /** @var string */
    protected $remarksJudge;

    /** @var DateTime */
    protected $teamLeaderMeeting;

    /** @var string */
    protected $timing;

    /** @var DateTime */
    protected $warmUpFrom;

    /** @var DateTime */
    protected $warmUpUntil;

    /**
     * @return string
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param string $course
     * @return $this
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDaytime()
    {
        return $this->daytime;
    }

    /**
     * @param DateTime $daytime
     * @return $this
     */
    public function setDaytime($daytime)
    {
        $this->daytime = $daytime;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param DateTime $endTime
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return Event[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param Event[] $events
     * @return $this
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * @return Fee[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @param Fee[] $fees
     * @return $this
     */
    public function setFees($fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * @return Judge[]
     */
    public function getJudges()
    {
        return $this->judges;
    }

    /**
     * @param Judge[] $judges
     * @return $this
     */
    public function setJudges($judges)
    {
        $this->judges = $judges;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxEntriesAthlete()
    {
        return $this->maxEntriesAthlete;
    }

    /**
     * @param int $maxEntriesAthlete
     * @return $this
     */
    public function setMaxEntriesAthlete($maxEntriesAthlete)
    {
        $this->maxEntriesAthlete = $maxEntriesAthlete;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxEntriesRelay()
    {
        return $this->maxEntriesRelay;
    }

    /**
     * @param int $maxEntriesRelay
     * @return $this
     */
    public function setMaxEntriesRelay($maxEntriesRelay)
    {
        $this->maxEntriesRelay = $maxEntriesRelay;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getOfficialMeeting()
    {
        return $this->officialMeeting;
    }

    /**
     * @param DateTime $officialMeeting
     * @return $this
     */
    public function setOfficialMeeting($officialMeeting)
    {
        $this->officialMeeting = $officialMeeting;

        return $this;
    }

    /**
     * @return Pool
     */
    public function getPool()
    {
        return $this->pool;
    }

    /**
     * @param Pool $pool
     * @return $this
     */
    public function setPool($pool)
    {
        $this->pool = $pool;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemarksJudge()
    {
        return $this->remarksJudge;
    }

    /**
     * @param string $remarksJudge
     * @return $this
     */
    public function setRemarksJudge($remarksJudge)
    {
        $this->remarksJudge = $remarksJudge;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getTeamLeaderMeeting()
    {
        return $this->teamLeaderMeeting;
    }

    /**
     * @param DateTime $teamLeaderMeeting
     * @return $this
     */
    public function setTeamLeaderMeeting($teamLeaderMeeting)
    {
        $this->teamLeaderMeeting = $teamLeaderMeeting;

        return $this;
    }

    /**
     * @return string
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * @param string $timing
     * @return $this
     */
    public function setTiming($timing)
    {
        $this->timing = $timing;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getWarmUpFrom()
    {
        return $this->warmUpFrom;
    }

    /**
     * @param DateTime $warmUpFrom
     * @return $this
     */
    public function setWarmUpFrom($warmUpFrom)
    {
        $this->warmUpFrom = $warmUpFrom;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getWarmUpUntil()
    {
        return $this->warmUpUntil;
    }

    /**
     * @param DateTime $warmUpUntil
     * @return $this
     */
    public function setWarmUpUntil($warmUpUntil)
    {
        $this->warmUpUntil = $warmUpUntil;

        return $this;
    }
}
