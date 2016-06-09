<?php

/* KunstmaanVotingBundle:Facebook:like-callback.html.twig */
class __TwigTemplate_a318724294998262505cf208fdba21be52d0d4bd773a947b7acfa6529a6bd0b3 extends Twig_Template
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
        $__internal_7f1cf10eef867a1c83cf9e9eaf7327e4862c2627c5feded99c570a89ea81c954 = $this->env->getExtension("native_profiler");
        $__internal_7f1cf10eef867a1c83cf9e9eaf7327e4862c2627c5feded99c570a89ea81c954->enter($__internal_7f1cf10eef867a1c83cf9e9eaf7327e4862c2627c5feded99c570a89ea81c954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:Facebook:like-callback.html.twig"));

        // line 1
        echo "<script>
    window.fbAsyncInit = function() {
        FB.Event.subscribe('edge.create',
            function(response) {
                jQuery.ajax({
                    url : '";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("voting_facebooklike");
        echo "?response=' + response ";
        if (array_key_exists("value", $context)) {
            echo "+ '&value=";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "'";
        }
        // line 7
        echo "                });
            }
        );
    }
</script>
";
        
        $__internal_7f1cf10eef867a1c83cf9e9eaf7327e4862c2627c5feded99c570a89ea81c954->leave($__internal_7f1cf10eef867a1c83cf9e9eaf7327e4862c2627c5feded99c570a89ea81c954_prof);

    }

    public function getTemplateName()
    {
        return "KunstmaanVotingBundle:Facebook:like-callback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  29 => 6,  22 => 1,);
    }
}
/* <script>*/
/*     window.fbAsyncInit = function() {*/
/*         FB.Event.subscribe('edge.create',*/
/*             function(response) {*/
/*                 jQuery.ajax({*/
/*                     url : '{{ url('voting_facebooklike') }}?response=' + response {% if value is defined %}+ '&value={{ value }}'{% endif %}*/
/*                 });*/
/*             }*/
/*         );*/
/*     }*/
/* </script>*/
/* */
