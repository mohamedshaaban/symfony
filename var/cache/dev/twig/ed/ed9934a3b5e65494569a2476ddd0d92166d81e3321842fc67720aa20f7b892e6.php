<?php

/* SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig */
class __TwigTemplate_13d5339f45fa03abd8ddc0f5d7b9de405ed478f5776343b7dd67c8567fc2e830 extends Twig_Template
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
        $__internal_da89aa428116837368e98e5f2f830c419a1ba3f0303634c8bdcb95311575d050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da89aa428116837368e98e5f2f830c419a1ba3f0303634c8bdcb95311575d050->enter($__internal_da89aa428116837368e98e5f2f830c419a1ba3f0303634c8bdcb95311575d050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig"));

        $__internal_8223b538be44afa727c2cd1a027272cdd870980bc5d5462fb1cae5d8655d8ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8223b538be44afa727c2cd1a027272cdd870980bc5d5462fb1cae5d8655d8ad1->enter($__internal_8223b538be44afa727c2cd1a027272cdd870980bc5d5462fb1cae5d8655d8ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig", 1);
        // line 2
        echo "
<div class=\"title";
        // line 3
        if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 3, $this->getSourceContext()); })()), "index0", array()))) {
            echo " active";
        }
        echo "\">
    <i class=\"dropdown icon\"></i>
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 5, $this->getSourceContext()); })()), "channel", array()), "name", array()), "html", null, true);
        echo "
</div>
<div class=\"content";
        // line 7
        if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 7, $this->getSourceContext()); })()), "index0", array()))) {
            echo " active";
        }
        echo "\">
    <div class=\"ui center aligned stackable divided grid\">
        <div class=\"four column row\">
            <div class=\"column middle aligned\">
                <div class=\"ui tiny statistic\">
                    <div class=\"value sylius-channel-name\">
                        ";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 13, $this->getSourceContext()); })()), "channel", array()), "color", array()))) {
            // line 14
            echo "                            <span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 14, $this->getSourceContext()); })()), "channel", array()), "color", array()), "html", null, true);
            echo "\"></span>
                        ";
        }
        // line 16
        echo "                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 16, $this->getSourceContext()); })()), "channel", array()), "name", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.channel"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-count\">
                        ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 26, $this->getSourceContext()); })()), "ordersCount", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-total\">
                        ";
        // line 36
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 36, $this->getSourceContext()); })()), "ordersValue", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 36, $this->getSourceContext()); })()), "channel", array()), "baseCurrency", array()), "code", array()));
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total_value_of_orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-average-order-value\">
                        ";
        // line 46
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 46, $this->getSourceContext()); })()), "averageOrderValue", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 46, $this->getSourceContext()); })()), "channel", array()), "baseCurrency", array()), "code", array()));
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_da89aa428116837368e98e5f2f830c419a1ba3f0303634c8bdcb95311575d050->leave($__internal_da89aa428116837368e98e5f2f830c419a1ba3f0303634c8bdcb95311575d050_prof);

        
        $__internal_8223b538be44afa727c2cd1a027272cdd870980bc5d5462fb1cae5d8655d8ad1->leave($__internal_8223b538be44afa727c2cd1a027272cdd870980bc5d5462fb1cae5d8655d8ad1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 49,  110 => 46,  100 => 39,  94 => 36,  84 => 29,  78 => 26,  68 => 19,  61 => 16,  55 => 14,  53 => 13,  42 => 7,  37 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Common/Macro/money.html.twig' as money %}

<div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
    <i class=\"dropdown icon\"></i>
    {{ statistic.channel.name }}
</div>
<div class=\"content{% if 0 == loop.index0 %} active{% endif %}\">
    <div class=\"ui center aligned stackable divided grid\">
        <div class=\"four column row\">
            <div class=\"column middle aligned\">
                <div class=\"ui tiny statistic\">
                    <div class=\"value sylius-channel-name\">
                        {% if statistic.channel.color is not empty %}
                            <span class=\"ui large empty horizontal circular label\" style=\"background-color: {{ statistic.channel.color }}\"></span>
                        {% endif %}
                        {{ statistic.channel.name }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.channel'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-count\">
                        {{ statistic.ordersCount }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.orders'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-total\">
                        {{ money.format(statistic.ordersValue, statistic.channel.baseCurrency.code) }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.total_value_of_orders'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-average-order-value\">
                        {{ money.format(statistic.averageOrderValue, statistic.channel.baseCurrency.code) }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.average_order_value'|trans }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "SyliusAdminBundle:Customer/Show/Statistics:_perChannel.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Show/Statistics/_perChannel.html.twig");
    }
}
