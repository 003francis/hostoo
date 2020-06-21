<?php

/* banque/new.html.twig */
class __TwigTemplate_4377728d476ac7e12a765ba3b10feaa638f41ffd36280b422543a32cea78f5d2 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banque/new.html.twig"));

        // line 1
        echo "
    <h1>Opération de la Banque</h1>

    <form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banque_new");
        echo "\" method=\"post\">


    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mouvement", []), 'label', ["label" => "Opération"]);
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mouvement", []), 'errors');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mouvement", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombanque", []), 'label', ["label" => "Nom de la Banque"]);
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombanque", []), 'errors');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombanque", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
<div class=\"row\">
    <div class=\"col-xs-6\">
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'label');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'errors');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
    <div class=\"col-xs-6\">
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise", []), 'label');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise", []), 'errors');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
    </div>
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", []), 'label', ["label" => "Référence"]);
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", []), 'errors');
        echo "
    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex. numéro du bordereau"]]);
        echo "

    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", []), 'label', ["label" => "Observation"]);
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", []), 'errors');
        echo "
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Bref commentaire sur l'opération"]]);
        echo "
<div class=\"hidden\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
</div>
        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" />
    


    </form>
    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banque_index");
        echo "\">Liste des opérations antérieures</a>
        </li>
    </ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "banque/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  114 => 34,  109 => 32,  105 => 31,  101 => 30,  96 => 28,  92 => 27,  88 => 26,  82 => 23,  78 => 22,  74 => 21,  68 => 18,  64 => 17,  60 => 16,  54 => 13,  50 => 12,  46 => 11,  41 => 9,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
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
    <h1>Opération de la Banque</h1>

    <form action=\"{{ path('banque_new') }}\" method=\"post\">


    {{ form_label(form.mouvement,\"Opération\") }}
    {{ form_errors(form.mouvement) }}
    {{ form_widget(form.mouvement,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.nombanque,\"Nom de la Banque\") }}
    {{ form_errors(form.nombanque) }}
    {{ form_widget(form.nombanque,{'attr':{'class':'form-control'}}) }}
<div class=\"row\">
    <div class=\"col-xs-6\">
    {{ form_label(form.montant) }}
    {{ form_errors(form.montant) }}
    {{ form_widget(form.montant,{'attr':{'class':'form-control'}}) }}
</div>
    <div class=\"col-xs-6\">
    {{ form_label(form.devise) }}
    {{ form_errors(form.devise) }}
    {{ form_widget(form.devise,{'attr':{'class':'form-control'}}) }}
</div>
    </div>
    {{ form_label(form.reference,\"Référence\") }}
    {{ form_errors(form.reference) }}
    {{ form_widget(form.reference,{'attr':{'class':'form-control','placeholder':'Ex. numéro du bordereau'}}) }}

    {{ form_label(form.libelle,\"Observation\") }}
    {{ form_errors(form.libelle) }}
    {{ form_widget(form.libelle,{'attr':{'class':'form-control','placeholder':'Bref commentaire sur l\\'opération'}}) }}
<div class=\"hidden\">
    {{ form_rest(form) }}
</div>
        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" />
    


    </form>
    <ul>
        <li>
            <a href=\"{{ path('banque_index') }}\">Liste des opérations antérieures</a>
        </li>
    </ul>

", "banque/new.html.twig", "/var/www/html/hostoo/app/Resources/views/banque/new.html.twig");
    }
}
