<?php

/* YallaWebsiteFrontendBundle:Article:index.html.twig */
class __TwigTemplate_8ada219695028e3aa449261eb10878d265a1c9ead6daf74d1a8779e06f50404d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "YallaWebsiteFrontendBundle:Article:index.html.twig", 1);
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
        $__internal_ed1f8aaf316347570cf653f5979fad4a6f407b018c47e0aada26ced0ba54b473 = $this->env->getExtension("native_profiler");
        $__internal_ed1f8aaf316347570cf653f5979fad4a6f407b018c47e0aada26ced0ba54b473->enter($__internal_ed1f8aaf316347570cf653f5979fad4a6f407b018c47e0aada26ced0ba54b473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed1f8aaf316347570cf653f5979fad4a6f407b018c47e0aada26ced0ba54b473->leave($__internal_ed1f8aaf316347570cf653f5979fad4a6f407b018c47e0aada26ced0ba54b473_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5771d45f10159b69c799c0981a6a7df7cba589e88cac2b228ddd696b19e20979 = $this->env->getExtension("native_profiler");
        $__internal_5771d45f10159b69c799c0981a6a7df7cba589e88cac2b228ddd696b19e20979->enter($__internal_5771d45f10159b69c799c0981a6a7df7cba589e88cac2b228ddd696b19e20979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <div class=\"wrapper\">

        <div class=\"IndexTitle\">
            <h1>All Around Us</h1>
        </div>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "            <div class=\"articleDiv\">
                <div class=\"articleContent\" style=\"background-image: url('";
            // line 10
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["article"], "media", array()), "displayIndex");
            echo "')\">
                    <div class=\"articleDivTitle\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "
                    </div>
                </div>
                <div class=\"theArticleContent\">
                    <p>";
            // line 16
            echo twig_escape_filter($this->env, strip_tags(twig_slice($this->env, $this->getAttribute($context["article"], "content", array()), 0, 100)), "html", null, true);
            echo "...<br>
                        <span><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_article", array("id" => $this->getAttribute($context["article"], "slug", array()))), "html", null, true);
            echo "\">more..</a></span></p>
                </div>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        <div class=\"page_pagination\">

            ";
        // line 25
        if ((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) {
            // line 26
            echo "                ";
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "YallaWebsiteFrontendBundle:Template:pagination.html.twig");
            echo "
            ";
        }
        // line 28
        echo "        </div>
    </div>

";
        
        $__internal_5771d45f10159b69c799c0981a6a7df7cba589e88cac2b228ddd696b19e20979->leave($__internal_5771d45f10159b69c799c0981a6a7df7cba589e88cac2b228ddd696b19e20979_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  88 => 26,  86 => 25,  81 => 22,  70 => 17,  66 => 16,  59 => 12,  54 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* {% block body %}*/
/*         <div class="wrapper">*/
/* */
/*         <div class="IndexTitle">*/
/*             <h1>All Around Us</h1>*/
/*         </div>*/
/*         {% for article in pagination  %}*/
/*             <div class="articleDiv">*/
/*                 <div class="articleContent" style="background-image: url('{% path  article.media, 'displayIndex' %}')">*/
/*                     <div class="articleDivTitle">*/
/*                         {{ article.title }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="theArticleContent">*/
/*                     <p>{{ article.content[0:100]|raw|striptags }}...<br>*/
/*                         <span><a href="{{path('yalla_website_frontened_article',  {'id': article.slug}) }}">more..</a></span></p>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="page_pagination">*/
/* */
/*             {% if (pagination) %}*/
/*                 {{ knp_pagination_render(pagination, 'YallaWebsiteFrontendBundle:Template:pagination.html.twig') }}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
