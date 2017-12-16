<?php

/* @SyliusShop/Homepage/index.html.twig */
class __TwigTemplate_05563ee52aea0a69ec16d3060686a2568a0c6ccb8ce72bd98f3bda9db9be469d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Homepage/index.html.twig", 1);
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
        $__internal_63c47daaab55d13d0222b1e08c8c768b6e51d88c03086dd2edfe9cd5550182a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c47daaab55d13d0222b1e08c8c768b6e51d88c03086dd2edfe9cd5550182a2->enter($__internal_63c47daaab55d13d0222b1e08c8c768b6e51d88c03086dd2edfe9cd5550182a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/index.html.twig"));

        $__internal_97b82dacf6207c9f6c618ce144a5d04370e8b7889c7465782fc6c0058f1fae87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b82dacf6207c9f6c618ce144a5d04370e8b7889c7465782fc6c0058f1fae87->enter($__internal_97b82dacf6207c9f6c618ce144a5d04370e8b7889c7465782fc6c0058f1fae87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63c47daaab55d13d0222b1e08c8c768b6e51d88c03086dd2edfe9cd5550182a2->leave($__internal_63c47daaab55d13d0222b1e08c8c768b6e51d88c03086dd2edfe9cd5550182a2_prof);

        
        $__internal_97b82dacf6207c9f6c618ce144a5d04370e8b7889c7465782fc6c0058f1fae87->leave($__internal_97b82dacf6207c9f6c618ce144a5d04370e8b7889c7465782fc6c0058f1fae87_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_74d0fe844cc61b8edb33d5fd5a2c2fcc7e766af0e7052d7d9de5948dc86e0bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d0fe844cc61b8edb33d5fd5a2c2fcc7e766af0e7052d7d9de5948dc86e0bbf->enter($__internal_74d0fe844cc61b8edb33d5fd5a2c2fcc7e766af0e7052d7d9de5948dc86e0bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b12b093617049cecda234c01ae470d17e9114284b354f1b00efaef09b0fef7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12b093617049cecda234c01ae470d17e9114284b354f1b00efaef09b0fef7fa->enter($__internal_b12b093617049cecda234c01ae470d17e9114284b354f1b00efaef09b0fef7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2 class=\"ui horizontal section divider header\">
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.latest_products"), "html", null, true);
        echo "
</h2>
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_index_latest", array("count" => 4, "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
        echo "
";
        
        $__internal_b12b093617049cecda234c01ae470d17e9114284b354f1b00efaef09b0fef7fa->leave($__internal_b12b093617049cecda234c01ae470d17e9114284b354f1b00efaef09b0fef7fa_prof);

        
        $__internal_74d0fe844cc61b8edb33d5fd5a2c2fcc7e766af0e7052d7d9de5948dc86e0bbf->leave($__internal_74d0fe844cc61b8edb33d5fd5a2c2fcc7e766af0e7052d7d9de5948dc86e0bbf_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
<h2 class=\"ui horizontal section divider header\">
    {{ 'sylius.ui.latest_products'|trans }}
</h2>
{{ render(url('sylius_shop_partial_product_index_latest', {'count': 4, 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}
{% endblock %}
", "@SyliusShop/Homepage/index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Homepage\\index.html.twig");
    }
}
