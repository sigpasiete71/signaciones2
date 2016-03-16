<?php

/* EMMUserBundle:User:edit.html.twig */
class __TwigTemplate_bba01a37344d3ee781ad2e43b0ee69392ed33567dab8104fa73bdd205b894bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EMMUserBundle:User:edit.html.twig", 1);
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
        $__internal_e3d30fa4708548dabe8c1d3ad45fbecc342d11a001e01d1077dbd7f9bf7f702f = $this->env->getExtension("native_profiler");
        $__internal_e3d30fa4708548dabe8c1d3ad45fbecc342d11a001e01d1077dbd7f9bf7f702f->enter($__internal_e3d30fa4708548dabe8c1d3ad45fbecc342d11a001e01d1077dbd7f9bf7f702f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d30fa4708548dabe8c1d3ad45fbecc342d11a001e01d1077dbd7f9bf7f702f->leave($__internal_e3d30fa4708548dabe8c1d3ad45fbecc342d11a001e01d1077dbd7f9bf7f702f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5305099b56b5be1b7a7ec123c7ba90c667c078d8b3cfe1a6baf8fe7b69d214ee = $this->env->getExtension("native_profiler");
        $__internal_5305099b56b5be1b7a7ec123c7ba90c667c078d8b3cfe1a6baf8fe7b69d214ee->enter($__internal_5305099b56b5be1b7a7ec123c7ba90c667c078d8b3cfe1a6baf8fe7b69d214ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit user", array(), "messages");
        echo "</h2>
\t\t\t\t</div>
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                
                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your username")));
        echo "
                    <span class=\"text-danger\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
                </div>
                
\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
\t\t\t        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your first name")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "
\t\t\t        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your last name")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t\t        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your email")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
\t\t\t        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your password")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label');
        echo "
\t\t\t        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t\t<div class=\"checkbox\">
\t\t\t\t    <label>
\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo $this->env->getExtension('translator')->getTranslator()->trans("Active", array(), "messages");
        // line 52
        echo "\t\t\t\t\t\t<span class=\"text-danger\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "</span>
\t\t\t\t    </label>
\t\t\t\t</div>
\t\t\t</fieldset>

\t\t    <p>
\t\t        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Update user", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t    </p>                
        
                ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_5305099b56b5be1b7a7ec123c7ba90c667c078d8b3cfe1a6baf8fe7b69d214ee->leave($__internal_5305099b56b5be1b7a7ec123c7ba90c667c078d8b3cfe1a6baf8fe7b69d214ee_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 61,  164 => 58,  154 => 52,  151 => 51,  143 => 46,  139 => 45,  135 => 44,  128 => 40,  124 => 39,  120 => 38,  113 => 34,  109 => 33,  105 => 32,  98 => 28,  94 => 27,  90 => 26,  83 => 22,  79 => 21,  75 => 20,  68 => 16,  64 => 15,  60 => 14,  54 => 11,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* 	<div class="main container">*/
/* 		<div class="row well">*/
/* 			<div class="col-md-6">*/
/* 				<div class="page-header">*/
/* 					<h2>{% trans %}Edit user{% endtrans %}</h2>*/
/* 				</div>*/
/*                 {{ form_start(form, { 'attr' : {'novalidate': 'novalidate', 'role' : 'form'} }) }}*/
/*                 */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.username) }}*/
/*                     {{ form_widget(form.username, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your username'} }) }}*/
/*                     <span class="text-danger">{{ form_errors(form.username) }}</span>*/
/*                 </div>*/
/*                 */
/* 			    <div class="form-group">*/
/* 			        {{ form_label(form.firstName) }}*/
/* 			        {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'placeholder' : 'Your first name'}}) }}*/
/* 			        <span class="text-danger">{{ form_errors(form.firstName) }}</span>*/
/* 			    </div>*/
/* */
/* 			    <div class="form-group">*/
/* 			        {{ form_label(form.lastName) }}*/
/* 			        {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'placeholder' : 'Your last name'}}) }}*/
/* 			        <span class="text-danger">{{ form_errors(form.lastName) }}</span>*/
/* 			    </div>*/
/* */
/* 			    <div class="form-group">*/
/* 			        {{ form_label(form.email) }}*/
/* 			        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Your email'}}) }}*/
/* 			        <span class="text-danger">{{ form_errors(form.email) }}</span>*/
/* 			    </div>*/
/* */
/* 			    <div class="form-group">*/
/* 			        {{ form_label(form.password) }}*/
/* 			        {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder' : 'Your password'}}) }}*/
/* 			        <span class="text-danger">{{ form_errors(form.password) }}</span>*/
/* 			    </div>*/
/* */
/* 			    <div class="form-group">*/
/* 			        {{ form_label(form.role) }}*/
/* 			        {{ form_widget(form.role, {'attr': {'class': 'form-control'}}) }}*/
/* 			        <span class="text-danger">{{ form_errors(form.role) }}</span>*/
/* 			    </div>*/
/* */
/* 				<div class="checkbox">*/
/* 				    <label>*/
/* 						{{ form_widget(form.isActive) }}{% trans %}Active{% endtrans %}*/
/* 						<span class="text-danger">{{ form_errors(form.isActive) }}</span>*/
/* 				    </label>*/
/* 				</div>*/
/* 			</fieldset>*/
/* */
/* 		    <p>*/
/* 		        {{ form_widget(form.save, {'label' : 'Update user', 'attr': {'class': 'btn btn-success'}}) }}*/
/* 		    </p>                */
/*         */
/*                 {{ form_end(form) }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
