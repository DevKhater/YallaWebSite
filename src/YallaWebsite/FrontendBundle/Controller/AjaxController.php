<?php namespace YallaWebsite\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
    public function getEventByDateAction(Request $request)
    {
        var_dump($request->get('id'));
        $theDay = strtotime($request->get('id'));
//        $start = new \DateTime(date('Y-m-d 00:00:00', $theDay));
//        $end = new \DateTime(date('Y-m-d 23:59:59', $theDay));
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('YallaWebsiteBackendBundle:Event');
        
        $allEvents = $entities->findEventsByDates($theDay);
        var_dump($allEvents);
        $serializedEntity = $this->container->get('serializer')->serialize($allEvents, 'json');
        return new Response($serializedEntity);
    }
}
