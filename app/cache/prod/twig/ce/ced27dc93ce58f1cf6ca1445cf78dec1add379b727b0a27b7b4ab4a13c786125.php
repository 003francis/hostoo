<?php

/* hostooSanteBundle:Labo:exattente.html.twig */
class __TwigTemplate_50fb6d852597d56c2f88c825cec5d425669e12a9774fbc3ccae2b387f0624ae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Labo:exattente.html.twig", 1);
        $this->blocks = [
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "hostooSanteBundle::blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Labo:exattente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Liste des examens";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "hostooSanteBundle:Labo:exattente.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"card-box\">
            <table class=\"table table-striped table-bordered\" id=\"patients\">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Nom - Postnom - Prénom</th>
                    <th>Sexe</th>
                    <th>Date_nais</th>
                    <th>Societé</th>
                    <th>Examens</th>
                    <th>Medecin</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordos"] ?? $this->getContext($context, "ordos")));
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ord"], "dateordo", []), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                        ";
            // line 25
            if ($this->getAttribute($context["ord"], "episode", [])) {
                // line 26
                echo "                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "postnom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "prenom", []), "html", null, true);
                echo " </td>
                    <td>";
                // line 27
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "sexe", []) == true)) {
                    echo "M";
                } else {
                    echo "F";
                }
                echo "</td>
                    <td>";
                // line 28
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "datenaissance", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
                } else {
                    echo "<span class=\"label label-warning\">Pas de date</span> ";
                }
                echo "</td>
                    <td>";
                // line 29
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "societe", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "societe", []), "nom", []), "html", null, true);
                } else {
                    echo "PRIVE ";
                }
                echo "</td>

                ";
            } else {
                // line 32
                echo "                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "postnom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "prenom", []), "html", null, true);
                echo " </td>
                    <td>";
                // line 33
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "sexe", []) == true)) {
                    echo "M";
                } else {
                    echo "F";
                }
                echo "</td>
                    <td>";
                // line 34
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "datenaissance", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
                } else {
                    echo "<span class=\"label label-warning\">Pas de date</span> ";
                }
                echo "</td>
                    <td>";
                // line 35
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "societe", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "societe", []), "nom", []), "html", null, true);
                } else {
                    echo "PRIVE ";
                }
                echo "</td>

                        ";
            }
            // line 38
            echo "                        <td>
                            <ul>
                                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 41
                echo "                                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                if (($this->getAttribute($context["res"], "resultat", []) != null)) {
                    echo "<i class=\"fa fa-check text-success\"></i> ";
                } else {
                    echo "<i class=\"fa fa-times text-danger\"></i> ";
                }
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                            </ul>

                        </td>
                            <td>";
            // line 46
            if (($this->getAttribute($context["ord"], "medecin", [], "any", true, true) &&  !(null === $this->getAttribute($context["ord"], "medecin", [])))) {
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["ord"], "medecin", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["ord"], "medecin", []), "postnom", [])), "html", null, true);
            } else {
            }
            echo "</td>
                        <td>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnancelabo_show", ["id" => $this->getAttribute($context["ord"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success\" title=\"Bon d'examens\" > <i class=\"fa fa-eye\"></i></a>
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnancelabo_correct", ["id" => $this->getAttribute($context["ord"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-warning\" title=\"Bon d'examens\" > <i class=\"fa fa-edit\"></i></a>

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(function () {
            \$('.table').dataTable({
                \"order\": [[ 0, \"desc\" ]],
                language:{
                    \"sProcessing\":     \"Traitement en cours...\",
                    \"sSearch\":         \"Rechercher&nbsp;:\",
                    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
                    \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                    \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                    \"sInfoPostFix\":    \"\",
                    \"sLoadingRecords\": \"Chargement en cours...\",
                    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
                    \"oPaginate\": {
                        \"sFirst\":      \"Premier\",
                        \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
                        \"sNext\":       \"Suivant\",
                        \"sLast\":       \"Dernier\"
                    }},
                \"oAria\": {
                    \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                    \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
                }
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 97
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Labo:exattente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 105,  342 => 104,  338 => 103,  334 => 102,  330 => 101,  326 => 100,  322 => 99,  318 => 98,  313 => 97,  307 => 96,  269 => 65,  265 => 64,  261 => 63,  257 => 62,  253 => 61,  248 => 60,  242 => 59,  231 => 54,  220 => 49,  216 => 48,  208 => 46,  203 => 43,  189 => 41,  185 => 40,  181 => 38,  171 => 35,  163 => 34,  155 => 33,  146 => 32,  136 => 29,  128 => 28,  120 => 27,  111 => 26,  109 => 25,  105 => 24,  102 => 23,  98 => 22,  80 => 6,  74 => 5,  62 => 4,  51 => 3,  39 => 2,  11 => 1,);
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
{% block titrepage %}Liste des examens{% endblock %}
{% block options %}{% endblock %}
{% block menu %}{% include 'hostooSanteBundle:menus:menulabo.html.twig' %}{% endblock %}
{% block body %}

    <div class=\"card-box\">
            <table class=\"table table-striped table-bordered\" id=\"patients\">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Nom - Postnom - Prénom</th>
                    <th>Sexe</th>
                    <th>Date_nais</th>
                    <th>Societé</th>
                    <th>Examens</th>
                    <th>Medecin</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {% for ord in ordos %}
                    <tr>
                        <td>{{ ord.dateordo|date('d/m/Y H:i:s') }}</td>
                        {% if ord.episode %}
                    <td>{{ ord.episode.patient.nom }} {{ ord.episode.patient.postnom }} {{ ord.episode.patient.prenom }} </td>
                    <td>{% if ord.episode.patient.sexe == true %}M{% else %}F{% endif %}</td>
                    <td>{% if ord.episode.patient.datenaissance %}{{ ord.episode.patient.datenaissance|date('d/m/Y') }}{% else %}<span class=\"label label-warning\">Pas de date</span> {% endif %}</td>
                    <td>{% if ord.episode.patient.societe %}{{ ord.episode.patient.societe.nom }}{% else %}PRIVE {% endif %}</td>

                {% else %}
                    <td>{{ ord.hospitalisation.patient.nom }} {{ ord.hospitalisation.patient.postnom }} {{ ord.hospitalisation.patient.prenom }} </td>
                    <td>{% if ord.hospitalisation.patient.sexe == true %}M{% else %}F{% endif %}</td>
                    <td>{% if ord.hospitalisation.patient.datenaissance %}{{ ord.hospitalisation.patient.datenaissance|date('d/m/Y') }}{% else %}<span class=\"label label-warning\">Pas de date</span> {% endif %}</td>
                    <td>{% if ord.hospitalisation.patient.societe %}{{ ord.hospitalisation.patient.societe.nom }}{% else %}PRIVE {% endif %}</td>

                        {% endif %}
                        <td>
                            <ul>
                                {% for res in ord.resultats %}
                                <li>{{ res.acte.actes.designationacte }}{% if res.resultat != null %}<i class=\"fa fa-check text-success\"></i> {% else %}<i class=\"fa fa-times text-danger\"></i> {% endif %}</li>
                                {% endfor %}
                            </ul>

                        </td>
                            <td>{% if ord.medecin is defined and ord.medecin is not null %}{{ ord.medecin.nom~\" \"~ord.medecin.postnom }}{% else %}{% endif %}</td>
                        <td>
                            <a href=\"{{ path('ordonnancelabo_show',{'id':ord.id}) }}\" class=\"btn btn-success\" title=\"Bon d'examens\" > <i class=\"fa fa-eye\"></i></a>
                            <a href=\"{{ path('ordonnancelabo_correct',{'id':ord.id}) }}\" class=\"btn btn-warning\" title=\"Bon d'examens\" > <i class=\"fa fa-edit\"></i></a>

                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
    </div>

{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}\" type=\"text/javascript\"></script>
    <script>
        \$(function () {
            \$('.table').dataTable({
                \"order\": [[ 0, \"desc\" ]],
                language:{
                    \"sProcessing\":     \"Traitement en cours...\",
                    \"sSearch\":         \"Rechercher&nbsp;:\",
                    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
                    \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                    \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                    \"sInfoPostFix\":    \"\",
                    \"sLoadingRecords\": \"Chargement en cours...\",
                    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
                    \"oPaginate\": {
                        \"sFirst\":      \"Premier\",
                        \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
                        \"sNext\":       \"Suivant\",
                        \"sLast\":       \"Dernier\"
                    }},
                \"oAria\": {
                    \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                    \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
                }
            });
        });
    </script>

{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/plugins/jquery-datatables-editable/datatables.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/multiselect/css/multi-select.css') }}\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2-bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}", "hostooSanteBundle:Labo:exattente.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Labo/exattente.html.twig");
    }
}
