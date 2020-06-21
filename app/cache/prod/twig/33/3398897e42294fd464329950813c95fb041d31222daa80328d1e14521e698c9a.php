<?php

/* hostooPharmacieBundle:Pharmacie:ajouterproduit.html.twig */
class __TwigTemplate_bb8f2b8d8200694635da264377c8202fb6c190a54eae63fab8f3d016198533ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooPharmacieBundle:Pharmacie:ajouterproduit.html.twig", 1);
        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'titrepage' => [$this, 'block_titrepage'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'stytesheets' => [$this, 'block_stytesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooPharmacieBundle:Pharmacie:ajouterproduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $this->displayParentBlock("titre", $context, $blocks);
        echo ":: Ajouter un Produit";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo " Ajouter un Produit";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    ";
        $this->loadTemplate("hostooUserBundle:menus:menuphar.html.twig", "hostooPharmacieBundle:Pharmacie:ajouterproduit.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hp_ajouterproduit");
        echo "\" class=\"vertical col-lg-5\" method=\"post\">
    <div class=\"row\">
        <div class=\"card-box\">
    <div class=\"col-md-6\">
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'label');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'errors');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'label');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'errors');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nature", []), 'label');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nature", []), 'errors');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nature", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "origine", []), 'label');
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "origine", []), 'errors');
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "origine", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grammage", []), 'label');
        echo "
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grammage", []), 'errors');
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grammage", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"col-md-6\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "boite", []), 'label', ["label" => "Emballage :"]);
        echo "
    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "boite", []), 'errors');
        echo "
    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "boite", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plaquette", []), 'label', ["label" => "Nbre de plaquette :"]);
        echo "
    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plaquette", []), 'errors');
        echo "
    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plaquette", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "unite", []), 'label', ["label" => "Unité :"]);
        echo "
        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "unite", []), 'errors');
        echo "
        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "unite", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "alert", []), 'label', ["label" => "Quantité d'alert :"]);
        echo "
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "alert", []), 'errors');
        echo "
    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "alert", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", []), 'label', ["label" => "Prix:"]);
        echo "
    ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", []), 'errors');
        echo "
    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateexp", []), 'label', ["label" => "Date d'expiration"]);
        echo "
    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateexp", []), 'errors');
        echo "
    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateexp", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-block"]]);
        echo "
        </div>
    </div>
    ";
        // line 61
        echo "</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_stytesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stytesheets"));

        // line 65
        echo "    ";
        $this->displayParentBlock("stytesheets", $context, $blocks);
        echo "
";
        // line 66
        $this->loadTemplate("hostooSanteBundle:plugins:timepicker.style.html.twig", "hostooPharmacieBundle:Pharmacie:ajouterproduit.html.twig", 66)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Plugins Js -->
    ";
        // line 71
        $this->loadTemplate("hostooSanteBundle:plugins:timepicker.js.html.twig", "hostooPharmacieBundle:Pharmacie:ajouterproduit.html.twig", 71)->display($context);
        // line 72
        echo "    <script>
        \$(function () {
            //\$.datepicker.setDefaults( \$.datepicker.regional[ \"fr\" ] );
            // Date Picker
            jQuery('#produit_dateexp').datepicker({
                autoclose: true,
                format: \"dd/mm/yyyy\",
                dayNames: [ \"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\" ],
                monthNames: [\"Janvier\",\"Fevrier\",\"Mars\",\"Avril\",\"Mai\",\"Juin\",\"Juillet\",\"Aout\",\"Septembre\",\"Octobre\",\"Novembre\",\"Decembre\"],
                todayHighlight: true

            });

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooPharmacieBundle:Pharmacie:ajouterproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 72,  282 => 71,  276 => 69,  270 => 68,  263 => 66,  258 => 65,  252 => 64,  243 => 61,  237 => 57,  232 => 55,  228 => 54,  224 => 53,  219 => 51,  215 => 50,  211 => 49,  205 => 46,  201 => 45,  197 => 44,  193 => 43,  189 => 42,  185 => 41,  180 => 39,  176 => 38,  172 => 37,  168 => 36,  164 => 35,  160 => 34,  154 => 31,  150 => 30,  146 => 29,  141 => 27,  137 => 26,  133 => 25,  128 => 23,  124 => 22,  120 => 21,  115 => 19,  111 => 18,  107 => 17,  102 => 15,  98 => 14,  94 => 13,  87 => 9,  84 => 8,  78 => 7,  70 => 5,  64 => 4,  52 => 3,  39 => 2,  11 => 1,);
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
{% block titre %}{{ parent() }}:: Ajouter un Produit{% endblock %}
{% block titrepage %} Ajouter un Produit{% endblock %}
{% block menu %}
    {% include 'hostooUserBundle:menus:menuphar.html.twig' %}
{% endblock %}
{% block body %}

<form action=\"{{ path('hp_ajouterproduit') }}\" class=\"vertical col-lg-5\" method=\"post\">
    <div class=\"row\">
        <div class=\"card-box\">
    <div class=\"col-md-6\">
    {{ form_label(form.nom) }}
    {{ form_errors(form.nom) }}
    {{ form_widget(form.nom,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.categorie) }}
    {{ form_errors(form.categorie) }}
    {{ form_widget(form.categorie,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.nature) }}
    {{ form_errors(form.nature) }}
    {{ form_widget(form.nature,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.origine) }}
    {{ form_errors(form.origine) }}
    {{ form_widget(form.origine,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.grammage) }}
    {{ form_errors(form.grammage) }}
    {{ form_widget(form.grammage,{'attr':{'class':'form-control'}}) }}
    </div>
    <div class=\"col-md-6\">
    {{ form_label(form.boite,'Emballage :') }}
    {{ form_errors(form.boite) }}
    {{ form_widget(form.boite,{'attr':{'class':'form-control'}}) }}
{{ form_label(form.plaquette,'Nbre de plaquette :') }}
    {{ form_errors(form.plaquette) }}
    {{ form_widget(form.plaquette,{'attr':{'class':'form-control'}}) }}

        {{ form_label(form.unite,'Unité :') }}
        {{ form_errors(form.unite) }}
        {{ form_widget(form.unite,{'attr':{'class':'form-control'}}) }}
{{ form_label(form.alert,'Quantité d\\'alert :') }}
    {{ form_errors(form.alert) }}
    {{ form_widget(form.alert,{'attr':{'class':'form-control'}}) }}


    {{ form_label(form.prix, 'Prix:') }}
    {{ form_errors(form.prix) }}
    {{ form_widget(form.prix,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.dateexp, 'Date d\\'expiration') }}
    {{ form_errors(form.dateexp) }}
    {{ form_widget(form.dateexp,{'attr':{'class':'form-control'}}) }}
    </div>
    {{ form_widget(form.save,{'attr':{'class':'btn btn-block'}}) }}
        </div>
    </div>
    {#{{ form_rest(form) }}#}
</form>

{% endblock %}
{% block stytesheets %}
    {{ parent() }}
{% include 'hostooSanteBundle:plugins:timepicker.style.html.twig' %}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <!-- Plugins Js -->
    {% include \"hostooSanteBundle:plugins:timepicker.js.html.twig\" %}
    <script>
        \$(function () {
            //\$.datepicker.setDefaults( \$.datepicker.regional[ \"fr\" ] );
            // Date Picker
            jQuery('#produit_dateexp').datepicker({
                autoclose: true,
                format: \"dd/mm/yyyy\",
                dayNames: [ \"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\" ],
                monthNames: [\"Janvier\",\"Fevrier\",\"Mars\",\"Avril\",\"Mai\",\"Juin\",\"Juillet\",\"Aout\",\"Septembre\",\"Octobre\",\"Novembre\",\"Decembre\"],
                todayHighlight: true

            });

        });
    </script>
{% endblock %}", "hostooPharmacieBundle:Pharmacie:ajouterproduit.html.twig", "/var/www/html/hostoo/src/hostoo/PharmacieBundle/Resources/views/Pharmacie/ajouterproduit.html.twig");
    }
}
