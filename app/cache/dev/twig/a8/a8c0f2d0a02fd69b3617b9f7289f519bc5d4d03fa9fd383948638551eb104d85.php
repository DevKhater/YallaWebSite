<?php

/* YallaWebsiteBackendBundle:Homepage:about.html.twig */
class __TwigTemplate_cf9011c5e891601d39efbba169271037ab95ba4ec738d7591caa23ffb7cb9f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Homepage:about.html.twig", 1);
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
        $__internal_9509801bb0b626de7824ac93b09f22790e0930b862278ea2c15f3ebdb613d733 = $this->env->getExtension("native_profiler");
        $__internal_9509801bb0b626de7824ac93b09f22790e0930b862278ea2c15f3ebdb613d733->enter($__internal_9509801bb0b626de7824ac93b09f22790e0930b862278ea2c15f3ebdb613d733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9509801bb0b626de7824ac93b09f22790e0930b862278ea2c15f3ebdb613d733->leave($__internal_9509801bb0b626de7824ac93b09f22790e0930b862278ea2c15f3ebdb613d733_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d7fd9ddf35c9b1229a282ede3177098a7ea3bdf4b414eef4960bca65dbd62c9 = $this->env->getExtension("native_profiler");
        $__internal_5d7fd9ddf35c9b1229a282ede3177098a7ea3bdf4b414eef4960bca65dbd62c9->enter($__internal_5d7fd9ddf35c9b1229a282ede3177098a7ea3bdf4b414eef4960bca65dbd62c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage Section";
        
        $__internal_5d7fd9ddf35c9b1229a282ede3177098a7ea3bdf4b414eef4960bca65dbd62c9->leave($__internal_5d7fd9ddf35c9b1229a282ede3177098a7ea3bdf4b414eef4960bca65dbd62c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b67ac8d31414e693e89bfcc1246fa0f228d831f5c7d03aecccb60cb56e5e38d = $this->env->getExtension("native_profiler");
        $__internal_8b67ac8d31414e693e89bfcc1246fa0f228d831f5c7d03aecccb60cb56e5e38d->enter($__internal_8b67ac8d31414e693e89bfcc1246fa0f228d831f5c7d03aecccb60cb56e5e38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">About / Vision</h4>
            <p><a href=";
        // line 7
        echo $this->env->getExtension('routing')->getPath("backend_homepage_index");
        echo ">Back to Hoomepage</a></p>
        </div
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Edit About Us
                </div>
                <div class=\"panel-body\">
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <textarea id=\"__about\" placeholder=\"About...\" class=\"form-control\" rows=\"10\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "html", null, true);
        echo "</textarea>
                            <a id='update_about' href='#' class='btn-sm btn-default'>Update About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Edit Vision
                </div>
                <div class=\"panel-body\">
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <textarea id=\"__vision\" placeholder=\"Vision...\" class=\"form-control\" rows=\"10\">";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["vision"]) ? $context["vision"] : $this->getContext($context, "vision")), "html", null, true);
        echo "</textarea>
                            <a id='update_vision' href='#' class='btn-sm btn-default'>Update Vision</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
        
        $__internal_8b67ac8d31414e693e89bfcc1246fa0f228d831f5c7d03aecccb60cb56e5e38d->leave($__internal_8b67ac8d31414e693e89bfcc1246fa0f228d831f5c7d03aecccb60cb56e5e38d_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1cf4616146e88669b28854ff030b3236ca2a10af0071a4249fdb829cfe5b6383 = $this->env->getExtension("native_profiler");
        $__internal_1cf4616146e88669b28854ff030b3236ca2a10af0071a4249fdb829cfe5b6383->enter($__internal_1cf4616146e88669b28854ff030b3236ca2a10af0071a4249fdb829cfe5b6383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('#update_about').click(function (e) {
                e.preventDefault();
                var Type = 'about';
                update(Type, \$('#__about').val());
            });
            \$('#update_vision').click(function (e) {
                e.preventDefault();
                var Type = 'vision';
                update(Type, \$('#__vision').val());
            });
        });


        function update(type, indata) {
            \$.ajax({
                type: \"POST\",
                url: Routing.generate('backend_ajax_set_' + type, {data: indata}),
                success: function (data) {
                    \$('h4#ajaxTitle').text('Succcess');
                    \$('#ajaxMessage p').text('Updated');
                    \$('#ajaxResultMessages').modal('show');
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText);
                    console.log(textStatus);
                    console.log(errorThrown);
                    \$('h4#ajaxTitle').text('Error');
                    \$('#ajaxMessage p').text('Error Contact Your Administrator.');
                    \$('#ajaxResultMessages').modal('show');
                }
            });

        }
        ;
    </script>
";
        
        $__internal_1cf4616146e88669b28854ff030b3236ca2a10af0071a4249fdb829cfe5b6383->leave($__internal_1cf4616146e88669b28854ff030b3236ca2a10af0071a4249fdb829cfe5b6383_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 71,  139 => 70,  133 => 69,  94 => 36,  74 => 19,  59 => 7,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Homepage Section{% endblock %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">About / Vision</h4>*/
/*             <p><a href={{path('backend_homepage_index')}}>Back to Hoomepage</a></p>*/
/*         </div*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     Edit About Us*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="form-group">*/
/*                             <textarea id="__about" placeholder="About..." class="form-control" rows="10">{{about}}</textarea>*/
/*                             <a id='update_about' href='#' class='btn-sm btn-default'>Update About</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     Edit Vision*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="form-group">*/
/*                             <textarea id="__vision" placeholder="Vision..." class="form-control" rows="10">{{vision}}</textarea>*/
/*                             <a id='update_vision' href='#' class='btn-sm btn-default'>Update Vision</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
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
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $('#update_about').click(function (e) {*/
/*                 e.preventDefault();*/
/*                 var Type = 'about';*/
/*                 update(Type, $('#__about').val());*/
/*             });*/
/*             $('#update_vision').click(function (e) {*/
/*                 e.preventDefault();*/
/*                 var Type = 'vision';*/
/*                 update(Type, $('#__vision').val());*/
/*             });*/
/*         });*/
/* */
/* */
/*         function update(type, indata) {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: Routing.generate('backend_ajax_set_' + type, {data: indata}),*/
/*                 success: function (data) {*/
/*                     $('h4#ajaxTitle').text('Succcess');*/
/*                     $('#ajaxMessage p').text('Updated');*/
/*                     $('#ajaxResultMessages').modal('show');*/
/*                 },*/
/*                 error: function (xhr, textStatus, errorThrown) {*/
/*                     console.log(xhr.responseText);*/
/*                     console.log(textStatus);*/
/*                     console.log(errorThrown);*/
/*                     $('h4#ajaxTitle').text('Error');*/
/*                     $('#ajaxMessage p').text('Error Contact Your Administrator.');*/
/*                     $('#ajaxResultMessages').modal('show');*/
/*                 }*/
/*             });*/
/* */
/*         }*/
/*         ;*/
/*     </script>*/
/* {%endblock%}*/
