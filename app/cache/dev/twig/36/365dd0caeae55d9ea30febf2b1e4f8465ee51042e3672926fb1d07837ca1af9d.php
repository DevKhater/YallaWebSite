<?php

/* YallaWebsiteFrontendBundle:Template:artistSocialMedia.html.twig */
class __TwigTemplate_0171fac62a93efc84c60c5d0c4f2dbd87713b8cd39d656e5ac4b77f49416db86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1addc61c11c94c8c5e0e4f4219ebf794d1721fab5ebe62a8e59655b0f20c95d8 = $this->env->getExtension("native_profiler");
        $__internal_1addc61c11c94c8c5e0e4f4219ebf794d1721fab5ebe62a8e59655b0f20c95d8->enter($__internal_1addc61c11c94c8c5e0e4f4219ebf794d1721fab5ebe62a8e59655b0f20c95d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Template:artistSocialMedia.html.twig"));

        // line 1
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "facebook", array()))) {
            echo " 
    <a href='";
            // line 2
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "facebook", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/facebook_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        // line 6
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "googleplus", array()))) {
            echo " 
    
    <a href='";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "googleplus", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/googleplus_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        // line 12
        echo "
";
        // line 13
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "youtube", array()))) {
            echo " 
    <a href='";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "youtube", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/youtube_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        // line 18
        echo "
";
        // line 19
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "soundcloud", array()))) {
            echo " 
    <a href='";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "soundcloud", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/soundcloud_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        // line 24
        echo "
";
        // line 25
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "twitter", array()))) {
            echo " 
    <a href='";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "twitter", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/twitter_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        // line 30
        echo "
";
        // line 31
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "instagram", array()))) {
            echo " 
    <a href='";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "instagram", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/instagram_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        
        $__internal_1addc61c11c94c8c5e0e4f4219ebf794d1721fab5ebe62a8e59655b0f20c95d8->leave($__internal_1addc61c11c94c8c5e0e4f4219ebf794d1721fab5ebe62a8e59655b0f20c95d8_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Template:artistSocialMedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  109 => 32,  105 => 31,  102 => 30,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  79 => 21,  75 => 20,  71 => 19,  68 => 18,  62 => 15,  58 => 14,  54 => 13,  51 => 12,  45 => 9,  41 => 8,  36 => 6,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% if entity.sm.facebook is not null %} */
/*     <a href='{{entity.sm.facebook}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/facebook_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* {% if entity.sm.googleplus is not null %} */
/*     */
/*     <a href='{{entity.sm.googleplus}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/googleplus_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* */
/* {% if entity.sm.youtube is not null %} */
/*     <a href='{{entity.sm.youtube}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/youtube_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* */
/* {% if entity.sm.soundcloud is not null %} */
/*     <a href='{{entity.sm.soundcloud}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/soundcloud_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* */
/* {% if entity.sm.twitter is not null %} */
/*     <a href='{{entity.sm.twitter}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/twitter_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* */
/* {% if entity.sm.instagram is not null %} */
/*     <a href='{{entity.sm.instagram}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/instagram_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
