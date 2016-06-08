<?php

/* ::base.html.twig */
class __TwigTemplate_42d001461bd1ce215a3511f66099c529b19dd33503aa96cf7c58783b712dd7d8 extends Twig_Template
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
        $__internal_7e04e932efee7d222712a3dced6085f7a459e4873ce306ff86e9940e2ac33a18 = $this->env->getExtension("native_profiler");
        $__internal_7e04e932efee7d222712a3dced6085f7a459e4873ce306ff86e9940e2ac33a18->enter($__internal_7e04e932efee7d222712a3dced6085f7a459e4873ce306ff86e9940e2ac33a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7e04e932efee7d222712a3dced6085f7a459e4873ce306ff86e9940e2ac33a18->leave($__internal_7e04e932efee7d222712a3dced6085f7a459e4873ce306ff86e9940e2ac33a18_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c5c22f1fc0f9ca15226103700d1fc8549b70f4ea8d4ff04f4020495167e45f2 = $this->env->getExtension("native_profiler");
        $__internal_8c5c22f1fc0f9ca15226103700d1fc8549b70f4ea8d4ff04f4020495167e45f2->enter($__internal_8c5c22f1fc0f9ca15226103700d1fc8549b70f4ea8d4ff04f4020495167e45f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8c5c22f1fc0f9ca15226103700d1fc8549b70f4ea8d4ff04f4020495167e45f2->leave($__internal_8c5c22f1fc0f9ca15226103700d1fc8549b70f4ea8d4ff04f4020495167e45f2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eca144b398f2d068b5620eb49899ce2771b16d42ca1069ab825e92895fd77fc6 = $this->env->getExtension("native_profiler");
        $__internal_eca144b398f2d068b5620eb49899ce2771b16d42ca1069ab825e92895fd77fc6->enter($__internal_eca144b398f2d068b5620eb49899ce2771b16d42ca1069ab825e92895fd77fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eca144b398f2d068b5620eb49899ce2771b16d42ca1069ab825e92895fd77fc6->leave($__internal_eca144b398f2d068b5620eb49899ce2771b16d42ca1069ab825e92895fd77fc6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_348c28306f669421bb9db808ae6c8d3c26fb5b03489a859c2cef2c0eae53668c = $this->env->getExtension("native_profiler");
        $__internal_348c28306f669421bb9db808ae6c8d3c26fb5b03489a859c2cef2c0eae53668c->enter($__internal_348c28306f669421bb9db808ae6c8d3c26fb5b03489a859c2cef2c0eae53668c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_348c28306f669421bb9db808ae6c8d3c26fb5b03489a859c2cef2c0eae53668c->leave($__internal_348c28306f669421bb9db808ae6c8d3c26fb5b03489a859c2cef2c0eae53668c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2dc2662c1374b43f1a971c0688f28a3a05e3bd92c3065540fd2c340bad0a7ca9 = $this->env->getExtension("native_profiler");
        $__internal_2dc2662c1374b43f1a971c0688f28a3a05e3bd92c3065540fd2c340bad0a7ca9->enter($__internal_2dc2662c1374b43f1a971c0688f28a3a05e3bd92c3065540fd2c340bad0a7ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2dc2662c1374b43f1a971c0688f28a3a05e3bd92c3065540fd2c340bad0a7ca9->leave($__internal_2dc2662c1374b43f1a971c0688f28a3a05e3bd92c3065540fd2c340bad0a7ca9_prof);

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
