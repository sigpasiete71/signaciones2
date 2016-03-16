<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_69e1a31a85e7b3c4da534e7f45423b2091f234dc3f1223fb97dc3762c5c3bd83 extends Twig_Template
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
        $__internal_7bcbf23adb035dab85f2e8123ad17cce787e3a3132c976b12cf7278fc5df70e3 = $this->env->getExtension("native_profiler");
        $__internal_7bcbf23adb035dab85f2e8123ad17cce787e3a3132c976b12cf7278fc5df70e3->enter($__internal_7bcbf23adb035dab85f2e8123ad17cce787e3a3132c976b12cf7278fc5df70e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7bcbf23adb035dab85f2e8123ad17cce787e3a3132c976b12cf7278fc5df70e3->leave($__internal_7bcbf23adb035dab85f2e8123ad17cce787e3a3132c976b12cf7278fc5df70e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
