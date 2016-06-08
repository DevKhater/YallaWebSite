<?php

/* SonataSeoBundle:Block:_pinterest_sdk.html.twig */
class __TwigTemplate_4c86b79d88fb8e0b77a93409fee771cfdf55fd948095268e2d4d6ec6ea575af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pinterest_sdk' => array($this, 'block_pinterest_sdk'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bce3f58537e16b74fd7ac794510cba5fd2b2a629fc4844d3ccfd16ce4428096d = $this->env->getExtension("native_profiler");
        $__internal_bce3f58537e16b74fd7ac794510cba5fd2b2a629fc4844d3ccfd16ce4428096d->enter($__internal_bce3f58537e16b74fd7ac794510cba5fd2b2a629fc4844d3ccfd16ce4428096d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:_pinterest_sdk.html.twig"));

        // line 11
        $this->displayBlock('pinterest_sdk', $context, $blocks);
        
        $__internal_bce3f58537e16b74fd7ac794510cba5fd2b2a629fc4844d3ccfd16ce4428096d->leave($__internal_bce3f58537e16b74fd7ac794510cba5fd2b2a629fc4844d3ccfd16ce4428096d_prof);

    }

    public function block_pinterest_sdk($context, array $blocks = array())
    {
        $__internal_d3bf482fed068cb26978465802bf387a4b093ec32970cea7a89b12c918f3d16d = $this->env->getExtension("native_profiler");
        $__internal_d3bf482fed068cb26978465802bf387a4b093ec32970cea7a89b12c918f3d16d->enter($__internal_d3bf482fed068cb26978465802bf387a4b093ec32970cea7a89b12c918f3d16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pinterest_sdk"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "
        <script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d3bf482fed068cb26978465802bf387a4b093ec32970cea7a89b12c918f3d16d->leave($__internal_d3bf482fed068cb26978465802bf387a4b093ec32970cea7a89b12c918f3d16d_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:_pinterest_sdk.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 12,  23 => 11,);
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
/* {% block pinterest_sdk %}*/
/*     {% spaceless %}*/
/* */
/*         <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
