<?php

/* SyliusAdminBundle:ProductVariant:_form.html.twig */
class __TwigTemplate_c488b0951cc4c6a30234780f2bb3db554b5f3c66509d49a13052431c55d3792a extends Twig_Template
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
        $__internal_0be7a60bc9a6bb2b9988fced006c908e784e12b6eecda88fb85fe9154c97b8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be7a60bc9a6bb2b9988fced006c908e784e12b6eecda88fb85fe9154c97b8d2->enter($__internal_0be7a60bc9a6bb2b9988fced006c908e784e12b6eecda88fb85fe9154c97b8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:_form.html.twig"));

        $__internal_13e0995533e6f03673e31ce8ffd57b840d1c74f1549f0db3e16cb02a20bd4687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e0995533e6f03673e31ce8ffd57b840d1c74f1549f0db3e16cb02a20bd4687->enter($__internal_13e0995533e6f03673e31ce8ffd57b840d1c74f1549f0db3e16cb02a20bd4687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:_form.html.twig"));

        // line 1
        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("sylius.admin.product_variant_form", array(), array("product_variant" => (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new Twig_Error_Runtime('Variable "product_variant" does not exist.', 1, $this->getSourceContext()); })())));
        // line 2
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 2, $this->getSourceContext()); })()), array("template" => "SyliusAdminBundle:ProductVariant:_menu.html.twig", "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "product_variant" => (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new Twig_Error_Runtime('Variable "product_variant" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_0be7a60bc9a6bb2b9988fced006c908e784e12b6eecda88fb85fe9154c97b8d2->leave($__internal_0be7a60bc9a6bb2b9988fced006c908e784e12b6eecda88fb85fe9154c97b8d2_prof);

        
        $__internal_13e0995533e6f03673e31ce8ffd57b840d1c74f1549f0db3e16cb02a20bd4687->leave($__internal_13e0995533e6f03673e31ce8ffd57b840d1c74f1549f0db3e16cb02a20bd4687_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set menu = knp_menu_get('sylius.admin.product_variant_form', [], {'product_variant': product_variant}) %}
{{ knp_menu_render(menu, {'template': 'SyliusAdminBundle:ProductVariant:_menu.html.twig', 'form': form, 'product_variant': product_variant}) }}
", "SyliusAdminBundle:ProductVariant:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/_form.html.twig");
    }
}
