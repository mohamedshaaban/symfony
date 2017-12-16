<?php

/* SyliusShopBundle:Homepage:index.html.twig */
class __TwigTemplate_850a56341171334e521c2db7b5a8d364056a7e1c2f6586bca3c520ec1a637e37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Homepage:index.html.twig", 1);
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
        $__internal_3d7a54684e4524230c301c5035a9963165848c62a5aad9f31ebbe23a0b3ccdb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7a54684e4524230c301c5035a9963165848c62a5aad9f31ebbe23a0b3ccdb7->enter($__internal_3d7a54684e4524230c301c5035a9963165848c62a5aad9f31ebbe23a0b3ccdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Homepage:index.html.twig"));

        $__internal_ac53e555e04f23fcdbc8907f1d79e5d84c1aade22b42297ab5f8c3d617fd897c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac53e555e04f23fcdbc8907f1d79e5d84c1aade22b42297ab5f8c3d617fd897c->enter($__internal_ac53e555e04f23fcdbc8907f1d79e5d84c1aade22b42297ab5f8c3d617fd897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Homepage:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d7a54684e4524230c301c5035a9963165848c62a5aad9f31ebbe23a0b3ccdb7->leave($__internal_3d7a54684e4524230c301c5035a9963165848c62a5aad9f31ebbe23a0b3ccdb7_prof);

        
        $__internal_ac53e555e04f23fcdbc8907f1d79e5d84c1aade22b42297ab5f8c3d617fd897c->leave($__internal_ac53e555e04f23fcdbc8907f1d79e5d84c1aade22b42297ab5f8c3d617fd897c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c03b30a4045759a2282d95527b597f03e898b9af59a7dc97e095f36039bd0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c03b30a4045759a2282d95527b597f03e898b9af59a7dc97e095f36039bd0a5->enter($__internal_4c03b30a4045759a2282d95527b597f03e898b9af59a7dc97e095f36039bd0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_98a5f9108820703c6f8969f6078cffc0bdea466bc5cc16d96b44c44cb94062d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a5f9108820703c6f8969f6078cffc0bdea466bc5cc16d96b44c44cb94062d3->enter($__internal_98a5f9108820703c6f8969f6078cffc0bdea466bc5cc16d96b44c44cb94062d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_98a5f9108820703c6f8969f6078cffc0bdea466bc5cc16d96b44c44cb94062d3->leave($__internal_98a5f9108820703c6f8969f6078cffc0bdea466bc5cc16d96b44c44cb94062d3_prof);

        
        $__internal_4c03b30a4045759a2282d95527b597f03e898b9af59a7dc97e095f36039bd0a5->leave($__internal_4c03b30a4045759a2282d95527b597f03e898b9af59a7dc97e095f36039bd0a5_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Homepage:index.html.twig";
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
", "SyliusShopBundle:Homepage:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Homepage/index.html.twig");
    }
}
