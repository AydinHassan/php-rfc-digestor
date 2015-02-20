<?php

namespace MikeyMike\RfcDigestor\Entity;

/**
 * Class Rfc
 *
 * @package MikeyMike\RfcDigestor
 * @author  Michael Woodward <mikeymike.mw@gmail.com>
 */
class Rfc
{
    /**
     * @var array
     */
    protected $details = [];

    /**
     * @var array
     */
    protected $changeLog = [];

    /**
     * @var array
     */
    protected $votes = [];

    /**
     * @var string
     */
    protected $voteDescription = '';

    /**
     * @param array $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @return array
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param array $changLog
     */
    public function setChangeLog($changLog)
    {
        $this->changeLog = $changLog;
    }

    /**
     * @return array
     */
    public function getChangeLog()
    {
        return $this->changeLog;
    }

    /**
     * @param array $votes
     */
    public function setVotes($votes)
    {
        // TODO: Validation on vote structure 
        $this->votes = $votes;
    }

    /**
     * @return array
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @param string $description
     */
    public function setVoteDescription($description)
    {
        $this->voteDescription = $description;
    }

    /**
     * @return string
     */
    public function getVoteDescription()
    {
        return $this->voteDescription;
    }
}