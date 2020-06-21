<?php

/* article/index.html.twig */
class __TwigTemplate_72725e66559ebc201262f018d680d712f2dbd79844dfd66bc3b229030997eeca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "article/index.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

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
            echo "    ";
            $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "article/index.html.twig", 4)->display($context);
            // line 5
            echo "        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) {
            // line 6
            echo "            ";
            $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "article/index.html.twig", 6)->display($context);
            // line 7
            echo "            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_LABORATOIRE")) {
            // line 8
            echo "                ";
            $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "article/index.html.twig", 8)->display($context);
            // line 9
            echo "                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MEDECIN")) {
            // line 10
            echo "                    ";
            $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "article/index.html.twig", 10)->display($context);
            // line 11
            echo "                    ";
        } else {
            // line 12
            echo "                        ";
            $this->loadTemplate("hostooSanteBundle:menus:menunrs.html.twig", "article/index.html.twig", 12)->display($context);
            // line 13
            echo "                        ";
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
        echo "    <h1>Mes Articles</h1>
<div class=\"card-box\">
    <form method=\"post\" action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("requisition_new");
        echo "\">
    <table class=\"table\" id=\"mesarts\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Désignation</th>
                <th>Prix</th>
                <th>Qté</th>
                <th>Reste</th>
                <th>service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 35
            echo "            <tr>
                <td><input type=\"checkbox\" name=\"selectarticlereq[]\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", []), "html", null, true);
            echo "\" /></td>
                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_show", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "designation", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "prix", []), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($this->getAttribute($context["article"], "prodstock", [], "any", false, true), "qte", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "prodstock", []), "qte", []), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($this->getAttribute($context["article"], "prodstock", [], "any", false, true), "reste", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "prodstock", []), "reste", []), "html", null, true);
                echo " ";
            }
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "service", []), "nomservice", []), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_show", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
            echo "\">afficher</a>
                        </li>
                        ";
            // line 47
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER")) {
                // line 48
                echo "                        <li>
                            <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_edit", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
                echo "\">modifier</a>
                        </li>
                        ";
            }
            // line 52
            echo "                        <li>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_edit", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
            echo "\">transferer</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_edit", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#retrancher\">retirer</a>
                        </li>
                    </ul>
                </td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"6\"><input type=\"submit\" value=\"Requisition\" class=\"btn btn-info\"></td>
        </tr>
        </tfoot>
    </table>
    </form>
</div>
    <ul class=\"list-unstyled\">
        <li>
            <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("req_article_new");
        echo "\" class=\"btn btn-success\">Nouvel Article</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 81
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 82
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "article/index.html.twig", 82)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 86
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "article/index.html.twig", 86)->display($context);
        // line 87
        echo "    <script>
        \$(function () {
            \$('#mesarts').dataTable();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 87,  265 => 86,  260 => 85,  254 => 84,  247 => 82,  242 => 81,  236 => 80,  225 => 75,  211 => 63,  198 => 56,  192 => 53,  189 => 52,  183 => 49,  180 => 48,  178 => 47,  173 => 45,  166 => 41,  159 => 40,  153 => 39,  149 => 38,  143 => 37,  139 => 36,  136 => 35,  132 => 34,  115 => 20,  111 => 18,  105 => 17,  94 => 16,  83 => 15,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
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
    <h1>Mes Articles</h1>
<div class=\"card-box\">
    <form method=\"post\" action=\"{{ path('requisition_new') }}\">
    <table class=\"table\" id=\"mesarts\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Désignation</th>
                <th>Prix</th>
                <th>Qté</th>
                <th>Reste</th>
                <th>service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td><input type=\"checkbox\" name=\"selectarticlereq[]\" value=\"{{ article.id }}\" /></td>
                <td><a href=\"{{ path('req_article_show', { 'id': article.id }) }}\">{{ article.designation }}</a></td>
                <td>{{ article.prix }}</td>
                <td>{% if article.prodstock.qte is defined %}{{ article.prodstock.qte }}{% endif %}</td>
                <td>{% if article.prodstock.reste is defined %}{{ article.prodstock.reste }} {% endif %}</td>
                <td>{{ article.service.nomservice }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('req_article_show', { 'id': article.id }) }}\">afficher</a>
                        </li>
                        {% if is_granted('ROLE_CAISSIER') %}
                        <li>
                            <a href=\"{{ path('req_article_edit', { 'id': article.id }) }}\">modifier</a>
                        </li>
                        {% endif %}
                        <li>
                            <a href=\"{{ path('req_article_edit', { 'id': article.id }) }}\">transferer</a>
                        </li>
                        <li>
                            <a href=\"{{ path('req_article_edit', { 'id': article.id }) }}\" data-toggle=\"modal\" data-target=\"#retrancher\">retirer</a>
                        </li>
                    </ul>
                </td>
            </tr>

        {% endfor %}

        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"6\"><input type=\"submit\" value=\"Requisition\" class=\"btn btn-info\"></td>
        </tr>
        </tfoot>
    </table>
    </form>
</div>
    <ul class=\"list-unstyled\">
        <li>
            <a href=\"{{ path('req_article_new') }}\" class=\"btn btn-success\">Nouvel Article</a>
        </li>
    </ul>
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
            \$('#mesarts').dataTable();
        });
    </script>
{% endblock %}", "article/index.html.twig", "/var/www/html/hostoo/app/Resources/views/article/index.html.twig");
    }
}
