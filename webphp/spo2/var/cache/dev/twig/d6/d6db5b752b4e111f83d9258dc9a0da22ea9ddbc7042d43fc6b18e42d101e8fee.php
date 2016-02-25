<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1f0b3f948e814b2c81e882e21239746e20ad6183accbb1e618c65f8dd2685156 extends Twig_Template
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
        $__internal_c499e193c00d690c907ef3e12dc587184adc1acef7cd5f356639e8f3e5d252b1 = $this->env->getExtension("native_profiler");
        $__internal_c499e193c00d690c907ef3e12dc587184adc1acef7cd5f356639e8f3e5d252b1->enter($__internal_c499e193c00d690c907ef3e12dc587184adc1acef7cd5f356639e8f3e5d252b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c499e193c00d690c907ef3e12dc587184adc1acef7cd5f356639e8f3e5d252b1->leave($__internal_c499e193c00d690c907ef3e12dc587184adc1acef7cd5f356639e8f3e5d252b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
