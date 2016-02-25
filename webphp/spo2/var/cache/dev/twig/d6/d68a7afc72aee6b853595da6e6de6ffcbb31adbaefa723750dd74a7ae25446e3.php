<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1b730e8c19173f6b4266041315f23cf8ecc491165fe0e71f97921fb9537fadae extends Twig_Template
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
        $__internal_0d352a24e3df5c73bf7451c448e6a0bca032f78f9989c000a6d489fb4e334892 = $this->env->getExtension("native_profiler");
        $__internal_0d352a24e3df5c73bf7451c448e6a0bca032f78f9989c000a6d489fb4e334892->enter($__internal_0d352a24e3df5c73bf7451c448e6a0bca032f78f9989c000a6d489fb4e334892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0d352a24e3df5c73bf7451c448e6a0bca032f78f9989c000a6d489fb4e334892->leave($__internal_0d352a24e3df5c73bf7451c448e6a0bca032f78f9989c000a6d489fb4e334892_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
