<?php

/* YallaWebsiteFrontendBundle:helper:facebookButton.html.twig */
class __TwigTemplate_126d122ae1518af4ab889419c57725a6f3626be7c99dff0d08180d9c99ea87de extends Twig_Template
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
        if (( !array_key_exists("url", $context) || ((isset($context["url"]) ? $context["url"] : null) == null))) {
            // line 2
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array());
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
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" data-layout=\"button_count\" data-mobile-iframe=\"true\"></div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return array (  48 => 29,  34 => 17,  32 => 7,  30 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
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
