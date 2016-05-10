<?php

/**
 * @author DevKhate<m.f.khater@gmail.com>
 * 
 */

namespace YallaWebsite\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use YallaWebsite\BackendBundle\Form\AdvTypeForm;
use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Dumper;
use YallaWebsite\BackendBundle\Transformer\MediaFileTransformer;
class AdsManagerController extends Controller
{

    public function displayAction(Request $request)
    {
        $id = $request->get('id');
        $BEManager = $this->container->get('backend_manager.manager');
        $data = $BEManager->getAdv($this->container->getParameter('ads')['uri'], $id);

        //dump($data);exit;

        return $this->render('YallaWebsiteFrontendBundle:Ads:display.html.twig', array(
                    'allowed_type' => $this->container->getParameter('ads')['allowed_types'],
                    'content' => $data,
                    'id' => $id
        ));
    }

    public function indexAction($id)
    {
        $BEManager = $this->container->get('backend_manager.manager');
        $data = $BEManager->getAdv($this->container->getParameter('ads')['uri'], $id);
        $manager = $this->getDoctrine()->getManager();
        $createVenueForm = $this->createForm(new AdvTypeForm($manager));

        return $this->render('YallaWebsiteBackendBundle:AdsManager:index.html.twig', array(
                    'allowed_type' => $this->container->getParameter('ads')['allowed_types'],
                    'content' => $data,
                    'form' => $createVenueForm->createView(),
                    'id' => $id
        ));


        // Fetch data
        //$data = $this->getData($id);
        // Prepare response
        //$response = new Response();
        // Configure cache
//        if ($data['cache_public'] === true) {
//            $response->setPublic();
//        } else {
//            $response->setPrivate();
//        }
        // Set max age
//        $response->setMaxAge($data['cache_max_age']);
//        $response->setSharedMaxAge($data['cache_shared_max_age']);
        // Handle the weight random
//        if ($data['random'] === true) {
//            $data['data'] = [$this->randomItem($data['data'])];
//        }
        // If content is HTML, fetch content from file in a `content` key
//        foreach ($data['data'] as $item) {
//            if (strtolower($item['type']) === 'html') {
//                $item['content'] = file_get_contents($item['link']) || $item['link'];
//            }
//        }
    }

    public function modifyAction(Request $request)
    {
        $id = $request->get('id');
        if (!$id) {
            throw $this->createNotFoundException('No Articles Submited to Edit');
        }

        $manager = $this->getDoctrine()->getManager();
        $createVenueForm = $this->createForm(new AdvTypeForm($manager));
        if ($this->getRequest()->isMethod('POST')) {
            $newmedia = MediaFileTransformer::reverseTransform($request->files->get('adve_form')['media']);
            $BEManager = $this->container->get('backend_manager.manager');
            $BEManager->saveAdvMedia($newmedia);
            $path = $this->container->get('sonata.media.twig.extension')->path($newmedia, 'small');
            $url = $request->request->get('adve_form')['linkfor'];
            $this->addAdvYaml($id, $path, $url);
        }

        /*
         *  $media = new Media();
          $media->setBinaryContent($uploadImage);
          $media->setContext('default');
          $media->setProviderName('sonata.media.provider.image');
          $mediaManager->save($media);
          $post->setImage($media);
          print_r($media);exit;

         * get the form
         * validate
         * upload the image
         * save to sonata
         * get the link
         * update the yaml record
         * 
         * 
         * 
         * 
         *          */
//        $dumper = new Dumper();
//        $yaml = $dumper->dump($allData, 2);
//        file_put_contents($this->container->getParameter('ads')['uri'], $yaml);
    }

    public function addAdvYaml($id, $image_url, $adv_url)
    {
        $BEManager = $this->container->get('backend_manager.manager');
        $url = $this->container->getParameter('ads')['uri'];
        $allData = $BEManager->getAllAdv($url);
        $allData[$id]['data'][0]['link'] = $image_url;
        $allData[$id]['data'][0]['target'] = $adv_url;
        $dumper = new Dumper();
        $yaml = $dumper->dump($allData, 2);
        file_put_contents($url, $yaml);
    }

//    private function randomItem($array)
//    {
//        $weights = array_column($array, 'weight');
//        $total = array_sum($weights);
//        $random = rand(1, $total);
//        $sum = 0;
//
//        foreach ($weights as $index => $weight) {
//            $sum += $weight;
//
//            if ($random <= $sum) {
//                return $array[$index];
//            }
//        }
//    }
}
