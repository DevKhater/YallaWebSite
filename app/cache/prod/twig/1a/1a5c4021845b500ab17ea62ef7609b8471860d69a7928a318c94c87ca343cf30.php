<?php

/* YallaWebsiteBackendBundle:Profile:index.html.twig */
class __TwigTemplate_267d95ddab94e0bd51db1131fa678725861acddd483e5ffce51a5c18d229030f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Profile:base_profile.html.twig", "YallaWebsiteBackendBundle:Profile:index.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Profile:base_profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
                <div class=\"col-md-4\">
                    
                    ";
        // line 6
        if ( !twig_test_empty($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "media", array()))) {
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "media", array()), "preview", array("class" => "myclass"));
        }
        // line 7
        echo "                    <br>
                    <br>
                    <label>Registered Username</label> : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "<br/>
                    <label>Registered Email</label> : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
        echo "<br/>
                    <label>Last Login</label> : ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastlogin", array())), "html", null, true);
        echo "<br/>
                    <label>Display Name</label> : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "displayName", array()), "html", null, true);
        echo "<br/>
                </div>
                <div class=\"col-md-8\">
                    ";
        // line 15
        if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "shortBio", array(), "any", true, true)) {
            // line 16
            echo "                    <div class=\"alert alert-info\">
                        ";
            // line 17
            if ( !twig_test_empty($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "shortBio", array()))) {
                // line 18
                echo "                        <h2>User Bio : </h2>
                        <p>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "shortBio", array()), "html", null, true);
                echo "</p>
                        ";
            } else {
                // line 21
                echo "                        <p>There is No Biography To Display</p>
                        ";
            }
            // line 23
            echo "                    </div>
                    ";
        }
        // line 24
        echo "    
                    <div class=\"form-group col-md-8\">
                        <h3>Change Your Password</h3>
                        <br>
                        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-warning\">Change Password</a>
                    </div>
                </div>
            </div>

";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Profile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  85 => 24,  81 => 23,  77 => 21,  72 => 19,  69 => 18,  67 => 17,  64 => 16,  62 => 15,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Profile:base_profile.html.twig" %}*/
/* {% block controlleraction  %}*/
/* <div class="row">*/
/*                 <div class="col-md-4">*/
/*                     */
/*                     {% if entities.media is not empty%}{% media entities.media, 'preview' with {'class': 'myclass'}%}{% endif %}*/
/*                     <br>*/
/*                     <br>*/
/*                     <label>Registered Username</label> : {{ app.user.username }}<br/>*/
/*                     <label>Registered Email</label> : {{ app.user.email }}<br/>*/
/*                     <label>Last Login</label> : {{ app.user.lastlogin|date() }}<br/>*/
/*                     <label>Display Name</label> : {{ entities.displayName }}<br/>*/
/*                 </div>*/
/*                 <div class="col-md-8">*/
/*                     {% if entities.shortBio is defined %}*/
/*                     <div class="alert alert-info">*/
/*                         {% if entities.shortBio is not empty %}*/
/*                         <h2>User Bio : </h2>*/
/*                         <p>{{ entities.shortBio }}</p>*/
/*                         {% else %}*/
/*                         <p>There is No Biography To Display</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% endif %}    */
/*                     <div class="form-group col-md-8">*/
/*                         <h3>Change Your Password</h3>*/
/*                         <br>*/
/*                         <a href="{{path ('fos_user_change_password')}}" class="btn btn-warning">Change Password</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* {% endblock %}*/
