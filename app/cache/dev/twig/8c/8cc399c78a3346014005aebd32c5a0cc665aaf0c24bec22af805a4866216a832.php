<?php

/* hostooSanteBundle:Caisse:dash.html.twig */
class __TwigTemplate_da4b6bea022d23aa681e2969336108dbbb2b5f658996b9cec43ea0d3eb30a1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Caisse:dash.html.twig", 1);
        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "hostooSanteBundle::blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Caisse:dash.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " ";
        $this->displayParentBlock("titre", $context, $blocks);
        echo "::Caisse ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo " La Caisse ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("requerant_new");
        echo "\" class=\"btn btn-success\">Nouvelle Facture</a> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "hostooSanteBundle:Caisse:dash.html.twig", 6)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"col-lg-8\">
        ";
        // line 10
        if ( !(($this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "montantusd", []) > 0) || ($this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "montantcdf", []) > 0))) {
            // line 11
            echo "            <!-- Tabs Left -->
            <ul class=\"nav nav-tabs\">
                <li role =\"presentation\" class=\"active bg-primary\"><a href=\"#tabr1\" role=\"tab\" data-toggle=\"tab\">En Attente</a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr7\" role=\"tab\" data-toggle=\"tab\" ><span class=\"text-info\">Edition</span></a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr4\" role=\"tab\" data-toggle=\"tab\"><span class=\"text-info\">Payées</span></a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr2\" role=\"tab\" data-toggle=\"tab\"><span class=\"text-info\">Retrait</span></a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr5\" role=\"tab\" data-toggle=\"tab\"><span class=\"text-info\">Depôt</span></a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr6\" role=\"tab\" data-toggle=\"tab\"><span class=\"text-info\">Banque</span></a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr3\" role=\"tab\" data-toggle=\"tab\"><span class=\"text-info\">Sorties</span></a></li>
            </ul>

            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"tabr1\">
                <!-- Premier onglet -->
                ";
            // line 25
            if ((twig_length_filter($this->env, ($context["listeNP"] ?? $this->getContext($context, "listeNP"))) == 0)) {
                // line 26
                echo "                <div class=\"alert alert-danger alert-dismissible\">Pas de Facture</div>
                ";
            } else {
                // line 28
                echo "                    ";
                $context["n"] = 0;
                // line 29
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter(($context["listeNP"] ?? $this->getContext($context, "listeNP")))));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
                    // line 30
                    echo "
                    ";
                    // line 31
                    $context["n"] = (($context["n"] ?? $this->getContext($context, "n")) + 1);
                    // line 32
                    echo "                <div id=\"accordion\" class=\"panel-group\">
                    <div class=\"panel ";
                    // line 33
                    if (($this->getAttribute($context["facture"], "validation", []) == 0)) {
                        echo "panel-custom";
                    } else {
                        echo "panel-warning";
                    }
                    echo "\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a href=\"#collapse";
                    // line 36
                    echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                    echo "\" data-parent=\"#accordion\" data-toggle=\"collapse\">
                                    ";
                    // line 37
                    if ($this->getAttribute($context["facture"], "episode", [])) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "episode", []), "patient", []), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "hospitalisation", []), "patient", []), "html", null, true);
                        echo " ";
                    }
                    echo " | (";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "datefacture", []), "d-m-Y"), "html", null, true);
                    echo ")
                                </a>
                                <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_facture", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                                <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edition-facture_show", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                                <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_episode", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-cogs\"></i> Traiter</a>
                            </h4>
                        </div>

                        <div class=\"panel-collapse collapse ";
                    // line 45
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo "in";
                    }
                    echo "\" id=\"collapse";
                    echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                    echo "\">
                            <div class=\"panel-body\">
                                <ul class=\"list-unstyled\">
                                    ";
                    // line 48
                    if ((twig_length_filter($this->env, $this->getAttribute($context["facture"], "commandes", [])) > 0)) {
                        // line 49
                        echo "                                        <li class=\"list-group-item-danger\"><strong>Actes Medicaux</strong></li>
                                    ";
                    }
                    // line 51
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["facture"], "commandes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                        // line 52
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["commande"], "tarifs", []));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
                            // line 53
                            echo "                                    <li ";
                            if ($this->getAttribute($context["loop"], "first", [])) {
                                echo "class=\"first list-group-item\"";
                            } else {
                                echo "class=\"list-group-item\"";
                            }
                            echo ">
                                        <div class=\"row\">
                                        ";
                            // line 55
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarif"], "actes", []), "designationacte", []), "html", null, true);
                            echo "
                                        <span class=\"pull-right\">

                                        <i class=\"badge badge-info\">";
                            // line 58
                            echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "prix", []), "html", null, true);
                            echo "</i>

                                        </span>
                                        </div>
                                        </li>
                                   ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "                                   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "
                                    ";
                    // line 66
                    if (($this->getAttribute($this->getAttribute($context["facture"], "produits", []), "count", []) > 0)) {
                        // line 67
                        echo "                                        <li class=\"bg-info\"><strong>Pharmacie</strong></li>
                                    ";
                    }
                    // line 69
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["facture"], "produits", []));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
                        // line 70
                        echo "

                                                <li ";
                        // line 72
                        if ($this->getAttribute($context["loop"], "first", [])) {
                            echo "class=\"first\"";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "nom", []), "html", null, true);
                        echo "<div class=\"pull-right\">

                                                            <span class=\"label label-info\">";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "prix", []), "html", null, true);
                        echo "</span>

                                                        <form method=\"get\" class=\"pull-right\">
                                                            <input type=\"checkbox\" class=\"col-lg-1\" name=\"acte\" value=\"";
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "id", []), "html", null, true);
                        echo "\" onchange=\"this.form.submit()\">
                                                        </form>
                                                    </div></li>
                                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "                                </ul>
<hr>
                                    <div class=\"col-lg-6 col-lg-offset-6 pull-right\">
                                        <table>
                                            <tr>
                                                <th>Total Prix :</th><td>";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "prix", []), "html", null, true);
                    echo " ( ";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["facture"], "prix", []) * $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "taux"], "method")), "html", null, true);
                    echo " FC)</td>
                                            </tr>
                                            ";
                    // line 88
                    $context["som"] = 0;
                    // line 89
                    echo "                                        ";
                    if (($this->getAttribute($this->getAttribute($context["facture"], "soldes", []), "count", []) > 0)) {
                        // line 90
                        echo "
                                            ";
                        // line 91
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["facture"], "soldes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["solde"]) {
                            // line 92
                            echo "
                                                ";
                            // line 93
                            $context["som"] = (($context["som"] ?? $this->getContext($context, "som")) + $this->getAttribute($context["solde"], "solde", []));
                            // line 94
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solde'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 95
                        echo "                                            <tr>
                                        ";
                        // line 97
                        echo "                                            ";
                    }
                    // line 98
                    echo "                                                </tr>
                                            <tr>
                                                <th>Accompte :</th><td>";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "lasolde", []), "html", null, true);
                    echo " USD ( ";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["facture"], "lasolde", []) * $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "taux"], "method")), "html", null, true);
                    echo " FC)</td>
                                            </tr>
                                            <tr>
                                        <th>Reste a payer :</th><td>";
                    // line 103
                    if (($this->getAttribute($context["facture"], "lasolde", []) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "resteAPayer", []), "html", null, true);
                        echo " USD( ";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["facture"], "resteAPayer", []) * $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "taux"], "method")), "html", null, true);
                        echo " FC)";
                    } else {
                        echo "0 USD (0 FC)";
                    }
                    echo " </td>
                                            </tr>
                                        </table>
                                    </div>
                                <hr class=\"alt2\">
                                <div>

                                    ";
                    // line 110
                    if (($this->getAttribute($context["facture"], "solde", []) > 0)) {
                        // line 111
                        echo "                                    <div class=\"row\">
                                        <div class=\"col-lg-6\">
                                    <form action=\"";
                        // line 113
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_soldeacte", ["acte" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                        echo "\" method=\"post\" class=\"form-inline\">
                                        <div class=\"form-group\">
                                            <label for=\"solde\">Payer un accompte :</label>
                                            <div class=\"input-group form-control\">
                                                <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"input-lg col-md-4\">
                                                <select name=\"devise\" id=\"devise\" class=\"col-md-4 input-group-addon\">
                                                    <option selected value=\"USD\">USD</option>
                                                    <option value=\"CDF\">FC</option>
                                                </select>
                                                <button type=\"submit\" class=\"col-md-4 btn-sm btn-warning\">accompte</button>
                                            </div></div>
                                    </form>
                                        </div>
                                    </div>
                                    ";
                    }
                    // line 128
                    echo "                                    ";
                    if (((($this->getAttribute($context["facture"], "validation", []) == 0) && ($this->getAttribute($context["facture"], "episode", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["facture"], "episode", []), "patient", []), "societe", []), "convention", []), "id", []) == 1))) || (($this->getAttribute($context["facture"], "hospitalisation", []) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["facture"], "hospitalisation", []), "patient", []), "societe", []), "convention", []), "id", [])) == 1))) {
                        // line 129
                        echo "                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">

                                                ";
                        // line 133
                        echo "                                                ";
                        // line 134
                        echo "                                                    ";
                        // line 135
                        echo "                                                        ";
                        // line 136
                        echo "                                                        ";
                        // line 137
                        echo "                                                            ";
                        // line 138
                        echo "                                                            ";
                        // line 139
                        echo "                                                                ";
                        // line 140
                        echo "                                                                    ";
                        // line 141
                        echo "                                                            ";
                        // line 142
                        echo "                                                                ";
                        // line 143
                        echo "                                                            ";
                        // line 144
                        echo "                                                        ";
                        // line 145
                        echo "                                                        ";
                        // line 146
                        echo "                                                    ";
                        // line 147
                        echo "                                                ";
                        // line 148
                        echo "
                                                <form action=\"";
                        // line 149
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_soldeacte", ["acte" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                        echo "\" method=\"post\" class=\"form-inline\">
                                                    <div class=\"form-group\">
                                                    <label for=\"solde\">Payer un accompte :</label>
                                                    <div class=\"input-group form-control\">
                                                        <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"input-lg col-md-4\">
                                                        <select name=\"devise\" id=\"devise\" class=\"col-md-4 input-group-addon\">
                                                            <option selected value=\"USD\">USD</option>
                                                            <option value=\"CDF\">FC</option>
                                                        </select>
                                                        <button type=\"submit\" class=\"col-md-4 btn-sm btn-warning\">accompte</button>
                                                    </div></div>
                                                </form>

                                            </div>
                                            <div class=\"col-lg-6 \">
                                                <div class=\"row pull-right\">
                                                    <h6>Validation</h6>
                                                <form action=\"";
                        // line 166
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_valideracte", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                        echo "\" >
                                                    <div  class=\"form-inline\">
                                                    <label for=\"devise\"></label>
                                                    <select name=\"devise\" id=\"devise\" class=\"form-control\" >
                                                        <option selected value=\"USD\">USD</option>
                                                        <option value=\"CDF\">FC</option>
                                                    </select>
                                                    <input class=\"btn-sm btn-success\" type=\"submit\" value=\"Valider\" />
                                                    </div>
                                                </form>

                                            </div>
                                            </div>
                                        </div>
                                    ";
                    } elseif ((($this->getAttribute(                    // line 180
$context["facture"], "validation", []) == 0) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["facture"], "episode", []), "patient", []), "societe", []), "convention", []), "tconvention", []), "id", []) == 2))) {
                        // line 181
                        echo "                                        <a class=\"btn-sm btn-success pull-right\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_valideracte", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                        echo "\">Valider</a>
                                    ";
                    } else {
                        // line 183
                        echo "                                        <div class=\"row\">
                                            <button class=\"btn btn-block btn-success\">Facture payée</button>
                                        </div>
                                    ";
                    }
                    // line 187
                    echo "                                </div>
                            </div>

                            </div>
                        </div>
                    </div>


";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "
                        ";
            }
            // line 198
            echo "
                </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr7\">
                    <table class=\"table table-condensed\">
                        <thead>
                        <tr>
                            <th>Noms</th>
                            <th>Date</th>
                            <th>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["epis"] ?? $this->getContext($context, "epis")));
            foreach ($context['_seq'] as $context["_key"] => $context["epi"]) {
                // line 212
                echo "                        <tr>
                            <td>";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($context["epi"], "patient", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 214
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["epi"], "dateepisode", []), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creer_une_facture", ["id" => $this->getAttribute($context["epi"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-default\">Creer une facture</a></td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                        </tbody>
                    </table>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr4\">
                    <!-- Premier onglet -->
                    ";
            // line 224
            if ((null === ($context["liste"] ?? $this->getContext($context, "liste")))) {
                // line 225
                echo "                        <span class=\"alert alert-info alert-dismissible\">Pas de Factures en attente</span>
                    ";
            } else {
                // line 227
                echo "                        ";
                $context["n"] = 0;
                // line 228
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter(($context["liste"] ?? $this->getContext($context, "liste")))));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
                    // line 229
                    echo "                            ";
                    $context["n"] = (($context["n"] ?? $this->getContext($context, "n")) + 1);
                    // line 230
                    echo "                            <div id=\"accordion2\" class=\"panel-group\">
                                <div class=\"panel panel-success\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a href=\"#collapse_";
                    // line 234
                    echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                    echo "\" data-parent=\"#accordion2\" data-toggle=\"collapse\">
                                                ";
                    // line 235
                    if ($this->getAttribute($context["facture"], "episode", [])) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "episode", []), "patient", []), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "hospitalisation", []), "patient", []), "html", null, true);
                        echo " ";
                    }
                    echo "| (";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "datefacture", []), "d-m-Y"), "html", null, true);
                    echo ")
                                            </a>
                                            <a href=\"";
                    // line 237
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_facture", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                                            <a href=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edition-facture_show", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                                        </h4>
                                    </div>

                                    <div class=\"panel-collapse collapse ";
                    // line 242
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo "in";
                    }
                    echo "\" id=\"collapse_";
                    echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                    echo "\">
                                        <div class=\"panel-body\">
                                            <ul class=\"list-unstyled\">
                                                ";
                    // line 245
                    if ((twig_length_filter($this->env, $this->getAttribute($context["facture"], "commandes", [])) > 0)) {
                        // line 246
                        echo "                                                    <li class=\"list-group-item-danger\"><strong>Actes Medicaux</strong></li>
                                                ";
                    }
                    // line 248
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["facture"], "commandes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
                        // line 249
                        echo "                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd"], "tarifs", []));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
                            // line 250
                            echo "                                                    <li ";
                            if ($this->getAttribute($context["loop"], "first", [])) {
                                echo "class=\"first list-group-item\"";
                            } else {
                                echo "class=\"list-group-item\"";
                            }
                            echo ">
                                                        <div class=\"row\">
                                                            ";
                            // line 252
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarif"], "actes", []), "designationacte", []), "html", null, true);
                            echo "
                                                            <span class=\"pull-right\">

                                        <i class=\"badge badge-info\">";
                            // line 255
                            echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "prix", []), "html", null, true);
                            echo "</i>

                                        </span>
                                                        </div>
                                                    </li>
                                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 261
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 262
                    echo "
                                                ";
                    // line 263
                    if (($this->getAttribute($this->getAttribute($context["facture"], "produits", []), "count", []) > 0)) {
                        // line 264
                        echo "                                                    <li class=\"bg-info\"><strong>Pharmacie</strong></li>
                                                ";
                    }
                    // line 266
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["facture"], "produits", []));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
                        // line 267
                        echo "

                                                    <li ";
                        // line 269
                        if ($this->getAttribute($context["loop"], "first", [])) {
                            echo "class=\"first\"";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "nom", []), "html", null, true);
                        echo "<div class=\"pull-right\">

                                                            <span class=\"label label-info\">";
                        // line 271
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "prix", []), "html", null, true);
                        echo "</span>

                                                            <form method=\"get\" class=\"pull-right\">
                                                                <input type=\"checkbox\" class=\"col-lg-1\" name=\"acte\" value=\"";
                        // line 274
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "id", []), "html", null, true);
                        echo "\" onchange=\"this.form.submit()\">
                                                            </form>
                                                        </div></li>
                                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 278
                    echo "                                            </ul>
                                            <hr>
                                            <div class=\"col-lg-6 col-lg-offset-6 pull-right\">
                                                <table>
                                                    <tr>
                                                        <th>Total Prix :</th><td>";
                    // line 283
                    echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "prix", []), "html", null, true);
                    echo " ( ";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["facture"], "prix", []) * $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "taux"], "method")), "html", null, true);
                    echo " FC)</td>
                                                    </tr>
                                                    ";
                    // line 285
                    $context["som"] = 0;
                    // line 286
                    echo "                                                    ";
                    if (($this->getAttribute($this->getAttribute($context["facture"], "soldes", []), "count", []) > 0)) {
                        // line 287
                        echo "
                                                    ";
                        // line 288
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["facture"], "soldes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["solde"]) {
                            // line 289
                            echo "
                                                        ";
                            // line 290
                            $context["som"] = (($context["som"] ?? $this->getContext($context, "som")) + $this->getAttribute($context["solde"], "solde", []));
                            // line 291
                            echo "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solde'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 292
                        echo "                                                    <tr>
                                                        <th>Total solde</th><td><?php echo 'boom'; ?>";
                        // line 293
                        echo twig_escape_filter($this->env, ($context["som"] ?? $this->getContext($context, "som")), "html", null, true);
                        echo "</td>
                                                        ";
                    }
                    // line 295
                    echo "                                                    </tr>
                                                    <tr>
                                                        <th>Solde :</th><td>";
                    // line 297
                    echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "lasolde", []), "html", null, true);
                    echo " USD ( ";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["facture"], "lasolde", []) * $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "taux"], "method")), "html", null, true);
                    echo " FC)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Reste a payer :</th><td>";
                    // line 300
                    if (($this->getAttribute($context["facture"], "lasolde", []) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "resteAPayer", []), "html", null, true);
                        echo " USD( ";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["facture"], "resteAPayer", []) * $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "taux"], "method")), "html", null, true);
                        echo " FC)";
                    } else {
                        echo "0 USD (0 FC)";
                    }
                    echo " </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <hr class=\"alt2\">
                                            <div>
                                                ";
                    // line 306
                    if ((($this->getAttribute($context["facture"], "validation", []) == 0) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["facture"], "episode", []), "patient", []), "convention", []), "tconvention", []), "id", []) == 1))) {
                        // line 307
                        echo "                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6\">

                                                            <form action=\"";
                        // line 310
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_soldeacte", ["acte" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                        echo "\" method=\"post\" class=\"form-inline\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"solde\">Payer un accompte :</label>
                                                                    <div class=\"input-group form-control\">
                                                                        <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"input-lg col-md-4\">
                                                                        <select name=\"devise\" id=\"devise\" class=\"col-md-4 input-group-addon\">
                                                                            <option selected value=\"USD\">USD</option>
                                                                            <option value=\"CDF\">FC</option>
                                                                        </select>
                                                                        <button type=\"submit\" class=\"col-md-4 btn-sm btn-warning\">accompte</button>
                                                                    </div></div>
                                                            </form>

                                                        </div>
                                                        <div class=\"col-lg-6 \">
                                                            <div class=\"row pull-right\">
                                                                <h6>Validation</h6>
                                                                <form action=\"";
                        // line 327
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_caisse_mettredevise");
                        echo "\" class=\"form-inline\" >

                                                                    <label for=\"devise\"></label>
                                                                    <div class=\"input-group\">
                                                                        <select name=\"devise\" id=\"devise\" class=\"form-control col-lg-6\" onchange=\"this.form.submit()\" >
                                                                            <option ";
                        // line 332
                        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "devise"], "method") == "USD") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "devise"], "method") == ""))) {
                            echo " selected ";
                        }
                        echo " value=\"USD\">USD</option>
                                                                            <option ";
                        // line 333
                        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "devise"], "method") == "CDF")) {
                            echo " selected ";
                        }
                        echo " value=\"CDF\">FC</option>
                                                                        </select>
                                                                        <a class=\"btn-sm btn-success input-group-addon\" href=\"";
                        // line 335
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_valideracte", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                        echo "\">Valider</a>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                    } elseif ((($this->getAttribute(                    // line 342
$context["facture"], "validation", []) == 0) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["facture"], "episode", []), "patient", []), "convention", []), "tconvention", []), "id", []) == 2))) {
                        // line 343
                        echo "                                                    <a class=\"btn-sm btn-success pull-right\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_valideracte", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                        echo "\">Valider</a>
                                                ";
                    } else {
                        // line 345
                        echo "                                                    <div class=\"row\">
                                                        <button class=\"btn btn-block btn-success\">Facture payée</button>
                                                    </div>
                                                ";
                    }
                    // line 349
                    echo "                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 356
                echo "
                    ";
            }
            // line 358
            echo "
                </div>


            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr2\">
                <!-- Second onglet -->
                <div class=\"row\">
                ";
            // line 365
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:creeBS"));
            echo "
                </div>
            </div>

    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr3\">
                <!-- Troisieme onglet -->
        <div class=\"row\">
                ";
            // line 372
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:listeBS"));
            echo "
        </div>
            </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr5\">
                    ";
            // line 376
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooGestionBundle:Becaisse:new"));
            echo "
                    </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr6\">
                    ";
            // line 379
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooGestionBundle:Banque:new"));
            echo "
                </div>
                </div>
        ";
        } else {
            // line 383
            echo "            <div class=\"well bg-danger\">
                <dl class=\"dl-horizontal text-white\">
                    <dt>Date d'ouverture</dt>
                    <dd>";
            // line 386
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "dateouverture", []), "d/m/Y H:i:s"), "html", null, true);
            echo "</dd>
                    <dt>Date de fermeture</dt>
                    <dd>";
            // line 388
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "datefermeture", []), "d/m/Y H:i:s"), "html", null, true);
            echo "</dd>
                    <dt>Montant USD</dt>
                    <dd>";
            // line 390
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "montantusd", []), "html", null, true);
            echo "</dd>
                    <dt>Montant CDF</dt>
                    <dd>";
            // line 392
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "montantcdf", []), "html", null, true);
            echo "</dd>
                </dl>
            </div>
        ";
        }
        // line 396
        echo "    </div>
    <div class=\"col-lg-4 col-md-12\">
    <div class=\"card-box\">
        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"alert alert-success text-center\">";
        // line 401
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:donneTaux"));
        echo "</div>
            </div>
                <div class=\"col-md-6 col-xs-12\">
                    ";
        // line 404
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:nouveauTaux"));
        echo "
                </div>

            </div>
    </div>
            <div class=\"text-center\">
                <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box bg-info widget-user text-white\">
                            <span class=\"fa fa-2x\">
                            ";
        // line 413
        if ((null === ($context["caisseprivusd"] ?? $this->getContext($context, "caisseprivusd")))) {
            // line 414
            echo "                                0 USD
                            ";
        } else {
            // line 416
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["caisseprivusd"] ?? $this->getContext($context, "caisseprivusd")), "usd", []), "html", null, true);
            echo " USD
                            ";
        }
        // line 418
        echo "                            </span>
                         <hr>
                            <h5 class=\"text-white\">Recettes USD</h5>
                        </div>
                </div>
                <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box bg-success widget-user text-white\">
                            <span class=\"fa fa-2x\">
                                ";
        // line 426
        if ((null === ($context["caisseprivcdf"] ?? $this->getContext($context, "caisseprivcdf")))) {
            // line 427
            echo "                                    0 CDF
                                ";
        } else {
            // line 429
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["caisseprivcdf"] ?? $this->getContext($context, "caisseprivcdf")), "cdf", []), "html", null, true);
            echo " CDF
                                ";
        }
        // line 431
        echo "                            </span>
                            <hr>
                            <h5 class=\"text-white\">Recettes CDF</h5>
                            
                        </div>
</div>
                ";
        // line 438
        echo "                        ";
        // line 439
        echo "                            ";
        // line 440
        echo "                                ";
        // line 441
        echo "                                ";
        // line 442
        echo "                                ";
        // line 443
        echo "                                ";
        // line 444
        echo "                                ";
        // line 445
        echo "                                ";
        // line 446
        echo "                            ";
        // line 447
        echo "                            ";
        // line 448
        echo "
                        ";
        // line 450
        echo "</div>
        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box widget-user bg-danger text-white\">
                <span class=\"fa fa-2x\">";
        // line 453
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:sommeBSusd"));
        echo " USD</span>
                <hr>
                <h5 class=\"text-white\">Dépenses</h5>
            </div>

        </div>
        <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box widget-user bg-purple text-white\">
                            <span class=\"fa fa-2x\">";
        // line 461
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:sommeBScdf"));
        echo " CDF</span>
                            <hr>
                            <h5 class=\"text-white\">Dépenses</h5>
                        </div>
</div>
        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box widget-user bg-success text-white\">
                ";
        // line 470
        echo "                ";
        echo twig_escape_filter($this->env, ($context["som_percues"] ?? $this->getContext($context, "som_percues")), "html", null, true);
        echo " USD
                <hr>
                <h5 class=\"text-white\">A Percevoir USD</h5>
            </div>

        </div>
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box widget-user bg-success text-white\">
            ";
        // line 479
        echo twig_escape_filter($this->env, ($context["som_percues2"] ?? $this->getContext($context, "som_percues2")), "html", null, true);
        echo " CDF
            <hr>
            <h5 class=\"text-white\">A Percevoir CDF</h5>
        </div>

    </div>
    <div class=\"col-lg-12 col-md-12\">

        <div class=\"col-lg-12\">
            <div class=\"p-b-10\">
                <p><a class=\"btn btn-danger waves-effect waves-light\" role=\"button\" data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"true\" aria-controls=\"collapseExample\">CLOTURER</a>

                </p>
                <div class=\"collapse\" id=\"collapseExample\" aria-expanded=\"true\" style=\"\">
                    <div class=\"well\">

                        <p>Etes-vous sur de vouloir cloturer votre caisse ?</p>
                        <form action=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cloture_lacaisse", ["id" => $this->getAttribute(($context["cloture"] ?? $this->getContext($context, "cloture")), "id", [])]), "html", null, true);
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"montusd\" value=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->getAttribute(($context["caisseprivusd"] ?? $this->getContext($context, "caisseprivusd")), "usd", []), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"montcdf\" value=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->getAttribute(($context["caisseprivcdf"] ?? $this->getContext($context, "caisseprivcdf")), "cdf", []), "html", null, true);
        echo "\" />
                            <button class=\"btn btn-block btn-danger\" type=\"submit\">CLOTURER</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Caisse:dash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1204 => 498,  1200 => 497,  1196 => 496,  1176 => 479,  1164 => 470,  1154 => 461,  1143 => 453,  1138 => 450,  1135 => 448,  1133 => 447,  1131 => 446,  1129 => 445,  1127 => 444,  1125 => 443,  1123 => 442,  1121 => 441,  1119 => 440,  1117 => 439,  1115 => 438,  1107 => 431,  1101 => 429,  1097 => 427,  1095 => 426,  1085 => 418,  1079 => 416,  1075 => 414,  1073 => 413,  1061 => 404,  1055 => 401,  1048 => 396,  1041 => 392,  1036 => 390,  1031 => 388,  1026 => 386,  1021 => 383,  1014 => 379,  1008 => 376,  1001 => 372,  991 => 365,  982 => 358,  978 => 356,  958 => 349,  952 => 345,  946 => 343,  944 => 342,  934 => 335,  927 => 333,  921 => 332,  913 => 327,  893 => 310,  888 => 307,  886 => 306,  870 => 300,  862 => 297,  858 => 295,  853 => 293,  850 => 292,  844 => 291,  842 => 290,  839 => 289,  835 => 288,  832 => 287,  829 => 286,  827 => 285,  820 => 283,  813 => 278,  795 => 274,  789 => 271,  780 => 269,  776 => 267,  758 => 266,  754 => 264,  752 => 263,  749 => 262,  743 => 261,  723 => 255,  717 => 252,  707 => 250,  689 => 249,  684 => 248,  680 => 246,  678 => 245,  668 => 242,  661 => 238,  657 => 237,  643 => 235,  639 => 234,  633 => 230,  630 => 229,  612 => 228,  609 => 227,  605 => 225,  603 => 224,  596 => 219,  587 => 216,  582 => 214,  578 => 213,  575 => 212,  571 => 211,  556 => 198,  552 => 196,  530 => 187,  524 => 183,  518 => 181,  516 => 180,  499 => 166,  479 => 149,  476 => 148,  474 => 147,  472 => 146,  470 => 145,  468 => 144,  466 => 143,  464 => 142,  462 => 141,  460 => 140,  458 => 139,  456 => 138,  454 => 137,  452 => 136,  450 => 135,  448 => 134,  446 => 133,  441 => 129,  438 => 128,  420 => 113,  416 => 111,  414 => 110,  397 => 103,  389 => 100,  385 => 98,  382 => 97,  379 => 95,  373 => 94,  371 => 93,  368 => 92,  364 => 91,  361 => 90,  358 => 89,  356 => 88,  349 => 86,  342 => 81,  324 => 77,  318 => 74,  309 => 72,  305 => 70,  287 => 69,  283 => 67,  281 => 66,  278 => 65,  272 => 64,  252 => 58,  246 => 55,  236 => 53,  218 => 52,  213 => 51,  209 => 49,  207 => 48,  197 => 45,  190 => 41,  186 => 40,  182 => 39,  168 => 37,  164 => 36,  154 => 33,  151 => 32,  149 => 31,  146 => 30,  128 => 29,  125 => 28,  121 => 26,  119 => 25,  103 => 11,  101 => 10,  98 => 9,  92 => 8,  84 => 6,  78 => 5,  64 => 4,  52 => 3,  38 => 2,  11 => 1,);
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
{% block titre %} {{ parent() }}::Caisse {% endblock %}
{% block titrepage %} La Caisse {% endblock %}
{% block options %}<a href=\"{{ path('requerant_new') }}\" class=\"btn btn-success\">Nouvelle Facture</a> {% endblock %}
{% block menu %}
    {% include \"hostooSanteBundle:menus:menucaisse.html.twig\" %}
{% endblock %}
{% block body %}
    <div class=\"col-lg-8\">
        {% if not (cloture.montantusd > 0 or cloture.montantcdf > 0) %}
            <!-- Tabs Left -->
            <ul class=\"nav nav-tabs\">
                <li role =\"presentation\" class=\"active bg-primary\"><a href=\"#tabr1\" role=\"tab\" data-toggle=\"tab\">En Attente</a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr7\" role=\"tab\" data-toggle=\"tab\" ><span class=\"text-info\">Edition</span></a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr4\" role=\"tab\" data-toggle=\"tab\"><span class=\"text-info\">Payées</span></a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr2\" role=\"tab\" data-toggle=\"tab\"><span class=\"text-info\">Retrait</span></a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr5\" role=\"tab\" data-toggle=\"tab\"><span class=\"text-info\">Depôt</span></a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr6\" role=\"tab\" data-toggle=\"tab\"><span class=\"text-info\">Banque</span></a></li>
                <li role =\"presentation\" class=\" bg-primary\"><a href=\"#tabr3\" role=\"tab\" data-toggle=\"tab\"><span class=\"text-info\">Sorties</span></a></li>
            </ul>

            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"tabr1\">
                <!-- Premier onglet -->
                {% if listeNP|length == 0 %}
                <div class=\"alert alert-danger alert-dismissible\">Pas de Facture</div>
                {% else %}
                    {% set n=0 %}
                {% for facture in listeNP|sort|reverse %}

                    {% set n=n+1 %}
                <div id=\"accordion\" class=\"panel-group\">
                    <div class=\"panel {% if facture.validation == 0 %}panel-custom{% else %}panel-warning{% endif %}\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a href=\"#collapse{{ n }}\" data-parent=\"#accordion\" data-toggle=\"collapse\">
                                    {% if facture.episode %}{{ facture.episode.patient }} {% else %} {{ facture.hospitalisation.patient }} {% endif %} | ({{ facture.datefacture|date('d-m-Y') }})
                                </a>
                                <a href=\"{{ path('print_facture',{'id':facture.id}) }}\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                                <a href=\"{{ path('edition-facture_show',{'id':facture.id }) }}\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                                <a href=\"{{ path('facture_episode',{'id':facture.id }) }}\" class=\"btn btn-primary\"><i class=\"fa fa-cogs\"></i> Traiter</a>
                            </h4>
                        </div>

                        <div class=\"panel-collapse collapse {% if loop.first %}in{% endif %}\" id=\"collapse{{ n }}\">
                            <div class=\"panel-body\">
                                <ul class=\"list-unstyled\">
                                    {% if facture.commandes|length > 0 %}
                                        <li class=\"list-group-item-danger\"><strong>Actes Medicaux</strong></li>
                                    {% endif %}
                                    {% for commande in facture.commandes %}
                                    {% for tarif in commande.tarifs %}
                                    <li {% if loop.first %}class=\"first list-group-item\"{% else %}class=\"list-group-item\"{% endif %}>
                                        <div class=\"row\">
                                        {{ tarif.actes.designationacte }}
                                        <span class=\"pull-right\">

                                        <i class=\"badge badge-info\">{{ tarif.prix }}</i>

                                        </span>
                                        </div>
                                        </li>
                                   {% endfor %}
                                   {% endfor %}

                                    {% if facture.produits.count >0 %}
                                        <li class=\"bg-info\"><strong>Pharmacie</strong></li>
                                    {% endif %}
                                    {% for tarif in facture.produits %}


                                                <li {% if loop.first %}class=\"first\"{% endif %}>{{ tarif.nom }}<div class=\"pull-right\">

                                                            <span class=\"label label-info\">{{ tarif.prix }}</span>

                                                        <form method=\"get\" class=\"pull-right\">
                                                            <input type=\"checkbox\" class=\"col-lg-1\" name=\"acte\" value=\"{{ tarif.id }}\" onchange=\"this.form.submit()\">
                                                        </form>
                                                    </div></li>
                                                {% endfor %}
                                </ul>
<hr>
                                    <div class=\"col-lg-6 col-lg-offset-6 pull-right\">
                                        <table>
                                            <tr>
                                                <th>Total Prix :</th><td>{{ facture.prix }} ( {{ facture.prix * app.session.get('taux') }} FC)</td>
                                            </tr>
                                            {% set som=0 %}
                                        {% if facture.soldes.count>0 %}

                                            {% for solde in facture.soldes %}

                                                {% set som=som+solde.solde %}
                                                {% endfor %}
                                            <tr>
                                        {#<th>Total solde</th><td><?php echo 'boom'; ?>{{ som }}</td>#}
                                            {% endif %}
                                                </tr>
                                            <tr>
                                                <th>Accompte :</th><td>{{ facture.lasolde }} USD ( {{ facture.lasolde * app.session.get('taux') }} FC)</td>
                                            </tr>
                                            <tr>
                                        <th>Reste a payer :</th><td>{% if facture.lasolde>0 %}{{ facture.resteAPayer }} USD( {{ facture.resteAPayer * app.session.get('taux') }} FC){% else %}0 USD (0 FC){% endif %} </td>
                                            </tr>
                                        </table>
                                    </div>
                                <hr class=\"alt2\">
                                <div>

                                    {% if facture.solde>0 %}
                                    <div class=\"row\">
                                        <div class=\"col-lg-6\">
                                    <form action=\"{{ path('hostoo_sante_soldeacte',{'acte':facture.id}) }}\" method=\"post\" class=\"form-inline\">
                                        <div class=\"form-group\">
                                            <label for=\"solde\">Payer un accompte :</label>
                                            <div class=\"input-group form-control\">
                                                <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"input-lg col-md-4\">
                                                <select name=\"devise\" id=\"devise\" class=\"col-md-4 input-group-addon\">
                                                    <option selected value=\"USD\">USD</option>
                                                    <option value=\"CDF\">FC</option>
                                                </select>
                                                <button type=\"submit\" class=\"col-md-4 btn-sm btn-warning\">accompte</button>
                                            </div></div>
                                    </form>
                                        </div>
                                    </div>
                                    {% endif %}
                                    {%  if facture.validation == 0 and (facture.episode and facture.episode.patient.societe.convention.id == 1) or (facture.hospitalisation and facture.hospitalisation.patient.societe.convention.id) ==1 %}
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">

                                                {#<h5>Validation avec Visa</h5>#}
                                                {#<form action=\"{{ path('valider_par_visa',{'fact': facture.id }) }}\" method=\"post\">#}
                                                    {#<div class=\"form-inline\">#}
                                                        {#<label for=\"visa\">Selectionnez un Visa</label>#}
                                                        {#<select name=\"visa\" id=\"visa\" class=\"form-control\">#}
                                                            {#{% set lock = 0 %}#}
                                                            {#{% for visa in visas %}#}
                                                                {#{% if visa.patient.id == facture.episode.patient.id %}#}
                                                                    {#{% set lock = 1 %}#}
                                                            {#<option value=\"{{ visa.id }}\">{{ visa.auteur~\"/\"~visa.datevisa|date('YMd') }}</option>#}
                                                                {#{% endif %}#}
                                                            {#{% endfor %}#}
                                                        {#</select>#}
                                                        {#<input type=\"submit\" class=\"btn btn-primary\" {% if lock == 0 %}disabled{% endif %} value=\"Valider\">#}
                                                    {#</div>#}
                                                {#</form>#}

                                                <form action=\"{{ path('hostoo_sante_soldeacte',{'acte':facture.id}) }}\" method=\"post\" class=\"form-inline\">
                                                    <div class=\"form-group\">
                                                    <label for=\"solde\">Payer un accompte :</label>
                                                    <div class=\"input-group form-control\">
                                                        <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"input-lg col-md-4\">
                                                        <select name=\"devise\" id=\"devise\" class=\"col-md-4 input-group-addon\">
                                                            <option selected value=\"USD\">USD</option>
                                                            <option value=\"CDF\">FC</option>
                                                        </select>
                                                        <button type=\"submit\" class=\"col-md-4 btn-sm btn-warning\">accompte</button>
                                                    </div></div>
                                                </form>

                                            </div>
                                            <div class=\"col-lg-6 \">
                                                <div class=\"row pull-right\">
                                                    <h6>Validation</h6>
                                                <form action=\"{{ path('hostoo_sante_valideracte',{'id':facture.id}) }}\" >
                                                    <div  class=\"form-inline\">
                                                    <label for=\"devise\"></label>
                                                    <select name=\"devise\" id=\"devise\" class=\"form-control\" >
                                                        <option selected value=\"USD\">USD</option>
                                                        <option value=\"CDF\">FC</option>
                                                    </select>
                                                    <input class=\"btn-sm btn-success\" type=\"submit\" value=\"Valider\" />
                                                    </div>
                                                </form>

                                            </div>
                                            </div>
                                        </div>
                                    {%  elseif facture.validation == 0 and facture.episode.patient.societe.convention.tconvention.id ==2 %}
                                        <a class=\"btn-sm btn-success pull-right\" href=\"{{ path('hostoo_sante_valideracte',{'id':facture.id}) }}\">Valider</a>
                                    {% else %}
                                        <div class=\"row\">
                                            <button class=\"btn btn-block btn-success\">Facture payée</button>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>


{% endfor %}

                        {% endif %}

                </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr7\">
                    <table class=\"table table-condensed\">
                        <thead>
                        <tr>
                            <th>Noms</th>
                            <th>Date</th>
                            <th>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for epi in epis %}
                        <tr>
                            <td>{{ epi.patient }}</td>
                            <td>{{ epi.dateepisode|date('d/m/Y') }}</td>
                            <td>
                                <a href=\"{{ path('creer_une_facture',{'id':epi.id }) }}\" class=\"btn btn-default\">Creer une facture</a></td>
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr4\">
                    <!-- Premier onglet -->
                    {% if liste is null %}
                        <span class=\"alert alert-info alert-dismissible\">Pas de Factures en attente</span>
                    {% else %}
                        {% set n=0 %}
                        {% for facture in liste|sort|reverse %}
                            {% set n=n+1 %}
                            <div id=\"accordion2\" class=\"panel-group\">
                                <div class=\"panel panel-success\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a href=\"#collapse_{{ n }}\" data-parent=\"#accordion2\" data-toggle=\"collapse\">
                                                {% if facture.episode %}{{ facture.episode.patient }} {% else %} {{ facture.hospitalisation.patient }} {% endif %}| ({{ facture.datefacture|date('d-m-Y') }})
                                            </a>
                                            <a href=\"{{ path('print_facture',{'id':facture.id}) }}\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                                            <a href=\"{{ path('edition-facture_show',{'id':facture.id}) }}\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                                        </h4>
                                    </div>

                                    <div class=\"panel-collapse collapse {% if loop.first %}in{% endif %}\" id=\"collapse_{{ n }}\">
                                        <div class=\"panel-body\">
                                            <ul class=\"list-unstyled\">
                                                {% if facture.commandes|length > 0 %}
                                                    <li class=\"list-group-item-danger\"><strong>Actes Medicaux</strong></li>
                                                {% endif %}
                                                {% for cmd in facture.commandes %}
                                                {% for tarif in cmd.tarifs %}
                                                    <li {% if loop.first %}class=\"first list-group-item\"{% else %}class=\"list-group-item\"{% endif %}>
                                                        <div class=\"row\">
                                                            {{ tarif.actes.designationacte }}
                                                            <span class=\"pull-right\">

                                        <i class=\"badge badge-info\">{{ tarif.prix }}</i>

                                        </span>
                                                        </div>
                                                    </li>
                                                {% endfor %}
                                                {% endfor %}

                                                {% if facture.produits.count >0 %}
                                                    <li class=\"bg-info\"><strong>Pharmacie</strong></li>
                                                {% endif %}
                                                {% for tarif in facture.produits %}


                                                    <li {% if loop.first %}class=\"first\"{% endif %}>{{ tarif.nom }}<div class=\"pull-right\">

                                                            <span class=\"label label-info\">{{ tarif.prix }}</span>

                                                            <form method=\"get\" class=\"pull-right\">
                                                                <input type=\"checkbox\" class=\"col-lg-1\" name=\"acte\" value=\"{{ tarif.id }}\" onchange=\"this.form.submit()\">
                                                            </form>
                                                        </div></li>
                                                {% endfor %}
                                            </ul>
                                            <hr>
                                            <div class=\"col-lg-6 col-lg-offset-6 pull-right\">
                                                <table>
                                                    <tr>
                                                        <th>Total Prix :</th><td>{{ facture.prix }} ( {{ facture.prix * app.session.get('taux') }} FC)</td>
                                                    </tr>
                                                    {% set som=0 %}
                                                    {% if facture.soldes.count>0 %}

                                                    {% for solde in facture.soldes %}

                                                        {% set som=som+solde.solde %}
                                                    {% endfor %}
                                                    <tr>
                                                        <th>Total solde</th><td><?php echo 'boom'; ?>{{ som }}</td>
                                                        {% endif %}
                                                    </tr>
                                                    <tr>
                                                        <th>Solde :</th><td>{{ facture.lasolde }} USD ( {{ facture.lasolde * app.session.get('taux') }} FC)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Reste a payer :</th><td>{% if facture.lasolde>0 %}{{ facture.resteAPayer }} USD( {{ facture.resteAPayer * app.session.get('taux') }} FC){% else %}0 USD (0 FC){% endif %} </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <hr class=\"alt2\">
                                            <div>
                                                {%  if facture.validation == 0 and facture.episode.patient.convention.tconvention.id ==1 %}
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6\">

                                                            <form action=\"{{ path('hostoo_sante_soldeacte',{'acte':facture.id}) }}\" method=\"post\" class=\"form-inline\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"solde\">Payer un accompte :</label>
                                                                    <div class=\"input-group form-control\">
                                                                        <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"input-lg col-md-4\">
                                                                        <select name=\"devise\" id=\"devise\" class=\"col-md-4 input-group-addon\">
                                                                            <option selected value=\"USD\">USD</option>
                                                                            <option value=\"CDF\">FC</option>
                                                                        </select>
                                                                        <button type=\"submit\" class=\"col-md-4 btn-sm btn-warning\">accompte</button>
                                                                    </div></div>
                                                            </form>

                                                        </div>
                                                        <div class=\"col-lg-6 \">
                                                            <div class=\"row pull-right\">
                                                                <h6>Validation</h6>
                                                                <form action=\"{{ path('hostoo_caisse_mettredevise') }}\" class=\"form-inline\" >

                                                                    <label for=\"devise\"></label>
                                                                    <div class=\"input-group\">
                                                                        <select name=\"devise\" id=\"devise\" class=\"form-control col-lg-6\" onchange=\"this.form.submit()\" >
                                                                            <option {% if app.session.get('devise')=='USD' or app.session.get('devise')=='' %} selected {% endif %} value=\"USD\">USD</option>
                                                                            <option {% if app.session.get('devise')=='CDF' %} selected {% endif %} value=\"CDF\">FC</option>
                                                                        </select>
                                                                        <a class=\"btn-sm btn-success input-group-addon\" href=\"{{ path('hostoo_sante_valideracte',{'id':facture.id}) }}\">Valider</a>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                {%  elseif facture.validation == 0 and facture.episode.patient.convention.tconvention.id ==2 %}
                                                    <a class=\"btn-sm btn-success pull-right\" href=\"{{ path('hostoo_sante_valideracte',{'id':facture.id}) }}\">Valider</a>
                                                {% else %}
                                                    <div class=\"row\">
                                                        <button class=\"btn btn-block btn-success\">Facture payée</button>
                                                    </div>
                                                {% endif %}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        {% endfor %}

                    {% endif %}

                </div>


            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr2\">
                <!-- Second onglet -->
                <div class=\"row\">
                {{ render(controller('hostooSanteBundle:Caisse:creeBS')) }}
                </div>
            </div>

    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr3\">
                <!-- Troisieme onglet -->
        <div class=\"row\">
                {{ render(controller('hostooSanteBundle:Caisse:listeBS')) }}
        </div>
            </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr5\">
                    {{ render(controller('hostooGestionBundle:Becaisse:new')) }}
                    </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr6\">
                    {{ render(controller('hostooGestionBundle:Banque:new')) }}
                </div>
                </div>
        {% else %}
            <div class=\"well bg-danger\">
                <dl class=\"dl-horizontal text-white\">
                    <dt>Date d'ouverture</dt>
                    <dd>{{ cloture.dateouverture|date('d/m/Y H:i:s') }}</dd>
                    <dt>Date de fermeture</dt>
                    <dd>{{ cloture.datefermeture|date('d/m/Y H:i:s') }}</dd>
                    <dt>Montant USD</dt>
                    <dd>{{ cloture.montantusd }}</dd>
                    <dt>Montant CDF</dt>
                    <dd>{{ cloture.montantcdf }}</dd>
                </dl>
            </div>
        {% endif %}
    </div>
    <div class=\"col-lg-4 col-md-12\">
    <div class=\"card-box\">
        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"alert alert-success text-center\">{{ render(controller('hostooSanteBundle:Caisse:donneTaux')) }}</div>
            </div>
                <div class=\"col-md-6 col-xs-12\">
                    {{ render(controller('hostooSanteBundle:Caisse:nouveauTaux')) }}
                </div>

            </div>
    </div>
            <div class=\"text-center\">
                <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box bg-info widget-user text-white\">
                            <span class=\"fa fa-2x\">
                            {% if caisseprivusd is null %}
                                0 USD
                            {% else %}
                                {{ caisseprivusd.usd }} USD
                            {% endif %}
                            </span>
                         <hr>
                            <h5 class=\"text-white\">Recettes USD</h5>
                        </div>
                </div>
                <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box bg-success widget-user text-white\">
                            <span class=\"fa fa-2x\">
                                {% if caisseprivcdf is null %}
                                    0 CDF
                                {% else %}
                                    {{ caisseprivcdf.cdf }} CDF
                                {% endif %}
                            </span>
                            <hr>
                            <h5 class=\"text-white\">Recettes CDF</h5>
                            
                        </div>
</div>
                {#<div class=\"col-lg-6 col-md-12\">#}
                        {#<div class=\"card-box bg-primary text-white widget-user\">#}
                            {#<span class=\"fa fa-2x\">#}
                                {#{% if caisseconvusd == null %}#}
                                {#0 USD#}
                                {#{% else %}#}
                                {#{{ caisseconvusd.usd }} USD#}
                                {#{% endif %}#}
                                {#</span>#}
                            {#<hr>#}
                            {#<h5 class=\"text-white\">Caisse Conventionnés USD</h5>#}

                        {#</div>#}
</div>
        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box widget-user bg-danger text-white\">
                <span class=\"fa fa-2x\">{{ render(controller(('hostooSanteBundle:Caisse:sommeBSusd'))) }} USD</span>
                <hr>
                <h5 class=\"text-white\">Dépenses</h5>
            </div>

        </div>
        <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box widget-user bg-purple text-white\">
                            <span class=\"fa fa-2x\">{{ render(controller(('hostooSanteBundle:Caisse:sommeBScdf'))) }} CDF</span>
                            <hr>
                            <h5 class=\"text-white\">Dépenses</h5>
                        </div>
</div>
        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box widget-user bg-success text-white\">
                {#<span class=\"fa fa-2x\">{% if caisseprivusd.usd and render(controller(('hostooSanteBundle:Caisse:sommeBSusd')))) > 0 %}{{ (caisseprivusd.usd-render(controller(('hostooSanteBundle:Caisse:sommeBSusd'))))|number_format }} {% endif %} USD</span>
                #}
                {{ som_percues }} USD
                <hr>
                <h5 class=\"text-white\">A Percevoir USD</h5>
            </div>

        </div>
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box widget-user bg-success text-white\">
            {#<span class=\"fa fa-2x\">{% if caisseprivusd.usd and render(controller(('hostooSanteBundle:Caisse:sommeBSusd')))) > 0 %}{{ (caisseprivusd.usd-render(controller(('hostooSanteBundle:Caisse:sommeBSusd'))))|number_format }} {% endif %} USD</span>
            #}{{ som_percues2 }} CDF
            <hr>
            <h5 class=\"text-white\">A Percevoir CDF</h5>
        </div>

    </div>
    <div class=\"col-lg-12 col-md-12\">

        <div class=\"col-lg-12\">
            <div class=\"p-b-10\">
                <p><a class=\"btn btn-danger waves-effect waves-light\" role=\"button\" data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"true\" aria-controls=\"collapseExample\">CLOTURER</a>

                </p>
                <div class=\"collapse\" id=\"collapseExample\" aria-expanded=\"true\" style=\"\">
                    <div class=\"well\">

                        <p>Etes-vous sur de vouloir cloturer votre caisse ?</p>
                        <form action=\"{{ path('cloture_lacaisse',{'id': cloture.id }) }}\" method=\"post\">
                            <input type=\"hidden\" name=\"montusd\" value=\"{{ caisseprivusd.usd }}\" />
                            <input type=\"hidden\" name=\"montcdf\" value=\"{{ caisseprivcdf.cdf }}\" />
                            <button class=\"btn btn-block btn-danger\" type=\"submit\">CLOTURER</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>

{% endblock %}", "hostooSanteBundle:Caisse:dash.html.twig", "C:\\wamp64\\www\\hostoo\\src\\hostoo\\SanteBundle/Resources/views/Caisse/dash.html.twig");
    }
}
