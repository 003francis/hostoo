<?php

/* hostooGestionBundle:Proprietaire:afficher.html.twig */
class __TwigTemplate_700eed5dfa09134970dd78c1e67d9d0c8a1781be09567020c6291fd0f04d8e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooGestionBundle:Proprietaire:afficher.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
            'menu' => [$this, 'block_menu'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooGestionBundle:Proprietaire:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Proprietaire";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Proprietaire";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "    ";
        $this->loadTemplate("hostooUserBundle:menus:menuadmin.html.twig", "hostooGestionBundle:Proprietaire:afficher.html.twig", 7)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"col-md-6 col-sm-12\">
    <div class=\"card-box\">
        <h4 class=\"text-custom\">SOCIETE</h4>
        <dl class=\"dl-horizontal\">
            <dt>Nom</dt>
            <dd>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proprietaire"] ?? $this->getContext($context, "proprietaire")), "nom", []), "html", null, true);
        echo "</dd>
            <dt>Email</dt>
            <dd>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proprietaire"] ?? $this->getContext($context, "proprietaire")), "email", []), "html", null, true);
        echo "</dd>
            <dt>Adresse</dt>
            <dd>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proprietaire"] ?? $this->getContext($context, "proprietaire")), "adresse", []), "html", null, true);
        echo "</dd>
            <dt>Nombre des patients</dt>
            <dd>";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["proprietaire"] ?? $this->getContext($context, "proprietaire")), "patients", [])), "html", null, true);
        echo "</dd>
            <dt>Téléphone</dt>
            <dd>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proprietaire"] ?? $this->getContext($context, "proprietaire")), "telephone", []), "html", null, true);
        echo "</dd>
            <dt></dt>
            <dd></dd>
        </dl>
    </div>
</div>
    <div class=\"col-md-6 col-sm-12\">
<div class=\"card-box\">
    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>Formule</th><th>Actes</th><th>Patients</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formtab"] ?? $this->getContext($context, "formtab")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 39
            echo "        <tr>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nom", []), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "lesactes", []), "html", null, true);
            echo "</td><td>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("hostooGestionBundle:Default:nbPatients", ["societe" => $this->getAttribute(($context["proprietaire"] ?? $this->getContext($context, "proprietaire")), "id", []), "formule" => $this->getAttribute($context["f"], "id", [])]));
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
        <ul class=\"list-unstyled list-group\">

            <li class=\"list-group-item\"></li>
        </ul>

</div>
    </div>
    <div class=\"card-box\">
        <form action=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inserer_les_actes");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"proprietaire\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proprietaire"] ?? $this->getContext($context, "proprietaire")), "id", []), "html", null, true);
        echo "\" />
            <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success pull-right\" />
        <table class=\"table table-bordered table-striped\">
            <caption><h5 class=\"text-uppercase text-center\">Parametrage des actes contenants les formules que les entreprises souscrivent</h5></caption>
            <thead>
            <tr>
                <th>Les actes médicaux</th>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formules"] ?? $this->getContext($context, "formules")));
        foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
            // line 62
            echo "                <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formule"], "nom", []), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </tr>
            </thead>
            <tbody>
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tarifs"] ?? $this->getContext($context, "tarifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tar"]) {
            // line 68
            echo "            <tr>
                <td colspan=\"";
            // line 69
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["formules"] ?? $this->getContext($context, "formules"))) + 1), "html", null, true);
            echo "\" class=\"bg-info text-white text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tar"], "nom", []), "html", null, true);
            echo "</td>
            </tr>
                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tar"], "actes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
                // line 72
                echo "                <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "designationacte", []), "html", null, true);
                echo "</td>
                ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["formules"] ?? $this->getContext($context, "formules")));
                foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
                    // line 74
                    echo "                    <td><input type=\"checkbox\" name=\"lesactes[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["formule"], "id", []), "html", null, true);
                    echo "][]\" class=\"js-switch\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
                    echo "\" ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["checkforms"] ?? $this->getContext($context, "checkforms")));
                    foreach ($context['_seq'] as $context["_key"] => $context["checkform"]) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["checkform"], "checked", [0 => $this->getAttribute($context["formule"], "id", []), 1 => $this->getAttribute($context["acte"], "id", []), 2 => $this->getAttribute(($context["proprietaire"] ?? $this->getContext($context, "proprietaire")), "id", [])], "method"), "html", null, true);
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checkform'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "/></td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formule'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "</tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </tbody>
        </table>
            <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success pull-right\" />
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 85
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/switchery/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        // line 87
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooGestionBundle:Proprietaire:afficher.html.twig", 87)->display($context);
        // line 88
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/switchery/switchery.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 95
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooGestionBundle:Proprietaire:afficher.html.twig", 95)->display($context);
        // line 96
        echo "    <script>
        \$(function () {
            //\$('#mesactes').dataTable();

            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

            elems.forEach(function(html) {
                var switchery = new Switchery(html, { size: 'small', color: '#3DDCF7' });
            });

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooGestionBundle:Proprietaire:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 96,  322 => 95,  317 => 93,  313 => 92,  308 => 91,  302 => 90,  294 => 88,  292 => 87,  288 => 86,  283 => 85,  277 => 84,  265 => 78,  259 => 77,  252 => 75,  231 => 74,  227 => 73,  222 => 72,  218 => 71,  211 => 69,  208 => 68,  204 => 67,  199 => 64,  190 => 62,  186 => 61,  176 => 54,  172 => 53,  160 => 43,  147 => 40,  144 => 39,  140 => 38,  122 => 23,  117 => 21,  112 => 19,  107 => 17,  102 => 15,  95 => 10,  89 => 9,  81 => 7,  75 => 6,  64 => 5,  52 => 4,  40 => 3,  11 => 1,);
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

{% block title %}Proprietaire{% endblock %}
{% block titrepage %}Proprietaire{% endblock %}
{% block options %}{% endblock %}
{% block menu %}
    {% include 'hostooUserBundle:menus:menuadmin.html.twig' %}
{% endblock %}
{% block body %}
<div class=\"col-md-6 col-sm-12\">
    <div class=\"card-box\">
        <h4 class=\"text-custom\">SOCIETE</h4>
        <dl class=\"dl-horizontal\">
            <dt>Nom</dt>
            <dd>{{ proprietaire.nom }}</dd>
            <dt>Email</dt>
            <dd>{{ proprietaire.email }}</dd>
            <dt>Adresse</dt>
            <dd>{{ proprietaire.adresse }}</dd>
            <dt>Nombre des patients</dt>
            <dd>{{ proprietaire.patients|length }}</dd>
            <dt>Téléphone</dt>
            <dd>{{ proprietaire.telephone }}</dd>
            <dt></dt>
            <dd></dd>
        </dl>
    </div>
</div>
    <div class=\"col-md-6 col-sm-12\">
<div class=\"card-box\">
    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>Formule</th><th>Actes</th><th>Patients</th>
        </tr>
        </thead>
        <tbody>
        {% for f in formtab %}
        <tr>
            <td>{{ f.nom }}</td><td>{{ f.lesactes }}</td><td>{{ render(controller('hostooGestionBundle:Default:nbPatients',{'societe': proprietaire.id, 'formule':f.id })) }}</td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
        <ul class=\"list-unstyled list-group\">

            <li class=\"list-group-item\"></li>
        </ul>

</div>
    </div>
    <div class=\"card-box\">
        <form action=\"{{ path('inserer_les_actes') }}\" method=\"post\">
            <input type=\"hidden\" name=\"proprietaire\" value=\"{{ proprietaire.id }}\" />
            <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success pull-right\" />
        <table class=\"table table-bordered table-striped\">
            <caption><h5 class=\"text-uppercase text-center\">Parametrage des actes contenants les formules que les entreprises souscrivent</h5></caption>
            <thead>
            <tr>
                <th>Les actes médicaux</th>
                {% for formule in formules %}
                <th>{{ formule.nom }}</th>
                    {% endfor %}
            </tr>
            </thead>
            <tbody>
            {% for tar in tarifs %}
            <tr>
                <td colspan=\"{{ formules|length + 1 }}\" class=\"bg-info text-white text-center\">{{ tar.nom }}</td>
            </tr>
                {% for acte in tar.actes %}
                <tr><td>{{ acte.designationacte }}</td>
                {% for formule in formules %}
                    <td><input type=\"checkbox\" name=\"lesactes[{{ formule.id }}][]\" class=\"js-switch\" value=\"{{ acte.id }}\" {% for checkform in checkforms %}{{ checkform.checked(formule.id,acte.id,proprietaire.id) }} {% endfor %}/></td>
                {% endfor %}</tr>
                    {% endfor %}
                {% endfor %}
            </tbody>
        </table>
            <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success pull-right\" />
        </form>
    </div>
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/plugins/switchery/switchery.min.css') }}\" rel=\"stylesheet\" />
    {% include 'hostooSanteBundle:plugins:datatable.style.html.twig' %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/switchery/switchery.min.js') }}\"></script>

    {% include 'hostooSanteBundle:plugins:datatable.scripts.html.twig' %}
    <script>
        \$(function () {
            //\$('#mesactes').dataTable();

            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

            elems.forEach(function(html) {
                var switchery = new Switchery(html, { size: 'small', color: '#3DDCF7' });
            });

        });
    </script>
{% endblock %}", "hostooGestionBundle:Proprietaire:afficher.html.twig", "/var/www/html/hostoo/src/hostoo/GestionBundle/Resources/views/Proprietaire/afficher.html.twig");
    }
}
