<?php

/* hostooSanteBundle:Dispatcher:listepatientsevery.html.twig */
class __TwigTemplate_9ac4eb84bc5b581a85d2d101d0f2a518e54cb01cc13511e437e658b54942f1a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Dispatcher:listepatientsevery.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Dispatcher:listepatientsevery.html.twig"));

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
        $this->loadTemplate("hostooSanteBundle:menus:menunrs.html.twig", "hostooSanteBundle:Dispatcher:listepatientsevery.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Fil d'attente patients";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        if ((($context["episodes"] ?? $this->getContext($context, "episodes")) == null)) {
            // line 10
            echo "    <h2>Pas de liste</h2>
    ";
        } else {
            // line 12
            echo "        <div class=\"card-box\">
        <table class=\"table table-striped\" id=\"listepatients\">
            <thead>
        <tr>
            <th>Date</th>
            <th>Nom</th>
            <th>Sexe</th>

            <th></th>
        </tr></thead>
            <tbody>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 24
                echo "       <tr>
           <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "d-m-Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", []), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "prenom", []), "html", null, true);
                echo "</td>
                <td>";
                // line 27
                if (($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "sexe", []) == true)) {
                    echo "M";
                } else {
                    echo "F";
                }
                echo "</td>
            <td><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voirpatient_prel", ["id" => $this->getAttribute($context["episode"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-custom pull-right\"><i class=\"fa fa-eye\"></i> </a> </td>
                ";
                // line 30
                echo "            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "</tbody>
            </table>
</div>
        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(function () {
           \$('#listepatients').dataTable({
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
    <script>
\$(function () {

    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 75
            echo "        //advance multiselect start
        \$('#my_multi_select";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", []), "html", null, true);
            echo "').multiSelect({
            selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            afterInit: function (ms) {
                var that = this,
                        \$selectableSearch = that.\$selectableUl.prev(),
                        \$selectionSearch = that.\$selectionUl.prev(),
                        selectableSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selection.ms-selected';

                that.qs1 = \$selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.\$selectableUl.focus();
                                return false;
                            }
                        });

                that.qs2 = \$selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.\$selectionUl.focus();
                                return false;
                            }
                        });
            },
            afterSelect: function () {
                this.qs1.cache();
                this.qs2.cache();
            },
            afterDeselect: function () {
                this.qs1.cache();
                this.qs2.cache();
            }
        });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    // Select2
    \$(\".select2\").select2();

    \$(\".select2-limiting\").select2({
        placeholder: \"Choisir les actes\"
    });


});
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 124
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Dispatcher:listepatientsevery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 132,  314 => 131,  310 => 130,  306 => 129,  302 => 128,  298 => 127,  294 => 126,  290 => 125,  285 => 124,  279 => 123,  262 => 112,  220 => 76,  217 => 75,  213 => 74,  178 => 42,  174 => 41,  170 => 40,  166 => 39,  162 => 38,  158 => 37,  152 => 36,  141 => 31,  135 => 30,  131 => 28,  123 => 27,  115 => 26,  111 => 25,  108 => 24,  104 => 23,  91 => 12,  87 => 10,  85 => 9,  82 => 8,  76 => 7,  65 => 6,  53 => 5,  45 => 3,  39 => 2,  11 => 1,);
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
    {% include 'hostooSanteBundle:menus:menunrs.html.twig' %}
{% endblock %}
{% block titrepage %}Fil d'attente patients{% endblock %}
{% block options %}{% endblock %}
{% block body %}

{% if episodes == null %}
    <h2>Pas de liste</h2>
    {% else %}
        <div class=\"card-box\">
        <table class=\"table table-striped\" id=\"listepatients\">
            <thead>
        <tr>
            <th>Date</th>
            <th>Nom</th>
            <th>Sexe</th>

            <th></th>
        </tr></thead>
            <tbody>
        {% for episode in episodes %}
       <tr>
           <td>{{ episode.dateepisode|date('d-m-Y') }}</td>
                <td>{{ episode.patient.nom }}  {{ episode.patient.postnom }}  {{ episode.patient.prenom }}</td>
                <td>{% if episode.patient.sexe == true %}M{% else %}F{% endif %}</td>
            <td><a href=\"{{ path('voirpatient_prel',{'id':episode.id }) }}\" class=\"btn btn-custom pull-right\"><i class=\"fa fa-eye\"></i> </a> </td>
                {#<td><a href=\"{{ path('hostoo_sante_voirpatient',{'id':patient.id}) }}\" class=\"btn btn-info\" > <i class=\"fa fa-eye\"></i>Details</a></td>#}
            </tr>{% endfor %}
</tbody>
            </table>
</div>
        {% endif %}
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
           \$('#listepatients').dataTable({
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
    <script>
\$(function () {

    {% for episode in episodes %}
        //advance multiselect start
        \$('#my_multi_select{{ episode.id }}').multiSelect({
            selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
            afterInit: function (ms) {
                var that = this,
                        \$selectableSearch = that.\$selectableUl.prev(),
                        \$selectionSearch = that.\$selectionUl.prev(),
                        selectableSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selection.ms-selected';

                that.qs1 = \$selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.\$selectableUl.focus();
                                return false;
                            }
                        });

                that.qs2 = \$selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.\$selectionUl.focus();
                                return false;
                            }
                        });
            },
            afterSelect: function () {
                this.qs1.cache();
                this.qs2.cache();
            },
            afterDeselect: function () {
                this.qs1.cache();
                this.qs2.cache();
            }
        });
    {% endfor %}
    // Select2
    \$(\".select2\").select2();

    \$(\".select2-limiting\").select2({
        placeholder: \"Choisir les actes\"
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
{% endblock %}", "hostooSanteBundle:Dispatcher:listepatientsevery.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Dispatcher/listepatientsevery.html.twig");
    }
}
