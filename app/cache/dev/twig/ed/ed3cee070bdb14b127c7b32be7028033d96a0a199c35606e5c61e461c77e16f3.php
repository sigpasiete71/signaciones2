<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6be5bb82f9da7eef5e2dbe86c843e9275f61f2bc0d60ad48539ca27f1b8dd6b5 extends Twig_Template
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
        $__internal_01691bf36a770a45e5591401fa582cf87921de1a94edb4fbcf49e909af61a1af = $this->env->getExtension("native_profiler");
        $__internal_01691bf36a770a45e5591401fa582cf87921de1a94edb4fbcf49e909af61a1af->enter($__internal_01691bf36a770a45e5591401fa582cf87921de1a94edb4fbcf49e909af61a1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_01691bf36a770a45e5591401fa582cf87921de1a94edb4fbcf49e909af61a1af->leave($__internal_01691bf36a770a45e5591401fa582cf87921de1a94edb4fbcf49e909af61a1af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
