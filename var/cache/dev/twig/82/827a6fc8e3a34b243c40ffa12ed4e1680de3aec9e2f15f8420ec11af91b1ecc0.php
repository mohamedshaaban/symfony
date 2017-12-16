<?php

/* @SyliusShop/Product/Show/Tabs/_reviews.html.twig */
class __TwigTemplate_d8a545ffeffca5cdeadaf37e0f6f9d6ec2a6a1e8bd115c4397973b88c28ce0e2 extends Twig_Template
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
        $__internal_98ef6e5e4d260d02bfaa0ad49751bba7d1822c70562c68f801f0f6773afe896e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ef6e5e4d260d02bfaa0ad49751bba7d1822c70562c68f801f0f6773afe896e->enter($__internal_98ef6e5e4d260d02bfaa0ad49751bba7d1822c70562c68f801f0f6773afe896e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_reviews.html.twig"));

        $__internal_3f2d3ef40dc61fcae55fccf3db40074bad5b6fd4c80475d84b65e583c4a519c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2d3ef40dc61fcae55fccf3db40074bad5b6fd4c80475d84b65e583c4a519c8->enter($__internal_3f2d3ef40dc61fcae55fccf3db40074bad5b6fd4c80475d84b65e583c4a519c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_reviews.html.twig"));

        // line 1
        echo "<div class=\"ui bottom attached tab segment\" data-tab=\"reviews\" id=\"sylius-product-reviews\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_reviews", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_review_latest", array("productId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()), "id", array()), "template" => "@SyliusShop/ProductReview/_list.html.twig")));
        echo "

    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_index", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\">
        <div class=\"ui labeled icon button\"><i class=\"icon list\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_more"), "html", null, true);
        echo "</div>
    </a>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_create", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->getSourceContext()); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->getSourceContext()); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\">
        <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_your_review"), "html", null, true);
        echo "</div>
    </a>
</div>
";
        
        $__internal_98ef6e5e4d260d02bfaa0ad49751bba7d1822c70562c68f801f0f6773afe896e->leave($__internal_98ef6e5e4d260d02bfaa0ad49751bba7d1822c70562c68f801f0f6773afe896e_prof);

        
        $__internal_3f2d3ef40dc61fcae55fccf3db40074bad5b6fd4c80475d84b65e583c4a519c8->leave($__internal_3f2d3ef40dc61fcae55fccf3db40074bad5b6fd4c80475d84b65e583c4a519c8_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  42 => 7,  38 => 6,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui bottom attached tab segment\" data-tab=\"reviews\" id=\"sylius-product-reviews\">
    {{ sonata_block_render_event('sylius.shop.product.show.tab_reviews', {'product': product}) }}

    {{ render(url('sylius_shop_partial_product_review_latest', {'productId': product.id, 'template': '@SyliusShop/ProductReview/_list.html.twig'})) }}

    <a href=\"{{ path('sylius_shop_product_review_index', {'slug': product.slug, '_locale': product.translation.locale}) }}\">
        <div class=\"ui labeled icon button\"><i class=\"icon list\"></i> {{ 'sylius.ui.view_more'|trans }}</div>
    </a>
    <a href=\"{{ path('sylius_shop_product_review_create', {'slug': product.slug, '_locale': product.translation.locale}) }}\">
        <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> {{ 'sylius.ui.add_your_review'|trans }}</div>
    </a>
</div>
", "@SyliusShop/Product/Show/Tabs/_reviews.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\Tabs\\_reviews.html.twig");
    }
}
