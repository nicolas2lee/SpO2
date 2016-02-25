<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f81cd9f3e482757914a43254c3bcdbc41f26d1e1057c6d9ce5d8f434cea4787e extends Twig_Template
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
        $__internal_1c9361b3ac29c2f6f72ac9ada5ce51a3c60d341099d3334812d7fe037fbea5a3 = $this->env->getExtension("native_profiler");
        $__internal_1c9361b3ac29c2f6f72ac9ada5ce51a3c60d341099d3334812d7fe037fbea5a3->enter($__internal_1c9361b3ac29c2f6f72ac9ada5ce51a3c60d341099d3334812d7fe037fbea5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1c9361b3ac29c2f6f72ac9ada5ce51a3c60d341099d3334812d7fe037fbea5a3->leave($__internal_1c9361b3ac29c2f6f72ac9ada5ce51a3c60d341099d3334812d7fe037fbea5a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
