<?php

namespace AppBundle\Repository;

/**
 * formationsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class formationsRepository extends \Doctrine\ORM\EntityRepository
{

    public function testQuery()
    {

        $query = $this->createQueryBuilder('courseAlias')
            ->select('courseAlias')
         //   ->where('courseAlias = :nameParam')
         //   ->andWhere
         //   ->setParameters(['nameParam' => 'WebDesigner'])
            ->getQuery()
            ->getResult();
        return $query;
    }

    //requete de regroupement
}