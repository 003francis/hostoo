<?php

/* hostooGestionBundle:Prix:modifier_des_prix.html.twig */
class __TwigTemplate_a78873ae044cbe5338a879b8e24574b2faa9835e5edd5a46d4bdc4092d61226b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooGestionBundle:Prix:modifier_des_prix.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooGestionBundle:Prix:modifier_des_prix.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<h3>Tarif des actes pour la convention ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["convention"] ?? $this->getContext($context, "convention")), "nomconvention", []), "html", null, true);
        echo " </h3>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "<h3>Tarif des actes pour convention ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["convention"] ?? $this->getContext($context, "convention")), "nomconvention", []), "html", null, true);
        echo " </h3>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_des_prix", ["convention" => $this->getAttribute(($context["convention"] ?? $this->getContext($context, "convention")), "id", [])]), "html", null, true);
        echo "\" method=\"post\">
    <table class=\"table table-striped table-bordered\">
        <thead>
        <tr>
            <th>Actes Médicaux</th>
            <th>Prix</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["convention"] ?? $this->getContext($context, "convention")), "tarif", []));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cat"], "actes", []), "designationacte", []), "html", null, true);
            echo "</td>
                <td>

                    <div class=\"input-group m-t-10\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-dollar\"></i></span>
                        <input id=\"example-input3-group1\" name=\"actes[";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", []), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "prix", []), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"0\" type=\"text\">
                        <span class=\"input-group-addon\">.00</span>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        <tr>
            <td colspan=\"2\">
                <input type=\"submit\" value=\"Valider\" class=\"btn btn-lg btn-success\">
            </td>
        </tr>
        </tbody>
    </table>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooGestionBundle:Prix:modifier_des_prix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  98 => 22,  90 => 17,  87 => 16,  83 => 15,  70 => 6,  64 => 5,  50 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"hostooSanteBundle::blank.html.twig\" %}

{% block title %}<h3>Tarif des actes pour la convention {{ convention.nomconvention }} </h3>{% endblock %}
{% block titrepage %}<h3>Tarif des actes pour convention {{ convention.nomconvention }} </h3>{% endblock %}
{% block body %}
<form action=\"{{ path('modifier_des_prix',{'convention':convention.id}) }}\" method=\"post\">
    <table class=\"table table-striped table-bordered\">
        <thead>
        <tr>
            <th>Actes Médicaux</th>
            <th>Prix</th>
        </tr>
        </thead>
        <tbody>
        {% for cat in convention.tarif %}
            <tr>
                <td>{{ cat.actes.designationacte }}</td>
                <td>

                    <div class=\"input-group m-t-10\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-dollar\"></i></span>
                        <input id=\"example-input3-group1\" name=\"actes[{{ cat.id }}]\" value=\"{{ cat.prix }}\" class=\"form-control\" placeholder=\"0\" type=\"text\">
                        <span class=\"input-group-addon\">.00</span>
                    </div>
                </td>
            </tr>
        {% endfor %}
        <tr>
            <td colspan=\"2\">
                <input type=\"submit\" value=\"Valider\" class=\"btn btn-lg btn-success\">
            </td>
        </tr>
        </tbody>
    </table>
</form>
{% endblock %}", "hostooGestionBundle:Prix:modifier_des_prix.html.twig", "/var/www/html/hostoo/src/hostoo/GestionBundle/Resources/views/Prix/modifier_des_prix.html.twig");
    }
}
