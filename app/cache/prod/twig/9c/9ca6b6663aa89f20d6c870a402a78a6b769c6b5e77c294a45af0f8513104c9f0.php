<?php

/* ordonnancelabo/correct.html.twig */
class __TwigTemplate_1ddbcdb8df7cd321a7f58afd967842b841f0069887fd3dbb5a420a52f9aa5b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "ordonnancelabo/correct.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnancelabo/correct.html.twig"));

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

        $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "ordonnancelabo/correct.html.twig", 7)->display($context);
        
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
            <th>";
        // line 14
        if ($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", [])) {
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "prenom", [])), "html", null, true);
            echo "  /  ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "sexe", [])) {
                echo "M ";
            } else {
                echo "F";
            }
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "hospitalisation", []), "patient", []), "html", null, true);
            echo "  /  ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "hospitalisation", []), "patient", []), "sexe", [])) {
                echo "M ";
            } else {
                echo "F";
            }
        }
        echo "</th>
            <th>Date</th>
            <th>";
        // line 16
        if ($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "dateordo", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "dateordo", []), "d-m-Y H:i:s"), "html", null, true);
        }
        echo "</th>
        </tr>
        <tr>
            <th>Né (e) le </th>
            <th>";
        // line 20
        if ($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
        }
        echo "</th>
            <th>Medecin</th>
            <th>";
        // line 22
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "medecin", [])), "html", null, true);
        echo "</th>
        </tr>
        <tr>
            <th>Société</th>
            <th>";
        // line 26
        if ($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "episode", []), "patient", []), "societe", []), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "hospitalisation", []), "patient", []), "societe", []), "html", null, true);
        }
        echo "</th>
            <th>Service</th>
            <th>";
        // line 28
        echo "</th>
        </tr>


        </tbody>
    </table>
    <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("valider_resultat_att", ["id" => $this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "id", [])]), "html", null, true);
        echo "\" method=\"post\">
    <table class=\"table table-bordered\">

        <tr class=\"bg-inverse\">
            <th class=\"text-white text-center col-md-4\">Analyses</th>
            <th class=\"text-white text-center col-md-4\">Valeurs de reference</th>
            <th class=\"text-white text-center col-md-4\">Resultats</th>
        </tr>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ordonnanceLabo"] ?? $this->getContext($context, "ordonnanceLabo")), "resultats", []));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 43
            echo "        <tr>
            <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
            echo "</th>
            <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "valeur", []), "html", null, true);
            echo "</th>
            <td>";
            // line 46
            if ($this->getAttribute($context["res"], "attente", [])) {
                echo "<p>";
                echo $this->getAttribute($context["res"], "resultat", []);
                echo "</p>";
            } else {
                echo " En Attente";
            }
            // line 47
            echo "                <textarea class=\"form-control\"  name=\"myresultat[";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["res"], "acte", []), "id", []), "html", null, true);
            echo "]\" id=\"myresultat\" >";
            if ($this->getAttribute($context["res"], "resultat", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "resultat", []), "html", null, true);
            }
            echo "</textarea>
                ";
            // line 49
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        <tr>
            <th colspan=\"4\"><button type=\"submit\" class=\"btn btn-success\">Sauvegarder les resultats</button> </th>
        </tr>
    </table>
    </form>
    <ul>
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnancelabo_index");
        echo "\" class=\"btn btn-info\">Liste des examens</a>
        </li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
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

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 103
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnancelabo/correct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 111,  326 => 110,  322 => 109,  318 => 108,  314 => 107,  310 => 106,  306 => 105,  302 => 104,  297 => 103,  291 => 102,  253 => 71,  249 => 70,  245 => 69,  241 => 68,  237 => 67,  232 => 66,  226 => 65,  214 => 59,  205 => 52,  197 => 49,  188 => 47,  180 => 46,  176 => 45,  172 => 44,  169 => 43,  165 => 42,  154 => 34,  146 => 28,  137 => 26,  130 => 22,  123 => 20,  114 => 16,  93 => 14,  86 => 9,  80 => 8,  68 => 7,  57 => 4,  51 => 3,  39 => 2,  11 => 1,);
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
            <th>{% if ordonnanceLabo.episode %}{{ ordonnanceLabo.episode.patient.nom~\" \"~ordonnanceLabo.episode.patient.postnom~\" \"~ordonnanceLabo.episode.patient.prenom }}  /  {% if ordonnanceLabo.episode.patient.sexe %}M {% else %}F{% endif %}{% else %}{{ ordonnanceLabo.hospitalisation.patient }}  /  {% if ordonnanceLabo.hospitalisation.patient.sexe %}M {% else %}F{% endif %}{% endif %}</th>
            <th>Date</th>
            <th>{% if ordonnanceLabo.dateordo %}{{ ordonnanceLabo.dateordo|date('d-m-Y H:i:s') }}{% endif %}</th>
        </tr>
        <tr>
            <th>Né (e) le </th>
            <th>{% if ordonnanceLabo.episode %}{{ ordonnanceLabo.episode.patient.datenaissance|date('d/m/Y') }}{% endif %}</th>
            <th>Medecin</th>
            <th>{{ ordonnanceLabo.medecin|upper }}</th>
        </tr>
        <tr>
            <th>Société</th>
            <th>{% if ordonnanceLabo.episode %}{{ ordonnanceLabo.episode.patient.societe }}{% else %}{{ ordonnanceLabo.hospitalisation.patient.societe }}{% endif %}</th>
            <th>Service</th>
            <th>{#{% if app.user.service is defined %}{{ app.user.service.nomservice|upper }}{% endif %}#}</th>
        </tr>


        </tbody>
    </table>
    <form action=\"{{ path('valider_resultat_att',{'id': ordonnanceLabo.id }) }}\" method=\"post\">
    <table class=\"table table-bordered\">

        <tr class=\"bg-inverse\">
            <th class=\"text-white text-center col-md-4\">Analyses</th>
            <th class=\"text-white text-center col-md-4\">Valeurs de reference</th>
            <th class=\"text-white text-center col-md-4\">Resultats</th>
        </tr>
        {% for res in ordonnanceLabo.resultats %}
        <tr>
            <th>{{ res.acte.actes.designationacte }}</th>
            <th>{{ res.acte.actes.valeur }}</th>
            <td>{% if res.attente %}<p>{{ res.resultat|raw }}</p>{% else %} En Attente{% endif %}
                <textarea class=\"form-control\"  name=\"myresultat[{{ res.acte.id }}]\" id=\"myresultat\" >{% if res.resultat %}{{ res.resultat }}{% endif %}</textarea>
                {#<input type=\"hidden\" name=\"valeur[{{ mesactes.acte.actes.id }}]\" value=\"{% if mesactes.acte.actes.valeur %}{{ mesactes.acte.actes.valeur.id }} {% endif %}\" />#}
            </td>
        </tr>
        {% endfor %}
        <tr>
            <th colspan=\"4\"><button type=\"submit\" class=\"btn btn-success\">Sauvegarder les resultats</button> </th>
        </tr>
    </table>
    </form>
    <ul>
        <li>
            <a href=\"{{ path('ordonnancelabo_index') }}\" class=\"btn btn-info\">Liste des examens</a>
        </li>
    </ul>
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
{% endblock %}", "ordonnancelabo/correct.html.twig", "/var/www/html/hostoo/app/Resources/views/ordonnancelabo/correct.html.twig");
    }
}
