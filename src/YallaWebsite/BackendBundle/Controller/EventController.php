<?php

/**
 * @author DevKhate<m.f.khater@gmail.com>
 * 
 */

namespace YallaWebsite\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use YallaWebsite\BackendBundle\Entity\Event;
use YallaWebsite\BackendBundle\Form\CreateEventForm;
use YallaWebsite\BackendBundle\Form\EditEventForm;
use YallaWebsite\BackendBundle\Transformer\VenueLocationTransformer;

class EventController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Event')->findAll();
        return $this->render('YallaWebsiteBackendBundle:Event:index.html.twig', array(
                    'entities' => $entity,
        ));
    }

    public function showAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Event')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }
        return $this->render('YallaWebsiteBackendBundle:Event:show.html.twig', array(
                    'entity' => $entity
        ));
    }

    public function newAction(Request $request)
    {
        $event = new Event();
        $manager = $this->getDoctrine()->getManager();
        $createEventForm = $this->createForm(new CreateEventForm($manager), $event, array('allow_extra_fields' => true));
        if ($this->getRequest()->isMethod('POST')) {
            $createEventForm->handleRequest($request);
            if ($createEventForm->isValid()) {
                $event = $this->saveMedia($event);
                $event = $this->create($event, $request);
                return new RedirectResponse($this->generateUrl('backend_event_show', array('id' => $event->getId())));
            } else {
                return $this->render('YallaWebsiteBackendBundle:Event:new.html.twig', array(
                            'form' => $createEventForm->createView(),
                            'error' => $createEventForm->getErrors()));
            }
        }
        return $this->render('YallaWebsiteBackendBundle:Event:new.html.twig', array(
                    'form' => $createEventForm->createView(),
                    'venues' => $this->getVenuesAddress(),
        ));
    }

    public function editAction(Request $request)
    {
        $id = $request->get('id');
        if (!$id) {
            throw $this->createNotFoundException('No Venue Submited to Edit');
        }
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Event')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find This Event.');
        }
        $oldMedia = $entity->getMedia();
        $list = $this->getVenuesAddress();
        $editForm = $this->createForm(new EditEventForm($this->getDoctrine()->getManager()), $entity, array('allow_extra_fields' => true));
        if ($this->getRequest()->isMethod('POST')) {
            $editForm->handleRequest($request);
            if ($editForm->isValid()) {
                $this->updateMedia($entity, $oldMedia);
                $entity = $this->create($entity, $request);
                return new RedirectResponse($this->generateUrl('backend_event_show', array('id' => $entity->getId())));
            } else {
                return $this->render('YallaWebsiteBackendBundle:Event:edit.html.twig', array(
                            'event' => $entity,
                            'form' => $editForm->createView(),
                            'list' => $list,
                            'error' => $editForm->getErrors()));
            }
        }
        return $this->render('YallaWebsiteBackendBundle:Event:edit.html.twig', array(
                    'event' => $entity,
                    'form' => $editForm->createView(),
                    'list' => $list,
        ));
    }

    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Event')->find($id);
        $media = $entity->getMedia();
        $this->deleteMedia($media);
        $this->deleteTags($entity);
        $em->remove($entity);
        $em->flush();
        return new RedirectResponse($this->generateUrl('backend_event_index'));
    }

    private function saveMedia($entity)
    {
        $mediaManager = $this->container->get('sonata.media.manager.media');
        $entity->getMedia()->setContext('event');
        $mediaManager->save($entity->getMedia());
        return ($entity);
    }

    private function deleteMedia($media)
    {
        if ($media != NULL) {
            $mediaManager = $this->container->get('sonata.media.manager.media');
            $mediaManager->delete($media);
        }
    }

    private function deleteTags($entity)
    {
        if ($entity != NULL) {
            $tags = $entity->getTags();
            foreach ($tags as $tag) {
                $entity->removeTag($tag);
            }
        }
    }

    private function create(Event $event, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        if (array_key_exists('isVenue', $request->get('event_create'))) {
            $event->setIsVenue(true);
        } else {
            $event->setVenue(null);
        }
        $em->flush();

        return $event;
    }

    private function getVenuesAddress()
    {
        $manager = $this->getDoctrine()->getManager();
        $trans = new VenueLocationTransformer($manager);
        $list = $trans->transform($manager->getRepository('YallaWebsiteBackendBundle:Venue')->findAll());
        return $list;
    }

    private function updateMedia($entity, $oldMedia)
    {
        if (is_null($entity->getMedia())) {
            $entity->setMedia($oldMedia);
        } else {
            $entity = $this->saveMedia($entity);
            $this->deleteMedia($oldMedia);
        }
    }

}
