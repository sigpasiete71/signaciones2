<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b1bad4c31ff86d40aacf5fd7d9c3c32eff6428ab2bfbe8208838c9490cd0d351 extends Twig_Template
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
        $__internal_2a1c61670cab8626c05eaaffed2c8695a6902767b8dbc0b75d06a0030bce1067 = $this->env->getExtension("native_profiler");
        $__internal_2a1c61670cab8626c05eaaffed2c8695a6902767b8dbc0b75d06a0030bce1067->enter($__internal_2a1c61670cab8626c05eaaffed2c8695a6902767b8dbc0b75d06a0030bce1067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2a1c61670cab8626c05eaaffed2c8695a6902767b8dbc0b75d06a0030bce1067->leave($__internal_2a1c61670cab8626c05eaaffed2c8695a6902767b8dbc0b75d06a0030bce1067_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
