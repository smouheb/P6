<?php
/**
 * Created by PhpStorm.
 * User: MacBookAir
 * Date: 24/10/2017
 * Time: 20:56
 */

namespace OC\PrepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\User;
use Symfony\Bridge\Doctrine\Tests\Fixtures;
use FOS\UserBundle\Model\User as BaseUSer;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\UserRepository")
 */
class UserCred extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function getId()
    {
        return parent::getId(); // TODO: Change the autogenerated stub
    }
}