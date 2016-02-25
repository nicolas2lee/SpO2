<?php

/* base.html.twig */
class __TwigTemplate_695a1420ae404dcb65edffa90d0367913ab27028930b5d936243f904cbcf63fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ea8c63a43490d10bc496c8c22800f286c2d616472bc7341b7076501a02899ca = $this->env->getExtension("native_profiler");
        $__internal_7ea8c63a43490d10bc496c8c22800f286c2d616472bc7341b7076501a02899ca->enter($__internal_7ea8c63a43490d10bc496c8c22800f286c2d616472bc7341b7076501a02899ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        
    </body>
</html>
";
        
        $__internal_7ea8c63a43490d10bc496c8c22800f286c2d616472bc7341b7076501a02899ca->leave($__internal_7ea8c63a43490d10bc496c8c22800f286c2d616472bc7341b7076501a02899ca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30d4decbac482572493f90cd9ee82eab10fe7ed783703e0131fcd45fd86d605f = $this->env->getExtension("native_profiler");
        $__internal_30d4decbac482572493f90cd9ee82eab10fe7ed783703e0131fcd45fd86d605f->enter($__internal_30d4decbac482572493f90cd9ee82eab10fe7ed783703e0131fcd45fd86d605f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_30d4decbac482572493f90cd9ee82eab10fe7ed783703e0131fcd45fd86d605f->leave($__internal_30d4decbac482572493f90cd9ee82eab10fe7ed783703e0131fcd45fd86d605f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1bb3f73c232d0b9310a80a90fba2946ccf57469995beaada0f6c34399b3f260c = $this->env->getExtension("native_profiler");
        $__internal_1bb3f73c232d0b9310a80a90fba2946ccf57469995beaada0f6c34399b3f260c->enter($__internal_1bb3f73c232d0b9310a80a90fba2946ccf57469995beaada0f6c34399b3f260c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1bb3f73c232d0b9310a80a90fba2946ccf57469995beaada0f6c34399b3f260c->leave($__internal_1bb3f73c232d0b9310a80a90fba2946ccf57469995beaada0f6c34399b3f260c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a7cca7395a515b85dbcb36914c11deff12f5ea878658497fc843e0a193cd09c = $this->env->getExtension("native_profiler");
        $__internal_9a7cca7395a515b85dbcb36914c11deff12f5ea878658497fc843e0a193cd09c->enter($__internal_9a7cca7395a515b85dbcb36914c11deff12f5ea878658497fc843e0a193cd09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a7cca7395a515b85dbcb36914c11deff12f5ea878658497fc843e0a193cd09c->leave($__internal_9a7cca7395a515b85dbcb36914c11deff12f5ea878658497fc843e0a193cd09c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  68 => 6,  56 => 5,  46 => 11,  44 => 10,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         */
/*     </body>*/
/* </html>*/
/* */
