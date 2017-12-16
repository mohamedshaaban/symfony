<?php

/* SyliusShopBundle:Checkout:_header.html.twig */
class __TwigTemplate_e5aa8019006e40b4b06adfb2a8d4c42df906b3917ec12377b6656b5bb4b0a491 extends Twig_Template
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
        $__internal_bbe155c3454fc42c339a4bae28ea7d064f722ad5ea4424285bfe85eff5644e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe155c3454fc42c339a4bae28ea7d064f722ad5ea4424285bfe85eff5644e8c->enter($__internal_bbe155c3454fc42c339a4bae28ea7d064f722ad5ea4424285bfe85eff5644e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_header.html.twig"));

        $__internal_abbf71c664efeec51854372a91e4b601565e625755d1db088ce4e2c2f208ba25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbf71c664efeec51854372a91e4b601565e625755d1db088ce4e2c2f208ba25->enter($__internal_abbf71c664efeec51854372a91e4b601565e625755d1db088ce4e2c2f208ba25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_header.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui large text menu\">
        <div class=\"ui small image\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
        echo "\" /></a>
        </div>
        <div class=\"right menu\">
            ";
        // line 7
        if ( !(null === ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "customer", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "customer", array(), "any", false, true), "id", array()), null)) : (null)))) {
            // line 8
            echo "                <div class=\"item\" id=\"purchaser-email\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.checking_out_as"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "customer", array(), "any", false, true), "fullName", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "customer", array(), "any", false, true), "fullName", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->getSourceContext()); })()), "customer", array()), "email", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->getSourceContext()); })()), "customer", array()), "email", array()))), "html", null, true);
            echo ".</div>
            ";
        } else {
            // line 10
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_login");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.sign_in"), "html", null, true);
            echo "</a>
            ";
        }
        // line 12
        echo "        </div>
    </div>
</div>
";
        
        $__internal_bbe155c3454fc42c339a4bae28ea7d064f722ad5ea4424285bfe85eff5644e8c->leave($__internal_bbe155c3454fc42c339a4bae28ea7d064f722ad5ea4424285bfe85eff5644e8c_prof);

        
        $__internal_abbf71c664efeec51854372a91e4b601565e625755d1db088ce4e2c2f208ba25->leave($__internal_abbf71c664efeec51854372a91e4b601565e625755d1db088ce4e2c2f208ba25_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  48 => 10,  40 => 8,  38 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui basic segment\">
    <div class=\"ui large text menu\">
        <div class=\"ui small image\">
            <a href=\"{{ path('sylius_shop_homepage') }}\"><img src=\"{{ asset('assets/shop/img/logo.png') }}\" /></a>
        </div>
        <div class=\"right menu\">
            {% if order.customer.id|default(null) is not null %}
                <div class=\"item\" id=\"purchaser-email\">{{ 'sylius.ui.checking_out_as'|trans }} {{ order.customer.fullName|default(order.customer.email) }}.</div>
            {% else %}
                <a href=\"{{ path('sylius_shop_login') }}\" class=\"item\">{{ 'sylius.ui.sign_in'|trans }}</a>
            {% endif %}
        </div>
    </div>
</div>
", "SyliusShopBundle:Checkout:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/_header.html.twig");
    }
}
