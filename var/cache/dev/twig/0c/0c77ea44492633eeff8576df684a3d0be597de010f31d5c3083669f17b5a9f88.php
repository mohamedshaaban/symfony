<?php

/* SyliusShopBundle::error500.html.twig */
class __TwigTemplate_0d7cf8a006d88613c9701ff9a6e294095a4a6712829a9f4ac717e3d2358dd542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle::error500.html.twig", 1);
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
        $__internal_52953aa418e6619e48f1d697cd13a30fee88913e53aef7fe86f86d8a89da82fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52953aa418e6619e48f1d697cd13a30fee88913e53aef7fe86f86d8a89da82fa->enter($__internal_52953aa418e6619e48f1d697cd13a30fee88913e53aef7fe86f86d8a89da82fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error500.html.twig"));

        $__internal_44eea0813d25a64eba04e1f77c1c362fcd029bc1217bf808d47a83813c8ec6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44eea0813d25a64eba04e1f77c1c362fcd029bc1217bf808d47a83813c8ec6e3->enter($__internal_44eea0813d25a64eba04e1f77c1c362fcd029bc1217bf808d47a83813c8ec6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52953aa418e6619e48f1d697cd13a30fee88913e53aef7fe86f86d8a89da82fa->leave($__internal_52953aa418e6619e48f1d697cd13a30fee88913e53aef7fe86f86d8a89da82fa_prof);

        
        $__internal_44eea0813d25a64eba04e1f77c1c362fcd029bc1217bf808d47a83813c8ec6e3->leave($__internal_44eea0813d25a64eba04e1f77c1c362fcd029bc1217bf808d47a83813c8ec6e3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cdb884ddaea300481215a4b8f0b64bcbbe253bdb99fd59463e1a67fef436938f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb884ddaea300481215a4b8f0b64bcbbe253bdb99fd59463e1a67fef436938f->enter($__internal_cdb884ddaea300481215a4b8f0b64bcbbe253bdb99fd59463e1a67fef436938f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c0f114cf3cccfee5cc5a08039a3c24344815c4f10ed7f3ffcc9339d2d7707a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f114cf3cccfee5cc5a08039a3c24344815c4f10ed7f3ffcc9339d2d7707a43->enter($__internal_c0f114cf3cccfee5cc5a08039a3c24344815c4f10ed7f3ffcc9339d2d7707a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h2 class=\"ui center aligned icon header\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
        echo "\" alt=\"Sylius logo\" class=\"ui small image\" />
        <br/><br/>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.server_has_encountered_some_errors"), "html", null, true);
        echo "
    </h2>

";
        
        $__internal_c0f114cf3cccfee5cc5a08039a3c24344815c4f10ed7f3ffcc9339d2d7707a43->leave($__internal_c0f114cf3cccfee5cc5a08039a3c24344815c4f10ed7f3ffcc9339d2d7707a43_prof);

        
        $__internal_cdb884ddaea300481215a4b8f0b64bcbbe253bdb99fd59463e1a67fef436938f->leave($__internal_cdb884ddaea300481215a4b8f0b64bcbbe253bdb99fd59463e1a67fef436938f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::error500.html.twig";
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
        {{ 'sylius.ui.server_has_encountered_some_errors'|trans }}
    </h2>

{% endblock %}
", "SyliusShopBundle::error500.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/error500.html.twig");
    }
}
