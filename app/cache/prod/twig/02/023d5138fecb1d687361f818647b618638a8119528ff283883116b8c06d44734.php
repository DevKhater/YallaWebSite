<?php

/* YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig */
class __TwigTemplate_ca1cfc49eac4b102d6a40c0d9872b181cd004eb0b56b97a3901b0fbca67c5dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Venue Section";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Website Advertisment</h4>
        </div>
    </div>
";
        // line 10
        $this->displayBlock('controlleraction', $context, $blocks);
    }

    public function block_controlleraction($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Venue Section{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Website Advertisment</h4>*/
/*         </div>*/
/*     </div>*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
