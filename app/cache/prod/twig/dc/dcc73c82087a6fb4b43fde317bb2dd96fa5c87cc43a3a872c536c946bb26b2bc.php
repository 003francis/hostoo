<?php

/* hostooSanteBundle:Patient:listepatients.html.twig */
class __TwigTemplate_0da62a6fe11a2312f06021ee5feeb05242bcc383be58b18236b5571181041fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Patient:listepatients.html.twig", 1);
        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Patient:listepatients.html.twig"));

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
        $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooSanteBundle:Patient:listepatients.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        // line 6
        echo "    Liste des patients
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_savepatient");
        echo "\" class=\"btn btn-success\">Créer un nouveau patient </a> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"card-box\">
            <ul class=\"list-group list-unstyled\" id=\"mesitems\" style=\"display: none\">

            </ul>
        </div>
    </div>
";
        // line 17
        if ((($context["patients"] ?? $this->getContext($context, "patients")) == null)) {
            // line 18
            echo "    <h2>Pas de liste</h2>
    ";
        } else {
            // line 20
            echo "         <div class=\"card-box\">
        <table class=\"table table-striped\" id=\"patients\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Postnom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Sexe</th>
                <th>Societé</th>
                <th>N° Dossier</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["patients"] ?? $this->getContext($context, "patients")));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 36
                echo "            <tr>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["patient"], "nom", [])), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["patient"], "postnom", [])), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["patient"], "prenom", [])), "html", null, true);
                echo "</td>
                <td>";
                // line 40
                if ($this->getAttribute($context["patient"], "datenaissance", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "datenaissance", []), "d/m/Y"), "html", null, true);
                } else {
                    echo "<span class=\"label label-warning\">Pas de date</span> ";
                }
                echo "</td>
                <td>";
                // line 41
                if (($this->getAttribute($context["patient"], "sexe", []) == true)) {
                    echo "M";
                } else {
                    echo "F";
                }
                echo "</td>
                <td>";
                // line 42
                if ($this->getAttribute($context["patient"], "societe", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["patient"], "societe", []), "nom", []), "html", null, true);
                    echo " ";
                }
                echo "</td>
                <td>";
                // line 43
                if ($this->getAttribute($context["patient"], "numerodossier", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "numerodossier", []), "html", null, true);
                    echo " ";
                }
                echo "</td>
                <td>
                    ";
                // line 45
                if ($this->getAttribute($this->getAttribute($context["patient"], "societe", []), "etat", [])) {
                    // line 46
                    echo "                    ";
                    if (($this->getAttribute($context["patient"], "formule", []) && ($this->getAttribute($this->getAttribute($context["patient"], "societe", []), "id", []) != 15))) {
                        // line 47
                        echo "
                    <a href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_voirpatient", ["id" => $this->getAttribute($context["patient"], "id", [])]), "html", null, true);
                        echo "\" class=\"btn btn-info\" title=\"Afficher le patient\"> <i class=\"fa fa-eye\"></i></a>
                    ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 49
$context["patient"], "societe", []), "id", []) == 15)) {
                        // line 50
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_voirpatient", ["id" => $this->getAttribute($context["patient"], "id", [])]), "html", null, true);
                        echo "\" class=\"btn btn-info\" title=\"Afficher le patient\"> <i class=\"fa fa-eye\"></i></a>
                    ";
                    } else {
                        // line 52
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_editpatientrc", ["id" => $this->getAttribute($context["patient"], "id", [])]), "html", null, true);
                        echo "\" class=\"btn btn-warning\" title=\"Modifier le patient\" > <i class=\"fa fa-edit\"></i></a>
                    ";
                    }
                    // line 54
                    echo "                    ";
                } else {
                    // line 55
                    echo "                        <span class=\"label label-warning\">Réactivation demandée</span>
                    ";
                }
                // line 57
                echo "                </td>
            </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </tbody>
        </table>
        </div>
        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 66
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 67
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooSanteBundle:Patient:listepatients.html.twig", 67)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    ";
        // line 73
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooSanteBundle:Patient:listepatients.html.twig", 73)->display($context);
        // line 74
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('#patients').dataTable({
                deferRender:    true,
                scrollY:        800,
                scrollCollapse: true,
                scroller:       true,
                dom: \"Bfrtip\",
                buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                    extend: \"excel\",
                    className: \"btn-sm\"
                }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],
                responsive: !0
                ,language: {
                    processing:     \"Traitement en cours...\",
                    search:         \"Rechercher&nbsp;:\",
                    lengthMenu:    \"Afficher _MENU_ &eacute;l&eacute;ments\",
                    info:           \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    infoEmpty:      \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                    infoFiltered:   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                    infoPostFix:    \"\",
                    loadingRecords: \"Chargement en cours...\",
                    zeroRecords:    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    emptyTable:     \"Aucune donnée disponible dans le tableau\",
                    paginate: {
                        first:      \"Premier\",
                        previous:   \"Pr&eacute;c&eacute;dent\",
                        next:       \"Suivant\",
                        last:       \"Dernier\"
                    },
                    aria: {
                        sortAscending:  \": activer pour trier la colonne par ordre croissant\",
                        sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                    }}
            });
        });
    </script>
    <script type=\"application/javascript\">
        \$inp=\$('#motcle');
        \$inp.keyup(function(event){
            \$('#mesitems').show().html('');
            //\$(\".loading\").show();
            var motcle = \$(this).val();
            var DONNEE = 'motcle=' + motcle;
            \$.ajax({
                type: \"POST\",
                dataType:'json',
                url: Routing.generate('recherche_patient'),
                data: DONNEE,
                cache: false,
                minLength: 2,
                beforeSend: function () {
                    \$('#mesitems').find('li').remove();
                },
                success: function(data) {


                    \$.each(data.items, function(index,value) {
                        //\$(\"#ott\").text(value.libelle+'<br/>'+value.Prix);
                        var nophoto=\"../../jquery-ui/images/no_image.jpg\";
                        var lien=Routing.generate('hostoo_sante_voirpatient',{id:value.id});
                        var lien2=Routing.generate('hostoo_ajouter_parent',{id:value.id});
                        var lien3=Routing.generate('hostoo_ajouter_parent',{id:value.id});
                        \$('#mesitems').prepend('<li class=\"list-group-item\"><span class=\"fa fa-user\"></span>'+value.nom+' '+value.postnom+' '+value.prenom+'<div class=\"btn-group pull-right\"><a href=\"'+lien2+'\" class=\"btn btn-success\">Dependants</a><a class=\"btn btn-info\" href=\"'+lien+'\">Afficher</a>";
        // line 137
        echo "</div> </li>');
                        //\$('#resultats').html('<div>'+value.libelle+'</div>');
                        //alert(value.libelle);
                    });

                    // \$(\".loading\").hide();
                }
            });
            return false;
        });

        // Date Picker
        jQuery('#datepicker').datepicker();
        jQuery('#patient_datenaissance').datepicker({
            autoclose: true,
            dateFormat: \"dd/mm/yy\",
            dayNames: [ \"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\" ],
            dayNamesMin: [ \"Di\", \"Lu\", \"Ma\", \"Me\", \"Je\", \"Ve\", \"Sa\" ],
            monthNames: [\"Janvier\",\"Fevrier\",\"Mars\",\"Avril\",\"Mai\",\"Juin\",\"Juillet\",\"Aout\",\"Septembre\",\"Octobre\",\"Novembre\",\"Decembre\"],
            todayHighlight: true
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Patient:listepatients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 137,  259 => 74,  257 => 73,  253 => 72,  249 => 71,  245 => 70,  239 => 69,  232 => 67,  227 => 66,  221 => 65,  210 => 60,  202 => 57,  198 => 55,  195 => 54,  189 => 52,  183 => 50,  181 => 49,  177 => 48,  174 => 47,  171 => 46,  169 => 45,  161 => 43,  154 => 42,  146 => 41,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  123 => 36,  119 => 35,  102 => 20,  98 => 18,  96 => 17,  87 => 10,  81 => 9,  67 => 8,  59 => 6,  53 => 5,  45 => 3,  39 => 2,  11 => 1,);
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
    {% include \"hostooSanteBundle:menus:menurc.html.twig\" %}
{% endblock %}
{% block titrepage %}
    Liste des patients
    {% endblock %}
{% block options %} <a href=\"{{ path('hostoo_sante_savepatient') }}\" class=\"btn btn-success\">Créer un nouveau patient </a> {% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"card-box\">
            <ul class=\"list-group list-unstyled\" id=\"mesitems\" style=\"display: none\">

            </ul>
        </div>
    </div>
{% if patients == null %}
    <h2>Pas de liste</h2>
    {% else %}
         <div class=\"card-box\">
        <table class=\"table table-striped\" id=\"patients\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Postnom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Sexe</th>
                <th>Societé</th>
                <th>N° Dossier</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
{% for patient in patients %}
            <tr>
                <td>{{ patient.nom|upper }}</td>
                <td>{{ patient.postnom|upper }}</td>
                <td>{{ patient.prenom|upper }}</td>
                <td>{% if patient.datenaissance %}{{ patient.datenaissance|date('d/m/Y') }}{% else %}<span class=\"label label-warning\">Pas de date</span> {% endif %}</td>
                <td>{% if patient.sexe == true %}M{% else %}F{% endif %}</td>
                <td>{% if patient.societe %}{{ patient.societe.nom }} {% endif %}</td>
                <td>{% if patient.numerodossier %}{{ patient.numerodossier }} {% endif %}</td>
                <td>
                    {% if patient.societe.etat %}
                    {% if patient.formule and patient.societe.id != 15 %}

                    <a href=\"{{ path('hostoo_sante_voirpatient',{'id':patient.id}) }}\" class=\"btn btn-info\" title=\"Afficher le patient\"> <i class=\"fa fa-eye\"></i></a>
                    {% elseif patient.societe.id == 15 %}
                        <a href=\"{{ path('hostoo_sante_voirpatient',{'id':patient.id}) }}\" class=\"btn btn-info\" title=\"Afficher le patient\"> <i class=\"fa fa-eye\"></i></a>
                    {% else %}
                        <a href=\"{{ path('hostoo_sante_editpatientrc',{'id':patient.id}) }}\" class=\"btn btn-warning\" title=\"Modifier le patient\" > <i class=\"fa fa-edit\"></i></a>
                    {% endif %}
                    {% else %}
                        <span class=\"label label-warning\">Réactivation demandée</span>
                    {% endif %}
                </td>
            </tr>
    {% endfor %}
            </tbody>
        </table>
        </div>
        {% endif %}
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    {% include \"hostooSanteBundle:plugins:datatable.style.html.twig\" %}
{% endblock %}
{% block javascripts %}
{{ parent() }}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
    {% include \"hostooSanteBundle:plugins:datatable.scripts.html.twig\" %}
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('#patients').dataTable({
                deferRender:    true,
                scrollY:        800,
                scrollCollapse: true,
                scroller:       true,
                dom: \"Bfrtip\",
                buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                    extend: \"excel\",
                    className: \"btn-sm\"
                }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],
                responsive: !0
                ,language: {
                    processing:     \"Traitement en cours...\",
                    search:         \"Rechercher&nbsp;:\",
                    lengthMenu:    \"Afficher _MENU_ &eacute;l&eacute;ments\",
                    info:           \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    infoEmpty:      \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                    infoFiltered:   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                    infoPostFix:    \"\",
                    loadingRecords: \"Chargement en cours...\",
                    zeroRecords:    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    emptyTable:     \"Aucune donnée disponible dans le tableau\",
                    paginate: {
                        first:      \"Premier\",
                        previous:   \"Pr&eacute;c&eacute;dent\",
                        next:       \"Suivant\",
                        last:       \"Dernier\"
                    },
                    aria: {
                        sortAscending:  \": activer pour trier la colonne par ordre croissant\",
                        sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                    }}
            });
        });
    </script>
    <script type=\"application/javascript\">
        \$inp=\$('#motcle');
        \$inp.keyup(function(event){
            \$('#mesitems').show().html('');
            //\$(\".loading\").show();
            var motcle = \$(this).val();
            var DONNEE = 'motcle=' + motcle;
            \$.ajax({
                type: \"POST\",
                dataType:'json',
                url: Routing.generate('recherche_patient'),
                data: DONNEE,
                cache: false,
                minLength: 2,
                beforeSend: function () {
                    \$('#mesitems').find('li').remove();
                },
                success: function(data) {


                    \$.each(data.items, function(index,value) {
                        //\$(\"#ott\").text(value.libelle+'<br/>'+value.Prix);
                        var nophoto=\"../../jquery-ui/images/no_image.jpg\";
                        var lien=Routing.generate('hostoo_sante_voirpatient',{id:value.id});
                        var lien2=Routing.generate('hostoo_ajouter_parent',{id:value.id});
                        var lien3=Routing.generate('hostoo_ajouter_parent',{id:value.id});
                        \$('#mesitems').prepend('<li class=\"list-group-item\"><span class=\"fa fa-user\"></span>'+value.nom+' '+value.postnom+' '+value.prenom+'<div class=\"btn-group pull-right\"><a href=\"'+lien2+'\" class=\"btn btn-success\">Dependants</a><a class=\"btn btn-info\" href=\"'+lien+'\">Afficher</a>{#<a class=\"btn btn-warning\" href=\"'+lien3+'\">Episode</a><a class=\"btn btn-warning\" href=\"#\">Control</a>#}</div> </li>');
                        //\$('#resultats').html('<div>'+value.libelle+'</div>');
                        //alert(value.libelle);
                    });

                    // \$(\".loading\").hide();
                }
            });
            return false;
        });

        // Date Picker
        jQuery('#datepicker').datepicker();
        jQuery('#patient_datenaissance').datepicker({
            autoclose: true,
            dateFormat: \"dd/mm/yy\",
            dayNames: [ \"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\" ],
            dayNamesMin: [ \"Di\", \"Lu\", \"Ma\", \"Me\", \"Je\", \"Ve\", \"Sa\" ],
            monthNames: [\"Janvier\",\"Fevrier\",\"Mars\",\"Avril\",\"Mai\",\"Juin\",\"Juillet\",\"Aout\",\"Septembre\",\"Octobre\",\"Novembre\",\"Decembre\"],
            todayHighlight: true
        });

    </script>
{% endblock %}", "hostooSanteBundle:Patient:listepatients.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Patient/listepatients.html.twig");
    }
}
