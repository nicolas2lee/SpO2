<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4daa919b249def5a7e3b613e07a3ff297ebe75f62a3d328946326c70b6a12945 extends Twig_Template
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
        $__internal_efa6d8cd9f92e08e7228bb958d16ace15a549729abc3f0b7b30baf5fa742eea5 = $this->env->getExtension("native_profiler");
        $__internal_efa6d8cd9f92e08e7228bb958d16ace15a549729abc3f0b7b30baf5fa742eea5->enter($__internal_efa6d8cd9f92e08e7228bb958d16ace15a549729abc3f0b7b30baf5fa742eea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_efa6d8cd9f92e08e7228bb958d16ace15a549729abc3f0b7b30baf5fa742eea5->leave($__internal_efa6d8cd9f92e08e7228bb958d16ace15a549729abc3f0b7b30baf5fa742eea5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
