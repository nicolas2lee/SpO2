<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_80810aa892317046bf628e5b8432f3377b31b1b555134b38e1b9db7149af377a extends Twig_Template
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
        $__internal_739ee5f3c1298149b74809ab902409f315aaa5afc6c3c413ff900e6d15f08c52 = $this->env->getExtension("native_profiler");
        $__internal_739ee5f3c1298149b74809ab902409f315aaa5afc6c3c413ff900e6d15f08c52->enter($__internal_739ee5f3c1298149b74809ab902409f315aaa5afc6c3c413ff900e6d15f08c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_739ee5f3c1298149b74809ab902409f315aaa5afc6c3c413ff900e6d15f08c52->leave($__internal_739ee5f3c1298149b74809ab902409f315aaa5afc6c3c413ff900e6d15f08c52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
