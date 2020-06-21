<?php

/* hostooSanteBundle:Dispatcher:voirpatient.html.twig */
class __TwigTemplate_5435e57c3c995770f458667a953c7e8d983472a38ed3f39234ae1886bb00d6c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Dispatcher:voirpatient.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Dispatcher:voirpatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        $this->loadTemplate("hostooSanteBundle:menus:menunrs.html.twig", "hostooSanteBundle:Dispatcher:voirpatient.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        // line 6
        echo "   <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listprelev");
        echo "\" class=\"btn btn-custom\">Retour a la liste</a>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
        <div class=\"pull-right\">
            <a class=\"btn btn-sm  btn-success\" data-toggle=\"modal\" data-target=\"#signes-vitaux";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "html", null, true);
        echo "\">Signes vitaux</a>&nbsp;&nbsp;
            <a class=\"btn btn-sm btn-pink\" data-toggle=\"modal\" data-target=\"#actes";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "html", null, true);
        echo "\">Poser Actes</a>
            <a class=\"btn btn-sm btn-warning\" data-toggle=\"modal\" data-target=\"#tabr5\">Pharmacie</a>
        </div>
    <h4>Fiche du patient</h4>
    <dl class=\"dl-horizontal\">
        <dt>Nom :</dt>
        <dd>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "nom", []), "html", null, true);
        echo "</dd>
        <dt>Postnom :</dt>
        <dd>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "postnom", []), "html", null, true);
        echo "</dd>
        <dt>Prenom :</dt>
        <dd>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "prenom", []), "html", null, true);
        echo "</dd>
        <dt>Age :</dt>
        <dd>";
        // line 28
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "datenaissance", []), "Y")), "html", null, true);
        echo "</dd>
        <dt>Sexe :</dt>
        <dd>
            ";
        // line 31
        if (($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "sexe", []) == 1)) {
            // line 32
            echo "                M
            ";
        } else {
            // line 34
            echo "                F
            ";
        }
        // line 35
        echo "</dd>
        <dt>Type de Client :</dt>
        <dd>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "html", null, true);
        echo "</dd>
        <dt>Nombre des visites :</dt>
        <dd>";
        // line 39
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "episode", [])), "html", null, true);
        echo "</dd>
    </dl>
        </div>
    </div>
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
            <h5>Prescription du médécin</h5>
            <ul class=\"list-unstyled\">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordos"] ?? $this->getContext($context, "ordos")));
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 48
            echo "                <li>
            ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["ord"], "id", []), "html", null, true);
            echo "
                    <ul>
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "posologie", []));
            foreach ($context['_seq'] as $context["_key"] => $context["pos"]) {
                // line 52
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pos"], "produit", []), "nom", []), "html", null, true);
                echo " Posologie : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pos"], "posologie", []), "html", null, true);
                echo " Quantité :";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pos"], "qte", []), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "</ul>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </ul>
        </div>
        <div class=\"card-box\">
            <h5>Actes posés</h5>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["facts"] ?? $this->getContext($context, "facts")));
        foreach ($context['_seq'] as $context["_key"] => $context["fact"]) {
            // line 61
            echo "                <ul class=\"list-group\">
                    ";
            // line 63
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fact"], "commandes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cds"]) {
                // line 64
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cds"], "tarifs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["my"]) {
                    // line 65
                    echo "                <li class=\"list-group-item\">
                    <div class=\"row\">
                    <div class=\"col-md-10\"><h6>";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["my"], "actes", []), "designationacte", []), "html", null, true);
                    echo "</h6><p class=\"text-muted text-justify\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Prelevement:afficherObservation", ["fact" => $this->getAttribute($context["fact"], "id", []), "act" => $this->getAttribute($this->getAttribute($context["my"], "actes", []), "id", [])]));
                    echo "</p></div>
                    <div class=\"col-md-2\">
                        ";
                    // line 69
                    if ((($this->getAttribute($context["fact"], "prix", []) > 0) && ($this->getAttribute($context["fact"], "validation", []) == 0))) {
                        echo "\t";
                        echo "<em class=\"label label-warning pull-right\">Non Couvert</em>";
                    } else {
                        echo " <button href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_obsinf", ["fact" => $this->getAttribute($context["fact"], "id", []), "act" => $this->getAttribute($this->getAttribute($context["my"], "actes", []), "id", [])]), "html", null, true);
                        echo "\" title=\"votre observation\" class=\"btn btn-custom waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#con-close-modal\"><i class=\"fa fa-eye\"></i> </button>";
                    }
                    // line 70
                    echo "                    </div>
                    </div>
                     </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['my'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cds'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    ";
            // line 76
            echo "                </ul>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </div>
        <div id=\"con-close-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\">Votre observation ici</h4>
                </div>
                <div class=\"modal-body\">

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-info waves-effect waves-light\">Save changes</button>
                </div>
            </div>
        </div>
        </div>
        <div id=\"signes-vitaux";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "html", null, true);
        echo "\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
            <div class=\"modal-dialog modal-full\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                        <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Prendre des signes Vitaux</h4>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Prelevement:ajouterSV", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "
                    </div>
                </div>
            </div>

        </div>
        <div id=\"actes";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "html", null, true);
        echo "\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
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
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recupprev");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"episode\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "html", null, true);
        echo "\">
                            ";
        // line 158
        echo "

                              <select name=\"country[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "html", null, true);
        echo "\" >

                                  ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mesactes"] ?? $this->getContext($context, "mesactes")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 163
            echo "                                      ";
            $context["tampon"] = 0;
            // line 164
            echo "                                      ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "id", []) != 15) && ($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []) != null))) {
                // line 165
                echo "                                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []), "forsoc", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pacte"]) {
                    // line 166
                    echo "                                              ";
                    if (($this->getAttribute($context["acte"], "id", []) == $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []))) {
                        // line 167
                        echo "                                                  ";
                        if (((($this->getAttribute($this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "categories", []), "id", []) >= 4) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "categories", []), "id", []) <= 5)) && ($this->getAttribute($this->getAttribute($context["pacte"], "societe", []), "id", []) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "id", [])))) {
                            // line 168
                            echo "                                                      ";
                            $context["tampon"] = $this->getAttribute($context["acte"], "id", []);
                            // line 169
                            echo "                                                      <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "id", []), "html", null, true);
                            echo "\" class=\"bg-success\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacte"], "acte", []), "designationacte", []), "html", null, true);
                            echo "</option>
                                                  ";
                        }
                        // line 171
                        echo "                                              ";
                    }
                    // line 172
                    echo "                                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                                      ";
            }
            // line 174
            echo "                                      ";
            if (($this->getAttribute($context["acte"], "id", []) != ($context["tampon"] ?? $this->getContext($context, "tampon")))) {
                // line 175
                echo "                                          <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo "</option>

                                      ";
            }
            // line 178
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                              </select>
                            <br>
                            <br>
                            <input type=\"submit\" value=\"Soumettre les actes\" class=\"btn btn-custom\">
                            <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\">
                        </form>

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
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Ordonnance:newNrs", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "

                            </div>
                            <div class=\"col-lg-6 col-md-12\">
                                ";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooSanteBundle:Ordonnance:EpisodeOrdonnance", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]));
        echo "
                            </div>
                        </div>
                        ";
        // line 219
        echo "                    </div>
                </div>
            </div>
        </div>


    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 227
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 228
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(function () {
            \$('#listepatients').dataTable();
            \$('.modal').on('hidden.bs.modal', function(e)
            {
                \$(this).removeData();
            }) ;
        });
    </script>
    <script>
        \$(function () {


            //advance multiselect start

            \$('#my_multi_select";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "html", null, true);
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
            \$('.select2').select2(
                    {
                        placeholder: \"Choisir un acte infirmier\"
                    }
            );

            \$(\".select2-limiting\").select2({
                placeholder: \"Choisir les actes\"
            });


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

    <script>
        

        \$(function () {
            \$('.ajouterligne').click(function (e) {
                e.preventDefault();
                \$('#mesactesinf').append(\"<tr>\"+\$('.laligne').html()+\"</tr>\");
            });
        });
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 372
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 373
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Dispatcher:voirpatient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  659 => 381,  655 => 380,  651 => 379,  647 => 378,  643 => 377,  639 => 376,  635 => 375,  631 => 374,  626 => 373,  620 => 372,  490 => 249,  471 => 233,  467 => 232,  463 => 231,  459 => 230,  455 => 229,  450 => 228,  444 => 227,  430 => 219,  424 => 205,  417 => 201,  393 => 179,  387 => 178,  378 => 175,  375 => 174,  372 => 173,  366 => 172,  363 => 171,  355 => 169,  352 => 168,  349 => 167,  346 => 166,  341 => 165,  338 => 164,  335 => 163,  331 => 162,  326 => 160,  322 => 158,  318 => 123,  314 => 122,  299 => 110,  290 => 104,  279 => 96,  259 => 78,  252 => 76,  250 => 75,  244 => 74,  235 => 70,  226 => 69,  219 => 67,  215 => 65,  210 => 64,  205 => 63,  202 => 61,  198 => 60,  192 => 56,  184 => 53,  171 => 52,  167 => 51,  162 => 49,  159 => 48,  155 => 47,  144 => 39,  139 => 37,  135 => 35,  131 => 34,  127 => 32,  125 => 31,  119 => 28,  114 => 26,  109 => 24,  104 => 22,  95 => 16,  91 => 15,  85 => 11,  79 => 10,  68 => 8,  58 => 6,  52 => 5,  45 => 3,  39 => 2,  11 => 1,);
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
{% include 'hostooSanteBundle:menus:menunrs.html.twig' %}
{% endblock %}
{% block titrepage %}
   <a href=\"{{ path('hostoo_sante_listprelev') }}\" class=\"btn btn-custom\">Retour a la liste</a>
    {% endblock %}
{% block options %}
{% endblock %}
{% block body %}

    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
        <div class=\"pull-right\">
            <a class=\"btn btn-sm  btn-success\" data-toggle=\"modal\" data-target=\"#signes-vitaux{{ episode.id }}\">Signes vitaux</a>&nbsp;&nbsp;
            <a class=\"btn btn-sm btn-pink\" data-toggle=\"modal\" data-target=\"#actes{{ episode.id }}\">Poser Actes</a>
            <a class=\"btn btn-sm btn-warning\" data-toggle=\"modal\" data-target=\"#tabr5\">Pharmacie</a>
        </div>
    <h4>Fiche du patient</h4>
    <dl class=\"dl-horizontal\">
        <dt>Nom :</dt>
        <dd>{{ episode.patient.nom }}</dd>
        <dt>Postnom :</dt>
        <dd>{{ episode.patient.postnom }}</dd>
        <dt>Prenom :</dt>
        <dd>{{ episode.patient.prenom }}</dd>
        <dt>Age :</dt>
        <dd>{{ \"now\"|date('Y')-episode.patient.datenaissance|date('Y') }}</dd>
        <dt>Sexe :</dt>
        <dd>
            {% if episode.patient.sexe==1 %}
                M
            {% else %}
                F
            {% endif %}</dd>
        <dt>Type de Client :</dt>
        <dd>{{ episode.patient.societe }}</dd>
        <dt>Nombre des visites :</dt>
        <dd>{{ episode.patient.episode|length }}</dd>
    </dl>
        </div>
    </div>
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
            <h5>Prescription du médécin</h5>
            <ul class=\"list-unstyled\">
            {% for ord in ordos %}
                <li>
            {{ ord.id }}
                    <ul>
                {% for pos in ord.posologie %}
                    <li>{{ pos.produit.nom }} Posologie : {{ pos.posologie }} Quantité :{{ pos.qte }}</li>
            {% endfor %}</ul>
                </li>
            {% endfor %}
            </ul>
        </div>
        <div class=\"card-box\">
            <h5>Actes posés</h5>
            {% for fact in facts %}
                <ul class=\"list-group\">
                    {#{% if fact.validation == 1 or fact.episode.patient.societe.id !=15 %}#}
            {% for cds in fact.commandes %}
            {% for my in cds.tarifs %}
                <li class=\"list-group-item\">
                    <div class=\"row\">
                    <div class=\"col-md-10\"><h6>{{ my.actes.designationacte }}</h6><p class=\"text-muted text-justify\">{{ render(controller('hostooSanteBundle:Prelevement:afficherObservation',{'fact':fact.id, 'act':my.actes.id })) }}</p></div>
                    <div class=\"col-md-2\">
                        {% if (fact.prix>0 and fact.validation ==0) %}{{ \"\\t\" }}<em class=\"label label-warning pull-right\">Non Couvert</em>{% else %} <button href=\"{{ path('new_obsinf',{'fact':fact.id, 'act':my.actes.id }) }}\" title=\"votre observation\" class=\"btn btn-custom waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#con-close-modal\"><i class=\"fa fa-eye\"></i> </button>{% endif %}
                    </div>
                    </div>
                     </li>
            {% endfor %}
            {% endfor %}
                    {#{% endif %}#}
                </ul>
            {% endfor %}
        </div>
        <div id=\"con-close-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\">Votre observation ici</h4>
                </div>
                <div class=\"modal-body\">

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-info waves-effect waves-light\">Save changes</button>
                </div>
            </div>
        </div>
        </div>
        <div id=\"signes-vitaux{{ episode.id }}\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
            <div class=\"modal-dialog modal-full\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                        <h4 class=\"modal-title\" id=\"full-width-modalLabel\">Prendre des signes Vitaux</h4>
                    </div>
                    <div class=\"modal-body\">
                        {{ render(controller('hostooSanteBundle:Prelevement:ajouterSV',{'id':episode.id    })) }}
                    </div>
                </div>
            </div>

        </div>
        <div id=\"actes{{ episode.id }}\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
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
                        <form class=\"form-inline\" action=\"{{ path('recupprev') }}\" method=\"post\">
                            <input type=\"hidden\" name=\"episode\" value=\"{{ episode.id }}\">
                            {#  <table class=\"table table-bordered\">
                                  <thead>
                                  <tr>
                                      <th>Actes Infirmiers</th><th>Observations</th><th><button class=\"btn btn-info ajouterligne\"><i class=\"fa fa-plus\"></i> </button></th>
                                  </tr>
                                  </thead>
                                  <tbody id=\"mesactesinf\">
                                  <tr class=\"laligne\">
                                      <td><select name=\"country[]\" class=\"select2 col-sm-12\" id=\"my_multi_select{{ episode.id }}\" >
                                              {% set tampon=0 %}
                                              {% for acte in mesactes %}

                                                  {% if episode.patient.societe.id !=15 and episode.patient.formule != null %}
                                                      {% for pacte in episode.patient.formule.fortar %}
                                                          {% if acte.id == pacte.acte.id %}
                                                              {% if pacte.acte.categories.id>=4 and pacte.acte.categories.id<=5 %}
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
                                          </select></td><td>
                                          <input name=\"observation[]\" class=\"input-lg col-sm-12\">
                                      </td><td> </td>
                                  </tr>

                                  </tbody>
                            </table>#}


                              <select name=\"country[]\" class=\"multi-select\" multiple=\"\" id=\"my_multi_select{{ episode.id }}\" >

                                  {% for acte in mesactes %}
                                      {% set tampon=0 %}
                                      {% if episode.patient.societe.id !=15 and episode.patient.formule != null %}
                                          {% for pacte in episode.patient.formule.forsoc %}
                                              {% if acte.id == pacte.acte.id %}
                                                  {% if pacte.acte.categories.id>=4 and pacte.acte.categories.id<=5 and pacte.societe.id==episode.patient.societe.id %}
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
                            <br>
                            <br>
                            <input type=\"submit\" value=\"Soumettre les actes\" class=\"btn btn-custom\">
                            <input type=\"reset\" value=\"Annuler\" class=\"btn btn-danger\">
                        </form>

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
                                {{ render(controller('hostooSanteBundle:Ordonnance:newNrs',{'id':episode.id })) }}

                            </div>
                            <div class=\"col-lg-6 col-md-12\">
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


    </div>
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
            \$('.modal').on('hidden.bs.modal', function(e)
            {
                \$(this).removeData();
            }) ;
        });
    </script>
    <script>
        \$(function () {


            //advance multiselect start

            \$('#my_multi_select{{ episode.id }}').multiSelect({
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
            \$('.select2').select2(
                    {
                        placeholder: \"Choisir un acte infirmier\"
                    }
            );

            \$(\".select2-limiting\").select2({
                placeholder: \"Choisir les actes\"
            });


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

    <script>
        

        \$(function () {
            \$('.ajouterligne').click(function (e) {
                e.preventDefault();
                \$('#mesactesinf').append(\"<tr>\"+\$('.laligne').html()+\"</tr>\");
            });
        });
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
{% endblock %}", "hostooSanteBundle:Dispatcher:voirpatient.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Dispatcher/voirpatient.html.twig");
    }
}
