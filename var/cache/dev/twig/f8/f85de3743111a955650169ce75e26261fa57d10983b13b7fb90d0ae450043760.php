<?php

/* SyliusShopBundle:Account:profileUpdate.html.twig */
class __TwigTemplate_2d7a0de0cce0221700f259cf1f60f331d87031dfbf5e5a5ca15a1f59131fd60b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account:profileUpdate.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17cba2797261beced8c93ba7a4853b0767443df7abf1ad1a60c7d685abf1bba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cba2797261beced8c93ba7a4853b0767443df7abf1ad1a60c7d685abf1bba5->enter($__internal_17cba2797261beced8c93ba7a4853b0767443df7abf1ad1a60c7d685abf1bba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:profileUpdate.html.twig"));

        $__internal_27c75e1d1cb22255bdf5664ade92bd74e8c28d84839b6c99a098aa20558cd9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c75e1d1cb22255bdf5664ade92bd74e8c28d84839b6c99a098aa20558cd9e5->enter($__internal_27c75e1d1cb22255bdf5664ade92bd74e8c28d84839b6c99a098aa20558cd9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:profileUpdate.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17cba2797261beced8c93ba7a4853b0767443df7abf1ad1a60c7d685abf1bba5->leave($__internal_17cba2797261beced8c93ba7a4853b0767443df7abf1ad1a60c7d685abf1bba5_prof);

        
        $__internal_27c75e1d1cb22255bdf5664ade92bd74e8c28d84839b6c99a098aa20558cd9e5->leave($__internal_27c75e1d1cb22255bdf5664ade92bd74e8c28d84839b6c99a098aa20558cd9e5_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_80afb3c582fcdcf5acfe488bccfd921a4cbd79241d8aefbb4e0e5e21c23e1270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80afb3c582fcdcf5acfe488bccfd921a4cbd79241d8aefbb4e0e5e21c23e1270->enter($__internal_80afb3c582fcdcf5acfe488bccfd921a4cbd79241d8aefbb4e0e5e21c23e1270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_8c07f18b2af5580eee49417f457f49a638c7846e9747ab22b1aa4efdec71655b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c07f18b2af5580eee49417f457f49a638c7846e9747ab22b1aa4efdec71655b->enter($__internal_8c07f18b2af5580eee49417f457f49a638c7846e9747ab22b1aa4efdec71655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_dashboard");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.personal_information"), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_8c07f18b2af5580eee49417f457f49a638c7846e9747ab22b1aa4efdec71655b->leave($__internal_8c07f18b2af5580eee49417f457f49a638c7846e9747ab22b1aa4efdec71655b_prof);

        
        $__internal_80afb3c582fcdcf5acfe488bccfd921a4cbd79241d8aefbb4e0e5e21c23e1270->leave($__internal_80afb3c582fcdcf5acfe488bccfd921a4cbd79241d8aefbb4e0e5e21c23e1270_prof);

    }

    // line 15
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_da5e50f6e9e06528192deb056b0abe85512462f128d7367508d6b3ab0198cc00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5e50f6e9e06528192deb056b0abe85512462f128d7367508d6b3ab0198cc00->enter($__internal_da5e50f6e9e06528192deb056b0abe85512462f128d7367508d6b3ab0198cc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_608a17b727c5103562e56248bdfa1d9fb4fdb40522e200404d0e10459c88ecea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608a17b727c5103562e56248bdfa1d9fb4fdb40522e200404d0e10459c88ecea->enter($__internal_608a17b727c5103562e56248bdfa1d9fb4fdb40522e200404d0e10459c88ecea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 16
        echo "    <div class=\"ui segment\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_profile_update"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
        <h1 class=\"ui dividing header\">
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.your_profile"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit_your_personal_information"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.profile.update.after_content_header", array("customer" => (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 23, $this->getSourceContext()); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()))));
        echo "

        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

        <div class=\"two fields\">
            <div class=\"field\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "firstName", array()), 'row');
        echo "</div>
            <div class=\"field\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "lastName", array()), 'row');
        echo "</div>
        </div>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
        <div class=\"two fields\">
            <div class=\"field\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "birthday", array()), 'row');
        echo "</div>
            <div class=\"field\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "gender", array()), 'row');
        echo "</div>
        </div>
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "phoneNumber", array()), 'row');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "subscribedToNewsletter", array()), 'row');
        echo "

        ";
        // line 39
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.profile.update.form", array("customer" => (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 39, $this->getSourceContext()); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()))));
        echo "

        <button type=\"submit\" class=\"ui large primary button\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_608a17b727c5103562e56248bdfa1d9fb4fdb40522e200404d0e10459c88ecea->leave($__internal_608a17b727c5103562e56248bdfa1d9fb4fdb40522e200404d0e10459c88ecea_prof);

        
        $__internal_da5e50f6e9e06528192deb056b0abe85512462f128d7367508d6b3ab0198cc00->leave($__internal_da5e50f6e9e06528192deb056b0abe85512462f128d7367508d6b3ab0198cc00_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:profileUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 43,  159 => 42,  155 => 41,  150 => 39,  145 => 37,  141 => 36,  136 => 34,  132 => 33,  127 => 31,  122 => 29,  118 => 28,  110 => 23,  104 => 20,  100 => 19,  95 => 17,  92 => 16,  83 => 15,  70 => 11,  63 => 9,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block breadcrumb %}
    <div class=\"ui breadcrumb\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
        <div class=\"divider\"> / </div>
        <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"section\">{{ 'sylius.ui.my_account'|trans }}</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">{{ 'sylius.ui.personal_information'|trans }}</div>
    </div>
{% endblock %}

{% block subcontent %}
    <div class=\"ui segment\">
        {{ form_start(form, {'action': path('sylius_shop_account_profile_update'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
        <h1 class=\"ui dividing header\">
            {{ 'sylius.ui.your_profile'|trans }}
            <div class=\"sub header\">{{ 'sylius.ui.edit_your_personal_information'|trans }}</div>
        </h1>

        {{ sonata_block_render_event('sylius.shop.account.profile.update.after_content_header', {'customer': customer, 'form': form}) }}

        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

        <div class=\"two fields\">
            <div class=\"field\">{{ form_row(form.firstName) }}</div>
            <div class=\"field\">{{ form_row(form.lastName) }}</div>
        </div>
        {{ form_row(form.email) }}
        <div class=\"two fields\">
            <div class=\"field\">{{ form_row(form.birthday) }}</div>
            <div class=\"field\">{{ form_row(form.gender) }}</div>
        </div>
        {{ form_row(form.phoneNumber) }}
        {{ form_row(form.subscribedToNewsletter) }}

        {{ sonata_block_render_event('sylius.shop.account.profile.update.form', {'customer': customer, 'form': form}) }}

        <button type=\"submit\" class=\"ui large primary button\">{{ 'sylius.ui.save_changes'|trans }}</button>
        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle:Account:profileUpdate.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/profileUpdate.html.twig");
    }
}
