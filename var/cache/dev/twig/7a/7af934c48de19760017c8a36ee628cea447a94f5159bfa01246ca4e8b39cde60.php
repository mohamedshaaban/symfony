<?php

/* SyliusShopBundle:Product:show.html.twig */
class __TwigTemplate_c27ef4c762658e2773ec77bfeb99732048b0bd60dcefaf2d5f46f7c1359d12a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Product:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6377e2c35c0ae20fa5c3afc07d4a12afa735f793cb225f5f98f44927d9057302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6377e2c35c0ae20fa5c3afc07d4a12afa735f793cb225f5f98f44927d9057302->enter($__internal_6377e2c35c0ae20fa5c3afc07d4a12afa735f793cb225f5f98f44927d9057302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:show.html.twig"));

        $__internal_360c5f5b8562ff21e41d982659efb3eaa8a44bde923367324b935735cd6bc6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360c5f5b8562ff21e41d982659efb3eaa8a44bde923367324b935735cd6bc6b0->enter($__internal_360c5f5b8562ff21e41d982659efb3eaa8a44bde923367324b935735cd6bc6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6377e2c35c0ae20fa5c3afc07d4a12afa735f793cb225f5f98f44927d9057302->leave($__internal_6377e2c35c0ae20fa5c3afc07d4a12afa735f793cb225f5f98f44927d9057302_prof);

        
        $__internal_360c5f5b8562ff21e41d982659efb3eaa8a44bde923367324b935735cd6bc6b0->leave($__internal_360c5f5b8562ff21e41d982659efb3eaa8a44bde923367324b935735cd6bc6b0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d7d91cf3454267c30d164b536ef33dc62b0c59366e132fbd75bcb9277e4d0107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d91cf3454267c30d164b536ef33dc62b0c59366e132fbd75bcb9277e4d0107->enter($__internal_d7d91cf3454267c30d164b536ef33dc62b0c59366e132fbd75bcb9277e4d0107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bb42d14316789e28e6b5d523ff342efad428de0da296e6f255cef1c57c6ccda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb42d14316789e28e6b5d523ff342efad428de0da296e6f255cef1c57c6ccda2->enter($__internal_bb42d14316789e28e6b5d523ff342efad428de0da296e6f255cef1c57c6ccda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("@SyliusShop/Product/Show/_breadcrumb.html.twig", "SyliusShopBundle:Product:show.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_images", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 11
        $this->loadTemplate("@SyliusShop/Product/Show/_images.html.twig", "SyliusShopBundle:Product:show.html.twig", 11)->display($context);
        // line 12
        echo "
        ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_images", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
    </div>
    <div class=\"column\">
        ";
        // line 16
        $this->loadTemplate("@SyliusShop/Product/Show/_header.html.twig", "SyliusShopBundle:Product:show.html.twig", 16)->display($context);
        // line 17
        echo "
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_product_header", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 18, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 20
        $this->loadTemplate("@SyliusShop/Product/Show/_reviews.html.twig", "SyliusShopBundle:Product:show.html.twig", 20)->display($context);
        // line 21
        echo "
        ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_reviews", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 22, $this->getSourceContext()); })()))));
        echo "

        <div class=\"ui stackable grid\">
            <div class=\"four wide column\">
                ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 26, $this->getSourceContext()); })()), "variants", array()), "empty", array(), "method")) {
            // line 27
            echo "                ";
            $this->loadTemplate("@SyliusShop/Product/Show/_price.html.twig", "SyliusShopBundle:Product:show.html.twig", 27)->display($context);
            // line 28
            echo "                ";
        }
        // line 29
        echo "            </div>
            <div class=\"twelve wide right aligned column\">
                <span class=\"ui sub header\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 31, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_price", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 35, $this->getSourceContext()); })()))));
        echo "

        <div class=\"ui basic segment\">
            <p>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 38, $this->getSourceContext()); })()), "shortDescription", array()), "html", null, true);
        echo "</p>
        </div>

        ";
        // line 41
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_description", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 41, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 43
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 43, $this->getSourceContext()); })()), "isConfigurable", array(), "method") && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 43, $this->getSourceContext()); })()), "getVariantSelectionMethod", array(), "method") == "match")) &&  !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 43, $this->getSourceContext()); })()), "variants", array()), "empty", array(), "method"))) {
            // line 44
            echo "            ";
            $this->loadTemplate("@SyliusShop/Product/Show/_variantsPricing.html.twig", "SyliusShopBundle:Product:show.html.twig", 44)->display(array_merge($context, array("pricing" => call_user_func_array($this->env->getFunction('sylius_product_variant_prices')->getCallable(), array((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 44, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 44, $this->getSourceContext()); })()), "channel", array()))))));
            // line 45
            echo "        ";
        }
        // line 46
        echo "        ";
        $this->loadTemplate("@SyliusShop/Product/Show/_inventory.html.twig", "SyliusShopBundle:Product:show.html.twig", 46)->display($context);
        // line 47
        echo "        <div class=\"ui hidden divider\"></div>

        ";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_add_to_cart", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 49, $this->getSourceContext()); })()))));
        echo "
    </div>
</div>

";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_tabs", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 53, $this->getSourceContext()); })()))));
        echo "

";
        // line 55
        $this->loadTemplate("@SyliusShop/Product/Show/_tabs.html.twig", "SyliusShopBundle:Product:show.html.twig", 55)->display($context);
        // line 56
        echo "
";
        // line 57
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_associations", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 57, $this->getSourceContext()); })()))));
        echo "

";
        // line 59
        $this->loadTemplate("@SyliusShop/Product/Show/_associations.html.twig", "SyliusShopBundle:Product:show.html.twig", 59)->display($context);
        
        $__internal_bb42d14316789e28e6b5d523ff342efad428de0da296e6f255cef1c57c6ccda2->leave($__internal_bb42d14316789e28e6b5d523ff342efad428de0da296e6f255cef1c57c6ccda2_prof);

        
        $__internal_d7d91cf3454267c30d164b536ef33dc62b0c59366e132fbd75bcb9277e4d0107->leave($__internal_d7d91cf3454267c30d164b536ef33dc62b0c59366e132fbd75bcb9277e4d0107_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 59,  163 => 57,  160 => 56,  158 => 55,  153 => 53,  146 => 49,  142 => 47,  139 => 46,  136 => 45,  133 => 44,  131 => 43,  126 => 41,  120 => 38,  114 => 35,  107 => 31,  103 => 29,  100 => 28,  97 => 27,  95 => 26,  88 => 22,  85 => 21,  83 => 20,  78 => 18,  75 => 17,  73 => 16,  67 => 13,  64 => 12,  62 => 11,  57 => 9,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
{% include '@SyliusShop/Product/Show/_breadcrumb.html.twig' %}
<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        {{ sonata_block_render_event('sylius.shop.product.show.before_images', {'product': product}) }}

        {% include '@SyliusShop/Product/Show/_images.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.product.show.after_images', {'product': product}) }}
    </div>
    <div class=\"column\">
        {% include '@SyliusShop/Product/Show/_header.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.product.show.after_product_header', {'product': product}) }}

        {% include '@SyliusShop/Product/Show/_reviews.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.product.show.after_reviews', {'product': product}) }}

        <div class=\"ui stackable grid\">
            <div class=\"four wide column\">
                {% if not product.variants.empty() %}
                {% include '@SyliusShop/Product/Show/_price.html.twig' %}
                {% endif %}
            </div>
            <div class=\"twelve wide right aligned column\">
                <span class=\"ui sub header\">{{ product.code }}</span>
            </div>
        </div>

        {{ sonata_block_render_event('sylius.shop.product.show.after_price', {'product': product}) }}

        <div class=\"ui basic segment\">
            <p>{{ product.shortDescription }}</p>
        </div>

        {{ sonata_block_render_event('sylius.shop.product.show.after_description', {'product': product}) }}

        {% if product.isConfigurable() and product.getVariantSelectionMethod() == 'match' and not product.variants.empty() %}
            {% include '@SyliusShop/Product/Show/_variantsPricing.html.twig' with {'pricing': sylius_product_variant_prices(product, sylius.channel)} %}
        {% endif %}
        {% include '@SyliusShop/Product/Show/_inventory.html.twig' %}
        <div class=\"ui hidden divider\"></div>

        {{ sonata_block_render_event('sylius.shop.product.show.after_add_to_cart', {'product': product}) }}
    </div>
</div>

{{ sonata_block_render_event('sylius.shop.product.show.before_tabs', {'product': product}) }}

{% include '@SyliusShop/Product/Show/_tabs.html.twig' %}

{{ sonata_block_render_event('sylius.shop.product.show.before_associations', {'product': product}) }}

{% include '@SyliusShop/Product/Show/_associations.html.twig' %}
{% endblock %}
", "SyliusShopBundle:Product:show.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/show.html.twig");
    }
}
