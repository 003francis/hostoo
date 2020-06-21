<?php

/* anamnese/new.html.twig */
class __TwigTemplate_9c921abbfe5bcad71b6ffaab1048735b2b342e37c836d9275c01fd34bbc470b7 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anamnese/new.html.twig"));

        // line 1
        echo "
    <h1>Anamnèse</h1>

   <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anamnese_new", ["id" => ($context["id"] ?? $this->getContext($context, "id"))]), "html", null, true);
        echo "\" method=\"post\" id=\"anamneseform\">
      ";
        // line 6
        echo "   ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "symptomes", []), 'label');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "symptomes", []), 'errors');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "symptomes", []), 'widget', ["attr" => ["class" => "form-control selecta selecta-multiple"]]);
        echo "

       ";
        // line 20
        echo "
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autres", []), 'label', ["label" => "Historique de la maladie"]);
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autres", []), 'errors');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autres", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "complements", []), 'label', ["label" => "Compléments"]);
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "complements", []), 'errors');
        echo "
    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "complements", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" />
       </form>

    <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anamnese_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "anamnese/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 35,  70 => 28,  66 => 27,  62 => 26,  56 => 23,  52 => 22,  48 => 21,  45 => 20,  40 => 8,  36 => 7,  31 => 6,  27 => 4,  22 => 1,);
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
    <h1>Anamnèse</h1>

   <form action=\"{{ path('anamnese_new',{'id':id}) }}\" method=\"post\" id=\"anamneseform\">
      {#  {{ form_widget(form.symptomes) }}#}
   {{ form_label(form.symptomes) }}
        {{ form_errors(form.symptomes) }}
        {{ form_widget(form.symptomes,{'attr':{'class':'form-control selecta selecta-multiple'}}) }}

       {#<label for=\"anamnese_symptomes\">Symptômes dominants</label>
       <select class=\"selecta selecta-multiple\" id=\"anamnese_symptomes\" name=\"anamnese_symptomes[]\" multiple=\"multiple\" multiple data-placeholder=\"Choisissez ...\">
           {% for sim in symptomes %}
               <optgroup label=\"{{ sim.nom }}\">
                   {% for sym in sim.symptomes %}
                   <option value=\"{{ sym.id }}\">{{ sym.nom }}</option>
                   {% endfor %}
               </optgroup>
           {% endfor %}
       </select>#}

    {{ form_label(form.autres,'Historique de la maladie') }}
    {{ form_errors(form.autres) }}
    {{ form_widget(form.autres,{'attr':{'class':'form-control'}}) }}


    {{ form_label(form.complements,'Compléments') }}
    {{ form_errors(form.complements) }}
    {{ form_widget(form.complements,{'attr':{'class':'form-control'}}) }}

        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" />
       </form>

    <ul>
        <li>
            <a href=\"{{ path('anamnese_index') }}\">Back to the list</a>
        </li>
    </ul>
", "anamnese/new.html.twig", "/var/www/html/hostoo/app/Resources/views/anamnese/new.html.twig");
    }
}
