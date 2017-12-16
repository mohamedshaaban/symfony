<?php

/* SyliusShopBundle::_header.html.twig */
class __TwigTemplate_87facfb68956252fffb9a0575dcbce27c7779a0a427f95634c881e3762e22c8f extends Twig_Template
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
        $__internal_8934d0299ef290bf2ecdb5e147ff1eb201a6f0a7c2d42c6484c1c8088066f495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8934d0299ef290bf2ecdb5e147ff1eb201a6f0a7c2d42c6484c1c8088066f495->enter($__internal_8934d0299ef290bf2ecdb5e147ff1eb201a6f0a7c2d42c6484c1c8088066f495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::_header.html.twig"));

        $__internal_5cb03df00a896ee529f4029c8bcbd05ba3793ecaa359e2b9aa6d7e3f0643016a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb03df00a896ee529f4029c8bcbd05ba3793ecaa359e2b9aa6d7e3f0643016a->enter($__internal_5cb03df00a896ee529f4029c8bcbd05ba3793ecaa359e2b9aa6d7e3f0643016a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::_header.html.twig"));

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
        
        $__internal_8934d0299ef290bf2ecdb5e147ff1eb201a6f0a7c2d42c6484c1c8088066f495->leave($__internal_8934d0299ef290bf2ecdb5e147ff1eb201a6f0a7c2d42c6484c1c8088066f495_prof);

        
        $__internal_5cb03df00a896ee529f4029c8bcbd05ba3793ecaa359e2b9aa6d7e3f0643016a->leave($__internal_5cb03df00a896ee529f4029c8bcbd05ba3793ecaa359e2b9aa6d7e3f0643016a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::_header.html.twig";
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
", "SyliusShopBundle::_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/_header.html.twig");
    }
}
