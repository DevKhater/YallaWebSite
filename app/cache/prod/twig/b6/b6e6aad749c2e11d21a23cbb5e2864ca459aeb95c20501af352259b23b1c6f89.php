<?php

/* SonataMediaBundle:Gallery:view.html.twig */
class __TwigTemplate_ac3837970f6b598d0f6ad0e27435dbf218f1d4a104bb58677da1d07e6861538b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "SonataMediaBundle:Gallery:view.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'massonary' => array($this, 'block_massonary'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@YallaWebsiteFrontendBundle/views/front_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["tempArray"] = array();
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/css/chocolat.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/css/sweetalert.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"wrapper\">
        <div class=\"theEntityDiv\">
            <div class=\"innerTitle\">
                <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</h1>
            </div>
            <div id=\"innerEntityContent\">
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "description", array()), "html", null, true);
        echo "
            </div>
            <div id=\"galleryViewPhotogtapher\">
                ";
        // line 19
        if ( !twig_test_empty($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photographers", array()))) {
            // line 20
            echo "                    <p><span>Photo Credit</span>: 
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photographers", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
                // line 22
                echo "                            <a href='ph.website'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ph"], "name", array()), "html", null, true);
                echo "</a> ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " - ";
                }
                echo " 
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                    </p>
                ";
        }
        // line 26
        echo "            </div>
        </div>

        <div class=\"row\">
            <div class=\"im\">
                <div class=\"grid-sizer\"></div>
                <div id='links' data-chocolat-title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "name", array()), "html", null, true);
        echo "\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "GalleryHasMedias", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["galleryHasMedia"]) {
            // line 34
            echo "                        ";
            $context["id"] = twig_random($this->env);
            // line 35
            echo "                        ";
            $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : null), array(("_" . (isset($context["id"]) ? $context["id"] : null)) => $this->env->getExtension('vote_extension')->voteValue($this->getAttribute($context["galleryHasMedia"], "id", array()))));
            echo "            
                        <div class=\"im-item\">
                            <a class=\"chocolat-image\" title=\"GallerySomething\" href=\"";
            // line 37
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["galleryHasMedia"], "media", array()), "large");
            echo "\"><img class=\"thumbnail img-responsive\" src=\"";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["galleryHasMedia"], "media", array()), "small");
            echo "\">
                            </a>
                            <div class=\"chocolat-image-data\">
                                <div class=\"fb_vote\" id=\"vote";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["galleryHasMedia"], "id", array()), "html", null, true);
            echo "\" style=\"color:#000;font-weight: bold;\">
                                    <span id='";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["galleryHasMedia"], "id", array()), "html", null, true);
            echo "'onclick=\"fb_login();\">Vote</span>
                                </div>
                                <div class=\"Gallery_SM_Share\">";
            // line 43
            $this->loadTemplate("@YallaWebsiteFrontendBundle/views/Template/socialMediaShare.html.twig", "SonataMediaBundle:Gallery:view.html.twig", 43)->display($context);
            echo "</div>
                                ";
            // line 45
            echo "                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryHasMedia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    <div id='chocolat-image-data-adv' class=\"Adv_Display\">";
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('routing')->getUrl("ads_manager_show", array("id" => "snapshot_popup")));
        echo "</div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 55
    public function block_massonary($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e49cf83_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e49cf83_0") : $this->env->getExtension('asset')->getAssetUrl("js/e49cf83_part_1.js");
            // line 57
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "e49cf83_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e49cf83_1") : $this->env->getExtension('asset')->getAssetUrl("js/e49cf83_part_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e49cf83"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e49cf83") : $this->env->getExtension('asset')->getAssetUrl("js/e49cf83.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 59
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/js/socialite.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/js/jquery.chocolat.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
                                        function fb_login() {
                                            var gID = ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
        echo ";
                                                    FB.getLoginStatus(function (response) {
                                                        if (response.status === 'connected') {
                                                            var uid = response.authResponse.userID;
                                                            var img = \$('.fb_vote span').attr('id');
                                                            var token = uid + '-' + gID + '-' + img;
                                                            voteAjax(img, token);
                                                        } else {
                                                            // not_authorized
                                                            FB.login(function (response) {
                                                                if (response.authResponse) {
                                                                    FB.api('/me', function (response) {
                                                                        //alert('Thank You '+ response.name +  ' You Can Vote Now');
                                                                        swal(response.name, \"Thank You You Can Vote Now\", \"success\");
                                                                    });

                                                                } else {
                                                                    sweetAlert(\"You Must Be Logged In To Vote\", \"You Can't Vote Now\", \"error\");
                                                                }
                                                            }, {scope: 'email'});
                                                        }
                                                    });
                                        }
                                        function voteAjax(img, token) {
                                            \$.ajax({
                                                type: \"POST\",
                                                url: '";
        // line 90
        echo $this->env->getExtension('routing')->getUrl("voting_upvote");
        echo "?reference=' + img + '&value=1&token=' + token,
                                                success: function (data) {
                                                    \$('#vote' + img).html(data);
                                                    \$('#vote' + img).css('color', '#000');
                                                    \$('#vote' + img).css('font-weight', 'bold');
                                                },
                                                error: function (xhr, textStatus, errorThrown) {
                                                    console.log(xhr.responseText);
                                                    console.log(textStatus);
                                                    console.log(errorThrown);

                                                }
                                            });
                                        }
                                        \$(document).ready(function () {
                                            var \$grid = \$('.im').masonry({
                                                itemSelector: '.im-item',
                                                percentPosition: true,
                                                columnWidth: '.grid-sizer'
                                            });
                                            console.log('masonary initialized');
// layout Isotope after each image loads
                                            \$grid.imagesLoaded().progress(function () {
                                                \$grid.masonry();
                                            });
                                            console.log('masonary progress');
                                            \$('.Kunstmaan').css('display', 'none');
                                            \$('#links').Chocolat({
                                                imageSize: 'contain',
                                            });
                                            console.log('chocolat initialized');

                                            \$('.epub a').click(function (e) {
                                                e.preventDefault();
                                            });
                                            \$('.epub img').click(function (e) {
                                                var href = \$('.epub a').attr('href');
                                                window.open(href, '_blank');
                                            });
                                        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Gallery:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 90,  249 => 64,  243 => 61,  239 => 60,  234 => 59,  214 => 57,  209 => 56,  206 => 55,  195 => 48,  179 => 45,  175 => 43,  170 => 41,  166 => 40,  158 => 37,  152 => 35,  149 => 34,  132 => 33,  128 => 32,  120 => 26,  116 => 24,  95 => 22,  78 => 21,  75 => 20,  73 => 19,  67 => 16,  59 => 13,  54 => 10,  51 => 9,  45 => 6,  41 => 5,  36 => 4,  33 => 3,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* {% set tempArray = {} %}*/
/* {% block stylesheets %}*/
/*     {{parent()}}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/yallawebsitefrontend/css/chocolat.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/yallawebsitefrontend/css/sweetalert.css') }}" />*/
/* {% endblock %}    */
/* */
/* {% block body %}*/
/*     <div class="wrapper">*/
/*         <div class="theEntityDiv">*/
/*             <div class="innerTitle">*/
/*                 <h1>{{gallery.name}} {{gallery.date|date("d/m/Y")}}</h1>*/
/*             </div>*/
/*             <div id="innerEntityContent">*/
/*                 {{ gallery.description }}*/
/*             </div>*/
/*             <div id="galleryViewPhotogtapher">*/
/*                 {% if gallery.photographers is not empty %}*/
/*                     <p><span>Photo Credit</span>: */
/*                         {% for ph in gallery.photographers %}*/
/*                             <a href='ph.website'>{{ph.name}}</a> {% if not loop.last %} - {% endif %} */
/*                         {% endfor %}*/
/*                     </p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="im">*/
/*                 <div class="grid-sizer"></div>*/
/*                 <div id='links' data-chocolat-title="{{gallery.name}}">*/
/*                     {% for galleryHasMedia in gallery.GalleryHasMedias %}*/
/*                         {% set id = random() %}*/
/*                         {% set tempArray = tempArray|merge({('_'~id):(voteValue(galleryHasMedia.id))}) %}            */
/*                         <div class="im-item">*/
/*                             <a class="chocolat-image" title="GallerySomething" href="{% path galleryHasMedia.media, 'large' %}"><img class="thumbnail img-responsive" src="{% path galleryHasMedia.media, 'small' %}">*/
/*                             </a>*/
/*                             <div class="chocolat-image-data">*/
/*                                 <div class="fb_vote" id="vote{{ galleryHasMedia.id }}" style="color:#000;font-weight: bold;">*/
/*                                     <span id='{{galleryHasMedia.id}}'onclick="fb_login();">Vote</span>*/
/*                                 </div>*/
/*                                 <div class="Gallery_SM_Share">{% include '@YallaWebsiteFrontendBundle/views/Template/socialMediaShare.html.twig' %}</div>*/
/*                                 {#{{ voteValue(galleryHasMedia.id)|rating(5) }}#}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                     <div id='chocolat-image-data-adv' class="Adv_Display">{{ render_esi(url('ads_manager_show', { 'id': 'snapshot_popup' })) }}</div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block massonary %}*/
/*     {% javascripts '@massonary' '@imagesloaded'%}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     <script type="text/javascript" src="{{ asset('bundles/yallawebsitefrontend/js/socialite.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/yallawebsitefrontend/js/jquery.chocolat.js') }}"></script>*/
/*     <script src="{{ asset('bundles/yallawebsitefrontend/js/sweetalert.min.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*                                         function fb_login() {*/
/*                                             var gID = {{gallery.id}};*/
/*                                                     FB.getLoginStatus(function (response) {*/
/*                                                         if (response.status === 'connected') {*/
/*                                                             var uid = response.authResponse.userID;*/
/*                                                             var img = $('.fb_vote span').attr('id');*/
/*                                                             var token = uid + '-' + gID + '-' + img;*/
/*                                                             voteAjax(img, token);*/
/*                                                         } else {*/
/*                                                             // not_authorized*/
/*                                                             FB.login(function (response) {*/
/*                                                                 if (response.authResponse) {*/
/*                                                                     FB.api('/me', function (response) {*/
/*                                                                         //alert('Thank You '+ response.name +  ' You Can Vote Now');*/
/*                                                                         swal(response.name, "Thank You You Can Vote Now", "success");*/
/*                                                                     });*/
/* */
/*                                                                 } else {*/
/*                                                                     sweetAlert("You Must Be Logged In To Vote", "You Can't Vote Now", "error");*/
/*                                                                 }*/
/*                                                             }, {scope: 'email'});*/
/*                                                         }*/
/*                                                     });*/
/*                                         }*/
/*                                         function voteAjax(img, token) {*/
/*                                             $.ajax({*/
/*                                                 type: "POST",*/
/*                                                 url: '{{ url('voting_upvote') }}?reference=' + img + '&value=1&token=' + token,*/
/*                                                 success: function (data) {*/
/*                                                     $('#vote' + img).html(data);*/
/*                                                     $('#vote' + img).css('color', '#000');*/
/*                                                     $('#vote' + img).css('font-weight', 'bold');*/
/*                                                 },*/
/*                                                 error: function (xhr, textStatus, errorThrown) {*/
/*                                                     console.log(xhr.responseText);*/
/*                                                     console.log(textStatus);*/
/*                                                     console.log(errorThrown);*/
/* */
/*                                                 }*/
/*                                             });*/
/*                                         }*/
/*                                         $(document).ready(function () {*/
/*                                             var $grid = $('.im').masonry({*/
/*                                                 itemSelector: '.im-item',*/
/*                                                 percentPosition: true,*/
/*                                                 columnWidth: '.grid-sizer'*/
/*                                             });*/
/*                                             console.log('masonary initialized');*/
/* // layout Isotope after each image loads*/
/*                                             $grid.imagesLoaded().progress(function () {*/
/*                                                 $grid.masonry();*/
/*                                             });*/
/*                                             console.log('masonary progress');*/
/*                                             $('.Kunstmaan').css('display', 'none');*/
/*                                             $('#links').Chocolat({*/
/*                                                 imageSize: 'contain',*/
/*                                             });*/
/*                                             console.log('chocolat initialized');*/
/* */
/*                                             $('.epub a').click(function (e) {*/
/*                                                 e.preventDefault();*/
/*                                             });*/
/*                                             $('.epub img').click(function (e) {*/
/*                                                 var href = $('.epub a').attr('href');*/
/*                                                 window.open(href, '_blank');*/
/*                                             });*/
/*                                         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
