<?php

/* SyliusShopBundle:Cart/Summary:_item.html.twig */
class __TwigTemplate_e582638db3ffaaabf9de58e99eb7a0bcc3bddd8c61cbe8972fea8653f481136d extends Twig_Template
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
        $__internal_f0c959be6dabba10215e3669f4fbf5ad2ad210285e1ea4fe8101f3cee638a4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c959be6dabba10215e3669f4fbf5ad2ad210285e1ea4fe8101f3cee638a4fe->enter($__internal_f0c959be6dabba10215e3669f4fbf5ad2ad210285e1ea4fe8101f3cee638a4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_item.html.twig"));

        $__internal_75f0c9b3d7d10564882a0c014c39f2ea7b4f56af55177a3c020990d4bb82f225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f0c9b3d7d10564882a0c014c39f2ea7b4f56af55177a3c020990d4bb82f225->enter($__internal_75f0c9b3d7d10564882a0c014c39f2ea7b4f56af55177a3c020990d4bb82f225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_item.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Cart/Summary:_item.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["product"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 3, $this->getSourceContext()); })()), "product", array());
        // line 4
        $context["product_variant"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->getSourceContext()); })()), "variant", array());
        // line 5
        echo "
<tr>
    <td class=\"single line\">
        ";
        // line 8
        $this->loadTemplate("@SyliusShop/Product/_info.html.twig", "SyliusShopBundle:Cart/Summary:_item.html.twig", 8)->display(array_merge($context, array("variant" => (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new Twig_Error_Runtime('Variable "product_variant" does not exist.', 8, $this->getSourceContext()); })()))));
        // line 9
        echo "    </td>
    <td class=\"right aligned\">
        ";
        // line 11
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 11, $this->getSourceContext()); })()), "unitPrice", array()) != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 11, $this->getSourceContext()); })()), "discountedUnitPrice", array()))) {
            // line 12
            echo "            <span class=\"sylius-regular-unit-price\">";
            echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 12, $this->getSourceContext()); })()), "unitPrice", array()));
            echo "</span>
        ";
        }
        // line 14
        echo "        <span class=\"sylius-unit-price\">";
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 14, $this->getSourceContext()); })()), "discountedUnitPrice", array()));
        echo "</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "quantity", array()), 'widget');
        echo "</span>
    </td>
    <td class=\"center aligned\">
        <button type=\"button\" data-redirect=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_cart_summary");
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_ajax_cart_item_remove", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"ui circular icon button sylius-cart-remove-button\" data-csrf-token=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->getSourceContext()); })()), "id", array())), "html", null, true);
        echo "\"><i class=\"remove icon\"></i></button>
    </td>
    <td class=\"right aligned\">
        <span class=\"sylius-total\">";
        // line 23
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "subtotal", array()));
        echo "</span>
    </td>
</tr>
";
        
        $__internal_f0c959be6dabba10215e3669f4fbf5ad2ad210285e1ea4fe8101f3cee638a4fe->leave($__internal_f0c959be6dabba10215e3669f4fbf5ad2ad210285e1ea4fe8101f3cee638a4fe_prof);

        
        $__internal_75f0c9b3d7d10564882a0c014c39f2ea7b4f56af55177a3c020990d4bb82f225->leave($__internal_75f0c9b3d7d10564882a0c014c39f2ea7b4f56af55177a3c020990d4bb82f225_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  66 => 20,  60 => 17,  53 => 14,  47 => 12,  45 => 11,  41 => 9,  39 => 8,  34 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set product = item.product %}
{% set product_variant = item.variant %}

<tr>
    <td class=\"single line\">
        {% include '@SyliusShop/Product/_info.html.twig' with {'variant': product_variant} %}
    </td>
    <td class=\"right aligned\">
        {% if item.unitPrice != item.discountedUnitPrice %}
            <span class=\"sylius-regular-unit-price\">{{ money.convertAndFormat(item.unitPrice) }}</span>
        {% endif %}
        <span class=\"sylius-unit-price\">{{ money.convertAndFormat(item.discountedUnitPrice) }}</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity\">{{ form_widget(form.quantity) }}</span>
    </td>
    <td class=\"center aligned\">
        <button type=\"button\" data-redirect=\"{{ path('sylius_shop_cart_summary') }}\" data-url=\"{{ path('sylius_shop_ajax_cart_item_remove', {'id': item.id}) }}\" class=\"ui circular icon button sylius-cart-remove-button\" data-csrf-token=\"{{ csrf_token(item.id) }}\"><i class=\"remove icon\"></i></button>
    </td>
    <td class=\"right aligned\">
        <span class=\"sylius-total\">{{ money.convertAndFormat(item.subtotal) }}</span>
    </td>
</tr>
", "SyliusShopBundle:Cart/Summary:_item.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Cart/Summary/_item.html.twig");
    }
}
