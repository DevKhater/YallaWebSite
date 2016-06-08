<?php

/* YallaWebsiteBackendBundle:Homepage:index.html.twig */
class __TwigTemplate_3dcaa2ad251ab8c011ac1ef0c3a7d21c62ed67d37d7666e584b3ac1ccf234758 extends Twig_Template
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
        $__internal_fa10c2efb13e8dee3b673dc073cdaee14730a0e98fe4ed824de2290dc35d29c0 = $this->env->getExtension("native_profiler");
        $__internal_fa10c2efb13e8dee3b673dc073cdaee14730a0e98fe4ed824de2290dc35d29c0->enter($__internal_fa10c2efb13e8dee3b673dc073cdaee14730a0e98fe4ed824de2290dc35d29c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa10c2efb13e8dee3b673dc073cdaee14730a0e98fe4ed824de2290dc35d29c0->leave($__internal_fa10c2efb13e8dee3b673dc073cdaee14730a0e98fe4ed824de2290dc35d29c0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3ba0b87fc4a11db58f64104e784d965172fbfa4bd46b306673bd7b84027465d = $this->env->getExtension("native_profiler");
        $__internal_a3ba0b87fc4a11db58f64104e784d965172fbfa4bd46b306673bd7b84027465d->enter($__internal_a3ba0b87fc4a11db58f64104e784d965172fbfa4bd46b306673bd7b84027465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage Section";
        
        $__internal_a3ba0b87fc4a11db58f64104e784d965172fbfa4bd46b306673bd7b84027465d->leave($__internal_a3ba0b87fc4a11db58f64104e784d965172fbfa4bd46b306673bd7b84027465d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca9ae0ad4f799dd9982eb875722864a558af7aac8dd5caf30f45319adcaa0807 = $this->env->getExtension("native_profiler");
        $__internal_ca9ae0ad4f799dd9982eb875722864a558af7aac8dd5caf30f45319adcaa0807->enter($__internal_ca9ae0ad4f799dd9982eb875722864a558af7aac8dd5caf30f45319adcaa0807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        $context["arr"] = array(0 => (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), 1 => (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 2 => (isset($context["venues"]) ? $context["venues"] : $this->getContext($context, "venues")), 3 => (isset($context["galleries"]) ? $context["galleries"] : $this->getContext($context, "galleries")));
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
        
        $__internal_ca9ae0ad4f799dd9982eb875722864a558af7aac8dd5caf30f45319adcaa0807->leave($__internal_ca9ae0ad4f799dd9982eb875722864a558af7aac8dd5caf30f45319adcaa0807_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b86ee0de738a6320caf3bce7ce32cff5bfaa920500523ff353038f96197473e9 = $this->env->getExtension("native_profiler");
        $__internal_b86ee0de738a6320caf3bce7ce32cff5bfaa920500523ff353038f96197473e9->enter($__internal_b86ee0de738a6320caf3bce7ce32cff5bfaa920500523ff353038f96197473e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b86ee0de738a6320caf3bce7ce32cff5bfaa920500523ff353038f96197473e9->leave($__internal_b86ee0de738a6320caf3bce7ce32cff5bfaa920500523ff353038f96197473e9_prof);

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
        return array (  209 => 113,  206 => 112,  203 => 111,  201 => 110,  178 => 89,  176 => 88,  172 => 87,  167 => 86,  161 => 85,  128 => 57,  126 => 56,  110 => 42,  108 => 41,  93 => 28,  91 => 27,  86 => 24,  84 => 23,  79 => 20,  77 => 19,  63 => 8,  59 => 6,  57 => 5,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
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
