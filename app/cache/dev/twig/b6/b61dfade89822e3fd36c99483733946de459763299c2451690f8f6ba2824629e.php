<?php

/* SonataSeoBundle:Block:_twitter_sdk.html.twig */
class __TwigTemplate_680b903677f6d3c9303b09316efcb86225d610df7b44d9a4f10342396c0b8092 extends Twig_Template
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
        $__internal_354be13993c423b64ac81676b9b81e522c857ad91f211b170f4f71ba522a7e1d = $this->env->getExtension("native_profiler");
        $__internal_354be13993c423b64ac81676b9b81e522c857ad91f211b170f4f71ba522a7e1d->enter($__internal_354be13993c423b64ac81676b9b81e522c857ad91f211b170f4f71ba522a7e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:_twitter_sdk.html.twig"));

        // line 11
        $this->displayBlock('facebook_sdk', $context, $blocks);
        
        $__internal_354be13993c423b64ac81676b9b81e522c857ad91f211b170f4f71ba522a7e1d->leave($__internal_354be13993c423b64ac81676b9b81e522c857ad91f211b170f4f71ba522a7e1d_prof);

    }

    public function block_facebook_sdk($context, array $blocks = array())
    {
        $__internal_eb57f591b49d0a73281b86929c854090f87cb23140b942a88545f45f53c0b014 = $this->env->getExtension("native_profiler");
        $__internal_eb57f591b49d0a73281b86929c854090f87cb23140b942a88545f45f53c0b014->enter($__internal_eb57f591b49d0a73281b86929c854090f87cb23140b942a88545f45f53c0b014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "facebook_sdk"));

        // line 12
        ob_start();
        // line 13
        echo "
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eb57f591b49d0a73281b86929c854090f87cb23140b942a88545f45f53c0b014->leave($__internal_eb57f591b49d0a73281b86929c854090f87cb23140b942a88545f45f53c0b014_prof);

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
