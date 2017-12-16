<?php

/* @SyliusShop/Product/Show/_reviews.html.twig */
class __TwigTemplate_bbecb4c56111cd472dd52d568ea48a03313bc13f79f36520ae59bc4e6f3e64d5 extends Twig_Template
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
        $__internal_83f7b69a65bf0f68c2e77fb6778005dbf13f30d0c2466143061403fbaf81f7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f7b69a65bf0f68c2e77fb6778005dbf13f30d0c2466143061403fbaf81f7f8->enter($__internal_83f7b69a65bf0f68c2e77fb6778005dbf13f30d0c2466143061403fbaf81f7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_reviews.html.twig"));

        $__internal_f15d96e8293342c752e8e797add0d34582852fd7e752c952cae54c77fca85569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15d96e8293342c752e8e797add0d34582852fd7e752c952cae54c77fca85569->enter($__internal_f15d96e8293342c752e8e797add0d34582852fd7e752c952cae54c77fca85569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_reviews.html.twig"));

        // line 1
        echo "<div class=\"ui text menu\">
    <div class=\"item\">
        ";
        // line 3
        $this->loadTemplate("@SyliusShop/Product/_starRating.html.twig", "@SyliusShop/Product/Show/_reviews.html.twig", 3)->display($context);
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
        
        $__internal_83f7b69a65bf0f68c2e77fb6778005dbf13f30d0c2466143061403fbaf81f7f8->leave($__internal_83f7b69a65bf0f68c2e77fb6778005dbf13f30d0c2466143061403fbaf81f7f8_prof);

        
        $__internal_f15d96e8293342c752e8e797add0d34582852fd7e752c952cae54c77fca85569->leave($__internal_f15d96e8293342c752e8e797add0d34582852fd7e752c952cae54c77fca85569_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_reviews.html.twig";
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
", "@SyliusShop/Product/Show/_reviews.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\_reviews.html.twig");
    }
}
