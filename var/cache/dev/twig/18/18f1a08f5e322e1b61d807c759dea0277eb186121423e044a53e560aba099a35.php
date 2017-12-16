<?php

/* @SyliusShop/Menu/_security.html.twig */
class __TwigTemplate_e07690bc5c905ad86f6a116c930f60dcf4d4ab51a7329fbc1deca9a91b26c240 extends Twig_Template
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
        $__internal_44189179954b713dba5aebfedfd3cdbe62c7434295b3d0004bf8ddcf8403beea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44189179954b713dba5aebfedfd3cdbe62c7434295b3d0004bf8ddcf8403beea->enter($__internal_44189179954b713dba5aebfedfd3cdbe62c7434295b3d0004bf8ddcf8403beea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_security.html.twig"));

        $__internal_d0e26812e22f5be5b7bacc1ef41756805e841dd5e10fd880999237625b75be07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e26812e22f5be5b7bacc1ef41756805e841dd5e10fd880999237625b75be07->enter($__internal_d0e26812e22f5be5b7bacc1ef41756805e841dd5e10fd880999237625b75be07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_security.html.twig"));

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
        
        $__internal_44189179954b713dba5aebfedfd3cdbe62c7434295b3d0004bf8ddcf8403beea->leave($__internal_44189179954b713dba5aebfedfd3cdbe62c7434295b3d0004bf8ddcf8403beea_prof);

        
        $__internal_d0e26812e22f5be5b7bacc1ef41756805e841dd5e10fd880999237625b75be07->leave($__internal_d0e26812e22f5be5b7bacc1ef41756805e841dd5e10fd880999237625b75be07_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Menu/_security.html.twig";
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
", "@SyliusShop/Menu/_security.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Menu\\_security.html.twig");
    }
}
