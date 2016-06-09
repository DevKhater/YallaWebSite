<?php

/* YallaWebsiteBackendBundle:Article:show.html.twig */
class __TwigTemplate_e08d40fd18325d7da15c7960e0cf63a5710d5030e845acd2042adf593fa385e6 extends Twig_Template
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
        $__internal_302d00a62f5c4327840dde3c817864411f61ffaea84d901a321c5c58fa03ce7b = $this->env->getExtension("native_profiler");
        $__internal_302d00a62f5c4327840dde3c817864411f61ffaea84d901a321c5c58fa03ce7b->enter($__internal_302d00a62f5c4327840dde3c817864411f61ffaea84d901a321c5c58fa03ce7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Article:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_302d00a62f5c4327840dde3c817864411f61ffaea84d901a321c5c58fa03ce7b->leave($__internal_302d00a62f5c4327840dde3c817864411f61ffaea84d901a321c5c58fa03ce7b_prof);

    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_6ecac2c46feb36be1207b965c450da5bc1418ea5218c0ea206e4a4c888d80865 = $this->env->getExtension("native_profiler");
        $__internal_6ecac2c46feb36be1207b965c450da5bc1418ea5218c0ea206e4a4c888d80865->enter($__internal_6ecac2c46feb36be1207b965c450da5bc1418ea5218c0ea206e4a4c888d80865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        // line 3
        echo "    <a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href='";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
        
        $__internal_6ecac2c46feb36be1207b965c450da5bc1418ea5218c0ea206e4a4c888d80865->leave($__internal_6ecac2c46feb36be1207b965c450da5bc1418ea5218c0ea206e4a4c888d80865_prof);

    }

    // line 7
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_bd1d69d97571d8c7f4e2be93d7feb797db3dee5ed94b4853ec35286053065a36 = $this->env->getExtension("native_profiler");
        $__internal_bd1d69d97571d8c7f4e2be93d7feb797db3dee5ed94b4853ec35286053065a36->enter($__internal_bd1d69d97571d8c7f4e2be93d7feb797db3dee5ed94b4853ec35286053065a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 8
        echo "    <div class=\"row\">
        <div class='col-md-8'>
            <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo " </h3>
            <h6>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "author", array()), "displayName", array()), "html", null, true);
        echo " </h6>

            <div class=\"col-md-5\"> 
                <strong>Tags</strong>
                ";
        // line 15
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTags", array(), "method")) {
            // line 16
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTags", array()));
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
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media", array()), "small", array());
        // line 24
        echo "        </div>
        <br style=\"clear: both\" />
        <br style=\"clear: both\" />

    </div>
    <h3>Article</h3>
    <div class=\"col-md-12\" style=\"border: #000000 dotted \">
        ";
        // line 31
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array());
        echo " </br>
    </div>

";
        
        $__internal_bd1d69d97571d8c7f4e2be93d7feb797db3dee5ed94b4853ec35286053065a36->leave($__internal_bd1d69d97571d8c7f4e2be93d7feb797db3dee5ed94b4853ec35286053065a36_prof);

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
        return array (  111 => 31,  102 => 24,  100 => 23,  95 => 20,  92 => 19,  83 => 17,  78 => 16,  76 => 15,  69 => 11,  65 => 10,  61 => 8,  55 => 7,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
