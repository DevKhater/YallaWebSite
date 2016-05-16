<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GalleryController extends Controller
{
    /**
     * @return \Symfony\Bundle\FrameworkBundle\Controller\Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('ApplicationSonataMediaBundle:Gallery');
        $query = $entities->findAll();
        if ($query != NULL) {
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                    $query, $this->get('request')->query->get('page', 1), 12
            );
        } else {
            $pagination = NULL;
        }

        
//        $galleries = $this->get('sonata.media.manager.gallery')->findBy(array(
//            'enabled' => true,
//        ));
        return $this->render('SonataMediaBundle:Gallery:index.html.twig', array(
            'pagination' => $pagination

        ));
    }

    /**
     * @param string $id
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\Response
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function viewAction($id)
    {
        $gallery = $this->get('sonata.media.manager.gallery')->findOneBy(array(
            'id'      => $id,
            'enabled' => true,
        ));

        if (!$gallery) {
            throw new NotFoundHttpException('unable to find the gallery with the id');
        }

        return $this->render('SonataMediaBundle:Gallery:view.html.twig', array(
            'gallery'   => $gallery,
        ));
    }
}
