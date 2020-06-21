<?php

/* hostooSanteBundle:menus:menucaisse.html.twig */
class __TwigTemplate_896729d7eddcc810958fd31b5d9bde664577c13122ae06446c013d2ba5f059b7 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:menus:menucaisse.html.twig"));

        // line 1
        echo "
    <li class=\"text-muted menu-title\">Navigation</li>

    ";
        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) {
            // line 5
            echo "
    <li class=\"has_sub\">
        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Reception</span> <span class=\"menu-arrow\"></span> </a>
        <ul class=\"list-unstyled\">

            <li class=\"\">
                <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_t_b");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span>Tableau de bord</span> </a>
            </li>
            <li>
                <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-accounts-list\"></i> <span>Liste des patients</span> <span class=\"menu-arrow\"></span> </a>

            </li>
           <li>
               <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_savepatient");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-account-add\"></i> <span>Ajouter patient </span> <span class=\"menu-arrow\"></span> </a>

           </li>

            <li class=\"\">
                <a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("les_episodes");
            echo "\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Les Frequentations</span> <span class=\"menu-arrow\"></span> </a>
            </li>
            <li class=\"\">
                <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_de_frequentation");
            echo "\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Rapport des Frequentations</span> <span class=\"menu-arrow\"></span> </a>
            </li>
            <li class=\"\">
                <a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarifs_med");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Tarifs</span> <span class=\"menu-arrow\"></span> </a>
            </li>
            <li class=\"\">
                <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_creerdv");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-traffic\"></i> <span>Fil d'Attente </span> <span class=\"menu-arrow\"></span> </a>
            </li>
            <li class=\"\">
            <li class=\"\">
                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-agenda\"></i> <span>Planning</span> <span class=\"menu-arrow\"></span> </a>

                <ul>
                    <li>
                        <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rdvmed_show_today");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-case\"></i> <span>Rendez-vous </span> <span class=\"menu-arrow\"></span> </a>
                    </li>
                </ul>
            </li>

            <li class=\"has_sub\">
                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Approvisionnement</span> </a>
                <ul>
                    <li>
                        <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_new");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Nouvel Article</span> </a>
                    </li>

                    <li>
                        <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_index");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Mes Articles</span> </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("requisition_index");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Requisitions</span> </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    ";
        }
        // line 63
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER")) {
            // line 64
            echo "    ";
            // line 65
            echo "        ";
            // line 66
            echo "        ";
            // line 67
            echo "                <li class=\"\">
                    <a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listeactes");
            echo "\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Caisse</span> <span class=\"menu-arrow\"></span> </a>
                </li>
        <li class=\"\">
                    <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("journal_de_caisse");
            echo "\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Perceptions</span> <span class=\"menu-arrow\"></span> </a>
                </li>
        <li class=\"\">
            <a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarifs_med");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Tarifs</span> <span class=\"menu-arrow\"></span> </a>
        </li>
        <li class=\"\">
            <a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cloture_index");
            echo "\" class=\"waves-effect\"><i class=\"fa fa-lock\"></i> <span>Mes Clotures</span> <span class=\"menu-arrow\"></span> </a>
        </li>
                <li class=\"\">
                    <a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listeactest");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-item\"></i> <span>Toutes les factures</span> <span class=\"menu-arrow\"></span> </a>
                </li>
            ";
            // line 83
            echo "                ";
            // line 84
            echo "            ";
            // line 85
            echo "            <li class=\"has_sub\">
                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-files-o\"></i><span class=\"label label-default pull-right\">6</span><span>Rapport Caisse</span> </a>
                <ul>
                    <li class=\"\">
                        <a href=\"";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapportcaissejr_index");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-file-text\"></i><span class=\"label label-default pull-right\">6</span><span>Rapport du Jour</span> </a>

                    </li>
                    <li class=\"\">
                        <a href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_du_mois");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-file-text\"></i><span class=\"label label-default pull-right\">6</span><span>Rapport des mois</span> </a>

                    </li>
                </ul>
            </li>
        ";
            // line 99
            echo "    ";
            // line 100
            echo "    ";
        }
        // line 101
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_INFIRMIER")) {
            // line 102
            echo "    <li class=\"has_sud\">
        <a href=\"#\" >Salle des soins</a>
    <ul>
    <li class=\"\">
        <a href=\"";
            // line 106
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listprelevE");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Tous les dates</span> <span class=\"menu-arrow\"></span> </a>
    </li>

    <li class=\"\">
        <a href=\"";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listprelev");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-time-interval\"></i> <span>Aujourd'hui</span> <span class=\"menu-arrow\"></span> </a>

    </li>
    <li class=\"\">
        <a href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_de_frequentation");
            echo "\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Rapport des Frequentations</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"has_sub\">
        <a href=\"";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actes_listes");
            echo "\" class=\"waves-effect\"><i class=\"fa fa-money\"></i> <span>Caisse</span> </a>
    </li> <li class=\"has_sub\">
        <a href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hospitalisation_index");
            echo "\" class=\"waves-effect\"><i class=\"fa fa-hospital-o\"></i> <span>Hospitalisation</span> </a>
    </li>
    <li class=\"has_sub\">
        <a href=\"";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_creerdvd");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-case\"></i> <span>Affecter au médécin </span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"has_sub\">
        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Approvisionnement</span> </a>
        <ul>
            <li>
                <a href=\"";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_new");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Nouvel Article</span> </a>
            </li>

            <li>
                <a href=\"";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_index");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Mes Articles</span> </a>
            </li>
            <li>
                <a href=\"";
            // line 135
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("requisition_index");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Requisitions</span> </a>
            </li>
        </ul>
    </li>
    </ul>
    </li>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:menus:menucaisse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 135,  249 => 132,  242 => 128,  233 => 122,  227 => 119,  222 => 117,  216 => 114,  209 => 110,  202 => 106,  196 => 102,  193 => 101,  190 => 100,  188 => 99,  180 => 93,  173 => 89,  167 => 85,  165 => 84,  163 => 83,  158 => 80,  152 => 77,  146 => 74,  140 => 71,  134 => 68,  131 => 67,  129 => 66,  127 => 65,  125 => 64,  122 => 63,  112 => 56,  106 => 53,  99 => 49,  87 => 40,  76 => 32,  70 => 29,  64 => 26,  58 => 23,  50 => 18,  43 => 14,  37 => 11,  29 => 5,  27 => 4,  22 => 1,);
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

    {% if is_granted('ROLE_RECEPTION') %}

    <li class=\"has_sub\">
        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Reception</span> <span class=\"menu-arrow\"></span> </a>
        <ul class=\"list-unstyled\">

            <li class=\"\">
                <a href=\"{{ path('reception_t_b') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span>Tableau de bord</span> </a>
            </li>
            <li>
                <a href=\"{{ path('hostoo_sante_listepatients') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-accounts-list\"></i> <span>Liste des patients</span> <span class=\"menu-arrow\"></span> </a>

            </li>
           <li>
               <a href=\"{{ path('hostoo_sante_savepatient') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-account-add\"></i> <span>Ajouter patient </span> <span class=\"menu-arrow\"></span> </a>

           </li>

            <li class=\"\">
                <a href=\"{{ path('les_episodes') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Les Frequentations</span> <span class=\"menu-arrow\"></span> </a>
            </li>
            <li class=\"\">
                <a href=\"{{ path('rapport_de_frequentation') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Rapport des Frequentations</span> <span class=\"menu-arrow\"></span> </a>
            </li>
            <li class=\"\">
                <a href=\"{{ path('tarifs_med') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Tarifs</span> <span class=\"menu-arrow\"></span> </a>
            </li>
            <li class=\"\">
                <a href=\"{{ path('hostoo_sante_creerdv') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-traffic\"></i> <span>Fil d'Attente </span> <span class=\"menu-arrow\"></span> </a>
            </li>
            <li class=\"\">
            <li class=\"\">
                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-agenda\"></i> <span>Planning</span> <span class=\"menu-arrow\"></span> </a>

                <ul>
                    <li>
                        <a href=\"{{ path('rdvmed_show_today') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-case\"></i> <span>Rendez-vous </span> <span class=\"menu-arrow\"></span> </a>
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
        </ul>
    </li>
    {% endif %}
    {% if is_granted('ROLE_CAISSIER') %}
    {#<li class=\"has_sub\">#}
        {#<a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-item\"></i><span class=\"label label-default pull-right\">8</span><span> Caisse </span></a>#}
        {#<ul class=\"list-unstyled\">#}
                <li class=\"\">
                    <a href=\"{{ path('hostoo_sante_listeactes') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Caisse</span> <span class=\"menu-arrow\"></span> </a>
                </li>
        <li class=\"\">
                    <a href=\"{{ path('journal_de_caisse') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Perceptions</span> <span class=\"menu-arrow\"></span> </a>
                </li>
        <li class=\"\">
            <a href=\"{{ path('tarifs_med') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Tarifs</span> <span class=\"menu-arrow\"></span> </a>
        </li>
        <li class=\"\">
            <a href=\"{{ path('cloture_index') }}\" class=\"waves-effect\"><i class=\"fa fa-lock\"></i> <span>Mes Clotures</span> <span class=\"menu-arrow\"></span> </a>
        </li>
                <li class=\"\">
                    <a href=\"{{ path('hostoo_sante_listeactest') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-item\"></i> <span>Toutes les factures</span> <span class=\"menu-arrow\"></span> </a>
                </li>
            {#<li class=\"\">#}
                {#<a href=\"{{ path('caisse_medecins') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i><span>Les Medecins</span> </a>#}
            {#</li>#}
            <li class=\"has_sub\">
                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-files-o\"></i><span class=\"label label-default pull-right\">6</span><span>Rapport Caisse</span> </a>
                <ul>
                    <li class=\"\">
                        <a href=\"{{ path('rapportcaissejr_index') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-file-text\"></i><span class=\"label label-default pull-right\">6</span><span>Rapport du Jour</span> </a>

                    </li>
                    <li class=\"\">
                        <a href=\"{{ path('rapport_du_mois') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-file-text\"></i><span class=\"label label-default pull-right\">6</span><span>Rapport des mois</span> </a>

                    </li>
                </ul>
            </li>
        {#</ul>#}
    {#</li>#}
    {% endif %}
    {% if is_granted('ROLE_INFIRMIER') %}
    <li class=\"has_sud\">
        <a href=\"#\" >Salle des soins</a>
    <ul>
    <li class=\"\">
        <a href=\"{{ path('hostoo_sante_listprelevE') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Tous les dates</span> <span class=\"menu-arrow\"></span> </a>
    </li>

    <li class=\"\">
        <a href=\"{{ path('hostoo_sante_listprelev') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-time-interval\"></i> <span>Aujourd'hui</span> <span class=\"menu-arrow\"></span> </a>

    </li>
    <li class=\"\">
        <a href=\"{{ path('rapport_de_frequentation') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Rapport des Frequentations</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"has_sub\">
        <a href=\"{{ path('actes_listes') }}\" class=\"waves-effect\"><i class=\"fa fa-money\"></i> <span>Caisse</span> </a>
    </li> <li class=\"has_sub\">
        <a href=\"{{ path('hospitalisation_index') }}\" class=\"waves-effect\"><i class=\"fa fa-hospital-o\"></i> <span>Hospitalisation</span> </a>
    </li>
    <li class=\"has_sub\">
        <a href=\"{{ path('hostoo_sante_creerdvd') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-case\"></i> <span>Affecter au médécin </span> <span class=\"menu-arrow\"></span> </a>
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
    </ul>
    </li>
    {% endif %}
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
    </li>#}", "hostooSanteBundle:menus:menucaisse.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/menus/menucaisse.html.twig");
    }
}
