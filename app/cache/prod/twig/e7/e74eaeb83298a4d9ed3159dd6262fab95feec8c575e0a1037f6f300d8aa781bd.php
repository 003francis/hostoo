<?php

/* hostooSanteBundle:Dispatcher:listepatients.html.twig */
class __TwigTemplate_3066c931bcc514c99f2939f4477d0a23c6cc2a10cd485e63199ea9dec426a972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Dispatcher:listepatients.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Dispatcher:listepatients.html.twig"));

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
        $this->loadTemplate("hostooSanteBundle:menus:menunrs.html.twig", "hostooSanteBundle:Dispatcher:listepatients.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Fil d'attente patients";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        $context["n"] = 1;
        // line 9
        if ((($context["episodes"] ?? $this->getContext($context, "episodes")) == null)) {
            // line 10
            echo "    <h2>Pas de liste</h2>
    ";
        } else {
            // line 12
            echo "        <div class=\"col-lg-9 col-md-12\">

        <div class=\"row\">
            ";
            // line 15
            if ((twig_length_filter($this->env, ($context["episodes"] ?? $this->getContext($context, "episodes"))) != 0)) {
                // line 16
                echo "                            <div class=\"col-sm-12\">
                                <div class=\"timeline\">
                                   <article class=\"timeline-item alt\">
                <div class=\"text-center\">
                    <div class=\"time-show first\">
                        <a href=\"#\" class=\"btn btn-primary w-lg\">Aujourd'hui</a>
                    </div>
                </div>
            </article>
                                    ";
            }
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 27
                echo "            ";
                if (($this->getAttribute($context["episode"], "verifierConsultation", [], "method") == 1)) {
                    // line 28
                    echo "        ";
                    $context["n"] = (($context["n"] ?? $this->getContext($context, "n")) + 1);
                    // line 29
                    echo "            ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["episode"], "listesoins", [])) == 0)) {
                        // line 30
                        echo "       <article ";
                        if ((($context["n"] ?? $this->getContext($context, "n")) % 2 == 0)) {
                            echo "class=\"timeline-item alt\"";
                        } else {
                            echo "class=\"timeline-item\"";
                        }
                        echo ">
                                        <div class=\"timeline-desk\">
                                            <div class=\"panel\">
                                                <div class=\"panel-body\">
                                                    <span class=\"timeline-icon\"></span>
                                                <span class=\"text-custom\">";
                        // line 35
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "d-m-Y"), "html", null, true);
                        echo "</span>
               <p>";
                        // line 36
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []), "html", null, true);
                        echo "  ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", []), "html", null, true);
                        echo "   ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "prenom", []), "html", null, true);
                        echo "</p>
                <p>Sexe : ";
                        // line 37
                        if (($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "sexe", []) == true)) {
                            echo "M";
                        } else {
                            echo "F";
                        }
                        echo "</p>
                                                    <a href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voirpatient_prel", ["id" => $this->getAttribute($context["episode"], "id", [])]), "html", null, true);
                        echo "\" class=\"btn btn-custom\">Voir</a>
                 </div>
                                            </div>
                                        </div>
                                    </article>






            ";
                        // line 50
                        echo "
                ";
                        // line 52
                        echo "           ";
                    }
                }
                // line 53
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "</div>
  </div>
  </div>
  </div>
    <div class=\"col-lg-3 col-md-12\">
        <h4>Patients En Attente des soins</h4>
        <ul class=\"list-unstyled list-group\">
        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lsoins"] ?? $this->getContext($context, "lsoins")));
            foreach ($context['_seq'] as $context["_key"] => $context["ls"]) {
                // line 62
                echo "
            <li class=\"list-group-item\">";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ls"], "episode", []), "patient", []), "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ls"], "episode", []), "patient", []), "postnom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ls"], "episode", []), "patient", []), "prenom", []), "html", null, true);
                echo " ";
                if (($this->getAttribute($context["ls"], "rechecked", []) == true)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voirpatient_prel", ["id" => $this->getAttribute($this->getAttribute($context["ls"], "episode", []), "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-custom pull-right\"><i class=\"fa fa-eye\"></i> </a>  ";
                }
                echo "</li>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        </ul>
    </div>
        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(function () {
           \$('#listepatients').dataTable({
               dom: \"Bfrtip\",
               buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                   extend: \"excel\",
                   className: \"btn-sm\"
               }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],
               responsive: !0
           });
        });
    </script>
    <script>
\$(function () {

    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 93
            echo "        //advance multiselect start
        \$('#my_multi_select";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", []), "html", null, true);
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
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    // Select2
    \$(\".select2\").select2();

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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 152
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 153
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Dispatcher:listepatients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 161,  385 => 160,  381 => 159,  377 => 158,  373 => 157,  369 => 156,  365 => 155,  361 => 154,  356 => 153,  350 => 152,  322 => 130,  280 => 94,  277 => 93,  273 => 92,  254 => 76,  250 => 75,  246 => 74,  242 => 73,  238 => 72,  234 => 71,  228 => 70,  218 => 66,  199 => 63,  196 => 62,  192 => 61,  183 => 54,  177 => 53,  173 => 52,  170 => 50,  156 => 38,  148 => 37,  140 => 36,  136 => 35,  123 => 30,  120 => 29,  117 => 28,  114 => 27,  109 => 26,  97 => 16,  95 => 15,  90 => 12,  86 => 10,  84 => 9,  82 => 8,  76 => 7,  65 => 6,  53 => 5,  45 => 3,  39 => 2,  11 => 1,);
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
{% block titrepage %}Fil d'attente patients{% endblock %}
{% block options %}{% endblock %}
{% block body %}
{% set n=1 %}
{% if episodes == null %}
    <h2>Pas de liste</h2>
    {% else %}
        <div class=\"col-lg-9 col-md-12\">

        <div class=\"row\">
            {% if episodes|length != 0 %}
                            <div class=\"col-sm-12\">
                                <div class=\"timeline\">
                                   <article class=\"timeline-item alt\">
                <div class=\"text-center\">
                    <div class=\"time-show first\">
                        <a href=\"#\" class=\"btn btn-primary w-lg\">Aujourd'hui</a>
                    </div>
                </div>
            </article>
                                    {% endif %}
        {% for episode in episodes %}
            {% if episode.verifierConsultation()==1 %}
        {% set n=n+1 %}
            {% if episode.listesoins|length == 0 %}
       <article {% if n is even %}class=\"timeline-item alt\"{% else %}class=\"timeline-item\"{% endif %}>
                                        <div class=\"timeline-desk\">
                                            <div class=\"panel\">
                                                <div class=\"panel-body\">
                                                    <span class=\"timeline-icon\"></span>
                                                <span class=\"text-custom\">{{ episode.dateepisode|date('d-m-Y') }}</span>
               <p>{{ episode.patient.nom }}  {{ episode.patient.postnom }}   {{ episode.patient.prenom }}</p>
                <p>Sexe : {% if episode.patient.sexe == true %}M{% else %}F{% endif %}</p>
                                                    <a href=\"{{ path('voirpatient_prel',{'id':episode.id }) }}\" class=\"btn btn-custom\">Voir</a>
                 </div>
                                            </div>
                                        </div>
                                    </article>






            {#{% if rdvc != null %} <button class=\"small green\"></button>{% else %}<button class=\"small red\"></button>{% endif %}#}

                {#<td><a href=\"{{ path('hostoo_sante_voirpatient',{'id':patient.id}) }}\" class=\"btn btn-info\" > <i class=\"fa fa-eye\"></i>Details</a></td>#}
           {% endif %}{% endif %}
            {% endfor %}
</div>
  </div>
  </div>
  </div>
    <div class=\"col-lg-3 col-md-12\">
        <h4>Patients En Attente des soins</h4>
        <ul class=\"list-unstyled list-group\">
        {% for ls in lsoins %}

            <li class=\"list-group-item\">{{ ls.episode.patient.nom }} {{ ls.episode.patient.postnom }} {{ ls.episode.patient.prenom }} {% if ls.rechecked == true %}<a href=\"{{ path('voirpatient_prel',{'id':ls.episode.id }) }}\" class=\"btn btn-custom pull-right\"><i class=\"fa fa-eye\"></i> </a>  {% endif %}</li>

        {% endfor %}
        </ul>
    </div>
        {% endif %}
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
           \$('#listepatients').dataTable({
               dom: \"Bfrtip\",
               buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                   extend: \"excel\",
                   className: \"btn-sm\"
               }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],
               responsive: !0
           });
        });
    </script>
    <script>
\$(function () {

    {% for episode in episodes %}
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
    {% endfor %}
    // Select2
    \$(\".select2\").select2();

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
{% endblock %}", "hostooSanteBundle:Dispatcher:listepatients.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Dispatcher/listepatients.html.twig");
    }
}
