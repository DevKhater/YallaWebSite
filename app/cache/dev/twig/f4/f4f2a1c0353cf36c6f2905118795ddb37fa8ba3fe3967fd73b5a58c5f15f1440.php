<?php

/* YallaWebsiteFrontendBundle::base.html.twig */
class __TwigTemplate_1b6a88afc5ca652959dd3e93971d76e31c1ea6e42569dd39216a93da892b6595 extends Twig_Template
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
        $__internal_4bd6aafca1b98c2bbcb4f22d1867b80dbeebe5bc526d553aa9251a9a15301610 = $this->env->getExtension("native_profiler");
        $__internal_4bd6aafca1b98c2bbcb4f22d1867b80dbeebe5bc526d553aa9251a9a15301610->enter($__internal_4bd6aafca1b98c2bbcb4f22d1867b80dbeebe5bc526d553aa9251a9a15301610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle::base.html.twig"));

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
        
        $__internal_4bd6aafca1b98c2bbcb4f22d1867b80dbeebe5bc526d553aa9251a9a15301610->leave($__internal_4bd6aafca1b98c2bbcb4f22d1867b80dbeebe5bc526d553aa9251a9a15301610_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cc37b0c683e0b218293fc43c3fd4703f962c84bf00eed794663d2e12747eb92 = $this->env->getExtension("native_profiler");
        $__internal_2cc37b0c683e0b218293fc43c3fd4703f962c84bf00eed794663d2e12747eb92->enter($__internal_2cc37b0c683e0b218293fc43c3fd4703f962c84bf00eed794663d2e12747eb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2cc37b0c683e0b218293fc43c3fd4703f962c84bf00eed794663d2e12747eb92->leave($__internal_2cc37b0c683e0b218293fc43c3fd4703f962c84bf00eed794663d2e12747eb92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_192b54fbe31c1e4dfba8860bab4bb593d894bb71ce4ff9fd70b2566043a9497b = $this->env->getExtension("native_profiler");
        $__internal_192b54fbe31c1e4dfba8860bab4bb593d894bb71ce4ff9fd70b2566043a9497b->enter($__internal_192b54fbe31c1e4dfba8860bab4bb593d894bb71ce4ff9fd70b2566043a9497b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_192b54fbe31c1e4dfba8860bab4bb593d894bb71ce4ff9fd70b2566043a9497b->leave($__internal_192b54fbe31c1e4dfba8860bab4bb593d894bb71ce4ff9fd70b2566043a9497b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d15b266b16b911f6b897ab9d19df5f2a8cfeb8dcc41ab054dc17e20688664a4 = $this->env->getExtension("native_profiler");
        $__internal_1d15b266b16b911f6b897ab9d19df5f2a8cfeb8dcc41ab054dc17e20688664a4->enter($__internal_1d15b266b16b911f6b897ab9d19df5f2a8cfeb8dcc41ab054dc17e20688664a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d15b266b16b911f6b897ab9d19df5f2a8cfeb8dcc41ab054dc17e20688664a4->leave($__internal_1d15b266b16b911f6b897ab9d19df5f2a8cfeb8dcc41ab054dc17e20688664a4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e2eb0acc62da8bb57a2a934b25dc8fbf296da7653699ec1fffbe4edfe8fdb72 = $this->env->getExtension("native_profiler");
        $__internal_0e2eb0acc62da8bb57a2a934b25dc8fbf296da7653699ec1fffbe4edfe8fdb72->enter($__internal_0e2eb0acc62da8bb57a2a934b25dc8fbf296da7653699ec1fffbe4edfe8fdb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0e2eb0acc62da8bb57a2a934b25dc8fbf296da7653699ec1fffbe4edfe8fdb72->leave($__internal_0e2eb0acc62da8bb57a2a934b25dc8fbf296da7653699ec1fffbe4edfe8fdb72_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle::base.html.twig";
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
