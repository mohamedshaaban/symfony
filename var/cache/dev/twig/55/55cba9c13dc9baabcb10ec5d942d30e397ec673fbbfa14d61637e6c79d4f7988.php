<?php

/* SyliusShopBundle:Product/Index:_header.html.twig */
class __TwigTemplate_636ed0aa4424436068286c19d78bb7411e582289866aeacf2cea46e145307690 extends Twig_Template
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
        $__internal_992131d863adfcbbb5eb1059e24a115037db95a31cd1d81e601bd65e624d5474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992131d863adfcbbb5eb1059e24a115037db95a31cd1d81e601bd65e624d5474->enter($__internal_992131d863adfcbbb5eb1059e24a115037db95a31cd1d81e601bd65e624d5474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_header.html.twig"));

        $__internal_85305a34f37e67c40136ab7ecb25ea3062d718c84a04a3bf7bb000ac42d4ea29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85305a34f37e67c40136ab7ecb25ea3062d718c84a04a3bf7bb000ac42d4ea29->enter($__internal_85305a34f37e67c40136ab7ecb25ea3062d718c84a04a3bf7bb000ac42d4ea29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_header.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_taxon_show_by_slug", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 2
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"), "template" => "@SyliusShop/Taxon/_header.html.twig")));
        // line 4
        echo "
";
        
        $__internal_992131d863adfcbbb5eb1059e24a115037db95a31cd1d81e601bd65e624d5474->leave($__internal_992131d863adfcbbb5eb1059e24a115037db95a31cd1d81e601bd65e624d5474_prof);

        
        $__internal_85305a34f37e67c40136ab7ecb25ea3062d718c84a04a3bf7bb000ac42d4ea29->leave($__internal_85305a34f37e67c40136ab7ecb25ea3062d718c84a04a3bf7bb000ac42d4ea29_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ render(url('sylius_shop_partial_taxon_show_by_slug', {
    'slug': app.request.attributes.get('slug'),
    'template': '@SyliusShop/Taxon/_header.html.twig'
})) }}
", "SyliusShopBundle:Product/Index:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Index/_header.html.twig");
    }
}
