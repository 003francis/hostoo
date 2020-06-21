<?php

/* hostooSanteBundle:ImporterDonnees:importe_les_patients.html.twig */
class __TwigTemplate_ac3c09acc910f0509f02390bbc91976ef7388b87e2a91c7d09dced6b1e7f0d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:ImporterDonnees:importe_les_patients.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titrepage' => [$this, 'block_titrepage'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "hostooSanteBundle::blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:ImporterDonnees:importe_les_patients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Importer les patients";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Importer les patients";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "    ";
        $this->loadTemplate("hostooUserBundle:menus:menuadmin.html.twig", "hostooSanteBundle:ImporterDonnees:importe_les_patients.html.twig", 6)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"card-box\">
<form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importe_les_patients");
        echo "\" method=\"post\" class=\"form-inline\">
    <div class=\"form-group input-group\">
    <input name=\"fileC\" type=\"file\" class=\"\">
            <div class=\"input-group-btn\">
    <button type=\"submit\" class=\"btn btn-danger waves-effect\">Importer</button>

    </div></div>

</form>

<h4>Dependants</h4>
    <form action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importe_les_dependants");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-inline\">
        <div class=\"form-group input-group\">
            <input name=\"fileD\" type=\"file\" class=\"\">
            <div class=\"input-group-btn\">
                <button type=\"submit\" class=\"btn btn-success waves-effect\">Importer</button>

            </div></div>

    </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:ImporterDonnees:importe_les_patients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  84 => 10,  81 => 9,  75 => 8,  67 => 6,  61 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"hostooSanteBundle::blank.html.twig\" %}

{% block title %}Importer les patients{% endblock %}
{% block titrepage %}Importer les patients{% endblock %}
{% block menu %}
    {% include 'hostooUserBundle:menus:menuadmin.html.twig' %}
{% endblock %}
{% block body %}
<div class=\"card-box\">
<form action=\"{{ path('importe_les_patients') }}\" method=\"post\" class=\"form-inline\">
    <div class=\"form-group input-group\">
    <input name=\"fileC\" type=\"file\" class=\"\">
            <div class=\"input-group-btn\">
    <button type=\"submit\" class=\"btn btn-danger waves-effect\">Importer</button>

    </div></div>

</form>

<h4>Dependants</h4>
    <form action=\"{{ path('importe_les_dependants') }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-inline\">
        <div class=\"form-group input-group\">
            <input name=\"fileD\" type=\"file\" class=\"\">
            <div class=\"input-group-btn\">
                <button type=\"submit\" class=\"btn btn-success waves-effect\">Importer</button>

            </div></div>

    </form>
    </div>
{% endblock %}
", "hostooSanteBundle:ImporterDonnees:importe_les_patients.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/ImporterDonnees/importe_les_patients.html.twig");
    }
}
