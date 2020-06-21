<?php

/* hostooSanteBundle:Labo:liste.html.twig */
class __TwigTemplate_21cfd48bfd805611c536d26bdbf4e8a1cc0633f3e3137c522a726c2a38105f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Labo:liste.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Labo:liste.html.twig"));

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

        $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "hostooSanteBundle:Labo:liste.html.twig", 4)->display($context);
        
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
                    <th>N°</th>
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
        $context['_seq'] = twig_ensure_traversable(($context["exd"] ?? $this->getContext($context, "exd")));
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 23
            echo "                    <tr>
                        ";
            // line 24
            if ($this->getAttribute($context["ord"], "episode", [])) {
                // line 25
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "id", []), "html", null, true);
                echo "</td>

                            <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "postnom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "prenom", []), "html", null, true);
                echo " </td>
                            <td>";
                // line 28
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "sexe", []) == true)) {
                    echo "M";
                } else {
                    echo "F";
                }
                echo "</td>
                            <td>";
                // line 29
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "datenaissance", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
                } else {
                    echo "<span class=\"label label-warning\">Pas de date</span> ";
                }
                echo "</td>
                            <td>";
                // line 30
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "societe", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "societe", []), "nom", []), "html", null, true);
                } else {
                    echo "PRIVE ";
                }
                echo "</td>

                        ";
            } else {
                // line 33
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "id", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "postnom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "prenom", []), "html", null, true);
                echo " </td>
                            <td>";
                // line 35
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "sexe", []) == true)) {
                    echo "M";
                } else {
                    echo "F";
                }
                echo "</td>
                            <td>";
                // line 36
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "datenaissance", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "datenaissance", []), "d/m/Y"), "html", null, true);
                } else {
                    echo "<span class=\"label label-warning\">Pas de date</span> ";
                }
                echo "</td>
                            <td>";
                // line 37
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "societe", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "societe", []), "nom", []), "html", null, true);
                } else {
                    echo "PRIVE ";
                }
                echo "</td>

                        ";
            }
            // line 40
            echo "                        <td>
                            <ul>
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 43
                echo "                                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </ul>

                        </td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["ord"], "medecin", []), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnancelabo_show", ["id" => $this->getAttribute($context["ord"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success\" title=\"Bon d'examens\" > <i class=\"fa fa-eye\"></i></a>

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </tbody>
            </table>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
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

    // line 98
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 99
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Labo:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 107,  335 => 106,  331 => 105,  327 => 104,  323 => 103,  319 => 102,  315 => 101,  311 => 100,  306 => 99,  300 => 98,  262 => 67,  258 => 66,  254 => 65,  250 => 64,  246 => 63,  241 => 62,  235 => 61,  224 => 55,  213 => 50,  208 => 48,  203 => 45,  194 => 43,  190 => 42,  186 => 40,  176 => 37,  168 => 36,  160 => 35,  152 => 34,  147 => 33,  137 => 30,  129 => 29,  121 => 28,  113 => 27,  107 => 25,  105 => 24,  102 => 23,  98 => 22,  80 => 6,  74 => 5,  62 => 4,  51 => 3,  39 => 2,  11 => 1,);
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
                    <th>N°</th>
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
                {% for ord in exd %}
                    <tr>
                        {% if ord.episode %}
                            <td>{{ ord.episode.patient.id }}</td>

                            <td>{{ ord.episode.patient.nom }} {{ ord.episode.patient.postnom }} {{ ord.episode.patient.prenom }} </td>
                            <td>{% if ord.episode.patient.sexe == true %}M{% else %}F{% endif %}</td>
                            <td>{% if ord.episode.patient.datenaissance %}{{ ord.episode.patient.datenaissance|date('d/m/Y') }}{% else %}<span class=\"label label-warning\">Pas de date</span> {% endif %}</td>
                            <td>{% if ord.episode.patient.societe %}{{ ord.episode.patient.societe.nom }}{% else %}PRIVE {% endif %}</td>

                        {% else %}
                            <td>{{ ord.hospitalisation.patient.id }}</td>
                            <td>{{ ord.hospitalisation.patient.nom }} {{ ord.hospitalisation.patient.postnom }} {{ ord.hospitalisation.patient.prenom }} </td>
                            <td>{% if ord.hospitalisation.patient.sexe == true %}M{% else %}F{% endif %}</td>
                            <td>{% if ord.hospitalisation.patient.datenaissance %}{{ ord.hospitalisation.patient.datenaissance|date('d/m/Y') }}{% else %}<span class=\"label label-warning\">Pas de date</span> {% endif %}</td>
                            <td>{% if ord.hospitalisation.patient.societe %}{{ ord.hospitalisation.patient.societe.nom }}{% else %}PRIVE {% endif %}</td>

                        {% endif %}
                        <td>
                            <ul>
                                {% for res in ord.resultats %}
                                <li>{{ res.acte.actes.designationacte }}</li>
                                {% endfor %}
                            </ul>

                        </td>
                            <td>{{ ord.medecin }}</td>
                        <td>
                            <a href=\"{{ path('ordonnancelabo_show',{'id':ord.id}) }}\" class=\"btn btn-success\" title=\"Bon d'examens\" > <i class=\"fa fa-eye\"></i></a>

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
{% endblock %}", "hostooSanteBundle:Labo:liste.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Labo/liste.html.twig");
    }
}
