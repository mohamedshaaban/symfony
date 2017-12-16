<?php

/* SyliusShopBundle:Product/Show/Tabs:_menu.html.twig */
class __TwigTemplate_f9c495c353ed2c5a8b6dd80bf553b6476608e71f757ce8d91098ffdb2621f3a0 extends Twig_Template
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
        $__internal_5769c46199a95d98c69a287780e365b6f728b55ec41f4a09386a167915013db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5769c46199a95d98c69a287780e365b6f728b55ec41f4a09386a167915013db3->enter($__internal_5769c46199a95d98c69a287780e365b6f728b55ec41f4a09386a167915013db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_menu.html.twig"));

        $__internal_144153f5c18a026c2429886efbd7da3807ef996a0594e73b0a2c7ce7a14692ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144153f5c18a026c2429886efbd7da3807ef996a0594e73b0a2c7ce7a14692ff->enter($__internal_144153f5c18a026c2429886efbd7da3807ef996a0594e73b0a2c7ce7a14692ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_menu.html.twig"));

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
        
        $__internal_5769c46199a95d98c69a287780e365b6f728b55ec41f4a09386a167915013db3->leave($__internal_5769c46199a95d98c69a287780e365b6f728b55ec41f4a09386a167915013db3_prof);

        
        $__internal_144153f5c18a026c2429886efbd7da3807ef996a0594e73b0a2c7ce7a14692ff->leave($__internal_144153f5c18a026c2429886efbd7da3807ef996a0594e73b0a2c7ce7a14692ff_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show/Tabs:_menu.html.twig";
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
", "SyliusShopBundle:Product/Show/Tabs:_menu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/Tabs/_menu.html.twig");
    }
}
