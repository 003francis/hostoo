<?php

/* ::base.html.twig */
class __TwigTemplate_dda4ae38c644b13e7a1dae35a2c40bceff492df85a7346c03e4fda6870d2933a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"fixed-left\">

    <!-- Begin page -->
    <div id=\"wrapper\">

        <!-- Top Bar Start -->
        <div class=\"topbar\">
            <!-- LOGO -->
            <div class=\"topbar-left\">
                <div class=\"text-center\">
                    <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>MsgHostoo </span></a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"\">
                        <div class=\"pull-left\">
                            <button type=\"button\" class=\"button-menu-mobile open-left\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <span class=\"clearfix\"></span>
                        </div>
                        ";
        // line 54
        echo "                            ";
        // line 55
        echo "                                ";
        // line 56
        echo "                            ";
        // line 57
        echo "                            ";
        // line 58
        echo "                        ";
        // line 59
        echo "
                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                            <li class=\"dropdown hidden-xs\">
                                <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-lg\">
                                    <li class=\"text-center notifi-title\">Notification</li>
                                    <li class=\"list-group\">
                                        <!-- list item-->
                                        <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                        <small>There are
                                                            <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- last list item -->
                                        <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect\"><i class=\"md md-crop-free\"></i></a>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" class=\"right-bar-toggle waves-effect\"><i class=\"md md-chat\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=\"";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class=\"text-muted m-0\"></p>
                    </div>
                </div>
                <!--- Divider -->
                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"index.html\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Tableau de bord</span></a>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_index");
        echo "\">Inbox</a></li>
                                <li><a href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_new");
        echo "\">Compose Mail</a></li>
                                <li><a href=\"mail-read.html\">View Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"calendar.html\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>

                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"content-page\">
            <!-- Start content -->
            <div class=\"content\">
                <div class=\"container\">

                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12 hidden\">
                            <h4 class=\"pull-left page-title\">Blank Page</h4>
                            <ol class=\"breadcrumb pull-right\">
                                <li><a href=\"#\">Moltran</a></li>
                                <li><a href=\"#\">Pages</a></li>
                                <li class=\"active\">Blank Page</li>
                            </ol>
                        </div>
                    </div>
";
        // line 213
        $this->displayBlock('body', $context, $blocks);
        // line 214
        echo "                    <!-- Pls Remove -->
                    <div style=\"height:600px\"></div>


                </div> <!-- container -->

            </div> <!-- content -->

            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-1.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-2.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-3.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-4.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-5.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-6.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-7.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-8.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-9.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-10.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->
    
        ";
        // line 346
        $this->displayBlock('javascripts', $context, $blocks);
        // line 386
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <!--bootstrap-wysihtml5-->
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 213
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 346
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 347
        echo "            <script>
                var resizefunc = [];
            </script>

            <!-- Main  -->
            <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/detect.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/fastclick.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/waves.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/wow.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
            <!--Editor-->
            <script type=\"text/javascript\" src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets2/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>

            <script>
                jQuery(document).ready(function(){
                    \$('.wysihtml5').wysihtml5(

                    );
                });
            </script>
            <script>
                \$(function () {
                    // Select2
                    jQuery(\".select2\").select2({
                        width: '100%'
                    });
                });

            </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 367,  550 => 366,  545 => 364,  540 => 362,  536 => 361,  532 => 360,  528 => 359,  524 => 358,  520 => 357,  516 => 356,  512 => 355,  508 => 354,  504 => 353,  500 => 352,  493 => 347,  487 => 346,  475 => 213,  466 => 18,  461 => 16,  457 => 15,  453 => 14,  449 => 13,  445 => 12,  441 => 11,  437 => 10,  433 => 9,  429 => 8,  424 => 7,  418 => 6,  406 => 5,  397 => 386,  395 => 346,  261 => 214,  259 => 213,  218 => 175,  214 => 174,  194 => 157,  186 => 152,  179 => 148,  153 => 125,  85 => 59,  83 => 58,  81 => 57,  79 => 56,  77 => 55,  75 => 54,  38 => 20,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"{{ asset('assets2/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets2/css/core.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets2/css/icons.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets2/css/components.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets2/css/pages.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets2/css/menu.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets2/css/responsive.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('assets2/plugins/select2/dist/css/select2.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('assets2/plugins/select2/dist/css/select2-bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            <!--bootstrap-wysihtml5-->
            <link href=\"{{ asset('assets2/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock %}
        <script src=\"{{ asset('assets2/js/modernizr.min.js') }}\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"fixed-left\">

    <!-- Begin page -->
    <div id=\"wrapper\">

        <!-- Top Bar Start -->
        <div class=\"topbar\">
            <!-- LOGO -->
            <div class=\"topbar-left\">
                <div class=\"text-center\">
                    <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>MsgHostoo </span></a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"\">
                        <div class=\"pull-left\">
                            <button type=\"button\" class=\"button-menu-mobile open-left\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <span class=\"clearfix\"></span>
                        </div>
                        {#<form class=\"navbar-form pull-left\" role=\"search\">#}
                            {#<div class=\"form-group\">#}
                                {#<input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">#}
                            {#</div>#}
                            {#<button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>#}
                        {#</form>#}

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                            <li class=\"dropdown hidden-xs\">
                                <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-lg\">
                                    <li class=\"text-center notifi-title\">Notification</li>
                                    <li class=\"list-group\">
                                        <!-- list item-->
                                        <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                        <small>There are
                                                            <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- last list item -->
                                        <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect\"><i class=\"md md-crop-free\"></i></a>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" class=\"right-bar-toggle waves-effect\"><i class=\"md md-chat\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"{{ asset('assets/images/users/avatar-1.jpg') }}\" alt=\"user-img\" class=\"img-circle\"> </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=\"{{ asset('assets/images/users/avatar-1.jpg') }}\" alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">{{ app.user.username }}<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class=\"text-muted m-0\"></p>
                    </div>
                </div>
                <!--- Divider -->
                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"index.html\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Tableau de bord</span></a>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"{{ path('message_index') }}\">Inbox</a></li>
                                <li><a href=\"{{ path('message_new') }}\">Compose Mail</a></li>
                                <li><a href=\"mail-read.html\">View Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"calendar.html\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>

                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"content-page\">
            <!-- Start content -->
            <div class=\"content\">
                <div class=\"container\">

                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12 hidden\">
                            <h4 class=\"pull-left page-title\">Blank Page</h4>
                            <ol class=\"breadcrumb pull-right\">
                                <li><a href=\"#\">Moltran</a></li>
                                <li><a href=\"#\">Pages</a></li>
                                <li class=\"active\">Blank Page</li>
                            </ol>
                        </div>
                    </div>
{% block body %} {% endblock %}
                    <!-- Pls Remove -->
                    <div style=\"height:600px\"></div>


                </div> <!-- container -->

            </div> <!-- content -->

            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-1.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-2.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-3.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-4.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-5.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-6.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-7.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-8.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-9.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"assets2/images/users/avatar-10.jpg\" alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->
    
        {% block javascripts %}
            <script>
                var resizefunc = [];
            </script>

            <!-- Main  -->
            <script src=\"{{ asset('assets2/js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('assets2/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('assets2/js/detect.js') }}\"></script>
            <script src=\"{{ asset('assets2/js/fastclick.js') }}\"></script>
            <script src=\"{{ asset('assets2/js/jquery.slimscroll.js') }}\"></script>
            <script src=\"{{ asset('assets2/js/jquery.blockUI.js') }}\"></script>
            <script src=\"{{ asset('assets2/js/waves.js') }}\"></script>
            <script src=\"{{ asset('assets2/js/wow.min.js') }}\"></script>
            <script src=\"{{ asset('assets2/js/jquery.nicescroll.js') }}\"></script>
            <script src=\"{{ asset('assets2/js/jquery.scrollTo.min.js') }}\"></script>
            <script src=\"{{ asset('assets2/plugins/select2/dist/js/select2.min.js') }}\" type=\"text/javascript\"></script>

            <script src=\"{{ asset('assets2/js/jquery.app.js') }}\"></script>
            <!--Editor-->
            <script type=\"text/javascript\" src=\"{{ asset('assets2/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('assets2/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}\"></script>

            <script>
                jQuery(document).ready(function(){
                    \$('.wysihtml5').wysihtml5(

                    );
                });
            </script>
            <script>
                \$(function () {
                    // Select2
                    jQuery(\".select2\").select2({
                        width: '100%'
                    });
                });

            </script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/hostoo/app/Resources/views/base.html.twig");
    }
}
