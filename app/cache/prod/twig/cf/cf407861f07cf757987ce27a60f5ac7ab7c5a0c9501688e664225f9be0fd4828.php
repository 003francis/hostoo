<?php

/* hostooSanteBundle:Actes:modifier_acte.html.twig */
class __TwigTemplate_949d790ffedca44bb8e30cd35daba8f4bb542566b188db53759909a07ea92cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Actes:modifier_acte.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Actes:modifier_acte.html.twig"));

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
            echo "    ";
            $this->loadTemplate("hostooUserBundle:menus:menuadmin.html.twig", "hostooSanteBundle:Actes:modifier_acte.html.twig", 4)->display($context);
            // line 5
            echo "
    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER")) {
            // line 7
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "hostooSanteBundle:Actes:modifier_acte.html.twig", 7)->display($context);
            // line 8
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier Acte";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<h1>Modifier Actes</h1>
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
            <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_acte", ["id" => ($context["id"] ?? $this->getContext($context, "id"))]), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "designationacte", []), 'label', ["label" => "Désignation"]);
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "designationacte", []), 'errors');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "designationacte", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", []), 'label');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", []), 'errors');
        echo "
                    ";
        // line 28
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
        return "hostooSanteBundle:Actes:modifier_acte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  135 => 36,  129 => 33,  125 => 32,  121 => 31,  115 => 28,  111 => 27,  107 => 26,  100 => 22,  96 => 21,  92 => 20,  87 => 18,  82 => 15,  76 => 14,  64 => 12,  55 => 8,  52 => 7,  48 => 5,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
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

    {% elseif is_granted('ROLE_CAISSIER') %}
        {% include 'hostooSanteBundle:menus:menucaisse.html.twig' %}

    {% endif %}
{% endblock %}

{% block title %}Modifier Acte{% endblock %}

{% block body %}
<h1>Modifier Actes</h1>
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
            <form action=\"{{ path('modifier_acte',{'id': id }) }}\" method=\"post\">
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
", "hostooSanteBundle:Actes:modifier_acte.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Actes/modifier_acte.html.twig");
    }
}
