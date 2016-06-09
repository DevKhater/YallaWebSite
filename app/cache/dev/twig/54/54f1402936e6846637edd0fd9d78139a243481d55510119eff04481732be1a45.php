<?php

/* SonataSeoBundle:Block:_twitter_sdk.html.twig */
class __TwigTemplate_48e9ee5221dfd004830f2219f0198e0b2c5482a29e32e2f18129d18d07bf3282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'facebook_sdk' => array($this, 'block_facebook_sdk'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0b3cd34228b32ea6cd4d5b6830ef6b975bdea072b9d3cb598efd0d500bef7b8 = $this->env->getExtension("native_profiler");
        $__internal_f0b3cd34228b32ea6cd4d5b6830ef6b975bdea072b9d3cb598efd0d500bef7b8->enter($__internal_f0b3cd34228b32ea6cd4d5b6830ef6b975bdea072b9d3cb598efd0d500bef7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:_twitter_sdk.html.twig"));

        // line 11
        $this->displayBlock('facebook_sdk', $context, $blocks);
        
        $__internal_f0b3cd34228b32ea6cd4d5b6830ef6b975bdea072b9d3cb598efd0d500bef7b8->leave($__internal_f0b3cd34228b32ea6cd4d5b6830ef6b975bdea072b9d3cb598efd0d500bef7b8_prof);

    }

    public function block_facebook_sdk($context, array $blocks = array())
    {
        $__internal_ced69c14b14622b7e14e549e01e6ceb4734c50e789a6ab91b128bb8a39525e54 = $this->env->getExtension("native_profiler");
        $__internal_ced69c14b14622b7e14e549e01e6ceb4734c50e789a6ab91b128bb8a39525e54->enter($__internal_ced69c14b14622b7e14e549e01e6ceb4734c50e789a6ab91b128bb8a39525e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "facebook_sdk"));

        // line 12
        ob_start();
        // line 13
        echo "
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ced69c14b14622b7e14e549e01e6ceb4734c50e789a6ab91b128bb8a39525e54->leave($__internal_ced69c14b14622b7e14e549e01e6ceb4734c50e789a6ab91b128bb8a39525e54_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:_twitter_sdk.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 13,  35 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% block facebook_sdk %}*/
/* {% spaceless %}*/
/* */
/*     <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
