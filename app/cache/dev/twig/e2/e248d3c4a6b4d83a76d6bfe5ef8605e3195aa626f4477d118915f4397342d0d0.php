<?php

/* ::backend_base.html.twig */
class __TwigTemplate_5066931525d22fd81090539e6f68663f052f4860d92886ed329c4baf61f26ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'extrabody' => array($this, 'block_extrabody'),
            'tinymce' => array($this, 'block_tinymce'),
            'datepicker' => array($this, 'block_datepicker'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_395fd415fefcc246ab74cebb06e772c79ea7e0c9be3d0944a389e62dd931c898 = $this->env->getExtension("native_profiler");
        $__internal_395fd415fefcc246ab74cebb06e772c79ea7e0c9be3d0944a389e62dd931c898->enter($__internal_395fd415fefcc246ab74cebb06e772c79ea7e0c9be3d0944a389e62dd931c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::backend_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        echo $this->env->getExtension('sonata_seo')->getTitle();
        echo "
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fe7793f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe7793f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fe7793f_part_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "fe7793f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe7793f_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fe7793f_part_2.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "fe7793f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe7793f_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fe7793f_jquery-ui_3.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "fe7793f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe7793f_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fe7793f_select2.min_4.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "fe7793f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe7793f_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fe7793f_jquery.tagsinput.min_5.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "fe7793f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe7793f_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fe7793f_image-picker_6.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "fe7793f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe7793f_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fe7793f_style_7.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "fe7793f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe7793f") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fe7793f.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css\">
    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <style>
        .create_new{
            margin-top: -50px;
        }
        table.zebra tr:nth-child(odd) {  
            background-color: #EFF4FA; 
        }

        table.zebra tr:nth-child(even) {  
            background-color: #F7FAFD; 
        }
        table.zebra th {
            background-color: #FFF; 
        }
    </style>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\" style=\"float: left\"><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("yalla_website_frontend_homepage");
        echo "\">YallaNightlife.com</a></div>
                <div class=\"col-md-6\" style=\"float: right\">
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("backend_profile_index");
        echo "\" style=\"color: black\"><strong>Profile: </strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</a>
                    &nbsp;&nbsp;
                    <strong><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></strong>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class=\"navbar set-radius-zero\" style=\"background-color: #DD1144\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("yalla_website_backend_homepage");
        echo "\"><h4 style=\"color: black;\">Yalla Nightlife</h4></a>
            </div>

            <div class=\"left-div\">
                <div class=\"user-settings-wrapper\">
                    <ul class=\"nav\">
                        <li class=\"dropdown\">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class=\"menu-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"navbar-collapse collapse \">
                        <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                            <li><a class=\"menu-top-active\" href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("yalla_website_backend_homepage");
        echo "\">Dashboard</a>
                            <li>";
        // line 86
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_E")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("backend_event_index");
            echo "\">Events</a>";
        }
        echo "</li>
                            <li>";
        // line 87
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_V")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("backend_venue_index");
            echo "\">Venues</a>";
        }
        echo "</li>
                            <li>";
        // line 88
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_G")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("backend_gallery_index");
            echo "\">Galleries</a>";
        }
        echo "</li>
                            <li>";
        // line 89
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_A")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("backend_article_index");
            echo "\">Articles</a>";
        }
        echo "</li>
                            ";
        // line 90
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 91
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("backend_ads_manager_index");
            echo "\">Advertisement</a></li>
                            <li><a href=\"";
            // line 92
            echo $this->env->getExtension('routing')->getPath("backend_member_index");
            echo "\">Members</a></li>
                            <li><a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("backend_user_index");
            echo "\">Users</a></li>
                            <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("backend_homepage_index");
            echo "\">Homepage</a></li>
                            ";
        }
        // line 96
        echo "                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class=\"content-wrapper\">
        <div class=\"container\">
        ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "    </div>
</div>

";
        // line 111
        $this->displayBlock('extrabody', $context, $blocks);
        // line 112
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 113
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
        // line 115
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>

<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitebackend/js/image-picker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitebackend/js/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitebackend/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitebackend/js/simple-dtpicker.js"), "html", null, true);
        echo "\"></script>


";
        // line 123
        $this->displayBlock('tinymce', $context, $blocks);
        // line 124
        $this->displayBlock('datepicker', $context, $blocks);
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "</body>
</html>
";
        
        $__internal_395fd415fefcc246ab74cebb06e772c79ea7e0c9be3d0944a389e62dd931c898->leave($__internal_395fd415fefcc246ab74cebb06e772c79ea7e0c9be3d0944a389e62dd931c898_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba1031cf30600dec057f736cf0895edd60a75eac788989f657719363b415d047 = $this->env->getExtension("native_profiler");
        $__internal_ba1031cf30600dec057f736cf0895edd60a75eac788989f657719363b415d047->enter($__internal_ba1031cf30600dec057f736cf0895edd60a75eac788989f657719363b415d047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba1031cf30600dec057f736cf0895edd60a75eac788989f657719363b415d047->leave($__internal_ba1031cf30600dec057f736cf0895edd60a75eac788989f657719363b415d047_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0b8c5bf5adb2ededaea48205d4b3d7c16fa8a3280e98a2fcf36d23ac027ef02 = $this->env->getExtension("native_profiler");
        $__internal_c0b8c5bf5adb2ededaea48205d4b3d7c16fa8a3280e98a2fcf36d23ac027ef02->enter($__internal_c0b8c5bf5adb2ededaea48205d4b3d7c16fa8a3280e98a2fcf36d23ac027ef02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0b8c5bf5adb2ededaea48205d4b3d7c16fa8a3280e98a2fcf36d23ac027ef02->leave($__internal_c0b8c5bf5adb2ededaea48205d4b3d7c16fa8a3280e98a2fcf36d23ac027ef02_prof);

    }

    // line 111
    public function block_extrabody($context, array $blocks = array())
    {
        $__internal_28be2e8ecbd316079b6bd6732d02bd0adafe74daf86e58392ae1bc51caec9b4f = $this->env->getExtension("native_profiler");
        $__internal_28be2e8ecbd316079b6bd6732d02bd0adafe74daf86e58392ae1bc51caec9b4f->enter($__internal_28be2e8ecbd316079b6bd6732d02bd0adafe74daf86e58392ae1bc51caec9b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrabody"));

        
        $__internal_28be2e8ecbd316079b6bd6732d02bd0adafe74daf86e58392ae1bc51caec9b4f->leave($__internal_28be2e8ecbd316079b6bd6732d02bd0adafe74daf86e58392ae1bc51caec9b4f_prof);

    }

    // line 123
    public function block_tinymce($context, array $blocks = array())
    {
        $__internal_c49bb397fc957ae90727c1012dc94c2c51adbbb9f94fc5d444d605d164a87ec9 = $this->env->getExtension("native_profiler");
        $__internal_c49bb397fc957ae90727c1012dc94c2c51adbbb9f94fc5d444d605d164a87ec9->enter($__internal_c49bb397fc957ae90727c1012dc94c2c51adbbb9f94fc5d444d605d164a87ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tinymce"));

        echo " ";
        
        $__internal_c49bb397fc957ae90727c1012dc94c2c51adbbb9f94fc5d444d605d164a87ec9->leave($__internal_c49bb397fc957ae90727c1012dc94c2c51adbbb9f94fc5d444d605d164a87ec9_prof);

    }

    // line 124
    public function block_datepicker($context, array $blocks = array())
    {
        $__internal_7a9634a509c5c72c1a6abec24e043d7130572a5ce0d7f140b8ba03288ccf8556 = $this->env->getExtension("native_profiler");
        $__internal_7a9634a509c5c72c1a6abec24e043d7130572a5ce0d7f140b8ba03288ccf8556->enter($__internal_7a9634a509c5c72c1a6abec24e043d7130572a5ce0d7f140b8ba03288ccf8556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datepicker"));

        
        $__internal_7a9634a509c5c72c1a6abec24e043d7130572a5ce0d7f140b8ba03288ccf8556->leave($__internal_7a9634a509c5c72c1a6abec24e043d7130572a5ce0d7f140b8ba03288ccf8556_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78924324f6befdb71b8a2b67ced82c918fc4208677d4f860f4f439c498841e79 = $this->env->getExtension("native_profiler");
        $__internal_78924324f6befdb71b8a2b67ced82c918fc4208677d4f860f4f439c498841e79->enter($__internal_78924324f6befdb71b8a2b67ced82c918fc4208677d4f860f4f439c498841e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\"input[name\$='[tags]']\").tagsInput();
        });
    </script>
";
        
        $__internal_78924324f6befdb71b8a2b67ced82c918fc4208677d4f860f4f439c498841e79->leave($__internal_78924324f6befdb71b8a2b67ced82c918fc4208677d4f860f4f439c498841e79_prof);

    }

    public function getTemplateName()
    {
        return "::backend_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 126,  378 => 125,  367 => 124,  355 => 123,  344 => 111,  333 => 107,  322 => 19,  313 => 132,  311 => 125,  309 => 124,  307 => 123,  301 => 120,  297 => 119,  293 => 118,  289 => 117,  285 => 115,  265 => 113,  261 => 112,  259 => 111,  254 => 108,  252 => 107,  239 => 96,  234 => 94,  230 => 93,  226 => 92,  221 => 91,  219 => 90,  211 => 89,  203 => 88,  195 => 87,  187 => 86,  183 => 85,  160 => 65,  143 => 51,  136 => 49,  131 => 47,  122 => 41,  99 => 20,  97 => 19,  94 => 18,  44 => 16,  40 => 8,  33 => 4,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {{ sonata_seo_title() }}*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% stylesheets */
/*                 '@bootstrap_css' '@fontawesome_css_be'*/
/*                 '@YallaWebsiteBackendBundle/Resources/public/css/jquery-ui.css'*/
/*                 '@YallaWebsiteBackendBundle/Resources/public/css/select2.min.css'*/
/*                 '@YallaWebsiteBackendBundle/Resources/public/css/jquery.tagsinput.min.css'*/
/*                 '@YallaWebsiteBackendBundle/Resources/public/css/image-picker.css'*/
/*                 '@YallaWebsiteBackendBundle/Resources/public/css/style.css'*/
/*         %}*/
/*         <link rel="stylesheet" type="text/css" media="screen" href="{{ asset_url }}"/>*/
/*         {% endstylesheets %}*/
/* <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     <style>*/
/*         .create_new{*/
/*             margin-top: -50px;*/
/*         }*/
/*         table.zebra tr:nth-child(odd) {  */
/*             background-color: #EFF4FA; */
/*         }*/
/* */
/*         table.zebra tr:nth-child(even) {  */
/*             background-color: #F7FAFD; */
/*         }*/
/*         table.zebra th {*/
/*             background-color: #FFF; */
/*         }*/
/*     </style>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*     <header>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-6" style="float: left"><a href="{{path('yalla_website_frontend_homepage')}}">YallaNightlife.com</a></div>*/
/*                 <div class="col-md-6" style="float: right">*/
/*                     <a href="{{ path ('backend_profile_index') }}" style="color: black"><strong>Profile: </strong>{{ app.user.email }}</a>*/
/*                     &nbsp;&nbsp;*/
/*                     <strong><a href="{{ path ('fos_user_security_logout') }}">Logout</a></strong>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     <!-- HEADER END-->*/
/*     <div class="navbar set-radius-zero" style="background-color: #DD1144">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{path ('yalla_website_backend_homepage') }}"><h4 style="color: black;">Yalla Nightlife</h4></a>*/
/*             </div>*/
/* */
/*             <div class="left-div">*/
/*                 <div class="user-settings-wrapper">*/
/*                     <ul class="nav">*/
/*                         <li class="dropdown">*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- LOGO HEADER END-->*/
/*     <section class="menu-section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="navbar-collapse collapse ">*/
/*                         <ul id="menu-top" class="nav navbar-nav navbar-right">*/
/*                             <li><a class="menu-top-active" href="{{path ('yalla_website_backend_homepage') }}">Dashboard</a>*/
/*                             <li>{% if is_granted('ROLE_ADMIN_E') %}<a href="{{path('backend_event_index')}}">Events</a>{% endif %}</li>*/
/*                             <li>{% if is_granted('ROLE_ADMIN_V') %}<a href="{{path('backend_venue_index')}}">Venues</a>{% endif %}</li>*/
/*                             <li>{% if is_granted('ROLE_ADMIN_G') %}<a href="{{path('backend_gallery_index')}}">Galleries</a>{% endif %}</li>*/
/*                             <li>{% if is_granted('ROLE_ADMIN_A') %}<a href="{{path('backend_article_index')}}">Articles</a>{% endif %}</li>*/
/*                             {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                             <li><a href="{{path('backend_ads_manager_index')}}">Advertisement</a></li>*/
/*                             <li><a href="{{path('backend_member_index')}}">Members</a></li>*/
/*                             <li><a href="{{path('backend_user_index')}}">Users</a></li>*/
/*                             <li><a href="{{path('backend_homepage_index')}}">Homepage</a></li>*/
/*                             {% endif %}*/
/*                             */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- MENU SECTION END-->*/
/*     <div class="content-wrapper">*/
/*         <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
/* {% block extrabody %}{% endblock %}*/
/* {% javascripts '@jquery' '@bootstrap_js' %}*/
/* <script type="text/javascript" src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>*/
/* */
/* <script src="{{ asset('bundles/yallawebsitebackend/js/image-picker.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/yallawebsitebackend/js/jquery.tagsinput.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/yallawebsitebackend/js/select2.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/yallawebsitebackend/js/simple-dtpicker.js') }}"></script>*/
/* */
/* */
/* {% block tinymce %} {% endblock %}*/
/* {% block datepicker %}{% endblock %}*/
/* {% block javascripts %}*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*             $("input[name$='[tags]']").tagsInput();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
