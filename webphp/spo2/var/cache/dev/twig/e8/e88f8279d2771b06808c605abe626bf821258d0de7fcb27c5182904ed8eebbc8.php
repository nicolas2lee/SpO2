<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_18328f6bf5dbec46a0dd694ea4e9d7c3fe789fd4521a116c7cf8a83018a3aed5 extends Twig_Template
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
        $__internal_77d4a25750dd62aec14986f6f66cdac83f62337516b4cc94f07c3624b999e519 = $this->env->getExtension("native_profiler");
        $__internal_77d4a25750dd62aec14986f6f66cdac83f62337516b4cc94f07c3624b999e519->enter($__internal_77d4a25750dd62aec14986f6f66cdac83f62337516b4cc94f07c3624b999e519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_77d4a25750dd62aec14986f6f66cdac83f62337516b4cc94f07c3624b999e519->leave($__internal_77d4a25750dd62aec14986f6f66cdac83f62337516b4cc94f07c3624b999e519_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
