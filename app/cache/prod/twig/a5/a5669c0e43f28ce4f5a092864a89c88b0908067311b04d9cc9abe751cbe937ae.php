<?php

/* examensphysiques/new.html.twig */
class __TwigTemplate_d1e624cfd9d65df7ad282ed0f600f9f4b40851ad285891a896b5e2a5206346a9 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examensphysiques/new.html.twig"));

        // line 1
        echo "
    <h3>Examens Physiques</h3>

    <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examensphysiques_new", ["id" => ($context["id"] ?? $this->getContext($context, "id"))]), "html", null, true);
        echo "\" method=\"post\" id=\"exphysform\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeexamen", []), 'label', ["label" => "Type d'examen"]);
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeexamen", []), 'errors');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeexamen", []), 'widget');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observation", []), 'label');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observation", []), 'errors');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observation", []), 'widget');
        echo "


        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success \"/>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "examensphysiques/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  44 => 9,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
    <h3>Examens Physiques</h3>

    <form action=\"{{ path('examensphysiques_new',{'id':id }) }}\" method=\"post\" id=\"exphysform\">
        {{ form_label(form.typeexamen,\"Type d'examen\") }}
        {{ form_errors(form.typeexamen) }}
        {{ form_widget(form.typeexamen) }}

        {{ form_label(form.observation) }}
        {{ form_errors(form.observation) }}
        {{ form_widget(form.observation) }}


        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success \"/>
    </form>
{#
    <ul>
        <li>
            <a href=\"{{ path('examensphysiques_index') }}\">Liste</a>
        </li>
    </ul>
#}
", "examensphysiques/new.html.twig", "/var/www/html/hostoo/app/Resources/views/examensphysiques/new.html.twig");
    }
}
