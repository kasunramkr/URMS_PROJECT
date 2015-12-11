<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity
 */
class Person
{
    /**
     * @var string
     *
     * @ORM\Column(name="Access_Level", type="string", length=45, nullable=true)
     */
    private $accessLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="User_Id", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="URMS\AppBundle\Entity\Login", mappedBy="user")
     */
    private $access;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->access = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set accessLevel
     *
     * @param string $accessLevel
     *
     * @return Person
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }

    /**
     * Get accessLevel
     *
     * @return string
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Add access
     *
     * @param \URMS\AppBundle\Entity\Login $access
     *
     * @return Person
     */
    public function addAccess(\URMS\AppBundle\Entity\Login $access)
    {
        $this->access[] = $access;

        return $this;
    }

    /**
     * Remove access
     *
     * @param \URMS\AppBundle\Entity\Login $access
     */
    public function removeAccess(\URMS\AppBundle\Entity\Login $access)
    {
        $this->access->removeElement($access);
    }

    /**
     * Get access
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAccess()
    {
        return $this->access;
    }
}
