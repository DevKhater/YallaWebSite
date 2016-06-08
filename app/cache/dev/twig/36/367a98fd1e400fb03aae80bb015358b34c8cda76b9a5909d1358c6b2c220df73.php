<?php

/* KunstmaanVotingBundle:LinkedIn:share-callback.html.twig */
class __TwigTemplate_3e6b39f496733d9d28e1b3c6e0c0f1dfe3d37e2ad6cd5cfbf3d6f1e1fcca31f0 extends Twig_Template
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
        $__internal_2d87d1a000fa06ecde968ffd6f29f3e55ee00133c607c59569be1f5df03324ea = $this->env->getExtension("native_profiler");
        $__internal_2d87d1a000fa06ecde968ffd6f29f3e55ee00133c607c59569be1f5df03324ea->enter($__internal_2d87d1a000fa06ecde968ffd6f29f3e55ee00133c607c59569be1f5df03324ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:LinkedIn:share-callback.html.twig"));

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
        
        $__internal_2d87d1a000fa06ecde968ffd6f29f3e55ee00133c607c59569be1f5df03324ea->leave($__internal_2d87d1a000fa06ecde968ffd6f29f3e55ee00133c607c59569be1f5df03324ea_prof);

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
