<?php

/* YallaWebsiteBackendBundle:Homepage:index.html.twig */
class __TwigTemplate_1ce36b593e165f469581e6f29a0f6b9299993ec1889d5e7575bc8866295a9bf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Homepage Section";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        $context["arr"] = array(0 => (isset($context["events"]) ? $context["events"] : null), 1 => (isset($context["articles"]) ? $context["articles"] : null), 2 => (isset($context["venues"]) ? $context["venues"] : null), 3 => (isset($context["galleries"]) ? $context["galleries"] : null));
        // line 6
        echo "        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Homepage</h4>
            <p><a href=";
        // line 8
        echo $this->env->getExtension('routing')->getPath("backend_homepage_about");
        echo ">About/Vision</a></p>
        </div>

    </div>
    <div class=\"col-md-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Homepage Top Part
            </div>
            <div id='HomePagePartOne' class=\"panel-body\">
                <div class=\"col-md-12\">
                    ";
        // line 19
        $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/html/homepage_backend_slider.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 19)->display($context);
        // line 20
        echo "                </div>

                <div class=\"col-md-12\">
                    ";
        // line 23
        $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/html/homepage_backend_video.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 23)->display($context);
        // line 24
        echo "                </div>

                <div class=\"col-md-12\">
                    ";
        // line 27
        $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/html/homepage_backend_selected_gallery.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 27)->display($context);
        // line 28
        echo "                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class=\"col-md-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Homepage Middle Part
            </div>
            <div id='HomePagePartTwo' class=\"panel-body\">
                <h5><strong>Homepage Article Section</strong></h5>
                <div class=\"col-md-12\">
                    ";
        // line 41
        $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/html/homepage_backend_selected_article.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 41)->display($context);
        // line 42
        echo "                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class=\"col-md-12\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                Homepage Bottom Part
            </div>
            <div id='HomePagePartThree' class=\"panel-body\">
                <h5><strong>Homepage Article Section</strong></h5>
                <div class=\"col-md-12\">
                    ";
        // line 56
        $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/html/homepage_backend_week_events.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 56)->display($context);
        // line 57
        echo "                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"ajaxResultMessages\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\" id=\"ajaxTitle\"></h4>
                </div>
                <div class=\"modal-body\" id=\"ajaxMessage\">
                    <p></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>


";
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        // line 86
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    ";
        // line 88
        $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/js/homepage_slider_js.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 88)->display($context);
        // line 89
        echo "    <script>
        function updateSlider(v, p, t) {
            \$.ajax({
                type: \"POST\",
                url: Routing.generate('backend_ajax_set_slider', {id: v, pos: p, type: t}),
                success: function (data) {
                    \$('#ajaxDiv').css('display', 'block');
                    \$('#ajaxDiv').html(data);
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText);
                    console.log(textStatus);
                    console.log(errorThrown);
                    \$('h4#ajaxTitle').text('Error');
                    \$('#ajaxMessage p').text(errorThrown);
                    \$('#ajaxResultMessages').modal('show');
                }
            });
        }
        ;
    </script>
    ";
        // line 110
        $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/js/homepage_video_js.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 110)->display($context);
        // line 111
        echo "    ";
        $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/js/homepage_gallery_js.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 111)->display($context);
        // line 112
        echo "    ";
        $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/js/homepage_one_article_js.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 112)->display($context);
        // line 113
        echo "    ";
        $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/js/homepage_week_events_js.html.twig", "YallaWebsiteBackendBundle:Homepage:index.html.twig", 113)->display($context);
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 113,  185 => 112,  182 => 111,  180 => 110,  157 => 89,  155 => 88,  151 => 87,  146 => 86,  143 => 85,  113 => 57,  111 => 56,  95 => 42,  93 => 41,  78 => 28,  76 => 27,  71 => 24,  69 => 23,  64 => 20,  62 => 19,  48 => 8,  44 => 6,  42 => 5,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Homepage Section{% endblock %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         {% set  arr = [events, articles, venues, galleries]%}*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Homepage</h4>*/
/*             <p><a href={{path('backend_homepage_about')}}>About/Vision</a></p>*/
/*         </div>*/
/* */
/*     </div>*/
/*     <div class="col-md-12">*/
/*         <div class="panel panel-primary">*/
/*             <div class="panel-heading">*/
/*                 Homepage Top Part*/
/*             </div>*/
/*             <div id='HomePagePartOne' class="panel-body">*/
/*                 <div class="col-md-12">*/
/*                     {% include '@YallaWebsiteBackendBundle/views/Homepage/html/homepage_backend_slider.html.twig' %}*/
/*                 </div>*/
/* */
/*                 <div class="col-md-12">*/
/*                     {% include '@YallaWebsiteBackendBundle/views/Homepage/html/homepage_backend_video.html.twig' %}*/
/*                 </div>*/
/* */
/*                 <div class="col-md-12">*/
/*                     {% include '@YallaWebsiteBackendBundle/views/Homepage/html/homepage_backend_selected_gallery.html.twig' %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <hr>*/
/*     <div class="col-md-12">*/
/*         <div class="panel panel-primary">*/
/*             <div class="panel-heading">*/
/*                 Homepage Middle Part*/
/*             </div>*/
/*             <div id='HomePagePartTwo' class="panel-body">*/
/*                 <h5><strong>Homepage Article Section</strong></h5>*/
/*                 <div class="col-md-12">*/
/*                     {% include '@YallaWebsiteBackendBundle/views/Homepage/html/homepage_backend_selected_article.html.twig' %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <hr>*/
/* */
/*     <div class="col-md-12">*/
/*         <div class="panel panel-primary">*/
/*             <div class="panel-heading">*/
/*                 Homepage Bottom Part*/
/*             </div>*/
/*             <div id='HomePagePartThree' class="panel-body">*/
/*                 <h5><strong>Homepage Article Section</strong></h5>*/
/*                 <div class="col-md-12">*/
/*                     {% include '@YallaWebsiteBackendBundle/views/Homepage/html/homepage_backend_week_events.html.twig' %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <hr>*/
/* */
/*     <!-- Modal -->*/
/*     <div class="modal fade" id="ajaxResultMessages" role="dialog">*/
/*         <div class="modal-dialog">*/
/*             <!-- Modal content-->*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                     <h4 class="modal-title" id="ajaxTitle"></h4>*/
/*                 </div>*/
/*                 <div class="modal-body" id="ajaxMessage">*/
/*                     <p></p>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/*     {% include '@YallaWebsiteBackendBundle/views/Homepage/js/homepage_slider_js.html.twig' %}*/
/*     <script>*/
/*         function updateSlider(v, p, t) {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: Routing.generate('backend_ajax_set_slider', {id: v, pos: p, type: t}),*/
/*                 success: function (data) {*/
/*                     $('#ajaxDiv').css('display', 'block');*/
/*                     $('#ajaxDiv').html(data);*/
/*                 },*/
/*                 error: function (xhr, textStatus, errorThrown) {*/
/*                     console.log(xhr.responseText);*/
/*                     console.log(textStatus);*/
/*                     console.log(errorThrown);*/
/*                     $('h4#ajaxTitle').text('Error');*/
/*                     $('#ajaxMessage p').text(errorThrown);*/
/*                     $('#ajaxResultMessages').modal('show');*/
/*                 }*/
/*             });*/
/*         }*/
/*         ;*/
/*     </script>*/
/*     {% include '@YallaWebsiteBackendBundle/views/Homepage/js/homepage_video_js.html.twig' %}*/
/*     {% include '@YallaWebsiteBackendBundle/views/Homepage/js/homepage_gallery_js.html.twig' %}*/
/*     {% include '@YallaWebsiteBackendBundle/views/Homepage/js/homepage_one_article_js.html.twig' %}*/
/*     {% include '@YallaWebsiteBackendBundle/views/Homepage/js/homepage_week_events_js.html.twig' %}*/
/* {%endblock%}*/
