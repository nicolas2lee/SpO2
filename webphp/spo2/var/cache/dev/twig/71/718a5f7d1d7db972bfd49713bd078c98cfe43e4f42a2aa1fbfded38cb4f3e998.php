<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_763682d4cfc5a9c84b0969edb5cb0f40f067e71002016e3c3754558c0f0df6b4 extends Twig_Template
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
        $__internal_9bff585b8cf2c6cdeafa87f4c8f923d7d0ccfa1114c1eb39ed3530a70bc89983 = $this->env->getExtension("native_profiler");
        $__internal_9bff585b8cf2c6cdeafa87f4c8f923d7d0ccfa1114c1eb39ed3530a70bc89983->enter($__internal_9bff585b8cf2c6cdeafa87f4c8f923d7d0ccfa1114c1eb39ed3530a70bc89983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9bff585b8cf2c6cdeafa87f4c8f923d7d0ccfa1114c1eb39ed3530a70bc89983->leave($__internal_9bff585b8cf2c6cdeafa87f4c8f923d7d0ccfa1114c1eb39ed3530a70bc89983_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
