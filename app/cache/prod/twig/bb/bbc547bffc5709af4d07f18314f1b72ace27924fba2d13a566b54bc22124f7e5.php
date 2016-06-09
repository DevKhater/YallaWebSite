<?php

/* KunstmaanVotingBundle:Facebook:send-callback.html.twig */
class __TwigTemplate_b0e293c8386bb952eb84a14c97160fe36b618d1af9bd19da1d67dca6083f9d65 extends Twig_Template
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
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
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
        return array (  36 => 9,  28 => 8,  19 => 1,);
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
