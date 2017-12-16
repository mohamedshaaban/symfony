<?php

/* SyliusShopBundle:Account/Order:index.html.twig */
class __TwigTemplate_7de9a0b39e76c2ceaba786990e8745f45977274826b2cbdbabd136057204075e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account/Order:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_499eb0629178cb857d3e7a4c0cc033d77a8e25cc3ef62c88f19b5c5ae0bb9bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499eb0629178cb857d3e7a4c0cc033d77a8e25cc3ef62c88f19b5c5ae0bb9bc3->enter($__internal_499eb0629178cb857d3e7a4c0cc033d77a8e25cc3ef62c88f19b5c5ae0bb9bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order:index.html.twig"));

        $__internal_b4b8f9180606ca2d1c10cc3cad1e5c99af70ba39252e050bca6e1a487e676877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b8f9180606ca2d1c10cc3cad1e5c99af70ba39252e050bca6e1a487e676877->enter($__internal_b4b8f9180606ca2d1c10cc3cad1e5c99af70ba39252e050bca6e1a487e676877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_499eb0629178cb857d3e7a4c0cc033d77a8e25cc3ef62c88f19b5c5ae0bb9bc3->leave($__internal_499eb0629178cb857d3e7a4c0cc033d77a8e25cc3ef62c88f19b5c5ae0bb9bc3_prof);

        
        $__internal_b4b8f9180606ca2d1c10cc3cad1e5c99af70ba39252e050bca6e1a487e676877->leave($__internal_b4b8f9180606ca2d1c10cc3cad1e5c99af70ba39252e050bca6e1a487e676877_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6a72d4ad6ea2278416f8e0a61c5b89ea23264dfe2fb56cad208db2c3a71e4f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a72d4ad6ea2278416f8e0a61c5b89ea23264dfe2fb56cad208db2c3a71e4f9b->enter($__internal_6a72d4ad6ea2278416f8e0a61c5b89ea23264dfe2fb56cad208db2c3a71e4f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_4996dd4b8826f03a30f507d453ce3af91d4189060c1838f9d5135704d5be5785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4996dd4b8826f03a30f507d453ce3af91d4189060c1838f9d5135704d5be5785->enter($__internal_4996dd4b8826f03a30f507d453ce3af91d4189060c1838f9d5135704d5be5785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->loadTemplate("@SyliusShop/Account/Order/Index/_breadcrumb.html.twig", "SyliusShopBundle:Account/Order:index.html.twig", 4)->display($context);
        
        $__internal_4996dd4b8826f03a30f507d453ce3af91d4189060c1838f9d5135704d5be5785->leave($__internal_4996dd4b8826f03a30f507d453ce3af91d4189060c1838f9d5135704d5be5785_prof);

        
        $__internal_6a72d4ad6ea2278416f8e0a61c5b89ea23264dfe2fb56cad208db2c3a71e4f9b->leave($__internal_6a72d4ad6ea2278416f8e0a61c5b89ea23264dfe2fb56cad208db2c3a71e4f9b_prof);

    }

    // line 7
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_634e789902411e669dfa2ecff572036f1f7683acccce23918bbd1029e9bb27b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634e789902411e669dfa2ecff572036f1f7683acccce23918bbd1029e9bb27b9->enter($__internal_634e789902411e669dfa2ecff572036f1f7683acccce23918bbd1029e9bb27b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_6c4450fecf53f0667f7a62faa846cc026a3d18a14e7bae5d10ba9ef7fe2b1427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4450fecf53f0667f7a62faa846cc026a3d18a14e7bae5d10ba9ef7fe2b1427->enter($__internal_6c4450fecf53f0667f7a62faa846cc026a3d18a14e7bae5d10ba9ef7fe2b1427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 8
        echo "    ";
        $this->loadTemplate("@SyliusShop/Account/Order/Index/_header.html.twig", "SyliusShopBundle:Account/Order:index.html.twig", 8)->display($context);
        // line 9
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.order.index.after_content_header", array("orders" => (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 10, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sylius_grid_render')->getCallable(), array((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 12, $this->getSourceContext()); })()), "@SyliusUi/Grid/_default.html.twig"));
        echo "

    ";
        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.order.index.after_grid", array("orders" => (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 14, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6c4450fecf53f0667f7a62faa846cc026a3d18a14e7bae5d10ba9ef7fe2b1427->leave($__internal_6c4450fecf53f0667f7a62faa846cc026a3d18a14e7bae5d10ba9ef7fe2b1427_prof);

        
        $__internal_634e789902411e669dfa2ecff572036f1f7683acccce23918bbd1029e9bb27b9->leave($__internal_634e789902411e669dfa2ecff572036f1f7683acccce23918bbd1029e9bb27b9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  81 => 12,  76 => 10,  73 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/layout.html.twig' %}

{% block breadcrumb %}
    {% include '@SyliusShop/Account/Order/Index/_breadcrumb.html.twig' %}
{% endblock %}

{% block subcontent %}
    {% include '@SyliusShop/Account/Order/Index/_header.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.account.order.index.after_content_header', {'orders': orders}) }}

    {{ sylius_grid_render(resources, '@SyliusUi/Grid/_default.html.twig') }}

    {{ sonata_block_render_event('sylius.shop.account.order.index.after_grid', {'orders': orders}) }}
{% endblock %}
", "SyliusShopBundle:Account/Order:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/index.html.twig");
    }
}
