<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b476056455d8a1304134849203b51a80cd8d47c58b444243f512ffc2e8c0c838 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b15896dd38b879259ef465b5fa6552ffcd8325e7d43a14a87012b4fa348d5bf = $this->env->getExtension("native_profiler");
        $__internal_6b15896dd38b879259ef465b5fa6552ffcd8325e7d43a14a87012b4fa348d5bf->enter($__internal_6b15896dd38b879259ef465b5fa6552ffcd8325e7d43a14a87012b4fa348d5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6b15896dd38b879259ef465b5fa6552ffcd8325e7d43a14a87012b4fa348d5bf->leave($__internal_6b15896dd38b879259ef465b5fa6552ffcd8325e7d43a14a87012b4fa348d5bf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa5420edcd9910a0d3bb9fe2c7ee6ed0316587287b4e740a256e12db7f198981 = $this->env->getExtension("native_profiler");
        $__internal_fa5420edcd9910a0d3bb9fe2c7ee6ed0316587287b4e740a256e12db7f198981->enter($__internal_fa5420edcd9910a0d3bb9fe2c7ee6ed0316587287b4e740a256e12db7f198981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fa5420edcd9910a0d3bb9fe2c7ee6ed0316587287b4e740a256e12db7f198981->leave($__internal_fa5420edcd9910a0d3bb9fe2c7ee6ed0316587287b4e740a256e12db7f198981_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
