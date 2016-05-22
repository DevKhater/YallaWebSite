<?php namespace YallaWebsite\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use YallaWebsite\FrontendBundle\Entity\HomePage;

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

    public function homepageAction()
    {
        $em = $this->getDoctrine()->getManager();
//            $ent = $em->getRepository('YallaWebsiteFrontendBundle:HomePage')->find(3);
//            $ent->setSelectedGallery($em->getRepository('ApplicationSonataMediaBundle:Gallery')->find(5));

        $hp = new HomePage();
        
//        for ($i = 0 ; $i <3 ; $i++)
//        {
//            $hp->addSliderEntities($em->getRepository('YallaWebsiteBackendBundle:Event')->find(rand(16, 19)));
//        }
//        for ($i = 0 ; $i <2 ; $i++)
//        {
//            $hp->addSliderEntities($em->getRepository('YallaWebsiteBackendBundle:Venue')->find(rand(3,6)));
//        }

//        $hp->addSliderEntities($em->getRepository('YallaWebsiteBackendBundle:Event')->find(4));
//        $hp->addSliderEntities($em->getRepository('YallaWebsiteBackendBundle:Event')->find(5));
//        $hp->addSliderEntities($em->getRepository('YallaWebsiteBackendBundle:Venue')->find(1));
//        $hp->addSliderEntities($em->getRepository('YallaWebsiteBackendBundle:Article')->find(1));
//        $hp->addSliderEntities($em->getRepository('ApplicationSonataMediaBundle:Gallery')->find(1));
//        $em->persist($hp);
//        $em->flush();

        dump($hp);
        exit;
    }
}
