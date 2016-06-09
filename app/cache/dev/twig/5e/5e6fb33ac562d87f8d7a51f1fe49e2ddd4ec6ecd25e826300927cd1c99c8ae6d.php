<?php

/* SonataMediaBundle:Provider:view_dailymotion.html.twig */
class __TwigTemplate_810ec197975546e310fb57d3a03d10738c5fee65b7f615e24c71e7b7c2e7b541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_184936bc15cbd0ebd89df0f974f1ab0786f234ab8463a3d4c4fe3dcd758ac659 = $this->env->getExtension("native_profiler");
        $__internal_184936bc15cbd0ebd89df0f974f1ab0786f234ab8463a3d4c4fe3dcd758ac659->enter($__internal_184936bc15cbd0ebd89df0f974f1ab0786f234ab8463a3d4c4fe3dcd758ac659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Provider:view_dailymotion.html.twig"));

        // line 11
        echo "
<object width=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "height", array()), "html", null, true);
        echo "\">
    <param name=\"movie\" value=\"//www.dailymotion.com/swf/video/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference", array()), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters", array()), "html", null, true);
        echo "\"></param>
    <param name=\"allowFullScreen\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowFullScreen", array()), "html", null, true);
        echo "\"></param>
    <param name=\"allowScriptAccess\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowScriptAccess", array()), "html", null, true);
        echo "\"></param>

    <embed
        type=\"application/x-shockwave-flash\"
        src=\"//www.dailymotion.com/swf/video/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference", array()), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters", array()), "html", null, true);
        echo "\"
        width=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "width", array()), "html", null, true);
        echo "\"
        height=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "height", array()), "html", null, true);
        echo "\"
        allowfullscreen=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowFullScreen", array()), "html", null, true);
        echo "\"
        allowscriptaccess=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowScriptAccess", array()), "html", null, true);
        echo "\">
    </embed>
</object>
";
        
        $__internal_184936bc15cbd0ebd89df0f974f1ab0786f234ab8463a3d4c4fe3dcd758ac659->leave($__internal_184936bc15cbd0ebd89df0f974f1ab0786f234ab8463a3d4c4fe3dcd758ac659_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_dailymotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  62 => 22,  58 => 21,  54 => 20,  48 => 19,  41 => 15,  37 => 14,  31 => 13,  25 => 12,  22 => 11,);
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
/* */
/* <object width="{{ options.width }}" height="{{ options.height }}">*/
/*     <param name="movie" value="//www.dailymotion.com/swf/video/{{ media.providerreference }}?{{ options.player_parameters }}"></param>*/
/*     <param name="allowFullScreen" value="{{ options.allowFullScreen }}"></param>*/
/*     <param name="allowScriptAccess" value="{{ options.allowScriptAccess }}"></param>*/
/* */
/*     <embed*/
/*         type="application/x-shockwave-flash"*/
/*         src="//www.dailymotion.com/swf/video/{{ media.providerreference }}?{{ options.player_parameters }}"*/
/*         width="{{ options.width }}"*/
/*         height="{{ options.height }}"*/
/*         allowfullscreen="{{ options.allowFullScreen }}"*/
/*         allowscriptaccess="{{ options.allowScriptAccess }}">*/
/*     </embed>*/
/* </object>*/
/* */
