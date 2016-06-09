<?php

/* YallaWebsiteFrontendBundle:helper:socialButtons.html.twig */
class __TwigTemplate_fceee33a40ce6cd35c573259e65a337bd0c8b8f2f31a364816adc1c4a2b9a0ff extends Twig_Template
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
        $__internal_75005c9f2f19fec62e84f7e5bc509cca501be9d28ce3844d749afcd62bc5912e = $this->env->getExtension("native_profiler");
        $__internal_75005c9f2f19fec62e84f7e5bc509cca501be9d28ce3844d749afcd62bc5912e->enter($__internal_75005c9f2f19fec62e84f7e5bc509cca501be9d28ce3844d749afcd62bc5912e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:helper:socialButtons.html.twig"));

        // line 1
        echo "
<div id='socialButtonsLikeShare'>
    ";
        // line 3
        if ( !((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")) === false)) {
            // line 4
            echo "        <div class=\"button facebookButton\">
            ";
            // line 5
            echo $this->env->getExtension('ynl_social_bar')->getFacebookLikeButton((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")));
            echo "
        </div>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ( !((isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")) === false)) {
            // line 10
            echo "        <div class=\"button googleplus\">
            ";
            // line 11
            echo $this->env->getExtension('ynl_social_bar')->getGooglePlusButton((isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")));
            echo "
        </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ( !((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")) === false)) {
            // line 16
            echo "        <div class=\"button twitterButton\">
            ";
            // line 17
            echo $this->env->getExtension('ynl_social_bar')->getTwitterButton((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")));
            echo "
        </div>
    ";
        }
        // line 20
        echo "</div>";
        
        $__internal_75005c9f2f19fec62e84f7e5bc509cca501be9d28ce3844d749afcd62bc5912e->leave($__internal_75005c9f2f19fec62e84f7e5bc509cca501be9d28ce3844d749afcd62bc5912e_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:helper:socialButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  59 => 17,  56 => 16,  54 => 15,  51 => 14,  45 => 11,  42 => 10,  40 => 9,  37 => 8,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* */
/* <div id='socialButtonsLikeShare'>*/
/*     {% if facebook is not sameas(false) %}*/
/*         <div class="button facebookButton">*/
/*             {{ facebookButton(facebook) }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if googleplus is not sameas(false) %}*/
/*         <div class="button googleplus">*/
/*             {{ googlePlusButton(googleplus) }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if twitter is not sameas(false) %}*/
/*         <div class="button twitterButton">*/
/*             {{ twitterButton(twitter) }}*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
