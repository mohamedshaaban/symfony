<?php

/* SyliusAdminBundle:PromotionCoupon:generate.html.twig */
class __TwigTemplate_ce3e53c976dd9a29d03cfd15e4f02bcf3eb8461df40f31a37af6a00490dfec76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", 1);
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
        $__internal_af34c761210f3b64c9012b8b8de67ae363e89e56b31ce044815dd534db21a20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af34c761210f3b64c9012b8b8de67ae363e89e56b31ce044815dd534db21a20d->enter($__internal_af34c761210f3b64c9012b8b8de67ae363e89e56b31ce044815dd534db21a20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:generate.html.twig"));

        $__internal_97048a656dc469369b735c57451fae324ef1380bb1821d3a450fae1a12d5956d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97048a656dc469369b735c57451fae324ef1380bb1821d3a450fae1a12d5956d->enter($__internal_97048a656dc469369b735c57451fae324ef1380bb1821d3a450fae1a12d5956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:generate.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", 3);
        // line 5
        $context["header"] = "sylius.ui.generate_coupons";
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af34c761210f3b64c9012b8b8de67ae363e89e56b31ce044815dd534db21a20d->leave($__internal_af34c761210f3b64c9012b8b8de67ae363e89e56b31ce044815dd534db21a20d_prof);

        
        $__internal_97048a656dc469369b735c57451fae324ef1380bb1821d3a450fae1a12d5956d->leave($__internal_97048a656dc469369b735c57451fae324ef1380bb1821d3a450fae1a12d5956d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3ec3a049a0000a61f1b52a717e7d389549527d826ecd42273d22a36225e5412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ec3a049a0000a61f1b52a717e7d389549527d826ecd42273d22a36225e5412->enter($__internal_a3ec3a049a0000a61f1b52a717e7d389549527d826ecd42273d22a36225e5412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c833fab6d18b1c7dbfa0b605d60823740f02e3d0f52ac560fa8cc861c72affee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c833fab6d18b1c7dbfa0b605d60823740f02e3d0f52ac560fa8cc861c72affee->enter($__internal_c833fab6d18b1c7dbfa0b605d60823740f02e3d0f52ac560fa8cc861c72affee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 7, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_c833fab6d18b1c7dbfa0b605d60823740f02e3d0f52ac560fa8cc861c72affee->leave($__internal_c833fab6d18b1c7dbfa0b605d60823740f02e3d0f52ac560fa8cc861c72affee_prof);

        
        $__internal_a3ec3a049a0000a61f1b52a717e7d389549527d826ecd42273d22a36225e5412->leave($__internal_a3ec3a049a0000a61f1b52a717e7d389549527d826ecd42273d22a36225e5412_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d1c96fcfde2e9bd0cd09255e3ed731782ff559fc5623ae1a615027ad6ccd2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1c96fcfde2e9bd0cd09255e3ed731782ff559fc5623ae1a615027ad6ccd2fb->enter($__internal_9d1c96fcfde2e9bd0cd09255e3ed731782ff559fc5623ae1a615027ad6ccd2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7ea483c61fe2a560e9ae9523359b6b25aa320fe82b17326527127e63a8c09e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea483c61fe2a560e9ae9523359b6b25aa320fe82b17326527127e63a8c09e1f->enter($__internal_7ea483c61fe2a560e9ae9523359b6b25aa320fe82b17326527127e63a8c09e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.generate.before_header", array("resource" => (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 12, $this->getSourceContext()); })()))));
        echo "

";
        // line 14
        echo $context["headers"]->macro_default(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), "random", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 14, $this->getSourceContext()); })()))) : ((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 14, $this->getSourceContext()); })())))));
        echo "

";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.generate.after_header", array("resource" => (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 16, $this->getSourceContext()); })()))));
        echo "

";
        // line 18
        $this->loadTemplate("@SyliusAdmin/PromotionCoupon/Generate/_breadcrumb.html.twig", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", 18)->display($context);
        // line 19
        echo "
";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.generate.after_breadcrumb", array("resource" => (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 20, $this->getSourceContext()); })()))));
        echo "

";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_coupon_generate", array("promotionId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 22, $this->getSourceContext()); })()), "id", array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
<div class=\"ui segment\">
    ";
        // line 24
        $this->loadTemplate("@SyliusAdmin/PromotionCoupon/Generate/_form.html.twig", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", 24)->display($context);
        // line 25
        echo "    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"random icon\"></i>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.generate"), "html", null, true);
        echo "</button>
            ";
        // line 28
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", 28)->display(array_merge($context, array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 28, $this->getSourceContext()); })()), "getRouteName", array(0 => "index"), "method"), array("promotionId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))))));
        // line 29
        echo "        </div>
    </div>

    ";
        // line 32
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.generate.form", array("resource" => (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 32, $this->getSourceContext()); })()))));
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.generate.after_content", array("resource" => (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 37, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7ea483c61fe2a560e9ae9523359b6b25aa320fe82b17326527127e63a8c09e1f->leave($__internal_7ea483c61fe2a560e9ae9523359b6b25aa320fe82b17326527127e63a8c09e1f_prof);

        
        $__internal_9d1c96fcfde2e9bd0cd09255e3ed731782ff559fc5623ae1a615027ad6ccd2fb->leave($__internal_9d1c96fcfde2e9bd0cd09255e3ed731782ff559fc5623ae1a615027ad6ccd2fb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon:generate.html.twig";
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

{% set header = 'sylius.ui.generate_coupons' %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.promotion_coupon.generate.before_header', {'resource': promotion}) }}

{{ headers.default(promotion.name, 'random', configuration.vars.subheader|default(header)|trans) }}

{{ sonata_block_render_event('sylius.admin.promotion_coupon.generate.after_header', {'resource': promotion}) }}

{% include '@SyliusAdmin/PromotionCoupon/Generate/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.promotion_coupon.generate.after_breadcrumb', {'resource': promotion}) }}

{{ form_start(form, {'action': path('sylius_admin_promotion_coupon_generate', {'promotionId': promotion.id}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
<div class=\"ui segment\">
    {% include '@SyliusAdmin/PromotionCoupon/Generate/_form.html.twig' %}
    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"random icon\"></i>{{- 'sylius.ui.generate'|trans -}}</button>
            {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': path(configuration.getRouteName('index'), {'promotionId': promotion.id})} %}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.promotion_coupon.generate.form', {'resource': promotion}) }}
</div>
{{ form_row(form._token) }}
{{ form_end(form, {'render_rest': false}) }}

{{ sonata_block_render_event('sylius.admin.promotion_coupon.generate.after_content', {'resource': promotion}) }}
{% endblock %}
", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PromotionCoupon/generate.html.twig");
    }
}
