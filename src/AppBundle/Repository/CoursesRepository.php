<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/12/2017
 * Time: 11:38
 */

class CourseRepository extends \Doctrine\ORM\EntityRepository
{

    public function testQuery()
    {

        $query = $this->createQueryBuilder('courseAlias')
            ->select('courseAlias')
            ->getQuery()
            ->getResult();
        return $query;
    }


}