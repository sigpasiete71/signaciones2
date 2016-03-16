<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_50c8b9ee76871d05c87893e4b82f3cbebc03dcd69a839028961470ec3b73f823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25f5577dafc9668442d1ad2f35dd77c510adcf5b624369d3dac5c4b968f002e0 = $this->env->getExtension("native_profiler");
        $__internal_25f5577dafc9668442d1ad2f35dd77c510adcf5b624369d3dac5c4b968f002e0->enter($__internal_25f5577dafc9668442d1ad2f35dd77c510adcf5b624369d3dac5c4b968f002e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25f5577dafc9668442d1ad2f35dd77c510adcf5b624369d3dac5c4b968f002e0->leave($__internal_25f5577dafc9668442d1ad2f35dd77c510adcf5b624369d3dac5c4b968f002e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfbc7cd798d50b7d77b6faf6c6444eb00a2b7a5bd96d64f7d3178a58dc343159 = $this->env->getExtension("native_profiler");
        $__internal_bfbc7cd798d50b7d77b6faf6c6444eb00a2b7a5bd96d64f7d3178a58dc343159->enter($__internal_bfbc7cd798d50b7d77b6faf6c6444eb00a2b7a5bd96d64f7d3178a58dc343159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bfbc7cd798d50b7d77b6faf6c6444eb00a2b7a5bd96d64f7d3178a58dc343159->leave($__internal_bfbc7cd798d50b7d77b6faf6c6444eb00a2b7a5bd96d64f7d3178a58dc343159_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cc2d7db3d4519a320308935cea3fa98574ffd65ec02bb0787f577f461939a6a = $this->env->getExtension("native_profiler");
        $__internal_1cc2d7db3d4519a320308935cea3fa98574ffd65ec02bb0787f577f461939a6a->enter($__internal_1cc2d7db3d4519a320308935cea3fa98574ffd65ec02bb0787f577f461939a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1cc2d7db3d4519a320308935cea3fa98574ffd65ec02bb0787f577f461939a6a->leave($__internal_1cc2d7db3d4519a320308935cea3fa98574ffd65ec02bb0787f577f461939a6a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_86c54bfe8c1fe59b61f8f786e2ed561905688012426ed6673f2be70505741a89 = $this->env->getExtension("native_profiler");
        $__internal_86c54bfe8c1fe59b61f8f786e2ed561905688012426ed6673f2be70505741a89->enter($__internal_86c54bfe8c1fe59b61f8f786e2ed561905688012426ed6673f2be70505741a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_86c54bfe8c1fe59b61f8f786e2ed561905688012426ed6673f2be70505741a89->leave($__internal_86c54bfe8c1fe59b61f8f786e2ed561905688012426ed6673f2be70505741a89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
