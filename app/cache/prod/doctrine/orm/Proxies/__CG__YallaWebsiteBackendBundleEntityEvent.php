<?php

namespace Proxies\__CG__\YallaWebsite\BackendBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \YallaWebsite\BackendBundle\Entity\Event implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'title', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'startDate', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'endDate', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'content', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'isVenue', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'venue', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'location', 'media', 'tags', 'similarArtist', 'ogType', 'updatedAt', 'createdAt', 'slug', 'metaTags', 'metaDescription', 'url', 'mediaUrl');
        }

        return array('__isInitialized__', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'title', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'startDate', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'endDate', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'content', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'isVenue', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'venue', '' . "\0" . 'YallaWebsite\\BackendBundle\\Entity\\Event' . "\0" . 'location', 'media', 'tags', 'similarArtist', 'ogType', 'updatedAt', 'createdAt', 'slug', 'metaTags', 'metaDescription', 'url', 'mediaUrl');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Event $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setMedia($media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedia', array($media));

        return parent::setMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function getMediaId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediaId', array());

        return parent::getMediaId();
    }

    /**
     * {@inheritDoc}
     */
    public function getMedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedia', array());

        return parent::getMedia();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocationAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocationAddress', array());

        return parent::getLocationAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocationNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocationNumber', array());

        return parent::getLocationNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', array($content));

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', array());

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDate($startDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDate', array($startDate));

        return parent::setStartDate($startDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDate', array());

        return parent::getStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndDate($endDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndDate', array($endDate));

        return parent::setEndDate($endDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndDate', array());

        return parent::getEndDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation(\YallaWebsite\BackendBundle\Entity\LocationInformation $location = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', array($location));

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', array());

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\DCS\TagBundle\Model\TagInterface $tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', array($tag));

        return parent::addTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\DCS\TagBundle\Model\TagInterface $tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', array($tag));

        return parent::removeTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', array());

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', array($slug));

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', array());

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsVenue($isVenue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsVenue', array($isVenue));

        return parent::setIsVenue($isVenue);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsVenue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsVenue', array());

        return parent::getIsVenue();
    }

    /**
     * {@inheritDoc}
     */
    public function setVenue(\YallaWebsite\BackendBundle\Entity\Venue $venue = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVenue', array($venue));

        return parent::setVenue($venue);
    }

    /**
     * {@inheritDoc}
     */
    public function getVenue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVenue', array());

        return parent::getVenue();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', array());

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function addSimilarArtist(\YallaWebsite\BackendBundle\Entity\Artist $similarArtist)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSimilarArtist', array($similarArtist));

        return parent::addSimilarArtist($similarArtist);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSimilarArtist(\YallaWebsite\BackendBundle\Entity\Artist $similarArtist)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSimilarArtist', array($similarArtist));

        return parent::removeSimilarArtist($similarArtist);
    }

    /**
     * {@inheritDoc}
     */
    public function getSimilarArtist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSimilarArtist', array());

        return parent::getSimilarArtist();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', array());

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaTags', array());

        return parent::getMetaTags();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescription', array());

        return parent::getMetaDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getOgType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgType', array());

        return parent::getOgType();
    }

    /**
     * {@inheritDoc}
     */
    public function getUrls()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrls', array());

        return parent::getUrls();
    }

}
