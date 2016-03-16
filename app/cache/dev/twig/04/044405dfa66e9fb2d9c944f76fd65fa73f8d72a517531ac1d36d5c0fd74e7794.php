<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_25b69fccfc36809dfffaddc8929ccdbbf0aec18983b1e71a93ee25abef723659 extends Twig_Template
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
        $__internal_aa7a416d6306cb7e93ccbde9a647a1ec3247de99b7bf46d811e665e65e8d866a = $this->env->getExtension("native_profiler");
        $__internal_aa7a416d6306cb7e93ccbde9a647a1ec3247de99b7bf46d811e665e65e8d866a->enter($__internal_aa7a416d6306cb7e93ccbde9a647a1ec3247de99b7bf46d811e665e65e8d866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aa7a416d6306cb7e93ccbde9a647a1ec3247de99b7bf46d811e665e65e8d866a->leave($__internal_aa7a416d6306cb7e93ccbde9a647a1ec3247de99b7bf46d811e665e65e8d866a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
