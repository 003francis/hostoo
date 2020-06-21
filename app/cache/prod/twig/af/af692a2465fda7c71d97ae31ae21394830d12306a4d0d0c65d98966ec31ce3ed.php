<?php

/* hostooSanteBundle:Episode:episoderapportprint.html.twig */
class __TwigTemplate_dc7714663f4a6102a7c918c76b9830930764d4bc8c6aa162a8ea4f94aa35eea6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Episode:episoderapportprint.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Facture </title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\" />
    ";
        // line 8
        echo "</head>
<body>
<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_de_frequentation");
        echo "\" class=\"btn btn-info hidden-print\">Retour</a>
<div class=\"container\">
    <div class=\"entete\">
        <img class=\"logo\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/hostoo/web/assets/images/logo/logoepamed.jpg"), "html", null, true);
        echo "\"/>
        <div class=\"box-titre\">

            <p class=\"titre\">
                EDEN PARK ASSOCIATION
            </p>
            <p class=\"sous-titre\">
                Av. Nyembo N 16 Quartier SOCIMAT C/Gombe KINSHASA
        </div>
    </div>

    <hr class=\"ligne-haute\"/>
    <p class=\"text-right\">Kinshasa, Le ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</p>
    <br>
    <h3 class=\"text-center\">RAPPORT DE FREQUENTATION DES ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "conv"], "method"), "html", null, true);
        echo " DE ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "temps"], "method"), "html", null, true);
        echo "</h3>

    ";
        // line 29
        list($context["hommes"], $context["femmes"], $context["enfants"]) =         [0, 0, 0];
        // line 30
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 31
            echo "    ";
            if ((($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "sexe", []) == 1) && ((twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "datenaissance", []), "Y")) > 18))) {
                // line 32
                echo "        ";
                $context["hommes"] = (($context["hommes"] ?? $this->getContext($context, "hommes")) + 1);
                // line 33
                echo "
        ";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 34
$context["episode"], "patient", []), "sexe", []) == 0) && ((twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "datenaissance", []), "Y")) > 18))) {
                // line 35
                echo "            ";
                $context["femmes"] = (($context["femmes"] ?? $this->getContext($context, "femmes")) + 1);
                // line 36
                echo "        ";
            } else {
                // line 37
                echo "        ";
                $context["enfants"] = (($context["enfants"] ?? $this->getContext($context, "enfants")) + 1);
                // line 38
                echo "
        ";
            }
            // line 40
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        $context["actes"] = 0;
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 43
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["episode"], "factures", []));
            foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                // line 44
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fac"], "commandes", []));
                foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
                    // line 45
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd"], "tarifs", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["tar"]) {
                        // line 46
                        echo "        ";
                        $context["actes"] = (($context["actes"] ?? $this->getContext($context, "actes")) + 1);
                        // line 47
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tar'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    ";
        // line 52
        list($context["convention"], $context["prive"]) =         [0, 0];
        // line 53
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 54
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "societe", []), "id", []) == 15)) {
                // line 55
                echo "        ";
                $context["prive"] = (($context["prive"] ?? $this->getContext($context, "prive")) + 1);
                // line 56
                echo "            ";
            } else {
                // line 57
                echo "                ";
                $context["convention"] = (($context["convention"] ?? $this->getContext($context, "convention")) + 1);
                // line 58
                echo "        ";
            }
            // line 59
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    <div class=\"row\">
        <div class=\"card-box\">
        <table class=\"table table-bordered\">
            <tr>
                <th>Patients</th>
                <th>";
        // line 65
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["episodes"] ?? $this->getContext($context, "episodes"))), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <th>Conventionnés</th>
                <th>";
        // line 69
        echo twig_escape_filter($this->env, ($context["convention"] ?? $this->getContext($context, "convention")), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <th>Privés</th>
                <th>";
        // line 73
        echo twig_escape_filter($this->env, ($context["prive"] ?? $this->getContext($context, "prive")), "html", null, true);
        echo "</th>
            </tr>

            <tr>
                <th>Actes</th>
                <th>";
        // line 78
        echo twig_escape_filter($this->env, ($context["actes"] ?? $this->getContext($context, "actes")), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <th>HOMMES</th>
                <th>";
        // line 82
        echo twig_escape_filter($this->env, ($context["hommes"] ?? $this->getContext($context, "hommes")), "html", null, true);
        echo "</th>
            </tr>

            <tr>
                <th>FEMMES</th>
                <th>";
        // line 87
        echo twig_escape_filter($this->env, ($context["femmes"] ?? $this->getContext($context, "femmes")), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <th>ENFANTS</th>
                <th>";
        // line 91
        echo twig_escape_filter($this->env, ($context["enfants"] ?? $this->getContext($context, "enfants")), "html", null, true);
        echo "</th>
            </tr>
        </table>
        </div>
    </div>

    <div class=\"card-box\">
        <table class=\"table table-striped ok\">
            <thead>
            <tr>
                <th>Date</th>
                <th>AGENT</th>
                <th>PARENTE</th>
                <th>Nom du patient</th>
                <th>Nombres Actes</th>
                <th>Medécin vu</th>
                <th>Societe</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 112
            echo "                <tr>
                    <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateepisode", []), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 114
            if ($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", [])) {
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", []), "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", []), "patient", []), "postnom", [])), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "prenom", []), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 115
            if ($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "madependance", []), "parente", []), "html", null, true);
            } else {
                echo "TUTILAIRE ";
            }
            echo "</td>
                    <td>";
            // line 116
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["episode"], "patient", []), "postnom", [])), "html", null, true);
            echo "</td>
                    <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "nbActes", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "utilisateur", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "patient", []), "societe", []), "nom", []), "html", null, true);
            echo "</td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "            </tbody>
        </table>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Episode:episoderapportprint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 123,  306 => 119,  302 => 118,  298 => 117,  294 => 116,  286 => 115,  272 => 114,  268 => 113,  265 => 112,  261 => 111,  238 => 91,  231 => 87,  223 => 82,  216 => 78,  208 => 73,  201 => 69,  194 => 65,  187 => 60,  181 => 59,  178 => 58,  175 => 57,  172 => 56,  169 => 55,  166 => 54,  161 => 53,  159 => 52,  156 => 51,  150 => 50,  144 => 49,  138 => 48,  132 => 47,  129 => 46,  124 => 45,  119 => 44,  114 => 43,  109 => 42,  107 => 41,  101 => 40,  97 => 38,  94 => 37,  91 => 36,  88 => 35,  86 => 34,  83 => 33,  80 => 32,  77 => 31,  72 => 30,  70 => 29,  63 => 27,  58 => 25,  43 => 13,  37 => 10,  33 => 8,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Facture </title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" media=\"all\" />
    {#<link rel=\"stylesheet\" href=\"{{ asset('print/style2.css') }}\" media=\"print\"/>#}
</head>
<body>
<a href=\"{{ path('rapport_de_frequentation') }}\" class=\"btn btn-info hidden-print\">Retour</a>
<div class=\"container\">
    <div class=\"entete\">
        <img class=\"logo\" src=\"{{ asset('/hostoo/web/assets/images/logo/logoepamed.jpg') }}\"/>
        <div class=\"box-titre\">

            <p class=\"titre\">
                EDEN PARK ASSOCIATION
            </p>
            <p class=\"sous-titre\">
                Av. Nyembo N 16 Quartier SOCIMAT C/Gombe KINSHASA
        </div>
    </div>

    <hr class=\"ligne-haute\"/>
    <p class=\"text-right\">Kinshasa, Le {{ \"now\"|date('d/m/Y') }}</p>
    <br>
    <h3 class=\"text-center\">RAPPORT DE FREQUENTATION DES {{ app.session.get('conv') }} DE {{ app.session.get('temps') }}</h3>

    {% set hommes,femmes, enfants = 0,0,0 %}
    {% for episode in episodes %}
    {% if episode.patient.sexe == 1 and (\"now\"|date('Y') - episode.patient.datenaissance|date('Y')) > 18  %}
        {% set hommes = hommes + 1 %}

        {% elseif episode.patient.sexe == 0 and \"now\"|date('Y') - episode.patient.datenaissance|date('Y') > 18  %}
            {% set femmes = femmes + 1 %}
        {% else %}
        {% set enfants = enfants + 1 %}

        {% endif %}
    {% endfor %}
{% set actes =0 %}
    {% for episode in episodes %}
        {% for fac in episode.factures %}
        {% for cmd in fac.commandes %}
        {% for tar in cmd.tarifs %}
        {% set actes = actes + 1 %}
        {% endfor %}
        {% endfor %}
        {% endfor %}
    {% endfor %}

    {% set convention,prive=0,0 %}
    {% for episode in episodes %}
        {% if episode.patient.societe.id == 15 %}
        {% set prive = prive + 1 %}
            {% else %}
                {% set convention = convention + 1 %}
        {% endif %}
    {% endfor %}
    <div class=\"row\">
        <div class=\"card-box\">
        <table class=\"table table-bordered\">
            <tr>
                <th>Patients</th>
                <th>{{ episodes|length }}</th>
            </tr>
            <tr>
                <th>Conventionnés</th>
                <th>{{ convention }}</th>
            </tr>
            <tr>
                <th>Privés</th>
                <th>{{ prive }}</th>
            </tr>

            <tr>
                <th>Actes</th>
                <th>{{ actes }}</th>
            </tr>
            <tr>
                <th>HOMMES</th>
                <th>{{ hommes }}</th>
            </tr>

            <tr>
                <th>FEMMES</th>
                <th>{{ femmes }}</th>
            </tr>
            <tr>
                <th>ENFANTS</th>
                <th>{{ enfants }}</th>
            </tr>
        </table>
        </div>
    </div>

    <div class=\"card-box\">
        <table class=\"table table-striped ok\">
            <thead>
            <tr>
                <th>Date</th>
                <th>AGENT</th>
                <th>PARENTE</th>
                <th>Nom du patient</th>
                <th>Nombres Actes</th>
                <th>Medécin vu</th>
                <th>Societe</th>
            </tr>
            </thead>
            <tbody>
            {% for episode in episodes %}
                <tr>
                    <td>{{ episode.dateepisode|date('d-m-Y') }}</td>
                    <td>{% if episode.patient.madependance %}{{ episode.patient.madependance.patient.nom~\" \"~episode.patient.madependance.patient.postnom  }} {% else %} {{ episode.patient.nom }} {{ episode.patient.postnom }} {{ episode.patient.prenom }}{% endif %}</td>
                    <td>{% if episode.patient.madependance %}{{ episode.patient.madependance.parente }}{% else %}TUTILAIRE {% endif %}</td>
                    <td>{{ episode.patient.nom~\" \"~episode.patient.postnom }}</td>
                    <td>{{ episode.nbActes }}</td>
                    <td>{{ episode.utilisateur }}</td>
                    <td>{{ episode.patient.societe.nom }}</td>
                </tr>

            {% endfor %}
            </tbody>
        </table>
    </div>
</div>", "hostooSanteBundle:Episode:episoderapportprint.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Episode/episoderapportprint.html.twig");
    }
}
