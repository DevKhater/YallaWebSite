<?php

/* SonataSeoBundle:Block:_facebook_sdk.html.twig */
class __TwigTemplate_3850cf6ff614bb787b596238b1a0508b90d9b6c7f0b550f8b339d09a08df80bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'facebook_sdk' => array($this, 'block_facebook_sdk'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c393f364560b6bb9417c595e5f6bc154800efdb2ac751b973826247790e9cd56 = $this->env->getExtension("native_profiler");
        $__internal_c393f364560b6bb9417c595e5f6bc154800efdb2ac751b973826247790e9cd56->enter($__internal_c393f364560b6bb9417c595e5f6bc154800efdb2ac751b973826247790e9cd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:_facebook_sdk.html.twig"));

        // line 11
        $this->displayBlock('facebook_sdk', $context, $blocks);
        
        $__internal_c393f364560b6bb9417c595e5f6bc154800efdb2ac751b973826247790e9cd56->leave($__internal_c393f364560b6bb9417c595e5f6bc154800efdb2ac751b973826247790e9cd56_prof);

    }

    public function block_facebook_sdk($context, array $blocks = array())
    {
        $__internal_f54d633091c866165846ff73bbf547ef38921bf0cc6432c31a4ed386c3bcd7a4 = $this->env->getExtension("native_profiler");
        $__internal_f54d633091c866165846ff73bbf547ef38921bf0cc6432c31a4ed386c3bcd7a4->enter($__internal_f54d633091c866165846ff73bbf547ef38921bf0cc6432c31a4ed386c3bcd7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "facebook_sdk"));

        // line 12
        ob_start();
        // line 13
        echo "
    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f54d633091c866165846ff73bbf547ef38921bf0cc6432c31a4ed386c3bcd7a4->leave($__internal_f54d633091c866165846ff73bbf547ef38921bf0cc6432c31a4ed386c3bcd7a4_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:_facebook_sdk.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 13,  35 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% block facebook_sdk %}*/
/* {% spaceless %}*/
/* */
/*     <div id="fb-root"></div>*/
/*     <script>(function(d, s, id) {*/
/*             var js, fjs = d.getElementsByTagName(s)[0];*/
/*             if (d.getElementById(id)) return;*/
/*             js = d.createElement(s); js.id = id;*/
/*             js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";*/
/*             fjs.parentNode.insertBefore(js, fjs);*/
/*         }(document, 'script', 'facebook-jssdk'));*/
/*     </script>*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
