<?php

/* SonataSeoBundle:Block:block_social_container.html.twig */
class __TwigTemplate_82563492ff036e1855bf8e1f94f89d85b920afe450f7be77fcb573f9cde3e1d1 extends Twig_Template
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
        $__internal_80a3636b850c31f01adf9d0405041d39e51f448e436bc5d3d2e2ba43b850feee = $this->env->getExtension("native_profiler");
        $__internal_80a3636b850c31f01adf9d0405041d39e51f448e436bc5d3d2e2ba43b850feee->enter($__internal_80a3636b850c31f01adf9d0405041d39e51f448e436bc5d3d2e2ba43b850feee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_social_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a3636b850c31f01adf9d0405041d39e51f448e436bc5d3d2e2ba43b850feee->leave($__internal_80a3636b850c31f01adf9d0405041d39e51f448e436bc5d3d2e2ba43b850feee_prof);

    }

    // line 15
    public function block_block($context, array $blocks = array())
    {
        $__internal_3a8f34ecfb2240e4d7669c3980cd7bf152796b9fe4fc8e93b26c5a05d75597a3 = $this->env->getExtension("native_profiler");
        $__internal_3a8f34ecfb2240e4d7669c3980cd7bf152796b9fe4fc8e93b26c5a05d75597a3->enter($__internal_3a8f34ecfb2240e4d7669c3980cd7bf152796b9fe4fc8e93b26c5a05d75597a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_3a8f34ecfb2240e4d7669c3980cd7bf152796b9fe4fc8e93b26c5a05d75597a3->leave($__internal_3a8f34ecfb2240e4d7669c3980cd7bf152796b9fe4fc8e93b26c5a05d75597a3_prof);

    }

    // line 23
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_f9002bc51a55d642f646f36f693ef98773795681a413a4d1a57c5c3c669361ed = $this->env->getExtension("native_profiler");
        $__internal_f9002bc51a55d642f646f36f693ef98773795681a413a4d1a57c5c3c669361ed->enter($__internal_f9002bc51a55d642f646f36f693ef98773795681a413a4d1a57c5c3c669361ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 24
        echo "    <div class=\"sonata_seo_social pull-left\">
        ";
        // line 25
        $this->displayParentBlock("block_child_render", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_f9002bc51a55d642f646f36f693ef98773795681a413a4d1a57c5c3c669361ed->leave($__internal_f9002bc51a55d642f646f36f693ef98773795681a413a4d1a57c5c3c669361ed_prof);

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
