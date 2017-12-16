<?php

/* @SyliusShop/Product/index.html.twig */
class __TwigTemplate_9b0f42801bc8038ef3044e6fc84af250c3bcc45a0a4c17285b836606ebd2310d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Product/index.html.twig", 1);
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
        $__internal_b6ded7404a54a8f438f2e552cb057d549ef27ceed49341273d0ae8b92b5b4282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ded7404a54a8f438f2e552cb057d549ef27ceed49341273d0ae8b92b5b4282->enter($__internal_b6ded7404a54a8f438f2e552cb057d549ef27ceed49341273d0ae8b92b5b4282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/index.html.twig"));

        $__internal_8e08f73ce409f0c7d9e4f19abc9cd7eb6be955261ab2fc449fea6bed51572894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e08f73ce409f0c7d9e4f19abc9cd7eb6be955261ab2fc449fea6bed51572894->enter($__internal_8e08f73ce409f0c7d9e4f19abc9cd7eb6be955261ab2fc449fea6bed51572894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ded7404a54a8f438f2e552cb057d549ef27ceed49341273d0ae8b92b5b4282->leave($__internal_b6ded7404a54a8f438f2e552cb057d549ef27ceed49341273d0ae8b92b5b4282_prof);

        
        $__internal_8e08f73ce409f0c7d9e4f19abc9cd7eb6be955261ab2fc449fea6bed51572894->leave($__internal_8e08f73ce409f0c7d9e4f19abc9cd7eb6be955261ab2fc449fea6bed51572894_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_02f1b7543fb40f87cfefd2d008fb816706ae99eab8cd189d3329c8eade2f0166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f1b7543fb40f87cfefd2d008fb816706ae99eab8cd189d3329c8eade2f0166->enter($__internal_02f1b7543fb40f87cfefd2d008fb816706ae99eab8cd189d3329c8eade2f0166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_af4b8847160436824996eaf4cf341d2cf79bbde677c0e6f0babed460534bd073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4b8847160436824996eaf4cf341d2cf79bbde677c0e6f0babed460534bd073->enter($__internal_af4b8847160436824996eaf4cf341d2cf79bbde677c0e6f0babed460534bd073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("@SyliusShop/Product/Index/_header.html.twig", "@SyliusShop/Product/index.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"ui stackable grid\">
    <div class=\"four wide column\">
        ";
        // line 7
        $this->loadTemplate("@SyliusShop/Product/Index/_sidebar.html.twig", "@SyliusShop/Product/index.html.twig", 7)->display($context);
        // line 8
        echo "    </div>
    <div class=\"twelve wide column\">
        ";
        // line 10
        $this->loadTemplate("@SyliusShop/Product/Index/_main.html.twig", "@SyliusShop/Product/index.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
</div>
";
        
        $__internal_af4b8847160436824996eaf4cf341d2cf79bbde677c0e6f0babed460534bd073->leave($__internal_af4b8847160436824996eaf4cf341d2cf79bbde677c0e6f0babed460534bd073_prof);

        
        $__internal_02f1b7543fb40f87cfefd2d008fb816706ae99eab8cd189d3329c8eade2f0166->leave($__internal_02f1b7543fb40f87cfefd2d008fb816706ae99eab8cd189d3329c8eade2f0166_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
{% include '@SyliusShop/Product/Index/_header.html.twig' %}
<div class=\"ui stackable grid\">
    <div class=\"four wide column\">
        {% include '@SyliusShop/Product/Index/_sidebar.html.twig' %}
    </div>
    <div class=\"twelve wide column\">
        {% include '@SyliusShop/Product/Index/_main.html.twig' %}
    </div>
</div>
{% endblock %}
", "@SyliusShop/Product/index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\index.html.twig");
    }
}
