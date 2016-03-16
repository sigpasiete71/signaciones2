<?php

/* base.html.twig */
class __TwigTemplate_ad207216fc2c175683360fbf4f17c57207d03c73c303c7d73c3d46030d3f3980 extends Twig_Template
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
        $__internal_b1dd82a3d0fe79931729fde3eb93f928b5038fb1285ae26d26b9cbf33327d817 = $this->env->getExtension("native_profiler");
        $__internal_b1dd82a3d0fe79931729fde3eb93f928b5038fb1285ae26d26b9cbf33327d817->enter($__internal_b1dd82a3d0fe79931729fde3eb93f928b5038fb1285ae26d26b9cbf33327d817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b1dd82a3d0fe79931729fde3eb93f928b5038fb1285ae26d26b9cbf33327d817->leave($__internal_b1dd82a3d0fe79931729fde3eb93f928b5038fb1285ae26d26b9cbf33327d817_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82a74f7dde0440162347b782fabf21a95583c4f9ca0b0ea05a65bcf289fad2aa = $this->env->getExtension("native_profiler");
        $__internal_82a74f7dde0440162347b782fabf21a95583c4f9ca0b0ea05a65bcf289fad2aa->enter($__internal_82a74f7dde0440162347b782fabf21a95583c4f9ca0b0ea05a65bcf289fad2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_82a74f7dde0440162347b782fabf21a95583c4f9ca0b0ea05a65bcf289fad2aa->leave($__internal_82a74f7dde0440162347b782fabf21a95583c4f9ca0b0ea05a65bcf289fad2aa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1dabd760d43572f652c29becff8858f49be6a775ee9728b705c64df333578c08 = $this->env->getExtension("native_profiler");
        $__internal_1dabd760d43572f652c29becff8858f49be6a775ee9728b705c64df333578c08->enter($__internal_1dabd760d43572f652c29becff8858f49be6a775ee9728b705c64df333578c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1dabd760d43572f652c29becff8858f49be6a775ee9728b705c64df333578c08->leave($__internal_1dabd760d43572f652c29becff8858f49be6a775ee9728b705c64df333578c08_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ec09905c5e49667e4e7c11a95e7399c3576b63bfa5b4084ecb83ec6fd3aeebb = $this->env->getExtension("native_profiler");
        $__internal_2ec09905c5e49667e4e7c11a95e7399c3576b63bfa5b4084ecb83ec6fd3aeebb->enter($__internal_2ec09905c5e49667e4e7c11a95e7399c3576b63bfa5b4084ecb83ec6fd3aeebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ec09905c5e49667e4e7c11a95e7399c3576b63bfa5b4084ecb83ec6fd3aeebb->leave($__internal_2ec09905c5e49667e4e7c11a95e7399c3576b63bfa5b4084ecb83ec6fd3aeebb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ddf42a4e960f566e0038a231ffeb529b4c7660c705c6d948f8123c205d2377d = $this->env->getExtension("native_profiler");
        $__internal_3ddf42a4e960f566e0038a231ffeb529b4c7660c705c6d948f8123c205d2377d->enter($__internal_3ddf42a4e960f566e0038a231ffeb529b4c7660c705c6d948f8123c205d2377d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ddf42a4e960f566e0038a231ffeb529b4c7660c705c6d948f8123c205d2377d->leave($__internal_3ddf42a4e960f566e0038a231ffeb529b4c7660c705c6d948f8123c205d2377d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
