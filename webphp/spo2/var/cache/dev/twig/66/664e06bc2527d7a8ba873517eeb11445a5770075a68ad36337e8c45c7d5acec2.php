<?php

/* layout/layout.html.twig~ */
class __TwigTemplate_d973071b460eb411430797e03aec77314f0f35adf1e181071dd59eef3b1059b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de8d21f2bad0166613ea7f16f5d46384feeb47aa7f49f8e6b4bba6508e695250 = $this->env->getExtension("native_profiler");
        $__internal_de8d21f2bad0166613ea7f16f5d46384feeb47aa7f49f8e6b4bba6508e695250->enter($__internal_de8d21f2bad0166613ea7f16f5d46384feeb47aa7f49f8e6b4bba6508e695250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig~"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<html>
    <head>
    <!-- Bootstrap Core CSS -->
    <link href=\"/assets/vendor/startbootstrap-sb-admin-1.0.4/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<!--link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/startbootstrap-sb-admin-1.0.4/css/bootstrap.min.css"), "html", null, true);
        echo "\" /-->

    <!-- Custom CSS -->
    <link href=\"/assets/vendor/startbootstrap-sb-admin-1.0.4/css/sb-admin.css\" rel=\"stylesheet\">
\t\t<!--link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("graph/vendor/startbootstrap-sb-admin-1.0.4/css/sb-admin.css"), "html", null, true);
        echo "\" /-->

    <!-- Morris Charts CSS -->
    <link href=\"/assets/vendor/startbootstrap-sb-admin-1.0.4/css/plugins/morris.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"/assets/vendor/startbootstrap-sb-admin-1.0.4/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t\t
\t\t\t";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        // line 21
        echo "    </head>
\t\t<body>
\t\t\t<div id=\"wrapper\">
\t\t\t";
        // line 24
        $this->loadTemplate("layout/_navigator.html.twig", "layout/layout.html.twig~", 24)->display($context);
        // line 25
        echo "\t\t\t";
        $this->displayBlock('main_body', $context, $blocks);
        // line 26
        echo "\t\t\t";
        $this->loadTemplate("GraphBundle:layout:_footer.html.twig", "layout/layout.html.twig~", 26)->display($context);
        // line 27
        echo "    \t</div>
\t\t</body>
</html>
";
        
        $__internal_de8d21f2bad0166613ea7f16f5d46384feeb47aa7f49f8e6b4bba6508e695250->leave($__internal_de8d21f2bad0166613ea7f16f5d46384feeb47aa7f49f8e6b4bba6508e695250_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_d36ee55afff383a64da955641fbcd6868abdfc9a6721cf2277118b0e0dc64a33 = $this->env->getExtension("native_profiler");
        $__internal_d36ee55afff383a64da955641fbcd6868abdfc9a6721cf2277118b0e0dc64a33->enter($__internal_d36ee55afff383a64da955641fbcd6868abdfc9a6721cf2277118b0e0dc64a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d36ee55afff383a64da955641fbcd6868abdfc9a6721cf2277118b0e0dc64a33->leave($__internal_d36ee55afff383a64da955641fbcd6868abdfc9a6721cf2277118b0e0dc64a33_prof);

    }

    // line 25
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_f67cd6f6780504b6c5ae2bf0ac95c811a7b6892f5c706b2c39c0a12ae8f843ab = $this->env->getExtension("native_profiler");
        $__internal_f67cd6f6780504b6c5ae2bf0ac95c811a7b6892f5c706b2c39c0a12ae8f843ab->enter($__internal_f67cd6f6780504b6c5ae2bf0ac95c811a7b6892f5c706b2c39c0a12ae8f843ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        echo " ";
        
        $__internal_f67cd6f6780504b6c5ae2bf0ac95c811a7b6892f5c706b2c39c0a12ae8f843ab->leave($__internal_f67cd6f6780504b6c5ae2bf0ac95c811a7b6892f5c706b2c39c0a12ae8f843ab_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  75 => 20,  65 => 27,  62 => 26,  59 => 25,  57 => 24,  52 => 21,  50 => 20,  39 => 12,  32 => 8,  24 => 2,);
    }
}
/* {# app/Resources/views/layout/layout.html.twig #}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <html>*/
/*     <head>*/
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="/assets/vendor/startbootstrap-sb-admin-1.0.4/css/bootstrap.min.css" rel="stylesheet">*/
/* 		<!--link rel="stylesheet" href="{{ asset('vendor/startbootstrap-sb-admin-1.0.4/css/bootstrap.min.css') }}" /-->*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="/assets/vendor/startbootstrap-sb-admin-1.0.4/css/sb-admin.css" rel="stylesheet">*/
/* 		<!--link rel="stylesheet" href="{{ asset('graph/vendor/startbootstrap-sb-admin-1.0.4/css/sb-admin.css') }}" /-->*/
/* */
/*     <!-- Morris Charts CSS -->*/
/*     <link href="/assets/vendor/startbootstrap-sb-admin-1.0.4/css/plugins/morris.css" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="/assets/vendor/startbootstrap-sb-admin-1.0.4/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/* 		*/
/* 			{% block title %}{% endblock %}*/
/*     </head>*/
/* 		<body>*/
/* 			<div id="wrapper">*/
/* 			{% include 'layout/_navigator.html.twig' %}*/
/* 			{% block main_body %} {% endblock %}*/
/* 			{% include 'GraphBundle:layout:_footer.html.twig' %}*/
/*     	</div>*/
/* 		</body>*/
/* </html>*/
/* */
