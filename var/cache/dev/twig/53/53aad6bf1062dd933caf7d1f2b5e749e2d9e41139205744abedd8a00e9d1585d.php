<?php

/* SyliusShopBundle:Common/Macro:money.html.twig */
class __TwigTemplate_fed22060166e96a4fa446bb21cdd7b4c38d3263763c29025f1846926f5491c7c extends Twig_Template
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
        $__internal_95636c31fe0df3bbe53f1789ad09afdcc2163d47e945acd6d9ae925af729874a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95636c31fe0df3bbe53f1789ad09afdcc2163d47e945acd6d9ae925af729874a->enter($__internal_95636c31fe0df3bbe53f1789ad09afdcc2163d47e945acd6d9ae925af729874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Macro:money.html.twig"));

        $__internal_9775d53304c80bf215404801d737e45c7837166a59ad719c88e69c2f586a7ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9775d53304c80bf215404801d737e45c7837166a59ad719c88e69c2f586a7ce9->enter($__internal_9775d53304c80bf215404801d737e45c7837166a59ad719c88e69c2f586a7ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Macro:money.html.twig"));

        
        $__internal_95636c31fe0df3bbe53f1789ad09afdcc2163d47e945acd6d9ae925af729874a->leave($__internal_95636c31fe0df3bbe53f1789ad09afdcc2163d47e945acd6d9ae925af729874a_prof);

        
        $__internal_9775d53304c80bf215404801d737e45c7837166a59ad719c88e69c2f586a7ce9->leave($__internal_9775d53304c80bf215404801d737e45c7837166a59ad719c88e69c2f586a7ce9_prof);

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
            $__internal_d3a5ba1508a647ca35ea01363baa15d6c1cc33958abb42ea9fa2189b26c1fa3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d3a5ba1508a647ca35ea01363baa15d6c1cc33958abb42ea9fa2189b26c1fa3e->enter($__internal_d3a5ba1508a647ca35ea01363baa15d6c1cc33958abb42ea9fa2189b26c1fa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            $__internal_762248d25d281cf72256381446570fa6718898c44f02936c9198a885580a7020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_762248d25d281cf72256381446570fa6718898c44f02936c9198a885580a7020->enter($__internal_762248d25d281cf72256381446570fa6718898c44f02936c9198a885580a7020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), array((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new Twig_Error_Runtime('Variable "amount" does not exist.', 2, $this->getSourceContext()); })()), (isset($context["currency_code"]) || array_key_exists("currency_code", $context) ? $context["currency_code"] : (function () { throw new Twig_Error_Runtime('Variable "currency_code" does not exist.', 2, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 2, $this->getSourceContext()); })()), "localeCode", array()))), "html", null, true);
            
            $__internal_762248d25d281cf72256381446570fa6718898c44f02936c9198a885580a7020->leave($__internal_762248d25d281cf72256381446570fa6718898c44f02936c9198a885580a7020_prof);

            
            $__internal_d3a5ba1508a647ca35ea01363baa15d6c1cc33958abb42ea9fa2189b26c1fa3e->leave($__internal_d3a5ba1508a647ca35ea01363baa15d6c1cc33958abb42ea9fa2189b26c1fa3e_prof);


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
            $__internal_988b0f2f92df554ad872e398005bdeac3501ac7bfce67b61a540e58a55c8c87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_988b0f2f92df554ad872e398005bdeac3501ac7bfce67b61a540e58a55c8c87b->enter($__internal_988b0f2f92df554ad872e398005bdeac3501ac7bfce67b61a540e58a55c8c87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            $__internal_28b15e2a9597d4e065d8d3fc3f50dbdb21fee86d4c5a852d6eced61c7bd5b3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_28b15e2a9597d4e065d8d3fc3f50dbdb21fee86d4c5a852d6eced61c7bd5b3d6->enter($__internal_28b15e2a9597d4e065d8d3fc3f50dbdb21fee86d4c5a852d6eced61c7bd5b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            // line 6
            $context["__internal_4040fa09b481aab7f2ec868259e0fb6ea5e003132384b30fc4e936419b0a0605"] = $this;
            // line 8
            echo $context["__internal_4040fa09b481aab7f2ec868259e0fb6ea5e003132384b30fc4e936419b0a0605"]->macro_format(call_user_func_array($this->env->getFilter('sylius_convert_money')->getCallable(), array((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new Twig_Error_Runtime('Variable "amount" does not exist.', 8, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 8, $this->getSourceContext()); })()), "channel", array()), "baseCurrency", array()), "code", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 8, $this->getSourceContext()); })()), "currencyCode", array()))), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 8, $this->getSourceContext()); })()), "currencyCode", array()));
            
            $__internal_28b15e2a9597d4e065d8d3fc3f50dbdb21fee86d4c5a852d6eced61c7bd5b3d6->leave($__internal_28b15e2a9597d4e065d8d3fc3f50dbdb21fee86d4c5a852d6eced61c7bd5b3d6_prof);

            
            $__internal_988b0f2f92df554ad872e398005bdeac3501ac7bfce67b61a540e58a55c8c87b->leave($__internal_988b0f2f92df554ad872e398005bdeac3501ac7bfce67b61a540e58a55c8c87b_prof);


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
            $__internal_ddcabf58f39697cceaa9dfc27b816bfbd3635861e8a0a976e6893f2a0629e062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ddcabf58f39697cceaa9dfc27b816bfbd3635861e8a0a976e6893f2a0629e062->enter($__internal_ddcabf58f39697cceaa9dfc27b816bfbd3635861e8a0a976e6893f2a0629e062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            $__internal_9d654d707a7e5f90755cd2f3a2565eb11d4a41578acfc59d682f863e983370b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9d654d707a7e5f90755cd2f3a2565eb11d4a41578acfc59d682f863e983370b6->enter($__internal_9d654d707a7e5f90755cd2f3a2565eb11d4a41578acfc59d682f863e983370b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            // line 12
            $context["__internal_30f762630067ea7166b9a461436f617b998ec402226945328dd0ca3a8d48fbaa"] = $this;
            // line 14
            echo $context["__internal_30f762630067ea7166b9a461436f617b998ec402226945328dd0ca3a8d48fbaa"]->macro_convertAndFormat(call_user_func_array($this->env->getFilter('sylius_calculate_price')->getCallable(), array((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 14, $this->getSourceContext()); })()), array("channel" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 14, $this->getSourceContext()); })()), "channel", array())))));
            
            $__internal_9d654d707a7e5f90755cd2f3a2565eb11d4a41578acfc59d682f863e983370b6->leave($__internal_9d654d707a7e5f90755cd2f3a2565eb11d4a41578acfc59d682f863e983370b6_prof);

            
            $__internal_ddcabf58f39697cceaa9dfc27b816bfbd3635861e8a0a976e6893f2a0629e062->leave($__internal_ddcabf58f39697cceaa9dfc27b816bfbd3635861e8a0a976e6893f2a0629e062_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Macro:money.html.twig";
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
", "SyliusShopBundle:Common/Macro:money.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Macro/money.html.twig");
    }
}
