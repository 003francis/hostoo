<?php

/* hostooSanteBundle:Caisse:ajouterbs.html.twig */
class __TwigTemplate_08e7cdba21b3ade28d495de7bb691ab0ad95becaf0328f7e628495efc32ec01f extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Caisse:ajouterbs.html.twig"));

        // line 1
        echo "<h4>Bon de sortie</h4>

    <form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_bscaisse");
        echo "\" method=\"post\" class=\"vertical col-lg-12\">
        <div class=\"form-group\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motif", []), 'label');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motif", []), 'errors');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motif", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'label');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'errors');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise", []), 'label');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise", []), 'errors');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "beneficiaire", []), 'label');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "beneficiaire", []), 'errors');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "beneficiaire", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visa", []), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visa", []), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visa", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "form-control btn btn-sm btn-success"]]);
        echo "
        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    </form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Caisse:ajouterbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  96 => 25,  91 => 23,  87 => 22,  83 => 21,  78 => 19,  74 => 18,  70 => 17,  65 => 15,  61 => 14,  57 => 13,  52 => 11,  48 => 10,  44 => 9,  39 => 7,  35 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4>Bon de sortie</h4>

    <form action=\"{{ path('hostoo_sante_bscaisse') }}\" method=\"post\" class=\"vertical col-lg-12\">
        <div class=\"form-group\">
        {{ form_label(form.motif) }}
        {{ form_errors(form.motif) }}
        {{ form_widget(form.motif,{'attr':{'class':'form-control'}}) }}

        {{ form_label(form.montant) }}
        {{ form_errors(form.montant) }}
        {{ form_widget(form.montant,{'attr':{'class':'form-control'}}) }}

        {{ form_label(form.devise) }}
        {{ form_errors(form.devise) }}
        {{ form_widget(form.devise,{'attr':{'class':'form-control'}}) }}

        {{ form_label(form.beneficiaire) }}
        {{ form_errors(form.beneficiaire) }}
        {{ form_widget(form.beneficiaire,{'attr':{'class':'form-control'}}) }}

        {{ form_label(form.visa) }}
        {{ form_errors(form.visa) }}
        {{ form_widget(form.visa,{'attr':{'class':'form-control'}}) }}

            {{ form_widget(form.save,{'attr':{'class':'form-control btn btn-sm btn-success'}}) }}
        {{ form_rest(form) }}
        </div>
    </form>", "hostooSanteBundle:Caisse:ajouterbs.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Caisse/ajouterbs.html.twig");
    }
}
