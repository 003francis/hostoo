<?php

/* hostooPharmacieBundle:Pharmacie:ordonnance.html.twig */
class __TwigTemplate_a3086df90eb75f326010dbdaae361348b69b8bb03c2fdf2e3e8925037eee68ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooPharmacieBundle:Pharmacie:ordonnance.html.twig", 1);
        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooPharmacieBundle:Pharmacie:ordonnance.html.twig"));

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
        $this->loadTemplate("hostooUserBundle:menus:menuphar.html.twig", "hostooPharmacieBundle:Pharmacie:ordonnance.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"card-box\">
    <h3 class=\"text-center\">ORDONNANCE MEDICALE</h3>

    <ul class=\"list-unstyled list-group\">
        <li>Prescription  : ";
        // line 10
        if ($this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "medecin", [])) {
            echo "Dr. ";
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "medecin", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "medecin", []), "postnom", [])) . " ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "medecin", []), "prenom", []))), "html", null, true);
            echo " ";
        }
        echo "</li>
        <li>Patient(e) : ";
        // line 11
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "episode", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "episode", []), "patient", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "episode", []), "patient", []), "prenom", [])), "html", null, true);
        echo "</li>
        <li>Type : ";
        // line 12
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "episode", []), "patient", []), "societe", []), "id", []) != 15)) {
            echo "Conventionné(e)";
        } else {
            echo "Privé(e)";
        }
        echo "</li>
    </ul>
    <table class=\"table table-striped\">
        <tr>
            <th>Désignation</th>
            <th>Posologie</th>
            <th>Quantité</th>
        </tr>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "posologie", []));
        foreach ($context['_seq'] as $context["_key"] => $context["pos"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["pos"], "produit", []), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["pos"], "posologie", []), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["pos"], "qte", []), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </table>
    ";
        // line 28
        if (($this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "livre", []) == 0)) {
            // line 29
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_livreproduits", ["id" => $this->getAttribute(($context["ordonnance"] ?? $this->getContext($context, "ordonnance")), "id", [])]), "html", null, true);
            echo "\">Livrer</a>
    ";
        }
        // line 31
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooPharmacieBundle:Pharmacie:ordonnance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  117 => 29,  115 => 28,  112 => 27,  103 => 24,  99 => 23,  95 => 22,  92 => 21,  88 => 20,  73 => 12,  69 => 11,  61 => 10,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
    {% include 'hostooUserBundle:menus:menuphar.html.twig' %}
{% endblock %}
{% block body %}
<div class=\"card-box\">
    <h3 class=\"text-center\">ORDONNANCE MEDICALE</h3>

    <ul class=\"list-unstyled list-group\">
        <li>Prescription  : {% if ordonnance.medecin %}Dr. {{ ordonnance.medecin.nom~\" \"~ordonnance.medecin.postnom~\" \"~ordonnance.medecin.prenom|upper }} {% endif %}</li>
        <li>Patient(e) : {{ ordonnance.episode.patient.nom~\" \"~ordonnance.episode.patient.postnom~\" \"~ordonnance.episode.patient.prenom }}</li>
        <li>Type : {% if ordonnance.episode.patient.societe.id != 15 %}Conventionné(e){% else %}Privé(e){% endif %}</li>
    </ul>
    <table class=\"table table-striped\">
        <tr>
            <th>Désignation</th>
            <th>Posologie</th>
            <th>Quantité</th>
        </tr>
        {% for pos in ordonnance.posologie %}
        <tr>
            <td>{{ pos.produit }}</td>
            <td>{{ pos.posologie }}</td>
            <td>{{ pos.qte }}</td>
        </tr>
        {% endfor %}
    </table>
    {% if ordonnance.livre==0 %}
    <a href=\"{{ path('hp_livreproduits',{'id':ordonnance.id}) }}\">Livrer</a>
    {% endif %}
</div>
{% endblock %}", "hostooPharmacieBundle:Pharmacie:ordonnance.html.twig", "/var/www/html/hostoo/src/hostoo/PharmacieBundle/Resources/views/Pharmacie/ordonnance.html.twig");
    }
}
