<?php

/* SonataSeoBundle:Block:block_facebook_send_button.html.twig */
class __TwigTemplate_e133c0007d13d9d7f48e9d5b541d91feb7d2e83a3d3416220f69651221bb9c4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_facebook_send_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2342bcd95e1d472faef54409b2f76d334bb3e486a786fd74c7e88a3cabec308 = $this->env->getExtension("native_profiler");
        $__internal_b2342bcd95e1d472faef54409b2f76d334bb3e486a786fd74c7e88a3cabec308->enter($__internal_b2342bcd95e1d472faef54409b2f76d334bb3e486a786fd74c7e88a3cabec308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_facebook_send_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2342bcd95e1d472faef54409b2f76d334bb3e486a786fd74c7e88a3cabec308->leave($__internal_b2342bcd95e1d472faef54409b2f76d334bb3e486a786fd74c7e88a3cabec308_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_84a8a69930739055234bd63a2011e968a85df075b0767eb52921c6646133bebc = $this->env->getExtension("native_profiler");
        $__internal_84a8a69930739055234bd63a2011e968a85df075b0767eb52921c6646133bebc->enter($__internal_84a8a69930739055234bd63a2011e968a85df075b0767eb52921c6646133bebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    <div class=\"fb-send\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
            echo "data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        data-colorscheme=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "colorscheme", array()), "html", null, true);
        echo "\"
        ";
        // line 19
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array())) {
            echo "data-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array()), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "height", array())) {
            echo "data-height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "height", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_84a8a69930739055234bd63a2011e968a85df075b0767eb52921c6646133bebc->leave($__internal_84a8a69930739055234bd63a2011e968a85df075b0767eb52921c6646133bebc_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_facebook_send_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  56 => 19,  51 => 18,  45 => 17,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/* {% spaceless %}*/
/* */
/*     <div class="fb-send"*/
/*         {% if settings.url %}data-href="{{ settings.url }}"{% endif %}*/
/*         data-colorscheme="{{ settings.colorscheme }}"*/
/*         {% if settings.width %}data-width="{{ settings.width }}"{% endif %}*/
/*         {% if settings.height %}data-height="{{ settings.height }}"{% endif %}>*/
/*     </div>*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
