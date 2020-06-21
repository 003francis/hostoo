<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6fe760120cf08e277883509d432517d6fa02d37308bf9a8f898a26317e9af70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? $this->getContext($context, "error")), [], "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 22
        echo "
    <form class=\"form-horizontal m-t-10\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <div class=\"form-group \">
            <div class=\"col-xs-12\">
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Identifiant\" class=\"form-control\" />
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-xs-12\">
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Mot de Passe\" />
            </div>
        </div>

        <div class=\"form-group \">
            <div class=\"col-xs-12\">
                <div class=\"checkbox checkbox-custom\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>

            </div>
        </div>

        <div class=\"form-group text-center m-t-30\">
            <div class=\"col-xs-12\">
                <input type=\"submit\" class=\"btn btn-custom btn-bordred btn-block waves-effect waves-light text-uppercase\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </div>

        <div class=\"form-group m-t-30 m-b-0\">
            <div class=\"col-sm-12\">
                <a href=\"#\" class=\"text-muted\"><i class=\"fa fa-lock m-r-5\"></i> Forgot your password?</a>
            </div>
        </div>

    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 49,  78 => 41,  61 => 27,  55 => 24,  51 => 23,  48 => 22,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% if error %}
    <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
{% endif %}
{#
<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

    <label for=\"username\">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label for=\"password\">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
</form>#}

    <form class=\"form-horizontal m-t-10\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        <div class=\"form-group \">
            <div class=\"col-xs-12\">
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"Identifiant\" class=\"form-control\" />
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-xs-12\">
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Mot de Passe\" />
            </div>
        </div>

        <div class=\"form-group \">
            <div class=\"col-xs-12\">
                <div class=\"checkbox checkbox-custom\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>
                </div>

            </div>
        </div>

        <div class=\"form-group text-center m-t-30\">
            <div class=\"col-xs-12\">
                <input type=\"submit\" class=\"btn btn-custom btn-bordred btn-block waves-effect waves-light text-uppercase\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
            </div>
        </div>

        <div class=\"form-group m-t-30 m-b-0\">
            <div class=\"col-sm-12\">
                <a href=\"#\" class=\"text-muted\"><i class=\"fa fa-lock m-r-5\"></i> Forgot your password?</a>
            </div>
        </div>

    </form>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/hostoo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Security/login.html.twig");
    }
}
