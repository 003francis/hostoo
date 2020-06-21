<?php

/* hostooSanteBundle:Episode:episodepatient.html.twig */
class __TwigTemplate_da6076f15a3d78ade102efecbd6f5feb3321a6ec93d28fde227aafc1f6a2cfd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle::blank.html.twig", "hostooSanteBundle:Episode:episodepatient.html.twig", 1);
        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'titrepage' => [$this, 'block_titrepage'],
            'options' => [$this, 'block_options'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "hostooSanteBundle::blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Episode:episodepatient.html.twig"));

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
        $this->loadTemplate("hostooSanteBundle:menus:menurc.html.twig", "hostooSanteBundle:Episode:episodepatient.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titrepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_options($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "options"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_les_actes", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i> Imprimer</a> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h3>Episode du Patient ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "nom", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "postnom", []), "html", null, true);
        echo "  / ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "dateepisode", []), "d-m-Y"), "html", null, true);
        echo "</h3>
    ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", [])) {
            echo "<h4 class=\"text-info\">Formule : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "formule", []), "nom", []), "html", null, true);
            echo "</h4>";
        }
        // line 11
        echo "    <h4 class=\"text-info\">Type : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "patient", []), "societe", []), "html", null, true);
        echo "</h4>



   <div class=\"row\">
       <div class=\"col-lg-4\">
           <div class=\"panel panel-default\">
               <div class=\"panel-heading\">Caisse</div>
               <div class=\"panel-body\">
                   ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "factures", []));
        foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
            // line 21
            echo "                       <ul class=\"list-unstyled\">
                       ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fac"], "commandes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
                // line 23
                echo "                       ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd"], "tarifs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["tar"]) {
                    // line 24
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tar"], "actes", []), "designationacte", []), "html", null, true);
                    echo "</li>
                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tar'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                       </ul>
                        <button class=\"btn btn-danger\"> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["fac"], "prix", []), "html", null, true);
            echo "</button>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
               </div>
           </div>
       </div>

       <div class=\"col-lg-4\">
           <div class=\"panel panel-default\">
               <div class=\"panel-heading\">Medecin</div>
               <div class=\"panel-body\">
                   ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "utilisateur", []), "nom", []), "html", null, true);
        echo "
                   ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "utilisateur", []), "postnom", []), "html", null, true);
        echo "
                   ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "utilisateur", []), "Prenom", []), "html", null, true);
        echo "

               </div>
           </div>
       </div>

       <div class=\"col-lg-4\">
           <div class=\"panel panel-default\">
               <div class=\"panel-heading\">Examen</div>
               <div class=\"panel-body\">
                   <h4>Laboratoire</h4>
                       <button class=\"btn btn-danger\"> ";
        // line 52
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "ordonnancelabos", [])), "html", null, true);
        echo "</button>

                   <h4>Imagerie</h4>

                   <button class=\"btn btn-danger\"> ";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "ordonnanceimgs", [])), "html", null, true);
        echo "</button>

               </div>
           </div>
       </div>
   </div>
       <!-- panel-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Episode:episodepatient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 56,  187 => 52,  173 => 41,  169 => 40,  165 => 39,  154 => 30,  146 => 28,  143 => 27,  137 => 26,  128 => 24,  123 => 23,  119 => 22,  116 => 21,  112 => 20,  99 => 11,  93 => 10,  85 => 9,  82 => 8,  76 => 7,  62 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
{% block menu %}
    {% include \"hostooSanteBundle:menus:menurc.html.twig\" %}
{% endblock %}
{% block titrepage %}{% endblock %}
{% block options %}<a href=\"{{ path('afficher_les_actes', {'id': episode.id }) }}\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i> Imprimer</a> {% endblock %}
{% block body %}

    <h3>Episode du Patient {{ episode.patient.nom }} - {{ episode.patient.postnom }}  / {{ episode.dateepisode|date('d-m-Y') }}</h3>
    {% if episode.patient.formule %}<h4 class=\"text-info\">Formule : {{ episode.patient.formule.nom }}</h4>{% endif %}
    <h4 class=\"text-info\">Type : {{ episode.patient.societe }}</h4>



   <div class=\"row\">
       <div class=\"col-lg-4\">
           <div class=\"panel panel-default\">
               <div class=\"panel-heading\">Caisse</div>
               <div class=\"panel-body\">
                   {% for fac in episode.factures %}
                       <ul class=\"list-unstyled\">
                       {% for cmd in fac.commandes %}
                       {% for tar in cmd.tarifs %}
                            <li>{{ tar.actes.designationacte }}</li>
                       {% endfor %}
                       {% endfor %}
                       </ul>
                        <button class=\"btn btn-danger\"> {{ fac.prix }}</button>
                   {% endfor %}

               </div>
           </div>
       </div>

       <div class=\"col-lg-4\">
           <div class=\"panel panel-default\">
               <div class=\"panel-heading\">Medecin</div>
               <div class=\"panel-body\">
                   {{ episode.utilisateur.nom }}
                   {{ episode.utilisateur.postnom }}
                   {{ episode.utilisateur.Prenom }}

               </div>
           </div>
       </div>

       <div class=\"col-lg-4\">
           <div class=\"panel panel-default\">
               <div class=\"panel-heading\">Examen</div>
               <div class=\"panel-body\">
                   <h4>Laboratoire</h4>
                       <button class=\"btn btn-danger\"> {{ episode.ordonnancelabos|length }}</button>

                   <h4>Imagerie</h4>

                   <button class=\"btn btn-danger\"> {{ episode.ordonnanceimgs|length }}</button>

               </div>
           </div>
       </div>
   </div>
       <!-- panel-->
{% endblock %}", "hostooSanteBundle:Episode:episodepatient.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Episode/episodepatient.html.twig");
    }
}
