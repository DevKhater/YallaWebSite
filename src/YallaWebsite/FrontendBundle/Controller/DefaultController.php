<?php namespace YallaWebsite\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $MM = $this->container->get('frontend_manager.manager');
        $image = $MM->getMediaForEventById(25);
        $serializedEntity = $this->container->get('serializer')->serialize($image, 'json');
        dump($serializedEntity);exit;
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
                $query, $this->get('request')->query->get('page', 1), 8
            );
        } else {
            $pagination = NULL;
        }

        return $this->render('YallaWebsiteFrontendBundle:Venue:index.html.twig', array(
                'pagination' => $pagination
        ));
    }

    public function articlesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('YallaWebsiteBackendBundle:Article');
        $query = $entities->findAll();
        if ($query != NULL) {
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query, $this->get('request')->query->get('page', 1), 12
            );
        } else {
            $pagination = NULL;
        }

        return $this->render('YallaWebsiteFrontendBundle:Article:index.html.twig', array(
                'pagination' => $pagination
        ));
    }

    public function getArticleBySlugAction(Request $request)
    {
        $id = $request->get('id');
        if (!$id) {
            throw $this->createNotFoundException('No Venue Submited to Edit');
        }
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Article')->findBySlug($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find This Venue.');
        }

        return $this->render('YallaWebsiteFrontendBundle:Article:show.html.twig', array(
                'entity' => $entity,
        ));
    }

    public function eventsAction()
    {
        return $this->render('YallaWebsiteFrontendBundle:Events:index.html.twig');
    }

    public function getEventBySlugAction(Request $request)
    {
        $id = $request->get('id');
        if (!$id) {
            throw $this->createNotFoundException('No Venue Submited to Edit');
        }
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Event')->findBySlug($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find This Venue.');
        }

        return $this->render('YallaWebsiteFrontendBundle:Events:show.html.twig', array(
                'entity' => $entity,
        ));
    }
}
