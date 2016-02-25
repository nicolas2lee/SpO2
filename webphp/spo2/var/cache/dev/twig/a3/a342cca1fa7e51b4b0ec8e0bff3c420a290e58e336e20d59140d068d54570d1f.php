<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ffd9dc0b9d658f282ec920e301547a08adee9cdd82626303d0d7657a0210ed66 extends Twig_Template
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
        $__internal_0f8dccc4c365fa7af0596dae32579d99b3c5bd8913172bd2b47dce55d6b6d316 = $this->env->getExtension("native_profiler");
        $__internal_0f8dccc4c365fa7af0596dae32579d99b3c5bd8913172bd2b47dce55d6b6d316->enter($__internal_0f8dccc4c365fa7af0596dae32579d99b3c5bd8913172bd2b47dce55d6b6d316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0f8dccc4c365fa7af0596dae32579d99b3c5bd8913172bd2b47dce55d6b6d316->leave($__internal_0f8dccc4c365fa7af0596dae32579d99b3c5bd8913172bd2b47dce55d6b6d316_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
