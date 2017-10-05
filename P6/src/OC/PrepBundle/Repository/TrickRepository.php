<?php

namespace OC\PrepBundle\Repository;

/**
 * TrickRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TrickRepository extends \Doctrine\ORM\EntityRepository
{
    public function findIdToJoin($id)
    {
        $em = $this->getEntityManager()->createQuery(
            'SELECT t, p from OCPrepBundle:Trick t
                JOIN t.picture p
                WHERE p.id = :id'
        )->setParameter('id', $id);

        try{

            return $em->getResult();

        }catch (\Doctrine\ORM\NoResultException $e){

            return null;
        }
    }
}
