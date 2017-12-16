<?php

/* SyliusAdminBundle:Product:index.html.twig */
class __TwigTemplate_c87e21c4938676ed2aab40adb5b277593d41c99169d981f637307f372bc53ece extends Twig_Template
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
        $__internal_f0b61fd72885b1671a1bf51eb68894155c92f450c29045605bf02b8e2709934c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b61fd72885b1671a1bf51eb68894155c92f450c29045605bf02b8e2709934c->enter($__internal_f0b61fd72885b1671a1bf51eb68894155c92f450c29045605bf02b8e2709934c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:index.html.twig"));

        $__internal_4209c226bca850926211dfa91ad74fbb5480765caaf2eb937b744a8eeb6d2c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4209c226bca850926211dfa91ad74fbb5480765caaf2eb937b744a8eeb6d2c4d->enter($__internal_4209c226bca850926211dfa91ad74fbb5480765caaf2eb937b744a8eeb6d2c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:index.html.twig"));

        // line 3
        $context["definition"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 3, $this->getSourceContext()); })()), "definition", array());
        // line 4
        $context["data"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 4, $this->getSourceContext()); })()), "data", array());
        // line 6
        $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->getSourceContext()); })()), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->getSourceContext()); })()), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0b61fd72885b1671a1bf51eb68894155c92f450c29045605bf02b8e2709934c->leave($__internal_f0b61fd72885b1671a1bf51eb68894155c92f450c29045605bf02b8e2709934c_prof);

        
        $__internal_4209c226bca850926211dfa91ad74fbb5480765caaf2eb937b744a8eeb6d2c4d->leave($__internal_4209c226bca850926211dfa91ad74fbb5480765caaf2eb937b744a8eeb6d2c4d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_de9d996a0c84eda430509023abdb984a5e86e831db779884817e4a1e59f68457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9d996a0c84eda430509023abdb984a5e86e831db779884817e4a1e59f68457->enter($__internal_de9d996a0c84eda430509023abdb984a5e86e831db779884817e4a1e59f68457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e0235f0433ad0a498adaaec8a3528cbdefedc1c92fc0340777f9725e72c0ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0235f0433ad0a498adaaec8a3528cbdefedc1c92fc0340777f9725e72c0ca2->enter($__internal_6e0235f0433ad0a498adaaec8a3528cbdefedc1c92fc0340777f9725e72c0ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 8, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6e0235f0433ad0a498adaaec8a3528cbdefedc1c92fc0340777f9725e72c0ca2->leave($__internal_6e0235f0433ad0a498adaaec8a3528cbdefedc1c92fc0340777f9725e72c0ca2_prof);

        
        $__internal_de9d996a0c84eda430509023abdb984a5e86e831db779884817e4a1e59f68457->leave($__internal_de9d996a0c84eda430509023abdb984a5e86e831db779884817e4a1e59f68457_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_ec3d9585ccb3bc73c3014e603234dd6084f4e9895b8458fdd763a1c0b082670e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3d9585ccb3bc73c3014e603234dd6084f4e9895b8458fdd763a1c0b082670e->enter($__internal_ec3d9585ccb3bc73c3014e603234dd6084f4e9895b8458fdd763a1c0b082670e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3af5dfbcf2ecfd8b05bfcfe48fcf595bcabda941289a3e02457cf0cdbe677741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af5dfbcf2ecfd8b05bfcfe48fcf595bcabda941289a3e02457cf0cdbe677741->enter($__internal_3af5dfbcf2ecfd8b05bfcfe48fcf595bcabda941289a3e02457cf0cdbe677741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3af5dfbcf2ecfd8b05bfcfe48fcf595bcabda941289a3e02457cf0cdbe677741->leave($__internal_3af5dfbcf2ecfd8b05bfcfe48fcf595bcabda941289a3e02457cf0cdbe677741_prof);

        
        $__internal_ec3d9585ccb3bc73c3014e603234dd6084f4e9895b8458fdd763a1c0b082670e->leave($__internal_ec3d9585ccb3bc73c3014e603234dd6084f4e9895b8458fdd763a1c0b082670e_prof);

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
", "SyliusAdminBundle:Product:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/index.html.twig");
    }
}
