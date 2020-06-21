<?php

/* consultation/new.html.twig */
class __TwigTemplate_8f6bec8355f378e8a82d47e5e6e4ec86f7f8e0b3d12eb2424c339267656facda extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "consultation/new.html.twig"));

        // line 1
        echo "
    <h3>Consultation du Patient</h3>

    <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_consultation_new", ["id" => $this->getAttribute($this->getAttribute(($context["consultation"] ?? $this->getContext($context, "consultation")), "episode", []), "id", [])]), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Enregistrer la consultation\" class=\"btn btn-success\"/>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "consultation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  22 => 1,);
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
    <h3>Consultation du Patient</h3>

    <form action=\"{{ path('medecin_consultation_new', {'id': consultation.episode.id }) }}\" method=\"post\">
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Enregistrer la consultation\" class=\"btn btn-success\"/>
    </form>

", "consultation/new.html.twig", "/var/www/html/hostoo/app/Resources/views/consultation/new.html.twig");
    }
}
