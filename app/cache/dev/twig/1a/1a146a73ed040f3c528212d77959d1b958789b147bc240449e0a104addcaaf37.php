<?php

/* EMMUserBundle:User:messages/success.html.twig */
class __TwigTemplate_f95384b4333f657e3c2236843b0f0bd3876fef236fe8c3ba65335e7d1cf84a7b extends Twig_Template
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
        $__internal_7015f5ce4d3ea39fdf1ec0b720fa5ec8140e46abec7a7cd0bcaf05bdc7059d7a = $this->env->getExtension("native_profiler");
        $__internal_7015f5ce4d3ea39fdf1ec0b720fa5ec8140e46abec7a7cd0bcaf05bdc7059d7a->enter($__internal_7015f5ce4d3ea39fdf1ec0b720fa5ec8140e46abec7a7cd0bcaf05bdc7059d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:messages/success.html.twig"));

        // line 1
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            
            <div class=\"container\">  
                 ";
            // line 5
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "           
            </div>
        
        </div>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
        
        $__internal_7015f5ce4d3ea39fdf1ec0b720fa5ec8140e46abec7a7cd0bcaf05bdc7059d7a->leave($__internal_7015f5ce4d3ea39fdf1ec0b720fa5ec8140e46abec7a7cd0bcaf05bdc7059d7a_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:User:messages/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  32 => 5,  27 => 2,  22 => 1,);
    }
}
/*    {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             */
/*             <div class="container">  */
/*                  {{  flashMessage }}           */
/*             </div>*/
/*         */
/*         </div>*/
/*         */
/*     {% endfor %}*/
/*     */
