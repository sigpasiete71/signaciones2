<?php

/* layout.html.twig */
class __TwigTemplate_b5f8633e318415ebb86170bf2dcfa4a49c5a8c414f43db5f10557363e977d551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e36e77761ee4b31907a21e12333761b8b1c5c46b5170cd07a678450f78721af = $this->env->getExtension("native_profiler");
        $__internal_3e36e77761ee4b31907a21e12333761b8b1c5c46b5170cd07a678450f78721af->enter($__internal_3e36e77761ee4b31907a21e12333761b8b1c5c46b5170cd07a678450f78721af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ddd
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_3e36e77761ee4b31907a21e12333761b8b1c5c46b5170cd07a678450f78721af->leave($__internal_3e36e77761ee4b31907a21e12333761b8b1c5c46b5170cd07a678450f78721af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f2460b5d73988dad2c725c3f7439d639be96fa9b05028ec4ca0947f646b5987 = $this->env->getExtension("native_profiler");
        $__internal_6f2460b5d73988dad2c725c3f7439d639be96fa9b05028ec4ca0947f646b5987->enter($__internal_6f2460b5d73988dad2c725c3f7439d639be96fa9b05028ec4ca0947f646b5987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignación de tareas!";
        
        $__internal_6f2460b5d73988dad2c725c3f7439d639be96fa9b05028ec4ca0947f646b5987->leave($__internal_6f2460b5d73988dad2c725c3f7439d639be96fa9b05028ec4ca0947f646b5987_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e185dde786196bcf5b8a32a9cf3756e6f3c4268d7dbfde41eca8bea37cf77cc = $this->env->getExtension("native_profiler");
        $__internal_6e185dde786196bcf5b8a32a9cf3756e6f3c4268d7dbfde41eca8bea37cf77cc->enter($__internal_6e185dde786196bcf5b8a32a9cf3756e6f3c4268d7dbfde41eca8bea37cf77cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_6e185dde786196bcf5b8a32a9cf3756e6f3c4268d7dbfde41eca8bea37cf77cc->leave($__internal_6e185dde786196bcf5b8a32a9cf3756e6f3c4268d7dbfde41eca8bea37cf77cc_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_b55e002697fcfba9b0aaa91a58965cc7c4bc0ecc2cd8058a1c596b3f28e35374 = $this->env->getExtension("native_profiler");
        $__internal_b55e002697fcfba9b0aaa91a58965cc7c4bc0ecc2cd8058a1c596b3f28e35374->enter($__internal_b55e002697fcfba9b0aaa91a58965cc7c4bc0ecc2cd8058a1c596b3f28e35374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "         ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_b55e002697fcfba9b0aaa91a58965cc7c4bc0ecc2cd8058a1c596b3f28e35374->leave($__internal_b55e002697fcfba9b0aaa91a58965cc7c4bc0ecc2cd8058a1c596b3f28e35374_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b05d3a86140077b2b7b9270b0e748a8a0e21b91381a19165463598065e1d02c = $this->env->getExtension("native_profiler");
        $__internal_7b05d3a86140077b2b7b9270b0e748a8a0e21b91381a19165463598065e1d02c->enter($__internal_7b05d3a86140077b2b7b9270b0e748a8a0e21b91381a19165463598065e1d02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        ";
        
        $__internal_7b05d3a86140077b2b7b9270b0e748a8a0e21b91381a19165463598065e1d02c->leave($__internal_7b05d3a86140077b2b7b9270b0e748a8a0e21b91381a19165463598065e1d02c_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 20,  119 => 19,  109 => 16,  103 => 15,  94 => 8,  89 => 7,  83 => 6,  71 => 5,  60 => 22,  55 => 21,  53 => 19,  50 => 18,  48 => 15,  41 => 11,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Asignación de tareas!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/framework/css/bootstrap.min.css')}}"/>*/
/*             <link rel="stylesheet" href="{{ asset('bundles/framework/css/style.css')}}"/>*/
/*         {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         ddd*/
/*         {% block body %}*/
/*          {{ include('menu.html.twig')  }}*/
/*         {% endblock %}*/
/*         */
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*             <script src="{{ asset('bundles/framework/js/jquery-1.11.3.min.js')}}"></script>*/
/*             <script src="{{ asset('bundles/framework/js/bootstrap.min.js')}}"></script>*/
/*     </body>*/
/* </html>*/
/* */
