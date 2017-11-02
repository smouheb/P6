<?php

namespace OC\PrepBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * UserCred
 */
class UserCred extends BaseUser
{
    /**
     * @var int
     */
    protected $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

