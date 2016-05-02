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
        return  $this->getEntityManager()->createQuery( 
            
            'SELECT e0.id as id0,
                e0.title as title1,
                e0.date as date3,
                v1.title as venuename4
                FROM YallaWebsiteBackendBundle:Event e0 
                INNER JOIN YallaWebsiteBackendBundle:Venue v1
                WITH e0.venue = v1.id'
            )->getResult();
    }
}