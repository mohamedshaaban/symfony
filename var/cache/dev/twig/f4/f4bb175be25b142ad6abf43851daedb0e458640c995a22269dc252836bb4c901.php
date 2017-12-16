<?php

/* SyliusShopBundle:Common/Order/Table:_item.html.twig */
class __TwigTemplate_417ee2cd44c2004382b476219fbacc0f6488953e170445ddcd4b9cbde09d9e05 extends Twig_Template
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
        $__internal_9ce650622b12605140bc09443507d90c2e20bf4a1e84372416e637784f992ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce650622b12605140bc09443507d90c2e20bf4a1e84372416e637784f992ee8->enter($__internal_9ce650622b12605140bc09443507d90c2e20bf4a1e84372416e637784f992ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_item.html.twig"));

        $__internal_ecac0a46707115ba83af2db67c23204378484ba0cfeaebb83e92bb6c7aa60bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecac0a46707115ba83af2db67c23204378484ba0cfeaebb83e92bb6c7aa60bac->enter($__internal_ecac0a46707115ba83af2db67c23204378484ba0cfeaebb83e92bb6c7aa60bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_item.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order/Table:_item.html.twig", 1);
        // line 2
        echo "
<tr>
    <td>
        ";
        // line 5
        $this->loadTemplate("@SyliusShop/Product/_info.html.twig", "SyliusShopBundle:Common/Order/Table:_item.html.twig", 5)->display(array_merge($context, array("variant" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "variant", array()))));
        // line 6
        echo "    </td>
    <td>
        <span class=\"sylius-unit-price\">";
        // line 8
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "unitPrice", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "</span>
    </td>
    <td class=\"center aligned\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 10, $this->getSourceContext()); })()), "quantity", array()), "html", null, true);
        echo "</td>
    <td class=\"right aligned\">";
        // line 11
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 11, $this->getSourceContext()); })()), "subtotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "</td>
</tr>
";
        
        $__internal_9ce650622b12605140bc09443507d90c2e20bf4a1e84372416e637784f992ee8->leave($__internal_9ce650622b12605140bc09443507d90c2e20bf4a1e84372416e637784f992ee8_prof);

        
        $__internal_ecac0a46707115ba83af2db67c23204378484ba0cfeaebb83e92bb6c7aa60bac->leave($__internal_ecac0a46707115ba83af2db67c23204378484ba0cfeaebb83e92bb6c7aa60bac_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  43 => 10,  38 => 8,  34 => 6,  32 => 5,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<tr>
    <td>
        {% include '@SyliusShop/Product/_info.html.twig' with {'variant': item.variant} %}
    </td>
    <td>
        <span class=\"sylius-unit-price\">{{ money.format(item.unitPrice, order.currencyCode) }}</span>
    </td>
    <td class=\"center aligned\">{{ item.quantity }}</td>
    <td class=\"right aligned\">{{ money.format(item.subtotal, order.currencyCode) }}</td>
</tr>
", "SyliusShopBundle:Common/Order/Table:_item.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/Table/_item.html.twig");
    }
}
