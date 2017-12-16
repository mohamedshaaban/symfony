<?php

/* SyliusShopBundle:Menu:_security.html.twig */
class __TwigTemplate_7601bdc63e8ac17fae2bf94db8ddb7f4d1acf4da7dafd9977c4f8385b2943843 extends Twig_Template
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
        $__internal_b8fc4ff688ae15f4096b98bdd0025913ce4355a9e08d00bdc7339d7562efc979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fc4ff688ae15f4096b98bdd0025913ce4355a9e08d00bdc7339d7562efc979->enter($__internal_b8fc4ff688ae15f4096b98bdd0025913ce4355a9e08d00bdc7339d7562efc979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Menu:_security.html.twig"));

        $__internal_51e064a5bdbbb302a908c5f4c90aecd5f4f370c61aa55de04e5df8c23bce84cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e064a5bdbbb302a908c5f4c90aecd5f4f370c61aa55de04e5df8c23bce84cd->enter($__internal_51e064a5bdbbb302a908c5f4c90aecd5f4f370c61aa55de04e5df8c23bce84cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Menu:_security.html.twig"));

        // line 1
        echo "<div class=\"ui right stackable inverted menu\">
    ";
        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 3
            echo "        <div class=\"item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.hello"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "user", array()), "customer", array()), "fullName", array()), "html", null, true);
            echo "!</div>
        <a href=\"";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_dashboard");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_logout");
            echo "\" class=\"item sylius-logout-button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.logout"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 7
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_login");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.login"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_register");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.register"), "html", null, true);
            echo "</a>
    ";
        }
        // line 10
        echo "</div>
";
        
        $__internal_b8fc4ff688ae15f4096b98bdd0025913ce4355a9e08d00bdc7339d7562efc979->leave($__internal_b8fc4ff688ae15f4096b98bdd0025913ce4355a9e08d00bdc7339d7562efc979_prof);

        
        $__internal_51e064a5bdbbb302a908c5f4c90aecd5f4f370c61aa55de04e5df8c23bce84cd->leave($__internal_51e064a5bdbbb302a908c5f4c90aecd5f4f370c61aa55de04e5df8c23bce84cd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Menu:_security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  57 => 8,  50 => 7,  43 => 5,  37 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui right stackable inverted menu\">
    {% if is_granted('ROLE_USER') %}
        <div class=\"item\">{{ 'sylius.ui.hello'|trans }} {{ app.user.customer.fullName }}!</div>
        <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"item\">{{ 'sylius.ui.my_account'|trans }}</a>
        <a href=\"{{ path('sylius_shop_logout') }}\" class=\"item sylius-logout-button\">{{ 'sylius.ui.logout'|trans }}</a>
    {% else %}
        <a href=\"{{ path('sylius_shop_login') }}\" class=\"item\">{{ 'sylius.ui.login'|trans }}</a>
        <a href=\"{{ path('sylius_shop_register') }}\" class=\"item\">{{ 'sylius.ui.register'|trans }}</a>
    {% endif %}
</div>
", "SyliusShopBundle:Menu:_security.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Menu/_security.html.twig");
    }
}
