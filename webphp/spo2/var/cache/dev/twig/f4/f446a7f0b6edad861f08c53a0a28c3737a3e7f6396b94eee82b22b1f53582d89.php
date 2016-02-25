<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9664f8ecb6d6a122f60833b12d17217350f82d3a8bea72be6e9e438acca5467b extends Twig_Template
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
        $__internal_fa942b5c264f363bdaed75434e071271f854fc0562c48735529e607fe30e88db = $this->env->getExtension("native_profiler");
        $__internal_fa942b5c264f363bdaed75434e071271f854fc0562c48735529e607fe30e88db->enter($__internal_fa942b5c264f363bdaed75434e071271f854fc0562c48735529e607fe30e88db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fa942b5c264f363bdaed75434e071271f854fc0562c48735529e607fe30e88db->leave($__internal_fa942b5c264f363bdaed75434e071271f854fc0562c48735529e607fe30e88db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
