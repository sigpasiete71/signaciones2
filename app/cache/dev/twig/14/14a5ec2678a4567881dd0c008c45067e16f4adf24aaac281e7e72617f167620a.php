<?php

/* EMMUserBundle:User:forms/form.html.twig */
class __TwigTemplate_de7d9932259148af4277003f8de158012727d9d40980fa80d5a32c7656f6cb8d extends Twig_Template
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
        $__internal_209ffdd0400c7d454982be84f4e2d1bea0a21afb3615992a60cb1ab66ccd87cd = $this->env->getExtension("native_profiler");
        $__internal_209ffdd0400c7d454982be84f4e2d1bea0a21afb3615992a60cb1ab66ccd87cd->enter($__internal_209ffdd0400c7d454982be84f4e2d1bea0a21afb3615992a60cb1ab66ccd87cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:forms/form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "form")) : ("form")))));
        echo "

    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    
    ";
        // line 5
        if (( !array_key_exists("with_submit", $context) || ((isset($context["with_submit"]) ? $context["with_submit"] : $this->getContext($context, "with_submit")) == true))) {
            // line 6
            echo "    <input type=\"button\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete user"), "html", null, true);
            echo "\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\" >
    ";
        }
        // line 8
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script>
    var message = '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "';
    
    function confirmDelete()
    {
        bootbox.confirm(message, function(result) {
            if(result == true)
            {
                document.form.submit();
            }
        });
    }
</script>";
        
        $__internal_209ffdd0400c7d454982be84f4e2d1bea0a21afb3615992a60cb1ab66ccd87cd->leave($__internal_209ffdd0400c7d454982be84f4e2d1bea0a21afb3615992a60cb1ab66ccd87cd_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:User:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  43 => 9,  40 => 8,  34 => 6,  32 => 5,  27 => 3,  22 => 1,);
    }
}
/* {{ form_start(form, {'attr': {'id': id|default('form')}} ) }}*/
/* */
/*     {{ form_widget(form) }}*/
/*     */
/*     {% if with_submit is not defined or with_submit == true %}*/
/*     <input type="button" value="{{ 'Delete user'|trans }}" class="btn btn-lg btn-block btn-danger" onclick="confirmDelete()" >*/
/*     {% endif %}*/
/* */
/* {{ form_end(form) }}*/
/* */
/* <script>*/
/*     var message = '{{ message }}';*/
/*     */
/*     function confirmDelete()*/
/*     {*/
/*         bootbox.confirm(message, function(result) {*/
/*             if(result == true)*/
/*             {*/
/*                 document.form.submit();*/
/*             }*/
/*         });*/
/*     }*/
/* </script>*/
