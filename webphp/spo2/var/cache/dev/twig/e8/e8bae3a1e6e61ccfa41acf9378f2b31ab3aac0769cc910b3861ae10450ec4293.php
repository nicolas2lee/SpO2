<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f7a2cf65894ba961a72856f727b59ed935b903cd5ba082691591847966c59ee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e57cc5e3ae4aba7085423d3b3941d7c8a51395bc0241466e16ea2be6a3f5b3c9 = $this->env->getExtension("native_profiler");
        $__internal_e57cc5e3ae4aba7085423d3b3941d7c8a51395bc0241466e16ea2be6a3f5b3c9->enter($__internal_e57cc5e3ae4aba7085423d3b3941d7c8a51395bc0241466e16ea2be6a3f5b3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e57cc5e3ae4aba7085423d3b3941d7c8a51395bc0241466e16ea2be6a3f5b3c9->leave($__internal_e57cc5e3ae4aba7085423d3b3941d7c8a51395bc0241466e16ea2be6a3f5b3c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_564470acbad6f91a7f5017fb1c4e75ddea439abfcb051ce99e7c08f2148dd8d0 = $this->env->getExtension("native_profiler");
        $__internal_564470acbad6f91a7f5017fb1c4e75ddea439abfcb051ce99e7c08f2148dd8d0->enter($__internal_564470acbad6f91a7f5017fb1c4e75ddea439abfcb051ce99e7c08f2148dd8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_564470acbad6f91a7f5017fb1c4e75ddea439abfcb051ce99e7c08f2148dd8d0->leave($__internal_564470acbad6f91a7f5017fb1c4e75ddea439abfcb051ce99e7c08f2148dd8d0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da7779529dc4e9a4772804907fac641856c383a153d9406ec6e790508feae1b5 = $this->env->getExtension("native_profiler");
        $__internal_da7779529dc4e9a4772804907fac641856c383a153d9406ec6e790508feae1b5->enter($__internal_da7779529dc4e9a4772804907fac641856c383a153d9406ec6e790508feae1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_da7779529dc4e9a4772804907fac641856c383a153d9406ec6e790508feae1b5->leave($__internal_da7779529dc4e9a4772804907fac641856c383a153d9406ec6e790508feae1b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
