<?php

namespace OC\PrepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="OC\PrepBundle\Repository\VideoRepository")
 */
class Video
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
     *
     * @ORM\Column(name="video_url", type="text")
     *
     * @Assert\UrL(
     *     message ="This url is not valid",
     *     checkDNS = true
     *     )
     *
     */
    private $videourl;

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
     * @ORM\ManyToOne(targetEntity="OC\PrepBundle\Entity\Trick", inversedBy="video")
     */
    private $trick;

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
     * Set url
     *
     * @param string $videourl
     *
     * @return Video
     */
    public function setUrl($videourl)
    {
        $this->videourl = $videourl;

        return $this;
    }

    /**
     * Get $videourl
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->videourl;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Video
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
     * @return Video
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
     * Set trick
     *
     * @param \OC\PrepBundle\Entity\Trick $trick
     *
     * @return Video
     */
    public function setTrick(\OC\PrepBundle\Entity\Trick $trick = null)
    {
        $this->trick = $trick;

        return $this;
    }

    /**
     * Get trick
     *
     * @return \OC\PrepBundle\Entity\Trick
     */
    public function getTrick()
    {
        return $this->trick;
    }

    /**
     * Set videourl
     *
     * @param string $videourl
     *
     * @return Video
     */
    public function setVideourl($videourl)
    {
        $this->videourl = $videourl;

        return $this;
    }

    /**
     * Get videourl
     *
     * @return string
     */
    public function getVideourl()
    {
        return $this->videourl;
    }
}
