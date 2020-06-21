<?php

/* rapportcaissejr/rapportdumois.html.twig */
class __TwigTemplate_599dbbce6e9de0f9d3cb66d761753066cbe7ca40d181eb223f7bc0f22c5f993c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "rapportcaissejr/rapportdumois.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
            'body' => [$this, 'block_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapportcaissejr/rapportdumois.html.twig"));

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
        $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "rapportcaissejr/rapportdumois.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        echo "<button class=\"btn btn-default\"><i class=\"fa fa-print\"></i> </button>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Rapport caisse mensuel ";
        echo twig_escape_filter($this->env, ($context["lemois"] ?? $this->getContext($context, "lemois")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["annee"] ?? $this->getContext($context, "annee")), "html", null, true);
        echo "</h1>
    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_du_mois");
        echo "\" method=\"post\">
        <select name=\"mois\">
            <option value=\"01\">Janvier</option>
            <option value=\"02\">Février</option>
            <option value=\"03\">Mars</option>
            <option value=\"04\">Avril</option>
            <option value=\"05\">Mai</option>
            <option value=\"06\">Juin</option>
            <option value=\"07\">Juillet</option>
            <option value=\"08\">Aout</option>
            <option value=\"09\">Septembre</option>
            <option value=\"10\">Octobre</option>
            <option value=\"11\">Novembre</option>
            <option value=\"12\">Decembre</option>
        </select>
        <select name=\"annee\">
            <option value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</option>
            <option value=\"";
        // line 26
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - 1), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - 1), "html", null, true);
        echo "</option>
            <option value=\"";
        // line 27
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - 2), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - 2), "html", null, true);
        echo "</option>
        </select>
        <input value=\"rechercher\" type=\"submit\" class=\"btn btn-warning\">
    </form>
<div class=\"card-box table-responsive\">
    <table class=\"table table-striped table-bordered\" id=\"printTable\">
        <thead>
            <tr>
                <th class=\"text-center\">N°</th>
                <th class=\"text-center\">Date</th>
                <th>Libellé</th>
                <th class=\"text-center\">Report</th>
                <th class=\"text-center\">Recettes brutes</th>
                <th class=\"text-danger text-center\">Dépenses USD</th>
                <th class=\"text-danger text-center\">Dépenses CDF</th>
                <th class=\"text-center\">Recettes nettes</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context["reports"] = 0;
        // line 47
        echo "        ";
        $context["rbs"] = 0;
        // line 48
        echo "        ";
        $context["depusd"] = 0;
        // line 49
        echo "        ";
        $context["depcdf"] = 0;
        // line 50
        echo "        ";
        $context["recnet"] = 0;
        // line 51
        echo "        ";
        $context["medecin"] = 0;
        // line 52
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rapportCaisseJrs"] ?? $this->getContext($context, "rapportCaisseJrs")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapportCaisseJr"]) {
            // line 53
            echo "            <tr>
               <td >";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "numdoc", []), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 55
            if ($this->getAttribute($context["rapportCaisseJr"], "daterap", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "daterap", []), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 56
            echo $this->getAttribute($context["rapportCaisseJr"], "libelle", []);
            echo "</td>
                <td class=\"text-center\" ";
            // line 57
            if (($this->getAttribute($context["rapportCaisseJr"], "libelle", []) == "Report")) {
                echo " bgcolor=\"#adff2f\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "report", []), "html", null, true);
            echo "</td>";
            $context["reports"] = (($context["reports"] ?? $this->getContext($context, "reports")) + $this->getAttribute($context["rapportCaisseJr"], "report", []));
            // line 58
            echo "                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "recettebrute", []), "html", null, true);
            echo "</td>";
            $context["rbs"] = (($context["rbs"] ?? $this->getContext($context, "rbs")) + $this->getAttribute($context["rapportCaisseJr"], "recettebrute", []));
            // line 59
            echo "                <td class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "depenseusd", []), "html", null, true);
            echo "</td>";
            $context["depusd"] = (($context["depusd"] ?? $this->getContext($context, "depusd")) + $this->getAttribute($context["rapportCaisseJr"], "depenseusd", []));
            // line 60
            echo "                <td class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "depensecdf", []), "html", null, true);
            echo "</td>";
            $context["depcdf"] = (($context["depcdf"] ?? $this->getContext($context, "depcdf")) + $this->getAttribute($context["rapportCaisseJr"], "depensecdf", []));
            // line 61
            echo "                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "recettenet", []), "html", null, true);
            echo "</td>";
            $context["recnet"] = (($context["recnet"] ?? $this->getContext($context, "recnet")) + $this->getAttribute($context["rapportCaisseJr"], "recettenet", []));
            // line 62
            echo "
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapportCaisseJr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
        <tfoot>
        <tr>

            <th></th>
            <th></th>
            <th></th>
            <th class=\"text-success text-center\">";
        // line 72
        echo twig_escape_filter($this->env, ($context["reports"] ?? $this->getContext($context, "reports")), "html", null, true);
        echo "</th>
            <th class=\"text-success text-center\">";
        // line 73
        echo twig_escape_filter($this->env, ($context["rbs"] ?? $this->getContext($context, "rbs")), "html", null, true);
        echo "</th>
            <th class=\"text-danger text-center\">";
        // line 74
        echo twig_escape_filter($this->env, ($context["depusd"] ?? $this->getContext($context, "depusd")), "html", null, true);
        echo "</th>
            <th class=\"text-danger text-center\">";
        // line 75
        echo twig_escape_filter($this->env, ($context["depcdf"] ?? $this->getContext($context, "depcdf")), "html", null, true);
        echo "</th>
            <th class=\"text-center\">";
        // line 76
        echo twig_escape_filter($this->env, (($context["recnet"] ?? $this->getContext($context, "recnet")) - ($context["depusd"] ?? $this->getContext($context, "depusd"))), "html", null, true);
        echo "</th>
        </tr>
        </tfoot>
    </table>
</div>
    <div class=\"card-box\">
        <div class=\"row\">
            <div class=\"col-md-12 col-xs-12\">
                <table class=\"table\">
                    <tr>
                        <th>RECETTES </th>
                        <th>DEPENSES </th>
                    </tr>
                    <tr>
                        <td>
                            <table class=\"table\">
                                <tr>
                                    <th>Recettes consultation</th>
                                    <td>";
        // line 94
        echo twig_escape_filter($this->env, ((($context["rcons"] ?? $this->getContext($context, "rcons"))) ? ($this->getAttribute(($context["rcons"] ?? $this->getContext($context, "rcons")), "usd", [])) : (0)), "html", null, true);
        echo " USD</td>
                                    <td>";
        // line 95
        echo twig_escape_filter($this->env, ((($context["rcons"] ?? $this->getContext($context, "rcons"))) ? ($this->getAttribute(($context["rcons"] ?? $this->getContext($context, "rcons")), "cdf", [])) : (0)), "html", null, true);
        echo " CDF</td>
                                </tr>
                                <tr>
                                    <th>Recettes Laboratoire</th>
                                    <td>";
        // line 99
        echo twig_escape_filter($this->env, ((($context["rLab"] ?? $this->getContext($context, "rLab"))) ? ($this->getAttribute(($context["rLab"] ?? $this->getContext($context, "rLab")), "usd", [])) : (0)), "html", null, true);
        echo " USD</td>
                                    <td>";
        // line 100
        echo twig_escape_filter($this->env, ((($context["rLab"] ?? $this->getContext($context, "rLab"))) ? ($this->getAttribute(($context["rLab"] ?? $this->getContext($context, "rLab")), "cdf", [])) : (0)), "html", null, true);
        echo " CDF</td>
                                </tr>
                                <tr>
                                    <th>Recettes Imagerie</th>
                                    <td>";
        // line 104
        echo twig_escape_filter($this->env, ((($context["rImg"] ?? $this->getContext($context, "rImg"))) ? ($this->getAttribute(($context["rImg"] ?? $this->getContext($context, "rImg")), "usd", [])) : (0)), "html", null, true);
        echo " USD</td>
                                    <td>";
        // line 105
        echo twig_escape_filter($this->env, ((($context["rImg"] ?? $this->getContext($context, "rImg"))) ? ($this->getAttribute(($context["rImg"] ?? $this->getContext($context, "rImg")), "cdf", [])) : (0)), "html", null, true);
        echo " CDF</td>
                                </tr>
                                <tr>
                                    <th>Recettes autres actes</th>
                                    <td>";
        // line 109
        echo twig_escape_filter($this->env, ((($context["rAut"] ?? $this->getContext($context, "rAut"))) ? ($this->getAttribute(($context["rAut"] ?? $this->getContext($context, "rAut")), "usd", [])) : (0)), "html", null, true);
        echo " USD</td>
                                    <td>";
        // line 110
        echo twig_escape_filter($this->env, ((($context["rAut"] ?? $this->getContext($context, "rAut"))) ? ($this->getAttribute(($context["rAut"] ?? $this->getContext($context, "rAut")), "cdf", [])) : (0)), "html", null, true);
        echo " CDF</td>
                                </tr>

                            </table>
                        </td>
                        <td>
                            <table class=\"table\">
                                <tr>
                                    <th>Dépenses</th>
                                    <td>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute(($context["depmois"] ?? $this->getContext($context, "depmois")), "depmois", []), "html", null, true);
        echo "</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function printData()
        {
            var divToPrint=document.getElementById(\"printTable\");
            newWin= window.open(\"\");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }

        \$('button').on('click',function(){
            printData();
        })
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "rapportcaissejr/rapportdumois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 130,  330 => 129,  313 => 119,  301 => 110,  297 => 109,  290 => 105,  286 => 104,  279 => 100,  275 => 99,  268 => 95,  264 => 94,  243 => 76,  239 => 75,  235 => 74,  231 => 73,  227 => 72,  218 => 65,  210 => 62,  205 => 61,  200 => 60,  195 => 59,  190 => 58,  182 => 57,  178 => 56,  172 => 55,  168 => 54,  165 => 53,  160 => 52,  157 => 51,  154 => 50,  151 => 49,  148 => 48,  145 => 47,  143 => 46,  119 => 27,  113 => 26,  107 => 25,  88 => 9,  81 => 8,  75 => 7,  63 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
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
    {% include \"hostooSanteBundle:menus:menucaisse.html.twig\" %}
{% endblock %}
{% block titrepage %}{% endblock %}
{% block options %}<button class=\"btn btn-default\"><i class=\"fa fa-print\"></i> </button>{% endblock %}
{% block body %}
    <h1>Rapport caisse mensuel {{ lemois }} {{ annee }}</h1>
    <form action=\"{{ path('rapport_du_mois') }}\" method=\"post\">
        <select name=\"mois\">
            <option value=\"01\">Janvier</option>
            <option value=\"02\">Février</option>
            <option value=\"03\">Mars</option>
            <option value=\"04\">Avril</option>
            <option value=\"05\">Mai</option>
            <option value=\"06\">Juin</option>
            <option value=\"07\">Juillet</option>
            <option value=\"08\">Aout</option>
            <option value=\"09\">Septembre</option>
            <option value=\"10\">Octobre</option>
            <option value=\"11\">Novembre</option>
            <option value=\"12\">Decembre</option>
        </select>
        <select name=\"annee\">
            <option value=\"{{ \"now\"|date('Y') }}\">{{ \"now\"|date('Y') }}</option>
            <option value=\"{{ \"now\"|date('Y')-1 }}\">{{ \"now\"|date('Y')-1 }}</option>
            <option value=\"{{ \"now\"|date('Y')-2 }}\">{{ \"now\"|date('Y')-2 }}</option>
        </select>
        <input value=\"rechercher\" type=\"submit\" class=\"btn btn-warning\">
    </form>
<div class=\"card-box table-responsive\">
    <table class=\"table table-striped table-bordered\" id=\"printTable\">
        <thead>
            <tr>
                <th class=\"text-center\">N°</th>
                <th class=\"text-center\">Date</th>
                <th>Libellé</th>
                <th class=\"text-center\">Report</th>
                <th class=\"text-center\">Recettes brutes</th>
                <th class=\"text-danger text-center\">Dépenses USD</th>
                <th class=\"text-danger text-center\">Dépenses CDF</th>
                <th class=\"text-center\">Recettes nettes</th>
            </tr>
        </thead>
        <tbody>
        {% set reports=0 %}
        {% set rbs=0 %}
        {% set depusd=0 %}
        {% set depcdf=0 %}
        {% set recnet=0 %}
        {% set medecin=0 %}
        {% for rapportCaisseJr in rapportCaisseJrs %}
            <tr>
               <td >{{ rapportCaisseJr.numdoc }}</td>
                <td class=\"text-center\">{% if rapportCaisseJr.daterap %}{{ rapportCaisseJr.daterap|date('d-m-Y') }}{% endif %}</td>
                <td>{{ rapportCaisseJr.libelle|raw }}</td>
                <td class=\"text-center\" {% if rapportCaisseJr.libelle==\"Report\" %} bgcolor=\"#adff2f\" {% endif %}>{{ rapportCaisseJr.report }}</td>{% set reports=reports+rapportCaisseJr.report %}
                <td class=\"text-center\">{{ rapportCaisseJr.recettebrute }}</td>{% set rbs=rbs+rapportCaisseJr.recettebrute %}
                <td class=\"text-danger text-center\">{{ rapportCaisseJr.depenseusd }}</td>{% set depusd=depusd+rapportCaisseJr.depenseusd %}
                <td class=\"text-danger text-center\">{{ rapportCaisseJr.depensecdf }}</td>{% set depcdf=depcdf+rapportCaisseJr.depensecdf %}
                <td class=\"text-center\">{{ rapportCaisseJr.recettenet }}</td>{% set recnet=recnet+rapportCaisseJr.recettenet %}

            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>

            <th></th>
            <th></th>
            <th></th>
            <th class=\"text-success text-center\">{{ reports }}</th>
            <th class=\"text-success text-center\">{{ rbs }}</th>
            <th class=\"text-danger text-center\">{{ depusd }}</th>
            <th class=\"text-danger text-center\">{{ depcdf }}</th>
            <th class=\"text-center\">{{ recnet-depusd }}</th>
        </tr>
        </tfoot>
    </table>
</div>
    <div class=\"card-box\">
        <div class=\"row\">
            <div class=\"col-md-12 col-xs-12\">
                <table class=\"table\">
                    <tr>
                        <th>RECETTES </th>
                        <th>DEPENSES </th>
                    </tr>
                    <tr>
                        <td>
                            <table class=\"table\">
                                <tr>
                                    <th>Recettes consultation</th>
                                    <td>{{ rcons?rcons.usd:0 }} USD</td>
                                    <td>{{ rcons?rcons.cdf:0 }} CDF</td>
                                </tr>
                                <tr>
                                    <th>Recettes Laboratoire</th>
                                    <td>{{ rLab?rLab.usd:0 }} USD</td>
                                    <td>{{ rLab?rLab.cdf:0 }} CDF</td>
                                </tr>
                                <tr>
                                    <th>Recettes Imagerie</th>
                                    <td>{{ rImg?rImg.usd:0 }} USD</td>
                                    <td>{{ rImg?rImg.cdf:0 }} CDF</td>
                                </tr>
                                <tr>
                                    <th>Recettes autres actes</th>
                                    <td>{{ rAut?rAut.usd:0 }} USD</td>
                                    <td>{{ rAut?rAut.cdf:0 }} CDF</td>
                                </tr>

                            </table>
                        </td>
                        <td>
                            <table class=\"table\">
                                <tr>
                                    <th>Dépenses</th>
                                    <td>{{ depmois.depmois }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>
        function printData()
        {
            var divToPrint=document.getElementById(\"printTable\");
            newWin= window.open(\"\");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }

        \$('button').on('click',function(){
            printData();
        })
    </script>

{% endblock %}", "rapportcaissejr/rapportdumois.html.twig", "/var/www/html/hostoo/app/Resources/views/rapportcaissejr/rapportdumois.html.twig");
    }
}
