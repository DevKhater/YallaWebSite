<?php

/* YallaWebsiteFrontendBundle:helper:socialButtons.html.twig */
class __TwigTemplate_251d862e1083e15b83cf105dae8a3f2b0d13e8496756de3259a8a18042da4b1d extends Twig_Template
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
        echo "
<div id='socialButtonsLikeShare'>
    ";
        // line 3
        if ( !((isset($context["facebook"]) ? $context["facebook"] : null) === false)) {
            // line 4
            echo "        <div class=\"button facebookButton\">
            ";
            // line 5
            echo $this->env->getExtension('ynl_social_bar')->getFacebookLikeButton((isset($context["facebook"]) ? $context["facebook"] : null));
            echo "
        </div>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ( !((isset($context["googleplus"]) ? $context["googleplus"] : null) === false)) {
            // line 10
            echo "        <div class=\"button googleplus\">
            ";
            // line 11
            echo $this->env->getExtension('ynl_social_bar')->getGooglePlusButton((isset($context["googleplus"]) ? $context["googleplus"] : null));
            echo "
        </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ( !((isset($context["twitter"]) ? $context["twitter"] : null) === false)) {
            // line 16
            echo "        <div class=\"button twitterButton\">
            ";
            // line 17
            echo $this->env->getExtension('ynl_social_bar')->getTwitterButton((isset($context["twitter"]) ? $context["twitter"] : null));
            echo "
        </div>
    ";
        }
        // line 20
        echo "</div>";
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
        return array (  62 => 20,  56 => 17,  53 => 16,  51 => 15,  48 => 14,  42 => 11,  39 => 10,  37 => 9,  34 => 8,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
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
