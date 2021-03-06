<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_f94d8b80bfbb0b6602ec00994d7f0749789ebaa1a7d3ef2c97422c4b6486b3d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_662db6c8ea097c211abef42c17a79dba6af6c4c79ae650b8e5abd00d68785c53 = $this->env->getExtension("native_profiler");
        $__internal_662db6c8ea097c211abef42c17a79dba6af6c4c79ae650b8e5abd00d68785c53->enter($__internal_662db6c8ea097c211abef42c17a79dba6af6c4c79ae650b8e5abd00d68785c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_662db6c8ea097c211abef42c17a79dba6af6c4c79ae650b8e5abd00d68785c53->leave($__internal_662db6c8ea097c211abef42c17a79dba6af6c4c79ae650b8e5abd00d68785c53_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_1b865d59d5b5d4e0bbd35c8a4da1e1395ed8ffe0b90273c8f383be0bf3838c70 = $this->env->getExtension("native_profiler");
        $__internal_1b865d59d5b5d4e0bbd35c8a4da1e1395ed8ffe0b90273c8f383be0bf3838c70->enter($__internal_1b865d59d5b5d4e0bbd35c8a4da1e1395ed8ffe0b90273c8f383be0bf3838c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1b865d59d5b5d4e0bbd35c8a4da1e1395ed8ffe0b90273c8f383be0bf3838c70->leave($__internal_1b865d59d5b5d4e0bbd35c8a4da1e1395ed8ffe0b90273c8f383be0bf3838c70_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% block sonata_type_color_selector_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% spaceless %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 var select2FormatColorSelect = function format(state) {*/
/*                     if (!state.id || state.disabled) {*/
/*                         return state.text;*/
/*                     }*/
/* */
/*                     return ' <i class="fa fa-square" style="color: '+ state.id +'"></i> ' + state.text;*/
/*                 };*/
/* */
/*                 $('#{{ id }}').select2({*/
/*                     formatResult:    select2FormatColorSelect,*/
/*                     formatSelection: select2FormatColorSelect,*/
/*                     width:           '100%',*/
/*                     escapeMarkup:    function(m) { return m; }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_color_selector_widget %}*/
/* */
