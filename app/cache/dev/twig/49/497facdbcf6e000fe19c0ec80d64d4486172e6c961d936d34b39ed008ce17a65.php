<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3d6deffdaf70cc3b0e8cbc3f300a74d18d378f11aa2951d5569a8348894af6c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_139fd83b9d62ba11096e9c9cc8baf935839077f6c476dc59e0a719e389728e40 = $this->env->getExtension("native_profiler");
        $__internal_139fd83b9d62ba11096e9c9cc8baf935839077f6c476dc59e0a719e389728e40->enter($__internal_139fd83b9d62ba11096e9c9cc8baf935839077f6c476dc59e0a719e389728e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_139fd83b9d62ba11096e9c9cc8baf935839077f6c476dc59e0a719e389728e40->leave($__internal_139fd83b9d62ba11096e9c9cc8baf935839077f6c476dc59e0a719e389728e40_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0179d872201ae69e4103b7f5618b44731837f85acc71bfbdb93608779dc980a = $this->env->getExtension("native_profiler");
        $__internal_e0179d872201ae69e4103b7f5618b44731837f85acc71bfbdb93608779dc980a->enter($__internal_e0179d872201ae69e4103b7f5618b44731837f85acc71bfbdb93608779dc980a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            
            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6\">
        <form  class=\"form-signin\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <h2 class=\"form-signin-heading\">Please sign in</h2>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <label for=\"username\" class=\"sr-only\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" required autofocus/>

            <label for=\"password\" class=\"sr-only\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
            <div class=\"checkbox\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"><span class=\"glyphicon glyphicon-user\"></span> &nbsp;Log Me In</button>
        </form>
        
        
    ";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "        <div class=\"alert alert-danger\" role=\"alert\" style=\"margin-top: 20px;\">
            <a href=\"#\" class=\"alert-link\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</a>
        </div>
    ";
        }
        // line 33
        echo "        </div>
        <div class=\"col-md-3\"></div>
        </div>
    </div> <!-- /container -->
";
        
        $__internal_e0179d872201ae69e4103b7f5618b44731837f85acc71bfbdb93608779dc980a->leave($__internal_e0179d872201ae69e4103b7f5618b44731837f85acc71bfbdb93608779dc980a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  87 => 30,  84 => 29,  82 => 28,  73 => 22,  66 => 18,  61 => 16,  57 => 15,  52 => 13,  47 => 11,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             */
/*             <div class="col-md-3"></div>*/
/*             <div class="col-md-6">*/
/*         <form  class="form-signin" action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <h2 class="form-signin-heading">Please sign in</h2>*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <label for="username" class="sr-only">{{ 'security.login.username'|trans }}</label>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control" required autofocus/>*/
/* */
/*             <label for="password" class="sr-only">{{ 'security.login.password'|trans }}</label>*/
/*             <input type="password" id="password" name="_password" required="required" class="form-control" />*/
/*             <div class="checkbox">*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                 <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*             </div>*/
/*             <button class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In</button>*/
/*         </form>*/
/*         */
/*         */
/*     {% if error %}*/
/*         <div class="alert alert-danger" role="alert" style="margin-top: 20px;">*/
/*             <a href="#" class="alert-link">{{ error.messageKey|trans(error.messageData, 'security') }}</a>*/
/*         </div>*/
/*     {% endif %}*/
/*         </div>*/
/*         <div class="col-md-3"></div>*/
/*         </div>*/
/*     </div> <!-- /container -->*/
/* {% endblock fos_user_content %}*/
/* */
