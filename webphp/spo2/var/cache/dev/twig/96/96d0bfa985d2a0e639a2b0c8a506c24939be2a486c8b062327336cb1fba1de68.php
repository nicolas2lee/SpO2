<?php

/* sensor/index.html.twig */
class __TwigTemplate_1dca1e78c333455952c61dae4f0d67831fe3f6bee6251b9b08bd3880b767c572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "sensor/index.html.twig", 1);
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
        $__internal_7d95e518ee3fac411a0587d95a1ff1522f510ef903ad122f20bbc6aef1053e77 = $this->env->getExtension("native_profiler");
        $__internal_7d95e518ee3fac411a0587d95a1ff1522f510ef903ad122f20bbc6aef1053e77->enter($__internal_7d95e518ee3fac411a0587d95a1ff1522f510ef903ad122f20bbc6aef1053e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d95e518ee3fac411a0587d95a1ff1522f510ef903ad122f20bbc6aef1053e77->leave($__internal_7d95e518ee3fac411a0587d95a1ff1522f510ef903ad122f20bbc6aef1053e77_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f318331fd1ca7ff73a0afa7539097c0b4d1c21295f0f3c9dd1addc37e7cb2e92 = $this->env->getExtension("native_profiler");
        $__internal_f318331fd1ca7ff73a0afa7539097c0b4d1c21295f0f3c9dd1addc37e7cb2e92->enter($__internal_f318331fd1ca7ff73a0afa7539097c0b4d1c21295f0f3c9dd1addc37e7cb2e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sensor | Index";
        
        $__internal_f318331fd1ca7ff73a0afa7539097c0b4d1c21295f0f3c9dd1addc37e7cb2e92->leave($__internal_f318331fd1ca7ff73a0afa7539097c0b4d1c21295f0f3c9dd1addc37e7cb2e92_prof);

    }

    // line 3
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_531b5700e031364e19e9e55cc85f657bad8cecb062869000177c4cee144984bd = $this->env->getExtension("native_profiler");
        $__internal_531b5700e031364e19e9e55cc85f657bad8cecb062869000177c4cee144984bd->enter($__internal_531b5700e031364e19e9e55cc85f657bad8cecb062869000177c4cee144984bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 4
        echo " <div class=\"page-wrapper\">

\t<div class=\"container-fluid\">

\t\t  <!-- Page Heading -->
\t\t  <div class=\"row\">
\t\t      <div class=\"col-lg-12\">
\t\t          <h1 class=\"page-header\">
\t\t              Forms
\t\t          </h1>
\t\t          <ol class=\"breadcrumb\">
\t\t              <li>
\t\t                  <i class=\"fa fa-dashboard\"></i>  <a href=\"index.html\">Dashboard</a>
\t\t              </li>
\t\t              <li class=\"active\">
\t\t                  <i class=\"fa fa-edit\"></i> Forms
\t\t              </li>
\t\t          </ol>
\t\t      </div>
\t\t  </div>
\t\t  <!-- /.row -->

\t\t  <div class=\"row\">
\t\t      <div class=\"col-lg-6\">

\t\t          <form role=\"form\">

\t\t              <div class=\"form-group\">
\t\t                  <label>Text Input</label>
\t\t                  <input class=\"form-control\">
\t\t                  <p class=\"help-block\">Example block-level help text here.</p>
\t\t              </div>

\t\t              <div class=\"form-group\">
\t\t                  <label>Text Input with Placeholder</label>
\t\t                  <input class=\"form-control\" placeholder=\"Enter text\">
\t\t              </div>

\t\t              <div class=\"form-group\">
\t\t                  <label>Static Control</label>
\t\t                  <p class=\"form-control-static\">email@example.com</p>
\t\t              </div>

\t\t              <div class=\"form-group\">
\t\t                  <label>File input</label>
\t\t                  <input type=\"file\">
\t\t              </div>

\t\t              <div class=\"form-group\">
\t\t                  <label>Text area</label>
\t\t                  <textarea class=\"form-control\" rows=\"3\"></textarea>
\t\t              </div>

\t\t              <div class=\"form-group\">
\t\t                  <label>Checkboxes</label>
\t\t                  <div class=\"checkbox\">
\t\t                      <label>
\t\t                          <input type=\"checkbox\" value=\"\">Checkbox 1
\t\t                      </label>
\t\t                  </div>
\t\t                  <div class=\"checkbox\">
\t\t                      <label>
\t\t                          <input type=\"checkbox\" value=\"\">Checkbox 2
\t\t                      </label>
\t\t                  </div>
\t\t                  <div class=\"checkbox\">
\t\t                      <label>
\t\t                          <input type=\"checkbox\" value=\"\">Checkbox 3
\t\t                      </label>
\t\t                  </div>
\t\t              </div>

\t\t              <div class=\"form-group\">
\t\t                  <label>Inline Checkboxes</label>
\t\t                  <label class=\"checkbox-inline\">
\t\t                      <input type=\"checkbox\">1
\t\t                  </label>
\t\t                  <label class=\"checkbox-inline\">
\t\t                      <input type=\"checkbox\">2
\t\t                  </label>
\t\t                  <label class=\"checkbox-inline\">
\t\t                      <input type=\"checkbox\">3
\t\t                  </label>
\t\t              </div>

\t\t              <div class=\"form-group\">
\t\t                  <label>Radio Buttons</label>
\t\t                  <div class=\"radio\">
\t\t                      <label>
\t\t                          <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>Radio 1
\t\t                      </label>
\t\t                  </div>
\t\t                  <div class=\"radio\">
\t\t                      <label>
\t\t                          <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">Radio 2
\t\t                      </label>
\t\t                  </div>
\t\t                  <div class=\"radio\">
\t\t                      <label>
\t\t                          <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\">Radio 3
\t\t                      </label>
\t\t                  </div>
\t\t              </div>

\t\t              <div class=\"form-group\">
\t\t                  <label>Inline Radio Buttons</label>
\t\t                  <label class=\"radio-inline\">
\t\t                      <input type=\"radio\" name=\"optionsRadiosInline\" id=\"optionsRadiosInline1\" value=\"option1\" checked>1
\t\t                  </label>
\t\t                  <label class=\"radio-inline\">
\t\t                      <input type=\"radio\" name=\"optionsRadiosInline\" id=\"optionsRadiosInline2\" value=\"option2\">2
\t\t                  </label>
\t\t                  <label class=\"radio-inline\">
\t\t                      <input type=\"radio\" name=\"optionsRadiosInline\" id=\"optionsRadiosInline3\" value=\"option3\">3
\t\t                  </label>
\t\t              </div>

\t\t              <div class=\"form-group\">
\t\t                  <label>Selects</label>
\t\t                  <select class=\"form-control\">
\t\t                      <option>1</option>
\t\t                      <option>2</option>
\t\t                      <option>3</option>
\t\t                      <option>4</option>
\t\t                      <option>5</option>
\t\t                  </select>
\t\t              </div>

\t\t              <div class=\"form-group\">
\t\t                  <label>Multiple Selects</label>
\t\t                  <select multiple class=\"form-control\">
\t\t                      <option>1</option>
\t\t                      <option>2</option>
\t\t                      <option>3</option>
\t\t                      <option>4</option>
\t\t                      <option>5</option>
\t\t                  </select>
\t\t              </div>

\t\t              <button type=\"submit\" class=\"btn btn-default\">Submit Button</button>
\t\t              <button type=\"reset\" class=\"btn btn-default\">Reset Button</button>

\t\t          </form>

\t\t      </div>
\t\t      <div class=\"col-lg-6\">
\t\t          <h1>Disabled Form States</h1>

\t\t          <form role=\"form\">

\t\t              <fieldset disabled>

\t\t                  <div class=\"form-group\">
\t\t                      <label for=\"disabledSelect\">Disabled input</label>
\t\t                      <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input\" disabled>
\t\t                  </div>

\t\t                  <div class=\"form-group\">
\t\t                      <label for=\"disabledSelect\">Disabled select menu</label>
\t\t                      <select id=\"disabledSelect\" class=\"form-control\">
\t\t                          <option>Disabled select</option>
\t\t                      </select>
\t\t                  </div>

\t\t                  <div class=\"checkbox\">
\t\t                      <label>
\t\t                          <input type=\"checkbox\">Disabled Checkbox
\t\t                      </label>
\t\t                  </div>

\t\t                  <button type=\"submit\" class=\"btn btn-primary\">Disabled Button</button>

\t\t              </fieldset>

\t\t          </form>

\t\t          <h1>Form Validation</h1>

\t\t          <form role=\"form\">

\t\t              <div class=\"form-group has-success\">
\t\t                  <label class=\"control-label\" for=\"inputSuccess\">Input with success</label>
\t\t                  <input type=\"text\" class=\"form-control\" id=\"inputSuccess\">
\t\t              </div>

\t\t              <div class=\"form-group has-warning\">
\t\t                  <label class=\"control-label\" for=\"inputWarning\">Input with warning</label>
\t\t                  <input type=\"text\" class=\"form-control\" id=\"inputWarning\">
\t\t              </div>

\t\t              <div class=\"form-group has-error\">
\t\t                  <label class=\"control-label\" for=\"inputError\">Input with error</label>
\t\t                  <input type=\"text\" class=\"form-control\" id=\"inputError\">
\t\t              </div>

\t\t          </form>

\t\t         

\t\t          <p>For complete documentation, please visit <a href=\"http://getbootstrap.com/css/#forms\">Bootstrap's Form Documentation</a>.</p>

\t\t      </div>
\t\t  </div>
\t\t  <!-- /.row -->

\t</div>
\t<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
";
        
        $__internal_531b5700e031364e19e9e55cc85f657bad8cecb062869000177c4cee144984bd->leave($__internal_531b5700e031364e19e9e55cc85f657bad8cecb062869000177c4cee144984bd_prof);

    }

    public function getTemplateName()
    {
        return "sensor/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/layout.html.twig' %}*/
/* {% block title %}Sensor | Index{% endblock %}*/
/* {% block main_body %}*/
/*  <div class="page-wrapper">*/
/* */
/* 	<div class="container-fluid">*/
/* */
/* 		  <!-- Page Heading -->*/
/* 		  <div class="row">*/
/* 		      <div class="col-lg-12">*/
/* 		          <h1 class="page-header">*/
/* 		              Forms*/
/* 		          </h1>*/
/* 		          <ol class="breadcrumb">*/
/* 		              <li>*/
/* 		                  <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>*/
/* 		              </li>*/
/* 		              <li class="active">*/
/* 		                  <i class="fa fa-edit"></i> Forms*/
/* 		              </li>*/
/* 		          </ol>*/
/* 		      </div>*/
/* 		  </div>*/
/* 		  <!-- /.row -->*/
/* */
/* 		  <div class="row">*/
/* 		      <div class="col-lg-6">*/
/* */
/* 		          <form role="form">*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>Text Input</label>*/
/* 		                  <input class="form-control">*/
/* 		                  <p class="help-block">Example block-level help text here.</p>*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>Text Input with Placeholder</label>*/
/* 		                  <input class="form-control" placeholder="Enter text">*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>Static Control</label>*/
/* 		                  <p class="form-control-static">email@example.com</p>*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>File input</label>*/
/* 		                  <input type="file">*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>Text area</label>*/
/* 		                  <textarea class="form-control" rows="3"></textarea>*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>Checkboxes</label>*/
/* 		                  <div class="checkbox">*/
/* 		                      <label>*/
/* 		                          <input type="checkbox" value="">Checkbox 1*/
/* 		                      </label>*/
/* 		                  </div>*/
/* 		                  <div class="checkbox">*/
/* 		                      <label>*/
/* 		                          <input type="checkbox" value="">Checkbox 2*/
/* 		                      </label>*/
/* 		                  </div>*/
/* 		                  <div class="checkbox">*/
/* 		                      <label>*/
/* 		                          <input type="checkbox" value="">Checkbox 3*/
/* 		                      </label>*/
/* 		                  </div>*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>Inline Checkboxes</label>*/
/* 		                  <label class="checkbox-inline">*/
/* 		                      <input type="checkbox">1*/
/* 		                  </label>*/
/* 		                  <label class="checkbox-inline">*/
/* 		                      <input type="checkbox">2*/
/* 		                  </label>*/
/* 		                  <label class="checkbox-inline">*/
/* 		                      <input type="checkbox">3*/
/* 		                  </label>*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>Radio Buttons</label>*/
/* 		                  <div class="radio">*/
/* 		                      <label>*/
/* 		                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1*/
/* 		                      </label>*/
/* 		                  </div>*/
/* 		                  <div class="radio">*/
/* 		                      <label>*/
/* 		                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2*/
/* 		                      </label>*/
/* 		                  </div>*/
/* 		                  <div class="radio">*/
/* 		                      <label>*/
/* 		                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3*/
/* 		                      </label>*/
/* 		                  </div>*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>Inline Radio Buttons</label>*/
/* 		                  <label class="radio-inline">*/
/* 		                      <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1*/
/* 		                  </label>*/
/* 		                  <label class="radio-inline">*/
/* 		                      <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2*/
/* 		                  </label>*/
/* 		                  <label class="radio-inline">*/
/* 		                      <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3*/
/* 		                  </label>*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>Selects</label>*/
/* 		                  <select class="form-control">*/
/* 		                      <option>1</option>*/
/* 		                      <option>2</option>*/
/* 		                      <option>3</option>*/
/* 		                      <option>4</option>*/
/* 		                      <option>5</option>*/
/* 		                  </select>*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group">*/
/* 		                  <label>Multiple Selects</label>*/
/* 		                  <select multiple class="form-control">*/
/* 		                      <option>1</option>*/
/* 		                      <option>2</option>*/
/* 		                      <option>3</option>*/
/* 		                      <option>4</option>*/
/* 		                      <option>5</option>*/
/* 		                  </select>*/
/* 		              </div>*/
/* */
/* 		              <button type="submit" class="btn btn-default">Submit Button</button>*/
/* 		              <button type="reset" class="btn btn-default">Reset Button</button>*/
/* */
/* 		          </form>*/
/* */
/* 		      </div>*/
/* 		      <div class="col-lg-6">*/
/* 		          <h1>Disabled Form States</h1>*/
/* */
/* 		          <form role="form">*/
/* */
/* 		              <fieldset disabled>*/
/* */
/* 		                  <div class="form-group">*/
/* 		                      <label for="disabledSelect">Disabled input</label>*/
/* 		                      <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>*/
/* 		                  </div>*/
/* */
/* 		                  <div class="form-group">*/
/* 		                      <label for="disabledSelect">Disabled select menu</label>*/
/* 		                      <select id="disabledSelect" class="form-control">*/
/* 		                          <option>Disabled select</option>*/
/* 		                      </select>*/
/* 		                  </div>*/
/* */
/* 		                  <div class="checkbox">*/
/* 		                      <label>*/
/* 		                          <input type="checkbox">Disabled Checkbox*/
/* 		                      </label>*/
/* 		                  </div>*/
/* */
/* 		                  <button type="submit" class="btn btn-primary">Disabled Button</button>*/
/* */
/* 		              </fieldset>*/
/* */
/* 		          </form>*/
/* */
/* 		          <h1>Form Validation</h1>*/
/* */
/* 		          <form role="form">*/
/* */
/* 		              <div class="form-group has-success">*/
/* 		                  <label class="control-label" for="inputSuccess">Input with success</label>*/
/* 		                  <input type="text" class="form-control" id="inputSuccess">*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group has-warning">*/
/* 		                  <label class="control-label" for="inputWarning">Input with warning</label>*/
/* 		                  <input type="text" class="form-control" id="inputWarning">*/
/* 		              </div>*/
/* */
/* 		              <div class="form-group has-error">*/
/* 		                  <label class="control-label" for="inputError">Input with error</label>*/
/* 		                  <input type="text" class="form-control" id="inputError">*/
/* 		              </div>*/
/* */
/* 		          </form>*/
/* */
/* 		         */
/* */
/* 		          <p>For complete documentation, please visit <a href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a>.</p>*/
/* */
/* 		      </div>*/
/* 		  </div>*/
/* 		  <!-- /.row -->*/
/* */
/* 	</div>*/
/* 	<!-- /.container-fluid -->*/
/* </div>*/
/* <!-- /#page-wrapper -->*/
/* {% endblock %}*/
/* */
