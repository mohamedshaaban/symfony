<?php

/* SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig */
class __TwigTemplate_55d3bb919e271cd516506b04e4debc36a614116659f7ff537c4acdeaeed6beed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 1, $this->getSourceContext()); })())) ? ((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 1, $this->getSourceContext()); })())) : ("SyliusPayumBundle::layout.html.twig")), "SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3e2250f9c7c3753c77422c6a7ec731d3e7ebd64f42addcf5b3b755ce0b9aa93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e2250f9c7c3753c77422c6a7ec731d3e7ebd64f42addcf5b3b755ce0b9aa93->enter($__internal_d3e2250f9c7c3753c77422c6a7ec731d3e7ebd64f42addcf5b3b755ce0b9aa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig"));

        $__internal_856cd6d0624e013b41548bf97c4596643a41a082f4acbf249b72e4e9d83bb63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856cd6d0624e013b41548bf97c4596643a41a082f4acbf249b72e4e9d83bb63b->enter($__internal_856cd6d0624e013b41548bf97c4596643a41a082f4acbf249b72e4e9d83bb63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e2250f9c7c3753c77422c6a7ec731d3e7ebd64f42addcf5b3b755ce0b9aa93->leave($__internal_d3e2250f9c7c3753c77422c6a7ec731d3e7ebd64f42addcf5b3b755ce0b9aa93_prof);

        
        $__internal_856cd6d0624e013b41548bf97c4596643a41a082f4acbf249b72e4e9d83bb63b->leave($__internal_856cd6d0624e013b41548bf97c4596643a41a082f4acbf249b72e4e9d83bb63b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_58c9fd832eae9ca83628de9aa4f29b54951d3fd805b2560315b3679778fd6105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c9fd832eae9ca83628de9aa4f29b54951d3fd805b2560315b3679778fd6105->enter($__internal_58c9fd832eae9ca83628de9aa4f29b54951d3fd805b2560315b3679778fd6105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9c3f8cec0ee4ed17b426d77a296c80e067ece1166839b7b49f8dcdb8a07d80a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3f8cec0ee4ed17b426d77a296c80e067ece1166839b7b49f8dcdb8a07d80a3->enter($__internal_9c3f8cec0ee4ed17b426d77a296c80e067ece1166839b7b49f8dcdb8a07d80a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("actionUrl", $context)) ? (_twig_default_filter((isset($context["actionUrl"]) || array_key_exists("actionUrl", $context) ? $context["actionUrl"] : (function () { throw new Twig_Error_Runtime('Variable "actionUrl" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "\" method=\"POST\">
        <script
                src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                data-key=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["publishable_key"]) || array_key_exists("publishable_key", $context) ? $context["publishable_key"] : (function () { throw new Twig_Error_Runtime('Variable "publishable_key" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
                data-image=\"";
        // line 10
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["model"] ?? null), "image", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["model"] ?? null), "image", array()), "")) : ("")), "html", null, true);
        echo "\"
                data-name=\"";
        // line 11
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["model"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["model"] ?? null), "name", array()), "")) : ("")), "html", null, true);
        echo "\"
                data-description=\"";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["model"] ?? null), "description", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["model"] ?? null), "description", array()), "")) : ("")), "html", null, true);
        echo "\"
                data-amount=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new Twig_Error_Runtime('Variable "model" does not exist.', 13, $this->getSourceContext()); })()), "amount", array()), "html", null, true);
        echo "\"
                data-currency=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["model"] ?? null), "currency", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["model"] ?? null), "currency", array()), "USD")) : ("USD")), "html", null, true);
        echo "\">
        </script>
    </form>
";
        
        $__internal_9c3f8cec0ee4ed17b426d77a296c80e067ece1166839b7b49f8dcdb8a07d80a3->leave($__internal_9c3f8cec0ee4ed17b426d77a296c80e067ece1166839b7b49f8dcdb8a07d80a3_prof);

        
        $__internal_58c9fd832eae9ca83628de9aa4f29b54951d3fd805b2560315b3679778fd6105->leave($__internal_58c9fd832eae9ca83628de9aa4f29b54951d3fd805b2560315b3679778fd6105_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3068ce05e35340295726038df0870d20d167934267993d0c2302f7b19073c7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3068ce05e35340295726038df0870d20d167934267993d0c2302f7b19073c7cb->enter($__internal_3068ce05e35340295726038df0870d20d167934267993d0c2302f7b19073c7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eee34711e3edfb06f3f649a626186f2355a789dd6854e3be390b47f9a04d0951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee34711e3edfb06f3f649a626186f2355a789dd6854e3be390b47f9a04d0951->enter($__internal_eee34711e3edfb06f3f649a626186f2355a789dd6854e3be390b47f9a04d0951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {\$('form .stripe-button-el').click();});
    </script>
";
        
        $__internal_eee34711e3edfb06f3f649a626186f2355a789dd6854e3be390b47f9a04d0951->leave($__internal_eee34711e3edfb06f3f649a626186f2355a789dd6854e3be390b47f9a04d0951_prof);

        
        $__internal_3068ce05e35340295726038df0870d20d167934267993d0c2302f7b19073c7cb->leave($__internal_3068ce05e35340295726038df0870d20d167934267993d0c2302f7b19073c7cb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  95 => 19,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  55 => 6,  49 => 4,  40 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends layout ?: 'SyliusPayumBundle::layout.html.twig' %}

{% block content %}
    {{ parent() }}

    <form action=\"{{ actionUrl|default('') }}\" method=\"POST\">
        <script
                src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                data-key=\"{{ publishable_key }}\"
                data-image=\"{{ model.image|default(\"\") }}\"
                data-name=\"{{ model.name|default(\"\") }}\"
                data-description=\"{{ model.description|default(\"\") }}\"
                data-amount=\"{{ model.amount }}\"
                data-currency=\"{{ model.currency|default(\"USD\") }}\">
        </script>
    </form>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {\$('form .stripe-button-el').click();});
    </script>
{% endblock %}
", "SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle/Resources/views/Action/Stripe/obtainCheckoutToken.html.twig");
    }
}
