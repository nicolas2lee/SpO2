<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_160db72fb7015425fe59efdbb9d21319844f7476cabb3442206286e697166a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b593a566c6324d6bacdab95e0ebfc9e8f326ec20943bace7a2b135e54f03158 = $this->env->getExtension("native_profiler");
        $__internal_9b593a566c6324d6bacdab95e0ebfc9e8f326ec20943bace7a2b135e54f03158->enter($__internal_9b593a566c6324d6bacdab95e0ebfc9e8f326ec20943bace7a2b135e54f03158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b593a566c6324d6bacdab95e0ebfc9e8f326ec20943bace7a2b135e54f03158->leave($__internal_9b593a566c6324d6bacdab95e0ebfc9e8f326ec20943bace7a2b135e54f03158_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83d6454ed6707b5f833b95d27e8056c35543a18c40ab644951356c2dda758f1f = $this->env->getExtension("native_profiler");
        $__internal_83d6454ed6707b5f833b95d27e8056c35543a18c40ab644951356c2dda758f1f->enter($__internal_83d6454ed6707b5f833b95d27e8056c35543a18c40ab644951356c2dda758f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83d6454ed6707b5f833b95d27e8056c35543a18c40ab644951356c2dda758f1f->leave($__internal_83d6454ed6707b5f833b95d27e8056c35543a18c40ab644951356c2dda758f1f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4083dca95698653558383a31b60bfadf2e7fd319c4076a256a09d492f448c84 = $this->env->getExtension("native_profiler");
        $__internal_b4083dca95698653558383a31b60bfadf2e7fd319c4076a256a09d492f448c84->enter($__internal_b4083dca95698653558383a31b60bfadf2e7fd319c4076a256a09d492f448c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4083dca95698653558383a31b60bfadf2e7fd319c4076a256a09d492f448c84->leave($__internal_b4083dca95698653558383a31b60bfadf2e7fd319c4076a256a09d492f448c84_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28f733ab4a582625ecef91423a33846367d175d2e0e6ce143082b5935c7d0556 = $this->env->getExtension("native_profiler");
        $__internal_28f733ab4a582625ecef91423a33846367d175d2e0e6ce143082b5935c7d0556->enter($__internal_28f733ab4a582625ecef91423a33846367d175d2e0e6ce143082b5935c7d0556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28f733ab4a582625ecef91423a33846367d175d2e0e6ce143082b5935c7d0556->leave($__internal_28f733ab4a582625ecef91423a33846367d175d2e0e6ce143082b5935c7d0556_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
