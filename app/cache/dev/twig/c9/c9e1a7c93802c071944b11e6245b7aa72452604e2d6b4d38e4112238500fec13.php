<?php

/* KunstmaanVotingBundle:Facebook:like-callback.html.twig */
class __TwigTemplate_3ab819dd989b50a3a5ac27a49b3fd40800ed76845099ef7dfd8a56459ca8bc3c extends Twig_Template
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
        $__internal_5ecb3661f58e71004da0d7f08bdd9a894d417db98a3e44ae6b961100acb3c335 = $this->env->getExtension("native_profiler");
        $__internal_5ecb3661f58e71004da0d7f08bdd9a894d417db98a3e44ae6b961100acb3c335->enter($__internal_5ecb3661f58e71004da0d7f08bdd9a894d417db98a3e44ae6b961100acb3c335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:Facebook:like-callback.html.twig"));

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
        
        $__internal_5ecb3661f58e71004da0d7f08bdd9a894d417db98a3e44ae6b961100acb3c335->leave($__internal_5ecb3661f58e71004da0d7f08bdd9a894d417db98a3e44ae6b961100acb3c335_prof);

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
