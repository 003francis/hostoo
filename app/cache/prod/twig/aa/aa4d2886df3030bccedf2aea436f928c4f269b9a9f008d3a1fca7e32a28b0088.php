<?php

/* hostooSanteBundle:Patient:fichepatient.html.twig */
class __TwigTemplate_20ea45c4e4bc9f7e43e15d61ad3c6891501fc34a922886784b1e07a4f79ee943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Patient:fichepatient.html.twig", 1);
        $this->blocks = [
            'titre' => [$this, 'block_titre'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Patient:fichepatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " ";
        $this->displayParentBlock("titre", $context, $blocks);
        echo "::Fiche du Patient";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Identité du patient"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        // line 5
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_listepatients");
        echo "\" class=\"btn btn-info\" > <i class=\"fa fa-backward\"></i> liste des patients</a>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_editpatientrc", ["id" => $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-warning\" > <i class=\"fa fa-edit\"></i>Modifier</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 10
        echo "    ";
        $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooSanteBundle:Patient:fichepatient.html.twig", 10)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
";
        // line 14
        if (((($context["patient"] ?? $this->getContext($context, "patient")) == null) || (($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "formule", []) == null) && ($this->getAttribute($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "societe", []), "id", []) != 15)))) {
            // line 15
            echo "    <h2 class=\"alert alert-danger\"><i class=\"fa fa-stop\"></i> Ce patient n'existe pas ou manque de formule</h2>
    ";
        } else {
            // line 17
            echo "            <div class=\"col-md-6\">
                <div class=\"card-box\"><div class=\"row\">
        <table class=\"table\">
            <tr>
                <th>Nom</th>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "nom", [])), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Postnom</th>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "postnom", [])), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "prenom", [])), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "datenaissance", []), "d-m-Y"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
            // line 38
            if (($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "sexe", []) == true)) {
                echo "M";
            } else {
                echo "F";
            }
            echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
            // line 42
            if ($this->getAttribute(($context["patient"] ?? null), "adresse", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "adresse", []), "html", null, true);
            }
            echo "</td>
            </tr>
            <tr>
                <th>Société</th>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "societe", []), "nom", []), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Type de patient</th>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "societe", []), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Numéro du Dossier</th>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "numerodossier", []), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "telephone1", []), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Téléphone 2</th>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "telephone2", []), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                ";
            // line 65
            if ($this->getAttribute($this->getAttribute(($context["patient"] ?? null), "formule", [], "any", false, true), "nom", [], "any", true, true)) {
                // line 66
                echo "                <th>Formule</th>
                <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "formule", []), "nom", []), "html", null, true);
                echo "</td>";
            }
            // line 68
            echo "            </tr>
            <tr>
                <th>Nationalité</th>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "nationalite", []), "html", null, true);
            echo "</td>
            </tr>
        </table>
            ";
            // line 75
            echo "            ";
            // line 76
            echo "                ";
            // line 77
            echo "            ";
            // line 78
            echo "                ";
            // line 79
            echo "                    ";
            // line 80
            echo "                        ";
            // line 81
            echo "                        ";
            // line 82
            echo "                        ";
            // line 83
            echo "                        ";
            // line 84
            echo "                    ";
            // line 85
            echo "                    ";
            // line 86
            echo "                        ";
            // line 87
            echo "                            ";
            // line 88
            echo "                            ";
            // line 89
            echo "                            ";
            // line 90
            echo "                            ";
            // line 91
            echo "                        ";
            // line 92
            echo "                    ";
            // line 93
            echo "                ";
            // line 94
            echo "            ";
            // line 95
            echo "            </div>
                </div></div>
        <div class=\"col-md-6\">
        <div class=\"row card-box\">
            <div class=\"col-md-6\">
                <h4>Historique du patient</h4>
                <ul class=\"list-group\">
                    ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 103
                echo "                        <li class=\"list-group-item\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_lireepisode", ["id" => $this->getAttribute($context["episode"], "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "d-m-Y"), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                </ul>

            </div>
            <div class=\"col-md-6\">
                <button class=\"btn-primary\" id=\"afficherEpiform\">Nouvel episode</button>
                <form action=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_voirpatient", ["id" => $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "id", [])]), "html", null, true);
            echo "\" method=\"post\" id=\"epiform\">

                    ";
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateepisode", []), 'errors');
            echo "
                    ";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateepisode", []), 'widget');
            echo "


                    ";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observation", []), 'errors');
            echo "
                    ";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observation", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Observation (Optionnelle)"]]);
            echo "
                    <label for=\"consulta\">Choisir une Consultation</label>
                    <select name=\"consulta\" class=\"form-control\">
                        ";
            // line 120
            if ((($this->getAttribute($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "societe", []), "id", []) != 15) && $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "formule", []))) {
                // line 121
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "formule", []), "forsoc", []));
                foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
                    // line 122
                    echo "                        ";
                    if (((($this->getAttribute($this->getAttribute($context["acte"], "acte", []), "id", []) > 1) && ($this->getAttribute($this->getAttribute($context["acte"], "acte", []), "id", []) <= 13)) && ($this->getAttribute($this->getAttribute($context["acte"], "societe", []), "id", []) == $this->getAttribute($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "societe", []), "id", [])))) {
                        // line 123
                        echo "                       <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "acte", []), "id", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "acte", []), "designationacte", []), "html", null, true);
                        echo "</option>
                        ";
                    }
                    // line 125
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "                            ";
            } else {
                // line 127
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["actess"] ?? $this->getContext($context, "actess")));
                foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
                    // line 128
                    echo "                                    ";
                    if (twig_in_filter($this->getAttribute($context["acte"], "id", []), [0 => 186, 1 => 182, 2 => 362])) {
                        // line 129
                        echo "                                        <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "actes", []), "id", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "actes", []), "designationacte", []), "html", null, true);
                        echo "</option>
                                    ";
                    }
                    // line 131
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "                            ";
            }
            // line 133
            echo "                    </select>
                    ";
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "consultation", []), 'label');
            echo "
                    ";
            // line 135
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "consultation", []), 'errors');
            echo "
                    ";
            // line 136
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "consultation", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "
                    <input type=\"submit\" value=\"creer un episode\" class=\"btn btn-success\" >
                </form>
                <script>
                    \$(function () {
                        \$('#epiform').hide();
                        \$('#afficherEpiform').on('click',function () {
                            \$('#epiform').show();
                            \$(this).hide();
                        });
                    });
                </script>

            </div>
            </div>
        </div>
        ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Patient:fichepatient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 137,  383 => 136,  379 => 135,  375 => 134,  372 => 133,  369 => 132,  363 => 131,  355 => 129,  352 => 128,  347 => 127,  344 => 126,  338 => 125,  330 => 123,  327 => 122,  322 => 121,  320 => 120,  314 => 117,  310 => 116,  304 => 113,  300 => 112,  295 => 110,  288 => 105,  277 => 103,  273 => 102,  264 => 95,  262 => 94,  260 => 93,  258 => 92,  256 => 91,  254 => 90,  252 => 89,  250 => 88,  248 => 87,  246 => 86,  244 => 85,  242 => 84,  240 => 83,  238 => 82,  236 => 81,  234 => 80,  232 => 79,  230 => 78,  228 => 77,  226 => 76,  224 => 75,  218 => 71,  213 => 68,  209 => 67,  206 => 66,  204 => 65,  198 => 62,  191 => 58,  184 => 54,  177 => 50,  170 => 46,  161 => 42,  150 => 38,  143 => 34,  136 => 30,  129 => 26,  122 => 22,  115 => 17,  111 => 15,  109 => 14,  106 => 13,  100 => 12,  92 => 10,  86 => 9,  76 => 6,  71 => 5,  65 => 4,  52 => 3,  38 => 2,  11 => 1,);
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
{% block titre %} {{ parent() }}::Fiche du Patient{% endblock %}
{% block titrepage %} {{ \"Identité du patient\"|upper }}{% endblock %}
{% block options %}
    <a href=\"{{ path('hostoo_sante_listepatients') }}\" class=\"btn btn-info\" > <i class=\"fa fa-backward\"></i> liste des patients</a>
    <a href=\"{{ path('hostoo_sante_editpatientrc',{'id':patient.id }) }}\" class=\"btn btn-warning\" > <i class=\"fa fa-edit\"></i>Modifier</a>

{% endblock %}
{% block menu %}
    {% include \"hostooSanteBundle:menus:menurc.html.twig\" %}
{% endblock %}
{% block body %}

{% if patient == null or patient.formule == null and patient.societe.id != 15 %}
    <h2 class=\"alert alert-danger\"><i class=\"fa fa-stop\"></i> Ce patient n'existe pas ou manque de formule</h2>
    {% else %}
            <div class=\"col-md-6\">
                <div class=\"card-box\"><div class=\"row\">
        <table class=\"table\">
            <tr>
                <th>Nom</th>
                <td>{{ patient.nom|upper }}</td>
            </tr>
            <tr>
                <th>Postnom</th>
                <td>{{ patient.postnom|upper }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ patient.prenom|upper }}</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>{{ patient.datenaissance|date('d-m-Y') }}</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>{% if patient.sexe == true %}M{% else %}F{% endif %}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{% if patient.adresse is defined %}{{ patient.adresse }}{% endif %}</td>
            </tr>
            <tr>
                <th>Société</th>
                <td>{{ patient.societe.nom }}</td>
            </tr>
            <tr>
                <th>Type de patient</th>
                <td>{{ patient.societe }}</td>
            </tr>
            <tr>
                <th>Numéro du Dossier</th>
                <td>{{ patient.numerodossier }}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{ patient.telephone1 }}</td>
            </tr>
            <tr>
                <th>Téléphone 2</th>
                <td>{{ patient.telephone2 }}</td>
            </tr>
            <tr>
                {% if patient.formule.nom is defined %}
                <th>Formule</th>
                <td>{{ patient.formule.nom }}</td>{% endif %}
            </tr>
            <tr>
                <th>Nationalité</th>
                <td>{{ patient.nationalite }}</td>
            </tr>
        </table>
            {#<h4>Liste des dépendants<a href=\"{{ path('hostoo_ajouter_parent',{'id':patient.id}) }}\" class=\"btn btn-info btn-rounded pull-right\" title=\"ajouter un dependant\"><i class=\"zmdi zmdi-account-add\"></i> </a></h4>#}
            {#{% if patient.dependants|length == 0 %}#}
                {#<div class=\"alert alert-danger alert-block\"><i class=\"fa fa-battery-empty\"></i>Aucune dependance</div>#}
            {#{% else %}#}
                {#<table class=\"table table-striped\">#}
                    {#<tr>#}
                        {#<th>Nom</th>#}
                        {#<th>Prénom</th>#}
                        {#<th>Parenté</th>#}
                        {#<th></th>#}
                    {#</tr>#}
                    {#{% for dep in patient.dependants %}#}
                        {#<tr>#}
                            {#<td>{{ dep.nom }}</td>#}
                            {#<td>{{ dep.prenom }}</td>#}
                            {#<td>{{ dep.parente.parente }}</td>#}
                            {#<th><a href=\"{{ path('hostoo_sante_voirpatient',{'id':dep.moi.id}) }}\" class=\"btn btn-sm btn-default\" title=\"Afficher le patient\"><i class=\"fa fa-eye\"></i></a> </th>#}
                        {#</tr>#}
                    {#{% endfor %}#}
                {#</table>#}
            {#{% endif %}#}
            </div>
                </div></div>
        <div class=\"col-md-6\">
        <div class=\"row card-box\">
            <div class=\"col-md-6\">
                <h4>Historique du patient</h4>
                <ul class=\"list-group\">
                    {% for episode in episodes %}
                        <li class=\"list-group-item\"><a href=\"{{ path('hostoo_sante_lireepisode',{'id':episode.id}) }}\">{{ episode.dateepisode|date('d-m-Y') }}</a></li>
                    {% endfor %}
                </ul>

            </div>
            <div class=\"col-md-6\">
                <button class=\"btn-primary\" id=\"afficherEpiform\">Nouvel episode</button>
                <form action=\"{{ path('hostoo_sante_voirpatient',{'id':patient.id}) }}\" method=\"post\" id=\"epiform\">

                    {{ form_errors(form.dateepisode) }}
                    {{ form_widget(form.dateepisode) }}


                    {{ form_errors(form.observation) }}
                    {{ form_widget(form.observation,{'attr':{'class':'form-control', 'placeholder':'Observation (Optionnelle)'}}) }}
                    <label for=\"consulta\">Choisir une Consultation</label>
                    <select name=\"consulta\" class=\"form-control\">
                        {% if patient.societe.id != 15 and patient.formule %}
                    {% for acte in patient.formule.forsoc %}
                        {% if acte.acte.id>1 and acte.acte.id<=13 and acte.societe.id == patient.societe.id %}
                       <option value=\"{{ acte.acte.id }}\">{{ acte.acte.designationacte }}</option>
                        {% endif %}
                    {% endfor %}
                            {% else %}
                                {% for acte in actess %}
                                    {% if acte.id in [186,182, 362] %}
                                        <option value=\"{{ acte.actes.id }}\">{{ acte.actes.designationacte }}</option>
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                    </select>
                    {{ form_label(form.consultation) }}
                    {{ form_errors(form.consultation) }}
                    {{ form_widget(form.consultation,{'attr':{'class':'form-control'}}) }}
{{ form_rest(form) }}
                    <input type=\"submit\" value=\"creer un episode\" class=\"btn btn-success\" >
                </form>
                <script>
                    \$(function () {
                        \$('#epiform').hide();
                        \$('#afficherEpiform').on('click',function () {
                            \$('#epiform').show();
                            \$(this).hide();
                        });
                    });
                </script>

            </div>
            </div>
        </div>
        {% endif %}
{% endblock %}", "hostooSanteBundle:Patient:fichepatient.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Patient/fichepatient.html.twig");
    }
}
