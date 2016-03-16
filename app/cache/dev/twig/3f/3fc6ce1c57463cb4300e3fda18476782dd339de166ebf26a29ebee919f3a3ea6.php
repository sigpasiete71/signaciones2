<?php

/* EMMUserBundle:Default:index.html.twig */
class __TwigTemplate_e358ebcf392d2da8a80805d8620f6dfc97885a5e23a96e2f29926ef60eb563be extends Twig_Template
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
        $__internal_5cbd94e1d33af49da5de40df65908dedf316da0b8287e763678d3c018dbb2f74 = $this->env->getExtension("native_profiler");
        $__internal_5cbd94e1d33af49da5de40df65908dedf316da0b8287e763678d3c018dbb2f74->enter($__internal_5cbd94e1d33af49da5de40df65908dedf316da0b8287e763678d3c018dbb2f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:Default:index.html.twig"));

        // line 1
        echo "
Hello ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        
        $__internal_5cbd94e1d33af49da5de40df65908dedf316da0b8287e763678d3c018dbb2f74->leave($__internal_5cbd94e1d33af49da5de40df65908dedf316da0b8287e763678d3c018dbb2f74_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:Default:index.html.twig";
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
/* */
/* Hello {{ name }}*/
