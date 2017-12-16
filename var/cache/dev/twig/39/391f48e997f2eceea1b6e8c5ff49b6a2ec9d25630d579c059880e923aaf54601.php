<?php

/* SyliusShopBundle:Account/Order/Show:_breadcrumb.html.twig */
class __TwigTemplate_a42b696e0dade058342d55ea6aaf3b58dc65b4105c1ceea2ce0bb283e53cb791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_443385ba5c4d0464488e995fb33f8bfd99b517d746883d0b5b1a881eb41326ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443385ba5c4d0464488e995fb33f8bfd99b517d746883d0b5b1a881eb41326ec->enter($__internal_443385ba5c4d0464488e995fb33f8bfd99b517d746883d0b5b1a881eb41326ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Show:_breadcrumb.html.twig"));

        $__internal_2fb8f1fc6ca109ab85e293c09f8ec22f26484ea260dd0bb9c5c0546b2abb62e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb8f1fc6ca109ab85e293c09f8ec22f26484ea260dd0bb9c5c0546b2abb62e7->enter($__internal_2fb8f1fc6ca109ab85e293c09f8ec22f26484ea260dd0bb9c5c0546b2abb62e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Show:_breadcrumb.html.twig"));

        // line 1
        echo "<div class=\"ui breadcrumb\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_dashboard");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_order_index");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_history"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    <div class=\"active section\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order"), "html", null, true);
        echo " <span id=\"number\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->getSourceContext()); })()), "number", array()), "html", null, true);
        echo "</span></div>
</div>
";
        
        $__internal_443385ba5c4d0464488e995fb33f8bfd99b517d746883d0b5b1a881eb41326ec->leave($__internal_443385ba5c4d0464488e995fb33f8bfd99b517d746883d0b5b1a881eb41326ec_prof);

        
        $__internal_2fb8f1fc6ca109ab85e293c09f8ec22f26484ea260dd0bb9c5c0546b2abb62e7->leave($__internal_2fb8f1fc6ca109ab85e293c09f8ec22f26484ea260dd0bb9c5c0546b2abb62e7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Show:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  42 => 6,  35 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui breadcrumb\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
    <div class=\"divider\"> / </div>
    <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"section\">{{ 'sylius.ui.my_account'|trans }}</a>
    <div class=\"divider\"> / </div>
    <a href=\"{{ path('sylius_shop_account_order_index') }}\" class=\"section\">{{ 'sylius.ui.order_history'|trans }}</a>
    <div class=\"divider\"> / </div>
    <div class=\"active section\">{{ 'sylius.ui.order'|trans }} <span id=\"number\">#{{ order.number }}</span></div>
</div>
", "SyliusShopBundle:Account/Order/Show:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/Show/_breadcrumb.html.twig");
    }
}
