<?php

/* YallaWebsiteBackendBundle:Article:show.html.twig */
class __TwigTemplate_60a8fbde995ffcdd835d35ab800cda926b5c3d4bcb4dddcc7b661672f9db858b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Article:base_article.html.twig", "YallaWebsiteBackendBundle:Article:show.html.twig", 1);
        $this->blocks = array(
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Article:base_article.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        // line 3
        echo "    <a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href='";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
    }

    // line 7
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\">
        <div class='col-md-8'>
            <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
        echo " </h3>
            <h6>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "author", array()), "displayName", array()), "html", null, true);
        echo " </h6>

            <div class=\"col-md-5\"> 
                <strong>Tags</strong>
                ";
        // line 15
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTags", array(), "method")) {
            // line 16
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 17
                echo "                        <span class=\"label label-primary\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo " </span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                ";
        }
        // line 20
        echo "            </div>
        </div>
        <div class=\"col-md-4\">
            ";
        // line 23
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "media", array()), "small", array());
        // line 24
        echo "        </div>
        <br style=\"clear: both\" />
        <br style=\"clear: both\" />

    </div>
    <h3>Article</h3>
    <div class=\"col-md-12\" style=\"border: #000000 dotted \">
        ";
        // line 31
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "content", array());
        echo " </br>
    </div>

";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  87 => 24,  85 => 23,  80 => 20,  77 => 19,  68 => 17,  63 => 16,  61 => 15,  54 => 11,  50 => 10,  46 => 8,  43 => 7,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Article:base_article.html.twig" %}*/
/* {% block extraOptions %}*/
/*     <a href='{{ path ('backend_article_edit', {'id': entity.id})}}'><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Edit</button></a>*/
/*     <a href='{{ path ('backend_article_delete', {'id': entity.id})}}'><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Delete</button></a>*/
/* {% endblock %}*/
/* */
/* {% block controlleraction  %}*/
/*     <div class="row">*/
/*         <div class='col-md-8'>*/
/*             <h3>{{entity.title}} </h3>*/
/*             <h6>{{entity.author.displayName}} </h6>*/
/* */
/*             <div class="col-md-5"> */
/*                 <strong>Tags</strong>*/
/*                 {% if entity.getTags() %}*/
/*                     {% for tag in entity.getTags %}*/
/*                         <span class="label label-primary"> {{ tag.name }} </span>*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% thumbnail  entity.media, 'small' %}*/
/*         </div>*/
/*         <br style="clear: both" />*/
/*         <br style="clear: both" />*/
/* */
/*     </div>*/
/*     <h3>Article</h3>*/
/*     <div class="col-md-12" style="border: #000000 dotted ">*/
/*         {{entity.content|raw}} </br>*/
/*     </div>*/
/* */
/* {% endblock %}*/
