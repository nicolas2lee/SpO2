<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7f81007d19b0447af56176c798681d37ae2321dc5cb842bea31031c706189502 extends Twig_Template
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
        $__internal_9dc117b2d82c5d0e72969afffe126669154e7150d7b9e380bf7425cacc1a60cb = $this->env->getExtension("native_profiler");
        $__internal_9dc117b2d82c5d0e72969afffe126669154e7150d7b9e380bf7425cacc1a60cb->enter($__internal_9dc117b2d82c5d0e72969afffe126669154e7150d7b9e380bf7425cacc1a60cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9dc117b2d82c5d0e72969afffe126669154e7150d7b9e380bf7425cacc1a60cb->leave($__internal_9dc117b2d82c5d0e72969afffe126669154e7150d7b9e380bf7425cacc1a60cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
