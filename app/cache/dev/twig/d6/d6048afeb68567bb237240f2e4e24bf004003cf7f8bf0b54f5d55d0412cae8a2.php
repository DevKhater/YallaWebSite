<?php

/* YallaWebsiteBackendBundle:User:index.html.twig */
class __TwigTemplate_2600e6d7fc58934b73ba074a1074d1081861ac17919e9140a891296155be1d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:User:base_user.html.twig", "YallaWebsiteBackendBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:User:base_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cfbea29a6d52e0427162872f11c8a9d45b1d30a376d080b6ef08bd4d4970906 = $this->env->getExtension("native_profiler");
        $__internal_9cfbea29a6d52e0427162872f11c8a9d45b1d30a376d080b6ef08bd4d4970906->enter($__internal_9cfbea29a6d52e0427162872f11c8a9d45b1d30a376d080b6ef08bd4d4970906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cfbea29a6d52e0427162872f11c8a9d45b1d30a376d080b6ef08bd4d4970906->leave($__internal_9cfbea29a6d52e0427162872f11c8a9d45b1d30a376d080b6ef08bd4d4970906_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_503a9d9d900996c5f44ca379235253cdd1cc6bd8b8df3c200008d9f6171d05ea = $this->env->getExtension("native_profiler");
        $__internal_503a9d9d900996c5f44ca379235253cdd1cc6bd8b8df3c200008d9f6171d05ea->enter($__internal_503a9d9d900996c5f44ca379235253cdd1cc6bd8b8df3c200008d9f6171d05ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    ";
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 4
            echo "        <div class=\"alert alert-info\" role=\"alert\">
            <strong>No Userss!</strong> Found in database.
        </div>
    ";
        } else {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Users Information
                    </div>
                    <div class=\"panel-body\">
                        <p><strong>Number of Users : </strong><span class=\"badge badge-inverse\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))), "html", null, true);
            echo "</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        User Listing
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover zebra\">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Last Login</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 41
                echo "                                        <tr>
                                            <th style=\"text-align: center;\">
                                            ";
                // line 43
                if (($this->getAttribute($context["user"], "username", array()) != "admin")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\"><button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-pencil\"></i>Delete</button></a></th> ";
                }
                // line 44
                echo "                                            ";
                if (($this->getAttribute($context["user"], "username", array()) != "admin")) {
                    echo "<td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_user_addpriv", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "</a></td>";
                }
                // line 45
                echo "                                            ";
                if (($this->getAttribute($context["user"], "username", array()) == "admin")) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "</td>";
                }
                // line 46
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
                                            <td style=\"text-align: center;\">
                                                ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    echo " 
                                                    ";
                    // line 49
                    if (($context["role"] == "ROLE_SUPER_ADMIN")) {
                        echo "<span class=\"badge badge-admin\">The Admin</span>";
                    }
                    // line 50
                    echo "                                                    ";
                    if (($context["role"] == "ROLE_ADMIN_A")) {
                        echo "<span class=\"badge badge-info\">Articles Admin</span>";
                    }
                    // line 51
                    echo "                                                    ";
                    if (($context["role"] == "ROLE_ADMIN_V")) {
                        echo "<span class=\"badge badge-warning\">Venues Admin</span>";
                    }
                    // line 52
                    echo "                                                    ";
                    if (($context["role"] == "ROLE_ADMIN_E")) {
                        echo "<span class=\"badge badge-important\">Events Admin</span>";
                    }
                    // line 53
                    echo "                                                    ";
                    if (($context["role"] == "ROLE_ADMIN_G")) {
                        echo "<span class=\"badge badge-inverse\">Galleries Admin</span>";
                    }
                    // line 54
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                                            </td>
                                            <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastlogin", array()), "F jS \\a\\t g:ia"), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class=\"panel-footer\">
                        ....
                    </div>
                </div>
            </div>        

        </div>

";
        }
        
        $__internal_503a9d9d900996c5f44ca379235253cdd1cc6bd8b8df3c200008d9f6171d05ea->leave($__internal_503a9d9d900996c5f44ca379235253cdd1cc6bd8b8df3c200008d9f6171d05ea_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 59,  161 => 56,  158 => 55,  152 => 54,  147 => 53,  142 => 52,  137 => 51,  132 => 50,  128 => 49,  122 => 48,  116 => 46,  109 => 45,  100 => 44,  94 => 43,  90 => 41,  86 => 40,  58 => 15,  49 => 8,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:User:base_user.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     {% if entities is empty %}*/
/*         <div class="alert alert-info" role="alert">*/
/*             <strong>No Userss!</strong> Found in database.*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Users Information*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <p><strong>Number of Users : </strong><span class="badge badge-inverse">{{ entities|length }}</span></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/* */
/*             <div class="col-md-12 col-sm-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         User Listing*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-striped table-bordered table-hover zebra">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th></th>*/
/*                                         <th>Username</th>*/
/*                                         <th>Email</th>*/
/*                                         <th>Roles</th>*/
/*                                         <th>Last Login</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for user in entities %}*/
/*                                         <tr>*/
/*                                             <th style="text-align: center;">*/
/*                                             {% if user.username != 'admin' %}<a href="{{path ('backend_user_delete',  {'id': user.id}) }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i>Delete</button></a></th> {% endif %}*/
/*                                             {% if user.username != 'admin' %}<td><a href="{{ path ('backend_user_addpriv',  {'id': user.id})}}">{{user.username}}</a></td>{% endif %}*/
/*                                             {% if user.username == 'admin' %}<td>{{user.username}}</td>{% endif %}*/
/*                                             <td>{{user.email}}</td>*/
/*                                             <td style="text-align: center;">*/
/*                                                 {% for role in user.roles %} */
/*                                                     {% if role == "ROLE_SUPER_ADMIN" %}<span class="badge badge-admin">The Admin</span>{% endif %}*/
/*                                                     {% if role == 'ROLE_ADMIN_A' %}<span class="badge badge-info">Articles Admin</span>{% endif %}*/
/*                                                     {% if role == 'ROLE_ADMIN_V' %}<span class="badge badge-warning">Venues Admin</span>{% endif %}*/
/*                                                     {% if role == 'ROLE_ADMIN_E' %}<span class="badge badge-important">Events Admin</span>{% endif %}*/
/*                                                     {% if role == 'ROLE_ADMIN_G' %}<span class="badge badge-inverse">Galleries Admin</span>{% endif %}*/
/*                                                 {% endfor %}*/
/*                                             </td>*/
/*                                             <td>{{user.lastlogin|date("F jS \\a\\t g:ia")}}</td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*                         ....*/
/*                     </div>*/
/*                 </div>*/
/*             </div>        */
/* */
/*         </div>*/
/* */
/* {% endif %}*/
/* {% endblock %}*/
/* */
