<?php

/* :lucky:number.html.twig */
class __TwigTemplate_9ea1d138c4e4500fed0a85877de250bd0545171b19588c02e1947db727634554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lucky:number.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a92482d870633b8fbaa15898e8793b87ac755b46588d7db607ecaaa7d9efc547 = $this->env->getExtension("native_profiler");
        $__internal_a92482d870633b8fbaa15898e8793b87ac755b46588d7db607ecaaa7d9efc547->enter($__internal_a92482d870633b8fbaa15898e8793b87ac755b46588d7db607ecaaa7d9efc547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lucky:number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a92482d870633b8fbaa15898e8793b87ac755b46588d7db607ecaaa7d9efc547->leave($__internal_a92482d870633b8fbaa15898e8793b87ac755b46588d7db607ecaaa7d9efc547_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e69419bd75a371ac91ccf2750bd9981bd10ba529ec2ab4d527d796ec9c9b3847 = $this->env->getExtension("native_profiler");
        $__internal_e69419bd75a371ac91ccf2750bd9981bd10ba529ec2ab4d527d796ec9c9b3847->enter($__internal_e69419bd75a371ac91ccf2750bd9981bd10ba529ec2ab4d527d796ec9c9b3847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_e69419bd75a371ac91ccf2750bd9981bd10ba529ec2ab4d527d796ec9c9b3847->leave($__internal_e69419bd75a371ac91ccf2750bd9981bd10ba529ec2ab4d527d796ec9c9b3847_prof);

    }

    public function getTemplateName()
    {
        return ":lucky:number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
/* */
