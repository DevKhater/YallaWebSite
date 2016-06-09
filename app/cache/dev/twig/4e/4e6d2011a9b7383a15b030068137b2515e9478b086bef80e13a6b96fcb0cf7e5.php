<?php

/* YallaWebsiteFrontendBundle:Template:artistSocialMedia.html.twig */
class __TwigTemplate_7e1fb1b3b1721c554c08a525ec9dca9095d638677fe66f8a590649c5410f5a74 extends Twig_Template
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
        $__internal_59146f1bddbd201ffa6ec38797e0919bcc64caeac6f2aebbc76fa782ddbfb785 = $this->env->getExtension("native_profiler");
        $__internal_59146f1bddbd201ffa6ec38797e0919bcc64caeac6f2aebbc76fa782ddbfb785->enter($__internal_59146f1bddbd201ffa6ec38797e0919bcc64caeac6f2aebbc76fa782ddbfb785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Template:artistSocialMedia.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "facebook", array(), "any", true, true)) {
            echo " 
    ";
            // line 2
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "facebook", array()))) {
                echo " 
        <a href='";
                // line 3
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "facebook", array()), "html", null, true);
                echo "'>
            <img src=\"";
                // line 4
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/facebook_sm_icon.svg"), "html", null, true);
                echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
        </a>
    ";
            }
        }
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "googleplus", array(), "any", true, true)) {
            echo " 
    ";
            // line 9
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "googleplus", array()))) {
                echo " 

        <a href='";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "googleplus", array()), "html", null, true);
                echo "'>
            <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/googleplus_sm_icon.svg"), "html", null, true);
                echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
        </a>
    ";
            }
        }
        // line 16
        echo "
";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "youtube", array(), "any", true, true)) {
            echo " 
    ";
            // line 18
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "youtube", array()))) {
                echo " 
        <a href='";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "youtube", array()), "html", null, true);
                echo "'>
            <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/youtube_sm_icon.svg"), "html", null, true);
                echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
        </a>
    ";
            }
        }
        // line 24
        echo "
";
        // line 25
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "soundcloud", array(), "any", true, true)) {
            echo " 
";
            // line 26
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "soundcloud", array()))) {
                echo " 
    <a href='";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "soundcloud", array()), "html", null, true);
                echo "'>
        <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/soundcloud_sm_icon.svg"), "html", null, true);
                echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
            }
        }
        // line 32
        echo "
";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "twitter", array(), "any", true, true)) {
            echo " 
";
            // line 34
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "twitter", array()))) {
                echo " 
    <a href='";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "twitter", array()), "html", null, true);
                echo "'>
        <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/twitter_sm_icon.svg"), "html", null, true);
                echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
            }
        }
        // line 40
        echo "
";
        // line 41
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sm", array(), "any", false, true), "instagram", array(), "any", true, true)) {
            echo " 
";
            // line 42
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "instagram", array()))) {
                echo " 
    <a href='";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sm", array()), "instagram", array()), "html", null, true);
                echo "'>
        <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/instagram_sm_icon.svg"), "html", null, true);
                echo "\" alt=\"SM Icon\" height=\"40\" width=\"40\" />
    </a>
";
            }
        }
        
        $__internal_59146f1bddbd201ffa6ec38797e0919bcc64caeac6f2aebbc76fa782ddbfb785->leave($__internal_59146f1bddbd201ffa6ec38797e0919bcc64caeac6f2aebbc76fa782ddbfb785_prof);

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
        return array (  142 => 44,  138 => 43,  134 => 42,  130 => 41,  127 => 40,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  105 => 32,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  83 => 24,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  61 => 16,  54 => 12,  50 => 11,  45 => 9,  41 => 8,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% if entity.sm.facebook is defined %} */
/*     {% if entity.sm.facebook is not null %} */
/*         <a href='{{entity.sm.facebook}}'>*/
/*             <img src="{{ asset('bundles/yallawebsitefrontend/images/base/facebook_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*         </a>*/
/*     {% endif %}*/
/* {% endif %}*/
/* {% if entity.sm.googleplus is defined %} */
/*     {% if entity.sm.googleplus is not null %} */
/* */
/*         <a href='{{entity.sm.googleplus}}'>*/
/*             <img src="{{ asset('bundles/yallawebsitefrontend/images/base/googleplus_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*         </a>*/
/*     {% endif %}*/
/* {% endif %}*/
/* */
/* {% if entity.sm.youtube is defined %} */
/*     {% if entity.sm.youtube is not null %} */
/*         <a href='{{entity.sm.youtube}}'>*/
/*             <img src="{{ asset('bundles/yallawebsitefrontend/images/base/youtube_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*         </a>*/
/*     {% endif %}*/
/* {% endif %}*/
/* */
/* {% if entity.sm.soundcloud is defined %} */
/* {% if entity.sm.soundcloud is not null %} */
/*     <a href='{{entity.sm.soundcloud}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/soundcloud_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* {% endif %}*/
/* */
/* {% if entity.sm.twitter is defined %} */
/* {% if entity.sm.twitter is not null %} */
/*     <a href='{{entity.sm.twitter}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/twitter_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* {% endif %}*/
/* */
/* {% if entity.sm.instagram is defined %} */
/* {% if entity.sm.instagram is not null %} */
/*     <a href='{{entity.sm.instagram}}'>*/
/*         <img src="{{ asset('bundles/yallawebsitefrontend/images/base/instagram_sm_icon.svg') }}" alt="SM Icon" height="40" width="40" />*/
/*     </a>*/
/* {% endif %}*/
/* {% endif %}*/
