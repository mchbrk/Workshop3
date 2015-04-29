<?php

namespace MXZ\PCGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Barbarian
 */
class Barbarian
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $bAB;

    /**
     * @var integer
     */
    private $dice;

    /**
     * @var integer
     */
    private $fort;

    /**
     * @var integer
     */
    private $ref;

    /**
     * @var integer
     */
    private $will;

    /**
     * @var string
     */
    private $special;


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
     * Set bAB
     *
     * @param integer $bAB
     * @return Barbarian
     */
    public function setBAB($bAB)
    {
        $this->bAB = $bAB;

        return $this;
    }

    /**
     * Get bAB
     *
     * @return integer 
     */
    public function getBAB()
    {
        return $this->bAB;
    }

    /**
     * Set fort
     *
     * @param integer $fort
     * @return Barbarian
     */
    public function setFort($fort)
    {
        $this->fort = $fort;

        return $this;
    }

    /**
     * Get fort
     *
     * @return integer 
     */
    public function getFort()
    {
        return $this->fort;
    }

    /**
     * Set ref
     *
     * @param integer $ref
     * @return Barbarian
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return integer 
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set will
     *
     * @param integer $will
     * @return Barbarian
     */
    public function setWill($will)
    {
        $this->will = $will;

        return $this;
    }

    /**
     * Get will
     *
     * @return integer 
     */
    public function getWill()
    {
        return $this->will;
    }

    /**
     * Set special
     *
     * @param string $special
     * @return Barbarian
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }

    /**
     * Get special
     *
     * @return string 
     */
    public function getSpecial()
    {
        return $this->special;
    }
}
