<?php
/**
 * Description of YNLTwigSocialBar
 *
 * @author Michel Khater
 */
namespace YallaWebsite\FrontendBundle\Twig\Extensions;

class ArrayTwigExtension extends \Twig_Extension
{

    protected $container;

    /**
     * Constructor.
     *
     * @param ContainerInterface $container
     */

    public function getFunctions()
    {
        return array(
            'class' => new Twig_Extensions_Extension_Array()
        );
    }

    public function getName()
    {
        return 'array_twig_extension';
    }

}
