<?php

/* rapportcaissejr/index.html.twig */
class __TwigTemplate_39b0cb20d676af02369734e800f2b2c02fa53ccdf495cb01f16cdaf74d0b7a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "rapportcaissejr/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapportcaissejr/index.html.twig"));

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
        $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "rapportcaissejr/index.html.twig", 3)->display($context);
        
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
        echo "    <h3>Journal de Caisse</h3>
    <div class=\"col-md-12 col-sm-12\">
<div class=\"card-box table-responsive\">
    <table class=\"table table-striped table-bordered\" id=\"printTable\">
        <caption><h4>Rapport du ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</h4></caption>
        <thead>
            <tr>
                <th class=\"text-center\">N°</th>
                <th class=\"text-center\">Date</th>
                <th>Libellé</th>
                <th class=\"text-center\">Report</th>
                <th class=\"text-center\">Recette brute</th>
                <th class=\"text-danger text-center\">Depense<br> USD</th>
                <th class=\"text-danger text-center\">Depense<br> CDF</th>
                <th class=\"text-center\">Recettes nettes</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context["reports"] = 0;
        // line 27
        echo "        ";
        $context["rbs"] = 0;
        // line 28
        echo "        ";
        $context["depusd"] = 0;
        // line 29
        echo "        ";
        $context["depcdf"] = 0;
        // line 30
        echo "        ";
        $context["recnet"] = 0;
        // line 31
        echo "        ";
        $context["medecin"] = 0;
        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rapportCaisseJrs"] ?? $this->getContext($context, "rapportCaisseJrs")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapportCaisseJr"]) {
            // line 33
            echo "            <tr ";
            if (($this->getAttribute($context["rapportCaisseJr"], "libelle", []) == "Report")) {
                echo " class=\"bg-success\" ";
            }
            echo ">
               <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "numdoc", []), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 35
            if ($this->getAttribute($context["rapportCaisseJr"], "daterap", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "daterap", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 36
            echo $this->getAttribute($context["rapportCaisseJr"], "libelle", []);
            echo "</td>
                <td class=\"text-center\" ";
            // line 37
            if (($this->getAttribute($context["rapportCaisseJr"], "libelle", []) == "Report")) {
                echo " bgcolor=\"#adff2f\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "report", []), "html", null, true);
            echo "</td>";
            $context["reports"] = (($context["reports"] ?? $this->getContext($context, "reports")) + $this->getAttribute($context["rapportCaisseJr"], "report", []));
            // line 38
            echo "                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "recettebrute", []), "html", null, true);
            echo "</td>";
            $context["rbs"] = (($context["rbs"] ?? $this->getContext($context, "rbs")) + $this->getAttribute($context["rapportCaisseJr"], "recettebrute", []));
            // line 39
            echo "                <td class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "depenseusd", []), "html", null, true);
            echo "</td>";
            $context["depusd"] = (($context["depusd"] ?? $this->getContext($context, "depusd")) + $this->getAttribute($context["rapportCaisseJr"], "depenseusd", []));
            // line 40
            echo "                <td class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "depensecdf", []), "html", null, true);
            echo "</td>";
            $context["depcdf"] = (($context["depcdf"] ?? $this->getContext($context, "depcdf")) + $this->getAttribute($context["rapportCaisseJr"], "depensecdf", []));
            // line 41
            echo "                <td class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapportCaisseJr"], "recettenet", []), "html", null, true);
            echo "</td>";
            $context["recnet"] = (($context["recnet"] ?? $this->getContext($context, "recnet")) + $this->getAttribute($context["rapportCaisseJr"], "recettenet", []));
            // line 42
            echo "
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapportCaisseJr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
        <tfoot>
        <tr>

            <th></th>
            <th></th>
            <th></th>
            <th class=\"text-success text-center\">";
        // line 52
        echo twig_escape_filter($this->env, ($context["reports"] ?? $this->getContext($context, "reports")), "html", null, true);
        echo "</th>
            <th class=\"text-success text-center\">";
        // line 53
        echo twig_escape_filter($this->env, ($context["rbs"] ?? $this->getContext($context, "rbs")), "html", null, true);
        echo "</th>
            <th class=\"text-danger text-center\">";
        // line 54
        echo twig_escape_filter($this->env, ($context["depusd"] ?? $this->getContext($context, "depusd")), "html", null, true);
        echo "</th>
            <th class=\"text-danger text-center\">";
        // line 55
        echo twig_escape_filter($this->env, ($context["depcdf"] ?? $this->getContext($context, "depcdf")), "html", null, true);
        echo "</th>
            <th class=\"text-center\">";
        // line 56
        echo twig_escape_filter($this->env, (($context["recnet"] ?? $this->getContext($context, "recnet")) - ($context["depusd"] ?? $this->getContext($context, "depusd"))), "html", null, true);
        echo "</th>
        </tr>
        </tfoot>
    </table>
</div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
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
        return "rapportcaissejr/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 65,  222 => 64,  208 => 56,  204 => 55,  200 => 54,  196 => 53,  192 => 52,  183 => 45,  175 => 42,  170 => 41,  165 => 40,  160 => 39,  155 => 38,  147 => 37,  143 => 36,  137 => 35,  133 => 34,  126 => 33,  121 => 32,  118 => 31,  115 => 30,  112 => 29,  109 => 28,  106 => 27,  104 => 26,  87 => 12,  81 => 8,  75 => 7,  63 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
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
    <h3>Journal de Caisse</h3>
    <div class=\"col-md-12 col-sm-12\">
<div class=\"card-box table-responsive\">
    <table class=\"table table-striped table-bordered\" id=\"printTable\">
        <caption><h4>Rapport du {{ \"now\"|date('d/m/Y') }}</h4></caption>
        <thead>
            <tr>
                <th class=\"text-center\">N°</th>
                <th class=\"text-center\">Date</th>
                <th>Libellé</th>
                <th class=\"text-center\">Report</th>
                <th class=\"text-center\">Recette brute</th>
                <th class=\"text-danger text-center\">Depense<br> USD</th>
                <th class=\"text-danger text-center\">Depense<br> CDF</th>
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
            <tr {% if rapportCaisseJr.libelle==\"Report\" %} class=\"bg-success\" {% endif %}>
               <td>{{ rapportCaisseJr.numdoc }}</td>
                <td class=\"text-center\">{% if rapportCaisseJr.daterap %}{{ rapportCaisseJr.daterap|date('Y-m-d H:i:s') }}{% endif %}</td>
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

{% endblock %}", "rapportcaissejr/index.html.twig", "/var/www/html/hostoo/app/Resources/views/rapportcaissejr/index.html.twig");
    }
}
