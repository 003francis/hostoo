<?php

/* hostooSanteBundle:Episode:episoderapport.html.twig */
class __TwigTemplate_ef63f6f74c9cc680bc62682e32c49db8b1ba92ea94be320571eb5812db942b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Episode:episoderapport.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Episode:episoderapport.html.twig"));

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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) {
            // line 4
            echo "    ";
            $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooSanteBundle:Episode:episoderapport.html.twig", 4)->display($context);
            // line 5
            echo "    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_INFIRMIER")) {
            // line 6
            echo "    ";
            $this->loadTemplate("hostooSanteBundle:menus:menunrs.html.twig", "hostooSanteBundle:Episode:episoderapport.html.twig", 6)->display($context);
            // line 7
            echo "    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MEDECIN")) {
            // line 8
            echo "    ";
            $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "hostooSanteBundle:Episode:episoderapport.html.twig", 8)->display($context);
            // line 9
            echo "    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LABORATOIRE")) {
            // line 10
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "hostooSanteBundle:Episode:episoderapport.html.twig", 10)->display($context);
            // line 11
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimer_les_actes");
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i> Imprimer</a> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        $context["mois"] = ["01" => "janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Aout", "09" => "Spetembre", "10" => "Octobre", "11" => "Novembre", "12" => "Decembre"];
        // line 17
        echo "   <div class=\"row\">
       <div class=\"card-box\">
           <form method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_de_frequentation");
        echo "\">

               <div class=\"form-inline\">
                   <label for=\"an\">Année</label>
                   <select name=\"an\" id=\"an\" class=\"form-control\">

                       ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "", "Y"), (twig_date_format_filter($this->env, "", "Y") - 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 26
            echo "                           <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                   </select>

                   <label for=\"mois\">Mois</label>
               <select name=\"mois\" id=\"mois\" class=\"form-control\">

                   ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mois"] ?? $this->getContext($context, "mois")));
        foreach ($context['_seq'] as $context["i"] => $context["j"]) {
            // line 34
            echo "                   <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo "</option>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "               </select>

               <label for=\"societe\">Societe</label>
               <select name=\"societe\" id=\"societe\" class=\"form-control\">
                   <option value=\"\"></option>
                   ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["societes"] ?? $this->getContext($context, "societes")));
        foreach ($context['_seq'] as $context["_key"] => $context["societe"]) {
            // line 42
            echo "                       <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["societe"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["societe"], "html", null, true);
            echo "</option>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['societe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "               </select>

               ";
        // line 47
        echo "               ";
        // line 48
        echo "                   ";
        // line 49
        echo "                   ";
        // line 50
        echo "                       ";
        // line 51
        echo "                   ";
        // line 52
        echo "               ";
        // line 53
        echo "
               <button type=\"submit\" class=\"btn btn-success\"> Valider</button>
               </div>
           </form>
       </div>

   </div>
";
        // line 60
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MEDECIN")) {
            // line 61
            echo "    ";
            list($context["hommes"], $context["femmes"], $context["enfants"]) =             [0, 0, 0];
            // line 62
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 63
                echo "        ";
                if (($this->getAttribute($this->getAttribute($context["episode"], "utilisateur", []), "id", []) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []))) {
                    // line 64
                    echo "    ";
                    if ((($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "sexe", []) == 1) && ((twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "datenaissance", []), "Y")) > 18))) {
                        // line 65
                        echo "        ";
                        $context["hommes"] = (($context["hommes"] ?? $this->getContext($context, "hommes")) + 1);
                        // line 66
                        echo "
        ";
                    } elseif ((($this->getAttribute($this->getAttribute(                    // line 67
$context["episode"], "patient", []), "sexe", []) == 0) && ((twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "datenaissance", []), "Y")) > 18))) {
                        // line 68
                        echo "            ";
                        $context["femmes"] = (($context["femmes"] ?? $this->getContext($context, "femmes")) + 1);
                        // line 69
                        echo "        ";
                    } else {
                        // line 70
                        echo "        ";
                        $context["enfants"] = (($context["enfants"] ?? $this->getContext($context, "enfants")) + 1);
                        // line 71
                        echo "
        ";
                    }
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            $context["actes"] = 0;
            // line 76
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 77
                echo "        ";
                if (($this->getAttribute($context["episode"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []))) {
                    // line 78
                    echo "
        ";
                    // line 79
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["episode"], "factures", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                        // line 80
                        echo "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fac"], "commandes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
                            // line 81
                            echo "        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd"], "tarifs", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["tar"]) {
                                // line 82
                                echo "        ";
                                $context["actes"] = (($context["actes"] ?? $this->getContext($context, "actes")) + 1);
                                // line 83
                                echo "        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tar'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 84
                            echo "        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 85
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fac'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "    ";
                }
                // line 87
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
    ";
            // line 89
            list($context["convention"], $context["prive"]) =             [0, 0];
            // line 90
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 91
                echo "        ";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "societe", []), "id", []) == 15) && ($this->getAttribute($context["episode"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 92
                    echo "        ";
                    $context["prive"] = (($context["prive"] ?? $this->getContext($context, "prive")) + 1);
                    // line 93
                    echo "            ";
                } else {
                    // line 94
                    echo "                ";
                    $context["convention"] = (($context["convention"] ?? $this->getContext($context, "convention")) + 1);
                    // line 95
                    echo "        ";
                }
                // line 96
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "    <div class=\"row\">
        <div class=\"card-box\">
        <table class=\"table table-bordered\">
            <tr>
                <th>Patients</th>
                <th>";
            // line 102
            echo twig_escape_filter($this->env, ($context["prive"] ?? $this->getContext($context, "prive")), "html", null, true);
            echo "</th>
            </tr>
            ";
            // line 105
            echo "                ";
            // line 106
            echo "                ";
            // line 107
            echo "            ";
            // line 108
            echo "            <tr>
                <th>Privés</th>
                <th>";
            // line 110
            echo twig_escape_filter($this->env, ($context["prive"] ?? $this->getContext($context, "prive")), "html", null, true);
            echo "</th>
            </tr>

            <tr>
                <th>Actes</th>
                <th>";
            // line 115
            echo twig_escape_filter($this->env, ($context["actes"] ?? $this->getContext($context, "actes")), "html", null, true);
            echo "</th>
            </tr>
            <tr>
                <th>HOMMES</th>
                <th>";
            // line 119
            echo twig_escape_filter($this->env, ($context["hommes"] ?? $this->getContext($context, "hommes")), "html", null, true);
            echo "</th>
            </tr>

            <tr>
                <th>FEMMES</th>
                <th>";
            // line 124
            echo twig_escape_filter($this->env, ($context["femmes"] ?? $this->getContext($context, "femmes")), "html", null, true);
            echo "</th>
            </tr>
            <tr>
                <th>ENFANTS</th>
                <th>";
            // line 128
            echo twig_escape_filter($this->env, ($context["enfants"] ?? $this->getContext($context, "enfants")), "html", null, true);
            echo "</th>
            </tr>
        </table>
        </div>
    </div>

    <div class=\"card-box\">
        <table class=\"table table-striped ok\">
            <thead>
            <tr>
                <th>Date</th>
                ";
            // line 140
            echo "                ";
            // line 141
            echo "                <th>Nom du patient</th>
                <th>Nombres Actes</th>
                <th>Medécin vu</th>
                <th>Societe</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 150
                echo "
                ";
                // line 151
                if (($this->getAttribute($this->getAttribute($context["episode"], "utilisateur", []), "id", []) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []))) {
                    // line 152
                    echo "                <tr>
                    <td>";
                    // line 153
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "d-m-Y"), "html", null, true);
                    echo "</td>
                    ";
                    // line 155
                    echo "                    ";
                    // line 156
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", [])), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 157
                    echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "nbActes", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "utilisateur", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 159
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "societe", []), "nom", []), "html", null, true);
                    echo "</td>

                    <td><a href=\"";
                    // line 161
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_lireepisode", ["id" => $this->getAttribute($context["episode"], "id", [])]), "html", null, true);
                    echo "\">Afficher les details</a> </td>
                </tr>
                ";
                }
                // line 164
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "            </tbody>
        </table>
    </div>
    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LABORATOIRE")) {
            // line 169
            echo "        ";
            list($context["hommes"], $context["femmes"], $context["enfants"]) =             [0, 0, 0];
            // line 170
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 171
                echo "            ";
                if (($this->getAttribute($context["episode"], "utilisateur", []) && ($this->getAttribute($this->getAttribute($context["episode"], "utilisateur", []), "id", []) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])))) {
                    // line 172
                    echo "                ";
                    if ((($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "sexe", []) == 1) && ((twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "datenaissance", []), "Y")) > 18))) {
                        // line 173
                        echo "                    ";
                        $context["hommes"] = (($context["hommes"] ?? $this->getContext($context, "hommes")) + 1);
                        // line 174
                        echo "
                ";
                    } elseif ((($this->getAttribute($this->getAttribute(                    // line 175
$context["episode"], "patient", []), "sexe", []) == 0) && ((twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "datenaissance", []), "Y")) > 18))) {
                        // line 176
                        echo "                    ";
                        $context["femmes"] = (($context["femmes"] ?? $this->getContext($context, "femmes")) + 1);
                        // line 177
                        echo "                ";
                    } else {
                        // line 178
                        echo "                    ";
                        $context["enfants"] = (($context["enfants"] ?? $this->getContext($context, "enfants")) + 1);
                        // line 179
                        echo "
                ";
                    }
                    // line 181
                    echo "            ";
                }
                // line 182
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        ";
            $context["actes"] = 0;
            // line 184
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 185
                echo "            ";
                if (($this->getAttribute($context["episode"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []))) {
                    // line 186
                    echo "
                ";
                    // line 187
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["episode"], "factures", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                        // line 188
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fac"], "commandes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
                            // line 189
                            echo "                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd"], "tarifs", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["tar"]) {
                                // line 190
                                echo "                            ";
                                $context["actes"] = (($context["actes"] ?? $this->getContext($context, "actes")) + 1);
                                // line 191
                                echo "                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tar'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 192
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 193
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fac'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    echo "            ";
                }
                // line 195
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "
        ";
            // line 197
            list($context["convention"], $context["prive"]) =             [0, 0];
            // line 198
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 199
                echo "            ";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "societe", []), "id", []) == 15) && ($this->getAttribute($context["episode"], "utilisateur", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])))) {
                    // line 200
                    echo "                ";
                    $context["prive"] = (($context["prive"] ?? $this->getContext($context, "prive")) + 1);
                    // line 201
                    echo "            ";
                } else {
                    // line 202
                    echo "                ";
                    $context["convention"] = (($context["convention"] ?? $this->getContext($context, "convention")) + 1);
                    // line 203
                    echo "            ";
                }
                // line 204
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "        <div class=\"row\">
            <div class=\"card-box\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Patients</th>
                        <th>";
            // line 210
            echo twig_escape_filter($this->env, (($context["prive"] ?? $this->getContext($context, "prive")) + ($context["convention"] ?? $this->getContext($context, "convention"))), "html", null, true);
            echo "</th>
                    </tr>
                    <tr>
                        <th>Conventionnés</th>
                        <th>";
            // line 214
            echo twig_escape_filter($this->env, ($context["convention"] ?? $this->getContext($context, "convention")), "html", null, true);
            echo "</th>
                    </tr>
                    <tr>
                        <th>Privés</th>
                        <th>";
            // line 218
            echo twig_escape_filter($this->env, ($context["prive"] ?? $this->getContext($context, "prive")), "html", null, true);
            echo "</th>
                    </tr>

                    <tr>
                        <th>Actes</th>
                        <th>";
            // line 223
            echo twig_escape_filter($this->env, ($context["actes"] ?? $this->getContext($context, "actes")), "html", null, true);
            echo "</th>
                    </tr>
                    <tr>
                        <th>HOMMES</th>
                        <th>";
            // line 227
            echo twig_escape_filter($this->env, ($context["hommes"] ?? $this->getContext($context, "hommes")), "html", null, true);
            echo "</th>
                    </tr>

                    <tr>
                        <th>FEMMES</th>
                        <th>";
            // line 232
            echo twig_escape_filter($this->env, ($context["femmes"] ?? $this->getContext($context, "femmes")), "html", null, true);
            echo "</th>
                    </tr>
                    <tr>
                        <th>ENFANTS</th>
                        <th>";
            // line 236
            echo twig_escape_filter($this->env, ($context["enfants"] ?? $this->getContext($context, "enfants")), "html", null, true);
            echo "</th>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"card-box\">
            <table class=\"table table-striped ok\">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>AGENT</th>
                    <th>PARENTE</th>
                    <th>Nom du patient</th>
                    <th>Nombres Actes</th>
                    <th>Medécin vu</th>
                    <th>Societe</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 257
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 258
                echo "
                    ";
                // line 259
                if (($this->getAttribute($context["episode"], "utilisateur", []) && ($this->getAttribute($this->getAttribute($context["episode"], "utilisateur", []), "id", []) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])))) {
                    // line 260
                    echo "                        <tr>
                            <td>";
                    // line 261
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "d-m-Y"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 262
                    if ($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", [])) {
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", []), "patient", []), "postnom", [])), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", []), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "prenom", []), "html", null, true);
                    }
                    echo "</td>
                            <td>";
                    // line 263
                    if ($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", [])) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", []), "parente", []), "html", null, true);
                    } else {
                        echo "TUTILAIRE ";
                    }
                    echo "</td>
                            <td>";
                    // line 264
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", [])), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 265
                    echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "nbActes", []), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 266
                    echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "utilisateur", []), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 267
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "societe", []), "nom", []), "html", null, true);
                    echo "</td>

                            <td><a href=\"";
                    // line 269
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_lireepisode", ["id" => $this->getAttribute($context["episode"], "id", [])]), "html", null, true);
                    echo "\">Afficher les details</a> </td>
                        </tr>
                    ";
                }
                // line 272
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 277
            echo "        ";
            list($context["hommes"], $context["femmes"], $context["enfants"]) =             [0, 0, 0];
            // line 278
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 279
                echo "            ";
                if ((($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "sexe", []) == 1) && ((twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "datenaissance", []), "Y")) > 18))) {
                    // line 280
                    echo "                ";
                    $context["hommes"] = (($context["hommes"] ?? $this->getContext($context, "hommes")) + 1);
                    // line 281
                    echo "
            ";
                } elseif ((($this->getAttribute($this->getAttribute(                // line 282
$context["episode"], "patient", []), "sexe", []) == 0) && ((twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "datenaissance", []), "Y")) > 18))) {
                    // line 283
                    echo "                ";
                    $context["femmes"] = (($context["femmes"] ?? $this->getContext($context, "femmes")) + 1);
                    // line 284
                    echo "            ";
                } else {
                    // line 285
                    echo "                ";
                    $context["enfants"] = (($context["enfants"] ?? $this->getContext($context, "enfants")) + 1);
                    // line 286
                    echo "
            ";
                }
                // line 288
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "        ";
            $context["actes"] = 0;
            // line 290
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 291
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["episode"], "factures", []));
                foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                    // line 292
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fac"], "commandes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
                        // line 293
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd"], "tarifs", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["tar"]) {
                            // line 294
                            echo "                        ";
                            $context["actes"] = (($context["actes"] ?? $this->getContext($context, "actes")) + 1);
                            // line 295
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tar'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 296
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 297
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fac'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 298
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "
        ";
            // line 300
            list($context["convention"], $context["prive"]) =             [0, 0];
            // line 301
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 302
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "societe", []), "id", []) == 15)) {
                    // line 303
                    echo "                ";
                    $context["prive"] = (($context["prive"] ?? $this->getContext($context, "prive")) + 1);
                    // line 304
                    echo "            ";
                } else {
                    // line 305
                    echo "                ";
                    $context["convention"] = (($context["convention"] ?? $this->getContext($context, "convention")) + 1);
                    // line 306
                    echo "            ";
                }
                // line 307
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            echo "        <div class=\"row\">
            <div class=\"card-box\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Patients</th>
                        <th>";
            // line 313
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["episodes"] ?? $this->getContext($context, "episodes"))), "html", null, true);
            echo "</th>
                    </tr>
                    <tr>
                        <th>Conventionnés</th>
                        <th>";
            // line 317
            echo twig_escape_filter($this->env, ($context["convention"] ?? $this->getContext($context, "convention")), "html", null, true);
            echo "</th>
                    </tr>
                    <tr>
                        <th>Privés</th>
                        <th>";
            // line 321
            echo twig_escape_filter($this->env, ($context["prive"] ?? $this->getContext($context, "prive")), "html", null, true);
            echo "</th>
                    </tr>

                    <tr>
                        <th>Actes</th>
                        <th>";
            // line 326
            echo twig_escape_filter($this->env, ($context["actes"] ?? $this->getContext($context, "actes")), "html", null, true);
            echo "</th>
                    </tr>
                    <tr>
                        <th>HOMMES</th>
                        <th>";
            // line 330
            echo twig_escape_filter($this->env, ($context["hommes"] ?? $this->getContext($context, "hommes")), "html", null, true);
            echo "</th>
                    </tr>

                    <tr>
                        <th>FEMMES</th>
                        <th>";
            // line 335
            echo twig_escape_filter($this->env, ($context["femmes"] ?? $this->getContext($context, "femmes")), "html", null, true);
            echo "</th>
                    </tr>
                    <tr>
                        <th>ENFANTS</th>
                        <th>";
            // line 339
            echo twig_escape_filter($this->env, ($context["enfants"] ?? $this->getContext($context, "enfants")), "html", null, true);
            echo "</th>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"card-box\">
            <table class=\"table table-striped ok\">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>AGENT</th>
                    <th>PARENTE</th>
                    <th>Nom du patient</th>
                    <th>Nombres Actes</th>
                    <th>Medécin vu</th>
                    <th>Societe</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 361
                echo "                    <tr>
                        <td>";
                // line 362
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "d-m-Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 363
                if ($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", [])) {
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", []), "patient", []), "postnom", [])), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "prenom", []), "html", null, true);
                }
                echo "</td>
                        <td>";
                // line 364
                if ($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", []), "parente", []), "html", null, true);
                } else {
                    echo "TUTILAIRE ";
                }
                echo "</td>
                        <td>";
                // line 365
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", [])), "html", null, true);
                echo "</td>
                        <td>";
                // line 366
                echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "nbActes", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 367
                echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "utilisateur", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 368
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "societe", []), "nom", []), "html", null, true);
                echo "</td>

                        <td><a href=\"";
                // line 370
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_lireepisode", ["id" => $this->getAttribute($context["episode"], "id", [])]), "html", null, true);
                echo "\">Afficher les details</a> </td>
                    </tr>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "                </tbody>
            </table>
        </div>

    ";
        }
        // line 379
        echo "       <!-- panel-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 382
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 383
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 384
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooSanteBundle:Episode:episoderapport.html.twig", 384)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 386
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 387
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 389
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    ";
        // line 390
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooSanteBundle:Episode:episoderapport.html.twig", 390)->display($context);
        // line 391
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.ok').dataTable({
                \"bProcessing\": true,
                \"bDeferRender\": true,
                deferRender:    true,
                scrollY:        800,
                scrollCollapse: true,
                scroller:       true,
                dom: \"Bfrtip\",
                buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                    extend: \"excel\",
                    className: \"btn-sm\"
                }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],

                language: {
                    processing: \"Traitement en cours...\",
                    search: \"Rechercher&nbsp;:\",
                    lengthMenu: \"Afficher _MENU_ &eacute;l&eacute;ments\",
                    info: \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    infoEmpty: \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                    infoFiltered: \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                    infoPostFix: \"\",
                    loadingRecords: \"Chargement en cours...\",
                    zeroRecords: \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    emptyTable: \"Aucune donnée disponible dans le tableau\",
                    paginate: {
                        first: \"Premier\",
                        previous: \"Pr&eacute;c&eacute;dent\",
                        next: \"Suivant\",
                        last: \"Dernier\"
                    },
                    aria: {
                        sortAscending: \": activer pour trier la colonne par ordre croissant\",
                        sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                    }
                }
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
        // line 457
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
        return "hostooSanteBundle:Episode:episoderapport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1131 => 457,  1063 => 391,  1061 => 390,  1057 => 389,  1053 => 388,  1048 => 387,  1042 => 386,  1035 => 384,  1030 => 383,  1024 => 382,  1016 => 379,  1009 => 374,  999 => 370,  994 => 368,  990 => 367,  986 => 366,  982 => 365,  974 => 364,  960 => 363,  956 => 362,  953 => 361,  949 => 360,  925 => 339,  918 => 335,  910 => 330,  903 => 326,  895 => 321,  888 => 317,  881 => 313,  874 => 308,  868 => 307,  865 => 306,  862 => 305,  859 => 304,  856 => 303,  853 => 302,  848 => 301,  846 => 300,  843 => 299,  837 => 298,  831 => 297,  825 => 296,  819 => 295,  816 => 294,  811 => 293,  806 => 292,  801 => 291,  796 => 290,  793 => 289,  787 => 288,  783 => 286,  780 => 285,  777 => 284,  774 => 283,  772 => 282,  769 => 281,  766 => 280,  763 => 279,  758 => 278,  755 => 277,  749 => 273,  743 => 272,  737 => 269,  732 => 267,  728 => 266,  724 => 265,  720 => 264,  712 => 263,  698 => 262,  694 => 261,  691 => 260,  689 => 259,  686 => 258,  682 => 257,  658 => 236,  651 => 232,  643 => 227,  636 => 223,  628 => 218,  621 => 214,  614 => 210,  607 => 205,  601 => 204,  598 => 203,  595 => 202,  592 => 201,  589 => 200,  586 => 199,  581 => 198,  579 => 197,  576 => 196,  570 => 195,  567 => 194,  561 => 193,  555 => 192,  549 => 191,  546 => 190,  541 => 189,  536 => 188,  532 => 187,  529 => 186,  526 => 185,  521 => 184,  518 => 183,  512 => 182,  509 => 181,  505 => 179,  502 => 178,  499 => 177,  496 => 176,  494 => 175,  491 => 174,  488 => 173,  485 => 172,  482 => 171,  477 => 170,  474 => 169,  468 => 165,  462 => 164,  456 => 161,  451 => 159,  447 => 158,  443 => 157,  438 => 156,  436 => 155,  432 => 153,  429 => 152,  427 => 151,  424 => 150,  420 => 149,  410 => 141,  408 => 140,  394 => 128,  387 => 124,  379 => 119,  372 => 115,  364 => 110,  360 => 108,  358 => 107,  356 => 106,  354 => 105,  349 => 102,  342 => 97,  336 => 96,  333 => 95,  330 => 94,  327 => 93,  324 => 92,  321 => 91,  316 => 90,  314 => 89,  311 => 88,  305 => 87,  302 => 86,  296 => 85,  290 => 84,  284 => 83,  281 => 82,  276 => 81,  271 => 80,  267 => 79,  264 => 78,  261 => 77,  256 => 76,  254 => 75,  248 => 74,  245 => 73,  241 => 71,  238 => 70,  235 => 69,  232 => 68,  230 => 67,  227 => 66,  224 => 65,  221 => 64,  218 => 63,  213 => 62,  210 => 61,  208 => 60,  199 => 53,  197 => 52,  195 => 51,  193 => 50,  191 => 49,  189 => 48,  187 => 47,  183 => 44,  172 => 42,  168 => 41,  161 => 36,  150 => 34,  146 => 33,  139 => 28,  128 => 26,  124 => 25,  115 => 19,  111 => 17,  108 => 16,  102 => 15,  88 => 14,  77 => 13,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
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
    {% if is_granted('ROLE_RECEPTION') %}
    {% include \"hostooSanteBundle:menus:menurc.html.twig\" %}
    {% elseif is_granted('ROLE_INFIRMIER') %}
    {% include \"hostooSanteBundle:menus:menunrs.html.twig\" %}
    {% elseif is_granted('ROLE_MEDECIN') %}
    {% include \"hostooSanteBundle:menus:menudoc.html.twig\" %}
    {% elseif is_granted('ROLE_LABORATOIRE') %}
        {% include \"hostooSanteBundle:menus:menulabo.html.twig\" %}
    {% endif %}
{% endblock %}
{% block titrepage %}{% endblock %}
{% block options %}<a href=\"{{ path('imprimer_les_actes') }}\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i> Imprimer</a> {% endblock %}
{% block body %}
    {% set mois={'01':'janvier','02':'Fevrier','03':'Mars','04':'Avril','05':'Mai','06':'Juin','07':'Juillet','08':'Aout','09':'Spetembre','10':'Octobre','11':'Novembre','12':'Decembre'}  %}
   <div class=\"row\">
       <div class=\"card-box\">
           <form method=\"post\" action=\"{{ path('rapport_de_frequentation') }}\">

               <div class=\"form-inline\">
                   <label for=\"an\">Année</label>
                   <select name=\"an\" id=\"an\" class=\"form-control\">

                       {% for i in \"\"|date('Y')..\"\"|date('Y')-2 %}
                           <option value=\"{{ i }}\">{{ i }}</option>
                       {% endfor %}
                   </select>

                   <label for=\"mois\">Mois</label>
               <select name=\"mois\" id=\"mois\" class=\"form-control\">

                   {% for i,j in mois %}
                   <option value=\"{{ i }}\">{{ j }}</option>
                   {% endfor %}
               </select>

               <label for=\"societe\">Societe</label>
               <select name=\"societe\" id=\"societe\" class=\"form-control\">
                   <option value=\"\"></option>
                   {% for societe in societes %}
                       <option value=\"{{ societe.id }}\">{{ societe }}</option>
                   {% endfor %}
               </select>

               {#<label for=\"formule\">Formule</label>#}
               {#<select name=\"formule\" id=\"formule\" class=\"form-control\">#}
                   {#<option value=\"\"></option>#}
                   {#{% for conv in conventions %}#}
                       {#<option value=\"{{ conv.id }}\">{{ conv.nom }}</option>#}
                   {#{% endfor %}#}
               {#</select>#}

               <button type=\"submit\" class=\"btn btn-success\"> Valider</button>
               </div>
           </form>
       </div>

   </div>
{% if is_granted('ROLE_MEDECIN') %}
    {% set hommes,femmes, enfants = 0,0,0 %}
    {% for episode in episodes %}
        {% if episode.utilisateur.id == app.user.id %}
    {% if episode.patient.sexe == 1 and (\"now\"|date('Y') - episode.patient.datenaissance|date('Y')) > 18  %}
        {% set hommes = hommes + 1 %}

        {% elseif episode.patient.sexe == 0 and \"now\"|date('Y') - episode.patient.datenaissance|date('Y') > 18  %}
            {% set femmes = femmes + 1 %}
        {% else %}
        {% set enfants = enfants + 1 %}

        {% endif %}
        {% endif %}
    {% endfor %}
{% set actes =0 %}
    {% for episode in episodes %}
        {% if episode.utilisateur == app.user %}

        {% for fac in episode.factures %}
        {% for cmd in fac.commandes %}
        {% for tar in cmd.tarifs %}
        {% set actes = actes + 1 %}
        {% endfor %}
        {% endfor %}
        {% endfor %}
    {% endif %}
    {% endfor %}

    {% set convention,prive=0,0 %}
    {% for episode in episodes %}
        {% if episode.patient.societe.id == 15 and  episode.utilisateur == app.user %}
        {% set prive = prive + 1 %}
            {% else %}
                {% set convention = convention + 1 %}
        {% endif %}
    {% endfor %}
    <div class=\"row\">
        <div class=\"card-box\">
        <table class=\"table table-bordered\">
            <tr>
                <th>Patients</th>
                <th>{{ prive }}</th>
            </tr>
            {#<tr>#}
                {#<th>Conventionnés</th>#}
                {#<th>{{ convention }}</th>#}
            {#</tr>#}
            <tr>
                <th>Privés</th>
                <th>{{ prive }}</th>
            </tr>

            <tr>
                <th>Actes</th>
                <th>{{ actes }}</th>
            </tr>
            <tr>
                <th>HOMMES</th>
                <th>{{ hommes }}</th>
            </tr>

            <tr>
                <th>FEMMES</th>
                <th>{{ femmes }}</th>
            </tr>
            <tr>
                <th>ENFANTS</th>
                <th>{{ enfants }}</th>
            </tr>
        </table>
        </div>
    </div>

    <div class=\"card-box\">
        <table class=\"table table-striped ok\">
            <thead>
            <tr>
                <th>Date</th>
                {#<th>AGENT</th>#}
                {#<th>PARENTE</th>#}
                <th>Nom du patient</th>
                <th>Nombres Actes</th>
                <th>Medécin vu</th>
                <th>Societe</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {% for episode in episodes %}

                {% if episode.utilisateur.id == app.user.id %}
                <tr>
                    <td>{{ episode.dateepisode|date('d-m-Y') }}</td>
                    {#<td>{% if episode.patient.madependance %}{{ episode.patient.madependance.patient.nom~\" \"~episode.patient.madependance.patient.postnom  }} {% else %} {{ episode.patient.nom }} {{ episode.patient.postnom }} {{ episode.patient.prenom }}{% endif %}</td>#}
                    {#<td>{% if episode.patient.madependance %}{{ episode.patient.madependance.parente }}{% else %}TUTILAIRE {% endif %}</td>#}
                    <td>{{ episode.patient.nom~\" \"~episode.patient.postnom }}</td>
                    <td>{{ episode.nbActes }}</td>
                    <td>{{ episode.utilisateur }}</td>
                    <td>{{ episode.patient.societe.nom }}</td>

                    <td><a href=\"{{ path('hostoo_sante_lireepisode', {'id': episode.id }) }}\">Afficher les details</a> </td>
                </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    </div>
    {% elseif is_granted('ROLE_LABORATOIRE') %}
        {% set hommes,femmes, enfants = 0,0,0 %}
        {% for episode in episodes %}
            {% if episode.utilisateur and episode.utilisateur.id == app.user.id %}
                {% if episode.patient.sexe == 1 and (\"now\"|date('Y') - episode.patient.datenaissance|date('Y')) > 18  %}
                    {% set hommes = hommes + 1 %}

                {% elseif episode.patient.sexe == 0 and \"now\"|date('Y') - episode.patient.datenaissance|date('Y') > 18  %}
                    {% set femmes = femmes + 1 %}
                {% else %}
                    {% set enfants = enfants + 1 %}

                {% endif %}
            {% endif %}
        {% endfor %}
        {% set actes =0 %}
        {% for episode in episodes %}
            {% if episode.utilisateur == app.user %}

                {% for fac in episode.factures %}
                    {% for cmd in fac.commandes %}
                        {% for tar in cmd.tarifs %}
                            {% set actes = actes + 1 %}
                        {% endfor %}
                    {% endfor %}
                {% endfor %}
            {% endif %}
        {% endfor %}

        {% set convention,prive=0,0 %}
        {% for episode in episodes %}
            {% if episode.patient.societe.id == 15 and  episode.utilisateur == app.user %}
                {% set prive = prive + 1 %}
            {% else %}
                {% set convention = convention + 1 %}
            {% endif %}
        {% endfor %}
        <div class=\"row\">
            <div class=\"card-box\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Patients</th>
                        <th>{{ prive+convention }}</th>
                    </tr>
                    <tr>
                        <th>Conventionnés</th>
                        <th>{{ convention }}</th>
                    </tr>
                    <tr>
                        <th>Privés</th>
                        <th>{{ prive }}</th>
                    </tr>

                    <tr>
                        <th>Actes</th>
                        <th>{{ actes }}</th>
                    </tr>
                    <tr>
                        <th>HOMMES</th>
                        <th>{{ hommes }}</th>
                    </tr>

                    <tr>
                        <th>FEMMES</th>
                        <th>{{ femmes }}</th>
                    </tr>
                    <tr>
                        <th>ENFANTS</th>
                        <th>{{ enfants }}</th>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"card-box\">
            <table class=\"table table-striped ok\">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>AGENT</th>
                    <th>PARENTE</th>
                    <th>Nom du patient</th>
                    <th>Nombres Actes</th>
                    <th>Medécin vu</th>
                    <th>Societe</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {% for episode in episodes %}

                    {% if episode.utilisateur and episode.utilisateur.id == app.user.id %}
                        <tr>
                            <td>{{ episode.dateepisode|date('d-m-Y') }}</td>
                            <td>{% if episode.patient.madependance %}{{ episode.patient.madependance.patient.nom~\" \"~episode.patient.madependance.patient.postnom  }} {% else %} {{ episode.patient.nom }} {{ episode.patient.postnom }} {{ episode.patient.prenom }}{% endif %}</td>
                            <td>{% if episode.patient.madependance %}{{ episode.patient.madependance.parente }}{% else %}TUTILAIRE {% endif %}</td>
                            <td>{{ episode.patient.nom~\" \"~episode.patient.postnom }}</td>
                            <td>{{ episode.nbActes }}</td>
                            <td>{{ episode.utilisateur }}</td>
                            <td>{{ episode.patient.societe.nom }}</td>

                            <td><a href=\"{{ path('hostoo_sante_lireepisode', {'id': episode.id }) }}\">Afficher les details</a> </td>
                        </tr>
                    {% endif %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        {% set hommes,femmes, enfants = 0,0,0 %}
        {% for episode in episodes %}
            {% if episode.patient.sexe == 1 and (\"now\"|date('Y') - episode.patient.datenaissance|date('Y')) > 18  %}
                {% set hommes = hommes + 1 %}

            {% elseif episode.patient.sexe == 0 and \"now\"|date('Y') - episode.patient.datenaissance|date('Y') > 18  %}
                {% set femmes = femmes + 1 %}
            {% else %}
                {% set enfants = enfants + 1 %}

            {% endif %}
        {% endfor %}
        {% set actes =0 %}
        {% for episode in episodes %}
            {% for fac in episode.factures %}
                {% for cmd in fac.commandes %}
                    {% for tar in cmd.tarifs %}
                        {% set actes = actes + 1 %}
                    {% endfor %}
                {% endfor %}
            {% endfor %}
        {% endfor %}

        {% set convention,prive=0,0 %}
        {% for episode in episodes %}
            {% if episode.patient.societe.id == 15 %}
                {% set prive = prive + 1 %}
            {% else %}
                {% set convention = convention + 1 %}
            {% endif %}
        {% endfor %}
        <div class=\"row\">
            <div class=\"card-box\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Patients</th>
                        <th>{{ episodes|length }}</th>
                    </tr>
                    <tr>
                        <th>Conventionnés</th>
                        <th>{{ convention }}</th>
                    </tr>
                    <tr>
                        <th>Privés</th>
                        <th>{{ prive }}</th>
                    </tr>

                    <tr>
                        <th>Actes</th>
                        <th>{{ actes }}</th>
                    </tr>
                    <tr>
                        <th>HOMMES</th>
                        <th>{{ hommes }}</th>
                    </tr>

                    <tr>
                        <th>FEMMES</th>
                        <th>{{ femmes }}</th>
                    </tr>
                    <tr>
                        <th>ENFANTS</th>
                        <th>{{ enfants }}</th>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"card-box\">
            <table class=\"table table-striped ok\">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>AGENT</th>
                    <th>PARENTE</th>
                    <th>Nom du patient</th>
                    <th>Nombres Actes</th>
                    <th>Medécin vu</th>
                    <th>Societe</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {% for episode in episodes %}
                    <tr>
                        <td>{{ episode.dateepisode|date('d-m-Y') }}</td>
                        <td>{% if episode.patient.madependance %}{{ episode.patient.madependance.patient.nom~\" \"~episode.patient.madependance.patient.postnom  }} {% else %} {{ episode.patient.nom }} {{ episode.patient.postnom }} {{ episode.patient.prenom }}{% endif %}</td>
                        <td>{% if episode.patient.madependance %}{{ episode.patient.madependance.parente }}{% else %}TUTILAIRE {% endif %}</td>
                        <td>{{ episode.patient.nom~\" \"~episode.patient.postnom }}</td>
                        <td>{{ episode.nbActes }}</td>
                        <td>{{ episode.utilisateur }}</td>
                        <td>{{ episode.patient.societe.nom }}</td>

                        <td><a href=\"{{ path('hostoo_sante_lireepisode', {'id': episode.id }) }}\">Afficher les details</a> </td>
                    </tr>

                {% endfor %}
                </tbody>
            </table>
        </div>

    {% endif %}
       <!-- panel-->
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
            \$('.ok').dataTable({
                \"bProcessing\": true,
                \"bDeferRender\": true,
                deferRender:    true,
                scrollY:        800,
                scrollCollapse: true,
                scroller:       true,
                dom: \"Bfrtip\",
                buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                    extend: \"excel\",
                    className: \"btn-sm\"
                }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],

                language: {
                    processing: \"Traitement en cours...\",
                    search: \"Rechercher&nbsp;:\",
                    lengthMenu: \"Afficher _MENU_ &eacute;l&eacute;ments\",
                    info: \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    infoEmpty: \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                    infoFiltered: \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                    infoPostFix: \"\",
                    loadingRecords: \"Chargement en cours...\",
                    zeroRecords: \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    emptyTable: \"Aucune donnée disponible dans le tableau\",
                    paginate: {
                        first: \"Premier\",
                        previous: \"Pr&eacute;c&eacute;dent\",
                        next: \"Suivant\",
                        last: \"Dernier\"
                    },
                    aria: {
                        sortAscending: \": activer pour trier la colonne par ordre croissant\",
                        sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                    }
                }
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
{% endblock %}", "hostooSanteBundle:Episode:episoderapport.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Episode/episoderapport.html.twig");
    }
}
