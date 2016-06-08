<?php

/* YallaWebsiteBackendBundle:Default:index.html.twig */
class __TwigTemplate_16a2c3616f57582d4b166387456c6bb65b6f05f420a2d370631e24c6c2384634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_159733fb26635f6afc128e0745543b940841dff60b232d27475c6a0e39271ce3 = $this->env->getExtension("native_profiler");
        $__internal_159733fb26635f6afc128e0745543b940841dff60b232d27475c6a0e39271ce3->enter($__internal_159733fb26635f6afc128e0745543b940841dff60b232d27475c6a0e39271ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_159733fb26635f6afc128e0745543b940841dff60b232d27475c6a0e39271ce3->leave($__internal_159733fb26635f6afc128e0745543b940841dff60b232d27475c6a0e39271ce3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_373e751c5c0e699a10d0a9f5d4c113788f65db86c041fecf9a4443af36685261 = $this->env->getExtension("native_profiler");
        $__internal_373e751c5c0e699a10d0a9f5d4c113788f65db86c041fecf9a4443af36685261->enter($__internal_373e751c5c0e699a10d0a9f5d4c113788f65db86c041fecf9a4443af36685261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Super Admin Section</h4>
        </div>
    </div>
    <div class=\"container\">
        ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            echo " 
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("backend_user_index");
            echo "\">
                        <div class=\"dashboard-div-wrapper\" style=\"background-color: #CDCB5E\">
                            <i class=\"fa dashboard-div-icon\">U</i>
                            <h5>USERS</h5>
                            <h6>Total Number <span class=\"badge badge-inverse\">";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "html", null, true);
            echo "</span></h6>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("backend_homepage_index");
            echo "\">
                        <div class=\"dashboard-div-wrapper\" style=\"background-color: #777\">
                            <i class=\"fa fa-star dashboard-div-icon\"></i>
                            <h5>Homepage</h5>
                            <h6>Homepage Settings</h6>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("backend_ads_manager_index");
            echo "\">
                        <div class=\"dashboard-div-wrapper\" style=\"background-color: #dd1144\">
                            <i class=\"fa dashboard-div-icon\">A</i>
                            <h5>Advertisments</h5>
                            <h6>Total Number <span class=\"badge badge-inverse\">7</span></h6>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("backend_member_index");
            echo "\">
                        <div class=\"dashboard-div-wrapper\" style=\"background-color: #000\">
                            <i class=\"fa dashboard-div-icon\">M</i>
                            <h5>Members</h5>
                            <h6>Total Number <span class=\"badge badge-inverse\">";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["members"]) ? $context["members"] : $this->getContext($context, "members")), "html", null, true);
            echo "</span></h6>
                        </div>
                    </a>
                </div>
            </div>
        ";
        }
        // line 50
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Dashboard</h4>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 58
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_E")) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("backend_event_index");
            echo "\">";
        }
        // line 59
        echo "                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"dashboard-div-wrapper bk-clr-one\">
                        <i class=\"fa fa-venus dashboard-div-icon\"></i>
                        <h5>Events</h5>
                        <h6>Total Number <span class=\"badge badge-inverse\">";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "html", null, true);
        echo "</span></h6>
                    </div>
                </div>
                ";
        // line 66
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_E")) {
            echo " </a>";
        }
        // line 67
        echo "
            ";
        // line 68
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_V")) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("backend_venue_index");
            echo "\">";
        }
        // line 69
        echo "                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"dashboard-div-wrapper bk-clr-two\">
                        <i class=\"fa fa-edit dashboard-div-icon\"></i>

                        <h5>Venues</h5>
                        <h6>Total Number <span class=\"badge badge-inverse\">";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["venues"]) ? $context["venues"] : $this->getContext($context, "venues")), "html", null, true);
        echo "</span></h6>
                    </div>
                </div>
                ";
        // line 77
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_V")) {
            echo " </a>";
        }
        // line 78
        echo "
            ";
        // line 79
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_G")) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("backend_gallery_index");
            echo "\">";
        }
        // line 80
        echo "                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"dashboard-div-wrapper bk-clr-three\">
                        <i class=\"fa fa-cogs dashboard-div-icon\"></i>

                        <h5>Galleries</h5>
                        <h6>Total Number <span class=\"badge badge-inverse\">";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["galleries"]) ? $context["galleries"] : $this->getContext($context, "galleries")), "html", null, true);
        echo "</span></h6>
                    </div>
                </div>
                ";
        // line 88
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_G")) {
            echo " </a>";
        }
        // line 89
        echo "
            ";
        // line 90
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_A")) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("backend_article_index");
            echo "\">";
        }
        // line 91
        echo "                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"dashboard-div-wrapper bk-clr-four\">
                        <i class=\"fa fa-bell-o dashboard-div-icon\"></i>

                        <h5>Articles</h5>
                        <h6>Total Number <span class=\"badge badge-inverse\">";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
        echo "</span></h6>
                    </div>
                </div>
                ";
        // line 99
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN_A")) {
            echo " </a>";
        }
        // line 100
        echo "
            <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("backend_artist_index");
        echo "\">
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"dashboard-div-wrapper bk-clr-four\">
                        <i class=\"fa fa-bell-o dashboard-div-icon\"></i>

                        <h5>Artists</h5>
                        <h6>Total Number <span class=\"badge badge-inverse\">";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["artists"]) ? $context["artists"] : $this->getContext($context, "artists")), "html", null, true);
        echo "</span></h6>
                    </div>
                </div>
            </a>

        </div>
    </div>

    ";
        
        $__internal_373e751c5c0e699a10d0a9f5d4c113788f65db86c041fecf9a4443af36685261->leave($__internal_373e751c5c0e699a10d0a9f5d4c113788f65db86c041fecf9a4443af36685261_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 107,  222 => 101,  219 => 100,  215 => 99,  209 => 96,  202 => 91,  196 => 90,  193 => 89,  189 => 88,  183 => 85,  176 => 80,  170 => 79,  167 => 78,  163 => 77,  157 => 74,  150 => 69,  144 => 68,  141 => 67,  137 => 66,  131 => 63,  125 => 59,  119 => 58,  109 => 50,  100 => 44,  93 => 40,  81 => 31,  69 => 22,  61 => 17,  54 => 13,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Super Admin Section</h4>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container">*/
/*         {% if is_granted('ROLE_SUPER_ADMIN') %} */
/*             <div class="row">*/
/*                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                     <a href="{{ path ('backend_user_index')}}">*/
/*                         <div class="dashboard-div-wrapper" style="background-color: #CDCB5E">*/
/*                             <i class="fa dashboard-div-icon">U</i>*/
/*                             <h5>USERS</h5>*/
/*                             <h6>Total Number <span class="badge badge-inverse">{{users}}</span></h6>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                     <a href="{{ path ('backend_homepage_index')}}">*/
/*                         <div class="dashboard-div-wrapper" style="background-color: #777">*/
/*                             <i class="fa fa-star dashboard-div-icon"></i>*/
/*                             <h5>Homepage</h5>*/
/*                             <h6>Homepage Settings</h6>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                     <a href="{{ path ('backend_ads_manager_index')}}">*/
/*                         <div class="dashboard-div-wrapper" style="background-color: #dd1144">*/
/*                             <i class="fa dashboard-div-icon">A</i>*/
/*                             <h5>Advertisments</h5>*/
/*                             <h6>Total Number <span class="badge badge-inverse">7</span></h6>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                     <a href="{{ path ('backend_member_index')}}">*/
/*                         <div class="dashboard-div-wrapper" style="background-color: #000">*/
/*                             <i class="fa dashboard-div-icon">M</i>*/
/*                             <h5>Members</h5>*/
/*                             <h6>Total Number <span class="badge badge-inverse">{{members}}</span></h6>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Dashboard</h4>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             {% if is_granted('ROLE_ADMIN_E') %} <a href="{{ path ('backend_event_index')}}">{% endif%}*/
/*                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                     <div class="dashboard-div-wrapper bk-clr-one">*/
/*                         <i class="fa fa-venus dashboard-div-icon"></i>*/
/*                         <h5>Events</h5>*/
/*                         <h6>Total Number <span class="badge badge-inverse">{{events}}</span></h6>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% if is_granted('ROLE_ADMIN_E') %} </a>{% endif%}*/
/* */
/*             {% if is_granted('ROLE_ADMIN_V') %} <a href="{{ path ('backend_venue_index')}}">{% endif%}*/
/*                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                     <div class="dashboard-div-wrapper bk-clr-two">*/
/*                         <i class="fa fa-edit dashboard-div-icon"></i>*/
/* */
/*                         <h5>Venues</h5>*/
/*                         <h6>Total Number <span class="badge badge-inverse">{{venues}}</span></h6>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% if is_granted('ROLE_ADMIN_V') %} </a>{% endif%}*/
/* */
/*             {% if is_granted('ROLE_ADMIN_G') %} <a href="{{ path ('backend_gallery_index')}}">{% endif%}*/
/*                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                     <div class="dashboard-div-wrapper bk-clr-three">*/
/*                         <i class="fa fa-cogs dashboard-div-icon"></i>*/
/* */
/*                         <h5>Galleries</h5>*/
/*                         <h6>Total Number <span class="badge badge-inverse">{{galleries}}</span></h6>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% if is_granted('ROLE_ADMIN_G') %} </a>{% endif%}*/
/* */
/*             {% if is_granted('ROLE_ADMIN_A') %} <a href="{{ path ('backend_article_index')}}">{% endif%}*/
/*                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                     <div class="dashboard-div-wrapper bk-clr-four">*/
/*                         <i class="fa fa-bell-o dashboard-div-icon"></i>*/
/* */
/*                         <h5>Articles</h5>*/
/*                         <h6>Total Number <span class="badge badge-inverse">{{articles}}</span></h6>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% if is_granted('ROLE_ADMIN_A') %} </a>{% endif%}*/
/* */
/*             <a href="{{ path ('backend_artist_index')}}">*/
/*                 <div class="col-md-3 col-sm-3 col-xs-6">*/
/*                     <div class="dashboard-div-wrapper bk-clr-four">*/
/*                         <i class="fa fa-bell-o dashboard-div-icon"></i>*/
/* */
/*                         <h5>Artists</h5>*/
/*                         <h6>Total Number <span class="badge badge-inverse">{{artists}}</span></h6>*/
/*                     </div>*/
/*                 </div>*/
/*             </a>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     {#    <div class="row">*/
/*             <div class="col-md-6">*/
/*                 <div class="notice-board">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             Active  Notice Panel */
/*                             <div class="pull-right">*/
/*                                 <div class="dropdown">*/
/*                                     <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">*/
/*                                         <span class="glyphicon glyphicon-cog"></span>*/
/*                                         <span class="caret"></span>*/
/*                                     </button>*/
/*                                     <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">*/
/*                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Refresh</a></li>*/
/*                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Logout</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*     */
/*                             <ul>*/
/*     */
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="glyphicon glyphicon-align-left text-success"></span> */
/*                                         Lorem ipsum dolor sit amet ipsum dolor sit amet*/
/*                                         <span class="label label-warning"> Just now </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="glyphicon glyphicon-info-sign text-danger"></span>  */
/*                                         Lorem ipsum dolor sit amet ipsum dolor sit amet*/
/*                                         <span class="label label-info"> 2 min chat</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="glyphicon glyphicon-comment  text-warning"></span>  */
/*                                         Lorem ipsum dolor sit amet ipsum dolor sit amet*/
/*                                         <span class="label label-success">GO ! </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="glyphicon glyphicon-edit  text-danger"></span>  */
/*                                         Lorem ipsum dolor sit amet ipsum dolor sit amet*/
/*                                         <span class="label label-success">Let's have it </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*     */
/*     */
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="panel-footer">*/
/*                             <a href="#" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-repeat"></i> Just A Small Footer Button</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <hr>*/
/*                 <div class="text-center alert alert-warning">*/
/*                     <a href="#" class="btn btn-social btn-facebook">*/
/*                         <i class="fa fa-facebook"></i>&nbsp; Facebook</a>*/
/*                     <a href="#" class="btn btn-social btn-google">*/
/*                         <i class="fa fa-google-plus"></i>&nbsp; Google</a>*/
/*                     <a href="#" class="btn btn-social btn-twitter">*/
/*                         <i class="fa fa-twitter"></i>&nbsp; Twitter </a>*/
/*                     <a href="#" class="btn btn-social btn-linkedin">*/
/*                         <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>*/
/*                 </div>*/
/*     */
/*                 <hr>*/
/*                 <div class="table-responsive">*/
/*                     <table class="table table-striped table-bordered table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Ref. No.</th>*/
/*                                 <th>Date</th>*/
/*                                 <th>Amount</th>*/
/*                                 <th>Status</th>*/
/*                                 <th>Delivery On </th>*/
/*                                 <th># #</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*     */
/*                             <tr>*/
/*                                 <td># 2501</td>*/
/*                                 <td>01/22/2015 </td>*/
/*                                 <td>*/
/*                                     <label class="label label-info">300 USD </label>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <label class="label label-success">Delivered</label></td>*/
/*                                 <td>01/25/2015</td>*/
/*                                 <td> <a href="#" class="btn btn-xs btn-danger">View</a> </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td># 15091</td>*/
/*                                 <td>12/12/2014 </td>*/
/*                                 <td>*/
/*                                     <label class="label label-danger">7000 USD </label>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <label class="label label-warning">Shipped</label></td>*/
/*                                 <td>N/A</td>*/
/*                                 <td> <a href="#" class="btn btn-xs btn-success">View</a> </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td># 11291</td>*/
/*                                 <td>12/03/2014 </td>*/
/*                                 <td>*/
/*                                     <label class="label label-warning">7000 USD </label>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <label class="label label-success">Delivered</label></td>*/
/*                                 <td>01/23/2015</td>*/
/*                                 <td> <a href="#" class="btn btn-xs btn-primary">View</a> </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td># 1808</td>*/
/*                                 <td>11/10/2014 </td>*/
/*                                 <td>*/
/*                                     <label class="label label-success">2000 USD </label>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <label class="label label-info">Returned</label></td>*/
/*                                 <td>N/A</td>*/
/*                                 <td> <a href="#" class="btn btn-xs btn-danger">View</a> </td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="alert alert-danger">*/
/*                     This is a simple admin template that can be used for your small project or may be large projects. This is free for personal and commercial use.*/
/*                 </div>*/
/*                 <hr>*/
/*                 <div class="Compose-Message">               */
/*                     <div class="panel panel-success">*/
/*                         <div class="panel-heading">*/
/*                             Compose New Message */
/*                         </div>*/
/*                         <div class="panel-body">*/
/*     */
/*                             <label>Enter Recipient Name : </label>*/
/*                             <input class="form-control" type="text">*/
/*                             <label>Enter Subject :  </label>*/
/*                             <input class="form-control" type="text">*/
/*                             <label>Enter Message : </label>*/
/*                             <textarea rows="9" class="form-control"></textarea>*/
/*                             <hr>*/
/*                             <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-envelope"></span> Send Message </a>&nbsp;*/
/*                             <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-tags"></span>  Save To Drafts </a>*/
/*                         </div>*/
/*                         <div class="panel-footer text-muted">*/
/*                             <strong>Note : </strong>Please note that we track all messages so don't send any spams.*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>#}*/
/* {% endblock %}*/
