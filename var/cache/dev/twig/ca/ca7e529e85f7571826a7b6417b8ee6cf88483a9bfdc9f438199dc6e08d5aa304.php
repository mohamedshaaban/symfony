<?php

/* SyliusAdminBundle:Common/Macro:money.html.twig */
class __TwigTemplate_6fbeac3d1731746e1158bfd2215fae44ba5b9151127b36fc4ae1a82356a22c71 extends Twig_Template
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
        $__internal_790551cb5f2b3beae82557118f0266e1b3644d111bce7ead65c4a3bf77802d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790551cb5f2b3beae82557118f0266e1b3644d111bce7ead65c4a3bf77802d14->enter($__internal_790551cb5f2b3beae82557118f0266e1b3644d111bce7ead65c4a3bf77802d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Macro:money.html.twig"));

        $__internal_c19a9d7303710e839145bbe16440fd1dd3a64def3a3de65740d0cb3f64687692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19a9d7303710e839145bbe16440fd1dd3a64def3a3de65740d0cb3f64687692->enter($__internal_c19a9d7303710e839145bbe16440fd1dd3a64def3a3de65740d0cb3f64687692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Macro:money.html.twig"));

        
        $__internal_790551cb5f2b3beae82557118f0266e1b3644d111bce7ead65c4a3bf77802d14->leave($__internal_790551cb5f2b3beae82557118f0266e1b3644d111bce7ead65c4a3bf77802d14_prof);

        
        $__internal_c19a9d7303710e839145bbe16440fd1dd3a64def3a3de65740d0cb3f64687692->leave($__internal_c19a9d7303710e839145bbe16440fd1dd3a64def3a3de65740d0cb3f64687692_prof);

    }

    // line 1
    public function macro_format($__amount__ = null, $__currency__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "amount" => $__amount__,
            "currency" => $__currency__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_76f2e2f5052cefef506c12370c5a5d3074c8b2f4effd4e19ab49ea7f522b78a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_76f2e2f5052cefef506c12370c5a5d3074c8b2f4effd4e19ab49ea7f522b78a5->enter($__internal_76f2e2f5052cefef506c12370c5a5d3074c8b2f4effd4e19ab49ea7f522b78a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            $__internal_36467832662e01876a68d2c0a3dbb0312ad0eb594c4017351e1b457fb30e8baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_36467832662e01876a68d2c0a3dbb0312ad0eb594c4017351e1b457fb30e8baa->enter($__internal_36467832662e01876a68d2c0a3dbb0312ad0eb594c4017351e1b457fb30e8baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), array((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new Twig_Error_Runtime('Variable "amount" does not exist.', 2, $this->getSourceContext()); })()), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 2, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "user", array()), "localeCode", array()))), "html", null, true);
            
            $__internal_36467832662e01876a68d2c0a3dbb0312ad0eb594c4017351e1b457fb30e8baa->leave($__internal_36467832662e01876a68d2c0a3dbb0312ad0eb594c4017351e1b457fb30e8baa_prof);

            
            $__internal_76f2e2f5052cefef506c12370c5a5d3074c8b2f4effd4e19ab49ea7f522b78a5->leave($__internal_76f2e2f5052cefef506c12370c5a5d3074c8b2f4effd4e19ab49ea7f522b78a5_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Common/Macro:money.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- macro format(amount, currency) -%}
    {{ amount|sylius_format_money(currency, app.user.localeCode) }}
{%- endmacro -%}
", "SyliusAdminBundle:Common/Macro:money.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Common/Macro/money.html.twig");
    }
}
