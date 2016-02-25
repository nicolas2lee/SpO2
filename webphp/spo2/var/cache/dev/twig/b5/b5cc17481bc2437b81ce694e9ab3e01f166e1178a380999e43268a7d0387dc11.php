<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_179c8520b1e57bf3cc2cf5e360b493a5d2bf718d921f224dbb8f61d142d25f71 extends Twig_Template
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
        $__internal_5e1eda0ed835f34e2618c7c843ffc4ad460b7585ea7a82c08237e315c3c28698 = $this->env->getExtension("native_profiler");
        $__internal_5e1eda0ed835f34e2618c7c843ffc4ad460b7585ea7a82c08237e315c3c28698->enter($__internal_5e1eda0ed835f34e2618c7c843ffc4ad460b7585ea7a82c08237e315c3c28698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5e1eda0ed835f34e2618c7c843ffc4ad460b7585ea7a82c08237e315c3c28698->leave($__internal_5e1eda0ed835f34e2618c7c843ffc4ad460b7585ea7a82c08237e315c3c28698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
