<?php

/* hostooSanteBundle:Caisse:listecaisse.html.twig */
class __TwigTemplate_64ff73551e4c013f6b6f23a5c2da0f8bead6cb0b80d13e6268456f64bc75f1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Caisse:listecaisse.html.twig", 1);
        $this->blocks = [
            'titrepage' => [$this, 'block_titrepage'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "hostooSanteBundle::blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Caisse:listecaisse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        // line 3
        echo "    Actes Facturés
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "hostooSanteBundle:Caisse:listecaisse.html.twig", 6)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"card-box\">
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>#</th>
            <th>Date </th>
            <th>Facture</th>
            <th>Montant USD</th>
            <th>Montant CDF</th>
            <th>PERCEPTEUR</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 24
            echo "
          <tr>
              <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "id", []), "html", null, true);
            echo "</td>
              <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["acte"], "datecaisse", []), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
              <td>FAC N° ";
            // line 28
            if ($this->getAttribute($context["acte"], "facture", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["acte"], "facture", []), "id", []), "html", null, true);
                echo " ";
            }
            echo "</td>
              <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "montantusd", []), "html", null, true);
            echo "</td>
              <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["acte"], "montantcdf", []), "html", null, true);
            echo "</td>
              <td>";
            // line 31
            if ($this->getAttribute($context["acte"], "percepteur", [])) {
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["acte"], "percepteur", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["acte"], "percepteur", []), "postnom", [])), "html", null, true);
                echo " ";
            }
            echo "</td>
              <td>";
            // line 32
            if ((( !(null === $this->getAttribute($context["acte"], "percepteur", [])) && !twig_in_filter("ROLE_CAISSIER", $this->getAttribute($this->getAttribute($context["acte"], "percepteur", []), "roles", []))) || (null === $this->getAttribute($context["acte"], "percepteur", [])))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mettre_en_caisse", ["id" => $this->getAttribute($context["acte"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-default\">EnCaisser</a>";
            }
            echo " </td>
          </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-quicksearch/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(function () {
            \$('.table').dataTable({
                dom: \"Bfrtip\",
                scrollY:800,
                order:[[0,'desc']],
                buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                    extend: \"excel\",
                    className: \"btn-sm\"
                }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],
                responsive: !0
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 63
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multiselect/css/multi-select.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Caisse:listecaisse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 71,  234 => 70,  230 => 69,  226 => 68,  222 => 67,  218 => 66,  214 => 65,  210 => 64,  205 => 63,  199 => 62,  175 => 45,  171 => 44,  167 => 43,  163 => 42,  159 => 41,  154 => 40,  148 => 39,  138 => 35,  125 => 32,  118 => 31,  114 => 30,  110 => 29,  103 => 28,  99 => 27,  95 => 26,  91 => 24,  87 => 23,  71 => 9,  65 => 8,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
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
{% block titrepage %}
    Actes Facturés
    {% endblock %}
{% block menu %}
{% include 'hostooSanteBundle:menus:menucaisse.html.twig' %}
{% endblock %}
{% block body %}
    <div class=\"card-box\">
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>#</th>
            <th>Date </th>
            <th>Facture</th>
            <th>Montant USD</th>
            <th>Montant CDF</th>
            <th>PERCEPTEUR</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    {% for acte in liste %}

          <tr>
              <td>{{ acte.id }}</td>
              <td>{{ acte.datecaisse|date('d-m-Y H:i:s') }}</td>
              <td>FAC N° {% if acte.facture %}{{ acte.facture.id }} {% endif %}</td>
              <td>{{ acte.montantusd }}</td>
              <td>{{ acte.montantcdf }}</td>
              <td>{% if acte.percepteur %}{{ acte.percepteur.nom~\" \"~acte.percepteur.postnom }} {% endif %}</td>
              <td>{% if acte.percepteur is not null and 'ROLE_CAISSIER' not in acte.percepteur.roles or acte.percepteur is  null %}<a href=\"{{ path('mettre_en_caisse', {'id': acte.id }) }}\" class=\"btn btn-default\">EnCaisser</a>{% endif %} </td>
          </tr>
    {% endfor %}
    </tbody>
</table>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}\" type=\"text/javascript\"></script>
    <script>
        \$(function () {
            \$('.table').dataTable({
                dom: \"Bfrtip\",
                scrollY:800,
                order:[[0,'desc']],
                buttons: [{extend: \"copy\", className: \"btn-sm\"}, {extend: \"csv\", className: \"btn-sm\"}, {
                    extend: \"excel\",
                    className: \"btn-sm\"
                }, {extend: \"pdf\", className: \"btn-sm\"}, {extend: \"print\", className: \"btn-sm\"}],
                responsive: !0
            });
        });
    </script>

{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/plugins/jquery-datatables-editable/datatables.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/multiselect/css/multi-select.css') }}\"  rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2-bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}", "hostooSanteBundle:Caisse:listecaisse.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Caisse/listecaisse.html.twig");
    }
}
