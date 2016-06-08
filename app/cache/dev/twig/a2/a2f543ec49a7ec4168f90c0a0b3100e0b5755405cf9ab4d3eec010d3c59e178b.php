<?php

/* base.html.twig */
class __TwigTemplate_98c56676e002718e3bef9f6b1db6ae312266eecbb0052d50aed845cd7b8521f9 extends Twig_Template
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
        $__internal_a2ad73aed7f2a73870b4afe2a28fbc4265d8cb7f272431cef2299ccbc2b443c8 = $this->env->getExtension("native_profiler");
        $__internal_a2ad73aed7f2a73870b4afe2a28fbc4265d8cb7f272431cef2299ccbc2b443c8->enter($__internal_a2ad73aed7f2a73870b4afe2a28fbc4265d8cb7f272431cef2299ccbc2b443c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a2ad73aed7f2a73870b4afe2a28fbc4265d8cb7f272431cef2299ccbc2b443c8->leave($__internal_a2ad73aed7f2a73870b4afe2a28fbc4265d8cb7f272431cef2299ccbc2b443c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_21674e88fa71fff3115acbff3bf9052592b7b8c7fe1ba5dd9c76df6660618976 = $this->env->getExtension("native_profiler");
        $__internal_21674e88fa71fff3115acbff3bf9052592b7b8c7fe1ba5dd9c76df6660618976->enter($__internal_21674e88fa71fff3115acbff3bf9052592b7b8c7fe1ba5dd9c76df6660618976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_21674e88fa71fff3115acbff3bf9052592b7b8c7fe1ba5dd9c76df6660618976->leave($__internal_21674e88fa71fff3115acbff3bf9052592b7b8c7fe1ba5dd9c76df6660618976_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcc768556667c384c68efd9690f25dc4fb93a721ba18e31f320b02b6fdc2b132 = $this->env->getExtension("native_profiler");
        $__internal_bcc768556667c384c68efd9690f25dc4fb93a721ba18e31f320b02b6fdc2b132->enter($__internal_bcc768556667c384c68efd9690f25dc4fb93a721ba18e31f320b02b6fdc2b132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bcc768556667c384c68efd9690f25dc4fb93a721ba18e31f320b02b6fdc2b132->leave($__internal_bcc768556667c384c68efd9690f25dc4fb93a721ba18e31f320b02b6fdc2b132_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_96bcc9478c33b7c04048f809d763f4177df1a1c29509e3f83b0a3de7bc8c0cba = $this->env->getExtension("native_profiler");
        $__internal_96bcc9478c33b7c04048f809d763f4177df1a1c29509e3f83b0a3de7bc8c0cba->enter($__internal_96bcc9478c33b7c04048f809d763f4177df1a1c29509e3f83b0a3de7bc8c0cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96bcc9478c33b7c04048f809d763f4177df1a1c29509e3f83b0a3de7bc8c0cba->leave($__internal_96bcc9478c33b7c04048f809d763f4177df1a1c29509e3f83b0a3de7bc8c0cba_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf1f8fdb875dd41ffeddc2dc53036a125d38f969575fe06eb4f30b61c634cab5 = $this->env->getExtension("native_profiler");
        $__internal_bf1f8fdb875dd41ffeddc2dc53036a125d38f969575fe06eb4f30b61c634cab5->enter($__internal_bf1f8fdb875dd41ffeddc2dc53036a125d38f969575fe06eb4f30b61c634cab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bf1f8fdb875dd41ffeddc2dc53036a125d38f969575fe06eb4f30b61c634cab5->leave($__internal_bf1f8fdb875dd41ffeddc2dc53036a125d38f969575fe06eb4f30b61c634cab5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
