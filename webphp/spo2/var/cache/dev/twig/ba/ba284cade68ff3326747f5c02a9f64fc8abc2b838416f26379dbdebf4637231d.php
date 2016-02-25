<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8a5be4bd3da10bd1f07f4798d0ab269721c542c3dc101d81be811784b727bc20 extends Twig_Template
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
        $__internal_6ed33209dc62aeb69d5b7d770164c785be747cadd46ed9f4a14974e2c574f9e6 = $this->env->getExtension("native_profiler");
        $__internal_6ed33209dc62aeb69d5b7d770164c785be747cadd46ed9f4a14974e2c574f9e6->enter($__internal_6ed33209dc62aeb69d5b7d770164c785be747cadd46ed9f4a14974e2c574f9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6ed33209dc62aeb69d5b7d770164c785be747cadd46ed9f4a14974e2c574f9e6->leave($__internal_6ed33209dc62aeb69d5b7d770164c785be747cadd46ed9f4a14974e2c574f9e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
