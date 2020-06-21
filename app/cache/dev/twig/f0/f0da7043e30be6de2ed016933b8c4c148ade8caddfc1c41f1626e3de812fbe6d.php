<?php

/* hostooUserBundle:menus:menuphar.html.twig */
class __TwigTemplate_513299e1994922ef0bc0989616a5e639f30dc38e503378616587d7615e508e0a extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooUserBundle:menus:menuphar.html.twig"));

        // line 1
        echo "
<li class=\"text-muted menu-title\">Navigation</li>

<li class=\"\">
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_pharmacie_tb");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span> Tableau de Bord </span> </a>
</li>


<li class=\"has_sub\">
    <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fa fa-medkit\"></i> <span>Pharmacie</span> <span class=\"menu-arrow\"></span> </a>
    <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_pharmacie_homepage");
        echo "\">Liste des produts</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_ajoutercatt");
        echo "\"> Catégories des Produits</a></li>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_ajouternature");
        echo "\">Nouvelle Nature</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_ajouterproduit");
        echo "\">Nouveau Produit</a></li>
    </ul>
</li>

<li class=\"\">
    <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_rapports");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-mail-reply\"></i> <span> Le journal Appro </span> </a>
</li>
<li class=\"\">
    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_rapports_conso");
        echo "\" class=\"waves-effect\"><i class=\"zmdi zmdi-mail-reply\"></i> <span> Le journal Conso </span> </a>
</li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooUserBundle:menus:menuphar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  58 => 20,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  28 => 5,  22 => 1,);
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

<li class=\"\">
    <a href=\"{{ path('hostoo_pharmacie_tb') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i> <span> Tableau de Bord </span> </a>
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

<li class=\"\">
    <a href=\"{{ path('hp_rapports') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-mail-reply\"></i> <span> Le journal Appro </span> </a>
</li>
<li class=\"\">
    <a href=\"{{ path('hp_rapports_conso') }}\" class=\"waves-effect\"><i class=\"zmdi zmdi-mail-reply\"></i> <span> Le journal Conso </span> </a>
</li>

", "hostooUserBundle:menus:menuphar.html.twig", "/var/www/html/hostoo/src/hostoo/UserBundle/Resources/views/menus/menuphar.html.twig");
    }
}
