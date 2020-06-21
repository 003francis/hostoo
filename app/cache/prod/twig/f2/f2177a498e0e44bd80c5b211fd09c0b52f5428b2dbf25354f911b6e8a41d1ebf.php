<?php

/* cloture/show.html.twig */
class __TwigTemplate_9f3bd56c695ecfadc5f9d7f89964725c8bddb8b77b05727e3f6480d145256051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "cloture/show.html.twig", 1);
        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloture/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " ";
        $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "cloture/show.html.twig", 2)->display($context);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"card-box\">
    <h1>Cloture</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Numero</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"text-warning\">
                <th>Date d'ouverture</th>
                <td>";
        // line 15
        if ($this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "dateouverture", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "dateouverture", []), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>

            <tr class=\"text-danger\">
                <th>Date de fermeture</th>
                <td>";
        // line 20
        if ($this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "datefermeture", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "datefermeture", []), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Montant USD</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "montantusd", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Montant CDF</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "montantcdf", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    </div>
<div class=\"card-box\">
    <table class=\"table table-bordered\">
        <caption class=\"text-center\">VENTILATION</caption>
        <thead>
        <tr>
            <th>Service</th>
            <th>Nb. Actes</th>
            <th>montant</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["factures"] ?? $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 45
            echo "            <tr>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "nom", []), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "actes", []), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "montant", []), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
</div>
    ";
        // line 55
        echo "        ";
        // line 56
        echo "            ";
        // line 57
        echo "        ";
        // line 58
        echo "        ";
        // line 59
        echo "            ";
        // line 60
        echo "        ";
        // line 61
        echo "        ";
        // line 62
        echo "            ";
        // line 63
        echo "                ";
        // line 64
        echo "            ";
        // line 65
        echo "        ";
        // line 66
        echo "    ";
        // line 67
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cloture/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 67,  167 => 66,  165 => 65,  163 => 64,  161 => 63,  159 => 62,  157 => 61,  155 => 60,  153 => 59,  151 => 58,  149 => 57,  147 => 56,  145 => 55,  140 => 51,  131 => 48,  127 => 47,  123 => 46,  120 => 45,  116 => 44,  97 => 28,  90 => 24,  81 => 20,  71 => 15,  64 => 11,  55 => 4,  49 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'hostooSanteBundle::blank.html.twig' %}
{% block menu %} {% include 'hostooSanteBundle:menus:menucaisse.html.twig' %} {% endblock %}
{% block body %}
    <div class=\"card-box\">
    <h1>Cloture</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Numero</th>
                <td>{{ cloture.id }}</td>
            </tr>
            <tr class=\"text-warning\">
                <th>Date d'ouverture</th>
                <td>{% if cloture.dateouverture %}{{ cloture.dateouverture|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>

            <tr class=\"text-danger\">
                <th>Date de fermeture</th>
                <td>{% if cloture.datefermeture %}{{ cloture.datefermeture|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Montant USD</th>
                <td>{{ cloture.montantusd }}</td>
            </tr>
            <tr>
                <th>Montant CDF</th>
                <td>{{ cloture.montantcdf }}</td>
            </tr>
        </tbody>
    </table>
    </div>
<div class=\"card-box\">
    <table class=\"table table-bordered\">
        <caption class=\"text-center\">VENTILATION</caption>
        <thead>
        <tr>
            <th>Service</th>
            <th>Nb. Actes</th>
            <th>montant</th>
        </tr>
        </thead>
        <tbody>
        {% for cat in factures %}
            <tr>
                <td>{{ cat.nom }}</td>
                <td>{{ cat.actes }}</td>
                <td>{{ cat.montant }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('cloture_index') }}\">Back to the list</a>#}
        {#</li>#}
        {#<li>#}
            {#<a href=\"{{ path('cloture_edit', { 'id': cloture.id }) }}\">Edit</a>#}
        {#</li>#}
        {#<li>#}
            {#{{ form_start(delete_form) }}#}
                {#<input type=\"submit\" value=\"Delete\">#}
            {#{{ form_end(delete_form) }}#}
        {#</li>#}
    {#</ul>#}

{% endblock %}
", "cloture/show.html.twig", "/var/www/html/hostoo/app/Resources/views/cloture/show.html.twig");
    }
}
