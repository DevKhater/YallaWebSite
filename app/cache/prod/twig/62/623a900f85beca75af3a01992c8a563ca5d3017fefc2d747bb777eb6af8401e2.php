<?php

/* YallaWebsiteFrontendBundle:Default:index.html_1.twig */
class __TwigTemplate_71cf19b9fbe7d32e7c0726772c1439509f6e28a0f5b590d9b8a88ce1214d4c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "YallaWebsiteFrontendBundle:Default:index.html_1.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/css/slick.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/css/slick-theme.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/css/jquery.bxslider.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    
        <div class=\"wrapper\">
            <div class=\"row\" id='homepage_part1' style=\"max-height: 600px;height: 600px; min-height: 600px;\">
                <div class=\"innerPagesTitle col-lg-12\" >
                    <h1>EXCEPTIONAL LEVEL OF ENTERTAINMENT</h1>
                </div>
                <div class=\"col-lg-12\">
                    <div id='HomePageSliderDiv'>
                        <ul class=\"bxslider\">
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "SliderEntities", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 21
            echo "                                <li>
                                    <div class=\"HomeSliderDiv\"> 
                                        <div class=\"HomeSliderContent\" style=\"background-image: url('";
            // line 23
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["slider"], "media", array()), "homePage");
            echo "')\">
                                            <div class=\"HomeSlideDivTitle\">
                                                <h3>
                                                    ";
            // line 26
            if ($this->getAttribute($context["slider"], "name", array(), "any", true, true)) {
                // line 27
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "name", array()), "html", null, true);
                echo "
                                                    ";
            } else {
                // line 29
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "title", array()), "html", null, true);
                echo "
                                                    ";
            }
            // line 31
            echo "                                                </h3>
                                                <h5>
                                                    ";
            // line 33
            if ($this->getAttribute($context["slider"], "description", array(), "any", true, true)) {
                // line 34
                echo "                                                        ";
                echo twig_slice($this->env, $this->getAttribute($context["slider"], "description", array()), 0, 100);
                echo "...
                                                    ";
            } else {
                // line 36
                echo "                                                        ";
                echo twig_slice($this->env, $this->getAttribute($context["slider"], "content", array()), 0, 100);
                echo "...
                                                    ";
            }
            // line 38
            echo "

                                                </h5>
                                            </div
                                            
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        </ul>
                        
                            <p><span id=\"slider-prev\"></span> | <span id=\"slider-next\"></span></p>
                        
                    </div>
                    <div id='HomePageRightDiv'>
                        <div id=\"yt_player\">    
                            <div id=\"ytplayer\"></div>
                        </div>
                        <div id=\"hp_gallery\" style=\"background-image: url('";
        // line 56
        echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "selectedGallery", array()), "media", array()), "medium");
        echo "');\">
                            ";
        // line 58
        echo "                            ";
        // line 59
        echo "                            <p style=\"
                               line-height: 10px;
                               background-color: yellow;
                               height: 29px;
                               width: 89px;
                               margin: 0px;
                               display: table-cell;
                               vertical-align: middle;
                               padding: 9px;
                               position: absolute;
                               top: 23px;
                               left: 8px;
                               text-align: center;}
                               \">SNAPSHOT</p>
                            ";
        // line 74
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section style=\"background-color: white;padding-top:2%;\">
            <div class=\"wrapper\">
                <div class=\"row\" id='homepage_part2'>
                    <div class=\"IndexTitle col-lg-12\" >
                        <p class=\"subtitle fancy\"><span>WHAT'S ON</span></p>
                    </div>

                    ";
        // line 86
        $context["art"] = twig_shuffle_filter(array(0 => 0, 1 => 1, 2 => 2, 3 => 3));
        // line 87
        echo "                    <div class=\"col-lg-3\">
                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 89
            echo "                            <div class=\"hp_sideArticles\">
                                <div class=\"hp_sideArticles_cont\">
                                    ";
            // line 91
            $context["article"] = $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "sideArticles", array()), $this->getAttribute((isset($context["art"]) ? $context["art"] : null), $context["i"], array(), "array"), array(), "array");
            // line 92
            echo "                                    <div class=\"hp_sideArticle_image\" style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "media", array()), "small");
            echo "');\"></div>
                                    <div class=\"hp_sideArticle_text\">
                                        <div class=\"sideArticle_text\">
                                            <p>";
            // line 95
            echo twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), 0, 100);
            echo "</p>
                                        </div>
                                        <div class=\"sideArticle_button\">
                                            <button type=\"button\" class=\"btn btn-secondary btn-xs\"><a href=\"";
            // line 98
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
        // line 104
        echo "                    </div>
                    <div id='HomeArticlesFeatured' class=\"col-lg-6\" style=\"background-image: url('";
        // line 105
        echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainArticle", array()), "media", array()), "medium");
        echo "');\">
                        <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/RC.png"), "html", null, true);
        echo "\" />
                        <div id=\"FeaturedArticles_hover\">
                            <p id=\"FeaturedArticle_title\">";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainArticle", array()), "title", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 109
        echo twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainArticle", array()), "content", array()), 0, 100);
        echo "</p>
                            <button type=\"button\" class=\"homePageButtons btn btn-secondary btn-xs\"><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_article", array("id" => $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainArticle", array()), "slug", array()))), "html", null, true);
        echo "\">Read More</a></button>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 115
            echo "                            <div class=\"hp_sideArticles\">
                                <div class=\"hp_sideArticles_cont\">

                                    ";
            // line 118
            $context["article"] = $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "sideArticles", array()), $this->getAttribute((isset($context["art"]) ? $context["art"] : null), $context["i"], array(), "array"), array(), "array");
            // line 119
            echo "                                    <div class=\"hp_sideArticle_image\" style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "media", array()), "small");
            echo "');\"></div>
                                    <div class=\"hp_sideArticle_text\">
                                        <div class=\"sideArticle_text\">
                                            <p>";
            // line 122
            echo twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), 0, 100);
            echo "</p>
                                        </div>
                                        <div class=\"sideArticle_button\">
                                            <button type=\"button\" class=\"btn btn-secondary btn-xs\"><a href=\"";
            // line 125
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
        // line 131
        echo "                    </div>

                </div>
            </div>
        </section>

        <section style=\"background-color: #eaeaea;padding-top:2%;\">
            <div class=\"wrapper\">
                <div class=\"row\" id='homepage_part3'>
                    <div class=\"IndexTitle col-lg-12\" >
                        <p class=\"subtitle fancy\"><span>Hottest Events of the week</span></p>
                    </div>
                    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 144
            echo "                        ";
            if ($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
                // line 145
                echo "                            <div class=\"col-lg-15\" style=\"height: 200px;\">
                                <div class='hp_eventDay' style=\"background-image: url('";
                // line 146
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "media", array()), "small");
                echo "');\">
                                    <div class=\"eventDay_date\">
                                        <span class=\"eventDay_dateDay\">";
                // line 148
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "D"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateMonth\">";
                // line 149
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "M"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateday\">";
                // line 150
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "d"), "html", null, true);
                echo "</span><br/>
                                    </div>
                                    <div class=\"eventDay_TitleDiv\">
                                        <p class=\"eventDay_title\">
                                            <a href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_event", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "slug", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "title", array()), "html", null, true);
                echo "
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 162
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "
                    <div class=\"col-lg-15\" style=\"height: 200px;\"></div>
                    ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(5, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 166
            echo "                        ";
            if ($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
                // line 167
                echo "                            <div class=\"col-lg-15\" style=\"height: 200px;\">
                                <div class='hp_eventDay' style=\"background-image: url('";
                // line 168
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "media", array()), "small");
                echo "');\">
                                    <div class=\"eventDay_date\">
                                        <span class=\"eventDay_dateDay\">";
                // line 170
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "D"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateMonth\">";
                // line 171
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "M"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateday\">";
                // line 172
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "d"), "html", null, true);
                echo "</span><br/>
                                    </div>
                                    <div class=\"eventDay_TitleDiv\">
                                        <p class=\"eventDay_title\">
                                            <a href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_event", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "slug", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "weekEvents", array()), $context["i"], array(), "array"), "title", array()), "html", null, true);
                echo "
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 184
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                    <div class=\"col-lg-15\" style=\"height: 200px;\"></div>
                </div>
            </div>
        </section>
";
    }

    // line 192
    public function block_javascripts($context, array $blocks = array())
    {
        // line 193
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
                height: '250',
                width: '100%',
                videoId: '";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "videoLink", array()), "html", null, true);
        echo "'
            });
        }


        jQuery(document).ready(function (\$) {
            \$('.bxslider').bxSlider({
                minSlides: 1,
                maxSlides: 1,
                controls: true,
                  nextSelector: '#slider-next',
  prevSelector: '#slider-prev',
            });
        });



    </script>
";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Default:index.html_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 208,  402 => 193,  399 => 192,  391 => 185,  385 => 184,  375 => 177,  371 => 176,  364 => 172,  360 => 171,  356 => 170,  351 => 168,  348 => 167,  345 => 166,  341 => 165,  337 => 163,  331 => 162,  321 => 155,  317 => 154,  310 => 150,  306 => 149,  302 => 148,  297 => 146,  294 => 145,  291 => 144,  287 => 143,  273 => 131,  261 => 125,  255 => 122,  248 => 119,  246 => 118,  241 => 115,  237 => 114,  230 => 110,  226 => 109,  222 => 108,  217 => 106,  213 => 105,  210 => 104,  198 => 98,  192 => 95,  185 => 92,  183 => 91,  179 => 89,  175 => 88,  172 => 87,  170 => 86,  156 => 74,  140 => 59,  138 => 58,  134 => 56,  123 => 47,  109 => 38,  103 => 36,  97 => 34,  95 => 33,  91 => 31,  85 => 29,  79 => 27,  77 => 26,  71 => 23,  67 => 21,  63 => 20,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/yallawebsitefrontend/css/slick.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/yallawebsitefrontend/css/slick-theme.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/yallawebsitefrontend/css/jquery.bxslider.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     */
/*         <div class="wrapper">*/
/*             <div class="row" id='homepage_part1' style="max-height: 600px;height: 600px; min-height: 600px;">*/
/*                 <div class="innerPagesTitle col-lg-12" >*/
/*                     <h1>EXCEPTIONAL LEVEL OF ENTERTAINMENT</h1>*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <div id='HomePageSliderDiv'>*/
/*                         <ul class="bxslider">*/
/*                             {% for slider in home.SliderEntities %}*/
/*                                 <li>*/
/*                                     <div class="HomeSliderDiv"> */
/*                                         <div class="HomeSliderContent" style="background-image: url('{% path  slider.media, 'homePage' %}')">*/
/*                                             <div class="HomeSlideDivTitle">*/
/*                                                 <h3>*/
/*                                                     {% if slider.name is defined %}*/
/*                                                         {{slider.name}}*/
/*                                                     {% else %}*/
/*                                                         {{slider.title}}*/
/*                                                     {% endif%}*/
/*                                                 </h3>*/
/*                                                 <h5>*/
/*                                                     {% if slider.description is defined %}*/
/*                                                         {{slider.description[0:100]|raw }}...*/
/*                                                     {% else %}*/
/*                                                         {{ slider.content[0:100]|raw }}...*/
/*                                                     {% endif%}*/
/* */
/* */
/*                                                 </h5>*/
/*                                             </div*/
/*                                             */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                         */
/*                             <p><span id="slider-prev"></span> | <span id="slider-next"></span></p>*/
/*                         */
/*                     </div>*/
/*                     <div id='HomePageRightDiv'>*/
/*                         <div id="yt_player">    */
/*                             <div id="ytplayer"></div>*/
/*                         </div>*/
/*                         <div id="hp_gallery" style="background-image: url('{% path  home.selectedGallery.media, 'medium' %}');">*/
/*                             {#<div style="background-color: yellow; height: 29px; width: 120px; top:20px;left:2px;position:absolute;">#}*/
/*                             {#<p style="line-height: 29px;">SNAPSHOT</p>#}*/
/*                             <p style="*/
/*                                line-height: 10px;*/
/*                                background-color: yellow;*/
/*                                height: 29px;*/
/*                                width: 89px;*/
/*                                margin: 0px;*/
/*                                display: table-cell;*/
/*                                vertical-align: middle;*/
/*                                padding: 9px;*/
/*                                position: absolute;*/
/*                                top: 23px;*/
/*                                left: 8px;*/
/*                                text-align: center;}*/
/*                                ">SNAPSHOT</p>*/
/*                             {#</div>#}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <section style="background-color: white;padding-top:2%;">*/
/*             <div class="wrapper">*/
/*                 <div class="row" id='homepage_part2'>*/
/*                     <div class="IndexTitle col-lg-12" >*/
/*                         <p class="subtitle fancy"><span>WHAT'S ON</span></p>*/
/*                     </div>*/
/* */
/*                     {% set art= [0,1,2,3]|shuffle %}*/
/*                     <div class="col-lg-3">*/
/*                         {% for i in 0..1 %}*/
/*                             <div class="hp_sideArticles">*/
/*                                 <div class="hp_sideArticles_cont">*/
/*                                     {% set article = home.sideArticles[art[i]] %}*/
/*                                     <div class="hp_sideArticle_image" style="background-image: url('{% path article.media, 'small' %}');"></div>*/
/*                                     <div class="hp_sideArticle_text">*/
/*                                         <div class="sideArticle_text">*/
/*                                             <p>{{ article.content[0:100]|raw }}</p>*/
/*                                         </div>*/
/*                                         <div class="sideArticle_button">*/
/*                                             <button type="button" class="btn btn-secondary btn-xs"><a href="{{path('yalla_website_frontened_article',  {'id': article.slug}) }}">Read More</a></button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div id='HomeArticlesFeatured' class="col-lg-6" style="background-image: url('{% path  home.mainArticle.media, 'medium' %}');">*/
/*                         <img src="{{asset('bundles/yallawebsitefrontend/images/RC.png')}}" />*/
/*                         <div id="FeaturedArticles_hover">*/
/*                             <p id="FeaturedArticle_title">{{home.mainArticle.title}}</p>*/
/*                             <p>{{home.mainArticle.content[0:100]|raw}}</p>*/
/*                             <button type="button" class="homePageButtons btn btn-secondary btn-xs"><a href="{{path('yalla_website_frontened_article',  {'id': home.mainArticle.slug}) }}">Read More</a></button>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3">*/
/*                         {% for i in 2..3 %}*/
/*                             <div class="hp_sideArticles">*/
/*                                 <div class="hp_sideArticles_cont">*/
/* */
/*                                     {% set article = home.sideArticles[art[i]] %}*/
/*                                     <div class="hp_sideArticle_image" style="background-image: url('{% path article.media, 'small' %}');"></div>*/
/*                                     <div class="hp_sideArticle_text">*/
/*                                         <div class="sideArticle_text">*/
/*                                             <p>{{ article.content[0:100]|raw }}</p>*/
/*                                         </div>*/
/*                                         <div class="sideArticle_button">*/
/*                                             <button type="button" class="btn btn-secondary btn-xs"><a href="{{path('yalla_website_frontened_article',  {'id': article.slug}) }}">Read More</a></button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <section style="background-color: #eaeaea;padding-top:2%;">*/
/*             <div class="wrapper">*/
/*                 <div class="row" id='homepage_part3'>*/
/*                     <div class="IndexTitle col-lg-12" >*/
/*                         <p class="subtitle fancy"><span>Hottest Events of the week</span></p>*/
/*                     </div>*/
/*                     {% for i in 0 .. 4 %}*/
/*                         {% if home.weekEvents[i] is defined %}*/
/*                             <div class="col-lg-15" style="height: 200px;">*/
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
/* */
/*                     <div class="col-lg-15" style="height: 200px;"></div>*/
/*                     {% for i in 5 .. 6 %}*/
/*                         {% if home.weekEvents[i] is defined %}*/
/*                             <div class="col-lg-15" style="height: 200px;">*/
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
/*                     <div class="col-lg-15" style="height: 200px;"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
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
/*                 height: '250',*/
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
/*                 controls: true,*/
/*                   nextSelector: '#slider-next',*/
/*   prevSelector: '#slider-prev',*/
/*             });*/
/*         });*/
/* */
/* */
/* */
/*     </script>*/
/* {% endblock %}*/
