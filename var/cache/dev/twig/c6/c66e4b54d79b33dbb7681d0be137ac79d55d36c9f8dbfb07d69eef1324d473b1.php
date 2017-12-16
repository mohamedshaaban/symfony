<?php

/* SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig */
class __TwigTemplate_44ca431300be4f0956c3cb1411b6481c03de5aa471e96a18d9fcba3735faece0 extends Twig_Template
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
        $__internal_292990dd0c0ac7189b57fa06276d1ef2fc3adc5da4ff2347ca838e6701dd8a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292990dd0c0ac7189b57fa06276d1ef2fc3adc5da4ff2347ca838e6701dd8a00->enter($__internal_292990dd0c0ac7189b57fa06276d1ef2fc3adc5da4ff2347ca838e6701dd8a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig"));

        $__internal_265aa7e0edecf87fe1d37c7a2aa6d89afeb2d83137c92ab5e0f1046f4761abbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265aa7e0edecf87fe1d37c7a2aa6d89afeb2d83137c92ab5e0f1046f4761abbe->enter($__internal_265aa7e0edecf87fe1d37c7a2aa6d89afeb2d83137c92ab5e0f1046f4761abbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig"));

        // line 1
        $context["enabled"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 1, $this->getSourceContext()); })()), "payments", array()));
        // line 2
        echo "
<div class=\"ui two column grid\">
    <div class=\"column\">
        ";
        // line 5
        if (call_user_func_array($this->env->getFunction('sylius_is_shipping_required')->getCallable(), array((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->getSourceContext()); })())))) {
            // line 6
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_select_shipping");
            echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_shipping_method"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 8
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_address");
            echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_address"), "html", null, true);
            echo "</a>
        ";
        }
        // line 10
        echo "    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled";
        // line 12
        if ( !(isset($context["enabled"]) || array_key_exists("enabled", $context) ? $context["enabled"] : (function () { throw new Twig_Error_Runtime('Variable "enabled" does not exist.', 12, $this->getSourceContext()); })())) {
            echo " disabled";
        }
        echo " button\">
            <i class=\"arrow right icon\"></i>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.next"), "html", null, true);
        echo "
        </button>
    </div>
</div>
";
        
        $__internal_292990dd0c0ac7189b57fa06276d1ef2fc3adc5da4ff2347ca838e6701dd8a00->leave($__internal_292990dd0c0ac7189b57fa06276d1ef2fc3adc5da4ff2347ca838e6701dd8a00_prof);

        
        $__internal_265aa7e0edecf87fe1d37c7a2aa6d89afeb2d83137c92ab5e0f1046f4761abbe->leave($__internal_265aa7e0edecf87fe1d37c7a2aa6d89afeb2d83137c92ab5e0f1046f4761abbe_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  54 => 12,  50 => 10,  42 => 8,  34 => 6,  32 => 5,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set enabled = order.payments|length %}

<div class=\"ui two column grid\">
    <div class=\"column\">
        {% if sylius_is_shipping_required(order) %}
            <a href=\"{{ path('sylius_shop_checkout_select_shipping') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_shipping_method'|trans }}</a>
        {% else %}
            <a href=\"{{ path('sylius_shop_checkout_address') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_address'|trans }}</a>
        {% endif %}
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled{% if not enabled %} disabled{% endif %} button\">
            <i class=\"arrow right icon\"></i>
            {{ 'sylius.ui.next'|trans }}
        </button>
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/SelectPayment/_navigation.html.twig");
    }
}
