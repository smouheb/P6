<?php

namespace CommandLine\CLIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pictures
 *
 * @ORM\Table(name="pictures")
 * @ORM\Entity(repositoryClass="CommandLine\CLIBundle\Repository\PicturesRepository")
 */
class Pictures
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
     * @var string
     *
     * @ORM\Column(name="pics", type="string", length=255)
     */
    private $pics;


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
     * Set pics
     *
     * @param string $pics
     *
     * @return Pictures
     */
    public function setPics($pics)
    {
        $this->pics = $pics;

        return $this;
    }

    /**
     * Get pics
     *
     * @return string
     */
    public function getPics()
    {
        return $this->pics;
    }
}

