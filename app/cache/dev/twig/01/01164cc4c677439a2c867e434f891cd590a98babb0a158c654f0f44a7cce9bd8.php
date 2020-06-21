<?php

/* hostooSanteBundle::blank.html.twig */
class __TwigTemplate_d47e8ad612319980fb5d04b0c75c28662d3b33a770a2ebfb5d0307c9c53d2703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'menu' => [$this, 'block_menu'],
            'options' => [$this, 'block_options'],
            'titrepage' => [$this, 'block_titrepage'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle::blank.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\">
    <meta name=\"author\" content=\"calculus-system\">

    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo/logo_hostoo.png"), "html", null, true);
        echo "\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
    ";
        // line 24
        echo "
</head>

<body class=\"fixed-left\">

<!-- Begin page -->
<!-- Begin page -->
<div id=\"wrapper\">

    <!-- Top Bar Start -->
    <div class=\"topbar\">

        <!-- LOGO -->
        <div class=\"topbar-left\">
            <div class=\"text-center\">
                <a href=\"#\" class=\"logo\">
                    <i class=\"zmdi zmdi-toys icon-c-logo\"></i>
                    <span>
    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo/logoepamed.jpg"), "html", null, true);
        echo "\" alt=\"logo\" style=\"width: 54px;\"></span>
                </a>
            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"\">
                    <div class=\"pull-left\">
                        <button class=\"button-menu-mobile open-left waves-effect waves-light\">
                            <i class=\"zmdi zmdi-menu\"></i>
                        </button>
                        <span class=\"clearfix\"></span>
                    </div>

                    ";
        // line 59
        echo "                        ";
        // line 60
        echo "                        ";
        // line 61
        echo "                    ";
        // line 62
        echo "

                    <ul class=\"nav navbar-nav navbar-right pull-right\">
                        ";
        // line 66
        echo "                            ";
        // line 67
        echo "                            ";
        // line 68
        echo "                                ";
        // line 69
        echo "                                    ";
        // line 70
        echo "                                        ";
        // line 71
        echo "                                            ";
        // line 72
        echo "                                        ";
        // line 73
        echo "                                        ";
        // line 74
        echo "                                            ";
        // line 75
        echo "                                            ";
        // line 76
        echo "                                        ";
        // line 77
        echo "                                    ";
        // line 78
        echo "                                ";
        // line 79
        echo "                            ";
        // line 80
        echo "                            ";
        // line 81
        echo "                        ";
        // line 82
        echo "                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSE")) {
            // line 83
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actes_listes");
            echo "\" class=\"bg-danger text-white fa-2x\"><i class=\"badge ti-money m-r-5\"></i> Caisse</a></li>
                        ";
        }
        // line 85
        echo "                        <li class=\"dropdown user-box\">
                            <a href=\"#\" class=\"dropdown-toggle waves-effect waves-light profile \" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo/logo_hostoo.png"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle user-img\">
                                <div class=\"user-status away\"><i class=\"zmdi zmdi-dot-circle\"></i></div>
                            </a>

                            <ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\"><i class=\"ti-user m-r-5\"></i> Profile</a></li>
                                ";
        // line 94
        echo "                                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\"><i class=\"ti-lock m-r-5\"></i> Changer de Mot de passe</a></li>
                                <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"ti-power-off m-r-5\"></i> Deconnexion</a></li>
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
            <!--- Divider -->
            <div id=\"sidebar-menu\">
                <ul>
                    ";
        // line 115
        $this->displayBlock('menu', $context, $blocks);
        // line 189
        echo "                <div class=\"clearfix\"></div>
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
                    <div class=\"col-sm-12\">

                        <div class=\"btn-group pull-right m-t-5 m-b-20\">";
        // line 212
        $this->displayBlock('options', $context, $blocks);
        // line 214
        echo "                        </div>

                        <h4 class=\"page-title\">";
        // line 216
        $this->displayBlock('titrepage', $context, $blocks);
        echo "</h4>
                    </div>
                </div>
                ";
        // line 219
        $this->displayBlock('body', $context, $blocks);
        // line 222
        echo "
            </div> <!-- container -->

        </div> <!-- content -->

        <footer class=\"footer\">
            2017 © Hostoo by <a href=\"http://calculus-system.net/\" target=\"_blank\" class=\"text-muted\">calculus-system</a>
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class=\"side-bar right-bar\">
        <a href=\"javascript:void(0);\" class=\"right-bar-toggle\">
            <i class=\"zmdi zmdi-close-circle-o\"></i>
        </a>
        <h4 class=\"\">Notifications</h4>
        <div class=\"notification-list nicescroll\">
            <ul class=\"list-group list-no-border user-list\">
                <li class=\"list-group-item\">
                    <a href=\"#\" class=\"user-list-item\">
                        <div class=\"avatar\">
                            <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"user-desc\">
                            <span class=\"name\">Michael Zenaty</span>
                            <span class=\"desc\">There are new settings available</span>
                            <span class=\"time\">2 hours ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"#\" class=\"user-list-item\">
                        <div class=\"icon\">
                            <i class=\"zmdi zmdi-account\"></i>
                        </div>
                        <div class=\"user-desc\">
                            <span class=\"name\">New Signup</span>
                            <span class=\"desc\">There are new settings available</span>
                            <span class=\"time\">5 hours ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"#\" class=\"user-list-item\">
                        <div class=\"icon\">
                            <i class=\"zmdi zmdi-comment\"></i>
                        </div>
                        <div class=\"user-desc\">
                            <span class=\"name\">New Message received</span>
                            <span class=\"desc\">There are new settings available</span>
                            <span class=\"time\">1 day ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"#\" class=\"user-list-item\">
                        <div class=\"avatar\">
                            <img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"user-desc\">
                            <span class=\"name\">James Anderson</span>
                            <span class=\"desc\">There are new settings available</span>
                            <span class=\"time\">2 days ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"list-group-item active\">
                    <a href=\"#\" class=\"user-list-item\">
                        <div class=\"icon\">
                            <i class=\"zmdi zmdi-settings\"></i>
                        </div>
                        <div class=\"user-desc\">
                            <span class=\"name\">Settings</span>
                            <span class=\"desc\">There are new settings available</span>
                            <span class=\"time\">1 day ago</span>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <!-- /Right-bar -->


</div>
<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>
";
        // line 319
        $this->displayBlock('javascripts', $context, $blocks);
        // line 336
        echo "</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hostoo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 115
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 116
        echo "                    <li class=\"text-muted menu-title\">Navigation</li>

                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span> Dashboard </span> </a>
                    </li>

                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Patients</span> <span class=\"menu-arrow\"></span> </a>
                        <ul class=\"list-unstyled\">
                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-invert-colors\"></i> <span>Privés</span> <span class=\"menu-arrow\"></span> </a>
                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-invert-colors\"></i> <span>Conventionnées </span> <span class=\"menu-arrow\"></span> </a>

                        </ul>
                    </li>
                    ";
        // line 187
        echo "                </ul>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 212
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 213
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 216
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 219
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 220
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 319
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 320
        echo "    <!-- jQuery  -->
    <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

    <!-- App js -->
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.core.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle::blank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 334,  514 => 333,  508 => 330,  504 => 329,  500 => 328,  496 => 327,  492 => 326,  488 => 325,  484 => 324,  480 => 323,  476 => 322,  472 => 321,  469 => 320,  463 => 319,  455 => 220,  449 => 219,  438 => 216,  431 => 213,  425 => 212,  417 => 187,  401 => 116,  395 => 115,  386 => 20,  382 => 19,  378 => 18,  374 => 17,  370 => 16,  366 => 15,  361 => 14,  355 => 13,  343 => 12,  334 => 336,  332 => 319,  294 => 284,  255 => 248,  227 => 222,  225 => 219,  219 => 216,  215 => 214,  213 => 212,  188 => 189,  186 => 115,  163 => 95,  158 => 94,  149 => 87,  145 => 85,  139 => 83,  136 => 82,  134 => 81,  132 => 80,  130 => 79,  128 => 78,  126 => 77,  124 => 76,  122 => 75,  120 => 74,  118 => 73,  116 => 72,  114 => 71,  112 => 70,  110 => 69,  108 => 68,  106 => 67,  104 => 66,  99 => 62,  97 => 61,  95 => 60,  93 => 59,  74 => 42,  54 => 24,  51 => 22,  49 => 13,  45 => 12,  40 => 10,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\">
    <meta name=\"author\" content=\"calculus-system\">

    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/logo/logo_hostoo.png') }}\">

    <title>{% block title %}Hostoo{% endblock %}</title>
    {% block stylesheets %}
        <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/css/menu.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/css/core.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/css/components.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/css/icons.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/css/pages.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/css/responsive.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    {% endblock %}

    {#<script src=\"{{ asset('assets/js/modernizr.min.js') }}\"></script>#}

</head>

<body class=\"fixed-left\">

<!-- Begin page -->
<!-- Begin page -->
<div id=\"wrapper\">

    <!-- Top Bar Start -->
    <div class=\"topbar\">

        <!-- LOGO -->
        <div class=\"topbar-left\">
            <div class=\"text-center\">
                <a href=\"#\" class=\"logo\">
                    <i class=\"zmdi zmdi-toys icon-c-logo\"></i>
                    <span>
    <img src=\"{{ asset('assets/images/logo/logoepamed.jpg') }}\" alt=\"logo\" style=\"width: 54px;\"></span>
                </a>
            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"\">
                    <div class=\"pull-left\">
                        <button class=\"button-menu-mobile open-left waves-effect waves-light\">
                            <i class=\"zmdi zmdi-menu\"></i>
                        </button>
                        <span class=\"clearfix\"></span>
                    </div>

                    {#<form role=\"search\" method=\"post\" class=\"navbar-left app-search pull-left hidden-xs\" action=\"{{ path('recherche_patient') }}\">#}
                        {#<input type=\"text\" placeholder=\"Search...\" id=\"motcle\" name=\"motcle\" class=\"form-control\" style=\"background-color: white\">#}
                        {#<a href=\"#\"><i class=\"fa fa-search\"></i></a>#}
                    {#</form>#}


                    <ul class=\"nav navbar-nav navbar-right pull-right\">
                        {#<li>#}
                            {#<!-- Notification -->#}
                            {#<div class=\"notification-box\">#}
                                {#<ul class=\"list-inline m-b-0\">#}
                                    {#<li>#}
                                        {#<a href=\"javascript:void(0);\" class=\"right-bar-toggle\">#}
                                            {#<i class=\"zmdi zmdi-notifications-none\"></i>#}
                                        {#</a>#}
                                        {#<div class=\"noti-dot\">#}
                                            {#<span class=\"dot\"></span>#}
                                            {#<span class=\"pulse\"></span>#}
                                        {#</div>#}
                                    {#</li>#}
                                {#</ul>#}
                            {#</div>#}
                            {#<!-- End Notification bar -->#}
                        {#</li>#}
                        {% if is_granted('ROLE_CAISSE') %}
                                <li><a href=\"{{ path('actes_listes') }}\" class=\"bg-danger text-white fa-2x\"><i class=\"badge ti-money m-r-5\"></i> Caisse</a></li>
                        {% endif %}
                        <li class=\"dropdown user-box\">
                            <a href=\"#\" class=\"dropdown-toggle waves-effect waves-light profile \" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                <img src=\"{{ asset('assets/images/logo/logo_hostoo.png') }}\" alt=\"user-img\" class=\"img-circle user-img\">
                                <div class=\"user-status away\"><i class=\"zmdi zmdi-dot-circle\"></i></div>
                            </a>

                            <ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\"><i class=\"ti-user m-r-5\"></i> Profile</a></li>
                                {#<li><a href=\"javascript:void(0)\"><i class=\"ti-settings m-r-5\"></i> Settings</a></li>#}
                                <li><a href=\"{{ path('fos_user_change_password') }}\"><i class=\"ti-lock m-r-5\"></i> Changer de Mot de passe</a></li>
                                <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"ti-power-off m-r-5\"></i> Deconnexion</a></li>
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
            <!--- Divider -->
            <div id=\"sidebar-menu\">
                <ul>
                    {% block menu %}
                    <li class=\"text-muted menu-title\">Navigation</li>

                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span> Dashboard </span> </a>
                    </li>

                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Patients</span> <span class=\"menu-arrow\"></span> </a>
                        <ul class=\"list-unstyled\">
                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-invert-colors\"></i> <span>Privés</span> <span class=\"menu-arrow\"></span> </a>
                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-invert-colors\"></i> <span>Conventionnées </span> <span class=\"menu-arrow\"></span> </a>

                        </ul>
                    </li>
                    {#
                                        <li class=\"has_sub\">
                                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-case\"></i> <span>Rendez-vous </span> <span class=\"menu-arrow\"></span> </a>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"javascript:void(0);\">Sends</a></li>
                                                <li><a href=\"javascript:void(0);\">Received</a></li>
                                            </ul>
                                        </li>

                                        <li class=\"has_sub\">
                                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span> Commissions </span> </a>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"form-elements.html\">Total Commission</a></li>
                                                <li><a href=\"form-advanced.html\">Commission par Agence</a></li>
                                                <li><a href=\"form-validation.html\">Commission des envois</a></li>
                                                <li><a href=\"form-wizard.html\">Commission des receptions</a></li>
                                                <li><a href=\"form-summernote.html\">Summernote</a></li>
                                                <li><a href=\"form-uploads.html\">Form Uploads</a></li>
                                            </ul>
                                        </li>


                                        <li class=\"text-muted menu-title\">More</li>

                                        <li class=\"has_sub\">
                                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-item\">

                    </i><span class=\"label label-default pull-right\">8</span><span> Pages </span></a>
                                            <ul class=\"list-unstyled\">
                                                <li><a href=\"page-starter.html\">Starter Page</a></li>
                                                <li><a href=\"page-timeline.html\">Timeline</a></li>
                                                <li><a href=\"page-login.html\">Login</a></li>
                                                <li><a href=\"page-register.html\">Register</a></li>
                                                <li><a href=\"page-recoverpw.html\">Recover Password</a></li>
                                                <li><a href=\"page-lock-screen.html\">Lock Screen</a></li>
                                                <li><a href=\"page-confirm-mail.html\">Confirm Mail</a></li>
                                                <li><a href=\"page-404.html\">Error 404</a></li>
                                            </ul>
                                        </li>

                                        <li class=\"has_sub\">
                                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"ti-share\"></i><span> Multi Level </span> <span class=\"menu-arrow\"></span></a>
                                            <ul>
                                                <li class=\"has_sub\">
                                                    <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"menu-arrow\"></span></a>
                                                    <ul style=\"\">
                                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                                </li>
                                            </ul>
                                        </li>
                    #}
                </ul>
                {% endblock %}
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
                    <div class=\"col-sm-12\">

                        <div class=\"btn-group pull-right m-t-5 m-b-20\">{% block options %}
                            {% endblock %}
                        </div>

                        <h4 class=\"page-title\">{% block titrepage %}{% endblock %}</h4>
                    </div>
                </div>
                {% block body %}

                {% endblock %}

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class=\"footer\">
            2017 © Hostoo by <a href=\"http://calculus-system.net/\" target=\"_blank\" class=\"text-muted\">calculus-system</a>
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class=\"side-bar right-bar\">
        <a href=\"javascript:void(0);\" class=\"right-bar-toggle\">
            <i class=\"zmdi zmdi-close-circle-o\"></i>
        </a>
        <h4 class=\"\">Notifications</h4>
        <div class=\"notification-list nicescroll\">
            <ul class=\"list-group list-no-border user-list\">
                <li class=\"list-group-item\">
                    <a href=\"#\" class=\"user-list-item\">
                        <div class=\"avatar\">
                            <img src=\"{{ asset('assets/images/users/avatar-2.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"user-desc\">
                            <span class=\"name\">Michael Zenaty</span>
                            <span class=\"desc\">There are new settings available</span>
                            <span class=\"time\">2 hours ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"#\" class=\"user-list-item\">
                        <div class=\"icon\">
                            <i class=\"zmdi zmdi-account\"></i>
                        </div>
                        <div class=\"user-desc\">
                            <span class=\"name\">New Signup</span>
                            <span class=\"desc\">There are new settings available</span>
                            <span class=\"time\">5 hours ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"#\" class=\"user-list-item\">
                        <div class=\"icon\">
                            <i class=\"zmdi zmdi-comment\"></i>
                        </div>
                        <div class=\"user-desc\">
                            <span class=\"name\">New Message received</span>
                            <span class=\"desc\">There are new settings available</span>
                            <span class=\"time\">1 day ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"#\" class=\"user-list-item\">
                        <div class=\"avatar\">
                            <img src=\"{{ asset('assets/images/users/avatar-3.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"user-desc\">
                            <span class=\"name\">James Anderson</span>
                            <span class=\"desc\">There are new settings available</span>
                            <span class=\"time\">2 days ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"list-group-item active\">
                    <a href=\"#\" class=\"user-list-item\">
                        <div class=\"icon\">
                            <i class=\"zmdi zmdi-settings\"></i>
                        </div>
                        <div class=\"user-desc\">
                            <span class=\"name\">Settings</span>
                            <span class=\"desc\">There are new settings available</span>
                            <span class=\"time\">1 day ago</span>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <!-- /Right-bar -->


</div>
<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>
{% block javascripts %}
    <!-- jQuery  -->
    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/detect.js') }}\"></script>
    <script src=\"{{ asset('assets/js/fastclick.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.slimscroll.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.blockUI.js') }}\"></script>
    <script src=\"{{ asset('assets/js/waves.js') }}\"></script>
    <script src=\"{{ asset('assets/js/wow.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.nicescroll.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.scrollTo.min.js') }}\"></script>

    <!-- App js -->
    <script src=\"{{ asset('assets/js/jquery.core.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.app.js') }}\"></script>
{% endblock %}
</body>

</html>", "hostooSanteBundle::blank.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/blank.html.twig");
    }
}
