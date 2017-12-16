<?php

/* SyliusAdminBundle::_security.html.twig */
class __TwigTemplate_4ce3616b884acc9f7557a4c10ba657e942f8ef5aa8ba1043d5eda6198cb5146d extends Twig_Template
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
        $__internal_37d7f299dbc3a31ea2670a5880f0e6a766b78738ee4c32dbf4fc4fb66f3fd474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d7f299dbc3a31ea2670a5880f0e6a766b78738ee4c32dbf4fc4fb66f3fd474->enter($__internal_37d7f299dbc3a31ea2670a5880f0e6a766b78738ee4c32dbf4fc4fb66f3fd474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_security.html.twig"));

        $__internal_31a3b65f26c23c360af8df1c83ec5e02f72e18727a9c37feaebf606c3ad3f5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a3b65f26c23c360af8df1c83ec5e02f72e18727a9c37feaebf606c3ad3f5e6->enter($__internal_31a3b65f26c23c360af8df1c83ec5e02f72e18727a9c37feaebf606c3ad3f5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_security.html.twig"));

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
        
        $__internal_37d7f299dbc3a31ea2670a5880f0e6a766b78738ee4c32dbf4fc4fb66f3fd474->leave($__internal_37d7f299dbc3a31ea2670a5880f0e6a766b78738ee4c32dbf4fc4fb66f3fd474_prof);

        
        $__internal_31a3b65f26c23c360af8df1c83ec5e02f72e18727a9c37feaebf606c3ad3f5e6->leave($__internal_31a3b65f26c23c360af8df1c83ec5e02f72e18727a9c37feaebf606c3ad3f5e6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::_security.html.twig";
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
", "SyliusAdminBundle::_security.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/_security.html.twig");
    }
}
