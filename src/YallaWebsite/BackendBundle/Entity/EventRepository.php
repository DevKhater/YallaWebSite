<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace YallaWebsite\BackendBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EventRepository extends EntityRepository
{

    public function findIndexList()
    {
        return $this->getEntityManager()->createQuery(
                'SELECT e0.id as id0,
                e0.title as title1,
                e0.date as date3,
                v1.title as venuename4
                FROM YallaWebsiteBackendBundle:Event e0 
                INNER JOIN YallaWebsiteBackendBundle:Venue v1
                WITH e0.venue = v1.id'
            )->getResult();
    }

    public function findEventsBetweenDates(\DateTime $start, \DateTime $end)
    {
        return $this->getEntityManager()
                ->createQuery(
                    'SELECT a FROM YallaWebsiteBackendBundle:Event a WHERE a.startDate BETWEEN :start AND :end')
                ->setParameter('start', $start)
                ->setParameter('end', $end)
                ->getResult();
    }
    
    public function findEventsByDates($theDay)
    {
        $start = date('Y-m-d 00:00:00', $theDay);
        var_dump($start);
        $end = date('Y-m-d 23:59:59', $theDay);
        var_dump($end);
        
        return $this->getEntityManager()
                ->createQuery(
                    'SELECT a FROM YallaWebsiteBackendBundle:Event a WHERE a.startDate BETWEEN :start AND :end')
                ->setParameter('start', $start)
                ->setParameter('end', $end)
                ->getResult();
    }
    
    public function findBySlug($id)
    {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT a FROM YallaWebsiteBackendBundle:Event a WHERE a.slug = :id'
                        )->setParameter('id', $id)
                        ->getSingleResult();
    }
}
