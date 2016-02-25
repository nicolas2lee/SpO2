<?php

/* layout.html.twig~ */
class __TwigTemplate_90f76cb2a1b6df66ddb7a51f38edf41ebf522612b7fac0a1b15246aefda2591c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'custom_stylesheets' => array($this, 'block_custom_stylesheets'),
            '_header' => array($this, 'block__header'),
            'main_body' => array($this, 'block_main_body'),
            '_footer' => array($this, 'block__footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5003c9b67a75c9fea47d793423b6c3010bcb6fbc13c9710369d9cbe7153ce590 = $this->env->getExtension("native_profiler");
        $__internal_5003c9b67a75c9fea47d793423b6c3010bcb6fbc13c9710369d9cbe7153ce590->enter($__internal_5003c9b67a75c9fea47d793423b6c3010bcb6fbc13c9710369d9cbe7153ce590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig~"));

        // line 2
        echo "<!doctype html>
<html>
    <head>
        ";
        // line 6
        echo "
    \t<link rel=\"stylesheet\"
          href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t";
        // line 9
        $this->displayBlock('custom_stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
\t\t<body>
\t\t\t";
        // line 12
        $this->displayBlock('_header', $context, $blocks);
        // line 13
        echo "\t\t\t";
        $this->displayBlock('main_body', $context, $blocks);
        // line 14
        echo "\t\t\t";
        $this->displayBlock('_footer', $context, $blocks);
        // line 15
        echo "\t\t</body>
    ";
        // line 17
        echo "</html>
";
        
        $__internal_5003c9b67a75c9fea47d793423b6c3010bcb6fbc13c9710369d9cbe7153ce590->leave($__internal_5003c9b67a75c9fea47d793423b6c3010bcb6fbc13c9710369d9cbe7153ce590_prof);

    }

    // line 9
    public function block_custom_stylesheets($context, array $blocks = array())
    {
        $__internal_ee459b5a32d3c5221c81e312b4234dd9e5fb2c2b3c1b1b83465aed37bdce8f43 = $this->env->getExtension("native_profiler");
        $__internal_ee459b5a32d3c5221c81e312b4234dd9e5fb2c2b3c1b1b83465aed37bdce8f43->enter($__internal_ee459b5a32d3c5221c81e312b4234dd9e5fb2c2b3c1b1b83465aed37bdce8f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        
        $__internal_ee459b5a32d3c5221c81e312b4234dd9e5fb2c2b3c1b1b83465aed37bdce8f43->leave($__internal_ee459b5a32d3c5221c81e312b4234dd9e5fb2c2b3c1b1b83465aed37bdce8f43_prof);

    }

    // line 12
    public function block__header($context, array $blocks = array())
    {
        $__internal_c5f86a0cdd2190477389ffff1ed7ed1dbaa4a14abc4bd879c58fa3abe89ff7cc = $this->env->getExtension("native_profiler");
        $__internal_c5f86a0cdd2190477389ffff1ed7ed1dbaa4a14abc4bd879c58fa3abe89ff7cc->enter($__internal_c5f86a0cdd2190477389ffff1ed7ed1dbaa4a14abc4bd879c58fa3abe89ff7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_header"));

        
        $__internal_c5f86a0cdd2190477389ffff1ed7ed1dbaa4a14abc4bd879c58fa3abe89ff7cc->leave($__internal_c5f86a0cdd2190477389ffff1ed7ed1dbaa4a14abc4bd879c58fa3abe89ff7cc_prof);

    }

    // line 13
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_3b44cbe6e43e80f3eadff5258efe1a65e9e438fd08ade0fe05357afa3966ecfa = $this->env->getExtension("native_profiler");
        $__internal_3b44cbe6e43e80f3eadff5258efe1a65e9e438fd08ade0fe05357afa3966ecfa->enter($__internal_3b44cbe6e43e80f3eadff5258efe1a65e9e438fd08ade0fe05357afa3966ecfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        echo " ";
        
        $__internal_3b44cbe6e43e80f3eadff5258efe1a65e9e438fd08ade0fe05357afa3966ecfa->leave($__internal_3b44cbe6e43e80f3eadff5258efe1a65e9e438fd08ade0fe05357afa3966ecfa_prof);

    }

    // line 14
    public function block__footer($context, array $blocks = array())
    {
        $__internal_f58c5ae2318db289ccb09ee0ffff1004ba1a865c93e73a8bb5ca0d9d441f7270 = $this->env->getExtension("native_profiler");
        $__internal_f58c5ae2318db289ccb09ee0ffff1004ba1a865c93e73a8bb5ca0d9d441f7270->enter($__internal_f58c5ae2318db289ccb09ee0ffff1004ba1a865c93e73a8bb5ca0d9d441f7270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_footer"));

        
        $__internal_f58c5ae2318db289ccb09ee0ffff1004ba1a865c93e73a8bb5ca0d9d441f7270->leave($__internal_f58c5ae2318db289ccb09ee0ffff1004ba1a865c93e73a8bb5ca0d9d441f7270_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 14,  86 => 13,  75 => 12,  64 => 9,  56 => 17,  53 => 15,  50 => 14,  47 => 13,  45 => 12,  41 => 10,  39 => 9,  35 => 8,  31 => 6,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* <!doctype html>*/
/* <html>*/
/*     <head>*/
/*         {# ... #}*/
/* */
/*     	<link rel="stylesheet"*/
/*           href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">*/
/* 			{% block custom_stylesheets %}{% endblock %}*/
/*     </head>*/
/* 		<body>*/
/* 			{% block _header %}{% endblock %}*/
/* 			{% block main_body %} {% endblock %}*/
/* 			{% block _footer %}{% endblock %}*/
/* 		</body>*/
/*     {# ... #}*/
/* </html>*/
/* */
