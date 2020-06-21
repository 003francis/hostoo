<?php

/* hostooSanteBundle:Caisse:facture_edition.html.twig */
class __TwigTemplate_ffa76b487a1c32e62eba1362db0588a77eb6e884c4d65c1d0e61e6dadac0cf47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Caisse:facture_edition.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Caisse:facture_edition.html.twig"));

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
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION"))) {
            // line 4
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "hostooSanteBundle:Caisse:facture_edition.html.twig", 4)->display($context);
            // line 5
            echo "
";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION", "ROLE_CAISSIER", "ROLE_INFIRMIER")) {
            // line 7
            echo "    ";
            $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooSanteBundle:Caisse:facture_edition.html.twig", 7)->display($context);
            // line 8
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "facturer Patient";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 14
        echo "    ";
        // line 15
        echo "    <button class=\"btn btn-custom waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#myModal1\">Laboratoire</button>
    <button class=\"btn btn-custom waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#myModal2\">Imagérie</button>
    <button class=\"btn btn-custom waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#myModal3\">Autres Soins</button>
         ";
        // line 19
        echo "       ";
        // line 20
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    ";
        $context["newArray"] = [];
        // line 25
        echo "    ";
        $context["pnewArray"] = [];
        // line 26
        echo "    <div class=\"col-lg-8\">
<div class=\"card-box\">


                <h3 class=\"text-center\">FACTURE N° ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "html", null, true);
        echo "</h3>
                <div class=\"alert alert-danger\">
                    <p>Avant toute suppression commencez d'abord par remettre le prix de l'acte à zéro puis supprimer l'acte.</p>
                </div>
    ";
        // line 34
        if (($this->getAttribute(($context["facture"] ?? null), "hospitalisation", [], "any", true, true) &&  !(null === $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", [])))) {
            // line 35
            echo "    <table class=\"table table-condensed\">
        <tr>
            <th>Nom</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "html", null, true);
            echo "</th>
        </tr>
        <tr>
            <th>Categorie</th>
            <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "convention", []), "html", null, true);
            echo "</th>
        </tr>
        <tr>
            <th>Societe</th>
            <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "societe", []), "html", null, true);
            echo "</th>
        </tr>

    </table>
    ";
        } elseif (($this->getAttribute(        // line 50
($context["facture"] ?? null), "episode", [], "any", true, true) &&  !(null === $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", [])))) {
            // line 51
            echo "    <table class=\"table table-condensed\">
        <tr>
            <th>Nom</th>
            <th>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", []), "patient", []), "html", null, true);
            echo "</th>
        </tr>
        <tr>
            <th>Categorie</th>
            <th>PRIVEE</th>
        </tr>
        <tr>
            <th>Societe</th>
            <th>PRIVEE </th>
        </tr>

    </table>
    ";
        }
        // line 67
        echo "        <table class=\"table table-striped\">

            <tr>
                <th>Désignation</th>
                <th>prix</th>
                <th>Actions</th>
            </tr>
            ";
        // line 74
        if ((twig_length_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commandes", [])) > 0)) {
            // line 75
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commandes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
                // line 76
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd"], "tarifs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
                    // line 77
                    echo "                ";
                    if (!twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["acte"], "actes", []), "categories", []), "nom", []), ($context["newArray"] ?? $this->getContext($context, "newArray")))) {
                        // line 78
                        echo "                    <tr>
                        <th colspan=\"2\" class=\"text-center\">";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["acte"], "actes", []), "categories", []), "nom", []), "html", null, true);
                        echo "</th>
                    </tr>
                    ";
                        // line 81
                        $context["newArray"] = twig_array_merge(($context["newArray"] ?? $this->getContext($context, "newArray")), [0 => $this->getAttribute($this->getAttribute($this->getAttribute($context["acte"], "actes", []), "categories", []), "nom", [])]);
                        // line 82
                        echo "                ";
                    }
                    // line 83
                    echo "            <tr>
                <th>";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "actes", []), "designationacte", []), "html", null, true);
                    echo "</th>
                <td>";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "prix", []), "html", null, true);
                    echo "</td>
                <td>
                        ";
                    // line 88
                    echo "                            ";
                    // line 89
                    echo "                                ";
                    // line 90
                    echo "                            ";
                    // line 91
                    echo "                            ";
                    // line 92
                    echo "                                ";
                    // line 93
                    echo "                            ";
                    // line 94
                    echo "                        ";
                    // line 95
                    echo "
                </td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "            ";
        }
        // line 101
        echo "            <tfoot>
            <tr>
                <th align=\"right\">Total</th>
                <th align=\"right\">";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "prix", []), "html", null, true);
        echo "</th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    </div>
    </div>

        <div class=\"col-lg-4\">

        <div class=\"card-box\">
            <h3 class=\"text-center\">PANIER DES ACTES</h3>
            <form class=\"\" method=\"post\" action=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_actes_valider", ["id" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", [])]), "html", null, true);
        echo "\">
            <table class=\"table table-condensed\">
                <tr>
                    <th>Designation acte</th><th>Montant</th>
                </tr>
                ";
        // line 121
        $context["tot"] = 0;
        // line 122
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "panier_actes"], "method")) {
            // line 123
            echo "                    ";
            // line 124
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["panieractes"] ?? $this->getContext($context, "panieractes")));
            foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
                // line 125
                echo "                            ";
                if (!twig_in_filter($this->getAttribute($this->getAttribute($context["acte"], "categories", []), "nom", []), ($context["pnewArray"] ?? $this->getContext($context, "pnewArray")))) {
                    // line 126
                    echo "                                <tr>
                                    <th colspan=\"2\" class=\"text-center\">";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "categories", []), "nom", []), "html", null, true);
                    echo "</th>
                                </tr>
                                ";
                    // line 129
                    $context["pnewArray"] = twig_array_merge(($context["pnewArray"] ?? $this->getContext($context, "pnewArray")), [0 => $this->getAttribute($this->getAttribute($context["acte"], "categories", []), "nom", [])]);
                    // line 130
                    echo "                            ";
                }
                // line 131
                echo "                <tr>
                    <td> ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "tarif", []), "prix", []), "html", null, true);
                echo "USD</td>
                </tr>
                        ";
                // line 134
                $context["tot"] = (($context["tot"] ?? $this->getContext($context, "tot")) + $this->getAttribute($this->getAttribute($context["acte"], "tarif", []), "prix", []));
                // line 135
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                ";
        }
        // line 137
        echo "                <tr>
                    <th>TOTAL </th>
                    <th> ";
        // line 139
        echo twig_escape_filter($this->env, ($context["tot"] ?? $this->getContext($context, "tot")), "html", null, true);
        echo " USD</th>
                </tr>
            </table>
                <div class=\"form-group\">
                    <label>
                    ";
        // line 145
        echo "                    </label>
                </div>
                <div class=\"form-group\">
                    <label for=\"medecin\">
                        Medecin :
                    </label>
                    <select name=\"medecin\" id=\"medecin\" class=\"form-control\" required>
                        <option value=\"\">Choisir un medecin demandeur</option>
                        ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["medecins"] ?? $this->getContext($context, "medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["md"]) {
            // line 154
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["md"], "id", []), "html", null, true);
            echo "\">Dr. ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["md"], "nom", []) . " ") . $this->getAttribute($context["md"], "postnom", [])), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['md'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                    </select>
                </div>
                <div class=\"btn-group\">
                    <button type=\"submit\" class=\"btn btn-success btn-group-lg\">Valider</button>
                    <a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_actes_annuler", ["id" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-danger  btn-group-lg\">Annuler</a>
                    <a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_actes_supprimer", ["id" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-outline-danger  btn-group-lg\">Supprimer</a>
                </div>
            </form>
        </div>
        </div>
 <div id=\"actes\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-full\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Actes Medicaux</h4>
                </div>
                <div class=\"modal-body\">
                    <h5 class=\"m-t-30\"><b>Recherche</b></h5>
                    <p class=\"text-muted m-b-15 font-13\">
                        Selectionner les actes des premiers soins du patient.
                    </p>
                    <form class=\"form-inline\" action=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_actes_ajouter", ["id" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", [])]), "html", null, true);
        echo "\" method=\"post\">
                        <select name=\"actes[]\" class=\"multi-select actes\" multiple=\"\" id=\"my_multi_select\" >

                            ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actes"] ?? $this->getContext($context, "actes")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 182
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "code", []), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
            echo " == ";
            if ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", [])) {
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "convention", []), "id", []) != 2)) {
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["acte"], "prix", []) * $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "societe", []), "indice", [])), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "prix", []), "html", null, true);
                }
            }
            echo "</option>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                        </select>
                        <br>
                        <br>
                        <input type=\"submit\" value=\"Soumettre les actes\" class=\"btn btn-custom\">
                        <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\">
                    </form>

                </div>
            </div>
        </div>

    </div>
    <div id=\"myModal1\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Facturer les actes du laboratoire</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_actes_ajouter", ["id" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "tag" => "labo"]), "html", null, true);
        echo "\" method=\"post\" >
                        <h5 class=\"m-t-30\"><b>Recherche des actes</b></h5>

                        <select name=\"labos[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select3\" style=\"position: absolute; left: -9999px;\">
                            ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actes"] ?? $this->getContext($context, "actes")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 210
            echo "                                ";
            if (($this->getAttribute($this->getAttribute($context["acte"], "categories", []), "id", []) == 3)) {
                // line 211
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo " - <span class=\"pull-right\"> (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "tarif", []), "prix", []), "html", null, true);
                echo " USD)</span></option>
                                ";
            }
            // line 213
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                        </select>
                        ";
        // line 216
        echo "                        ";
        // line 217
        echo "                            ";
        // line 218
        echo "                                ";
        // line 219
        echo "                            ";
        // line 220
        echo "                        ";
        // line 221
        echo "                        <button class=\"btn btn-success\" type=\"submit\">Facturer</button>
                    </form> </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer</button>
                    ";
        // line 226
        echo "                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div id=\"myModal2\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel2\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel3\">Facturer les actes de l'imagerie</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_actes_ajouter", ["id" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "tag" => "img"]), "html", null, true);
        echo "\" method=\"post\" >
                        <h5 class=\"m-t-30\"><b>Recherche des actes</b></h5>

                        <select name=\"imgs[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select4\" style=\"position: absolute; left: -9999px;\">
                            ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actes"] ?? $this->getContext($context, "actes")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 243
            echo "                                ";
            if (($this->getAttribute($this->getAttribute($context["acte"], "categories", []), "id", []) == 4)) {
                // line 244
                echo "
                                    <option value=\"";
                // line 245
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo " - <span class=\"pull-right\"> (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "tarif", []), "prix", []), "html", null, true);
                echo " USD)</span></option>
                                ";
            }
            // line 247
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                        </select>

                        ";
        // line 251
        echo "                        ";
        // line 252
        echo "                            ";
        // line 253
        echo "                                ";
        // line 254
        echo "                            ";
        // line 255
        echo "                        ";
        // line 256
        echo "                        <button class=\"btn btn-success\" type=\"submit\">Facturer</button>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer</button>
                    ";
        // line 262
        echo "                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div id=\"myModal3\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel3\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel3\">Facturer les autres actes</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_actes_ajouter", ["id" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "tag" => "autre"]), "html", null, true);
        echo "\" method=\"post\" >
                        <h5 class=\"m-t-30\"><b>Recherche des actes</b></h5>

                        <select name=\"autres[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select5\" style=\"position: absolute; left: -9999px;\">
                            ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actes"] ?? $this->getContext($context, "actes")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 279
            echo "                                ";
            if ((($this->getAttribute($this->getAttribute($context["acte"], "categories", []), "id", []) == 1) || ($this->getAttribute($this->getAttribute($context["acte"], "categories", []), "id", []) == 2))) {
                // line 280
                echo "
                                    <option value=\"";
                // line 281
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo " - <span class=\"pull-right\"> (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "tarif", []), "prix", []), "html", null, true);
                echo " USD)</span></option>
                                ";
            }
            // line 283
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                        </select>

                        ";
        // line 287
        echo "                        ";
        // line 288
        echo "                            ";
        // line 289
        echo "                                ";
        // line 290
        echo "                            ";
        // line 291
        echo "                        ";
        // line 292
        echo "                        <button class=\"btn btn-success\" type=\"submit\">Facturer</button>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer</button>
                    ";
        // line 298
        echo "                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 303
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 304
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 307
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 308
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(document).ready(function() {
            //advance multiselect start
            \$('#my_multi_select3').multiSelect({
                selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
                selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
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
            \$('#my_multi_select4').multiSelect({
                selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
                selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
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
            \$('#my_multi_select5').multiSelect({
                selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
                selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
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
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Caisse:facture_edition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 312,  699 => 311,  695 => 310,  689 => 308,  683 => 307,  674 => 305,  669 => 304,  663 => 303,  652 => 298,  645 => 292,  643 => 291,  641 => 290,  639 => 289,  637 => 288,  635 => 287,  631 => 284,  625 => 283,  616 => 281,  613 => 280,  610 => 279,  606 => 278,  599 => 274,  585 => 262,  578 => 256,  576 => 255,  574 => 254,  572 => 253,  570 => 252,  568 => 251,  564 => 248,  558 => 247,  549 => 245,  546 => 244,  543 => 243,  539 => 242,  532 => 238,  518 => 226,  512 => 221,  510 => 220,  508 => 219,  506 => 218,  504 => 217,  502 => 216,  499 => 214,  493 => 213,  483 => 211,  480 => 210,  476 => 209,  469 => 205,  447 => 185,  425 => 182,  421 => 181,  415 => 178,  395 => 161,  391 => 160,  385 => 156,  374 => 154,  370 => 153,  360 => 145,  352 => 139,  348 => 137,  345 => 136,  339 => 135,  337 => 134,  330 => 132,  327 => 131,  324 => 130,  322 => 129,  317 => 127,  314 => 126,  311 => 125,  306 => 124,  304 => 123,  301 => 122,  299 => 121,  291 => 116,  276 => 104,  271 => 101,  268 => 100,  262 => 99,  253 => 95,  251 => 94,  249 => 93,  247 => 92,  245 => 91,  243 => 90,  241 => 89,  239 => 88,  234 => 85,  230 => 84,  227 => 83,  224 => 82,  222 => 81,  217 => 79,  214 => 78,  211 => 77,  206 => 76,  201 => 75,  199 => 74,  190 => 67,  174 => 54,  169 => 51,  167 => 50,  160 => 46,  153 => 42,  146 => 38,  141 => 35,  139 => 34,  132 => 30,  126 => 26,  123 => 25,  120 => 24,  114 => 23,  106 => 20,  104 => 19,  99 => 15,  97 => 14,  91 => 13,  80 => 12,  68 => 11,  59 => 8,  56 => 7,  52 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
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
{% block menu   %}
    {% if is_granted('ROLE_CAISSIER') and not is_granted('ROLE_RECEPTION') %}
        {% include \"hostooSanteBundle:menus:menucaisse.html.twig\" %}

{% elseif is_granted('ROLE_RECEPTION','ROLE_CAISSIER','ROLE_INFIRMIER')  %}
    {% include 'hostooSanteBundle:menus:menurc.html.twig' %}

    {% endif %}
{% endblock %}
{% block title %}facturer Patient{% endblock %}
{% block titrepage %}{% endblock %}
{% block options %}
    {#<a href=\"{{ path('etalonner_facture', {'id': facture.id }) }}\" class=\"btn btn-info\"> Calibrer </a>#}
    <button class=\"btn btn-custom waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#myModal1\">Laboratoire</button>
    <button class=\"btn btn-custom waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#myModal2\">Imagérie</button>
    <button class=\"btn btn-custom waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#myModal3\">Autres Soins</button>
         {#<a class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#actes\">Ajouter les Actes</a>#}
       {#<a class=\"btn btn-inverse\" data-toggle=\"modal\" data-target=\"#produits\">Pharmacie</a>#}

{% endblock %}

{% block body %}
    {% set newArray=[] %}
    {% set pnewArray=[] %}
    <div class=\"col-lg-8\">
<div class=\"card-box\">


                <h3 class=\"text-center\">FACTURE N° {{ facture.id }}</h3>
                <div class=\"alert alert-danger\">
                    <p>Avant toute suppression commencez d'abord par remettre le prix de l'acte à zéro puis supprimer l'acte.</p>
                </div>
    {% if facture.hospitalisation is defined and facture.hospitalisation is not null %}
    <table class=\"table table-condensed\">
        <tr>
            <th>Nom</th>
            <th>{{ facture.hospitalisation.patient }}</th>
        </tr>
        <tr>
            <th>Categorie</th>
            <th>{{ facture.hospitalisation.patient.convention }}</th>
        </tr>
        <tr>
            <th>Societe</th>
            <th>{{ facture.hospitalisation.patient.societe }}</th>
        </tr>

    </table>
    {% elseif facture.episode is defined  and facture.episode is not null %}
    <table class=\"table table-condensed\">
        <tr>
            <th>Nom</th>
            <th>{{ facture.episode.patient }}</th>
        </tr>
        <tr>
            <th>Categorie</th>
            <th>PRIVEE</th>
        </tr>
        <tr>
            <th>Societe</th>
            <th>PRIVEE </th>
        </tr>

    </table>
    {% endif %}
        <table class=\"table table-striped\">

            <tr>
                <th>Désignation</th>
                <th>prix</th>
                <th>Actions</th>
            </tr>
            {% if facture.commandes|length > 0 %}
            {% for cmd in  facture.commandes %}
            {% for acte in  cmd.tarifs %}
                {% if acte.actes.categories.nom not in newArray %}
                    <tr>
                        <th colspan=\"2\" class=\"text-center\">{{ acte.actes.categories.nom }}</th>
                    </tr>
                    {% set newArray = newArray|merge([acte.actes.categories.nom]) %}
                {% endif %}
            <tr>
                <th>{{ acte.actes.designationacte }}</th>
                <td>{{ acte.prix }}</td>
                <td>
                        {#<ul class=\"list-unstyled list-inline\">#}
                            {#<li>#}
                                {#<a href=\"{{ path('traitementFacture_edit',{'id': acte.id }) }}\">Traiter</a>#}
                            {#</li>#}
                            {#<li>#}
                                {#<a href=\"{{ path('traitementFacture_delete',{'id': acte.id }) }}\">Supprimer</a>#}
                            {#</li>#}
                        {#</ul>#}

                </td>
            </tr>
            {% endfor %}
            {% endfor %}
            {% endif %}
            <tfoot>
            <tr>
                <th align=\"right\">Total</th>
                <th align=\"right\">{{ facture.prix }}</th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    </div>
    </div>

        <div class=\"col-lg-4\">

        <div class=\"card-box\">
            <h3 class=\"text-center\">PANIER DES ACTES</h3>
            <form class=\"\" method=\"post\" action=\"{{ path('facture_actes_valider',{'id':facture.id }) }}\">
            <table class=\"table table-condensed\">
                <tr>
                    <th>Designation acte</th><th>Montant</th>
                </tr>
                {% set tot = 0 %}
                {% if app.session.get('panier_actes') %}
                    {#{% set panieractes=app.session.get('panier_actes')  %}#}
                    {% for acte in panieractes %}
                            {% if acte.categories.nom not in pnewArray %}
                                <tr>
                                    <th colspan=\"2\" class=\"text-center\">{{ acte.categories.nom }}</th>
                                </tr>
                                {% set pnewArray = pnewArray|merge([acte.categories.nom]) %}
                            {% endif %}
                <tr>
                    <td> {{ acte.designationacte }}</td><td>{{ acte.tarif.prix }}USD</td>
                </tr>
                        {%  set tot = tot + acte.tarif.prix %}
                    {% endfor %}
                {% endif %}
                <tr>
                    <th>TOTAL </th>
                    <th> {{ tot }} USD</th>
                </tr>
            </table>
                <div class=\"form-group\">
                    <label>
                    {#<input type=\"date\" name=\"date_tour\" class=\"form-control\" />#}
                    </label>
                </div>
                <div class=\"form-group\">
                    <label for=\"medecin\">
                        Medecin :
                    </label>
                    <select name=\"medecin\" id=\"medecin\" class=\"form-control\" required>
                        <option value=\"\">Choisir un medecin demandeur</option>
                        {% for md in medecins %}
                        <option value=\"{{ md.id }}\">Dr. {{ md.nom~\" \"~md.postnom }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"btn-group\">
                    <button type=\"submit\" class=\"btn btn-success btn-group-lg\">Valider</button>
                    <a href=\"{{ path('facture_actes_annuler',{'id':facture.id }) }}\" class=\"btn btn-danger  btn-group-lg\">Annuler</a>
                    <a href=\"{{ path('facture_actes_supprimer',{'id':facture.id }) }}\" class=\"btn btn-outline-danger  btn-group-lg\">Supprimer</a>
                </div>
            </form>
        </div>
        </div>
 <div id=\"actes\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-full\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Actes Medicaux</h4>
                </div>
                <div class=\"modal-body\">
                    <h5 class=\"m-t-30\"><b>Recherche</b></h5>
                    <p class=\"text-muted m-b-15 font-13\">
                        Selectionner les actes des premiers soins du patient.
                    </p>
                    <form class=\"form-inline\" action=\"{{ path('facture_actes_ajouter',{'id': facture.id }) }}\" method=\"post\">
                        <select name=\"actes[]\" class=\"multi-select actes\" multiple=\"\" id=\"my_multi_select\" >

                            {% for acte in actes %}
                                    <option value=\"{{ acte.id }}\" > {{ acte.code }}  {{ acte.designationacte }} == {% if facture.hospitalisation %}{% if facture.hospitalisation.patient.convention.id != 2 %}{{ acte.prix*facture.hospitalisation.patient.societe.indice }}{% else %}{{ acte.prix }}{% endif %}{% endif %}</option>

                            {% endfor %}
                        </select>
                        <br>
                        <br>
                        <input type=\"submit\" value=\"Soumettre les actes\" class=\"btn btn-custom\">
                        <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\">
                    </form>

                </div>
            </div>
        </div>

    </div>
    <div id=\"myModal1\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Facturer les actes du laboratoire</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"{{ path('facture_actes_ajouter', {'id': facture.id,'tag':'labo' }) }}\" method=\"post\" >
                        <h5 class=\"m-t-30\"><b>Recherche des actes</b></h5>

                        <select name=\"labos[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select3\" style=\"position: absolute; left: -9999px;\">
                            {% for acte in actes %}
                                {% if acte.categories.id  == 3 %}
                                    <option value=\"{{ acte.id }}\">{{ acte.designationacte }} - <span class=\"pull-right\"> ({{ acte.tarif.prix }} USD)</span></option>
                                {% endif %}
                            {% endfor %}
                        </select>
                        {#<label>Examen demande par :</label>#}
                        {#<select name=\"med\" class=\"form-control\">#}
                            {#{% for med in medecins %}#}
                                {#<option value=\"{{ med.id }}\">{{ med.nom~\" \"~med.postnom~\" \"~med.prenom }}</option>#}
                            {#{% endfor %}#}
                        {#</select>#}
                        <button class=\"btn btn-success\" type=\"submit\">Facturer</button>
                    </form> </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer</button>
                    {#<button type=\"button\" class=\"btn btn-custom waves-effect waves-light\">Save changes</button>#}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div id=\"myModal2\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel2\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel3\">Facturer les actes de l'imagerie</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"{{ path('facture_actes_ajouter', {'id': facture.id,'tag':'img' }) }}\" method=\"post\" >
                        <h5 class=\"m-t-30\"><b>Recherche des actes</b></h5>

                        <select name=\"imgs[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select4\" style=\"position: absolute; left: -9999px;\">
                            {% for acte in actes %}
                                {% if acte.categories.id  == 4 %}

                                    <option value=\"{{ acte.id }}\">{{ acte.designationacte }} - <span class=\"pull-right\"> ({{ acte.tarif.prix }} USD)</span></option>
                                {% endif %}
                            {% endfor %}
                        </select>

                        {#<label>Examen demande par :</label>#}
                        {#<select name=\"med\" class=\"form-control\">#}
                            {#{% for med in medecins %}#}
                                {#<option value=\"{{ med.id }}\">{{ med.nom~\" \"~med.postnom~\" \"~med.prenom }}</option>#}
                            {#{% endfor %}#}
                        {#</select>#}
                        <button class=\"btn btn-success\" type=\"submit\">Facturer</button>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer</button>
                    {#<button type=\"button\" class=\"btn btn-custom waves-effect waves-light\">Save changes</button>#}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div id=\"myModal3\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel3\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel3\">Facturer les autres actes</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"{{ path('facture_actes_ajouter', {'id': facture.id,'tag':'autre' }) }}\" method=\"post\" >
                        <h5 class=\"m-t-30\"><b>Recherche des actes</b></h5>

                        <select name=\"autres[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select5\" style=\"position: absolute; left: -9999px;\">
                            {% for acte in actes %}
                                {% if acte.categories.id  == 1 or acte.categories.id  == 2 %}

                                    <option value=\"{{ acte.id }}\">{{ acte.designationacte }} - <span class=\"pull-right\"> ({{ acte.tarif.prix }} USD)</span></option>
                                {% endif %}
                            {% endfor %}
                        </select>

                        {#<label>Examen demande par :</label>#}
                        {#<select name=\"med\" class=\"form-control\">#}
                            {#{% for med in medecins %}#}
                                {#<option value=\"{{ med.id }}\">{{ med.nom~\" \"~med.postnom~\" \"~med.prenom }}</option>#}
                            {#{% endfor %}#}
                        {#</select>#}
                        <button class=\"btn btn-success\" type=\"submit\">Facturer</button>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Fermer</button>
                    {#<button type=\"button\" class=\"btn btn-custom waves-effect waves-light\">Save changes</button>#}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/plugins/multiselect/css/multi-select.css') }}\"  rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}
{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}\"></script>
    <script>
        jQuery(document).ready(function() {
            //advance multiselect start
            \$('#my_multi_select3').multiSelect({
                selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
                selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
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
            \$('#my_multi_select4').multiSelect({
                selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
                selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
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
            \$('#my_multi_select5').multiSelect({
                selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
                selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='recherche...'>\",
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
        });

    </script>
{% endblock %}", "hostooSanteBundle:Caisse:facture_edition.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Caisse/facture_edition.html.twig");
    }
}
