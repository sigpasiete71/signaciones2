<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_7fd56fe2fa3a3c167f07163e75d64f434ea4c65976f656a087d1e0eb0d3a0574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c53effbaf97ba5e420e9bfb22f7685d7ce4e3125a32a164d494137495f68f3ae = $this->env->getExtension("native_profiler");
        $__internal_c53effbaf97ba5e420e9bfb22f7685d7ce4e3125a32a164d494137495f68f3ae->enter($__internal_c53effbaf97ba5e420e9bfb22f7685d7ce4e3125a32a164d494137495f68f3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c53effbaf97ba5e420e9bfb22f7685d7ce4e3125a32a164d494137495f68f3ae->leave($__internal_c53effbaf97ba5e420e9bfb22f7685d7ce4e3125a32a164d494137495f68f3ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23ff2f41e1312d230012986dc56b7207331ec20fce0e6e4625d4917019651796 = $this->env->getExtension("native_profiler");
        $__internal_23ff2f41e1312d230012986dc56b7207331ec20fce0e6e4625d4917019651796->enter($__internal_23ff2f41e1312d230012986dc56b7207331ec20fce0e6e4625d4917019651796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_23ff2f41e1312d230012986dc56b7207331ec20fce0e6e4625d4917019651796->leave($__internal_23ff2f41e1312d230012986dc56b7207331ec20fce0e6e4625d4917019651796_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_733e7d287c92f2865633cdf01fdc30b12ae145681153ba6cd4bb8be6944c3af3 = $this->env->getExtension("native_profiler");
        $__internal_733e7d287c92f2865633cdf01fdc30b12ae145681153ba6cd4bb8be6944c3af3->enter($__internal_733e7d287c92f2865633cdf01fdc30b12ae145681153ba6cd4bb8be6944c3af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_733e7d287c92f2865633cdf01fdc30b12ae145681153ba6cd4bb8be6944c3af3->leave($__internal_733e7d287c92f2865633cdf01fdc30b12ae145681153ba6cd4bb8be6944c3af3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7136ab141f1ec9ffc9b09122bede302d786756e410b3945fa8b9d582d36a569e = $this->env->getExtension("native_profiler");
        $__internal_7136ab141f1ec9ffc9b09122bede302d786756e410b3945fa8b9d582d36a569e->enter($__internal_7136ab141f1ec9ffc9b09122bede302d786756e410b3945fa8b9d582d36a569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_7136ab141f1ec9ffc9b09122bede302d786756e410b3945fa8b9d582d36a569e->leave($__internal_7136ab141f1ec9ffc9b09122bede302d786756e410b3945fa8b9d582d36a569e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5cca1a50fc8c8cc45eb47a3bb69a2db829832edb3881e48686341df151b0f5c5 = $this->env->getExtension("native_profiler");
        $__internal_5cca1a50fc8c8cc45eb47a3bb69a2db829832edb3881e48686341df151b0f5c5->enter($__internal_5cca1a50fc8c8cc45eb47a3bb69a2db829832edb3881e48686341df151b0f5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5cca1a50fc8c8cc45eb47a3bb69a2db829832edb3881e48686341df151b0f5c5->leave($__internal_5cca1a50fc8c8cc45eb47a3bb69a2db829832edb3881e48686341df151b0f5c5_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
