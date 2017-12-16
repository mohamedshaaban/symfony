<?php

/* @SyliusShop/_header.html.twig */
class __TwigTemplate_43ba94d29dd85f598e05f85e1145e0300d1646800d84807feb2ea62d2e96a2c2 extends Twig_Template
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
        $__internal_cc610e8899eca66644feb5d19a2f104a214fae0f2e3c49c934b83b738062a2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc610e8899eca66644feb5d19a2f104a214fae0f2e3c49c934b83b738062a2d6->enter($__internal_cc610e8899eca66644feb5d19a2f104a214fae0f2e3c49c934b83b738062a2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_header.html.twig"));

        $__internal_ee8f84e189ad7ec5a1e79d137d9bfc64d026c28ddceba699211efaf8cd4a7d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8f84e189ad7ec5a1e79d137d9bfc64d026c28ddceba699211efaf8cd4a7d46->enter($__internal_ee8f84e189ad7ec5a1e79d137d9bfc64d026c28ddceba699211efaf8cd4a7d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_header.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui three column stackable grid\">
        <div class=\"column\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
        echo "\" alt=\"Sylius logo\" class=\"ui small image\" /></a>
        </div>
        <div class=\"column\">
            ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.header"));
        echo "
        </div>
        <div class=\"right aligned column\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_cart_summary", array("template" => "@SyliusShop/Cart/_widget.html.twig")));
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_cc610e8899eca66644feb5d19a2f104a214fae0f2e3c49c934b83b738062a2d6->leave($__internal_cc610e8899eca66644feb5d19a2f104a214fae0f2e3c49c934b83b738062a2d6_prof);

        
        $__internal_ee8f84e189ad7ec5a1e79d137d9bfc64d026c28ddceba699211efaf8cd4a7d46->leave($__internal_ee8f84e189ad7ec5a1e79d137d9bfc64d026c28ddceba699211efaf8cd4a7d46_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  38 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui basic segment\">
    <div class=\"ui three column stackable grid\">
        <div class=\"column\">
            <a href=\"{{ path('sylius_shop_homepage') }}\"><img src=\"{{ asset('assets/shop/img/logo.png') }}\" alt=\"Sylius logo\" class=\"ui small image\" /></a>
        </div>
        <div class=\"column\">
            {{ sonata_block_render_event('sylius.shop.layout.header') }}
        </div>
        <div class=\"right aligned column\">
            {{ render(url('sylius_shop_partial_cart_summary', {'template': '@SyliusShop/Cart/_widget.html.twig'})) }}
        </div>
    </div>
</div>
", "@SyliusShop/_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\_header.html.twig");
    }
}
