<?php

/* YallaWebsiteFrontendBundle:helper:twitterButton.html.twig */
class __TwigTemplate_05bd6431ccbb8ccecca9848bdfa15e892ee45ab980ecb2cb04756e1ba72e8a93 extends Twig_Template
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
        $__internal_c84a08911cb78861037950c0df9741c69d95835ae71c13f2926c6c3c9a92912e = $this->env->getExtension("native_profiler");
        $__internal_c84a08911cb78861037950c0df9741c69d95835ae71c13f2926c6c3c9a92912e->enter($__internal_c84a08911cb78861037950c0df9741c69d95835ae71c13f2926c6c3c9a92912e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:helper:twitterButton.html.twig"));

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
        echo " <a href=\"https://twitter.com/share\" class=\"twitter-share-button\"

   data-text=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "\" 
   data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\"
   data-lang=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "\"

   ";
        // line 13
        if ( !((isset($context["via"]) ? $context["via"] : $this->getContext($context, "via")) === false)) {
            // line 14
            echo "     data-via=\"";
            echo twig_escape_filter($this->env, (isset($context["via"]) ? $context["via"] : $this->getContext($context, "via")), "html", null, true);
            echo "\"
   ";
        }
        // line 16
        echo "
   ";
        // line 17
        if ( !((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) === false)) {
            // line 18
            echo "     data-hashtags=\"";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
            echo "\"
   ";
        }
        // line 20
        echo " >";
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
        echo "</a>

 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c84a08911cb78861037950c0df9741c69d95835ae71c13f2926c6c3c9a92912e->leave($__internal_c84a08911cb78861037950c0df9741c69d95835ae71c13f2926c6c3c9a92912e_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:helper:twitterButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  66 => 18,  64 => 17,  61 => 16,  55 => 14,  53 => 13,  48 => 11,  44 => 10,  40 => 9,  36 => 7,  34 => 6,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {% if url is not defined or url == null %}*/
/*     {% set url = app.request.uri %}*/
/* {% endif %}*/
/* */
/* {% spaceless %}*/
/*  <a href="https://twitter.com/share" class="twitter-share-button"*/
/* */
/*    data-text="{{message}}" */
/*    data-url="{{url}}"*/
/*    data-lang="{{locale}}"*/
/* */
/*    {% if via is not sameas(false) %}*/
/*      data-via="{{via}}"*/
/*    {% endif %}*/
/* */
/*    {% if tag is not sameas(false) %}*/
/*      data-hashtags="{{tag}}"*/
/*    {% endif %}*/
/*  >{{text}}</a>*/
/* */
/*  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>*/
/* {% endspaceless %}*/
