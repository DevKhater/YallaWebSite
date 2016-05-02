<?php

namespace YallaWebsite\BackendBundle\Transformer;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\DataTransformerInterface;
use Application\Sonata\MediaBundle\Entity\Media;

class MediaFileTransformer implements DataTransformerInterface
{

    public function transform($mediaCollection)
    {
        //dump($mediaCollection);die();
//
//        if ($mediaCollection == null) return;
//        dump($mediaCollection);die();
////        if ($mediaCollection->isEmpty()) return;
//        
//        
//                dump($mediaCollection);die();
//        
//        $location = array();
//
//        $location['address'] = $mediaCollection->getAddress();
//        $location['telephone'] = $mediaCollection->getTelephone();
//        
//        return $location;
    }

    public function reverseTransform($fileMedia)
    {
        //dump($fileMedia);die();
//        dump($fileMedia['media']);die();
        if (!is_array($fileMedia))
            return $fileMedia;
        if ($fileMedia['media'] == NULL)
            return null;

//        $thelocation = new LocationInformation();
//        $thelocation->setAddress($fileMedia['address']);
//        $thelocation->setTelephone($fileMedia['telephone']);
        foreach ($fileMedia as $uploadedFile) {


            //$mediaManager = $this->container->get('sonata.media.manager.media');
            $newmedia = new Media();
            $newmedia->setBinaryContent($uploadedFile);
            //$newmedia->setContext('venue');
            $newmedia->setProviderName('sonata.media.provider.image');
            //$mediaManager->save($newmedia);
        }


        return $newmedia;
    }

}
