<?php

/* consultation/show.html.twig */
class __TwigTemplate_111ee132b21ea15cfd2c904a3d336ed54c93da0f0df1e944a1f6054ab50c10d9 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "consultation/show.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (($context["consultation"] ?? $this->getContext($context, "consultation"))) {
            // line 3
            echo "    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Date</th>
                <td>";
            // line 7
            if ((($context["consultation"] ?? $this->getContext($context, "consultation")) && $this->getAttribute(($context["consultation"] ?? $this->getContext($context, "consultation")), "dateconsultation", []))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["consultation"] ?? $this->getContext($context, "consultation")), "dateconsultation", []), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
            </tr>
            <tr>
                <th>Consultation</th>
                <td>";
            // line 11
            echo $this->getAttribute(($context["consultation"] ?? $this->getContext($context, "consultation")), "consultation", []);
            echo "</td>
            </tr>
        </tbody>
    </table>
";
        }
        // line 16
        echo "    <ul class=\"list-unstyled\">
        <li>
            <a href=\"#settings-2\" data-toggle=\"tab\" aria-expanded=\"false\" class=\"btn btn-warning\">Modifier</a>
        </li>

    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "consultation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  42 => 11,  33 => 7,  27 => 3,  25 => 2,  22 => 1,);
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
{% if consultation %}
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Date</th>
                <td>{% if  consultation and consultation.dateconsultation %}{{ consultation.dateconsultation|date('d-m-Y H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Consultation</th>
                <td>{{ consultation.consultation|raw }}</td>
            </tr>
        </tbody>
    </table>
{% endif %}
    <ul class=\"list-unstyled\">
        <li>
            <a href=\"#settings-2\" data-toggle=\"tab\" aria-expanded=\"false\" class=\"btn btn-warning\">Modifier</a>
        </li>

    </ul>
", "consultation/show.html.twig", "/var/www/html/hostoo/app/Resources/views/consultation/show.html.twig");
    }
}
