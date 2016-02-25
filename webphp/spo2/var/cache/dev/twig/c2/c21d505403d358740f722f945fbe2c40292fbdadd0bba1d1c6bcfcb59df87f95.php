<?php

/* base.html.twig~ */
class __TwigTemplate_e5d4c1c7e4b6d351bdac6924018377eda40518749e056759c6eb26e79792e5eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2be7795885f7db054b6dcd9850b5677a9e32b922eaab1bc7199e79415d500810 = $this->env->getExtension("native_profiler");
        $__internal_2be7795885f7db054b6dcd9850b5677a9e32b922eaab1bc7199e79415d500810->enter($__internal_2be7795885f7db054b6dcd9850b5677a9e32b922eaab1bc7199e79415d500810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig~"));

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
        echo "\t\t\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 8
        echo "        <!--link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /-->
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        
    </body>
</html>
";
        
        $__internal_2be7795885f7db054b6dcd9850b5677a9e32b922eaab1bc7199e79415d500810->leave($__internal_2be7795885f7db054b6dcd9850b5677a9e32b922eaab1bc7199e79415d500810_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d818e54134ec27bf762c0c769d2bed99616b57904f13b683ad5b61dcad9a78c4 = $this->env->getExtension("native_profiler");
        $__internal_d818e54134ec27bf762c0c769d2bed99616b57904f13b683ad5b61dcad9a78c4->enter($__internal_d818e54134ec27bf762c0c769d2bed99616b57904f13b683ad5b61dcad9a78c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d818e54134ec27bf762c0c769d2bed99616b57904f13b683ad5b61dcad9a78c4->leave($__internal_d818e54134ec27bf762c0c769d2bed99616b57904f13b683ad5b61dcad9a78c4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddc6687cb4ff6154b3144f5be02de1c0f6e50f94e06240652a8ae7caa274cc97 = $this->env->getExtension("native_profiler");
        $__internal_ddc6687cb4ff6154b3144f5be02de1c0f6e50f94e06240652a8ae7caa274cc97->enter($__internal_ddc6687cb4ff6154b3144f5be02de1c0f6e50f94e06240652a8ae7caa274cc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ddc6687cb4ff6154b3144f5be02de1c0f6e50f94e06240652a8ae7caa274cc97->leave($__internal_ddc6687cb4ff6154b3144f5be02de1c0f6e50f94e06240652a8ae7caa274cc97_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a46bf5b8d3da65630a90f3ec5a42bd919bfefd7583ac0b4f74c291945b3fc482 = $this->env->getExtension("native_profiler");
        $__internal_a46bf5b8d3da65630a90f3ec5a42bd919bfefd7583ac0b4f74c291945b3fc482->enter($__internal_a46bf5b8d3da65630a90f3ec5a42bd919bfefd7583ac0b4f74c291945b3fc482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a46bf5b8d3da65630a90f3ec5a42bd919bfefd7583ac0b4f74c291945b3fc482->leave($__internal_a46bf5b8d3da65630a90f3ec5a42bd919bfefd7583ac0b4f74c291945b3fc482_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_45def6df068337e14b6c1d8ed6c2299f2142c9d66830ac1dec2eaa6ab7d6ba95 = $this->env->getExtension("native_profiler");
        $__internal_45def6df068337e14b6c1d8ed6c2299f2142c9d66830ac1dec2eaa6ab7d6ba95->enter($__internal_45def6df068337e14b6c1d8ed6c2299f2142c9d66830ac1dec2eaa6ab7d6ba95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_45def6df068337e14b6c1d8ed6c2299f2142c9d66830ac1dec2eaa6ab7d6ba95->leave($__internal_45def6df068337e14b6c1d8ed6c2299f2142c9d66830ac1dec2eaa6ab7d6ba95_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  83 => 7,  72 => 6,  60 => 5,  50 => 12,  48 => 11,  41 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/* 				{% block javascripts %}{% endblock %}*/
/*         <!--link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" /-->*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         */
/*     </body>*/
/* </html>*/
/* */
