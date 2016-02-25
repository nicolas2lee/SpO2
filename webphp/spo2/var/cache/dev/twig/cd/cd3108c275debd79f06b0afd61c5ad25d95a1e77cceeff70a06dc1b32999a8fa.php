<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_03f729b3f40cffb57c5967b72593a401716409355d5bbb2c10d060ec6836ff8e extends Twig_Template
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
        $__internal_2ded1f787bbc88cd5e1a9d0c05c8605b19e2434d2d9c20d6dce5287e482902e9 = $this->env->getExtension("native_profiler");
        $__internal_2ded1f787bbc88cd5e1a9d0c05c8605b19e2434d2d9c20d6dce5287e482902e9->enter($__internal_2ded1f787bbc88cd5e1a9d0c05c8605b19e2434d2d9c20d6dce5287e482902e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2ded1f787bbc88cd5e1a9d0c05c8605b19e2434d2d9c20d6dce5287e482902e9->leave($__internal_2ded1f787bbc88cd5e1a9d0c05c8605b19e2434d2d9c20d6dce5287e482902e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
