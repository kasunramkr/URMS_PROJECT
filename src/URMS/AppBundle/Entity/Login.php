<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Login
 *
 * @ORM\Table(name="login")
 * @ORM\Entity
 */
class Login
{
    /**
     * @var string
     *
     * @ORM\Column(name="User_Name", type="string", length=45, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="Pasword", type="string", length=45, nullable=true)
     */
    private $pasword;

    /**
     * @var string
     *
     * @ORM\Column(name="Access_Id", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $accessId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="URMS\AppBundle\Entity\Person", inversedBy="access")
     * @ORM\JoinTable(name="user_access",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Access_Id", referencedColumnName="Access_Id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="User_Id", referencedColumnName="User_Id")
     *   }
     * )
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return Login
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set pasword
     *
     * @param string $pasword
     *
     * @return Login
     */
    public function setPasword($pasword)
    {
        $this->pasword = $pasword;

        return $this;
    }

    /**
     * Get pasword
     *
     * @return string
     */
    public function getPasword()
    {
        return $this->pasword;
    }

    /**
     * Get accessId
     *
     * @return string
     */
    public function getAccessId()
    {
        return $this->accessId;
    }

    /**
     * Add user
     *
     * @param \URMS\AppBundle\Entity\Person $user
     *
     * @return Login
     */
    public function addUser(\URMS\AppBundle\Entity\Person $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \URMS\AppBundle\Entity\Person $user
     */
    public function removeUser(\URMS\AppBundle\Entity\Person $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
}
