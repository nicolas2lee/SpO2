<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_47b27720a38339d80ace8ec80ab145832476d83d54f5ca40eaca0bf6444e1f49 extends Twig_Template
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
        $__internal_db1a67fed54f89e4e269cbc60035145bb82c314e679bbb82e7356a38a026b461 = $this->env->getExtension("native_profiler");
        $__internal_db1a67fed54f89e4e269cbc60035145bb82c314e679bbb82e7356a38a026b461->enter($__internal_db1a67fed54f89e4e269cbc60035145bb82c314e679bbb82e7356a38a026b461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_db1a67fed54f89e4e269cbc60035145bb82c314e679bbb82e7356a38a026b461->leave($__internal_db1a67fed54f89e4e269cbc60035145bb82c314e679bbb82e7356a38a026b461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
