<?php

/* YallaWebsiteBackendBundle:Profile:index.html.twig */
class __TwigTemplate_6d8a57540b049c80c9200a3a73096e5e7d1407dca0ea6c0b108ca33b7e9bd0be extends Twig_Template
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
        $__internal_fcddf7fa48aff65d63a66d63b978a2509430b803f3c6e238bd53611df985173a = $this->env->getExtension("native_profiler");
        $__internal_fcddf7fa48aff65d63a66d63b978a2509430b803f3c6e238bd53611df985173a->enter($__internal_fcddf7fa48aff65d63a66d63b978a2509430b803f3c6e238bd53611df985173a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Profile:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcddf7fa48aff65d63a66d63b978a2509430b803f3c6e238bd53611df985173a->leave($__internal_fcddf7fa48aff65d63a66d63b978a2509430b803f3c6e238bd53611df985173a_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_951c94a0900e049f96ac9a4f4b445ffb138ff62eb5b580fe15a4008a947ee8f3 = $this->env->getExtension("native_profiler");
        $__internal_951c94a0900e049f96ac9a4f4b445ffb138ff62eb5b580fe15a4008a947ee8f3->enter($__internal_951c94a0900e049f96ac9a4f4b445ffb138ff62eb5b580fe15a4008a947ee8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "<div class=\"row\">
                <div class=\"col-md-4\">
                    
                    ";
        // line 6
        if ( !twig_test_empty($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "media", array()))) {
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "media", array()), "preview", array("class" => "myclass"));
        }
        // line 7
        echo "                    <br>
                    <br>
                    <label>Registered Username</label> : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "<br/>
                    <label>Registered Email</label> : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "<br/>
                    <label>Last Login</label> : ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastlogin", array())), "html", null, true);
        echo "<br/>
                    <label>Display Name</label> : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "displayName", array()), "html", null, true);
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
            if ( !twig_test_empty($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "shortBio", array()))) {
                // line 18
                echo "                        <h2>User Bio : </h2>
                        <p>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "shortBio", array()), "html", null, true);
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
        
        $__internal_951c94a0900e049f96ac9a4f4b445ffb138ff62eb5b580fe15a4008a947ee8f3->leave($__internal_951c94a0900e049f96ac9a4f4b445ffb138ff62eb5b580fe15a4008a947ee8f3_prof);

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
        return array (  100 => 28,  94 => 24,  90 => 23,  86 => 21,  81 => 19,  78 => 18,  76 => 17,  73 => 16,  71 => 15,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
