<?php

/* hostooSanteBundle:Actes:liste_actes_rc.html.twig */
class __TwigTemplate_bb20c66b12a63db9d1c89d2723864d34d9a1714515ac85576087ca4b00585750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Actes:liste_actes_rc.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Actes:liste_actes_rc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Actes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) {
            // line 6
            echo "    ";
            $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooSanteBundle:Actes:liste_actes_rc.html.twig", 6)->display($context);
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER")) {
            // line 9
            echo "    ";
            $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "hostooSanteBundle:Actes:liste_actes_rc.html.twig", 9)->display($context);
            // line 10
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Tarification des actes médicaux";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 14
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creer_acte");
        echo "\" class=\"btn btn-success\">Nouvel acte médical</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<div class=\"card-box\">";
        // line 23
        echo "    <table class=\"table table-striped\" id=\"lesactes\">
        <thead>
        <tr><th>id</th>
            <th>Désignation</th>

            <th>Prix</th>



            <th>Catégorie</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
            echo "</td>
                ";
            // line 42
            echo "
                <td>";
            // line 43
            if ($this->getAttribute($context["acte"], "tarif", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "tarif", []), "prix", []), "html", null, true);
            } else {
                echo " 0 ";
            }
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "categories", []), "nom", []), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 46
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION"))) {
                // line 47
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_acte", ["id" => $this->getAttribute($context["acte"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><i class=\"fa fa-edit\"></i> Modifier</a>
                    ";
            }
            // line 49
            echo "                    ";
            // line 50
            echo "                    ";
            // line 51
            echo "                    ";
            // line 52
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 60
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 61
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooSanteBundle:Actes:liste_actes_rc.html.twig", 61)->display($context);
        // line 62
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:plugins:modals.style.html.twig", "hostooSanteBundle:Actes:liste_actes_rc.html.twig", 62)->display($context);
        // line 63
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 66
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooSanteBundle:Actes:liste_actes_rc.html.twig", 66)->display($context);
        // line 67
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:plugins:modals.html.twig", "hostooSanteBundle:Actes:liste_actes_rc.html.twig", 67)->display($context);
        // line 68
        echo "    <script>
        \$(function () {
            \$('.table').dataTable({
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
            ";
        // line 137
        echo "        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Actes:liste_actes_rc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 137,  235 => 68,  232 => 67,  230 => 66,  225 => 65,  219 => 64,  212 => 63,  209 => 62,  207 => 61,  202 => 60,  196 => 59,  186 => 55,  178 => 52,  176 => 51,  174 => 50,  172 => 49,  166 => 47,  164 => 46,  159 => 44,  151 => 43,  148 => 42,  144 => 40,  140 => 39,  137 => 38,  133 => 37,  117 => 23,  115 => 17,  109 => 16,  99 => 14,  93 => 13,  81 => 12,  73 => 10,  70 => 9,  67 => 8,  64 => 7,  61 => 6,  58 => 5,  52 => 4,  40 => 3,  11 => 1,);
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

{% block title %}Liste des Actes{% endblock %}
{% block menu %}
    {% if is_granted('ROLE_RECEPTION') %}
    {% include 'hostooSanteBundle:menus:menurc.html.twig' %}
    {% endif %}
    {% if is_granted('ROLE_CAISSIER') %}
    {% include 'hostooSanteBundle:menus:menucaisse.html.twig' %}
    {% endif %}
{% endblock %}
{% block titrepage %}Tarification des actes médicaux{% endblock %}
{% block options %}
    <a href=\"{{ path('creer_acte') }}\" class=\"btn btn-success\">Nouvel acte médical</a>
{% endblock %}
{% block body %}
<div class=\"card-box\">{#
    {% for key, message in app.session.flashbag.all() %}
        <div class=\"alert alert-{{ key }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}#}
    <table class=\"table table-striped\" id=\"lesactes\">
        <thead>
        <tr><th>id</th>
            <th>Désignation</th>

            <th>Prix</th>



            <th>Catégorie</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for acte in liste %}
            <tr>
                <td>{{ acte.id }}</td>
                <td>{{ acte.designationacte }}</td>
                {# Pour affichage de prix selon la convention#}

                <td>{% if acte.tarif %}{{ acte.tarif.prix }}{% else %} 0 {% endif %}</td>
                <td>{{ acte.categories.nom }}</td>
                <td>
                    {% if is_granted('ROLE_CAISSIER') and not is_granted('ROLE_RECEPTION') %}
                    <a href=\"{{ path('modifier_acte',{'id':acte.id}) }}\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><i class=\"fa fa-edit\"></i> Modifier</a>
                    {% endif %}
                    {#<button  class=\"btn btn-info\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm{{ acte.id }}\"><i class=\"fa fa-plus\"></i></button>#}
                    {#<a href=\"{{ path('modifier_acte',{'id':acte.id}) }}\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><i class=\"fa fa-edit\"></i></a>#}
                    {#<button  class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#supprimer{{ acte.id }}\"><i class=\"fa fa-times\"></i> </button>#}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
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
            \$('.table').dataTable({
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
            {#
            <div id=\"supprimer{{ acte.id }}\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content p-0 b-0\">
                        <div class=\"panel panel-custom\">
                            <div class=\"panel-heading\">
                                <button type=\"button\" class=\"close m-t-5\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h3 class=\"panel-title\">Supprimer</h3>
                            </div>
                            <div class=\"panel-body\">
                                <p class=\"text-center\">Etes-vous sur de supprimer cet Acte Medical : <strong>{{ acte.designationacte }}</strong></p>
                                <p class=\"text-center\"><a href=\"{{ path('_supprimer_acte',{'id':acte.id}) }}\" class=\"btn btn-danger\">Supprimer Cet Acte</a></p>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div class=\"modal fade bs-example-modal-sm{{ acte.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                            <h4 class=\"modal-title\" id=\"mySmallModalLabel\">Ajoute un prix </h4>
                        </div>
                        <div class=\"modal-body\">
                            {{ render(controller('hostooGestionBundle:Prix:ajouterUnPrix',{'acte':acte.id})) }}
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->#}
        });

    </script>
{% endblock %}", "hostooSanteBundle:Actes:liste_actes_rc.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Actes/liste_actes_rc.html.twig");
    }
}
