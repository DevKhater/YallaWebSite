<?php

/* @YallaWebsiteFrontendBundle/views/front_base.html.twig */
class __TwigTemplate_dcf2e06d7423e920dc993df6450e747195dfaf3109de86ade400adf8c0876f79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'js_calednar' => array($this, 'block_js_calednar'),
            'massonary' => array($this, 'block_massonary'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_995aab403abc4e02d06bda90030e16387e5a3f62efb1818480a79d6bde94127b = $this->env->getExtension("native_profiler");
        $__internal_995aab403abc4e02d06bda90030e16387e5a3f62efb1818480a79d6bde94127b->enter($__internal_995aab403abc4e02d06bda90030e16387e5a3f62efb1818480a79d6bde94127b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@YallaWebsiteFrontendBundle/views/front_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ";
        // line 2
        echo $this->env->getExtension('sonata_seo')->getHtmlAttributes();
        echo ">
    <head ";
        // line 3
        echo $this->env->getExtension('sonata_seo')->getHeadAttributes();
        echo ">
        ";
        // line 4
        echo $this->env->getExtension('sonata_seo')->getTitle();
        echo "
        ";
        // line 5
        echo $this->env->getExtension('sonata_seo')->getMetadatas();
        echo "
        ";
        // line 6
        echo $this->env->getExtension('sonata_seo')->getLinkCanonical();
        echo "
        ";
        // line 7
        echo $this->env->getExtension('sonata_seo')->getLangAlternates();
        echo "
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 11
        // asset "d2efd53"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d2efd53") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/d2efd53.css");
        // line 12
        echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\"/>
        ";
        unset($context["asset_url"]);
        // line 14
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
    <div id=\"fb-root\"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '516228625234128',
                xfbml: true,
                version: 'v2.6'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>


    <header class=\"clearfix\">
        <div id=\"preHeader\"></div>
        ";
        // line 48
        $this->loadTemplate("@YallaWebsiteFrontendBundle/views/Template/menu.html.twig", "@YallaWebsiteFrontendBundle/views/front_base.html.twig", 48)->display($context);
        // line 49
        echo "        <div class='anyAdvRow Adv_Display'>
            <div class='leftAdv_row'>";
        // line 50
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('routing')->getUrl("ads_manager_show", array("id" => "home_header_first")));
        echo "</div>
            <div class='rightAdv_row'>";
        // line 51
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('routing')->getUrl("ads_manager_show", array("id" => "home_header_second")));
        echo "</div>
        </div>
        <div id='socialSearchRow'>

            <div id='socialLinks'>";
        // line 55
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('routing')->getUrl("social_media_follow_us"));
        echo "</div>
            <div id='searchBar'></div>
        </div>
    </header>
    <div class=\"pageContent\">
        <div id=\"bodyLeftAdv\" class=\"Adv_Display bodyColAdv\">";
        // line 60
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('routing')->getUrl("ads_manager_show", array("id" => "home_body_first")));
        echo "</div>
    ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "    <div id=\"bodyRightAdv\" class=\"Adv_Display bodyColAdv\">";
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('routing')->getUrl("ads_manager_show", array("id" => "home_body_second")));
        echo "</div>
</div>
<footer>
    <div class='anyAdvRow Adv_Display'>
        <div class='leftAdv_row'>";
        // line 66
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('routing')->getUrl("ads_manager_show", array("id" => "home_footer_first")));
        echo "</div>
        <div class='rightAdv_row'>";
        // line 67
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('routing')->getUrl("ads_manager_show", array("id" => "home_footer_second")));
        echo "</div>
    </div>
    <div id=\"footerContent\">

        <div class=\"wrapper\">
            <div class='col-lg-3'>
                ";
        // line 73
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bcb3c91_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bcb3c91_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/bcb3c91_PlatCaiFooter_1.png");
            // line 74
            echo "                <img id='footer_pl_icon' src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Platinum Cairo\" />
                ";
        } else {
            // asset "bcb3c91"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bcb3c91") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/bcb3c91.png");
            echo "                <img id='footer_pl_icon' src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Platinum Cairo\" />
                ";
        }
        unset($context["asset_url"]);
        // line 76
        echo "            </div>
            <div class=\"col-lg-6 text-center\">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
            <div class='col-lg-3'></div>
        </div>
    </div>
</footer>
";
        // line 84
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 85
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a56fa94_part_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a56fa94.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 87
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        $this->displayBlock('js_calednar', $context, $blocks);
        // line 92
        $this->displayBlock('massonary', $context, $blocks);
        // line 93
        echo "</body>
</html>
";
        
        $__internal_995aab403abc4e02d06bda90030e16387e5a3f62efb1818480a79d6bde94127b->leave($__internal_995aab403abc4e02d06bda90030e16387e5a3f62efb1818480a79d6bde94127b_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f585c3e2c5230e79ed3fd08e21b9f874d424bc34f0d427e5e79a0443e66c7aa = $this->env->getExtension("native_profiler");
        $__internal_8f585c3e2c5230e79ed3fd08e21b9f874d424bc34f0d427e5e79a0443e66c7aa->enter($__internal_8f585c3e2c5230e79ed3fd08e21b9f874d424bc34f0d427e5e79a0443e66c7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8f585c3e2c5230e79ed3fd08e21b9f874d424bc34f0d427e5e79a0443e66c7aa->leave($__internal_8f585c3e2c5230e79ed3fd08e21b9f874d424bc34f0d427e5e79a0443e66c7aa_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8ad0c53272ce33c9b8fa19cbbd61072f6fb5aff42d92be94af672ff04b8ae44 = $this->env->getExtension("native_profiler");
        $__internal_a8ad0c53272ce33c9b8fa19cbbd61072f6fb5aff42d92be94af672ff04b8ae44->enter($__internal_a8ad0c53272ce33c9b8fa19cbbd61072f6fb5aff42d92be94af672ff04b8ae44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8ad0c53272ce33c9b8fa19cbbd61072f6fb5aff42d92be94af672ff04b8ae44->leave($__internal_a8ad0c53272ce33c9b8fa19cbbd61072f6fb5aff42d92be94af672ff04b8ae44_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_afc52be22a890f481a931492415de28b3d406c337d509d3768c177d740a7378e = $this->env->getExtension("native_profiler");
        $__internal_afc52be22a890f481a931492415de28b3d406c337d509d3768c177d740a7378e->enter($__internal_afc52be22a890f481a931492415de28b3d406c337d509d3768c177d740a7378e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_afc52be22a890f481a931492415de28b3d406c337d509d3768c177d740a7378e->leave($__internal_afc52be22a890f481a931492415de28b3d406c337d509d3768c177d740a7378e_prof);

    }

    // line 91
    public function block_js_calednar($context, array $blocks = array())
    {
        $__internal_b68301e85bcf4ccb9ca33f6651a78866653098aea5e0f2499ada79910255bc64 = $this->env->getExtension("native_profiler");
        $__internal_b68301e85bcf4ccb9ca33f6651a78866653098aea5e0f2499ada79910255bc64->enter($__internal_b68301e85bcf4ccb9ca33f6651a78866653098aea5e0f2499ada79910255bc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_calednar"));

        
        $__internal_b68301e85bcf4ccb9ca33f6651a78866653098aea5e0f2499ada79910255bc64->leave($__internal_b68301e85bcf4ccb9ca33f6651a78866653098aea5e0f2499ada79910255bc64_prof);

    }

    // line 92
    public function block_massonary($context, array $blocks = array())
    {
        $__internal_c0ffee15ba9f109ce7509c664ceb36e99450d43d7a932846f98b3f70f2bf59cf = $this->env->getExtension("native_profiler");
        $__internal_c0ffee15ba9f109ce7509c664ceb36e99450d43d7a932846f98b3f70f2bf59cf->enter($__internal_c0ffee15ba9f109ce7509c664ceb36e99450d43d7a932846f98b3f70f2bf59cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "massonary"));

        
        $__internal_c0ffee15ba9f109ce7509c664ceb36e99450d43d7a932846f98b3f70f2bf59cf->leave($__internal_c0ffee15ba9f109ce7509c664ceb36e99450d43d7a932846f98b3f70f2bf59cf_prof);

    }

    public function getTemplateName()
    {
        return "@YallaWebsiteFrontendBundle/views/front_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 92,  268 => 91,  257 => 90,  246 => 61,  235 => 14,  226 => 93,  224 => 92,  222 => 91,  220 => 90,  215 => 88,  210 => 87,  190 => 85,  186 => 84,  176 => 76,  162 => 74,  158 => 73,  149 => 67,  145 => 66,  137 => 62,  135 => 61,  131 => 60,  123 => 55,  116 => 51,  112 => 50,  109 => 49,  107 => 48,  72 => 15,  69 => 14,  63 => 12,  60 => 11,  56 => 10,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  30 => 2,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html {{ sonata_seo_html_attributes() }}>*/
/*     <head {{ sonata_seo_head_attributes() }}>*/
/*         {{ sonata_seo_title() }}*/
/*         {{ sonata_seo_metadatas() }}*/
/*         {{ sonata_seo_link_canonical() }}*/
/*         {{ sonata_seo_lang_alternates() }}*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% stylesheets '@bootstrap_css'  '@frontend_css' '@fontawesome_css' filter='lessphp' combine=true %}*/
/*         <link rel="stylesheet" type="text/css" media="screen" href="{{ asset_url }}"/>*/
/*         {% endstylesheets %}*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/*     <div id="fb-root"></div>*/
/*     <script>*/
/*         window.fbAsyncInit = function () {*/
/*             FB.init({*/
/*                 appId: '516228625234128',*/
/*                 xfbml: true,*/
/*                 version: 'v2.6'*/
/*             });*/
/*         };*/
/* */
/*         (function (d, s, id) {*/
/*             var js, fjs = d.getElementsByTagName(s)[0];*/
/*             if (d.getElementById(id)) {*/
/*                 return;*/
/*             }*/
/*             js = d.createElement(s);*/
/*             js.id = id;*/
/*             js.src = "//connect.facebook.net/en_US/sdk.js";*/
/*             fjs.parentNode.insertBefore(js, fjs);*/
/*         }(document, 'script', 'facebook-jssdk'));*/
/*     </script>*/
/* */
/* */
/*     <header class="clearfix">*/
/*         <div id="preHeader"></div>*/
/*         {% include '@YallaWebsiteFrontendBundle/views/Template/menu.html.twig' %}*/
/*         <div class='anyAdvRow Adv_Display'>*/
/*             <div class='leftAdv_row'>{{ render_esi(url('ads_manager_show', { 'id': 'home_header_first' })) }}</div>*/
/*             <div class='rightAdv_row'>{{ render_esi(url('ads_manager_show', { 'id': 'home_header_second' })) }}</div>*/
/*         </div>*/
/*         <div id='socialSearchRow'>*/
/* */
/*             <div id='socialLinks'>{{ render_esi(url('social_media_follow_us')) }}</div>*/
/*             <div id='searchBar'></div>*/
/*         </div>*/
/*     </header>*/
/*     <div class="pageContent">*/
/*         <div id="bodyLeftAdv" class="Adv_Display bodyColAdv">{{ render_esi(url('ads_manager_show', { 'id': 'home_body_first' })) }}</div>*/
/*     {% block body %}{% endblock %}*/
/*     <div id="bodyRightAdv" class="Adv_Display bodyColAdv">{{ render_esi(url('ads_manager_show', { 'id': 'home_body_second' })) }}</div>*/
/* </div>*/
/* <footer>*/
/*     <div class='anyAdvRow Adv_Display'>*/
/*         <div class='leftAdv_row'>{{ render_esi(url('ads_manager_show', { 'id': 'home_footer_first' })) }}</div>*/
/*         <div class='rightAdv_row'>{{ render_esi(url('ads_manager_show', { 'id': 'home_footer_second' })) }}</div>*/
/*     </div>*/
/*     <div id="footerContent">*/
/* */
/*         <div class="wrapper">*/
/*             <div class='col-lg-3'>*/
/*                 {% image '@YallaWebsiteFrontendBundle/Resources/public/images/base/PlatCaiFooter.png' %}*/
/*                 <img id='footer_pl_icon' src="{{ asset_url }}" alt="Platinum Cairo" />*/
/*                 {% endimage %}*/
/*             </div>*/
/*             <div class="col-lg-6 text-center">*/
/*                 <p>Copyright &copy; Your Website 2014</p>*/
/*             </div>*/
/*             <div class='col-lg-3'></div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* {% javascripts '@jquery' '@bootstrap_js' %}*/
/* <script type="text/javascript" src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/* <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* <script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>*/
/* {% block javascripts %}{% endblock %}*/
/* {% block js_calednar %}{% endblock %}*/
/* {% block massonary %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
