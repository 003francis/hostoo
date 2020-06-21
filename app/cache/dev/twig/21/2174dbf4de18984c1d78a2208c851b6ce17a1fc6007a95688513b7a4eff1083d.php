<?php

/* hostooSanteBundle:menus:menurc.html.twig */
class __TwigTemplate_9bb0c52fda4970aa167d897dc06e4d9c8d6aa127de4189bfc36d1042a133cf2b extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:menus:menurc.html.twig"));

        // line 1
        echo "
<li class=\"menu-title bg-primary text-white\"><strong>RECEPTION</strong></li>

    <li class=\"has_sub\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_t_b");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span>Tableau de bord</span> </a>
    </li>
    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) {
            // line 8
            echo "
            <li>
                <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-accounts-list\"></i> <span>Liste des patients</span> <span class=\"menu-arrow\"></span> </a>

            </li>
           <li>
               <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_savepatient");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-account-add\"></i> <span>Ajouter patient </span> <span class=\"menu-arrow\"></span> </a>

           </li>

            ";
            // line 19
            echo "                ";
            // line 20
            echo "            ";
            // line 21
            echo "            ";
            // line 22
            echo "                ";
            // line 23
            echo "            ";
            // line 24
            echo "            <li class=\"\">
                <a href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarifs_med");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Tarifs</span> <span class=\"menu-arrow\"></span> </a>
            </li>
        <li>
            <a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rdvmed_show_today");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-case\"></i> <span>Rendez-vous </span> <span class=\"menu-arrow\"></span> </a>
        </li>
        <li class=\"menu-title bg-primary text-white\"><strong>SALLE DES SOINS</strong></li>
            ";
            // line 32
            echo "                ";
            // line 33
            echo "            ";
            // line 34
            echo "
            ";
            // line 36
            echo "                ";
            // line 37
            echo "                ";
            // line 38
            echo "                    ";
            // line 39
            echo "                        ";
            // line 40
            echo "                    ";
            // line 41
            echo "
                    ";
            // line 43
            echo "                        ";
            // line 44
            echo "                    ";
            // line 45
            echo "                    ";
            // line 46
            echo "                        ";
            // line 47
            echo "                    ";
            // line 48
            echo "                ";
            // line 49
            echo "            ";
            // line 50
            echo "    ";
        }
        // line 51
        echo "    ";
        // line 52
        echo "    ";
        // line 53
        echo "        ";
        // line 54
        echo "        ";
        // line 55
        echo "                ";
        // line 56
        echo "                    ";
        // line 57
        echo "                ";
        // line 58
        echo "                ";
        // line 59
        echo "                    ";
        // line 60
        echo "                ";
        // line 61
        echo "            ";
        // line 62
        echo "                ";
        // line 63
        echo "            ";
        // line 64
        echo "            ";
        // line 65
        echo "                ";
        // line 66
        echo "                ";
        // line 67
        echo "                    ";
        // line 68
        echo "                        ";
        // line 69
        echo "
                    ";
        // line 71
        echo "                    ";
        // line 72
        echo "                        ";
        // line 73
        echo "
                    ";
        // line 75
        echo "                ";
        // line 76
        echo "            ";
        // line 77
        echo "        ";
        // line 78
        echo "    ";
        // line 79
        echo "    ";
        // line 80
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_INFIRMIER")) {
            // line 81
            echo "

    <li class=\"\">
        <a href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listprelev");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-traffic\"></i> <span>Fil d'attente</span> <span class=\"menu-arrow\"></span> </a>

    </li>
    <li class=\"\">
        ";
            // line 89
            echo "    </li>
    ";
            // line 91
            echo "        ";
            // line 92
            echo "    ";
            // line 93
            echo "        <li class=\"has_sub\">
        ";
            // line 95
            echo "    </li>
    <li class=\"has_sub\">
        <a href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_creerdvd");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-case\"></i> <span>Affecter au médécin </span> <span class=\"menu-arrow\"></span> </a>
    </li>
        <li class=\"\">
            <a href=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listprelevE");
            echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Registre</span> <span class=\"menu-arrow\"></span> </a>
        </li>
    ";
            // line 103
            echo "        ";
            // line 104
            echo "        ";
            // line 105
            echo "            ";
            // line 106
            echo "                ";
            // line 107
            echo "            ";
            // line 108
            echo "
            ";
            // line 110
            echo "                ";
            // line 111
            echo "            ";
            // line 112
            echo "            ";
            // line 113
            echo "                ";
            // line 114
            echo "            ";
            // line 115
            echo "        ";
            // line 116
            echo "    ";
            // line 117
            echo "    ";
            // line 118
            echo "    ";
            // line 119
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:menus:menurc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 119,  240 => 118,  238 => 117,  236 => 116,  234 => 115,  232 => 114,  230 => 113,  228 => 112,  226 => 111,  224 => 110,  221 => 108,  219 => 107,  217 => 106,  215 => 105,  213 => 104,  211 => 103,  206 => 100,  200 => 97,  196 => 95,  193 => 93,  191 => 92,  189 => 91,  186 => 89,  179 => 84,  174 => 81,  171 => 80,  169 => 79,  167 => 78,  165 => 77,  163 => 76,  161 => 75,  158 => 73,  156 => 72,  154 => 71,  151 => 69,  149 => 68,  147 => 67,  145 => 66,  143 => 65,  141 => 64,  139 => 63,  137 => 62,  135 => 61,  133 => 60,  131 => 59,  129 => 58,  127 => 57,  125 => 56,  123 => 55,  121 => 54,  119 => 53,  117 => 52,  115 => 51,  112 => 50,  110 => 49,  108 => 48,  106 => 47,  104 => 46,  102 => 45,  100 => 44,  98 => 43,  95 => 41,  93 => 40,  91 => 39,  89 => 38,  87 => 37,  85 => 36,  82 => 34,  80 => 33,  78 => 32,  72 => 28,  66 => 25,  63 => 24,  61 => 23,  59 => 22,  57 => 21,  55 => 20,  53 => 19,  46 => 14,  39 => 10,  35 => 8,  33 => 7,  28 => 5,  22 => 1,);
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
<li class=\"menu-title bg-primary text-white\"><strong>RECEPTION</strong></li>

    <li class=\"has_sub\">
        <a href=\"{{ path('reception_t_b') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span>Tableau de bord</span> </a>
    </li>
    {% if is_granted('ROLE_RECEPTION') %}

            <li>
                <a href=\"{{ path('hostoo_sante_listepatients') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-accounts-list\"></i> <span>Liste des patients</span> <span class=\"menu-arrow\"></span> </a>

            </li>
           <li>
               <a href=\"{{ path('hostoo_sante_savepatient') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-account-add\"></i> <span>Ajouter patient </span> <span class=\"menu-arrow\"></span> </a>

           </li>

            {#<li class=\"\">#}
                {#<a href=\"{{ path('les_episodes') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Les Frequentations</span> <span class=\"menu-arrow\"></span> </a>#}
            {#</li>#}
            {#<li class=\"\">#}
                {#<a href=\"{{ path('rapport_de_frequentation') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Rapport des Frequentations</span> <span class=\"menu-arrow\"></span> </a>#}
            {#</li>#}
            <li class=\"\">
                <a href=\"{{ path('tarifs_med') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Tarifs</span> <span class=\"menu-arrow\"></span> </a>
            </li>
        <li>
            <a href=\"{{ path('rdvmed_show_today') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-case\"></i> <span>Rendez-vous </span> <span class=\"menu-arrow\"></span> </a>
        </li>
        <li class=\"menu-title bg-primary text-white\"><strong>SALLE DES SOINS</strong></li>
            {#<li class=\"\">#}
                {#<a href=\"{{ path('hostoo_sante_creerdv') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-traffic\"></i> <span>Fil d'Attente </span> <span class=\"menu-arrow\"></span> </a>#}
            {#</li>#}

            {#<li class=\"has_sub\">#}
                {#<a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Approvisionnement</span> </a>#}
                {#<ul>#}
                    {#<li>#}
                        {#<a href=\"{{ path('req_article_new') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Nouvel Article</span> </a>#}
                    {#</li>#}

                    {#<li>#}
                        {#<a href=\"{{ path('req_article_index') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Mes Articles</span> </a>#}
                    {#</li>#}
                    {#<li>#}
                        {#<a href=\"{{ path('requisition_index') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Requisitions</span> </a>#}
                    {#</li>#}
                {#</ul>#}
            {#</li>#}
    {% endif %}
    {#{% if is_granted('ROLE_CAISSIER') %}#}
    {#<li class=\"has_sub\">#}
        {#<a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-item\"></i><span class=\"label label-default pull-right\">8</span><span> Caisse </span></a>#}
        {#<ul class=\"list-unstyled\">#}
                {#<li class=\"\">#}
                    {#<a href=\"{{ path('hostoo_sante_listeactes') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Caisse</span> <span class=\"menu-arrow\"></span> </a>#}
                {#</li>#}
                {#<li class=\"\">#}
                    {#<a href=\"{{ path('hostoo_sante_listeactest') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Toutes les factures</span> <span class=\"menu-arrow\"></span> </a>#}
                {#</li>#}
            {#<li class=\"\">#}
                {#<a href=\"{{ path('caisse_medecins') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i><span>Les Medecins</span> </a>#}
            {#</li>#}
            {#<li class=\"has_sub\">#}
                {#<a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-files-o\"></i><span class=\"label label-default pull-right\">6</span><span>Rapport Caisse</span> </a>#}
                {#<ul>#}
                    {#<li class=\"\">#}
                        {#<a href=\"{{ path('rapportcaissejr_index') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-file-text\"></i><span class=\"label label-default pull-right\">6</span><span>Rapport du Jour</span> </a>#}

                    {#</li>#}
                    {#<li class=\"\">#}
                        {#<a href=\"{{ path('rapport_du_mois') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-file-text\"></i><span class=\"label label-default pull-right\">6</span><span>Rapport des mois</span> </a>#}

                    {#</li>#}
                {#</ul>#}
            {#</li>#}
        {#</ul>#}
    {#</li>#}
    {#{% endif %}#}
    {% if is_granted('ROLE_INFIRMIER') %}


    <li class=\"\">
        <a href=\"{{ path('hostoo_sante_listprelev') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-traffic\"></i> <span>Fil d'attente</span> <span class=\"menu-arrow\"></span> </a>

    </li>
    <li class=\"\">
        {#<a href=\"{{ path('rapport_de_frequentation') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Rapport des Frequentations</span> <span class=\"menu-arrow\"></span> </a>#}
    </li>
    {#<li class=\"has_sub\">#}
        {#<a href=\"{{ path('actes_listes') }}\" class=\"waves-effect\"><i class=\"fa fa-money\"></i> <span>Caisse</span> </a>#}
    {#</li> #}
        <li class=\"has_sub\">
        {#<a href=\"{{ path('hospitalisation_index') }}\" class=\"waves-effect\"><i class=\"fa fa-hospital-o\"></i> <span>Hospitalisation</span> </a>#}
    </li>
    <li class=\"has_sub\">
        <a href=\"{{ path('hostoo_sante_creerdvd') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-case\"></i> <span>Affecter au médécin </span> <span class=\"menu-arrow\"></span> </a>
    </li>
        <li class=\"\">
            <a href=\"{{ path('hostoo_sante_listprelevE') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Registre</span> <span class=\"menu-arrow\"></span> </a>
        </li>
    {#<li class=\"has_sub\">#}
        {#<a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Approvisionnement</span> </a>#}
        {#<ul>#}
            {#<li>#}
                {#<a href=\"{{ path('req_article_new') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Nouvel Article</span> </a>#}
            {#</li>#}

            {#<li>#}
                {#<a href=\"{{ path('req_article_index') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Mes Articles</span> </a>#}
            {#</li>#}
            {#<li>#}
                {#<a href=\"{{ path('requisition_index') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-collection-text\"></i><span class=\"label label-default pull-right\">6</span><span>Requisitions</span> </a>#}
            {#</li>#}
        {#</ul>#}
    {#</li>#}
    {#</ul>#}
    {#</li>#}
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
    </li>#}", "hostooSanteBundle:menus:menurc.html.twig", "C:\\wamp64\\www\\hostoo\\src\\hostoo\\SanteBundle/Resources/views/menus/menurc.html.twig");
    }
}
