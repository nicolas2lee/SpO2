<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_602edfa1bb565cca09d755de3bf92f007db471bf6db0b7dff54a9c3573d38b7d extends Twig_Template
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
        $__internal_5048d78c2ca18b771ff472d0986ac523c37580554cc2ff2bf5b05c46666c3b0f = $this->env->getExtension("native_profiler");
        $__internal_5048d78c2ca18b771ff472d0986ac523c37580554cc2ff2bf5b05c46666c3b0f->enter($__internal_5048d78c2ca18b771ff472d0986ac523c37580554cc2ff2bf5b05c46666c3b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5048d78c2ca18b771ff472d0986ac523c37580554cc2ff2bf5b05c46666c3b0f->leave($__internal_5048d78c2ca18b771ff472d0986ac523c37580554cc2ff2bf5b05c46666c3b0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
