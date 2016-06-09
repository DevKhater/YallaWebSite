<?php

/* @YallaWebsiteFrontendBundle/views/front_base.html.twig */
class __TwigTemplate_0ea33679ef85eb948a50356189d152010a88fdbe214199e29e232969cb8b4e78 extends Twig_Template
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
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d2efd53") : $this->env->getExtension('asset')->getAssetUrl("css/d2efd53.css");
        // line 12
        echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bcb3c91_0") : $this->env->getExtension('asset')->getAssetUrl("images/bcb3c91_PlatCaiFooter_1.png");
            // line 74
            echo "                <img id='footer_pl_icon' src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Platinum Cairo\" />
                ";
        } else {
            // asset "bcb3c91"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bcb3c91") : $this->env->getExtension('asset')->getAssetUrl("images/bcb3c91.png");
            echo "                <img id='footer_pl_icon' src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('asset')->getAssetUrl("js/a56fa94_part_1.js");
            // line 85
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('asset')->getAssetUrl("js/a56fa94_part_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94") : $this->env->getExtension('asset')->getAssetUrl("js/a56fa94.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 91
    public function block_js_calednar($context, array $blocks = array())
    {
    }

    // line 92
    public function block_massonary($context, array $blocks = array())
    {
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
        return array (  249 => 92,  244 => 91,  239 => 90,  234 => 61,  229 => 14,  223 => 93,  221 => 92,  219 => 91,  217 => 90,  212 => 88,  207 => 87,  187 => 85,  183 => 84,  173 => 76,  159 => 74,  155 => 73,  146 => 67,  142 => 66,  134 => 62,  132 => 61,  128 => 60,  120 => 55,  113 => 51,  109 => 50,  106 => 49,  104 => 48,  69 => 15,  66 => 14,  60 => 12,  57 => 11,  53 => 10,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  31 => 3,  27 => 2,  24 => 1,);
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
