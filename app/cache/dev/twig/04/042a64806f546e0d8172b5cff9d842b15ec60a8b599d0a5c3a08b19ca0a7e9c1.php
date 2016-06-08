<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fa4cbe9d726531e23e14c9414eb7400a14c05beb70e5e1fb7ed128fbf0d83beb extends Twig_Template
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
        $__internal_1f77c6c2c460ebb78de934f669c0c6679a084a6ffc1949fd2eaea6493cbfe7b1 = $this->env->getExtension("native_profiler");
        $__internal_1f77c6c2c460ebb78de934f669c0c6679a084a6ffc1949fd2eaea6493cbfe7b1->enter($__internal_1f77c6c2c460ebb78de934f669c0c6679a084a6ffc1949fd2eaea6493cbfe7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1f77c6c2c460ebb78de934f669c0c6679a084a6ffc1949fd2eaea6493cbfe7b1->leave($__internal_1f77c6c2c460ebb78de934f669c0c6679a084a6ffc1949fd2eaea6493cbfe7b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
