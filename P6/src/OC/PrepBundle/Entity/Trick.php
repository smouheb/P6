<?php

namespace OC\PrepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trick
 *
 * @ORM\Table(name="tricks_creation")
 * @ORM\Entity(repositoryClass="OC\PrepBundle\Repository\TricksCreationRepository")
 */
class Trick
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=255)
     */
    private $created_by;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=255)
     */
    private $updated_by;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="OC\PrepBundle\Entity\Picture")
     * @ORM\JoinColumn(nullable=false)
     */
    private $picture;

    /**
     * @ORM\ManyToOne(targetEntity="OC\PrepBundle\Entity\Video")
     * @ORM\JoinColumn(nullable=false)
     */
    private $video;

    /**
     * @ORM\ManyToOne(targetEntity="OC\PrepBundle\Entity\TricksGroup")
     * @ORM\JoinColumn(nullable=false)
     */
    private $group;

    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Trick
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
     * Set picture
     *
     * @param \OC\PrepBundle\Entity\Picture $picture
     *
     * @return Trick
     */
    public function setPicture(\OC\PrepBundle\Entity\Picture $picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \OC\PrepBundle\Entity\Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set video
     *
     * @param \OC\PrepBundle\Entity\Video $video
     *
     * @return Trick
     */
    public function setVideo(\OC\PrepBundle\Entity\Video $video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \OC\PrepBundle\Entity\Video
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set group
     *
     * @param \OC\PrepBundle\Entity\TricksGroup $group
     *
     * @return Trick
     */
    public function setGroup(\OC\PrepBundle\Entity\TricksGroup $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \OC\PrepBundle\Entity\TricksGroup
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Trick
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Trick
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return Trick
     */
    public function setCreatedBy($createdBy)
    {
        $this->created_by = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     *
     * @return Trick
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updated_by = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updated_by;
    }
}
