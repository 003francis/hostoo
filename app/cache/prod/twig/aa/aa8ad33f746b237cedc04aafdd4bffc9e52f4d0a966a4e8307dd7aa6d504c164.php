<?php

/* hostooSanteBundle:Caisse:bscaisse.html.twig */
class __TwigTemplate_6e0500dc50de1e4a159c756c75b802a7e09e67529a042a989839e25bd602e0bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Caisse:bscaisse.html.twig"));

        // line 1
        if ((($context["bons"] ?? $this->getContext($context, "bons")) == null)) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-block     alert-dismissible text-center\">Aucun bon de sortie établi !</div>
";
        } else {
            // line 4
            echo "<table class=\"table table-striped\">
    <thead>
    <tr>
        <th>Motif</th>
        <th>Montant</th>
        <th>Devise</th>
        <th>Beneficiaire</th>
        <th>Visa</th>
    </tr>
    </thead>
    <tbody>
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bons"] ?? $this->getContext($context, "bons")));
            foreach ($context['_seq'] as $context["_key"] => $context["bs"]) {
                // line 16
                echo "    <tr>
        <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["bs"], "motif", []), "html", null, true);
                echo "</td>
        <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["bs"], "montant", []), "html", null, true);
                echo "</td>
        <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["bs"], "devise", []), "html", null, true);
                echo "</td>
        <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["bs"], "beneficiaire", []), "html", null, true);
                echo "</td>
        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["bs"], "visa", []), "html", null, true);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </tbody>
</table>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Caisse:bscaisse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  64 => 21,  60 => 20,  56 => 19,  52 => 18,  48 => 17,  45 => 16,  41 => 15,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if bons == null %}
    <div class=\"alert alert-danger alert-block     alert-dismissible text-center\">Aucun bon de sortie établi !</div>
{% else %}
<table class=\"table table-striped\">
    <thead>
    <tr>
        <th>Motif</th>
        <th>Montant</th>
        <th>Devise</th>
        <th>Beneficiaire</th>
        <th>Visa</th>
    </tr>
    </thead>
    <tbody>
    {% for bs in bons %}
    <tr>
        <td>{{ bs.motif }}</td>
        <td>{{ bs.montant }}</td>
        <td>{{ bs.devise }}</td>
        <td>{{ bs.beneficiaire }}</td>
        <td>{{ bs.visa }}</td>
    </tr>
    {% endfor %}
    </tbody>
</table>
{% endif %}", "hostooSanteBundle:Caisse:bscaisse.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Caisse/bscaisse.html.twig");
    }
}
