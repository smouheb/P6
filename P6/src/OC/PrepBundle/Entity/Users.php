<?php

namespace OC\PrepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Security\Core\User\User;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="OC\PrepBundle\Repository\UsersRepository")
 * @Vich\Uploadable
 */
class Users extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="image", type="string", length=255)
     */
    protected $image;

    /**
     * @Assert\File(maxSize = "40000k",
     *     mimeTypes = {"image/png", "image/jpg", "image/jpeg"},
     *     mimeTypesMessage = "Please upload a valid images")
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="image")
     *
     * @var File
     */
    protected $imageFile;

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Users
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {

            $this->lastLogin = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
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
     * Set image
     *
     * @param string $image
     *
     * @return Users
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

}
