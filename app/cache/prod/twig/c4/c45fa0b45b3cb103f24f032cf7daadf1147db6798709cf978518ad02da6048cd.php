<?php

/* hostooSanteBundle:Patient:medecinrdvd.html.twig */
class __TwigTemplate_7db7c9e6f600d9ada704b56384fc3eb9c5da69e3f34941f2448802654b2bd34d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Patient:medecinrdvd.html.twig", 1);
        $this->blocks = [
            'options' => [$this, 'block_options'],
            'menu' => [$this, 'block_menu'],
            'titre' => [$this, 'block_titre'],
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Patient:medecinrdvd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        // line 5
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:menus:menunrs.html.twig", "hostooSanteBundle:Patient:medecinrdvd.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_titre($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Rendez-vous ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Rendez-vous ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"row\">
        <div class=\"card-box\">
            <ul class=\"list-group list-unstyled\" id=\"mesitems\" style=\"display: none\">

            </ul>
        </div>
    </div>
    <div class=\"col-md-3\" style=\"border-right: double 1px skyblue\">
        <h3>Formulaire</h3>
<form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_creerdvd");
        echo "\" method=\"post\" class=\"vertical col_12\">
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterdv", []), 'label', ["label" => "Date du Jour"]);
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterdv", []), 'errors');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterdv", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebut", []), 'label', ["label" => "Heure de debut"]);
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebut", []), 'errors');
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebut", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFin", []), 'label', ["label" => "Heure de la fin"]);
        echo "
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFin", []), 'errors');
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFin", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbrepatients", []), 'label', ["label" => "Patient à recevoir (optionnel)"]);
        echo "
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbrepatients", []), 'errors');
        echo "
    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbrepatients", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "patientsrecus", []), 'label', ["label" => "Patients Reçus"]);
        echo "
    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "patientsrecus", []), 'errors');
        echo "
    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "patientsrecus", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
<div class=\"hidden\">
    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disponibilite", []), 'label', ["label" => "Disponibilité"]);
        echo "
    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disponibilite", []), 'errors');
        echo "
    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disponibilite", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
    <label for=\"medecin\" >Medecin</label>
    <select name=\"medecin\" class=\"form-control\" id=\"medecin\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meds"] ?? $this->getContext($context, "meds")));
        foreach ($context['_seq'] as $context["_key"] => $context["med"]) {
            // line 48
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["med"], "roles", []), 0, [], "array") == "ROLE_MEDECIN")) {
                // line 49
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["med"], "id", []), "html", null, true);
                echo "\">
            ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["med"], "nom", []), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["med"], "postnom", []), "html", null, true);
                echo "
        </option>
                ";
            }
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['med'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </select>
    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
</form>
    </div>
    <div class=\"col-md-9\">
        <h3>Médécin disponible au ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "</h3>
    <table class=\"table\">
        <tr>
            <th>Date du rendez-vous</th>
            <th>Medecin</th>
            <th>Service</th>
            <th>En Attente</th>
            <th>Réçus</th>
            <th>Disponibilité</th>
            <th></th>
        </tr>
        ";
        // line 70
        if ((($context["liste"] ?? $this->getContext($context, "liste")) == null)) {
            // line 71
            echo "
            <tr>
                <td colspan=\"6\" class=\"bg-danger text-center\">Pas de RDV disponible</td>
            </tr>
            ";
        } else {
            // line 76
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
            foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
                // line 77
                echo "            ";
                if ($this->getAttribute($context["rdv"], "medecin", [])) {
                    // line 78
                    echo "                <tr>
            <td>";
                    // line 79
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "daterdv", []), "d-m-Y"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rdv"], "medecin", []), "nom", []), "html", null, true);
                    echo "</td>
            <td></td>
            ";
                    // line 82
                    if (($this->getAttribute($this->getAttribute($context["rdv"], "rDVspatients", []), "count", []) > 0)) {
                        // line 83
                        echo "
            <td>";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rdv"], "rDVspatients", []), "count", []), "html", null, true);
                        echo "</td>

                ";
                    } else {
                        // line 87
                        echo "            <td>0</td>
                    ";
                    }
                    // line 89
                    echo "            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "patientsrecus", []), "html", null, true);
                    echo "</td>
            <td>";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "disponibilite", []), "html", null, true);
                    echo "</td>
            <td>
<div class=\"btn-group\">
    <button class=\"btn-sm btn-success\" data-toggle=\"modal\" data-target=\"#attribuer";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", []), "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> </button>
    <button class=\"btn-sm btn-danger\"><i class=\"fa fa-minus\"></i> </button>
</div>
            </td>
        </tr>
            <div id=\"attribuer";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", []), "html", null, true);
                    echo "\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                <div class=\"modal-dialog modal-full\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                            <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Rendez-vous</h4>
                        </div>
                        <div class=\"modal-body\">
                            <h5 class=\"m-t-30\"><b>Rendez-vous du docteur ";
                    // line 106
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["rdv"], "medecin", []), "nom", [])), "html", null, true);
                    echo "</b></h5>
                            <p class=\"text-muted m-b-15 font-13\">
                                Affecter un ou plusieurs patients au medecin
                            </p>
                            <form class=\"form-inline\"  method=\"post\" action=\"";
                    // line 110
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attrib_rdvd");
                    echo "\">
                                <input type=\"hidden\" name=\"rdv\" value=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", []), "html", null, true);
                    echo "\">
                                <select name=\"patients[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", []), "html", null, true);
                    echo "\" >
                                    ";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["pats"] ?? $this->getContext($context, "pats")));
                    foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
                        // line 114
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["acte"], "factures", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                            // line 115
                            echo "                                            ";
                            if (($this->getAttribute($context["fac"], "validation", []) == true)) {
                                // line 116
                                echo "                                        ";
                                if (($this->getAttribute($context["acte"], "rdvpat", []) == null)) {
                                    // line 117
                                    echo "                                        <option value=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "patient", []), "nom", []), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "patient", []), "postnom", []), "html", null, true);
                                    echo "</option>
                                        ";
                                }
                                // line 119
                                echo "                                            ";
                            }
                            // line 120
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fac'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 121
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "                                </select>
                                <br>
                                <br>
                                <input type=\"submit\" value=\"Soumettre les patients\" class=\"btn btn-custom\">
                                <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\">
                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <div id=\"oter\">

            </div>
            ";
                }
                // line 138
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                ";
        }
        // line 140
        echo "    </table></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(function () {
            \$('#listepatients').dataTable();
        });
    </script>
    <script>
        \$(function () {

            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 158
            echo "            //advance multiselect start
            \$('#my_multi_select";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", []), "html", null, true);
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
            // Select2
            \$(\".select2\").select2();

            \$(\".select2-limiting\").select2({
                placeholder: \"Choisir les actes\"
            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "
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
                        \$('#mesitems').prepend('<li class=\"list-group-item\"><img src='+nophoto+' class=\"box-carre\" />'+value.nom+' '+value.postnom+' '+value.prenom+'<div class=\"btn-group pull-right\"><a href=\"'+lien2+'\" class=\"btn btn-success\">Dependants</a><a class=\"btn btn-info\" href=\"'+lien+'\">Afficher</a>";
        // line 230
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

    // line 254
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 255
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Patient:medecinrdvd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 263,  598 => 262,  594 => 261,  590 => 260,  586 => 259,  582 => 258,  578 => 257,  574 => 256,  569 => 255,  563 => 254,  533 => 230,  502 => 201,  454 => 159,  451 => 158,  447 => 157,  435 => 148,  431 => 147,  427 => 146,  423 => 145,  419 => 144,  414 => 143,  408 => 142,  400 => 140,  397 => 139,  391 => 138,  373 => 122,  367 => 121,  361 => 120,  358 => 119,  348 => 117,  345 => 116,  342 => 115,  337 => 114,  333 => 113,  329 => 112,  325 => 111,  321 => 110,  314 => 106,  303 => 98,  295 => 93,  289 => 90,  284 => 89,  280 => 87,  274 => 84,  271 => 83,  269 => 82,  264 => 80,  260 => 79,  257 => 78,  254 => 77,  249 => 76,  242 => 71,  240 => 70,  226 => 59,  219 => 55,  216 => 54,  210 => 53,  202 => 50,  197 => 49,  194 => 48,  190 => 47,  183 => 43,  179 => 42,  175 => 41,  170 => 39,  166 => 38,  162 => 37,  157 => 35,  153 => 34,  149 => 33,  144 => 31,  140 => 30,  136 => 29,  131 => 27,  127 => 26,  123 => 25,  118 => 23,  114 => 22,  110 => 21,  106 => 20,  95 => 11,  89 => 10,  77 => 9,  65 => 8,  57 => 5,  51 => 4,  40 => 3,  11 => 1,);
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

{% block options %}{% endblock %}
{% block menu %}
    {% include 'hostooSanteBundle:menus:menunrs.html.twig' %}
{% endblock %}

{% block titre %}Rendez-vous {% endblock %}
{% block titrepage %}Rendez-vous {% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"card-box\">
            <ul class=\"list-group list-unstyled\" id=\"mesitems\" style=\"display: none\">

            </ul>
        </div>
    </div>
    <div class=\"col-md-3\" style=\"border-right: double 1px skyblue\">
        <h3>Formulaire</h3>
<form action=\"{{ path('hostoo_sante_creerdvd') }}\" method=\"post\" class=\"vertical col_12\">
    {{ form_label(form.daterdv,'Date du Jour') }}
    {{ form_errors(form.daterdv) }}
    {{ form_widget(form.daterdv,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.heureDebut,'Heure de debut') }}
    {{ form_errors(form.heureDebut) }}
    {{ form_widget(form.heureDebut,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.heureFin,'Heure de la fin') }}
    {{ form_errors(form.heureFin) }}
    {{ form_widget(form.heureFin,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.nbrepatients,'Patient à recevoir (optionnel)') }}
    {{ form_errors(form.nbrepatients) }}
    {{ form_widget(form.nbrepatients,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.patientsrecus,'Patients Reçus') }}
    {{ form_errors(form.patientsrecus) }}
    {{ form_widget(form.patientsrecus,{'attr':{'class':'form-control'}}) }}
<div class=\"hidden\">
    {{ form_label(form.disponibilite,'Disponibilité') }}
    {{ form_errors(form.disponibilite) }}
    {{ form_widget(form.disponibilite,{'attr':{'class':'form-control'}}) }}
</div>
    <label for=\"medecin\" >Medecin</label>
    <select name=\"medecin\" class=\"form-control\" id=\"medecin\">
        {% for med in meds %}
            {% if med.roles[0]==\"ROLE_MEDECIN\" %}
        <option value=\"{{ med.id }}\">
            {{ med.nom }}  {{ med.postnom }}
        </option>
                {% endif %}
            {% endfor %}
    </select>
    {{ form_rest(form) }}
</form>
    </div>
    <div class=\"col-md-9\">
        <h3>Médécin disponible au {{ \"now\"|date('d-m-Y') }}</h3>
    <table class=\"table\">
        <tr>
            <th>Date du rendez-vous</th>
            <th>Medecin</th>
            <th>Service</th>
            <th>En Attente</th>
            <th>Réçus</th>
            <th>Disponibilité</th>
            <th></th>
        </tr>
        {% if liste == null %}

            <tr>
                <td colspan=\"6\" class=\"bg-danger text-center\">Pas de RDV disponible</td>
            </tr>
            {% else %}
        {% for rdv in liste %}
            {% if rdv.medecin %}
                <tr>
            <td>{{ rdv.daterdv|date('d-m-Y') }}</td>
            <td>{{ rdv.medecin.nom }}</td>
            <td></td>
            {% if  rdv.rDVspatients.count > 0 %}

            <td>{{ rdv.rDVspatients.count }}</td>

                {% else %}
            <td>0</td>
                    {% endif %}
            <td>{{ rdv.patientsrecus }}</td>
            <td>{{ rdv.disponibilite }}</td>
            <td>
<div class=\"btn-group\">
    <button class=\"btn-sm btn-success\" data-toggle=\"modal\" data-target=\"#attribuer{{ rdv.id }}\"><i class=\"fa fa-plus\"></i> </button>
    <button class=\"btn-sm btn-danger\"><i class=\"fa fa-minus\"></i> </button>
</div>
            </td>
        </tr>
            <div id=\"attribuer{{ rdv.id }}\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                <div class=\"modal-dialog modal-full\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                            <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Rendez-vous</h4>
                        </div>
                        <div class=\"modal-body\">
                            <h5 class=\"m-t-30\"><b>Rendez-vous du docteur {{ rdv.medecin.nom|upper }}</b></h5>
                            <p class=\"text-muted m-b-15 font-13\">
                                Affecter un ou plusieurs patients au medecin
                            </p>
                            <form class=\"form-inline\"  method=\"post\" action=\"{{ path('attrib_rdvd') }}\">
                                <input type=\"hidden\" name=\"rdv\" value=\"{{ rdv.id }}\">
                                <select name=\"patients[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select{{ rdv.id }}\" >
                                    {% for acte in pats %}
                                        {% for fac in acte.factures %}
                                            {% if fac.validation == true %}
                                        {% if acte.rdvpat == null %}
                                        <option value=\"{{ acte.id }}\">{{ acte.patient.nom }} {{ acte.patient.postnom }}</option>
                                        {% endif %}
                                            {% endif %}
                                            {% endfor %}
                                    {% endfor %}
                                </select>
                                <br>
                                <br>
                                <input type=\"submit\" value=\"Soumettre les patients\" class=\"btn btn-custom\">
                                <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\">
                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <div id=\"oter\">

            </div>
            {% endif %}
        {% endfor %}
                {% endif %}
    </table></div>
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
            \$('#listepatients').dataTable();
        });
    </script>
    <script>
        \$(function () {

            {% for rdv in liste %}
            //advance multiselect start
            \$('#my_multi_select{{ rdv.id }}').multiSelect({
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
            // Select2
            \$(\".select2\").select2();

            \$(\".select2-limiting\").select2({
                placeholder: \"Choisir les actes\"
            });
            {% endfor %}

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
                        \$('#mesitems').prepend('<li class=\"list-group-item\"><img src='+nophoto+' class=\"box-carre\" />'+value.nom+' '+value.postnom+' '+value.prenom+'<div class=\"btn-group pull-right\"><a href=\"'+lien2+'\" class=\"btn btn-success\">Dependants</a><a class=\"btn btn-info\" href=\"'+lien+'\">Afficher</a>{#<a class=\"btn btn-warning\" href=\"'+lien3+'\">Episode</a><a class=\"btn btn-warning\" href=\"#\">Control</a>#}</div> </li>');
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
{% endblock %}", "hostooSanteBundle:Patient:medecinrdvd.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Patient/medecinrdvd.html.twig");
    }
}
