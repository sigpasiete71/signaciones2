<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_99dba8c4e50e1da2981c353806323a9f67ec51e716a99a815360ef4e37201753 extends Twig_Template
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
        $__internal_776f1a43c075b382b3fdc146de89bda54f18d11efc6744a689838e61af61085f = $this->env->getExtension("native_profiler");
        $__internal_776f1a43c075b382b3fdc146de89bda54f18d11efc6744a689838e61af61085f->enter($__internal_776f1a43c075b382b3fdc146de89bda54f18d11efc6744a689838e61af61085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_776f1a43c075b382b3fdc146de89bda54f18d11efc6744a689838e61af61085f->leave($__internal_776f1a43c075b382b3fdc146de89bda54f18d11efc6744a689838e61af61085f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
