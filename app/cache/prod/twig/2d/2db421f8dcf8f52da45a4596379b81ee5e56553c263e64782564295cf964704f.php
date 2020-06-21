<?php

/* hostooSanteBundle:Caisse:dash_tout.html.twig */
class __TwigTemplate_db7d8079e3db9bf236ba036bd3467fad177468051567fb80b7bfe98173c20c82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Caisse:dash_tout.html.twig", 1);
        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Caisse:dash_tout.html.twig"));

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
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "hostooSanteBundle:Caisse:dash_tout.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"col-lg-9\">
            <!-- Tabs Left -->
            <ul class=\"nav nav-tabs\">
                <li role =\"presentation\" class=\"active\"><a href=\"#tabr1\" role=\"tab\" data-toggle=\"tab\" class=\"bg-danger\">Factures en attente</a></li>
                <li role =\"presentation\"><a href=\"#tabr4\" role=\"tab\" data-toggle=\"tab\">Payées</a></li>
                ";
        // line 14
        echo "                ";
        // line 15
        echo "            </ul>

            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"tabr1\">
                <!-- Premier onglet -->


                        <table class=\"table table-striped\">
                        <thead>
                         <tr>
                         <th>N°</th>
                         <th>NOMS</th>
                         <th>Etat</th>
                         <th>MONTANT A PAYER</th>
                         <th>SOLDE</th>
                         <th>RESTE A PAYER</th>
                         <th></th>
                         <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeNP"] ?? $this->getContext($context, "listeNP")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 37
            echo "                            ";
            if ($this->getAttribute($context["facture"], "episode", [])) {
                // line 38
                echo "                            <tr>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "id", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "episode", []), "patient", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo (($this->getAttribute($context["facture"], "validation", [])) ? ("<span class=\"label label-success\">PAYEE</span>") : ("<span class=\"label label-warning\">En Attente</span>"));
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "prix", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "lasolde", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, ($this->getAttribute($context["facture"], "prix", []) - $this->getAttribute($context["facture"], "lasolde", [])), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                if ((($this->getAttribute($context["facture"], "lasolde", []) > 0) && ($this->getAttribute($context["facture"], "validation", []) == 1))) {
                    // line 46
                    echo "                              <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                    <form action=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_soldeacte", ["acte" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                    echo "\" method=\"post\">
                                        <div class=\"form-inline\">
                                            <label for=\"solde\">Payer un accompte :</label>
                                            <div class=\"form-group\">
                                                <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"form-control\">
                                                <select name=\"devise\" id=\"devise\" class=\"form-control\">
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
                // line 63
                echo "</td>
                             <td>
                             <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_facture", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                             <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edition-facture_show", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                             </td>
</tr>
                            ";
            }
            // line 70
            echo "
                            ";
            // line 71
            if ($this->getAttribute($context["facture"], "requerant", [])) {
                // line 72
                echo "                            <tr>
                            <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "id", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 74
                echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($context["facture"], "requerant", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["facture"], "requerant", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($context["facture"], "requerant", []), "prenom", [])), "html", null, true);
                echo "</td>
                            <td>";
                // line 75
                echo (($this->getAttribute($context["facture"], "validation", [])) ? ("<span class=\"label label-success\">PAYEE</span>") : ("<span class=\"label label-warning\">En Attente</span>"));
                echo "</td>
                            <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "prix", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "lasolde", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 78
                echo twig_escape_filter($this->env, ($this->getAttribute($context["facture"], "prix", []) - $this->getAttribute($context["facture"], "lasolde", [])), "html", null, true);
                echo "</td>
                            <td>";
                // line 79
                if ((($this->getAttribute($context["facture"], "lasolde", []) > 0) && ($this->getAttribute($context["facture"], "validation", []) == 1))) {
                    // line 80
                    echo "                              <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                    <form action=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_soldeacte", ["acte" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                    echo "\" method=\"post\">
                                        <div class=\"form-inline\">
                                            <label for=\"solde\">Payer un accompte :</label>
                                            <div class=\"form-group\">
                                                <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"form-control\">
                                                <select name=\"devise\" id=\"devise\" class=\"form-control\">
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
                // line 97
                echo "</td>
                             <td>
                             <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_facture", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                             <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edition-facture_show", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                             </td>
</tr>
                            ";
            }
            // line 104
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                        </tbody>
                        </table>

                </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr4\">
           <table class=\"table table-striped\">
                        <thead>
                         <tr>
                         <th>N°</th>
                         <th>NOMS</th>
                         <th>Etat</th>
                         <th>MONTANT A PAYER</th>
                         <th>SOLDE</th>
                         <th>RESTE A PAYER</th>
                         <th></th>
                         <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 125
            echo "                            ";
            if ($this->getAttribute($context["facture"], "episode", [])) {
                // line 126
                echo "                            <tr>
                            <td>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "id", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "episode", []), "patient", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 129
                echo (($this->getAttribute($context["facture"], "validation", [])) ? ("<span class=\"label label-success\">PAYEE</span>") : ("<span class=\"label label-warning\">En Attente</span>"));
                echo "</td>
                            <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "prix", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "lasolde", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 132
                echo twig_escape_filter($this->env, ($this->getAttribute($context["facture"], "prix", []) - $this->getAttribute($context["facture"], "lasolde", [])), "html", null, true);
                echo "</td>
                            <td>";
                // line 133
                if ((($this->getAttribute($context["facture"], "lasolde", []) > 0) && ($this->getAttribute($context["facture"], "validation", []) == 1))) {
                    // line 134
                    echo "                              <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                    <form action=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_soldeacte", ["acte" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                    echo "\" method=\"post\">
                                        <div class=\"form-inline\">
                                            <label for=\"solde\">Payer un accompte :</label>
                                            <div class=\"form-group\">
                                                <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"form-control\">
                                                <select name=\"devise\" id=\"devise\" class=\"form-control\">
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
                // line 151
                echo "</td>
                             <td>
                             <a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_facture", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                             <a href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edition-facture_show", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                             </td>
</tr>
                            ";
            } elseif ($this->getAttribute(            // line 157
$context["facture"], "requerant", [])) {
                // line 158
                echo "                            <tr>
                            <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "id", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 160
                echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($context["facture"], "requerant", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["facture"], "requerant", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($context["facture"], "requerant", []), "prenom", [])), "html", null, true);
                echo "</td>
                            <td>";
                // line 161
                echo (($this->getAttribute($context["facture"], "validation", [])) ? ("<span class=\"label label-success\">PAYEE</span>") : ("<span class=\"label label-warning\">En Attente</span>"));
                echo "</td>
                            <td>";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "prix", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "lasolde", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 164
                echo twig_escape_filter($this->env, ($this->getAttribute($context["facture"], "prix", []) - $this->getAttribute($context["facture"], "lasolde", [])), "html", null, true);
                echo "</td>
                            <td>";
                // line 165
                if ((($this->getAttribute($context["facture"], "lasolde", []) > 0) && ($this->getAttribute($context["facture"], "validation", []) == 1))) {
                    // line 166
                    echo "                              <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                    <form action=\"";
                    // line 168
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_soldeacte", ["acte" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                    echo "\" method=\"post\">
                                        <div class=\"form-inline\">
                                            <label for=\"solde\">Payer un accompte :</label>
                                            <div class=\"form-group\">
                                                <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"form-control\">
                                                <select name=\"devise\" id=\"devise\" class=\"form-control\">
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
                // line 183
                echo "</td>
                             <td>
                             <a href=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_facture", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                             <a href=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edition-facture_show", ["id" => $this->getAttribute($context["facture"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                             </td>
</tr>
                            ";
            }
            // line 190
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                        </tbody>
                        </table>

                </div>


            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr2\">
                <!-- Second onglet -->
                <div class=\"row\">
                ";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:creeBS"));
        echo "
                </div>
            </div>

    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr3\">
                <!-- Troisieme onglet -->
        <div class=\"row\">
                ";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:listeBS"));
        echo "
        </div>
            </div>
                </div></div>
    <div class=\"col-lg-3 col-md-12\">
   <div class=\"card-box\">
        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"alert alert-success\">";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:donneTaux"));
        echo "</div>
            </div>
                <div class=\"col-md-6 col-xs-12\">
                    ";
        // line 218
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
        // line 227
        if (($this->getAttribute(($context["caisseprivusd"] ?? $this->getContext($context, "caisseprivusd")), "usd", []) == null)) {
            // line 228
            echo "                                0 USD
                            ";
        } else {
            // line 230
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["caisseprivusd"] ?? $this->getContext($context, "caisseprivusd")), "usd", []), "html", null, true);
            echo " USD
                            ";
        }
        // line 232
        echo "                            </span>
                         <hr>
                            <h5 class=\"text-white\">Caisse Privées USD</h5>
                        </div>
                </div>
                <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box bg-success widget-user text-white\">
                            <span class=\"fa fa-2x\">
                                ";
        // line 240
        if (($this->getAttribute(($context["caisseprivcdf"] ?? $this->getContext($context, "caisseprivcdf")), "cdf", []) == null)) {
            // line 241
            echo "                                    0 CDF
                                ";
        } else {
            // line 243
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["caisseprivcdf"] ?? $this->getContext($context, "caisseprivcdf")), "cdf", []), "html", null, true);
            echo " CDF
                                ";
        }
        // line 245
        echo "                            </span>
                            <hr>
                            <h5 class=\"text-white\">Caisse Privées CDF</h5>
                            
                        </div>
</div>
                <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box bg-primary text-white widget-user\">
                            <span class=\"fa fa-2x\">
                                ";
        // line 254
        if ((($context["caisseconvusd"] ?? $this->getContext($context, "caisseconvusd")) == null)) {
            // line 255
            echo "                                0 USD
                                ";
        } else {
            // line 257
            echo "                                ";
            echo twig_escape_filter($this->env, ($context["caisseconvusd"] ?? $this->getContext($context, "caisseconvusd")), "html", null, true);
            echo " USD
                                ";
        }
        // line 259
        echo "                                </span>
                            <hr>
                            <h5 class=\"text-white\">Caisse Conventionnés USD</h5>

                        </div>
</div>
                <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box widget-user bg-purple text-white\">
                            <span class=\"fa fa-2x\">";
        // line 267
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:sommeBScdf"));
        echo " CDF</span>
                            <hr>
                            <h5 class=\"text-white\">Dépenses</h5>
                        </div>
</div>
                <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box widget-user bg-danger text-white\">
                            <span class=\"fa fa-2x\">";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Caisse:sommeBSusd"));
        echo " USD</span>
                            <hr>
                            <h5 class=\"text-white\">Dépenses</h5>
                        </div>

            </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 293
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 294
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 295
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooSanteBundle:Caisse:dash_tout.html.twig", 295)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 297
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 298
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 300
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    ";
        // line 301
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooSanteBundle:Caisse:dash_tout.html.twig", 301)->display($context);
        // line 302
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.table').dataTable({
                deferRender:    true,
                scrollY:        2000,
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
                    }},
                    sorting:[[0,'desc']]
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
        // line 366
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
        return "hostooSanteBundle:Caisse:dash_tout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 366,  619 => 302,  617 => 301,  613 => 300,  609 => 299,  605 => 298,  599 => 297,  592 => 295,  587 => 294,  581 => 293,  565 => 274,  555 => 267,  545 => 259,  539 => 257,  535 => 255,  533 => 254,  522 => 245,  516 => 243,  512 => 241,  510 => 240,  500 => 232,  494 => 230,  490 => 228,  488 => 227,  476 => 218,  470 => 215,  459 => 207,  449 => 200,  438 => 191,  432 => 190,  425 => 186,  421 => 185,  417 => 183,  398 => 168,  394 => 166,  392 => 165,  388 => 164,  384 => 163,  380 => 162,  376 => 161,  372 => 160,  368 => 159,  365 => 158,  363 => 157,  357 => 154,  353 => 153,  349 => 151,  330 => 136,  326 => 134,  324 => 133,  320 => 132,  316 => 131,  312 => 130,  308 => 129,  304 => 128,  300 => 127,  297 => 126,  294 => 125,  290 => 124,  269 => 105,  263 => 104,  256 => 100,  252 => 99,  248 => 97,  229 => 82,  225 => 80,  223 => 79,  219 => 78,  215 => 77,  211 => 76,  207 => 75,  203 => 74,  199 => 73,  196 => 72,  194 => 71,  191 => 70,  184 => 66,  180 => 65,  176 => 63,  157 => 48,  153 => 46,  151 => 45,  147 => 44,  143 => 43,  139 => 42,  135 => 41,  131 => 40,  127 => 39,  124 => 38,  121 => 37,  117 => 36,  94 => 15,  92 => 14,  85 => 8,  79 => 7,  71 => 5,  65 => 4,  53 => 3,  39 => 2,  11 => 1,);
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
{% block menu %}
    {% include \"hostooSanteBundle:menus:menucaisse.html.twig\" %}
{% endblock %}
{% block body %}
    <div class=\"col-lg-9\">
            <!-- Tabs Left -->
            <ul class=\"nav nav-tabs\">
                <li role =\"presentation\" class=\"active\"><a href=\"#tabr1\" role=\"tab\" data-toggle=\"tab\" class=\"bg-danger\">Factures en attente</a></li>
                <li role =\"presentation\"><a href=\"#tabr4\" role=\"tab\" data-toggle=\"tab\">Payées</a></li>
                {#<li role =\"presentation\"><a href=\"#tabr2\" role=\"tab\" data-toggle=\"tab\">Retrait d'argent</a></li>#}
                {#<li role =\"presentation\"><a href=\"#tabr3\" role=\"tab\" data-toggle=\"tab\">Mouvements</a></li>#}
            </ul>

            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"tabr1\">
                <!-- Premier onglet -->


                        <table class=\"table table-striped\">
                        <thead>
                         <tr>
                         <th>N°</th>
                         <th>NOMS</th>
                         <th>Etat</th>
                         <th>MONTANT A PAYER</th>
                         <th>SOLDE</th>
                         <th>RESTE A PAYER</th>
                         <th></th>
                         <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for facture in listeNP %}
                            {% if facture.episode %}
                            <tr>
                            <td>{{ facture.id }}</td>
                            <td>{{ facture.episode.patient }}</td>
                            <td>{{ facture.validation?'<span class=\"label label-success\">PAYEE</span>':'<span class=\"label label-warning\">En Attente</span>' }}</td>
                            <td>{{ facture.prix }}</td>
                            <td>{{ facture.lasolde }}</td>
                            <td>{{ facture.prix-facture.lasolde }}</td>
                            <td>{%  if facture.lasolde>0 and facture.validation == 1  %}
                              <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                    <form action=\"{{ path('hostoo_sante_soldeacte',{'acte':facture.id}) }}\" method=\"post\">
                                        <div class=\"form-inline\">
                                            <label for=\"solde\">Payer un accompte :</label>
                                            <div class=\"form-group\">
                                                <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"form-control\">
                                                <select name=\"devise\" id=\"devise\" class=\"form-control\">
                                                    <option selected value=\"USD\">USD</option>
                                                    <option value=\"CDF\">FC</option>
                                                </select>
                                                <button type=\"submit\" class=\"col-md-4 btn-sm btn-warning\">accompte</button>
                                            </div></div>
                                    </form>
                                        </div>
                                    </div>

                             {% endif %}</td>
                             <td>
                             <a href=\"{{ path('print_facture',{'id':facture.id}) }}\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                             <a href=\"{{ path('edition-facture_show',{'id':facture.id}) }}\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                             </td>
</tr>
                            {% endif %}

                            {% if facture.requerant %}
                            <tr>
                            <td>{{ facture.id }}</td>
                            <td>{{ facture.requerant.nom~\" \"~facture.requerant.postnom~\" \"~facture.requerant.prenom }}</td>
                            <td>{{ facture.validation?'<span class=\"label label-success\">PAYEE</span>':'<span class=\"label label-warning\">En Attente</span>' }}</td>
                            <td>{{ facture.prix }}</td>
                            <td>{{ facture.lasolde }}</td>
                            <td>{{ facture.prix-facture.lasolde }}</td>
                            <td>{%  if facture.lasolde>0 and facture.validation == 1  %}
                              <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                    <form action=\"{{ path('hostoo_sante_soldeacte',{'acte':facture.id}) }}\" method=\"post\">
                                        <div class=\"form-inline\">
                                            <label for=\"solde\">Payer un accompte :</label>
                                            <div class=\"form-group\">
                                                <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"form-control\">
                                                <select name=\"devise\" id=\"devise\" class=\"form-control\">
                                                    <option selected value=\"USD\">USD</option>
                                                    <option value=\"CDF\">FC</option>
                                                </select>
                                                <button type=\"submit\" class=\"col-md-4 btn-sm btn-warning\">accompte</button>
                                            </div></div>
                                    </form>
                                        </div>
                                    </div>

                             {% endif %}</td>
                             <td>
                             <a href=\"{{ path('print_facture',{'id':facture.id}) }}\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                             <a href=\"{{ path('edition-facture_show',{'id':facture.id}) }}\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                             </td>
</tr>
                            {% endif %}
                        {% endfor %}
                        </tbody>
                        </table>

                </div>
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabr4\">
           <table class=\"table table-striped\">
                        <thead>
                         <tr>
                         <th>N°</th>
                         <th>NOMS</th>
                         <th>Etat</th>
                         <th>MONTANT A PAYER</th>
                         <th>SOLDE</th>
                         <th>RESTE A PAYER</th>
                         <th></th>
                         <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for facture in liste %}
                            {% if facture.episode %}
                            <tr>
                            <td>{{ facture.id }}</td>
                            <td>{{ facture.episode.patient }}</td>
                            <td>{{ facture.validation?'<span class=\"label label-success\">PAYEE</span>':'<span class=\"label label-warning\">En Attente</span>' }}</td>
                            <td>{{ facture.prix }}</td>
                            <td>{{ facture.lasolde }}</td>
                            <td>{{ facture.prix-facture.lasolde }}</td>
                            <td>{%  if facture.lasolde>0 and facture.validation == 1  %}
                              <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                    <form action=\"{{ path('hostoo_sante_soldeacte',{'acte':facture.id}) }}\" method=\"post\">
                                        <div class=\"form-inline\">
                                            <label for=\"solde\">Payer un accompte :</label>
                                            <div class=\"form-group\">
                                                <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"form-control\">
                                                <select name=\"devise\" id=\"devise\" class=\"form-control\">
                                                    <option selected value=\"USD\">USD</option>
                                                    <option value=\"CDF\">FC</option>
                                                </select>
                                                <button type=\"submit\" class=\"col-md-4 btn-sm btn-warning\">accompte</button>
                                            </div></div>
                                    </form>
                                        </div>
                                    </div>

                             {% endif %}</td>
                             <td>
                             <a href=\"{{ path('print_facture',{'id':facture.id}) }}\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                             <a href=\"{{ path('edition-facture_show',{'id':facture.id}) }}\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                             </td>
</tr>
                            {% elseif facture.requerant %}
                            <tr>
                            <td>{{ facture.id }}</td>
                            <td>{{  facture.requerant.nom~\" \"~facture.requerant.postnom~\" \"~facture.requerant.prenom }}</td>
                            <td>{{ facture.validation?'<span class=\"label label-success\">PAYEE</span>':'<span class=\"label label-warning\">En Attente</span>' }}</td>
                            <td>{{ facture.prix }}</td>
                            <td>{{ facture.lasolde }}</td>
                            <td>{{ facture.prix-facture.lasolde }}</td>
                            <td>{%  if facture.lasolde>0 and facture.validation == 1  %}
                              <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                    <form action=\"{{ path('hostoo_sante_soldeacte',{'acte':facture.id}) }}\" method=\"post\">
                                        <div class=\"form-inline\">
                                            <label for=\"solde\">Payer un accompte :</label>
                                            <div class=\"form-group\">
                                                <input type=\"number\" name=\"solde\"  id=\"solde\" class=\"form-control\">
                                                <select name=\"devise\" id=\"devise\" class=\"form-control\">
                                                    <option selected value=\"USD\">USD</option>
                                                    <option value=\"CDF\">FC</option>
                                                </select>
                                                <button type=\"submit\" class=\"col-md-4 btn-sm btn-warning\">accompte</button>
                                            </div></div>
                                    </form>
                                        </div>
                                    </div>

                             {% endif %}</td>
                             <td>
                             <a href=\"{{ path('print_facture',{'id':facture.id}) }}\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a>
                             <a href=\"{{ path('edition-facture_show',{'id':facture.id}) }}\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i></a>
                             </td>
</tr>
                            {% endif %}
                        {% endfor %}
                        </tbody>
                        </table>

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
                </div></div>
    <div class=\"col-lg-3 col-md-12\">
   <div class=\"card-box\">
        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"alert alert-success\">{{ render(controller('hostooSanteBundle:Caisse:donneTaux')) }}</div>
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
                            {% if caisseprivusd.usd==null %}
                                0 USD
                            {% else %}
                                {{ caisseprivusd.usd }} USD
                            {% endif %}
                            </span>
                         <hr>
                            <h5 class=\"text-white\">Caisse Privées USD</h5>
                        </div>
                </div>
                <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box bg-success widget-user text-white\">
                            <span class=\"fa fa-2x\">
                                {% if caisseprivcdf.cdf==null %}
                                    0 CDF
                                {% else %}
                                    {{ caisseprivcdf.cdf }} CDF
                                {% endif %}
                            </span>
                            <hr>
                            <h5 class=\"text-white\">Caisse Privées CDF</h5>
                            
                        </div>
</div>
                <div class=\"col-lg-6 col-md-12\">
                        <div class=\"card-box bg-primary text-white widget-user\">
                            <span class=\"fa fa-2x\">
                                {% if caisseconvusd ==null %}
                                0 USD
                                {% else %}
                                {{ caisseconvusd }} USD
                                {% endif %}
                                </span>
                            <hr>
                            <h5 class=\"text-white\">Caisse Conventionnés USD</h5>

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
                        <div class=\"card-box widget-user bg-danger text-white\">
                            <span class=\"fa fa-2x\">{{ render(controller(('hostooSanteBundle:Caisse:sommeBSusd'))) }} USD</span>
                            <hr>
                            <h5 class=\"text-white\">Dépenses</h5>
                        </div>

            </div>
        </div>

{% endblock %}
{#{% block javascripts %}#}
        {#{{ parent() }}#}
        {#<script src=\"{{ asset('assets/js/jquery.paginate.min.js') }}\"></script>#}
     {#<script type=\"text/javascript\">#}
                        {#\$(function() {#}
                            {#\$('#listitems').paginate({itemsPerPage: 10});#}
                             {#\$('#listitems2').paginate({itemsPerPage: 10});#}
                        {#});#}
                    {#</script>#}
{#{% endblock %}#}
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
            \$('.table').dataTable({
                deferRender:    true,
                scrollY:        2000,
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
                    }},
                    sorting:[[0,'desc']]
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
{% endblock %}", "hostooSanteBundle:Caisse:dash_tout.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Caisse/dash_tout.html.twig");
    }
}
