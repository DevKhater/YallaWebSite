<?php

/* YallaWebsiteFrontendBundle:Template:socialMediaShare.html.twig */
class __TwigTemplate_674ab18551ef5c34ca2289113623d08f7133f56384fda5ec9d94646d16c38fb4 extends Twig_Template
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
        $__internal_536b2ee02d0a479ef9d0d9407589599ff6ed0b93e0f4d575c3c5a6751e57f0bd = $this->env->getExtension("native_profiler");
        $__internal_536b2ee02d0a479ef9d0d9407589599ff6ed0b93e0f4d575c3c5a6751e57f0bd->enter($__internal_536b2ee02d0a479ef9d0d9407589599ff6ed0b93e0f4d575c3c5a6751e57f0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Template:socialMediaShare.html.twig"));

        // line 1
        echo "<a href=\"http://www.facebook.com/sharer.php?u=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getUri", array()), "html", null, true);
        echo "&t=";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "name", array())), "html", null, true);
        echo "\" class=\"socialite facebook-like\" data-href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getUri", array()), "html", null, true);
        echo "\" data-send=\"false\" data-layout=\"box_count\" data-width=\"60\" data-show-faces=\"false\" rel=\"nofollow\" target=\"_blank\"><span class=\"vhidden\">
        <img class ='socialMediaIcons' src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/facebook_sm_icon.svg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "facebook"), "html", null, true);
        echo " Icon\" />
    </span></a>
<a href=\"http://twitter.com/share\" class=\"socialite twitter-share\" data-text=\"Socialite.js\" data-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getUri", array()), "html", null, true);
        echo "\" data-count=\"vertical\" rel=\"nofollow\" target=\"_blank\"><span class=\"vhidden\">
        <img class ='socialMediaIcons'src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/twitter_sm_icon.svg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "twitter"), "html", null, true);
        echo " Icon\" />
    </span></a>
<a href=\"https://plus.google.com/share?url=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getUri", array()), "html", null, true);
        echo "\" class=\"socialite googleplus-one\" data-size=\"tall\" data-href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getUri", array()), "html", null, true);
        echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"vhidden\">
        <img class ='socialMediaIcons'src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/base/googleplus_sm_icon.svg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "google plus"), "html", null, true);
        echo " Icon\" />
    </span></a>
";
        
        $__internal_536b2ee02d0a479ef9d0d9407589599ff6ed0b93e0f4d575c3c5a6751e57f0bd->leave($__internal_536b2ee02d0a479ef9d0d9407589599ff6ed0b93e0f4d575c3c5a6751e57f0bd_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Template:socialMediaShare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  42 => 5,  38 => 4,  31 => 2,  22 => 1,);
    }
}
/* <a href="http://www.facebook.com/sharer.php?u={{ app.request.getUri }}&t={{ gallery.name|url_encode() }}" class="socialite facebook-like" data-href="{{ app.request.getUri }}" data-send="false" data-layout="box_count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank"><span class="vhidden">*/
/*         <img class ='socialMediaIcons' src="{{ asset('bundles/yallawebsitefrontend/images/base/facebook_sm_icon.svg') }}" alt="{{'facebook'|capitalize}} Icon" />*/
/*     </span></a>*/
/* <a href="http://twitter.com/share" class="socialite twitter-share" data-text="Socialite.js" data-url="{{ app.request.getUri }}" data-count="vertical" rel="nofollow" target="_blank"><span class="vhidden">*/
/*         <img class ='socialMediaIcons'src="{{ asset('bundles/yallawebsitefrontend/images/base/twitter_sm_icon.svg') }}" alt="{{'twitter'|capitalize}} Icon" />*/
/*     </span></a>*/
/* <a href="https://plus.google.com/share?url={{ app.request.getUri }}" class="socialite googleplus-one" data-size="tall" data-href="{{ app.request.getUri }}" rel="nofollow" target="_blank"><span class="vhidden">*/
/*         <img class ='socialMediaIcons'src="{{ asset('bundles/yallawebsitefrontend/images/base/googleplus_sm_icon.svg') }}" alt="{{'google plus'|capitalize}} Icon" />*/
/*     </span></a>*/
/* */
