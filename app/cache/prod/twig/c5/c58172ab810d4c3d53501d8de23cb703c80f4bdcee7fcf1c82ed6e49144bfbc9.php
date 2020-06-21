<?php

/* hostooRDVBundle:rdvmed:new.html.twig */
class __TwigTemplate_c9e0156f996d01d74dc78244f309d0a7ab457cdcff0fc440b7523ca4ab631e5f extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooRDVBundle:rdvmed:new.html.twig"));

        // line 1
        echo "
    <h3>Nouveau RDV</h3>
    <h2 class=\"alert alert-warning\">
        Choisir une date
    </h2>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rdvmed_new", ["id" => ($context["pat"] ?? $this->getContext($context, "pat"))]), "html", null, true);
        echo "\" method=\"post\" id=\"rdvmedform\">

        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterdv", []), 'label', ["label" => "La Date du Rendez-vous"]);
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterdv", []), 'errors');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterdv", []), 'widget');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Fixer le RDV\" class=\"btn btn-success\" />
    </form>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooRDVBundle:rdvmed:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  43 => 11,  39 => 10,  35 => 9,  30 => 7,  22 => 1,);
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
    <h3>Nouveau RDV</h3>
    <h2 class=\"alert alert-warning\">
        Choisir une date
    </h2>

    <form action=\"{{ path('rdvmed_new',{'id':pat }) }}\" method=\"post\" id=\"rdvmedform\">

        {{ form_label(form.daterdv,'La Date du Rendez-vous') }}
        {{ form_errors(form.daterdv) }}
        {{ form_widget(form.daterdv) }}
        {{ form_rest(form) }}
        <input type=\"submit\" value=\"Fixer le RDV\" class=\"btn btn-success\" />
    </form>


", "hostooRDVBundle:rdvmed:new.html.twig", "/var/www/html/hostoo/src/hostoo/RDVBundle/Resources/views/rdvmed/new.html.twig");
    }
}
