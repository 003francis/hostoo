<?php

/* hostooSanteBundle:Labo:index.html.twig */
class __TwigTemplate_ae9935b86abd35bebed0ab549a582f39d4d2790b8602a762f23f80cec94147e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Labo:index.html.twig", 1);
        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Labo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Liste des examens à faire";
        
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

        $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "hostooSanteBundle:Labo:index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context["resultat"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "resultat"], "method");
        // line 7
        echo "<div class=\"col-lg-12\" id=\"container\">
    <h3>Laboratoire</h3>
    <div class=\"col-lg-7\">
        <!-- Tabs Left -->
        <ul class=\"nav nav-tabs\">
            <li><a href=\"#tabr1\"  role=\"tab\" data-toggle=\"tab\" class=\"active\">Examens en attente</a></li>
            <li><a href=\"#tabr2\" role=\"tab\" data-toggle=\"tab\">Résultats</a></li>
            <li><a href=\"#tabr3\"  role=\"tab\" data-toggle=\"tab\">Besoins du service</a></li>
        </ul>
        ";
        // line 16
        $context["n"] = 0;
        // line 17
        echo "<div class=\"tab-content\">
        <div id=\"tabr1\" role=\"tabpanel\" class=\"tab-pane fade active in\">
            <!-- Premier onglet -->
            <div class=\"panel-group\" id=\"accordion\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordos"] ?? $this->getContext($context, "ordos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 22
            echo "
                    ";
            // line 23
            $context["n"] = (($context["n"] ?? $this->getContext($context, "n")) + 1);
            // line 24
            echo "                    ";
            $context["mes"] = 0;
            // line 25
            echo "                    ";
            if (((((($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0) && $this->getAttribute($context["ord"], "facture", [])) && ($this->getAttribute($this->getAttribute($context["ord"], "facture", []), "validation", []) == 1)) || ($this->getAttribute($context["ord"], "episode", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "societe", []), "id", []) != 15))) || ($this->getAttribute($context["ord"], "hospitalisation", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "societe", []), "id", []) != 15)))) {
                // line 26
                echo "                    ";
                if (($this->getAttribute($context["ord"], "etat", []) == 1)) {
                    // line 27
                    echo "                <div class=\"panel";
                    if (($this->getAttribute($context["ord"], "resultats", []) != null)) {
                        echo " panel-success";
                    } else {
                        echo " panel-default";
                    }
                    echo "\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
                    // line 30
                    echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                    echo "\">
                                ";
                    // line 31
                    if ($this->getAttribute($context["ord"], "episode", [])) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "nom", []), "html", null, true);
                        echo " ";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "nom", []), "html", null, true);
                        echo " ";
                    }
                    echo "<span class=\"label label-default\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ord"], "dateordo", []), "d-M-Y"), "html", null, true);
                    echo "</span>
                            </a>
                            <a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnancelabo_show", ["id" => $this->getAttribute($context["ord"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i> </a>

                        </h4>
                    </div>

                    <div id=\"collapse";
                    // line 38
                    echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                    echo "\" class=\"panel-collapse collapse ";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo "in ";
                    }
                    echo "\">
                        <div class=\"panel-body\">
                            <form action=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("valider_resultat", ["id" => $this->getAttribute($context["ord"], "id", [])]), "html", null, true);
                    echo "\" method=\"post\">
                            ";
                    // line 41
                    if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0)) {
                        // line 42
                        echo "                            <ul class=\"list-unstyled\">

                                ";
                        // line 44
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["mesactes"]) {
                            // line 45
                            echo "                                    ";
                            $context["mes"] = $this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "id", []);
                            // line 46
                            echo "

                                <li>

                                    <div class=\"row\">
                                        <div  class=\"col-lg-5\"><label for=\"myresultat\">";
                            // line 51
                            if ($this->getAttribute($context["mesactes"], "acte", [])) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                            }
                            echo "</label>
                                           ";
                            // line 52
                            if (($this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "actes", []) && $this->getAttribute($this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "actes", []), "valeur", []))) {
                                // line 53
                                echo "                                            <p class=\"text-success text-muted\">
                                               ";
                                // line 54
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "valeur", []), "html", null, true);
                                echo "
                                           </p>
                                            ";
                            } else {
                                // line 57
                                echo "                                                <a class=\"btn btn-custom waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#con-close-modal\">valeur de référence</a>

                                           ";
                            }
                            // line 60
                            echo "                                        </div>
                                        <div class=\"col-lg-7\">
                                            <textarea class=\"form-control text-warning\"  name=\"myresultat[";
                            // line 62
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "id", []), "html", null, true);
                            echo "]\" id=\"myresultat\" >";
                            if ($this->getAttribute($context["mesactes"], "resultat", [])) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["mesactes"], "resultat", []), "html", null, true);
                            }
                            echo "</textarea>
                                                <input type=\"hidden\" name=\"valeur[";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "actes", []), "id", []), "html", null, true);
                            echo "]\" value=\"";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "actes", []), "valeur", [])) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "actes", []), "valeur", []), "id", []), "html", null, true);
                                echo " ";
                            }
                            echo "\" />

                                    </div>
                                    </div>

                                </li>

                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesactes'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 71
                        echo "
                            </ul>
                            <div class=\"column\">
                                <div class=\"col-lg-6\">

                                </div>
                                <div class=\"col-lg-6\">
                                     <button class=\"btn btn-sm btn-success\" type=\"submit\">Valider</button>
                                </div>

                            </div>
                            ";
                    }
                    // line 83
                    echo "                            </form>
                        </div>
                    </div>

                </div>
                        <div id=\"con-close-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                        <h4 class=\"modal-title\">Valeur de reference</h4>
                                    </div>
                                    <div class=\"modal-body\">
";
                    // line 96
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["ordos"] ?? $this->getContext($context, "ordos")));
                    foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
                        // line 97
                        echo "                                        <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("valeurref_newacte", ["id" => $this->getAttribute($context["ord"], "id", [])]), "html", null, true);
                        echo "\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"form-group no-margin\">
                                                        <label for=\"field-7\" class=\"control-label\">Valeur de reference</label>
                                                        <textarea class=\"form-control autogrow\" name=\"valacte\" id=\"field-7\" placeholder=\"Write something about yourself\" style=\"overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;\"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type=\"submit\" class=\"btn btn-info\" value=\"fal\"/>
                                        </form>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    ";
                }
                // line 118
                echo "                    ";
            }
            // line 119
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
            </div>
        </div>

        <div id=\"tabr2\" role=\"tabpanel\" class=\"tab-pane fade\">
            <!-- Second onglet -->
            <div class=\"panel-group\" id=\"accordion\">
                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordos"] ?? $this->getContext($context, "ordos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 129
            echo "                    ";
            $context["n"] = (($context["n"] ?? $this->getContext($context, "n")) + 1);
            // line 130
            echo "                    ";
            if (($this->getAttribute($context["ord"], "resultats", []) != null)) {
                // line 131
                echo "                    <div class=\"panel";
                if (($this->getAttribute($context["ord"], "resultats", []) != null)) {
                    echo " panel-success";
                } else {
                    echo " panel-default";
                }
                echo "\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
                // line 134
                echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                echo "\">
                                  ";
                // line 135
                if ($this->getAttribute($context["ord"], "episode", [])) {
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "nom", []), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "nom", []), "html", null, true);
                    echo " ";
                }
                echo " <span class=\"label label-default\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ord"], "dateordo", []), "d-M-Y"), "html", null, true);
                echo "</span>
                                </a>

                            </h4>
                        </div>

                        <div id=\"collapse";
                // line 141
                echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                echo "\" class=\"panel-collapse collapse ";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    echo "in ";
                }
                echo "\">
                            <div class=\"panel-body\">
                                <ul class=\"list-unstyled\">
                                    ";
                // line 144
                if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0)) {
                    // line 145
                    echo "                                    <ul>
                                        ";
                    // line 146
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["lesactes"]) {
                        // line 147
                        echo "                                            <li class=\"list-group-item\">
                                                <strong >";
                        // line 148
                        if ($this->getAttribute($context["lesactes"], "acte", [])) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["lesactes"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                        }
                        echo "</strong>
                                                    <span class=\"badge\">";
                        // line 149
                        if ($this->getAttribute($context["lesactes"], "acte", [])) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["ord"], "afficherresultat", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($context["lesactes"], "acte", []), "actes", []), "id", [])], "method"), "html", null, true);
                        }
                        echo "</span>
                                            </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesactes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "                                    </ul>
                                ";
                }
                // line 154
                echo "                            </div>
                        </div>

                        <a href=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnancelabo_printshow", ["id" => $this->getAttribute($context["ord"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info btn-block\"><i class=\"fa fa-print\"></i> Imprimer </a>
                    </div>

                ";
            }
            // line 161
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
            </div>
        </div>

        <div id=\"tabr3\" role=\"tabpanel\" class=\"tab-pane fade\">
            <!-- Troisieme onglet -->
        </div>
    </div>
</div>
    ";
        // line 171
        list($context["exatt"], $context["exdmd2"]) =         [0, 0];
        // line 172
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordos"] ?? $this->getContext($context, "ordos")));
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 173
            echo "     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 174
                echo "         ";
                if (($this->getAttribute($context["res"], "attente", []) == 1)) {
                    // line 175
                    echo "         ";
                    $context["exdmd2"] = (($context["exdmd2"] ?? $this->getContext($context, "exdmd2")) + 1);
                    // line 176
                    echo "         ";
                } else {
                    // line 177
                    echo "             ";
                    $context["exatt"] = (($context["exatt"] ?? $this->getContext($context, "exatt")) + 1);
                    // line 178
                    echo "         ";
                }
                // line 179
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "    <div class=\"col-lg-5\">
        <ul class=\"list-unstyled\">
            <li>
        <button class=\"btn btn-block btn-success\">Examens En Attente<span class=\"badge badge-danger pull-right\">";
        // line 184
        echo twig_escape_filter($this->env, ($context["exdmd2"] ?? $this->getContext($context, "exdmd2")), "html", null, true);
        echo "</span></button>
            </li><li>
                <button class=\"btn btn-block  btn-warning\">Examens Effectués<span class=\"badge badge-danger pull-right\">";
        // line 186
        echo twig_escape_filter($this->env, ($context["exatt"] ?? $this->getContext($context, "exatt")), "html", null, true);
        echo "</span></button>
            </li><li>
                <button class=\"btn btn-block  btn-danger\">Examens demandés<span class=\"badge badge-danger pull-right\">";
        // line 188
        echo twig_escape_filter($this->env, (($context["exatt"] ?? $this->getContext($context, "exatt")) + ($context["exdmd2"] ?? $this->getContext($context, "exdmd2"))), "html", null, true);
        echo "</span></button>
            </li>
        </ul>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Labo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 188,  529 => 186,  524 => 184,  519 => 181,  513 => 180,  507 => 179,  504 => 178,  501 => 177,  498 => 176,  495 => 175,  492 => 174,  487 => 173,  482 => 172,  480 => 171,  469 => 162,  455 => 161,  448 => 157,  443 => 154,  439 => 152,  428 => 149,  422 => 148,  419 => 147,  415 => 146,  412 => 145,  410 => 144,  400 => 141,  381 => 135,  377 => 134,  366 => 131,  363 => 130,  360 => 129,  343 => 128,  334 => 121,  319 => 119,  316 => 118,  305 => 109,  286 => 97,  282 => 96,  267 => 83,  253 => 71,  234 => 63,  226 => 62,  222 => 60,  217 => 57,  211 => 54,  208 => 53,  206 => 52,  200 => 51,  193 => 46,  190 => 45,  186 => 44,  182 => 42,  180 => 41,  176 => 40,  167 => 38,  159 => 33,  146 => 31,  142 => 30,  131 => 27,  128 => 26,  125 => 25,  122 => 24,  120 => 23,  117 => 22,  100 => 21,  94 => 17,  92 => 16,  81 => 7,  78 => 6,  72 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block titrepage %}Liste des examens à faire{% endblock %}
{% block options %}{% endblock %}
{% block menu %}{% include 'hostooSanteBundle:menus:menulabo.html.twig' %}{% endblock %}
{% block body %}
    {% set resultat= app.session.get('resultat') %}
<div class=\"col-lg-12\" id=\"container\">
    <h3>Laboratoire</h3>
    <div class=\"col-lg-7\">
        <!-- Tabs Left -->
        <ul class=\"nav nav-tabs\">
            <li><a href=\"#tabr1\"  role=\"tab\" data-toggle=\"tab\" class=\"active\">Examens en attente</a></li>
            <li><a href=\"#tabr2\" role=\"tab\" data-toggle=\"tab\">Résultats</a></li>
            <li><a href=\"#tabr3\"  role=\"tab\" data-toggle=\"tab\">Besoins du service</a></li>
        </ul>
        {% set n=0 %}
<div class=\"tab-content\">
        <div id=\"tabr1\" role=\"tabpanel\" class=\"tab-pane fade active in\">
            <!-- Premier onglet -->
            <div class=\"panel-group\" id=\"accordion\">
                {% for ord in ordos %}

                    {% set n=n+1 %}
                    {% set mes=0 %}
                    {% if (ord.resultats.count > 0 and ord.facture and ord.facture.validation == 1) or (ord.episode and ord.episode.patient.societe.id != 15) or (ord.hospitalisation and ord.hospitalisation.patient.societe.id != 15) %}
                    {% if ord.etat == 1 %}
                <div class=\"panel{% if ord.resultats != null %} panel-success{% else %} panel-default{% endif %}\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ n }}\">
                                {% if ord.episode %}{{ ord.episode.patient.nom }} {% else %}{{ ord.hospitalisation.patient.nom }} {% endif %}<span class=\"label label-default\">{{ ord.dateordo|date('d-M-Y') }}</span>
                            </a>
                            <a href=\"{{ path('ordonnancelabo_show',{'id': ord.id }) }}\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i> </a>

                        </h4>
                    </div>

                    <div id=\"collapse{{ n }}\" class=\"panel-collapse collapse {% if loop.first %}in {% endif %}\">
                        <div class=\"panel-body\">
                            <form action=\"{{ path('valider_resultat',{'id': ord.id }) }}\" method=\"post\">
                            {% if ord.resultats.count > 0 %}
                            <ul class=\"list-unstyled\">

                                {% for mesactes in ord.resultats %}
                                    {% set mes=mesactes.acte.id %}


                                <li>

                                    <div class=\"row\">
                                        <div  class=\"col-lg-5\"><label for=\"myresultat\">{% if mesactes.acte %}{{ mesactes.acte.actes.designationacte }}{% endif %}</label>
                                           {% if mesactes.acte.actes and mesactes.acte.actes.valeur %}
                                            <p class=\"text-success text-muted\">
                                               {{ mesactes.acte.valeur }}
                                           </p>
                                            {% else %}
                                                <a class=\"btn btn-custom waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#con-close-modal\">valeur de référence</a>

                                           {% endif %}
                                        </div>
                                        <div class=\"col-lg-7\">
                                            <textarea class=\"form-control text-warning\"  name=\"myresultat[{{ mesactes.acte.id }}]\" id=\"myresultat\" >{% if mesactes.resultat %}{{ mesactes.resultat }}{% endif %}</textarea>
                                                <input type=\"hidden\" name=\"valeur[{{ mesactes.acte.actes.id }}]\" value=\"{% if mesactes.acte.actes.valeur %}{{ mesactes.acte.actes.valeur.id }} {% endif %}\" />

                                    </div>
                                    </div>

                                </li>

                                    {% endfor %}

                            </ul>
                            <div class=\"column\">
                                <div class=\"col-lg-6\">

                                </div>
                                <div class=\"col-lg-6\">
                                     <button class=\"btn btn-sm btn-success\" type=\"submit\">Valider</button>
                                </div>

                            </div>
                            {% endif %}
                            </form>
                        </div>
                    </div>

                </div>
                        <div id=\"con-close-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                        <h4 class=\"modal-title\">Valeur de reference</h4>
                                    </div>
                                    <div class=\"modal-body\">
{% for ord in ordos %}
                                        <form method=\"post\" action=\"{{ path('valeurref_newacte',{'id': ord.id }) }}\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"form-group no-margin\">
                                                        <label for=\"field-7\" class=\"control-label\">Valeur de reference</label>
                                                        <textarea class=\"form-control autogrow\" name=\"valacte\" id=\"field-7\" placeholder=\"Write something about yourself\" style=\"overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;\"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type=\"submit\" class=\"btn btn-info\" value=\"fal\"/>
                                        </form>
                                    {% endfor %}
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {% endif %}
                    {% endif %}

                    {% endfor %}

            </div>
        </div>

        <div id=\"tabr2\" role=\"tabpanel\" class=\"tab-pane fade\">
            <!-- Second onglet -->
            <div class=\"panel-group\" id=\"accordion\">
                {% for ord in ordos %}
                    {% set n=n+1 %}
                    {% if ord.resultats != null %}
                    <div class=\"panel{% if ord.resultats != null %} panel-success{% else %} panel-default{% endif %}\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ n }}\">
                                  {% if ord.episode %}  {{ ord.episode.patient.nom }} {% else %} {{ ord.hospitalisation.patient.nom }} {% endif %} <span class=\"label label-default\">{{ ord.dateordo|date('d-M-Y') }}</span>
                                </a>

                            </h4>
                        </div>

                        <div id=\"collapse{{ n }}\" class=\"panel-collapse collapse {% if loop.first %}in {% endif %}\">
                            <div class=\"panel-body\">
                                <ul class=\"list-unstyled\">
                                    {% if ord.resultats.count > 0 %}
                                    <ul>
                                        {% for lesactes in ord.resultats %}
                                            <li class=\"list-group-item\">
                                                <strong >{% if lesactes.acte %}{{ lesactes.acte.actes.designationacte }}{% endif %}</strong>
                                                    <span class=\"badge\">{% if lesactes.acte %}{{ ord.afficherresultat(lesactes.acte.actes.id) }}{% endif %}</span>
                                            </li>
                                        {% endfor%}
                                    </ul>
                                {% endif %}
                            </div>
                        </div>

                        <a href=\"{{ path('ordonnancelabo_printshow',{'id': ord.id}) }}\" class=\"btn btn-info btn-block\"><i class=\"fa fa-print\"></i> Imprimer </a>
                    </div>

                {% endif %}
                        {% endfor %}

            </div>
        </div>

        <div id=\"tabr3\" role=\"tabpanel\" class=\"tab-pane fade\">
            <!-- Troisieme onglet -->
        </div>
    </div>
</div>
    {% set exatt,exdmd2=0,0 %}
    {% for ord in ordos %}
     {% for res in ord.resultats %}
         {% if res.attente == 1  %}
         {% set exdmd2 = exdmd2 + 1 %}
         {% else %}
             {% set exatt = exatt + 1 %}
         {% endif %}
    {% endfor %}
    {% endfor %}
    <div class=\"col-lg-5\">
        <ul class=\"list-unstyled\">
            <li>
        <button class=\"btn btn-block btn-success\">Examens En Attente<span class=\"badge badge-danger pull-right\">{{ exdmd2 }}</span></button>
            </li><li>
                <button class=\"btn btn-block  btn-warning\">Examens Effectués<span class=\"badge badge-danger pull-right\">{{ exatt }}</span></button>
            </li><li>
                <button class=\"btn btn-block  btn-danger\">Examens demandés<span class=\"badge badge-danger pull-right\">{{ exatt+exdmd2 }}</span></button>
            </li>
        </ul>
    </div>
</div>

{% endblock %}
", "hostooSanteBundle:Labo:index.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Labo/index.html.twig");
    }
}
