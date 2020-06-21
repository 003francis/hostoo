<?php

/* examensphysiques/list.html.twig */
class __TwigTemplate_dd01485b42b714ff1b064738734d57e39d04a7594a254ba26b5c629024bf8859 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examensphysiques/list.html.twig"));

        // line 1
        echo "
    <h3>Les Examens Physiques</h3>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Désignation</th>
            <th>Observation</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody id=\"mesexphys\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["examensPhysiques"] ?? $this->getContext($context, "examensPhysiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["examensPhysique"]) {
            // line 15
            echo "            <tr>

                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examensphysiques_show", ["id" => $this->getAttribute($context["examensPhysique"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["examensPhysique"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["examensPhysique"], "typeexamen", []), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["examensPhysique"], "observation", []), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examensphysiques_show", ["id" => $this->getAttribute($context["examensPhysique"], "id", [])]), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examensphysiques_edit", ["id" => $this->getAttribute($context["examensPhysique"], "id", [])]), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examensPhysique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "examensphysiques/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  68 => 26,  62 => 23,  55 => 19,  51 => 18,  45 => 17,  41 => 15,  37 => 14,  22 => 1,);
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
    <h3>Les Examens Physiques</h3>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Désignation</th>
            <th>Observation</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody id=\"mesexphys\">
        {% for examensPhysique in examensPhysiques %}
            <tr>

                <td><a href=\"{{ path('examensphysiques_show', { 'id': examensPhysique.id }) }}\">{{ examensPhysique.id }}</a></td>
                <td>{{ examensPhysique.typeexamen }}</td>
                <td>{{ examensPhysique.observation }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('examensphysiques_show', { 'id': examensPhysique.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('examensphysiques_edit', { 'id': examensPhysique.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


", "examensphysiques/list.html.twig", "/var/www/html/hostoo/app/Resources/views/examensphysiques/list.html.twig");
    }
}
