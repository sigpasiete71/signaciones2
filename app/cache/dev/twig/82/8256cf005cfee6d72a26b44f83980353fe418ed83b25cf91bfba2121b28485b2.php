<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bbc173fe0158059239742434deb0bbbdc9e7f70b4ed6a331a8fead78446c6a9a extends Twig_Template
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
        $__internal_edf8e1664c8ea1dade8228a1402e5fd98f481cd66d413655e79c1d6680da79da = $this->env->getExtension("native_profiler");
        $__internal_edf8e1664c8ea1dade8228a1402e5fd98f481cd66d413655e79c1d6680da79da->enter($__internal_edf8e1664c8ea1dade8228a1402e5fd98f481cd66d413655e79c1d6680da79da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_edf8e1664c8ea1dade8228a1402e5fd98f481cd66d413655e79c1d6680da79da->leave($__internal_edf8e1664c8ea1dade8228a1402e5fd98f481cd66d413655e79c1d6680da79da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
