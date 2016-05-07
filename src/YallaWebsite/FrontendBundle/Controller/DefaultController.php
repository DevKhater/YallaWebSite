<?php

namespace YallaWebsite\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
