<?php

/* @SyliusShop/Product/Show/Tabs/_menu.html.twig */
class __TwigTemplate_c23d58d2666a3bc2873cc76887dd6c0c83a272b06305e4a49e67bb33c4751f85 extends Twig_Template
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
        $__internal_158c44c573478970d3becd854a59185846a145c31f346eb368a1932aa8642f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158c44c573478970d3becd854a59185846a145c31f346eb368a1932aa8642f20->enter($__internal_158c44c573478970d3becd854a59185846a145c31f346eb368a1932aa8642f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_menu.html.twig"));

        $__internal_b2405f713ef510191d421852244b0bb6d95f4d8efedc9240e3a7f3b8fa8b2f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2405f713ef510191d421852244b0bb6d95f4d8efedc9240e3a7f3b8fa8b2f08->enter($__internal_b2405f713ef510191d421852244b0bb6d95f4d8efedc9240e3a7f3b8fa8b2f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_menu.html.twig"));

        // line 1
        echo "<a class=\"item active\" data-tab=\"details\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.details"), "html", null, true);
        echo "</a>
";
        // line 2
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })()), "attributes", array())) > 0)) {
            // line 3
            echo "    <a class=\"item\" data-tab=\"attributes\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.attributes"), "html", null, true);
            echo "</a>
";
        }
        // line 5
        echo "<a class=\"item\" data-tab=\"reviews\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reviews"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->getSourceContext()); })()), "acceptedReviews", array())), "html", null, true);
        echo ")</a>
";
        
        $__internal_158c44c573478970d3becd854a59185846a145c31f346eb368a1932aa8642f20->leave($__internal_158c44c573478970d3becd854a59185846a145c31f346eb368a1932aa8642f20_prof);

        
        $__internal_b2405f713ef510191d421852244b0bb6d95f4d8efedc9240e3a7f3b8fa8b2f08->leave($__internal_b2405f713ef510191d421852244b0bb6d95f4d8efedc9240e3a7f3b8fa8b2f08_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  32 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"item active\" data-tab=\"details\">{{ 'sylius.ui.details'|trans }}</a>
{% if product.attributes|length > 0 %}
    <a class=\"item\" data-tab=\"attributes\">{{ 'sylius.ui.attributes'|trans }}</a>
{% endif %}
<a class=\"item\" data-tab=\"reviews\">{{ 'sylius.ui.reviews'|trans }} ({{ product.acceptedReviews|length }})</a>
", "@SyliusShop/Product/Show/Tabs/_menu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\Tabs\\_menu.html.twig");
    }
}
