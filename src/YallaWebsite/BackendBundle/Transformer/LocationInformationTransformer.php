<?php
namespace YallaWebsite\BackendBundle\Transformer;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\DataTransformerInterface;
use YallaWebsite\BackendBundle\Entity\LocationInformation;

class LocationInformationTransformer implements DataTransformerInterface
{

    public function transform($locationCollection)
    {
     
        if ($locationCollection->isEmpty()) return;
        if ($locationCollection == null) return;
        
        $location = array();

        $location['address'] = $locationCollection->getAddress();
        $location['telephone'] = $locationCollection->getTelephone();
        
        return $location;
    }

    public function reverseTransform($location)
    {   
        if (!is_array($location)) return $location;
        if (is_null($location->getAdress())) return null;
        $thelocation = new LocationInformation();
        $thelocation->setAddress($location['address']);
        $thelocation->setTelephone($location['telephone']);

        return $thelocation;
    }

}