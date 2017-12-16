<?php

/* SyliusShopBundle::error.html.twig */
class __TwigTemplate_5f427481ae8abcefe644043d93794a916fa519dd625c0f7fb5155c164f0e1f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle::error.html.twig", 1);
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
        $__internal_8fba1214cb73349c4fd9b3d141fd1008d59bb837b67f0eb159f00114e84ddf4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fba1214cb73349c4fd9b3d141fd1008d59bb837b67f0eb159f00114e84ddf4e->enter($__internal_8fba1214cb73349c4fd9b3d141fd1008d59bb837b67f0eb159f00114e84ddf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error.html.twig"));

        $__internal_13197d6ddba059c0a5dbdf231489cacab59cdfa5dcbab6235d05c99c66934ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13197d6ddba059c0a5dbdf231489cacab59cdfa5dcbab6235d05c99c66934ade->enter($__internal_13197d6ddba059c0a5dbdf231489cacab59cdfa5dcbab6235d05c99c66934ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fba1214cb73349c4fd9b3d141fd1008d59bb837b67f0eb159f00114e84ddf4e->leave($__internal_8fba1214cb73349c4fd9b3d141fd1008d59bb837b67f0eb159f00114e84ddf4e_prof);

        
        $__internal_13197d6ddba059c0a5dbdf231489cacab59cdfa5dcbab6235d05c99c66934ade->leave($__internal_13197d6ddba059c0a5dbdf231489cacab59cdfa5dcbab6235d05c99c66934ade_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e2e5c9c196420294285a34d287da069df912a24064f6f0835a1476d206dbfd58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e5c9c196420294285a34d287da069df912a24064f6f0835a1476d206dbfd58->enter($__internal_e2e5c9c196420294285a34d287da069df912a24064f6f0835a1476d206dbfd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_904765dc5094ae512416bb53ff471c8e32ccf8cda46f55318f18a78906c20f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904765dc5094ae512416bb53ff471c8e32ccf8cda46f55318f18a78906c20f3f->enter($__internal_904765dc5094ae512416bb53ff471c8e32ccf8cda46f55318f18a78906c20f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h2 class=\"ui center aligned icon header\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
        echo "\" alt=\"Sylius logo\" class=\"ui small image\" />
        <br/><br/>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.unexpected_error_occurred"), "html", null, true);
        echo "
    </h2>

";
        
        $__internal_904765dc5094ae512416bb53ff471c8e32ccf8cda46f55318f18a78906c20f3f->leave($__internal_904765dc5094ae512416bb53ff471c8e32ccf8cda46f55318f18a78906c20f3f_prof);

        
        $__internal_e2e5c9c196420294285a34d287da069df912a24064f6f0835a1476d206dbfd58->leave($__internal_e2e5c9c196420294285a34d287da069df912a24064f6f0835a1476d206dbfd58_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::error.html.twig";
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
        {{ 'sylius.ui.unexpected_error_occurred'|trans }}
    </h2>

{% endblock %}
", "SyliusShopBundle::error.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/error.html.twig");
    }
}
