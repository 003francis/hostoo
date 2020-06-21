<?php

/* resultatslabo\index.html.twig */
class __TwigTemplate_fafbac7508b6842f7aacefc0f03d7ed1cc37cd6d96c9f512f503b0a5a8e7b14e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "resultatslabo\\index.html.twig", 1);
        $this->blocks = [
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "hostooSanteBundle::blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resultatslabo\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "resultatslabo\\index.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"card-box\">
    <h3>Examens de Laboratoire</h3>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Date</th>
                <th>Patient</th>
                <th>Examen</th>
                <th>Statut</th>
                <th>Medecin</th>
                ";
        // line 19
        echo "                ";
        // line 20
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultatsLabos"] ?? $this->getContext($context, "resultatsLabos")));
        foreach ($context['_seq'] as $context["_key"] => $context["resultatsLabo"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            if ($this->getAttribute($context["resultatsLabo"], "dateresultat", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["resultatsLabo"], "dateresultat", []), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["resultatsLabo"], "ordonnance", []), "episode", []), "patient", []), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["resultatsLabo"], "acte", []), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["resultatsLabo"], "attente", [])) {
                echo "<span class=\"label label-success\">Réalisé</span> ";
            } else {
                echo "<span class=\"label label-warning\">En attente</span>";
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatsLabo"], "ordonnance", []), "medecin", [])), "html", null, true);
            echo "</td>
                ";
            // line 31
            echo "                ";
            // line 42
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultatsLabo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 50
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            \$('.table').DataTable();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "resultatslabo\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 50,  156 => 49,  150 => 48,  140 => 44,  133 => 42,  131 => 31,  127 => 29,  119 => 28,  115 => 27,  111 => 26,  105 => 25,  102 => 24,  98 => 23,  93 => 20,  91 => 19,  78 => 7,  72 => 6,  60 => 5,  49 => 4,  38 => 3,  11 => 1,);
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

{% block titrepage %}{% endblock %}
{% block options %}{% endblock %}
{% block menu %}{% include 'hostooSanteBundle:menus:menulabo.html.twig' %}{% endblock %}
{% block body %}
    <div class=\"card-box\">
    <h3>Examens de Laboratoire</h3>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Date</th>
                <th>Patient</th>
                <th>Examen</th>
                <th>Statut</th>
                <th>Medecin</th>
                {#<th>Service</th>#}
                {#<th>Actions</th>#}
            </tr>
        </thead>
        <tbody>
        {% for resultatsLabo in resultatsLabos %}
            <tr>
                <td>{% if resultatsLabo.dateresultat %}{{ resultatsLabo.dateresultat|date('d-m-Y') }}{% endif %}</td>
                <td>{{ resultatsLabo.ordonnance.episode.patient }}</td>
                <td>{{ resultatsLabo.acte }}</td>
                <td>{% if  resultatsLabo.attente %}<span class=\"label label-success\">Réalisé</span> {% else %}<span class=\"label label-warning\">En attente</span>{% endif %}</td>
                <td>{{ resultatsLabo.ordonnance.medecin|upper }}</td>
                {#<td>{{ resultatsLabo.ordonnance.medecin.service|upper }}</td>#}
                {#<td>
                    <ul>
                <th>Resultat</th>
                        <li>
                            <a href=\"{{ path('resultatslabo_show', { 'id': resultatsLabo.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('resultatslabo_edit', { 'id': resultatsLabo.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>#}
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
{% endblock %}
{% block javascripts %}
{{ parent() }}
    {{ parent() }}
    <script>
        \$(function () {
            \$('.table').DataTable();
        });
    </script>
{% endblock %}", "resultatslabo\\index.html.twig", "/var/www/html/hostoo/app/Resources/views/resultatslabo/index.html.twig");
    }
}
