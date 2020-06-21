<?php

/* hostooPharmacieBundle:Rapport:rapport_conso.html.twig */
class __TwigTemplate_58456e81706db64cbbeec490070b782ff19b39e374e2e09f8d99cf5b53230289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooPharmacieBundle:Rapport:rapport_conso.html.twig", 1);
        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'titrepage' => [$this, 'block_titrepage'],
            'menu' => [$this, 'block_menu'],
            'options' => [$this, 'block_options'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooPharmacieBundle:Rapport:rapport_conso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $this->displayParentBlock("titre", $context, $blocks);
        echo " ::Rapport :: Pharmacie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo " Rapport :: Pharmacie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    ";
        $this->loadTemplate("hostooUserBundle:menus:menuphar.html.twig", "hostooPharmacieBundle:Rapport:rapport_conso.html.twig", 5)->display($context);
        
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
        echo "   <div class=\"card-box\">
       <form class=\"form-inline\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_rapports_conso");
        echo "\" method=\"post\">
           <label>Du :
           <input type=\"date\" name=\"datea\" class=\"form-control\">
           </label>
           <label>Au :
           <input type=\"date\" name=\"dateb\" class=\"form-control\">
           </label>
           <input type=\"submit\" value=\"Afficher\" class=\"btn btn-info\">
       </form>
       <table class=\"table table-striped\">
           <caption><h3>Consommation au ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["journaux"] ?? $this->getContext($context, "journaux"))), "html", null, true);
        echo ")</h3></caption>
           <thead>
           <tr>
               <th>Date</th>
               <th>Produit</th>
               <th>Quantité</th>
               <th>Valeur en FC</th>

               <th>Auteur</th>
           </tr>
           </thead>
           <tbody>
           ";
        // line 34
        $context["totmont"] = 0;
        // line 35
        echo "           ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["journaux"] ?? $this->getContext($context, "journaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
            // line 36
            echo "               ";
            if ($this->getAttribute($context["jour"], "ordonnance", [])) {
                // line 37
                echo "           <tr>
               <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["jour"], "ordonnance", []), "dateordo", []), "d-m-Y"), "html", null, true);
                echo "</td>
               <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["jour"], "produit", []), "html", null, true);
                echo "</td>
               <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["jour"], "qte", []), "html", null, true);
                echo "</td>
               ";
                // line 41
                if ((($this->getAttribute($this->getAttribute($context["jour"], "produit", []), "plaquette", []) != null) || ($this->getAttribute($this->getAttribute($context["jour"], "produit", []), "plaquette", []) > 0))) {
                    // line 42
                    echo "                   ";
                    $context["totmont"] = (($context["totmont"] ?? $this->getContext($context, "totmont")) + ($this->getAttribute($this->getAttribute($context["jour"], "produit", []), "prix", []) / ($this->getAttribute($this->getAttribute($context["jour"], "produit", []), "plaquette", []) * $this->getAttribute($this->getAttribute($context["jour"], "produit", []), "unite", []))));
                    // line 43
                    echo "                   <td>";
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["jour"], "produit", []), "prix", []) / ($this->getAttribute($this->getAttribute($context["jour"], "produit", []), "plaquette", []) * $this->getAttribute($this->getAttribute($context["jour"], "produit", []), "unite", []))), "html", null, true);
                    echo "</td>
                   ";
                } else {
                    // line 45
                    echo "                       <td>";
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["jour"], "produit", []), "prix", []) / $this->getAttribute($this->getAttribute($context["jour"], "produit", []), "unite", [])), "html", null, true);
                    echo "</td>
                       ";
                    // line 46
                    $context["totmont"] = (($context["totmont"] ?? $this->getContext($context, "totmont")) + ($this->getAttribute($this->getAttribute($context["jour"], "produit", []), "prix", []) / $this->getAttribute($this->getAttribute($context["jour"], "produit", []), "unite", [])));
                    // line 47
                    echo "               ";
                }
                // line 48
                echo "
               <td>";
                // line 49
                if ($this->getAttribute($context["jour"], "ordonnance", [])) {
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["jour"], "ordonnance", []), "medecin", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["jour"], "ordonnance", []), "medecin", []), "postnom", [])), "html", null, true);
                }
                echo "</td>
           </tr>
               ";
            }
            // line 52
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "           </tbody>
            <tfoot>
            <tr>

                <th></th>
                <th></th>
                <th>TOTAL</th>
                <th>Fc ";
        // line 60
        echo twig_escape_filter($this->env, ($context["totmont"] ?? $this->getContext($context, "totmont")), "html", null, true);
        echo "</th>
                <th></th>
                <th></th>
            </tr>
            </tfoot>
       </table>
   </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooPharmacieBundle:Rapport:rapport_conso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 60,  193 => 53,  187 => 52,  179 => 49,  176 => 48,  173 => 47,  171 => 46,  166 => 45,  160 => 43,  157 => 42,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  140 => 37,  137 => 36,  132 => 35,  130 => 34,  113 => 22,  100 => 12,  97 => 11,  91 => 10,  83 => 8,  77 => 7,  69 => 5,  63 => 4,  51 => 3,  38 => 2,  11 => 1,);
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
{% block titre %}{{ parent() }} ::Rapport :: Pharmacie{% endblock %}
{% block titrepage %} Rapport :: Pharmacie{% endblock %}
{% block menu %}
    {% include 'hostooUserBundle:menus:menuphar.html.twig' %}
{% endblock %}
{% block options %}

{% endblock %}
{% block body %}
   <div class=\"card-box\">
       <form class=\"form-inline\" action=\"{{ path('hp_rapports_conso') }}\" method=\"post\">
           <label>Du :
           <input type=\"date\" name=\"datea\" class=\"form-control\">
           </label>
           <label>Au :
           <input type=\"date\" name=\"dateb\" class=\"form-control\">
           </label>
           <input type=\"submit\" value=\"Afficher\" class=\"btn btn-info\">
       </form>
       <table class=\"table table-striped\">
           <caption><h3>Consommation au {{ \"now\"|date('d-m-Y') }} ({{ journaux|length }})</h3></caption>
           <thead>
           <tr>
               <th>Date</th>
               <th>Produit</th>
               <th>Quantité</th>
               <th>Valeur en FC</th>

               <th>Auteur</th>
           </tr>
           </thead>
           <tbody>
           {% set totmont=0 %}
           {% for jour in journaux %}
               {% if jour.ordonnance %}
           <tr>
               <td>{{ jour.ordonnance.dateordo|date('d-m-Y') }}</td>
               <td>{{ jour.produit }}</td>
               <td>{{ jour.qte }}</td>
               {% if jour.produit.plaquette != null or jour.produit.plaquette > 0 %}
                   {% set totmont=totmont+(jour.produit.prix/(jour.produit.plaquette*jour.produit.unite)) %}
                   <td>{{ jour.produit.prix/(jour.produit.plaquette*jour.produit.unite) }}</td>
                   {% else %}
                       <td>{{ jour.produit.prix/(jour.produit.unite) }}</td>
                       {% set totmont=totmont+(jour.produit.prix/(jour.produit.unite)) %}
               {% endif %}

               <td>{% if jour.ordonnance %}{{ jour.ordonnance.medecin.nom~\" \"~jour.ordonnance.medecin.postnom }}{% endif %}</td>
           </tr>
               {% endif %}
           {% endfor %}
           </tbody>
            <tfoot>
            <tr>

                <th></th>
                <th></th>
                <th>TOTAL</th>
                <th>Fc {{ totmont }}</th>
                <th></th>
                <th></th>
            </tr>
            </tfoot>
       </table>
   </div>


{% endblock %}", "hostooPharmacieBundle:Rapport:rapport_conso.html.twig", "/var/www/html/hostoo/src/hostoo/PharmacieBundle/Resources/views/Rapport/rapport_conso.html.twig");
    }
}
