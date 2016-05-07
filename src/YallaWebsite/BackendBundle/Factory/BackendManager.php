<?php
/**
 * @author DevKhate <m.f.khater@gmail.com>
 * 
 */
namespace YallaWebsite\BackendBundle\Factory;

class BackendManager
{

    protected $em;
    protected $mediaManager;

    public function __construct(\Doctrine\ORM\EntityManager $em, \Sonata\MediaBundle\Entity\MediaManager $mediaManager)
    {
        $this->em = $em;
        $this->mediaManager = $mediaManager;
    }

    public function saveMedia($entity, $entityContext)
    {
        $entity->getMedia()->setContext($entityContext);
        $this->mediaManager->save($entity->getMedia());
        return $entity;
    }

    public function updateMedia($entity, $oldMedia, $entityContext)
    {
        if (is_null($entity->getMedia())) {
            $entity->setMedia($oldMedia);
        } else {
            $entity = $this->saveMedia($entity, $entityContext);
            $this->deleteMedia($oldMedia);
        }
    }

    public function deleteMedia($media)
    {
        if ($media != NULL) {
            $this->mediaManager->delete($media);
        }
    }

    public function deleteTags($entity)
    {
        if ($entity != NULL) {
            $tags = $entity->getTags();
            foreach ($tags as $tag) {
                $entity->removeTag($tag);
            }
        }
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
