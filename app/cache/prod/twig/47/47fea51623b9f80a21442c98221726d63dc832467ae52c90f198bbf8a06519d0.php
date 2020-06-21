<?php

/* hostooSanteBundle:Types:formules.html.twig */
class __TwigTemplate_ee6e5b91cf207b2f488653dc133f436a64b2f579ff5776a660f9cf34328c6d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Types:formules.html.twig", 1);
        $this->blocks = [
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
            'menu' => [$this, 'block_menu'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Types:formules.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_editionformule");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-check\"></i> Edition Multiple des Formules </a>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "    ";
        $this->loadTemplate("hostooUserBundle:menus:menuadmin.html.twig", "hostooSanteBundle:Types:formules.html.twig", 7)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context["nb_formules"] = twig_length_filter($this->env, ($context["tcs"] ?? $this->getContext($context, "tcs")));
        // line 11
        echo "    <div class=\"col-lg-6 col-md-12\">
    <div class=\"card-box\">
    <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_addformule");
        echo "\" method=\"post\">
        ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'label', ["label" => "Nom de la formule"]);
        echo "
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
<input type=\"submit\" value=\"enregistrer\" class=\"btn btn-success\">
        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </form>
</div>
    </div>
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
        <ul class=\"list-unstyled list-group\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tcs"] ?? $this->getContext($context, "tcs")));
        foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
            // line 26
            echo "                <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formule"], "nom", []), "html", null, true);
            echo "<span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["formule"], "patients", [])), "html", null, true);
            echo "</span> </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </ul>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Types:formules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 28,  122 => 26,  118 => 25,  108 => 18,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 11,  84 => 10,  78 => 9,  70 => 7,  64 => 6,  54 => 4,  48 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'hostooSanteBundle::blank.html.twig' %}
{% block titrepage %}{% endblock %}
{% block options %}
    <a href=\"{{ path('hostoo_sante_editionformule') }}\" class=\"btn btn-default\"><i class=\"fa fa-check\"></i> Edition Multiple des Formules </a>
    {% endblock %}
{% block menu %}
    {% include 'hostooUserBundle:menus:menuadmin.html.twig' %}
{% endblock %}
{% block body %}
    {% set nb_formules=tcs|length %}
    <div class=\"col-lg-6 col-md-12\">
    <div class=\"card-box\">
    <form action=\"{{ path('hostoo_sante_addformule') }}\" method=\"post\">
        {{ form_label(form.nom,'Nom de la formule') }}
        {{ form_errors(form.nom) }}
        {{ form_widget(form.nom,{'attr':{'class':'form-control'}}) }}
<input type=\"submit\" value=\"enregistrer\" class=\"btn btn-success\">
        {{ form_rest(form) }}
    </form>
</div>
    </div>
    <div class=\"col-lg-6 col-md-12\">
        <div class=\"card-box\">
        <ul class=\"list-unstyled list-group\">
            {% for formule in tcs %}
                <li class=\"list-group-item\">{{ formule.nom }}<span class=\"badge badge-info\">{{ formule.patients|length }}</span> </li>
            {% endfor %}
        </ul>
        </div>
    </div>
{% endblock %}", "hostooSanteBundle:Types:formules.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Types/formules.html.twig");
    }
}
