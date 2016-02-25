<?php

/* sensor/show.html.twig */
class __TwigTemplate_113e35b84230fad12277e158a8ab9217f88ae383659226b438d654130fbc03fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "sensor/show.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d7b274d830d7ec09ff36a98747395a0273d520a9edb6377e9ebd5bf1800ce01 = $this->env->getExtension("native_profiler");
        $__internal_2d7b274d830d7ec09ff36a98747395a0273d520a9edb6377e9ebd5bf1800ce01->enter($__internal_2d7b274d830d7ec09ff36a98747395a0273d520a9edb6377e9ebd5bf1800ce01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d7b274d830d7ec09ff36a98747395a0273d520a9edb6377e9ebd5bf1800ce01->leave($__internal_2d7b274d830d7ec09ff36a98747395a0273d520a9edb6377e9ebd5bf1800ce01_prof);

    }

    // line 3
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_7442f3346fdd2e6a8b7365bb6a3c56e96acf0d1dd9dccd708a6e234361f74a11 = $this->env->getExtension("native_profiler");
        $__internal_7442f3346fdd2e6a8b7365bb6a3c56e96acf0d1dd9dccd708a6e234361f74a11->enter($__internal_7442f3346fdd2e6a8b7365bb6a3c56e96acf0d1dd9dccd708a6e234361f74a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 4
        echo " <div class=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            Forms
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

                <div class=\"row\">
                    <div class=\"col-lg-6\">

                        <form role=\"form\">

                            <div class=\"form-group\">
                                <label>Text Input</label>
                                <input class=\"form-control\">
                                <p class=\"help-block\">Example block-level help text here.</p>
                            </div>

                            <div class=\"form-group\">
                                <label>Text Input with Placeholder</label>
                                <input class=\"form-control\" placeholder=\"Enter text\">
                            </div>

                            <div class=\"form-group\">
                                <label>Static Control</label>
                                <p class=\"form-control-static\">email@example.com</p>
                            </div>

                            <div class=\"form-group\">
                                <label>File input</label>
                                <input type=\"file\">
                            </div>

                            <div class=\"form-group\">
                                <label>Text area</label>
                                <textarea class=\"form-control\" rows=\"3\"></textarea>
                            </div>

                            <div class=\"form-group\">
                                <label>Checkboxes</label>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"\">Checkbox 1
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"\">Checkbox 2
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" value=\"\">Checkbox 3
                                    </label>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label>Inline Checkboxes</label>
                                <label class=\"checkbox-inline\">
                                    <input type=\"checkbox\">1
                                </label>
                                <label class=\"checkbox-inline\">
                                    <input type=\"checkbox\">2
                                </label>
                                <label class=\"checkbox-inline\">
                                    <input type=\"checkbox\">3
                                </label>
                            </div>

                            <div class=\"form-group\">
                                <label>Radio Buttons</label>
                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>Radio 1
                                    </label>
                                </div>
                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">Radio 2
                                    </label>
                                </div>
                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\">Radio 3
                                    </label>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label>Inline Radio Buttons</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"optionsRadiosInline\" id=\"optionsRadiosInline1\" value=\"option1\" checked>1
                                </label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"optionsRadiosInline\" id=\"optionsRadiosInline2\" value=\"option2\">2
                                </label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"optionsRadiosInline\" id=\"optionsRadiosInline3\" value=\"option3\">3
                                </label>
                            </div>

                            <div class=\"form-group\">
                                <label>Selects</label>
                                <select class=\"form-control\">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class=\"form-group\">
                                <label>Multiple Selects</label>
                                <select multiple class=\"form-control\">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <button type=\"submit\" class=\"btn btn-default\">Submit Button</button>
                            <button type=\"reset\" class=\"btn btn-default\">Reset Button</button>

                        </form>

                    </div>
                    <div class=\"col-lg-6\">
                        <h1>Disabled Form States</h1>

                        <form role=\"form\">

                            <fieldset disabled>

                                <div class=\"form-group\">
                                    <label for=\"disabledSelect\">Disabled input</label>
                                    <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input\" disabled>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"disabledSelect\">Disabled select menu</label>
                                    <select id=\"disabledSelect\" class=\"form-control\">
                                        <option>Disabled select</option>
                                    </select>
                                </div>

                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\">Disabled Checkbox
                                    </label>
                                </div>

                                <button type=\"submit\" class=\"btn btn-primary\">Disabled Button</button>

                            </fieldset>

                        </form>

                        <h1>Form Validation</h1>

                        <form role=\"form\">

                            <div class=\"form-group has-success\">
                                <label class=\"control-label\" for=\"inputSuccess\">Input with success</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputSuccess\">
                            </div>

                            <div class=\"form-group has-warning\">
                                <label class=\"control-label\" for=\"inputWarning\">Input with warning</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputWarning\">
                            </div>

                            <div class=\"form-group has-error\">
                                <label class=\"control-label\" for=\"inputError\">Input with error</label>
                                <input type=\"text\" class=\"form-control\" id=\"inputError\">
                            </div>

                        </form>

                        <h1>Input Groups</h1>

                        <form role=\"form\">

                            <div class=\"form-group input-group\">
                                <span class=\"input-group-addon\">@</span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Username\">
                            </div>

                            <div class=\"form-group input-group\">
                                <input type=\"text\" class=\"form-control\">
                                <span class=\"input-group-addon\">.00</span>
                            </div>

                            <div class=\"form-group input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-eur\"></i></span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Font Awesome Icon\">
                            </div>

                            <div class=\"form-group input-group\">
                                <span class=\"input-group-addon\">\$</span>
                                <input type=\"text\" class=\"form-control\">
                                <span class=\"input-group-addon\">.00</span>
                            </div>

                            <div class=\"form-group input-group\">
                                <input type=\"text\" class=\"form-control\">
                                <span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button></span>
                            </div>

                        </form>

                        <p>For complete documentation, please visit <a href=\"http://getbootstrap.com/css/#forms\">Bootstrap's Form Documentation</a>.</p>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


";
        
        $__internal_7442f3346fdd2e6a8b7365bb6a3c56e96acf0d1dd9dccd708a6e234361f74a11->leave($__internal_7442f3346fdd2e6a8b7365bb6a3c56e96acf0d1dd9dccd708a6e234361f74a11_prof);

    }

    public function getTemplateName()
    {
        return "sensor/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout/layout.html.twig' %}*/
/* */
/* {% block main_body %}*/
/*  <div class="page-wrapper">*/
/* */
/*             <div class="container-fluid">*/
/* */
/*                 <!-- Page Heading -->*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <h1 class="page-header">*/
/*                             Forms*/
/*                         </h1>*/
/*                         <ol class="breadcrumb">*/
/*                             <li>*/
/*                                 <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>*/
/*                             </li>*/
/*                             <li class="active">*/
/*                                 <i class="fa fa-edit"></i> Forms*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-lg-6">*/
/* */
/*                         <form role="form">*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Text Input</label>*/
/*                                 <input class="form-control">*/
/*                                 <p class="help-block">Example block-level help text here.</p>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Text Input with Placeholder</label>*/
/*                                 <input class="form-control" placeholder="Enter text">*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Static Control</label>*/
/*                                 <p class="form-control-static">email@example.com</p>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>File input</label>*/
/*                                 <input type="file">*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Text area</label>*/
/*                                 <textarea class="form-control" rows="3"></textarea>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Checkboxes</label>*/
/*                                 <div class="checkbox">*/
/*                                     <label>*/
/*                                         <input type="checkbox" value="">Checkbox 1*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="checkbox">*/
/*                                     <label>*/
/*                                         <input type="checkbox" value="">Checkbox 2*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="checkbox">*/
/*                                     <label>*/
/*                                         <input type="checkbox" value="">Checkbox 3*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Inline Checkboxes</label>*/
/*                                 <label class="checkbox-inline">*/
/*                                     <input type="checkbox">1*/
/*                                 </label>*/
/*                                 <label class="checkbox-inline">*/
/*                                     <input type="checkbox">2*/
/*                                 </label>*/
/*                                 <label class="checkbox-inline">*/
/*                                     <input type="checkbox">3*/
/*                                 </label>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Radio Buttons</label>*/
/*                                 <div class="radio">*/
/*                                     <label>*/
/*                                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="radio">*/
/*                                     <label>*/
/*                                         <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="radio">*/
/*                                     <label>*/
/*                                         <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Inline Radio Buttons</label>*/
/*                                 <label class="radio-inline">*/
/*                                     <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1*/
/*                                 </label>*/
/*                                 <label class="radio-inline">*/
/*                                     <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2*/
/*                                 </label>*/
/*                                 <label class="radio-inline">*/
/*                                     <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3*/
/*                                 </label>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Selects</label>*/
/*                                 <select class="form-control">*/
/*                                     <option>1</option>*/
/*                                     <option>2</option>*/
/*                                     <option>3</option>*/
/*                                     <option>4</option>*/
/*                                     <option>5</option>*/
/*                                 </select>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label>Multiple Selects</label>*/
/*                                 <select multiple class="form-control">*/
/*                                     <option>1</option>*/
/*                                     <option>2</option>*/
/*                                     <option>3</option>*/
/*                                     <option>4</option>*/
/*                                     <option>5</option>*/
/*                                 </select>*/
/*                             </div>*/
/* */
/*                             <button type="submit" class="btn btn-default">Submit Button</button>*/
/*                             <button type="reset" class="btn btn-default">Reset Button</button>*/
/* */
/*                         </form>*/
/* */
/*                     </div>*/
/*                     <div class="col-lg-6">*/
/*                         <h1>Disabled Form States</h1>*/
/* */
/*                         <form role="form">*/
/* */
/*                             <fieldset disabled>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <label for="disabledSelect">Disabled input</label>*/
/*                                     <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <label for="disabledSelect">Disabled select menu</label>*/
/*                                     <select id="disabledSelect" class="form-control">*/
/*                                         <option>Disabled select</option>*/
/*                                     </select>*/
/*                                 </div>*/
/* */
/*                                 <div class="checkbox">*/
/*                                     <label>*/
/*                                         <input type="checkbox">Disabled Checkbox*/
/*                                     </label>*/
/*                                 </div>*/
/* */
/*                                 <button type="submit" class="btn btn-primary">Disabled Button</button>*/
/* */
/*                             </fieldset>*/
/* */
/*                         </form>*/
/* */
/*                         <h1>Form Validation</h1>*/
/* */
/*                         <form role="form">*/
/* */
/*                             <div class="form-group has-success">*/
/*                                 <label class="control-label" for="inputSuccess">Input with success</label>*/
/*                                 <input type="text" class="form-control" id="inputSuccess">*/
/*                             </div>*/
/* */
/*                             <div class="form-group has-warning">*/
/*                                 <label class="control-label" for="inputWarning">Input with warning</label>*/
/*                                 <input type="text" class="form-control" id="inputWarning">*/
/*                             </div>*/
/* */
/*                             <div class="form-group has-error">*/
/*                                 <label class="control-label" for="inputError">Input with error</label>*/
/*                                 <input type="text" class="form-control" id="inputError">*/
/*                             </div>*/
/* */
/*                         </form>*/
/* */
/*                         <h1>Input Groups</h1>*/
/* */
/*                         <form role="form">*/
/* */
/*                             <div class="form-group input-group">*/
/*                                 <span class="input-group-addon">@</span>*/
/*                                 <input type="text" class="form-control" placeholder="Username">*/
/*                             </div>*/
/* */
/*                             <div class="form-group input-group">*/
/*                                 <input type="text" class="form-control">*/
/*                                 <span class="input-group-addon">.00</span>*/
/*                             </div>*/
/* */
/*                             <div class="form-group input-group">*/
/*                                 <span class="input-group-addon"><i class="fa fa-eur"></i></span>*/
/*                                 <input type="text" class="form-control" placeholder="Font Awesome Icon">*/
/*                             </div>*/
/* */
/*                             <div class="form-group input-group">*/
/*                                 <span class="input-group-addon">$</span>*/
/*                                 <input type="text" class="form-control">*/
/*                                 <span class="input-group-addon">.00</span>*/
/*                             </div>*/
/* */
/*                             <div class="form-group input-group">*/
/*                                 <input type="text" class="form-control">*/
/*                                 <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>*/
/*                             </div>*/
/* */
/*                         </form>*/
/* */
/*                         <p>For complete documentation, please visit <a href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a>.</p>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/* */
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/* */
/*         </div>*/
/*         <!-- /#page-wrapper -->*/
/* */
/* */
/* {% endblock %}*/
/* */
