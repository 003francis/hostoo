<?php

/* ordonnance/newnrs.html.twig */
class __TwigTemplate_3faef9a1f9880964bec612bffea1a84b9bcadd4c457613ef45b9e0794714847e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnance/newnrs.html.twig"));

        // line 1
        echo "
    <h4>Ordonnance creation</h4>

    <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnance_med_newnrs", ["id" => ($context["id"] ?? $this->getContext($context, "id"))]), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateordo", []), 'label');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateordo", []), 'errors');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateordo", []), 'widget');
        echo "


     ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "posologie", []), 'row');
        echo "
     <ul class=\"list-unstyled\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "posologie", []));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 13
            echo "        <li><div class=\"row\"> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "produit", []), 'widget', ["attr" => ["class" => "mypro col-sm-3"]]);
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "qte", []), 'widget', ["attr" => ["class" => "col-sm-3"]]);
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "posologie", []), 'widget', ["attr" => ["class" => "col-sm-3"]]);
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "conduite", []), 'widget', ["attr" => ["class" => "col-sm-3"]]);
            echo "</div></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "     </ul>
        <input type=\"submit\" value=\"Create\" />
    </form>
    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnance_med_index");
        echo "\">Liste des ordonnances</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnance/newnrs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  66 => 15,  54 => 13,  50 => 12,  45 => 10,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
    <h4>Ordonnance creation</h4>

    <form action=\"{{ path('ordonnance_med_newnrs',{'id':id }) }}\" method=\"post\" class=\"form-horizontal\">
        {{ form_label(form.dateordo) }}
        {{ form_errors(form.dateordo) }}
        {{ form_widget(form.dateordo) }}


     {{ form_row(form.posologie) }}
     <ul class=\"list-unstyled\">
    {% for tag in form.posologie %}
        <li><div class=\"row\"> {{ form_widget(tag.produit, {'attr':{'class':'mypro col-sm-3'}}) }}{{ form_widget(tag.qte, {'attr':{'class':'col-sm-3'}}) }}{{ form_widget(tag.posologie, {'attr':{'class':'col-sm-3'}}) }}{{ form_widget(tag.conduite, {'attr':{'class':'col-sm-3'}}) }}</div></li>
    {% endfor %}
     </ul>
        <input type=\"submit\" value=\"Create\" />
    </form>
    <ul>
        <li>
            <a href=\"{{ path('ordonnance_med_index') }}\">Liste des ordonnances</a>
        </li>
    </ul>
", "ordonnance/newnrs.html.twig", "/var/www/html/hostoo/app/Resources/views/ordonnance/newnrs.html.twig");
    }
}
