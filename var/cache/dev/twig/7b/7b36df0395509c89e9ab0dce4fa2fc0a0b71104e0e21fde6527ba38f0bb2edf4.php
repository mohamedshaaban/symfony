<?php

/* SyliusAdminBundle:Customer:show.html.twig */
class __TwigTemplate_78996ed40bd355822b016835eb4bbfcd0e8bd42beeff1ed371ebb008ffc29abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 1);
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
        $__internal_c268bf61e7dd4fd04c7c9327ab9c6dab5de424e4fe740983e2d897d33926a735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c268bf61e7dd4fd04c7c9327ab9c6dab5de424e4fe740983e2d897d33926a735->enter($__internal_c268bf61e7dd4fd04c7c9327ab9c6dab5de424e4fe740983e2d897d33926a735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:show.html.twig"));

        $__internal_3be5df8eb965b2c7065a24834a5339544b6d14303ffc63b082bdc57286e97ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be5df8eb965b2c7065a24834a5339544b6d14303ffc63b082bdc57286e97ad3->enter($__internal_3be5df8eb965b2c7065a24834a5339544b6d14303ffc63b082bdc57286e97ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c268bf61e7dd4fd04c7c9327ab9c6dab5de424e4fe740983e2d897d33926a735->leave($__internal_c268bf61e7dd4fd04c7c9327ab9c6dab5de424e4fe740983e2d897d33926a735_prof);

        
        $__internal_3be5df8eb965b2c7065a24834a5339544b6d14303ffc63b082bdc57286e97ad3->leave($__internal_3be5df8eb965b2c7065a24834a5339544b6d14303ffc63b082bdc57286e97ad3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cc7aecbdaf13bc5e54e095645b204d7c3c2960460b6dbbe7586b842c9217787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc7aecbdaf13bc5e54e095645b204d7c3c2960460b6dbbe7586b842c9217787->enter($__internal_2cc7aecbdaf13bc5e54e095645b204d7c3c2960460b6dbbe7586b842c9217787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_185847c31c663cceac43ae730b60b5d59995397a3cdd6cd197d7ef7cc149a1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185847c31c663cceac43ae730b60b5d59995397a3cdd6cd197d7ef7cc149a1c7->enter($__internal_185847c31c663cceac43ae730b60b5d59995397a3cdd6cd197d7ef7cc149a1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer") . " ") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 3, $this->getSourceContext()); })()), "email", array())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_185847c31c663cceac43ae730b60b5d59995397a3cdd6cd197d7ef7cc149a1c7->leave($__internal_185847c31c663cceac43ae730b60b5d59995397a3cdd6cd197d7ef7cc149a1c7_prof);

        
        $__internal_2cc7aecbdaf13bc5e54e095645b204d7c3c2960460b6dbbe7586b842c9217787->leave($__internal_2cc7aecbdaf13bc5e54e095645b204d7c3c2960460b6dbbe7586b842c9217787_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_699943a1951ff5e32c388bda10773e1a5dcbc49e846cb6ffa30459afeed19109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699943a1951ff5e32c388bda10773e1a5dcbc49e846cb6ffa30459afeed19109->enter($__internal_699943a1951ff5e32c388bda10773e1a5dcbc49e846cb6ffa30459afeed19109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_abe8872cf1c6654e06658292771c7c67bdbd549289d971775e916f18b443c1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe8872cf1c6654e06658292771c7c67bdbd549289d971775e916f18b443c1af->enter($__internal_abe8872cf1c6654e06658292771c7c67bdbd549289d971775e916f18b443c1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.before_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 6, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_header.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 11, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 13
        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("sylius.admin.customer.show", array(), array("customer" => (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 13, $this->getSourceContext()); })())));
        // line 14
        echo "        ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 14, $this->getSourceContext()); })()), array("template" => "@SyliusUi/Menu/top.html.twig"));
        echo "
    </div>

    ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 17, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui divider\"></div>
    ";
        // line 20
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_breadcrumb.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 20)->display($context);
        // line 21
        echo "
    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_breadcrumb", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 22, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_orders_statistics", array("customerId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 24, $this->getSourceContext()); })()), "id", array()))));
        echo "

    ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_statistics", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 26, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui stackable grid\">
        ";
        // line 29
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_content.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 29)->display($context);
        // line 30
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_address.html.twig", "SyliusAdminBundle:Customer:show.html.twig", 30)->display($context);
        // line 31
        echo "    </div>

    ";
        // line 33
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_content", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 33, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_abe8872cf1c6654e06658292771c7c67bdbd549289d971775e916f18b443c1af->leave($__internal_abe8872cf1c6654e06658292771c7c67bdbd549289d971775e916f18b443c1af_prof);

        
        $__internal_699943a1951ff5e32c388bda10773e1a5dcbc49e846cb6ffa30459afeed19109->leave($__internal_699943a1951ff5e32c388bda10773e1a5dcbc49e846cb6ffa30459afeed19109_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  128 => 31,  125 => 30,  123 => 29,  117 => 26,  112 => 24,  107 => 22,  104 => 21,  102 => 20,  96 => 17,  89 => 14,  87 => 13,  82 => 11,  79 => 10,  77 => 9,  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% block title %}{{ 'sylius.ui.customer'|trans ~' '~ customer.email }} {{ parent() }}{% endblock %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.customer.show.before_header', {'resource': resource}) }}

    <div class=\"ui stackable two column grid\">
        {% include '@SyliusAdmin/Customer/Show/_header.html.twig' %}

        {{ sonata_block_render_event('sylius.admin.customer.show.header', {'resource': resource}) }}

        {% set menu = knp_menu_get('sylius.admin.customer.show', [], {'customer': customer}) %}
        {{ knp_menu_render(menu, {'template': '@SyliusUi/Menu/top.html.twig'}) }}
    </div>

    {{ sonata_block_render_event('sylius.admin.customer.show.after_header', {'resource': resource}) }}

    <div class=\"ui divider\"></div>
    {% include '@SyliusAdmin/Customer/Show/_breadcrumb.html.twig' %}

    {{ sonata_block_render_event('sylius.admin.customer.show.after_breadcrumb', {'resource': resource}) }}

    {{ render(path('sylius_admin_customer_orders_statistics', {'customerId': customer.id})) }}

    {{ sonata_block_render_event('sylius.admin.customer.show.after_statistics', {'resource': resource}) }}

    <div class=\"ui stackable grid\">
        {% include '@SyliusAdmin/Customer/Show/_content.html.twig' %}
        {% include '@SyliusAdmin/Customer/Show/_address.html.twig' %}
    </div>

    {{ sonata_block_render_event('sylius.admin.customer.show.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:Customer:show.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/show.html.twig");
    }
}
