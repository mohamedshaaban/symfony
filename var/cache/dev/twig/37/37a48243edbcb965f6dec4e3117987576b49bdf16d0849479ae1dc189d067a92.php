<?php

/* SyliusAdminBundle:ProductVariant:generate.html.twig */
class __TwigTemplate_e11ac4e540508249577923c00dd1a7ce13fc6a98a95a87a10ecafd8b83ec3045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "SyliusAdminBundle:ProductVariant:generate.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_609fc864357b9d0e4a22ba3a1e4914e9e26eaeebaa76155b928167a3a6c7107d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609fc864357b9d0e4a22ba3a1e4914e9e26eaeebaa76155b928167a3a6c7107d->enter($__internal_609fc864357b9d0e4a22ba3a1e4914e9e26eaeebaa76155b928167a3a6c7107d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:generate.html.twig"));

        $__internal_c19a23ed1cc70a52cfb798f3b1ade397a2b9f813e9f5e2d0c7397dec92bc3986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19a23ed1cc70a52cfb798f3b1ade397a2b9f813e9f5e2d0c7397dec92bc3986->enter($__internal_c19a23ed1cc70a52cfb798f3b1ade397a2b9f813e9f5e2d0c7397dec92bc3986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:generate.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:ProductVariant:generate.html.twig", 3);
        // line 5
        $context["header"] = "sylius.ui.generate_variants";
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_609fc864357b9d0e4a22ba3a1e4914e9e26eaeebaa76155b928167a3a6c7107d->leave($__internal_609fc864357b9d0e4a22ba3a1e4914e9e26eaeebaa76155b928167a3a6c7107d_prof);

        
        $__internal_c19a23ed1cc70a52cfb798f3b1ade397a2b9f813e9f5e2d0c7397dec92bc3986->leave($__internal_c19a23ed1cc70a52cfb798f3b1ade397a2b9f813e9f5e2d0c7397dec92bc3986_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8847dd9fa5d20dea3ff2f32643276a2f2cf3d2d565902a20c17346b4cb103c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8847dd9fa5d20dea3ff2f32643276a2f2cf3d2d565902a20c17346b4cb103c1c->enter($__internal_8847dd9fa5d20dea3ff2f32643276a2f2cf3d2d565902a20c17346b4cb103c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6f2ae511c8cd07eee018b65561a156e04b31b10c0cffcb231d73437bad4dc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f2ae511c8cd07eee018b65561a156e04b31b10c0cffcb231d73437bad4dc00->enter($__internal_e6f2ae511c8cd07eee018b65561a156e04b31b10c0cffcb231d73437bad4dc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 7, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_e6f2ae511c8cd07eee018b65561a156e04b31b10c0cffcb231d73437bad4dc00->leave($__internal_e6f2ae511c8cd07eee018b65561a156e04b31b10c0cffcb231d73437bad4dc00_prof);

        
        $__internal_8847dd9fa5d20dea3ff2f32643276a2f2cf3d2d565902a20c17346b4cb103c1c->leave($__internal_8847dd9fa5d20dea3ff2f32643276a2f2cf3d2d565902a20c17346b4cb103c1c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_575392d4a983f1a5d869573bd5325530678570b001839c2ec7d2e5530c2bcb33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575392d4a983f1a5d869573bd5325530678570b001839c2ec7d2e5530c2bcb33->enter($__internal_575392d4a983f1a5d869573bd5325530678570b001839c2ec7d2e5530c2bcb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_17813310930a3924df9c0ba9b6d5d090860d55b9fca8eb608fd9accb12e89dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17813310930a3924df9c0ba9b6d5d090860d55b9fca8eb608fd9accb12e89dcb->enter($__internal_17813310930a3924df9c0ba9b6d5d090860d55b9fca8eb608fd9accb12e89dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.generate.before_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 12, $this->getSourceContext()); })()))));
        echo "

";
        // line 14
        echo $context["headers"]->macro_default(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), "random", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 14, $this->getSourceContext()); })()))) : ((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 14, $this->getSourceContext()); })())))));
        echo "

";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.generate.after_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 16, $this->getSourceContext()); })()))));
        echo "

";
        // line 18
        $this->loadTemplate("@SyliusAdmin/ProductVariant/Generate/_breadcrumb.html.twig", "SyliusAdminBundle:ProductVariant:generate.html.twig", 18)->display($context);
        // line 19
        echo "
";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.generate.after_breadcrumb", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 20, $this->getSourceContext()); })()))));
        echo "

";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_variant_generate", array("productId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 22, $this->getSourceContext()); })()), "id", array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
<div class=\"ui segment\">
    ";
        // line 24
        $this->loadTemplate("@SyliusAdmin/ProductVariant/Generate/_form.html.twig", "SyliusAdminBundle:ProductVariant:generate.html.twig", 24)->display($context);
        // line 25
        echo "    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"random icon\"></i>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.generate"), "html", null, true);
        echo "</button>
            ";
        // line 28
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "SyliusAdminBundle:ProductVariant:generate.html.twig", 28)->display(array_merge($context, array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 28, $this->getSourceContext()); })()), "getRouteName", array(0 => "index"), "method"), array("productId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))))));
        // line 29
        echo "        </div>
    </div>

    ";
        // line 32
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.generate.form", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 32, $this->getSourceContext()); })()))));
        echo "
</div>
";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "

";
        // line 37
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.generate.after_content", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 37, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_17813310930a3924df9c0ba9b6d5d090860d55b9fca8eb608fd9accb12e89dcb->leave($__internal_17813310930a3924df9c0ba9b6d5d090860d55b9fca8eb608fd9accb12e89dcb_prof);

        
        $__internal_575392d4a983f1a5d869573bd5325530678570b001839c2ec7d2e5530c2bcb33->leave($__internal_575392d4a983f1a5d869573bd5325530678570b001839c2ec7d2e5530c2bcb33_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant:generate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 37,  133 => 35,  129 => 34,  124 => 32,  119 => 29,  117 => 28,  113 => 27,  109 => 25,  107 => 24,  102 => 22,  97 => 20,  94 => 19,  92 => 18,  87 => 16,  82 => 14,  77 => 12,  68 => 11,  48 => 7,  38 => 1,  36 => 9,  34 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusAdmin/layout.html.twig' %}

{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

{% set header = 'sylius.ui.generate_variants' %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.product_variant.generate.before_header', {'resource': resource}) }}

{{ headers.default(product.name, 'random', configuration.vars.subheader|default(header)|trans) }}

{{ sonata_block_render_event('sylius.admin.product_variant.generate.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/ProductVariant/Generate/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.product_variant.generate.after_breadcrumb', {'resource': resource}) }}

{{ form_start(form, {'action': path('sylius_admin_product_variant_generate', {'productId': product.id}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
<div class=\"ui segment\">
    {% include '@SyliusAdmin/ProductVariant/Generate/_form.html.twig' %}
    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"random icon\"></i>{{- 'sylius.ui.generate'|trans -}}</button>
            {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': path(configuration.getRouteName('index'), {'productId': product.id})} %}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product_variant.generate.form', {'resource': resource}) }}
</div>
{{ form_row(form._token) }}
{{ form_end(form, {'render_rest': false}) }}

{{ sonata_block_render_event('sylius.admin.product_variant.generate.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:ProductVariant:generate.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/generate.html.twig");
    }
}
