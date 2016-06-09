<?php

/* SonataMediaBundle:Media:view.html.twig */
class __TwigTemplate_46da3bb2421873c17cc4d0b105357c127036b94b9da5acd5091b284f28514264 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        // token for sonata_template_box, however the box is disabled
        // line 13
        echo "
";
        // line 19
        echo "
<h1>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : null), "name", array()), "html", null, true);
        echo "</h1>

<div>
    ";
        // line 23
        echo $this->env->getExtension('sonata_media')->media((isset($context["media"]) ? $context["media"] : null), (isset($context["format"]) ? $context["format"] : null), array());
        // line 24
        echo "</div>

<h2>Information</h2>
<ul>
    <li>Size : ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : null), "size", array()), "html", null, true);
        echo "</li>
    <li>Width : ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : null), "width", array()), "html", null, true);
        echo "</li>
    <li>Height : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : null), "height", array()), "html", null, true);
        echo "</li>
    <li>Content Type : ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : null), "contenttype", array()), "html", null, true);
        echo "</li>
    <li>Copyright : ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : null), "copyright", array()), "html", null, true);
        echo "</li>
    <li>Author name : ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : null), "authorname", array()), "html", null, true);
        echo "</li>
    <li>CDN : ";
        // line 34
        if ($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "cdnisflushable", array())) {
            echo "to be flushed";
        } else {
            echo " last flush at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : null), "cdnflushat", array())), "html", null, true);
            echo " ";
        }
        echo "</li>
</ul>

<h2>Formats</h2>
<ul>
    <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_view", array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : null)), "format" => "reference")), "html", null, true);
        echo "\">reference</a></li>

    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formats"]) ? $context["formats"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["format"]) {
            // line 42
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_view", array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : null)), "format" => $context["name"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Media:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 44,  91 => 42,  87 => 41,  82 => 39,  68 => 34,  64 => 33,  60 => 32,  56 => 31,  52 => 30,  48 => 29,  44 => 28,  38 => 24,  36 => 23,  30 => 20,  27 => 19,  24 => 13,  22 => 12,  19 => 11,);
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
/* {% sonata_template_box 'This is the media view template. Feel free to override it.' %}*/
/* */
/* {#{% block sonata_page_breadcrumb %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': 'media_view', 'media': media, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}#}*/
/* */
/* <h1>{{ media.name }}</h1>*/
/* */
/* <div>*/
/*     {% media media, format %}*/
/* </div>*/
/* */
/* <h2>Information</h2>*/
/* <ul>*/
/*     <li>Size : {{ media.size }}</li>*/
/*     <li>Width : {{ media.width }}</li>*/
/*     <li>Height : {{ media.height }}</li>*/
/*     <li>Content Type : {{ media.contenttype }}</li>*/
/*     <li>Copyright : {{ media.copyright }}</li>*/
/*     <li>Author name : {{ media.authorname }}</li>*/
/*     <li>CDN : {% if media.cdnisflushable %}to be flushed{% else %} last flush at {{ media.cdnflushat|date}} {% endif %}</li>*/
/* </ul>*/
/* */
/* <h2>Formats</h2>*/
/* <ul>*/
/*     <li><a href="{{ url('sonata_media_view', { 'id' : media|sonata_urlsafeid , 'format' : 'reference'}) }}">reference</a></li>*/
/* */
/*     {% for name, format in formats %}*/
/*         <li><a href="{{ url('sonata_media_view', { 'id' : media|sonata_urlsafeid , 'format' : name}) }}">{{ name }}</a></li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
