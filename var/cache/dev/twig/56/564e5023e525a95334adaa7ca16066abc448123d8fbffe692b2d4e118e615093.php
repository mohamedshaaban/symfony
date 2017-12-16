<?php

/* SyliusShopBundle:Product/Index:_sidebar.html.twig */
class __TwigTemplate_3fe442027116eb62199eb4a0c330ee3f70809c426482bd7c22f5f9ce930ab3d3 extends Twig_Template
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
        $__internal_50c2728f3c13166e81a5e7e1dd8fbfbfc0814af11e25b22176a6349d892c0aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c2728f3c13166e81a5e7e1dd8fbfbfc0814af11e25b22176a6349d892c0aca->enter($__internal_50c2728f3c13166e81a5e7e1dd8fbfbfc0814af11e25b22176a6349d892c0aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_sidebar.html.twig"));

        $__internal_185647b5f94080596962de5bf437e36b9cd0683b16c45eac98cffaf8740ad857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185647b5f94080596962de5bf437e36b9cd0683b16c45eac98cffaf8740ad857->enter($__internal_185647b5f94080596962de5bf437e36b9cd0683b16c45eac98cffaf8740ad857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_sidebar.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_taxon_show_by_slug", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 2
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"), "template" => "@SyliusShop/Taxon/_verticalMenu.html.twig")));
        // line 4
        echo "
";
        
        $__internal_50c2728f3c13166e81a5e7e1dd8fbfbfc0814af11e25b22176a6349d892c0aca->leave($__internal_50c2728f3c13166e81a5e7e1dd8fbfbfc0814af11e25b22176a6349d892c0aca_prof);

        
        $__internal_185647b5f94080596962de5bf437e36b9cd0683b16c45eac98cffaf8740ad857->leave($__internal_185647b5f94080596962de5bf437e36b9cd0683b16c45eac98cffaf8740ad857_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_sidebar.html.twig";
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
    'template': '@SyliusShop/Taxon/_verticalMenu.html.twig'
})) }}
", "SyliusShopBundle:Product/Index:_sidebar.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Index/_sidebar.html.twig");
    }
}
