<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_15ccf079a8df9ca8208c0ae2796a3b551cd38ab60003fb015a7bf3adf1cc8cf5 extends Twig_Template
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
        $__internal_2cb7e60235c44d264a559dd1a2f4d377c313262b6a3fe60358ba46142e7936de = $this->env->getExtension("native_profiler");
        $__internal_2cb7e60235c44d264a559dd1a2f4d377c313262b6a3fe60358ba46142e7936de->enter($__internal_2cb7e60235c44d264a559dd1a2f4d377c313262b6a3fe60358ba46142e7936de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2cb7e60235c44d264a559dd1a2f4d377c313262b6a3fe60358ba46142e7936de->leave($__internal_2cb7e60235c44d264a559dd1a2f4d377c313262b6a3fe60358ba46142e7936de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
