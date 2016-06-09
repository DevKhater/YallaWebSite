<?php

/* KunstmaanVotingBundle:LinkedIn:share-callback.html.twig */
class __TwigTemplate_9326e61bda93238483276bd3c8e9e8bacdd59e28da6425e6293cfcfeda7629cf extends Twig_Template
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
        $__internal_c33d7b25ebeb2ada2c7583b03ad295556e8b549ef34efcd974f3ef0ac294cf73 = $this->env->getExtension("native_profiler");
        $__internal_c33d7b25ebeb2ada2c7583b03ad295556e8b549ef34efcd974f3ef0ac294cf73->enter($__internal_c33d7b25ebeb2ada2c7583b03ad295556e8b549ef34efcd974f3ef0ac294cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:LinkedIn:share-callback.html.twig"));

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
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "'";
        }
        // line 5
        echo "        });
    }
</script>
";
        
        $__internal_c33d7b25ebeb2ada2c7583b03ad295556e8b549ef34efcd974f3ef0ac294cf73->leave($__internal_c33d7b25ebeb2ada2c7583b03ad295556e8b549ef34efcd974f3ef0ac294cf73_prof);

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
        return array (  35 => 5,  27 => 4,  22 => 1,);
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
