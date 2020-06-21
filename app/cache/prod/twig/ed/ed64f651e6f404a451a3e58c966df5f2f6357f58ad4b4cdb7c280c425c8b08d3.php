<?php

/* hostooSanteBundle:Dispatcher:prelevement.html.twig */
class __TwigTemplate_a4e5e02964694d7f02700cbcaef8ed1d9a88c81413e947be3a202eab1819f546 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Dispatcher:prelevement.html.twig"));

        // line 1
        echo "
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hostoo_sante_ajoutersv", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]), "html", null, true);
        echo "\" method=\"post\">

<div class=\"row\">
    <div class=\"form-group\">
    <div class=\"col-lg-3 col-md-6\">
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "temperature", []), 'label', ["attr" => ["class" => "form-control"], "label" => "La temperature °C"]);
        echo "<br>
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "temperature", []), 'errors');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "temperature", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>

    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "poids", []), 'label', ["label" => "Le poids Kg"]);
        echo "<br>
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "poids", []), 'errors');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "poids", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>

    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taille", []), 'label', ["label" => "La taille m"]);
        echo "<br>
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taille", []), 'errors');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taille", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>

    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tension", []), 'label', ["label" => "La tension mmHg "]);
        echo "<br>
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tension", []), 'errors');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tension", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"col-lg-3 col-md-6\">
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "frequenceCardiaque", []), 'label', ["label" => "La Frequence cardiaque bpm"]);
        echo "<br>
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "frequenceCardiaque", []), 'errors');
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "frequenceCardiaque", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>

    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "frequenceRespiratoire", []), 'label', ["label" => "La Frequence Respiratoire cpm"]);
        echo "<br>
    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "frequenceRespiratoire", []), 'errors');
        echo "
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "frequenceRespiratoire", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>

    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "glycemieDextro", []), 'label', ["label" => "Glycemie Dextro mg/dl"]);
        echo "<br>
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "glycemieDextro", []), 'errors');
        echo "
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "glycemieDextro", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>

    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saturationOxygene", []), 'label', ["label" => "Saturation d'Oxygene %"]);
        echo "<br>
    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saturationOxygene", []), 'errors');
        echo "
    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saturationOxygene", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

</div>
    <div class=\"col-lg-3 col-md-6\">

    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imc", []), 'label', ["label" => "IMC Kg/m²"]);
        echo "<br>
    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imc", []), 'errors');
        echo "
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imc", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>

    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pc", []), 'label', ["label" => "PC cm"]);
        echo "<br>
    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pc", []), 'errors');
        echo "
    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pc", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>

    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pb", []), 'label', ["label" => "PB cm"]);
        echo "<br>
    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pb", []), 'errors');
        echo "
    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pb", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>

    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pa", []), 'label', ["label" => "PA cm"]);
        echo "<br>
    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pa", []), 'errors');
        echo "
    ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pa", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>
        </div>
    <div class=\"col-lg-3 col-md-6\">

    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pp", []), 'label', ["label" => "PP cm"]);
        echo "<br>
    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pp", []), 'errors');
        echo "
    ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pp", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>

    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "wrh", []), 'label', ["label" => "WRH"]);
        echo "<br>
    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "wrh", []), 'errors');
        echo "
    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "wrh", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "<br>


    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterecolte", []), 'errors');
        echo "<br>
    ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "daterecolte", []), 'widget');
        echo "<br>
        ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget');
        echo "
        </div>
</div>
    <hr class=\"line\">
</div>
    <div class=\"row\">
        <table class=\"table table-responsive\">
            <tr>

                <th>Temp. °C</th>
                <th>Poids Kg</th>
                <th>Taille m</th>
                <th>tension mmHg</th>
                <th>FC bpm</th>
                <th>FR cpm</th>
                <th>GD mg/dl</th>
                <th>SO %</th>
                <th>IMC</th>
                <th>PC</th>
                <th>PB</th>
                <th>PA</th>
                <th>PP</th>
                <th>WRH</th>
                <th>Date</th>
            </tr>
            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "sv", []));
        foreach ($context['_seq'] as $context["_key"] => $context["Sv"]) {
            // line 98
            echo "                <tr>
                    <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "temperature", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "poids", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "taille", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "tension", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "frequenceCardiaque", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "frequenceRespiratoire", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "glycemieDextro", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "saturationOxygene", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "imc", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "pc", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "pb", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "pa", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "pp", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["Sv"], "wrh", []), "html", null, true);
            echo "</td>
                    <td> ";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Sv"], "daterecolte", []), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Sv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </table>
    </div>
    <div class=\"col-lg-12 center\">
        <br>

        </div>
    ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
</form>

    <script>
        \$('#signes_vitaux_taille').on('change',function () {
            var poids=\$('#signes_vitaux_poids').val();
            \$('#signes_vitaux_imc').val(poids/(Math.pow(\$(this).val(),2)));
        });

        \$('#signes_vitaux_pp').on('change',function () {
            var poids=\$('#signes_vitaux_pa').val();
            \$('#signes_vitaux_wrh').val(\$(this).val()/poids,2);
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Dispatcher:prelevement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 122,  330 => 116,  321 => 113,  317 => 112,  313 => 111,  309 => 110,  305 => 109,  301 => 108,  297 => 107,  293 => 106,  289 => 105,  285 => 104,  281 => 103,  277 => 102,  273 => 101,  269 => 100,  265 => 99,  262 => 98,  258 => 97,  230 => 72,  226 => 71,  222 => 70,  216 => 67,  212 => 66,  208 => 65,  203 => 63,  199 => 62,  195 => 61,  188 => 57,  184 => 56,  180 => 55,  175 => 53,  171 => 52,  167 => 51,  162 => 49,  158 => 48,  154 => 47,  149 => 45,  145 => 44,  141 => 43,  133 => 38,  129 => 37,  125 => 36,  120 => 34,  116 => 33,  112 => 32,  107 => 30,  103 => 29,  99 => 28,  94 => 26,  90 => 25,  86 => 24,  80 => 21,  76 => 20,  72 => 19,  67 => 17,  63 => 16,  59 => 15,  54 => 13,  50 => 12,  46 => 11,  41 => 9,  37 => 8,  33 => 7,  25 => 2,  22 => 1,);
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
<form action=\"{{ path('hostoo_sante_ajoutersv',{'id':episode.id }) }}\" method=\"post\">

<div class=\"row\">
    <div class=\"form-group\">
    <div class=\"col-lg-3 col-md-6\">
    {{ form_label(form.temperature,'La temperature °C',{'attr':{'class':'form-control'}}) }}<br>
    {{ form_errors(form.temperature) }}
    {{ form_widget(form.temperature,{'attr':{'class':'form-control'}}) }}<br>

    {{ form_label(form.poids,'Le poids Kg') }}<br>
    {{ form_errors(form.poids) }}
    {{ form_widget(form.poids,{'attr':{'class':'form-control'}}) }}<br>

    {{ form_label(form.taille,'La taille m') }}<br>
    {{ form_errors(form.taille) }}
    {{ form_widget(form.taille,{'attr':{'class':'form-control'}}) }}<br>

    {{ form_label(form.tension,'La tension mmHg ') }}<br>
    {{ form_errors(form.tension) }}
    {{ form_widget(form.tension,{'attr':{'class':'form-control'}}) }}
    </div>
    <div class=\"col-lg-3 col-md-6\">
    {{ form_label(form.frequenceCardiaque,'La Frequence cardiaque bpm') }}<br>
    {{ form_errors(form.frequenceCardiaque) }}
    {{ form_widget(form.frequenceCardiaque,{'attr':{'class':'form-control'}}) }}<br>

    {{ form_label(form.frequenceRespiratoire,'La Frequence Respiratoire cpm') }}<br>
    {{ form_errors(form.frequenceRespiratoire) }}
    {{ form_widget(form.frequenceRespiratoire,{'attr':{'class':'form-control'}}) }}<br>

    {{ form_label(form.glycemieDextro,'Glycemie Dextro mg/dl') }}<br>
    {{ form_errors(form.glycemieDextro) }}
    {{ form_widget(form.glycemieDextro,{'attr':{'class':'form-control'}}) }}<br>

    {{ form_label(form.saturationOxygene,'Saturation d\\'Oxygene %') }}<br>
    {{ form_errors(form.saturationOxygene) }}
    {{ form_widget(form.saturationOxygene,{'attr':{'class':'form-control'}}) }}

</div>
    <div class=\"col-lg-3 col-md-6\">

    {{ form_label(form.imc,'IMC Kg/m²') }}<br>
    {{ form_errors(form.imc) }}
    {{ form_widget(form.imc,{'attr':{'class':'form-control'}}) }}<br>

    {{ form_label(form.pc,'PC cm') }}<br>
    {{ form_errors(form.pc) }}
    {{ form_widget(form.pc,{'attr':{'class':'form-control'}}) }}<br>

    {{ form_label(form.pb,'PB cm') }}<br>
    {{ form_errors(form.pb) }}
    {{ form_widget(form.pb,{'attr':{'class':'form-control'}}) }}<br>

    {{ form_label(form.pa,'PA cm') }}<br>
    {{ form_errors(form.pa) }}
    {{ form_widget(form.pa,{'attr':{'class':'form-control'}}) }}<br>
        </div>
    <div class=\"col-lg-3 col-md-6\">

    {{ form_label(form.pp,'PP cm') }}<br>
    {{ form_errors(form.pp) }}
    {{ form_widget(form.pp,{'attr':{'class':'form-control'}}) }}<br>

    {{ form_label(form.wrh,'WRH') }}<br>
    {{ form_errors(form.wrh) }}
    {{ form_widget(form.wrh,{'attr':{'class':'form-control'}}) }}<br>


    {{ form_errors(form.daterecolte) }}<br>
    {{ form_widget(form.daterecolte) }}<br>
        {{ form_widget(form.save) }}
        </div>
</div>
    <hr class=\"line\">
</div>
    <div class=\"row\">
        <table class=\"table table-responsive\">
            <tr>

                <th>Temp. °C</th>
                <th>Poids Kg</th>
                <th>Taille m</th>
                <th>tension mmHg</th>
                <th>FC bpm</th>
                <th>FR cpm</th>
                <th>GD mg/dl</th>
                <th>SO %</th>
                <th>IMC</th>
                <th>PC</th>
                <th>PB</th>
                <th>PA</th>
                <th>PP</th>
                <th>WRH</th>
                <th>Date</th>
            </tr>
            {% for Sv in episode.sv %}
                <tr>
                    <td>{{ Sv.temperature }}</td>
                    <td>{{ Sv.poids }}</td>
                    <td>{{ Sv.taille }}</td>
                    <td>{{ Sv.tension }}</td>
                    <td> {{ Sv.frequenceCardiaque }}</td>
                    <td> {{ Sv.frequenceRespiratoire }}</td>
                    <td> {{ Sv.glycemieDextro }}</td>
                    <td> {{ Sv.saturationOxygene }}</td>
                    <td> {{ Sv.imc }}</td>
                    <td> {{ Sv.pc }}</td>
                    <td> {{ Sv.pb }}</td>
                    <td> {{ Sv.pa }}</td>
                    <td> {{ Sv.pp }}</td>
                    <td> {{ Sv.wrh }}</td>
                    <td> {{ Sv.daterecolte|date('d-m-Y H:i') }}</td>
                </tr>
            {% endfor %}
        </table>
    </div>
    <div class=\"col-lg-12 center\">
        <br>

        </div>
    {{ form_rest(form) }}
</form>

    <script>
        \$('#signes_vitaux_taille').on('change',function () {
            var poids=\$('#signes_vitaux_poids').val();
            \$('#signes_vitaux_imc').val(poids/(Math.pow(\$(this).val(),2)));
        });

        \$('#signes_vitaux_pp').on('change',function () {
            var poids=\$('#signes_vitaux_pa').val();
            \$('#signes_vitaux_wrh').val(\$(this).val()/poids,2);
        });
    </script>
", "hostooSanteBundle:Dispatcher:prelevement.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Dispatcher/prelevement.html.twig");
    }
}
