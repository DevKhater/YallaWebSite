<?php

/* YallaWebsiteFrontendBundle:helper:googlePlusButton.html.twig */
class __TwigTemplate_80113fc67d2433a2b036a611ac17a7de63a768ef5f12ebc89970ed57180e3340 extends Twig_Template
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
        $__internal_879649b60e19aaab9636cff3650d27de21aebf2d94e036d61adca1fbcd3f2bbb = $this->env->getExtension("native_profiler");
        $__internal_879649b60e19aaab9636cff3650d27de21aebf2d94e036d61adca1fbcd3f2bbb->enter($__internal_879649b60e19aaab9636cff3650d27de21aebf2d94e036d61adca1fbcd3f2bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:helper:googlePlusButton.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (( !array_key_exists("url", $context) || ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == null))) {
            // line 3
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array());
        }
        // line 5
        echo "
";
        // line 6
        ob_start();
        // line 7
        echo " <div class=\"g-plusone\" data-size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo "\" data-annotation=\"";
        echo twig_escape_filter($this->env, (isset($context["annotation"]) ? $context["annotation"] : $this->getContext($context, "annotation")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\"></div>

 <script type=\"text/javascript\">
   window.___gcfg = {lang: '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "'};

   (function() {
     var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
     po.src = 'https://apis.google.com/js/plusone.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
   })();
 </script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_879649b60e19aaab9636cff3650d27de21aebf2d94e036d61adca1fbcd3f2bbb->leave($__internal_879649b60e19aaab9636cff3650d27de21aebf2d94e036d61adca1fbcd3f2bbb_prof);

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
        return array (  49 => 10,  36 => 7,  34 => 6,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
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
