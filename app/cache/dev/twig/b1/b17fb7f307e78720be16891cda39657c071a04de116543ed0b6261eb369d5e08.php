<?php

/* YallaWebsiteBackendBundle:Venue:show.html.twig */
class __TwigTemplate_1929efddfcbb893dcda56f8da308aed88c9e3bf5ae436d6121f12e28e8ad6454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Venue:base_venue.html.twig", "YallaWebsiteBackendBundle:Venue:show.html.twig", 1);
        $this->blocks = array(
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Venue:base_venue.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb4f4127927d239f4a8f8e5e4e8a0ecb0aabb8d4c28e28b27d8203da508b6cae = $this->env->getExtension("native_profiler");
        $__internal_fb4f4127927d239f4a8f8e5e4e8a0ecb0aabb8d4c28e28b27d8203da508b6cae->enter($__internal_fb4f4127927d239f4a8f8e5e4e8a0ecb0aabb8d4c28e28b27d8203da508b6cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Venue:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb4f4127927d239f4a8f8e5e4e8a0ecb0aabb8d4c28e28b27d8203da508b6cae->leave($__internal_fb4f4127927d239f4a8f8e5e4e8a0ecb0aabb8d4c28e28b27d8203da508b6cae_prof);

    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_219d262dcde3231561d9c65b357f00638aecc3dfe4e697a629b3af9790600ac0 = $this->env->getExtension("native_profiler");
        $__internal_219d262dcde3231561d9c65b357f00638aecc3dfe4e697a629b3af9790600ac0->enter($__internal_219d262dcde3231561d9c65b357f00638aecc3dfe4e697a629b3af9790600ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        // line 3
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_venue_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_venue_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
        ";
        
        $__internal_219d262dcde3231561d9c65b357f00638aecc3dfe4e697a629b3af9790600ac0->leave($__internal_219d262dcde3231561d9c65b357f00638aecc3dfe4e697a629b3af9790600ac0_prof);

    }

    // line 6
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_a36d66f91039f94b9a111dc7eda730295016bd728f0a2cb852ac6ec2d857cbc6 = $this->env->getExtension("native_profiler");
        $__internal_a36d66f91039f94b9a111dc7eda730295016bd728f0a2cb852ac6ec2d857cbc6->enter($__internal_a36d66f91039f94b9a111dc7eda730295016bd728f0a2cb852ac6ec2d857cbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 7
        echo "    <div class='col-md-8'>
        <strong>Name : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo " </br>

            <strong>Address : </strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "address", array()), "html", null, true);
        echo " </br>
            

                <strong>Website : </strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "website", array()), "html", null, true);
        echo " </br>

                <strong>    Telephone : </strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "telephone", array()), "html", null, true);
        echo " </br>

            <strong>    Description : </strong>";
        // line 17
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array());
        echo " </br>
            <strong>Tags</strong>
            ";
        // line 19
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTags", array(), "method")) {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 21
                echo "                    <span class=\"label label-primary\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo " </span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            ";
        }
        // line 24
        echo "        </div>
        <div class=\"col-md-4\">
            ";
        // line 26
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media", array()), "medium", array());
        // line 27
        echo "        </div>
    </div>
";
        
        $__internal_a36d66f91039f94b9a111dc7eda730295016bd728f0a2cb852ac6ec2d857cbc6->leave($__internal_a36d66f91039f94b9a111dc7eda730295016bd728f0a2cb852ac6ec2d857cbc6_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Venue:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  113 => 26,  109 => 24,  106 => 23,  97 => 21,  92 => 20,  90 => 19,  85 => 17,  80 => 15,  75 => 13,  69 => 10,  64 => 8,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Venue:base_venue.html.twig" %}*/
/* {% block extraOptions %}*/
/*         <a href="{{ path ('backend_venue_edit', {'id':entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Edit</button></a>*/
/*         <a href="{{ path ('backend_venue_delete', {'id':entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Delete</button></a>*/
/*         {% endblock %}*/
/* {% block controlleraction  %}*/
/*     <div class='col-md-8'>*/
/*         <strong>Name : {{entity.title}} </br>*/
/* */
/*             <strong>Address : </strong>{{entity.location.address }} </br>*/
/*             */
/* */
/*                 <strong>Website : </strong>{{entity.website}} </br>*/
/* */
/*                 <strong>    Telephone : </strong>{{entity.location.telephone}} </br>*/
/* */
/*             <strong>    Description : </strong>{{entity.content|raw}} </br>*/
/*             <strong>Tags</strong>*/
/*             {% if entity.getTags() %}*/
/*                 {% for tag in entity.getTags %}*/
/*                     <span class="label label-primary"> {{ tag.name }} </span>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% thumbnail  entity.media, 'medium' %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
