<?php

/* SonataSeoBundle:Block:block_social_container.html.twig */
class __TwigTemplate_68f5961d165a264048d5c2b8358215916a10472729cbf781f5f3e6062878db4d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", array()), "block_container", array(), "array"), "SonataSeoBundle:Block:block_social_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_block($context, array $blocks = array())
    {
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
    }

    // line 23
    public function block_block_child_render($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"sonata_seo_social pull-left\">
        ";
        // line 25
        $this->displayParentBlock("block_child_render", $context, $blocks);
        echo "
    </div>
";
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
        return array (  50 => 25,  47 => 24,  44 => 23,  35 => 18,  31 => 16,  28 => 15,  19 => 12,);
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
