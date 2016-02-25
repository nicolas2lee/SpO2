<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_55de7ba4669ab4b1f637065d0b3e51568c4c3d4ba7fe19869fe496175871a88a extends Twig_Template
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
        $__internal_e519a26421d8358d8de22d5b1849ccac591297578f09d7e88cfd939fcc5069ab = $this->env->getExtension("native_profiler");
        $__internal_e519a26421d8358d8de22d5b1849ccac591297578f09d7e88cfd939fcc5069ab->enter($__internal_e519a26421d8358d8de22d5b1849ccac591297578f09d7e88cfd939fcc5069ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e519a26421d8358d8de22d5b1849ccac591297578f09d7e88cfd939fcc5069ab->leave($__internal_e519a26421d8358d8de22d5b1849ccac591297578f09d7e88cfd939fcc5069ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
