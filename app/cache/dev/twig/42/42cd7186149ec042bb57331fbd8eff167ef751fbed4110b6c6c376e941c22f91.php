<?php

/* EMMUserBundle:User:view.html.twig */
class __TwigTemplate_a7b560b8093ddd9ef91e50fe0c6198f5314005273eccc369664a3b167547b3ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EMMUserBundle:User:view.html.twig", 1);
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
        $__internal_8977cea1bd98991131b77b8920750919d374461b0567efc2112734514babb923 = $this->env->getExtension("native_profiler");
        $__internal_8977cea1bd98991131b77b8920750919d374461b0567efc2112734514babb923->enter($__internal_8977cea1bd98991131b77b8920750919d374461b0567efc2112734514babb923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8977cea1bd98991131b77b8920750919d374461b0567efc2112734514babb923->leave($__internal_8977cea1bd98991131b77b8920750919d374461b0567efc2112734514babb923_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e9c5a3b2b4d33475625f91265491047dfac79612961be459a0694a2c6f3b1bd = $this->env->getExtension("native_profiler");
        $__internal_4e9c5a3b2b4d33475625f91265491047dfac79612961be459a0694a2c6f3b1bd->enter($__internal_4e9c5a3b2b4d33475625f91265491047dfac79612961be459a0694a2c6f3b1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"container well\">
\t    <div class=\"col-md-9\">
\t    <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</h2>
\t        <br>
\t        <dl>
\t            <dt>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("First name"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last name"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Role"), "html", null, true);
        echo "</dt>
\t            <dd>
                \t";
        // line 40
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == "ROLE_ADMIN")) {
            // line 41
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Administrator", array(), "messages");
            // line 42
            echo "\t\t\t\t\t";
        } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == "ROLE_USER")) {
            // line 43
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('translator')->getTranslator()->trans("User", array(), "messages");
            // line 44
            echo "                \t";
        }
        // line 45
        echo "\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active"), "html", null, true);
        echo "</dt>
\t            <dd>
                \t";
        // line 51
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isActive", array()) == 1)) {
            // line 52
            echo "\t\t\t\t\t\t<span class=\"text-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Enabled", array(), "messages");
            echo "</span>
\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 53
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isActive", array()) == 0)) {
            // line 54
            echo "\t\t\t\t\t\t<span class=\"text-warning\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Disabled", array(), "messages");
            echo "</span>
                \t";
        }
        // line 56
        echo "\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Updated"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>
\t        </dl>
\t    </div>
\t    <div class=\"col-md-3\">
\t    \t<h3>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions"), "html", null, true);
        echo ":</h3>
\t\t\t<p>
\t\t    \t<a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emm_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
\t\t    \t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t        \t";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit user"), "html", null, true);
        echo "
\t\t\t\t </a>
\t\t\t</p>
\t\t\t<p>
\t\t\t    ";
        // line 84
        echo twig_include($this->env, $context, "EMMUserBundle:User:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "message" => $this->env->getExtension('translator')->trans("Are you sure ?")));
        echo "
\t\t\t</p>
\t    </div>
\t</div>
";
        
        $__internal_4e9c5a3b2b4d33475625f91265491047dfac79612961be459a0694a2c6f3b1bd->leave($__internal_4e9c5a3b2b4d33475625f91265491047dfac79612961be459a0694a2c6f3b1bd_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 84,  196 => 80,  191 => 78,  186 => 76,  176 => 69,  171 => 67,  163 => 62,  158 => 60,  152 => 56,  146 => 54,  144 => 53,  139 => 52,  137 => 51,  132 => 49,  126 => 45,  123 => 44,  120 => 43,  117 => 42,  114 => 41,  112 => 40,  107 => 38,  99 => 33,  94 => 31,  86 => 26,  81 => 24,  73 => 19,  68 => 17,  60 => 12,  55 => 10,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<div class="container well">*/
/* 	    <div class="col-md-9">*/
/* 	    <h2>{{ user.firstName }} {{ user.lastName }}</h2>*/
/* 	        <br>*/
/* 	        <dl>*/
/* 	            <dt>{{'Username'|trans}}</dt>*/
/* 	            <dd>*/
/* 	                {{ user.username }}*/
/* 	                &nbsp;*/
/* 	            </dd>*/
/* 	            <br>*/
/* */
/* 	            <dt>{{'First name'|trans}}</dt>*/
/* 	            <dd>*/
/* 	                {{ user.firstName }}*/
/* 	                &nbsp;*/
/* 	            </dd>*/
/* 	            <br>*/
/* */
/* 	            <dt>{{'Last name'|trans}}</dt>*/
/* 	            <dd>*/
/* 	                {{ user.lastName }}*/
/* 	                &nbsp;*/
/* 	            </dd>*/
/* 	            <br>*/
/* */
/* 	            <dt>{{'Email'|trans}}</dt>*/
/* 	            <dd>*/
/* 	                {{ user.email }}*/
/* 	                &nbsp;*/
/* 	            </dd>*/
/* 	            <br>*/
/* */
/* 	            <dt>{{'Role'|trans}}</dt>*/
/* 	            <dd>*/
/*                 	{% if user.role == 'ROLE_ADMIN' %}*/
/* 						{% trans %}Administrator{% endtrans %}*/
/* 					{% elseif user.role == 'ROLE_USER' %}*/
/* 						{% trans %}User{% endtrans %}*/
/*                 	{% endif %}*/
/* 	                &nbsp;*/
/* 	            </dd>*/
/* 	            <br>*/
/* */
/* 	            <dt>{{'Active'|trans}}</dt>*/
/* 	            <dd>*/
/*                 	{% if user.isActive == 1 %}*/
/* 						<span class="text-success">{% trans %}Enabled{% endtrans %}</span>*/
/* 					{% elseif user.isActive == 0 %}*/
/* 						<span class="text-warning">{% trans %}Disabled{% endtrans %}</span>*/
/*                 	{% endif %}*/
/* 	                &nbsp;*/
/* 	            </dd>*/
/* 	            <br>*/
/* */
/* 	            <dt>{{'Created'|trans}}</dt>*/
/* 	            <dd>*/
/* 	                {{ user.createdAt|date('d-m-Y H:i') }}*/
/* 	                &nbsp;*/
/* 	            </dd>*/
/* 	            <br>*/
/* */
/* 	            <dt>{{'Updated'|trans}}</dt>*/
/* 	            <dd>*/
/* 	                {{ user.updatedAt|date('d-m-Y H:i') }}*/
/* 	                &nbsp;*/
/* 	            </dd>*/
/* 	            <br>*/
/* 	        </dl>*/
/* 	    </div>*/
/* 	    <div class="col-md-3">*/
/* 	    	<h3>{{ 'Actions'|trans }}:</h3>*/
/* 			<p>*/
/* 		    	<a href="{{ path('emm_user_edit', { id: user.id }) }}" class="btn btn-primary btn-lg btn-block">*/
/* 		    		<span class="glyphicon glyphicon-edit"></span>*/
/* 		        	{{ 'Edit user'|trans }}*/
/* 				 </a>*/
/* 			</p>*/
/* 			<p>*/
/* 			    {{ include('EMMUserBundle:User:forms/form.html.twig', { form: delete_form, message: 'Are you sure ?'|trans}) }}*/
/* 			</p>*/
/* 	    </div>*/
/* 	</div>*/
/* {% endblock %}*/
