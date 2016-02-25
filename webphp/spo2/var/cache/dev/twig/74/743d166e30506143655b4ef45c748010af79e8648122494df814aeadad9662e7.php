<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1e98ab05f4067240559f343036c77c09552b30e24940cf8a11ddf689df799c60 extends Twig_Template
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
        $__internal_adb6a5454faf6ea0ca5c12fe4cca86e665170531efd73e5d8c8ef16bcb656a25 = $this->env->getExtension("native_profiler");
        $__internal_adb6a5454faf6ea0ca5c12fe4cca86e665170531efd73e5d8c8ef16bcb656a25->enter($__internal_adb6a5454faf6ea0ca5c12fe4cca86e665170531efd73e5d8c8ef16bcb656a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_adb6a5454faf6ea0ca5c12fe4cca86e665170531efd73e5d8c8ef16bcb656a25->leave($__internal_adb6a5454faf6ea0ca5c12fe4cca86e665170531efd73e5d8c8ef16bcb656a25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
