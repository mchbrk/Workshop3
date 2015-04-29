<?php

namespace MXZ\PCGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbilityScores
 */
class AbilityScores
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $modifier;


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
     * Set modifier
     *
     * @param integer $modifier
     * @return AbilityScores
     */
    public function setModifier($modifier)
    {
        $this->modifier = $modifier;

        return $this;
    }

    /**
     * Get modifier
     *
     * @return integer 
     */
    public function getModifier()
    {
        return $this->modifier;
    }
}
