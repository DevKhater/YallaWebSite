<?php

/* YallaWebsiteFrontendBundle:Article:show.html.twig */
class __TwigTemplate_d8464a1940a2ec881d3b00128a211db5d91b47296eaa035052e40dff482dc8a8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "        <div class=\"wrapper\">

        ";
        // line 5
        if ((isset($context["entity"]) ? $context["entity"] : null)) {
            // line 6
            echo "            <div class=\"theEntityDiv\">
                <div class=\"innerTitle\">
                    <h1>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
            echo "</h1>
                </div>
                <div id=\"innerEntityImage\">
                    ";
            // line 11
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "media", array()), "large", array("class" => "img-responsive"));
            // line 12
            echo "                </div>

                <div id=\"innerEntityContent\">
                    ";
            // line 15
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "content", array());
            echo "
                </div>
            </div>
        ";
        }
        // line 19
        echo "
    </div>

";
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
        return array (  61 => 19,  54 => 15,  49 => 12,  47 => 11,  41 => 8,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
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
