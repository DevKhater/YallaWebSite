<?php

/* YallaWebsiteFrontendBundle:Default:index.html_1.twig */
class __TwigTemplate_f2cdb2c08e4cc64069afd032053f98ba9a135cf4424db496a9b7024d1851e581 extends Twig_Template
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
        $__internal_91f73c0e793463106cf4823f575cacdc8f7fca97a16c6d6da019a3fa2ae22562 = $this->env->getExtension("native_profiler");
        $__internal_91f73c0e793463106cf4823f575cacdc8f7fca97a16c6d6da019a3fa2ae22562->enter($__internal_91f73c0e793463106cf4823f575cacdc8f7fca97a16c6d6da019a3fa2ae22562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Default:index.html_1.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f73c0e793463106cf4823f575cacdc8f7fca97a16c6d6da019a3fa2ae22562->leave($__internal_91f73c0e793463106cf4823f575cacdc8f7fca97a16c6d6da019a3fa2ae22562_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b848d72e3aa3087ab1c9d1ca2ee142ac2fd4fa79092359dfdf26ee28b97b4e5 = $this->env->getExtension("native_profiler");
        $__internal_1b848d72e3aa3087ab1c9d1ca2ee142ac2fd4fa79092359dfdf26ee28b97b4e5->enter($__internal_1b848d72e3aa3087ab1c9d1ca2ee142ac2fd4fa79092359dfdf26ee28b97b4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1b848d72e3aa3087ab1c9d1ca2ee142ac2fd4fa79092359dfdf26ee28b97b4e5->leave($__internal_1b848d72e3aa3087ab1c9d1ca2ee142ac2fd4fa79092359dfdf26ee28b97b4e5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ddee6f244463d928420cf920e3a1ec521ac0d7413448f5f5498d49d26e28197 = $this->env->getExtension("native_profiler");
        $__internal_8ddee6f244463d928420cf920e3a1ec521ac0d7413448f5f5498d49d26e28197->enter($__internal_8ddee6f244463d928420cf920e3a1ec521ac0d7413448f5f5498d49d26e28197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "SliderEntities", array()));
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
        echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "selectedGallery", array()), "media", array()), "medium");
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
            $context["article"] = $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "sideArticles", array()), $this->getAttribute((isset($context["art"]) ? $context["art"] : $this->getContext($context, "art")), $context["i"], array(), "array"), array(), "array");
            // line 92
            echo "                                    <div class=\"hp_sideArticle_image\" style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "media", array()), "small");
            echo "');\"></div>
                                    <div class=\"hp_sideArticle_text\">
                                        <div class=\"sideArticle_text\">
                                            <p>";
            // line 95
            echo twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), 0, 100);
            echo "</p>
                                        </div>
                                        <div class=\"sideArticle_button\">
                                            <button type=\"button\" class=\"btn btn-secondary btn-xs\"><a href=\"";
            // line 98
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
        // line 104
        echo "                    </div>
                    <div id='HomeArticlesFeatured' class=\"col-lg-6\" style=\"background-image: url('";
        // line 105
        echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "mainArticle", array()), "media", array()), "medium");
        echo "');\">
                        <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/RC.png"), "html", null, true);
        echo "\" />
                        <div id=\"FeaturedArticles_hover\">
                            <p id=\"FeaturedArticle_title\">";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "mainArticle", array()), "title", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 109
        echo twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "mainArticle", array()), "content", array()), 0, 100);
        echo "</p>
                            <button type=\"button\" class=\"homePageButtons btn btn-secondary btn-xs\"><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_article", array("id" => $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "mainArticle", array()), "slug", array()))), "html", null, true);
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
            $context["article"] = $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "sideArticles", array()), $this->getAttribute((isset($context["art"]) ? $context["art"] : $this->getContext($context, "art")), $context["i"], array(), "array"), array(), "array");
            // line 119
            echo "                                    <div class=\"hp_sideArticle_image\" style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "media", array()), "small");
            echo "');\"></div>
                                    <div class=\"hp_sideArticle_text\">
                                        <div class=\"sideArticle_text\">
                                            <p>";
            // line 122
            echo twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), 0, 100);
            echo "</p>
                                        </div>
                                        <div class=\"sideArticle_button\">
                                            <button type=\"button\" class=\"btn btn-secondary btn-xs\"><a href=\"";
            // line 125
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
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "media", array()), "small");
                echo "');\">
                                    <div class=\"eventDay_date\">
                                        <span class=\"eventDay_dateDay\">";
                // line 148
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "D"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateMonth\">";
                // line 149
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "M"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateday\">";
                // line 150
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "d"), "html", null, true);
                echo "</span><br/>
                                    </div>
                                    <div class=\"eventDay_TitleDiv\">
                                        <p class=\"eventDay_title\">
                                            <a href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_event", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "slug", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "title", array()), "html", null, true);
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
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "media", array()), "small");
                echo "');\">
                                    <div class=\"eventDay_date\">
                                        <span class=\"eventDay_dateDay\">";
                // line 170
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "D"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateMonth\">";
                // line 171
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "M"), 0, 3), "html", null, true);
                echo "</span><br/>
                                        <span class=\"eventDay_dateday\">";
                // line 172
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "startDate", array()), "d"), "html", null, true);
                echo "</span><br/>
                                    </div>
                                    <div class=\"eventDay_TitleDiv\">
                                        <p class=\"eventDay_title\">
                                            <a href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_event", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "slug", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "weekEvents", array()), $context["i"], array(), "array"), "title", array()), "html", null, true);
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
        
        $__internal_8ddee6f244463d928420cf920e3a1ec521ac0d7413448f5f5498d49d26e28197->leave($__internal_8ddee6f244463d928420cf920e3a1ec521ac0d7413448f5f5498d49d26e28197_prof);

    }

    // line 192
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc98991fa9c7b0586da96a077cfaf80f6cd46558eb47e1db9611ee56f78a7c99 = $this->env->getExtension("native_profiler");
        $__internal_dc98991fa9c7b0586da96a077cfaf80f6cd46558eb47e1db9611ee56f78a7c99->enter($__internal_dc98991fa9c7b0586da96a077cfaf80f6cd46558eb47e1db9611ee56f78a7c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "videoLink", array()), "html", null, true);
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
        
        $__internal_dc98991fa9c7b0586da96a077cfaf80f6cd46558eb47e1db9611ee56f78a7c99->leave($__internal_dc98991fa9c7b0586da96a077cfaf80f6cd46558eb47e1db9611ee56f78a7c99_prof);

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
        return array (  442 => 208,  423 => 193,  417 => 192,  406 => 185,  400 => 184,  390 => 177,  386 => 176,  379 => 172,  375 => 171,  371 => 170,  366 => 168,  363 => 167,  360 => 166,  356 => 165,  352 => 163,  346 => 162,  336 => 155,  332 => 154,  325 => 150,  321 => 149,  317 => 148,  312 => 146,  309 => 145,  306 => 144,  302 => 143,  288 => 131,  276 => 125,  270 => 122,  263 => 119,  261 => 118,  256 => 115,  252 => 114,  245 => 110,  241 => 109,  237 => 108,  232 => 106,  228 => 105,  225 => 104,  213 => 98,  207 => 95,  200 => 92,  198 => 91,  194 => 89,  190 => 88,  187 => 87,  185 => 86,  171 => 74,  155 => 59,  153 => 58,  149 => 56,  138 => 47,  124 => 38,  118 => 36,  112 => 34,  110 => 33,  106 => 31,  100 => 29,  94 => 27,  92 => 26,  86 => 23,  82 => 21,  78 => 20,  66 => 10,  60 => 9,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
