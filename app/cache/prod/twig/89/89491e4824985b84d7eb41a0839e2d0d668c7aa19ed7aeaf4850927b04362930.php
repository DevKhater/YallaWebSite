<?php

/* KunstmaanVotingBundle:UpDown:vote.html.twig */
class __TwigTemplate_b7c4700fafda9c34e11592f04b150473e4f29242620fbd08529086c996be130c extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
        echo "\">
    ";
        // line 6
        if ((array_key_exists("hideUpVote", $context) && (isset($context["hideUpVote"]) ? $context["hideUpVote"] : null))) {
            // line 7
            echo "
    ";
        } else {
            // line 9
            echo "
        <a href=\"#\" onclick=\"registerUpVote";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
            echo "();return false;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vote up"), "html", null, true);
            echo "</a>

        <script type=\"text/javascript\">
            function registerUpVote";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
            echo "() {
                jQuery.ajax({
                    url : '";
            // line 15
            echo $this->env->getExtension('routing')->getUrl("voting_upvote");
            echo "?reference=";
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
            echo "'";
            if (array_key_exists("upValue", $context)) {
                echo "+'&value=";
                echo twig_escape_filter($this->env, (isset($context["upValue"]) ? $context["upValue"] : null), "html", null, true);
                echo "'";
            }
            echo ",
                    success: function(data) {
                        jQuery('#vote";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
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
        if ((array_key_exists("hideDownVote", $context) && (isset($context["hideDownVote"]) ? $context["hideDownVote"] : null))) {
            // line 26
            echo "
    ";
        } else {
            // line 28
            echo "
        <a href=\"#\" onclick=\"registerDownVote";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
            echo "();return false;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vote down"), "html", null, true);
            echo "</a>

        <script type=\"text/javascript\">
            function registerDownVote";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
            echo "() {
                jQuery.ajax({
                    url : '";
            // line 34
            echo $this->env->getExtension('routing')->getUrl("voting_downvote");
            echo "?reference=";
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
            echo "'";
            if (array_key_exists("downValue", $context)) {
                echo "+'&value=";
                echo twig_escape_filter($this->env, (isset($context["downValue"]) ? $context["downValue"] : null), "html", null, true);
                echo "'";
            }
            echo ",
                    success: function(data) {
                        jQuery('#vote";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
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
        return array (  125 => 43,  115 => 36,  102 => 34,  97 => 32,  89 => 29,  86 => 28,  82 => 26,  80 => 25,  77 => 24,  67 => 17,  54 => 15,  49 => 13,  41 => 10,  38 => 9,  34 => 7,  32 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
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
