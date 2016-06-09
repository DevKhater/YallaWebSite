<?php

/* YallaWebsiteFrontendBundle:Template:artistSocialMedia.html.twig */
class __TwigTemplate_33a714a5e0056470987867f02d404c3cc11a8878bd77c2dce2b09b94479a5b33 extends Twig_Template
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
        // line 1
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "facebook", array(), "any", true, true) &&  !null)) {
            echo " 
    <a href='";
            // line 2
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array()), "facebook", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/facebook_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        // line 6
        echo "

";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "googleplus", array(), "any", true, true) &&  !null)) {
            echo " 
    <a href='";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array()), "googleplus", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/googleplus_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        // line 13
        echo "
";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "youtube", array(), "any", true, true) &&  !null)) {
            echo " 
    <a href='";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array()), "youtube", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/youtube_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        // line 19
        echo "
";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "soundcloud", array(), "any", true, true) &&  !null)) {
            echo " 
    <a href='";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array()), "soundcloud", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/soundcloud_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        // line 25
        echo "
";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "twitter", array(), "any", true, true) &&  !null)) {
            echo " 
    <a href='";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array()), "twitter", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/twitter_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
        // line 31
        echo "
";
        // line 32
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "instagram", array(), "any", true, true) &&  !null)) {
            echo " 
    <a href='";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array()), "instagram", array()), "html", null, true);
            echo "'>
        <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/instagram_sm_icon.svg"), "html", null, true);
            echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
        }
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
        return array (  113 => 34,  109 => 33,  105 => 32,  102 => 31,  96 => 28,  92 => 27,  88 => 26,  85 => 25,  79 => 22,  75 => 21,  71 => 20,  68 => 19,  62 => 16,  58 => 15,  54 => 14,  51 => 13,  45 => 10,  41 => 9,  37 => 8,  33 => 6,  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% if entity.sm.facebook is defined and not null %} */
/*     <a href='{{entity.sm.facebook}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/facebook_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* */
/* */
/* {% if entity.sm.googleplus is defined and not null %} */
/*     <a href='{{entity.sm.googleplus}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/googleplus_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* */
/* {% if entity.sm.youtube is defined and not null %} */
/*     <a href='{{entity.sm.youtube}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/youtube_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* */
/* {% if entity.sm.soundcloud is defined and not null %} */
/*     <a href='{{entity.sm.soundcloud}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/soundcloud_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* */
/* {% if entity.sm.twitter is defined and not null %} */
/*     <a href='{{entity.sm.twitter}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/twitter_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* */
/* {% if entity.sm.instagram is defined and not null %} */
/*     <a href='{{entity.sm.instagram}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/instagram_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
