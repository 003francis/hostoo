<?php

/* hostooSanteBundle:Caisse:modele_facture.html.twig */
class __TwigTemplate_3b22d517f87b4a04b0b57f28c1ba027fac05795a7ca6577a6eb044bae006425f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'date' => [$this, 'block_date'],
            'titre' => [$this, 'block_titre'],
            'nom' => [$this, 'block_nom'],
            'age' => [$this, 'block_age'],
            'corps' => [$this, 'block_corps'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Caisse:modele_facture.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("print/style2.css"), "html", null, true);
        echo "\" />
</head>
<body>
<div class=\"container\">
<div class=\"entete\">
    <img class=\"logo\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo/logoepamed.jpg"), "html", null, true);
        echo "\"/>
    <h1 class=\"\" style=\"margin-left: 150px;\">
        CENTRE MEDICAL EDITH
    </h1>
        <p class=\"text-center\" style=\"margin-top: -15px;\">
            Av. Labue N°13 LEMBA Foire <br/>
            Tél : +243 85 28 55 554 - +243 99 99 52 335
        </p>
 </div>

<hr class=\"ligne-haute\"/>
<p class=\"text-right\">Kinshasa, Le ";
        // line 22
        $this->displayBlock('date', $context, $blocks);
        echo "</p>
<br>
<h3 class=\"text-center\">";
        // line 24
        $this->displayBlock('titre', $context, $blocks);
        echo "</h3>
    <table>
        <tr>
            <th class=\"t-35\">Nom </th><th>:</th>
            <th>";
        // line 28
        $this->displayBlock('nom', $context, $blocks);
        echo "</th>
        </tr>
        <tr>
            <th class=\"t-35\">Age </th><th>:</th>
            <th>";
        // line 32
        $this->displayBlock('age', $context, $blocks);
        echo "</th>
        </tr>
    </table>
<hr/>

";
        // line 37
        $this->displayBlock('corps', $context, $blocks);
        // line 40
        echo "</div>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"application/javascript\"></script>
<script>
    \$(function () {
      //  print();
    });
</script>
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_date($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date"));

        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "datefacture", []), "d/m/Y"), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_titre($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "FACTURE N° ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_nom($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nom"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_age($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "age"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_corps($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 38
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Caisse:modele_facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 38,  170 => 37,  158 => 32,  146 => 28,  132 => 24,  119 => 22,  107 => 5,  92 => 41,  89 => 40,  87 => 37,  79 => 32,  72 => 28,  65 => 24,  60 => 22,  46 => 11,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %} {% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('print/style2.css') }}\" />
</head>
<body>
<div class=\"container\">
<div class=\"entete\">
    <img class=\"logo\" src=\"{{ asset('assets/images/logo/logoepamed.jpg') }}\"/>
    <h1 class=\"\" style=\"margin-left: 150px;\">
        CENTRE MEDICAL EDITH
    </h1>
        <p class=\"text-center\" style=\"margin-top: -15px;\">
            Av. Labue N°13 LEMBA Foire <br/>
            Tél : +243 85 28 55 554 - +243 99 99 52 335
        </p>
 </div>

<hr class=\"ligne-haute\"/>
<p class=\"text-right\">Kinshasa, Le {% block date %}{{ facture.datefacture|date('d/m/Y') }} {% endblock %}</p>
<br>
<h3 class=\"text-center\">{% block titre %}FACTURE N° {{ facture.id }} {% endblock %}</h3>
    <table>
        <tr>
            <th class=\"t-35\">Nom </th><th>:</th>
            <th>{% block nom %} {% endblock %}</th>
        </tr>
        <tr>
            <th class=\"t-35\">Age </th><th>:</th>
            <th>{% block age %} {% endblock %}</th>
        </tr>
    </table>
<hr/>

{% block corps %}

    {% endblock %}
</div>
<script src=\"{{ asset('assets/js/jquery.min.js') }}\" type=\"application/javascript\"></script>
<script>
    \$(function () {
      //  print();
    });
</script>
</body>
</html>", "hostooSanteBundle:Caisse:modele_facture.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Caisse/modele_facture.html.twig");
    }
}
