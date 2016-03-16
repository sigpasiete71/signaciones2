<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_df75b7966be6cf94d8122e30beb3a66824d63b9db6c391eb1262ee03d830823b extends Twig_Template
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
        $__internal_6863ed3d852c302d4919ceb6632681595914f4a5cddb7a10e55eba5e9c920aca = $this->env->getExtension("native_profiler");
        $__internal_6863ed3d852c302d4919ceb6632681595914f4a5cddb7a10e55eba5e9c920aca->enter($__internal_6863ed3d852c302d4919ceb6632681595914f4a5cddb7a10e55eba5e9c920aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6863ed3d852c302d4919ceb6632681595914f4a5cddb7a10e55eba5e9c920aca->leave($__internal_6863ed3d852c302d4919ceb6632681595914f4a5cddb7a10e55eba5e9c920aca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
