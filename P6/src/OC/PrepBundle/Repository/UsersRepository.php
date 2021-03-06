<?php

namespace OC\PrepBundle\Repository;

/**
 * UsersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsersRepository extends \Doctrine\ORM\EntityRepository
{
    public function findIdToJoin($username)
    {
        $em = $this->getEntityManager();
        $qb= $em->createQueryBuilder();

        $qb->select(array('i'))
            ->from('OCPrepBundle:Users', 'i')
            ->where('i.username = :username')
            ->setParameter('username', $username);

        $result=$qb->getQuery()->getResult();

        try{

            return $result;

        }catch (\Doctrine\ORM\NoResultException $e){

            return null;
        }
    }
}
