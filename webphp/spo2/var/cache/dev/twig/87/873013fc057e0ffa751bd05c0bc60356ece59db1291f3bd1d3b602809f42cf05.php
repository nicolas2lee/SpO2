<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ca4289b0ce0908733ab05e9775a4a209cbb3beedbbb0806fbf010fbe946e53d4 extends Twig_Template
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
        $__internal_027f9e2afc2586dd4edf81443281bd9bfb9bce24a1b5b135f022d4fbe1d314c8 = $this->env->getExtension("native_profiler");
        $__internal_027f9e2afc2586dd4edf81443281bd9bfb9bce24a1b5b135f022d4fbe1d314c8->enter($__internal_027f9e2afc2586dd4edf81443281bd9bfb9bce24a1b5b135f022d4fbe1d314c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_027f9e2afc2586dd4edf81443281bd9bfb9bce24a1b5b135f022d4fbe1d314c8->leave($__internal_027f9e2afc2586dd4edf81443281bd9bfb9bce24a1b5b135f022d4fbe1d314c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
