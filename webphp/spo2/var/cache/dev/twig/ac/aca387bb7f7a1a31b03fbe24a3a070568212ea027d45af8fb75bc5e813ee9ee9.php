<?php

/* graph/index.html.twig~ */
class __TwigTemplate_55cd10ec47ea9b604ef8b5d242db112e19f08a34e55f5389558f8c04f9211cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "graph/index.html.twig~", 1);
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
        $__internal_f401e63c224d12927ce57e6800d6e9d2ddcf2de6f35bcc2506e19f654f3a0820 = $this->env->getExtension("native_profiler");
        $__internal_f401e63c224d12927ce57e6800d6e9d2ddcf2de6f35bcc2506e19f654f3a0820->enter($__internal_f401e63c224d12927ce57e6800d6e9d2ddcf2de6f35bcc2506e19f654f3a0820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "graph/index.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f401e63c224d12927ce57e6800d6e9d2ddcf2de6f35bcc2506e19f654f3a0820->leave($__internal_f401e63c224d12927ce57e6800d6e9d2ddcf2de6f35bcc2506e19f654f3a0820_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a5e07890ddba66d66d4f21c0f8a19d8c054a40c1331a83b645eb32a284e13df = $this->env->getExtension("native_profiler");
        $__internal_6a5e07890ddba66d66d4f21c0f8a19d8c054a40c1331a83b645eb32a284e13df->enter($__internal_6a5e07890ddba66d66d4f21c0f8a19d8c054a40c1331a83b645eb32a284e13df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "<title>Index | Graph</title>
";
        
        $__internal_6a5e07890ddba66d66d4f21c0f8a19d8c054a40c1331a83b645eb32a284e13df->leave($__internal_6a5e07890ddba66d66d4f21c0f8a19d8c054a40c1331a83b645eb32a284e13df_prof);

    }

    // line 8
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_ad5434ed84734efefa20cd9a3b6b2e47703c56fd9709a66870eeec03d252e776 = $this->env->getExtension("native_profiler");
        $__internal_ad5434ed84734efefa20cd9a3b6b2e47703c56fd9709a66870eeec03d252e776->enter($__internal_ad5434ed84734efefa20cd9a3b6b2e47703c56fd9709a66870eeec03d252e776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 9
        echo "<div id=\"page-wrapper\">

    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    Dashboard <small>Statistics Overview</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li class=\"active\">
                        <i class=\"fa fa-dashboard\"></i> Dashboard
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"alert alert-info alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    <i class=\"fa fa-info-circle\"></i>  <strong>Like SB Admin?</strong> Try out <a href=\"http://startbootstrap.com/template-overviews/sb-admin-2\" class=\"alert-link\">SB Admin 2</a> for additional features!
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-comments fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div class=\"huge\">26</div>
                                <div>New Comments!</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">View Details</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"panel panel-green\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-tasks fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div class=\"huge\">12</div>
                                <div>New Tasks!</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">View Details</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"panel panel-yellow\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-shopping-cart fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div class=\"huge\">124</div>
                                <div>New Orders!</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">View Details</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"panel panel-red\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-support fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div class=\"huge\">13</div>
                                <div>Support Tickets!</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">View Details</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Area Chart</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div id=\"morris-area-chart\"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Donut Chart</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div id=\"morris-donut-chart\"></div>
                        <div class=\"text-right\">
                            <a href=\"#\">View Details <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-clock-o fa-fw\"></i> Tasks Panel</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"list-group\">
                            <a href=\"#\" class=\"list-group-item\">
                                <span class=\"badge\">just now</span>
                                <i class=\"fa fa-fw fa-calendar\"></i> Calendar updated
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <span class=\"badge\">4 minutes ago</span>
                                <i class=\"fa fa-fw fa-comment\"></i> Commented on a post
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <span class=\"badge\">23 minutes ago</span>
                                <i class=\"fa fa-fw fa-truck\"></i> Order 392 shipped
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <span class=\"badge\">46 minutes ago</span>
                                <i class=\"fa fa-fw fa-money\"></i> Invoice 653 has been paid
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <span class=\"badge\">1 hour ago</span>
                                <i class=\"fa fa-fw fa-user\"></i> A new user has been added
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <span class=\"badge\">2 hours ago</span>
                                <i class=\"fa fa-fw fa-check\"></i> Completed task: \"pick up dry cleaning\"
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <span class=\"badge\">yesterday</span>
                                <i class=\"fa fa-fw fa-globe\"></i> Saved the world
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <span class=\"badge\">two days ago</span>
                                <i class=\"fa fa-fw fa-check\"></i> Completed task: \"fix error on sales page\"
                            </a>
                        </div>
                        <div class=\"text-right\">
                            <a href=\"#\">View All Activity <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Transactions Panel</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                                <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Order Date</th>
                                        <th>Order Time</th>
                                        <th>Amount (USD)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3326</td>
                                        <td>10/21/2013</td>
                                        <td>3:29 PM</td>
                                        <td>\$321.33</td>
                                    </tr>
                                    <tr>
                                        <td>3325</td>
                                        <td>10/21/2013</td>
                                        <td>3:20 PM</td>
                                        <td>\$234.34</td>
                                    </tr>
                                    <tr>
                                        <td>3324</td>
                                        <td>10/21/2013</td>
                                        <td>3:03 PM</td>
                                        <td>\$724.17</td>
                                    </tr>
                                    <tr>
                                        <td>3323</td>
                                        <td>10/21/2013</td>
                                        <td>3:00 PM</td>
                                        <td>\$23.71</td>
                                    </tr>
                                    <tr>
                                        <td>3322</td>
                                        <td>10/21/2013</td>
                                        <td>2:49 PM</td>
                                        <td>\$8345.23</td>
                                    </tr>
                                    <tr>
                                        <td>3321</td>
                                        <td>10/21/2013</td>
                                        <td>2:23 PM</td>
                                        <td>\$245.12</td>
                                    </tr>
                                    <tr>
                                        <td>3320</td>
                                        <td>10/21/2013</td>
                                        <td>2:15 PM</td>
                                        <td>\$5663.54</td>
                                    </tr>
                                    <tr>
                                        <td>3319</td>
                                        <td>10/21/2013</td>
                                        <td>2:13 PM</td>
                                        <td>\$943.45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"text-right\">
                            <a href=\"#\">View All Transactions <i class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
";
        
        $__internal_ad5434ed84734efefa20cd9a3b6b2e47703c56fd9709a66870eeec03d252e776->leave($__internal_ad5434ed84734efefa20cd9a3b6b2e47703c56fd9709a66870eeec03d252e776_prof);

    }

    public function getTemplateName()
    {
        return "graph/index.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'layout/layout.html.twig' %}*/
/* */
/*      */
/* {% block title %}*/
/* <title>Index | Graph</title>*/
/* {% endblock %}*/
/* */
/* {% block main_body%}*/
/* <div id="page-wrapper">*/
/* */
/*     <div class="container-fluid">*/
/* */
/*         <!-- Page Heading -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">*/
/*                     Dashboard <small>Statistics Overview</small>*/
/*                 </h1>*/
/*                 <ol class="breadcrumb">*/
/*                     <li class="active">*/
/*                         <i class="fa fa-dashboard"></i> Dashboard*/
/*                     </li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="alert alert-info alert-dismissable">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*                     <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-3 col-md-6">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-3">*/
/*                                 <i class="fa fa-comments fa-5x"></i>*/
/*                             </div>*/
/*                             <div class="col-xs-9 text-right">*/
/*                                 <div class="huge">26</div>*/
/*                                 <div>New Comments!</div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <a href="#">*/
/*                         <div class="panel-footer">*/
/*                             <span class="pull-left">View Details</span>*/
/*                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-6">*/
/*                 <div class="panel panel-green">*/
/*                     <div class="panel-heading">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-3">*/
/*                                 <i class="fa fa-tasks fa-5x"></i>*/
/*                             </div>*/
/*                             <div class="col-xs-9 text-right">*/
/*                                 <div class="huge">12</div>*/
/*                                 <div>New Tasks!</div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <a href="#">*/
/*                         <div class="panel-footer">*/
/*                             <span class="pull-left">View Details</span>*/
/*                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-6">*/
/*                 <div class="panel panel-yellow">*/
/*                     <div class="panel-heading">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-3">*/
/*                                 <i class="fa fa-shopping-cart fa-5x"></i>*/
/*                             </div>*/
/*                             <div class="col-xs-9 text-right">*/
/*                                 <div class="huge">124</div>*/
/*                                 <div>New Orders!</div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <a href="#">*/
/*                         <div class="panel-footer">*/
/*                             <span class="pull-left">View Details</span>*/
/*                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-6">*/
/*                 <div class="panel panel-red">*/
/*                     <div class="panel-heading">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-3">*/
/*                                 <i class="fa fa-support fa-5x"></i>*/
/*                             </div>*/
/*                             <div class="col-xs-9 text-right">*/
/*                                 <div class="huge">13</div>*/
/*                                 <div>Support Tickets!</div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <a href="#">*/
/*                         <div class="panel-footer">*/
/*                             <span class="pull-left">View Details</span>*/
/*                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div id="morris-area-chart"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-4">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div id="morris-donut-chart"></div>*/
/*                         <div class="text-right">*/
/*                             <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-4">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="list-group">*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <span class="badge">just now</span>*/
/*                                 <i class="fa fa-fw fa-calendar"></i> Calendar updated*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <span class="badge">4 minutes ago</span>*/
/*                                 <i class="fa fa-fw fa-comment"></i> Commented on a post*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <span class="badge">23 minutes ago</span>*/
/*                                 <i class="fa fa-fw fa-truck"></i> Order 392 shipped*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <span class="badge">46 minutes ago</span>*/
/*                                 <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <span class="badge">1 hour ago</span>*/
/*                                 <i class="fa fa-fw fa-user"></i> A new user has been added*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <span class="badge">2 hours ago</span>*/
/*                                 <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <span class="badge">yesterday</span>*/
/*                                 <i class="fa fa-fw fa-globe"></i> Saved the world*/
/*                             </a>*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <span class="badge">two days ago</span>*/
/*                                 <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="text-right">*/
/*                             <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-4">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-bordered table-hover table-striped">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>Order #</th>*/
/*                                         <th>Order Date</th>*/
/*                                         <th>Order Time</th>*/
/*                                         <th>Amount (USD)</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     <tr>*/
/*                                         <td>3326</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>3:29 PM</td>*/
/*                                         <td>$321.33</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3325</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>3:20 PM</td>*/
/*                                         <td>$234.34</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3324</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>3:03 PM</td>*/
/*                                         <td>$724.17</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3323</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>3:00 PM</td>*/
/*                                         <td>$23.71</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3322</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>2:49 PM</td>*/
/*                                         <td>$8345.23</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3321</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>2:23 PM</td>*/
/*                                         <td>$245.12</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3320</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>2:15 PM</td>*/
/*                                         <td>$5663.54</td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>3319</td>*/
/*                                         <td>10/21/2013</td>*/
/*                                         <td>2:13 PM</td>*/
/*                                         <td>$943.45</td>*/
/*                                     </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                         <div class="text-right">*/
/*                             <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*     </div>*/
/*     <!-- /.container-fluid -->*/
/* */
/* </div>*/
/* <!-- /#page-wrapper -->*/
/* {% endblock %}*/
/* */
