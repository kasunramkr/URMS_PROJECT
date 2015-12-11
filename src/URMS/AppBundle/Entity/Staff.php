<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staff
 *
 * @ORM\Table(name="staff", indexes={@ORM\Index(name="User_Id", columns={"User_Id"})})
 * @ORM\Entity
 */
class Staff
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="string", length=200, nullable=true)
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contact_No", type="integer", nullable=false)
     */
    private $contactNo;

    /**
     * @var string
     *
     * @ORM\Column(name="NIC_No", type="string", length=10, nullable=false)
     */
    private $nicNo;

    /**
     * @var \URMS\AppBundle\Entity\Person
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="URMS\AppBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_Id", referencedColumnName="User_Id")
     * })
     */
    private $user;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Staff
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
     * Set address
     *
     * @param string $address
     *
     * @return Staff
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set contactNo
     *
     * @param integer $contactNo
     *
     * @return Staff
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;

        return $this;
    }

    /**
     * Get contactNo
     *
     * @return integer
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * Set nicNo
     *
     * @param string $nicNo
     *
     * @return Staff
     */
    public function setNicNo($nicNo)
    {
        $this->nicNo = $nicNo;

        return $this;
    }

    /**
     * Get nicNo
     *
     * @return string
     */
    public function getNicNo()
    {
        return $this->nicNo;
    }

    /**
     * Set user
     *
     * @param \URMS\AppBundle\Entity\Person $user
     *
     * @return Staff
     */
    public function setUser(\URMS\AppBundle\Entity\Person $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \URMS\AppBundle\Entity\Person
     */
    public function getUser()
    {
        return $this->user;
    }
}
