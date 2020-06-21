<?php

/* hostooSanteBundle:plugins:timepicker.style.html.twig */
class __TwigTemplate_a3e31b08c540c740747129d70bac342d6d5aa7b01adcc820d0661a6410efc0a6 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:plugins:timepicker.style.html.twig"));

        // line 9
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:plugins:timepicker.style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  22 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<link href=\"{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('assets/plugins/multiselect/css/multi-select.css') }}\"  rel=\"stylesheet\" type=\"text/css\" />
<link href=\"{{ asset('assets/plugins/select2/dist/css/select2.css') }}\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ asset('assets/plugins/select2/dist/css/select2-bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('assets/plugins/switchery/switchery.min.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}\" rel=\"stylesheet\">
#}<link href=\"{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\">", "hostooSanteBundle:plugins:timepicker.style.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/plugins/timepicker.style.html.twig");
    }
}
