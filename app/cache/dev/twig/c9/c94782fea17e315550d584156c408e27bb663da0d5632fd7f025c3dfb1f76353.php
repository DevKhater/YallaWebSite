<?php

/* YallaWebsiteFrontendBundle:Template:calendar_navigation.html.twig */
class __TwigTemplate_bd7256ca0e7d64dc386d349a7bcc1bebfa5afa5c78e572f592279b1950e7b745 extends Twig_Template
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
        $__internal_be1b693a1ab4b976b23374161a7dc35b9dfc05884d47c40a0e7fb2c1c0978359 = $this->env->getExtension("native_profiler");
        $__internal_be1b693a1ab4b976b23374161a7dc35b9dfc05884d47c40a0e7fb2c1c0978359->enter($__internal_be1b693a1ab4b976b23374161a7dc35b9dfc05884d47c40a0e7fb2c1c0978359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Template:calendar_navigation.html.twig"));

        // line 1
        echo "<div class=\"navigation col-lg-12\">
    <div class=\"col-lg-12\">
        <table class='calendar_nav'>
            <tr>
                <td><a id='mounth_before' class=\"prev\" href=\"#\" 
                       onclick=\"
                               \$('#ajaxDiv').html('');
                               \$.ajax({type: 'POST',
                                   url: Routing.generate('yfe_get_month', {month: '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["__prev_year__"]) ? $context["__prev_year__"] : $this->getContext($context, "__prev_year__")), "html", null, true);
        echo "'}),
                                   dataType: 'json',
                                   success: function (data) {
                                       console.log('Success');
                                       \$('#calendar').html(data.nav);
                                       \$('#calendar').append(data.cal);
                                   }});
                               return false;\">
                        ";
        // line 18
        echo "                        <img style=\"float:left\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/calendar_left.png"), "html", null, true);
        echo "\" width=\"40\" />
                    </a>
                </td>

                <td></td>
                <td>
                    <div class=\"title\">
                        <span style=\"vertical-align: middle; text-align: center\" id='navigation_year'>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["__cal_caption_year__"]) ? $context["__cal_caption_year__"] : $this->getContext($context, "__cal_caption_year__")), "html", null, true);
        echo "</span>
                    </div>
                </td>
                <td></td>
                <td>
                    <a id='mounth_after' class=\"next\" href=\"#\" 
                       onclick=\"
                               \$('#ajaxDiv').html('');
                               \$.ajax({type: 'POST',
                                   url: Routing.generate('yfe_get_month', {month: '";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["__next_year__"]) ? $context["__next_year__"] : $this->getContext($context, "__next_year__")), "html", null, true);
        echo "'}),
                                   dataType: 'json',
                                   success: function (data) {
                                       console.log('Success');
                                       \$('#calendar').html(data.nav);
                                       \$('#calendar').append(data.cal);
                                   }});
                               return false;\">
                        ";
        // line 43
        echo "                        <img st-yle=\"float: right\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/calendar_right.png"), "html", null, true);
        echo "\" width=\"40\" />
                    </a>
                </td>
            </tr>
        </table>
    </div>
    <div class=\"col-lg-12\">
        <table class='calendar_nav'>
            <tr>
                <td>
                    <a id='mounth_before' class=\"prev\" href=\"#\" 
                       onclick=\"
                               \$('#ajaxDiv').html('');
                               \$.ajax({type: 'POST',
                                   url: Routing.generate('yfe_get_month', {month: '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["__prev_month__"]) ? $context["__prev_month__"] : $this->getContext($context, "__prev_month__")), "html", null, true);
        echo "'}),
                                   dataType: 'json',
                                   success: function (data) {
                                       console.log('Success');
                                       \$('#calendar').html(data.nav);
                                       \$('#calendar').append(data.cal);
                                   }});
                               return false;\">
                        ";
        // line 66
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/calendar_left.png"), "html", null, true);
        echo "\" width=\"40\" />
                    </a>
                </td>
                <td></td>
                <td>
                    <div class=\"title\">
                        <span id='navigation_month'>";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["__cal_caption_month__"]) ? $context["__cal_caption_month__"] : $this->getContext($context, "__cal_caption_month__")), "html", null, true);
        echo "</span>
                    </div>
                </td>
                <td></td>
                <td>
                    <a id='mounth_after' class=\"next\" href=\"#\" 
                       onclick=\"
                               \$('#ajaxDiv').html('');
                               \$.ajax({type: 'POST',
                                   url: Routing.generate('yfe_get_month', {month: '";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["__next_month__"]) ? $context["__next_month__"] : $this->getContext($context, "__next_month__")), "html", null, true);
        echo "'}),
                                   dataType: 'json',
                                   success: function (data) {
                                       console.log('Success');
                                       \$('#calendar').html(data.nav);
                                       \$('#calendar').append(data.cal);
                                   }});
                               return false;\">
                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/calendar_right.png"), "html", null, true);
        echo "\" width=\"40\" />
                    </a>
                </td>
            </tr>
        </table>
    </div>
</div>";
        
        $__internal_be1b693a1ab4b976b23374161a7dc35b9dfc05884d47c40a0e7fb2c1c0978359->leave($__internal_be1b693a1ab4b976b23374161a7dc35b9dfc05884d47c40a0e7fb2c1c0978359_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Template:calendar_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 89,  128 => 81,  116 => 72,  106 => 66,  95 => 57,  77 => 43,  66 => 34,  54 => 25,  43 => 18,  32 => 9,  22 => 1,);
    }
}
/* <div class="navigation col-lg-12">*/
/*     <div class="col-lg-12">*/
/*         <table class='calendar_nav'>*/
/*             <tr>*/
/*                 <td><a id='mounth_before' class="prev" href="#" */
/*                        onclick="*/
/*                                $('#ajaxDiv').html('');*/
/*                                $.ajax({type: 'POST',*/
/*                                    url: Routing.generate('yfe_get_month', {month: '{{__prev_year__}}'}),*/
/*                                    dataType: 'json',*/
/*                                    success: function (data) {*/
/*                                        console.log('Success');*/
/*                                        $('#calendar').html(data.nav);*/
/*                                        $('#calendar').append(data.cal);*/
/*                                    }});*/
/*                                return false;">*/
/*                         {#<p style="background-image: url('{{ asset('bundles/yallawebsitefrontend/images/calendar_left.png')}}')"></p>#}*/
/*                         <img style="float:left" src="{{ asset('bundles/yallawebsitefrontend/images/calendar_left.png')}}" width="40" />*/
/*                     </a>*/
/*                 </td>*/
/* */
/*                 <td></td>*/
/*                 <td>*/
/*                     <div class="title">*/
/*                         <span style="vertical-align: middle; text-align: center" id='navigation_year'>{{__cal_caption_year__}}</span>*/
/*                     </div>*/
/*                 </td>*/
/*                 <td></td>*/
/*                 <td>*/
/*                     <a id='mounth_after' class="next" href="#" */
/*                        onclick="*/
/*                                $('#ajaxDiv').html('');*/
/*                                $.ajax({type: 'POST',*/
/*                                    url: Routing.generate('yfe_get_month', {month: '{{__next_year__}}'}),*/
/*                                    dataType: 'json',*/
/*                                    success: function (data) {*/
/*                                        console.log('Success');*/
/*                                        $('#calendar').html(data.nav);*/
/*                                        $('#calendar').append(data.cal);*/
/*                                    }});*/
/*                                return false;">*/
/*                         {#<p style="background-image: url('{{ asset('bundles/yallawebsitefrontend/images/calendar_right.png')}}')"></p>#}*/
/*                         <img st-yle="float: right" src="{{ asset('bundles/yallawebsitefrontend/images/calendar_right.png')}}" width="40" />*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/*     </div>*/
/*     <div class="col-lg-12">*/
/*         <table class='calendar_nav'>*/
/*             <tr>*/
/*                 <td>*/
/*                     <a id='mounth_before' class="prev" href="#" */
/*                        onclick="*/
/*                                $('#ajaxDiv').html('');*/
/*                                $.ajax({type: 'POST',*/
/*                                    url: Routing.generate('yfe_get_month', {month: '{{__prev_month__}}'}),*/
/*                                    dataType: 'json',*/
/*                                    success: function (data) {*/
/*                                        console.log('Success');*/
/*                                        $('#calendar').html(data.nav);*/
/*                                        $('#calendar').append(data.cal);*/
/*                                    }});*/
/*                                return false;">*/
/*                         {#<p style="background-image: url('{{ asset('bundles/yallawebsitefrontend/images/calendar_left.png')}}')"></p>#}*/
/*                         <img src="{{ asset('bundles/yallawebsitefrontend/images/calendar_left.png')}}" width="40" />*/
/*                     </a>*/
/*                 </td>*/
/*                 <td></td>*/
/*                 <td>*/
/*                     <div class="title">*/
/*                         <span id='navigation_month'>{{__cal_caption_month__}}</span>*/
/*                     </div>*/
/*                 </td>*/
/*                 <td></td>*/
/*                 <td>*/
/*                     <a id='mounth_after' class="next" href="#" */
/*                        onclick="*/
/*                                $('#ajaxDiv').html('');*/
/*                                $.ajax({type: 'POST',*/
/*                                    url: Routing.generate('yfe_get_month', {month: '{{__next_month__}}'}),*/
/*                                    dataType: 'json',*/
/*                                    success: function (data) {*/
/*                                        console.log('Success');*/
/*                                        $('#calendar').html(data.nav);*/
/*                                        $('#calendar').append(data.cal);*/
/*                                    }});*/
/*                                return false;">*/
/*                         <img src="{{ asset('bundles/yallawebsitefrontend/images/calendar_right.png')}}" width="40" />*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
