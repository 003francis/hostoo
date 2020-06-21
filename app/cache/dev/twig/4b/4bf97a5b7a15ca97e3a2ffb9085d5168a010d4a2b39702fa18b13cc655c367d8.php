<?php

/* hostooRDVBundle:rdvmed:showtoday.html.twig */
class __TwigTemplate_ee3446858ce225b15f4325246d974f2f8fe2c7c6ec6efd3df268a7e247be7e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooRDVBundle:rdvmed:showtoday.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'options' => [$this, 'block_options'],
            'menu' => [$this, 'block_menu'],
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooRDVBundle:rdvmed:showtoday.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Rendez-vous des patients du ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 6
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rdv_reception");
        echo "\" class=\"btn btn-default\">Nouveau RDV</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 10
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooRDVBundle:rdvmed:showtoday.html.twig", 10)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        // line 13
        echo "    Rendez-vous fixés au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        // line 19
        echo "    <div class=\"col-lg-6\">
<div class=\"card-box\">
    <table class=\"table table-striped\">
        <caption><h3>RDV du ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "", "d-m-Y"), "html", null, true);
        echo "</h3></caption>
        <thead>
            <tr>
                <th>Date</th>
                <th>Patient</th>
                <th>Etat</th>
                <th>Médécin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"mesrdv\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rDVMeds"] ?? $this->getContext($context, "rDVMeds")));
        foreach ($context['_seq'] as $context["_key"] => $context["rDVMed"]) {
            // line 34
            echo "            <tr>

                <td>";
            // line 36
            if ($this->getAttribute($context["rDVMed"], "daterdv", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rDVMed"], "daterdv", []), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>

                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["rDVMed"], "patients", []), "nom", [])), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["rDVMed"], "patients", []), "postnom", [])), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["rDVMed"], "patients", []), "prenom", [])), "html", null, true);
            echo "


                </td>

                <td>
                    ";
            // line 45
            if (($this->getAttribute($context["rDVMed"], "etat", []) == "RECU")) {
                // line 46
                echo "                    <span class=\"label label-success\"> ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["rDVMed"], "etat", [])), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 48
                echo "                        <span class=\"label label-danger\"> ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["rDVMed"], "etat", [])), "html", null, true);
                echo "</span>
                    ";
            }
            // line 50
            echo "                        </td>
                <td>
                    ";
            // line 52
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["rDVMed"], "medecin", []), "nom", [])), "html", null, true);
            echo "
                </td>
                <td>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_voirpatient", ["id" => $this->getAttribute($this->getAttribute($context["rDVMed"], "patients", []), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success\">Afficher</a>
                        </li>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rDVMed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
</div>
    </div>
<div class=\"col-lg-6\">
    <div class=\"card-box\">
    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooRDVBundle:RDVMed:LesRDVTout"));
        echo "
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 77
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 78
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooRDVBundle:rdvmed:showtoday.html.twig", 78)->display($context);
        // line 79
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:plugins:modals.style.html.twig", "hostooRDVBundle:rdvmed:showtoday.html.twig", 79)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 83
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooRDVBundle:rdvmed:showtoday.html.twig", 83)->display($context);
        // line 84
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:plugins:modals.html.twig", "hostooRDVBundle:rdvmed:showtoday.html.twig", 84)->display($context);
        // line 85
        echo "<script>
    \$(function () {
        \$('.tout').dataTable({
            \"bProcessing\": true,
            \"bDeferRender\": true,
            deferRender: true,
            scrollY: 800,
            scrollCollapse: true,
            scroller: true,
            dom: \"Bfrtip\",
            buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                extend: \"excel\",
                className: \"btn-sm\"
            }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],

            language: {
                processing: \"Traitement en cours...\",
                search: \"Rechercher&nbsp;:\",
                lengthMenu: \"Afficher _MENU_ &eacute;l&eacute;ments\",
                info: \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                infoEmpty: \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                infoFiltered: \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                infoPostFix: \"\",
                loadingRecords: \"Chargement en cours...\",
                zeroRecords: \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                emptyTable: \"Aucune donnée disponible dans le tableau\",
                paginate: {
                    first: \"Premier\",
                    previous: \"Pr&eacute;c&eacute;dent\",
                    next: \"Suivant\",
                    last: \"Dernier\"
                },
                aria: {
                    sortAscending: \": activer pour trier la colonne par ordre croissant\",
                    sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                }
            }
        });
        });

    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooRDVBundle:rdvmed:showtoday.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 85,  250 => 84,  248 => 83,  243 => 82,  237 => 81,  229 => 79,  227 => 78,  222 => 77,  216 => 76,  205 => 70,  197 => 64,  184 => 57,  176 => 52,  172 => 50,  166 => 48,  160 => 46,  158 => 45,  145 => 39,  137 => 36,  133 => 34,  129 => 33,  115 => 22,  110 => 19,  108 => 16,  102 => 15,  92 => 13,  86 => 12,  78 => 10,  72 => 9,  62 => 6,  56 => 5,  46 => 3,  40 => 2,  11 => 1,);
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
{% block title %}
Rendez-vous des patients du {{ 'now'|date('d-m-Y') }}
{% endblock %}
{% block options %}
<a href=\"{{ path('rdv_reception') }}\" class=\"btn btn-default\">Nouveau RDV</a>
{#<a href=\"{{ path('rdvmed_show_tout') }}\" class=\"btn btn-success\">Voir Tout</a>#}
{% endblock %}
{% block menu %}
    {% include \"hostooSanteBundle:menus:menurc.html.twig\" %}
{% endblock %}
{% block titrepage %}
    Rendez-vous fixés au {{ 'now'|date('d-m-Y') }}
{% endblock %}
{% block body %}
    {#{% if rDVMeds|length == 0 %}#}
{#<span class=\"alert alert-dismissable alert-danger\">Aucun rendez-vous pour aujourd'hui !</span>#}
{#{% else %}#}
    <div class=\"col-lg-6\">
<div class=\"card-box\">
    <table class=\"table table-striped\">
        <caption><h3>RDV du {{ \"\"|date('d-m-Y') }}</h3></caption>
        <thead>
            <tr>
                <th>Date</th>
                <th>Patient</th>
                <th>Etat</th>
                <th>Médécin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"mesrdv\">
        {% for rDVMed in rDVMeds %}
            <tr>

                <td>{% if rDVMed.daterdv %}{{ rDVMed.daterdv|date('d-m-Y') }}{% endif %}</td>
                <td>

                    {{ rDVMed.patients.nom|upper }} {{ rDVMed.patients.postnom|upper }} {{ rDVMed.patients.prenom|upper }}


                </td>

                <td>
                    {% if rDVMed.etat == \"RECU\" %}
                    <span class=\"label label-success\"> {{ rDVMed.etat|upper }}</span>
                    {% else %}
                        <span class=\"label label-danger\"> {{ rDVMed.etat|upper }}</span>
                    {% endif %}
                        </td>
                <td>
                    {{ rDVMed.medecin.nom|upper }}
                </td>
                <td>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"{{ path('hostoo_sante_voirpatient', { 'id': rDVMed.patients.id }) }}\" class=\"btn btn-success\">Afficher</a>
                        </li>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
    </div>
<div class=\"col-lg-6\">
    <div class=\"card-box\">
    {{ render(controller('hostooRDVBundle:RDVMed:LesRDVTout')) }}
</div>
</div>
{#{% endif %}#}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:datatable.style.html.twig' %}
    {% include 'hostooSanteBundle:plugins:modals.style.html.twig' %}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:datatable.scripts.html.twig' %}
    {% include 'hostooSanteBundle:plugins:modals.html.twig' %}
<script>
    \$(function () {
        \$('.tout').dataTable({
            \"bProcessing\": true,
            \"bDeferRender\": true,
            deferRender: true,
            scrollY: 800,
            scrollCollapse: true,
            scroller: true,
            dom: \"Bfrtip\",
            buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                extend: \"excel\",
                className: \"btn-sm\"
            }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],

            language: {
                processing: \"Traitement en cours...\",
                search: \"Rechercher&nbsp;:\",
                lengthMenu: \"Afficher _MENU_ &eacute;l&eacute;ments\",
                info: \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                infoEmpty: \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                infoFiltered: \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                infoPostFix: \"\",
                loadingRecords: \"Chargement en cours...\",
                zeroRecords: \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                emptyTable: \"Aucune donnée disponible dans le tableau\",
                paginate: {
                    first: \"Premier\",
                    previous: \"Pr&eacute;c&eacute;dent\",
                    next: \"Suivant\",
                    last: \"Dernier\"
                },
                aria: {
                    sortAscending: \": activer pour trier la colonne par ordre croissant\",
                    sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                }
            }
        });
        });

    </script>
    {% endblock %}
", "hostooRDVBundle:rdvmed:showtoday.html.twig", "C:\\wamp64\\www\\hostoo\\src\\hostoo\\RDVBundle/Resources/views/rdvmed/showtoday.html.twig");
    }
}
