<?php

/* lucky/number.html.twig~ */
class __TwigTemplate_5611275cefc24e94ffb08e587ab199f0ab0aa22772008faeb62dceeaeb6169e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f33dfb3136f14957012af5cce7968b2e61ae5714ed740508c6347bd4065aa1bb = $this->env->getExtension("native_profiler");
        $__internal_f33dfb3136f14957012af5cce7968b2e61ae5714ed740508c6347bd4065aa1bb->enter($__internal_f33dfb3136f14957012af5cce7968b2e61ae5714ed740508c6347bd4065aa1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig~"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f33dfb3136f14957012af5cce7968b2e61ae5714ed740508c6347bd4065aa1bb->leave($__internal_f33dfb3136f14957012af5cce7968b2e61ae5714ed740508c6347bd4065aa1bb_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f3cf0a37c01a7c4f5c33a10898cf41b70097b7096b2e128293c0695375f6e95e = $this->env->getExtension("native_profiler");
        $__internal_f3cf0a37c01a7c4f5c33a10898cf41b70097b7096b2e128293c0695375f6e95e->enter($__internal_f3cf0a37c01a7c4f5c33a10898cf41b70097b7096b2e128293c0695375f6e95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_f3cf0a37c01a7c4f5c33a10898cf41b70097b7096b2e128293c0695375f6e95e->leave($__internal_f3cf0a37c01a7c4f5c33a10898cf41b70097b7096b2e128293c0695375f6e95e_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig~";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block body %}*/
/* <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
/* */
