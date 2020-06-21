<?php

/* hostooSanteBundle:Imagerie:index.html.twig */
class __TwigTemplate_47d4a0a3f57575db0c314228b630cf3d2014f1178c11bb1846e59ca71930ba6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Imagerie:index.html.twig", 1);
        $this->blocks = [
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Imagerie:index.html.twig"));

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

        // line 5
        $this->loadTemplate("hostooSanteBundle:menus:menuimg.html.twig", "hostooSanteBundle:Imagerie:index.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $context["resultat"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "resultati"], "method");
        // line 9
        echo "    <div class=\"col-lg-12\" id=\"container\">
        <h3>Imagerie</h3>
        <div class=\"col-lg-10\">
            <!-- Tabs Left -->
            <ul class=\"nav nav-tabs\">
                <li><a href=\"#tabr1\"  role=\"tab\" data-toggle=\"tab\" class=\"active\">Examens en attente</a></li>
                <li><a href=\"#tabr2\" role=\"tab\" data-toggle=\"tab\">Résultats</a></li>
                <li><a href=\"#tabr3\"  role=\"tab\" data-toggle=\"tab\">Besoins du Service</a></li>
            </ul>
            ";
        // line 18
        $context["n"] = 0;
        // line 19
        echo "            <div class=\"tab-content\">
                <div id=\"tabr1\" role=\"tabpanel\" class=\"tab-pane fade active in\">
                    <!-- Premier onglet -->
                    <div class=\"panel-group\" id=\"accordion\">
                        ";
        // line 23
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
            // line 24
            echo "
                            ";
            // line 25
            $context["n"] = (($context["n"] ?? $this->getContext($context, "n")) + 1);
            // line 26
            echo "                            ";
            // line 27
            echo "                            ";
            if (((((($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0) && $this->getAttribute($context["ord"], "facture", [])) && ($this->getAttribute($this->getAttribute($context["ord"], "facture", []), "validation", []) == 1)) || ($this->getAttribute($context["ord"], "episode", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "societe", []), "id", []) != 15))) || ($this->getAttribute($context["ord"], "hospitalisation", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "societe", []), "id", []) != 15)))) {
                // line 28
                echo "                                    ";
                if (($this->getAttribute($context["ord"], "etat", []) == 1)) {
                    // line 29
                    echo "                                <div class=\"panel";
                    if ($this->getAttribute($context["ord"], "resultats", [])) {
                        echo " panel-success";
                    } elseif (($this->getAttribute($context["ord"], "etat", []) == 0)) {
                        echo "panel-warning";
                    } else {
                        echo " panel-default";
                    }
                    echo "\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
                    // line 32
                    echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                    echo "\">
                                                ";
                    // line 33
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

                                        </h4>
                                    </div>


                                    <div id=\"collapse";
                    // line 40
                    echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                    echo "\" class=\"panel-collapse collapse ";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo "in ";
                    }
                    echo "\">
                                        <div class=\"panel-body\">
                                            <form class=\"\" method=\"post\" action=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("valider_resultati", ["id" => $this->getAttribute($context["ord"], "id", [])]), "html", null, true);
                    echo "\" enctype=\"multipart/form-data\">
                                            <ul class=\"list-unstyled\">
                                                ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["mesactes"]) {
                        // line 45
                        echo "                                                    <li>
                                                            <div class=\"row\">
                                                                <div  class=\"col-lg-3\"><label for=\"myresultat\">";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                        echo "</label>
                                                                    <img src=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/imageries/" . $this->getAttribute($context["mesactes"], "fichier", []))), "html", null, true);
                        echo "\" class=\"img-thumbnail\"/>
                                                                </div>
                                                                <div class=\"col-lg-9\">
                                                                    <input type=\"file\" name=\"fichier[";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "actes", []), "id", []), "html", null, true);
                        echo "]\" />
                                                                    <br>
                                                                    <textarea name=\"myresultat[";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "actes", []), "id", []), "html", null, true);
                        echo "]\" class=\"form-control summernote\" id=\"myresultat";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["mesactes"], "acte", []), "actes", []), "id", []), "html", null, true);
                        echo "\" placeholder=\"Inscrire le résultat ici\">
                                                                    ";
                        // line 54
                        if ($this->getAttribute($context["mesactes"], "resultat", [])) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["mesactes"], "resultat", []), "html", null, true);
                        }
                        // line 55
                        echo "                                                                    </textarea>
                                                                    ";
                        // line 58
                        echo "                                                                </div>
                                                            </div>
                                                    </li>

                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesactes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "
                                            </ul>
                                            <div class=\"column\">
                                                <div class=\"col-lg-6\">

                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <button class=\"btn btn-sm btn-success\" type=\"submit\">Valider</button>
                                                </div>
                                            </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                            ";
                }
                // line 80
                echo "                            ";
            }
            // line 81
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
        // line 82
        echo "
                    </div>
                </div>

                <div id=\"tabr2\" role=\"tabpanel\" class=\"tab-pane fade\">
                    <!-- Second onglet -->
                    <div class=\"panel-group\" id=\"accordion\">
                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter(($context["ordos"] ?? $this->getContext($context, "ordos")))));
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
            // line 90
            echo "                            ";
            $context["n"] = (($context["n"] ?? $this->getContext($context, "n")) + 1);
            // line 91
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0)) {
                // line 92
                echo "                                <div class=\"panel";
                if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0)) {
                    echo " panel-success";
                } else {
                    echo " panel-default";
                }
                echo "\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
                // line 95
                echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                echo "\">
                                               ";
                // line 96
                if ($this->getAttribute($context["ord"], "episode", [])) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "episode", []), "patient", []), "nom", []), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ord"], "hospitalisation", []), "patient", []), "nom", []), "html", null, true);
                }
                echo "<span class=\"label label-default\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ord"], "dateordo", []), "d-M-Y"), "html", null, true);
                echo "</span>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id=\"collapse";
                // line 101
                echo twig_escape_filter($this->env, ($context["n"] ?? $this->getContext($context, "n")), "html", null, true);
                echo "\" class=\"panel-collapse collapse ";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    echo "in ";
                }
                echo "\">
                                        <div class=\"panel-body\">
                                            <ul class=\"list-unstyled\">
                                                ";
                // line 104
                if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0)) {
                    // line 105
                    echo "                                                    <ul>
                                                        ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["lesactes"]) {
                        // line 107
                        echo "                                                            <li class=\"list-group-item\">
                                                                <strong >";
                        // line 108
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["lesactes"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
                        echo "</strong>
                                                                ";
                        // line 109
                        if (($this->getAttribute($this->getAttribute($context["ord"], "resultats", []), "count", []) > 0)) {
                            // line 110
                            echo "                                                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                                // line 111
                                echo "                                                                        <span class=\"badge\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "resultat", []), "html", null, true);
                                echo "</span>
                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                        }
                        // line 113
                        echo "                                                            </li>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesactes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    echo "                                                    </ul>
                                                ";
                }
                // line 117
                echo "                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 121
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
        // line 122
        echo "
                    </div>
                </div>

                <div id=\"tabr3\" role=\"tabpanel\" class=\"tab-pane fade\">
                    <!-- Troisieme onglet -->
                </div>
            </div>
        </div>
        ";
        // line 131
        list($context["exatt"], $context["exdmd2"]) =         [0, 0];
        // line 132
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordos"] ?? $this->getContext($context, "ordos")));
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 133
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ord"], "resultats", []));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 134
                echo "                ";
                if (($this->getAttribute($context["res"], "attente", []) == 0)) {
                    // line 135
                    echo "                    ";
                    $context["exdmd2"] = (($context["exdmd2"] ?? $this->getContext($context, "exdmd2")) + 1);
                    // line 136
                    echo "                ";
                } else {
                    // line 137
                    echo "                    ";
                    $context["exatt"] = (($context["exatt"] ?? $this->getContext($context, "exatt")) + 1);
                    // line 138
                    echo "                ";
                }
                // line 139
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "        <div class=\"col-lg-2\">
            <ul class=\"list-unstyled\">
                <li>
                    <button class=\"btn btn-block btn-success\">Examens Effectués<span class=\"badge badge-danger pull-right\">";
        // line 144
        echo twig_escape_filter($this->env, ($context["exdmd2"] ?? $this->getContext($context, "exdmd2")), "html", null, true);
        echo "</span></button>
                </li><li>
                    <button class=\"btn btn-block  btn-warning\">Examens En Attente<span class=\"badge badge-danger pull-right\">";
        // line 146
        echo twig_escape_filter($this->env, ($context["exatt"] ?? $this->getContext($context, "exatt")), "html", null, true);
        echo "</span></button>
                </li><li>
                    <button class=\"btn btn-block  btn-danger\">Examens demandés<span class=\"badge badge-danger pull-right\">";
        // line 148
        echo twig_escape_filter($this->env, (($context["exatt"] ?? $this->getContext($context, "exatt")) + ($context["exdmd2"] ?? $this->getContext($context, "exdmd2"))), "html", null, true);
        echo "</span></button>
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/summernote/summernote.min.js"), "html", null, true);
        echo "\"></script>
    <script>

        jQuery(document).ready(function(){

            \$('.summernote').summernote({
                height: 250,                 // set editor height
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

    // line 176
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 177
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/summernote/summernote.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Imagerie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 178,  522 => 177,  516 => 176,  490 => 156,  486 => 155,  480 => 154,  467 => 148,  462 => 146,  457 => 144,  452 => 141,  446 => 140,  440 => 139,  437 => 138,  434 => 137,  431 => 136,  428 => 135,  425 => 134,  420 => 133,  415 => 132,  413 => 131,  402 => 122,  388 => 121,  382 => 117,  378 => 115,  371 => 113,  361 => 111,  356 => 110,  354 => 109,  350 => 108,  347 => 107,  343 => 106,  340 => 105,  338 => 104,  328 => 101,  311 => 96,  307 => 95,  296 => 92,  293 => 91,  290 => 90,  273 => 89,  264 => 82,  250 => 81,  247 => 80,  228 => 63,  218 => 58,  215 => 55,  211 => 54,  205 => 53,  200 => 51,  194 => 48,  190 => 47,  186 => 45,  182 => 44,  177 => 42,  168 => 40,  150 => 33,  146 => 32,  133 => 29,  130 => 28,  127 => 27,  125 => 26,  123 => 25,  120 => 24,  103 => 23,  97 => 19,  95 => 18,  84 => 9,  81 => 8,  75 => 7,  68 => 5,  62 => 4,  51 => 3,  39 => 2,  11 => 1,);
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
{% block options %}{% endblock%}
{% block menu %}
{% include 'hostooSanteBundle:menus:menuimg.html.twig' %}
{% endblock %}
{% block body %}
    {% set resultat= app.session.get('resultati') %}
    <div class=\"col-lg-12\" id=\"container\">
        <h3>Imagerie</h3>
        <div class=\"col-lg-10\">
            <!-- Tabs Left -->
            <ul class=\"nav nav-tabs\">
                <li><a href=\"#tabr1\"  role=\"tab\" data-toggle=\"tab\" class=\"active\">Examens en attente</a></li>
                <li><a href=\"#tabr2\" role=\"tab\" data-toggle=\"tab\">Résultats</a></li>
                <li><a href=\"#tabr3\"  role=\"tab\" data-toggle=\"tab\">Besoins du Service</a></li>
            </ul>
            {% set n=0 %}
            <div class=\"tab-content\">
                <div id=\"tabr1\" role=\"tabpanel\" class=\"tab-pane fade active in\">
                    <!-- Premier onglet -->
                    <div class=\"panel-group\" id=\"accordion\">
                        {% for ord in ordos %}

                            {% set n=n+1 %}
                            {# if ord.etat == 1 and ord.facture and ord.facture.validation==1 or ord.episode.patient.convention.id == 1 #}
                            {% if (ord.resultats.count > 0 and ord.facture and ord.facture.validation == 1) or (ord.episode and ord.episode.patient.societe.id != 15) or (ord.hospitalisation and ord.hospitalisation.patient.societe.id != 15) %}
                                    {% if ord.etat == 1 %}
                                <div class=\"panel{% if ord.resultats %} panel-success{% elseif ord.etat == 0 %}panel-warning{% else %} panel-default{% endif %}\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ n }}\">
                                                {% if ord.episode %}{{ ord.episode.patient.nom }} {% else %}{{ ord.hospitalisation.patient.nom }} {% endif %}<span class=\"label label-default\">{{ ord.dateordo|date('d-M-Y') }}</span>
                                            </a>

                                        </h4>
                                    </div>


                                    <div id=\"collapse{{ n }}\" class=\"panel-collapse collapse {% if loop.first %}in {% endif %}\">
                                        <div class=\"panel-body\">
                                            <form class=\"\" method=\"post\" action=\"{{ path('valider_resultati',{'id': ord.id }) }}\" enctype=\"multipart/form-data\">
                                            <ul class=\"list-unstyled\">
                                                {% for mesactes in ord.resultats %}
                                                    <li>
                                                            <div class=\"row\">
                                                                <div  class=\"col-lg-3\"><label for=\"myresultat\">{{ mesactes.acte.actes.designationacte }}</label>
                                                                    <img src=\"{{ asset('uploads/imageries/'~mesactes.fichier) }}\" class=\"img-thumbnail\"/>
                                                                </div>
                                                                <div class=\"col-lg-9\">
                                                                    <input type=\"file\" name=\"fichier[{{ mesactes.acte.actes.id }}]\" />
                                                                    <br>
                                                                    <textarea name=\"myresultat[{{ mesactes.acte.actes.id }}]\" class=\"form-control summernote\" id=\"myresultat{{ mesactes.acte.actes.id }}\" placeholder=\"Inscrire le résultat ici\">
                                                                    {% if mesactes.resultat %}{{ mesactes.resultat }}{% endif %}
                                                                    </textarea>
                                                                    {#
                                                                    {{ render(controller('hostooSanteBundle:ResultatsImg:edit', {'id': mesactes.id })) }} #}
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
                                            </form>

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
                        {% for ord in ordos|sort|reverse %}
                            {% set n=n+1 %}
                            {% if ord.resultats.count > 0 %}
                                <div class=\"panel{% if ord.resultats.count > 0 %} panel-success{% else %} panel-default{% endif %}\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ n }}\">
                                               {% if ord.episode %} {{ ord.episode.patient.nom }} {% else %} {{ ord.hospitalisation.patient.nom }}{% endif %}<span class=\"label label-default\">{{ ord.dateordo|date('d-M-Y') }}</span>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id=\"collapse{{ n }}\" class=\"panel-collapse collapse {% if loop.first %}in {% endif %}\">
                                        <div class=\"panel-body\">
                                            <ul class=\"list-unstyled\">
                                                {% if ord.resultats.count > 0  %}
                                                    <ul>
                                                        {% for lesactes in ord.resultats %}
                                                            <li class=\"list-group-item\">
                                                                <strong >{{ lesactes.acte.actes.designationacte }}</strong>
                                                                {% if ord.resultats.count > 0 %}
                                                                    {% for res in ord.resultats %}
                                                                        <span class=\"badge\">{{ res.resultat }}</span>
                                                                    {% endfor %}{% endif %}
                                                            </li>
                                                        {% endfor%}
                                                    </ul>
                                                {% endif %}
                                        </div>
                                    </div>
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
                {% if res.attente == 0  %}
                    {% set exdmd2 = exdmd2 + 1 %}
                {% else %}
                    {% set exatt = exatt + 1 %}
                {% endif %}
            {% endfor %}
        {% endfor %}
        <div class=\"col-lg-2\">
            <ul class=\"list-unstyled\">
                <li>
                    <button class=\"btn btn-block btn-success\">Examens Effectués<span class=\"badge badge-danger pull-right\">{{ exdmd2 }}</span></button>
                </li><li>
                    <button class=\"btn btn-block  btn-warning\">Examens En Attente<span class=\"badge badge-danger pull-right\">{{ exatt }}</span></button>
                </li><li>
                    <button class=\"btn btn-block  btn-danger\">Examens demandés<span class=\"badge badge-danger pull-right\">{{ exatt+exdmd2 }}</span></button>
                </li>
            </ul>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
{{ parent() }}
    <script src=\"{{ asset('assets/plugins/summernote/summernote.min.js') }}\"></script>
    <script>

        jQuery(document).ready(function(){

            \$('.summernote').summernote({
                height: 250,                 // set editor height
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
{% endblock %}
", "hostooSanteBundle:Imagerie:index.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Imagerie/index.html.twig");
    }
}
