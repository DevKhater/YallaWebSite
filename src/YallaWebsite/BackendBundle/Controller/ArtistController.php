<?php

/**
 * @author DevKhate<m.f.khater@gmail.com>
 * 
 */

namespace YallaWebsite\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use YallaWebsite\BackendBundle\Entity\Artist;
use YallaWebsite\BackendBundle\Form\CreateArtistForm;
use YallaWebsite\BackendBundle\Form\EditArtistForm;

class ArtistController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('YallaWebsiteBackendBundle:Artist');
        $query = $entities->findAll();
        if ($query != NULL) {
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                    $query, $this->get('request')->query->get('page', 1), 20
            );
        } else {
            $pagination = NULL;
        }
        return $this->render('YallaWebsiteBackendBundle:Artist:index.html.twig', array(
                    'entities' => count($query),
                    'pagination' => $pagination
        ));
    }

    public function showAction(Request $request)
    {
        $entity = $this->getArtist($request);
        return $this->render('YallaWebsiteBackendBundle:Artist:show.html.twig', array(
                    'entity' => $entity,
        ));
    }

    public function newAction(Request $request)
    {
        $artist = new Artist();
        $manager = $this->getDoctrine()->getManager();
        $createArtistForm = $this->createForm(new CreateArtistForm($manager), $artist);
        if ($this->getRequest()->isMethod('POST')) {
            $createArtistForm->handleRequest($request);
            if ($createArtistForm->isValid()) {
                $BEManager = $this->container->get('backend_manager.manager');
                $BEManager->saveMedia($artist, 'venue');
                $artist = $this->create($artist);
                return new RedirectResponse($this->generateUrl('backend_venue_show', array('id' => $artist->getId())));
            } else {
                return $this->render('YallaWebsiteBackendBundle:Artist:new.html.twig', array(
                            'form' => $createArtistForm->createView(),
                            'error' => $createArtistForm->getErrors()));
            }
        }
        return $this->render('YallaWebsiteBackendBundle:Artist:new.html.twig', array(
                    'form' => $createArtistForm->createView(),
        ));
    }

    public function editAction(Request $request)
    {
        $entity = $this->getArtist($request);
        $oldMedia = $entity->getMedia();
        $editForm = $this->createForm(new EditArtistForm($this->getDoctrine()->getManager()), $entity);
        if ($this->getRequest()->isMethod('POST')) {
            $editForm->handleRequest($request);
            if ($editForm->isValid()) {
                $BEManager = $this->container->get('backend_manager.manager');
                $BEManager->updateMedia($entity, $oldMedia, 'venue');
                $entity = $this->create($entity);
                return new RedirectResponse($this->generateUrl('backend_venue_show', array('id' => $entity->getId())));
            } else {
                return $this->render('YallaWebsiteBackendBundle:Artist:edit.html.twig', array(
                            'venue' => $entity,
                            'form' => $editForm->createView(),
                            'error' => $editForm->getErrors()));
            }
        }
        return $this->render('YallaWebsiteBackendBundle:Artist:edit.html.twig', array(
                    'venue' => $entity,
                    'form' => $editForm->createView(),
        ));
    }

    public function deleteAction(Request $request)
    {
        $entity = $this->getArtist($request);
        $BEManager = $this->container->get('backend_manager.manager');
        $BEManager->deleteMedia($entity->getMedia());
        $BEManager->deleteTags($entity);
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($entity);
        $em->flush();
        return new RedirectResponse($this->generateUrl('backend_venue_index'));
    }

    private function create(Artist $artist)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($artist);
        $em->flush();

        return $artist;
    }

    private function getArtist(Request $request)
    {
        $id = $request->get('id');
        if (!$id) {
            throw $this->createNotFoundException('No Artist Submited to Edit');
        }
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('YallaWebsiteBackendBundle:Artist')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find This Artist.');
        }
        return $entity;
    }

}
