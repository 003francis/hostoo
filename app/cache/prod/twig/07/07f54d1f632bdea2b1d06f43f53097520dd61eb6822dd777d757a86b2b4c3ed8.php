<?php

/* hostooSanteBundle:Categories:liste_des_categories.html.twig */
class __TwigTemplate_686742c28885da2b72ac3776dfc057a390b58826201ef39605974c840a8ae392 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Categories:liste_des_categories.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((($context["liste"] ?? $this->getContext($context, "liste")) == null)) {
            // line 3
            echo "<div class=\"alert alert-dismissible alert-danger text-center\"><strong class=\"\">Aucune Catégorie</strong></div>
    ";
        } else {
            // line 5
            echo "        <h3>Les categories disponibles</h3>
<ul class=\"list-unstyled list-group\">

    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 9
                echo "        <li class=\"list-group-item\">
            ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "nom", []), "html", null, true);
                echo "
            <div class=\"pull-right\">
            <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_modifie_une_categorie", ["id" => $this->getAttribute($context["cat"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-edit\"></i> </a>
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_supprime_une_categorie", ["id" => $this->getAttribute($context["cat"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i> </a>
            </div>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</ul>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Categories:liste_des_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  52 => 13,  48 => 12,  43 => 10,  40 => 9,  36 => 8,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
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
{% if liste == null %}
<div class=\"alert alert-dismissible alert-danger text-center\"><strong class=\"\">Aucune Catégorie</strong></div>
    {% else %}
        <h3>Les categories disponibles</h3>
<ul class=\"list-unstyled list-group\">

    {% for cat in liste %}
        <li class=\"list-group-item\">
            {{ cat.nom }}
            <div class=\"pull-right\">
            <a href=\"{{ path('_modifie_une_categorie',{'id':cat.id}) }}\" class=\"btn btn-default\"><i class=\"fa fa-edit\"></i> </a>
            <a href=\"{{ path('_supprime_une_categorie',{'id':cat.id}) }}\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i> </a>
            </div>
        </li>
    {% endfor %}
</ul>
{% endif %}", "hostooSanteBundle:Categories:liste_des_categories.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Categories/liste_des_categories.html.twig");
    }
}
