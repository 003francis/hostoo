<?php

/* hostooSanteBundle:Medecin:antecedent.html.twig */
class __TwigTemplate_85dd6c5834166c78dffe840d91fb9dc9997e49ce8d1615aa60330ca690b10977 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Medecin:antecedent.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("antecedent_patient", ["pat" => ($context["pat"] ?? $this->getContext($context, "pat"))]), "html", null, true);
        echo "\" method=\"post\" id=\"antecedentform\">
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
    <div class=\"col-md-4\">
        <table class=\"table\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ants"] ?? $this->getContext($context, "ants")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ant"]) {
            // line 7
            echo "                ";
            if (($this->getAttribute($context["loop"], "index", []) <= 2)) {
                // line 8
                echo "                    <tr class=\"bg-info\">
                        <th colspan=\"2\" class=\" text-white text-center\">";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["ant"], "nom", []), "html", null, true);
                echo "</th>
                    </tr>
                    ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ant"], "antecedents", []));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 12
                    echo "                        <tr>
                            <th>";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "antecedent", []), "html", null, true);
                    echo "</th>
                            <td><input name=\"antpat[";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", []), "html", null, true);
                    echo "]\" type=\"checkbox\" ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["patants"] ?? $this->getContext($context, "patants")));
                    foreach ($context['_seq'] as $context["_key"] => $context["pat"]) {
                        if (($this->getAttribute($this->getAttribute($context["pat"], "antecedent", []), "id", []) == $this->getAttribute($context["a"], "id", []))) {
                            echo " checked ";
                        }
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "/></td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "                ";
            }
            // line 18
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </table>
    </div>
    <div class=\"col-md-4\">
    <table class=\"table\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ants"] ?? $this->getContext($context, "ants")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ant"]) {
            // line 24
            echo "            ";
            if ((($this->getAttribute($context["loop"], "index", []) > 3) && ($this->getAttribute($context["loop"], "index", []) <= 5))) {
                // line 25
                echo "            <tr class=\"bg-info\">
                <th colspan=\"2\" class=\" text-white text-center\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["ant"], "nom", []), "html", null, true);
                echo "</th>
            </tr>
            ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ant"], "antecedents", []));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 29
                    echo "        <tr>
            <th>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "antecedent", []), "html", null, true);
                    echo "</th>
            <td><input name=\"antpat[";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", []), "html", null, true);
                    echo "]\" type=\"checkbox\" ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["patants"] ?? $this->getContext($context, "patants")));
                    foreach ($context['_seq'] as $context["_key"] => $context["pat"]) {
                        if (($this->getAttribute($this->getAttribute($context["pat"], "antecedent", []), "id", []) == $this->getAttribute($context["a"], "id", []))) {
                            echo " checked ";
                        }
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "/></td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        ";
            }
            // line 35
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </table>
        </div>
            <div class=\"col-md-4\">
                <table class=\"table\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ants"] ?? $this->getContext($context, "ants")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ant"]) {
            // line 41
            echo "                        ";
            if (($this->getAttribute($context["loop"], "index", []) > 6)) {
                // line 42
                echo "                            <tr class=\"bg-info\">
                                <th colspan=\"2\" class=\" text-white text-center\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["ant"], "nom", []), "html", null, true);
                echo "</th>
                            </tr>
                            ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ant"], "antecedents", []));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 46
                    echo "                                <tr>
                                    <th>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "antecedent", []), "html", null, true);
                    echo "</th>
                                    <td><input name=\"antpat[";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", []), "html", null, true);
                    echo "]\" type=\"checkbox\"  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["patants"] ?? $this->getContext($context, "patants")));
                    foreach ($context['_seq'] as $context["_key"] => $context["pat"]) {
                        if (($this->getAttribute($this->getAttribute($context["pat"], "antecedent", []), "id", []) == $this->getAttribute($context["a"], "id", []))) {
                            echo " checked ";
                        }
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "/></td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                        ";
            }
            // line 52
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </table>
            </div>
    </div>
        <div class=\"row\">
            <input type=\"submit\" value=\"Enregistrer ses antécédents\" class=\"btn btn-info center-block\">
        </div>
    </div>
</form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Medecin:antecedent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 53,  260 => 52,  257 => 51,  236 => 48,  232 => 47,  229 => 46,  225 => 45,  220 => 43,  217 => 42,  214 => 41,  197 => 40,  191 => 36,  177 => 35,  174 => 34,  153 => 31,  149 => 30,  146 => 29,  142 => 28,  137 => 26,  134 => 25,  131 => 24,  114 => 23,  108 => 19,  94 => 18,  91 => 17,  70 => 14,  66 => 13,  63 => 12,  59 => 11,  54 => 9,  51 => 8,  48 => 7,  31 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('antecedent_patient',{'pat':pat}) }}\" method=\"post\" id=\"antecedentform\">
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
    <div class=\"col-md-4\">
        <table class=\"table\">
            {% for ant in ants %}
                {% if loop.index <= 2 %}
                    <tr class=\"bg-info\">
                        <th colspan=\"2\" class=\" text-white text-center\">{{ ant.nom }}</th>
                    </tr>
                    {% for a in ant.antecedents %}
                        <tr>
                            <th>{{ a.antecedent }}</th>
                            <td><input name=\"antpat[{{ a.id }}]\" type=\"checkbox\" {% for pat in patants  %}{% if pat.antecedent.id==a.id %} checked {% endif %} {% endfor %}/></td>
                        </tr>
                    {% endfor %}
                {% endif %}
            {% endfor %}
        </table>
    </div>
    <div class=\"col-md-4\">
    <table class=\"table\">
        {% for ant in ants %}
            {% if loop.index > 3 and loop.index <= 5 %}
            <tr class=\"bg-info\">
                <th colspan=\"2\" class=\" text-white text-center\">{{ ant.nom }}</th>
            </tr>
            {% for a in ant.antecedents %}
        <tr>
            <th>{{ a.antecedent }}</th>
            <td><input name=\"antpat[{{ a.id }}]\" type=\"checkbox\" {% for pat in patants  %}{% if pat.antecedent.id==a.id %} checked {% endif %} {% endfor %}/></td>
        </tr>
        {% endfor %}
        {% endif %}
        {% endfor %}
    </table>
        </div>
            <div class=\"col-md-4\">
                <table class=\"table\">
                    {% for ant in ants %}
                        {% if loop.index > 6 %}
                            <tr class=\"bg-info\">
                                <th colspan=\"2\" class=\" text-white text-center\">{{ ant.nom }}</th>
                            </tr>
                            {% for a in ant.antecedents %}
                                <tr>
                                    <th>{{ a.antecedent }}</th>
                                    <td><input name=\"antpat[{{ a.id }}]\" type=\"checkbox\"  {% for pat in patants  %}{% if pat.antecedent.id==a.id %} checked {% endif %} {% endfor %}/></td>
                                </tr>
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                </table>
            </div>
    </div>
        <div class=\"row\">
            <input type=\"submit\" value=\"Enregistrer ses antécédents\" class=\"btn btn-info center-block\">
        </div>
    </div>
</form>", "hostooSanteBundle:Medecin:antecedent.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Medecin/antecedent.html.twig");
    }
}
