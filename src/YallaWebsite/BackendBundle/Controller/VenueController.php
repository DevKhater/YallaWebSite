<?php

/**
 * @author DevKhate<m.f.khater@gmail.com>
 * 
 */

namespace YallaWebsite\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use YallaWebsite\BackendBundle\Entity\Venue;
use YallaWebsite\BackendBundle\Form\CreateVenueForm;
use YallaWebsite\BackendBundle\Form\EditVenueForm;

class VenueController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Venue')->findAll();
        return $this->render('YallaWebsiteBackendBundle:Venue:index.html.twig', array(
                    'entities' => $entity,
        ));
    }

    public function showAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Venue')->find($id);

        ;

        $seoPage = $this->prepareSEO($entity);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Venue entity.');
        }
        return $this->render('YallaWebsiteBackendBundle:Venue:show.html.twig', array(
                    'entity' => $entity,
        ));
    }

    public function newAction(Request $request)
    {
        $venue = new Venue();
        $manager = $this->getDoctrine()->getManager();
        $createVenueForm = $this->createForm(new CreateVenueForm($manager), $venue);
        if ($this->getRequest()->isMethod('POST')) {
            $createVenueForm->handleRequest($request);
            if ($createVenueForm->isValid()) {
                $venue = $this->saveMedia($venue);
                $venue = $this->create($venue);
                return new RedirectResponse($this->generateUrl('backend_venue_show', array('id' => $venue->getId())));
            } else {
                return $this->render('YallaWebsiteBackendBundle:Venue:new.html.twig', array(
                            'form' => $createVenueForm->createView(),
                            'error' => $createVenueForm->getErrors()));
            }
        }
        return $this->render('YallaWebsiteBackendBundle:Venue:new.html.twig', array(
                    'form' => $createVenueForm->createView(),
        ));
    }

    public function editAction(Request $request)
    {
        $id = $request->get('id');
        if (!$id) {
            throw $this->createNotFoundException('No Venue Submited to Edit');
        }
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Venue')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find This Venue.');
        }
        $oldMedia = $entity->getMedia();
        $editForm = $this->createForm(new EditVenueForm($this->getDoctrine()->getManager()), $entity);
        if ($this->getRequest()->isMethod('POST')) {
            $editForm->handleRequest($request);
            if ($editForm->isValid()) {
                $this->updateMedia($entity, $oldMedia);
                $entity = $this->create($entity);
                return new RedirectResponse($this->generateUrl('backend_venue_show', array('id' => $entity->getId())));
            } else {
                return $this->render('YallaWebsiteBackendBundle:Venue:edit.html.twig', array(
                            'venue' => $entity,
                            'form' => $editForm->createView(),
                            'error' => $editForm->getErrors()));
            }
        }
        return $this->render('YallaWebsiteBackendBundle:Venue:edit.html.twig', array(
                    'venue' => $entity,
                    'form' => $editForm->createView(),
        ));
    }

    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Venue')->find($id);
        $media = $entity->getMedia();
        $this->deleteMedia($media);
        $this->deleteTags($entity);
        $em->remove($entity);
        $em->flush();
        return new RedirectResponse($this->generateUrl('backend_venue_index'));
    }

    private function saveMedia($entity)
    {
        $mediaManager = $this->container->get('sonata.media.manager.media');
        $entity->getMedia()->setContext('venue');
        $mediaManager->save($entity->getMedia());
        return ($entity);
    }

    private function updateMedia($entity, $oldMedia)
    {
        if (is_null($entity->getMedia())) {
            $entity->setMedia($oldMedia);
        } else {
            $entity = $this->saveMedia($entity);
            $this->deleteMedia($oldMedia);
        }
        return true;
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

    private function create(Venue $venue)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($venue);
        $em->flush();

        return $venue;
    }

    private function prepareSEO($entity)
    {
        
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
                ->addHeadAttribute('prefix', 'og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place#')
        ->setTitle('YallaNightLife - ' . $entity->getTitle())
        ->addMeta('name', 'description', $entity->getMetaDescription())
        ->addMeta('name', 'keywords', $entity->getMetaTags())
        ->addMeta('property', 'og:title', $entity->getTitle())
        ->addMeta('property', 'og:type', $entity->getOgType())
        ->addMeta('property', 'og:image', $this->getRequest()->getUriForPath($entity->getUrls($this->container->get('sonata.media.provider.image'))))
        ->addMeta('property', 'og:description', $entity->getMetaDescription())
        ->addMeta('property', 'og:url', $this->generateUrl('backend_venue_show', array('id' => $entity->getId()), true))
        ->addMeta('property', 'twitter:description', $entity->getMetaDescription())
        ->addMeta('property', 'twitter:url', $this->generateUrl('backend_venue_show', array('id' => $entity->getId()), true))
        ->addMeta('property', 'twitter:card', $entity->getMetaDescription())
        ->addMeta('property', 'twitter:title', $entity->getTitle())
        ->addMeta('property', 'twitter:title', $entity->getTitle())
                ;
        
                return $seoPage;
    }

}
