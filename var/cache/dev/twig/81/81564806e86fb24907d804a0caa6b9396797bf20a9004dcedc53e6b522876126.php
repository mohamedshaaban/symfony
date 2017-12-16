<?php

/* SyliusAdminBundle:Dashboard:_statistics.html.twig */
class __TwigTemplate_5e456d530ad9c41005190b482ae8582f62c2412937ceac20b29b1b6c9843506f extends Twig_Template
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
        $__internal_49b837330c89d5193408190415e95bd8b68523c222401f1d478150b1e219afb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b837330c89d5193408190415e95bd8b68523c222401f1d478150b1e219afb1->enter($__internal_49b837330c89d5193408190415e95bd8b68523c222401f1d478150b1e219afb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_statistics.html.twig"));

        $__internal_2dd0a6dd41c17f8bfa568a89899064c46d914beefd1476698a859ef4ee6b6d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd0a6dd41c17f8bfa568a89899064c46d914beefd1476698a859ef4ee6b6d46->enter($__internal_2dd0a6dd41c17f8bfa568a89899064c46d914beefd1476698a859ef4ee6b6d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_statistics.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Dashboard:_statistics.html.twig", 1);
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
        
        $__internal_49b837330c89d5193408190415e95bd8b68523c222401f1d478150b1e219afb1->leave($__internal_49b837330c89d5193408190415e95bd8b68523c222401f1d478150b1e219afb1_prof);

        
        $__internal_2dd0a6dd41c17f8bfa568a89899064c46d914beefd1476698a859ef4ee6b6d46->leave($__internal_2dd0a6dd41c17f8bfa568a89899064c46d914beefd1476698a859ef4ee6b6d46_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_statistics.html.twig";
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
", "SyliusAdminBundle:Dashboard:_statistics.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Dashboard/_statistics.html.twig");
    }
}
