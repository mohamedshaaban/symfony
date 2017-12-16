<?php

/* SyliusShopBundle:ProductReview:index.html.twig */
class __TwigTemplate_0becc084d69847969ea56496ab4bb65625fe73a7e4977d91b6b96261d9e3dc05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:ProductReview:index.html.twig", 1);
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
        $__internal_4afebc5890c6eee57e4efda5e3fae538c1e6407539166de07edeaae61e870294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afebc5890c6eee57e4efda5e3fae538c1e6407539166de07edeaae61e870294->enter($__internal_4afebc5890c6eee57e4efda5e3fae538c1e6407539166de07edeaae61e870294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:index.html.twig"));

        $__internal_bb30d846f3127772b83d5591fb4d3cb407e0e4f37e965a2b643599cde19e2ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb30d846f3127772b83d5591fb4d3cb407e0e4f37e965a2b643599cde19e2ed6->enter($__internal_bb30d846f3127772b83d5591fb4d3cb407e0e4f37e965a2b643599cde19e2ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4afebc5890c6eee57e4efda5e3fae538c1e6407539166de07edeaae61e870294->leave($__internal_4afebc5890c6eee57e4efda5e3fae538c1e6407539166de07edeaae61e870294_prof);

        
        $__internal_bb30d846f3127772b83d5591fb4d3cb407e0e4f37e965a2b643599cde19e2ed6->leave($__internal_bb30d846f3127772b83d5591fb4d3cb407e0e4f37e965a2b643599cde19e2ed6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9759cede162fec02e6a8c9c5d329b90ae5f016e9be0242d9fed83d1b1b2082d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9759cede162fec02e6a8c9c5d329b90ae5f016e9be0242d9fed83d1b1b2082d7->enter($__internal_9759cede162fec02e6a8c9c5d329b90ae5f016e9be0242d9fed83d1b1b2082d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c34bab773c84b95603c0e1ae08dd24b13bb40f0b99699cb95533d873e777584c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34bab773c84b95603c0e1ae08dd24b13bb40f0b99699cb95533d873e777584c->enter($__internal_c34bab773c84b95603c0e1ae08dd24b13bb40f0b99699cb95533d873e777584c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.before_product_box", array("product_reviews" => (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new Twig_Error_Runtime('Variable "product_reviews" does not exist.', 7, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_show_by_slug", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"), "template" => "@SyliusShop/Product/_box.html.twig")));
        // line 14
        echo "

            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.after_product_box", array("product_reviews" => (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new Twig_Error_Runtime('Variable "product_reviews" does not exist.', 16, $this->getSourceContext()); })()))));
        echo "
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\" id=\"sylius-product-reviews\">
                ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.before_list", array("product_reviews" => (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new Twig_Error_Runtime('Variable "product_reviews" does not exist.', 20, $this->getSourceContext()); })()))));
        echo "

                ";
        // line 22
        $this->loadTemplate("@SyliusShop/ProductReview/_list.html.twig", "SyliusShopBundle:ProductReview:index.html.twig", 22)->display($context);
        // line 23
        echo "
                ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.after_list", array("product_reviews" => (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new Twig_Error_Runtime('Variable "product_reviews" does not exist.', 24, $this->getSourceContext()); })()))));
        echo "
                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_create", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 25, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "slug"), "method"))), "html", null, true);
        echo "\">
                    <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_your_review"), "html", null, true);
        echo "</div>
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_c34bab773c84b95603c0e1ae08dd24b13bb40f0b99699cb95533d873e777584c->leave($__internal_c34bab773c84b95603c0e1ae08dd24b13bb40f0b99699cb95533d873e777584c_prof);

        
        $__internal_9759cede162fec02e6a8c9c5d329b90ae5f016e9be0242d9fed83d1b1b2082d7->leave($__internal_9759cede162fec02e6a8c9c5d329b90ae5f016e9be0242d9fed83d1b1b2082d7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  87 => 25,  83 => 24,  80 => 23,  78 => 22,  73 => 20,  66 => 16,  62 => 14,  60 => 11,  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.shop.product_review.index.before_product_box', {'product_reviews': product_reviews}) }}

            {{
                render(url('sylius_shop_partial_product_show_by_slug', {
                    'slug': app.request.attributes.get('slug'),
                    'template': '@SyliusShop/Product/_box.html.twig'
                }))
            }}

            {{ sonata_block_render_event('sylius.shop.product_review.index.after_product_box', {'product_reviews': product_reviews}) }}
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\" id=\"sylius-product-reviews\">
                {{ sonata_block_render_event('sylius.shop.product_review.index.before_list', {'product_reviews': product_reviews}) }}

                {% include '@SyliusShop/ProductReview/_list.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.product_review.index.after_list', {'product_reviews': product_reviews}) }}
                <a href=\"{{ path('sylius_shop_product_review_create', {'slug': app.request.get('slug')}) }}\">
                    <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> {{ 'sylius.ui.add_your_review'|trans }}</div>
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:ProductReview:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/ProductReview/index.html.twig");
    }
}
