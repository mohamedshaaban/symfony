<?php

/* SyliusShopBundle:Product/Show:_association.html.twig */
class __TwigTemplate_ed3286134479ddf7fc19f9c77aa7177189411af5f2b88e2ec4abc27f3354a73f extends Twig_Template
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
        $__internal_0d503550cb2a590fd3e37e97a2ac7a4028d30247235aade4199b6a74e0638462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d503550cb2a590fd3e37e97a2ac7a4028d30247235aade4199b6a74e0638462->enter($__internal_0d503550cb2a590fd3e37e97a2ac7a4028d30247235aade4199b6a74e0638462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_association.html.twig"));

        $__internal_6f0ae025dcca98b9c86cb0b7822faa5332db16623ae6823f51fc161248f02fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0ae025dcca98b9c86cb0b7822faa5332db16623ae6823f51fc161248f02fb4->enter($__internal_6f0ae025dcca98b9c86cb0b7822faa5332db16623ae6823f51fc161248f02fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_association.html.twig"));

        // line 1
        echo "<h4 class=\"ui horizontal section divider header\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new Twig_Error_Runtime('Variable "product_association" does not exist.', 1, $this->getSourceContext()); })()), "type", array()), "name", array()), "html", null, true);
        echo "</h4>
<div id=\"sylius-product-association-";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new Twig_Error_Runtime('Variable "product_association" does not exist.', 2, $this->getSourceContext()); })()), "type", array()), "name", array()), "html", null, true);
        echo "\">
";
        // line 3
        $this->loadTemplate("@SyliusShop/Product/_horizontalList.html.twig", "SyliusShopBundle:Product/Show:_association.html.twig", 3)->display(array_merge($context, array("products" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new Twig_Error_Runtime('Variable "product_association" does not exist.', 3, $this->getSourceContext()); })()), "associatedProducts", array()))));
        // line 4
        echo "</div>
";
        
        $__internal_0d503550cb2a590fd3e37e97a2ac7a4028d30247235aade4199b6a74e0638462->leave($__internal_0d503550cb2a590fd3e37e97a2ac7a4028d30247235aade4199b6a74e0638462_prof);

        
        $__internal_6f0ae025dcca98b9c86cb0b7822faa5332db16623ae6823f51fc161248f02fb4->leave($__internal_6f0ae025dcca98b9c86cb0b7822faa5332db16623ae6823f51fc161248f02fb4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui horizontal section divider header\">{{ product_association.type.name }}</h4>
<div id=\"sylius-product-association-{{ product_association.type.name }}\">
{% include '@SyliusShop/Product/_horizontalList.html.twig' with {'products': product_association.associatedProducts} %}
</div>
", "SyliusShopBundle:Product/Show:_association.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_association.html.twig");
    }
}
