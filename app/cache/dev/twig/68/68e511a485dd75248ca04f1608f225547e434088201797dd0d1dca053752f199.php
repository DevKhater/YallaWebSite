<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2fd3663ce9276a8aacb1ec77452e6837556eb23b95c0a41b73ee2b0067349123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6844b45de9f31b6aefaf46015465ae6a716ca4584bd9b640c80b82d97145fec1 = $this->env->getExtension("native_profiler");
        $__internal_6844b45de9f31b6aefaf46015465ae6a716ca4584bd9b640c80b82d97145fec1->enter($__internal_6844b45de9f31b6aefaf46015465ae6a716ca4584bd9b640c80b82d97145fec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6844b45de9f31b6aefaf46015465ae6a716ca4584bd9b640c80b82d97145fec1->leave($__internal_6844b45de9f31b6aefaf46015465ae6a716ca4584bd9b640c80b82d97145fec1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9821fcecf8d366e440e6cfca66a2d53d882acd02ce1f8467e2cfd01d7cf571d1 = $this->env->getExtension("native_profiler");
        $__internal_9821fcecf8d366e440e6cfca66a2d53d882acd02ce1f8467e2cfd01d7cf571d1->enter($__internal_9821fcecf8d366e440e6cfca66a2d53d882acd02ce1f8467e2cfd01d7cf571d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9821fcecf8d366e440e6cfca66a2d53d882acd02ce1f8467e2cfd01d7cf571d1->leave($__internal_9821fcecf8d366e440e6cfca66a2d53d882acd02ce1f8467e2cfd01d7cf571d1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a68960e4ae2efb4efcf8ea6b3e9b45b3b6e88ecf7d36d2512971c7e25b19d1e0 = $this->env->getExtension("native_profiler");
        $__internal_a68960e4ae2efb4efcf8ea6b3e9b45b3b6e88ecf7d36d2512971c7e25b19d1e0->enter($__internal_a68960e4ae2efb4efcf8ea6b3e9b45b3b6e88ecf7d36d2512971c7e25b19d1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a68960e4ae2efb4efcf8ea6b3e9b45b3b6e88ecf7d36d2512971c7e25b19d1e0->leave($__internal_a68960e4ae2efb4efcf8ea6b3e9b45b3b6e88ecf7d36d2512971c7e25b19d1e0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_67ef0c2b2e14d3420608dc8a84b98da39a7a131bf3fd175d32035dc10037cbbd = $this->env->getExtension("native_profiler");
        $__internal_67ef0c2b2e14d3420608dc8a84b98da39a7a131bf3fd175d32035dc10037cbbd->enter($__internal_67ef0c2b2e14d3420608dc8a84b98da39a7a131bf3fd175d32035dc10037cbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_67ef0c2b2e14d3420608dc8a84b98da39a7a131bf3fd175d32035dc10037cbbd->leave($__internal_67ef0c2b2e14d3420608dc8a84b98da39a7a131bf3fd175d32035dc10037cbbd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
