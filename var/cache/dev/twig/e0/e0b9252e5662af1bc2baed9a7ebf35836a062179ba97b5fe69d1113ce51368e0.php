<?php

/* SyliusAdminBundle:Order:update.html.twig */
class __TwigTemplate_efe256101fb3ae8a8bb0e16e5556b399d4db68cda80a1acdfaf428cba9a99e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Order:update.html.twig", 1);
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
        $__internal_3186eee9138242de8b4a82055c52669c5117e6478bc26b6fad56adbd717945a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3186eee9138242de8b4a82055c52669c5117e6478bc26b6fad56adbd717945a5->enter($__internal_3186eee9138242de8b4a82055c52669c5117e6478bc26b6fad56adbd717945a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:update.html.twig"));

        $__internal_28470ccb1b8ee79b2136070d363ac56d57db3b3ba9e73fde64f942145e647956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28470ccb1b8ee79b2136070d363ac56d57db3b3ba9e73fde64f942145e647956->enter($__internal_28470ccb1b8ee79b2136070d363ac56d57db3b3ba9e73fde64f942145e647956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:update.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Order:update.html.twig", 3);
        // line 4
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "SyliusAdminBundle:Order:update.html.twig", 4);
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3186eee9138242de8b4a82055c52669c5117e6478bc26b6fad56adbd717945a5->leave($__internal_3186eee9138242de8b4a82055c52669c5117e6478bc26b6fad56adbd717945a5_prof);

        
        $__internal_28470ccb1b8ee79b2136070d363ac56d57db3b3ba9e73fde64f942145e647956->leave($__internal_28470ccb1b8ee79b2136070d363ac56d57db3b3ba9e73fde64f942145e647956_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea13d77285f97669fb8afc45233ac64635c13d565ee50b492dcc66a20637e61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea13d77285f97669fb8afc45233ac64635c13d565ee50b492dcc66a20637e61c->enter($__internal_ea13d77285f97669fb8afc45233ac64635c13d565ee50b492dcc66a20637e61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_244661e14f5934ed8be6891116042f5dfff43777810e895baf80b4e89b8734ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244661e14f5934ed8be6891116042f5dfff43777810e895baf80b4e89b8734ab->enter($__internal_244661e14f5934ed8be6891116042f5dfff43777810e895baf80b4e89b8734ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit_order") . " #") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "number", array())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_244661e14f5934ed8be6891116042f5dfff43777810e895baf80b4e89b8734ab->leave($__internal_244661e14f5934ed8be6891116042f5dfff43777810e895baf80b4e89b8734ab_prof);

        
        $__internal_ea13d77285f97669fb8afc45233ac64635c13d565ee50b492dcc66a20637e61c->leave($__internal_ea13d77285f97669fb8afc45233ac64635c13d565ee50b492dcc66a20637e61c_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_796732e3318632d2e68675e9622a5990f321ab55f5da713bf8b007e5b89d7377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796732e3318632d2e68675e9622a5990f321ab55f5da713bf8b007e5b89d7377->enter($__internal_796732e3318632d2e68675e9622a5990f321ab55f5da713bf8b007e5b89d7377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6632124ed569428c8661eaedac7754b107477e49883f6c9d59e23da9eef8d487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6632124ed569428c8661eaedac7754b107477e49883f6c9d59e23da9eef8d487->enter($__internal_6632124ed569428c8661eaedac7754b107477e49883f6c9d59e23da9eef8d487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.before_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 11, $this->getSourceContext()); })()))));
        echo "

<div class=\"ui stackable two column grid\">
    <div class=\"twelve wide column\">
        ";
        // line 15
        $this->loadTemplate("@SyliusAdmin/Order/Show/_header.html.twig", "SyliusAdminBundle:Order:update.html.twig", 15)->display($context);
        // line 16
        echo "    </div>
    <div class=\"four wide right aligned column\">
        ";
        // line 18
        $this->loadTemplate("@SyliusAdmin/Order/Update/_actions.html.twig", "SyliusAdminBundle:Order:update.html.twig", 18)->display($context);
        // line 19
        echo "    </div>
</div>

";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.after_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 22, $this->getSourceContext()); })()))));
        echo "
    
";
        // line 24
        $this->loadTemplate("@SyliusAdmin/Order/Update/_breadcrumb.html.twig", "SyliusAdminBundle:Order:update.html.twig", 24)->display($context);
        // line 25
        echo "
";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.after_breadcrumb", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 26, $this->getSourceContext()); })()))));
        echo "

";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
    <div class=\"ui segment\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</h4>
            ";
        // line 34
        $this->loadTemplate("@SyliusAdmin/Common/Form/_address.html.twig", "SyliusAdminBundle:Order:update.html.twig", 34)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "shippingAddress", array()))));
        // line 35
        echo "        </div>

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</h4>
            ";
        // line 39
        $this->loadTemplate("@SyliusAdmin/Common/Form/_address.html.twig", "SyliusAdminBundle:Order:update.html.twig", 39)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "billingAddress", array()))));
        // line 40
        echo "        </div>

        ";
        // line 42
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.form", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 42, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
        ";
        // line 45
        $this->loadTemplate("@SyliusUi/Form/Buttons/_update.html.twig", "SyliusAdminBundle:Order:update.html.twig", 45)->display(array_merge($context, array("paths" => array("cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_index")))));
        // line 46
        echo "    </div>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "

";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.after_content", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 49, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6632124ed569428c8661eaedac7754b107477e49883f6c9d59e23da9eef8d487->leave($__internal_6632124ed569428c8661eaedac7754b107477e49883f6c9d59e23da9eef8d487_prof);

        
        $__internal_796732e3318632d2e68675e9622a5990f321ab55f5da713bf8b007e5b89d7377->leave($__internal_796732e3318632d2e68675e9622a5990f321ab55f5da713bf8b007e5b89d7377_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 49,  155 => 47,  152 => 46,  150 => 45,  146 => 44,  141 => 42,  137 => 40,  135 => 39,  131 => 38,  126 => 35,  124 => 34,  120 => 33,  112 => 28,  107 => 26,  104 => 25,  102 => 24,  97 => 22,  92 => 19,  90 => 18,  86 => 16,  84 => 15,  77 => 11,  68 => 10,  48 => 6,  38 => 1,  36 => 8,  34 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}
{% import 'SyliusUiBundle:Macro:buttons.html.twig' as buttons %}

{% block title %}{{ 'sylius.ui.edit_order'|trans ~' #'~ order.number }} {{ parent() }}{% endblock %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.order.update.before_header', {'resource': resource}) }}

<div class=\"ui stackable two column grid\">
    <div class=\"twelve wide column\">
        {% include '@SyliusAdmin/Order/Show/_header.html.twig' %}
    </div>
    <div class=\"four wide right aligned column\">
        {% include '@SyliusAdmin/Order/Update/_actions.html.twig' %}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.order.update.after_header', {'resource': resource}) }}
    
{% include '@SyliusAdmin/Order/Update/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.order.update.after_breadcrumb', {'resource': resource}) }}

{{ form_start(form, {'action': path('sylius_admin_order_update', {'id': order.id}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
    <div class=\"ui segment\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</h4>
            {% include '@SyliusAdmin/Common/Form/_address.html.twig' with {'form': form.shippingAddress} %}
        </div>

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.billing_address'|trans }}</h4>
            {% include '@SyliusAdmin/Common/Form/_address.html.twig' with {'form': form.billingAddress} %}
        </div>

        {{ sonata_block_render_event('sylius.admin.order.update.form', {'resource': resource}) }}

        {{ form_row(form._token) }}
        {% include '@SyliusUi/Form/Buttons/_update.html.twig' with {'paths': {'cancel': path('sylius_admin_order_index')}} %}
    </div>
{{ form_end(form, {'render_rest': false}) }}

{{ sonata_block_render_event('sylius.admin.order.update.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:Order:update.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/update.html.twig");
    }
}
