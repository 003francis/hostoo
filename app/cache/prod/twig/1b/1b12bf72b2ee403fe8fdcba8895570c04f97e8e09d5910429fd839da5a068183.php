<?php

/* ordonnancelabo/index.html.twig */
class __TwigTemplate_0e9a6ee95679fea5cf50bcd2d0deba9b65093ea44b08fdcee1508880f3623d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "ordonnancelabo/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnancelabo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        
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

        $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "ordonnancelabo/index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"card-box\">
    <h3>Registre</h3>

    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>N°</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Date nais.</th>
                <th>Sexe</th>
                <th>N° Dossier</th>
                <th>Téléphone</th>
                <th>Categorie</th>
                <th>Examens</th>
                <th>Medecin</th>
                ";
        // line 23
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordonnanceLabos"] ?? $this->getContext($context, "ordonnanceLabos")));
        foreach ($context['_seq'] as $context["_key"] => $context["ordonnanceLabo"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnancelabo_show", ["id" => $this->getAttribute($context["ordonnanceLabo"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnanceLabo"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            if ($this->getAttribute($context["ordonnanceLabo"], "dateordo", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ordonnanceLabo"], "dateordo", []), "d-m-Y"), "html", null, true);
            }
            echo "</td>
        ";
            // line 30
            if ($this->getAttribute($context["ordonnanceLabo"], "episode", [])) {
                // line 31
                echo "            <td>";
                echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "episode", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "episode", []), "patient", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "episode", []), "patient", []), "prenom", [])), "html", null, true);
                echo "</td>
            <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "episode", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>";
                // line 33
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "episode", []), "patient", []), "sexe", [])) {
                    echo " M ";
                } else {
                    echo "F ";
                }
                echo "</td>
            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "episode", []), "patient", []), "numerodossier", []), "html", null, true);
                echo "</td>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "episode", []), "patient", []), "telephone1", []), "html", null, true);
                echo "</td>
            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "episode", []), "patient", []), "societe", []), "id", []), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 38
                echo "                    <td>";
                echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "hospitalisation", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "hospitalisation", []), "patient", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "hospitalisation", []), "patient", []), "prenom", [])), "html", null, true);
                echo "</td>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "hospitalisation", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 40
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "hospitalisation", []), "patient", []), "sexe", [])) {
                    echo " M ";
                } else {
                    echo "F ";
                }
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "hospitalisation", []), "patient", []), "numerodossier", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "hospitalisation", []), "patient", []), "telephone1", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["ordonnanceLabo"], "hospitalisation", []), "patient", []), "societe", []), "id", []), "html", null, true);
                echo "</td>
                    ";
            }
            // line 45
            echo "                <td>
                    <ul>
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ordonnanceLabo"], "resultats", []));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 48
                echo "                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </ul>
                </td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["ordonnanceLabo"], "medecin", [])), "html", null, true);
            echo "</td>
                ";
            // line 62
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordonnanceLabo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>

    </div>
";
        
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
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
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

    // line 105
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 106
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnancelabo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 114,  325 => 113,  321 => 112,  317 => 111,  313 => 110,  309 => 109,  305 => 108,  301 => 107,  296 => 106,  290 => 105,  253 => 75,  249 => 74,  245 => 73,  241 => 72,  237 => 71,  232 => 70,  226 => 69,  215 => 64,  208 => 62,  204 => 52,  200 => 50,  191 => 48,  187 => 47,  183 => 45,  178 => 43,  174 => 42,  170 => 41,  162 => 40,  158 => 39,  153 => 38,  148 => 36,  144 => 35,  140 => 34,  132 => 33,  128 => 32,  123 => 31,  121 => 30,  115 => 29,  109 => 28,  106 => 27,  102 => 26,  97 => 23,  79 => 6,  73 => 5,  61 => 4,  50 => 3,  39 => 2,  11 => 1,);
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
    <h3>Registre</h3>

    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>N°</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Date nais.</th>
                <th>Sexe</th>
                <th>N° Dossier</th>
                <th>Téléphone</th>
                <th>Categorie</th>
                <th>Examens</th>
                <th>Medecin</th>
                {#<th>Actions</th>#}
            </tr>
        </thead>
        <tbody>
        {% for ordonnanceLabo in ordonnanceLabos %}
            <tr>
                <td><a href=\"{{ path('ordonnancelabo_show', { 'id': ordonnanceLabo.id }) }}\">{{ ordonnanceLabo.id }}</a></td>
                <td>{% if ordonnanceLabo.dateordo %}{{ ordonnanceLabo.dateordo|date('d-m-Y') }}{% endif %}</td>
        {% if ordonnanceLabo.episode %}
            <td>{{ ordonnanceLabo.episode.patient.nom~\" \"~ordonnanceLabo.episode.patient.postnom~\" \"~ordonnanceLabo.episode.patient.prenom }}</td>
            <td>{{ ordonnanceLabo.episode.patient.datenaissance|date('d/m/Y') }}</td>
            <td>{% if ordonnanceLabo.episode.patient.sexe %} M {% else %}F {% endif %}</td>
            <td>{{ ordonnanceLabo.episode.patient.numerodossier }}</td>
            <td>{{ ordonnanceLabo.episode.patient.telephone1 }}</td>
            <td>{{ ordonnanceLabo.episode.patient.societe.id }}</td>
                {% else %}
                    <td>{{ ordonnanceLabo.hospitalisation.patient.nom~\" \"~ordonnanceLabo.hospitalisation.patient.postnom~\" \"~ordonnanceLabo.hospitalisation.patient.prenom }}</td>
                    <td>{{ ordonnanceLabo.hospitalisation.patient.datenaissance|date('d/m/Y') }}</td>
                    <td>{% if ordonnanceLabo.hospitalisation.patient.sexe %} M {% else %}F {% endif %}</td>
                    <td>{{ ordonnanceLabo.hospitalisation.patient.numerodossier }}</td>
                    <td>{{ ordonnanceLabo.hospitalisation.patient.telephone1 }}</td>
                    <td>{{ ordonnanceLabo.hospitalisation.patient.societe.id }}</td>
                    {% endif %}
                <td>
                    <ul>
                        {% for res in ordonnanceLabo.resultats %}
                        <li>{{ res.acte.actes.designationacte  }}</li>
                        {% endfor %}
                    </ul>
                </td>
                <td>{{ ordonnanceLabo.medecin|upper }}</td>
                {#
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ordonnancelabo_show', { 'id': ordonnanceLabo.id }) }}\">afficher</a>
                        </li>
                    </ul>
                </td>
                #}
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
{% endblock %}", "ordonnancelabo/index.html.twig", "/var/www/html/hostoo/app/Resources/views/ordonnancelabo/index.html.twig");
    }
}
