<?php

/* SyliusAdminBundle:Order:show.html.twig */
class __TwigTemplate_0c4f91378c65461a2e2242018564a60b7a23ec22981bb53267ef8345c1f08d69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Order:show.html.twig", 1);
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
        $__internal_2ca98441e1c7ff5e70f30931ca71ff9ff811631547f06a8e57bc66906ad582d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca98441e1c7ff5e70f30931ca71ff9ff811631547f06a8e57bc66906ad582d7->enter($__internal_2ca98441e1c7ff5e70f30931ca71ff9ff811631547f06a8e57bc66906ad582d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:show.html.twig"));

        $__internal_4751db4c0a7eaeb3136521fa4d7774a42df8f83416501accee3737243f64c0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4751db4c0a7eaeb3136521fa4d7774a42df8f83416501accee3737243f64c0a4->enter($__internal_4751db4c0a7eaeb3136521fa4d7774a42df8f83416501accee3737243f64c0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:show.html.twig"));

        // line 5
        $context["customer"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->getSourceContext()); })()), "customer", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ca98441e1c7ff5e70f30931ca71ff9ff811631547f06a8e57bc66906ad582d7->leave($__internal_2ca98441e1c7ff5e70f30931ca71ff9ff811631547f06a8e57bc66906ad582d7_prof);

        
        $__internal_4751db4c0a7eaeb3136521fa4d7774a42df8f83416501accee3737243f64c0a4->leave($__internal_4751db4c0a7eaeb3136521fa4d7774a42df8f83416501accee3737243f64c0a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8b4a13d9dd84ce0bd870910d818c3eb833e7da24efb1016f12066de28545af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b4a13d9dd84ce0bd870910d818c3eb833e7da24efb1016f12066de28545af1->enter($__internal_c8b4a13d9dd84ce0bd870910d818c3eb833e7da24efb1016f12066de28545af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81c88f6f415128d278a43616d0966cc6ad976487b705660503af381a2b8bf22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c88f6f415128d278a43616d0966cc6ad976487b705660503af381a2b8bf22a->enter($__internal_81c88f6f415128d278a43616d0966cc6ad976487b705660503af381a2b8bf22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order") . " #") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 3, $this->getSourceContext()); })()), "number", array())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_81c88f6f415128d278a43616d0966cc6ad976487b705660503af381a2b8bf22a->leave($__internal_81c88f6f415128d278a43616d0966cc6ad976487b705660503af381a2b8bf22a_prof);

        
        $__internal_c8b4a13d9dd84ce0bd870910d818c3eb833e7da24efb1016f12066de28545af1->leave($__internal_c8b4a13d9dd84ce0bd870910d818c3eb833e7da24efb1016f12066de28545af1_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4ea16346898d0e640576bbfe391411c064d3e924c9008bea28d02e5c933bade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ea16346898d0e640576bbfe391411c064d3e924c9008bea28d02e5c933bade->enter($__internal_f4ea16346898d0e640576bbfe391411c064d3e924c9008bea28d02e5c933bade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_170fe29cfc75274301a3c167f9fe7e0bda833a5a5a9bf9851015713e94d5d790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170fe29cfc75274301a3c167f9fe7e0bda833a5a5a9bf9851015713e94d5d790->enter($__internal_170fe29cfc75274301a3c167f9fe7e0bda833a5a5a9bf9851015713e94d5d790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 8, $this->getSourceContext()); })()))));
        echo "

<div class=\"ui stackable two column grid\">
    <div class=\"ten wide column\">
        ";
        // line 12
        $this->loadTemplate("@SyliusAdmin/Order/Show/_header.html.twig", "SyliusAdminBundle:Order:show.html.twig", 12)->display($context);
        // line 13
        echo "    </div>

    ";
        // line 15
        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("sylius.admin.order.show", array(), array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 15, $this->getSourceContext()); })())));
        // line 16
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 16, $this->getSourceContext()); })()), array("template" => "@SyliusUi/Menu/top.html.twig"));
        echo "
</div>

";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 19, $this->getSourceContext()); })()))));
        echo "

";
        // line 21
        $this->loadTemplate("@SyliusAdmin/Order/Show/_breadcrumb.html.twig", "SyliusAdminBundle:Order:show.html.twig", 21)->display($context);
        // line 22
        echo "
";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_breadcrumb", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 23, $this->getSourceContext()); })()))));
        echo "

<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        ";
        // line 27
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_summary", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 27, $this->getSourceContext()); })()))));
        echo "

        <div class=\"ui segment\">
            ";
        // line 30
        $this->loadTemplate("@SyliusAdmin/Order/Show/_summary.html.twig", "SyliusAdminBundle:Order:show.html.twig", 30)->display($context);
        // line 31
        echo "        </div>

        ";
        // line 33
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_summary", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 33, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 35
        $this->loadTemplate("@SyliusAdmin/Order/Show/_notes.html.twig", "SyliusAdminBundle:Order:show.html.twig", 35)->display($context);
        // line 36
        echo "    </div>
    <div class=\"four wide column\">
        ";
        // line 38
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_customer_information", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 38, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 40
        $this->loadTemplate("@SyliusAdmin/Order/Show/_customer.html.twig", "SyliusAdminBundle:Order:show.html.twig", 40)->display($context);
        // line 41
        echo "
        ";
        // line 42
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_addresses", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 42, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 44
        $this->loadTemplate("@SyliusAdmin/Order/Show/_addresses.html.twig", "SyliusAdminBundle:Order:show.html.twig", 44)->display($context);
        // line 45
        echo "
        ";
        // line 46
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_payments", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 46, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 48
        $this->loadTemplate("@SyliusAdmin/Order/Show/_payments.html.twig", "SyliusAdminBundle:Order:show.html.twig", 48)->display($context);
        // line 49
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Order/Show/_shipments.html.twig", "SyliusAdminBundle:Order:show.html.twig", 49)->display($context);
        // line 50
        echo "
        ";
        // line 51
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_shipments", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 51, $this->getSourceContext()); })()))));
        echo "
    </div>
</div>

";
        // line 55
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_content", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 55, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_170fe29cfc75274301a3c167f9fe7e0bda833a5a5a9bf9851015713e94d5d790->leave($__internal_170fe29cfc75274301a3c167f9fe7e0bda833a5a5a9bf9851015713e94d5d790_prof);

        
        $__internal_f4ea16346898d0e640576bbfe391411c064d3e924c9008bea28d02e5c933bade->leave($__internal_f4ea16346898d0e640576bbfe391411c064d3e924c9008bea28d02e5c933bade_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 55,  168 => 51,  165 => 50,  162 => 49,  160 => 48,  155 => 46,  152 => 45,  150 => 44,  145 => 42,  142 => 41,  140 => 40,  135 => 38,  131 => 36,  129 => 35,  124 => 33,  120 => 31,  118 => 30,  112 => 27,  105 => 23,  102 => 22,  100 => 21,  95 => 19,  88 => 16,  86 => 15,  82 => 13,  80 => 12,  73 => 8,  64 => 7,  44 => 3,  34 => 1,  32 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% block title %}{{ 'sylius.ui.order'|trans ~' #'~ order.number }} {{ parent() }}{% endblock %}

{% set customer = order.customer %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.order.show.before_header', {'resource': resource}) }}

<div class=\"ui stackable two column grid\">
    <div class=\"ten wide column\">
        {% include '@SyliusAdmin/Order/Show/_header.html.twig' %}
    </div>

    {% set menu = knp_menu_get('sylius.admin.order.show', [], {'order': order}) %}
    {{ knp_menu_render(menu, {'template': '@SyliusUi/Menu/top.html.twig'}) }}
</div>

{{ sonata_block_render_event('sylius.admin.order.show.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Order/Show/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.order.show.after_breadcrumb', {'resource': resource}) }}

<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        {{ sonata_block_render_event('sylius.admin.order.show.before_summary', {'resource': resource}) }}

        <div class=\"ui segment\">
            {% include '@SyliusAdmin/Order/Show/_summary.html.twig' %}
        </div>

        {{ sonata_block_render_event('sylius.admin.order.show.after_summary', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_notes.html.twig' %}
    </div>
    <div class=\"four wide column\">
        {{ sonata_block_render_event('sylius.admin.order.show.before_customer_information', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_customer.html.twig' %}

        {{ sonata_block_render_event('sylius.admin.order.show.before_addresses', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_addresses.html.twig' %}

        {{ sonata_block_render_event('sylius.admin.order.show.before_payments', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_payments.html.twig' %}
        {% include '@SyliusAdmin/Order/Show/_shipments.html.twig' %}

        {{ sonata_block_render_event('sylius.admin.order.show.after_shipments', {'resource': resource}) }}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.order.show.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:Order:show.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/show.html.twig");
    }
}
