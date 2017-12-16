<?php

/* @SyliusAdmin/_security.html.twig */
class __TwigTemplate_54e0b8e45c62fd57c16703822ce149a05409667ad9a56a462e8770ab7e3af4b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0958dc0fbf6ca78905f0f3a773314d88c03f3b96417f26b8d54e3b7ffce54a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0958dc0fbf6ca78905f0f3a773314d88c03f3b96417f26b8d54e3b7ffce54a2->enter($__internal_e0958dc0fbf6ca78905f0f3a773314d88c03f3b96417f26b8d54e3b7ffce54a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/_security.html.twig"));

        $__internal_187c11e1d8bf34d83bad73cced3524dcc9124ef5ed674c6c2a27c442fc409c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187c11e1d8bf34d83bad73cced3524dcc9124ef5ed674c6c2a27c442fc409c29->enter($__internal_187c11e1d8bf34d83bad73cced3524dcc9124ef5ed674c6c2a27c442fc409c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/_security.html.twig"));

        // line 1
        echo "<div class=\"ui floated simple dropdown item\">
    ";
        // line 2
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "firstName", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "firstName", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "user", array()), "email", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "user", array()), "email", array()))), "html", null, true);
        echo "
    <i class=\"dropdown icon\"></i>
    <div class=\"menu\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_admin_user_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"item\">
            <i class=\"user icon\"></i>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "
        </a>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_logout");
        echo "\" id=\"sylius-logout-button\" class=\"item\">
            <i class=\"sign out icon\"></i>
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.logout"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
        
        $__internal_e0958dc0fbf6ca78905f0f3a773314d88c03f3b96417f26b8d54e3b7ffce54a2->leave($__internal_e0958dc0fbf6ca78905f0f3a773314d88c03f3b96417f26b8d54e3b7ffce54a2_prof);

        
        $__internal_187c11e1d8bf34d83bad73cced3524dcc9124ef5ed674c6c2a27c442fc409c29->leave($__internal_187c11e1d8bf34d83bad73cced3524dcc9124ef5ed674c6c2a27c442fc409c29_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/_security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 9,  39 => 7,  34 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui floated simple dropdown item\">
    {{ app.user.firstName|default(app.user.email) }}
    <i class=\"dropdown icon\"></i>
    <div class=\"menu\">
        <a href=\"{{ path('sylius_admin_admin_user_update', {'id': app.user.id}) }}\" class=\"item\">
            <i class=\"user icon\"></i>
            {{ 'sylius.ui.my_account'|trans }}
        </a>
        <a href=\"{{ path('sylius_admin_logout') }}\" id=\"sylius-logout-button\" class=\"item\">
            <i class=\"sign out icon\"></i>
            {{ 'sylius.ui.logout'|trans }}
        </a>
    </div>
</div>
", "@SyliusAdmin/_security.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\_security.html.twig");
    }
}
