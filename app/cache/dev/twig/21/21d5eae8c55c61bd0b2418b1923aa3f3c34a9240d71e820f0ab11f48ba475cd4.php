<?php

/* YallaWebsiteBackendBundle:Gallery:show.html.twig */
class __TwigTemplate_aa2ae2644a015bf351bb783ebca417e1e2026db3c95feac08e22a0144f979bf5 extends Twig_Template
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
        $__internal_cec63c4b240e828172636cfa103acae1e263e780ccf1cddd72a3fd20d176626e = $this->env->getExtension("native_profiler");
        $__internal_cec63c4b240e828172636cfa103acae1e263e780ccf1cddd72a3fd20d176626e->enter($__internal_cec63c4b240e828172636cfa103acae1e263e780ccf1cddd72a3fd20d176626e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cec63c4b240e828172636cfa103acae1e263e780ccf1cddd72a3fd20d176626e->leave($__internal_cec63c4b240e828172636cfa103acae1e263e780ccf1cddd72a3fd20d176626e_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_f7a5a2392ecc0e9038b89cc899894e16eb97b1ec1cdb2a6897a67655716116d6 = $this->env->getExtension("native_profiler");
        $__internal_f7a5a2392ecc0e9038b89cc899894e16eb97b1ec1cdb2a6897a67655716116d6->enter($__internal_f7a5a2392ecc0e9038b89cc899894e16eb97b1ec1cdb2a6897a67655716116d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <br style=\"clear: both\">
    <div class='col-md-6 center clear-fix' style=\"margin-bottom: 1em;border:1px solid black\">
        ";
        // line 5
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()) != null)) {
            echo " 
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
            echo "
        ";
        }
        // line 8
        echo "    </div>
    <div class='col-md-6 center clear-fix' style=\"margin-bottom: 1em;border:1px solid black\">
        ";
        // line 10
        if ( !twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photographers", array()))) {
            // line 11
            echo "            Photo Credit : 
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photographers", array()));
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
        if ( !twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media", array()))) {
            // line 22
            echo "                ";
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media", array()), "preview", array());
            // line 23
            echo "                <p>Image Cover Preview</p>
            ";
        } else {
            // line 24
            echo " <p>No Cover Image Found 
                    ";
            // line 25
            if ( !twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
                echo "<br/><strong><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_set_preview", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                echo "\">Set Preview Image Now</a></strong> </p> ";
            }
            // line 26
            echo "            ";
        }
        // line 27
        echo "                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tags", array()))) {
            // line 28
            echo "                <h4>Tags</h4>
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 30
                echo "                    <span class=\"label label-primary\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ajax_delete_tag", array("id" => $this->getAttribute($context["tag"], "id", array()), "g" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        if (twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 37
            echo "
            <div class=\"col-md-12\">
                <div class=\"col-md-3\"></div>
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_add_images_gallery", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_delete_image", array("id" => $this->getAttribute($context["media"], "id", array()), "galleryid" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
        </div>
        ";
            // line 66
            echo "    ";
        }
        
        $__internal_f7a5a2392ecc0e9038b89cc899894e16eb97b1ec1cdb2a6897a67655716116d6->leave($__internal_f7a5a2392ecc0e9038b89cc899894e16eb97b1ec1cdb2a6897a67655716116d6_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83978f842ebc4bf76b98f0c3acb4a4b46060882623a5f9ac13f5d089eebb3376 = $this->env->getExtension("native_profiler");
        $__internal_83978f842ebc4bf76b98f0c3acb4a4b46060882623a5f9ac13f5d089eebb3376->enter($__internal_83978f842ebc4bf76b98f0c3acb4a4b46060882623a5f9ac13f5d089eebb3376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_83978f842ebc4bf76b98f0c3acb4a4b46060882623a5f9ac13f5d089eebb3376->leave($__internal_83978f842ebc4bf76b98f0c3acb4a4b46060882623a5f9ac13f5d089eebb3376_prof);

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
        return array (  211 => 71,  203 => 70,  195 => 66,  190 => 63,  186 => 61,  176 => 57,  171 => 55,  167 => 53,  163 => 52,  160 => 51,  146 => 40,  141 => 37,  139 => 36,  134 => 33,  130 => 31,  119 => 30,  115 => 29,  112 => 28,  109 => 27,  106 => 26,  100 => 25,  97 => 24,  93 => 23,  90 => 22,  88 => 21,  83 => 18,  79 => 16,  76 => 15,  67 => 13,  63 => 12,  60 => 11,  58 => 10,  54 => 8,  49 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
