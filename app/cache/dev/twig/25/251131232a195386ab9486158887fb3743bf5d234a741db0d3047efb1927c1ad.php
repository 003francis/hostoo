<?php

/* hostooRDVBundle:rdvmed:showtout.html.twig */
class __TwigTemplate_2483e86e53c70380df725f8d5515046e48b896afe75b1992c52e11e72608e7f6 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooRDVBundle:rdvmed:showtout.html.twig"));

        // line 1
        echo "
    <table class=\"table table-striped tout\" id=\"rdvmed\">
        <caption><h3>Historique des RDVs</h3></caption>
        <thead>
            <tr>
                <th>Date</th>
                <th>Patient</th>
                <th>état</th>
                <th>Médécin</th>
            </tr>
        </thead>
        <tbody id=\"mesrdv\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rDVMeds"] ?? $this->getContext($context, "rDVMeds")));
        foreach ($context['_seq'] as $context["_key"] => $context["rDVMed"]) {
            // line 14
            echo "            <tr>

                <td>";
            // line 16
            if ($this->getAttribute($context["rDVMed"], "daterdv", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rDVMed"], "daterdv", []), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>

                    ";
            // line 19
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["rDVMed"], "patients", []), "nom", [])), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["rDVMed"], "patients", []), "postnom", [])), "html", null, true);
            echo "


                </td>
                <td>
                    ";
            // line 24
            if (($this->getAttribute($context["rDVMed"], "etat", []) == "RECU")) {
                // line 25
                echo "                        <span class=\"label label-success\"> ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["rDVMed"], "etat", [])), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 27
                echo "                        <span class=\"label label-danger\"> ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["rDVMed"], "etat", [])), "html", null, true);
                echo "</span>
                    ";
            }
            // line 29
            echo "                </td>
                <td>
                    ";
            // line 31
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (((($this->getAttribute($this->getAttribute($context["rDVMed"], "medecin", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["rDVMed"], "medecin", []), "postnom", [])) . " ") . $this->getAttribute($this->getAttribute($context["rDVMed"], "medecin", []), "prenom", []))), "html", null, true);
            echo "
                </td>
                ";
            // line 34
            echo "                    ";
            // line 35
            echo "                        ";
            // line 36
            echo "                            ";
            // line 37
            echo "                        ";
            // line 38
            echo "                        ";
            // line 39
            echo "                            ";
            // line 40
            echo "                        ";
            // line 41
            echo "                    ";
            // line 42
            echo "                ";
            // line 43
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rDVMed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooRDVBundle:rdvmed:showtout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  103 => 43,  101 => 42,  99 => 41,  97 => 40,  95 => 39,  93 => 38,  91 => 37,  89 => 36,  87 => 35,  85 => 34,  80 => 31,  76 => 29,  70 => 27,  64 => 25,  62 => 24,  52 => 19,  44 => 16,  40 => 14,  36 => 13,  22 => 1,);
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
    <table class=\"table table-striped tout\" id=\"rdvmed\">
        <caption><h3>Historique des RDVs</h3></caption>
        <thead>
            <tr>
                <th>Date</th>
                <th>Patient</th>
                <th>état</th>
                <th>Médécin</th>
            </tr>
        </thead>
        <tbody id=\"mesrdv\">
        {% for rDVMed in rDVMeds %}
            <tr>

                <td>{% if rDVMed.daterdv %}{{ rDVMed.daterdv|date('Y-m-d') }}{% endif %}</td>
                <td>

                    {{ rDVMed.patients.nom|upper }} {{ rDVMed.patients.postnom|upper }}


                </td>
                <td>
                    {% if rDVMed.etat == \"RECU\" %}
                        <span class=\"label label-success\"> {{ rDVMed.etat|upper }}</span>
                    {% else %}
                        <span class=\"label label-danger\"> {{ rDVMed.etat|upper }}</span>
                    {% endif %}
                </td>
                <td>
                    {{ (rDVMed.medecin.nom~\" \"~rDVMed.medecin.postnom~\" \"~rDVMed.medecin.prenom)|upper }}
                </td>
                {#<td>#}
                    {#<ul class=\"list-inline list-unstyled\">#}
                        {#<li>#}
                            {#<a href=\"{{ path('rdvmed_show', { 'id': rDVMed.id }) }}\">afficher</a>#}
                        {#</li>#}
                        {#<li>#}
                            {#<a href=\"{{ path('rdvmed_edit', { 'id': rDVMed.id }) }}\">modifier</a>#}
                        {#</li>#}
                    {#</ul>#}
                {#</td>#}
            </tr>
        {% endfor %}
        </tbody>
    </table>
", "hostooRDVBundle:rdvmed:showtout.html.twig", "C:\\wamp64\\www\\hostoo\\src\\hostoo\\RDVBundle/Resources/views/rdvmed/showtout.html.twig");
    }
}
