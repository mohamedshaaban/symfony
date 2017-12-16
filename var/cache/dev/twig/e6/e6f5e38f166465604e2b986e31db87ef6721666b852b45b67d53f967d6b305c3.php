<?php

/* @SyliusShop/Product/Show/_association.html.twig */
class __TwigTemplate_ddaa74a30c46d44cb5033a3f370bed434130fc35a15412a0c93eef3f3976d93e extends Twig_Template
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
        $__internal_c8c0036507d547150ad4d9ccaf472529a5e6fca0530a85a7e1fbb33a4744cc3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c0036507d547150ad4d9ccaf472529a5e6fca0530a85a7e1fbb33a4744cc3e->enter($__internal_c8c0036507d547150ad4d9ccaf472529a5e6fca0530a85a7e1fbb33a4744cc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_association.html.twig"));

        $__internal_fb4e0325adacece08a6a94405d1375ef82c59dabcac3cb9a4811bd8e80c6d524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4e0325adacece08a6a94405d1375ef82c59dabcac3cb9a4811bd8e80c6d524->enter($__internal_fb4e0325adacece08a6a94405d1375ef82c59dabcac3cb9a4811bd8e80c6d524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_association.html.twig"));

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
        $this->loadTemplate("@SyliusShop/Product/_horizontalList.html.twig", "@SyliusShop/Product/Show/_association.html.twig", 3)->display(array_merge($context, array("products" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new Twig_Error_Runtime('Variable "product_association" does not exist.', 3, $this->getSourceContext()); })()), "associatedProducts", array()))));
        // line 4
        echo "</div>
";
        
        $__internal_c8c0036507d547150ad4d9ccaf472529a5e6fca0530a85a7e1fbb33a4744cc3e->leave($__internal_c8c0036507d547150ad4d9ccaf472529a5e6fca0530a85a7e1fbb33a4744cc3e_prof);

        
        $__internal_fb4e0325adacece08a6a94405d1375ef82c59dabcac3cb9a4811bd8e80c6d524->leave($__internal_fb4e0325adacece08a6a94405d1375ef82c59dabcac3cb9a4811bd8e80c6d524_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_association.html.twig";
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
", "@SyliusShop/Product/Show/_association.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\_association.html.twig");
    }
}
