<?php

/* YallaWebsiteFrontendBundle:Article:show.html.twig */
class __TwigTemplate_515abda98d99d6f272ccd120d1698fb3ec0b77007fa8a696e36c2fe3d30b52dc extends Twig_Template
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
        $__internal_a02d6a5423bde6b71ca60e1db2281059da6a9ea0974cab9b0e6a0265d1ee4bbf = $this->env->getExtension("native_profiler");
        $__internal_a02d6a5423bde6b71ca60e1db2281059da6a9ea0974cab9b0e6a0265d1ee4bbf->enter($__internal_a02d6a5423bde6b71ca60e1db2281059da6a9ea0974cab9b0e6a0265d1ee4bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Article:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a02d6a5423bde6b71ca60e1db2281059da6a9ea0974cab9b0e6a0265d1ee4bbf->leave($__internal_a02d6a5423bde6b71ca60e1db2281059da6a9ea0974cab9b0e6a0265d1ee4bbf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c849356c5ec002656ca48aaf4c03bee9d060cc8e4513cfb2f1caf34631fd1a7f = $this->env->getExtension("native_profiler");
        $__internal_c849356c5ec002656ca48aaf4c03bee9d060cc8e4513cfb2f1caf34631fd1a7f->enter($__internal_c849356c5ec002656ca48aaf4c03bee9d060cc8e4513cfb2f1caf34631fd1a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c849356c5ec002656ca48aaf4c03bee9d060cc8e4513cfb2f1caf34631fd1a7f->leave($__internal_c849356c5ec002656ca48aaf4c03bee9d060cc8e4513cfb2f1caf34631fd1a7f_prof);

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
