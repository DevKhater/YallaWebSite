<?php

/* SonataSeoBundle:Block:_facebook_sdk.html.twig */
class __TwigTemplate_3501e447cc1233983bc9de4771aae22c1e3d3fca17bf35ebf6a59d35e35cd9a0 extends Twig_Template
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
        $__internal_2bf2aa68df9c73ad559e1d9401e0ebe45d86bbb6b9628aae32d9a475a744f650 = $this->env->getExtension("native_profiler");
        $__internal_2bf2aa68df9c73ad559e1d9401e0ebe45d86bbb6b9628aae32d9a475a744f650->enter($__internal_2bf2aa68df9c73ad559e1d9401e0ebe45d86bbb6b9628aae32d9a475a744f650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:_facebook_sdk.html.twig"));

        // line 11
        $this->displayBlock('facebook_sdk', $context, $blocks);
        
        $__internal_2bf2aa68df9c73ad559e1d9401e0ebe45d86bbb6b9628aae32d9a475a744f650->leave($__internal_2bf2aa68df9c73ad559e1d9401e0ebe45d86bbb6b9628aae32d9a475a744f650_prof);

    }

    public function block_facebook_sdk($context, array $blocks = array())
    {
        $__internal_2529cdcbd3de55ed5f3321efd22eb53d50ffa56b3836aada404e15610c10ca7e = $this->env->getExtension("native_profiler");
        $__internal_2529cdcbd3de55ed5f3321efd22eb53d50ffa56b3836aada404e15610c10ca7e->enter($__internal_2529cdcbd3de55ed5f3321efd22eb53d50ffa56b3836aada404e15610c10ca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "facebook_sdk"));

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
        
        $__internal_2529cdcbd3de55ed5f3321efd22eb53d50ffa56b3836aada404e15610c10ca7e->leave($__internal_2529cdcbd3de55ed5f3321efd22eb53d50ffa56b3836aada404e15610c10ca7e_prof);

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
