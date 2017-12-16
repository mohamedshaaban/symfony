<?php

/* SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig */
class __TwigTemplate_09b62830c93b6aaa3a76053b3dc4ca8515f31ed2b39639b5f6af496207b32efe extends Twig_Template
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
        $__internal_1e9bb572d25590f6d118e46d3112ed5048379af84d7beb82ba1a4b9b12c757b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9bb572d25590f6d118e46d3112ed5048379af84d7beb82ba1a4b9b12c757b6->enter($__internal_1e9bb572d25590f6d118e46d3112ed5048379af84d7beb82ba1a4b9b12c757b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig"));

        $__internal_184575976b4b2594763e4074084ca5645ab7153c2bfbc8832d3c3159b58ab498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184575976b4b2594763e4074084ca5645ab7153c2bfbc8832d3c3159b58ab498->enter($__internal_184575976b4b2594763e4074084ca5645ab7153c2bfbc8832d3c3159b58ab498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index")), 2 => array("label" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.variants"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_variant_index", array("productId" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 7
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 7, $this->getSourceContext()); })()), "id", array())))), 4 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.generate")));
        // line 11
        echo "
";
        // line 12
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 12, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_1e9bb572d25590f6d118e46d3112ed5048379af84d7beb82ba1a4b9b12c757b6->leave($__internal_1e9bb572d25590f6d118e46d3112ed5048379af84d7beb82ba1a4b9b12c757b6_prof);

        
        $__internal_184575976b4b2594763e4074084ca5645ab7153c2bfbc8832d3c3159b58ab498->leave($__internal_184575976b4b2594763e4074084ca5645ab7153c2bfbc8832d3c3159b58ab498_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  34 => 11,  32 => 7,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: 'sylius.ui.products'|trans, url: path('sylius_admin_product_index') },
        { label: product.code, url: path('sylius_admin_product_update', {'id': product.id}) },
        { label: 'sylius.ui.variants'|trans, url: path('sylius_admin_product_variant_index', {'productId': product.id}) },
        { label: 'sylius.ui.generate'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:ProductVariant/Generate:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Generate/_breadcrumb.html.twig");
    }
}
