<?php

/* YallaWebsiteFrontendBundle:helper:facebookButton.html.twig */
class __TwigTemplate_b1bd32d0fd6d6030ee4ac3d03f843fc9c84e43d9963699cf04658765d15e0ec6 extends Twig_Template
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
        $__internal_dc20fcec01953b91b37d7170ad86f8e17d809c41480f720d6de6145df34333a6 = $this->env->getExtension("native_profiler");
        $__internal_dc20fcec01953b91b37d7170ad86f8e17d809c41480f720d6de6145df34333a6->enter($__internal_dc20fcec01953b91b37d7170ad86f8e17d809c41480f720d6de6145df34333a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:helper:facebookButton.html.twig"));

        // line 1
        if (( !array_key_exists("url", $context) || ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == null))) {
            // line 2
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array());
        }
        // line 4
        echo "
";
        // line 5
        ob_start();
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 17
        echo "
    <div id=\"fb-root\"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/en_US/all.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div class=\"fb-share-button\" data-href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" data-layout=\"button_count\" data-mobile-iframe=\"true\"></div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dc20fcec01953b91b37d7170ad86f8e17d809c41480f720d6de6145df34333a6->leave($__internal_dc20fcec01953b91b37d7170ad86f8e17d809c41480f720d6de6145df34333a6_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:helper:facebookButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 29,  37 => 17,  35 => 7,  33 => 6,  31 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if url is not defined or url == null %}*/
/*     {% set url = app.request.uri %}*/
/* {% endif %}*/
/* */
/* {% spaceless %}*/
/*     {# initialize facebook SDK #}*/
/*     {# <div id="fb-root"></div>*/
/*      <script>(function(d, s, id) {*/
/*        var js, fjs = d.getElementsByTagName(s)[0];*/
/*        if (d.getElementById(id)) return;*/
/*        js = d.createElement(s); js.id = id;*/
/*        js.src = "//connect.facebook.net/{{locale}}/all.js#xfbml=1";*/
/*        fjs.parentNode.insertBefore(js, fjs);*/
/*      }(document, 'script', 'facebook-jssdk'));</script>*/
/*     */
/*      <div class="fb-like" data-href="{{url}}" data-send="{{send}}" data-layout="{{layout}}" data-width="{{width}}" data-show-faces="{{showFaces}}"></div>#}*/
/* */
/*     <div id="fb-root"></div>*/
/*     <script>(function (d, s, id) {*/
/*             var js, fjs = d.getElementsByTagName(s)[0];*/
/*             if (d.getElementById(id))*/
/*                 return;*/
/*             js = d.createElement(s);*/
/*             js.id = id;*/
/*             js.src = "//connect.facebook.net/en_US/all.js";*/
/*             fjs.parentNode.insertBefore(js, fjs);*/
/*         }(document, 'script', 'facebook-jssdk'));</script>*/
/* */
/*     <div class="fb-share-button" data-href="{{url}}" data-layout="button_count" data-mobile-iframe="true"></div>*/
/* */
/* {% endspaceless %}*/
