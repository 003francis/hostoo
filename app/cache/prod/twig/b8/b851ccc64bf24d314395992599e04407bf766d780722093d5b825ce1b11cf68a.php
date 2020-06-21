<?php

/* resultatsimg/index.html.twig */
class __TwigTemplate_d75c37a44e58adb85e2b8dcc9dd3266473b16236906578f06300343c618cbe81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "resultatsimg/index.html.twig", 1);
        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resultatsimg/index.html.twig"));

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
        $this->loadTemplate("hostooSanteBundle:menus:menuimg.html.twig", "resultatsimg/index.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"card-box\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Patient</th>
                <th>Dateresultat</th>
                <th>Fichier</th>
                <th>Attente</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultatsImgs"] ?? $this->getContext($context, "resultatsImgs")));
        foreach ($context['_seq'] as $context["_key"] => $context["resultatsImg"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["resultatsImg"], "ordonnance", []), "episode", []), "patient", []), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["resultatsImg"], "dateresultat", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["resultatsImg"], "dateresultat", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["resultatsImg"], "fichier", []), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["resultatsImg"], "attente", [])) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>
                    <ul class=\"list-inline list-group\">
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultatsimg_show", ["id" => $this->getAttribute($context["resultatsImg"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i> afficher</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultatsimg_edit", ["id" => $this->getAttribute($context["resultatsImg"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i> </a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultatsImg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
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

    // line 79
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 80
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "resultatsimg/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 88,  232 => 87,  228 => 86,  224 => 85,  220 => 84,  216 => 83,  212 => 82,  208 => 81,  203 => 80,  197 => 79,  159 => 48,  155 => 47,  151 => 46,  147 => 45,  143 => 44,  138 => 43,  132 => 42,  121 => 36,  109 => 30,  103 => 27,  92 => 23,  88 => 22,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  57 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
    {% include 'hostooSanteBundle:menus:menuimg.html.twig' %}
{% endblock %}
{% block body %}
<div class=\"card-box\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Patient</th>
                <th>Dateresultat</th>
                <th>Fichier</th>
                <th>Attente</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for resultatsImg in resultatsImgs %}
            <tr>
                <td>{{ resultatsImg.ordonnance.episode.patient }}</td>
                <td>{% if resultatsImg.dateresultat %}{{ resultatsImg.dateresultat|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ resultatsImg.fichier }}</td>
                <td>{% if resultatsImg.attente %}Oui{% else %}Non{% endif %}</td>
                <td>
                    <ul class=\"list-inline list-group\">
                        <li>
                            <a href=\"{{ path('resultatsimg_show', { 'id': resultatsImg.id }) }}\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i> afficher</a>
                        </li>
                        <li>
                            <a href=\"{{ path('resultatsimg_edit', { 'id': resultatsImg.id }) }}\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i> </a>
                        </li>
                    </ul>
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
{% endblock %}", "resultatsimg/index.html.twig", "/var/www/html/hostoo/app/Resources/views/resultatsimg/index.html.twig");
    }
}
