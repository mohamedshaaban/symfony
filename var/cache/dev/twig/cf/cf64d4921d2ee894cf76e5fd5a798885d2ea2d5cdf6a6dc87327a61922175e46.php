<?php

/* @SyliusShop/Common/Macro/money.html.twig */
class __TwigTemplate_1870d735866534a1f7a2f53062dcb65cfecf4ddf486416165fbf4554005fe7dd extends Twig_Template
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
        $__internal_e30735e3e622e6db90418a335775149dae524b35790304730df8f10979a78e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30735e3e622e6db90418a335775149dae524b35790304730df8f10979a78e56->enter($__internal_e30735e3e622e6db90418a335775149dae524b35790304730df8f10979a78e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Macro/money.html.twig"));

        $__internal_07837fa1d3a03c5d64c76d48567e1e8d43efe319b59cf34c19aaa626114e6ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07837fa1d3a03c5d64c76d48567e1e8d43efe319b59cf34c19aaa626114e6ad2->enter($__internal_07837fa1d3a03c5d64c76d48567e1e8d43efe319b59cf34c19aaa626114e6ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Macro/money.html.twig"));

        
        $__internal_e30735e3e622e6db90418a335775149dae524b35790304730df8f10979a78e56->leave($__internal_e30735e3e622e6db90418a335775149dae524b35790304730df8f10979a78e56_prof);

        
        $__internal_07837fa1d3a03c5d64c76d48567e1e8d43efe319b59cf34c19aaa626114e6ad2->leave($__internal_07837fa1d3a03c5d64c76d48567e1e8d43efe319b59cf34c19aaa626114e6ad2_prof);

    }

    // line 1
    public function macro_format($__amount__ = null, $__currency_code__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "amount" => $__amount__,
            "currency_code" => $__currency_code__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8b8cc6046a5d161a85b060bf929194e6ecc2bb9ecfdd781e02712eacf291cc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8b8cc6046a5d161a85b060bf929194e6ecc2bb9ecfdd781e02712eacf291cc20->enter($__internal_8b8cc6046a5d161a85b060bf929194e6ecc2bb9ecfdd781e02712eacf291cc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            $__internal_f410827af7a8660df88ee9700b78173c78c232fcf26bccb52b2aecdb6f338d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f410827af7a8660df88ee9700b78173c78c232fcf26bccb52b2aecdb6f338d62->enter($__internal_f410827af7a8660df88ee9700b78173c78c232fcf26bccb52b2aecdb6f338d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), array((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new Twig_Error_Runtime('Variable "amount" does not exist.', 2, $this->getSourceContext()); })()), (isset($context["currency_code"]) || array_key_exists("currency_code", $context) ? $context["currency_code"] : (function () { throw new Twig_Error_Runtime('Variable "currency_code" does not exist.', 2, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 2, $this->getSourceContext()); })()), "localeCode", array()))), "html", null, true);
            
            $__internal_f410827af7a8660df88ee9700b78173c78c232fcf26bccb52b2aecdb6f338d62->leave($__internal_f410827af7a8660df88ee9700b78173c78c232fcf26bccb52b2aecdb6f338d62_prof);

            
            $__internal_8b8cc6046a5d161a85b060bf929194e6ecc2bb9ecfdd781e02712eacf291cc20->leave($__internal_8b8cc6046a5d161a85b060bf929194e6ecc2bb9ecfdd781e02712eacf291cc20_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_convertAndFormat($__amount__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "amount" => $__amount__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8488e40e3e30f16ff2bf56cc9277e6cc1dc5dd18dbd92887f4cfab7b4d68401c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8488e40e3e30f16ff2bf56cc9277e6cc1dc5dd18dbd92887f4cfab7b4d68401c->enter($__internal_8488e40e3e30f16ff2bf56cc9277e6cc1dc5dd18dbd92887f4cfab7b4d68401c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            $__internal_63940c2558a979735622a1f53069629acd9476bf86af448df6fed4735a3dcdde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_63940c2558a979735622a1f53069629acd9476bf86af448df6fed4735a3dcdde->enter($__internal_63940c2558a979735622a1f53069629acd9476bf86af448df6fed4735a3dcdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            // line 6
            $context["__internal_5470573f56a8afe9376c8cd1cf6dcced45d27eb6f0bbbc1ec1d06114dfb464c4"] = $this;
            // line 8
            echo $context["__internal_5470573f56a8afe9376c8cd1cf6dcced45d27eb6f0bbbc1ec1d06114dfb464c4"]->macro_format(call_user_func_array($this->env->getFilter('sylius_convert_money')->getCallable(), array((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new Twig_Error_Runtime('Variable "amount" does not exist.', 8, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 8, $this->getSourceContext()); })()), "channel", array()), "baseCurrency", array()), "code", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 8, $this->getSourceContext()); })()), "currencyCode", array()))), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 8, $this->getSourceContext()); })()), "currencyCode", array()));
            
            $__internal_63940c2558a979735622a1f53069629acd9476bf86af448df6fed4735a3dcdde->leave($__internal_63940c2558a979735622a1f53069629acd9476bf86af448df6fed4735a3dcdde_prof);

            
            $__internal_8488e40e3e30f16ff2bf56cc9277e6cc1dc5dd18dbd92887f4cfab7b4d68401c->leave($__internal_8488e40e3e30f16ff2bf56cc9277e6cc1dc5dd18dbd92887f4cfab7b4d68401c_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_calculatePrice($__variant__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variant" => $__variant__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_34c7e4d1748f6ef31316961f50fe3b3d484e20cf0dd903ca1d259d51025401ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_34c7e4d1748f6ef31316961f50fe3b3d484e20cf0dd903ca1d259d51025401ca->enter($__internal_34c7e4d1748f6ef31316961f50fe3b3d484e20cf0dd903ca1d259d51025401ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            $__internal_5e72af6961ee9007eee71796b1ca9eb5ffc2b9ca62f001c715dbc9bc092b8198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5e72af6961ee9007eee71796b1ca9eb5ffc2b9ca62f001c715dbc9bc092b8198->enter($__internal_5e72af6961ee9007eee71796b1ca9eb5ffc2b9ca62f001c715dbc9bc092b8198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            // line 12
            $context["__internal_8b308c86c7ea8a8862135e483404135bf685b54851296e52f8b0109348779120"] = $this;
            // line 14
            echo $context["__internal_8b308c86c7ea8a8862135e483404135bf685b54851296e52f8b0109348779120"]->macro_convertAndFormat(call_user_func_array($this->env->getFilter('sylius_calculate_price')->getCallable(), array((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 14, $this->getSourceContext()); })()), array("channel" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 14, $this->getSourceContext()); })()), "channel", array())))));
            
            $__internal_5e72af6961ee9007eee71796b1ca9eb5ffc2b9ca62f001c715dbc9bc092b8198->leave($__internal_5e72af6961ee9007eee71796b1ca9eb5ffc2b9ca62f001c715dbc9bc092b8198_prof);

            
            $__internal_34c7e4d1748f6ef31316961f50fe3b3d484e20cf0dd903ca1d259d51025401ca->leave($__internal_34c7e4d1748f6ef31316961f50fe3b3d484e20cf0dd903ca1d259d51025401ca_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Macro/money.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 14,  120 => 12,  102 => 11,  87 => 8,  85 => 6,  67 => 5,  52 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- macro format(amount, currency_code) -%}
    {{ amount|sylius_format_money(currency_code, sylius.localeCode) }}
{%- endmacro -%}

{%- macro convertAndFormat(amount) -%}
    {% from _self import format %}

    {{- format(amount|sylius_convert_money(sylius.channel.baseCurrency.code, sylius.currencyCode), sylius.currencyCode) }}
{%- endmacro -%}

{%- macro calculatePrice(variant) -%}
    {% from _self import convertAndFormat %}

    {{- convertAndFormat(variant|sylius_calculate_price({'channel': sylius.channel})) }}
{%- endmacro -%}
", "@SyliusShop/Common/Macro/money.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Common\\Macro\\money.html.twig");
    }
}
