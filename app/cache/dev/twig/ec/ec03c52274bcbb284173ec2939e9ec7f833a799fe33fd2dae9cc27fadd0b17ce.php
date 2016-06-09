<?php

/* YallaWebsiteFrontendBundle:Article:show.html.twig */
class __TwigTemplate_f148adef80fb77fcfb4216ea9f8fc3ee4f2cc82d6c9a5dd2595422f22f42d110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "YallaWebsiteFrontendBundle:Article:show.html.twig", 1);
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
        $__internal_93d4db46974c4432652d432e7e88c20777b0ca42b7188dd7e9f98fd3e4b31d2b = $this->env->getExtension("native_profiler");
        $__internal_93d4db46974c4432652d432e7e88c20777b0ca42b7188dd7e9f98fd3e4b31d2b->enter($__internal_93d4db46974c4432652d432e7e88c20777b0ca42b7188dd7e9f98fd3e4b31d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Article:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d4db46974c4432652d432e7e88c20777b0ca42b7188dd7e9f98fd3e4b31d2b->leave($__internal_93d4db46974c4432652d432e7e88c20777b0ca42b7188dd7e9f98fd3e4b31d2b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_866a7dc9cc20372e0c1fc23d9f8c5bff66960607c5ba210fb5df4978b50280af = $this->env->getExtension("native_profiler");
        $__internal_866a7dc9cc20372e0c1fc23d9f8c5bff66960607c5ba210fb5df4978b50280af->enter($__internal_866a7dc9cc20372e0c1fc23d9f8c5bff66960607c5ba210fb5df4978b50280af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <div class=\"wrapper\">

        ";
        // line 5
        if ((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) {
            // line 6
            echo "            <div class=\"theEntityDiv\">
                <div class=\"innerTitle\">
                    <h1>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
            echo "</h1>
                </div>
                <div id=\"innerEntityImage\">
                    ";
            // line 11
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media", array()), "large", array("class" => "img-responsive"));
            // line 12
            echo "                </div>

                <div id=\"innerEntityContent\">
                    ";
            // line 15
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array());
            echo "
                </div>
            </div>
        ";
        }
        // line 19
        echo "
    </div>

";
        
        $__internal_866a7dc9cc20372e0c1fc23d9f8c5bff66960607c5ba210fb5df4978b50280af->leave($__internal_866a7dc9cc20372e0c1fc23d9f8c5bff66960607c5ba210fb5df4978b50280af_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  63 => 15,  58 => 12,  56 => 11,  50 => 8,  46 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* {% block body %}*/
/*         <div class="wrapper">*/
/* */
/*         {%  if (entity) %}*/
/*             <div class="theEntityDiv">*/
/*                 <div class="innerTitle">*/
/*                     <h1>{{entity.title}}</h1>*/
/*                 </div>*/
/*                 <div id="innerEntityImage">*/
/*                     {% thumbnail entity.media, 'large' with {'class': 'img-responsive'} %}*/
/*                 </div>*/
/* */
/*                 <div id="innerEntityContent">*/
/*                     {{ entity.content| raw }}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
