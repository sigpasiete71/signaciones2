<?php

/* EMMUserBundle:User:index.html.twig */
class __TwigTemplate_53452262b37ce7050f7eb520bba50c678af4105694800f0652f6472f1320d453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EMMUserBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66f5ffd31ffde50e220addc533c3204c25d71523598fe016dd33472e34291030 = $this->env->getExtension("native_profiler");
        $__internal_66f5ffd31ffde50e220addc533c3204c25d71523598fe016dd33472e34291030->enter($__internal_66f5ffd31ffde50e220addc533c3204c25d71523598fe016dd33472e34291030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f5ffd31ffde50e220addc533c3204c25d71523598fe016dd33472e34291030->leave($__internal_66f5ffd31ffde50e220addc533c3204c25d71523598fe016dd33472e34291030_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48fed4c264a59c983f90aeec31ab130dbde2bacd0351511b7e9f2556efb5688c = $this->env->getExtension("native_profiler");
        $__internal_48fed4c264a59c983f90aeec31ab130dbde2bacd0351511b7e9f2556efb5688c->enter($__internal_48fed4c264a59c983f90aeec31ab130dbde2bacd0351511b7e9f2556efb5688c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 ";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
 
 ";
        // line 7
        echo twig_include($this->env, $context, "EMMUserBundle:User:messages/success.html.twig");
        echo "
 
 
 <div class=\"container\">
 
     <div class=\"col-md-12\">
        <div class=\"page-header margin-none\">
            <h2 class=\"padding-none\">Users</h2>
        </div>
        <div class=\"table-responsive\"> 
            Total records:";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
            <table class=\"table table-striped table-hover\">
                <tr>
                          <th> ";
        // line 20
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Username"), "u.username");
        echo " </th>
                            <th> ";
        // line 21
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("First name"), "u.firstName");
        echo " </th>
\t\t\t\t\t\t\t<th>";
        // line 22
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Last name"), "u.lastName");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 23
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Email"), "u.email");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 24
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Role"), "u.role");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 25
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Created"), "u.createdAt");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 26
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Updated"), "u.updatedAt");
        echo "</th>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions"), "html", null, true);
        echo "</th>
                </tr>
                
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "                <tr>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 37
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 38
                echo "                            <strong>ADMINISTRADOR</strong>
                        ";
            } elseif (($this->getAttribute(            // line 39
$context["user"], "role", array()) == "ROLE_USER")) {
                // line 40
                echo "                        <strong>USUARIO</strong>
                        ";
            }
            // line 42
            echo "                    </td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                    <td class=\"actions\"> 
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emm_user_view", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View"), "html", null, true);
            echo "
                        </a>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emm_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "
                        </a>
                        
                        <a href=\"#\" class=\"btn btn-sm btn-danger tbn-delete\">
                            ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
            echo "
                        </a> 
                    </td>
                </tr>         
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </table>
            
            ";
        // line 62
        echo "\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
        </div>        
    </div>
</div>
 
 ";
        
        $__internal_48fed4c264a59c983f90aeec31ab130dbde2bacd0351511b7e9f2556efb5688c->leave($__internal_48fed4c264a59c983f90aeec31ab130dbde2bacd0351511b7e9f2556efb5688c_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 63,  183 => 62,  179 => 59,  168 => 54,  161 => 50,  157 => 49,  152 => 47,  148 => 46,  143 => 44,  139 => 43,  136 => 42,  132 => 40,  130 => 39,  127 => 38,  125 => 37,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  105 => 31,  101 => 30,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  61 => 17,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*  {{parent() }}*/
/*  */
/*  {{ include('EMMUserBundle:User:messages/success.html.twig') }}*/
/*  */
/*  */
/*  <div class="container">*/
/*  */
/*      <div class="col-md-12">*/
/*         <div class="page-header margin-none">*/
/*             <h2 class="padding-none">Users</h2>*/
/*         </div>*/
/*         <div class="table-responsive"> */
/*             Total records:{{ pagination.getTotalItemCount }}*/
/*             <table class="table table-striped table-hover">*/
/*                 <tr>*/
/*                           <th> {{ knp_pagination_sortable(pagination, 'Username'|trans, 'u.username') }} </th>*/
/*                             <th> {{ knp_pagination_sortable(pagination, 'First name'|trans, 'u.firstName') }} </th>*/
/* 							<th>{{ knp_pagination_sortable(pagination, 'Last name'|trans, 'u.lastName') }}</th>*/
/* 							<th>{{ knp_pagination_sortable(pagination, 'Email'|trans, 'u.email') }}</th>*/
/* 							<th>{{ knp_pagination_sortable(pagination, 'Role'|trans, 'u.role') }}</th>*/
/* 							<th>{{ knp_pagination_sortable(pagination, 'Created'|trans, 'u.createdAt') }}</th>*/
/* 							<th>{{ knp_pagination_sortable(pagination, 'Updated'|trans, 'u.updatedAt') }}</th>*/
/*                             <th>{{ 'Actions'|trans }}</th>*/
/*                 </tr>*/
/*                 */
/*                 {%  for user in pagination    %}*/
/*                 <tr>*/
/*                     <td>{{user.username}}</td>*/
/*                     <td>{{user.firstName}}</td>*/
/*                     <td>{{user.lastName}}</td>*/
/*                     <td>{{user.email}}</td>*/
/*                     <td>*/
/*                         {%  if user.role=='ROLE_ADMIN' %}*/
/*                             <strong>ADMINISTRADOR</strong>*/
/*                         {%  elseif user.role=='ROLE_USER' %}*/
/*                         <strong>USUARIO</strong>*/
/*                         {%  endif %}*/
/*                     </td>*/
/*                     <td>{{user.createdAt|date('d-m-Y H:i')}}</td>*/
/*                     <td>{{user.updatedAt|date('d-m-Y H:i')}}</td>*/
/*                     <td class="actions"> */
/*                         <a href="{{ path('emm_user_view',{ id:user.id }) }}" class="btn btn-sm btn-info">*/
/*                             {{ 'View'|trans }}*/
/*                         </a>*/
/*                         <a href="{{ path('emm_user_edit',{ id:user.id }) }}" class="btn btn-sm btn-primary">*/
/*                             {{ 'Edit'|trans }}*/
/*                         </a>*/
/*                         */
/*                         <a href="#" class="btn btn-sm btn-danger tbn-delete">*/
/*                             {{ 'Delete'|trans }}*/
/*                         </a> */
/*                     </td>*/
/*                 </tr>         */
/*                 {%  endfor %}*/
/*             </table>*/
/*             */
/*             {# display navigation #}*/
/* 				<div class="navigation">*/
/* 					{{ knp_pagination_render(pagination) }}*/
/* 				</div>*/
/* 				*/
/* 				*/
/*         </div>        */
/*     </div>*/
/* </div>*/
/*  */
/*  {%  endblock %}*/
