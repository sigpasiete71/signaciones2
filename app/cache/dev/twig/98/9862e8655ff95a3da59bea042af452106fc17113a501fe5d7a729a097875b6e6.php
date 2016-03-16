<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_09a77ff804a608328f590e37f7095035cc3a52cf6a328c901ec9178a4dd2d9d7 extends Twig_Template
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
        $__internal_fdc88331741da6a2b95c11209bee1f9fbd5ad9e6abab375894c94089c48342c6 = $this->env->getExtension("native_profiler");
        $__internal_fdc88331741da6a2b95c11209bee1f9fbd5ad9e6abab375894c94089c48342c6->enter($__internal_fdc88331741da6a2b95c11209bee1f9fbd5ad9e6abab375894c94089c48342c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fdc88331741da6a2b95c11209bee1f9fbd5ad9e6abab375894c94089c48342c6->leave($__internal_fdc88331741da6a2b95c11209bee1f9fbd5ad9e6abab375894c94089c48342c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
