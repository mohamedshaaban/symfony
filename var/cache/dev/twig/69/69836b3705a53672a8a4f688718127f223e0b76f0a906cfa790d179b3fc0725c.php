<?php

/* @SyliusShop/Product/Show/_price.html.twig */
class __TwigTemplate_4d175eccc1d375e9a8b8aeebab52ece40811b2c5a2d605c24a5b9d11a2ccbbca extends Twig_Template
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
        $__internal_a364e68a2c69b0ca07ed4d10c3551e5b3d7261f87065ec727629fbecd7fa4150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a364e68a2c69b0ca07ed4d10c3551e5b3d7261f87065ec727629fbecd7fa4150->enter($__internal_a364e68a2c69b0ca07ed4d10c3551e5b3d7261f87065ec727629fbecd7fa4150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_price.html.twig"));

        $__internal_59c6d4f85f46bb4e4e4ca121182bc0925a0ad421c293ca83cc9a941b5f2d3c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c6d4f85f46bb4e4e4ca121182bc0925a0ad421c293ca83cc9a941b5f2d3c0c->enter($__internal_59c6d4f85f46bb4e4e4ca121182bc0925a0ad421c293ca83cc9a941b5f2d3c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_price.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Show/_price.html.twig", 1);
        // line 2
        echo "
<span class=\"ui huge header\" id=\"product-price\">
    ";
        // line 4
        echo $context["money"]->macro_calculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()))));
        echo "
</span>
";
        
        $__internal_a364e68a2c69b0ca07ed4d10c3551e5b3d7261f87065ec727629fbecd7fa4150->leave($__internal_a364e68a2c69b0ca07ed4d10c3551e5b3d7261f87065ec727629fbecd7fa4150_prof);

        
        $__internal_59c6d4f85f46bb4e4e4ca121182bc0925a0ad421c293ca83cc9a941b5f2d3c0c->leave($__internal_59c6d4f85f46bb4e4e4ca121182bc0925a0ad421c293ca83cc9a941b5f2d3c0c_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<span class=\"ui huge header\" id=\"product-price\">
    {{ money.calculatePrice(product|sylius_resolve_variant) }}
</span>
", "@SyliusShop/Product/Show/_price.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\_price.html.twig");
    }
}
