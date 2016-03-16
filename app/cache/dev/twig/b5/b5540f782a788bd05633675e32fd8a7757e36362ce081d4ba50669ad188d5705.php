<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_63f3d79197fe58ef9cc5ccf82a79fa8a78aa00367159960f3ac514f7faccf76c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d2b318bb9f963ddd275f920c4a035e23384768fe1d49ab44aa108672796129e5 = $this->env->getExtension("native_profiler");
        $__internal_d2b318bb9f963ddd275f920c4a035e23384768fe1d49ab44aa108672796129e5->enter($__internal_d2b318bb9f963ddd275f920c4a035e23384768fe1d49ab44aa108672796129e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b318bb9f963ddd275f920c4a035e23384768fe1d49ab44aa108672796129e5->leave($__internal_d2b318bb9f963ddd275f920c4a035e23384768fe1d49ab44aa108672796129e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce22482a5b870c3ead0c6586311cede42a05fdccd611edf405d4fae06d3ba4a6 = $this->env->getExtension("native_profiler");
        $__internal_ce22482a5b870c3ead0c6586311cede42a05fdccd611edf405d4fae06d3ba4a6->enter($__internal_ce22482a5b870c3ead0c6586311cede42a05fdccd611edf405d4fae06d3ba4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ce22482a5b870c3ead0c6586311cede42a05fdccd611edf405d4fae06d3ba4a6->leave($__internal_ce22482a5b870c3ead0c6586311cede42a05fdccd611edf405d4fae06d3ba4a6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9649bc99bf49184b7212a255c4130e99f8bc3f55fb79ea7bb5c4b0833a19823c = $this->env->getExtension("native_profiler");
        $__internal_9649bc99bf49184b7212a255c4130e99f8bc3f55fb79ea7bb5c4b0833a19823c->enter($__internal_9649bc99bf49184b7212a255c4130e99f8bc3f55fb79ea7bb5c4b0833a19823c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9649bc99bf49184b7212a255c4130e99f8bc3f55fb79ea7bb5c4b0833a19823c->leave($__internal_9649bc99bf49184b7212a255c4130e99f8bc3f55fb79ea7bb5c4b0833a19823c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
