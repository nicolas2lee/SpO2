<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0563c415cd61da148f2c58084806c191fc9b87fc83436f4936d586991be6bd8a extends Twig_Template
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
        $__internal_27fe3f305b03f87494fa7fdaf2d1047f006ef603ad7f3e9b3470ed29b51cb6fd = $this->env->getExtension("native_profiler");
        $__internal_27fe3f305b03f87494fa7fdaf2d1047f006ef603ad7f3e9b3470ed29b51cb6fd->enter($__internal_27fe3f305b03f87494fa7fdaf2d1047f006ef603ad7f3e9b3470ed29b51cb6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_27fe3f305b03f87494fa7fdaf2d1047f006ef603ad7f3e9b3470ed29b51cb6fd->leave($__internal_27fe3f305b03f87494fa7fdaf2d1047f006ef603ad7f3e9b3470ed29b51cb6fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
