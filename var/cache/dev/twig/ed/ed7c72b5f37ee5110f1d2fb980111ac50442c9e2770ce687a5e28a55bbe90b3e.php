<?php

/* @SyliusAdmin/Product/Index/_header.html.twig */
class __TwigTemplate_c1baa5f3de00194461be99b0a0a33362515971f54734ab177c2d602c5c53e8c9 extends Twig_Template
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
        $__internal_26ef20b1b903b3aebbc7a46529185493a6eed78ea7bf4cffb3fd6c64a5f7887a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ef20b1b903b3aebbc7a46529185493a6eed78ea7bf4cffb3fd6c64a5f7887a->enter($__internal_26ef20b1b903b3aebbc7a46529185493a6eed78ea7bf4cffb3fd6c64a5f7887a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Index/_header.html.twig"));

        $__internal_98682d4e0f37fe98f2b268bf02de7f85456ef6d6b7e7a6cae431443057490bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98682d4e0f37fe98f2b268bf02de7f85456ef6d6b7e7a6cae431443057490bcf->enter($__internal_98682d4e0f37fe98f2b268bf02de7f85456ef6d6b7e7a6cae431443057490bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Index/_header.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "@SyliusAdmin/Product/Index/_header.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "taxonId"), "method"))) {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_taxon_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 5
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "taxonId"), "method"), "template" => "@SyliusAdmin/Product/Index/_taxonHeader.html.twig", "vars" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 7
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 7, $this->getSourceContext()); })()), "vars", array()))));
            // line 8
            echo "
";
        } else {
            // line 10
            echo "    <div class=\"column\">
        ";
            // line 11
            $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 11, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 11, $this->getSourceContext()); })()), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 11, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 11, $this->getSourceContext()); })()), "pluralName", array()))));
            // line 12
            echo "        ";
            echo $context["headers"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 12, $this->getSourceContext()); })())), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "cube")) : ("cube")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.manage_your_product_catalog")) : ("sylius.ui.manage_your_product_catalog"))));
            echo "

        ";
            // line 14
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.header", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 14, $this->getSourceContext()); })()))));
            echo "

        ";
            // line 16
            $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Product/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/Product/Index/_breadcrumb.html.twig")), "@SyliusAdmin/Product/Index/_header.html.twig", 16)->display($context);
            // line 17
            echo "    </div>
";
        }
        
        $__internal_26ef20b1b903b3aebbc7a46529185493a6eed78ea7bf4cffb3fd6c64a5f7887a->leave($__internal_26ef20b1b903b3aebbc7a46529185493a6eed78ea7bf4cffb3fd6c64a5f7887a_prof);

        
        $__internal_98682d4e0f37fe98f2b268bf02de7f85456ef6d6b7e7a6cae431443057490bcf->leave($__internal_98682d4e0f37fe98f2b268bf02de7f85456ef6d6b7e7a6cae431443057490bcf_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Index/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  57 => 16,  52 => 14,  46 => 12,  44 => 11,  41 => 10,  37 => 8,  35 => 7,  34 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/headers.html.twig' as headers %}

{% if app.request.attributes.get('taxonId') is not null %}
    {{ render(url('sylius_admin_partial_taxon_show', {
        'id': app.request.attributes.get('taxonId'),
        'template': '@SyliusAdmin/Product/Index/_taxonHeader.html.twig',
        'vars': configuration.vars
    })) }}
{% else %}
    <div class=\"column\">
        {% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}
        {{ headers.default(header|trans, configuration.vars.icon|default('cube'), configuration.vars.subheader|default('sylius.ui.manage_your_product_catalog')|trans) }}

        {{ sonata_block_render_event('sylius.admin.product.index.header', {'resources': resources}) }}

        {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/Product/Index/_breadcrumb.html.twig') %}
    </div>
{% endif %}
", "@SyliusAdmin/Product/Index/_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\Index\\_header.html.twig");
    }
}
