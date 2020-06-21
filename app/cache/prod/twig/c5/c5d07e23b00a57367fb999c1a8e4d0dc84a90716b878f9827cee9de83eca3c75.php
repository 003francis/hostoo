<?php

/* hostooSanteBundle:Medecin:medecinrdv.html.twig */
class __TwigTemplate_d3be3d031f15e811930a54296e5c4af3bd385f9d8f71f37db9c4b5d35aa53052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Medecin:medecinrdv.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'javascripts' => [$this, 'block_javascripts'],
            'titre' => [$this, 'block_titre'],
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Medecin:medecinrdv.html.twig"));

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
        $this->loadTemplate("hostooSanteBundle:menus:menudoc.html.twig", "hostooSanteBundle:Medecin:medecinrdv.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("makeup/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            //\$('.dash-report-item').matchHeight();
        });
        \$(document).ready(function() {
            var sideslider = \$('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                \$(sel).toggleClass('in');
                \$(sel2).toggleClass('out');
            });
            \$('input[name=\"checkbox\"]').bootstrapSwitch('onText', 'Disponible');
            \$('input[name=\"checkbox\"]').bootstrapSwitch('offText', 'Indisponible');
            \$('input[name=\"checkbox\"]').bootstrapSwitch('onColor', 'success');
            \$('input[name=\"checkbox\"]').bootstrapSwitch('offColor', 'danger');
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_titre($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Creer un Rendez-vous ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Creer un Rendez-vous ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div class=\"col-md-3\" style=\"border-right: double 1px skyblue\">
        <h3>Formulaire</h3>
<form action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_createrdv");
        echo "\" method=\"post\" class=\"vertical col_12\">
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterdv", []), 'label', ["label" => "Date du Jour"]);
        echo "
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterdv", []), 'errors');
        echo "
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterdv", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebut", []), 'label', ["label" => "Heure de debut"]);
        echo "
    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebut", []), 'errors');
        echo "
    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebut", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFin", []), 'label', ["label" => "Heure de la fin"]);
        echo "
    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFin", []), 'errors');
        echo "
    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFin", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbrepatients", []), 'label', ["label" => "Patient à recevoir (optionnel)"]);
        echo "
    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbrepatients", []), 'errors');
        echo "
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbrepatients", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "patientsrecus", []), 'label', ["label" => "Patients Reçus"]);
        echo "
    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "patientsrecus", []), 'errors');
        echo "
    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "patientsrecus", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disponibilite", []), 'label', ["label" => "Disponibilité"]);
        echo "
    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disponibilite", []), 'errors');
        echo "
    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "disponibilite", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
</form>
    </div>
    <div class=\"col-md-9\">
        <h3>Liste des rendez-vous</h3>
    <table class=\"table\">
        <tr>
            <th>Date du rendez-vous</th>
            <th>Debut</th>
            <th>Fin</th>
            <th>Patients en Attente</th>
            <th>Disponibilite</th>
            <th></th>
        </tr>
        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 71
            echo "        <tr>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "daterdv", []), "d-m-Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "heureDebut", []), "H:m"), "html", null, true);
            echo "</td>
            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "heureFin", []), "H:m"), "html", null, true);
            echo "</td>
            ";
            // line 75
            if (($this->getAttribute($this->getAttribute($context["rdv"], "rDVspatients", []), "count", []) > 0)) {
                // line 76
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["rdv"], "rDVspatients", []));
                foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                    // line 77
                    echo "            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rdv"], "rDVspatients", []), "count", []), "html", null, true);
                    echo "</td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "                ";
            } else {
                // line 80
                echo "            <td>0</td>
                    ";
            }
            // line 82
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "disponibilite", []), "html", null, true);
            echo "</td><td>

            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </table></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Medecin:medecinrdv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 87,  262 => 82,  258 => 80,  255 => 79,  246 => 77,  241 => 76,  239 => 75,  235 => 74,  231 => 73,  227 => 72,  224 => 71,  220 => 70,  203 => 56,  197 => 53,  193 => 52,  189 => 51,  184 => 49,  180 => 48,  176 => 47,  171 => 45,  167 => 44,  163 => 43,  158 => 41,  154 => 40,  150 => 39,  145 => 37,  141 => 36,  137 => 35,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 28,  110 => 27,  98 => 26,  86 => 25,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
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
{% block javascripts %}{{ parent() }}<script src=\"{{ asset('makeup/js/bootstrap-switch.min.js') }}\"></script>
    <script>
        \$(function() {
            //\$('.dash-report-item').matchHeight();
        });
        \$(document).ready(function() {
            var sideslider = \$('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                \$(sel).toggleClass('in');
                \$(sel2).toggleClass('out');
            });
            \$('input[name=\"checkbox\"]').bootstrapSwitch('onText', 'Disponible');
            \$('input[name=\"checkbox\"]').bootstrapSwitch('offText', 'Indisponible');
            \$('input[name=\"checkbox\"]').bootstrapSwitch('onColor', 'success');
            \$('input[name=\"checkbox\"]').bootstrapSwitch('offColor', 'danger');
        });
    </script>
{% endblock %}
{% block titre %}Creer un Rendez-vous {% endblock %}
{% block titrepage %}Creer un Rendez-vous {% endblock %}
{% block body %}
    <div class=\"col-md-3\" style=\"border-right: double 1px skyblue\">
        <h3>Formulaire</h3>
<form action=\"{{ path('hostoo_sante_createrdv') }}\" method=\"post\" class=\"vertical col_12\">
    {{ form_label(form.daterdv,'Date du Jour') }}
    {{ form_errors(form.daterdv) }}
    {{ form_widget(form.daterdv,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.heureDebut,'Heure de debut') }}
    {{ form_errors(form.heureDebut) }}
    {{ form_widget(form.heureDebut,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.heureFin,'Heure de la fin') }}
    {{ form_errors(form.heureFin) }}
    {{ form_widget(form.heureFin,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.nbrepatients,'Patient à recevoir (optionnel)') }}
    {{ form_errors(form.nbrepatients) }}
    {{ form_widget(form.nbrepatients,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.patientsrecus,'Patients Reçus') }}
    {{ form_errors(form.patientsrecus) }}
    {{ form_widget(form.patientsrecus,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.disponibilite,'Disponibilité') }}
    {{ form_errors(form.disponibilite) }}
    {{ form_widget(form.disponibilite,{'attr':{'class':'form-control'}}) }}


    {{ form_rest(form) }}
</form>
    </div>
    <div class=\"col-md-9\">
        <h3>Liste des rendez-vous</h3>
    <table class=\"table\">
        <tr>
            <th>Date du rendez-vous</th>
            <th>Debut</th>
            <th>Fin</th>
            <th>Patients en Attente</th>
            <th>Disponibilite</th>
            <th></th>
        </tr>
        {% for rdv in liste %}
        <tr>
            <td>{{ rdv.daterdv|date('d-m-Y') }}</td>
            <td>{{ rdv.heureDebut|date('H:m') }}</td>
            <td>{{ rdv.heureFin|date('H:m') }}</td>
            {% if  rdv.rDVspatients.count > 0 %}
                {% for patient in rdv.rDVspatients %}
            <td>{{ rdv.rDVspatients.count }}</td>
                    {% endfor %}
                {% else %}
            <td>0</td>
                    {% endif %}
            <td>{{ rdv.disponibilite }}</td><td>

            </td>
        </tr>
        {% endfor %}
    </table></div>
{% endblock %}", "hostooSanteBundle:Medecin:medecinrdv.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Medecin/medecinrdv.html.twig");
    }
}
