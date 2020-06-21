<?php

/* hostooSanteBundle:Caisse:facture.html.twig */
class __TwigTemplate_87ab22cd30ec266de8c27c0d72c8a4256abb4456b93041315375771594ecf89d extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooSanteBundle:Caisse:facture.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("cme/print.css"), "html", null, true);
        echo "\">
\t<title>Facture CLINIQUE SAINT RAPHAEL DRS MUNTU</title>
\t<style>
\t\t.wrapper-facture{
\t\t\tborder-style: double; border-width: 1px;height:1153px; width: 800px;padding-right: 6px;padding-left: 6px;
\t\t}
\t\t.facture-header{
\t\t\tborder-style: double;
\t\t\tborder-width: 1px;
\t\t\theight:200px;
\t\t\twidth: 785px;
\t\t\tmargin-left:5px;
\t\t\tfont-size: 13px;

\t\t}
\t\t.facture-header-text{
\t\t\tborder-style: double; border-width: 1px;
\t\t\tborder-right-width: 0px;
\t\t\theight:198px; width: 510px;float:left;\"
\t\t\tpadding-left: 12px;
\t\t}
\t\t.patient-id{
\t\t\tborder-style: double; border-width: 1px;height:158px; width: 260px; float: right;padding-top: 40px;padding-left: 6px;\"
\t\t}
\t\t.table-libele{
\t\t\tborder-width: 1px;
\t\t\twidth: 785px;
\t\t\theight: 560px;
\t\t\tfloat:left;
\t\t\tmargin-top:20px;
\t\t}

\t\t.colnum{
\t\t\twidth: 100px;
\t\t\tborder-style: double;
\t\t\tborder-width: 1px;
\t\t\tmargin:0px;

\t\t}

\t\t.collibele{
\t\t\twidth: 490px;
\t\t\tborder-style: double;
\t\t\tborder-width: 1px;
\t\t\tmargin:0px;

\t\t}
\t\t.colprixunit{
\t\t\twidth: 130px;
\t\t\tborder-style: double;
\t\t\tborder-width: 1px;
\t\t\tmargin:0px;

\t\t}
\t\t.colmontant{
\t\t\twidth: 150px;
\t\t\tborder-style: double;
\t\t\tborder-width: 1px;
\t\t\tmargin:0px;
\t\t}
\t\t.coltotal{
\t\t\tfont-size: 16px; font-weight: bolder;
\t\t\theight: 20px;
\t\t}
\t\tth{
\t\t\tfont-size: 16px; font-weight: bolder;
\t\t\theight: 20px;

\t\t}
\t\ttr{
\t\t\tborder-style: double;
\t\t\tborder-width: 0px;

\t\t}
\t\ttd{
\t\t\tvertical-align: text-top;
\t\t\theight: auto;

\t\t}
\t\t.trtotal {
\t\t\theight: 20px;
\t\t\tfont-size: 16px; font-weight: bolder;
\t\t\theight: 20px;
\t\t}
\t\t.logo-header {
\t\t\theight:150px; width: auto;
\t\t}
\t\t.logo-footer {
\t\t\theight:60px; width: auto;
\t\t}
\t\t.table-footer {
\t\t\twidth: 780px;
\t\t\tborder-style: double;
\t\t\tborder-width: 0px;
\t\t}

\t\t.num-facture {
\t\t\tborder-style: double; border-width: 0px;height:auto; width:200px;
\t\t\tfloat: right;
\t\t\tmargin-top:20px;
\t\t\tmargin-left: 20%;margin-bottom: 10px;
\t\t\tfont-size: 20px; font-weight: bolder;
\t\t\tvertical-align: center;
\t\t}
\t\t.date-facture-header {
\t\t\tborder-style: double; border-width: 0px;height:auto; width:200px;align-items: right; margin-left: 20%;
\t\t}
\t</style>
</head>
<body>
<div class=\"wrapper-facture\">
\t<table>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<a onclick=\"history.back()\" href=\"#\">
\t\t\t\t\t<img class=\"logo-header\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("muntu/muntu.gif"), "html", null, true);
        echo "\" ></td>
\t\t\t<td> ";
        // line 123
        if ((($context["facture"] ?? $this->getContext($context, "facture")) != null)) {
            // line 124
            echo "\t\t\t\t<div class=\"num-facture\"> Facture N° ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"date-facture-header\"> ";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "datefacture", []), "d/m/Y"), "html", null, true);
            echo "0</div>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<div>

\t</div>
\t<div class=\"facture-header\">
\t\t<div class=\"facture-header-text\" >
\t\t\t<p class=\"text-center\" style=\"margin-top:0px;\">
\t\t\t<h3 class=\"title\">
\t\t\t\tCLINIQUE SAINT RAPHAEL DRS MUNTU </h3>
\t\t\tNIF:A1721574U, RCCM: 17-B-01443, Id.: 01-82-N25975F <br>
\t\t\tNUMERO DE COMPTE RAWBANK: 35101 01063056501 50<br>
\t\t\tTél: +243 898 416 626<br>
\t\t\tE-mail: infos@cliniquesaintraphaeldrsmuntu.com<br>
\t\t\tSite web: www.cliniquesaintraphaeldrsmuntu.com <br>
\t\t\tAv. Kasa-Vubu, n°5151 (cfr. Carrefour des jeunes), C/Kalamu, Kinshasa-RDC<br>
\t\t\t</p>
\t\t</div>
\t\t<div class=\"patient-id\">
\t\t\t<table>
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"t-35\">Nom </th>
\t\t\t\t\t<th>:</th>
\t\t\t\t\t";
            // line 151
            if ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", [])) {
                // line 152
                echo "\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", []), "patient", []), "nom", [])), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", []), "patient", []), "postnom", [])), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "episode", []), "patient", []), "prenom", [])), "html", null, true);
                echo "</td>
\t\t\t\t\t";
            } else {
                // line 154
                echo "\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "nom", [])), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "postnom", [])), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "hospitalisation", []), "patient", []), "prenom", [])), "html", null, true);
                echo "</td>
\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t<table class=\"table-libele\">

\t\t\t<tr>
\t\t\t\t<th class=\"colnum\">N°</th>
\t\t\t\t<th class=\"collibele\">Libele</th>
\t\t\t\t<th class=\"colprixunit\">PU USD</th>
\t\t\t\t<th class=\"colmontant\">Montant USD</th>
\t\t\t</tr>

            ";
            // line 170
            if ((twig_length_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commandes", [])) > 0)) {
                // line 171
                echo "\t\t\t\t<p class=\"label label-danger\"><strong>Actes Medicaux</strong></p>
            ";
            }
            // line 173
            echo "


\t\t\t\t";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "commandes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
                // line 177
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cmd"], "tarifs", []));
                foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
                    // line 178
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"colnum\"></td>
\t\t\t\t\t\t\t<td class=\"collibele\">";
                    // line 180
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarif"], "actes", []), "designationacte", []), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"colprixunit\">";
                    // line 181
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "prix", []), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"colmontant\">";
                    // line 182
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "prix", []), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "\t\t\t\t\t<tr class=\"trtotal\">
\t\t\t\t\t\t<td colspan = \"2\"></td>

\t\t\t\t\t\t<td class=\"colprixunit\">Total USD </td>
\t\t\t\t\t\t<td class=\"colmontant\">";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "prix", []), "html", null, true);
            echo " USD ( ";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "prix", []) * $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "taux"], "method")), "html", null, true);
            echo " FC)</td>

\t\t\t\t\t</tr>
\t\t</table>


\t\t\t<table class=\"table-footer\">
\t\t\t\t<tr>
\t\t\t\t\t<td style=\" border-style: double; border-width: 0px;\"></td>
\t\t\t\t\t<td>Fait à Kinshasa, le ";
            // line 199
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "datefacture", []), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td>Visa de la clinique</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><img class=\"logo-footer\" src=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("muntu/muntu.gif"), "html", null, true);
            echo "\" ></td>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan = \"2\" style=\"text-align: center;border-style: double; border-width: 0px; align-content: center\"> MERCI POUR VOTRE CONFIANCE!</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</table>
\t\t</div>
    ";
        }
        // line 216
        echo "</div>
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"application/javascript\"></script>
<script>
    \$(function () {
        print();
    });
</script>
</div>
</body>
</html>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooSanteBundle:Caisse:facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 217,  316 => 216,  303 => 206,  293 => 199,  279 => 190,  273 => 186,  267 => 185,  258 => 182,  254 => 181,  250 => 180,  246 => 178,  241 => 177,  237 => 176,  232 => 173,  228 => 171,  226 => 170,  210 => 156,  200 => 154,  190 => 152,  188 => 151,  159 => 125,  154 => 124,  152 => 123,  148 => 122,  30 => 7,  22 => 1,);
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
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<link rel=\"stylesheet\" href=\"{{ asset('cme/print.css') }}\">
\t<title>Facture CLINIQUE SAINT RAPHAEL DRS MUNTU</title>
\t<style>
\t\t.wrapper-facture{
\t\t\tborder-style: double; border-width: 1px;height:1153px; width: 800px;padding-right: 6px;padding-left: 6px;
\t\t}
\t\t.facture-header{
\t\t\tborder-style: double;
\t\t\tborder-width: 1px;
\t\t\theight:200px;
\t\t\twidth: 785px;
\t\t\tmargin-left:5px;
\t\t\tfont-size: 13px;

\t\t}
\t\t.facture-header-text{
\t\t\tborder-style: double; border-width: 1px;
\t\t\tborder-right-width: 0px;
\t\t\theight:198px; width: 510px;float:left;\"
\t\t\tpadding-left: 12px;
\t\t}
\t\t.patient-id{
\t\t\tborder-style: double; border-width: 1px;height:158px; width: 260px; float: right;padding-top: 40px;padding-left: 6px;\"
\t\t}
\t\t.table-libele{
\t\t\tborder-width: 1px;
\t\t\twidth: 785px;
\t\t\theight: 560px;
\t\t\tfloat:left;
\t\t\tmargin-top:20px;
\t\t}

\t\t.colnum{
\t\t\twidth: 100px;
\t\t\tborder-style: double;
\t\t\tborder-width: 1px;
\t\t\tmargin:0px;

\t\t}

\t\t.collibele{
\t\t\twidth: 490px;
\t\t\tborder-style: double;
\t\t\tborder-width: 1px;
\t\t\tmargin:0px;

\t\t}
\t\t.colprixunit{
\t\t\twidth: 130px;
\t\t\tborder-style: double;
\t\t\tborder-width: 1px;
\t\t\tmargin:0px;

\t\t}
\t\t.colmontant{
\t\t\twidth: 150px;
\t\t\tborder-style: double;
\t\t\tborder-width: 1px;
\t\t\tmargin:0px;
\t\t}
\t\t.coltotal{
\t\t\tfont-size: 16px; font-weight: bolder;
\t\t\theight: 20px;
\t\t}
\t\tth{
\t\t\tfont-size: 16px; font-weight: bolder;
\t\t\theight: 20px;

\t\t}
\t\ttr{
\t\t\tborder-style: double;
\t\t\tborder-width: 0px;

\t\t}
\t\ttd{
\t\t\tvertical-align: text-top;
\t\t\theight: auto;

\t\t}
\t\t.trtotal {
\t\t\theight: 20px;
\t\t\tfont-size: 16px; font-weight: bolder;
\t\t\theight: 20px;
\t\t}
\t\t.logo-header {
\t\t\theight:150px; width: auto;
\t\t}
\t\t.logo-footer {
\t\t\theight:60px; width: auto;
\t\t}
\t\t.table-footer {
\t\t\twidth: 780px;
\t\t\tborder-style: double;
\t\t\tborder-width: 0px;
\t\t}

\t\t.num-facture {
\t\t\tborder-style: double; border-width: 0px;height:auto; width:200px;
\t\t\tfloat: right;
\t\t\tmargin-top:20px;
\t\t\tmargin-left: 20%;margin-bottom: 10px;
\t\t\tfont-size: 20px; font-weight: bolder;
\t\t\tvertical-align: center;
\t\t}
\t\t.date-facture-header {
\t\t\tborder-style: double; border-width: 0px;height:auto; width:200px;align-items: right; margin-left: 20%;
\t\t}
\t</style>
</head>
<body>
<div class=\"wrapper-facture\">
\t<table>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<a onclick=\"history.back()\" href=\"#\">
\t\t\t\t\t<img class=\"logo-header\" src=\"{{ asset('muntu/muntu.gif') }}\" ></td>
\t\t\t<td> {% if facture != null %}
\t\t\t\t<div class=\"num-facture\"> Facture N° {{ facture.id }}</div>
\t\t\t\t<div class=\"date-facture-header\"> {{ facture.datefacture|date('d/m/Y') }}0</div>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<div>

\t</div>
\t<div class=\"facture-header\">
\t\t<div class=\"facture-header-text\" >
\t\t\t<p class=\"text-center\" style=\"margin-top:0px;\">
\t\t\t<h3 class=\"title\">
\t\t\t\tCLINIQUE SAINT RAPHAEL DRS MUNTU </h3>
\t\t\tNIF:A1721574U, RCCM: 17-B-01443, Id.: 01-82-N25975F <br>
\t\t\tNUMERO DE COMPTE RAWBANK: 35101 01063056501 50<br>
\t\t\tTél: +243 898 416 626<br>
\t\t\tE-mail: infos@cliniquesaintraphaeldrsmuntu.com<br>
\t\t\tSite web: www.cliniquesaintraphaeldrsmuntu.com <br>
\t\t\tAv. Kasa-Vubu, n°5151 (cfr. Carrefour des jeunes), C/Kalamu, Kinshasa-RDC<br>
\t\t\t</p>
\t\t</div>
\t\t<div class=\"patient-id\">
\t\t\t<table>
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"t-35\">Nom </th>
\t\t\t\t\t<th>:</th>
\t\t\t\t\t{% if facture.episode %}
\t\t\t\t\t\t<td>{{ facture.episode.patient.nom|upper }} {{ facture.episode.patient.postnom|upper }} {{ facture.episode.patient.prenom|upper }}</td>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td>{{ facture.hospitalisation.patient.nom|upper }} {{ facture.hospitalisation.patient.postnom|upper }} {{ facture.hospitalisation.patient.prenom|upper }}</td>
\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t<table class=\"table-libele\">

\t\t\t<tr>
\t\t\t\t<th class=\"colnum\">N°</th>
\t\t\t\t<th class=\"collibele\">Libele</th>
\t\t\t\t<th class=\"colprixunit\">PU USD</th>
\t\t\t\t<th class=\"colmontant\">Montant USD</th>
\t\t\t</tr>

            {% if facture.commandes|length > 0 %}
\t\t\t\t<p class=\"label label-danger\"><strong>Actes Medicaux</strong></p>
            {% endif %}



\t\t\t\t{% for cmd in facture.commandes %}
\t\t\t\t\t{% for tarif in cmd.tarifs %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"colnum\"></td>
\t\t\t\t\t\t\t<td class=\"collibele\">{{ tarif.actes.designationacte }}</td>
\t\t\t\t\t\t\t<td class=\"colprixunit\">{{ tarif.prix }}</td>
\t\t\t\t\t\t\t<td class=\"colmontant\">{{ tarif.prix }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t\t\t<tr class=\"trtotal\">
\t\t\t\t\t\t<td colspan = \"2\"></td>

\t\t\t\t\t\t<td class=\"colprixunit\">Total USD </td>
\t\t\t\t\t\t<td class=\"colmontant\">{{ facture.prix }} USD ( {{ facture.prix * app.session.get('taux') }} FC)</td>

\t\t\t\t\t</tr>
\t\t</table>


\t\t\t<table class=\"table-footer\">
\t\t\t\t<tr>
\t\t\t\t\t<td style=\" border-style: double; border-width: 0px;\"></td>
\t\t\t\t\t<td>Fait à Kinshasa, le {{ facture.datefacture|date('d/m/Y') }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td>Visa de la clinique</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><img class=\"logo-footer\" src=\"{{ asset('muntu/muntu.gif') }}\" ></td>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan = \"2\" style=\"text-align: center;border-style: double; border-width: 0px; align-content: center\"> MERCI POUR VOTRE CONFIANCE!</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</table>
\t\t</div>
    {% endif %}
</div>
<script src=\"{{ asset('assets/js/jquery.min.js') }}\" type=\"application/javascript\"></script>
<script>
    \$(function () {
        print();
    });
</script>
</div>
</body>
</html>




", "hostooSanteBundle:Caisse:facture.html.twig", "/var/www/html/hostoo/src/hostoo/SanteBundle/Resources/views/Caisse/facture.html.twig");
    }
}
