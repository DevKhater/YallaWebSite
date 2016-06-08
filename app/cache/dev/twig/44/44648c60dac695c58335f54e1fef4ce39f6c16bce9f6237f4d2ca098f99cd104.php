<?php

/* @YallaWebsiteFrontendBundle/views/Template/menu.html.twig */
class __TwigTemplate_2b542fbc40d170676a8f451c08dfd43b161d47b6f71c6e43c7b7d72577946261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f2eb07575ad1b3dae8454c9be881d731dbc4c7394ce29ed3dbb0ad7bb72d480 = $this->env->getExtension("native_profiler");
        $__internal_7f2eb07575ad1b3dae8454c9be881d731dbc4c7394ce29ed3dbb0ad7bb72d480->enter($__internal_7f2eb07575ad1b3dae8454c9be881d731dbc4c7394ce29ed3dbb0ad7bb72d480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@YallaWebsiteFrontendBundle/views/Template/menu.html.twig"));

        // line 1
        echo "
<nav role=\"navigation\">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-navbar-collapse-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
        <a class=\"navbar-brand\" href=\"/\">
            ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7d86319_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7d86319_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/7d86319_logo_1.png");
            // line 15
            echo "            <img id='logo_icon' src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"YNL Logo\" height='80'/>
                ";
        } else {
            // asset "7d86319"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7d86319") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/7d86319.png");
            echo "            <img id='logo_icon' src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"YNL Logo\" height='80'/>
                ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-navbar-collapse-1\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("yalla_website_frontend_homepage");
        echo "\">Yalla</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("yalla_website_frontend_page_about");
        echo "\">About</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sonata_media_gallery_index");
        echo "\">Snapshots</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("yalla_website_frontened_events");
        echo "\">Events</a></li>
            <li id='menuImageLogo'>";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7d86319_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7d86319_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/7d86319_logo_1.png");
            // line 26
            echo "                <img id='logo_icon' src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"YNL Logo\" />
                ";
        } else {
            // asset "7d86319"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7d86319") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/7d86319.png");
            echo "                <img id='logo_icon' src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"YNL Logo\" />
                ";
        }
        unset($context["asset_url"]);
        // line 28
        echo "            </li>
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("yalla_website_frontened_articles");
        echo "\">Gossip</a></li>
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("yalla_website_frontened_venues");
        echo "\">Guides</a></li>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("yalla_website_frontened_artists");
        echo "\">Artists</a></li>
            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("yalla_website_frontend_homepage");
        echo "\">Contact</a></li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->

    <!-- /.container -->
</nav>";
        
        $__internal_7f2eb07575ad1b3dae8454c9be881d731dbc4c7394ce29ed3dbb0ad7bb72d480->leave($__internal_7f2eb07575ad1b3dae8454c9be881d731dbc4c7394ce29ed3dbb0ad7bb72d480_prof);

    }

    public function getTemplateName()
    {
        return "@YallaWebsiteFrontendBundle/views/Template/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  107 => 31,  103 => 30,  99 => 29,  96 => 28,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  55 => 16,  41 => 15,  37 => 14,  22 => 1,);
    }
}
/* */
/* <nav role="navigation">*/
/* */
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*         </button>*/
/*         <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->*/
/*         <a class="navbar-brand" href="/">*/
/*             {% image '@YallaWebsiteFrontendBundle/Resources/public/images/base/logo.png' %}*/
/*             <img id='logo_icon' src="{{ asset_url }}" alt="YNL Logo" height='80'/>*/
/*                 {% endimage %}</a>*/
/*     </div>*/
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">*/
/*         <ul class="nav navbar-nav">*/
/*             <li><a href="{{path('yalla_website_frontend_homepage')}}">Yalla</a></li>*/
/*             <li><a href="{{path('yalla_website_frontend_page_about')}}">About</a></li>*/
/*             <li><a href="{{path('sonata_media_gallery_index')}}">Snapshots</a></li>*/
/*             <li><a href="{{path('yalla_website_frontened_events')}}">Events</a></li>*/
/*             <li id='menuImageLogo'>{% image '@YallaWebsiteFrontendBundle/Resources/public/images/base/logo.png' %}*/
/*                 <img id='logo_icon' src="{{ asset_url }}" alt="YNL Logo" />*/
/*                 {% endimage %}*/
/*             </li>*/
/*             <li><a href="{{path('yalla_website_frontened_articles')}}">Gossip</a></li>*/
/*             <li><a href="{{path('yalla_website_frontened_venues')}}">Guides</a></li>*/
/*             <li><a href="{{path('yalla_website_frontened_artists')}}">Artists</a></li>*/
/*             <li><a href="{{path('yalla_website_frontend_homepage')}}">Contact</a></li>*/
/* */
/*         </ul>*/
/*     </div>*/
/*     <!-- /.navbar-collapse -->*/
/* */
/*     <!-- /.container -->*/
/* </nav>*/
