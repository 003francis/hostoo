<?php

/* hostooHospisBundle:hospitalisation:index.html.twig */
class __TwigTemplate_e659a3a81b0390bc8057c82b36ab6161cad664317a39a435163b5bb72e82a126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooHospisBundle:hospitalisation:index.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooHospisBundle:hospitalisation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MEDECIN")) {
            // line 4
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "hostooHospisBundle:hospitalisation:index.html.twig", 4)->display($context);
            // line 5
            echo "    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_INFIRMIER")) {
            // line 6
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menunrs.html.twig", "hostooHospisBundle:hospitalisation:index.html.twig", 6)->display($context);
            // line 7
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        // line 10
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 13
        echo "<ul class=\"list-unstyled\">
    ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MEDECIN")) {
            // line 15
            echo "    <li>
        <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hospitalisation_new");
            echo "\" class=\"btn btn-success\">Nouvelle Hospitalisation</a>
    </li>
     ";
        }
        // line 19
        echo "</ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "    <h3>Patients hospitalisés</h3>
<div class=\"card-box\">
    <table  class=\"table table-striped\">
        <thead>
            <tr>
                <th>N°</th>
                <th>Date d'entrée</th>
                <th>Medecin</th>
                <th>Patient</th>
                <th>Chambre</th>
                <th>Entreprise</th>
                <th>Date de sortie</th>
                <th>Type de hospitalisation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hospitalisations"] ?? $this->getContext($context, "hospitalisations")));
        foreach ($context['_seq'] as $context["_key"] => $context["hospitalisation"]) {
            // line 40
            echo "            <tr>
                <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hospitalisation_show", ["id" => $this->getAttribute($context["hospitalisation"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["hospitalisation"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 42
            if ($this->getAttribute($context["hospitalisation"], "datehospi", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["hospitalisation"], "datehospi", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["hospitalisation"], "medecin", []), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["hospitalisation"], "patient", []), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["hospitalisation"], "chambre", []), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["hospitalisation"], "patient", []), "societe", []), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            if ($this->getAttribute($context["hospitalisation"], "datesortie", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["hospitalisation"], "datesortie", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["hospitalisation"], "typehospitalisation", []), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hospitalisation_show", ["id" => $this->getAttribute($context["hospitalisation"], "id", [])]), "html", null, true);
            echo "\">afficher</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hospitalisation_edit", ["id" => $this->getAttribute($context["hospitalisation"], "id", [])]), "html", null, true);
            echo "\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hospitalisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>
    <br>
    ";
        // line 64
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MEDECIN")) {
            // line 65
            echo "    <ul class=\"list-unstyled\">
        <li>
            <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hospitalisation_new");
            echo "\" class=\"btn btn-success\">Nouvelle Hospitalisation</a>
        </li>
    </ul>
    ";
        }
        // line 71
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 75
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 76
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooHospisBundle:hospitalisation:index.html.twig", 76)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 80
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooHospisBundle:hospitalisation:index.html.twig", 80)->display($context);
        // line 81
        echo "    <script>
        \$(function () {
            \$('.table').dataTable({
                \"order\":[['0','desc']]
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooHospisBundle:hospitalisation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 81,  253 => 80,  248 => 79,  242 => 78,  235 => 76,  230 => 75,  224 => 74,  216 => 71,  209 => 67,  205 => 65,  203 => 64,  198 => 61,  186 => 55,  180 => 52,  173 => 48,  167 => 47,  163 => 46,  159 => 45,  155 => 44,  151 => 43,  145 => 42,  139 => 41,  136 => 40,  132 => 39,  113 => 22,  107 => 21,  99 => 19,  93 => 16,  90 => 15,  88 => 14,  85 => 13,  79 => 12,  71 => 10,  65 => 9,  57 => 7,  54 => 6,  51 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
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
{% block menu %}
    {% if is_granted('ROLE_MEDECIN') %}
        {% include 'hostooSanteBundle:menus:menudoc.html.twig' %}
    {% elseif  is_granted('ROLE_INFIRMIER') %}
        {% include 'hostooSanteBundle:menus:menunrs.html.twig' %}
    {% endif %}
{% endblock %}
{% block titrepage %}

{% endblock %}
{% block options %}
<ul class=\"list-unstyled\">
    {% if is_granted('ROLE_MEDECIN') %}
    <li>
        <a href=\"{{ path('hospitalisation_new') }}\" class=\"btn btn-success\">Nouvelle Hospitalisation</a>
    </li>
     {% endif %}
</ul>
{% endblock %}
{% block body %}
    <h3>Patients hospitalisés</h3>
<div class=\"card-box\">
    <table  class=\"table table-striped\">
        <thead>
            <tr>
                <th>N°</th>
                <th>Date d'entrée</th>
                <th>Medecin</th>
                <th>Patient</th>
                <th>Chambre</th>
                <th>Entreprise</th>
                <th>Date de sortie</th>
                <th>Type de hospitalisation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for hospitalisation in hospitalisations %}
            <tr>
                <td><a href=\"{{ path('hospitalisation_show', { 'id': hospitalisation.id }) }}\">{{ hospitalisation.id }}</a></td>
                <td>{% if hospitalisation.datehospi %}{{ hospitalisation.datehospi|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ hospitalisation.medecin }}</td>
                <td>{{ hospitalisation.patient }}</td>
                <td>{{ hospitalisation.chambre }}</td>
                <td>{{ hospitalisation.patient.societe }}</td>
                <td>{% if hospitalisation.datesortie %}{{ hospitalisation.datesortie|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ hospitalisation.typehospitalisation }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('hospitalisation_show', { 'id': hospitalisation.id }) }}\">afficher</a>
                        </li>
                        <li>
                            <a href=\"{{ path('hospitalisation_edit', { 'id': hospitalisation.id }) }}\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <br>
    {% if is_granted('ROLE_MEDECIN') %}
    <ul class=\"list-unstyled\">
        <li>
            <a href=\"{{ path('hospitalisation_new') }}\" class=\"btn btn-success\">Nouvelle Hospitalisation</a>
        </li>
    </ul>
    {% endif %}
</div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:datatable.style.html.twig' %}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:datatable.scripts.html.twig' %}
    <script>
        \$(function () {
            \$('.table').dataTable({
                \"order\":[['0','desc']]
            });
        });
    </script>
{% endblock %}", "hostooHospisBundle:hospitalisation:index.html.twig", "/var/www/html/hostoo/src/hostoo/HospisBundle/Resources/views/hospitalisation/index.html.twig");
    }
}
