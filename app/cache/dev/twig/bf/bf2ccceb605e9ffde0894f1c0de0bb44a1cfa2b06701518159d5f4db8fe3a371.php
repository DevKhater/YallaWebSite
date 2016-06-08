<?php

/* SonataSeoBundle:Block:block_social_container.html.twig */
class __TwigTemplate_6c3590739426c6a14c569d18742be50203dde914bdb70063c1a8c30a1172e266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_container", array(), "array"), "SonataSeoBundle:Block:block_social_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cd098186a47bef13e8ea149321a04fbb221000b07a8c24f0b1338507198711c = $this->env->getExtension("native_profiler");
        $__internal_9cd098186a47bef13e8ea149321a04fbb221000b07a8c24f0b1338507198711c->enter($__internal_9cd098186a47bef13e8ea149321a04fbb221000b07a8c24f0b1338507198711c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_social_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cd098186a47bef13e8ea149321a04fbb221000b07a8c24f0b1338507198711c->leave($__internal_9cd098186a47bef13e8ea149321a04fbb221000b07a8c24f0b1338507198711c_prof);

    }

    // line 15
    public function block_block($context, array $blocks = array())
    {
        $__internal_492ef397b0e4ff35490acd07b8d35a7cb3dacac9217539548f0a9772579a8619 = $this->env->getExtension("native_profiler");
        $__internal_492ef397b0e4ff35490acd07b8d35a7cb3dacac9217539548f0a9772579a8619->enter($__internal_492ef397b0e4ff35490acd07b8d35a7cb3dacac9217539548f0a9772579a8619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 16
        echo "    <div class=\"col-sm-12\">
        <div class=\"row\">
            ";
        // line 18
        $this->displayParentBlock("block", $context, $blocks);
        echo "
        </div>
        <div class=\"clearfix\"></div>
    </div>
";
        
        $__internal_492ef397b0e4ff35490acd07b8d35a7cb3dacac9217539548f0a9772579a8619->leave($__internal_492ef397b0e4ff35490acd07b8d35a7cb3dacac9217539548f0a9772579a8619_prof);

    }

    // line 23
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_a6694470ad2bd64ca20ef2ccb20487897e597067b30fcce72f21d9e02d4c9525 = $this->env->getExtension("native_profiler");
        $__internal_a6694470ad2bd64ca20ef2ccb20487897e597067b30fcce72f21d9e02d4c9525->enter($__internal_a6694470ad2bd64ca20ef2ccb20487897e597067b30fcce72f21d9e02d4c9525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 24
        echo "    <div class=\"sonata_seo_social pull-left\">
        ";
        // line 25
        $this->displayParentBlock("block_child_render", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_a6694470ad2bd64ca20ef2ccb20487897e597067b30fcce72f21d9e02d4c9525->leave($__internal_a6694470ad2bd64ca20ef2ccb20487897e597067b30fcce72f21d9e02d4c9525_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_social_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  62 => 24,  56 => 23,  44 => 18,  40 => 16,  34 => 15,  19 => 12,);
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
/* {% extends sonata_block.templates['block_container'] %}*/
/* */
/* {# render container block #}*/
/* {% block block %}*/
/*     <div class="col-sm-12">*/
/*         <div class="row">*/
/*             {{ parent() }}*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block block_child_render %}*/
/*     <div class="sonata_seo_social pull-left">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
