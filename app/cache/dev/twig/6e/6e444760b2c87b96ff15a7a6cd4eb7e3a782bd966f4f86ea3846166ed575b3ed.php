<?php

/* YallaWebsiteBackendBundle:Gallery:setpreview.html.twig */
class __TwigTemplate_e068878fe24b48e204bd0a5161c3918c567b12b2a3f202e682267efea4975c48 extends Twig_Template
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
        $__internal_897dfcf0224040105c405464d66b4180b69ac8a1d016a2915a4573b32e8c3b60 = $this->env->getExtension("native_profiler");
        $__internal_897dfcf0224040105c405464d66b4180b69ac8a1d016a2915a4573b32e8c3b60->enter($__internal_897dfcf0224040105c405464d66b4180b69ac8a1d016a2915a4573b32e8c3b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:setpreview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897dfcf0224040105c405464d66b4180b69ac8a1d016a2915a4573b32e8c3b60->leave($__internal_897dfcf0224040105c405464d66b4180b69ac8a1d016a2915a4573b32e8c3b60_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_5235f8ebf4911a95e715caf9d4953c529ca221be5f946a83ae1c4e7b597ec3f8 = $this->env->getExtension("native_profiler");
        $__internal_5235f8ebf4911a95e715caf9d4953c529ca221be5f946a83ae1c4e7b597ec3f8->enter($__internal_5235f8ebf4911a95e715caf9d4953c529ca221be5f946a83ae1c4e7b597ec3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_5235f8ebf4911a95e715caf9d4953c529ca221be5f946a83ae1c4e7b597ec3f8->leave($__internal_5235f8ebf4911a95e715caf9d4953c529ca221be5f946a83ae1c4e7b597ec3f8_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b045d93ca75d8c51ca8ca00a7f64037bbb9c95fe21a340d8efcb747c70328d4 = $this->env->getExtension("native_profiler");
        $__internal_8b045d93ca75d8c51ca8ca00a7f64037bbb9c95fe21a340d8efcb747c70328d4->enter($__internal_8b045d93ca75d8c51ca8ca00a7f64037bbb9c95fe21a340d8efcb747c70328d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8b045d93ca75d8c51ca8ca00a7f64037bbb9c95fe21a340d8efcb747c70328d4->leave($__internal_8b045d93ca75d8c51ca8ca00a7f64037bbb9c95fe21a340d8efcb747c70328d4_prof);

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
