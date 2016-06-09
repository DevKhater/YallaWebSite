<?php

/* KunstmaanVotingBundle:Facebook:like-callback.html.twig */
class __TwigTemplate_c78ce57f00c6a354b1853c9b24561301a1ff49ee6dff27594b552ba8740f0b67 extends Twig_Template
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
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "'";
        }
        // line 7
        echo "                });
            }
        );
    }
</script>
";
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
        return array (  34 => 7,  26 => 6,  19 => 1,);
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
