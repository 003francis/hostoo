<?php

/* hostooSanteBundle:Medecin:medecinaccueil.html.twig */
class __TwigTemplate_1a049b45199d6f76c19e90b11c944150f7d5cdb49fcbb098859036da2a8d9902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Medecin:medecinaccueil.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Medecin:medecinaccueil.html.twig"));

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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "hostooSanteBundle:Medecin:medecinaccueil.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h2>File d'attente</h2>


               <div class=\"row\">
        <div class=\"col-lg-8\">
            ";
        // line 13
        if ((($context["liste"] ?? $this->getContext($context, "liste")) == null)) {
            // line 14
            echo "                <h3 class=\"alert alert-block alert-danger\">Pas de fil d'attente</h3>
            ";
        } else {
            // line 16
            echo "        <div class=\"timeline\">
            <article class=\"timeline-item alt\">
                <div class=\"text-right\">
                    <div class=\"time-show first\">
                        <a href=\"#\" class=\"btn btn-primary w-lg\">Aujourd'hui</a>
                    </div>
                </div>
            </article>
            ";
            // line 24
            $context["n"] = 0;
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["liste"] ?? $this->getContext($context, "liste")), "RDVspatients", []));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 26
                echo "            ";
                $context["n"] = (($context["n"] ?? $this->getContext($context, "n")) + 1);
                // line 27
                echo "                ";
                if ((($this->getAttribute($context["patient"], "recu", []) == 0) && ($this->getAttribute($context["patient"], "valid", []) == 1))) {
                    // line 28
                    echo "                <article ";
                    if ((($context["n"] ?? $this->getContext($context, "n")) % 2 == 0)) {
                        echo "class=\"timeline-item alt\"";
                    } else {
                        echo "class=\"timeline-item\"";
                    }
                    echo ">
                    <div class=\"timeline-desk\">
                        <div class=\"panel\">
                            <div class=\"panel-body\">
                                <span class=\"arrow-alt\"></span>
                                <span class=\"timeline-icon\"></span>
                                <h4 class=\"text-custom\">il y a ";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Twig_Extensions_Extension_Date')->diff($this->env, $this->getAttribute($context["patient"], "daterdv", [])), "html", null, true);
                    echo "
                                    ";
                    // line 36
                    echo "                                    ";
                    // line 37
                    echo "                                    ";
                    // line 38
                    echo "                                        ";
                    // line 39
                    echo "                                    ";
                    // line 40
                    echo "
                                </h4>
                                <p class=\"timeline-date text-muted\"><small>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "daterdv", []), "H:i:s"), "html", null, true);
                    echo "</small></p>
                                <p>";
                    // line 43
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
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["patient"], "episode", []), "observation", []), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_lireepisode", ["id" => $this->getAttribute($this->getAttribute($context["patient"], "episode", []), "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-info\" > <i class=\"fa fa-eye\"></i>Examiner</a>
                            </div>
                        </div>
                    </div>
                </article>
                ";
                }
                // line 51
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </div>
    ";
        }
        // line 54
        echo "        </div>
        <!-- end row -->





    <div class=\"col-lg-4\">
        <div class=\"card-box\">
        ";
        // line 63
        if ( !$this->getAttribute(($context["liste"] ?? null), "RDVspatients", [], "any", true, true)) {
            // line 64
            echo "        <h3  class=\"alert alert-block alert-danger\">Pas de patients recus</h3>
        ";
        } else {
            // line 66
            echo "        <h3>Patients réçus</h3>
            ";
            // line 67
            if ((twig_length_filter($this->env, ($context["recus"] ?? $this->getContext($context, "recus"))) > 0)) {
                // line 68
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["recus"] ?? $this->getContext($context, "recus")), "RDVspatients", []));
                foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                    // line 69
                    if (($this->getAttribute($context["patient"], "recu", []) == 1)) {
                        // line 70
                        echo "                                <p class=\"timeline-date text-muted\"><small>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "daterdv", []), "h:i:s"), "html", null, true);
                        echo "</small></p>
                                <p>";
                        // line 71
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
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["patient"], "episode", []), "observation", []), "html", null, true);
                        echo "</p>
                                <a href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_med_lireepisode", ["id" => $this->getAttribute($this->getAttribute($context["patient"], "episode", []), "id", [])]), "html", null, true);
                        echo "\" class=\"btn btn-info\" > <i class=\"fa fa-eye\"></i>Réexaminer</a>
            ";
                    }
                    // line 75
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "        </div>

            ";
            }
            // line 79
            echo "            ";
        }
        // line 80
        echo "    </div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Medecin:medecinaccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 80,  255 => 79,  250 => 76,  244 => 75,  239 => 73,  235 => 72,  221 => 71,  216 => 70,  214 => 69,  209 => 68,  207 => 67,  204 => 66,  200 => 64,  198 => 63,  187 => 54,  183 => 52,  177 => 51,  168 => 45,  164 => 44,  150 => 43,  146 => 42,  142 => 40,  140 => 39,  138 => 38,  136 => 37,  134 => 36,  130 => 34,  116 => 28,  113 => 27,  110 => 26,  105 => 25,  103 => 24,  93 => 16,  89 => 14,  87 => 13,  80 => 8,  74 => 7,  67 => 6,  65 => 5,  59 => 4,  48 => 3,  37 => 2,  11 => 1,);
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
{% block options %}{% endblock %}
{% block menu %}
{% include 'hostooSanteBundle:menus:menudoc.html.twig' %}
    {% endblock %}
{% block body %}
    <h2>File d'attente</h2>


               <div class=\"row\">
        <div class=\"col-lg-8\">
            {% if liste == null %}
                <h3 class=\"alert alert-block alert-danger\">Pas de fil d'attente</h3>
            {% else %}
        <div class=\"timeline\">
            <article class=\"timeline-item alt\">
                <div class=\"text-right\">
                    <div class=\"time-show first\">
                        <a href=\"#\" class=\"btn btn-primary w-lg\">Aujourd'hui</a>
                    </div>
                </div>
            </article>
            {% set n=0 %}
            {% for patient in liste.RDVspatients %}
            {% set n=n+1 %}
                {% if patient.recu==0 and patient.valid==1 %}
                <article {% if n is even %}class=\"timeline-item alt\"{% else %}class=\"timeline-item\"{% endif %}>
                    <div class=\"timeline-desk\">
                        <div class=\"panel\">
                            <div class=\"panel-body\">
                                <span class=\"arrow-alt\"></span>
                                <span class=\"timeline-icon\"></span>
                                <h4 class=\"text-custom\">il y a {{ patient.daterdv|time_diff }}
                                    {#{% if \"now\"|date('H')-patient.daterdv|date('H')>0 %}#}
                                    {#{{\"now\"|date('H')-patient.daterdv|date('H') }} Heuse(s) et {{ \"now\"|date('i')-patient.daterdv|date('i') }} minute(s)#}
                                    {#{% else %}#}
                                        {#{{ \"now\"|date('i')-patient.daterdv|date('i') }} minute(s)#}
                                    {#{% endif %}#}

                                </h4>
                                <p class=\"timeline-date text-muted\"><small>{{ patient.daterdv|date('H:i:s') }}</small></p>
                                <p>{% if patient.episode.patient.sexe == true %}Monsieur{% else %}Madame{% endif %} {{ patient.episode.patient.nom }} {{ patient.episode.patient.postnom }}  {{ patient.episode.patient.prenom }}</p>
                                <p>{{ patient.episode.observation }}</p>
                                <a href=\"{{ path('hostoo_med_lireepisode',{'id':patient.episode.id}) }}\" class=\"btn btn-info\" > <i class=\"fa fa-eye\"></i>Examiner</a>
                            </div>
                        </div>
                    </div>
                </article>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}
        </div>
        <!-- end row -->





    <div class=\"col-lg-4\">
        <div class=\"card-box\">
        {% if liste.RDVspatients is not defined %}
        <h3  class=\"alert alert-block alert-danger\">Pas de patients recus</h3>
        {% else %}
        <h3>Patients réçus</h3>
            {% if recus|length > 0 %}
      {% for patient in recus.RDVspatients %}
{% if patient.recu==1 %}
                                <p class=\"timeline-date text-muted\"><small>{{ patient.daterdv|date('h:i:s') }}</small></p>
                                <p>{% if patient.episode.patient.sexe == true %}Monsieur{% else %}Madame{% endif %} {{ patient.episode.patient.nom }} {{ patient.episode.patient.postnom }}  {{ patient.episode.patient.prenom }}</p>
                                <p>{{ patient.episode.observation }}</p>
                                <a href=\"{{ path('hostoo_med_lireepisode',{'id':patient.episode.id}) }}\" class=\"btn btn-info\" > <i class=\"fa fa-eye\"></i>Réexaminer</a>
            {% endif %}
        {% endfor %}
        </div>

            {% endif %}
            {% endif %}
    </div></div>
{% endblock %}", "hostooSanteBundle:Medecin:medecinaccueil.html.twig", "C:\\wamp64\\www\\hostoo\\src\\hostoo\\SanteBundle/Resources/views/Medecin/medecinaccueil.html.twig");
    }
}
