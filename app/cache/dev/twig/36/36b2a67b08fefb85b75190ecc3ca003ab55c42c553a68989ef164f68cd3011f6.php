<?php

/* menu.html.twig */
class __TwigTemplate_63344ad681f98a27df53b5f8fae25cba57cd9570dc79959acaec0166f4d088c9 extends Twig_Template
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
        $__internal_5575fd986a24e130d9146e0bc2b4445a0609f4c1ab3baf9c2a96afbafb2995bb = $this->env->getExtension("native_profiler");
        $__internal_5575fd986a24e130d9146e0bc2b4445a0609f4c1ab3baf9c2a96afbafb2995bb->enter($__internal_5575fd986a24e130d9146e0bc2b4445a0609f4c1ab3baf9c2a96afbafb2995bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"#\">Link</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Usuarios <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("emm_user_index");
        echo "\">List user</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("emm_user_add");
        echo "\">New user</a></li>
          </ul>
        </li>
      </ul>
     
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_5575fd986a24e130d9146e0bc2b4445a0609f4c1ab3baf9c2a96afbafb2995bb->leave($__internal_5575fd986a24e130d9146e0bc2b4445a0609f4c1ab3baf9c2a96afbafb2995bb_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  44 => 21,  22 => 1,);
    }
}
/* <nav class="navbar navbar-inverse">*/
/*   <div class="container-fluid">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="#">Brand</a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*         <li><a href="#">Link</a></li>*/
/*         <li class="dropdown">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('emm_user_index') }}">List user</a></li>*/
/*             <li><a href="{{ path('emm_user_add') }}">New user</a></li>*/
/*           </ul>*/
/*         </li>*/
/*       </ul>*/
/*      */
/*      */
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
