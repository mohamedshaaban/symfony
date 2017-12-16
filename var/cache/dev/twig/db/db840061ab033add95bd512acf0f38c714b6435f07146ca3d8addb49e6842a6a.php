<?php

/* SyliusShopBundle:Checkout/SelectShipping:_navigation.html.twig */
class __TwigTemplate_7c1195229f5f1db938fef0a753a3ea7cee97d32f665b644073709742f5183ce4 extends Twig_Template
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
        $__internal_c0bfd51329479c5cbf7bb2c0592ff700bb688f4ae735aaa82ed6a96cde360e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bfd51329479c5cbf7bb2c0592ff700bb688f4ae735aaa82ed6a96cde360e5b->enter($__internal_c0bfd51329479c5cbf7bb2c0592ff700bb688f4ae735aaa82ed6a96cde360e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_navigation.html.twig"));

        $__internal_28b2f0bb781ccf26bac3c340066393a8f87cd2c80bd83b73ff2ef30dc44101ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b2f0bb781ccf26bac3c340066393a8f87cd2c80bd83b73ff2ef30dc44101ad->enter($__internal_28b2f0bb781ccf26bac3c340066393a8f87cd2c80bd83b73ff2ef30dc44101ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_navigation.html.twig"));

        // line 1
        $context["enabled"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 1, $this->getSourceContext()); })()), "shipments", array()));
        // line 2
        echo "
<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_address");
        echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_address"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled";
        // line 8
        if ( !(isset($context["enabled"]) || array_key_exists("enabled", $context) ? $context["enabled"] : (function () { throw new Twig_Error_Runtime('Variable "enabled" does not exist.', 8, $this->getSourceContext()); })())) {
            echo " disabled";
        }
        echo " button\">
            <i class=\"arrow right icon\"></i>
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.next"), "html", null, true);
        echo "
        </button>
    </div>
</div>
";
        
        $__internal_c0bfd51329479c5cbf7bb2c0592ff700bb688f4ae735aaa82ed6a96cde360e5b->leave($__internal_c0bfd51329479c5cbf7bb2c0592ff700bb688f4ae735aaa82ed6a96cde360e5b_prof);

        
        $__internal_28b2f0bb781ccf26bac3c340066393a8f87cd2c80bd83b73ff2ef30dc44101ad->leave($__internal_28b2f0bb781ccf26bac3c340066393a8f87cd2c80bd83b73ff2ef30dc44101ad_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  40 => 8,  32 => 5,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set enabled = order.shipments|length %}

<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"{{ path('sylius_shop_checkout_address') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_address'|trans }}</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled{% if not enabled %} disabled{% endif %} button\">
            <i class=\"arrow right icon\"></i>
            {{ 'sylius.ui.next'|trans }}
        </button>
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectShipping:_navigation.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/SelectShipping/_navigation.html.twig");
    }
}
