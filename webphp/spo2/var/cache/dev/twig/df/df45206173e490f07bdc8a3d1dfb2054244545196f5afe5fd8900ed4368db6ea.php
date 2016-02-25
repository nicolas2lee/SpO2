<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8b903fe747e1d24db0692d01e2d695f574124712fa31182a49de3fa7f1c32bd4 extends Twig_Template
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
        $__internal_2bcf10521a95974f45d06a70660763b71c673c96c5b1e432138cf0908f52b600 = $this->env->getExtension("native_profiler");
        $__internal_2bcf10521a95974f45d06a70660763b71c673c96c5b1e432138cf0908f52b600->enter($__internal_2bcf10521a95974f45d06a70660763b71c673c96c5b1e432138cf0908f52b600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2bcf10521a95974f45d06a70660763b71c673c96c5b1e432138cf0908f52b600->leave($__internal_2bcf10521a95974f45d06a70660763b71c673c96c5b1e432138cf0908f52b600_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
