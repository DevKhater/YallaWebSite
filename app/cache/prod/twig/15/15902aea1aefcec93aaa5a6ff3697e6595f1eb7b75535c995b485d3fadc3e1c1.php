<?php

/* YallaWebsiteFrontendBundle:helper:googlePlusButton.html.twig */
class __TwigTemplate_1a3a6f609c0a310f2977d0818888fa38247089195ddd313f2f4f6c130ca90731 extends Twig_Template
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
";
        // line 2
        if (( !array_key_exists("url", $context) || ((isset($context["url"]) ? $context["url"] : null) == null))) {
            // line 3
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array());
        }
        // line 5
        echo "
";
        // line 6
        ob_start();
        // line 7
        echo " <div class=\"g-plusone\" data-size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
        echo "\" data-annotation=\"";
        echo twig_escape_filter($this->env, (isset($context["annotation"]) ? $context["annotation"] : null), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "\" data-href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"></div>

 <script type=\"text/javascript\">
   window.___gcfg = {lang: '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
        echo "'};

   (function() {
     var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
     po.src = 'https://apis.google.com/js/plusone.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
   })();
 </script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:helper:googlePlusButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  33 => 7,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if url is not defined or url == null %}*/
/*     {% set url = app.request.uri %}*/
/* {% endif %}*/
/* */
/* {% spaceless %}*/
/*  <div class="g-plusone" data-size="{{size}}" data-annotation="{{annotation}}" data-width="{{width}}" data-href="{{url}}"></div>*/
/* */
/*  <script type="text/javascript">*/
/*    window.___gcfg = {lang: '{{locale}}'};*/
/* */
/*    (function() {*/
/*      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;*/
/*      po.src = 'https://apis.google.com/js/plusone.js';*/
/*      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);*/
/*    })();*/
/*  </script>*/
/* */
/* {% endspaceless %}*/
