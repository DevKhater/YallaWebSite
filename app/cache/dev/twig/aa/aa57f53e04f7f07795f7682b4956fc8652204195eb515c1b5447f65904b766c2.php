<?php

/* YallaWebsiteBackendBundle:Article:edit.html.twig */
class __TwigTemplate_2a8b88e29bbb64104e5c172eea8f77913be0d3cb31eba10f5f99fa31b0837687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Article:base_article.html.twig", "YallaWebsiteBackendBundle:Article:edit.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Article:base_article.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d5a5174fbc220585bc191848e453301a9d44df0639923efb79296f57ef2c855 = $this->env->getExtension("native_profiler");
        $__internal_7d5a5174fbc220585bc191848e453301a9d44df0639923efb79296f57ef2c855->enter($__internal_7d5a5174fbc220585bc191848e453301a9d44df0639923efb79296f57ef2c855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d5a5174fbc220585bc191848e453301a9d44df0639923efb79296f57ef2c855->leave($__internal_7d5a5174fbc220585bc191848e453301a9d44df0639923efb79296f57ef2c855_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_35f6aa1bb2b7068870e0f974b43c62bab20ca0234168c0b51f5986380d93fb22 = $this->env->getExtension("native_profiler");
        $__internal_35f6aa1bb2b7068870e0f974b43c62bab20ca0234168c0b51f5986380d93fb22->enter($__internal_35f6aa1bb2b7068870e0f974b43c62bab20ca0234168c0b51f5986380d93fb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Article Event
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"\" method=\"POST\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label for=\"title\">Event Name</label>
                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
                    </div>

                    <div class='form-group'>
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row');
        echo "

                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 19
            echo "                            ";
            if ($context["tag"]) {
                // line 20
                echo "
                                <span class=\"label label-primary\">
                                    ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "

                                </span>
                            ";
            }
            // line 26
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </div>

                    <div class=\"form-group\">
                        <label for=\"media\">Cover Image</label>
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), 'widget');
        echo "
                        <p class=\"help-block\">Only Images.</p>
                    </div>
                </div>
                <div class=\"col-lg-6\" style=\"text-align: center\">
                    ";
        // line 36
        if (array_key_exists("article", $context)) {
            // line 37
            echo "                        ";
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "media", array()), "medium", array("class" => "img-thumbnail"));
            // line 38
            echo "                    ";
        }
        echo "</div>

                <div class=\"col-lg-12\">
                    <div class=\"form-group\" style=\"min-height: 400px;\">
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
                    </div>
                    
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
                </div>

            </form>
        </div>
    ";
        
        $__internal_35f6aa1bb2b7068870e0f974b43c62bab20ca0234168c0b51f5986380d93fb22->leave($__internal_35f6aa1bb2b7068870e0f974b43c62bab20ca0234168c0b51f5986380d93fb22_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  123 => 45,  117 => 42,  109 => 38,  106 => 37,  104 => 36,  96 => 31,  90 => 27,  84 => 26,  77 => 22,  73 => 20,  70 => 19,  66 => 18,  61 => 16,  54 => 12,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Article:base_article.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Article Event*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_article_edit',  {'id': article.id})}}" class="" method="POST">*/
/*                 <div class="col-lg-6">*/
/*                     <div class="form-group">*/
/*                         <label for="title">Event Name</label>*/
/*                         {{ form_widget(form.title)}}*/
/*                     </div>*/
/* */
/*                     <div class='form-group'>*/
/*                         {{ form_row(form.tags) }}*/
/* */
/*                         {% for tag in article.tags %}*/
/*                             {% if tag %}*/
/* */
/*                                 <span class="label label-primary">*/
/*                                     {{ tag.name }}*/
/* */
/*                                 </span>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="media">Cover Image</label>*/
/*                         {{ form_widget(form.media)}}*/
/*                         <p class="help-block">Only Images.</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-lg-6" style="text-align: center">*/
/*                     {% if article is defined %}*/
/*                         {% thumbnail  article.media, 'medium'  with {'class': 'img-thumbnail'} %}*/
/*                     {% endif %}</div>*/
/* */
/*                 <div class="col-lg-12">*/
/*                     <div class="form-group" style="min-height: 400px;">*/
/*                         {{ form_widget(form.content) }}*/
/*                     </div>*/
/*                     */
/*                 {{ form_errors(form) }}*/
/*                 {{ form_row(form._token) }}*/
/*                     <input type="submit" class="btn btn-default" value="Save"/>*/
/*                 </div>*/
/* */
/*             </form>*/
/*         </div>*/
/*     {% endblock %}*/
