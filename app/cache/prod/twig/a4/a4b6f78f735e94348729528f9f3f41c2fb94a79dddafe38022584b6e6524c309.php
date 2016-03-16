<?php

/* layout.html.twig */
class __TwigTemplate_cf5659bb95e9e694516b708b743a74f06c2ee1f8d04cd8fe6fc0f2573e9a088f extends Twig_Template
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
        $__internal_3c12496c66461c795206563f0a7cb0d18bebea790bbef6171ad4d824f68d5401 = $this->env->getExtension("native_profiler");
        $__internal_3c12496c66461c795206563f0a7cb0d18bebea790bbef6171ad4d824f68d5401->enter($__internal_3c12496c66461c795206563f0a7cb0d18bebea790bbef6171ad4d824f68d5401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_3c12496c66461c795206563f0a7cb0d18bebea790bbef6171ad4d824f68d5401->leave($__internal_3c12496c66461c795206563f0a7cb0d18bebea790bbef6171ad4d824f68d5401_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_acee33e8604a101e66e59ff0a72ec36b955365b92c69741ef9968cc2471fef89 = $this->env->getExtension("native_profiler");
        $__internal_acee33e8604a101e66e59ff0a72ec36b955365b92c69741ef9968cc2471fef89->enter($__internal_acee33e8604a101e66e59ff0a72ec36b955365b92c69741ef9968cc2471fef89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignación de tareas!";
        
        $__internal_acee33e8604a101e66e59ff0a72ec36b955365b92c69741ef9968cc2471fef89->leave($__internal_acee33e8604a101e66e59ff0a72ec36b955365b92c69741ef9968cc2471fef89_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a87d1dadc00ee03818ed7f9ca9df2bcc32f4e127bd09ac6c8829ec7756043a95 = $this->env->getExtension("native_profiler");
        $__internal_a87d1dadc00ee03818ed7f9ca9df2bcc32f4e127bd09ac6c8829ec7756043a95->enter($__internal_a87d1dadc00ee03818ed7f9ca9df2bcc32f4e127bd09ac6c8829ec7756043a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_a87d1dadc00ee03818ed7f9ca9df2bcc32f4e127bd09ac6c8829ec7756043a95->leave($__internal_a87d1dadc00ee03818ed7f9ca9df2bcc32f4e127bd09ac6c8829ec7756043a95_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_81e3af71993f49c9b30f26b23c44c506388c5fb68a79f40f4f3c9a4fe18ea5bf = $this->env->getExtension("native_profiler");
        $__internal_81e3af71993f49c9b30f26b23c44c506388c5fb68a79f40f4f3c9a4fe18ea5bf->enter($__internal_81e3af71993f49c9b30f26b23c44c506388c5fb68a79f40f4f3c9a4fe18ea5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "         ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_81e3af71993f49c9b30f26b23c44c506388c5fb68a79f40f4f3c9a4fe18ea5bf->leave($__internal_81e3af71993f49c9b30f26b23c44c506388c5fb68a79f40f4f3c9a4fe18ea5bf_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b0f8abee98640a01fa5bc1c00b3529167911eb89ce573293c4f5cf0ef855894a = $this->env->getExtension("native_profiler");
        $__internal_b0f8abee98640a01fa5bc1c00b3529167911eb89ce573293c4f5cf0ef855894a->enter($__internal_b0f8abee98640a01fa5bc1c00b3529167911eb89ce573293c4f5cf0ef855894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        ";
        
        $__internal_b0f8abee98640a01fa5bc1c00b3529167911eb89ce573293c4f5cf0ef855894a->leave($__internal_b0f8abee98640a01fa5bc1c00b3529167911eb89ce573293c4f5cf0ef855894a_prof);

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
