<?php

/* SyliusAdminBundle:ProductVariant/Update:_breadcrumb.html.twig */
class __TwigTemplate_f493e4896a8a9055f2755c09cd804ca119642b4f5285cc82ad40afb7e5e6585a extends Twig_Template
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
        $__internal_4c2147250529ff360b2bcd01c1d225fae7edebcd1acb9b16b2132a9c32cb092e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2147250529ff360b2bcd01c1d225fae7edebcd1acb9b16b2132a9c32cb092e->enter($__internal_4c2147250529ff360b2bcd01c1d225fae7edebcd1acb9b16b2132a9c32cb092e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Update:_breadcrumb.html.twig"));

        $__internal_2c46dbe28c6d6de53c52bf103689b594fedbac2702df6c3edb5f91c023a94eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c46dbe28c6d6de53c52bf103689b594fedbac2702df6c3edb5f91c023a94eac->enter($__internal_2c46dbe28c6d6de53c52bf103689b594fedbac2702df6c3edb5f91c023a94eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Update:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:ProductVariant/Update:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index")), 2 => array("label" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "productId"), "method")), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(),         // line 7
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 7, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 7, $this->getSourceContext()); })()), "pluralName", array()))), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 7, $this->getSourceContext()); })()), "getRouteName", array(0 => "index"), "method"), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array())))), 4 => array("label" => ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 8
($context["resource"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["resource"] ?? null), "code", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 8, $this->getSourceContext()); })()), "id", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 8, $this->getSourceContext()); })()), "id", array())))), 5 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit")));
        // line 12
        echo "
";
        // line 13
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 13, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_4c2147250529ff360b2bcd01c1d225fae7edebcd1acb9b16b2132a9c32cb092e->leave($__internal_4c2147250529ff360b2bcd01c1d225fae7edebcd1acb9b16b2132a9c32cb092e_prof);

        
        $__internal_2c46dbe28c6d6de53c52bf103689b594fedbac2702df6c3edb5f91c023a94eac->leave($__internal_2c46dbe28c6d6de53c52bf103689b594fedbac2702df6c3edb5f91c023a94eac_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Update:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 12,  33 => 8,  32 => 7,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: 'sylius.ui.products'|trans, url: path('sylius_admin_product_index') },
        { label: app.request.attributes.get('productId') },
        { label: (metadata.applicationName~'.ui.'~metadata.pluralName)|trans, url: path(configuration.getRouteName('index'), configuration.vars.route.parameters|default({})) },
        { label: resource.code|default(resource.id) },
        { label: 'sylius.ui.edit'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:ProductVariant/Update:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Update/_breadcrumb.html.twig");
    }
}
