<?php
/**
 * Date: 13.07.15
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\SettingsBundle\Entity\Repository;


use Doctrine\ORM\EntityRepository;

class SiteSettingRepository extends EntityRepository
{

    public function findAllAsArray()
    {
        return $this->createQueryBuilder('s')
            ->getQuery()
            ->getArrayResult();
    }

}