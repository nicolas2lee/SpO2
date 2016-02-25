<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a200af61b43c000bb4fcb90a2b6852cbcd5946790b249077c0f0267907d86276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f83a77ab22a5dda8f1e89c47c0d95aa1d71fb7946c6f55fea12b01671d58be16 = $this->env->getExtension("native_profiler");
        $__internal_f83a77ab22a5dda8f1e89c47c0d95aa1d71fb7946c6f55fea12b01671d58be16->enter($__internal_f83a77ab22a5dda8f1e89c47c0d95aa1d71fb7946c6f55fea12b01671d58be16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83a77ab22a5dda8f1e89c47c0d95aa1d71fb7946c6f55fea12b01671d58be16->leave($__internal_f83a77ab22a5dda8f1e89c47c0d95aa1d71fb7946c6f55fea12b01671d58be16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f9a11908d2abe0ab1a0bf4f52969f7c538d7924db45aff4e82a33c9700d5de8 = $this->env->getExtension("native_profiler");
        $__internal_6f9a11908d2abe0ab1a0bf4f52969f7c538d7924db45aff4e82a33c9700d5de8->enter($__internal_6f9a11908d2abe0ab1a0bf4f52969f7c538d7924db45aff4e82a33c9700d5de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6f9a11908d2abe0ab1a0bf4f52969f7c538d7924db45aff4e82a33c9700d5de8->leave($__internal_6f9a11908d2abe0ab1a0bf4f52969f7c538d7924db45aff4e82a33c9700d5de8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c4d2a071197eaae611554a5bfe6d913cea0263928d5d9e0cb4d3b8b20c3a079 = $this->env->getExtension("native_profiler");
        $__internal_6c4d2a071197eaae611554a5bfe6d913cea0263928d5d9e0cb4d3b8b20c3a079->enter($__internal_6c4d2a071197eaae611554a5bfe6d913cea0263928d5d9e0cb4d3b8b20c3a079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c4d2a071197eaae611554a5bfe6d913cea0263928d5d9e0cb4d3b8b20c3a079->leave($__internal_6c4d2a071197eaae611554a5bfe6d913cea0263928d5d9e0cb4d3b8b20c3a079_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b272f2e4ef4703084b299ed75cf596f49bc7534e458da31480e0b65f2da99a1c = $this->env->getExtension("native_profiler");
        $__internal_b272f2e4ef4703084b299ed75cf596f49bc7534e458da31480e0b65f2da99a1c->enter($__internal_b272f2e4ef4703084b299ed75cf596f49bc7534e458da31480e0b65f2da99a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b272f2e4ef4703084b299ed75cf596f49bc7534e458da31480e0b65f2da99a1c->leave($__internal_b272f2e4ef4703084b299ed75cf596f49bc7534e458da31480e0b65f2da99a1c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
