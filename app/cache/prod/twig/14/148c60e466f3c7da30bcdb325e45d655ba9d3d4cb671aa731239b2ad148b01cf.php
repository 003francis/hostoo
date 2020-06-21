<?php

/* hostooSanteBundle:Patient:enregistrer.html.twig */
class __TwigTemplate_8344205a03b697ce9a89c45a1f87b7bb64ac8cd0c41e711324c6eb1b6528dac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Patient:enregistrer.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'titrepage' => [$this, 'block_titrepage'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Patient:enregistrer.html.twig"));

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
        $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooSanteBundle:Patient:enregistrer.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        // line 6
        echo "    Enregistrer un nouveau patient
    ";
        
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
        echo "

<form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_savepatient");
        echo "\" method=\"post\" class=\"vertical col-lg-8 col-lg-offset-2\">
<div class=\"card-box\">
    <div class=\"row\">
<div class=\"col-md-6\">
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'label');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postnom", []), 'label');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postnom", []), 'errors');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postnom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'label', ["label" => "Prénom"]);
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'errors');
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'label');
        echo "
    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'errors');
        echo "
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
<div class=\"form-group\">
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", []), 'label', ["label" => "Date de naissance"]);
        echo "
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", []), 'errors');
        echo "

    <div class=\"input-group\">
    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", []), 'widget', ["attr" => ["autocomplete" => false]]);
        echo "
    <span class=\"input-group-addon bg-primary b-0 text-white\"><i class=\"ti-calendar\"></i></span>
</div>
</div>
    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nationalite", []), 'label', ["label" => "Nationalité"]);
        echo "
        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nationalite", []), 'errors');
        echo "
    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nationalite", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
    <div class=\"col-md-6\">

    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'label');
        echo "
    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'errors');
        echo "
    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone1", []), 'label');
        echo "
    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone1", []), 'errors');
        echo "
    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone1", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone2", []), 'label');
        echo "
    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone2", []), 'errors');
        echo "
    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone2", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


    ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerodossier", []), 'label', ["label" => "Numero dossier"]);
        echo "
    ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerodossier", []), 'errors');
        echo "
    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerodossier", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    </div>
</div>
<div class=\"col-lg-12 center\">
    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn-primary btn-large"]]);
        echo "
    <div class=\"hidden\">";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "</div>
</div>
</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 75
        $this->loadTemplate("hostooSanteBundle:plugins:timepicker.js.html.twig", "hostooSanteBundle:Patient:enregistrer.html.twig", 75)->display($context);
        // line 76
        echo "    ";
        // line 77
        echo "    <script type=\"application/javascript\">

            // Date Picker
            // \$(function () {
            //     \$('#patient_datenaissance').datepicker({
            //         autoclose: true,
            //         format: \"dd/mm/yyyy\",
            //         dayNames: [ \"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\" ],
            //         monthNames: [\"Janvier\",\"Fevrier\",\"Mars\",\"Avril\",\"Mai\",\"Juin\",\"Juillet\",\"Aout\",\"Septembre\",\"Octobre\",\"Novembre\",\"Decembre\"],
            //         todayHighlight: true
            //     });
            // });
        \$inp=\$('#motcle');
        \$inp.keyup(function(event){
            \$('#mesitems').show().html('');
            //\$(\".loading\").show();
            var motcle = \$(this).val();
            var DONNEE = 'motcle=' + motcle;
            \$.ajax({
                type: \"POST\",
                dataType:'json',
                url: Routing.generate('recherche_patient'),
                data: DONNEE,
                cache: false,
                minLength: 2,
                beforeSend: function () {
                    \$('#mesitems').find('li').remove();
                },
                success: function(data) {


                    \$.each(data.items, function(index,value) {
                        //\$(\"#ott\").text(value.libelle+'<br/>'+value.Prix);
                        var nophoto=\"../../jquery-ui/images/no_image.jpg\";
                        var lien=Routing.generate('hostoo_sante_voirpatient',{id:value.id});
                        var lien2=Routing.generate('hostoo_ajouter_parent',{id:value.id});
                        var lien3=Routing.generate('hostoo_ajouter_parent',{id:value.id});
                        \$('#mesitems').prepend('<li class=\"list-group-item\"><img src='+nophoto+' class=\"box-carre\" />'+value.nom+' '+value.postnom+' '+value.prenom+'<div class=\"btn-group pull-right\"><a href=\"'+lien2+'\" class=\"btn btn-success\">Dependants</a><a class=\"btn btn-info\" href=\"'+lien+'\">Afficher</a><a class=\"btn btn-warning\" href=\"'+lien3+'\">Episode</a><a class=\"btn btn-warning\" href=\"#\">Control</a></div> </li>');
                        //\$('#resultats').html('<div>'+value.libelle+'</div>');
                        //alert(value.libelle);
                    });

                    // \$(\".loading\").hide();
                }
            });
            return false;
        });



    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 129
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 130
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 131
        $this->loadTemplate("hostooSanteBundle:plugins:timepicker.style.html.twig", "hostooSanteBundle:Patient:enregistrer.html.twig", 131)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Patient:enregistrer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 131,  330 => 130,  324 => 129,  266 => 77,  264 => 76,  262 => 75,  257 => 74,  251 => 73,  239 => 67,  235 => 66,  227 => 61,  223 => 60,  219 => 59,  213 => 56,  209 => 55,  205 => 54,  200 => 52,  196 => 51,  192 => 50,  187 => 48,  183 => 47,  179 => 46,  172 => 42,  168 => 41,  164 => 40,  157 => 36,  151 => 33,  147 => 32,  142 => 30,  138 => 29,  134 => 28,  129 => 26,  125 => 25,  121 => 24,  116 => 22,  112 => 21,  108 => 20,  103 => 18,  99 => 17,  95 => 16,  88 => 12,  84 => 10,  78 => 9,  67 => 8,  59 => 6,  53 => 5,  45 => 3,  39 => 2,  11 => 1,);
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
{% block menu %}
    {% include \"hostooSanteBundle:menus:menurc.html.twig\" %}
{% endblock %}
{% block titrepage %}
    Enregistrer un nouveau patient
    {% endblock %}
{% block options %}{% endblock %}
{% block body %}


<form action=\"{{ path('hostoo_sante_savepatient') }}\" method=\"post\" class=\"vertical col-lg-8 col-lg-offset-2\">
<div class=\"card-box\">
    <div class=\"row\">
<div class=\"col-md-6\">
    {{ form_label(form.nom) }}
    {{ form_errors(form.nom,{'attr':{'class':'text-danger'}}) }}
    {{ form_widget(form.nom,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.postnom) }}
    {{ form_errors(form.postnom) }}
    {{ form_widget(form.postnom,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.prenom,\"Prénom\") }}
    {{ form_errors(form.prenom) }}
    {{ form_widget(form.prenom,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.sexe) }}
    {{ form_errors(form.sexe) }}
    {{ form_widget(form.sexe,{'attr':{'class':'form-control'}}) }}
<div class=\"form-group\">
    {{ form_label(form.datenaissance, 'Date de naissance') }}
    {{ form_errors(form.datenaissance) }}

    <div class=\"input-group\">
    {{ form_widget(form.datenaissance,{'attr':{'autocomplete':false}}) }}
    <span class=\"input-group-addon bg-primary b-0 text-white\"><i class=\"ti-calendar\"></i></span>
</div>
</div>
    {{ form_label(form.nationalite,\"Nationalité\") }}
        {{ form_errors(form.nationalite) }}
    {{ form_widget(form.nationalite,{'attr':{'class':'form-control'}}) }}
</div>
    <div class=\"col-md-6\">

    {{ form_label(form.adresse) }}
    {{ form_errors(form.adresse) }}
    {{ form_widget(form.adresse,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.telephone1) }}
    {{ form_errors(form.telephone1) }}
    {{ form_widget(form.telephone1,{'attr':{'class':'form-control'}}) }}

    {{ form_label(form.telephone2) }}
    {{ form_errors(form.telephone2) }}
    {{ form_widget(form.telephone2,{'attr':{'class':'form-control'}}) }}


    {{ form_label(form.numerodossier,\"Numero dossier\") }}
    {{ form_errors(form.numerodossier) }}
    {{ form_widget(form.numerodossier,{'attr':{'class':'form-control'}}) }}
    </div>
    </div>
</div>
<div class=\"col-lg-12 center\">
    {{ form_widget(form.save,{'attr':{'class':'btn-primary btn-large'}}) }}
    <div class=\"hidden\">{{ form_rest(form) }}</div>
</div>
</form>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:timepicker.js.html.twig' %}
    {#<script src=\"{{ asset('assets/js/jquery-ui.js') }}\"></script>#}
    <script type=\"application/javascript\">

            // Date Picker
            // \$(function () {
            //     \$('#patient_datenaissance').datepicker({
            //         autoclose: true,
            //         format: \"dd/mm/yyyy\",
            //         dayNames: [ \"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\" ],
            //         monthNames: [\"Janvier\",\"Fevrier\",\"Mars\",\"Avril\",\"Mai\",\"Juin\",\"Juillet\",\"Aout\",\"Septembre\",\"Octobre\",\"Novembre\",\"Decembre\"],
            //         todayHighlight: true
            //     });
            // });
        \$inp=\$('#motcle');
        \$inp.keyup(function(event){
            \$('#mesitems').show().html('');
            //\$(\".loading\").show();
            var motcle = \$(this).val();
            var DONNEE = 'motcle=' + motcle;
            \$.ajax({
                type: \"POST\",
                dataType:'json',
                url: Routing.generate('recherche_patient'),
                data: DONNEE,
                cache: false,
                minLength: 2,
                beforeSend: function () {
                    \$('#mesitems').find('li').remove();
                },
                success: function(data) {


                    \$.each(data.items, function(index,value) {
                        //\$(\"#ott\").text(value.libelle+'<br/>'+value.Prix);
                        var nophoto=\"../../jquery-ui/images/no_image.jpg\";
                        var lien=Routing.generate('hostoo_sante_voirpatient',{id:value.id});
                        var lien2=Routing.generate('hostoo_ajouter_parent',{id:value.id});
                        var lien3=Routing.generate('hostoo_ajouter_parent',{id:value.id});
                        \$('#mesitems').prepend('<li class=\"list-group-item\"><img src='+nophoto+' class=\"box-carre\" />'+value.nom+' '+value.postnom+' '+value.prenom+'<div class=\"btn-group pull-right\"><a href=\"'+lien2+'\" class=\"btn btn-success\">Dependants</a><a class=\"btn btn-info\" href=\"'+lien+'\">Afficher</a><a class=\"btn btn-warning\" href=\"'+lien3+'\">Episode</a><a class=\"btn btn-warning\" href=\"#\">Control</a></div> </li>');
                        //\$('#resultats').html('<div>'+value.libelle+'</div>');
                        //alert(value.libelle);
                    });

                    // \$(\".loading\").hide();
                }
            });
            return false;
        });



    </script>
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    {% include 'hostooSanteBundle:plugins:timepicker.style.html.twig' %}
{% endblock %}", "hostooSanteBundle:Patient:enregistrer.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Patient/enregistrer.html.twig");
    }
}
