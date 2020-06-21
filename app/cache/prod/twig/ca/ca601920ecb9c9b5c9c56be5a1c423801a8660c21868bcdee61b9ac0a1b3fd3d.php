<?php

/* hostooSanteBundle:Caisse:taux.html.twig */
class __TwigTemplate_df50b736a16dd18cfe4be201ea85e6a0667af99683fa23e31e539b19b721da72 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Caisse:taux.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_caisse_taux");
        echo "\" method=\"post\" class=\"\">
    <div class=\"form-group\">

    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'errors');
        echo "
    <div class=\"col-sm-12\"> ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'widget', ["attr" => ["placeholder" => "Taux du jour"]]);
        echo "</div>

    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datetaux", []), 'errors');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datetaux", []), 'widget');
        echo "
<br>
        <div class=\"col-sm-12\"> ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-success btn-block"]]);
        echo "</div>

    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </div>
</form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Caisse:taux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  47 => 10,  42 => 8,  38 => 7,  33 => 5,  29 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('hostoo_caisse_taux') }}\" method=\"post\" class=\"\">
    <div class=\"form-group\">

    {{ form_errors(form.montant) }}
    <div class=\"col-sm-12\"> {{ form_widget(form.montant,{'attr':{'placeholder':'Taux du jour'}}) }}</div>

    {{ form_errors(form.datetaux) }}
    {{ form_widget(form.datetaux) }}
<br>
        <div class=\"col-sm-12\"> {{ form_widget(form.save,{'attr':{'class':'btn btn-success btn-block'}}) }}</div>

    {{ form_rest(form) }}
    </div>
</form>", "hostooSanteBundle:Caisse:taux.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Caisse/taux.html.twig");
    }
}
