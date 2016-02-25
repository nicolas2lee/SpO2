<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1657e6620a6d1dd57929c218df616466893e1277de42570d5e2de1174854574c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e482367d2382aeffc9c352529b9f630fed1fd9da7244723a2804960ab15ecad = $this->env->getExtension("native_profiler");
        $__internal_0e482367d2382aeffc9c352529b9f630fed1fd9da7244723a2804960ab15ecad->enter($__internal_0e482367d2382aeffc9c352529b9f630fed1fd9da7244723a2804960ab15ecad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0e482367d2382aeffc9c352529b9f630fed1fd9da7244723a2804960ab15ecad->leave($__internal_0e482367d2382aeffc9c352529b9f630fed1fd9da7244723a2804960ab15ecad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
