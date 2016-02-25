<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0f8e6ce61f3f2c2d79a30a1e6096a09e2f7fe1a8f0f5053d7cd70e9c3bf7460b extends Twig_Template
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
        $__internal_f63eaf20053f6bdbe22229e8c234d6b7ff89d92cc3bb87c9d9bc9f5eebf26a5f = $this->env->getExtension("native_profiler");
        $__internal_f63eaf20053f6bdbe22229e8c234d6b7ff89d92cc3bb87c9d9bc9f5eebf26a5f->enter($__internal_f63eaf20053f6bdbe22229e8c234d6b7ff89d92cc3bb87c9d9bc9f5eebf26a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f63eaf20053f6bdbe22229e8c234d6b7ff89d92cc3bb87c9d9bc9f5eebf26a5f->leave($__internal_f63eaf20053f6bdbe22229e8c234d6b7ff89d92cc3bb87c9d9bc9f5eebf26a5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
