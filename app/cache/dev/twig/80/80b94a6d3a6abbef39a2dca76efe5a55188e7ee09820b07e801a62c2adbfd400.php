<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_eb7a4b063b97d5c418105d9b3ed5439354eb5482a32d8f2da7fab67bacff2f28 extends Twig_Template
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
        $__internal_14f2acf75467bd55564d7cf7b2dbe61f3a023685ad2770da638f82a03ca1c1c4 = $this->env->getExtension("native_profiler");
        $__internal_14f2acf75467bd55564d7cf7b2dbe61f3a023685ad2770da638f82a03ca1c1c4->enter($__internal_14f2acf75467bd55564d7cf7b2dbe61f3a023685ad2770da638f82a03ca1c1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_14f2acf75467bd55564d7cf7b2dbe61f3a023685ad2770da638f82a03ca1c1c4->leave($__internal_14f2acf75467bd55564d7cf7b2dbe61f3a023685ad2770da638f82a03ca1c1c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
