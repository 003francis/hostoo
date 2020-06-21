<?php

/* ordonnancelabo/show.html.twig */
class __TwigTemplate_fb4aaede4b116f84732a12dcb622bdbd02683575c49406aaf6478c99145a5431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "ordonnancelabo/show.html.twig", 1);
        $this->blocks = [
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnancelabo/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Résultats de Laboratoire";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 4
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnancelabo_printshow", ["id" => $this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-default\">Imprimer</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "ordonnancelabo/show.html.twig", 7)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"card-box\">
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Patient</th>
            ";
        // line 14
        if ($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", [])) {
            // line 15
            echo "            <th>";
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "prenom", [])), "html", null, true);
            echo "  /  ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "sexe", [])) {
                echo "M ";
            } else {
                echo "F";
            }
            echo "</th>
            ";
        } else {
            // line 17
            echo "            <th>";
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "hospitalisation", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "hospitalisation", []), "patient", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "hospitalisation", []), "patient", []), "prenom", [])), "html", null, true);
            echo "  /  ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "hospitalisation", []), "patient", []), "sexe", [])) {
                echo "M ";
            } else {
                echo "F";
            }
            echo "</th>
            ";
        }
        // line 19
        echo "            <th>Date</th>
            <th>";
        // line 20
        if ($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "dateordo", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "dateordo", []), "d-m-Y H:i:s"), "html", null, true);
        }
        echo "</th>
        </tr>
        <tr>
            <th>Né (e) le </th>
            ";
        // line 24
        if ($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", [])) {
            // line 25
            echo "            <th>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
            echo "</th>
            ";
        } else {
            // line 27
            echo "            <th>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "hospitalisation", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
            echo "</th>
            ";
        }
        // line 29
        echo "            <th>Medecin</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "medecin", [])), "html", null, true);
        echo "</th>
        </tr>
        <tr>
            <th>Société</th>
            ";
        // line 34
        if ($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", [])) {
            // line 35
            echo "            <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "societe", []), "html", null, true);
            echo "</th>
            ";
        } else {
            // line 37
            echo "            <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "hospitalisation", []), "patient", []), "societe", []), "html", null, true);
            echo "</th>
            ";
        }
        // line 39
        echo "            <th>Service</th>
            <th></th>
        </tr>


        </tbody>
    </table>
    <table class=\"table table-bordered\">
        <tr class=\"bg-inverse\">
            <th class=\"text-white text-center col-md-4\">Analyses</th>
            <th class=\"text-white text-center col-md-4\">Valeurs</th>
            <th class=\"text-white text-center col-md-4\">Resultats</th>
        </tr>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "resultats", []));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 53
            echo "        <tr>
            <th>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
            echo "</th>
            <th>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "valeur", []), "html", null, true);
            echo "</th>
            <td>";
            // line 56
            if ($this->getAttribute($context["res"], "attente", [])) {
                echo "<p>";
                echo $this->getAttribute($context["res"], "resultat", []);
                echo "</p>";
            } else {
                echo " En Attente";
            }
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        <tr>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnancelabo_index");
        echo "\" class=\"btn btn-info\">Liste des examens</a>
        </li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnancelabo/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 64,  212 => 59,  197 => 56,  193 => 55,  189 => 54,  186 => 53,  182 => 52,  167 => 39,  161 => 37,  155 => 35,  153 => 34,  146 => 30,  143 => 29,  137 => 27,  131 => 25,  129 => 24,  120 => 20,  117 => 19,  105 => 17,  93 => 15,  91 => 14,  84 => 9,  78 => 8,  66 => 7,  55 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block titrepage %}Résultats de Laboratoire{% endblock %}
{% block options %}
    <a href=\"{{ path('ordonnancelabo_printshow',{'id': ordonnanceLabo.id }) }}\" class=\"btn btn-default\">Imprimer</a>

{% endblock %}
{% block menu %}{% include 'hostooSanteBundle:menus:menulabo.html.twig' %}{% endblock %}
{% block body %}
<div class=\"card-box\">
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Patient</th>
            {% if ordonnanceLabo.episode %}
            <th>{{ ordonnanceLabo.episode.patient.nom~\" \"~ordonnanceLabo.episode.patient.postnom~\" \"~ordonnanceLabo.episode.patient.prenom }}  /  {% if ordonnanceLabo.episode.patient.sexe %}M {% else %}F{% endif %}</th>
            {% else %}
            <th>{{ ordonnanceLabo.hospitalisation.patient.nom~\" \"~ordonnanceLabo.hospitalisation.patient.postnom~\" \"~ordonnanceLabo.hospitalisation.patient.prenom }}  /  {% if ordonnanceLabo.hospitalisation.patient.sexe %}M {% else %}F{% endif %}</th>
            {% endif %}
            <th>Date</th>
            <th>{% if ordonnanceLabo.dateordo %}{{ ordonnanceLabo.dateordo|date('d-m-Y H:i:s') }}{% endif %}</th>
        </tr>
        <tr>
            <th>Né (e) le </th>
            {% if ordonnanceLabo.episode %}
            <th>{{ ordonnanceLabo.episode.patient.datenaissance|date('d/m/Y') }}</th>
            {% else %}
            <th>{{ ordonnanceLabo.hospitalisation.patient.datenaissance|date('d/m/Y') }}</th>
            {% endif %}
            <th>Medecin</th>
            <th>{{ ordonnanceLabo.medecin|upper }}</th>
        </tr>
        <tr>
            <th>Société</th>
            {% if ordonnanceLabo.episode %}
            <th>{{ ordonnanceLabo.episode.patient.societe }}</th>
            {% else %}
            <th>{{ ordonnanceLabo.hospitalisation.patient.societe }}</th>
            {% endif %}
            <th>Service</th>
            <th></th>
        </tr>


        </tbody>
    </table>
    <table class=\"table table-bordered\">
        <tr class=\"bg-inverse\">
            <th class=\"text-white text-center col-md-4\">Analyses</th>
            <th class=\"text-white text-center col-md-4\">Valeurs</th>
            <th class=\"text-white text-center col-md-4\">Resultats</th>
        </tr>
        {% for res in ordonnanceLabo.resultats %}
        <tr>
            <th>{{ res.acte.actes.designationacte }}</th>
            <th>{{ res.acte.actes.valeur }}</th>
            <td>{% if res.attente %}<p>{{ res.resultat|raw }}</p>{% else %} En Attente{% endif %}</td>
        </tr>
        {% endfor %}
        <tr>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ordonnancelabo_index') }}\" class=\"btn btn-info\">Liste des examens</a>
        </li>
    </ul>
</div>
{% endblock %}
", "ordonnancelabo/show.html.twig", "/var/www/html/hostoo/app/Resources/views/ordonnancelabo/show.html.twig");
    }
}
