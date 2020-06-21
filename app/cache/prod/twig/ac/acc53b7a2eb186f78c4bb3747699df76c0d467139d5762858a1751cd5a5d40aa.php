<?php

/* hostooSanteBundle:Episode:episodepatientreception.html.twig */
class __TwigTemplate_737862fc68389b1439e6d96ffd58a42a89fd1ba9707d6bed3dd9ffe5fda8ada3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Episode:episodepatientreception.html.twig", 1);
        $this->blocks = [
            'options' => [$this, 'block_options'],
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Episode:episodepatientreception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooSanteBundle:Episode:episodepatientreception.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h3>Episode du Patient ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "nom", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "postnom", []), "html", null, true);
        echo "</h3>

    ";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? null), "patient", [], "any", false, true), "formule", [], "any", false, true), "nom", [], "any", true, true)) {
            echo "<h4 class=\"text-info\">Formule : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []), "nom", []), "html", null, true);
            echo "</h4> ";
        }
        // line 12
        echo "    <h4 class=\"text-info\">Type : ";
        if ($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "html", null, true);
            echo " ";
        }
        echo "</h4>
    <a class=\"btn btn-custom pull-right\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_t_b");
        echo "\">Retour</a>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"alert alert-success\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    <div class=\"row\">

       <!-- panel-->
    <div class=\"col-md-12\">    <div class=\"card-box\">
    <h2>Diriger le patient à la caisse</h2>
                        <table>
                            <tr><th>Libelle</th><th>Prix</th></tr>

                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "factures", []));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 29
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["liste"], "commandes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["comd"]) {
                // line 30
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comd"], "tarifs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["tar"]) {
                    // line 31
                    echo "                                <tr><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tar"], "actes", []), "designationacte", []), "html", null, true);
                    echo "</td><td>

                                        ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tar"], "prix", []), "html", null, true);
                    echo "

                                    </td> </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tar'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                <tr><td>Montant Total :</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "prix", []), "html", null, true);
            echo "</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "

                        </table>
    </div>
    </div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Episode:episodepatientreception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 40,  170 => 38,  164 => 37,  154 => 33,  148 => 31,  143 => 30,  138 => 29,  134 => 28,  124 => 20,  115 => 17,  112 => 16,  108 => 15,  103 => 13,  95 => 12,  89 => 11,  82 => 9,  79 => 8,  73 => 7,  65 => 5,  59 => 4,  48 => 3,  37 => 2,  11 => 1,);
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
{% block options %}{% endblock %}
{% block titrepage %}{% endblock %}
{% block menu %}
    {% include \"hostooSanteBundle:menus:menurc.html.twig\" %}
{% endblock %}
{% block body %}

    <h3>Episode du Patient {{ episode.patient.nom }} - {{ episode.patient.postnom }}</h3>

    {% if episode.patient.formule.nom is defined %}<h4 class=\"text-info\">Formule : {{ episode.patient.formule.nom }}</h4> {% endif %}
    <h4 class=\"text-info\">Type : {% if episode.patient.societe %}{{ episode.patient.societe }} {% endif %}</h4>
    <a class=\"btn btn-custom pull-right\" href=\"{{ path('reception_t_b') }}\">Retour</a>

    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    <div class=\"row\">

       <!-- panel-->
    <div class=\"col-md-12\">    <div class=\"card-box\">
    <h2>Diriger le patient à la caisse</h2>
                        <table>
                            <tr><th>Libelle</th><th>Prix</th></tr>

                            {% for liste in episode.factures %}
                                {% for comd in liste.commandes %}
                                {% for tar in comd.tarifs %}
                                <tr><td>{{ tar.actes.designationacte }}</td><td>

                                        {{ tar.prix }}

                                    </td> </tr>
                                    {% endfor %}
                                    {% endfor %}
                                <tr><td>Montant Total :</td><td>{{ liste.prix }}</td></tr>
                            {% endfor %}


                        </table>
    </div>
    </div></div>
{% endblock %}", "hostooSanteBundle:Episode:episodepatientreception.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Episode/episodepatientreception.html.twig");
    }
}
