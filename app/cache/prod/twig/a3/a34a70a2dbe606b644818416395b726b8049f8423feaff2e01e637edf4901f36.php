<?php

/* hostooSanteBundle:Actes:creer_acte.html.twig */
class __TwigTemplate_f1d46638d2cb4233490d2689718816a0ec5cc5e4ddb17465868ef3c90c736d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Actes:creer_acte.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Actes:creer_acte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 4
            echo "
        ";
            // line 5
            $this->loadTemplate("hostooUserBundle:menus:menuadmin.html.twig", "hostooSanteBundle:Actes:creer_acte.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER")) {
            // line 8
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "hostooSanteBundle:Actes:creer_acte.html.twig", 8)->display($context);
            // line 9
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nouvel acte médical";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<h1>Nouvel Acte médical</h1>
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
            <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creer_acte");
        echo "\" method=\"post\">
                <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "designationacte", []), 'label', ["label" => "Désignation"]);
        echo "
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "designationacte", []), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "designationacte", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", []), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", []), 'errors');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tarif", []), "prix", []), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tarif", []), "prix", []), 'errors');
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tarif", []), "prix", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-success waves-effects"]]);
        echo "
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Actes:creer_acte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 37,  139 => 36,  133 => 33,  129 => 32,  125 => 31,  118 => 27,  114 => 26,  110 => 25,  103 => 21,  99 => 20,  95 => 19,  90 => 17,  85 => 14,  79 => 13,  67 => 11,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"hostooSanteBundle::blank.html.twig\" %}
{% block menu %}
    {% if is_granted('ROLE_ADMIN') %}

        {% include 'hostooUserBundle:menus:menuadmin.html.twig' %}
    {% endif %}
    {% if is_granted('ROLE_CAISSIER') %}
        {% include 'hostooSanteBundle:menus:menucaisse.html.twig' %}
    {% endif %}
{% endblock %}
{% block title %}Nouvel acte médical{% endblock %}

{% block body %}
<h1>Nouvel Acte médical</h1>
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
            <form action=\"{{ path('creer_acte') }}\" method=\"post\">
                <div class=\"form-group\">
                {{ form_label(form.designationacte,\"Désignation\") }}
                {{ form_errors(form.designationacte) }}
                {{ form_widget(form.designationacte,{'attr':{'class':'form-control'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.categories) }}
                    {{ form_errors(form.categories) }}
                    {{ form_widget(form.categories,{'attr':{'class':'form-control'}}) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.tarif.prix) }}
                    {{ form_errors(form.tarif.prix) }}
                    {{ form_widget(form.tarif.prix,{'attr':{'class':'form-control'}}) }}
                </div>

                {{ form_rest(form) }}
                {{ form_widget(form.save,{'attr':{'class':'btn btn-success waves-effects'}}) }}
            </form>
        </div>
    </div>
{% endblock %}
", "hostooSanteBundle:Actes:creer_acte.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Actes/creer_acte.html.twig");
    }
}
