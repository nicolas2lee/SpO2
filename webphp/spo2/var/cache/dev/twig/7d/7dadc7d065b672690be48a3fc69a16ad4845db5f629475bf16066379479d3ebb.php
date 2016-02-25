<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4fea368022631f4bfee708908ba79199a8acc893e4cd317d0d3aa8fa61539b2e extends Twig_Template
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
        $__internal_d9b59575a294a1113257d21cc5d0c6e06bb3364299e640d378b1e5939859cd38 = $this->env->getExtension("native_profiler");
        $__internal_d9b59575a294a1113257d21cc5d0c6e06bb3364299e640d378b1e5939859cd38->enter($__internal_d9b59575a294a1113257d21cc5d0c6e06bb3364299e640d378b1e5939859cd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d9b59575a294a1113257d21cc5d0c6e06bb3364299e640d378b1e5939859cd38->leave($__internal_d9b59575a294a1113257d21cc5d0c6e06bb3364299e640d378b1e5939859cd38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
