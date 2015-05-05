<?php

namespace MXZ\PCGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XP
 */
class XP
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $xp;

    /**
     * @var boolean
     */
    private $feats;

    /**
     * @var boolean
     */
    private $abilityScores;


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
     * Set xp
     *
     * @param integer $xp
     * @return XP
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp
     *
     * @return integer
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set feats
     *
     * @param boolean $feats
     * @return XP
     */
    public function setFeats($feats)
    {
        $this->feats = $feats;

        return $this;
    }

    /**
     * Get feats
     *
     * @return boolean
     */
    public function getFeats()
    {
        return $this->feats;
    }

    /**
     * Set abilityScores
     *
     * @param boolean $abilityScores
     * @return XP
     */
    public function setAbilityScores($abilityScores)
    {
        $this->abilityScores = $abilityScores;

        return $this;
    }

    /**
     * Get abilityScores
     *
     * @return boolean
     */
    public function getAbilityScores()
    {
        return $this->abilityScores;
    }
}
