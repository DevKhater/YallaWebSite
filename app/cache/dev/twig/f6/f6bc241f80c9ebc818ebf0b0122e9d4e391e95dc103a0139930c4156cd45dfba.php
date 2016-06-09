<?php

/* KunstmaanVotingBundle:UpDown:vote.html.twig */
class __TwigTemplate_102563954c00e72bda9aa468ea05d3fdb98f7404af7a16b222a06a314d54b8da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b47b0a1c2d1c24794eaf391571a094e9a69fa69f91e2395683901184f5a40534 = $this->env->getExtension("native_profiler");
        $__internal_b47b0a1c2d1c24794eaf391571a094e9a69fa69f91e2395683901184f5a40534->enter($__internal_b47b0a1c2d1c24794eaf391571a094e9a69fa69f91e2395683901184f5a40534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:UpDown:vote.html.twig"));

        // line 1
        if ( !array_key_exists("reference", $context)) {
            // line 2
            echo "    ";
            $context["reference"] = "";
        }
        // line 4
        echo "
<div id=\"vote";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
        echo "\">
    ";
        // line 6
        if ((array_key_exists("hideUpVote", $context) && (isset($context["hideUpVote"]) ? $context["hideUpVote"] : $this->getContext($context, "hideUpVote")))) {
            // line 7
            echo "
    ";
        } else {
            // line 9
            echo "
        <a href=\"#\" onclick=\"registerUpVote";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
            echo "();return false;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vote up"), "html", null, true);
            echo "</a>

        <script type=\"text/javascript\">
            function registerUpVote";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
            echo "() {
                jQuery.ajax({
                    url : '";
            // line 15
            echo $this->env->getExtension('routing')->getUrl("voting_upvote");
            echo "?reference=";
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
            echo "'";
            if (array_key_exists("upValue", $context)) {
                echo "+'&value=";
                echo twig_escape_filter($this->env, (isset($context["upValue"]) ? $context["upValue"] : $this->getContext($context, "upValue")), "html", null, true);
                echo "'";
            }
            echo ",
                    success: function(data) {
                        jQuery('#vote";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
            echo "').html(data);
                    }
                });
            }
        </script>

    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if ((array_key_exists("hideDownVote", $context) && (isset($context["hideDownVote"]) ? $context["hideDownVote"] : $this->getContext($context, "hideDownVote")))) {
            // line 26
            echo "
    ";
        } else {
            // line 28
            echo "
        <a href=\"#\" onclick=\"registerDownVote";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
            echo "();return false;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vote down"), "html", null, true);
            echo "</a>

        <script type=\"text/javascript\">
            function registerDownVote";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
            echo "() {
                jQuery.ajax({
                    url : '";
            // line 34
            echo $this->env->getExtension('routing')->getUrl("voting_downvote");
            echo "?reference=";
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
            echo "'";
            if (array_key_exists("downValue", $context)) {
                echo "+'&value=";
                echo twig_escape_filter($this->env, (isset($context["downValue"]) ? $context["downValue"] : $this->getContext($context, "downValue")), "html", null, true);
                echo "'";
            }
            echo ",
                    success: function(data) {
                        jQuery('#vote";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
            echo "').html(data);
                    }
                });
            }
        </script>

    ";
        }
        // line 43
        echo "</div>
";
        
        $__internal_b47b0a1c2d1c24794eaf391571a094e9a69fa69f91e2395683901184f5a40534->leave($__internal_b47b0a1c2d1c24794eaf391571a094e9a69fa69f91e2395683901184f5a40534_prof);

    }

    public function getTemplateName()
    {
        return "KunstmaanVotingBundle:UpDown:vote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  118 => 36,  105 => 34,  100 => 32,  92 => 29,  89 => 28,  85 => 26,  83 => 25,  80 => 24,  70 => 17,  57 => 15,  52 => 13,  44 => 10,  41 => 9,  37 => 7,  35 => 6,  31 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if reference is not defined %}*/
/*     {% set reference = '' %}*/
/* {% endif %}*/
/* */
/* <div id="vote{{ reference }}">*/
/*     {% if hideUpVote is defined and hideUpVote %}*/
/* */
/*     {% else %}*/
/* */
/*         <a href="#" onclick="registerUpVote{{ reference }}();return false;">{{ "Vote up" | trans }}</a>*/
/* */
/*         <script type="text/javascript">*/
/*             function registerUpVote{{ reference }}() {*/
/*                 jQuery.ajax({*/
/*                     url : '{{ url('voting_upvote') }}?reference={{ reference }}'{% if upValue is defined %}+'&value={{ upValue }}'{% endif %},*/
/*                     success: function(data) {*/
/*                         jQuery('#vote{{ reference }}').html(data);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         </script>*/
/* */
/*     {% endif %}*/
/* */
/*     {% if hideDownVote is defined and hideDownVote %}*/
/* */
/*     {% else %}*/
/* */
/*         <a href="#" onclick="registerDownVote{{ reference }}();return false;">{{ "Vote down" | trans }}</a>*/
/* */
/*         <script type="text/javascript">*/
/*             function registerDownVote{{ reference }}() {*/
/*                 jQuery.ajax({*/
/*                     url : '{{ url('voting_downvote') }}?reference={{ reference }}'{% if downValue is defined %}+'&value={{ downValue }}'{% endif %},*/
/*                     success: function(data) {*/
/*                         jQuery('#vote{{ reference }}').html(data);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         </script>*/
/* */
/*     {% endif %}*/
/* </div>*/
/* */
