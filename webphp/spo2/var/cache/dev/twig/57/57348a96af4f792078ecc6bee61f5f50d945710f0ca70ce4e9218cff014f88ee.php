<?php

/* layout/layout.html.twig */
class __TwigTemplate_4c731dad34c0a8b17d636fa58840e666f08ecba182dc6342aef8ebee8567ca47 extends Twig_Template
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
        $__internal_e2ad43a372b3d15ee01531f1257d88daec28fb739f9d6c417428424a3f1c6ef4 = $this->env->getExtension("native_profiler");
        $__internal_e2ad43a372b3d15ee01531f1257d88daec28fb739f9d6c417428424a3f1c6ef4->enter($__internal_e2ad43a372b3d15ee01531f1257d88daec28fb739f9d6c417428424a3f1c6ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig"));

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
        $this->loadTemplate("layout/_navigator.html.twig", "layout/layout.html.twig", 24)->display($context);
        // line 25
        echo "\t\t\t";
        $this->displayBlock('main_body', $context, $blocks);
        // line 26
        echo "\t\t\t";
        $this->loadTemplate("layout/_footer.html.twig", "layout/layout.html.twig", 26)->display($context);
        // line 27
        echo "    \t</div>
\t\t</body>
</html>
";
        
        $__internal_e2ad43a372b3d15ee01531f1257d88daec28fb739f9d6c417428424a3f1c6ef4->leave($__internal_e2ad43a372b3d15ee01531f1257d88daec28fb739f9d6c417428424a3f1c6ef4_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_b08fbe06f6191e5a8af5b01e6997ff43b940418c5a1d81353fdce637b83b1acb = $this->env->getExtension("native_profiler");
        $__internal_b08fbe06f6191e5a8af5b01e6997ff43b940418c5a1d81353fdce637b83b1acb->enter($__internal_b08fbe06f6191e5a8af5b01e6997ff43b940418c5a1d81353fdce637b83b1acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b08fbe06f6191e5a8af5b01e6997ff43b940418c5a1d81353fdce637b83b1acb->leave($__internal_b08fbe06f6191e5a8af5b01e6997ff43b940418c5a1d81353fdce637b83b1acb_prof);

    }

    // line 25
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_1da00c46a36fef07f5ed8640af4c8b41cc5dd0e001937aa83c50cf474956b23b = $this->env->getExtension("native_profiler");
        $__internal_1da00c46a36fef07f5ed8640af4c8b41cc5dd0e001937aa83c50cf474956b23b->enter($__internal_1da00c46a36fef07f5ed8640af4c8b41cc5dd0e001937aa83c50cf474956b23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        echo " ";
        
        $__internal_1da00c46a36fef07f5ed8640af4c8b41cc5dd0e001937aa83c50cf474956b23b->leave($__internal_1da00c46a36fef07f5ed8640af4c8b41cc5dd0e001937aa83c50cf474956b23b_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
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
/* 			{% include 'layout/_footer.html.twig' %}*/
/*     	</div>*/
/* 		</body>*/
/* </html>*/
/* */
