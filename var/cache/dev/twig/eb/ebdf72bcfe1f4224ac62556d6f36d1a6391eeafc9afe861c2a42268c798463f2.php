<?php

/* SyliusShopBundle::error404.html.twig */
class __TwigTemplate_8e4a9fe31ff93b1357ba1b4889c57949be08728eda3f658c5d1aeb9a7127b818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle::error404.html.twig", 1);
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
        $__internal_42a2828f0c2ae85692ddb2b14ba32579b491c3c1fb2a48249fb2b9b966facef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a2828f0c2ae85692ddb2b14ba32579b491c3c1fb2a48249fb2b9b966facef2->enter($__internal_42a2828f0c2ae85692ddb2b14ba32579b491c3c1fb2a48249fb2b9b966facef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error404.html.twig"));

        $__internal_5323db805f2e75ac7147171ed3b859f72489773a046e43b91bd44bcee1bab4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5323db805f2e75ac7147171ed3b859f72489773a046e43b91bd44bcee1bab4ed->enter($__internal_5323db805f2e75ac7147171ed3b859f72489773a046e43b91bd44bcee1bab4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42a2828f0c2ae85692ddb2b14ba32579b491c3c1fb2a48249fb2b9b966facef2->leave($__internal_42a2828f0c2ae85692ddb2b14ba32579b491c3c1fb2a48249fb2b9b966facef2_prof);

        
        $__internal_5323db805f2e75ac7147171ed3b859f72489773a046e43b91bd44bcee1bab4ed->leave($__internal_5323db805f2e75ac7147171ed3b859f72489773a046e43b91bd44bcee1bab4ed_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fbc9433c46f5fa5c00def4d52945288eb2ce0f460d3ced25285cd55014cda79f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc9433c46f5fa5c00def4d52945288eb2ce0f460d3ced25285cd55014cda79f->enter($__internal_fbc9433c46f5fa5c00def4d52945288eb2ce0f460d3ced25285cd55014cda79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c43fc68e51a84c097cd33d625f1c36f49e9131b055e79d68ba225dc792e7457f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43fc68e51a84c097cd33d625f1c36f49e9131b055e79d68ba225dc792e7457f->enter($__internal_c43fc68e51a84c097cd33d625f1c36f49e9131b055e79d68ba225dc792e7457f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h2 class=\"ui center aligned icon header\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
        echo "\" alt=\"Sylius logo\" class=\"ui small image\" />
        <br/><br/>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.the_page_you_are_looking_for_does_not_exist"), "html", null, true);
        echo "
    </h2>

";
        
        $__internal_c43fc68e51a84c097cd33d625f1c36f49e9131b055e79d68ba225dc792e7457f->leave($__internal_c43fc68e51a84c097cd33d625f1c36f49e9131b055e79d68ba225dc792e7457f_prof);

        
        $__internal_fbc9433c46f5fa5c00def4d52945288eb2ce0f460d3ced25285cd55014cda79f->leave($__internal_fbc9433c46f5fa5c00def4d52945288eb2ce0f460d3ced25285cd55014cda79f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::error404.html.twig";
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
    <h2 class=\"ui center aligned icon header\">
        <img src=\"{{ asset('assets/shop/img/logo.png') }}\" alt=\"Sylius logo\" class=\"ui small image\" />
        <br/><br/>
        {{ 'sylius.ui.the_page_you_are_looking_for_does_not_exist'|trans }}
    </h2>

{% endblock %}
", "SyliusShopBundle::error404.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/error404.html.twig");
    }
}
