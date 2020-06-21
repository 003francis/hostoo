<?php

/* hostooUserBundle:menus:menuadmin.html.twig */
class __TwigTemplate_3329c1ab45da552110396b7aba9c6f180b9f5d2e8bf5c412d8fab105d4187b26 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooUserBundle:menus:menuadmin.html.twig"));

        // line 1
        echo "
<li class=\"text-muted menu-title\">Navigation</li>

<li class=\"has_sub\">
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_admin_t_b");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span>Tableau de Bord </span> </a>
</li>

<li class=\"has_sub\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-users\"></i> <span>Utilisateurs</span> <span class=\"menu-arrow\"></span> </a>
    <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_user_homepage");
        echo "\"><i class=\"fa fa-list\"></i> Liste des Utilisateurs</a></li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_user_creeruser");
        echo "\"><i class=\"zmdi zmdi-account-add\"></i>Nouvel utilisateur</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_service_ajouter");
        echo "\"><i class=\"zmdi zmdi-plus-1\"></i>Ajouter un service</a></li>
    </ul>
</li>
<li class=\"has_sub\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-hospital-o\"></i> <span>Actes Médicaux</span> <span class=\"menu-arrow\"></span> </a>
    <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_actes");
        echo "\">Liste des actes</a></li>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_cree_une_categorie");
        echo "\"> Catégories des actes</a></li>
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creer_acte");
        echo "\">Nouvel acte médical</a></li>
    </ul>
</li>

<li class=\"has_sub\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-medkit\"></i> <span>Pharmacie</span> <span class=\"menu-arrow\"></span> </a>
    <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_pharmacie_homepage");
        echo "\">Liste des produts</a></li>
        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_ajoutercatt");
        echo "\"> Catégories des Produits</a></li>
        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_ajouternature");
        echo "\">Nouvelle Nature</a></li>
        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_ajouterproduit");
        echo "\">Nouveau Produit</a></li>
    </ul>
</li>

<li class=\"has_sub\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-hospital-o\"></i> <span>Conventions</span> <span class=\"menu-arrow\"></span> </a>
    <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_conventions");
        echo "\">Liste des conventions</a></li>
        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_addformule");
        echo "\">Formules</a></li>
        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nouvelle_convention");
        echo "\">Nouvelle Convention</a></li>
    </ul>
</li>

<li class=\"\">
    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_createrdv");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-time-interval\"></i> <span>Rendez-vous </span> <span class=\"menu-arrow\"></span> </a>

</li>
<li class=\"\">
    <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importe_les_patients");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-import-export\"></i><span class=\"label label-default pull-right\">6</span><span>Importer les patients</span> </a>

</li>
<li class=\"\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Bon d'approvisionnement</span> </a>

</li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooUserBundle:menus:menuadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  110 => 45,  102 => 40,  98 => 39,  94 => 38,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  62 => 21,  58 => 20,  54 => 19,  45 => 13,  41 => 12,  37 => 11,  28 => 5,  22 => 1,);
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
    <a href=\"{{ path('_admin_t_b') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span>Tableau de Bord </span> </a>
</li>

<li class=\"has_sub\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-users\"></i> <span>Utilisateurs</span> <span class=\"menu-arrow\"></span> </a>
    <ul class=\"list-unstyled\">
        <li><a href=\"{{ path('hostoo_user_homepage') }}\"><i class=\"fa fa-list\"></i> Liste des Utilisateurs</a></li>
        <li><a href=\"{{ path('hostoo_user_creeruser') }}\"><i class=\"zmdi zmdi-account-add\"></i>Nouvel utilisateur</a></li>
        <li><a href=\"{{ path('hostoo_service_ajouter') }}\"><i class=\"zmdi zmdi-plus-1\"></i>Ajouter un service</a></li>
    </ul>
</li>
<li class=\"has_sub\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-hospital-o\"></i> <span>Actes Médicaux</span> <span class=\"menu-arrow\"></span> </a>
    <ul class=\"list-unstyled\">
        <li><a href=\"{{ path('liste_actes') }}\">Liste des actes</a></li>
        <li><a href=\"{{ path('_cree_une_categorie') }}\"> Catégories des actes</a></li>
        <li><a href=\"{{ path('creer_acte') }}\">Nouvel acte médical</a></li>
    </ul>
</li>

<li class=\"has_sub\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-medkit\"></i> <span>Pharmacie</span> <span class=\"menu-arrow\"></span> </a>
    <ul class=\"list-unstyled\">
        <li><a href=\"{{ path('hostoo_pharmacie_homepage') }}\">Liste des produts</a></li>
        <li><a href=\"{{ path('hp_ajoutercatt') }}\"> Catégories des Produits</a></li>
        <li><a href=\"{{ path('hp_ajouternature') }}\">Nouvelle Nature</a></li>
        <li><a href=\"{{ path('hp_ajouterproduit') }}\">Nouveau Produit</a></li>
    </ul>
</li>

<li class=\"has_sub\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-hospital-o\"></i> <span>Conventions</span> <span class=\"menu-arrow\"></span> </a>
    <ul class=\"list-unstyled\">
        <li><a href=\"{{ path('liste_conventions') }}\">Liste des conventions</a></li>
        <li><a href=\"{{ path('hostoo_sante_addformule') }}\">Formules</a></li>
        <li><a href=\"{{ path('nouvelle_convention') }}\">Nouvelle Convention</a></li>
    </ul>
</li>

<li class=\"\">
    <a href=\"{{ path('hostoo_sante_createrdv') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-time-interval\"></i> <span>Rendez-vous </span> <span class=\"menu-arrow\"></span> </a>

</li>
<li class=\"\">
    <a href=\"{{ path('importe_les_patients') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-import-export\"></i><span class=\"label label-default pull-right\">6</span><span>Importer les patients</span> </a>

</li>
<li class=\"\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Bon d'approvisionnement</span> </a>

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
</li>
#}", "hostooUserBundle:menus:menuadmin.html.twig", "/var/www/html/hostoo/src/hostoo/UserBundle/Resources/views/menus/menuadmin.html.twig");
    }
}
