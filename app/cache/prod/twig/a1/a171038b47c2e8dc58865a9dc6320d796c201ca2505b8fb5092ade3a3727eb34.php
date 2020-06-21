<?php

/* cloture/index.html.twig */
class __TwigTemplate_43dea6e94e107f17de4809ba2e023dc7909484223f63f0923c07398caa4b600d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "cloture/index.html.twig", 1);
        $this->blocks = [
            'titrepage' => [$this, 'block_titrepage'],
            'menu' => [$this, 'block_menu'],
            'options' => [$this, 'block_options'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Activités";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSIER")) {
            // line 5
            echo "    ";
            $this->loadTemplate("hostooSanteBundle:menus:menucaisse.html.twig", "cloture/index.html.twig", 5)->display($context);
            // line 6
            echo "
    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CAISSEPRINCIPALE")) {
            // line 8
            echo "    ";
            $this->loadTemplate("hostooGestionBundle:menus:menucaisse.html.twig", "cloture/index.html.twig", 8)->display($context);
            // line 9
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"card-box\">

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>N+</th>
                <th>Date d'ouverture</th>
                <th>USD</th>
                <th>CDF</th>
                <th>Date de fermeture</th>
                ";
        // line 24
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clotures"] ?? $this->getContext($context, "clotures")));
        foreach ($context['_seq'] as $context["_key"] => $context["cloture"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cloture_show", ["id" => $this->getAttribute($context["cloture"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cloture"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            if ($this->getAttribute($context["cloture"], "dateouverture", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cloture"], "dateouverture", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["cloture"], "montantusd", []), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["cloture"], "montantcdf", []), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["cloture"], "datefermeture", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cloture"], "datefermeture", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                ";
            // line 44
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cloture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            \$('.table').dataTable({
                language: {
                    processing: \"Traitement en cours...\",
                    search: \"Rechercher&nbsp;:\",
                    lengthMenu: \"Afficher _MENU_ &eacute;l&eacute;ments\",
                    info: \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    infoEmpty: \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                    infoFiltered: \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                    infoPostFix: \"\",
                    loadingRecords: \"Chargement en cours...\",
                    zeroRecords: \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    emptyTable: \"Aucune donnée disponible dans le tableau\",
                    paginate: {
                        first: \"Premier\",
                        previous: \"Pr&eacute;c&eacute;dent\",
                        next: \"Suivant\",
                        last: \"Dernier\"
                    },
                    aria: {
                        sortAscending: \": activer pour trier la colonne par ordre croissant\",
                        sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                    }
                },
                \"order\":[[0,'desc']]
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cloture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 51,  161 => 50,  151 => 46,  144 => 44,  138 => 33,  134 => 32,  130 => 31,  124 => 30,  118 => 29,  115 => 28,  111 => 27,  106 => 24,  94 => 13,  88 => 12,  77 => 11,  69 => 9,  66 => 8,  62 => 6,  59 => 5,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
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
{% block titrepage %}Activités{% endblock %}
{% block menu %}
    {% if is_granted('ROLE_CAISSIER') %}
    {% include \"hostooSanteBundle:menus:menucaisse.html.twig\" %}

    {% elseif is_granted('ROLE_CAISSEPRINCIPALE') %}
    {% include \"hostooGestionBundle:menus:menucaisse.html.twig\" %}
    {% endif %}
{% endblock %}
{% block options %}{% endblock %}
{% block body %}
    <div class=\"card-box\">

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>N+</th>
                <th>Date d'ouverture</th>
                <th>USD</th>
                <th>CDF</th>
                <th>Date de fermeture</th>
                {#<th>Actions</th>#}
            </tr>
        </thead>
        <tbody>
        {% for cloture in clotures %}
            <tr>
                <td><a href=\"{{ path('cloture_show', { 'id': cloture.id }) }}\">{{ cloture.id }}</a></td>
                <td>{% if cloture.dateouverture %}{{ cloture.dateouverture|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ cloture.montantusd }}</td>
                <td>{{ cloture.montantcdf }}</td>
                <td>{% if cloture.datefermeture %}{{ cloture.datefermeture|date('Y-m-d H:i:s') }}{% endif %}</td>
                {#<td>
                    <ul>
                        <li>
                            <a href=\"{{ path('cloture_show', { 'id': cloture.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('cloture_edit', { 'id': cloture.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>#}
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>
        \$(function () {
            \$('.table').dataTable({
                language: {
                    processing: \"Traitement en cours...\",
                    search: \"Rechercher&nbsp;:\",
                    lengthMenu: \"Afficher _MENU_ &eacute;l&eacute;ments\",
                    info: \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    infoEmpty: \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                    infoFiltered: \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                    infoPostFix: \"\",
                    loadingRecords: \"Chargement en cours...\",
                    zeroRecords: \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    emptyTable: \"Aucune donnée disponible dans le tableau\",
                    paginate: {
                        first: \"Premier\",
                        previous: \"Pr&eacute;c&eacute;dent\",
                        next: \"Suivant\",
                        last: \"Dernier\"
                    },
                    aria: {
                        sortAscending: \": activer pour trier la colonne par ordre croissant\",
                        sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                    }
                },
                \"order\":[[0,'desc']]
            });
        });
    </script>
{% endblock %}", "cloture/index.html.twig", "/var/www/html/hostoo/app/Resources/views/cloture/index.html.twig");
    }
}
