<?php namespace YallaWebsite\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $BEManager = $this->container->get('backend_manager.manager');
        $hp = $BEManager->getHomepage();
        return $this->render('YallaWebsiteFrontendBundle:Default:index.html.twig', array('home' => $hp));
    }

    public function aboutAction()
    {
        $BEManager = $this->container->get('backend_manager.manager');
        $about = $BEManager->getHomepage()->getAbout();
        $vision = $BEManager->getHomepage()->getVision();
        $members = $this->getDoctrine()->getManager()->getRepository('YallaWebsiteBackendBundle:Member')->findAll();
        return $this->render('YallaWebsiteFrontendBundle:Page:about.html.twig', array('about' => $about, 'vision' => $vision, 'members' => $members));
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

    public function artistsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('YallaWebsiteBackendBundle:Artist');
        $query = $entities->findAll();
        if ($query != NULL) {
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query, $this->get('request')->query->get('page', 1), 8
            );
        } else {
            $pagination = NULL;
        }

        return $this->render('YallaWebsiteFrontendBundle:Artist:index.html.twig', array(
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
