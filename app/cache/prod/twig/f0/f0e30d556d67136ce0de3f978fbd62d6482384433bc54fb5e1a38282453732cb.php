<?php

/* EMMUserBundle:User:index.html.twig */
class __TwigTemplate_8c0dc1b59e831e14bfcba8a4c1cb5f494f1afd9642259381a1c9f5751af81e3e extends Twig_Template
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
        $__internal_63ef9db478c67c6927069ca635db068188c7bb78b40bfa5ca52f070fc5a1fe62 = $this->env->getExtension("native_profiler");
        $__internal_63ef9db478c67c6927069ca635db068188c7bb78b40bfa5ca52f070fc5a1fe62->enter($__internal_63ef9db478c67c6927069ca635db068188c7bb78b40bfa5ca52f070fc5a1fe62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ef9db478c67c6927069ca635db068188c7bb78b40bfa5ca52f070fc5a1fe62->leave($__internal_63ef9db478c67c6927069ca635db068188c7bb78b40bfa5ca52f070fc5a1fe62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07f838c8191e8f8aa171ab9178692813a67d8a10d4f50790b1de47964acbc96f = $this->env->getExtension("native_profiler");
        $__internal_07f838c8191e8f8aa171ab9178692813a67d8a10d4f50790b1de47964acbc96f->enter($__internal_07f838c8191e8f8aa171ab9178692813a67d8a10d4f50790b1de47964acbc96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 ";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
 <div class=\"container\">
 
     <div class=\"col-md-12\">
        <div class=\"page-header margin-none\">
            <h2 class=\"padding-none\">Users</h2>
        </div>
        <div class=\"table-responsive\"> 
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th><strong>Username</strong></th>
                    <th><strong>Firts name</strong></th>
                    <th><strong>Last name</strong></th>
                    <th><strong>Email</strong></th>
                     
                    <th><strong>Role</strong></th>
                    <th><strong>Created</strong></th>
                    <th><strong>Updated</strong></th>
                    <th><strong>Actions</strong></th>
                </tr>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 32
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 33
                echo "                            <strong>ADMINISTRADOR</strong>
                        ";
            } elseif (($this->getAttribute(            // line 34
$context["user"], "role", array()) == "ROLE_USER")) {
                // line 35
                echo "                        <strong>USUARIO</strong>
                        ";
            }
            // line 37
            echo "                    </td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                    <td class=\"actions\"> 
                        <a href=\"#\" class=\"btn btn-sm btn-info\">
                            View
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-primary\">
                            Edit
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-danger tbn-delete\">
                            Delete
                        </a> 
                    </td>
                </tr>         
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </table>
        </div>        
    </div>
</div>
 
 ";
        
        $__internal_07f838c8191e8f8aa171ab9178692813a67d8a10d4f50790b1de47964acbc96f->leave($__internal_07f838c8191e8f8aa171ab9178692813a67d8a10d4f50790b1de47964acbc96f_prof);

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
        return array (  128 => 53,  108 => 39,  104 => 38,  101 => 37,  97 => 35,  95 => 34,  92 => 33,  90 => 32,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  70 => 26,  66 => 25,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*  {{parent() }}*/
/*  <div class="container">*/
/*  */
/*      <div class="col-md-12">*/
/*         <div class="page-header margin-none">*/
/*             <h2 class="padding-none">Users</h2>*/
/*         </div>*/
/*         <div class="table-responsive"> */
/*             <table class="table table-striped table-hover">*/
/*                 <tr>*/
/*                     <th><strong>Username</strong></th>*/
/*                     <th><strong>Firts name</strong></th>*/
/*                     <th><strong>Last name</strong></th>*/
/*                     <th><strong>Email</strong></th>*/
/*                      */
/*                     <th><strong>Role</strong></th>*/
/*                     <th><strong>Created</strong></th>*/
/*                     <th><strong>Updated</strong></th>*/
/*                     <th><strong>Actions</strong></th>*/
/*                 </tr>*/
/*                 {%  for user in users    %}*/
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
/*                         <a href="#" class="btn btn-sm btn-info">*/
/*                             View*/
/*                         </a>*/
/*                         <a href="#" class="btn btn-sm btn-primary">*/
/*                             Edit*/
/*                         </a>*/
/*                         <a href="#" class="btn btn-sm btn-danger tbn-delete">*/
/*                             Delete*/
/*                         </a> */
/*                     </td>*/
/*                 </tr>         */
/*                 {%  endfor %}*/
/*             </table>*/
/*         </div>        */
/*     </div>*/
/* </div>*/
/*  */
/*  {%  endblock %}*/
