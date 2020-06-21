<?php

/* hostooSanteBundle:Actes:liste_actes.html.twig */
class __TwigTemplate_de4f293f07c09b8c617ce7e228349e9c994a3654d820323e727a686b878fb3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Actes:liste_actes.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Actes:liste_actes.html.twig"));

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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "
        ";
            // line 7
            $this->loadTemplate("hostooUserBundle:menus:menuadmin.html.twig", "hostooSanteBundle:Actes:liste_actes.html.twig", 7)->display($context);
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER")) {
            // line 10
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "hostooSanteBundle:Actes:liste_actes.html.twig", 10)->display($context);
            // line 11
            echo "    ";
        }
        // line 12
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) {
            // line 13
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooSanteBundle:Actes:liste_actes.html.twig", 13)->display($context);
            // line 14
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 17
        echo "
    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creer_acte");
        echo "\" class=\"btn btn-success\">Nouvel acte médical</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "<div class=\"card-box\">";
        // line 27
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 42
            echo "            <tr>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
            echo "</td>
                ";
            // line 46
            echo "
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "tarif", []), "html", null, true);
            echo "   </td> <!--- acte.tarif.prix .prix -->
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "categories", []), "nom", []), "html", null, true);
            echo "</td>
                <td>

                    ";
            // line 51
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER")) {
                // line 52
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_acte", ["id" => $this->getAttribute($context["acte"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><i class=\"fa fa-edit\"></i> Modifier</a>
                    ";
            }
            // line 54
            echo "                        ";
            // line 55
            echo "                            ";
            // line 56
            echo "                        ";
            // line 57
            echo "                   </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 65
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 66
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooSanteBundle:Actes:liste_actes.html.twig", 66)->display($context);
        // line 67
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:plugins:modals.style.html.twig", "hostooSanteBundle:Actes:liste_actes.html.twig", 67)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 71
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooSanteBundle:Actes:liste_actes.html.twig", 71)->display($context);
        // line 72
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:plugins:modals.html.twig", "hostooSanteBundle:Actes:liste_actes.html.twig", 72)->display($context);
        // line 73
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
        // line 142
        echo "        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Actes:liste_actes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 142,  230 => 73,  227 => 72,  225 => 71,  220 => 70,  214 => 69,  206 => 67,  204 => 66,  199 => 65,  193 => 64,  183 => 60,  175 => 57,  173 => 56,  171 => 55,  169 => 54,  163 => 52,  161 => 51,  155 => 48,  151 => 47,  148 => 46,  144 => 44,  140 => 43,  137 => 42,  133 => 41,  117 => 27,  115 => 21,  109 => 20,  100 => 18,  97 => 17,  91 => 16,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  63 => 7,  60 => 6,  57 => 5,  51 => 4,  39 => 3,  11 => 1,);
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
    {% if is_granted('ROLE_ADMIN') %}

        {% include 'hostooUserBundle:menus:menuadmin.html.twig' %}
    {% endif %}
    {% if is_granted('ROLE_CAISSIER') %}
        {% include 'hostooSanteBundle:menus:menucaisse.html.twig' %}
    {% endif %}
    {% if is_granted('ROLE_RECEPTION') %}
        {% include 'hostooSanteBundle:menus:menurc.html.twig' %}
    {% endif %}
{% endblock %}
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

                <td>{{ acte.tarif }}   </td> <!--- acte.tarif.prix .prix -->
                <td>{{ acte.categories.nom }}</td>
                <td>

                    {% if is_granted('ROLE_CAISSIER') %}
                        <a href=\"{{ path('modifier_acte',{'id':acte.id}) }}\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><i class=\"fa fa-edit\"></i> Modifier</a>
                    {% endif %}
                        {#<button  class=\"btn btn-info\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm{{ acte.id }}\"><i class=\"fa fa-plus\"></i></button>#}
                            {#<a href=\"{{ path('modifier_acte',{'id':acte.id}) }}\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><i class=\"fa fa-edit\"></i> Modifier</a>#}
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
{% endblock %}
", "hostooSanteBundle:Actes:liste_actes.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Actes/liste_actes.html.twig");
    }
}
