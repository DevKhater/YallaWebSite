<?php

namespace YallaWebsite\BackendBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
    
     /**
     * @ORM\OneToOne(targetEntity="YallaWebsite\BackendBundle\Entity\UserProfile", cascade={"persist"}, fetch="LAZY")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     */

    private $profile;

    /**
     * Set profile
     *
     * @param \YallaWebsite\BackendBundle\Entity\UserProfile $profile
     *
     * @return User
     */
    public function setProfile(\YallaWebsite\BackendBundle\Entity\UserProfile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \YallaWebsite\BackendBundle\Entity\UserProfile
     */
    public function getProfile()
    {
        return $this->profile;
    }
    
    public function getUserDisplayName()
    {
        return $this->profile->getDisplayName();
    }
    
}
