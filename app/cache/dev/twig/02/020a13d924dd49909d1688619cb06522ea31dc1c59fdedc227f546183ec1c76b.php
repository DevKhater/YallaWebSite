<?php

/* YallaWebsiteBackendBundle:Gallery:setpreview.html.twig */
class __TwigTemplate_bbd086e01edbf744e6f4c0ba0117688e46aee86a60dfc1642e1d3b8cce7ff726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig", "YallaWebsiteBackendBundle:Gallery:setpreview.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_238b52fb9ab6159b3845b3cce4c74ae9250a62041c623ae2249400a2295bda23 = $this->env->getExtension("native_profiler");
        $__internal_238b52fb9ab6159b3845b3cce4c74ae9250a62041c623ae2249400a2295bda23->enter($__internal_238b52fb9ab6159b3845b3cce4c74ae9250a62041c623ae2249400a2295bda23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:setpreview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_238b52fb9ab6159b3845b3cce4c74ae9250a62041c623ae2249400a2295bda23->leave($__internal_238b52fb9ab6159b3845b3cce4c74ae9250a62041c623ae2249400a2295bda23_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_ef6175616646e64b2f40f98276e8b78ce469f1f1ba407ff59421f3257feee6ae = $this->env->getExtension("native_profiler");
        $__internal_ef6175616646e64b2f40f98276e8b78ce469f1f1ba407ff59421f3257feee6ae->enter($__internal_ef6175616646e64b2f40f98276e8b78ce469f1f1ba407ff59421f3257feee6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"alert alert-success\"></div>
        ";
        // line 5
        if (twig_test_empty((isset($context["medias"]) ? $context["medias"] : $this->getContext($context, "medias")))) {
            // line 6
            echo "        ";
        } else {
            // line 7
            echo "            <div class=\"col-md-12\">

                <select class=\"image-picker show-html\">
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) ? $context["medias"] : $this->getContext($context, "medias")));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 11
                echo "                        <option data-img-src=\"";
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["media"], "media", array()), "preview");
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["media"], "media", array()), "id", array()), "html", null, true);
                echo "\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "id", array()), "html", null, true);
                echo "  </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                </select>
                <div class=\"col-md-12\" style=\"text-align: center\"><span class=\"savepreview\">SAVE</span></div>
            </div>
        ";
        }
        // line 17
        echo "    </div>
";
        
        $__internal_ef6175616646e64b2f40f98276e8b78ce469f1f1ba407ff59421f3257feee6ae->leave($__internal_ef6175616646e64b2f40f98276e8b78ce469f1f1ba407ff59421f3257feee6ae_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48f18ad46f0d90ffcd77deea9abcf7d0e3a5772fb5fd008b9d9aa8673c63f3fd = $this->env->getExtension("native_profiler");
        $__internal_48f18ad46f0d90ffcd77deea9abcf7d0e3a5772fb5fd008b9d9aa8673c63f3fd->enter($__internal_48f18ad46f0d90ffcd77deea9abcf7d0e3a5772fb5fd008b9d9aa8673c63f3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
    <script>
        \$(\"select\").imagepicker({
            hide_select: true,
            show_label: false
        });
        function aButtonPressed(pid) {
            \$.post('";
        // line 27
        echo $this->env->getExtension('routing')->getPath("backend_gallery_ajax_set_preview");
        echo "',
                    {id: pid, g: '";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "'},
                    function (response) {
                        if (response.code == 100) {//dummy check
                            alertSucc();
                        }

                    }, \"json\");
        }

        function alertSucc() {
            \$('.alert').show();
            \$('.alert').append(\"<p>Gallery Image Preview Set Successfully</p>\");
        }

        \$(document).ready(function () {
            \$('.alert').hide();

            \$('.savepreview').on('click', function () {
                var pid = \$(\"select\").val();
                aButtonPressed(pid);
            });
        });
    </script>

";
        
        $__internal_48f18ad46f0d90ffcd77deea9abcf7d0e3a5772fb5fd008b9d9aa8673c63f3fd->leave($__internal_48f18ad46f0d90ffcd77deea9abcf7d0e3a5772fb5fd008b9d9aa8673c63f3fd_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Gallery:setpreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  100 => 27,  86 => 20,  78 => 17,  72 => 13,  59 => 11,  55 => 10,  50 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="row">*/
/*         <div class="alert alert-success"></div>*/
/*         {% if medias is empty %}*/
/*         {% else %}*/
/*             <div class="col-md-12">*/
/* */
/*                 <select class="image-picker show-html">*/
/*                     {% for media in medias %}*/
/*                         <option data-img-src="{% path media.media, 'preview' %}" value="{{media.media.id}}">  {{media.id}}  </option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <div class="col-md-12" style="text-align: center"><span class="savepreview">SAVE</span></div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %} */
/*     <script>*/
/*         $("select").imagepicker({*/
/*             hide_select: true,*/
/*             show_label: false*/
/*         });*/
/*         function aButtonPressed(pid) {*/
/*             $.post('{{path('backend_gallery_ajax_set_preview')}}',*/
/*                     {id: pid, g: '{{entity.id}}'},*/
/*                     function (response) {*/
/*                         if (response.code == 100) {//dummy check*/
/*                             alertSucc();*/
/*                         }*/
/* */
/*                     }, "json");*/
/*         }*/
/* */
/*         function alertSucc() {*/
/*             $('.alert').show();*/
/*             $('.alert').append("<p>Gallery Image Preview Set Successfully</p>");*/
/*         }*/
/* */
/*         $(document).ready(function () {*/
/*             $('.alert').hide();*/
/* */
/*             $('.savepreview').on('click', function () {*/
/*                 var pid = $("select").val();*/
/*                 aButtonPressed(pid);*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
