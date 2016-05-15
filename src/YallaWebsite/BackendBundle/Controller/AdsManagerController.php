<?php
/**
 * @author DevKhate<m.f.khater@gmail.com>
 * 
 */
namespace YallaWebsite\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use YallaWebsite\BackendBundle\Form\AdvTypeForm;
use Symfony\Component\Yaml\Dumper;
use YallaWebsite\BackendBundle\Transformer\MediaFileTransformer;

class AdsManagerController extends Controller
{

    public function displayAction(Request $request)
    {
        $id = $request->get('id');
        $BEManager = $this->container->get('backend_manager.manager');
        $data = $BEManager->getAdv($this->container->getParameter('ads')['uri'], $id);
        return $this->render('YallaWebsiteFrontendBundle:Ads:display.html.twig', array(
                'allowed_type' => $this->container->getParameter('ads')['allowed_types'],
                'content' => $data,
                'id' => $id
        ));
    }

    public function indexAction()
    {
        $BEManager = $this->container->get('backend_manager.manager');
        $data = $BEManager->getAllAdv($this->container->getParameter('ads')['uri']);

        return $this->render('YallaWebsiteBackendBundle:AdsManager:index.html.twig', array(
                'allowed_type' => $this->container->getParameter('ads')['allowed_types'],
                'content' => $data
        ));
    }

    public function changeAction($id)
    {
        $BEManager = $this->container->get('backend_manager.manager');
        $data = $BEManager->getAdv($this->container->getParameter('ads')['uri'], $id);
        $manager = $this->getDoctrine()->getManager();
        $createVenueForm = $this->createForm(new AdvTypeForm($manager));

        return $this->render('YallaWebsiteBackendBundle:AdsManager:edit.html.twig', array(
                'allowed_type' => $this->container->getParameter('ads')['allowed_types'],
                'content' => $data,
                'form' => $createVenueForm->createView(),
                'id' => $id
        ));
    }

    public function modifyAction(Request $request)
    {
        $id = $request->get('id');
        if (!$id) {
            throw $this->createNotFoundException('No Advertisment Submited to Edit');
        }
        if ($this->getRequest()->isMethod('POST')) {
            //$newmedia = MediaFileTransformer::reverseTransform($request->files->get('adve_form')['media']);
            $mt = new MediaFileTransformer;
            $newmedia = $mt->reverseTransform($request->files->get('adve_form')['media']);
            $BEManager = $this->container->get('backend_manager.manager');
            $old = $BEManager->getAllAdv($this->container->getParameter('ads')['uri']);
            $BEManager->saveAdvMedia($newmedia, $old[$id]['media']);
            $url = $request->request->get('adve_form')['linkfor'];
            $this->addAdvYaml($id, $newmedia, $url);
            return new RedirectResponse($this->generateUrl('backend_ads_manager_index'));
        }
        return new RedirectResponse($this->generateUrl('backend_ads_manager_change', array('id' => $id)));
    }

    private function addAdvYaml($id, $image, $adv_url)
    {
        $BEManager = $this->container->get('backend_manager.manager');
        $url = $this->container->getParameter('ads')['uri'];
        $allData = $BEManager->getAllAdv($url);
        $allData[$id]['media'] = $image->getId();
        $allData[$id]['data'][0]['link'] = $this->container->get('sonata.media.twig.extension')->path($image, $allData[$id]['format']);
        $allData[$id]['data'][0]['target'] = $adv_url;
        $dumper = new Dumper();
        $yaml = $dumper->dump($allData, 2);
        file_put_contents($url, $yaml);
    }
}
