<?php

/* hostooHospisBundle:hospitalisation:show.html.twig */
class __TwigTemplate_162545f589cb6912e9079f2401655ad8a7db0fcdd363e52176f1cbf27471ee7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooHospisBundle:hospitalisation:show.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooHospisBundle:hospitalisation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MEDECIN")) {
            // line 5
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "hostooHospisBundle:hospitalisation:show.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_INFIRMIER")) {
            // line 7
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menunrs.html.twig", "hostooHospisBundle:hospitalisation:show.html.twig", 7)->display($context);
            // line 8
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 11
        echo "        <div class=\"btn-group pull-right m-t-5 m-b-20\">
            <button type=\"button\" class=\"btn btn-custom dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"false\">Actions <span class=\"m-l-5\"><i class=\"fa fa-cog\"></i></span></button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a data-toggle=\"modal\" data-target=\"#tabr1\">Consultation</a></li>
                <li><a data-toggle=\"modal\" data-target=\"#tabr3\">Laboratoire</a></li>
                <li><a data-toggle=\"modal\" data-target=\"#tabr5\">Pharmacie</a></li>
                <li><a data-toggle=\"modal\" data-target=\"#tabr4\">Imagerie</a></li>
                <li><a data-toggle=\"modal\" data-target=\"#tabr6\">Autres</a></li>
                <li><a data-toggle=\"modal\" data-target=\"#tabr7\">Traitement</a></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    <h1>Hospitalisation</h1>

    <div class=\"row\">

    <div class=\"col-md-8\">
        <div class=\"card-box\">
        <h3 class=\"text-center\">Informations</h3>
        <div class=\"table-responsive\">
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>N°</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'entrée</th>
                <td>";
        // line 41
        if ($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "datehospi", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "datehospi", []), "d/m/Y H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Date de sortie</th>
                <td>";
        // line 45
        if ($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "datesortie", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "datesortie", []), "d/m/Y H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Type d'hospitalisation</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "typehospitalisation", []), "html", null, true);
        echo "</td>
            </tr>
        <tr>
            <th>Médecin</th>
            <td>";
        // line 53
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "medecin", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "medecin", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "medecin", []), "prenom", [])), "html", null, true);
        echo "</td>
        </tr>
            <tr>
                <th>Patient</th>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "html", null, true);
        echo "</td>
            </tr>
            <tr><th>Chambre</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "chambre", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Societé</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "societe", []), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
        </div>
    <ul class=\"list-inline list-unstyled\">
        <li>
            <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hospitalisation_index");
        echo "\" class=\"btn btn-info\">Liste des hopitalisations</a>
        </li>
        <li>
            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hospitalisation_edit", ["id" => $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modifier</a>
        </li>
        <li>
            <a href=\"#\" class=\"btn btn-default\"> Cloturer</a>
        </li>
        <li>
            ";
        // line 80
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\">
            ";
        // line 82
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>

</div>
    </div>
        <div class=\"col-md-4\">


            <div class=\"card-box\">
            <h3 class=\"text-center\">Panier des actes medicaux</h3>
            <table class=\"table table-striped\">

                ";
        // line 95
        if ( !(null === ($context["tabacte"] ?? $this->getContext($context, "tabacte")))) {
            // line 96
            echo "                    <tr>
                        <th class=\"bg-success\">Laboratoire</th>
                    </tr>
                    ";
            // line 99
            $context["som"] = 0;
            // line 100
            echo "                    ";
            $context["taillelabo"] = 0;
            // line 101
            echo "
                    ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabacte"] ?? $this->getContext($context, "tabacte")));
            foreach ($context['_seq'] as $context["_key"] => $context["tacte"]) {
                // line 103
                echo "                        <tr>
                            <td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["tacte"], "designationacte", []), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_suppcte", ["id" => ($context["taillelabo"] ?? $this->getContext($context, "taillelabo"))]), "html", null, true);
                echo "\" ><i class=\"fa fa-trash pull-right text-danger\"></i></a></td>
                        </tr>
                        ";
                // line 106
                $context["taillelabo"] = (($context["taillelabo"] ?? $this->getContext($context, "taillelabo")) + 1);
                // line 107
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tacte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 108
        echo "
                ";
        // line 109
        if ( !(null === ($context["tabimg"] ?? $this->getContext($context, "tabimg")))) {
            // line 110
            echo "                    <tr>
                        <th class=\"bg-blue\">Imagérie</th>
                    </tr>
                    ";
            // line 113
            $context["som"] = 0;
            // line 114
            echo "                    ";
            $context["tailleimg"] = 0;
            // line 115
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabimg"] ?? $this->getContext($context, "tabimg")));
            foreach ($context['_seq'] as $context["_key"] => $context["tacte"]) {
                // line 116
                echo "                        <tr>
                            <td>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["tacte"], "designationacte", []), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_suppimg", ["id" => ($context["tailleimg"] ?? $this->getContext($context, "tailleimg"))]), "html", null, true);
                echo "\" ><i class=\"fa fa-trash pull-right text-danger\"></i></a></td>
                        </tr>
                        ";
                // line 119
                $context["tailleimg"] = (($context["tailleimg"] ?? $this->getContext($context, "tailleimg")) + 1);
                // line 120
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tacte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 121
        echo "                ";
        if ( !(null === ($context["tabmed"] ?? $this->getContext($context, "tabmed")))) {
            // line 122
            echo "                    <tr>
                        <th class=\"bg-danger\">Pharmacie</th>
                    </tr>
                    ";
            // line 125
            $context["som"] = 0;
            // line 126
            echo "                    ";
            $context["phar"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "phar"], "method");
            // line 127
            echo "                    ";
            $context["poso"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "pos"], "method");
            // line 128
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabmed"] ?? $this->getContext($context, "tabmed")));
            foreach ($context['_seq'] as $context["_key"] => $context["tacte"]) {
                // line 129
                echo "                        <tr>
                            <td><div class=\"col-lg-12\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\">";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["tacte"], "nom", []), "html", null, true);
                echo "</div>
                                        <div class=\"col-lg-6\">
                                            <form class=\"\" action=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_ajoutermed", ["id" => $this->getAttribute($context["tacte"], "id", [])]), "html", null, true);
                echo "\">
                                                <div class=\"row\">
                                                    <input type=\"number\" name=\"qte\" onchange=\"this.form.submit()\" value=\"";
                // line 136
                if ($this->getAttribute(($context["phar"] ?? null), $this->getAttribute($context["tacte"], "id", []), [], "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["phar"] ?? $this->getContext($context, "phar")), $this->getAttribute($context["tacte"], "id", []), [], "array"), "html", null, true);
                }
                echo "\" class=\"form-control-static col-lg-6\" >
                                                    <input type=\"text\" name=\"pos\" onchange=\"this.form.submit()\" value=\"";
                // line 137
                if ($this->getAttribute(($context["poso"] ?? null), $this->getAttribute($context["tacte"], "id", []), [], "array", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["poso"] ?? $this->getContext($context, "poso")), $this->getAttribute($context["tacte"], "id", []), [], "array"), "html", null, true);
                    echo " ";
                }
                echo "\" class=\"form-control-static col-lg-6\" placeholder=\"Posologie\"></div>
                                            </form></div>
                                        <div class=\"col-lg-2\">
                                            <a href=\"";
                // line 140
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
        // line 147
        echo "                ";
        if (( !(null === ($context["tabautres"] ?? $this->getContext($context, "tabautres"))) || (isset($context["tabautres"]) || array_key_exists("tabautres", $context)))) {
            // line 148
            echo "                    <tr>
                        <th class=\"bg-retina_wood\">Autres</th>
                    </tr>
                    ";
            // line 151
            $context["som"] = 0;
            // line 152
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabautres"] ?? $this->getContext($context, "tabautres")));
            foreach ($context['_seq'] as $context["_key"] => $context["tacte"]) {
                // line 153
                echo "                        <tr>
                            <td>";
                // line 154
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
        // line 157
        echo "
                <tr>
                    <td><div class=\"btn-group\">
                            <a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facturer_actes_tout", ["id" => $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "id", [])]), "html", null, true);
        echo "\" class=\"btn green\">Valider les actes</a>
                            <a href=\"";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_resetactes");
        echo "\" class=\"btn red\">Annuler</a>
                        </div></td>
                </tr>
            </table>
        </div>

</div>
</div>
<div class=\"row\">

    <div class=\"col-md-4\">
        <div class=\"card-box\">
        <h3>Examens laboratoire</h3>
            <dl>
                ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "ordonnancelabos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 176
            echo "                ";
            if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0)) {
                // line 177
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
                foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                    // line 178
                    echo "                        <dt>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                    echo "</dt>
                        <dd>
                            ";
                    // line 180
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ord"], "afficherresultat", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "id", [])], "method"), "html", null, true);
                    echo "
                        </dd>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "                ";
            }
            // line 184
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "            </dl>
    </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card-box\">
        <h3>Examens Imagerie</h3>
            <dl>
                ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "ordonnanceimgs", []));
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 193
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0)) {
                // line 194
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
                foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                    // line 195
                    echo "                            <dt>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                    echo "</dt>
                            <dd>
                                ";
                    // line 197
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ord"], "afficherresultat", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "id", [])], "method"), "html", null, true);
                    echo "
                            </dd>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "                    ";
            }
            // line 201
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "            </dl>
    </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card-box\">
            <h3>autres actes </h3>
            <dl>
                ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "ordonnanceimgs", []));
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 210
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0)) {
                // line 211
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
                foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                    // line 212
                    echo "                            <dt>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                    echo "</dt>
                            <dd>
                                ";
                    // line 214
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ord"], "afficherresultat", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "id", [])], "method"), "html", null, true);
                    echo "
                            </dd>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "                    ";
            }
            // line 218
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "            </dl>
        </div>
    </div>
</div>
    <div class=\"tab-content\">
        <div id=\"tabr1\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
            <div class=\"modal-dialog modal-full\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                        <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Consultation</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"panel\">


                            <div class=\"panel-body\">
                                ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Consultation:newConsult", ["id" => $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "id", [])]));
        echo "
                            </div>
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
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("labo_actes");
        echo "\">
                                    <input type=\"hidden\" name=\"hospitalisation\" value=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "id", []), "html", null, true);
        echo "\">
                                    <select name=\"labo[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select3\" >

                                        ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["labos"] ?? $this->getContext($context, "labos")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 260
            echo "                                            ";
            $context["tampon"] = 0;
            // line 261
            echo "                                            ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "societe", []), "id", []) != 15) && ($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "formule", []) != null))) {
                // line 262
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "formule", []), "forsoc", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pacte"]) {
                    // line 263
                    echo "                                                    ";
                    if (($this->getAttribute($context["acte"], "id", []) == $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []))) {
                        // line 264
                        echo "                                                        ";
                        if (($this->getAttribute($this->getAttribute($context["pacte"], "societe", []), "id", []) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "societe", []), "id", []))) {
                            // line 265
                            echo "                                                            ";
                            $context["tampon"] = $this->getAttribute($context["acte"], "id", []);
                            // line 266
                            echo "                                                            <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []), "html", null, true);
                            echo "\" class=\"bg-success\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "designationacte", []), "html", null, true);
                            echo "</option>
                                                        ";
                        }
                        // line 268
                        echo "                                                    ";
                    }
                    // line 269
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 270
                echo "                                            ";
            }
            // line 271
            echo "                                            ";
            if (($this->getAttribute($context["acte"], "id", []) != ($context["tampon"] ?? $this->getContext($context, "tampon")))) {
                // line 272
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo "</option>

                                            ";
            }
            // line 275
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
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
        // line 298
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("img_actes");
        echo "\">
                                    <input type=\"hidden\" name=\"hospitalisation\" value=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "id", []), "html", null, true);
        echo "\">
                                    <select name=\"imgr[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select4\" >

                                        ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imgs"] ?? $this->getContext($context, "imgs")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 303
            echo "                                            ";
            $context["tampon"] = 0;
            // line 304
            echo "                                            ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "societe", []), "id", []) != 15) && ($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "formule", []) != null))) {
                // line 305
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "formule", []), "forsoc", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pacte"]) {
                    // line 306
                    echo "                                                    ";
                    if (($this->getAttribute($context["acte"], "id", []) == $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []))) {
                        // line 307
                        echo "                                                        ";
                        if (($this->getAttribute($this->getAttribute($context["pacte"], "societe", []), "id", []) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "societe", []), "id", []))) {
                            // line 308
                            echo "                                                            ";
                            $context["tampon"] = $this->getAttribute($context["acte"], "id", []);
                            // line 309
                            echo "                                                            <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []), "html", null, true);
                            echo "\" class=\"bg-success\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "designationacte", []), "html", null, true);
                            echo "</option>
                                                        ";
                        }
                        // line 311
                        echo "                                                    ";
                    }
                    // line 312
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 313
                echo "                                            ";
            }
            // line 314
            echo "                                            ";
            if (($this->getAttribute($context["acte"], "id", []) != ($context["tampon"] ?? $this->getContext($context, "tampon")))) {
                // line 315
                echo "
                                                <option value=\"";
                // line 316
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo "</option>

                                            ";
            }
            // line 319
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
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
                            <div class=\"col-lg-6 col-md-12\">
                                ";
        // line 340
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Ordonnance:newHospis", ["id" => $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "id", [])]));
        echo "

                            </div>
                            <div class=\"col-lg-6 col-md-12\">
                                ";
        // line 344
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Ordonnance:hospitalisationOrdonnance", ["id" => $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "id", [])]));
        echo "
                            </div>
                        </div>
                        ";
        // line 358
        echo "                    </div>
                </div>
            </div>
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
        // line 373
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("autres_actes_hop");
        echo "\">
                                    <input type=\"hidden\" name=\"episode\" value=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "id", []), "html", null, true);
        echo "\">
                                    <select name=\"aut[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select6\" >

                                        ";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actes"] ?? $this->getContext($context, "actes")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 378
            echo "                                            ";
            $context["tampon"] = 0;
            // line 379
            echo "                                            ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "societe", []), "id", []) != 15) && ($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "formule", []) != null))) {
                // line 380
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "formule", []), "forsoc", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pacte"]) {
                    // line 381
                    echo "                                                    ";
                    if (($this->getAttribute($context["acte"], "id", []) == $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []))) {
                        // line 382
                        echo "                                                        ";
                        if (($this->getAttribute($this->getAttribute($context["pacte"], "societe", []), "id", []) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["hospitalisation"] ?? $this->getContext($context, "hospitalisation")), "patient", []), "societe", []), "id", []))) {
                            // line 383
                            echo "                                                            ";
                            $context["tampon"] = $this->getAttribute($context["acte"], "id", []);
                            // line 384
                            echo "                                                            <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []), "html", null, true);
                            echo "\" class=\"bg-success\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "designationacte", []), "html", null, true);
                            echo "</option>
                                                        ";
                        }
                        // line 386
                        echo "                                                    ";
                    }
                    // line 387
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 388
                echo "                                            ";
            }
            // line 389
            echo "                                            ";
            if (($this->getAttribute($context["acte"], "id", []) != ($context["tampon"] ?? $this->getContext($context, "tampon")))) {
                // line 390
                echo "
                                                <option value=\"";
                // line 391
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo "</option>

                                            ";
            }
            // line 394
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
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
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 408
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 409
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tetranzselect2entity/js/select2entity.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/summernote/summernote.min.js"), "html", null, true);
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
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/signesvitaux.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/rdvmed.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/exphys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/anamnese.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/antecedent.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/symptomes.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/samples/js/sample.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\"></script>
    <script>
        initSample();
        historique();
        complements();
    </script>
    <script type=\"text/javascript\">
        var \$collectionHolder;
        // setup an \"add a tag\" link
        var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link btn btn-info\" title=\"Ajouter un produit\"><i class=\"fa fa-plus\"></i></a>');
        var \$newLinkLi = \$('<li></li>').append(\$addTagLink);
        jQuery(document).ready(function() {
// Get the ul that holds the collection of tags
            \$collectionHolder = \$('div#ordonnance_posologie');
// add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);
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

    <script>

        \$(function(){

            \$('.summernote').summernote({
                height: 350,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });

            \$('.inline-editor').summernote({
                airMode: true
            });

        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 869
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 870
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link href=\"";
        // line 872
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/summernote/summernote.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 874
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 875
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 876
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 877
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 878
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 879
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
    <link href=\"";
        // line 880
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 881
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooHospisBundle:hospitalisation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 881,  1454 => 880,  1450 => 879,  1446 => 878,  1442 => 877,  1438 => 876,  1434 => 875,  1430 => 874,  1426 => 873,  1422 => 872,  1416 => 870,  1410 => 869,  1212 => 678,  1208 => 677,  1204 => 676,  1200 => 675,  1196 => 674,  1192 => 673,  1188 => 672,  1184 => 671,  1180 => 670,  923 => 416,  919 => 415,  915 => 414,  911 => 413,  907 => 412,  903 => 411,  899 => 410,  894 => 409,  888 => 408,  869 => 395,  863 => 394,  855 => 391,  852 => 390,  849 => 389,  846 => 388,  840 => 387,  837 => 386,  829 => 384,  826 => 383,  823 => 382,  820 => 381,  815 => 380,  812 => 379,  809 => 378,  805 => 377,  799 => 374,  795 => 373,  778 => 358,  772 => 344,  765 => 340,  743 => 320,  737 => 319,  729 => 316,  726 => 315,  723 => 314,  720 => 313,  714 => 312,  711 => 311,  703 => 309,  700 => 308,  697 => 307,  694 => 306,  689 => 305,  686 => 304,  683 => 303,  679 => 302,  673 => 299,  669 => 298,  645 => 276,  639 => 275,  630 => 272,  627 => 271,  624 => 270,  618 => 269,  615 => 268,  607 => 266,  604 => 265,  601 => 264,  598 => 263,  593 => 262,  590 => 261,  587 => 260,  583 => 259,  577 => 256,  573 => 255,  551 => 236,  532 => 219,  526 => 218,  523 => 217,  514 => 214,  508 => 212,  503 => 211,  500 => 210,  496 => 209,  487 => 202,  481 => 201,  478 => 200,  469 => 197,  463 => 195,  458 => 194,  455 => 193,  451 => 192,  442 => 185,  436 => 184,  433 => 183,  424 => 180,  418 => 178,  413 => 177,  410 => 176,  406 => 175,  389 => 161,  385 => 160,  380 => 157,  368 => 154,  365 => 153,  360 => 152,  358 => 151,  353 => 148,  350 => 147,  336 => 140,  326 => 137,  320 => 136,  315 => 134,  310 => 132,  305 => 129,  300 => 128,  297 => 127,  294 => 126,  292 => 125,  287 => 122,  284 => 121,  277 => 120,  275 => 119,  268 => 117,  265 => 116,  260 => 115,  257 => 114,  255 => 113,  250 => 110,  248 => 109,  245 => 108,  238 => 107,  236 => 106,  229 => 104,  226 => 103,  222 => 102,  219 => 101,  216 => 100,  214 => 99,  209 => 96,  207 => 95,  191 => 82,  186 => 80,  177 => 74,  171 => 71,  161 => 64,  154 => 60,  148 => 57,  141 => 53,  134 => 49,  125 => 45,  116 => 41,  109 => 37,  95 => 25,  89 => 24,  70 => 11,  64 => 10,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  38 => 3,  11 => 1,);
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
    {% if is_granted('ROLE_MEDECIN') %}
        {% include 'hostooSanteBundle:menus:menudoc.html.twig' %}
    {% elseif  is_granted('ROLE_INFIRMIER') %}
        {% include 'hostooSanteBundle:menus:menunrs.html.twig' %}
    {% endif %}
{% endblock %}
{% block options %}
        <div class=\"btn-group pull-right m-t-5 m-b-20\">
            <button type=\"button\" class=\"btn btn-custom dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"false\">Actions <span class=\"m-l-5\"><i class=\"fa fa-cog\"></i></span></button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a data-toggle=\"modal\" data-target=\"#tabr1\">Consultation</a></li>
                <li><a data-toggle=\"modal\" data-target=\"#tabr3\">Laboratoire</a></li>
                <li><a data-toggle=\"modal\" data-target=\"#tabr5\">Pharmacie</a></li>
                <li><a data-toggle=\"modal\" data-target=\"#tabr4\">Imagerie</a></li>
                <li><a data-toggle=\"modal\" data-target=\"#tabr6\">Autres</a></li>
                <li><a data-toggle=\"modal\" data-target=\"#tabr7\">Traitement</a></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div>
{% endblock %}
{% block body %}
    <h1>Hospitalisation</h1>

    <div class=\"row\">

    <div class=\"col-md-8\">
        <div class=\"card-box\">
        <h3 class=\"text-center\">Informations</h3>
        <div class=\"table-responsive\">
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>N°</th>
                <td>{{ hospitalisation.id }}</td>
            </tr>
            <tr>
                <th>Date d'entrée</th>
                <td>{% if hospitalisation.datehospi %}{{ hospitalisation.datehospi|date('d/m/Y H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Date de sortie</th>
                <td>{% if hospitalisation.datesortie %}{{ hospitalisation.datesortie|date('d/m/Y H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Type d'hospitalisation</th>
                <td>{{ hospitalisation.typehospitalisation }}</td>
            </tr>
        <tr>
            <th>Médecin</th>
            <td>{{ hospitalisation.medecin.nom~\" \"~hospitalisation.medecin.postnom~\" \"~hospitalisation.medecin.prenom }}</td>
        </tr>
            <tr>
                <th>Patient</th>
            <td>{{ hospitalisation.patient }}</td>
            </tr>
            <tr><th>Chambre</th>
                <td>{{ hospitalisation.chambre }}</td>
            </tr>
            <tr>
                <th>Societé</th>
                <td>{{ hospitalisation.patient.societe }}</td>
        </tr>
        </tbody>
    </table>
        </div>
    <ul class=\"list-inline list-unstyled\">
        <li>
            <a href=\"{{ path('hospitalisation_index') }}\" class=\"btn btn-info\">Liste des hopitalisations</a>
        </li>
        <li>
            <a href=\"{{ path('hospitalisation_edit', { 'id': hospitalisation.id }) }}\" class=\"btn btn-warning\">Modifier</a>
        </li>
        <li>
            <a href=\"#\" class=\"btn btn-default\"> Cloturer</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\">
            {{ form_end(delete_form) }}
        </li>
    </ul>

</div>
    </div>
        <div class=\"col-md-4\">


            <div class=\"card-box\">
            <h3 class=\"text-center\">Panier des actes medicaux</h3>
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
                            <a href=\"{{ path('facturer_actes_tout',{'id':hospitalisation.id }) }}\" class=\"btn green\">Valider les actes</a>
                            <a href=\"{{ path('hostoo_med_resetactes') }}\" class=\"btn red\">Annuler</a>
                        </div></td>
                </tr>
            </table>
        </div>

</div>
</div>
<div class=\"row\">

    <div class=\"col-md-4\">
        <div class=\"card-box\">
        <h3>Examens laboratoire</h3>
            <dl>
                {% for ord in hospitalisation.ordonnancelabos %}
                {% if ord.resultats.count > 0 %}
                    {% for res in ord.resultats %}
                        <dt>{{ res.acte.actes.designationacte }}</dt>
                        <dd>
                            {{ ord.afficherresultat(res.acte.actes.id) }}
                        </dd>
                    {% endfor %}
                {% endif %}
                {% endfor %}
            </dl>
    </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card-box\">
        <h3>Examens Imagerie</h3>
            <dl>
                {% for ord in hospitalisation.ordonnanceimgs %}
                    {% if ord.resultats.count > 0 %}
                        {% for res in ord.resultats %}
                            <dt>{{ res.acte.actes.designationacte }}</dt>
                            <dd>
                                {{ ord.afficherresultat(res.acte.actes.id) }}
                            </dd>
                        {% endfor %}
                    {% endif %}
                {% endfor %}
            </dl>
    </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card-box\">
            <h3>autres actes </h3>
            <dl>
                {% for ord in hospitalisation.ordonnanceimgs %}
                    {% if ord.resultats.count > 0 %}
                        {% for res in ord.resultats %}
                            <dt>{{ res.acte.actes.designationacte }}</dt>
                            <dd>
                                {{ ord.afficherresultat(res.acte.actes.id) }}
                            </dd>
                        {% endfor %}
                    {% endif %}
                {% endfor %}
            </dl>
        </div>
    </div>
</div>
    <div class=\"tab-content\">
        <div id=\"tabr1\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
            <div class=\"modal-dialog modal-full\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                        <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Consultation</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"panel\">


                            <div class=\"panel-body\">
                                {{ render(controller('hostooSanteBundle:Consultation:newConsult', {'id': hospitalisation.id })) }}
                            </div>
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
                                <form class=\"form-inline\"  method=\"post\" action=\"{{ path('labo_actes') }}\">
                                    <input type=\"hidden\" name=\"hospitalisation\" value=\"{{ hospitalisation.id }}\">
                                    <select name=\"labo[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select3\" >

                                        {% for acte in labos %}
                                            {% set tampon=0 %}
                                            {% if hospitalisation.patient.societe.id !=15 and hospitalisation.patient.formule != null %}
                                                {% for pacte in hospitalisation.patient.formule.forsoc %}
                                                    {% if acte.id == pacte.acte.id %}
                                                        {% if pacte.societe.id==hospitalisation.patient.societe.id %}
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
                                <form class=\"form-inline\"  method=\"post\" action=\"{{ path('img_actes') }}\">
                                    <input type=\"hidden\" name=\"hospitalisation\" value=\"{{ hospitalisation.id }}\">
                                    <select name=\"imgr[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select4\" >

                                        {% for acte in imgs %}
                                            {% set tampon=0 %}
                                            {% if hospitalisation.patient.societe.id !=15 and hospitalisation.patient.formule != null %}
                                                {% for pacte in hospitalisation.patient.formule.forsoc %}
                                                    {% if acte.id == pacte.acte.id %}
                                                        {% if pacte.societe.id==hospitalisation.patient.societe.id %}
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
                            <div class=\"col-lg-6 col-md-12\">
                                {{ render(controller('hostooSanteBundle:Ordonnance:newHospis',{'id':hospitalisation.id })) }}

                            </div>
                            <div class=\"col-lg-6 col-md-12\">
                                {{ render(controller('hostooSanteBundle:Ordonnance:hospitalisationOrdonnance',{'id':hospitalisation.id })) }}
                            </div>
                        </div>
                        {#<form class=\"form-inline\"  method=\"post\" action=\"{{ path('hostoo_med_ajouterprod') }}\">
               <input type=\"hidden\" name=\"hospitalisation\" value=\"{{ hospitalisation.id }}\">
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
                                <form class=\"form-inline\"  method=\"post\" action=\"{{ path('autres_actes_hop') }}\">
                                    <input type=\"hidden\" name=\"episode\" value=\"{{ hospitalisation.id }}\">
                                    <select name=\"aut[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select6\" >

                                        {% for acte in actes %}
                                            {% set tampon=0 %}
                                            {% if hospitalisation.patient.societe.id !=15 and hospitalisation.patient.formule != null %}
                                                {% for pacte in hospitalisation.patient.formule.forsoc %}
                                                    {% if acte.id == pacte.acte.id %}
                                                        {% if pacte.societe.id==hospitalisation.patient.societe.id %}
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
</div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/tetranzselect2entity/js/select2entity.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/summernote/summernote.min.js') }}\"></script>
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
    <script src=\"{{ asset('ckeditor/samples/js/sample.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}\" rel=\"stylesheet\"></script>
    <script>
        initSample();
        historique();
        complements();
    </script>
    <script type=\"text/javascript\">
        var \$collectionHolder;
        // setup an \"add a tag\" link
        var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link btn btn-info\" title=\"Ajouter un produit\"><i class=\"fa fa-plus\"></i></a>');
        var \$newLinkLi = \$('<li></li>').append(\$addTagLink);
        jQuery(document).ready(function() {
// Get the ul that holds the collection of tags
            \$collectionHolder = \$('div#ordonnance_posologie');
// add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);
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

    <script>

        \$(function(){

            \$('.summernote').summernote({
                height: 350,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });

            \$('.inline-editor').summernote({
                airMode: true
            });

        });
    </script>

{% endblock %}
{% block stylesheets %}
    {{ parent() }}

    <link href=\"{{ asset('assets/plugins/summernote/summernote.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/jquery-datatables-editable/datatables.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/multiselect/css/multi-select.css') }}\"  rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2-bootstrap.css') }}\" rel=\"stylesheet\" />
{% endblock %}", "hostooHospisBundle:hospitalisation:show.html.twig", "/var/www/html/hostoo/src/hostoo/HospisBundle/Resources/views/hospitalisation/show.html.twig");
    }
}
