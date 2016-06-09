<?php

/* YallaWebsiteFrontendBundle:Page:about.html.twig */
class __TwigTemplate_56f5350d1830663911f713ee20b36b13e1abe2e261468af8050203a408e1711b extends Twig_Template
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
        $__internal_89b88a6060d51313b8483d6f2cbb652558051d52293bc312b41a8d5583a96f79 = $this->env->getExtension("native_profiler");
        $__internal_89b88a6060d51313b8483d6f2cbb652558051d52293bc312b41a8d5583a96f79->enter($__internal_89b88a6060d51313b8483d6f2cbb652558051d52293bc312b41a8d5583a96f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b88a6060d51313b8483d6f2cbb652558051d52293bc312b41a8d5583a96f79->leave($__internal_89b88a6060d51313b8483d6f2cbb652558051d52293bc312b41a8d5583a96f79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6205b18da397fcf3a5111ba1622eea22c9507012c06388c9f54918ac5c86db38 = $this->env->getExtension("native_profiler");
        $__internal_6205b18da397fcf3a5111ba1622eea22c9507012c06388c9f54918ac5c86db38->enter($__internal_6205b18da397fcf3a5111ba1622eea22c9507012c06388c9f54918ac5c86db38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6205b18da397fcf3a5111ba1622eea22c9507012c06388c9f54918ac5c86db38->leave($__internal_6205b18da397fcf3a5111ba1622eea22c9507012c06388c9f54918ac5c86db38_prof);

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
