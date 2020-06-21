<?php

/* hostooSanteBundle:Medecin:dash.html.twig */
class __TwigTemplate_21e065c9443e5ce9eaec9cc1b28697623e296d92284758599e2681f2aa3bc2f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Medecin:dash.html.twig", 1);
        $this->blocks = [
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Medecin:dash.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Tableau de Bord";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "hostooSanteBundle:Medecin:dash.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DG")) {
            // line 8
            echo "  <div class=\"row\">


      <div class=\"col-md-6\">
          <h4 class=\"text-center\">Situation Financière</h4>
          <div class=\"col-lg-6 col-md-6\">
              <a href=\"#\">
                  <div class=\"card-box widget-user\">
                      <div class=\"text-center\">
                          <h3 class=\"text-custom\" data-plugin=\"counterup\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cusd"] ?? $this->getContext($context, "cusd")), "usd", []), "html", null, true);
            echo " USD</h3>
                          <h5>recette du jour</h5>
                      </div>
                  </div>
              </a>
          </div>
          <div class=\"col-lg-6 col-md-6\">
              <a href=\"#\">
                  <div class=\"card-box widget-user\">
                      <div class=\"text-center\">
                          <h3 class=\"text-custom\" data-plugin=\"counterup\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ccdf"] ?? $this->getContext($context, "ccdf")), "cdf", []), "html", null, true);
            echo " CDF</h3>
                          <h5>recette du jour</h5>
                      </div>
                  </div>
              </a>
          </div>

          <div class=\"col-lg-6 col-md-6\">
              <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
            echo "\">
                  <div class=\"card-box widget-user\">
                      <div class=\"text-center\">
                          <h3 class=\"text-custom\" data-plugin=\"counterup\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["caisse"] ?? $this->getContext($context, "caisse")), "montantusd", []), "html", null, true);
            echo " USD</h3>
                          <h5>recette  du mois</h5>
                      </div>
                  </div>
              </a>
          </div>
          <div class=\"col-lg-6 col-md-6\">
          <a href=\"#\">
              <div class=\"card-box widget-user\">
                  <div class=\"text-center\">
                      <h3 class=\"text-custom\" data-plugin=\"counterup\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["caisse"] ?? $this->getContext($context, "caisse")), "montantcdf", []), "html", null, true);
            echo " CDF</h3>
                      <h5>recette du mois</h5>
                  </div>
              </div>
          </a>
      </div>
          <div class=\"col-md-12\">

              <div class=\"col-md-12\">

                  <h4 class=\"text-center  text-danger\"> Les Dépenses </h4>


                  <div class=\"col-lg-6 col-md-6\">

                      <a href=\"#\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  ";
            // line 66
            $context["depusd"] = 0;
            // line 67
            echo "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["depenses"] ?? $this->getContext($context, "depenses")));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 68
                echo "                                      ";
                if (((twig_date_format_filter($this->env, $this->getAttribute($context["dep"], "datebs", []), "Y-m") == twig_date_format_filter($this->env, "", "Y-m")) && ($this->getAttribute($context["dep"], "devise", []) == "USD"))) {
                    // line 69
                    echo "                                          ";
                    $context["depusd"] = (($context["depusd"] ?? $this->getContext($context, "depusd")) + $this->getAttribute($context["dep"], "montant", []));
                    // line 70
                    echo "                                      ";
                }
                // line 71
                echo "                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                                  <h3 class=\"text-custom\" data-plugin=\"counterup\">";
            echo twig_escape_filter($this->env, ($context["depusd"] ?? $this->getContext($context, "depusd")), "html", null, true);
            echo " USD</h3>
                                  <h5>dépenses du mois</h5>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-lg-6 col-md-6\">
                      <a href=\"";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
            echo "\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  ";
            // line 82
            $context["depcdf"] = 0;
            // line 83
            echo "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["depenses"] ?? $this->getContext($context, "depenses")));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 84
                echo "                                      ";
                if (((twig_date_format_filter($this->env, $this->getAttribute($context["dep"], "datebs", []), "Y-m") == twig_date_format_filter($this->env, "", "Y-m")) && ($this->getAttribute($context["dep"], "devise", []) == "CDF"))) {
                    // line 85
                    echo "                                          ";
                    $context["depcdf"] = (($context["depcdf"] ?? $this->getContext($context, "depcdf")) + $this->getAttribute($context["dep"], "montant", []));
                    // line 86
                    echo "                                      ";
                }
                // line 87
                echo "                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                  <h3 class=\"text-custom\" data-plugin=\"counterup\">";
            echo twig_escape_filter($this->env, ($context["depcdf"] ?? $this->getContext($context, "depcdf")), "html", null, true);
            echo " CDF</h3>
                                  <h5>dépenses du mois</h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class=\"col-md-12\">


                  <h4 class=\"text-center\"> La Banque</h4>
                  <div class=\"col-lg-6 col-md-6\">
                      <a href=\"#\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  ";
            // line 103
            $context["sombank"] = 0;
            // line 104
            echo "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banks"] ?? $this->getContext($context, "banks")));
            foreach ($context['_seq'] as $context["_key"] => $context["bnak"]) {
                // line 105
                echo "                                      ";
                if ((((twig_date_format_filter($this->env, $this->getAttribute($context["bnak"], "dateops", []), "Y-m") == twig_date_format_filter($this->env, "", "Y-m")) && ($this->getAttribute($context["bnak"], "devise", []) == 1)) && (($context["mouvement"] ?? $this->getContext($context, "mouvement")) == 1))) {
                    // line 106
                    echo "                                          ";
                    $context["sombank"] = (($context["sombank"] ?? $this->getContext($context, "sombank")) + $this->getAttribute($context["bnak"], "montant", []));
                    // line 107
                    echo "                                      ";
                }
                // line 108
                echo "                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bnak'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                                  <h2 class=\"text-custom\" data-plugin=\"counterup\">";
            echo twig_escape_filter($this->env, ($context["sombank"] ?? $this->getContext($context, "sombank")), "html", null, true);
            echo " USD</h2>
                                  <h5>Dêpot USD</h5>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-lg-6 col-md-6\">
                      <a href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
            echo "\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  ";
            // line 119
            $context["sombank"] = 0;
            // line 120
            echo "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banks"] ?? $this->getContext($context, "banks")));
            foreach ($context['_seq'] as $context["_key"] => $context["bnak"]) {
                // line 121
                echo "                                      ";
                if ((((twig_date_format_filter($this->env, $this->getAttribute($context["bnak"], "dateops", []), "Y-m") == twig_date_format_filter($this->env, "", "Y-m")) && ($this->getAttribute($context["bnak"], "devise", []) == 0)) && (($context["mouvement"] ?? $this->getContext($context, "mouvement")) == 1))) {
                    // line 122
                    echo "                                          ";
                    $context["sombank"] = (($context["sombank"] ?? $this->getContext($context, "sombank")) + $this->getAttribute(($context["bank"] ?? $this->getContext($context, "bank")), "montant", []));
                    // line 123
                    echo "                                      ";
                }
                // line 124
                echo "                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bnak'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                  <h2 class=\"text-custom\" data-plugin=\"counterup\">";
            echo twig_escape_filter($this->env, ($context["sombank"] ?? $this->getContext($context, "sombank")), "html", null, true);
            echo " CDF</h2>
                                  <h5>Dêpot</h5>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-lg-6 col-md-6\">
                      <a href=\"";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
            echo "\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  ";
            // line 135
            $context["sombank"] = 0;
            // line 136
            echo "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banks"] ?? $this->getContext($context, "banks")));
            foreach ($context['_seq'] as $context["_key"] => $context["bnak"]) {
                // line 137
                echo "                                      ";
                if ((((twig_date_format_filter($this->env, $this->getAttribute($context["bnak"], "dateops", []), "Y-m") == twig_date_format_filter($this->env, "", "Y-m")) && ($this->getAttribute($context["bnak"], "devise", []) == 1)) && (($context["mouvement"] ?? $this->getContext($context, "mouvement")) == 0))) {
                    // line 138
                    echo "                                          ";
                    $context["sombank"] = (($context["sombank"] ?? $this->getContext($context, "sombank")) + $this->getAttribute($context["bnak"], "montant", []));
                    // line 139
                    echo "                                      ";
                }
                // line 140
                echo "                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bnak'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                                  <h2 class=\"text-custom\" data-plugin=\"counterup\">";
            echo twig_escape_filter($this->env, ($context["sombank"] ?? $this->getContext($context, "sombank")), "html", null, true);
            echo " USD</h2>
                                  <h5>Retrait</h5>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-lg-6 col-md-6\">
                      <a href=\"";
            // line 148
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
            echo "\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  ";
            // line 151
            $context["sombank"] = 0;
            // line 152
            echo "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banks"] ?? $this->getContext($context, "banks")));
            foreach ($context['_seq'] as $context["_key"] => $context["bnak"]) {
                // line 153
                echo "                                      ";
                if ((((twig_date_format_filter($this->env, $this->getAttribute($context["bnak"], "dateops", []), "Y-m") == twig_date_format_filter($this->env, "", "Y-m")) && ($this->getAttribute($context["bnak"], "devise", []) == 0)) && (($context["mouvement"] ?? $this->getContext($context, "mouvement")) == 0))) {
                    // line 154
                    echo "                                          ";
                    $context["sombank"] = (($context["sombank"] ?? $this->getContext($context, "sombank")) + $this->getAttribute(($context["bank"] ?? $this->getContext($context, "bank")), "montant", []));
                    // line 155
                    echo "                                      ";
                }
                // line 156
                echo "                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bnak'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                                  <h2 class=\"text-custom\" data-plugin=\"counterup\">";
            echo twig_escape_filter($this->env, ($context["sombank"] ?? $this->getContext($context, "sombank")), "html", null, true);
            echo " CDF</h2>
                                  <h5>Retrait</h5>
                              </div>
                          </div>
                      </a>
                  </div>





              </div>
          </div>
          <div class=\"col-md-12\">

      <div class=\"col-md-12\">

          <h4 class=\"text-center  text-danger\"> Patients</h4>
      <div class=\"col-lg-6 col-md-6\">
          <a href=\"";
            // line 176
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
            echo "\">
              <div class=\"card-box widget-user\">
                  <div class=\"text-center\">
                      <h2 class=\"text-custom\" data-plugin=\"counterup\">";
            // line 179
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["patients"] ?? $this->getContext($context, "patients"))), "html", null, true);
            echo "</h2>
                      <h5>Patients</h5>
                  </div>
              </div>
          </a>
      </div>

      <div class=\"col-lg-6 col-md-6\">

          <a href=\"";
            // line 188
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
            echo "\">
              <div class=\"card-box widget-user\">
                  <div class=\"text-center\">
                      <h2 class=\"text-custom\" data-plugin=\"counterup\">";
            // line 191
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["freqs"] ?? $this->getContext($context, "freqs"))), "html", null, true);
            echo "</h2>
                      <h5>Fréquentations</h5>
                  </div>
              </div>
          </a>
      </div>
      </div>
      </div>
  </div>
      <div class=\"col-md-6\">
         <div class=\"card-box\">
          <h3>Productions par services</h3>
          <table class=\"table table-striped\">
              <thead>
              <tr>
                  <th>Nom de service</th>
                  <th>Nbre actes</th>
                  <th>Montant</th>
              </tr>
              </thead>
              <tbody>
              ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["proservs"] ?? $this->getContext($context, "proservs")));
            foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
                // line 213
                echo "              <tr>
                  <td>";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "nom", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "actes", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "montant", []), "html", null, true);
                echo "</td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "              </tbody>
          </table>
         </div>
          <div class=\"card-box\">
          <h3>Prestations des medecins</h3>
          <table class=\"table table-striped\">
              <thead>
              <tr>
                  <th>Nom medecin</th>
                  <th>Patients reçus</th>
                  <th>Montant</th>
              </tr>
              </thead>
              <tbody>
                ";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["medecins"] ?? $this->getContext($context, "medecins")));
            foreach ($context['_seq'] as $context["_key"] => $context["med"]) {
                // line 234
                echo "                <tr>
                <td>";
                // line 235
                echo twig_escape_filter($this->env, (((($this->getAttribute($context["med"], "nom", []) . " ") . $this->getAttribute($context["med"], "postnom", [])) . " ") . $this->getAttribute($context["med"], "prenom", [])), "html", null, true);
                echo "</td>
                    <td>";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["med"], "mesconsultations", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($context["med"], "monmontant", []), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['med'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "              </tbody>
          </table>
          </div>
          <div class=\"card-box\">

          <h3>Production des actes</h3>
          <table class=\"table table-striped\">
              <thead>
              <tr>
                  <th>Désignation</th>
                  <th>Nbre de fois </th>
                  <th>Montant</th>
              </tr>
              </thead>
              <tbody>
                ";
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["proactes"] ?? $this->getContext($context, "proactes")));
            foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
                // line 256
                echo "              <tr>
                  <td>";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "ac", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "nbr", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "montant", []), "html", null, true);
                echo "</td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "              </tbody>
          </table>
      </div>
      </div>
  </div>

    ";
        }
        // line 269
        echo "    <div class=\"row\">
        ";
        // line 270
        if ((($context["liste"] ?? $this->getContext($context, "liste")) != null)) {
            // line 271
            echo "        <div class=\"col-lg-3 col-md-6 col-xs-12\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\">
                <h2>";
            // line 274
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["liste"] ?? $this->getContext($context, "liste"))), "html", null, true);
            echo "</h2>
                <div class=\"row\">
                   <span class=\"pull-right \">RDV</span>
                </div>
            </div>
        </div>

        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"panel panel-warning\">
                <div class=\"panel-heading\">
                    <h2>";
            // line 285
            echo twig_escape_filter($this->env, ($context["nbreRDV"] ?? $this->getContext($context, "nbreRDV")), "html", null, true);
            echo "</h2>
                    <div class=\"row\">
                        <span class=\"pull-right \"><i class=\"zmdi zmdi-nature-people\"></i>En Attente</span>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"panel panel-success\">
                ";
            // line 295
            echo twig_escape_filter($this->env, $this->getAttribute(($context["liste"] ?? $this->getContext($context, "liste")), "patientsrecus", []), "html", null, true);
            echo "
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"panel panel-success\">
                ";
            // line 300
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["liste"] ?? $this->getContext($context, "liste"))), "html", null, true);
            echo "
            </div>
        </div>
            ";
        } else {
            // line 304
            echo "            <h3 class=\"alert alert-danger text-center\">Aucune Activité aujourd'hui !</h3>
            ";
        }
        // line 306
        echo "    </div>
    <div class=\"row\">
        ";
        // line 308
        if ((($context["rdvs"] ?? $this->getContext($context, "rdvs")) != null)) {
            // line 309
            echo "            <h3 class=\"text-custom\">Toutes les activités</h3>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">
                        <h2>";
            // line 313
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["rdvs"] ?? $this->getContext($context, "rdvs"))), "html", null, true);
            echo "</h2>
                        <div class=\"row\">
                            <span class=\"pull-right \">RDVs</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"panel panel-warning\">
                    <div class=\"panel-heading\">
                        <h2>";
            // line 324
            echo twig_escape_filter($this->env, ($context["nbr"] ?? $this->getContext($context, "nbr")), "html", null, true);
            echo "</h2>
                        <div class=\"row\">
                            <span class=\"pull-right \"><i class=\"zmdi zmdi-nature-people\"></i>Patients</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"panel panel-success\">

                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"panel panel-success\">

                </div>
            </div>
        ";
        } else {
            // line 343
            echo "            <h3>Aucune Activité aujourd'hui !</h3>
        ";
        }
        // line 345
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Medecin:dash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  658 => 345,  654 => 343,  632 => 324,  618 => 313,  612 => 309,  610 => 308,  606 => 306,  602 => 304,  595 => 300,  587 => 295,  574 => 285,  560 => 274,  555 => 271,  553 => 270,  550 => 269,  541 => 262,  532 => 259,  528 => 258,  524 => 257,  521 => 256,  517 => 255,  500 => 240,  491 => 237,  487 => 236,  483 => 235,  480 => 234,  476 => 233,  460 => 219,  451 => 216,  447 => 215,  443 => 214,  440 => 213,  436 => 212,  412 => 191,  406 => 188,  394 => 179,  388 => 176,  365 => 157,  359 => 156,  356 => 155,  353 => 154,  350 => 153,  345 => 152,  343 => 151,  337 => 148,  326 => 141,  320 => 140,  317 => 139,  314 => 138,  311 => 137,  306 => 136,  304 => 135,  298 => 132,  287 => 125,  281 => 124,  278 => 123,  275 => 122,  272 => 121,  267 => 120,  265 => 119,  259 => 116,  248 => 109,  242 => 108,  239 => 107,  236 => 106,  233 => 105,  228 => 104,  226 => 103,  207 => 88,  201 => 87,  198 => 86,  195 => 85,  192 => 84,  187 => 83,  185 => 82,  179 => 79,  168 => 72,  162 => 71,  159 => 70,  156 => 69,  153 => 68,  148 => 67,  146 => 66,  125 => 48,  112 => 38,  106 => 35,  95 => 27,  82 => 17,  71 => 8,  68 => 7,  62 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
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
{% block titrepage %}Tableau de Bord{% endblock %}
{% block menu %}
    {% include 'hostooSanteBundle:menus:menudoc.html.twig' %}
{% endblock %}
{% block body %}
    {% if is_granted('ROLE_DG') %}
  <div class=\"row\">


      <div class=\"col-md-6\">
          <h4 class=\"text-center\">Situation Financière</h4>
          <div class=\"col-lg-6 col-md-6\">
              <a href=\"#\">
                  <div class=\"card-box widget-user\">
                      <div class=\"text-center\">
                          <h3 class=\"text-custom\" data-plugin=\"counterup\">{{ cusd.usd }} USD</h3>
                          <h5>recette du jour</h5>
                      </div>
                  </div>
              </a>
          </div>
          <div class=\"col-lg-6 col-md-6\">
              <a href=\"#\">
                  <div class=\"card-box widget-user\">
                      <div class=\"text-center\">
                          <h3 class=\"text-custom\" data-plugin=\"counterup\">{{ ccdf.cdf }} CDF</h3>
                          <h5>recette du jour</h5>
                      </div>
                  </div>
              </a>
          </div>

          <div class=\"col-lg-6 col-md-6\">
              <a href=\"{{ path('hostoo_sante_listepatients') }}\">
                  <div class=\"card-box widget-user\">
                      <div class=\"text-center\">
                          <h3 class=\"text-custom\" data-plugin=\"counterup\">{{ caisse.montantusd }} USD</h3>
                          <h5>recette  du mois</h5>
                      </div>
                  </div>
              </a>
          </div>
          <div class=\"col-lg-6 col-md-6\">
          <a href=\"#\">
              <div class=\"card-box widget-user\">
                  <div class=\"text-center\">
                      <h3 class=\"text-custom\" data-plugin=\"counterup\">{{ caisse.montantcdf }} CDF</h3>
                      <h5>recette du mois</h5>
                  </div>
              </div>
          </a>
      </div>
          <div class=\"col-md-12\">

              <div class=\"col-md-12\">

                  <h4 class=\"text-center  text-danger\"> Les Dépenses </h4>


                  <div class=\"col-lg-6 col-md-6\">

                      <a href=\"#\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  {% set depusd = 0 %}
                                  {% for dep in depenses %}
                                      {% if (dep.datebs|date('Y-m') == \"\"|date('Y-m')) and dep.devise == \"USD\" %}
                                          {% set depusd = depusd + dep.montant %}
                                      {% endif %}
                                  {% endfor %}
                                  <h3 class=\"text-custom\" data-plugin=\"counterup\">{{ depusd }} USD</h3>
                                  <h5>dépenses du mois</h5>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-lg-6 col-md-6\">
                      <a href=\"{{ path('hostoo_sante_listepatients') }}\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  {% set depcdf = 0 %}
                                  {% for dep in depenses %}
                                      {% if (dep.datebs|date('Y-m') == \"\"|date('Y-m')) and dep.devise == \"CDF\" %}
                                          {% set depcdf = depcdf + dep.montant %}
                                      {% endif %}
                                  {% endfor %}
                                  <h3 class=\"text-custom\" data-plugin=\"counterup\">{{ depcdf }} CDF</h3>
                                  <h5>dépenses du mois</h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class=\"col-md-12\">


                  <h4 class=\"text-center\"> La Banque</h4>
                  <div class=\"col-lg-6 col-md-6\">
                      <a href=\"#\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  {% set sombank= 0 %}
                                  {% for bnak in banks %}
                                      {% if (bnak.dateops|date('Y-m') == \"\"|date('Y-m')) and bnak.devise == 1 and mouvement == 1 %}
                                          {% set sombank = sombank + bnak.montant %}
                                      {% endif %}
                                  {% endfor %}
                                  <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ sombank }} USD</h2>
                                  <h5>Dêpot USD</h5>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-lg-6 col-md-6\">
                      <a href=\"{{ path('hostoo_sante_listepatients') }}\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  {% set sombank= 0 %}
                                  {% for bnak in banks %}
                                      {% if (bnak.dateops|date('Y-m') == \"\"|date('Y-m')) and bnak.devise == 0 and mouvement == 1 %}
                                          {% set sombank = sombank + bank.montant %}
                                      {% endif %}
                                  {% endfor %}
                                  <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ sombank }} CDF</h2>
                                  <h5>Dêpot</h5>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-lg-6 col-md-6\">
                      <a href=\"{{ path('hostoo_sante_listepatients') }}\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  {% set sombank= 0 %}
                                  {% for bnak in banks %}
                                      {% if (bnak.dateops|date('Y-m') == \"\"|date('Y-m')) and bnak.devise == 1 and mouvement == 0 %}
                                          {% set sombank = sombank + bnak.montant %}
                                      {% endif %}
                                  {% endfor %}
                                  <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ sombank }} USD</h2>
                                  <h5>Retrait</h5>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class=\"col-lg-6 col-md-6\">
                      <a href=\"{{ path('hostoo_sante_listepatients') }}\">
                          <div class=\"card-box widget-user\">
                              <div class=\"text-center\">
                                  {% set sombank= 0 %}
                                  {% for bnak in banks %}
                                      {% if (bnak.dateops|date('Y-m') == \"\"|date('Y-m')) and bnak.devise == 0 and mouvement == 0 %}
                                          {% set sombank = sombank + bank.montant %}
                                      {% endif %}
                                  {% endfor %}
                                  <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ sombank }} CDF</h2>
                                  <h5>Retrait</h5>
                              </div>
                          </div>
                      </a>
                  </div>





              </div>
          </div>
          <div class=\"col-md-12\">

      <div class=\"col-md-12\">

          <h4 class=\"text-center  text-danger\"> Patients</h4>
      <div class=\"col-lg-6 col-md-6\">
          <a href=\"{{ path('hostoo_sante_listepatients') }}\">
              <div class=\"card-box widget-user\">
                  <div class=\"text-center\">
                      <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ patients|length }}</h2>
                      <h5>Patients</h5>
                  </div>
              </div>
          </a>
      </div>

      <div class=\"col-lg-6 col-md-6\">

          <a href=\"{{ path('hostoo_sante_listepatients') }}\">
              <div class=\"card-box widget-user\">
                  <div class=\"text-center\">
                      <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ freqs|length }}</h2>
                      <h5>Fréquentations</h5>
                  </div>
              </div>
          </a>
      </div>
      </div>
      </div>
  </div>
      <div class=\"col-md-6\">
         <div class=\"card-box\">
          <h3>Productions par services</h3>
          <table class=\"table table-striped\">
              <thead>
              <tr>
                  <th>Nom de service</th>
                  <th>Nbre actes</th>
                  <th>Montant</th>
              </tr>
              </thead>
              <tbody>
              {% for pr in proservs %}
              <tr>
                  <td>{{ pr.nom }}</td>
                  <td>{{ pr.actes }}</td>
                  <td>{{ pr.montant }}</td>
              </tr>
              {% endfor %}
              </tbody>
          </table>
         </div>
          <div class=\"card-box\">
          <h3>Prestations des medecins</h3>
          <table class=\"table table-striped\">
              <thead>
              <tr>
                  <th>Nom medecin</th>
                  <th>Patients reçus</th>
                  <th>Montant</th>
              </tr>
              </thead>
              <tbody>
                {% for med in medecins %}
                <tr>
                <td>{{ med.nom~\" \"~med.postnom~\" \"~med.prenom }}</td>
                    <td>{{ med.mesconsultations }}</td>
                    <td>{{ med.monmontant }}</td>
                </tr>
                {% endfor %}
              </tbody>
          </table>
          </div>
          <div class=\"card-box\">

          <h3>Production des actes</h3>
          <table class=\"table table-striped\">
              <thead>
              <tr>
                  <th>Désignation</th>
                  <th>Nbre de fois </th>
                  <th>Montant</th>
              </tr>
              </thead>
              <tbody>
                {% for pr in proactes %}
              <tr>
                  <td>{{ pr.ac }}</td>
                  <td>{{ pr.nbr }}</td>
                  <td>{{ pr.montant }}</td>
              </tr>
              {% endfor %}
              </tbody>
          </table>
      </div>
      </div>
  </div>

    {% endif %}
    <div class=\"row\">
        {% if liste != null %}
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\">
                <h2>{{ liste|length }}</h2>
                <div class=\"row\">
                   <span class=\"pull-right \">RDV</span>
                </div>
            </div>
        </div>

        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"panel panel-warning\">
                <div class=\"panel-heading\">
                    <h2>{{ nbreRDV }}</h2>
                    <div class=\"row\">
                        <span class=\"pull-right \"><i class=\"zmdi zmdi-nature-people\"></i>En Attente</span>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"panel panel-success\">
                {{ liste.patientsrecus }}
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"panel panel-success\">
                {{ liste|length }}
            </div>
        </div>
            {% else %}
            <h3 class=\"alert alert-danger text-center\">Aucune Activité aujourd'hui !</h3>
            {% endif %}
    </div>
    <div class=\"row\">
        {% if rdvs != null %}
            <h3 class=\"text-custom\">Toutes les activités</h3>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">
                        <h2>{{ rdvs|length }}</h2>
                        <div class=\"row\">
                            <span class=\"pull-right \">RDVs</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"panel panel-warning\">
                    <div class=\"panel-heading\">
                        <h2>{{ nbr }}</h2>
                        <div class=\"row\">
                            <span class=\"pull-right \"><i class=\"zmdi zmdi-nature-people\"></i>Patients</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"panel panel-success\">

                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-xs-12\">
                <div class=\"panel panel-success\">

                </div>
            </div>
        {% else %}
            <h3>Aucune Activité aujourd'hui !</h3>
        {% endif %}
    </div>
{% endblock %}", "hostooSanteBundle:Medecin:dash.html.twig", "C:\\wamp64\\www\\hostoo\\src\\hostoo\\SanteBundle/Resources/views/Medecin/dash.html.twig");
    }
}
