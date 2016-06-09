<?php

/* YallaWebsiteFrontendBundle:Template:calendar_navigation.html.twig */
class __TwigTemplate_19ce37e3fd1924ce8d83d5433851ed79ae32793c37cd1420523ea9b8a45182e4 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["__prev_year__"]) ? $context["__prev_year__"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["__cal_caption_year__"]) ? $context["__cal_caption_year__"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["__next_year__"]) ? $context["__next_year__"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["__prev_month__"]) ? $context["__prev_month__"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["__cal_caption_month__"]) ? $context["__cal_caption_month__"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["__next_month__"]) ? $context["__next_month__"] : null), "html", null, true);
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
        return array (  136 => 89,  125 => 81,  113 => 72,  103 => 66,  92 => 57,  74 => 43,  63 => 34,  51 => 25,  40 => 18,  29 => 9,  19 => 1,);
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
