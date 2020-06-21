<?php

/* hostooSanteBundle:menus:menudoc.html.twig */
class __TwigTemplate_49062616724c045a6b560f2761cbdf0bb1efb5746d4ba174ad824f68b2065a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:menus:menudoc.html.twig"));

        // line 1
        echo "
    <li class=\"text-muted menu-title\">Navigation</li>

    <li class=\"has_sub\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_tb");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span> Tableau de Bord </span> </a>
    </li>

    <li class=\"\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_patientsattente");
        echo "\" class=\"waves-effect\"><i class=\"fa fa-list-alt\"></i> <span>Fil d'attente</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examens_img_attente");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-time\"></i> <span>Examens Imagerie </span> <span class=\"menu-arrow\"></span> </a>
    </li>
    ";
        // line 15
        echo "        ";
        // line 16
        echo "    ";
        // line 17
        echo "
    <li class=\"\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patients_du_medecin");
        echo "\" class=\"waves-effect\"><i class=\"fa fa-users\"></i> <span>Patients réçus</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"\">
        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_de_frequentation");
        echo "\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Rapport des Frequentations</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"has_sub\">
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hospitalisation_index");
        echo "\" class=\"waves-effect\"><i class=\"fa fa-hospital-o\"></i> <span>Hospitalisation</span> </a>
    </li>
    <li class=\"\">
        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_createrdv");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-time-interval\"></i> <span>Rendez-vous </span> <span class=\"menu-arrow\"></span> </a>

    </li>
    <li class=\"\">
        <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_patients_med");
        echo "\" class=\"waves-effect\"><i class=\"fa fa-folder\"></i><span class=\"label label-default pull-right\">6</span><span>Dossier Patients</span> </a>

    </li>
    <li class=\"has_sub\">
        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("antecedent_new");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-flip-to-back\"></i><span class=\"label label-default pull-right\">6</span><span>Edition d'Antécédents</span> </a>
    <ul>
    <li>
        <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("antecedent_new");
        echo "\" class=\"waves-effect\"><i></i><span class=\"label label-default pull-right\">6</span><span>Antécédents</span> </a>

    </li>

        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeantecedent_new");
        echo "\" class=\"waves-effect\"><i></i><span class=\"label label-default pull-right\">6</span><span>Type d'antécédent</span> </a>

        </li>
        </ul>
    </li>
    <li class=\"has_sub\">
        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Approvisionnement</span> </a>
        <ul>
            <li>
                <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_new");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Nouvel Article</span> </a>
            </li>

            <li>
                <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_index");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Mes Articles</span> </a>
            </li>
            <li>
                <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("requisition_index");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Requisitions</span> </a>
            </li>
        </ul>
    </li>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:menus:menudoc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 60,  119 => 57,  112 => 53,  100 => 44,  92 => 39,  86 => 36,  79 => 32,  72 => 28,  66 => 25,  60 => 22,  54 => 19,  50 => 17,  48 => 16,  46 => 15,  41 => 12,  35 => 9,  28 => 5,  22 => 1,);
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
    <li class=\"text-muted menu-title\">Navigation</li>

    <li class=\"has_sub\">
        <a href=\"{{ path('medecin_tb') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span> Tableau de Bord </span> </a>
    </li>

    <li class=\"\">
        <a href=\"{{ path('hostoo_sante_patientsattente') }}\" class=\"waves-effect\"><i class=\"fa fa-list-alt\"></i> <span>Fil d'attente</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"\">
        <a href=\"{{ path('examens_img_attente') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-time\"></i> <span>Examens Imagerie </span> <span class=\"menu-arrow\"></span> </a>
    </li>
    {#<li class=\"\">#}
        {#<a href=\"{{ path('visa_index') }}\" class=\"waves-effect\"><i class=\"fa fa-cc-visa\"></i> Liste des Visas</a>#}
    {#</li>#}

    <li class=\"\">
        <a href=\"{{ path('patients_du_medecin') }}\" class=\"waves-effect\"><i class=\"fa fa-users\"></i> <span>Patients réçus</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"\">
        <a href=\"{{ path('rapport_de_frequentation') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Rapport des Frequentations</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"has_sub\">
        <a href=\"{{ path('hospitalisation_index') }}\" class=\"waves-effect\"><i class=\"fa fa-hospital-o\"></i> <span>Hospitalisation</span> </a>
    </li>
    <li class=\"\">
        <a href=\"{{ path('hostoo_sante_createrdv') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-time-interval\"></i> <span>Rendez-vous </span> <span class=\"menu-arrow\"></span> </a>

    </li>
    <li class=\"\">
        <a href=\"{{ path('liste_patients_med') }}\" class=\"waves-effect\"><i class=\"fa fa-folder\"></i><span class=\"label label-default pull-right\">6</span><span>Dossier Patients</span> </a>

    </li>
    <li class=\"has_sub\">
        <a href=\"{{ path('antecedent_new') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-flip-to-back\"></i><span class=\"label label-default pull-right\">6</span><span>Edition d'Antécédents</span> </a>
    <ul>
    <li>
        <a href=\"{{ path('antecedent_new') }}\" class=\"waves-effect\"><i></i><span class=\"label label-default pull-right\">6</span><span>Antécédents</span> </a>

    </li>

        <li>
            <a href=\"{{ path('typeantecedent_new') }}\" class=\"waves-effect\"><i></i><span class=\"label label-default pull-right\">6</span><span>Type d'antécédent</span> </a>

        </li>
        </ul>
    </li>
    <li class=\"has_sub\">
        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Approvisionnement</span> </a>
        <ul>
            <li>
                <a href=\"{{ path('req_article_new') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Nouvel Article</span> </a>
            </li>

            <li>
                <a href=\"{{ path('req_article_index') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Mes Articles</span> </a>
            </li>
            <li>
                <a href=\"{{ path('requisition_index') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Requisitions</span> </a>
            </li>
        </ul>
    </li>

    {#
        <li class=\"text-muted menu-title\">More</li>

        <li class=\"has_sub\">
            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-item\"></i><span class=\"label label-default pull-right\">8</span><span> Pages </span></a>
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
        </li>#}", "hostooSanteBundle:menus:menudoc.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/menus/menudoc.html.twig");
    }
}
