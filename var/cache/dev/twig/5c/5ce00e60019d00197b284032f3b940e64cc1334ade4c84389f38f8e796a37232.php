<?php

/* @SyliusAdmin/Dashboard/_statistics.html.twig */
class __TwigTemplate_d979d7d0d3a36dbc3d3bb540152455c51f538bee2574ed251dd88aa68ed4f178 extends Twig_Template
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
        $__internal_a4cb77e78234fdd16a14f71dbeb50196e12d2c712254c81d648a05d4ba3fdffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4cb77e78234fdd16a14f71dbeb50196e12d2c712254c81d648a05d4ba3fdffb->enter($__internal_a4cb77e78234fdd16a14f71dbeb50196e12d2c712254c81d648a05d4ba3fdffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_statistics.html.twig"));

        $__internal_61684dc0e2655878b5a0d05b6be356b21c3b6d169e68b6bcc1d1daf2abbb6e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61684dc0e2655878b5a0d05b6be356b21c3b6d169e68b6bcc1d1daf2abbb6e28->enter($__internal_61684dc0e2655878b5a0d05b6be356b21c3b6d169e68b6bcc1d1daf2abbb6e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_statistics.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Dashboard/_statistics.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    <div class=\"ui center aligned four column stackable divided grid\">
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"total-sales\" class=\"value\">
                    ";
        // line 8
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 8, $this->getSourceContext()); })()), "totalSales", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 8, $this->getSourceContext()); })()), "baseCurrency", array()), "code", array()));
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.sales"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-orders\" class=\"value\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 18, $this->getSourceContext()); })()), "numberOfNewOrders", array()), "html", null, true);
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.fulfilled_orders"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-customers\" class=\"value\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 28, $this->getSourceContext()); })()), "numberOfNewCustomers", array()), "html", null, true);
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customers"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"average-order-value\" class=\"value\">
                    ";
        // line 38
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 38, $this->getSourceContext()); })()), "averageOrderValue", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 38, $this->getSourceContext()); })()), "baseCurrency", array()), "code", array()));
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_a4cb77e78234fdd16a14f71dbeb50196e12d2c712254c81d648a05d4ba3fdffb->leave($__internal_a4cb77e78234fdd16a14f71dbeb50196e12d2c712254c81d648a05d4ba3fdffb_prof);

        
        $__internal_61684dc0e2655878b5a0d05b6be356b21c3b6d169e68b6bcc1d1daf2abbb6e28->leave($__internal_61684dc0e2655878b5a0d05b6be356b21c3b6d169e68b6bcc1d1daf2abbb6e28_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 41,  83 => 38,  73 => 31,  67 => 28,  57 => 21,  51 => 18,  41 => 11,  35 => 8,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <div class=\"ui center aligned four column stackable divided grid\">
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"total-sales\" class=\"value\">
                    {{ money.format(statistics.totalSales, channel.baseCurrency.code) }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.sales'|trans }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-orders\" class=\"value\">
                    {{ statistics.numberOfNewOrders }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.fulfilled_orders'|trans }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-customers\" class=\"value\">
                    {{ statistics.numberOfNewCustomers }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.customers'|trans }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"average-order-value\" class=\"value\">
                    {{ money.format(statistics.averageOrderValue, channel.baseCurrency.code) }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.average_order_value'|trans }}
                </div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/Dashboard/_statistics.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Dashboard\\_statistics.html.twig");
    }
}
