<?php

/* @SyliusShop/Product/Index/_header.html.twig */
class __TwigTemplate_91b811d9bd4d0438c4d0e6f1c0a95032a6294a625aaaf53013db07fde4a5d7e4 extends Twig_Template
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
        $__internal_9142be29d6b3be9a61d6234fb42dbecf7c3507556b98b779ea1e668722500a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9142be29d6b3be9a61d6234fb42dbecf7c3507556b98b779ea1e668722500a47->enter($__internal_9142be29d6b3be9a61d6234fb42dbecf7c3507556b98b779ea1e668722500a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_header.html.twig"));

        $__internal_67417c660a4bac64a4b275ecf26c0cb16bb503379c0a63d589ffc3d84eb01692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67417c660a4bac64a4b275ecf26c0cb16bb503379c0a63d589ffc3d84eb01692->enter($__internal_67417c660a4bac64a4b275ecf26c0cb16bb503379c0a63d589ffc3d84eb01692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_header.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_taxon_show_by_slug", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 2
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"), "template" => "@SyliusShop/Taxon/_header.html.twig")));
        // line 4
        echo "
";
        
        $__internal_9142be29d6b3be9a61d6234fb42dbecf7c3507556b98b779ea1e668722500a47->leave($__internal_9142be29d6b3be9a61d6234fb42dbecf7c3507556b98b779ea1e668722500a47_prof);

        
        $__internal_67417c660a4bac64a4b275ecf26c0cb16bb503379c0a63d589ffc3d84eb01692->leave($__internal_67417c660a4bac64a4b275ecf26c0cb16bb503379c0a63d589ffc3d84eb01692_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_header.html.twig";
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
", "@SyliusShop/Product/Index/_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Index\\_header.html.twig");
    }
}
