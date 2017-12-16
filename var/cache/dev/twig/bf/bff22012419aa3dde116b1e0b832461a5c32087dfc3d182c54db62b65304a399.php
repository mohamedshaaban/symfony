<?php

/* @SyliusShop/Product/show.html.twig */
class __TwigTemplate_f3f3d79a314dbd3286df24cd54cf980df4aee7a77bd8856fbbed48e69910ce39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Product/show.html.twig", 1);
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
        $__internal_b5bb2198e8b03ccb2fd7c7f9edde9e5a52e239a13c6f75eda1cfa1e1b752b6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5bb2198e8b03ccb2fd7c7f9edde9e5a52e239a13c6f75eda1cfa1e1b752b6ed->enter($__internal_b5bb2198e8b03ccb2fd7c7f9edde9e5a52e239a13c6f75eda1cfa1e1b752b6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/show.html.twig"));

        $__internal_c1c0ebacf059d5c1258b5b5338b6ade3b808e2fb5933717e9e950d835fb01600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c0ebacf059d5c1258b5b5338b6ade3b808e2fb5933717e9e950d835fb01600->enter($__internal_c1c0ebacf059d5c1258b5b5338b6ade3b808e2fb5933717e9e950d835fb01600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5bb2198e8b03ccb2fd7c7f9edde9e5a52e239a13c6f75eda1cfa1e1b752b6ed->leave($__internal_b5bb2198e8b03ccb2fd7c7f9edde9e5a52e239a13c6f75eda1cfa1e1b752b6ed_prof);

        
        $__internal_c1c0ebacf059d5c1258b5b5338b6ade3b808e2fb5933717e9e950d835fb01600->leave($__internal_c1c0ebacf059d5c1258b5b5338b6ade3b808e2fb5933717e9e950d835fb01600_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8732384d73b89bc51cac44c3f9c684f83e57e22ab1fc7033b449b98468c1dea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8732384d73b89bc51cac44c3f9c684f83e57e22ab1fc7033b449b98468c1dea8->enter($__internal_8732384d73b89bc51cac44c3f9c684f83e57e22ab1fc7033b449b98468c1dea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_185ae3dbafc94d742d36be3e7ef48fe12084f7d6281e08680d2c78800215b2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185ae3dbafc94d742d36be3e7ef48fe12084f7d6281e08680d2c78800215b2f0->enter($__internal_185ae3dbafc94d742d36be3e7ef48fe12084f7d6281e08680d2c78800215b2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("@SyliusShop/Product/Show/_breadcrumb.html.twig", "@SyliusShop/Product/show.html.twig", 4)->display($context);
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
        $this->loadTemplate("@SyliusShop/Product/Show/_images.html.twig", "@SyliusShop/Product/show.html.twig", 11)->display($context);
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
        $this->loadTemplate("@SyliusShop/Product/Show/_header.html.twig", "@SyliusShop/Product/show.html.twig", 16)->display($context);
        // line 17
        echo "
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_product_header", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 18, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 20
        $this->loadTemplate("@SyliusShop/Product/Show/_reviews.html.twig", "@SyliusShop/Product/show.html.twig", 20)->display($context);
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
            $this->loadTemplate("@SyliusShop/Product/Show/_price.html.twig", "@SyliusShop/Product/show.html.twig", 27)->display($context);
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
\t\t\t<div class=\"twelve wide right aligned column\">
                ";
        // line 34
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 34, $this->getSourceContext()); })()), "has_discount", array()) == 1)) {
            // line 35
            echo "                    <p>Has Discount.</p>
                ";
        }
        // line 37
        echo "                
            </div>

        </div>

        ";
        // line 42
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_price", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 42, $this->getSourceContext()); })()))));
        echo "

        <div class=\"ui basic segment\">
            <p>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 45, $this->getSourceContext()); })()), "shortDescription", array()), "html", null, true);
        echo "</p>
        </div>

        ";
        // line 48
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_description", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 48, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 50
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 50, $this->getSourceContext()); })()), "isConfigurable", array(), "method") && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 50, $this->getSourceContext()); })()), "getVariantSelectionMethod", array(), "method") == "match")) &&  !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 50, $this->getSourceContext()); })()), "variants", array()), "empty", array(), "method"))) {
            // line 51
            echo "            ";
            $this->loadTemplate("@SyliusShop/Product/Show/_variantsPricing.html.twig", "@SyliusShop/Product/show.html.twig", 51)->display(array_merge($context, array("pricing" => call_user_func_array($this->env->getFunction('sylius_product_variant_prices')->getCallable(), array((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 51, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 51, $this->getSourceContext()); })()), "channel", array()))))));
            // line 52
            echo "        ";
        }
        // line 53
        echo "        ";
        $this->loadTemplate("@SyliusShop/Product/Show/_inventory.html.twig", "@SyliusShop/Product/show.html.twig", 53)->display($context);
        // line 54
        echo "        <div class=\"ui hidden divider\"></div>

        ";
        // line 56
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_add_to_cart", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 56, $this->getSourceContext()); })()))));
        echo "
    </div>
</div>

";
        // line 60
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_tabs", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 60, $this->getSourceContext()); })()))));
        echo "

";
        // line 62
        $this->loadTemplate("@SyliusShop/Product/Show/_tabs.html.twig", "@SyliusShop/Product/show.html.twig", 62)->display($context);
        // line 63
        echo "
";
        // line 64
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_associations", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 64, $this->getSourceContext()); })()))));
        echo "

";
        // line 66
        $this->loadTemplate("@SyliusShop/Product/Show/_associations.html.twig", "@SyliusShop/Product/show.html.twig", 66)->display($context);
        
        $__internal_185ae3dbafc94d742d36be3e7ef48fe12084f7d6281e08680d2c78800215b2f0->leave($__internal_185ae3dbafc94d742d36be3e7ef48fe12084f7d6281e08680d2c78800215b2f0_prof);

        
        $__internal_8732384d73b89bc51cac44c3f9c684f83e57e22ab1fc7033b449b98468c1dea8->leave($__internal_8732384d73b89bc51cac44c3f9c684f83e57e22ab1fc7033b449b98468c1dea8_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 66,  175 => 64,  172 => 63,  170 => 62,  165 => 60,  158 => 56,  154 => 54,  151 => 53,  148 => 52,  145 => 51,  143 => 50,  138 => 48,  132 => 45,  126 => 42,  119 => 37,  115 => 35,  113 => 34,  107 => 31,  103 => 29,  100 => 28,  97 => 27,  95 => 26,  88 => 22,  85 => 21,  83 => 20,  78 => 18,  75 => 17,  73 => 16,  67 => 13,  64 => 12,  62 => 11,  57 => 9,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t<div class=\"twelve wide right aligned column\">
                {% if product.has_discount == 1 %}
                    <p>Has Discount.</p>
                {% endif %}
                
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
", "@SyliusShop/Product/show.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\show.html.twig");
    }
}
