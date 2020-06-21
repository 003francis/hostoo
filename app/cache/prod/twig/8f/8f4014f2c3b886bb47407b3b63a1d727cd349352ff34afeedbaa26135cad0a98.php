<?php

/* hostooSanteBundle:menus:menulabo.html.twig */
class __TwigTemplate_7edf9fca43a9fbbe7ef8484d840ce774d17ca23104d60035e2463b5e421699ea extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:menus:menulabo.html.twig"));

        // line 1
        echo "
    <li class=\"text-muted menu-title\">Navigation</li>

    <li class=\"has_sub\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("labo_tb");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span> Tableau de bord</span> </a>
    </li>

    <li class=\"\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_labo_dash");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Examens labo</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exattente");
        echo "\" class=\"waves-effect\"><i class=\"fa fa-clock-o\"></i> <span>Examens En Attente</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"\">
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examens_labo");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Resultats</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    ";
        // line 18
        echo "        ";
        // line 19
        echo "    ";
        // line 20
        echo "
    <li class=\"\">
        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnancelabo_index");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Registre</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"\">
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("valeurref_new");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Valeur des references</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    ";
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        // line 30
        echo "            ";
        // line 31
        echo "                ";
        // line 32
        echo "            ";
        // line 33
        echo "
            ";
        // line 35
        echo "                ";
        // line 36
        echo "            ";
        // line 37
        echo "            ";
        // line 38
        echo "                ";
        // line 39
        echo "            ";
        // line 40
        echo "        ";
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:menus:menulabo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  96 => 41,  94 => 40,  92 => 39,  90 => 38,  88 => 37,  86 => 36,  84 => 35,  81 => 33,  79 => 32,  77 => 31,  75 => 30,  73 => 29,  71 => 28,  66 => 25,  60 => 22,  56 => 20,  54 => 19,  52 => 18,  47 => 15,  41 => 12,  35 => 9,  28 => 5,  22 => 1,);
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
        <a href=\"{{ path('labo_tb') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span> Tableau de bord</span> </a>
    </li>

    <li class=\"\">
        <a href=\"{{ path('hostoo_labo_dash') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Examens labo</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"\">
        <a href=\"{{ path('exattente') }}\" class=\"waves-effect\"><i class=\"fa fa-clock-o\"></i> <span>Examens En Attente</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"\">
        <a href=\"{{ path('examens_labo') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Resultats</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    {#<li class=\"\">#}
        {#<a href=\"{{ path('rapport_de_frequentation') }}\" class=\"waves-effect\"><i class=\"fa fa-dollar\"></i> <span>Rapport des Frequentations</span> <span class=\"menu-arrow\"></span> </a>#}
    {#</li>#}

    <li class=\"\">
        <a href=\"{{ path('ordonnancelabo_index') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Registre</span> <span class=\"menu-arrow\"></span> </a>
    </li>
    <li class=\"\">
        <a href=\"{{ path('valeurref_new') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-nature-people\"></i> <span>Valeur des references</span> <span class=\"menu-arrow\"></span> </a>
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
        </li>#}", "hostooSanteBundle:menus:menulabo.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/menus/menulabo.html.twig");
    }
}
