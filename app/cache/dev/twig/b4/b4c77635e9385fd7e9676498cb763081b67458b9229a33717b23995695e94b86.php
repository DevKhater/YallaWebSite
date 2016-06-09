<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_f06b899591abfd1127e0cca4909571b0ec0332848cf0555e5c8ef8f4302e2578 extends Twig_Template
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
        $__internal_b153ee42db2d93c1d51461d0d2048445ebdad618f01c7d8f8072a5f2c81c7ba5 = $this->env->getExtension("native_profiler");
        $__internal_b153ee42db2d93c1d51461d0d2048445ebdad618f01c7d8f8072a5f2c81c7ba5->enter($__internal_b153ee42db2d93c1d51461d0d2048445ebdad618f01c7d8f8072a5f2c81c7ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StfalconTinymceBundle:Script:init.html.twig"));

        // line 1
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery"))) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) ? $context["tinymce_jquery"] : $this->getContext($context, "tinymce_jquery"))) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.jquery.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/ready.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.standard.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
    //<![CDATA[
    stfalcon_tinymce_config = ";
        // line 14
        echo (isset($context["tinymce_config"]) ? $context["tinymce_config"] : $this->getContext($context, "tinymce_config"));
        echo ";
    initTinyMCE();
    //]]>
</script>
";
        
        $__internal_b153ee42db2d93c1d51461d0d2048445ebdad618f01c7d8f8072a5f2c81c7ba5->leave($__internal_b153ee42db2d93c1d51461d0d2048445ebdad618f01c7d8f8072a5f2c81c7ba5_prof);

    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  54 => 12,  49 => 10,  45 => 9,  40 => 8,  35 => 6,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if include_jquery %}*/
/*     <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>*/
/* {% endif %}*/
/* {% if tinymce_jquery %}*/
/*     <script type="text/javascript" src="{{ asset(base_url~'bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js', asset_package_name) }}"></script>*/
/*     <script type="text/javascript" src="{{ asset(base_url~'bundles/stfalcontinymce/js/init.jquery.js', asset_package_name) }}"></script>*/
/* {% else %}*/
/*     <script type="text/javascript" src="{{ asset(base_url~'bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js', asset_package_name) }}"></script>*/
/*     <script type="text/javascript" src="{{ asset(base_url~'bundles/stfalcontinymce/js/ready.min.js', asset_package_name) }}"></script>*/
/*     <script type="text/javascript" src="{{ asset(base_url~'bundles/stfalcontinymce/js/init.standard.js', asset_package_name) }}"></script>*/
/* {% endif %}*/
/* <script type="text/javascript">*/
/*     //<![CDATA[*/
/*     stfalcon_tinymce_config = {{ tinymce_config|raw }};*/
/*     initTinyMCE();*/
/*     //]]>*/
/* </script>*/
/* */
