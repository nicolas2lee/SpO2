<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3abe7783a470f4e789adc8353befe93033821277ea49ee5fd0b87ce5d5d910b2 extends Twig_Template
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
        $__internal_b6fd9cf2159071d071899dea916b4562ef476bd52e3bd948e161c20938e5f7d4 = $this->env->getExtension("native_profiler");
        $__internal_b6fd9cf2159071d071899dea916b4562ef476bd52e3bd948e161c20938e5f7d4->enter($__internal_b6fd9cf2159071d071899dea916b4562ef476bd52e3bd948e161c20938e5f7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b6fd9cf2159071d071899dea916b4562ef476bd52e3bd948e161c20938e5f7d4->leave($__internal_b6fd9cf2159071d071899dea916b4562ef476bd52e3bd948e161c20938e5f7d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
