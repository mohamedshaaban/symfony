<?php

/* SyliusShopBundle:Common/Order:_addresses.html.twig */
class __TwigTemplate_5e9ddc7b9fdd03260295d577b58d116ab3cd8bbcff7e989234851c8efbb88be9 extends Twig_Template
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
        $__internal_04895e19cf00e6087a8fc6c1072a24d7c2ceced7a7b20a0a520661dc62116bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04895e19cf00e6087a8fc6c1072a24d7c2ceced7a7b20a0a520661dc62116bc3->enter($__internal_04895e19cf00e6087a8fc6c1072a24d7c2ceced7a7b20a0a520661dc62116bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_addresses.html.twig"));

        $__internal_25579bed3a869d0d77e70c9d5be2a9ba938a02ce88261f27af92f4fbbbebc6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25579bed3a869d0d77e70c9d5be2a9ba938a02ce88261f27af92f4fbbbebc6cb->enter($__internal_25579bed3a869d0d77e70c9d5be2a9ba938a02ce88261f27af92f4fbbbebc6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_addresses.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui two column divided stackable grid\">
        <div class=\"column\" id=\"sylius-shipping-address\">
            <div class=\"ui small dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</div>
            ";
        // line 5
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "SyliusShopBundle:Common/Order:_addresses.html.twig", 5)->display(array_merge($context, array("address" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->getSourceContext()); })()), "shippingAddress", array()))));
        // line 6
        echo "        </div>
        <div class=\"column\" id=\"sylius-billing-address\">
            <div class=\"ui small dividing header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</div>
            ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "SyliusShopBundle:Common/Order:_addresses.html.twig", 9)->display(array_merge($context, array("address" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->getSourceContext()); })()), "billingAddress", array()))));
        // line 10
        echo "        </div>
    </div>
</div>
";
        
        $__internal_04895e19cf00e6087a8fc6c1072a24d7c2ceced7a7b20a0a520661dc62116bc3->leave($__internal_04895e19cf00e6087a8fc6c1072a24d7c2ceced7a7b20a0a520661dc62116bc3_prof);

        
        $__internal_25579bed3a869d0d77e70c9d5be2a9ba938a02ce88261f27af92f4fbbbebc6cb->leave($__internal_25579bed3a869d0d77e70c9d5be2a9ba938a02ce88261f27af92f4fbbbebc6cb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  44 => 9,  40 => 8,  36 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    <div class=\"ui two column divided stackable grid\">
        <div class=\"column\" id=\"sylius-shipping-address\">
            <div class=\"ui small dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': order.shippingAddress} %}
        </div>
        <div class=\"column\" id=\"sylius-billing-address\">
            <div class=\"ui small dividing header\">{{ 'sylius.ui.billing_address'|trans }}</div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': order.billingAddress} %}
        </div>
    </div>
</div>
", "SyliusShopBundle:Common/Order:_addresses.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/_addresses.html.twig");
    }
}
