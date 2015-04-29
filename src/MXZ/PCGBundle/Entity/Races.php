<?php

namespace MXZ\PCGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Races
 */
class Races
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $race;

    /**
     * @var integer
     */
    private $sTR;

    /**
     * @var integer
     */
    private $dEX;

    /**
     * @var integer
     */
    private $cON;

    /**
     * @var integer
     */
    private $iNTe;

    /**
     * @var integer
     */
    private $wIS;

    /**
     * @var integer
     */
    private $cHA;

    /**
     * @var string
     */
    private $traits;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set race
     *
     * @param string $race
     * @return Races
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string 
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set sTR
     *
     * @param integer $sTR
     * @return Races
     */
    public function setSTR($sTR)
    {
        $this->sTR = $sTR;

        return $this;
    }

    /**
     * Get sTR
     *
     * @return integer 
     */
    public function getSTR()
    {
        return $this->sTR;
    }

    /**
     * Set dEX
     *
     * @param integer $dEX
     * @return Races
     */
    public function setDEX($dEX)
    {
        $this->dEX = $dEX;

        return $this;
    }

    /**
     * Get dEX
     *
     * @return integer 
     */
    public function getDEX()
    {
        return $this->dEX;
    }

    /**
     * Set cON
     *
     * @param integer $cON
     * @return Races
     */
    public function setCON($cON)
    {
        $this->cON = $cON;

        return $this;
    }

    /**
     * Get cON
     *
     * @return integer 
     */
    public function getCON()
    {
        return $this->cON;
    }

    /**
     * Set iNTe
     *
     * @param integer $iNTe
     * @return Races
     */
    public function setINTe($iNTe)
    {
        $this->iNTe = $iNTe;

        return $this;
    }

    /**
     * Get iNTe
     *
     * @return integer 
     */
    public function getINTe()
    {
        return $this->iNTe;
    }

    /**
     * Set wIS
     *
     * @param integer $wIS
     * @return Races
     */
    public function setWIS($wIS)
    {
        $this->wIS = $wIS;

        return $this;
    }

    /**
     * Get wIS
     *
     * @return integer 
     */
    public function getWIS()
    {
        return $this->wIS;
    }

    /**
     * Set cHA
     *
     * @param integer $cHA
     * @return Races
     */
    public function setCHA($cHA)
    {
        $this->cHA = $cHA;

        return $this;
    }

    /**
     * Get cHA
     *
     * @return integer 
     */
    public function getCHA()
    {
        return $this->cHA;
    }

    /**
     * Set traits
     *
     * @param string $traits
     * @return Races
     */
    public function setTraits($traits)
    {
        $this->traits = $traits;

        return $this;
    }

    /**
     * Get traits
     *
     * @return string 
     */
    public function getTraits()
    {
        return $this->traits;
    }
}
