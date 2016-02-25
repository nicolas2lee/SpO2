<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_65fc60539c5cfeb696e0c60c2415d19afd3ae1bcd1bafd29f8777e7de650f41b extends Twig_Template
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
        $__internal_30bb0dde97b27abe9abd589b4987c5ae3f9a20331e37455191ea99fa5b9e9ee2 = $this->env->getExtension("native_profiler");
        $__internal_30bb0dde97b27abe9abd589b4987c5ae3f9a20331e37455191ea99fa5b9e9ee2->enter($__internal_30bb0dde97b27abe9abd589b4987c5ae3f9a20331e37455191ea99fa5b9e9ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_30bb0dde97b27abe9abd589b4987c5ae3f9a20331e37455191ea99fa5b9e9ee2->leave($__internal_30bb0dde97b27abe9abd589b4987c5ae3f9a20331e37455191ea99fa5b9e9ee2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
