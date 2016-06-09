<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_b74b04cd4ec0235309b36c7f61303b30ef1727009bacf67779d6e79aa2de5c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc63d6e37dba762917af55e0d2fcf40b906df9d3caefb94f76a2db80c93fdc4b = $this->env->getExtension("native_profiler");
        $__internal_dc63d6e37dba762917af55e0d2fcf40b906df9d3caefb94f76a2db80c93fdc4b->enter($__internal_dc63d6e37dba762917af55e0d2fcf40b906df9d3caefb94f76a2db80c93fdc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_dc63d6e37dba762917af55e0d2fcf40b906df9d3caefb94f76a2db80c93fdc4b->leave($__internal_dc63d6e37dba762917af55e0d2fcf40b906df9d3caefb94f76a2db80c93fdc4b_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_0194297ff51a32a5ec220205d790b76fe80332efce477c0245affd25bb28b159 = $this->env->getExtension("native_profiler");
        $__internal_0194297ff51a32a5ec220205d790b76fe80332efce477c0245affd25bb28b159->enter($__internal_0194297ff51a32a5ec220205d790b76fe80332efce477c0245affd25bb28b159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_0194297ff51a32a5ec220205d790b76fe80332efce477c0245affd25bb28b159->leave($__internal_0194297ff51a32a5ec220205d790b76fe80332efce477c0245affd25bb28b159_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  34 => 10,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% block hwi_oauth_content %}*/
/*             {% endblock hwi_oauth_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
