<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_34528613264284081cb7943c31fe6ffabd0f52d30eff64aa65743d43214b36dc extends Twig_Template
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
        $__internal_097b5b8480bd4b04998cae337b45cfb9ee3c389de01716a457c7aca1a65cce9a = $this->env->getExtension("native_profiler");
        $__internal_097b5b8480bd4b04998cae337b45cfb9ee3c389de01716a457c7aca1a65cce9a->enter($__internal_097b5b8480bd4b04998cae337b45cfb9ee3c389de01716a457c7aca1a65cce9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_097b5b8480bd4b04998cae337b45cfb9ee3c389de01716a457c7aca1a65cce9a->leave($__internal_097b5b8480bd4b04998cae337b45cfb9ee3c389de01716a457c7aca1a65cce9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
