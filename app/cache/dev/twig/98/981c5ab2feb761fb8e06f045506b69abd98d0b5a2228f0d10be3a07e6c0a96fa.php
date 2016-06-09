<?php

/* YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig */
class __TwigTemplate_4da49fd2ec03a2dbeef7987527985034351aca5983b7ed161ba068cee250c2f5 extends Twig_Template
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
        $__internal_34fbd309996b46029d34322fbb1b7a2980dba93d4a9ecdd776926d3386b9c72f = $this->env->getExtension("native_profiler");
        $__internal_34fbd309996b46029d34322fbb1b7a2980dba93d4a9ecdd776926d3386b9c72f->enter($__internal_34fbd309996b46029d34322fbb1b7a2980dba93d4a9ecdd776926d3386b9c72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34fbd309996b46029d34322fbb1b7a2980dba93d4a9ecdd776926d3386b9c72f->leave($__internal_34fbd309996b46029d34322fbb1b7a2980dba93d4a9ecdd776926d3386b9c72f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9080582385641aa402c539cc979aa31ee13ad3dfb1456a712ada066f16393f37 = $this->env->getExtension("native_profiler");
        $__internal_9080582385641aa402c539cc979aa31ee13ad3dfb1456a712ada066f16393f37->enter($__internal_9080582385641aa402c539cc979aa31ee13ad3dfb1456a712ada066f16393f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Venue Section";
        
        $__internal_9080582385641aa402c539cc979aa31ee13ad3dfb1456a712ada066f16393f37->leave($__internal_9080582385641aa402c539cc979aa31ee13ad3dfb1456a712ada066f16393f37_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_673ff86be5591d1129becd97d5be3f25485f53892b6eb6239bbfad0b808b84c7 = $this->env->getExtension("native_profiler");
        $__internal_673ff86be5591d1129becd97d5be3f25485f53892b6eb6239bbfad0b808b84c7->enter($__internal_673ff86be5591d1129becd97d5be3f25485f53892b6eb6239bbfad0b808b84c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Website Advertisment</h4>
        </div>
    </div>
";
        // line 10
        $this->displayBlock('controlleraction', $context, $blocks);
        
        $__internal_673ff86be5591d1129becd97d5be3f25485f53892b6eb6239bbfad0b808b84c7->leave($__internal_673ff86be5591d1129becd97d5be3f25485f53892b6eb6239bbfad0b808b84c7_prof);

    }

    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_ac4b71730ed887b0cebef1a7b9209316120ea6fbdf0837c1c3e8c07f6ba491a0 = $this->env->getExtension("native_profiler");
        $__internal_ac4b71730ed887b0cebef1a7b9209316120ea6fbdf0837c1c3e8c07f6ba491a0->enter($__internal_ac4b71730ed887b0cebef1a7b9209316120ea6fbdf0837c1c3e8c07f6ba491a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_ac4b71730ed887b0cebef1a7b9209316120ea6fbdf0837c1c3e8c07f6ba491a0->leave($__internal_ac4b71730ed887b0cebef1a7b9209316120ea6fbdf0837c1c3e8c07f6ba491a0_prof);

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
        return array (  61 => 10,  54 => 5,  48 => 4,  36 => 2,  11 => 1,);
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
