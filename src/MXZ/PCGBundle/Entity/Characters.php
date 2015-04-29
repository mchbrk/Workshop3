<?php

namespace MXZ\PCGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Characters
 */
class Characters
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $level;

    /**
     * @var string
     */
    private $alignment;

    /**
     * @var integer
     */
    private $race;

    /**
     * @var string
     */
    private $size;

    /**
     * @var integer
     */
    private $hP;

    /**
     * @var string
     */
    private $dR;

    /**
     * @var integer
     */
    private $initiative;

    /**
     * @var string
     */
    private $skills;

    /**
     * @var string
     */
    private $feats;

    /**
     * @var string
     */
    private $specialAbilities;

    /**
     * @var string
     */
    private $languages;

    /**
     * @var integer
     */
    private $xP;


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
     * Set name
     *
     * @param string $name
     * @return Characters
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return Characters
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set alignment
     *
     * @param string $alignment
     * @return Characters
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;

        return $this;
    }

    /**
     * Get alignment
     *
     * @return string 
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * Set race
     *
     * @param integer $race
     * @return Characters
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return integer 
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return Characters
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set hP
     *
     * @param integer $hP
     * @return Characters
     */
    public function setHP($hP)
    {
        $this->hP = $hP;

        return $this;
    }

    /**
     * Get hP
     *
     * @return integer 
     */
    public function getHP()
    {
        return $this->hP;
    }

    /**
     * Set dR
     *
     * @param string $dR
     * @return Characters
     */
    public function setDR($dR)
    {
        $this->dR = $dR;

        return $this;
    }

    /**
     * Get dR
     *
     * @return string 
     */
    public function getDR()
    {
        return $this->dR;
    }

    /**
     * Set initiative
     *
     * @param integer $initiative
     * @return Characters
     */
    public function setInitiative($initiative)
    {
        $this->initiative = $initiative;

        return $this;
    }

    /**
     * Get initiative
     *
     * @return integer 
     */
    public function getInitiative()
    {
        return $this->initiative;
    }

    /**
     * Set skills
     *
     * @param integer $skills
     * @return Characters
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return integer 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set feats
     *
     * @param string $feats
     * @return Characters
     */
    public function setFeats($feats)
    {
        $this->feats = $feats;

        return $this;
    }

    /**
     * Get feats
     *
     * @return string 
     */
    public function getFeats()
    {
        return $this->feats;
    }

    /**
     * Set specialAbilities
     *
     * @param string $specialAbilities
     * @return Characters
     */
    public function setSpecialAbilities($specialAbilities)
    {
        $this->specialAbilities = $specialAbilities;

        return $this;
    }

    /**
     * Get specialAbilities
     *
     * @return string 
     */
    public function getSpecialAbilities()
    {
        return $this->specialAbilities;
    }

    /**
     * Set languages
     *
     * @param string $languages
     * @return Characters
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return string 
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set xP
     *
     * @param integer $xP
     * @return Characters
     */
    public function setXP($xP)
    {
        $this->xP = $xP;

        return $this;
    }

    /**
     * Get xP
     *
     * @return integer 
     */
    public function getXP()
    {
        return $this->xP;
    }
}
