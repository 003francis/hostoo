<?php

/* ordonnanceimg/correct.html.twig */
class __TwigTemplate_1ea3f44a8115918f0a2c279e4b042365228b4a8179b40a94e4a38a4b5c008936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "ordonnanceimg/correct.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnanceimg/correct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Résultats de Imagerie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 4
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnanceimg_printshow", ["id" => $this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-default\">Imprimer</a>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnanceimg_correct", ["id" => $this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-default\">Corriger</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "ordonnanceimg/correct.html.twig", 8)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"card-box\">
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Patient</th>
            ";
        // line 15
        if ($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "episode", [])) {
            // line 16
            echo "            <th>";
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "episode", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "episode", []), "patient", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "episode", []), "patient", []), "prenom", [])), "html", null, true);
            echo "  /  ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "episode", []), "patient", []), "sexe", [])) {
                echo "M ";
            } else {
                echo "F";
            }
            echo "</th>
            ";
        } else {
            // line 18
            echo "            <th>";
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "hospitalisation", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "hospitalisation", []), "patient", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "hospitalisation", []), "patient", []), "prenom", [])), "html", null, true);
            echo "  /  ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "hospitalisation", []), "patient", []), "sexe", [])) {
                echo "M ";
            } else {
                echo "F";
            }
            echo "</th>
            ";
        }
        // line 20
        echo "            <th>Date</th>
            <th>";
        // line 21
        if ($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "dateordo", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "dateordo", []), "d-m-Y H:i:s"), "html", null, true);
        }
        echo "</th>
        </tr>
        <tr>
            <th>Né (e) le </th>
            ";
        // line 25
        if ($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "episode", [])) {
            // line 26
            echo "            <th>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "episode", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
            echo "</th>
            ";
        } else {
            // line 28
            echo "            <th>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "hospitalisation", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
            echo "</th>
            ";
        }
        // line 30
        echo "            <th>Medecin</th>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "medecin", [])), "html", null, true);
        echo "</th>
        </tr>
        <tr>
            <th>Société</th>
            ";
        // line 35
        if ($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "episode", [])) {
            // line 36
            echo "            <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "episode", []), "patient", []), "societe", []), "html", null, true);
            echo "</th>
            ";
        } else {
            // line 38
            echo "            <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "hospitalisation", []), "patient", []), "societe", []), "html", null, true);
            echo "</th>
            ";
        }
        // line 40
        echo "            <th>Service</th>
            ";
        // line 42
        echo "        </tr>


        </tbody>
    </table>
    <form action=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("valider_resultat_attimg", ["id" => $this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "id", [])]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
    <table class=\"table table-bordered\">

        <tr class=\"bg-inverse\">
            <th class=\"text-white text-center col-md-4\">Analyses</th>
            <th class=\"text-white text-center col-md-4\">Valeurs de reference</th>
            <th class=\"text-white text-center col-md-4\">Resultats</th>
        </tr>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ordonnanceimg"] ?? $this->getContext($context, "ordonnanceimg")), "resultats", []));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 56
            echo "        <tr>
            <th>
                ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
            echo "</th>
            <th>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "valeur", []), "html", null, true);
            echo "</th>
            <td>
                <div  class=\"col-lg-3\">
                    ";
            // line 62
            if ($this->getAttribute($context["res"], "fichier", [])) {
                // line 63
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/imageries/" . $this->getAttribute($context["res"], "fichier", []))), "html", null, true);
                echo "\" class=\"img-thumbnail\"/> <input type=\"file\" name=\"fichier[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "id", []), "html", null, true);
                echo "]\" />
                    ";
            } else {
                // line 65
                echo "                    <input type=\"file\" name=\"fichier[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "id", []), "html", null, true);
                echo "]\" />
                        ";
            }
            // line 67
            echo "                </div>
                ";
            // line 68
            if ($this->getAttribute($context["res"], "attente", [])) {
                echo "<p>";
                echo $this->getAttribute($context["res"], "resultat", []);
                echo "</p>";
            } else {
                echo " En Attente";
            }
            // line 69
            echo "
                <textarea class=\"form-control text-warning\"  name=\"myresultat[";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["res"], "acte", []), "id", []), "html", null, true);
            echo "]\" id=\"myresultat\" >";
            if ($this->getAttribute($context["res"], "resultat", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "resultat", []), "html", null, true);
            }
            echo "</textarea>
                ";
            // line 72
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        <tr>
            <th colspan=\"4\"><button type=\"submit\" class=\"btn btn-success\">Sauvegarder les resultats</button> </th>
        </tr>
    </table>
    </form>
    <ul>
        <li>
            <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnanceimg_index");
        echo "\" class=\"btn btn-info\">Liste des examens</a>
        </li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
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

    // line 125
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 126
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnanceimg/correct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 134,  379 => 133,  375 => 132,  371 => 131,  367 => 130,  363 => 129,  359 => 128,  355 => 127,  350 => 126,  344 => 125,  306 => 94,  302 => 93,  298 => 92,  294 => 91,  290 => 90,  285 => 89,  279 => 88,  267 => 82,  258 => 75,  250 => 72,  242 => 70,  239 => 69,  231 => 68,  228 => 67,  222 => 65,  214 => 63,  212 => 62,  206 => 59,  202 => 58,  198 => 56,  194 => 55,  183 => 47,  176 => 42,  173 => 40,  167 => 38,  161 => 36,  159 => 35,  152 => 31,  149 => 30,  143 => 28,  137 => 26,  135 => 25,  126 => 21,  123 => 20,  111 => 18,  99 => 16,  97 => 15,  90 => 10,  84 => 9,  72 => 8,  62 => 5,  57 => 4,  51 => 3,  39 => 2,  11 => 1,);
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
{% block titrepage %}Résultats de Imagerie{% endblock %}
{% block options %}
    <a href=\"{{ path('ordonnanceimg_printshow',{'id': ordonnanceimg.id }) }}\" class=\"btn btn-default\">Imprimer</a>
    <a href=\"{{ path('ordonnanceimg_correct',{'id': ordonnanceimg.id }) }}\" class=\"btn btn-default\">Corriger</a>

{% endblock %}
{% block menu %}{% include 'hostooSanteBundle:menus:menulabo.html.twig' %}{% endblock %}
{% block body %}
<div class=\"card-box\">
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Patient</th>
            {% if ordonnanceimg.episode %}
            <th>{{ ordonnanceimg.episode.patient.nom~\" \"~ordonnanceimg.episode.patient.postnom~\" \"~ordonnanceimg.episode.patient.prenom }}  /  {% if ordonnanceimg.episode.patient.sexe %}M {% else %}F{% endif %}</th>
            {% else %}
            <th>{{ ordonnanceimg.hospitalisation.patient.nom~\" \"~ordonnanceimg.hospitalisation.patient.postnom~\" \"~ordonnanceimg.hospitalisation.patient.prenom }}  /  {% if ordonnanceimg.hospitalisation.patient.sexe %}M {% else %}F{% endif %}</th>
            {% endif %}
            <th>Date</th>
            <th>{% if ordonnanceimg.dateordo %}{{ ordonnanceimg.dateordo|date('d-m-Y H:i:s') }}{% endif %}</th>
        </tr>
        <tr>
            <th>Né (e) le </th>
            {% if ordonnanceimg.episode %}
            <th>{{ ordonnanceimg.episode.patient.datenaissance|date('d/m/Y') }}</th>
            {% else %}
            <th>{{ ordonnanceimg.hospitalisation.patient.datenaissance|date('d/m/Y') }}</th>
            {% endif %}
            <th>Medecin</th>
            <th>{{ ordonnanceimg.medecin|upper }}</th>
        </tr>
        <tr>
            <th>Société</th>
            {% if ordonnanceimg.episode %}
            <th>{{ ordonnanceimg.episode.patient.societe }}</th>
            {% else %}
            <th>{{ ordonnanceimg.hospitalisation.patient.societe }}</th>
            {% endif %}
            <th>Service</th>
            {#<th>{% if  app.user.service is defined %}{{ app.user.service.nomservice|upper }} {% endif %}</th>#}
        </tr>


        </tbody>
    </table>
    <form action=\"{{ path('valider_resultat_attimg',{'id': ordonnanceimg.id }) }}\" method=\"post\" enctype=\"multipart/form-data\">
    <table class=\"table table-bordered\">

        <tr class=\"bg-inverse\">
            <th class=\"text-white text-center col-md-4\">Analyses</th>
            <th class=\"text-white text-center col-md-4\">Valeurs de reference</th>
            <th class=\"text-white text-center col-md-4\">Resultats</th>
        </tr>
        {% for res in ordonnanceimg.resultats %}
        <tr>
            <th>
                {{ res.acte.actes.designationacte }}</th>
            <th>{{ res.acte.actes.valeur }}</th>
            <td>
                <div  class=\"col-lg-3\">
                    {% if res.fichier %}
                    <img src=\"{{ asset('uploads/imageries/'~res.fichier) }}\" class=\"img-thumbnail\"/> <input type=\"file\" name=\"fichier[{{ res.acte.actes.id }}]\" />
                    {% else %}
                    <input type=\"file\" name=\"fichier[{{ res.acte.actes.id }}]\" />
                        {% endif %}
                </div>
                {% if res.attente %}<p>{{ res.resultat|raw }}</p>{% else %} En Attente{% endif %}

                <textarea class=\"form-control text-warning\"  name=\"myresultat[{{ res.acte.id }}]\" id=\"myresultat\" >{% if res.resultat %}{{ res.resultat }}{% endif %}</textarea>
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
            <a href=\"{{ path('ordonnanceimg_index') }}\" class=\"btn btn-info\">Liste des examens</a>
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
{% endblock %}", "ordonnanceimg/correct.html.twig", "/var/www/html/hostoo/app/Resources/views/ordonnanceimg/correct.html.twig");
    }
}
