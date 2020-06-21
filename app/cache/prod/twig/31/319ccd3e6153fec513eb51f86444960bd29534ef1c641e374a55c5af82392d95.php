<?php

/* hostooSanteBundle:TB:reception_tb.html.twig */
class __TwigTemplate_388cb2311c8f5998fd87154722916930f941a4aa52125965559d02533f6d7d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:TB:reception_tb.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
            'menu' => [$this, 'block_menu'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:TB:reception_tb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réception";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Réception";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 6
        echo "    <button class=\"btn btn-success waves-effect\" data-toggle=\"modal\" data-target=\"#enregister-patient\"><i class=\"fa fa-plus-circle fa-user\"></i><i class=\"fa fa-user\"></i></button>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 9
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooSanteBundle:TB:reception_tb.html.twig", 9)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-body\">

            <h5 class=\"text-center\">Recherchez le patient par nom / postnom  / numéro de dossier</h5>
            <form class=\"\" action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_patient");
        echo "\" method=\"post\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control input-lg col-md-12\" id=\"motcle\" name=\"motcle\" autocomplete=\"off\" />
                    <div class=\"input-group-addon\">
                        <i class=\"fa fa-search\"></i>
                    </div>
                </div>
            </form>
            <ul id=\"mesitems\" class=\"list-unstyled list-group\">

            </ul>
        </div>

    </div>
    ";
        // line 31
        echo "    ";
        // line 33
        echo "
    ";
        // line 36
        echo "    ";
        // line 37
        echo "<div class=\"col-lg-12\">
    <div class=\"col-lg-3 col-md-6\">
                                <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
        echo "\">
                                <div class=\"card-box widget-user\">
                                    <div class=\"text-center\">
                                        <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 42
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["patients"] ?? $this->getContext($context, "patients"))) - twig_length_filter($this->env, ($context["dependants"] ?? $this->getContext($context, "dependants")))), "html", null, true);
        echo "</h2>
                                        <h5>Tous les patients</h5>
                                    </div>
                                </div>
                                </a>
                            </div>

    ";
        // line 50
        echo "                                ";
        // line 51
        echo "                                    ";
        // line 52
        echo "                                        ";
        // line 53
        echo "                                        ";
        // line 54
        echo "                                    ";
        // line 55
        echo "                                ";
        // line 56
        echo "                            ";
        // line 57
        echo "    ";
        // line 58
        echo "                                ";
        // line 59
        echo "                                    ";
        // line 60
        echo "                                        ";
        // line 61
        echo "                                        ";
        // line 62
        echo "                                    ";
        // line 63
        echo "                                ";
        // line 64
        echo "                            ";
        // line 65
        echo "
    ";
        // line 67
        echo "                                ";
        // line 68
        echo "                                    ";
        // line 69
        echo "                                        ";
        // line 70
        echo "                                        ";
        // line 71
        echo "                                    ";
        // line 72
        echo "                                ";
        // line 73
        echo "                            ";
        // line 74
        echo "
    <div class=\"col-lg-3 col-md-6\">
                                <div class=\"card-box widget-user\">
                                    <div class=\"text-center\">
                                        <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 78
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["freqsj"] ?? $this->getContext($context, "freqsj"))), "html", null, true);
        echo "</h2>
                                        <h5>Episodes du jour</h5>
                                    </div>
                                </div>
                            </div>
    <div class=\"col-lg-3 col-md-6\">
        <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rdvmed_show_today");
        echo "\">
        <div class=\"card-box widget-user\">
            <div class=\"text-center\">
                <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 87
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["rdvs"] ?? $this->getContext($context, "rdvs"))), "html", null, true);
        echo "</h2>
               <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rdvmed_show_today");
        echo "\"> <h5>RDV du Jour</h5></a>
            </div>
        </div>
        </a>
    </div>
</div>
    <div class=\"row\">
        ";
        // line 96
        echo "        ";
        // line 97
        echo "
        ";
        // line 99
        echo "            ";
        // line 100
        echo "            ";
        // line 101
        echo "                ";
        // line 102
        echo "                    ";
        // line 103
        echo "                ";
        // line 104
        echo "            ";
        // line 105
        echo "        ";
        // line 106
        echo "        ";
        // line 107
        echo "        ";
        // line 108
        echo "        ";
        // line 109
        echo "            ";
        // line 110
        echo "
                ";
        // line 112
        echo "                    ";
        // line 113
        echo "                    ";
        // line 114
        echo "                    ";
        // line 115
        echo "                        ";
        // line 116
        echo "                        ";
        // line 117
        echo "                    ";
        // line 118
        echo "                ";
        // line 119
        echo "            ";
        // line 120
        echo "        ";
        // line 121
        echo "        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box\">
                <h4>Le ";
        // line 123
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-M-Y"), "html", null, true);
        echo "</h4>
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom du patient</th>
                        <th>Nombres Actes</th>
                        <th>Medécin vu</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 135
            echo "                        ";
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y"))) {
                // line 136
                echo "                        <tr>
                            <td>";
                // line 137
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "H:i:s"), "html", null, true);
                echo "</td>
                            <td>";
                // line 138
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", []))), "html", null, true);
                echo "</td>
                            <td>";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "nbActes", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 140
                if (($this->getAttribute($context["episode"], "utilisateur", []) && twig_in_filter("ROLE_MEDECIN", $this->getAttribute($this->getAttribute($context["episode"], "utilisateur", []), "roles", [])))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "utilisateur", []), "html", null, true);
                    echo " ";
                }
                echo "</td>
                        </tr>
                        ";
            }
            // line 143
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box\">
                <h4>Fréquentation : ";
        // line 150
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "M-Y"), "html", null, true);
        echo "</h4>
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom du patient</th>
                        <th>Nombres Actes</th>
                        <th>Medécin vu</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 162
            echo "                        ";
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "m-Y") == twig_date_format_filter($this->env, "now", "m-Y"))) {
                // line 163
                echo "                            <tr>
                                <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "d-m-Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 165
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", []))), "html", null, true);
                echo "</td>
                                <td>";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "nbActes", []), "html", null, true);
                echo "</td>
                                <td>";
                // line 167
                if (($this->getAttribute($context["episode"], "utilisateur", []) && twig_in_filter("ROLE_MEDECIN", $this->getAttribute($this->getAttribute($context["episode"], "utilisateur", []), "roles", [])))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "utilisateur", []), "html", null, true);
                    echo " ";
                }
                echo "</td>
                            </tr>
                        ";
            }
            // line 170
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                    </tbody>
                </table>
            </div>
    </div>
    </div>
<div id=\"enregister-patient\" class=\"modal fade\" tabindex=\"1\" role=\"dialog\" aria-labelledby=\"full-width-modalLabel\" aria-hidden=\"true\" style=\"display: none;\">
    <div class=\"modal-dialog modal-full\">
        <div class=\"card-box\">
            ";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Patient:enregistrerPatientRC"));
        echo "
        </div>
    </div>
</div>
    <div id=\"full-width-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"full-width-modalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-full\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Liste de patients</h4>
                </div>
                <div class=\"modal-body\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"button\" class=\"btn btn-custom waves-effect waves-light\"></button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 200
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 201
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
      <!-- Plugins css-->
        ";
        // line 203
        $this->loadTemplate("hostooSanteBundle:plugins:timepicker.style.html.twig", "hostooSanteBundle:TB:reception_tb.html.twig", 203)->display($context);
        // line 204
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooSanteBundle:TB:reception_tb.html.twig", 204)->display($context);
        // line 205
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:plugins:modals.style.html.twig", "hostooSanteBundle:TB:reception_tb.html.twig", 205)->display($context);
        // line 206
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 207
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 208
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
   ";
        // line 212
        $this->loadTemplate("hostooSanteBundle:plugins:timepicker.js.html.twig", "hostooSanteBundle:TB:reception_tb.html.twig", 212)->display($context);
        // line 213
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooSanteBundle:TB:reception_tb.html.twig", 213)->display($context);
        // line 214
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.table').DataTable();
        });
    </script>
    <script type=\"application/javascript\">
        // Date Picker
        \$(function () {
            //\$('#patient_datenaissance').datepicker();
            \$('#patient_datenaissance').datepicker({
                  autoclose: true,
                  format: \"dd/mm/yyyy\",
                  dayNames: [ \"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\" ],
                  monthNames: [\"Janvier\",\"Fevrier\",\"Mars\",\"Avril\",\"Mai\",\"Juin\",\"Juillet\",\"Aout\",\"Septembre\",\"Octobre\",\"Novembre\",\"Decembre\"],
                  todayHighlight: true

              });
        });
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
        minWidth:3,
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
                \$('#mesitems').prepend('<li class=\"list-group-item\"><span class=\"fa fa-user\"></span>'+value.nom+' '+value.postnom+' '+value.prenom+'<div class=\"btn-group pull-right\"><a class=\"btn btn-info\" href=\"'+lien+'\">Afficher</a>";
        // line 261
        echo "</div> </li>');
                //\$('#resultats').html('<div>'+value.libelle+'</div>');
                //alert(value.libelle);
            });

           // \$(\".loading\").hide();
        }
    });
    return false;
});
</script>

    ";
        // line 273
        $this->loadTemplate("hostooSanteBundle:plugins:modals.html.twig", "hostooSanteBundle:TB:reception_tb.html.twig", 273)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:TB:reception_tb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 273,  539 => 261,  490 => 215,  485 => 214,  482 => 213,  480 => 212,  476 => 211,  472 => 210,  468 => 209,  463 => 208,  457 => 207,  450 => 206,  447 => 205,  444 => 204,  442 => 203,  436 => 201,  430 => 200,  402 => 179,  392 => 171,  386 => 170,  377 => 167,  373 => 166,  369 => 165,  365 => 164,  362 => 163,  359 => 162,  355 => 161,  341 => 150,  333 => 144,  327 => 143,  318 => 140,  314 => 139,  310 => 138,  306 => 137,  303 => 136,  300 => 135,  296 => 134,  282 => 123,  278 => 121,  276 => 120,  274 => 119,  272 => 118,  270 => 117,  268 => 116,  266 => 115,  264 => 114,  262 => 113,  260 => 112,  257 => 110,  255 => 109,  253 => 108,  251 => 107,  249 => 106,  247 => 105,  245 => 104,  243 => 103,  241 => 102,  239 => 101,  237 => 100,  235 => 99,  232 => 97,  230 => 96,  220 => 88,  216 => 87,  210 => 84,  201 => 78,  195 => 74,  193 => 73,  191 => 72,  189 => 71,  187 => 70,  185 => 69,  183 => 68,  181 => 67,  178 => 65,  176 => 64,  174 => 63,  172 => 62,  170 => 61,  168 => 60,  166 => 59,  164 => 58,  162 => 57,  160 => 56,  158 => 55,  156 => 54,  154 => 53,  152 => 52,  150 => 51,  148 => 50,  138 => 42,  132 => 39,  128 => 37,  126 => 36,  123 => 33,  121 => 31,  104 => 16,  98 => 12,  92 => 11,  84 => 9,  78 => 8,  70 => 6,  64 => 5,  52 => 4,  40 => 3,  11 => 1,);
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

{% block title %}Réception{% endblock %}
{% block titrepage %}Réception{% endblock %}
{% block options %}
    <button class=\"btn btn-success waves-effect\" data-toggle=\"modal\" data-target=\"#enregister-patient\"><i class=\"fa fa-plus-circle fa-user\"></i><i class=\"fa fa-user\"></i></button>
{% endblock %}
{% block menu %}
    {% include \"hostooSanteBundle:menus:menurc.html.twig\" %}
{% endblock %}
{% block body %}
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">

            <h5 class=\"text-center\">Recherchez le patient par nom / postnom  / numéro de dossier</h5>
            <form class=\"\" action=\"{{ path('recherche_patient') }}\" method=\"post\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control input-lg col-md-12\" id=\"motcle\" name=\"motcle\" autocomplete=\"off\" />
                    <div class=\"input-group-addon\">
                        <i class=\"fa fa-search\"></i>
                    </div>
                </div>
            </form>
            <ul id=\"mesitems\" class=\"list-unstyled list-group\">

            </ul>
        </div>

    </div>
    {#<div class=\"row\">#}
    {#<div class=\"card-box\">#}
{#<ul class=\"list-group list-unstyled\" id=\"mesitems\" style=\"display: none\">#}

    {#</ul>#}
{#</div>#}
    {#</div>#}
<div class=\"col-lg-12\">
    <div class=\"col-lg-3 col-md-6\">
                                <a href=\"{{ path('hostoo_sante_listepatients') }}\">
                                <div class=\"card-box widget-user\">
                                    <div class=\"text-center\">
                                        <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ patients|length-dependants|length }}</h2>
                                        <h5>Tous les patients</h5>
                                    </div>
                                </div>
                                </a>
                            </div>

    {#<div class=\"col-lg-3 col-md-6\">#}
                                {#<div class=\"card-box widget-user\">#}
                                    {#<div class=\"text-center\">#}
                                        {#<h2 class=\"text-custom\" data-plugin=\"counterup\">{{ prive }}</h2>#}
                                        {#<h5>Conventionnés</h5>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</div>#}
    {#<div class=\"col-lg-3 col-md-6\">#}
                                {#<div class=\"card-box widget-user\">#}
                                    {#<div class=\"text-center\">#}
                                        {#<h2 class=\"text-custom\" data-plugin=\"counterup\">{{ conv }}</h2>#}
                                        {#<h5>Privés</h5>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</div>#}

    {#<div class=\"col-lg-3 col-md-6\">#}
                                {#<div class=\"card-box widget-user\">#}
                                    {#<div class=\"text-center\">#}
                                        {#<h2 class=\"text-custom\" data-plugin=\"counterup\">{{ dependants|length }}</h2>#}
                                        {#<h5>Dépendants</h5>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</div>#}

    <div class=\"col-lg-3 col-md-6\">
                                <div class=\"card-box widget-user\">
                                    <div class=\"text-center\">
                                        <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ freqsj|length }}</h2>
                                        <h5>Episodes du jour</h5>
                                    </div>
                                </div>
                            </div>
    <div class=\"col-lg-3 col-md-6\">
        <a href=\"{{ path('rdvmed_show_today') }}\">
        <div class=\"card-box widget-user\">
            <div class=\"text-center\">
                <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ rdvs|length }}</h2>
               <a href=\"{{ path('rdvmed_show_today') }}\"> <h5>RDV du Jour</h5></a>
            </div>
        </div>
        </a>
    </div>
</div>
    <div class=\"row\">
        {#<div class=\"col-lg-4 col-md-12\">#}
        {#<div class=\"card-box\">#}

        {#<table class=\"table table-striped\">#}
            {#<caption><h4 class=\"text-center\">Patients par Société</h4></caption>#}
            {#{% for soc in socs %}#}
                {#<tr>#}
                    {#<th class=\"\"><a href=\"{{ path('hostoo_sante_listepatients') }}?societe={{ soc.id }}\">{{ soc.nom }}</a> </th><td class=\"text-right text-danger\"><i class=\"badge badge-success\">{{ soc.patients.count }}</i></td>#}
                {#</tr>#}
            {#{% endfor %}#}
        {#</table>#}
        {#</div>#}
        {#</div>#}
        {#<div class=\"col-lg-4 col-md-12\">#}
            {#<div class=\"card-box\">#}

                {#<table class=\"table table-striped\">#}
                    {#<caption><h4 class=\"text-center\">Patients par formules</h4></caption>#}
                    {#{% for soc in patfor %}#}
                    {#<tr>#}
                        {#<th class=\"\"><a href=\"{{ path('hostoo_sante_listepatients') }}?formule={{ soc.id }}\">{{ soc.nom }}</a> </th><td class=\"text-right text-danger\"><i class=\"badge badge-info\"> {{ soc.patients|length }}</i><i class=\"badge badge-danger\">{{ soc.fortar|length }}</i></td>#}
                        {#</tr>#}
                    {#{% endfor %}#}
                {#</table>#}
            {#</div>#}
        {#</div>#}
        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box\">
                <h4>Le {{ \"now\"|date('d-M-Y') }}</h4>
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom du patient</th>
                        <th>Nombres Actes</th>
                        <th>Medécin vu</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for episode in episodes %}
                        {% if episode.dateepisode|date('d-m-Y') == \"now\"|date('d-m-Y') %}
                        <tr>
                            <td>{{ episode.dateepisode|date('H:i:s') }}</td>
                            <td>{{ (episode.patient.nom~\" \"~episode.patient.postnom)|upper }}</td>
                            <td>{{ episode.nbActes }}</td>
                            <td>{% if episode.utilisateur and 'ROLE_MEDECIN' in episode.utilisateur.roles %}{{ episode.utilisateur }} {% endif %}</td>
                        </tr>
                        {% endif %}
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box\">
                <h4>Fréquentation : {{ \"now\"|date('M-Y') }}</h4>
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom du patient</th>
                        <th>Nombres Actes</th>
                        <th>Medécin vu</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for episode in episodes %}
                        {% if episode.dateepisode|date('m-Y') == \"now\"|date('m-Y') %}
                            <tr>
                                <td>{{ episode.dateepisode|date('d-m-Y') }}</td>
                                <td>{{ (episode.patient.nom~\" \"~episode.patient.postnom)|upper }}</td>
                                <td>{{ episode.nbActes }}</td>
                                <td>{% if episode.utilisateur and 'ROLE_MEDECIN' in episode.utilisateur.roles %}{{ episode.utilisateur }} {% endif %}</td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                    </tbody>
                </table>
            </div>
    </div>
    </div>
<div id=\"enregister-patient\" class=\"modal fade\" tabindex=\"1\" role=\"dialog\" aria-labelledby=\"full-width-modalLabel\" aria-hidden=\"true\" style=\"display: none;\">
    <div class=\"modal-dialog modal-full\">
        <div class=\"card-box\">
            {{ render(controller('hostooSanteBundle:Patient:enregistrerPatientRC')) }}
        </div>
    </div>
</div>
    <div id=\"full-width-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"full-width-modalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-full\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Liste de patients</h4>
                </div>
                <div class=\"modal-body\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"button\" class=\"btn btn-custom waves-effect waves-light\"></button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
      <!-- Plugins css-->
        {% include 'hostooSanteBundle:plugins:timepicker.style.html.twig' %}
    {% include \"hostooSanteBundle:plugins:datatable.style.html.twig\" %}
    {% include \"hostooSanteBundle:plugins:modals.style.html.twig\" %}
    {% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}\"></script>
   {% include 'hostooSanteBundle:plugins:timepicker.js.html.twig' %}
    {% include \"hostooSanteBundle:plugins:datatable.scripts.html.twig\" %}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.table').DataTable();
        });
    </script>
    <script type=\"application/javascript\">
        // Date Picker
        \$(function () {
            //\$('#patient_datenaissance').datepicker();
            \$('#patient_datenaissance').datepicker({
                  autoclose: true,
                  format: \"dd/mm/yyyy\",
                  dayNames: [ \"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\" ],
                  monthNames: [\"Janvier\",\"Fevrier\",\"Mars\",\"Avril\",\"Mai\",\"Juin\",\"Juillet\",\"Aout\",\"Septembre\",\"Octobre\",\"Novembre\",\"Decembre\"],
                  todayHighlight: true

              });
        });
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
        minWidth:3,
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
                \$('#mesitems').prepend('<li class=\"list-group-item\"><span class=\"fa fa-user\"></span>'+value.nom+' '+value.postnom+' '+value.prenom+'<div class=\"btn-group pull-right\"><a class=\"btn btn-info\" href=\"'+lien+'\">Afficher</a>{#<a class=\"btn btn-warning\" href=\"'+lien3+'\">Episode</a><a class=\"btn btn-warning\" href=\"#\">Control</a>#}</div> </li>');
                //\$('#resultats').html('<div>'+value.libelle+'</div>');
                //alert(value.libelle);
            });

           // \$(\".loading\").hide();
        }
    });
    return false;
});
</script>

    {% include \"hostooSanteBundle:plugins:modals.html.twig\" %}
{% endblock %}", "hostooSanteBundle:TB:reception_tb.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/TB/reception_tb.html.twig");
    }
}
