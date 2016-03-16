<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_144f9af5d0cd7007bb18ae2c6d876832ac7b9fae510fc9f489ed433466b1d772 extends Twig_Template
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
        $__internal_5704ca9d24f81e7e24c076a23f9cb42058b7a5cd4d0b3a5ddadc49a4a7aa1966 = $this->env->getExtension("native_profiler");
        $__internal_5704ca9d24f81e7e24c076a23f9cb42058b7a5cd4d0b3a5ddadc49a4a7aa1966->enter($__internal_5704ca9d24f81e7e24c076a23f9cb42058b7a5cd4d0b3a5ddadc49a4a7aa1966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5704ca9d24f81e7e24c076a23f9cb42058b7a5cd4d0b3a5ddadc49a4a7aa1966->leave($__internal_5704ca9d24f81e7e24c076a23f9cb42058b7a5cd4d0b3a5ddadc49a4a7aa1966_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
