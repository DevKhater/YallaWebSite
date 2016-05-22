<?php

namespace Application\Sonata\MediaBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * GalleryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GalleryRepository extends EntityRepository
{
       public function getLastTen()
    {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT a FROM ApplicationSonataMediaBundle:Gallery a ORDER BY a.createdAt DESC')
                        ->setMaxResults(10)
                        ->getResult();
    }
}