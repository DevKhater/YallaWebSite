<?php

/* KunstmaanVotingBundle:LinkedIn:share-callback.html.twig */
class __TwigTemplate_65c9b1e0818e1e73181ea59e8b9e4c59ed3eb0a004e0b22c834891af2abb990d extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    function linkedInShareCallback(\$reference){
        jQuery.ajax({
            url : '";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("voting_linkedinshare");
        echo "?reference=' + \$reference ";
        if (array_key_exists("value", $context)) {
            echo "+ '&value=";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "'";
        }
        // line 5
        echo "        });
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "KunstmaanVotingBundle:LinkedIn:share-callback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  24 => 4,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     function linkedInShareCallback($reference){*/
/*         jQuery.ajax({*/
/*             url : '{{ url('voting_linkedinshare') }}?reference=' + $reference {% if value is defined %}+ '&value={{ value }}'{% endif %}*/
/*         });*/
/*     }*/
/* </script>*/
/* */
