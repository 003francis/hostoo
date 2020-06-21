<?php

/* hostooSanteBundle:Medecin:patientsrecus.html.twig */
class __TwigTemplate_e68082932c3a43aee18ed2bf0fd5c830f574e0286921231ad8baed0165f63b00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Medecin:patientsrecus.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Medecin:patientsrecus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "hostooSanteBundle:Medecin:patientsrecus.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
               <div class=\"row\">



";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["liste"] ?? $this->getContext($context, "liste"))), "html", null, true);
        echo "



    <div class=\"col-lg-8 col-lg-offset-2\">
        <div class=\"card-box\">
        ";
        // line 17
        if ((($context["liste"] ?? $this->getContext($context, "liste")) == null)) {
            // line 18
            echo "        <h3  class=\"alert alert-block alert-danger\">Pas de patients recus</h3>
        ";
        } else {
            // line 20
            echo "        <h3>Patients réçus</h3>
            <ul id=\"listitems\" class=\"list-unstyled\">
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 24
                echo "            <li>
            <p class=\"timeline-date text-muted\"><small class=\"text-primary\">";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Twig_Extensions_Extension_Date')->diff($this->env, $this->getAttribute($context["patient"], "daterdv", []))), "html", null, true);
                echo "</small></p>
                                <p>";
                // line 26
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["patient"], "episode", []), "patient", []), "sexe", []) == true)) {
                    echo "Monsieur";
                } else {
                    echo "Madame";
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["patient"], "episode", []), "patient", []), "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["patient"], "episode", []), "patient", []), "postnom", []), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["patient"], "episode", []), "patient", []), "prenom", []), "html", null, true);
                echo "</p>
                                <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["patient"], "episode", []), "observation", []), "html", null, true);
                echo "</p>
                                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_lireepisode", ["id" => $this->getAttribute($this->getAttribute($context["patient"], "episode", []), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info\" > <i class=\"fa fa-eye\"></i>Réexaminer</a>
            </li>
            ";
                // line 31
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </ul>
            <div id=\"listitems-pagination\" style=\"display:none\" class=\"pager\">
                <a id=\"listitems-previous\" href=\"#\" class=\"disabled btn btn-default\">&laquo; Précédent</a>
                <a id=\"listitems-next\" href=\"#\" class=\"btn btn-default\">Suivant &raquo;</a>
            </div>
        </div>
            ";
        }
        // line 39
        echo "    </div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.paginate.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('#listitems').paginate({itemsPerPage: 10});
            \$('#listitems2').paginate({itemsPerPage: 10});
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Medecin:patientsrecus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 43,  146 => 42,  140 => 41,  132 => 39,  123 => 32,  117 => 31,  112 => 28,  108 => 27,  94 => 26,  90 => 25,  87 => 24,  83 => 22,  79 => 20,  75 => 18,  73 => 17,  64 => 11,  57 => 6,  51 => 5,  44 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
{% include 'hostooSanteBundle:menus:menudoc.html.twig' %}
    {% endblock %}
{% block body %}

               <div class=\"row\">



{{ liste|length }}



    <div class=\"col-lg-8 col-lg-offset-2\">
        <div class=\"card-box\">
        {% if liste == null %}
        <h3  class=\"alert alert-block alert-danger\">Pas de patients recus</h3>
        {% else %}
        <h3>Patients réçus</h3>
            <ul id=\"listitems\" class=\"list-unstyled\">
        {% for patient in liste %}
{#{% if patient.recu==1 %}#}
            <li>
            <p class=\"timeline-date text-muted\"><small class=\"text-primary\">{{ patient.daterdv|time_diff|trans }}</small></p>
                                <p>{% if patient.episode.patient.sexe == true %}Monsieur{% else %}Madame{% endif %} {{ patient.episode.patient.nom }} {{ patient.episode.patient.postnom }}  {{ patient.episode.patient.prenom }}</p>
                                <p>{{ patient.episode.observation }}</p>
                                <a href=\"{{ path('hostoo_med_lireepisode',{'id':patient.episode.id}) }}\" class=\"btn btn-info\" > <i class=\"fa fa-eye\"></i>Réexaminer</a>
            </li>
            {#{% endif %}#}
        {% endfor %}
            </ul>
            <div id=\"listitems-pagination\" style=\"display:none\" class=\"pager\">
                <a id=\"listitems-previous\" href=\"#\" class=\"disabled btn btn-default\">&laquo; Précédent</a>
                <a id=\"listitems-next\" href=\"#\" class=\"btn btn-default\">Suivant &raquo;</a>
            </div>
        </div>
            {% endif %}
    </div></div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/jquery.paginate.min.js') }}\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('#listitems').paginate({itemsPerPage: 10});
            \$('#listitems2').paginate({itemsPerPage: 10});
        });
    </script>
{% endblock %}", "hostooSanteBundle:Medecin:patientsrecus.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Medecin/patientsrecus.html.twig");
    }
}
