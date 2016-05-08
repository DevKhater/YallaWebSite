<?php
/**
 * @author DevKhate<m.f.khater@gmail.com>
 * 
 */
namespace YallaWebsite\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Yaml;

class AdsManagerController extends Controller
{

    public function indexAction($id)
    {
        // Fetch data
        $data = $this->getData($id);

        // Prepare response
        $response = new Response();

        // Configure cache
        if ($data['cache_public'] === true) {
            $response->setPublic();
        } else {
            $response->setPrivate();
        }

        // Set max age
        $response->setMaxAge($data['cache_max_age']);
        $response->setSharedMaxAge($data['cache_shared_max_age']);

        // Handle the weight random
//        if ($data['random'] === true) {
//            $data['data'] = [$this->randomItem($data['data'])];
//        }
        // If content is HTML, fetch content from file in a `content` key
        foreach ($data['data'] as $item) {
            if (strtolower($item['type']) === 'html') {
                $item['content'] = file_get_contents($item['link']) || $item['link'];
            }
        }
        
        return $this->render('YallaWebsiteBackendBundle:AdsManager:index.html.twig', array(
                'allowed_type' => $this->container->getParameter('ads')['allowed_types'],
                'content' => $data,
                'id' => $id
        ));
    }

    private function getData($id)
    {
        // Get path to Ads configuration
        $url = $this->container->getParameter('ads')['uri'];
        // Instanciate a new Parser
        $parser = new Parser();

        // Read configuration and store it in `$data` or throw if we cannot parse it
        try {
            $data = $parser->parse(file_get_contents($url));
            //dump($data);exit;
        } catch (ParseException $e) {
            throw new ParseException('Unable to parse the YAML string:' . $e->getMessage());
        }

        // If `$id` exists in data, fetch content or throw if it's not found
        try {
            return $data = $data[$id];
        } catch (\Exception $e) {
            throw new \Exception('Cannot find `' + $id + '` id in configuration:' . $e->getMessage());
        }
    }
    
    public function modifyAction(){
        $url = $this->container->getParameter('ads')['uri'];
        $parser = new Parser();
        $data = $parser->parse(file_get_contents($url));
        $data['test_new']['data'][0]['link'] = "http://127.0.0.1:8000/uploads/media/adv/download2.jpg";
        $data['test_new']['data'][0]['target'] = "http://www.google.com";
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
