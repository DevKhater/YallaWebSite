<?php

/* YallaWebsiteFrontendBundle:Page:about.html.twig */
class __TwigTemplate_0a9b9b1af51a860b9f747d9c4b6832df8314dfade6c4dbb84d2b8e2f6586a371 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"wrapper\">
        <div id='missionContent' class=\"\">
            <div class=\"innerPagesTitle\">
                <h1>Mission</h1>
            </div>
            ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["about"]) ? $context["about"] : null), "html", null, true);
        echo "
        </div>
        <div id='visionContent' class=\"\">
            <div class=\"innerPagesTitle\">
                <h1>Vision</h1>
            </div>
            <div id=\"left_border\" style=\"\"></div>
            ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["vision"]) ? $context["vision"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : null));
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
        return array (  76 => 28,  65 => 25,  58 => 23,  48 => 16,  38 => 9,  31 => 4,  28 => 3,  11 => 2,);
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
