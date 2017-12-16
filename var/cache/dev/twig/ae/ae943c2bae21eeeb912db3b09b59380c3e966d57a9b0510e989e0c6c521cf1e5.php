<?php

/* @SyliusShop/Product/Index/_sidebar.html.twig */
class __TwigTemplate_f710501d08a0cf7f9555fbbeb740240961e8c0b60dea77ea93cc3d783e7d18cb extends Twig_Template
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
        $__internal_ae7a7f6c1f5d1d440c13ad614c943ed85759ac7ed1fba18897981f28a669b355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7a7f6c1f5d1d440c13ad614c943ed85759ac7ed1fba18897981f28a669b355->enter($__internal_ae7a7f6c1f5d1d440c13ad614c943ed85759ac7ed1fba18897981f28a669b355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_sidebar.html.twig"));

        $__internal_9d0afd74ad4382d8411e20656ba943a6dc0de836af9bed908f1473328c79973e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0afd74ad4382d8411e20656ba943a6dc0de836af9bed908f1473328c79973e->enter($__internal_9d0afd74ad4382d8411e20656ba943a6dc0de836af9bed908f1473328c79973e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_sidebar.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_taxon_show_by_slug", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 2
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"), "template" => "@SyliusShop/Taxon/_verticalMenu.html.twig")));
        // line 4
        echo "
";
        
        $__internal_ae7a7f6c1f5d1d440c13ad614c943ed85759ac7ed1fba18897981f28a669b355->leave($__internal_ae7a7f6c1f5d1d440c13ad614c943ed85759ac7ed1fba18897981f28a669b355_prof);

        
        $__internal_9d0afd74ad4382d8411e20656ba943a6dc0de836af9bed908f1473328c79973e->leave($__internal_9d0afd74ad4382d8411e20656ba943a6dc0de836af9bed908f1473328c79973e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_sidebar.html.twig";
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
", "@SyliusShop/Product/Index/_sidebar.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Index\\_sidebar.html.twig");
    }
}
