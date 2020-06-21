<?php

/* ordonnanceimg/show.html.twig */
class __TwigTemplate_7761f2247e1eb1c4c82fe6f48f554c18198b9873fb3a6b2857337ff10ead4a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "ordonnanceimg/show.html.twig", 1);
        $this->blocks = [
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnanceimg/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Bon d'examens";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $this->loadTemplate("hostooSanteBundle:menus:menuimg.html.twig", "ordonnanceimg/show.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"card-box\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Medecin demandeur</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ordonnanceImg"] ?? $this->getContext($context, "ordonnanceImg")), "medecin", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 15
        if ($this->getAttribute(($context["ordonnanceImg"] ?? $this->getContext($context, "ordonnanceImg")), "dateordo", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ordonnanceImg"] ?? $this->getContext($context, "ordonnanceImg")), "dateordo", []), "d-m-Y H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Valider</th>
                <td>";
        // line 19
        if ($this->getAttribute(($context["ordonnanceImg"] ?? $this->getContext($context, "ordonnanceImg")), "valider", [])) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Livre</th>
                <td>";
        // line 23
        if ($this->getAttribute(($context["ordonnanceImg"] ?? $this->getContext($context, "ordonnanceImg")), "livre", [])) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
        <table class=\"table table-striped\">
            <tr>
                <th>Photo</th>
                <th>Actes</th>
                <th>Resultats</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ordonnanceImg"] ?? $this->getContext($context, "ordonnanceImg")), "resultats", []));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 34
            echo "            <tr>
                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/imageries/" . $this->getAttribute($context["res"], "fichier", []))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/imageries/" . $this->getAttribute($context["res"], "fichier", []))), "html", null, true);
            echo "\"class=\"thumb-md\"> </a></td>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultatsimg_show", ["id" => $this->getAttribute($context["res"], "id", [])]), "html", null, true);
            echo "\" target=\"_top\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["res"], "acte", []), "actes", []), "designationacte", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo $this->getAttribute($context["res"], "resultat", []);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            <tr>

            </tr>
        </table>
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examens_img");
        echo "\" class=\"btn btn-info\">Liste</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnanceimg/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 47,  157 => 40,  148 => 37,  142 => 36,  136 => 35,  133 => 34,  129 => 33,  112 => 23,  101 => 19,  92 => 15,  85 => 11,  78 => 6,  72 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block titrepage %}Bon d'examens{% endblock %}
{% block options %}{% endblock %}
{% block menu %}{% include 'hostooSanteBundle:menus:menuimg.html.twig' %}{% endblock %}
{% block body %}
    <div class=\"card-box\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Medecin demandeur</th>
                <td>{{ ordonnanceImg.medecin }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if ordonnanceImg.dateordo %}{{ ordonnanceImg.dateordo|date('d-m-Y H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Valider</th>
                <td>{% if ordonnanceImg.valider %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Livre</th>
                <td>{% if ordonnanceImg.livre %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>
        <table class=\"table table-striped\">
            <tr>
                <th>Photo</th>
                <th>Actes</th>
                <th>Resultats</th>
            </tr>
            {% for res in ordonnanceImg.resultats%}
            <tr>
                <td><a href=\"{{ asset('uploads/imageries/'~res.fichier) }}\"> <img src=\"{{ asset('uploads/imageries/'~res.fichier) }}\"class=\"thumb-md\"> </a></td>
                <td><a href=\"{{ path('resultatsimg_show',{'id': res.id }) }}\" target=\"_top\">{{ res.acte.actes.designationacte }}</a></td>
                <td>{{ res.resultat|raw }}</td>
            </tr>
            {% endfor %}
            <tr>

            </tr>
        </table>
    </div>
    <ul>
        <li>
            <a href=\"{{ path('examens_img') }}\" class=\"btn btn-info\">Liste</a>
        </li>
    </ul>
{% endblock %}
", "ordonnanceimg/show.html.twig", "/var/www/html/hostoo/app/Resources/views/ordonnanceimg/show.html.twig");
    }
}
