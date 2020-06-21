<?php

/* ordonnance/indexc.html.twig */
class __TwigTemplate_4a9da837aa8739758a1dac3d3eac2ffc38d04380cbeec68bac0e870dccaa2c4e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnance/indexc.html.twig"));

        // line 1
        echo "
    <h4>Liste des ordonnances</h4>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Date</th>
                <th>Valider</th>
                <th>Livre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordonnances"] ?? $this->getContext($context, "ordonnances")));
        foreach ($context['_seq'] as $context["_key"] => $context["ordonnance"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            if ($this->getAttribute($context["ordonnance"], "dateordo", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ordonnance"], "dateordo", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 17
            if ($this->getAttribute($context["ordonnance"], "valider", [])) {
                echo "Validée OUI";
            } else {
                echo "Validée Non";
            }
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute($context["ordonnance"], "livre", [])) {
                echo "Livrée OUI";
            } else {
                echo "Livrée Non";
            }
            echo "</td>
                <td>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnance_med_show", ["id" => $this->getAttribute($context["ordonnance"], "id", [])]), "html", null, true);
            echo "\">afficher</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnance_med_edit", ["id" => $this->getAttribute($context["ordonnance"], "id", [])]), "html", null, true);
            echo "\">modifier</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnance_med_print", ["id" => $this->getAttribute($context["ordonnance"], "id", [])]), "html", null, true);
            echo "\">Imprimer</a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr><th colspan=\"5\">Prescriptions</th></tr>
            <tr><th>Produit</th><th>Posologie</th><th>Quantité</th><th>Conduite a tenir</th><th></th></tr>
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ordonnance"], "posologie", []));
            foreach ($context['_seq'] as $context["_key"] => $context["pos"]) {
                // line 36
                echo "              <tr>
                  <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["pos"], "produit", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["pos"], "posologie", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["pos"], "qte", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["pos"], "conduite", []), "html", null, true);
                echo "</td>
                  <td><a href=\"#\"><i class=\"text-warning fa fa-edit\"></i> </a><a href=\"#\"><i class=\"text-danger fa fa-times\"></i> </a></td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordonnance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnance/indexc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  120 => 44,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  95 => 36,  91 => 35,  81 => 28,  75 => 25,  69 => 22,  58 => 18,  50 => 17,  44 => 16,  41 => 15,  37 => 14,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    <h4>Liste des ordonnances</h4>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Date</th>
                <th>Valider</th>
                <th>Livre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ordonnance in ordonnances %}
            <tr>
                <td>{% if ordonnance.dateordo %}{{ ordonnance.dateordo|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if ordonnance.valider %}Validée OUI{% else %}Validée Non{% endif %}</td>
                <td>{% if ordonnance.livre %}Livrée OUI{% else %}Livrée Non{% endif %}</td>
                <td>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"{{ path('ordonnance_med_show', { 'id': ordonnance.id }) }}\">afficher</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ordonnance_med_edit', { 'id': ordonnance.id }) }}\">modifier</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ordonnance_med_print', { 'id': ordonnance.id }) }}\">Imprimer</a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr><th colspan=\"5\">Prescriptions</th></tr>
            <tr><th>Produit</th><th>Posologie</th><th>Quantité</th><th>Conduite a tenir</th><th></th></tr>
            {% for pos in ordonnance.posologie %}
              <tr>
                  <td>{{ pos.produit }}</td>
                  <td>{{ pos.posologie }}</td>
                  <td>{{ pos.qte }}</td>
                  <td>{{ pos.conduite }}</td>
                  <td><a href=\"#\"><i class=\"text-warning fa fa-edit\"></i> </a><a href=\"#\"><i class=\"text-danger fa fa-times\"></i> </a></td>
              </tr>
            {% endfor %}
        {% endfor %}
        </tbody>
    </table>
", "ordonnance/indexc.html.twig", "/var/www/html/hostoo/app/Resources/views/ordonnance/indexc.html.twig");
    }
}
