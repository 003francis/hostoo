<?php

/* hostooGestionBundle:Gestion:liste_conventions.html.twig */
class __TwigTemplate_5c64ef431d64a8beb15576a1dd8e67939e8131fcda107db0af936a940e7918bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooGestionBundle:Gestion:liste_conventions.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooGestionBundle:Gestion:liste_conventions.html.twig"));

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
        $this->loadTemplate("hostooUserBundle:menus:menuadmin.html.twig", "hostooGestionBundle:Gestion:liste_conventions.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Conventions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        if ((($context["liste"] ?? $this->getContext($context, "liste")) == null)) {
            // line 10
            echo "<div class=\"alert alert-dismissible alert-danger\"><i class=\"fa fa-battery-empty\"></i> <strong>Pas de Convention Definie</strong></div>
";
        } else {
            // line 12
            echo "<div class=\"card-box\">
<table class=\"table table-striped\">
    <caption><h1>Liste des conventions</h1></caption>
    <thead>
    <tr>
        <th>Id</th>
        <th>Convention</th>
        <th>Entreprise</th>

        <th>Nombre des formules</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
            foreach ($context['_seq'] as $context["_key"] => $context["conv"]) {
                // line 27
                echo "       <tr>
           <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["conv"], "id", []), "html", null, true);
                echo "</td>
           <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["conv"], "nomconvention", []), "html", null, true);
                echo "</td>
           <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["conv"], "proprietaire", [])), "html", null, true);
                echo "</td>
           <td>
               ";
                // line 32
                if (($this->getAttribute($context["conv"], "formule", []) == null)) {
                    // line 33
                    echo "               0
               ";
                } else {
                    // line 35
                    echo "               ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["conv"], "formule", [])), "html", null, true);
                    echo "
           ";
                }
                // line 37
                echo "           </td>
           <td>
               ";
                // line 39
                if ((twig_length_filter($this->env, $this->getAttribute($context["conv"], "tarif", [])) == 0)) {
                    // line 40
                    echo "                   <a class=\"btn btn-sm btn-info waves-effect\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_des_prix", ["convention" => $this->getAttribute($context["conv"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> Prix </a>
               ";
                } else {
                    // line 42
                    echo "               <a class=\"btn btn-sm btn-default waves-effect\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_des_prix", ["convention" => $this->getAttribute($context["conv"], "id", [])]), "html", null, true);
                    echo "\"><i class=\"fa fa-edit\"></i> Prix </a>
               ";
                }
                // line 44
                echo "           </td>

       </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    </tbody>

</table>
</div>
";
        }
        // line 53
        echo "    ";
        if ((($context["proprios"] ?? $this->getContext($context, "proprios")) == null)) {
            // line 54
            echo "        <div class=\"alert alert-dismissible alert-danger\"><i class=\"fa fa-battery-empty\"></i> <strong>Pas de Convention Definie</strong></div>
    ";
        } else {
            // line 56
            echo "        <div class=\"card-box\">
            <table class=\"table table-striped\">
                <caption><h1>Les Souscrits</h1></caption>
                <thead>
                <tr>
                    <th>Proprietaire</th>
                    <th>Telephone</th>
                    <th>E-mail</th>
                    <th>Adresse</th>
                    <th>Nombre des patients</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["proprios"] ?? $this->getContext($context, "proprios")));
            foreach ($context['_seq'] as $context["_key"] => $context["conv"]) {
                // line 72
                echo "                    <tr>
                        <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["conv"], "nom", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["conv"], "telephone", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["conv"], "email", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["conv"], "adresse", []), "html", null, true);
                echo "</td>
                        <td>&nbsp;</td>
                        <td>";
                // line 78
                if ($this->getAttribute($context["conv"], "etat", [])) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("switch_entreprise", ["id" => $this->getAttribute($context["conv"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-success\"> Activée</a> ";
                } else {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("switch_entreprise", ["id" => $this->getAttribute($context["conv"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-danger\">Désactivée</a>";
                }
                echo "</td>
                        <td>
                            <a class=\"btn btn-sm btn-danger waves-effect\" href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_gestion_prop", ["id" => $this->getAttribute($context["conv"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-eyes\"></i> voir </a>

                                <a class=\"btn btn-sm btn-info waves-effect\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_des_prix", ["convention" => $this->getAttribute($context["conv"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-plus\"></i> Prix </a>

                                <a class=\"btn btn-sm btn-default waves-effect\" href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_des_prix", ["convention" => $this->getAttribute($context["conv"], "id", [])]), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i> Prix </a>

                        </td>

                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                </tbody>

            </table>
        </div>
    ";
        }
        // line 95
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooGestionBundle:Gestion:liste_conventions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 95,  242 => 90,  230 => 84,  225 => 82,  220 => 80,  207 => 78,  202 => 76,  198 => 75,  194 => 74,  190 => 73,  187 => 72,  183 => 71,  166 => 56,  162 => 54,  159 => 53,  152 => 48,  143 => 44,  137 => 42,  131 => 40,  129 => 39,  125 => 37,  119 => 35,  115 => 33,  113 => 32,  108 => 30,  104 => 29,  100 => 28,  97 => 27,  93 => 26,  77 => 12,  73 => 10,  71 => 9,  68 => 8,  62 => 7,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
    {% include 'hostooUserBundle:menus:menuadmin.html.twig' %}
{% endblock %}
{% block title %}Liste des Conventions{% endblock %}

{% block body %}

{% if liste == null %}
<div class=\"alert alert-dismissible alert-danger\"><i class=\"fa fa-battery-empty\"></i> <strong>Pas de Convention Definie</strong></div>
{% else %}
<div class=\"card-box\">
<table class=\"table table-striped\">
    <caption><h1>Liste des conventions</h1></caption>
    <thead>
    <tr>
        <th>Id</th>
        <th>Convention</th>
        <th>Entreprise</th>

        <th>Nombre des formules</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    {% for conv in liste %}
       <tr>
           <td>{{ conv.id }}</td>
           <td>{{ conv.nomconvention }}</td>
           <td>{{ conv.proprietaire|length }}</td>
           <td>
               {% if conv.formule == null %}
               0
               {% else %}
               {{ conv.formule|length }}
           {% endif %}
           </td>
           <td>
               {% if conv.tarif|length == 0 %}
                   <a class=\"btn btn-sm btn-info waves-effect\" href=\"{{ path('ajouter_des_prix',{'convention':conv.id}) }}\"><i class=\"fa fa-plus\"></i> Prix </a>
               {% else %}
               <a class=\"btn btn-sm btn-default waves-effect\" href=\"{{ path('modifier_des_prix',{'convention':conv.id}) }}\"><i class=\"fa fa-edit\"></i> Prix </a>
               {% endif %}
           </td>

       </tr>
        {% endfor %}
    </tbody>

</table>
</div>
{% endif %}
    {% if proprios == null %}
        <div class=\"alert alert-dismissible alert-danger\"><i class=\"fa fa-battery-empty\"></i> <strong>Pas de Convention Definie</strong></div>
    {% else %}
        <div class=\"card-box\">
            <table class=\"table table-striped\">
                <caption><h1>Les Souscrits</h1></caption>
                <thead>
                <tr>
                    <th>Proprietaire</th>
                    <th>Telephone</th>
                    <th>E-mail</th>
                    <th>Adresse</th>
                    <th>Nombre des patients</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for conv in proprios %}
                    <tr>
                        <td>{{ conv.nom }}</td>
                        <td>{{ conv.telephone }}</td>
                        <td>{{ conv.email }}</td>
                        <td>{{ conv.adresse }}</td>
                        <td>&nbsp;</td>
                        <td>{% if conv.etat %}<a href=\"{{ path('switch_entreprise',{'id':conv.id }) }}\" class=\"btn btn-success\"> Activée</a> {% else %}<a href=\"{{ path('switch_entreprise',{'id':conv.id }) }}\" class=\"btn btn-danger\">Désactivée</a>{% endif %}</td>
                        <td>
                            <a class=\"btn btn-sm btn-danger waves-effect\" href=\"{{ path('hostoo_gestion_prop',{'id':conv.id}) }}\"><i class=\"fa fa-eyes\"></i> voir </a>

                                <a class=\"btn btn-sm btn-info waves-effect\" href=\"{{ path('ajouter_des_prix',{'convention':conv.id}) }}\"><i class=\"fa fa-plus\"></i> Prix </a>

                                <a class=\"btn btn-sm btn-default waves-effect\" href=\"{{ path('modifier_des_prix',{'convention':conv.id}) }}\"><i class=\"fa fa-edit\"></i> Prix </a>

                        </td>

                    </tr>
                {% endfor %}
                </tbody>

            </table>
        </div>
    {% endif %}

{% endblock %}
", "hostooGestionBundle:Gestion:liste_conventions.html.twig", "/var/www/html/hostoo/src/hostoo/GestionBundle/Resources/views/Gestion/liste_conventions.html.twig");
    }
}
