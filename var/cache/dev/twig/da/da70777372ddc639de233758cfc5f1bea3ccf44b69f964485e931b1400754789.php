<?php

/* @SyliusShop/Account/AddressBook/layout.html.twig */
class __TwigTemplate_7f9041e12bbfec2f27b03321ffe7edc860ae6ca2e2e78b7e7a2bd940f37e88f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "@SyliusShop/Account/AddressBook/layout.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d402366cc117bb28203fb70e0e5a40871612f017d2213471746cb927c13ebfdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d402366cc117bb28203fb70e0e5a40871612f017d2213471746cb927c13ebfdc->enter($__internal_d402366cc117bb28203fb70e0e5a40871612f017d2213471746cb927c13ebfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/layout.html.twig"));

        $__internal_c9a6836475706014281c0977e720e17e578fd4ebfc14a1066bf9f345ee87649b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a6836475706014281c0977e720e17e578fd4ebfc14a1066bf9f345ee87649b->enter($__internal_c9a6836475706014281c0977e720e17e578fd4ebfc14a1066bf9f345ee87649b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d402366cc117bb28203fb70e0e5a40871612f017d2213471746cb927c13ebfdc->leave($__internal_d402366cc117bb28203fb70e0e5a40871612f017d2213471746cb927c13ebfdc_prof);

        
        $__internal_c9a6836475706014281c0977e720e17e578fd4ebfc14a1066bf9f345ee87649b->leave($__internal_c9a6836475706014281c0977e720e17e578fd4ebfc14a1066bf9f345ee87649b_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_70dd7992b1b1d4b6231b8672a26fcea96cf21bc880dc369147246307bed4a098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70dd7992b1b1d4b6231b8672a26fcea96cf21bc880dc369147246307bed4a098->enter($__internal_70dd7992b1b1d4b6231b8672a26fcea96cf21bc880dc369147246307bed4a098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_8acca6eb92a36e15752453117b47ce385785caba2402b3f0888c6208be567bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acca6eb92a36e15752453117b47ce385785caba2402b3f0888c6208be567bac->enter($__internal_8acca6eb92a36e15752453117b47ce385785caba2402b3f0888c6208be567bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_dashboard");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.address_book"), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_8acca6eb92a36e15752453117b47ce385785caba2402b3f0888c6208be567bac->leave($__internal_8acca6eb92a36e15752453117b47ce385785caba2402b3f0888c6208be567bac_prof);

        
        $__internal_70dd7992b1b1d4b6231b8672a26fcea96cf21bc880dc369147246307bed4a098->leave($__internal_70dd7992b1b1d4b6231b8672a26fcea96cf21bc880dc369147246307bed4a098_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/AddressBook/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  59 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/layout.html.twig' %}

{% block breadcrumb %}
    <div class=\"ui breadcrumb\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
        <div class=\"divider\"> / </div>
        <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"section\">{{ 'sylius.ui.my_account'|trans }}</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">{{ 'sylius.ui.address_book'|trans }}</div>
    </div>
{% endblock %}
", "@SyliusShop/Account/AddressBook/layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/AddressBook/layout.html.twig");
    }
}
