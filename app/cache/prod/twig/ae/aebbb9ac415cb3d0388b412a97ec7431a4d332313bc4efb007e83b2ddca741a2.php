<?php

/* hostooSanteBundle:Medecin:liste_patients.html.twig */
class __TwigTemplate_927660902e5fa9584a79d4886f1f6f63a5b415df394ca37651ea95d0732d0cfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Medecin:liste_patients.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titrepage' => [$this, 'block_titrepage'],
            'menu' => [$this, 'block_menu'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Medecin:liste_patients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Patients";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Liste des Patients";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "hostooSanteBundle:Medecin:liste_patients.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"card-box\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Postnom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                ";
        // line 17
        echo "                <th>Convention</th>
                <th>Visites</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 24
            echo "                <tr>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "nom", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "postnom", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "prenom", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "datenaissance", []), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["patient"], "societe", []), "nom", []), "html", null, true);
            echo "</td>
                    ";
            // line 31
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["patient"], "episode", [])), "html", null, true);
            echo "</td>
                    <td>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_dossier_patient", ["patient" => $this->getAttribute($context["patient"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-eye\"></i> </a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 43
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooSanteBundle:Medecin:liste_patients.html.twig", 43)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 47
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooSanteBundle:Medecin:liste_patients.html.twig", 47)->display($context);
        // line 48
        echo "<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.table').dataTable({
            dom: \"Bfrtip\",
            buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                extend: \"excel\",
                className: \"btn-sm\"
            }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],
            responsive: !0
            ,language: {
                processing:     \"Traitement en cours...\",
                search:         \"Rechercher&nbsp;:\",
                lengthMenu:    \"Afficher _MENU_ &eacute;l&eacute;ments\",
                info:           \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                infoEmpty:      \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                infoFiltered:   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                infoPostFix:    \"\",
                loadingRecords: \"Chargement en cours...\",
                zeroRecords:    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                emptyTable:     \"Aucune donnée disponible dans le tableau\",
                paginate: {
                    first:      \"Premier\",
                    previous:   \"Pr&eacute;c&eacute;dent\",
                    next:       \"Suivant\",
                    last:       \"Dernier\"
                },
                aria: {
                    sortAscending:  \": activer pour trier la colonne par ordre croissant\",
                    sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                }}
        });
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Medecin:liste_patients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 48,  182 => 47,  177 => 46,  171 => 45,  164 => 43,  160 => 42,  154 => 41,  144 => 37,  134 => 33,  128 => 31,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  105 => 24,  101 => 23,  93 => 17,  83 => 8,  77 => 7,  69 => 5,  63 => 4,  51 => 3,  39 => 2,  11 => 1,);
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
{% block title %}Liste des Patients{% endblock %}
{% block titrepage %}Liste des Patients{% endblock %}
{% block menu %}
    {% include 'hostooSanteBundle:menus:menudoc.html.twig' %}
{% endblock %}
{% block body %}
    <div class=\"card-box\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Postnom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                {#<th>Société</th>#}
                <th>Convention</th>
                <th>Visites</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for patient in liste %}
                <tr>
                    <td>{{ patient.nom }}</td>
                    <td>{{ patient.postnom }}</td>
                    <td>{{ patient.prenom }}</td>
                    <td>{{ patient.datenaissance|date('d-m-Y') }}</td>
                    <td>{{ patient.societe.nom }}</td>
                    {#<td>{{ patient.societe.convention.nomconvention }}</td>#}
                    <td>{{ patient.episode|length }}</td>
                    <td>
                    <a href=\"{{ path('afficher_dossier_patient',{'patient':patient.id}) }}\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-eye\"></i> </a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
{% block stylesheets %}
{{ parent() }}
    {% include \"hostooSanteBundle:plugins:datatable.style.html.twig\" %}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    {% include \"hostooSanteBundle:plugins:datatable.scripts.html.twig\" %}
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.table').dataTable({
            dom: \"Bfrtip\",
            buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                extend: \"excel\",
                className: \"btn-sm\"
            }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],
            responsive: !0
            ,language: {
                processing:     \"Traitement en cours...\",
                search:         \"Rechercher&nbsp;:\",
                lengthMenu:    \"Afficher _MENU_ &eacute;l&eacute;ments\",
                info:           \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                infoEmpty:      \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                infoFiltered:   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                infoPostFix:    \"\",
                loadingRecords: \"Chargement en cours...\",
                zeroRecords:    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                emptyTable:     \"Aucune donnée disponible dans le tableau\",
                paginate: {
                    first:      \"Premier\",
                    previous:   \"Pr&eacute;c&eacute;dent\",
                    next:       \"Suivant\",
                    last:       \"Dernier\"
                },
                aria: {
                    sortAscending:  \": activer pour trier la colonne par ordre croissant\",
                    sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                }}
        });
    });
</script>
{% endblock %}", "hostooSanteBundle:Medecin:liste_patients.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Medecin/liste_patients.html.twig");
    }
}
