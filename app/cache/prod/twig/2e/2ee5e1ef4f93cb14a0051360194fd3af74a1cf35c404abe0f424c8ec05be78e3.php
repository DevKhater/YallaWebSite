<?php

/* YallaWebsiteBackendBundle:Gallery:show.html.twig */
class __TwigTemplate_e63e689ccd74046751801d05ac5ce7da14fdf5113f641d9fe4199a8b421259fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig", "YallaWebsiteBackendBundle:Gallery:show.html.twig", 1);
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
        echo "    <br style=\"clear: both\">
    <div class='col-md-6 center clear-fix' style=\"margin-bottom: 1em;border:1px solid black\">
        ";
        // line 5
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array()) != null)) {
            echo " 
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array()), "html", null, true);
            echo "
        ";
        }
        // line 8
        echo "    </div>
    <div class='col-md-6 center clear-fix' style=\"margin-bottom: 1em;border:1px solid black\">
        ";
        // line 10
        if ( !twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "photographers", array()))) {
            // line 11
            echo "            Photo Credit : 
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "photographers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
                // line 13
                echo "                <a href='ph.website'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ph"], "name", array()), "html", null, true);
                echo "</a> - 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            ";
        } else {
            // line 16
            echo "                No Photographers Assigned to This Gallery
        ";
        }
        // line 18
        echo "    </div>
    <div class=\"col-md-3\" style=\"text-align: center; border-right: #001f3f;border-right-width: 4px;border-right-style: double\">
        <div style=\"min-height: 400px;\">
            ";
        // line 21
        if ( !twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "media", array()))) {
            // line 22
            echo "                ";
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "media", array()), "preview", array());
            // line 23
            echo "                <p>Image Cover Preview</p>
            ";
        } else {
            // line 24
            echo " <p>No Cover Image Found 
                    ";
            // line 25
            if ( !twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : null))) {
                echo "<br/><strong><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_set_preview", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
                echo "\">Set Preview Image Now</a></strong> </p> ";
            }
            // line 26
            echo "            ";
        }
        // line 27
        echo "                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tags", array()))) {
            // line 28
            echo "                <h4>Tags</h4>
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 30
                echo "                    <span class=\"label label-primary\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ajax_delete_tag", array("id" => $this->getAttribute($context["tag"], "id", array()), "g" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"delTag\">[x]</a></span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo " 
            ";
        }
        // line 33
        echo "        </div>
    </div>
    <div class=\"col-md-9\">
        ";
        // line 36
        if (twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : null))) {
            // line 37
            echo "
            <div class=\"col-md-12\">
                <div class=\"col-md-3\"></div>
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_add_images_gallery", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\">
                    <div class=\"col-md-6 col-sm-12 col-xs-12\">
                        <div class=\"dashboard-div-wrapper bk-clr-two\">
                            <i class=\"fa fa-file-image-o\"></i>
                            <h5>ADD IMAGES</h5>
                        </div>
                    </div></a>

                <div class=\"col-md-3\"></div>
            </div>
        ";
        } else {
            // line 51
            echo "
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 53
                echo "                <div class=\"col-md-2\" style=\"text-align: center;\">
                    <div class=\"thumbnail\" style=\"height: 150px;margin-bottom: 0px;\">
                        ";
                // line 55
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["media"], "media", array()), "preview", array());
                echo "<br/>
                    </div>
                    <div style=\"padding-bottom: 10px;\"><a href='";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_delete_image", array("id" => $this->getAttribute($context["media"], "id", array()), "galleryid" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
                echo "'><span class=\"label label-primary\">Delete</span></a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </div>
        <div class=\"col-md-12 navigation\">
            Pagination ";
            // line 63
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
            echo "
        </div>
        ";
            // line 66
            echo "    ";
        }
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
    ";
        // line 71
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            \$('.delTag').on('click', function (e) {
                //var pid = \$(this).attr(\"data-playgroup-id\");
                //aButtonPressed(pid); DELTE AJAXC FUNCTION
                e.preventDefault();
                var a = \$(this);
                \$.post(a.attr('href'), function (response) {
                    if (response.code == 100) {//dummy check
                        a.parent().fadeOut();
                    }

                }, \"json\");

            });

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
        return "YallaWebsiteBackendBundle:Gallery:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 71,  191 => 70,  186 => 66,  181 => 63,  177 => 61,  167 => 57,  162 => 55,  158 => 53,  154 => 52,  151 => 51,  137 => 40,  132 => 37,  130 => 36,  125 => 33,  121 => 31,  110 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  91 => 25,  88 => 24,  84 => 23,  81 => 22,  79 => 21,  74 => 18,  70 => 16,  67 => 15,  58 => 13,  54 => 12,  51 => 11,  49 => 10,  45 => 8,  40 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <br style="clear: both">*/
/*     <div class='col-md-6 center clear-fix' style="margin-bottom: 1em;border:1px solid black">*/
/*         {% if entity.description != null %} */
/*             {{ entity.description }}*/
/*         {% endif %}*/
/*     </div>*/
/*     <div class='col-md-6 center clear-fix' style="margin-bottom: 1em;border:1px solid black">*/
/*         {% if entity.photographers is not empty  %}*/
/*             Photo Credit : */
/*             {% for ph in entity.photographers %}*/
/*                 <a href='ph.website'>{{ph.name}}</a> - */
/*             {% endfor %}*/
/*             {% else %}*/
/*                 No Photographers Assigned to This Gallery*/
/*         {% endif %}*/
/*     </div>*/
/*     <div class="col-md-3" style="text-align: center; border-right: #001f3f;border-right-width: 4px;border-right-style: double">*/
/*         <div style="min-height: 400px;">*/
/*             {% if entity.media is not empty %}*/
/*                 {%  thumbnail entity.media, 'preview' %}*/
/*                 <p>Image Cover Preview</p>*/
/*             {% else %} <p>No Cover Image Found */
/*                     {% if pagination is not empty %}<br/><strong><a href="{{ path ('backend_gallery_set_preview',  {'id': entity.id})}}">Set Preview Image Now</a></strong> </p> {% endif %}*/
/*             {% endif %}*/
/*                 {% if entity.tags is not empty %}*/
/*                 <h4>Tags</h4>*/
/*                 {% for tag in entity.tags %}*/
/*                     <span class="label label-primary"> {{ tag.name }}<a href="{{path('backend_ajax_delete_tag', {'id':tag.id, 'g':entity.id})}}" class="delTag">[x]</a></span>*/
/*                 {% endfor %} */
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-9">*/
/*         {% if pagination is empty %}*/
/* */
/*             <div class="col-md-12">*/
/*                 <div class="col-md-3"></div>*/
/*                 <a href="{{ path ('backend_gallery_add_images_gallery',  {'id': entity.id})}}">*/
/*                     <div class="col-md-6 col-sm-12 col-xs-12">*/
/*                         <div class="dashboard-div-wrapper bk-clr-two">*/
/*                             <i class="fa fa-file-image-o"></i>*/
/*                             <h5>ADD IMAGES</h5>*/
/*                         </div>*/
/*                     </div></a>*/
/* */
/*                 <div class="col-md-3"></div>*/
/*             </div>*/
/*         {% else %}*/
/* */
/*             {% for media in pagination  %}*/
/*                 <div class="col-md-2" style="text-align: center;">*/
/*                     <div class="thumbnail" style="height: 150px;margin-bottom: 0px;">*/
/*                         {% thumbnail  media.media, 'preview' %}<br/>*/
/*                     </div>*/
/*                     <div style="padding-bottom: 10px;"><a href='{{ path ('backend_gallery_delete_image', {'id': media.id, 'galleryid': entity.id})}}'><span class="label label-primary">Delete</span></a>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div class="col-md-12 navigation">*/
/*             Pagination {{ knp_pagination_render(pagination) }}*/
/*         </div>*/
/*         {#</div>#}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %} */
/*     {{ parent() }}*/
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $('.delTag').on('click', function (e) {*/
/*                 //var pid = $(this).attr("data-playgroup-id");*/
/*                 //aButtonPressed(pid); DELTE AJAXC FUNCTION*/
/*                 e.preventDefault();*/
/*                 var a = $(this);*/
/*                 $.post(a.attr('href'), function (response) {*/
/*                     if (response.code == 100) {//dummy check*/
/*                         a.parent().fadeOut();*/
/*                     }*/
/* */
/*                 }, "json");*/
/* */
/*             });*/
/* */
/*             $('.savepreview').on('click', function () {*/
/*                 var pid = $("select").val();*/
/*                 aButtonPressed(pid);*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
