<?php

/* hostooUserBundle:Default:liste.html.twig */
class __TwigTemplate_50c0d68c143dc25700218466faccb95b75c92fa9b12e8a588371893c83e6b5cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooUserBundle:Default:liste.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'titrepage' => [$this, 'block_titrepage'],
            'title' => [$this, 'block_title'],
            'options' => [$this, 'block_options'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "hostooSanteBundle::blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooUserBundle:Default:liste.html.twig"));

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
        $this->loadTemplate("hostooUserBundle:menus:menuadmin.html.twig", "hostooUserBundle:Default:liste.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        // line 6
        echo "    Comptes utilisateurs
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    Comptes utilisateurs
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_user_creeruser");
        echo "\" class=\"btn btn-success\"><i class=\"zmdi zmdi-account-add\"></i> </a>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <legend>Liste des utilisateurs</legend>
    <div class=\"card-box\">
    <table class=\"table table-striped\" cellspacing=\"0\" cellpadding=\"0\" id=\"utilisateurs\">
        <thead><tr class=\"alt first last\">
            <th>id</th>
            <th>Nom</th>
            <th>postnom</th>
            <th>Email</th>
            <th>Role</th>
            <th>Date de naissance</th>
            <th>service</th>
            <th>identifiant</th>
            <th></th>
        </tr></thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 32
            echo "        <tr class=\"\">
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", []), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", []), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "postnom", []), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "email", []), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["utilisateur"], "roles", []), 0, [], "array"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["utilisateur"], "datenaissance", []), "d-m-Y"), "html", null, true);
            echo "</td>
            <td></td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "username", []), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_user_edituser", ["id" => $this->getAttribute($context["utilisateur"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-edit\"></i> </a> </td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 48
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 49
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooUserBundle:Default:liste.html.twig", 49)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 53
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooUserBundle:Default:liste.html.twig", 53)->display($context);
        // line 54
        echo "    <script>
        \$(function () {
            \$('#utilisateurs').dataTable();
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooUserBundle:Default:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 54,  207 => 53,  202 => 52,  196 => 51,  189 => 49,  184 => 48,  178 => 47,  169 => 44,  160 => 41,  156 => 40,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  128 => 32,  124 => 31,  107 => 16,  101 => 15,  91 => 13,  85 => 12,  74 => 9,  68 => 8,  60 => 6,  54 => 5,  46 => 3,  40 => 2,  11 => 1,);
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
    {% include 'hostooUserBundle:menus:menuadmin.html.twig' %}
{% endblock %}
{% block titrepage %}
    Comptes utilisateurs
{% endblock %}
{% block title %}
    {{ parent() }}
    Comptes utilisateurs
{% endblock %}
{% block options %}
    <a href=\"{{ path('hostoo_user_creeruser') }}\" class=\"btn btn-success\"><i class=\"zmdi zmdi-account-add\"></i> </a>
    {% endblock %}
{% block body %}
    <legend>Liste des utilisateurs</legend>
    <div class=\"card-box\">
    <table class=\"table table-striped\" cellspacing=\"0\" cellpadding=\"0\" id=\"utilisateurs\">
        <thead><tr class=\"alt first last\">
            <th>id</th>
            <th>Nom</th>
            <th>postnom</th>
            <th>Email</th>
            <th>Role</th>
            <th>Date de naissance</th>
            <th>service</th>
            <th>identifiant</th>
            <th></th>
        </tr></thead>
        <tbody>
        {% for utilisateur in users %}
        <tr class=\"\">
            <td>{{ utilisateur.id }}</td>
            <td>{{ utilisateur.nom }}</td>
            <td>{{ utilisateur.postnom }}</td>
            <td>{{ utilisateur.email }}</td>
            <td>{{ utilisateur.roles[0] }}</td>
            <td>{{ utilisateur.datenaissance|date('d-m-Y') }}</td>
            <td></td>
            <td>{{ utilisateur.username }}</td>
            <td><a href=\"{{ path('hostoo_user_edituser',{'id':utilisateur.id}) }}\" class=\"btn btn-default\"><i class=\"fa fa-edit\"></i> </a> </td>
        </tr>
            {% endfor %}
    </table>
    </div>
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:datatable.style.html.twig' %}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:datatable.scripts.html.twig' %}
    <script>
        \$(function () {
            \$('#utilisateurs').dataTable();
        })
    </script>
{% endblock %}", "hostooUserBundle:Default:liste.html.twig", "C:\\wamp64\\www\\hostoo\\src\\hostoo\\UserBundle/Resources/views/Default/liste.html.twig");
    }
}
