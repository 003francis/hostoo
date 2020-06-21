<?php

/* hostooSanteBundle:Medecin:fichepatient2.html.twig */
class __TwigTemplate_ec5f45cdaa8819ed19a460fd8182e7ec33d6630e199a5fc9ea2b0372789db884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Medecin:fichepatient2.html.twig", 1);
        $this->blocks = [
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Medecin:fichepatient2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Fiche du Patient";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "hostooSanteBundle:Medecin:fichepatient2.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"col-lg-12\" id=\"container\">
    <div class=\"btn-group-justified\">
        <a class=\"btn btn-custom\" data-toggle=\"modal\" data-target=\"#tabr1\">Signes vitaux</a>
        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#tabr2\">Consultation</a>
        <a class=\"btn btn-custom\" data-toggle=\"modal\" data-target=\"#tabr3\">Laboratoire</a>
        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#tabr5\">Pharmacie</a>
        <a class=\"btn btn-custom\" data-toggle=\"modal\" data-target=\"#tabr4\">Imagerie</a>
        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#tabr6\">Autres</a>
        ";
        // line 16
        echo "    </div>
        <div class=\"row\" style=\"border: 2px double deepskyblue; border-radius: 5px 5px 5px 5px; padding: 5px \">
            <div class=\"col-lg-9\">
        <div class=\"col-lg-6 col-md-12\">
<dl class=\"dl-horizontal\">
            <dt>Nom :</dt><dd>";
        // line 21
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "nom", [])), "html", null, true);
        echo "</dd>
            <dt>Postnom :</dt><dd>";
        // line 22
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "postnom", [])), "html", null, true);
        echo "</dd>
            <dt>Prenom :</dt><dd>";
        // line 23
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "prenom", [])), "html", null, true);
        echo "</dd>

            <dt>Date de naissance :</dt><dd>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "datenaissance", []), "d-m-Y"), "html", null, true);
        echo "</dd>
            <dt>Age :</dt><dd>";
        // line 26
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "datenaissance", []), "Y")), "html", null, true);
        echo "</dd>
            <dt>Sexe :</dt><dd>";
        // line 27
        if (($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "sexe", []) == true)) {
            echo "M";
        } else {
            echo "F";
        }
        echo "</dd>
</dl>
            </div>
        <div class=\"col-lg-6 col-md-12\">
        <dl class=\"dl-horizontal\">
            <dt>Telephone :</dt><dd>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "telephone1", []), "html", null, true);
        echo "</dd>
            <dt>Telephone2 :</dt><dd>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "telephone2", []), "html", null, true);
        echo "</dd>
            <dt>Nationalité :</dt><dd>";
        // line 34
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "nationalite", [])), "html", null, true);
        echo "</dd>

            <dt>Societe :</dt><dd>";
        // line 36
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "nom", [])), "html", null, true);
        echo "</dd>
            <dt>Type de patient :</dt><dd>";
        // line 37
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", [])), "html", null, true);
        echo "</dd>
            ";
        // line 38
        if ($this->getAttribute($this->getAttribute(($context["patient"] ?? null), "formule", [], "any", false, true), "nom", [], "any", true, true)) {
            echo "<dt>Formule :</dt><dd>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []), "nom", [])), "html", null, true);
            echo "</dd>";
        }
        // line 39
        echo "            </dl>
        </div>
                <!-- end col -->


                </div>
            <div class=\" col-lg-3\">
                <h3>Actes Prescrits</h3>
                <table class=\"table table-striped\">

                    ";
        // line 49
        if ( !(null === ($context["tabacte"] ?? $this->getContext($context, "tabacte")))) {
            // line 50
            echo "                        <tr>
                            <th class=\"bg-success\">Laboratoire</th>
                        </tr>
                        ";
            // line 53
            $context["som"] = 0;
            // line 54
            echo "                        ";
            $context["taillelabo"] = 0;
            // line 55
            echo "
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabacte"] ?? $this->getContext($context, "tabacte")));
            foreach ($context['_seq'] as $context["_key"] => $context["tacte"]) {
                // line 57
                echo "                            <tr>
                                <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["tacte"], "designationacte", []), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_suppcte", ["id" => ($context["taillelabo"] ?? $this->getContext($context, "taillelabo"))]), "html", null, true);
                echo "\" ><i class=\"fa fa-trash pull-right text-danger\"></i></a></td>
                            </tr>
                            ";
                // line 60
                $context["taillelabo"] = (($context["taillelabo"] ?? $this->getContext($context, "taillelabo")) + 1);
                // line 61
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tacte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 62
        echo "
                    ";
        // line 63
        if ( !(null === ($context["tabimg"] ?? $this->getContext($context, "tabimg")))) {
            // line 64
            echo "                        <tr>
                            <th class=\"bg-blue\">Imagérie</th>
                        </tr>
                        ";
            // line 67
            $context["som"] = 0;
            // line 68
            echo "                        ";
            $context["tailleimg"] = 0;
            // line 69
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabimg"] ?? $this->getContext($context, "tabimg")));
            foreach ($context['_seq'] as $context["_key"] => $context["tacte"]) {
                // line 70
                echo "                            <tr>
                                <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["tacte"], "designationacte", []), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_suppimg", ["id" => ($context["tailleimg"] ?? $this->getContext($context, "tailleimg"))]), "html", null, true);
                echo "\" ><i class=\"fa fa-trash pull-right text-danger\"></i></a></td>
                            </tr>
                          ";
                // line 73
                $context["tailleimg"] = (($context["tailleimg"] ?? $this->getContext($context, "tailleimg")) + 1);
                // line 74
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tacte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 75
        echo "                    ";
        if ( !(null === ($context["tabmed"] ?? $this->getContext($context, "tabmed")))) {
            // line 76
            echo "                        <tr>
                            <th class=\"bg-danger\">Pharmacie</th>
                        </tr>
                        ";
            // line 79
            $context["som"] = 0;
            // line 80
            echo "                        ";
            $context["phar"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "phar"], "method");
            // line 81
            echo "                        ";
            $context["poso"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pos"], "method");
            // line 82
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabmed"] ?? $this->getContext($context, "tabmed")));
            foreach ($context['_seq'] as $context["_key"] => $context["tacte"]) {
                // line 83
                echo "                            <tr>
                                <td><div class=\"col-lg-12\">
                                        <div class=\"row\">
                                        <div class=\"col-lg-4\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["tacte"], "nom", []), "html", null, true);
                echo "</div>
                                            <div class=\"col-lg-6\">
                                        <form class=\"\" action=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_ajoutermed", ["id" => $this->getAttribute($context["tacte"], "id", [])]), "html", null, true);
                echo "\">
                                            <div class=\"row\">
                                                <input type=\"number\" name=\"qte\" onchange=\"this.form.submit()\" value=\"";
                // line 90
                if ($this->getAttribute(($context["phar"] ?? null), $this->getAttribute($context["tacte"], "id", []), [], "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["phar"] ?? $this->getContext($context, "phar")), $this->getAttribute($context["tacte"], "id", []), [], "array"), "html", null, true);
                }
                echo "\" class=\"form-control-static col-lg-6\" >
                                                <input type=\"text\" name=\"pos\" onchange=\"this.form.submit()\" value=\"";
                // line 91
                if ($this->getAttribute(($context["poso"] ?? null), $this->getAttribute($context["tacte"], "id", []), [], "array", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["poso"] ?? $this->getContext($context, "poso")), $this->getAttribute($context["tacte"], "id", []), [], "array"), "html", null, true);
                    echo " ";
                }
                echo "\" class=\"form-control-static col-lg-6\" placeholder=\"Posologie\"></div>
                                        </form></div>
                                        <div class=\"col-lg-2\">
                                            <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_suppmed", ["id" => $this->getAttribute($context["tacte"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-trash right text-danger\"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tacte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 101
        echo "                    ";
        if (( !(null === ($context["tabautres"] ?? $this->getContext($context, "tabautres"))) || (isset($context["tabautres"]) || array_key_exists("tabautres", $context)))) {
            // line 102
            echo "                        <tr>
                            <th class=\"bg-retina_wood\">Autres</th>
                        </tr>
                        ";
            // line 105
            $context["som"] = 0;
            // line 106
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabautres"] ?? $this->getContext($context, "tabautres")));
            foreach ($context['_seq'] as $context["_key"] => $context["tacte"]) {
                // line 107
                echo "                            <tr>
                                <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["tacte"], "designationacte", []), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_suppautre", ["id" => $this->getAttribute($context["tacte"], "id", [])]), "html", null, true);
                echo "\" ><i class=\"fa fa-trash pull-right text-danger\"></i></a></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tacte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 111
        echo "
                    <tr>
                        <td><div class=\"btn-group\">
                                <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_factureactes", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "somtot" => ($context["som"] ?? $this->getContext($context, "som"))]), "html", null, true);
        echo "\" class=\"btn btn-success\">Valider les actes</a>
                                <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_resetactes");
        echo "\" class=\"btn btn-danger\">Annuler</a>
                            </div></td>
                    </tr>
                </table>
            </div>
            <div class=\"col-lg-8\">
                                            <div class=\"panel-group\" id=\"accordion\" role=\"tablist\"
                                                 aria-multiselectable=\"true\">
                                                <div class=\"panel panel-primary bx-shadow-none\">
                                                    <div class=\"panel-heading\">
                                                        <div class=\"panel-title\">
                                                                Consultation
                                                                </div>
                                                    </div>
                                                        <div class=\"panel-body\">
                                                            <dl class=\"\">
                                                                consultation

                                                                ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Consultation:affiche", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "
                                                                ";
        // line 134
        if ($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "anamnese", [])) {
            // line 135
            echo "                                                                <dt>Symptômes dominants</dt>

                                                                ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "anamnese", []), "symptomes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 138
                echo "                                                                    <dd>";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["t"], "nom", []) . " "), "html", null, true);
                echo "</dd>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "
                                                                <dt>Compléments</dt>
                                                                <dd>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "anamnese", []), "complements", []), "html", null, true);
            echo "</dd>
                                                                <dt>Hypothèses diagnotiquées</dt>
                                                                <dd>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "anamnese", []), "autres", []), "html", null, true);
            echo "</dd>
                                                                ";
        }
        // line 146
        echo "
                                                            </dl>
                                                            ";
        // line 148
        if (($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "diag", []) != null)) {
            // line 149
            echo "
                                                                <strong>Diagnostiques faits</strong> <br/>";
            // line 150
            if (($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "diag", []) != null)) {
                echo "<span class=\"fa fa-check-circle fa-2x text-success\"></span>";
            } else {
                echo "<span class=\"fa fa-times text-success\"></span>";
            }
            // line 151
            echo "
                                                                <ul class=\"list-unstyled\">

                                                           ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "diag", []), "Diagnostiques", []));
            foreach ($context['_seq'] as $context["_key"] => $context["mydiag"]) {
                // line 155
                echo "                                                               <li>";
                echo twig_escape_filter($this->env, $context["mydiag"], "html", null, true);
                echo "</li>
                                                               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mydiag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                                                            </ul>";
        }
        // line 158
        echo "                                                        </div>
                                                    </div>
                                                <div class=\"panel panel-danger\">
                                                    <div class=\"panel-heading\">
                                                        <div class=\"panel-title\">
                                                                Resultats Laboratoires
                                                        </div>
                                                    </div>
                                                        <div class=\"panel-body\">
                                                            ";
        // line 167
        if (($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "ordonnancelabos", []) == null)) {
            // line 168
            echo "                                                                <span class=\"alert alert-danger\">Aucun Examen demandé</span>
                                                            ";
        } else {
            // line 170
            echo "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "ordonnancelabos", []));
            foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
                // line 171
                echo "
                                                                    ";
                // line 172
                if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) == 0)) {
                    // line 173
                    echo "                                                                        <span class=\"alert alert-warning\">Resultats En Attente</span>
                                                                    ";
                } else {
                    // line 175
                    echo "                                                                        <h4 class=\"label label-success\">Resultats Labo  du ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ord"], "dateordo", []), "d-m-Y H:i"), "html", null, true);
                    echo "</h4>
                                                                        <dl class=\"dl-horizontal center-block
                                                           \">
                                                                            ";
                    // line 178
                    if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0)) {
                        // line 179
                        echo "                                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                            // line 180
                            echo "                                                                                    <dt>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                            echo "</dt>
                                                                                    <dd>
                                                                                        ";
                            // line 182
                            echo twig_escape_filter($this->env, $this->getAttribute($context["ord"], "afficherresultat", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "id", [])], "method"), "html", null, true);
                            echo "
                                                                                    </dd>
                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 185
                        echo "                                                                            ";
                    }
                    // line 186
                    echo "                                                                        </dl>
                                                                    ";
                }
                // line 188
                echo "                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                                                            ";
        }
        echo "    </div>
                                                    </div>
                                                </div>
                                                <div class=\"panel panel-warning\">
                                                    <div class=\"panel-heading\">
                                                        <div class=\"panel-title\">
                                                                Resultats Imagérie
                                                        </div>
                                                    </div>
                                                    <div class=\"panel-body\">
                                                        ";
        // line 199
        if (($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "ordonnanceimgs", []) == null)) {
            // line 200
            echo "                                                            <span class=\"alert alert-danger\">Aucun Examen demandé</span>
                                                        ";
        } else {
            // line 202
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "ordonnanceimgs", []));
            foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
                // line 203
                echo "
                                                                ";
                // line 204
                if ((($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) == 0) &&  !$this->getAttribute($context["ord"], "resultat", [], "any", true, true))) {
                    // line 205
                    echo "                                                                    <span class=\"alert alert-warning\">Resultats En Attente</span>
                                                                ";
                } else {
                    // line 207
                    echo "                                                                    <h4 class=\"label label-success\">Resultats Imagérie du ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ord"], "dateordo", []), "d-m-Y H:i"), "html", null, true);
                    echo "</h4>
                                                                    <dl class=\"dl-horizontal center-block
                                                           \">
                                                                        ";
                    // line 210
                    if ((twig_length_filter($this->env, $this->getAttribute($context["ord"], "resultats", [])) > 0)) {
                        // line 211
                        echo "                                                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                            // line 212
                            echo "                                                                                <dt>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                            echo "</dt>

                                                                                <dd>";
                            // line 214
                            if ($this->getAttribute($context["res"], "resultat", [])) {
                                echo $this->getAttribute($context["res"], "resultat", []);
                            } else {
                                echo "En Attente ";
                            }
                            echo "</dd>
                                                                                <dd><a href=\"";
                            // line 215
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/imageries/" . $this->getAttribute($context["res"], "fichier", []))), "html", null, true);
                            echo "\"> <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/imageries/" . $this->getAttribute($context["res"], "fichier", []))), "html", null, true);
                            echo "\" width=\"100px\" height=\"100px\"></a></dd>
                                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 217
                        echo "                                                                        ";
                    }
                    // line 218
                    echo "                                                                    </dl>
                                                                ";
                }
                // line 220
                echo "                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                                                        ";
        }
        echo "</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
    <!-- Tabs Left -->
    <div class=\"col-lg-9\">

    <div id=\"tabr1\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-full\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Signes Vitaux</h4>
                            </div>
                            <div class=\"modal-body\">
";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Prelevement:ajouterSVMed", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "

        </div>
        </div>
        </div>
    </div>
        <div id=\"tabr2\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                <div class=\"modal-dialog-full\">
                        <div class=\"modal-content\">
                           <ul class=\"nav nav-tabs navtab-bg nav-justified\">

                               <li  class=\"active\">
                                   <a href=\"#settings-2\" data-toggle=\"tab\" aria-expanded=\"true\">
                                       <span class=\"visible-xs\"><i class=\"fa fa-cog\"></i></span>
                                       <span class=\"hidden-xs\">Consultation</span>
                                   </a>
                               </li>
                               <li>
                                                        <a href=\"#home-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                                            <span class=\"visible-xs\"><i class=\"fa fa-home\"></i></span>
                                                            <span class=\"hidden-xs\">Anamnèse</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"\">
                                                        <a href=\"#profile-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                                            <span class=\"visible-xs\"><i class=\"fa fa-user\"></i></span>
                                                            <span class=\"hidden-xs\">Antécédents</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"\">
                                                        <a href=\"#messages-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                                            <span class=\"visible-xs\"><i class=\"fa fa-envelope-o\"></i></span>
                                                            <span class=\"hidden-xs\">Examens Physiques</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"\">
                                                        <a href=\"#rdv-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                                            <span class=\"visible-xs\"><i class=\"fa fa-cog\"></i></span>
                                                            <span class=\"hidden-xs\">Rendez-vous</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"\">
                                                        <a href=\"#hist-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                                            <span class=\"visible-xs\"><i class=\"fa fa-cog\"></i></span>
                                                            <span class=\"hidden-xs\">Historique</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane\" id=\"home-2\">
                                                    <div class=\"row\">
                                                    <div class=\"col-md-8\">
                                                    ";
        // line 289
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Anamnese:new", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "
                                                    </div>
                                                        <div class=\"col-md-4\">
                                                            <a class=\"btn btn-success\" id=\"show_form_symptome\">Ajouter Symptome</a><a class=\"btn btn-danger\" id=\"hide_form_symptome\">Cacher</a>
                                                            <div id=\"add_symptome_form\">
                                                                ";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Symptomes:new"));
        echo "
                                                            </div>
                                                            </div>
                                                    </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"profile-2\">

                                                     ";
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Antecedent:antecedentPatient", ["pat" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "

                                                     </div>
                                                    <div class=\"tab-pane\" id=\"messages-2\">
                                                    <div class=\"row\">
                                                    <div class=\"col-md-10 col-md-offset-1\">
                                                    <div class=\"row\">
                                                    <div class=\"col-md-6 col-xs-12\">
                                                    ";
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:ExamensPhysiques:new", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "
                                                    </div>
                                                    <div class=\"col-md-6 col-xs-12\">
                                                    ";
        // line 312
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:ExamensPhysiques:list", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                  </div>
                                                    <div class=\"tab-pane  active\" id=\"settings-2\">
                                                   <div class=\"\">
                                                       ";
        // line 320
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Consultation:new", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "
                                                       ";
        // line 324
        echo "                                                       </div> </div>
                                                  <div class=\"tab-pane\" id=\"rdv-2\">
                                                    <h1 class=\"\">RDV</h1>
                                                    <div class=\"row\">
                                                    <div class=\"col-md-6 col-xs-12\">
                                                     ";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooRDVBundle:RDVMed:new", ["id" => $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "id", [])]));
        echo "
                                                     </div>
                                                     <div class=\"col-md-6 col-xs-12\">
                                                         ";
        // line 332
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "id", []), "html", null, true);
        echo "
                                                    ";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooRDVBundle:RDVMed:list", ["pat" => $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "id", [])]));
        echo "
                                                    </div>
                                                   </div>

                                                     </div>
                                                    ";
        // line 343
        echo "                                                    <div class=\"row\">
                                                    <button type=\"button\" class=\"pull-right btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
                                                    </div>
                                                </div>




            </div>
            </div>
            </div>
        <div id=\"tabr3\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
              <div class=\"modal-dialog modal-full\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Les examens du laboratoire</h4>
                            </div>
                            <div class=\"modal-body\">
            <div class=\"panel\">


                           <div class=\"panel-body\">
                            <form class=\"form-inline\"  method=\"post\" action=\"";
        // line 366
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_ajoutercte");
        echo "\">
    <input type=\"hidden\" name=\"episode\" value=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "html", null, true);
        echo "\">
    <select name=\"labo[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select3\" >

                                ";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["labos"] ?? $this->getContext($context, "labos")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 371
            echo "                                    ";
            $context["tampon"] = 0;
            // line 372
            echo "                                    ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "id", []) != 15) && ($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []) != null))) {
                // line 373
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []), "forsoc", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pacte"]) {
                    // line 374
                    echo "                                            ";
                    if (($this->getAttribute($context["acte"], "id", []) == $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []))) {
                        // line 375
                        echo "                                                ";
                        if (($this->getAttribute($this->getAttribute($context["pacte"], "societe", []), "id", []) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "id", []))) {
                            // line 376
                            echo "                                                    ";
                            $context["tampon"] = $this->getAttribute($context["acte"], "id", []);
                            // line 377
                            echo "                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []), "html", null, true);
                            echo "\" class=\"bg-success\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "designationacte", []), "html", null, true);
                            echo "</option>
                                                ";
                        }
                        // line 379
                        echo "                                            ";
                    }
                    // line 380
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 381
                echo "                                    ";
            }
            // line 382
            echo "                                ";
            if (($this->getAttribute($context["acte"], "id", []) != ($context["tampon"] ?? $this->getContext($context, "tampon")))) {
                // line 383
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo "</option>

                                ";
            }
            // line 386
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "

                                </select>
                                <input type=\"submit\" class=\"btn btn-custom\">
                                </form>
                                </div>
                </div>
</div>
</div>
</div>
        </div>
        <div id=\"tabr4\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
             <div class=\"modal-dialog modal-full\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Les examens d'imagérie</h4>
                            </div>
                            <div class=\"modal-body\">
            <div class=\"panel\">

    <div class=\"panel-body\">
                               <form class=\"form-inline\"  method=\"post\" action=\"";
        // line 409
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_ajouterimg");
        echo "\">
    <input type=\"hidden\" name=\"episode\" value=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "html", null, true);
        echo "\">
    <select name=\"imgr[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select4\" >

                                ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imgs"] ?? $this->getContext($context, "imgs")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 414
            echo "        ";
            $context["tampon"] = 0;
            // line 415
            echo "        ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "id", []) != 15) && ($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []) != null))) {
                // line 416
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []), "forsoc", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pacte"]) {
                    // line 417
                    echo "                ";
                    if (($this->getAttribute($context["acte"], "id", []) == $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []))) {
                        // line 418
                        echo "                    ";
                        if (($this->getAttribute($this->getAttribute($context["pacte"], "societe", []), "id", []) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "id", []))) {
                            // line 419
                            echo "                        ";
                            $context["tampon"] = $this->getAttribute($context["acte"], "id", []);
                            // line 420
                            echo "                        <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []), "html", null, true);
                            echo "\" class=\"bg-success\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "designationacte", []), "html", null, true);
                            echo "</option>
                    ";
                        }
                        // line 422
                        echo "                ";
                    }
                    // line 423
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 424
                echo "        ";
            }
            // line 425
            echo "        ";
            if (($this->getAttribute($context["acte"], "id", []) != ($context["tampon"] ?? $this->getContext($context, "tampon")))) {
                // line 426
                echo "
                                <option value=\"";
                // line 427
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo "</option>

        ";
            }
            // line 430
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "

                                </select>
                                <input type=\"submit\" class=\"btn btn-custom\">
                                </form></div>
                </div>
        </div>
        </div>
        </div>
        </div>
        <div id=\"tabr5\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
         <div class=\"modal-dialog modal-full\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Pharmacie</h4>
                            </div>
                            <div class=\"modal-body\">
                                <div class=row>
                                <div class=\"col-lg-8 col-md-12\">
                                    ";
        // line 451
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Ordonnance:new", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "

                                     </div>
                                <div class=\"col-lg-4 col-md-12\">
                                    ";
        // line 455
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Ordonnance:EpisodeOrdonnance", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "
                                </div>
                                </div>
             ";
        // line 469
        echo "</div>
</div>
</div>
           </div>

            <script>
                \$().ready(function () {
                    \$('#example').DataTable();
                })
            </script>
        </div>

        <div id=\"tabr6\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
            <div class=\"modal-dialog modal-full\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                        <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Les actes supplementaires</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"panel\">

                                    <div class=\"panel-body\">
                                        <form class=\"form-inline\"  method=\"post\" action=\"";
        // line 492
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_ajouterimg");
        echo "\">
                                            <input type=\"hidden\" name=\"episode\" value=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "html", null, true);
        echo "\">
                                            <select name=\"aut[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select6\" >

                                                ";
        // line 496
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actes"] ?? $this->getContext($context, "actes")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 497
            echo "                                                ";
            $context["tampon"] = 0;
            // line 498
            echo "                                                ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "id", []) != 15) && ($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []) != null))) {
                // line 499
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []), "forsoc", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pacte"]) {
                    // line 500
                    echo "                                                        ";
                    if (($this->getAttribute($context["acte"], "id", []) == $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []))) {
                        // line 501
                        echo "                                                            ";
                        if (($this->getAttribute($this->getAttribute($context["pacte"], "societe", []), "id", []) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "id", []))) {
                            // line 502
                            echo "                                                                ";
                            $context["tampon"] = $this->getAttribute($context["acte"], "id", []);
                            // line 503
                            echo "                                                                <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []), "html", null, true);
                            echo "\" class=\"bg-success\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "designationacte", []), "html", null, true);
                            echo "</option>
                                                            ";
                        }
                        // line 505
                        echo "                                                        ";
                    }
                    // line 506
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 507
                echo "                                                ";
            }
            // line 508
            echo "                                                ";
            if (($this->getAttribute($context["acte"], "id", []) != ($context["tampon"] ?? $this->getContext($context, "tampon")))) {
                // line 509
                echo "
                                                    <option value=\"";
                // line 510
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo "</option>

                                                ";
            }
            // line 513
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        echo "

                                            </select>
                                            <input type=\"submit\" class=\"btn btn-custom\">
                                        </form></div>
                            </div>
                    </div>
                </div>
        </div>
</div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 527
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 528
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lightbox2/dist/js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tetranzselect2entity/js/select2entity.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>


    <script>
        \$(function () {
           \$('#listepatients').dataTable();
        });
    </script>
    <script>

\$(function () {
    \$('#add_symptome_form').hide();
    \$('#hide_symptome_form').hide();
    \$('#show_form_symptome').on('click',function(e){
        e.preventDefault();
        \$('#add_symptome_form').show();
        \$('#hide_symptome_form').show();
        \$(this).hide();
    });
    \$('#hide_form_symptome').on('click',function(e){
        e.preventDefault();
        \$('#add_symptome_form').hide();
        \$('#show_form_symptome').show();
        \$(this).hide();
    });
    var dataAppleDevices = [{id: 1, text: \"iPhone\"}, {id: 2, text: \"iPad\"}, {id: 3, text: \"iPod\"}];
    var dataSamsungDevices = [{id: 1, text: \"Galaxy S\"}, {id: 2, text: \"Galaxy Tab\"}, {id: 3, text: \"Galaxy A\"}];

        //advance multiselect start
        var \$inp=\$('#hypodiagno');

    //\$('.selecta').select2();
    \$('.selecthd').select2();
    \$('.mypro').select2();
    \$('.mypro-limiting').select2({
        placeholder: \"Choisir les actes\"
    });
    });
/** pharmacie **/
\$('#my_multi_select9').multiSelect({
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

/*** labo ***/
        \$('#my_multi_select3').multiSelect({
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
    \$(\".select2\").select2().attr('name','acteslabo[]');
    \$(\".selecta\").select2();

    \$(\".selectdc\").select2();


   // \$(\".selecthd\").select2();

    \$(\".select2-limiting\").select2({
        placeholder: \"Choisir les actes\"
    });

 //img
        \$('#my_multi_select4').multiSelect({
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
    \$(\".select3\").select2().attr('name','acteslabo[]');

    \$(\".select3-limiting\").select2({
        placeholder: \"Choisir les actes\"
    });
    //advance multiselect start
\$('#my_multi_select5').multiSelect({
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
    \$('#my_multi_select6').multiSelect({
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
    \$(\".select4\").select2().attr('name','acteslabo[]');

    \$(\".select4-limiting\").select2({
        placeholder: \"Choisir les actes\"
    });

    </script>
       <script>
        \$('#signes_vitaux_taille').on('change',function () {
            var poids=\$('#signes_vitaux_poids').val();
            \$('#signes_vitaux_imc').val(poids/(Math.pow(\$(this).val(),2)));
        });

        \$('#signes_vitaux_pp').on('change',function () {
            var poids=\$('#signes_vitaux_pa').val();
            \$('#signes_vitaux_wrh').val(\$(this).val()/poids,2);
        });
    </script>
    <script src=\"";
        // line 791
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/signesvitaux.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 792
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/rdvmed.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/exphys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 794
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/anamnese.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 795
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/antecedent.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 796
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/symptomes.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 797
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 798
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\"></script>
    <script>
\tinitSample();
\thistorique();
\tcomplements();
</script>
    <script type=\"text/javascript\">
        var \$collectionHolder;
        // setup an \"add a tag\" link
        var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link btn btn-info\" title=\"Ajouter un produit\"><i class=\"fa fa-plus\"></i></a>');
        var \$newLinkLi = \$('<li></li>').append(\$addTagLink);
        jQuery(document).ready(function() {
// Get the ul that holds the collection of tags
            \$collectionHolder = \$('div#ordonnance_posologie');
            \$collectionHolder.addClass('list-unstyled form-group');
// add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi.addClass('col-md-3'));
// count the current form inputs we have (e.g. 2), use that as the new
// index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);
            \$addTagLink.on('click', function(e) {
// prevent the link from creating a \"#\" on the URL
                e.preventDefault();
// add a new tag form (see next code block)
                addTagForm(\$collectionHolder, \$newLinkLi);
            });
        });
        function addTagForm(\$collectionHolder, \$newLinkLi) {

// Get the data-prototype explained earlier

            var prototype = \$collectionHolder.data('prototype');


// get the new index

            var index = \$collectionHolder.data('index');


// Replace '__name__' in the prototype's HTML to

// instead be a number based on how many items we have

            var newForm = prototype.replace(/__name__/g, index);

// increase the index with one for the next item

            \$collectionHolder.data('index', index + 1);

// Display the form in the page in an li, before the \"Add a tag\" link li

            var \$newFormLi = \$('<li></li>').append(newForm);

            \$newLinkLi.before(\$newFormLi);
             }
    </script>
    <script type=\"text/javascript\">

        \$(document).ready(function() {
            \$('#diagnostic_Diagnostiques').tagsinput();
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.

            var \$container = \$('div#anamnese_symptomes');


            // On ajoute un lien pour ajouter une nouvelle catégorie

            var \$addLink = \$('<a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>');

            \$container.append(\$addLink);


            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.

            \$addLink.click(function(e) {

                addCategory(\$container);

                e.preventDefault(); // évite qu'un # apparaisse dans l'URL

                return false;

            });


            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement

            var index = \$container.find(':input').length;


            // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).

            if (index == 0) {

                addCategory(\$container);

            } else {

                // Pour chaque catégorie déjà existante, on ajoute un lien de suppression

                \$container.children('div').each(function() {

                    addDeleteLink(\$(this));

                });

            }


            // La fonction qui ajoute un formulaire Categorie

            function addCategory(\$container) {

                // Dans le contenu de l'attribut « data-prototype », on remplace :

                // - le texte \"__name__label__\" qu'il contient par le label du champ

                // - le texte \"__name__\" qu'il contient par le numéro du champ

                var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Catégorie n°' + (index+1))

                        .replace(/__name__/g, index));


                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie

                addDeleteLink(\$prototype);


                // On ajoute le prototype modifié à la fin de la balise <div>

                \$container.append(\$prototype);


                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro

                index++;

            }


            // La fonction qui ajoute un lien de suppression d'une catégorie

            function addDeleteLink(\$prototype) {

                // Création du lien

                \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');


                // Ajout du lien

                \$prototype.append(\$deleteLink);


                // Ajout du listener sur le clic du lien

                \$deleteLink.click(function(e) {

                    \$prototype.remove();

                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL

                    return false;

                });

            }

        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 972
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 973
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 974
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lightbox2/dist/css/lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 975
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 976
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 977
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />F
    <link href=\"";
        // line 978
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 979
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 980
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 981
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
    <link href=\"";
        // line 982
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 983
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Medecin:fichepatient2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1640 => 983,  1636 => 982,  1632 => 981,  1628 => 980,  1624 => 979,  1620 => 978,  1616 => 977,  1612 => 976,  1608 => 975,  1604 => 974,  1599 => 973,  1593 => 972,  1412 => 798,  1408 => 797,  1404 => 796,  1400 => 795,  1396 => 794,  1392 => 793,  1388 => 792,  1384 => 791,  1125 => 535,  1121 => 534,  1117 => 533,  1113 => 532,  1109 => 531,  1105 => 530,  1101 => 529,  1097 => 528,  1091 => 527,  1072 => 514,  1066 => 513,  1058 => 510,  1055 => 509,  1052 => 508,  1049 => 507,  1043 => 506,  1040 => 505,  1032 => 503,  1029 => 502,  1026 => 501,  1023 => 500,  1018 => 499,  1015 => 498,  1012 => 497,  1008 => 496,  1002 => 493,  998 => 492,  973 => 469,  967 => 455,  960 => 451,  938 => 431,  932 => 430,  924 => 427,  921 => 426,  918 => 425,  915 => 424,  909 => 423,  906 => 422,  898 => 420,  895 => 419,  892 => 418,  889 => 417,  884 => 416,  881 => 415,  878 => 414,  874 => 413,  868 => 410,  864 => 409,  840 => 387,  834 => 386,  825 => 383,  822 => 382,  819 => 381,  813 => 380,  810 => 379,  802 => 377,  799 => 376,  796 => 375,  793 => 374,  788 => 373,  785 => 372,  782 => 371,  778 => 370,  772 => 367,  768 => 366,  743 => 343,  735 => 333,  731 => 332,  725 => 329,  718 => 324,  714 => 320,  703 => 312,  697 => 309,  686 => 301,  676 => 294,  668 => 289,  613 => 237,  593 => 221,  587 => 220,  583 => 218,  580 => 217,  570 => 215,  562 => 214,  556 => 212,  551 => 211,  549 => 210,  542 => 207,  538 => 205,  536 => 204,  533 => 203,  528 => 202,  524 => 200,  522 => 199,  508 => 189,  502 => 188,  498 => 186,  495 => 185,  486 => 182,  480 => 180,  475 => 179,  473 => 178,  466 => 175,  462 => 173,  460 => 172,  457 => 171,  452 => 170,  448 => 168,  446 => 167,  435 => 158,  432 => 157,  423 => 155,  419 => 154,  414 => 151,  408 => 150,  405 => 149,  403 => 148,  399 => 146,  394 => 144,  389 => 142,  385 => 140,  376 => 138,  372 => 137,  368 => 135,  366 => 134,  362 => 133,  341 => 115,  337 => 114,  332 => 111,  320 => 108,  317 => 107,  312 => 106,  310 => 105,  305 => 102,  302 => 101,  288 => 94,  278 => 91,  272 => 90,  267 => 88,  262 => 86,  257 => 83,  252 => 82,  249 => 81,  246 => 80,  244 => 79,  239 => 76,  236 => 75,  229 => 74,  227 => 73,  220 => 71,  217 => 70,  212 => 69,  209 => 68,  207 => 67,  202 => 64,  200 => 63,  197 => 62,  190 => 61,  188 => 60,  181 => 58,  178 => 57,  174 => 56,  171 => 55,  168 => 54,  166 => 53,  161 => 50,  159 => 49,  147 => 39,  141 => 38,  137 => 37,  133 => 36,  128 => 34,  124 => 33,  120 => 32,  108 => 27,  104 => 26,  100 => 25,  95 => 23,  91 => 22,  87 => 21,  80 => 16,  70 => 7,  64 => 6,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
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
{% block titrepage %}Fiche du Patient{% endblock %}
{% block menu %}
    {% include 'hostooSanteBundle:menus:menudoc.html.twig' %}
{% endblock %}
{% block body %}
    <div class=\"col-lg-12\" id=\"container\">
    <div class=\"btn-group-justified\">
        <a class=\"btn btn-custom\" data-toggle=\"modal\" data-target=\"#tabr1\">Signes vitaux</a>
        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#tabr2\">Consultation</a>
        <a class=\"btn btn-custom\" data-toggle=\"modal\" data-target=\"#tabr3\">Laboratoire</a>
        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#tabr5\">Pharmacie</a>
        <a class=\"btn btn-custom\" data-toggle=\"modal\" data-target=\"#tabr4\">Imagerie</a>
        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#tabr6\">Autres</a>
        {#<a class=\"btn btn-custom hidden\" data-toggle=\"modal\" data-target=\"#tabr7\" >Historique</a>#}
    </div>
        <div class=\"row\" style=\"border: 2px double deepskyblue; border-radius: 5px 5px 5px 5px; padding: 5px \">
            <div class=\"col-lg-9\">
        <div class=\"col-lg-6 col-md-12\">
<dl class=\"dl-horizontal\">
            <dt>Nom :</dt><dd>{{ episode.patient.nom|upper }}</dd>
            <dt>Postnom :</dt><dd>{{ episode.patient.postnom|upper }}</dd>
            <dt>Prenom :</dt><dd>{{ episode.patient.prenom|upper }}</dd>

            <dt>Date de naissance :</dt><dd>{{ episode.patient.datenaissance|date('d-m-Y') }}</dd>
            <dt>Age :</dt><dd>{{ 'now'|date('Y')- episode.patient.datenaissance|date('Y') }}</dd>
            <dt>Sexe :</dt><dd>{% if episode.patient.sexe == true %}M{% else %}F{% endif %}</dd>
</dl>
            </div>
        <div class=\"col-lg-6 col-md-12\">
        <dl class=\"dl-horizontal\">
            <dt>Telephone :</dt><dd>{{ episode.patient.telephone1 }}</dd>
            <dt>Telephone2 :</dt><dd>{{ episode.patient.telephone2 }}</dd>
            <dt>Nationalité :</dt><dd>{{ episode.patient.nationalite|upper }}</dd>

            <dt>Societe :</dt><dd>{{ episode.patient.societe.nom|upper }}</dd>
            <dt>Type de patient :</dt><dd>{{ episode.patient.societe|upper }}</dd>
            {% if patient.formule.nom is defined %}<dt>Formule :</dt><dd>{{ episode.patient.formule.nom|upper }}</dd>{% endif %}
            </dl>
        </div>
                <!-- end col -->


                </div>
            <div class=\" col-lg-3\">
                <h3>Actes Prescrits</h3>
                <table class=\"table table-striped\">

                    {% if (tabacte is not null) %}
                        <tr>
                            <th class=\"bg-success\">Laboratoire</th>
                        </tr>
                        {% set som = 0 %}
                        {% set taillelabo=0 %}

                        {% for tacte in tabacte %}
                            <tr>
                                <td>{{ tacte.designationacte }}<a href=\"{{ path('hostoo_med_suppcte',{'id':taillelabo }) }}\" ><i class=\"fa fa-trash pull-right text-danger\"></i></a></td>
                            </tr>
                            {% set taillelabo = taillelabo + 1 %}
                        {% endfor %}{% endif %}

                    {% if (tabimg is not null) %}
                        <tr>
                            <th class=\"bg-blue\">Imagérie</th>
                        </tr>
                        {% set som = 0 %}
                        {% set tailleimg = 0 %}
                        {% for tacte in tabimg %}
                            <tr>
                                <td>{{ tacte.designationacte }}<a href=\"{{ path('hostoo_med_suppimg',{'id':tailleimg }) }}\" ><i class=\"fa fa-trash pull-right text-danger\"></i></a></td>
                            </tr>
                          {% set tailleimg = tailleimg +1 %}
                        {% endfor %}{% endif %}
                    {% if (tabmed is not null) %}
                        <tr>
                            <th class=\"bg-danger\">Pharmacie</th>
                        </tr>
                        {% set som = 0 %}
                        {% set phar = app.session.get('phar') %}
                        {% set poso = app.session.get('pos') %}
                        {% for tacte in tabmed %}
                            <tr>
                                <td><div class=\"col-lg-12\">
                                        <div class=\"row\">
                                        <div class=\"col-lg-4\">{{ tacte.nom }}</div>
                                            <div class=\"col-lg-6\">
                                        <form class=\"\" action=\"{{ path('hostoo_med_ajoutermed',{'id':tacte.id }) }}\">
                                            <div class=\"row\">
                                                <input type=\"number\" name=\"qte\" onchange=\"this.form.submit()\" value=\"{% if phar[tacte.id] is defined %}{{ phar[tacte.id] }}{% endif %}\" class=\"form-control-static col-lg-6\" >
                                                <input type=\"text\" name=\"pos\" onchange=\"this.form.submit()\" value=\"{% if poso[tacte.id] is defined %} {{ poso[tacte.id] }} {% endif %}\" class=\"form-control-static col-lg-6\" placeholder=\"Posologie\"></div>
                                        </form></div>
                                        <div class=\"col-lg-2\">
                                            <a href=\"{{ path('hostoo_med_suppmed',{'id':tacte.id }) }}\"><i class=\"fa fa-trash right text-danger\"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}{% endif %}
                    {% if (tabautres is not null or tabautres is defined) %}
                        <tr>
                            <th class=\"bg-retina_wood\">Autres</th>
                        </tr>
                        {% set som = 0 %}
                        {% for tacte in tabautres %}
                            <tr>
                                <td>{{ tacte.designationacte }}<a href=\"{{ path('hostoo_med_suppautre',{'id':tacte.id }) }}\" ><i class=\"fa fa-trash pull-right text-danger\"></i></a></td>
                            </tr>
                        {% endfor %}{% endif %}

                    <tr>
                        <td><div class=\"btn-group\">
                                <a href=\"{{ path('hostoo_med_factureactes',{'id':episode.id,'somtot':som}) }}\" class=\"btn btn-success\">Valider les actes</a>
                                <a href=\"{{ path('hostoo_med_resetactes') }}\" class=\"btn btn-danger\">Annuler</a>
                            </div></td>
                    </tr>
                </table>
            </div>
            <div class=\"col-lg-8\">
                                            <div class=\"panel-group\" id=\"accordion\" role=\"tablist\"
                                                 aria-multiselectable=\"true\">
                                                <div class=\"panel panel-primary bx-shadow-none\">
                                                    <div class=\"panel-heading\">
                                                        <div class=\"panel-title\">
                                                                Consultation
                                                                </div>
                                                    </div>
                                                        <div class=\"panel-body\">
                                                            <dl class=\"\">
                                                                consultation

                                                                {{ render(controller('hostooSanteBundle:Consultation:affiche',{'id': episode.id })) }}
                                                                {% if episode.anamnese %}
                                                                <dt>Symptômes dominants</dt>

                                                                {% for t in episode.anamnese.symptomes %}
                                                                    <dd>{{ t.nom~\" \" }}</dd>
                                                                {% endfor %}

                                                                <dt>Compléments</dt>
                                                                <dd>{{ episode.anamnese.complements }}</dd>
                                                                <dt>Hypothèses diagnotiquées</dt>
                                                                <dd>{{ episode.anamnese.autres }}</dd>
                                                                {% endif %}

                                                            </dl>
                                                            {% if episode.diag != null %}

                                                                <strong>Diagnostiques faits</strong> <br/>{% if episode.diag != null %}<span class=\"fa fa-check-circle fa-2x text-success\"></span>{% else %}<span class=\"fa fa-times text-success\"></span>{% endif %}

                                                                <ul class=\"list-unstyled\">

                                                           {% for mydiag in episode.diag.Diagnostiques  %}
                                                               <li>{{ mydiag }}</li>
                                                               {% endfor %}
                                                            </ul>{% endif %}
                                                        </div>
                                                    </div>
                                                <div class=\"panel panel-danger\">
                                                    <div class=\"panel-heading\">
                                                        <div class=\"panel-title\">
                                                                Resultats Laboratoires
                                                        </div>
                                                    </div>
                                                        <div class=\"panel-body\">
                                                            {% if episode.ordonnancelabos == null %}
                                                                <span class=\"alert alert-danger\">Aucun Examen demandé</span>
                                                            {% else %}
                                                                {% for ord in episode.ordonnancelabos %}

                                                                    {% if ord.resultats.count == 0 %}
                                                                        <span class=\"alert alert-warning\">Resultats En Attente</span>
                                                                    {% else %}
                                                                        <h4 class=\"label label-success\">Resultats Labo  du {{ ord.dateordo|date('d-m-Y H:i') }}</h4>
                                                                        <dl class=\"dl-horizontal center-block
                                                           \">
                                                                            {% if ord.resultats.count > 0 %}
                                                                                {% for res in ord.resultats %}
                                                                                    <dt>{{ res.acte.actes.designationacte }}</dt>
                                                                                    <dd>
                                                                                        {{ ord.afficherresultat(res.acte.actes.id) }}
                                                                                    </dd>
                                                                                {% endfor %}
                                                                            {% endif %}
                                                                        </dl>
                                                                    {% endif %}
                                                                {% endfor %}
                                                            {% endif %}    </div>
                                                    </div>
                                                </div>
                                                <div class=\"panel panel-warning\">
                                                    <div class=\"panel-heading\">
                                                        <div class=\"panel-title\">
                                                                Resultats Imagérie
                                                        </div>
                                                    </div>
                                                    <div class=\"panel-body\">
                                                        {% if episode.ordonnanceimgs == null %}
                                                            <span class=\"alert alert-danger\">Aucun Examen demandé</span>
                                                        {% else %}
                                                            {% for ord in episode.ordonnanceimgs %}

                                                                {% if ord.resultats.count == 0 and ord.resultat is not defined %}
                                                                    <span class=\"alert alert-warning\">Resultats En Attente</span>
                                                                {% else %}
                                                                    <h4 class=\"label label-success\">Resultats Imagérie du {{ ord.dateordo|date('d-m-Y H:i') }}</h4>
                                                                    <dl class=\"dl-horizontal center-block
                                                           \">
                                                                        {% if ord.resultats|length >0 %}
                                                                            {% for res in ord.resultats %}
                                                                                <dt>{{ res.acte.actes.designationacte }}</dt>

                                                                                <dd>{% if res.resultat %}{{ res.resultat|raw }}{% else %}En Attente {% endif %}</dd>
                                                                                <dd><a href=\"{{ asset('uploads/imageries/'~res.fichier) }}\"> <img src=\"{{ asset('uploads/imageries/'~res.fichier) }}\" width=\"100px\" height=\"100px\"></a></dd>
                                                                            {% endfor %}
                                                                        {% endif %}
                                                                    </dl>
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% endif %}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
    <!-- Tabs Left -->
    <div class=\"col-lg-9\">

    <div id=\"tabr1\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-full\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Signes Vitaux</h4>
                            </div>
                            <div class=\"modal-body\">
{{ render(controller('hostooSanteBundle:Prelevement:ajouterSVMed',{'id':episode.id })) }}

        </div>
        </div>
        </div>
    </div>
        <div id=\"tabr2\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                <div class=\"modal-dialog-full\">
                        <div class=\"modal-content\">
                           <ul class=\"nav nav-tabs navtab-bg nav-justified\">

                               <li  class=\"active\">
                                   <a href=\"#settings-2\" data-toggle=\"tab\" aria-expanded=\"true\">
                                       <span class=\"visible-xs\"><i class=\"fa fa-cog\"></i></span>
                                       <span class=\"hidden-xs\">Consultation</span>
                                   </a>
                               </li>
                               <li>
                                                        <a href=\"#home-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                                            <span class=\"visible-xs\"><i class=\"fa fa-home\"></i></span>
                                                            <span class=\"hidden-xs\">Anamnèse</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"\">
                                                        <a href=\"#profile-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                                            <span class=\"visible-xs\"><i class=\"fa fa-user\"></i></span>
                                                            <span class=\"hidden-xs\">Antécédents</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"\">
                                                        <a href=\"#messages-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                                            <span class=\"visible-xs\"><i class=\"fa fa-envelope-o\"></i></span>
                                                            <span class=\"hidden-xs\">Examens Physiques</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"\">
                                                        <a href=\"#rdv-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                                            <span class=\"visible-xs\"><i class=\"fa fa-cog\"></i></span>
                                                            <span class=\"hidden-xs\">Rendez-vous</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"\">
                                                        <a href=\"#hist-2\" data-toggle=\"tab\" aria-expanded=\"false\">
                                                            <span class=\"visible-xs\"><i class=\"fa fa-cog\"></i></span>
                                                            <span class=\"hidden-xs\">Historique</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane\" id=\"home-2\">
                                                    <div class=\"row\">
                                                    <div class=\"col-md-8\">
                                                    {{ render(controller('hostooSanteBundle:Anamnese:new',{'id':episode.id })) }}
                                                    </div>
                                                        <div class=\"col-md-4\">
                                                            <a class=\"btn btn-success\" id=\"show_form_symptome\">Ajouter Symptome</a><a class=\"btn btn-danger\" id=\"hide_form_symptome\">Cacher</a>
                                                            <div id=\"add_symptome_form\">
                                                                {{ render(controller('hostooSanteBundle:Symptomes:new')) }}
                                                            </div>
                                                            </div>
                                                    </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"profile-2\">

                                                     {{ render(controller('hostooSanteBundle:Antecedent:antecedentPatient',{'pat':episode.id})) }}

                                                     </div>
                                                    <div class=\"tab-pane\" id=\"messages-2\">
                                                    <div class=\"row\">
                                                    <div class=\"col-md-10 col-md-offset-1\">
                                                    <div class=\"row\">
                                                    <div class=\"col-md-6 col-xs-12\">
                                                    {{ render(controller('hostooSanteBundle:ExamensPhysiques:new',{'id':episode.id })) }}
                                                    </div>
                                                    <div class=\"col-md-6 col-xs-12\">
                                                    {{ render(controller('hostooSanteBundle:ExamensPhysiques:list',{'id':episode.id })) }}
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                  </div>
                                                    <div class=\"tab-pane  active\" id=\"settings-2\">
                                                   <div class=\"\">
                                                       {{ render(controller('hostooSanteBundle:Consultation:new',{'id': episode.id })) }}
                                                       {#
                                                                                                              {{ render(controller('hostooSanteBundle:Medecin:addDiagnostic',{'id':episode.id })) }}
                                                       #}
                                                       </div> </div>
                                                  <div class=\"tab-pane\" id=\"rdv-2\">
                                                    <h1 class=\"\">RDV</h1>
                                                    <div class=\"row\">
                                                    <div class=\"col-md-6 col-xs-12\">
                                                     {{ render(controller('hostooRDVBundle:RDVMed:new',{'id':episode.patient.id })) }}
                                                     </div>
                                                     <div class=\"col-md-6 col-xs-12\">
                                                         {{ episode.patient.id }}
                                                    {{ render(controller('hostooRDVBundle:RDVMed:list',{'pat':episode.patient.id })) }}
                                                    </div>
                                                   </div>

                                                     </div>
                                                    {#
                                                    <div class=\"tab-pane\" id=\"hist-2\">
                                                        <p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as to middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter change six did all. </p>
                                                        <p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>
                                                    </div>#}
                                                    <div class=\"row\">
                                                    <button type=\"button\" class=\"pull-right btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
                                                    </div>
                                                </div>




            </div>
            </div>
            </div>
        <div id=\"tabr3\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
              <div class=\"modal-dialog modal-full\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Les examens du laboratoire</h4>
                            </div>
                            <div class=\"modal-body\">
            <div class=\"panel\">


                           <div class=\"panel-body\">
                            <form class=\"form-inline\"  method=\"post\" action=\"{{ path('hostoo_med_ajoutercte') }}\">
    <input type=\"hidden\" name=\"episode\" value=\"{{ episode.id }}\">
    <select name=\"labo[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select3\" >

                                {% for acte in labos %}
                                    {% set tampon=0 %}
                                    {% if episode.patient.societe.id !=15 and episode.patient.formule != null %}
                                        {% for pacte in episode.patient.formule.forsoc %}
                                            {% if acte.id == pacte.acte.id %}
                                                {% if pacte.societe.id==episode.patient.societe.id %}
                                                    {% set tampon=acte.id %}
                                                    <option value=\"{{ pacte.acte.id }}\" class=\"bg-success\">{{ pacte.acte.designationacte }}</option>
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                {% if acte.id != tampon %}
                                <option value=\"{{ acte.id }}\">{{ acte.designationacte }}</option>

                                {% endif %}
                                {% endfor %}


                                </select>
                                <input type=\"submit\" class=\"btn btn-custom\">
                                </form>
                                </div>
                </div>
</div>
</div>
</div>
        </div>
        <div id=\"tabr4\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
             <div class=\"modal-dialog modal-full\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Les examens d'imagérie</h4>
                            </div>
                            <div class=\"modal-body\">
            <div class=\"panel\">

    <div class=\"panel-body\">
                               <form class=\"form-inline\"  method=\"post\" action=\"{{ path('hostoo_med_ajouterimg') }}\">
    <input type=\"hidden\" name=\"episode\" value=\"{{ episode.id }}\">
    <select name=\"imgr[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select4\" >

                                {% for acte in imgs %}
        {% set tampon=0 %}
        {% if episode.patient.societe.id !=15 and episode.patient.formule != null %}
            {% for pacte in episode.patient.formule.forsoc %}
                {% if acte.id == pacte.acte.id %}
                    {% if pacte.societe.id==episode.patient.societe.id %}
                        {% set tampon=acte.id %}
                        <option value=\"{{ pacte.acte.id }}\" class=\"bg-success\">{{ pacte.acte.designationacte }}</option>
                    {% endif %}
                {% endif %}
            {% endfor %}
        {% endif %}
        {% if acte.id != tampon %}

                                <option value=\"{{ acte.id }}\">{{ acte.designationacte }}</option>

        {% endif %}
                                {% endfor %}


                                </select>
                                <input type=\"submit\" class=\"btn btn-custom\">
                                </form></div>
                </div>
        </div>
        </div>
        </div>
        </div>
        <div id=\"tabr5\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
         <div class=\"modal-dialog modal-full\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Pharmacie</h4>
                            </div>
                            <div class=\"modal-body\">
                                <div class=row>
                                <div class=\"col-lg-8 col-md-12\">
                                    {{ render(controller('hostooSanteBundle:Ordonnance:new',{'id':episode.id })) }}

                                     </div>
                                <div class=\"col-lg-4 col-md-12\">
                                    {{ render(controller('hostooSanteBundle:Ordonnance:EpisodeOrdonnance',{'id':episode.id })) }}
                                </div>
                                </div>
             {#<form class=\"form-inline\"  method=\"post\" action=\"{{ path('hostoo_med_ajouterprod') }}\">
    <input type=\"hidden\" name=\"episode\" value=\"{{ episode.id }}\">
    <select name=\"qte[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select9\" >
        {% for produit in produits %}
                    <option value=\"{{ produit.id }}\">{{ produit.nom }} - {{ produit.grammage }} mg - {{ produit.prix }}</option>

                {% endfor %}
</select>
                 <input type=\"submit\" class=\"btn btn-custom\">

             </form>#}
</div>
</div>
</div>
           </div>

            <script>
                \$().ready(function () {
                    \$('#example').DataTable();
                })
            </script>
        </div>

        <div id=\"tabr6\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
            <div class=\"modal-dialog modal-full\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                        <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Les actes supplementaires</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"panel\">

                                    <div class=\"panel-body\">
                                        <form class=\"form-inline\"  method=\"post\" action=\"{{ path('hostoo_med_ajouterimg') }}\">
                                            <input type=\"hidden\" name=\"episode\" value=\"{{ episode.id }}\">
                                            <select name=\"aut[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select6\" >

                                                {% for acte in actes %}
                                                {% set tampon=0 %}
                                                {% if episode.patient.societe.id !=15 and episode.patient.formule != null %}
                                                    {% for pacte in episode.patient.formule.forsoc %}
                                                        {% if acte.id == pacte.acte.id %}
                                                            {% if pacte.societe.id==episode.patient.societe.id %}
                                                                {% set tampon=acte.id %}
                                                                <option value=\"{{ pacte.acte.id }}\" class=\"bg-success\">{{ pacte.acte.designationacte }}</option>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                                {% if acte.id != tampon %}

                                                    <option value=\"{{ acte.id }}\">{{ acte.designationacte }}</option>

                                                {% endif %}
                                                {% endfor %}


                                            </select>
                                            <input type=\"submit\" class=\"btn btn-custom\">
                                        </form></div>
                            </div>
                    </div>
                </div>
        </div>
</div>

</div>
{% endblock %}
{% block javascripts %}
{{ parent() }}
    <script src=\"{{ asset('lightbox2/dist/js/lightbox-plus-jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/tetranzselect2entity/js/select2entity.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}\"></script>


    <script>
        \$(function () {
           \$('#listepatients').dataTable();
        });
    </script>
    <script>

\$(function () {
    \$('#add_symptome_form').hide();
    \$('#hide_symptome_form').hide();
    \$('#show_form_symptome').on('click',function(e){
        e.preventDefault();
        \$('#add_symptome_form').show();
        \$('#hide_symptome_form').show();
        \$(this).hide();
    });
    \$('#hide_form_symptome').on('click',function(e){
        e.preventDefault();
        \$('#add_symptome_form').hide();
        \$('#show_form_symptome').show();
        \$(this).hide();
    });
    var dataAppleDevices = [{id: 1, text: \"iPhone\"}, {id: 2, text: \"iPad\"}, {id: 3, text: \"iPod\"}];
    var dataSamsungDevices = [{id: 1, text: \"Galaxy S\"}, {id: 2, text: \"Galaxy Tab\"}, {id: 3, text: \"Galaxy A\"}];

        //advance multiselect start
        var \$inp=\$('#hypodiagno');

    //\$('.selecta').select2();
    \$('.selecthd').select2();
    \$('.mypro').select2();
    \$('.mypro-limiting').select2({
        placeholder: \"Choisir les actes\"
    });
    });
/** pharmacie **/
\$('#my_multi_select9').multiSelect({
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

/*** labo ***/
        \$('#my_multi_select3').multiSelect({
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
    \$(\".select2\").select2().attr('name','acteslabo[]');
    \$(\".selecta\").select2();

    \$(\".selectdc\").select2();


   // \$(\".selecthd\").select2();

    \$(\".select2-limiting\").select2({
        placeholder: \"Choisir les actes\"
    });

 //img
        \$('#my_multi_select4').multiSelect({
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
    \$(\".select3\").select2().attr('name','acteslabo[]');

    \$(\".select3-limiting\").select2({
        placeholder: \"Choisir les actes\"
    });
    //advance multiselect start
\$('#my_multi_select5').multiSelect({
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
    \$('#my_multi_select6').multiSelect({
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
    \$(\".select4\").select2().attr('name','acteslabo[]');

    \$(\".select4-limiting\").select2({
        placeholder: \"Choisir les actes\"
    });

    </script>
       <script>
        \$('#signes_vitaux_taille').on('change',function () {
            var poids=\$('#signes_vitaux_poids').val();
            \$('#signes_vitaux_imc').val(poids/(Math.pow(\$(this).val(),2)));
        });

        \$('#signes_vitaux_pp').on('change',function () {
            var poids=\$('#signes_vitaux_pa').val();
            \$('#signes_vitaux_wrh').val(\$(this).val()/poids,2);
        });
    </script>
    <script src=\"{{ asset('assets/js/signesvitaux.js') }}\"></script>
    <script src=\"{{ asset('assets/js/rdvmed.js') }}\"></script>
    <script src=\"{{ asset('assets/js/exphys.js') }}\"></script>
    <script src=\"{{ asset('assets/js/anamnese.js') }}\"></script>
    <script src=\"{{ asset('assets/js/antecedent.js') }}\"></script>
    <script src=\"{{ asset('assets/js/symptomes.js') }}\"></script>
    <script src=\"{{ asset('ckeditor/ckeditor.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}\" rel=\"stylesheet\"></script>
    <script>
\tinitSample();
\thistorique();
\tcomplements();
</script>
    <script type=\"text/javascript\">
        var \$collectionHolder;
        // setup an \"add a tag\" link
        var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link btn btn-info\" title=\"Ajouter un produit\"><i class=\"fa fa-plus\"></i></a>');
        var \$newLinkLi = \$('<li></li>').append(\$addTagLink);
        jQuery(document).ready(function() {
// Get the ul that holds the collection of tags
            \$collectionHolder = \$('div#ordonnance_posologie');
            \$collectionHolder.addClass('list-unstyled form-group');
// add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi.addClass('col-md-3'));
// count the current form inputs we have (e.g. 2), use that as the new
// index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);
            \$addTagLink.on('click', function(e) {
// prevent the link from creating a \"#\" on the URL
                e.preventDefault();
// add a new tag form (see next code block)
                addTagForm(\$collectionHolder, \$newLinkLi);
            });
        });
        function addTagForm(\$collectionHolder, \$newLinkLi) {

// Get the data-prototype explained earlier

            var prototype = \$collectionHolder.data('prototype');


// get the new index

            var index = \$collectionHolder.data('index');


// Replace '__name__' in the prototype's HTML to

// instead be a number based on how many items we have

            var newForm = prototype.replace(/__name__/g, index);

// increase the index with one for the next item

            \$collectionHolder.data('index', index + 1);

// Display the form in the page in an li, before the \"Add a tag\" link li

            var \$newFormLi = \$('<li></li>').append(newForm);

            \$newLinkLi.before(\$newFormLi);
             }
    </script>
    <script type=\"text/javascript\">

        \$(document).ready(function() {
            \$('#diagnostic_Diagnostiques').tagsinput();
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.

            var \$container = \$('div#anamnese_symptomes');


            // On ajoute un lien pour ajouter une nouvelle catégorie

            var \$addLink = \$('<a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>');

            \$container.append(\$addLink);


            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.

            \$addLink.click(function(e) {

                addCategory(\$container);

                e.preventDefault(); // évite qu'un # apparaisse dans l'URL

                return false;

            });


            // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement

            var index = \$container.find(':input').length;


            // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).

            if (index == 0) {

                addCategory(\$container);

            } else {

                // Pour chaque catégorie déjà existante, on ajoute un lien de suppression

                \$container.children('div').each(function() {

                    addDeleteLink(\$(this));

                });

            }


            // La fonction qui ajoute un formulaire Categorie

            function addCategory(\$container) {

                // Dans le contenu de l'attribut « data-prototype », on remplace :

                // - le texte \"__name__label__\" qu'il contient par le label du champ

                // - le texte \"__name__\" qu'il contient par le numéro du champ

                var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Catégorie n°' + (index+1))

                        .replace(/__name__/g, index));


                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie

                addDeleteLink(\$prototype);


                // On ajoute le prototype modifié à la fin de la balise <div>

                \$container.append(\$prototype);


                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro

                index++;

            }


            // La fonction qui ajoute un lien de suppression d'une catégorie

            function addDeleteLink(\$prototype) {

                // Création du lien

                \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');


                // Ajout du lien

                \$prototype.append(\$deleteLink);


                // Ajout du listener sur le clic du lien

                \$deleteLink.click(function(e) {

                    \$prototype.remove();

                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL

                    return false;

                });

            }

        });

    </script>

{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('lightbox2/dist/css/lightbox.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/jquery-datatables-editable/datatables.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\" />F
    <link href=\"{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/multiselect/css/multi-select.css') }}\"  rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2-bootstrap.css') }}\" rel=\"stylesheet\" />
{% endblock %}
", "hostooSanteBundle:Medecin:fichepatient2.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Medecin/fichepatient2.html.twig");
    }
}
