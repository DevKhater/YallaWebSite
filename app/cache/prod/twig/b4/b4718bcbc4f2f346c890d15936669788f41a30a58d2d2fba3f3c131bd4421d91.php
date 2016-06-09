<?php

/* YallaWebsiteFrontendBundle:helper:twitterButton.html.twig */
class __TwigTemplate_455f035ad06d7366b7b6d648bd0f17938d6f15c8ca1ef80c80e5546bdce9c54f extends Twig_Template
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
        echo " <a href=\"https://twitter.com/share\" class=\"twitter-share-button\"

   data-text=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "\" 
   data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"
   data-lang=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
        echo "\"

   ";
        // line 13
        if ( !((isset($context["via"]) ? $context["via"] : null) === false)) {
            // line 14
            echo "     data-via=\"";
            echo twig_escape_filter($this->env, (isset($context["via"]) ? $context["via"] : null), "html", null, true);
            echo "\"
   ";
        }
        // line 16
        echo "
   ";
        // line 17
        if ( !((isset($context["tag"]) ? $context["tag"] : null) === false)) {
            // line 18
            echo "     data-hashtags=\"";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
            echo "\"
   ";
        }
        // line 20
        echo " >";
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
        echo "</a>

 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return array (  69 => 20,  63 => 18,  61 => 17,  58 => 16,  52 => 14,  50 => 13,  45 => 11,  41 => 10,  37 => 9,  33 => 7,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
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
