<?php

/* YallaWebsiteFrontendBundle:Default:index.html.twig */
class __TwigTemplate_b7e4043c0d9297224299315353643e3b6d75af90f4913ecf00b12d05222b705d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "YallaWebsiteFrontendBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/css/jquery.bxslider.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "

    <div class=\"wrapper\">
        <div class=\"row\" id='homepage_part1'>
            <div class=\"innerPagesTitle col-lg-12\" >
                <h1>EXCEPTIONAL LEVEL OF ENTERTAINMENT</h1>
            </div>
            <div class=\"col-lg-12\">
                <div id='HomePageSliderDiv'>
                    <ul class=\"bxslider\">
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "SliderEntities", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 19
            echo "                            <li>
                                <div class=\"HomeSliderDiv\"> 
                                    <div class=\"HomeSliderContent\" style=\"background-image: url('";
            // line 21
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["slider"], "media", array()), "homePage");
            echo "')\">
                                        <div class=\"HomeSlideDivTitle\">
                                            <h3>
                                                ";
            // line 24
            if ($this->getAttribute($context["slider"], "name", array(), "any", true, true)) {
                // line 25
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "name", array()), "html", null, true);
                echo "
                                                ";
            } else {
                // line 27
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "title", array()), "html", null, true);
                echo "
                                                ";
            }
            // line 29
            echo "                                            </h3>
                                            <h5>
                                                ";
            // line 31
            if ($this->getAttribute($context["slider"], "description", array(), "any", true, true)) {
                // line 32
                echo "                                                    ";
                echo twig_escape_filter($this->env, strip_tags(twig_slice($this->env, $this->getAttribute($context["slider"], "description", array()), 0, 100)), "html", null, true);
                echo "...
                                                ";
            } else {
                // line 34
                echo "                                                    ";
                echo twig_escape_filter($this->env, strip_tags(twig_slice($this->env, $this->getAttribute($context["slider"], "content", array()), 0, 100)), "html", null, true);
                echo "...
                                                ";
            }
            // line 36
            echo "                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </ul>
                </div>
                <div id='HomePageRightDiv'>
                    <div id=\"yt_player\">    
                        <div id=\"ytplayer\"></div>
                    </div>
                    <a id='a_hp_gallery' href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_gallery_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "selectedGallery", array()), "slug", array()))), "html", null, true);
        echo "\">
                        <div id=\"hp_gallery\"  style=\"background-image: url('";
        // line 49
        echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "selectedGallery", array()), "media", array()), "medium");
        echo "');\">
                            <p>SNAPSHOT</p>
                        </div>
                        <a>
                </div>
            </div>
        </div>
    </div>

    <section style=\"background-color: white;padding-top:2%;\">
        <div class=\"wrapper\">
            <div class=\"row\" id='homepage_part2'>
                <div class=\"IndexTitle col-lg-12\" >
                    <p class=\"subtitle fancy\"><span id='longer'>WHAT'S ON</span></p>
                </div>
                ";
        // line 64
        $context["art"] = twig_shuffle_filter(array(0 => 0, 1 => 1, 2 => 2, 3 => 3));
        // line 65
        echo "                <div class=\"side_article_container\">
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "                        <div class=\"hp_sideArticles\">
                            <div class=\"hp_sideArticles_cont\">
                                ";
            // line 69
            $context["article"] = $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "sideArticles", array()), $this->getAttribute((isset($context["art"]) ? $context["art"] : null), $context["i"], array(), "array"), array(), "array");
            // line 70
            echo "                                <div class=\"hp_sideArticle_image\" style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "media", array()), "small");
            echo "');\"></div>
                                <div class=\"hp_sideArticle_text\">
                                    <div class=\"sideArticle_text\">
                                            ";
            // line 73
            echo twig_escape_filter($this->env, strip_tags(twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), 0, 75)), "html", null, true);
            echo " 
                                    </div>
                                    <div class=\"sideArticle_button\">
                                        <button type=\"button\" class=\"btn btn-secondary btn-xs\"><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()))), "html", null, true);
            echo "\">Read More</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </div>
                <div id='HomeArticlesFeatured'>
                    <div id='TheFeaturedArticle' style=\"background-image: url('";
        // line 84
        echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainArticle", array()), "media", array()), "medium");
        echo "');\">
                        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/RC.png"), "html", null, true);
        echo "\" />
                        <div id=\"FeaturedArticles_hover\">
                            <p id=\"FeaturedArticle_title\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainArticle", array()), "title", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 88
        echo twig_escape_filter($this->env, strip_tags(twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainArticle", array()), "content", array()), 0, 100)), "html", null, true);
        echo "</p>
                            <button type=\"button\" class=\"homePageButtons btn btn-secondary btn-xs\"><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_article", array("id" => $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainArticle", array()), "slug", array()))), "html", null, true);
        echo "\">Read More</a></button>
                        </div>
                    </div>
                </div>

                <div class=\"side_article_container\">
                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 96
            echo "                        <div class=\"hp_sideArticles\">
                            <div class=\"hp_sideArticles_cont\">
                                ";
            // line 98
            $context["article"] = $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "sideArticles", array()), $this->getAttribute((isset($context["art"]) ? $context["art"] : null), $context["i"], array(), "array"), array(), "array");
            // line 99
            echo "                                <div class=\"hp_sideArticle_image\" style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "media", array()), "small");
            echo "');\"></div>
                                <div class=\"hp_sideArticle_text\">
                                    <div class=\"sideArticle_text\">
                                        <p>";
            // line 102
            echo twig_escape_filter($this->env, strip_tags(twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), 0, 75)), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"sideArticle_button\">
                                        <button type=\"button\" class=\"btn btn-secondary btn-xs\"><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()))), "html", null, true);
            echo "\">Read More</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                </div>

            </div>
        </div>
    </section>

    <section style=\"background-color: #eaeaea;padding-top:2%;\">
        <div class=\"wrapper\">
            <div class=\"row\" id='homepage_part3'>
                <div class=\"IndexTitle col-lg-12\" >
                    <p class=\"subtitle fancy\"><span>Hottest Events of the week</span></p>
                </div>
                <div>
                    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 125
            echo "                        ";
            if ($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
                // line 126
                echo "                            <div class=\"col-xs-153  col-sm-15 col-md-15 col-lg-15 \" style=\"height: 200px;\">
                                <div class='hp_eventDay' style=\"background-image: url('";
                // line 127
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "media", array()), "small");
                echo "');\">
                                    <div class=\"eventDay_date\">
                                        <span class=\"eventDay_dateDay\">";
                // line 129
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "D"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateMonth\">";
                // line 130
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "M"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateday\">";
                // line 131
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "d"), "html", null, true);
                echo "</span><br/>
                                    </div>
                                    <div class=\"eventDay_TitleDiv\">
                                        <p class=\"eventDay_title\">
                                            <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_event", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "slug", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "title", array()), "html", null, true);
                echo "
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 143
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                </div>
                <div>
                    <div class=\"col-xs-153  col-sm-15 col-md-15 col-lg-15 hidden-sm hidden-xs \" style=\"height: 200px;\"></div>
                    ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(5, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 148
            echo "                        ";
            if ($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
                // line 149
                echo "                            ";
                if (($context["i"] == 6)) {
                    echo "<div style=\"margin:0 auto;\">";
                }
                // line 150
                echo "                            <div class=\"col-xs-153  col-sm-15 col-md-15 col-lg-15\" style=\"height: 200px;\">
                                <div class='hp_eventDay' style=\"background-image: url('";
                // line 151
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "media", array()), "small");
                echo "');\">
                                    <div class=\"eventDay_date\">
                                        <span class=\"eventDay_dateDay\">";
                // line 153
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "D"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateMonth\">";
                // line 154
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "M"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateday\">";
                // line 155
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "d"), "html", null, true);
                echo "</span><br/>
                                    </div>
                                    <div class=\"eventDay_TitleDiv\">
                                        <p class=\"eventDay_title\">
                                            <a href=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_event", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "slug", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "title", array()), "html", null, true);
                echo "
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                                            ";
                // line 166
                if (($context["i"] == 6)) {
                    // line 167
                    echo "                                            </div>
                                            ";
                }
                // line 169
                echo "                        ";
            }
            // line 170
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                <div class=\"col-xs-153  col-sm-15 col-md-15 col-lg-15\">
                    <a href=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("yalla_website_frontened_events");
        echo "\">
                    <div class='hp_eventDay' style=\"background-image: url('";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/more.jpg"), "html", null, true);
        echo "');\"></div>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 183
    public function block_javascripts($context, array $blocks = array())
    {
        // line 184
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>    
    <script>
        // Load the IFrame Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = \"https://www.youtube.com/player_api\";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // Replace the 'ytplayer' element with an <iframe> and
        // YouTube player after the API code downloads.
        var player;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('ytplayer', {
                height: '100%',
                width: '100%',
                videoId: '";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "videoLink", array()), "html", null, true);
        echo "'
            });
        }


        jQuery(document).ready(function (\$) {
            \$('.bxslider').bxSlider({
                minSlides: 1,
                maxSlides: 1,
                adaptiveHeight: true,
                //pager: false,
                controls: true,
                nextText: '&#8594;',
                prevText: '&#8592;'
            });
        });



    </script>
";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 199,  402 => 184,  399 => 183,  387 => 173,  383 => 172,  380 => 171,  374 => 170,  371 => 169,  367 => 167,  365 => 166,  356 => 160,  352 => 159,  345 => 155,  341 => 154,  337 => 153,  332 => 151,  329 => 150,  324 => 149,  321 => 148,  317 => 147,  312 => 144,  306 => 143,  296 => 136,  292 => 135,  285 => 131,  281 => 130,  277 => 129,  272 => 127,  269 => 126,  266 => 125,  262 => 124,  247 => 111,  235 => 105,  229 => 102,  222 => 99,  220 => 98,  216 => 96,  212 => 95,  203 => 89,  199 => 88,  195 => 87,  190 => 85,  186 => 84,  182 => 82,  170 => 76,  164 => 73,  157 => 70,  155 => 69,  151 => 67,  147 => 66,  144 => 65,  142 => 64,  124 => 49,  120 => 48,  112 => 42,  101 => 36,  95 => 34,  89 => 32,  87 => 31,  83 => 29,  77 => 27,  71 => 25,  69 => 24,  63 => 21,  59 => 19,  55 => 18,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/yallawebsitefrontend/css/jquery.bxslider.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <div class="wrapper">*/
/*         <div class="row" id='homepage_part1'>*/
/*             <div class="innerPagesTitle col-lg-12" >*/
/*                 <h1>EXCEPTIONAL LEVEL OF ENTERTAINMENT</h1>*/
/*             </div>*/
/*             <div class="col-lg-12">*/
/*                 <div id='HomePageSliderDiv'>*/
/*                     <ul class="bxslider">*/
/*                         {% for slider in home.SliderEntities %}*/
/*                             <li>*/
/*                                 <div class="HomeSliderDiv"> */
/*                                     <div class="HomeSliderContent" style="background-image: url('{% path  slider.media, 'homePage' %}')">*/
/*                                         <div class="HomeSlideDivTitle">*/
/*                                             <h3>*/
/*                                                 {% if slider.name is defined %}*/
/*                                                     {{slider.name}}*/
/*                                                 {% else %}*/
/*                                                     {{slider.title}}*/
/*                                                 {% endif%}*/
/*                                             </h3>*/
/*                                             <h5>*/
/*                                                 {% if slider.description is defined %}*/
/*                                                     {{slider.description[0:100]|striptags  }}...*/
/*                                                 {% else %}*/
/*                                                     {{ slider.content[0:100]|striptags  }}...*/
/*                                                 {% endif%}*/
/*                                             </h5>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div id='HomePageRightDiv'>*/
/*                     <div id="yt_player">    */
/*                         <div id="ytplayer"></div>*/
/*                     </div>*/
/*                     <a id='a_hp_gallery' href="{{path('sonata_media_gallery_view',{'id' : home.selectedGallery.slug} )}}">*/
/*                         <div id="hp_gallery"  style="background-image: url('{% path  home.selectedGallery.media, 'medium' %}');">*/
/*                             <p>SNAPSHOT</p>*/
/*                         </div>*/
/*                         <a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <section style="background-color: white;padding-top:2%;">*/
/*         <div class="wrapper">*/
/*             <div class="row" id='homepage_part2'>*/
/*                 <div class="IndexTitle col-lg-12" >*/
/*                     <p class="subtitle fancy"><span id='longer'>WHAT'S ON</span></p>*/
/*                 </div>*/
/*                 {% set art= [0,1,2,3]|shuffle %}*/
/*                 <div class="side_article_container">*/
/*                     {% for i in 0..1 %}*/
/*                         <div class="hp_sideArticles">*/
/*                             <div class="hp_sideArticles_cont">*/
/*                                 {% set article = home.sideArticles[art[i]] %}*/
/*                                 <div class="hp_sideArticle_image" style="background-image: url('{% path article.media, 'small' %}');"></div>*/
/*                                 <div class="hp_sideArticle_text">*/
/*                                     <div class="sideArticle_text">*/
/*                                             {{ article.content[0:75]|striptags }} */
/*                                     </div>*/
/*                                     <div class="sideArticle_button">*/
/*                                         <button type="button" class="btn btn-secondary btn-xs"><a href="{{path('yalla_website_frontened_article',  {'id': article.slug}) }}">Read More</a></button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div id='HomeArticlesFeatured'>*/
/*                     <div id='TheFeaturedArticle' style="background-image: url('{% path  home.mainArticle.media, 'medium' %}');">*/
/*                         <img src="{{asset('bundles/yallawebsitefrontend/images/RC.png')}}" />*/
/*                         <div id="FeaturedArticles_hover">*/
/*                             <p id="FeaturedArticle_title">{{home.mainArticle.title}}</p>*/
/*                             <p>{{home.mainArticle.content[0:100]|striptags }}</p>*/
/*                             <button type="button" class="homePageButtons btn btn-secondary btn-xs"><a href="{{path('yalla_website_frontened_article',  {'id': home.mainArticle.slug}) }}">Read More</a></button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="side_article_container">*/
/*                     {% for i in 2..3 %}*/
/*                         <div class="hp_sideArticles">*/
/*                             <div class="hp_sideArticles_cont">*/
/*                                 {% set article = home.sideArticles[art[i]] %}*/
/*                                 <div class="hp_sideArticle_image" style="background-image: url('{% path article.media, 'small' %}');"></div>*/
/*                                 <div class="hp_sideArticle_text">*/
/*                                     <div class="sideArticle_text">*/
/*                                         <p>{{ article.content[0:75]|striptags  }}</p>*/
/*                                     </div>*/
/*                                     <div class="sideArticle_button">*/
/*                                         <button type="button" class="btn btn-secondary btn-xs"><a href="{{path('yalla_website_frontened_article',  {'id': article.slug}) }}">Read More</a></button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <section style="background-color: #eaeaea;padding-top:2%;">*/
/*         <div class="wrapper">*/
/*             <div class="row" id='homepage_part3'>*/
/*                 <div class="IndexTitle col-lg-12" >*/
/*                     <p class="subtitle fancy"><span>Hottest Events of the week</span></p>*/
/*                 </div>*/
/*                 <div>*/
/*                     {% for i in 0 .. 4 %}*/
/*                         {% if home.weekEvents[i] is defined %}*/
/*                             <div class="col-xs-153  col-sm-15 col-md-15 col-lg-15 " style="height: 200px;">*/
/*                                 <div class='hp_eventDay' style="background-image: url('{% path  home.weekEvents[i].media, 'small' %}');">*/
/*                                     <div class="eventDay_date">*/
/*                                         <span class="eventDay_dateDay">{{home.weekEvents[i].startDate|date('D')|slice(0,3)}}</span><br/>*/
/*                                         <span class="eventDay_dateMonth">{{home.weekEvents[i].startDate|date('M')|slice(0,3)}}</span><br/>*/
/*                                         <span class="eventDay_dateday">{{home.weekEvents[i].startDate|date('d')}}</span><br/>*/
/*                                     </div>*/
/*                                     <div class="eventDay_TitleDiv">*/
/*                                         <p class="eventDay_title">*/
/*                                             <a href="{{path('yalla_website_frontened_event',  {'id': home.weekEvents[i].slug}) }}">*/
/*                                                 {{home.weekEvents[i].title}}*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div>*/
/*                     <div class="col-xs-153  col-sm-15 col-md-15 col-lg-15 hidden-sm hidden-xs " style="height: 200px;"></div>*/
/*                     {% for i in 5 .. 6 %}*/
/*                         {% if home.weekEvents[i] is defined %}*/
/*                             {% if i == 6 %}<div style="margin:0 auto;">{% endif %}*/
/*                             <div class="col-xs-153  col-sm-15 col-md-15 col-lg-15" style="height: 200px;">*/
/*                                 <div class='hp_eventDay' style="background-image: url('{% path  home.weekEvents[i].media, 'small' %}');">*/
/*                                     <div class="eventDay_date">*/
/*                                         <span class="eventDay_dateDay">{{home.weekEvents[i].startDate|date('D')|slice(0,3)}}</span><br/>*/
/*                                         <span class="eventDay_dateMonth">{{home.weekEvents[i].startDate|date('M')|slice(0,3)}}</span><br/>*/
/*                                         <span class="eventDay_dateday">{{home.weekEvents[i].startDate|date('d')}}</span><br/>*/
/*                                     </div>*/
/*                                     <div class="eventDay_TitleDiv">*/
/*                                         <p class="eventDay_title">*/
/*                                             <a href="{{path('yalla_website_frontened_event',  {'id': home.weekEvents[i].slug}) }}">*/
/*                                                 {{home.weekEvents[i].title}}*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                                             {% if i == 6 %}*/
/*                                             </div>*/
/*                                             {% endif %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 <div class="col-xs-153  col-sm-15 col-md-15 col-lg-15">*/
/*                     <a href="{{path('yalla_website_frontened_events')}}">*/
/*                     <div class='hp_eventDay' style="background-image: url('{{ asset('bundles/yallawebsitefrontend/images/more.jpg') }}');"></div>*/
/*                     </a>*/
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     <script src="{{asset('bundles/yallawebsitefrontend/js/jquery.bxslider.min.js')}}"></script>    */
/*     <script>*/
/*         // Load the IFrame Player API code asynchronously.*/
/*         var tag = document.createElement('script');*/
/*         tag.src = "https://www.youtube.com/player_api";*/
/*         var firstScriptTag = document.getElementsByTagName('script')[0];*/
/*         firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);*/
/* */
/*         // Replace the 'ytplayer' element with an <iframe> and*/
/*         // YouTube player after the API code downloads.*/
/*         var player;*/
/*         function onYouTubePlayerAPIReady() {*/
/*             player = new YT.Player('ytplayer', {*/
/*                 height: '100%',*/
/*                 width: '100%',*/
/*                 videoId: '{{home.videoLink}}'*/
/*             });*/
/*         }*/
/* */
/* */
/*         jQuery(document).ready(function ($) {*/
/*             $('.bxslider').bxSlider({*/
/*                 minSlides: 1,*/
/*                 maxSlides: 1,*/
/*                 adaptiveHeight: true,*/
/*                 //pager: false,*/
/*                 controls: true,*/
/*                 nextText: '&#8594;',*/
/*                 prevText: '&#8592;'*/
/*             });*/
/*         });*/
/* */
/* */
/* */
/*     </script>*/
/* {% endblock %}*/
