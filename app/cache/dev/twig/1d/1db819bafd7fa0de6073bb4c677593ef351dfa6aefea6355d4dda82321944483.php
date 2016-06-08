<?php

/* YallaWebsiteFrontendBundle:Page:about.html.twig */
class __TwigTemplate_5ca1675b359aae5860eaace076e2d9e872d5cf7c4f3e88f07d907ac730001bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "YallaWebsiteFrontendBundle:Page:about.html.twig", 2);
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
        $__internal_c4f2ace7d08c8d3fc5941f444bb359f9687fc44c0e5cc051b43e270312457684 = $this->env->getExtension("native_profiler");
        $__internal_c4f2ace7d08c8d3fc5941f444bb359f9687fc44c0e5cc051b43e270312457684->enter($__internal_c4f2ace7d08c8d3fc5941f444bb359f9687fc44c0e5cc051b43e270312457684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4f2ace7d08c8d3fc5941f444bb359f9687fc44c0e5cc051b43e270312457684->leave($__internal_c4f2ace7d08c8d3fc5941f444bb359f9687fc44c0e5cc051b43e270312457684_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d72523ebb37466a31d882833d50268b2717b5e0c69be951e6586d101ea091280 = $this->env->getExtension("native_profiler");
        $__internal_d72523ebb37466a31d882833d50268b2717b5e0c69be951e6586d101ea091280->enter($__internal_d72523ebb37466a31d882833d50268b2717b5e0c69be951e6586d101ea091280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"wrapper\">
        <div id='missionContent' class=\"\">
            <div class=\"innerPagesTitle\">
                <h1>Mission</h1>
            </div>
            ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "html", null, true);
        echo "
        </div>
        <div id='visionContent' class=\"\">
            <div class=\"innerPagesTitle\">
                <h1>Vision</h1>
            </div>
            <div id=\"left_border\" style=\"\"></div>
            ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["vision"]) ? $context["vision"] : $this->getContext($context, "vision")), "html", null, true);
        echo "
        </div>
        <div id='membersContent'>
            <div class=\"innerPagesTitle\">
                <h1>Members</h1>
            </div>
            <div class=\"wrapper\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : $this->getContext($context, "members")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            echo " 
                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\" >
                        <div onclick='window.open(\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "website", array()), "html", null, true);
            echo "\", \"_blank\")' class='member_div' style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["member"], "media", array()), "displayIndex");
            echo "');\"></div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_d72523ebb37466a31d882833d50268b2717b5e0c69be951e6586d101ea091280->leave($__internal_d72523ebb37466a31d882833d50268b2717b5e0c69be951e6586d101ea091280_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  74 => 25,  67 => 23,  57 => 16,  47 => 9,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* {% block body %}*/
/*     <div class="wrapper">*/
/*         <div id='missionContent' class="">*/
/*             <div class="innerPagesTitle">*/
/*                 <h1>Mission</h1>*/
/*             </div>*/
/*             {{about}}*/
/*         </div>*/
/*         <div id='visionContent' class="">*/
/*             <div class="innerPagesTitle">*/
/*                 <h1>Vision</h1>*/
/*             </div>*/
/*             <div id="left_border" style=""></div>*/
/*             {{vision}}*/
/*         </div>*/
/*         <div id='membersContent'>*/
/*             <div class="innerPagesTitle">*/
/*                 <h1>Members</h1>*/
/*             </div>*/
/*             <div class="wrapper">*/
/*                 {% for member in members %} */
/*                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >*/
/*                         <div onclick='window.open("{{member.website}}", "_blank")' class='member_div' style="background-image: url('{% path  member.media, 'displayIndex' %}');"></div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
