<?php

/* YallaWebsiteFrontendBundle:helper:googlePlusButton.html.twig */
class __TwigTemplate_95a288c2d7622035a0bfaf37dc22daf8d809293da367c81d6eb2f3aa826c9fe1 extends Twig_Template
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
        $__internal_37ed68cea6d08ef06350ef87e1f7baad2cea1e90ec9f75d698482dace4a6bd57 = $this->env->getExtension("native_profiler");
        $__internal_37ed68cea6d08ef06350ef87e1f7baad2cea1e90ec9f75d698482dace4a6bd57->enter($__internal_37ed68cea6d08ef06350ef87e1f7baad2cea1e90ec9f75d698482dace4a6bd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:helper:googlePlusButton.html.twig"));

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
        
        $__internal_37ed68cea6d08ef06350ef87e1f7baad2cea1e90ec9f75d698482dace4a6bd57->leave($__internal_37ed68cea6d08ef06350ef87e1f7baad2cea1e90ec9f75d698482dace4a6bd57_prof);

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
