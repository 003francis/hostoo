<?php

/* ordonnanceimg/printshow.html.twig */
class __TwigTemplate_e26e5656dd147d1467e4aaa5ab0f90fec4a2fd637287dd1359d5f12b31e48817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("hostooSanteBundle:Caisse:modele_facture.html.twig", "ordonnanceimg/printshow.html.twig", 1);
        $this->blocks = [
            'date' => [$this, 'block_date'],
            'titre' => [$this, 'block_titre'],
            'title' => [$this, 'block_title'],
            'nom' => [$this, 'block_nom'],
            'sexe' => [$this, 'block_sexe'],
            'age' => [$this, 'block_age'],
            'cate' => [$this, 'block_cate'],
            'societe' => [$this, 'block_societe'],
            'corps' => [$this, 'block_corps'],
            'basdepage' => [$this, 'block_basdepage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "hostooSanteBundle:Caisse:modele_facture.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnanceimg/printshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_date($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date"));

        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "dateordo", []), "d-m-Y"), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " EXAMEN D'IMAGERIE N° ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "id", []), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " EXAMEN D'IMAGERIE N° ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "id", []), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_nom($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nom"));

        // line 7
        echo "         ";
        if ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", [])) {
            // line 8
            echo "             ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", []), "patient", []), "nom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", []), "patient", []), "postnom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", []), "patient", []), "prenom", []), "html", null, true);
            echo "
         ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 9
($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "hospitalisation", [])) {
            // line 10
            echo "             ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "hospitalisation", []), "patient", []), "nom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "hospitalisation", []), "patient", []), "postnom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "hospitalisation", []), "patient", []), "prenom", []), "html", null, true);
            echo "
         ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 11
($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "urgence", [])) {
            // line 12
            echo "
             ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "urgence", []), "patient", []), "nom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "urgence", []), "patient", []), "postnom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "urgence", []), "patient", []), "prenom", []), "html", null, true);
            echo "
         ";
        } else {
            // line 15
            echo "             ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "requerant", []), "nom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "requerant", []), "postnom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "requerant", []), "prenom", []), "html", null, true);
            echo "
         ";
        }
        // line 17
        echo "     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_sexe($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sexe"));

        // line 19
        echo "
         ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", [])) {
            // line 21
            echo "             ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", []), "patient", []), "sexe", [])) {
                echo " M ";
            } else {
                echo " F ";
            }
            // line 22
            echo "         ";
        } elseif ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "urgence", [])) {
            // line 23
            echo "             ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "urgence", []), "patient", []), "sexe", [])) {
                echo " M ";
            } else {
                echo " F ";
            }
            // line 24
            echo "         ";
        } elseif ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "hospitalisation", [])) {
            // line 25
            echo "             ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "hospitalisation", []), "patient", []), "sexe", [])) {
                echo " M ";
            } else {
                echo " F ";
            }
            // line 26
            echo "         ";
        } elseif ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "requerant", [])) {
            // line 27
            echo "             ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "requerant", []), "sexe", [])) {
                echo " M ";
            } else {
                echo " F ";
            }
            // line 28
            echo "         ";
        }
        // line 29
        echo "     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_age($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "age"));

        // line 31
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", [])) {
            // line 32
            echo "                ";
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "", "Y") - twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", []), "patient", []), "datenaissance", []), "Y")), "html", null, true);
            echo " ans
            ";
        }
        // line 34
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_cate($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cate"));

        // line 36
        echo "         ";
        if ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", [])) {
            // line 37
            echo "             ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", []), "patient", []), "convention", []), "nomconvention", []), "html", null, true);
            echo "
         ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 38
($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "hospitalisation", [])) {
            // line 39
            echo "             ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "hospitalisation", []), "patient", []), "convention", []), "nomconvention", []), "html", null, true);
            echo "
         ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 40
($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "urgence", [])) {
            // line 41
            echo "             ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "urgence", []), "patient", []), "convention", []), "nomconvention", []), "html", null, true);
            echo "
         ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 42
($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "requerant", [])) {
            // line 43
            echo "             EXT
         ";
        }
        // line 45
        echo "     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_societe($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "societe"));

        // line 49
        echo "
    ";
        // line 50
        if ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", [])) {
            // line 51
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? null), "ordonnance", [], "any", false, true), "episode", [], "any", false, true), "patient", [], "any", false, true), "societe", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "episode", []), "patient", []), "societe", []), "html", null, true);
                echo " ";
            }
            // line 52
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "urgence", [])) {
            // line 53
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? null), "ordonnance", [], "any", false, true), "urgence", [], "any", false, true), "patient", [], "any", false, true), "societe", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "urgence", []), "patient", []), "societe", []), "html", null, true);
                echo " ";
            }
            // line 54
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "hospitalisation", [])) {
            // line 55
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? null), "ordonnance", [], "any", false, true), "hospitalisation", [], "any", false, true), "patient", [], "any", false, true), "societe", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "hospitalisation", []), "patient", []), "societe", []), "html", null, true);
                echo " ";
            }
            // line 56
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "requerant", [])) {
            // line 57
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? null), "ordonnance", [], "any", false, true), "episode", [], "any", false, true), "patient", [], "any", false, true), "societe", [], "any", true, true)) {
                echo " EXTERIEUR ";
            }
            // line 58
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_corps($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 61
        echo "    <br>
    <br>
    ";
        // line 63
        echo $this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "resultat", []);
        echo "

    <br>
    <br>
    <br>
    <p class=\"text-right\">";
        // line 68
        if ($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "medecin", [])) {
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "medecin", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["resultatsImg"] ?? $this->getContext($context, "resultatsImg")), "ordonnance", []), "medecin", []), "postnom", []))), "html", null, true);
            echo " ";
        } else {
            echo " DEMANDE EXTERIEURE";
        }
        // line 69
        echo "        <br>
        Medecin Imagiste</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 72
    public function block_basdepage($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "basdepage"));

        // line 73
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnanceimg/printshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 73,  351 => 72,  342 => 69,  335 => 68,  327 => 63,  323 => 61,  317 => 60,  309 => 58,  304 => 57,  301 => 56,  295 => 55,  292 => 54,  286 => 53,  283 => 52,  277 => 51,  275 => 50,  272 => 49,  266 => 48,  259 => 45,  255 => 43,  253 => 42,  248 => 41,  246 => 40,  241 => 39,  239 => 38,  234 => 37,  231 => 36,  225 => 35,  218 => 34,  212 => 32,  209 => 31,  203 => 30,  196 => 29,  193 => 28,  186 => 27,  183 => 26,  176 => 25,  173 => 24,  166 => 23,  163 => 22,  156 => 21,  154 => 20,  151 => 19,  145 => 18,  138 => 17,  128 => 15,  119 => 13,  116 => 12,  114 => 11,  105 => 10,  103 => 9,  94 => 8,  91 => 7,  85 => 6,  71 => 4,  57 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'hostooSanteBundle:Caisse:modele_facture.html.twig' %}
{% block date %} {{ resultatsImg.ordonnance.dateordo|date('d-m-Y') }} {% endblock %}
{% block titre %} EXAMEN D'IMAGERIE N° {{ resultatsImg.id }} {% endblock %}
{% block title %} EXAMEN D'IMAGERIE N° {{ resultatsImg.id }} {% endblock %}

     {% block nom %}
         {% if resultatsImg.ordonnance.episode %}
             {{ resultatsImg.ordonnance.episode.patient.nom }} {{ resultatsImg.ordonnance.episode.patient.postnom }} {{ resultatsImg.ordonnance.episode.patient.prenom }}
         {% elseif resultatsImg.ordonnance.hospitalisation %}
             {{ resultatsImg.ordonnance.hospitalisation.patient.nom }} {{ resultatsImg.ordonnance.hospitalisation.patient.postnom }} {{ resultatsImg.ordonnance.hospitalisation.patient.prenom }}
         {% elseif resultatsImg.ordonnance.urgence %}

             {{ resultatsImg.ordonnance.urgence.patient.nom }} {{ resultatsImg.ordonnance.urgence.patient.postnom }} {{ resultatsImg.ordonnance.urgence.patient.prenom }}
         {% else %}
             {{ resultatsImg.ordonnance.requerant.nom }} {{ resultatsImg.ordonnance.requerant.postnom }} {{ resultatsImg.ordonnance.requerant.prenom }}
         {% endif %}
     {% endblock %}
     {% block sexe %}

         {% if resultatsImg.ordonnance.episode %}
             {% if resultatsImg.ordonnance.episode.patient.sexe  %} M {% else %} F {% endif %}
         {% elseif resultatsImg.ordonnance.urgence %}
             {% if resultatsImg.ordonnance.urgence.patient.sexe  %} M {% else %} F {% endif %}
         {% elseif resultatsImg.ordonnance.hospitalisation %}
             {% if resultatsImg.ordonnance.hospitalisation.patient.sexe  %} M {% else %} F {% endif %}
         {% elseif resultatsImg.ordonnance.requerant %}
             {% if resultatsImg.ordonnance.requerant.sexe  %} M {% else %} F {% endif %}
         {% endif %}
     {% endblock %}
        {% block age %}
            {% if resultatsImg.ordonnance.episode %}
                {{ \"\"|date('Y')-resultatsImg.ordonnance.episode.patient.datenaissance|date('Y') }} ans
            {% endif %}
        {% endblock %}
     {% block cate %}
         {% if resultatsImg.ordonnance.episode %}
             {{ resultatsImg.ordonnance.episode.patient.convention.nomconvention }}
         {% elseif resultatsImg.ordonnance.hospitalisation %}
             {{ resultatsImg.ordonnance.hospitalisation.patient.convention.nomconvention }}
         {% elseif resultatsImg.ordonnance.urgence %}
             {{ resultatsImg.ordonnance.urgence.patient.convention.nomconvention }}
         {% elseif resultatsImg.ordonnance.requerant %}
             EXT
         {% endif %}
     {% endblock %}


{% block societe %}

    {% if resultatsImg.ordonnance.episode %}
        {% if resultatsImg.ordonnance.episode.patient.societe is defined %}{{ resultatsImg.ordonnance.episode.patient.societe }} {% endif %}
    {% elseif resultatsImg.ordonnance.urgence %}
        {% if resultatsImg.ordonnance.urgence.patient.societe is defined %}{{ resultatsImg.ordonnance.urgence.patient.societe }} {% endif %}
    {% elseif resultatsImg.ordonnance.hospitalisation %}
        {% if resultatsImg.ordonnance.hospitalisation.patient.societe is defined %}{{ resultatsImg.ordonnance.hospitalisation.patient.societe }} {% endif %}
    {% elseif resultatsImg.ordonnance.requerant %}
        {% if resultatsImg.ordonnance.episode.patient.societe is defined %} EXTERIEUR {% endif %}
    {% endif %}
{% endblock %}
{% block corps %}
    <br>
    <br>
    {{ resultatsImg.resultat|raw }}

    <br>
    <br>
    <br>
    <p class=\"text-right\">{% if resultatsImg.ordonnance.medecin %}{{ (resultatsImg.ordonnance.medecin.nom~\" \"~resultatsImg.ordonnance.medecin.postnom)|upper }} {% else %} DEMANDE EXTERIEURE{% endif %}
        <br>
        Medecin Imagiste</p>
{% endblock %}
{% block basdepage %}

{% endblock %}", "ordonnanceimg/printshow.html.twig", "/var/www/html/hostoo/app/Resources/views/ordonnanceimg/printshow.html.twig");
    }
}
