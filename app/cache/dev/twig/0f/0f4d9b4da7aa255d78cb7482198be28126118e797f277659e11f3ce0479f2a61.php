<?php

/* SonataMediaBundle:Gallery:index.html.twig */
class __TwigTemplate_1633a0b7cf65e113c98aa2abf43ca1b3313f87e3731e0d7d5372214afd299374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "SonataMediaBundle:Gallery:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@YallaWebsiteFrontendBundle/views/front_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_454a818d77bcb775b7e724e38c6206930c4e8ccde36d303327aa713277863fa5 = $this->env->getExtension("native_profiler");
        $__internal_454a818d77bcb775b7e724e38c6206930c4e8ccde36d303327aa713277863fa5->enter($__internal_454a818d77bcb775b7e724e38c6206930c4e8ccde36d303327aa713277863fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Gallery:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454a818d77bcb775b7e724e38c6206930c4e8ccde36d303327aa713277863fa5->leave($__internal_454a818d77bcb775b7e724e38c6206930c4e8ccde36d303327aa713277863fa5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9fc442f88d77daafb9473f1bc13b9d43e9d98d645f5a2154a53a55fbd631bba = $this->env->getExtension("native_profiler");
        $__internal_c9fc442f88d77daafb9473f1bc13b9d43e9d98d645f5a2154a53a55fbd631bba->enter($__internal_c9fc442f88d77daafb9473f1bc13b9d43e9d98d645f5a2154a53a55fbd631bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <div class=\"wrapper\">

        <div class=\"IndexTitle\">
            <h1>Captured Moments</h1>
        </div>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 9
            echo "            <div class=\"galleryDiv\">
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_gallery_view", array("id" => $this->getAttribute($context["gallery"], "slug", array()))), "html", null, true);
            echo "\">
                    <div class=\"galleryContent\" style=\"background-image: url('";
            // line 11
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["gallery"], "media", array()), "displayIndex");
            echo "')\">
                    <div class=\"galleryDivTitle\">
                        <div class='galleryDivTitleContent'>
                            <h3>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
            echo "</h3>
                            <h5>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["gallery"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</h5>
                        </div>
                    </div>
                    ";
            // line 19
            echo "                    </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "

        <div class=\"page_pagination\">

            ";
        // line 27
        if ((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) {
            // line 28
            echo "                ";
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "YallaWebsiteFrontendBundle:Template:pagination.html.twig");
            echo "
            ";
        }
        // line 30
        echo "        </div>
    </div>
    
";
        
        $__internal_c9fc442f88d77daafb9473f1bc13b9d43e9d98d645f5a2154a53a55fbd631bba->leave($__internal_c9fc442f88d77daafb9473f1bc13b9d43e9d98d645f5a2154a53a55fbd631bba_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Gallery:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  91 => 28,  89 => 27,  83 => 23,  74 => 19,  68 => 15,  64 => 14,  58 => 11,  54 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* {% block body %}*/
/*         <div class="wrapper">*/
/* */
/*         <div class="IndexTitle">*/
/*             <h1>Captured Moments</h1>*/
/*         </div>*/
/*         {% for gallery in pagination  %}*/
/*             <div class="galleryDiv">*/
/*                 <a href="{{ url('sonata_media_gallery_view', {'id' : gallery.slug }) }}">*/
/*                     <div class="galleryContent" style="background-image: url('{% path gallery.media, 'displayIndex' %}')">*/
/*                     <div class="galleryDivTitle">*/
/*                         <div class='galleryDivTitleContent'>*/
/*                             <h3>{{ gallery.name }}</h3>*/
/*                             <h5>{{ gallery.date|date("d/m/Y") }}</h5>*/
/*                         </div>*/
/*                     </div>*/
/*                     {#{{dump(gallery)}}#}*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/* */
/*         <div class="page_pagination">*/
/* */
/*             {% if (pagination) %}*/
/*                 {{ knp_pagination_render(pagination, 'YallaWebsiteFrontendBundle:Template:pagination.html.twig') }}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
