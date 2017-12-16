<?php

/* SyliusShopBundle:Product/Show:_reviews.html.twig */
class __TwigTemplate_04a6f1714cad2ffa25a387a9ff13798691241efaa0ff406b5e4736b361ef7914 extends Twig_Template
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
        $__internal_905117cbd077c3e7bd3a394d0d83b942a95fd0c0f77a47a435d97792856eeb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905117cbd077c3e7bd3a394d0d83b942a95fd0c0f77a47a435d97792856eeb60->enter($__internal_905117cbd077c3e7bd3a394d0d83b942a95fd0c0f77a47a435d97792856eeb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_reviews.html.twig"));

        $__internal_3488f50a2c4ff697f8bbc0cb227ef7fe46bb3a97b953beeb0228c2a578c99f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3488f50a2c4ff697f8bbc0cb227ef7fe46bb3a97b953beeb0228c2a578c99f3c->enter($__internal_3488f50a2c4ff697f8bbc0cb227ef7fe46bb3a97b953beeb0228c2a578c99f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_reviews.html.twig"));

        // line 1
        echo "<div class=\"ui text menu\">
    <div class=\"item\">
        ";
        // line 3
        $this->loadTemplate("@SyliusShop/Product/_starRating.html.twig", "SyliusShopBundle:Product/Show:_reviews.html.twig", 3)->display($context);
        // line 4
        echo "    </div>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_index", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->getSourceContext()); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->getSourceContext()); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->getSourceContext()); })()), "acceptedReviews", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reviews"), "html", null, true);
        echo "</a>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_create", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_your_review"), "html", null, true);
        echo "</a>
</div>
";
        
        $__internal_905117cbd077c3e7bd3a394d0d83b942a95fd0c0f77a47a435d97792856eeb60->leave($__internal_905117cbd077c3e7bd3a394d0d83b942a95fd0c0f77a47a435d97792856eeb60_prof);

        
        $__internal_3488f50a2c4ff697f8bbc0cb227ef7fe46bb3a97b953beeb0228c2a578c99f3c->leave($__internal_3488f50a2c4ff697f8bbc0cb227ef7fe46bb3a97b953beeb0228c2a578c99f3c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui text menu\">
    <div class=\"item\">
        {% include '@SyliusShop/Product/_starRating.html.twig' %}
    </div>
    <a href=\"{{ path('sylius_shop_product_review_index', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"item\">{{ product.acceptedReviews|length }} {{ 'sylius.ui.reviews'|trans }}</a>
    <a href=\"{{ path('sylius_shop_product_review_create', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"item\">{{ 'sylius.ui.add_your_review'|trans }}</a>
</div>
", "SyliusShopBundle:Product/Show:_reviews.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_reviews.html.twig");
    }
}
