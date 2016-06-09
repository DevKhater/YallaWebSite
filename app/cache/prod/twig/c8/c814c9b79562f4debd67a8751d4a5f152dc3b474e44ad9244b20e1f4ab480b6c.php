<?php

/* YallaWebsiteBackendBundle:Gallery:setpreview.html.twig */
class __TwigTemplate_76e624fb7a1aabd3c6b45913cd5ed0a4f56065c946494dbb104caa3e1d9308aa extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
        <div class=\"alert alert-success\"></div>
        ";
        // line 5
        if (twig_test_empty((isset($context["medias"]) ? $context["medias"] : null))) {
            // line 6
            echo "        ";
        } else {
            // line 7
            echo "            <div class=\"col-md-12\">

                <select class=\"image-picker show-html\">
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) ? $context["medias"] : null));
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
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
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
        return array (  89 => 28,  85 => 27,  74 => 20,  69 => 17,  63 => 13,  50 => 11,  46 => 10,  41 => 7,  38 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
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
