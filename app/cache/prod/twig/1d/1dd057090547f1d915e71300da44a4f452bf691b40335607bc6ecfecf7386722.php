<?php

/* hostooSanteBundle:Labo:tb.html.twig */
class __TwigTemplate_f66e3a6712ed8277a3aba92d996b525ea1f016e222c217ecdd4b2b06f3b26ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Labo:tb.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Labo:tb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo "Chiffres du Mois";
        
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

        $this->loadTemplate("hostooSanteBundle:menus:menulabo.html.twig", "hostooSanteBundle:Labo:tb.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examens_labo", ["tag" => "exd"]);
        echo "\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exd"] ?? $this->getContext($context, "exd")), "total", []), "html", null, true);
        echo "</h2>
                    <h5>Examens demandés</h5>
                </div>
            </div>
            </a>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examens_labo", ["tag" => "exf"]);
        echo "\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exnr"] ?? $this->getContext($context, "exnr")), "total", []), "html", null, true);
        echo "</h2>
                    <h5>Examens non réalisés</h5>
                </div>
            </div>
            </a>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examens_labo", ["tag" => "exe"]);
        echo "\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exr"] ?? $this->getContext($context, "exr")), "total", []), "html", null, true);
        echo "</h2>
                    <h5>Examens réalisés</h5>
                </div>
            </div>
            </a>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examens_labo");
        echo "\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">";
        // line 44
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["ords"] ?? $this->getContext($context, "ords"))), "html", null, true);
        echo "</h2>
                    <h5>Bons disponibles</h5>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card-box\">

                <table class=\"table table-bordered table-striped\">
                    <caption><h3>Effectués </h3></caption>
                    <thead>
                    <tr>
                        <th>Designation Acte </th>
                        <th>Effectue</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultats"] ?? $this->getContext($context, "resultats")));
        foreach ($context['_seq'] as $context["_key"] => $context["resultat"]) {
            // line 65
            echo "                        <tr>
                            <th>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "nom", []), "html", null, true);
            echo "</th>
                            <th>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "nbreff", []), "html", null, true);
            echo "</th>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"card-box\">
                <table class=\"table table-bordered table-striped\">
                    <caption><h3>En Attente </h3></caption>
                    <thead>
                    <tr>
                        <th>Designation Acte </th>
                        <th>En Attente </th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultatsne"] ?? $this->getContext($context, "resultatsne")));
        foreach ($context['_seq'] as $context["_key"] => $context["resultat"]) {
            // line 87
            echo "                        <tr>
                            <th>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "nom", []), "html", null, true);
            echo "</th>
                            <th>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "nbreff", []), "html", null, true);
            echo "</th>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Labo:tb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 92,  211 => 89,  207 => 88,  204 => 87,  200 => 86,  182 => 70,  173 => 67,  169 => 66,  166 => 65,  162 => 64,  139 => 44,  133 => 41,  122 => 33,  116 => 30,  105 => 22,  99 => 19,  88 => 11,  82 => 8,  78 => 6,  72 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block titrepage %}Chiffres du Mois{% endblock %}
{% block options %}{% endblock %}
{% block menu %}{% include 'hostooSanteBundle:menus:menulabo.html.twig' %}{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <a href=\"{{ path('examens_labo',{'tag': 'exd'}) }}\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ exd.total }}</h2>
                    <h5>Examens demandés</h5>
                </div>
            </div>
            </a>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <a href=\"{{ path('examens_labo',{'tag': 'exf'}) }}\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ exnr.total }}</h2>
                    <h5>Examens non réalisés</h5>
                </div>
            </div>
            </a>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <a href=\"{{ path('examens_labo',{'tag': 'exe'}) }}\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ exr.total }}</h2>
                    <h5>Examens réalisés</h5>
                </div>
            </div>
            </a>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <a href=\"{{ path('examens_labo') }}\">
            <div class=\"card-box widget-user\">
                <div class=\"text-center\">
                    <h2 class=\"text-custom\" data-plugin=\"counterup\">{{ ords|length }}</h2>
                    <h5>Bons disponibles</h5>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card-box\">

                <table class=\"table table-bordered table-striped\">
                    <caption><h3>Effectués </h3></caption>
                    <thead>
                    <tr>
                        <th>Designation Acte </th>
                        <th>Effectue</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for resultat in resultats %}
                        <tr>
                            <th>{{ resultat.nom }}</th>
                            <th>{{ resultat.nbreff }}</th>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"card-box\">
                <table class=\"table table-bordered table-striped\">
                    <caption><h3>En Attente </h3></caption>
                    <thead>
                    <tr>
                        <th>Designation Acte </th>
                        <th>En Attente </th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for resultat in resultatsne %}
                        <tr>
                            <th>{{ resultat.nom }}</th>
                            <th>{{ resultat.nbreff }}</th>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "hostooSanteBundle:Labo:tb.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Labo/tb.html.twig");
    }
}
