<?php

/* SyliusShopBundle:Account/Order/Index:_breadcrumb.html.twig */
class __TwigTemplate_f87ad1f62c7847bc4d0581ef246e9cf363c9ac7ae2d1f0354fae4ccbcec71142 extends Twig_Template
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
        $__internal_d6783f07142b05a5d7787a1d4ee9b373a5730f456be5b7b05f1a6a243c864ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6783f07142b05a5d7787a1d4ee9b373a5730f456be5b7b05f1a6a243c864ad3->enter($__internal_d6783f07142b05a5d7787a1d4ee9b373a5730f456be5b7b05f1a6a243c864ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Index:_breadcrumb.html.twig"));

        $__internal_b1deaf7a147423c477502d1f5417879a7e04c2b317ed4220444ed0a957e0a756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1deaf7a147423c477502d1f5417879a7e04c2b317ed4220444ed0a957e0a756->enter($__internal_b1deaf7a147423c477502d1f5417879a7e04c2b317ed4220444ed0a957e0a756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Index:_breadcrumb.html.twig"));

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
    <div class=\"active section\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_history"), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_d6783f07142b05a5d7787a1d4ee9b373a5730f456be5b7b05f1a6a243c864ad3->leave($__internal_d6783f07142b05a5d7787a1d4ee9b373a5730f456be5b7b05f1a6a243c864ad3_prof);

        
        $__internal_b1deaf7a147423c477502d1f5417879a7e04c2b317ed4220444ed0a957e0a756->leave($__internal_b1deaf7a147423c477502d1f5417879a7e04c2b317ed4220444ed0a957e0a756_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Index:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  35 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui breadcrumb\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
    <div class=\"divider\"> / </div>
    <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"section\">{{ 'sylius.ui.my_account'|trans }}</a>
    <div class=\"divider\"> / </div>
    <div class=\"active section\">{{ 'sylius.ui.order_history'|trans }}</div>
</div>
", "SyliusShopBundle:Account/Order/Index:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/Index/_breadcrumb.html.twig");
    }
}
