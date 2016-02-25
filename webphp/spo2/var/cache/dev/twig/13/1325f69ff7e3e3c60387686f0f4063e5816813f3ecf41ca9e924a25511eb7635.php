<?php

/* layout/_navigator.html.twig~ */
class __TwigTemplate_eb059f90ac2874dad886f0fec9823956d318d436b436afd3b2521ba287c5d498 extends Twig_Template
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
        $__internal_24efc8d8cacccb5def8ad84ea8f9478ca2159a1fe165c4e065c1f31f0bf7bbce = $this->env->getExtension("native_profiler");
        $__internal_24efc8d8cacccb5def8ad84ea8f9478ca2159a1fe165c4e065c1f31f0bf7bbce->enter($__internal_24efc8d8cacccb5def8ad84ea8f9478ca2159a1fe165c4e065c1f31f0bf7bbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/_navigator.html.twig~"));

        // line 1
        echo "        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu message-dropdown\">
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-footer\">
                            <a href=\"#\">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu alert-dropdown\">
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">View All</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> John Smith <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"active\">
                        <a href=\"index.html\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
                    </li>
\t\t\t\t\t\t\t\t\t\t<li>
                        <a href=\"charts.html\"><i class=\"fa fa-fw fa-bar-chart-o\"></i>My Sensors</a>
                    </li>
\t\t\t\t\t\t\t\t\t  <li>
                        <a href=\"charts.html\"><i class=\"fa fa-fw fa-bar-chart-o\"></i>Spo2 Charts</a>
                    </li>
                    <li>
                        <a href=\"charts.html\"><i class=\"fa fa-fw fa-bar-chart-o\"></i>MoveMonitor Charts</a>
                    </li>  
\t\t\t\t\t\t\t\t\t\t<li>
                        <a href=\"index.html\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Analyse</a>
                    </li>               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
";
        
        $__internal_24efc8d8cacccb5def8ad84ea8f9478ca2159a1fe165c4e065c1f31f0bf7bbce->leave($__internal_24efc8d8cacccb5def8ad84ea8f9478ca2159a1fe165c4e065c1f31f0bf7bbce_prof);

    }

    public function getTemplateName()
    {
        return "layout/_navigator.html.twig~";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="index.html">Admin</a>*/
/*             </div>*/
/*             <!-- Top Menu Items -->*/
/*             <ul class="nav navbar-right top-nav">*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu message-dropdown">*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="media-heading"><strong>John Smith</strong>*/
/*                                         </h5>*/
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="media-heading"><strong>John Smith</strong>*/
/*                                         </h5>*/
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="media-heading"><strong>John Smith</strong>*/
/*                                         </h5>*/
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-footer">*/
/*                             <a href="#">Read All New Messages</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu alert-dropdown">*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">View All</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*             <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->*/
/*             <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                 <ul class="nav navbar-nav side-nav">*/
/*                     <li class="active">*/
/*                         <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>*/
/*                     </li>*/
/* 										<li>*/
/*                         <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i>My Sensors</a>*/
/*                     </li>*/
/* 									  <li>*/
/*                         <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i>Spo2 Charts</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i>MoveMonitor Charts</a>*/
/*                     </li>  */
/* 										<li>*/
/*                         <a href="index.html"><i class="fa fa-fw fa-bar-chart-o"></i> Analyse</a>*/
/*                     </li>               */
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </nav>*/
/* */
