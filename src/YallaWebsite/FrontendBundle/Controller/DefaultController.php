<?php

namespace YallaWebsite\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use YallaWebsite\BackendBundle\Entity\Venue;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('YallaWebsiteFrontendBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('YallaWebsiteFrontendBundle:Page:about.html.twig');
    }

    public function venuesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('YallaWebsiteBackendBundle:Venue');
        $query = $entities->findAll();
        if ($query != NULL) {
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                    $query, $this->get('request')->query->get('page', 1), 1
            );
        } else {
            $pagination = NULL;
        }

        return $this->render('YallaWebsiteFrontendBundle:Venue:index.html.twig',array(
                    'pagination' => $pagination
        ));
    }

}
