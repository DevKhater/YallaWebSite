<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_2e82119cf46a0ce88660ca733ab2dd29c69691bc701967f65e29f9499a72e004 extends Twig_Template
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
        $__internal_1ff3005e4baa2940ce25e6c1d065c42f53c7162c2ef344e07e638020af6460e8 = $this->env->getExtension("native_profiler");
        $__internal_1ff3005e4baa2940ce25e6c1d065c42f53c7162c2ef344e07e638020af6460e8->enter($__internal_1ff3005e4baa2940ce25e6c1d065c42f53c7162c2ef344e07e638020af6460e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_1ff3005e4baa2940ce25e6c1d065c42f53c7162c2ef344e07e638020af6460e8->leave($__internal_1ff3005e4baa2940ce25e6c1d065c42f53c7162c2ef344e07e638020af6460e8_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
