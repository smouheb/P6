<?php

namespace OC\PrepBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TricksGroup
 *
 * @ORM\Table(name="tricks_group")
 * @ORM\Entity(repositoryClass="OC\PrepBundle\Repository\TricksGroupRepository")
 */
class TricksGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="groupName", type="string", length=255)
     */
    private $groupName;

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
     * @ORM\Column(name="created_by", type="string", length=255, nullable=true)
     */
    private $created_by;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=true)
     */
    private $updated_by;

    /**
     * Get id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
    /**
     * Set groupName
     *
     * @param string $groupName
     *
     * @return TricksGroup
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return TricksGroup
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
     * @return TricksGroup
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
     * @return TricksGroup
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
     * @return TricksGroup
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
