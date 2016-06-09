<?php

/* YallaWebsiteFrontendBundle:helper:twitterButton.html.twig */
class __TwigTemplate_1e4286047c1c5aac7c1c70a566363bf8d6444bc98d9012518f4f3c0cb4df3416 extends Twig_Template
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
        $__internal_6dff07d78875c74791ec2a94daf47470ade50a5b880dd765b33af66377d6f08c = $this->env->getExtension("native_profiler");
        $__internal_6dff07d78875c74791ec2a94daf47470ade50a5b880dd765b33af66377d6f08c->enter($__internal_6dff07d78875c74791ec2a94daf47470ade50a5b880dd765b33af66377d6f08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:helper:twitterButton.html.twig"));

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
        
        $__internal_6dff07d78875c74791ec2a94daf47470ade50a5b880dd765b33af66377d6f08c->leave($__internal_6dff07d78875c74791ec2a94daf47470ade50a5b880dd765b33af66377d6f08c_prof);

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
