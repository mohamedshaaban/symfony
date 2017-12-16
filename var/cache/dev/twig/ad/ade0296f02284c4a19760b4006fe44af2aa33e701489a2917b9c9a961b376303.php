<?php

/* SyliusShopBundle:Checkout/Complete:_header.html.twig */
class __TwigTemplate_5d4b70022dce5a7bf97a09544d7e11c61a52dbb5c4416de1cfd602b9835aa963 extends Twig_Template
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
        $__internal_a654156666d570b02df26ba8ce04f33314d7c877a6ffe79f3e760193736c8be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a654156666d570b02df26ba8ce04f33314d7c877a6ffe79f3e760193736c8be2->enter($__internal_a654156666d570b02df26ba8ce04f33314d7c877a6ffe79f3e760193736c8be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_header.html.twig"));

        $__internal_fabbb46ee8367f0c0b2a035af7a2bebffdffd2f22e39fcf7ea56a534ee09ec80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabbb46ee8367f0c0b2a035af7a2bebffdffd2f22e39fcf7ea56a534ee09ec80->enter($__internal_fabbb46ee8367f0c0b2a035af7a2bebffdffd2f22e39fcf7ea56a534ee09ec80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_header.html.twig"));

        // line 1
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusShopBundle:Checkout/Complete:_header.html.twig", 1);
        // line 2
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.summary_of_your_order"), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\" id=\"sylius-order-currency-code\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 10, $this->getSourceContext()); })()), "currencyCode", array()), "html", null, true);
        echo "
                </div>
                <div class=\"item\" id=\"sylius-order-locale-name\">
                    ";
        // line 13
        echo $context["flags"]->macro_fromLocaleCode(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 13, $this->getSourceContext()); })()), "localeCode", array()));
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\LocaleExtension')->locale(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 13, $this->getSourceContext()); })()), "localeCode", array()));
        echo "
                </div>
            </div>
        </div>
    </div>
</h1>
";
        
        $__internal_a654156666d570b02df26ba8ce04f33314d7c877a6ffe79f3e760193736c8be2->leave($__internal_a654156666d570b02df26ba8ce04f33314d7c877a6ffe79f3e760193736c8be2_prof);

        
        $__internal_fabbb46ee8367f0c0b2a035af7a2bebffdffd2f22e39fcf7ea56a534ee09ec80->leave($__internal_fabbb46ee8367f0c0b2a035af7a2bebffdffd2f22e39fcf7ea56a534ee09ec80_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Complete:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  40 => 10,  33 => 6,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.summary_of_your_order'|trans }}
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\" id=\"sylius-order-currency-code\">
                    {{ order.currencyCode }}
                </div>
                <div class=\"item\" id=\"sylius-order-locale-name\">
                    {{ flags.fromLocaleCode(sylius.localeCode) }}{{ sylius.localeCode|locale }}
                </div>
            </div>
        </div>
    </div>
</h1>
", "SyliusShopBundle:Checkout/Complete:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/Complete/_header.html.twig");
    }
}
