<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cb153940d94bda630825a38afcd3b3590bea3943cd2994dcca201454f52d45d9 extends Twig_Template
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
        $__internal_91bbbc4a328b35e78d4260048d1ffca342b89d81bef4fb1507dc67e0ed1b609e = $this->env->getExtension("native_profiler");
        $__internal_91bbbc4a328b35e78d4260048d1ffca342b89d81bef4fb1507dc67e0ed1b609e->enter($__internal_91bbbc4a328b35e78d4260048d1ffca342b89d81bef4fb1507dc67e0ed1b609e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_91bbbc4a328b35e78d4260048d1ffca342b89d81bef4fb1507dc67e0ed1b609e->leave($__internal_91bbbc4a328b35e78d4260048d1ffca342b89d81bef4fb1507dc67e0ed1b609e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
