<?php

namespace YallaWebsite\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TemplateController extends Controller
{
    public function socialAction()
    {
        $socialData = $this->container->getParameter('socialmedia');
        return $this->render('YallaWebsiteFrontendBundle:Template:socialmedia.html.twig', array(
                'content' => $socialData
        ));
    }
    
    public function aboutAction()
    {
        return $this->render('YallaWebsiteFrontendBundle:Page:about.html.twig');
    }
}
