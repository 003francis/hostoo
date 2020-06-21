<?php

/* hostooPharmacieBundle:Pharmacie:tb.html.twig */
class __TwigTemplate_c215c8da4a35642e38d2a5e9c4cec089e1d831ea036ac3229abab2d7ddaf7072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooPharmacieBundle:Pharmacie:tb.html.twig", 1);
        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'titrepage' => [$this, 'block_titrepage'],
            'menu' => [$this, 'block_menu'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooPharmacieBundle:Pharmacie:tb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $this->displayParentBlock("titre", $context, $blocks);
        echo " ::Tableau de Bord :: Pharmacie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo " Tableau de Bord :: Pharmacie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    ";
        $this->loadTemplate("hostooUserBundle:menus:menuphar.html.twig", "hostooPharmacieBundle:Pharmacie:tb.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 8
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
        echo "</h2>
                    <h5>Produits</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["ordos"] ?? $this->getContext($context, "ordos"))), "html", null, true);
        echo "</h2>
                    <h5>Ordonnances</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["stocks"] ?? $this->getContext($context, "stocks"))), "html", null, true);
        echo "</h2>
                    <h5>Approvisionnements</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">1254</h2>
                    <h5>Daily Sales</h5>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
            <table class=\"table\" id=\"lesproduits\">
                <caption><h4>Les Produits</h4></caption>
                <thead>
                <tr>
                    <th>Nom produit</th>
                    <th>Quantité</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["mst"]) {
            // line 61
            echo "                    <tr>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["mst"], "nom", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 63
            if ($this->getAttribute($context["mst"], "stocktot", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mst"], "stocktot", []), "qte", []), "html", null, true);
            } else {
                echo "0";
            }
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </tbody>
            </table>
        </div>
    </div>

        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box\">
                <table class=\"table\" id=\"lesappros\">
                    <caption><h4>Les Approvisonnements</h4></caption>
                    <thead>
                    <tr>
                        <th>Nom produit</th>
                        <th>Quantité</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stocks"] ?? $this->getContext($context, "stocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["mst"]) {
            // line 84
            echo "                    <tr>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mst"], "produitin", []), "nom", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["mst"], "qte", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mst"], "datestock", []), "d-m-Y"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 98
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooPharmacieBundle:Pharmacie:tb.html.twig", 98)->display($context);
        // line 99
        echo "    <script>
        \$(function () {
            \$('#lesproduits').dataTable();
            \$('#lesappros').dataTable();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 107
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 108
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooPharmacieBundle:Pharmacie:tb.html.twig", 108)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooPharmacieBundle:Pharmacie:tb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 108,  269 => 107,  263 => 106,  250 => 99,  248 => 98,  244 => 97,  238 => 96,  226 => 90,  217 => 87,  213 => 86,  209 => 85,  206 => 84,  202 => 83,  183 => 66,  170 => 63,  166 => 62,  163 => 61,  159 => 60,  129 => 33,  117 => 24,  105 => 15,  99 => 11,  93 => 10,  85 => 8,  79 => 7,  71 => 5,  65 => 4,  53 => 3,  40 => 2,  11 => 1,);
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
{% block titre %}{{ parent() }} ::Tableau de Bord :: Pharmacie{% endblock %}
{% block titrepage %} Tableau de Bord :: Pharmacie{% endblock %}
{% block menu %}
    {% include 'hostooUserBundle:menus:menuphar.html.twig' %}
{% endblock %}
{% block options %}

{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ produits|length }}</h2>
                    <h5>Produits</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ ordos|length }}</h2>
                    <h5>Ordonnances</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ stocks|length }}</h2>
                    <h5>Approvisionnements</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">1254</h2>
                    <h5>Daily Sales</h5>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
            <table class=\"table\" id=\"lesproduits\">
                <caption><h4>Les Produits</h4></caption>
                <thead>
                <tr>
                    <th>Nom produit</th>
                    <th>Quantité</th>
                </tr>
                </thead>
                <tbody>
                {% for mst in produits %}
                    <tr>
                        <td>{{ mst.nom }}</td>
                        <td>{% if mst.stocktot %}{{ mst.stocktot.qte }}{% else %}0{% endif %}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box\">
                <table class=\"table\" id=\"lesappros\">
                    <caption><h4>Les Approvisonnements</h4></caption>
                    <thead>
                    <tr>
                        <th>Nom produit</th>
                        <th>Quantité</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for mst in stocks %}
                    <tr>
                        <td>{{ mst.produitin.nom }}</td>
                        <td>{{ mst.qte }}</td>
                        <td>{{ mst.datestock|date('d-m-Y') }}</td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
{{ parent() }}
    {% include 'hostooSanteBundle:plugins:datatable.scripts.html.twig' %}
    <script>
        \$(function () {
            \$('#lesproduits').dataTable();
            \$('#lesappros').dataTable();
        });
    </script>
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:datatable.style.html.twig' %}
{% endblock %}", "hostooPharmacieBundle:Pharmacie:tb.html.twig", "/var/www/html/hostoo/src/hostoo/PharmacieBundle/Resources/views/Pharmacie/tb.html.twig");
    }
}
