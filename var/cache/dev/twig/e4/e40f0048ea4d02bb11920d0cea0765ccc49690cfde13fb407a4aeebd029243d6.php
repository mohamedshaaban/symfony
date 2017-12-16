<?php

/* SyliusShopBundle:Common/Order/Table:_totals.html.twig */
class __TwigTemplate_1d4b91d1433e57c31dc070e6962dcefe0e17cae60a22f71e29d22a05aec0bd3a extends Twig_Template
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
        $__internal_5a9a3b0bd2e7e1b003f371ad0d43a2b16e1269b368ce9ab2f38f09143a43dfdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9a3b0bd2e7e1b003f371ad0d43a2b16e1269b368ce9ab2f38f09143a43dfdd->enter($__internal_5a9a3b0bd2e7e1b003f371ad0d43a2b16e1269b368ce9ab2f38f09143a43dfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_totals.html.twig"));

        $__internal_9a729b689ee9c5f0649375b821a9e643a06602e37e7745bd6e8ee273dfa240f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a729b689ee9c5f0649375b821a9e643a06602e37e7745bd6e8ee273dfa240f4->enter($__internal_9a729b689ee9c5f0649375b821a9e643a06602e37e7745bd6e8ee273dfa240f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_totals.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", 1);
        // line 2
        echo "
<tr>
    <th colspan=\"4\" class=\"right aligned\" id=\"subtotal\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subtotal"), "html", null, true);
        echo ": ";
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->getSourceContext()); })()), "itemsTotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </th>
</tr>
<tr>
    ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_shipping.html.twig", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", 9)->display(array_merge($context, array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->getSourceContext()); })()))));
        // line 10
        echo "</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" id=\"tax-total\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.tax_total"), "html", null, true);
        echo ": ";
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()), "taxTotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
<tr>
    ";
        // line 17
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_promotion.html.twig", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", 17)->display(array_merge($context, array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->getSourceContext()); })()))));
        // line 18
        echo "</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" style=\"font-size: 1.5em;\" id=\"total\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total"), "html", null, true);
        echo ": ";
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 21, $this->getSourceContext()); })()), "total", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 21, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
";
        // line 24
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 24, $this->getSourceContext()); })()), "currencyCode", array()) === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 24, $this->getSourceContext()); })()), "currencyCode", array()))) {
            // line 25
            echo "<tr>
    <td colspan=\"4\" class=\"right aligned\" id=\"base-total\">
        ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total_in_base_currency"), "html", null, true);
            echo ": ";
            echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->getSourceContext()); })()), "total", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->getSourceContext()); })()), "currencyCode", array()));
            echo "
    </td>
</tr>
";
        }
        
        $__internal_5a9a3b0bd2e7e1b003f371ad0d43a2b16e1269b368ce9ab2f38f09143a43dfdd->leave($__internal_5a9a3b0bd2e7e1b003f371ad0d43a2b16e1269b368ce9ab2f38f09143a43dfdd_prof);

        
        $__internal_9a729b689ee9c5f0649375b821a9e643a06602e37e7745bd6e8ee273dfa240f4->leave($__internal_9a729b689ee9c5f0649375b821a9e643a06602e37e7745bd6e8ee273dfa240f4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  74 => 25,  72 => 24,  64 => 21,  59 => 18,  57 => 17,  48 => 13,  43 => 10,  41 => 9,  32 => 5,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<tr>
    <th colspan=\"4\" class=\"right aligned\" id=\"subtotal\">
        {{ 'sylius.ui.subtotal'|trans }}: {{ money.format(order.itemsTotal, order.currencyCode) }}
    </th>
</tr>
<tr>
    {% include '@SyliusShop/Common/Order/Table/_shipping.html.twig' with {'order': order} %}
</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" id=\"tax-total\">
        {{ 'sylius.ui.tax_total'|trans }}: {{ money.format(order.taxTotal, order.currencyCode) }}
    </td>
</tr>
<tr>
    {% include '@SyliusShop/Common/Order/Table/_promotion.html.twig' with {'order': order} %}
</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" style=\"font-size: 1.5em;\" id=\"total\">
        {{ 'sylius.ui.total'|trans }}: {{ money.format(order.total, order.currencyCode) }}
    </td>
</tr>
{% if order.currencyCode is not same as(sylius.currencyCode) %}
<tr>
    <td colspan=\"4\" class=\"right aligned\" id=\"base-total\">
        {{ 'sylius.ui.total_in_base_currency'|trans }}: {{ money.format(order.total, order.currencyCode) }}
    </td>
</tr>
{% endif %}
", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/Table/_totals.html.twig");
    }
}
