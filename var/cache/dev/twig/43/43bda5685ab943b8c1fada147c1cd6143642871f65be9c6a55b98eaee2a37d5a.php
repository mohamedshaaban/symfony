<?php

/* SyliusAdminBundle:ProductVariant:index.html.twig */
class __TwigTemplate_58dc7e166de563d052cd2feccc35860827081d411cae267e164adcaf4511c32a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:ProductVariant:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a11293e7a8eb0ae074c50023004634b7b70799ec17555b65efb360fc64938e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11293e7a8eb0ae074c50023004634b7b70799ec17555b65efb360fc64938e1a->enter($__internal_a11293e7a8eb0ae074c50023004634b7b70799ec17555b65efb360fc64938e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:index.html.twig"));

        $__internal_7fd5e420758583e47a4340e9d2ce318bf2a0a3dea37ef46b5ebdd278c6c28572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd5e420758583e47a4340e9d2ce318bf2a0a3dea37ef46b5ebdd278c6c28572->enter($__internal_7fd5e420758583e47a4340e9d2ce318bf2a0a3dea37ef46b5ebdd278c6c28572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:index.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:ProductVariant:index.html.twig", 3);
        // line 5
        $context["definition"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 5, $this->getSourceContext()); })()), "definition", array());
        // line 6
        $context["data"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 6, $this->getSourceContext()); })()), "data", array());
        // line 8
        $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 8, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 8, $this->getSourceContext()); })()), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 8, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 8, $this->getSourceContext()); })()), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a11293e7a8eb0ae074c50023004634b7b70799ec17555b65efb360fc64938e1a->leave($__internal_a11293e7a8eb0ae074c50023004634b7b70799ec17555b65efb360fc64938e1a_prof);

        
        $__internal_7fd5e420758583e47a4340e9d2ce318bf2a0a3dea37ef46b5ebdd278c6c28572->leave($__internal_7fd5e420758583e47a4340e9d2ce318bf2a0a3dea37ef46b5ebdd278c6c28572_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_866cc5c0daa7c3d6d9ac8f1cc9d763f326fa68b646b3ab1fbf8397d89868f9ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866cc5c0daa7c3d6d9ac8f1cc9d763f326fa68b646b3ab1fbf8397d89868f9ea->enter($__internal_866cc5c0daa7c3d6d9ac8f1cc9d763f326fa68b646b3ab1fbf8397d89868f9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b674fdc25eb8c99428bc32c800fc4ae16638bd632319da69481912deb0ea7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b674fdc25eb8c99428bc32c800fc4ae16638bd632319da69481912deb0ea7e8->enter($__internal_1b674fdc25eb8c99428bc32c800fc4ae16638bd632319da69481912deb0ea7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_1b674fdc25eb8c99428bc32c800fc4ae16638bd632319da69481912deb0ea7e8->leave($__internal_1b674fdc25eb8c99428bc32c800fc4ae16638bd632319da69481912deb0ea7e8_prof);

        
        $__internal_866cc5c0daa7c3d6d9ac8f1cc9d763f326fa68b646b3ab1fbf8397d89868f9ea->leave($__internal_866cc5c0daa7c3d6d9ac8f1cc9d763f326fa68b646b3ab1fbf8397d89868f9ea_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_44f60c71815e5e79f92d642a7ad021dcf7b61998385fd679e2fe0b0c456a4bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f60c71815e5e79f92d642a7ad021dcf7b61998385fd679e2fe0b0c456a4bde->enter($__internal_44f60c71815e5e79f92d642a7ad021dcf7b61998385fd679e2fe0b0c456a4bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bb47cdfde7effcb2a5568e8fb9e70ea72194ed1d5e6d4bb47b8bf401e2367c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb47cdfde7effcb2a5568e8fb9e70ea72194ed1d5e6d4bb47b8bf401e2367c6f->enter($__internal_bb47cdfde7effcb2a5568e8fb9e70ea72194ed1d5e6d4bb47b8bf401e2367c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.index.before_header", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 16
        $this->loadTemplate("@SyliusAdmin/ProductVariant/Index/_header.html.twig", "SyliusAdminBundle:ProductVariant:index.html.twig", 16)->display($context);
        // line 17
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:ProductVariant:index.html.twig", 17)->display($context);
        // line 18
        echo "    </div>

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.index.after_header", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 20, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 22
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:ProductVariant:index.html.twig", 22)->display($context);
        // line 23
        echo "
    ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.index.after_content", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 24, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_bb47cdfde7effcb2a5568e8fb9e70ea72194ed1d5e6d4bb47b8bf401e2367c6f->leave($__internal_bb47cdfde7effcb2a5568e8fb9e70ea72194ed1d5e6d4bb47b8bf401e2367c6f_prof);

        
        $__internal_44f60c71815e5e79f92d642a7ad021dcf7b61998385fd679e2fe0b0c456a4bde->leave($__internal_44f60c71815e5e79f92d642a7ad021dcf7b61998385fd679e2fe0b0c456a4bde_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  102 => 23,  100 => 22,  95 => 20,  91 => 18,  88 => 17,  86 => 16,  79 => 13,  70 => 12,  50 => 10,  40 => 1,  38 => 8,  36 => 6,  34 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

{% set definition = resources.definition %}
{% set data = resources.data %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.product_variant.index.before_header', {'resources': resources}) }}

    <div class=\"ui stackable two column grid\">
        {% include '@SyliusAdmin/ProductVariant/Index/_header.html.twig' %}
        {% include '@SyliusAdmin/Crud/Index/_actions.html.twig' %}
    </div>

    {{ sonata_block_render_event('sylius.admin.product_variant.index.after_header', {'resources': resources}) }}

    {% include '@SyliusAdmin/Crud/Index/_content.html.twig' %}

    {{ sonata_block_render_event('sylius.admin.product_variant.index.after_content', {'resources': resources}) }}
{% endblock %}
", "SyliusAdminBundle:ProductVariant:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/index.html.twig");
    }
}
