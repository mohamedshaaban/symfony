<?php

/* SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig */
class __TwigTemplate_c182c87d91f9b6decc5d7f4191a8d21e8854f7a2b8846e274c3988562ddc3cc9 extends Twig_Template
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
        $__internal_18c1b8bf86e4524cfae8964bc29eb937ef03d1b71acfce9a92fbb77d8853b9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c1b8bf86e4524cfae8964bc29eb937ef03d1b71acfce9a92fbb77d8853b9b7->enter($__internal_18c1b8bf86e4524cfae8964bc29eb937ef03d1b71acfce9a92fbb77d8853b9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig"));

        $__internal_245b1c034a8c111727aabfd74ae12523d2e953a1867fcf3d7e1240bac5a72de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245b1c034a8c111727aabfd74ae12523d2e953a1867fcf3d7e1240bac5a72de2->enter($__internal_245b1c034a8c111727aabfd74ae12523d2e953a1867fcf3d7e1240bac5a72de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig", 1);
        // line 2
        echo "
<div class=\"column\">
    ";
        // line 4
        echo $context["headers"]->macro_default(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()), "name", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "cubes")) : ("cubes")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.manage_variants")) : ("sylius.ui.manage_variants"))));
        echo "

    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.index.header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 6, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 8
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig", 8)->display($context);
        // line 9
        echo "</div>
";
        
        $__internal_18c1b8bf86e4524cfae8964bc29eb937ef03d1b71acfce9a92fbb77d8853b9b7->leave($__internal_18c1b8bf86e4524cfae8964bc29eb937ef03d1b71acfce9a92fbb77d8853b9b7_prof);

        
        $__internal_245b1c034a8c111727aabfd74ae12523d2e953a1867fcf3d7e1240bac5a72de2->leave($__internal_245b1c034a8c111727aabfd74ae12523d2e953a1867fcf3d7e1240bac5a72de2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  41 => 8,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

<div class=\"column\">
    {{ headers.default(product.name, configuration.vars.icon|default('cubes'), configuration.vars.subheader|default('sylius.ui.manage_variants')|trans) }}

    {{ sonata_block_render_event('sylius.admin.product_variant.index.header', {'resource': resource}) }}

    {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig') %}
</div>
", "SyliusAdminBundle:ProductVariant/Index:_productHeader.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Index/_productHeader.html.twig");
    }
}
