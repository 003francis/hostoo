<?php

/* facture/show.html.twig */
class __TwigTemplate_dec4ea20915366524e60886d08cd99fe01c953ba1b1519f0be5a7214bebc671d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "facture/show.html.twig", 1);
        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/show.html.twig"));

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
        $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "facture/show.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Facture</h1>
<div class=\"card-box\">
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Facture N</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Patient</th>
                ";
        // line 16
        if ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", [])) {
            // line 17
            echo "                <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", []), "patient", []), "html", null, true);
            echo "</th>
                ";
        } else {
            // line 19
            echo "                <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "html", null, true);
            echo "</th>
                ";
        }
        // line 21
        echo "            </tr>
            <tr>
                <th>Categorie</th>
                ";
        // line 24
        if ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", [])) {
            // line 25
            echo "                    <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", []), "patient", []), "societe", []), "html", null, true);
            echo "</th>
                ";
        } else {
            // line 27
            echo "                    <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "societe", []), "html", null, true);
            echo "</th>
                ";
        }
        // line 29
        echo "            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 32
        if ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "datefacture", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "datefacture", []), "d-m-Y H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>N_</th>
            <th>Designation acte</th>
            <th>Prix</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commandes", []));
        foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
            // line 47
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd"], "tarifs", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
                // line 48
                echo "        <tr>
            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "actes", []), "designationacte", []), "html", null, true);
                echo "</td>
            ";
                // line 51
                if ((($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", []), "patient", []), "societe", []), "id", []) == 15)) || ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "societe", []), "id", []) == 15)))) {
                    // line 52
                    echo "            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "prix", []), "html", null, true);
                    echo "</td>
            ";
                } else {
                    // line 54
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "prix", []), "html", null, true);
                    echo "</td>
                ";
                }
                // line 56
                echo "            <td>
                <ul class=\"list-inline list-unstyled\">
                    ";
                // line 59
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_tarif_delete", ["fact" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "id" => $this->getAttribute($context["acte"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i></a></li>
                </ul> </td>
        </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
    <table class=\"table table-striped\">
            <tr>
                <th>Total</th>
                <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "prix", []), "html", null, true);
        echo "</td>
            </tr>

        <tr>
            <th>Solde</th>
            <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "lasolde", []), "html", null, true);
        echo "</td>
        </tr>
            <tr>
                <th>Solde</th>
                <td>";
        // line 78
        if ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "solde", [])) {
            echo " OUI ";
        } else {
            echo " NON ";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Urgence</th>
                <td>";
        // line 82
        if ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "urgence", [])) {
            echo "OUI";
        } else {
            echo "NON";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Validation</th>
                <td>";
        // line 86
        if ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "validation", [])) {
            echo "OUI";
        } else {
            echo "NON";
        }
        echo "</td>
            </tr>
    </table>
</div>
    <ul class=\"list-unstyled list-inline\">
        <li>
            <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edition-facture_index");
        echo "\" class=\"btn btn-default\">Liste des factures</a>
        </li>
        <li>
            <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edition-facture_edit", ["id" => $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", [])]), "html", null, true);
        echo "\"  class=\"btn btn-warning\">Modifier</a>
        </li>
        <li>
            ";
        // line 98
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\"  class=\"btn btn-danger\">
            ";
        // line 100
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "facture/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 100,  272 => 98,  266 => 95,  260 => 92,  247 => 86,  236 => 82,  225 => 78,  218 => 74,  210 => 69,  203 => 64,  197 => 63,  178 => 59,  174 => 56,  168 => 54,  162 => 52,  160 => 51,  156 => 50,  152 => 49,  149 => 48,  131 => 47,  127 => 46,  108 => 32,  103 => 29,  97 => 27,  91 => 25,  89 => 24,  84 => 21,  78 => 19,  72 => 17,  70 => 16,  63 => 12,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
    {% include 'hostooSanteBundle:menus:menucaisse.html.twig' %}
{% endblock %}
{% block body %}
    <h1>Facture</h1>
<div class=\"card-box\">
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Facture N</th>
                <td>{{ facture.id }}</td>
            </tr>
            <tr>
                <th>Patient</th>
                {% if facture.episode %}
                <th>{{ facture.episode.patient }}</th>
                {% else %}
                <th>{{ facture.hospitalisation.patient }}</th>
                {% endif %}
            </tr>
            <tr>
                <th>Categorie</th>
                {% if facture.episode %}
                    <th>{{ facture.episode.patient.societe }}</th>
                {% else %}
                    <th>{{ facture.hospitalisation.patient.societe }}</th>
                {% endif %}
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if facture.datefacture %}{{ facture.datefacture|date('d-m-Y H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>N_</th>
            <th>Designation acte</th>
            <th>Prix</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        {% for cmd in facture.commandes %}
        {% for acte in cmd.tarifs %}
        <tr>
            <td>{{ loop.index }}</td>
            <td>{{ acte.actes.designationacte }}</td>
            {% if (facture.episode and facture.episode.patient.societe.id == 15) or (facture.hospitalisation and facture.hospitalisation.patient.societe.id == 15) %}
            <td>{{ acte.prix }}</td>
            {% else %}
                <td>{{ acte.prix }}</td>
                {% endif %}
            <td>
                <ul class=\"list-inline list-unstyled\">
                    {#<li>                        <a href=\"{{ path('facture_tarif_edit',{'fact': facture.id,'id': acte.id }) }}\" class=\"btn btn-warning\"><i class=\"fa fa-edit\"></i> </a></li>#}
                    <li><a href=\"{{ path('facture_tarif_delete',{'fact': facture.id, 'id': acte.id }) }}\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i></a></li>
                </ul> </td>
        </tr>
        {% endfor %}
        {% endfor %}
        </tbody>
    </table>
    <table class=\"table table-striped\">
            <tr>
                <th>Total</th>
                <td>{{ facture.prix }}</td>
            </tr>

        <tr>
            <th>Solde</th>
            <td>{{ facture.lasolde }}</td>
        </tr>
            <tr>
                <th>Solde</th>
                <td>{% if facture.solde %} OUI {% else %} NON {% endif %}</td>
            </tr>
            <tr>
                <th>Urgence</th>
                <td>{% if facture.urgence %}OUI{% else %}NON{% endif %}</td>
            </tr>
            <tr>
                <th>Validation</th>
                <td>{% if facture.validation %}OUI{% else %}NON{% endif %}</td>
            </tr>
    </table>
</div>
    <ul class=\"list-unstyled list-inline\">
        <li>
            <a href=\"{{ path('edition-facture_index') }}\" class=\"btn btn-default\">Liste des factures</a>
        </li>
        <li>
            <a href=\"{{ path('edition-facture_edit', { 'id': facture.id }) }}\"  class=\"btn btn-warning\">Modifier</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\"  class=\"btn btn-danger\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "facture/show.html.twig", "/var/www/html/hostoo/app/Resources/views/facture/show.html.twig");
    }
}
