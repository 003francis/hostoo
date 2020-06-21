<?php

/* hostooUserBundle::loginbase.html.twig */
class __TwigTemplate_96516fa11adb4d9b0cf811dee7a897b6c6902f220fe1f89686c7fc1f160fb19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hostooUserBundle::loginbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <!-- META -->
    <title>HOSTOO| Système de Gestion Hospitalière</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <meta name=\"description\" content=\"\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo/logo_hostoo.png"), "html", null, true);
        echo "\">
    <!-- CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>";
        // line 23
        echo "<div class=\"text-center logo-alt-box\">
    <a href=\"#\" class=\"logo\"><h2 class=\"text-info\">Hostoo</h2></a>

    <h4 class=\"text-muted m-t-0\">Système de Gestion Hospitalière</h4>
</div>

<div class=\"wrapper-page\" style=\"background-image:url(";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg/hostoo_bg.jpg"), "html", null, true);
        echo ");background-size: cover;\">

    <div class=\"m-t-30 card-box\">
        <div class=\"text-center\">
            <h4 class=\"text-uppercase font-bold m-b-0\">Se Connecter</h4>
        </div>
        <div class=\"panel-body\">
";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        </div>
    </div>
    <!-- end card-box -->

    <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
            <p class=\"text-muted\">2017 © <a href=\"http://calculus-system.net\">Calculus System</a> </p>
        </div>
    </div>

</div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hostooUserBundle::loginbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  87 => 38,  85 => 36,  75 => 29,  67 => 23,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  33 => 9,  23 => 1,);
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
<html>
<head>
    <!-- META -->
    <title>HOSTOO| Système de Gestion Hospitalière</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <meta name=\"description\" content=\"\" />
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/logo/logo_hostoo.png') }}\">
    <!-- CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" media=\"all\" />
    <link href=\"{{ asset('assets/css/core.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/components.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/icons.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/pages.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/menu.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/responsive.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>{#
<div class=\"text-center\">
    <img src=\"{{ asset('assets/images/logo/logo_hostoo.png') }}\" width=\"50px\" height=\"60px\">
</div>#}
<div class=\"text-center logo-alt-box\">
    <a href=\"#\" class=\"logo\"><h2 class=\"text-info\">Hostoo</h2></a>

    <h4 class=\"text-muted m-t-0\">Système de Gestion Hospitalière</h4>
</div>

<div class=\"wrapper-page\" style=\"background-image:url({{ asset('assets/images/bg/hostoo_bg.jpg') }});background-size: cover;\">

    <div class=\"m-t-30 card-box\">
        <div class=\"text-center\">
            <h4 class=\"text-uppercase font-bold m-b-0\">Se Connecter</h4>
        </div>
        <div class=\"panel-body\">
{% block body %}
{% endblock %}
        </div>
    </div>
    <!-- end card-box -->

    <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
            <p class=\"text-muted\">2017 © <a href=\"http://calculus-system.net\">Calculus System</a> </p>
        </div>
    </div>

</div>
</body>
</html>
", "hostooUserBundle::loginbase.html.twig", "C:\\wamp64\\www\\hostoo\\src\\hostoo\\UserBundle/Resources/views/loginbase.html.twig");
    }
}
