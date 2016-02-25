<?php

/* sensor/new.html.twig */
class __TwigTemplate_59341cb17af05f1fb0a11ac30abe6994d02209275f9c648cafe8d9d87eecc3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "sensor/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cfcb130089213e15f04334d1a246290a6f549bdab148393b835e326203b87f7 = $this->env->getExtension("native_profiler");
        $__internal_9cfcb130089213e15f04334d1a246290a6f549bdab148393b835e326203b87f7->enter($__internal_9cfcb130089213e15f04334d1a246290a6f549bdab148393b835e326203b87f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cfcb130089213e15f04334d1a246290a6f549bdab148393b835e326203b87f7->leave($__internal_9cfcb130089213e15f04334d1a246290a6f549bdab148393b835e326203b87f7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_26542a6a4de7d1cd4d76c2883ce96e55c25a68e27c4b3e5ae85d3165bb6d2494 = $this->env->getExtension("native_profiler");
        $__internal_26542a6a4de7d1cd4d76c2883ce96e55c25a68e27c4b3e5ae85d3165bb6d2494->enter($__internal_26542a6a4de7d1cd4d76c2883ce96e55c25a68e27c4b3e5ae85d3165bb6d2494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sensor | New";
        
        $__internal_26542a6a4de7d1cd4d76c2883ce96e55c25a68e27c4b3e5ae85d3165bb6d2494->leave($__internal_26542a6a4de7d1cd4d76c2883ce96e55c25a68e27c4b3e5ae85d3165bb6d2494_prof);

    }

    // line 3
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_dd933296691eaa0fe8330534b6edd0edfeed6392b756a79a57311c0530fbd6b5 = $this->env->getExtension("native_profiler");
        $__internal_dd933296691eaa0fe8330534b6edd0edfeed6392b756a79a57311c0530fbd6b5->enter($__internal_dd933296691eaa0fe8330534b6edd0edfeed6392b756a79a57311c0530fbd6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 4
        echo "
<div class=\"page-wrapper\">
  <div class=\"container-fluid\">
      <!-- Page Heading -->
      <div class=\"row\">
          <div class=\"col-lg-12\">
              <h1 class=\"page-header\">
                  Add a Sensor
              </h1>
              <ol class=\"breadcrumb\">
                  <li>
                      <i class=\"fa fa-dashboard\"></i>  <a href=\"index.html\">Dashboard</a>
                  </li>
                  <li class=\"active\">
                      <i class=\"fa fa-edit\"></i> Forms
                  </li>
              </ol>
          </div>
      </div>
      <!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Sensor Name"));
        echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Sensor Type"));
        echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t<br />
\t\t\t\t</div>
\t\t\t</div>
      <div class=\"row\">
      <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>

<div>                      \t
\t<br />
</div>
<!-- /#page-wrapper -->
";
        
        $__internal_dd933296691eaa0fe8330534b6edd0edfeed6392b756a79a57311c0530fbd6b5->leave($__internal_dd933296691eaa0fe8330534b6edd0edfeed6392b756a79a57311c0530fbd6b5_prof);

    }

    public function getTemplateName()
    {
        return "sensor/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  99 => 36,  94 => 34,  87 => 30,  82 => 28,  77 => 26,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/layout.html.twig' %}*/
/* {% block title %}Sensor | New{% endblock %}*/
/* {% block main_body %}*/
/* */
/* <div class="page-wrapper">*/
/*   <div class="container-fluid">*/
/*       <!-- Page Heading -->*/
/*       <div class="row">*/
/*           <div class="col-lg-12">*/
/*               <h1 class="page-header">*/
/*                   Add a Sensor*/
/*               </h1>*/
/*               <ol class="breadcrumb">*/
/*                   <li>*/
/*                       <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>*/
/*                   </li>*/
/*                   <li class="active">*/
/*                       <i class="fa fa-edit"></i> Forms*/
/*                   </li>*/
/*               </ol>*/
/*           </div>*/
/*       </div>*/
/*       <!-- /.row -->*/
/* 			<div class="row">*/
/* 				<div class="col-lg-6">*/
/* 					{{ form_start(form) }}*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.name, "Sensor Name") }}*/
/* 						<br />*/
/* 						{{ form_widget(form.name) }}*/
/* 					</div>*/
/* 					<br />*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.name, "Sensor Type") }}*/
/* 						<br />*/
/* 						{{ form_widget(form.type) }}*/
/* 					</div>*/
/* 				{{ form_end(form) }}*/
/* 				<br />*/
/* 				</div>*/
/* 			</div>*/
/*       <div class="row">*/
/*       <!-- /.row -->*/
/*   </div>*/
/*   <!-- /.container-fluid -->*/
/* </div>*/
/* */
/* <div>                      	*/
/* 	<br />*/
/* </div>*/
/* <!-- /#page-wrapper -->*/
/* {% endblock %}*/
/* */
