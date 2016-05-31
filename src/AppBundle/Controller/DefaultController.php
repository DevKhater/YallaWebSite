<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $art = $em->getRepository('YallaWebsiteBackendBundle:Artist')->find(4);
        $entities = $em->getRepository('YallaWebsiteBackendBundle:Event')->getUpcomigEventsByArtist($art);
        dump($entities);exit;
        if (array_key_exists('30',$entities)){
            
        }
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
