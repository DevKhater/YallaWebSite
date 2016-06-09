<?php

/* base.html.twig */
class __TwigTemplate_6ebcc3c6806ba6f28d2c722a85905ab043f5cb26848e885d46d575b43e161bdf extends Twig_Template
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
        $__internal_de9f7e84371643566a6ec68953a4850abef7a6afef7c46d9a9d24ad46590bc0f = $this->env->getExtension("native_profiler");
        $__internal_de9f7e84371643566a6ec68953a4850abef7a6afef7c46d9a9d24ad46590bc0f->enter($__internal_de9f7e84371643566a6ec68953a4850abef7a6afef7c46d9a9d24ad46590bc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_de9f7e84371643566a6ec68953a4850abef7a6afef7c46d9a9d24ad46590bc0f->leave($__internal_de9f7e84371643566a6ec68953a4850abef7a6afef7c46d9a9d24ad46590bc0f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4f25e889cd9ecfa03b03d8a1782d90fe7e40f72ec3f8ad3c9cca57fd17d540e = $this->env->getExtension("native_profiler");
        $__internal_d4f25e889cd9ecfa03b03d8a1782d90fe7e40f72ec3f8ad3c9cca57fd17d540e->enter($__internal_d4f25e889cd9ecfa03b03d8a1782d90fe7e40f72ec3f8ad3c9cca57fd17d540e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d4f25e889cd9ecfa03b03d8a1782d90fe7e40f72ec3f8ad3c9cca57fd17d540e->leave($__internal_d4f25e889cd9ecfa03b03d8a1782d90fe7e40f72ec3f8ad3c9cca57fd17d540e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_576ef265a44178b56cfcc4c2f69ed63127e847d60451250f363cba8ed97d2eab = $this->env->getExtension("native_profiler");
        $__internal_576ef265a44178b56cfcc4c2f69ed63127e847d60451250f363cba8ed97d2eab->enter($__internal_576ef265a44178b56cfcc4c2f69ed63127e847d60451250f363cba8ed97d2eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_576ef265a44178b56cfcc4c2f69ed63127e847d60451250f363cba8ed97d2eab->leave($__internal_576ef265a44178b56cfcc4c2f69ed63127e847d60451250f363cba8ed97d2eab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_71a27680a90b9b56bda968e5edc03f51afcd7219f32699ead04c5bbdea66dc62 = $this->env->getExtension("native_profiler");
        $__internal_71a27680a90b9b56bda968e5edc03f51afcd7219f32699ead04c5bbdea66dc62->enter($__internal_71a27680a90b9b56bda968e5edc03f51afcd7219f32699ead04c5bbdea66dc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_71a27680a90b9b56bda968e5edc03f51afcd7219f32699ead04c5bbdea66dc62->leave($__internal_71a27680a90b9b56bda968e5edc03f51afcd7219f32699ead04c5bbdea66dc62_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c042317e47ac55e54946579c98796c0afa9db18745d743644360537aa2a2190 = $this->env->getExtension("native_profiler");
        $__internal_7c042317e47ac55e54946579c98796c0afa9db18745d743644360537aa2a2190->enter($__internal_7c042317e47ac55e54946579c98796c0afa9db18745d743644360537aa2a2190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c042317e47ac55e54946579c98796c0afa9db18745d743644360537aa2a2190->leave($__internal_7c042317e47ac55e54946579c98796c0afa9db18745d743644360537aa2a2190_prof);

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
