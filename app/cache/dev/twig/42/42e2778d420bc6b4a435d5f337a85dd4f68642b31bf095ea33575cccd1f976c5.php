<?php

/* KunstmaanVotingBundle:Facebook:send-callback.html.twig */
class __TwigTemplate_2de0d18e91ecf4fd1409bf5bd1052ba4f6777c85770d0cca33d8bef25591a609 extends Twig_Template
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
        $__internal_30bfa77238925dc903c9220c632e13b2593cd8ed37660d86f0213b8d244d4929 = $this->env->getExtension("native_profiler");
        $__internal_30bfa77238925dc903c9220c632e13b2593cd8ed37660d86f0213b8d244d4929->enter($__internal_30bfa77238925dc903c9220c632e13b2593cd8ed37660d86f0213b8d244d4929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:Facebook:send-callback.html.twig"));

        // line 1
        echo "<script>
    window.fbAsyncInit = function() {
        FB.Event.subscribe('message.send',
            function(response) {
                if (!!response) {
                    // Post was published
                    jQuery.ajax({
                        url : '";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("voting_facebooksend");
        echo "?response=' + response ";
        if (array_key_exists("value", $context)) {
            echo "+ '&value=";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "'";
        }
        // line 9
        echo "                    });
                }
            }
        );
    }
</script>
";
        
        $__internal_30bfa77238925dc903c9220c632e13b2593cd8ed37660d86f0213b8d244d4929->leave($__internal_30bfa77238925dc903c9220c632e13b2593cd8ed37660d86f0213b8d244d4929_prof);

    }

    public function getTemplateName()
    {
        return "KunstmaanVotingBundle:Facebook:send-callback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  31 => 8,  22 => 1,);
    }
}
/* <script>*/
/*     window.fbAsyncInit = function() {*/
/*         FB.Event.subscribe('message.send',*/
/*             function(response) {*/
/*                 if (!!response) {*/
/*                     // Post was published*/
/*                     jQuery.ajax({*/
/*                         url : '{{ url('voting_facebooksend') }}?response=' + response {% if value is defined %}+ '&value={{ value }}'{% endif %}*/
/*                     });*/
/*                 }*/
/*             }*/
/*         );*/
/*     }*/
/* </script>*/
/* */
