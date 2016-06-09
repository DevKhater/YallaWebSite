<?php

/* ::base.html.twig */
class __TwigTemplate_a0304e70ded01a7f73ac4def531e752d4b360387588fc2d1f0ab999d207ed21e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c57fb6f48b31d95fa767bc1c55463e303c5db923fb2f11ba1cafcf3561956422 = $this->env->getExtension("native_profiler");
        $__internal_c57fb6f48b31d95fa767bc1c55463e303c5db923fb2f11ba1cafcf3561956422->enter($__internal_c57fb6f48b31d95fa767bc1c55463e303c5db923fb2f11ba1cafcf3561956422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c57fb6f48b31d95fa767bc1c55463e303c5db923fb2f11ba1cafcf3561956422->leave($__internal_c57fb6f48b31d95fa767bc1c55463e303c5db923fb2f11ba1cafcf3561956422_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fd9906998f0f5a1f67db55d3c6d8a86be40b0f26af655324305158375782196 = $this->env->getExtension("native_profiler");
        $__internal_2fd9906998f0f5a1f67db55d3c6d8a86be40b0f26af655324305158375782196->enter($__internal_2fd9906998f0f5a1f67db55d3c6d8a86be40b0f26af655324305158375782196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2fd9906998f0f5a1f67db55d3c6d8a86be40b0f26af655324305158375782196->leave($__internal_2fd9906998f0f5a1f67db55d3c6d8a86be40b0f26af655324305158375782196_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c41204a1d8a7d0b18473a1b60d22e5f30978dc442225a6deff819c220a25b383 = $this->env->getExtension("native_profiler");
        $__internal_c41204a1d8a7d0b18473a1b60d22e5f30978dc442225a6deff819c220a25b383->enter($__internal_c41204a1d8a7d0b18473a1b60d22e5f30978dc442225a6deff819c220a25b383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c41204a1d8a7d0b18473a1b60d22e5f30978dc442225a6deff819c220a25b383->leave($__internal_c41204a1d8a7d0b18473a1b60d22e5f30978dc442225a6deff819c220a25b383_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9375f0bd4fe00a4ab44360cc6569ceeb6eca56b8fb996da41071a9e55775d997 = $this->env->getExtension("native_profiler");
        $__internal_9375f0bd4fe00a4ab44360cc6569ceeb6eca56b8fb996da41071a9e55775d997->enter($__internal_9375f0bd4fe00a4ab44360cc6569ceeb6eca56b8fb996da41071a9e55775d997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9375f0bd4fe00a4ab44360cc6569ceeb6eca56b8fb996da41071a9e55775d997->leave($__internal_9375f0bd4fe00a4ab44360cc6569ceeb6eca56b8fb996da41071a9e55775d997_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2dbe479f215e339307d315e2633368193644d625859172ed28bb6c2dbdf0fa4 = $this->env->getExtension("native_profiler");
        $__internal_a2dbe479f215e339307d315e2633368193644d625859172ed28bb6c2dbdf0fa4->enter($__internal_a2dbe479f215e339307d315e2633368193644d625859172ed28bb6c2dbdf0fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a2dbe479f215e339307d315e2633368193644d625859172ed28bb6c2dbdf0fa4->leave($__internal_a2dbe479f215e339307d315e2633368193644d625859172ed28bb6c2dbdf0fa4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
