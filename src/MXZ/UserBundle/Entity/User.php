<?php
namespace MXZ\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


class User extends BaseUser
{
    protected $id;

    private $campaign;

    /**
     * @return ArrayCollection
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * @param ArrayCollection $campaign
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->campaign = new ArrayCollection();
    }

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
     * Add campaign
     *
     * @param \MXZ\UserBundle\Entity\Campaign $campaign
     * @return User
     */
    public function addCampaign(\MXZ\UserBundle\Entity\Campaign $campaign)
    {
        $this->campaign[] = $campaign;

        return $this;
    }

    /**
     * Remove campaign
     *
     * @param \MXZ\UserBundle\Entity\Campaign $campaign
     */
    public function removeCampaign(\MXZ\UserBundle\Entity\Campaign $campaign)
    {
        $this->campaign->removeElement($campaign);
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $players;


    /**
     * Add players
     *
     * @param \MXZ\UserBundle\Entity\Campaign $players
     * @return User
     */
    public function addPlayer(\MXZ\UserBundle\Entity\Campaign $players)
    {
        $this->players[] = $players;

        return $this;
    }

    /**
     * Remove players
     *
     * @param \MXZ\UserBundle\Entity\Campaign $players
     */
    public function removePlayer(\MXZ\UserBundle\Entity\Campaign $players)
    {
        $this->players->removeElement($players);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlayers()
    {
        return $this->players;
    }
}
