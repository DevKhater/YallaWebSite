<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_494f2017ceb3ac19aa19f81243c94b6eb0524523808c39a0e7ac0b6b180ee2b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf9dd596e35e08cc087c1e4e6fa66401199eca82a6f5131e3e68a135bdd94794 = $this->env->getExtension("native_profiler");
        $__internal_cf9dd596e35e08cc087c1e4e6fa66401199eca82a6f5131e3e68a135bdd94794->enter($__internal_cf9dd596e35e08cc087c1e4e6fa66401199eca82a6f5131e3e68a135bdd94794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "43c35c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_43c35c0_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/43c35c0_part_1.css");
            // line 14
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "43c35c0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_43c35c0_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/43c35c0_font-awesome_2.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "43c35c0_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_43c35c0_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/43c35c0_jquery-ui_3.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "43c35c0_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_43c35c0_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/43c35c0_style_4.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "43c35c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_43c35c0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/43c35c0.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    </head>
    <body>
        <div class=\"navbar navbar-inverse set-radius-zero\">
        <div class=\"container\">
            
            <div class=\"left-div\">
                <i class=\"fa fa-user-plus login-icon\" ></i>
        </div>
            </div>
        </div>
        <div>
            ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 33
            echo "                ";
            // line 34
            echo "            ";
        }
        // line 35
        echo "        </div>

        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 39
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
        <div>
            ";
        // line 46
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 48
        echo "        </div>
    </body>
</html>";
        
        $__internal_cf9dd596e35e08cc087c1e4e6fa66401199eca82a6f5131e3e68a135bdd94794->leave($__internal_cf9dd596e35e08cc087c1e4e6fa66401199eca82a6f5131e3e68a135bdd94794_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05c3a33eb17eed93bb3a88c08cbadf421daf8b2fd9fab5b2225d8b215a18d81a = $this->env->getExtension("native_profiler");
        $__internal_05c3a33eb17eed93bb3a88c08cbadf421daf8b2fd9fab5b2225d8b215a18d81a->enter($__internal_05c3a33eb17eed93bb3a88c08cbadf421daf8b2fd9fab5b2225d8b215a18d81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Yalla Nightlife Backend";
        
        $__internal_05c3a33eb17eed93bb3a88c08cbadf421daf8b2fd9fab5b2225d8b215a18d81a->leave($__internal_05c3a33eb17eed93bb3a88c08cbadf421daf8b2fd9fab5b2225d8b215a18d81a_prof);

    }

    // line 46
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b8c943fa4942eb1b0ec5fb8aa2f2bdd9fa734d3524bedaf7bc77dca0a482c38 = $this->env->getExtension("native_profiler");
        $__internal_3b8c943fa4942eb1b0ec5fb8aa2f2bdd9fa734d3524bedaf7bc77dca0a482c38->enter($__internal_3b8c943fa4942eb1b0ec5fb8aa2f2bdd9fa734d3524bedaf7bc77dca0a482c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 47
        echo "            ";
        
        $__internal_3b8c943fa4942eb1b0ec5fb8aa2f2bdd9fa734d3524bedaf7bc77dca0a482c38->leave($__internal_3b8c943fa4942eb1b0ec5fb8aa2f2bdd9fa734d3524bedaf7bc77dca0a482c38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 47,  167 => 46,  155 => 7,  146 => 48,  144 => 46,  140 => 44,  134 => 43,  125 => 40,  120 => 39,  115 => 38,  111 => 37,  107 => 35,  104 => 34,  102 => 33,  96 => 30,  92 => 29,  87 => 28,  85 => 27,  72 => 16,  40 => 14,  36 => 8,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}Yalla Nightlife Backend{% endblock %}</title>*/
/*         {% stylesheets */
/*                 '@bootstrap_css' */
/*                 '@YallaWebsiteBackendBundle/Resources/public/css/font-awesome.css'*/
/*                 '@YallaWebsiteBackendBundle/Resources/public/css/jquery-ui.css'*/
/*                 '@YallaWebsiteBackendBundle/Resources/public/css/style.css'*/
/*         %}*/
/*         <link rel="stylesheet" type="text/css" media="screen" href="{{ asset_url }}"/>*/
/*         {% endstylesheets %}*/
/*     </head>*/
/*     <body>*/
/*         <div class="navbar navbar-inverse set-radius-zero">*/
/*         <div class="container">*/
/*             */
/*             <div class="left-div">*/
/*                 <i class="fa fa-user-plus login-icon" ></i>*/
/*         </div>*/
/*             </div>*/
/*         </div>*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 {#<a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
