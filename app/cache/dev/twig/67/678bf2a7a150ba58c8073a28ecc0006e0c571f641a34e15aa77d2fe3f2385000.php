<?php

/* KunstmaanVotingBundle:Facebook:send-callback.html.twig */
class __TwigTemplate_68a21646272edaf170344dfe6ee8f3de98c49df47c6f3595c5d02a4314a647b8 extends Twig_Template
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
        $__internal_5457a4b51d51582fb622ff91068c3ce915dc0310d87a8031c0725b23099bd5e7 = $this->env->getExtension("native_profiler");
        $__internal_5457a4b51d51582fb622ff91068c3ce915dc0310d87a8031c0725b23099bd5e7->enter($__internal_5457a4b51d51582fb622ff91068c3ce915dc0310d87a8031c0725b23099bd5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:Facebook:send-callback.html.twig"));

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
        
        $__internal_5457a4b51d51582fb622ff91068c3ce915dc0310d87a8031c0725b23099bd5e7->leave($__internal_5457a4b51d51582fb622ff91068c3ce915dc0310d87a8031c0725b23099bd5e7_prof);

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
