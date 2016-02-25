<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c290b132de7c2615d1315408ad54f251297e492e3c1ec7f1a5af67dff2a8e415 extends Twig_Template
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
        $__internal_790c710bcff1e4857f5ef3fc5602c88f5772d52b48fcd134f124b1f3b9566ab7 = $this->env->getExtension("native_profiler");
        $__internal_790c710bcff1e4857f5ef3fc5602c88f5772d52b48fcd134f124b1f3b9566ab7->enter($__internal_790c710bcff1e4857f5ef3fc5602c88f5772d52b48fcd134f124b1f3b9566ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_790c710bcff1e4857f5ef3fc5602c88f5772d52b48fcd134f124b1f3b9566ab7->leave($__internal_790c710bcff1e4857f5ef3fc5602c88f5772d52b48fcd134f124b1f3b9566ab7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
