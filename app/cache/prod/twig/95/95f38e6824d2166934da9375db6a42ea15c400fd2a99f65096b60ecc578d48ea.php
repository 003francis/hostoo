<?php

/* hostooRDVBundle:rdvmed:list.html.twig */
class __TwigTemplate_60d50759feb9e5fe1b5d4bc849dc5ae2c1e2ff004018771ab1165fbfc0c41340 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooRDVBundle:rdvmed:list.html.twig"));

        // line 1
        echo "
    <h3>Rendez-vous fixés</h3>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Daterdv</th>
                <th>Patient</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"mesrdv\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rDVMeds"] ?? $this->getContext($context, "rDVMeds")));
        foreach ($context['_seq'] as $context["_key"] => $context["rDVMed"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rdvmed_show", ["id" => $this->getAttribute($context["rDVMed"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rDVMed"], "id", []), "html", null, true);
            echo "</a></td>

                <td>";
            // line 18
            if ($this->getAttribute($context["rDVMed"], "daterdv", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rDVMed"], "daterdv", []), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["rDVMed"], "patients", []));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 21
                echo "                    ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["patient"], "nom", [])), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rdvmed_show", ["id" => $this->getAttribute($context["rDVMed"], "id", [])]), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rdvmed_edit", ["id" => $this->getAttribute($context["rDVMed"], "id", [])]), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rDVMed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooRDVBundle:rdvmed:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  84 => 31,  78 => 28,  71 => 23,  62 => 21,  58 => 20,  51 => 18,  44 => 16,  41 => 15,  37 => 14,  22 => 1,);
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
    <h3>Rendez-vous fixés</h3>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Daterdv</th>
                <th>Patient</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"mesrdv\">
        {% for rDVMed in rDVMeds %}
            <tr>
                <td><a href=\"{{ path('rdvmed_show', { 'id': rDVMed.id }) }}\">{{ rDVMed.id }}</a></td>

                <td>{% if rDVMed.daterdv %}{{ rDVMed.daterdv|date('Y-m-d') }}{% endif %}</td>
                <td>
                    {% for patient in rDVMed.patients  %}
                    {{ patient.nom|upper }}
                    {% endfor %}

                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('rdvmed_show', { 'id': rDVMed.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('rdvmed_edit', { 'id': rDVMed.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


", "hostooRDVBundle:rdvmed:list.html.twig", "/var/www/html/hostoo/src/hostoo/RDVBundle/Resources/views/rdvmed/list.html.twig");
    }
}
