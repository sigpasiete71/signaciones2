<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_88c4ab59b41e6971928cc3857fbba408607cd94d3544e4552054eeaab2d59fbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfcddc38291cd8e461ccefa12eda288173b874f53b17960fce0d74c6cd8fa3e0 = $this->env->getExtension("native_profiler");
        $__internal_bfcddc38291cd8e461ccefa12eda288173b874f53b17960fce0d74c6cd8fa3e0->enter($__internal_bfcddc38291cd8e461ccefa12eda288173b874f53b17960fce0d74c6cd8fa3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bfcddc38291cd8e461ccefa12eda288173b874f53b17960fce0d74c6cd8fa3e0->leave($__internal_bfcddc38291cd8e461ccefa12eda288173b874f53b17960fce0d74c6cd8fa3e0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f9f23b15d26e9fab1abac3ee8fc7c905cac60d71401373008227c5c11d11a26 = $this->env->getExtension("native_profiler");
        $__internal_8f9f23b15d26e9fab1abac3ee8fc7c905cac60d71401373008227c5c11d11a26->enter($__internal_8f9f23b15d26e9fab1abac3ee8fc7c905cac60d71401373008227c5c11d11a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8f9f23b15d26e9fab1abac3ee8fc7c905cac60d71401373008227c5c11d11a26->leave($__internal_8f9f23b15d26e9fab1abac3ee8fc7c905cac60d71401373008227c5c11d11a26_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
