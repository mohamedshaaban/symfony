<?php

/* SyliusShopBundle:Account/Order/Index:_header.html.twig */
class __TwigTemplate_ace57c72b30a0a33420506736c5b4f706b9b6d310341ae5cf65987248e699510 extends Twig_Template
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
        $__internal_5c7c7c939f5cffcd851d9c2ce24051065f913e5bc6d8fa6dee4c4e3871656587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7c7c939f5cffcd851d9c2ce24051065f913e5bc6d8fa6dee4c4e3871656587->enter($__internal_5c7c7c939f5cffcd851d9c2ce24051065f913e5bc6d8fa6dee4c4e3871656587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Index:_header.html.twig"));

        $__internal_96bd437e7df737882bcff8b8daa2c0159a8aac8e203e37355464ed58dac53b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bd437e7df737882bcff8b8daa2c0159a8aac8e203e37355464ed58dac53b5c->enter($__internal_96bd437e7df737882bcff8b8daa2c0159a8aac8e203e37355464ed58dac53b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Index:_header.html.twig"));

        // line 1
        echo "<h1 class=\"ui header\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_history"), "html", null, true);
        echo "
    <div class=\"sub header\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.browse_your_orders_from_the_past"), "html", null, true);
        echo "</div>

    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.order.index.header", array("orders" => (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 5, $this->getSourceContext()); })()))));
        echo "
</h1>
";
        
        $__internal_5c7c7c939f5cffcd851d9c2ce24051065f913e5bc6d8fa6dee4c4e3871656587->leave($__internal_5c7c7c939f5cffcd851d9c2ce24051065f913e5bc6d8fa6dee4c4e3871656587_prof);

        
        $__internal_96bd437e7df737882bcff8b8daa2c0159a8aac8e203e37355464ed58dac53b5c->leave($__internal_96bd437e7df737882bcff8b8daa2c0159a8aac8e203e37355464ed58dac53b5c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Index:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 class=\"ui header\">
    {{ 'sylius.ui.order_history'|trans }}
    <div class=\"sub header\">{{ 'sylius.ui.browse_your_orders_from_the_past'|trans }}</div>

    {{ sonata_block_render_event('sylius.shop.account.order.index.header', {'orders': orders}) }}
</h1>
", "SyliusShopBundle:Account/Order/Index:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/Index/_header.html.twig");
    }
}
