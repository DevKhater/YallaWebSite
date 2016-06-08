<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_b41dd1d367c7e72301154e05eba85456d3d1348a5ff25100251b37a266e9f78f extends Twig_Template
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
        $__internal_3f2cc405d969ac29476d8a272df5420ef090a49a639caad81d7bc8734b12ca6a = $this->env->getExtension("native_profiler");
        $__internal_3f2cc405d969ac29476d8a272df5420ef090a49a639caad81d7bc8734b12ca6a->enter($__internal_3f2cc405d969ac29476d8a272df5420ef090a49a639caad81d7bc8734b12ca6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

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
        
        $__internal_3f2cc405d969ac29476d8a272df5420ef090a49a639caad81d7bc8734b12ca6a->leave($__internal_3f2cc405d969ac29476d8a272df5420ef090a49a639caad81d7bc8734b12ca6a_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_d6d18ef963bb321e84b3772da3327bb85dc153617b6d93c8c9c75366402cce8d = $this->env->getExtension("native_profiler");
        $__internal_d6d18ef963bb321e84b3772da3327bb85dc153617b6d93c8c9c75366402cce8d->enter($__internal_d6d18ef963bb321e84b3772da3327bb85dc153617b6d93c8c9c75366402cce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_d6d18ef963bb321e84b3772da3327bb85dc153617b6d93c8c9c75366402cce8d->leave($__internal_d6d18ef963bb321e84b3772da3327bb85dc153617b6d93c8c9c75366402cce8d_prof);

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
