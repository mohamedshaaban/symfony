<?php

/* SyliusAdminBundle:Product:index.html.twig */
class __TwigTemplate_9b2763625431e15e8dc4e4ce5c40353179b662ddd0e75b457c8e7789d67cd70c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Product:index.html.twig", 1);
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
        $__internal_d8ce85e56a936ac965a39f0cb966e1961d89efdb886d7fb251bccbe2166a4ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ce85e56a936ac965a39f0cb966e1961d89efdb886d7fb251bccbe2166a4ab6->enter($__internal_d8ce85e56a936ac965a39f0cb966e1961d89efdb886d7fb251bccbe2166a4ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:index.html.twig"));

        $__internal_b794182d8d0959030226fe42541179a84e8f593a0de099b880c5e7cc54237fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b794182d8d0959030226fe42541179a84e8f593a0de099b880c5e7cc54237fe8->enter($__internal_b794182d8d0959030226fe42541179a84e8f593a0de099b880c5e7cc54237fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:index.html.twig"));

        // line 3
        $context["definition"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 3, $this->getSourceContext()); })()), "definition", array());
        // line 4
        $context["data"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 4, $this->getSourceContext()); })()), "data", array());
        // line 6
        $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->getSourceContext()); })()), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->getSourceContext()); })()), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ce85e56a936ac965a39f0cb966e1961d89efdb886d7fb251bccbe2166a4ab6->leave($__internal_d8ce85e56a936ac965a39f0cb966e1961d89efdb886d7fb251bccbe2166a4ab6_prof);

        
        $__internal_b794182d8d0959030226fe42541179a84e8f593a0de099b880c5e7cc54237fe8->leave($__internal_b794182d8d0959030226fe42541179a84e8f593a0de099b880c5e7cc54237fe8_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f5c3f6f74b72bd5a6c2cd561c890f537693659aa40a4997e228f307c12a7e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5c3f6f74b72bd5a6c2cd561c890f537693659aa40a4997e228f307c12a7e81->enter($__internal_2f5c3f6f74b72bd5a6c2cd561c890f537693659aa40a4997e228f307c12a7e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_336333101fd1eb7e5cdefdab3fcfef97c392c94c3bc9c466b988629b5b630a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336333101fd1eb7e5cdefdab3fcfef97c392c94c3bc9c466b988629b5b630a9f->enter($__internal_336333101fd1eb7e5cdefdab3fcfef97c392c94c3bc9c466b988629b5b630a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 8, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_336333101fd1eb7e5cdefdab3fcfef97c392c94c3bc9c466b988629b5b630a9f->leave($__internal_336333101fd1eb7e5cdefdab3fcfef97c392c94c3bc9c466b988629b5b630a9f_prof);

        
        $__internal_2f5c3f6f74b72bd5a6c2cd561c890f537693659aa40a4997e228f307c12a7e81->leave($__internal_2f5c3f6f74b72bd5a6c2cd561c890f537693659aa40a4997e228f307c12a7e81_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b90b0133bdd273435b6952ce2c07b585a597d146a14136ed432289201cee7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b90b0133bdd273435b6952ce2c07b585a597d146a14136ed432289201cee7ff->enter($__internal_0b90b0133bdd273435b6952ce2c07b585a597d146a14136ed432289201cee7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e7411225a109c5707d84a41efea6224b8b140a0825b8145a0fd78d1f274c1dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7411225a109c5707d84a41efea6224b8b140a0825b8145a0fd78d1f274c1dd8->enter($__internal_e7411225a109c5707d84a41efea6224b8b140a0825b8145a0fd78d1f274c1dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_header", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 11, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Product/Index/_header.html.twig", "SyliusAdminBundle:Product:index.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:Product:index.html.twig", 15)->display($context);
        // line 16
        echo "    </div>

    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_header", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 18, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"three wide column\">
            ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_taxon_tree", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 22, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_partial_taxon_tree", array("template" => "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig")));
        echo "

            ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_taxon_tree", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 26, $this->getSourceContext()); })()))));
        echo "
        </div>
        <div class=\"thirteen wide column sylius-product-index\">
            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_filters", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 29, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 31
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:Product:index.html.twig", 31)->display($context);
        // line 32
        echo "        </div>
    </div>

    ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_content", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 35, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e7411225a109c5707d84a41efea6224b8b140a0825b8145a0fd78d1f274c1dd8->leave($__internal_e7411225a109c5707d84a41efea6224b8b140a0825b8145a0fd78d1f274c1dd8_prof);

        
        $__internal_0b90b0133bdd273435b6952ce2c07b585a597d146a14136ed432289201cee7ff->leave($__internal_0b90b0133bdd273435b6952ce2c07b585a597d146a14136ed432289201cee7ff_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  123 => 32,  121 => 31,  116 => 29,  110 => 26,  105 => 24,  100 => 22,  93 => 18,  89 => 16,  86 => 15,  84 => 14,  77 => 11,  68 => 10,  48 => 8,  38 => 1,  36 => 6,  34 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% set definition = resources.definition %}
{% set data = resources.data %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.product.index.before_header', {'resources': resources}) }}

    <div class=\"ui stackable two column grid\">
        {% include '@SyliusAdmin/Product/Index/_header.html.twig' %}
        {% include '@SyliusAdmin/Crud/Index/_actions.html.twig' %}
    </div>

    {{ sonata_block_render_event('sylius.admin.product.index.after_header', {'resources': resources}) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"three wide column\">
            {{ sonata_block_render_event('sylius.admin.product.index.before_taxon_tree', {'resources': resources}) }}

            {{ render(path('sylius_admin_partial_taxon_tree', {'template': '@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig'})) }}

            {{ sonata_block_render_event('sylius.admin.product.index.after_taxon_tree', {'resources': resources}) }}
        </div>
        <div class=\"thirteen wide column sylius-product-index\">
            {{ sonata_block_render_event('sylius.admin.product.index.before_filters', {'resources': resources}) }}

            {% include '@SyliusAdmin/Crud/Index/_content.html.twig' %}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product.index.after_content', {'resources': resources}) }}
{% endblock %}
", "SyliusAdminBundle:Product:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\index.html.twig");
    }
}
