<?php

/* YallaWebsiteFrontendBundle:Default:index.html.twig */
class __TwigTemplate_d62d235935357f7a23be8b02e4fbaf0fdab29e8e0a83a9c227209e6800d6c91a extends Twig_Template
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
        $__internal_65df75e0e177bf26abf98c20878a85235d532038c0a8bb41fe442062f2003988 = $this->env->getExtension("native_profiler");
        $__internal_65df75e0e177bf26abf98c20878a85235d532038c0a8bb41fe442062f2003988->enter($__internal_65df75e0e177bf26abf98c20878a85235d532038c0a8bb41fe442062f2003988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65df75e0e177bf26abf98c20878a85235d532038c0a8bb41fe442062f2003988->leave($__internal_65df75e0e177bf26abf98c20878a85235d532038c0a8bb41fe442062f2003988_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9157f6a5fbad23d08b6aa5b6561d4c15db713f7d12e0125e173ca6ee3de2d17d = $this->env->getExtension("native_profiler");
        $__internal_9157f6a5fbad23d08b6aa5b6561d4c15db713f7d12e0125e173ca6ee3de2d17d->enter($__internal_9157f6a5fbad23d08b6aa5b6561d4c15db713f7d12e0125e173ca6ee3de2d17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/css/jquery.bxslider.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9157f6a5fbad23d08b6aa5b6561d4c15db713f7d12e0125e173ca6ee3de2d17d->leave($__internal_9157f6a5fbad23d08b6aa5b6561d4c15db713f7d12e0125e173ca6ee3de2d17d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e06ac664b6ed068650d5b419c2ac2ba92b981f43f8c8f06336172c8f27443036 = $this->env->getExtension("native_profiler");
        $__internal_e06ac664b6ed068650d5b419c2ac2ba92b981f43f8c8f06336172c8f27443036->enter($__internal_e06ac664b6ed068650d5b419c2ac2ba92b981f43f8c8f06336172c8f27443036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

    <div class=\"wrapper\">
        <div class=\"row\" id='homepage_part1'>
            <div class=\"innerPagesTitle col-lg-12\" >
                <h1 class='longerTitle'>EXCEPTIONAL LEVEL OF ENTERTAINMENT</h1>
            </div>
            <div class=\"col-lg-12\">
                <div id='HomePageSliderDiv'>
                    <ul class=\"bxslider\">
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "SliderEntities", array()));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_gallery_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "selectedGallery", array()), "slug", array()))), "html", null, true);
        echo "\">
                        <div id=\"hp_gallery\"  style=\"background-image: url('";
        // line 49
        echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "selectedGallery", array()), "media", array()), "medium");
        echo "');\">
                            <p>SNAPSHOT</p>
                        </div>
                    </a>
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
            $context["article"] = $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "sideArticles", array()), $this->getAttribute((isset($context["art"]) ? $context["art"] : $this->getContext($context, "art")), $context["i"], array(), "array"), array(), "array");
            // line 70
            echo "                                <div class=\"hp_sideArticle_image\" style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "media", array()), "small");
            echo "');\"></div>
                                <div class=\"hp_sideArticle_text\">
                                    <div class=\"sideArticle_text\">
                                        ";
            // line 73
            echo twig_escape_filter($this->env, strip_tags(trim(twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), 0, 75))), "html", null, true);
            echo " 
                                    </div>
                                    <div class=\"sideArticle_button\">
                                        <button type=\"button\" class=\"btn btn-secondary btn-xs\"><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
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
        echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "mainArticle", array()), "media", array()), "medium");
        echo "');\">
                        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/RC.png"), "html", null, true);
        echo "\" />
                        <div id=\"FeaturedArticles_hover\">
                            <p id=\"FeaturedArticle_title\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "mainArticle", array()), "title", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 88
        echo twig_escape_filter($this->env, strip_tags(twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "mainArticle", array()), "content", array()), 0, 100)), "html", null, true);
        echo "</p>
                            <button type=\"button\" class=\"homePageButtons btn btn-secondary btn-xs\"><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_article", array("id" => $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "mainArticle", array()), "slug", array()))), "html", null, true);
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
            $context["article"] = $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "sideArticles", array()), $this->getAttribute((isset($context["art"]) ? $context["art"] : $this->getContext($context, "art")), $context["i"], array(), "array"), array(), "array");
            // line 99
            echo "                                <div class=\"hp_sideArticle_image\" style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "media", array()), "small");
            echo "');\"></div>
                                <div class=\"hp_sideArticle_text\">
                                    <div class=\"sideArticle_text\">
                                        <p>";
            // line 102
            echo twig_escape_filter($this->env, strip_tags(twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), 0, 75)), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"sideArticle_button\">
                                        <button type=\"button\" class=\"btn btn-secondary btn-xs\"><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug", array()))), "html", null, true);
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
                echo "                            <div class=\"col-xs-153  col-sm-15 col-md-15 col-lg-15 \" >
                                <div class='hp_eventDay' style=\"background-image: url('";
                // line 127
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "media", array()), "small");
                echo "');\">
                                    <div class=\"eventDay_date\">
                                        <span class=\"eventDay_dateDay\">";
                // line 129
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "D"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateMonth\">";
                // line 130
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "M"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateday\">";
                // line 131
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "d"), "html", null, true);
                echo "</span><br/>
                                    </div>
                                    <div class=\"eventDay_TitleDiv\">
                                        <p class=\"eventDay_title\">
                                            <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_event", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "slug", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "title", array()), "html", null, true);
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
                    <div class=\"col-xs-153  col-sm-15 col-md-15 col-lg-15 hidden-sm hidden-xs \" ></div>
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
                // line 150
                echo "                            <div class=\"col-xs-153  col-sm-15 col-md-15 col-lg-15\" >
                                <div class='hp_eventDay' style=\"background-image: url('";
                // line 151
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "media", array()), "small");
                echo "');\">
                                    <div class=\"eventDay_date\">
                                        <span class=\"eventDay_dateDay\">";
                // line 153
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "D"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateMonth\">";
                // line 154
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "M"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateday\">";
                // line 155
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "d"), "html", null, true);
                echo "</span><br/>
                                    </div>
                                    <div class=\"eventDay_TitleDiv\">
                                        <p class=\"eventDay_title\">
                                            <a href=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_event", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "slug", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "title", array()), "html", null, true);
                echo "
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
";
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
        echo "                    <div class=\"col-xs-153  col-sm-15 col-md-15 col-lg-15\">
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
        
        $__internal_e06ac664b6ed068650d5b419c2ac2ba92b981f43f8c8f06336172c8f27443036->leave($__internal_e06ac664b6ed068650d5b419c2ac2ba92b981f43f8c8f06336172c8f27443036_prof);

    }

    // line 183
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64a3862a5e69a543fe76e10dbc50e1f3a2ae747373446e300bad5e9cac43c1c9 = $this->env->getExtension("native_profiler");
        $__internal_64a3862a5e69a543fe76e10dbc50e1f3a2ae747373446e300bad5e9cac43c1c9->enter($__internal_64a3862a5e69a543fe76e10dbc50e1f3a2ae747373446e300bad5e9cac43c1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "videoLink", array()), "html", null, true);
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
        
        $__internal_64a3862a5e69a543fe76e10dbc50e1f3a2ae747373446e300bad5e9cac43c1c9->leave($__internal_64a3862a5e69a543fe76e10dbc50e1f3a2ae747373446e300bad5e9cac43c1c9_prof);

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
        return array (  433 => 199,  414 => 184,  408 => 183,  393 => 173,  389 => 172,  386 => 171,  380 => 170,  377 => 169,  368 => 160,  364 => 159,  357 => 155,  353 => 154,  349 => 153,  344 => 151,  341 => 150,  339 => 149,  336 => 148,  332 => 147,  327 => 144,  321 => 143,  311 => 136,  307 => 135,  300 => 131,  296 => 130,  292 => 129,  287 => 127,  284 => 126,  281 => 125,  277 => 124,  262 => 111,  250 => 105,  244 => 102,  237 => 99,  235 => 98,  231 => 96,  227 => 95,  218 => 89,  214 => 88,  210 => 87,  205 => 85,  201 => 84,  197 => 82,  185 => 76,  179 => 73,  172 => 70,  170 => 69,  166 => 67,  162 => 66,  159 => 65,  157 => 64,  139 => 49,  135 => 48,  127 => 42,  116 => 36,  110 => 34,  104 => 32,  102 => 31,  98 => 29,  92 => 27,  86 => 25,  84 => 24,  78 => 21,  74 => 19,  70 => 18,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*                 <h1 class='longerTitle'>EXCEPTIONAL LEVEL OF ENTERTAINMENT</h1>*/
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
/*                     </a>*/
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
/*                                         {{ article.content[0:75]|trim|striptags }} */
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
/*                             <div class="col-xs-153  col-sm-15 col-md-15 col-lg-15 " >*/
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
/*                     <div class="col-xs-153  col-sm-15 col-md-15 col-lg-15 hidden-sm hidden-xs " ></div>*/
/*                     {% for i in 5 .. 6 %}*/
/*                         {% if home.weekEvents[i] is defined %}*/
/*                             {#{% if i == 6 %}<div style="margin:0 auto;">{% endif %}#}*/
/*                             <div class="col-xs-153  col-sm-15 col-md-15 col-lg-15" >*/
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
/* {#                                            {% if i == 6 %}*/
/*                                             </div>*/
/*                                             {% endif %}#}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     <div class="col-xs-153  col-sm-15 col-md-15 col-lg-15">*/
/*                         <a href="{{path('yalla_website_frontened_events')}}">*/
/*                         <div class='hp_eventDay' style="background-image: url('{{ asset('bundles/yallawebsitefrontend/images/more.jpg') }}');"></div>*/
/*                         </a>*/
/*                     </div>*/
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
