<?php

/* hostooSanteBundle:Patient:enregistrermodal.html.twig */
class __TwigTemplate_d41fb57ff159885ed74ca31a19d7c07cfab288864f97c9a76ca8e95461bfe6a4 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Patient:enregistrermodal.html.twig"));

        // line 1
        echo "
<div class=\"row\">
<div class=\"col-md-10 col-md-offset-1\">

<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_savepatient");
        echo "\" method=\"post\">
    <div class=\"form-group\">
<div class=\"col-lg-6\">

    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'label');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postnom", []), 'label');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postnom", []), 'errors');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postnom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'label', ["label" => "Prénom"]);
        echo "
    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'errors');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'label');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'errors');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", []), 'label', ["label" => "Date de naissance"]);
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", []), 'errors');
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nationalite", []), 'label', ["label" => "Nationalité"]);
        echo "
        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nationalite", []), 'errors');
        echo "
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nationalite", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "



    <br>



</div>
<div class=\"col-lg-6\">

    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'label');
        echo "
    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'errors');
        echo "
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone1", []), 'label');
        echo "
    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone1", []), 'errors');
        echo "
    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone1", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone2", []), 'label');
        echo "
    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone2", []), 'errors');
        echo "
    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone2", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerodossier", []), 'label', ["label" => "Numero dossier"]);
        echo "
    ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerodossier", []), 'errors');
        echo "
    ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerodossier", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


</div>
<div class=\"col-lg-12 center\">
    ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn-primary btn-large"]]);
        echo "
    <div class=\"hidden\">";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "</div>
</div>
    </div>
</form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Patient:enregistrermodal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 64,  179 => 63,  171 => 58,  167 => 57,  163 => 56,  157 => 53,  153 => 52,  149 => 51,  144 => 49,  140 => 48,  136 => 47,  131 => 45,  127 => 44,  123 => 43,  109 => 32,  105 => 31,  101 => 30,  95 => 27,  91 => 26,  87 => 25,  82 => 23,  78 => 22,  74 => 21,  69 => 19,  65 => 18,  61 => 17,  56 => 15,  52 => 14,  48 => 13,  43 => 11,  39 => 10,  35 => 9,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"row\">
<div class=\"col-md-10 col-md-offset-1\">

<form action=\"{{ path('hostoo_sante_savepatient') }}\" method=\"post\">
    <div class=\"form-group\">
<div class=\"col-lg-6\">

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

    {{ form_label(form.datenaissance, 'Date de naissance') }}
    {{ form_errors(form.datenaissance) }}
    {{ form_widget(form.datenaissance,{'attr':{'class':'form-control'}}) }}


    {{ form_label(form.nationalite,\"Nationalité\") }}
        {{ form_errors(form.nationalite) }}
    {{ form_widget(form.nationalite,{'attr':{'class':'form-control'}}) }}



    <br>



</div>
<div class=\"col-lg-6\">

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
<div class=\"col-lg-12 center\">
    {{ form_widget(form.save,{'attr':{'class':'btn-primary btn-large'}}) }}
    <div class=\"hidden\">{{ form_rest(form) }}</div>
</div>
    </div>
</form>
        </div>
    </div>
", "hostooSanteBundle:Patient:enregistrermodal.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Patient/enregistrermodal.html.twig");
    }
}
