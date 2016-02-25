<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2badc38c9cb6b8f90c40e02bf087b9336507c7619dd076726c860ebf7072b47e extends Twig_Template
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
        $__internal_549c070e70c1935ae99c08b8324f12327d8c673e859df69f29261fdb5dc639bf = $this->env->getExtension("native_profiler");
        $__internal_549c070e70c1935ae99c08b8324f12327d8c673e859df69f29261fdb5dc639bf->enter($__internal_549c070e70c1935ae99c08b8324f12327d8c673e859df69f29261fdb5dc639bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_549c070e70c1935ae99c08b8324f12327d8c673e859df69f29261fdb5dc639bf->leave($__internal_549c070e70c1935ae99c08b8324f12327d8c673e859df69f29261fdb5dc639bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
