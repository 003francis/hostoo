<?php

/* hostooSanteBundle:TB:admin_tb.html.twig */
class __TwigTemplate_db46e072839818bbb04c986d9a6860863701bcd5e1772f2e11ef13ea9dd4a14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:TB:admin_tb.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titrepage' => [$this, 'block_titrepage'],
            'menu' => [$this, 'block_menu'],
            'options' => [$this, 'block_options'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:TB:admin_tb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tableau de bord :: Administrateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Tableau de bord :: Administrateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "    ";
        $this->loadTemplate("hostooUserBundle:menus:menuadmin.html.twig", "hostooSanteBundle:TB:admin_tb.html.twig", 6)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["patients"] ?? $this->getContext($context, "patients"))), "html", null, true);
        echo "</h2>
                    <h5>Patients</h5>
                    <div class=\"row\">
                        <div class=\"col-xs-6\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["patpriv"] ?? $this->getContext($context, "patpriv")), "html", null, true);
        echo "</div>
                        <div class=\"col-xs-6\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["patconv"] ?? $this->getContext($context, "patconv")), "html", null, true);
        echo "</div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["episodes"] ?? $this->getContext($context, "episodes"))), "html", null, true);
        echo "</h2>
                    <h5>Episodes</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 36
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["dependants"] ?? $this->getContext($context, "dependants"))), "html", null, true);
        echo "</h2>
                    <h5>Dependants</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["users"] ?? $this->getContext($context, "users"))), "html", null, true);
        echo "</h2>
                    <h5>Utilisateurs</h5>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 55
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))), "html", null, true);
        echo "</h2>
                    <h5>Produits</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 64
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["ordos"] ?? $this->getContext($context, "ordos"))), "html", null, true);
        echo "</h2>
                    <h5>Ordonnances</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 73
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["stocks"] ?? $this->getContext($context, "stocks"))), "html", null, true);
        echo "</h2>
                    <h5>Approvisionnements</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">0</h2>
                    <h5>Daily Sales</h5>
                </div>
            </div>
        </div>
    </div>
<div class=\"row\">
    <div class=\"col-lg-8 col-md-12\">
        <div class=\"card-box\">
            <div class=\"table-responsive\">
            <table class=\"table table-striped\" id=\"lessocietes\">
                <caption><h4 class=\"text-center\">Journal Log</h4></caption>
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Utilisateur</th>
                    <th>Service</th>
                    <th>Activités</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mylogs"] ?? $this->getContext($context, "mylogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["mylog"]) {
            // line 104
            echo "                    <tr>
                        <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mylog"], "eventTime", []), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["mylog"], "user", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["mylog"], "ip", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["mylog"], "description", [])), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mylog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                </tbody>
            </table>
        </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4 col-md-12\">
            <div class=\"card-box\">

                <table class=\"table table-striped\" id=\"lessocietes\">
                    <caption><h4 class=\"text-center\">Liste des sociétés</h4></caption>
                    <thead>
                    <tr>
                        <th>Société</th>
                        <th class=\"text-right\">Nombre d'Agents</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["patsoc"] ?? $this->getContext($context, "patsoc")));
        foreach ($context['_seq'] as $context["_key"] => $context["soc"]) {
            // line 130
            echo "                        <tr>
                            <th class=\"\">";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["soc"], "nom", []), "html", null, true);
            echo "</th><td class=\"text-right text-danger\"><i class=\"badge badge-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["soc"], "patients", []), "count", []), "html", null, true);
            echo "</i></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['soc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box\">

                <table class=\"table table-striped\" id=\"lesformules\">
                    <caption><h4 class=\"text-center\">Liste des Formules des conventionnés</h4></caption>
                    <thead>
                    <tr>
                        <th>Formule</th>
                        <th class=\"text-right\">Nombre</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["patfor"] ?? $this->getContext($context, "patfor")));
        foreach ($context['_seq'] as $context["_key"] => $context["soc"]) {
            // line 151
            echo "                        <tr>
                            <th class=\"\">";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["soc"], "nom", []), "html", null, true);
            echo " </th><td class=\"text-right text-danger\"><i class=\"badge badge-info\"> ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["soc"], "patients", [])), "html", null, true);
            echo "</i></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['soc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 161
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 163
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.scripts.html.twig", "hostooSanteBundle:TB:admin_tb.html.twig", 163)->display($context);
        // line 164
        echo "    <script>
        \$(function () {
            \$('.table').dataTable();

            //TableManageButtons.init();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 172
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 173
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 174
        $this->loadTemplate("hostooSanteBundle:plugins:datatable.style.html.twig", "hostooSanteBundle:TB:admin_tb.html.twig", 174)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:TB:admin_tb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 174,  364 => 173,  358 => 172,  344 => 164,  342 => 163,  337 => 162,  331 => 161,  319 => 155,  308 => 152,  305 => 151,  301 => 150,  283 => 134,  272 => 131,  269 => 130,  265 => 129,  245 => 111,  236 => 108,  232 => 107,  228 => 106,  224 => 105,  221 => 104,  217 => 103,  184 => 73,  172 => 64,  160 => 55,  147 => 45,  135 => 36,  123 => 27,  111 => 18,  107 => 17,  101 => 14,  95 => 10,  89 => 9,  78 => 8,  70 => 6,  64 => 5,  52 => 4,  40 => 3,  11 => 1,);
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

{% block title %}Tableau de bord :: Administrateur{% endblock %}
{% block titrepage %}Tableau de bord :: Administrateur{% endblock %}
{% block menu %}
    {% include \"hostooUserBundle:menus:menuadmin.html.twig\" %}
{% endblock %}
{% block options %}{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ patients|length }}</h2>
                    <h5>Patients</h5>
                    <div class=\"row\">
                        <div class=\"col-xs-6\">{{ patpriv }}</div>
                        <div class=\"col-xs-6\">{{ patconv }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ episodes|length }}</h2>
                    <h5>Episodes</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ dependants|length }}</h2>
                    <h5>Dependants</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ users|length }}</h2>
                    <h5>Utilisateurs</h5>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ produits|length }}</h2>
                    <h5>Produits</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ ordos|length }}</h2>
                    <h5>Ordonnances</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ stocks|length }}</h2>
                    <h5>Approvisionnements</h5>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">0</h2>
                    <h5>Daily Sales</h5>
                </div>
            </div>
        </div>
    </div>
<div class=\"row\">
    <div class=\"col-lg-8 col-md-12\">
        <div class=\"card-box\">
            <div class=\"table-responsive\">
            <table class=\"table table-striped\" id=\"lessocietes\">
                <caption><h4 class=\"text-center\">Journal Log</h4></caption>
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Utilisateur</th>
                    <th>Service</th>
                    <th>Activités</th>
                </tr>
                </thead>
                <tbody>
                {% for mylog in mylogs %}
                    <tr>
                        <td>{{ mylog.eventTime|date('d-m-Y H:i:s') }}</td>
                        <td>{{ mylog.user }}</td>
                        <td>{{ mylog.ip }}</td>
                        <td>{{ mylog.description|trans }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-4 col-md-12\">
            <div class=\"card-box\">

                <table class=\"table table-striped\" id=\"lessocietes\">
                    <caption><h4 class=\"text-center\">Liste des sociétés</h4></caption>
                    <thead>
                    <tr>
                        <th>Société</th>
                        <th class=\"text-right\">Nombre d'Agents</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for soc in patsoc %}
                        <tr>
                            <th class=\"\">{{ soc.nom }}</th><td class=\"text-right text-danger\"><i class=\"badge badge-success\">{{ soc.patients.count }}</i></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col-lg-6 col-md-12\">
            <div class=\"card-box\">

                <table class=\"table table-striped\" id=\"lesformules\">
                    <caption><h4 class=\"text-center\">Liste des Formules des conventionnés</h4></caption>
                    <thead>
                    <tr>
                        <th>Formule</th>
                        <th class=\"text-right\">Nombre</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for soc in patfor %}
                        <tr>
                            <th class=\"\">{{ soc.nom }} </th><td class=\"text-right text-danger\"><i class=\"badge badge-info\"> {{ soc.patients|length }}</i></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:datatable.scripts.html.twig' %}
    <script>
        \$(function () {
            \$('.table').dataTable();

            //TableManageButtons.init();
        });
    </script>
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:datatable.style.html.twig' %}
{% endblock %}
", "hostooSanteBundle:TB:admin_tb.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/TB/admin_tb.html.twig");
    }
}
