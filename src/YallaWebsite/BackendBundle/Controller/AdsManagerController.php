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

    public function indexAction()
    {
        $BEManager = $this->container->get('backend_manager.manager');
        $data = $BEManager->getAdvData($this->container->getParameter('ads')['uri']);
        $manager = $this->getDoctrine()->getManager();
        $createVenueForm = $this->createForm(new AdvTypeForm($manager));
        
        return $this->render('YallaWebsiteBackendBundle:AdsManager:index.html.twig', array(
                'allowed_type' => $this->container->getParameter('ads')['allowed_types'],
                'content' => $data,
                'form' =>$createVenueForm->createView()
                //'id' => $id
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
   
    public function modifyAction(Request $request){
        $id = $request->get('id');
        $BEManager = $this->container->get('backend_manager.manager');
        $data = $BEManager->getAdv($this->container->getParameter('ads')['uri'], $id);
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
        $data[$id]['data'][0]['link'] = "http://127.0.0.1:8000/uploads/media/adv/download2.jpg";
        $data[$id]['data'][0]['target'] = "http://www.google.com";
        $dumper = new Dumper();
        $yaml = $dumper->dump($data, 2);
        file_put_contents($url, $yaml);
    }
    
    public function addAction(){
        $url = $this->container->getParameter('ads')['uri'];
        $parser = new Parser();
        $data = $parser->parse(file_get_contents($url));
        
        $newData = array(
            'test_new' => array(
                "cache_public" => true,
                "cache_shared_max_age" => 86400,
                "cache_max_age" => 28800,
                "random" => true,
                "data" => array(
                    0 => array(
                        "type" => "image",
                        "link" => "http://127.0.0.1:8000/uploads/media/adv/download.jpg",
                        "target" => "http://google.fr/",
                        "weight" => 5,
                    ))));
        
        $result = array_merge($newData, $data);
        
        //dump($result);exit;
        $dumper = new Dumper();
        $yaml = $dumper->dump($result, 2);
        $url = $this->container->getParameter('ads')['uri'];
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
