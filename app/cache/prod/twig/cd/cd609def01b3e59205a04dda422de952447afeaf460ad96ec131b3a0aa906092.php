<?php

/* becaisse/new.html.twig */
class __TwigTemplate_1357d408a42644f951bde016e07004445919aa79396b43b49d26655096652676 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "becaisse/new.html.twig"));

        // line 1
        echo "
    <h1>Bon d'entrée caisse</h1>

   <form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("becaisse_new");
        echo "\" method=\"post\">

    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", []), 'label', ["label" => "Libellé"]);
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", []), 'errors');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "compte", []), 'label');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "compte", []), 'errors');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "compte", []), 'widget', ["attr" => ["class" => "form-control text-success"]]);
        echo "
<div class=\"row\">
    <div class=\"col-xs-6\">
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    </div>
    <div class=\"col-xs-6\">
        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devise", []), 'label', ["label" => "dévise"]);
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
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observation", []), 'label');
        echo "
    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observation", []), 'errors');
        echo "
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
       <div class=\"hidden\">
           ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
       </div>


        <input type=\"submit\" value=\"Déposer\" class=\"btn btn-success\"/>
   </form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "becaisse/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  98 => 30,  94 => 29,  90 => 28,  82 => 23,  78 => 22,  74 => 21,  67 => 17,  63 => 16,  59 => 15,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  32 => 6,  27 => 4,  22 => 1,);
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
    <h1>Bon d'entrée caisse</h1>

   <form action=\"{{ path('becaisse_new') }}\" method=\"post\">

    {{ form_label(form.libelle,'Libellé') }}
    {{ form_errors(form.libelle) }}
    {{ form_widget(form.libelle,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.compte) }}
    {{ form_errors(form.compte) }}
    {{ form_widget(form.compte,{'attr':{'class':'form-control text-success'}}) }}
<div class=\"row\">
    <div class=\"col-xs-6\">
        {{ form_label(form.montant) }}
        {{ form_errors(form.montant) }}
        {{ form_widget(form.montant,{'attr':{'class':'form-control'}}) }}

    </div>
    <div class=\"col-xs-6\">
        {{ form_label(form.devise,'dévise') }}
        {{ form_errors(form.devise) }}
        {{ form_widget(form.devise,{'attr':{'class':'form-control'}}) }}

    </div>

    </div>
    {{ form_label(form.observation) }}
    {{ form_errors(form.observation) }}
    {{ form_widget(form.observation,{'attr':{'class':'form-control'}}) }}
       <div class=\"hidden\">
           {{ form_rest(form) }}
       </div>


        <input type=\"submit\" value=\"Déposer\" class=\"btn btn-success\"/>
   </form>", "becaisse/new.html.twig", "/var/www/html/hostoo/app/Resources/views/becaisse/new.html.twig");
    }
}
