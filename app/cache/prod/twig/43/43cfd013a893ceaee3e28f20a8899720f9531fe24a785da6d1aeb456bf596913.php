<?php

/* symptomes/new.html.twig */
class __TwigTemplate_a7cb98412ded55aa79ce697dc8276112618e371b80b0c68c6db8b715067657fd extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symptomes/new.html.twig"));

        // line 1
        echo "
    <h4>Nouveau symptome</h4>

    <form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("symptomes_new");
        echo "\" method=\"post\" id=\"mysymptomes\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Créer\" />
    </form>

    <ul>
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("symptomes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "symptomes/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  31 => 5,  27 => 4,  22 => 1,);
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
    <h4>Nouveau symptome</h4>

    <form action=\"{{ path('symptomes_new') }}\" method=\"post\" id=\"mysymptomes\">
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Créer\" />
    </form>

    <ul>
        <li>
            <a href=\"{{ path('symptomes_index') }}\">Back to the list</a>
        </li>
    </ul>

", "symptomes/new.html.twig", "/var/www/html/hostoo/app/Resources/views/symptomes/new.html.twig");
    }
}
