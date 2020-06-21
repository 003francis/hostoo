<?php

/* article/new.html.twig */
class __TwigTemplate_c0c0d0facdb50c1b9ceecca670e968713bc778420ca05daff967e650da2fdc1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "article/new.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER")) {
            // line 4
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "article/new.html.twig", 4)->display($context);
            // line 5
            echo "    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) {
            // line 6
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "article/new.html.twig", 6)->display($context);
            // line 7
            echo "    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LABORATOIRE")) {
            // line 8
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "article/new.html.twig", 8)->display($context);
            // line 9
            echo "    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MEDECIN")) {
            // line 10
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "article/new.html.twig", 10)->display($context);
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            $this->loadTemplate("hostooSanteBundle:menus:menunrs.html.twig", "article/new.html.twig", 12)->display($context);
            // line 13
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <h1>Nouvel Article</h1>
<div class=\"card-box\">
    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Enregistrer\" />
    ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
<br>
    <ul class=\"list-unstyled\">
        <li>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_index");
        echo "\" class=\"btn btn-custom\">Aller à la liste</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 28,  122 => 23,  117 => 21,  113 => 20,  109 => 18,  103 => 17,  92 => 16,  81 => 15,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
{% block menu %}
    {% if is_granted('ROLE_CAISSIER') %}
        {% include 'hostooSanteBundle:menus:menucaisse.html.twig' %}
    {% elseif is_granted('ROLE_RECEPTION') %}
        {% include 'hostooSanteBundle:menus:menurc.html.twig' %}
    {% elseif is_granted('ROLE_LABORATOIRE')%}
        {% include 'hostooSanteBundle:menus:menulabo.html.twig' %}
    {% elseif is_granted('ROLE_MEDECIN') %}
        {% include 'hostooSanteBundle:menus:menudoc.html.twig' %}
    {% else %}
        {% include 'hostooSanteBundle:menus:menunrs.html.twig' %}
    {% endif %}
{% endblock %}
{% block titrepage %}{% endblock %}
{% block options %}{% endblock %}
{% block body %}
    <h1>Nouvel Article</h1>
<div class=\"card-box\">
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Enregistrer\" />
    {{ form_end(form) }}
</div>
<br>
    <ul class=\"list-unstyled\">
        <li>
            <a href=\"{{ path('req_article_index') }}\" class=\"btn btn-custom\">Aller à la liste</a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "/var/www/html/hostoo/app/Resources/views/article/new.html.twig");
    }
}
