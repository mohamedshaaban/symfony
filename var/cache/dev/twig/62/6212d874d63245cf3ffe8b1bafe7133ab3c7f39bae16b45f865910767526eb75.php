<?php

/* @SyliusAdmin/Common/Macro/money.html.twig */
class __TwigTemplate_72ec51d8b9cd727bb7342f0d229897da569869a5816f24a4619040b4099d7e55 extends Twig_Template
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
        $__internal_bd1b088a8f902925d2e8acaf4fa80e6b0c5250a4c5691b7926df9a13db9c957c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1b088a8f902925d2e8acaf4fa80e6b0c5250a4c5691b7926df9a13db9c957c->enter($__internal_bd1b088a8f902925d2e8acaf4fa80e6b0c5250a4c5691b7926df9a13db9c957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Common/Macro/money.html.twig"));

        $__internal_f8dcd835d0f2e553c5b27f954db1c6c4ea06d15cbc16f0c7c9c0b1a90e74204c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dcd835d0f2e553c5b27f954db1c6c4ea06d15cbc16f0c7c9c0b1a90e74204c->enter($__internal_f8dcd835d0f2e553c5b27f954db1c6c4ea06d15cbc16f0c7c9c0b1a90e74204c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Common/Macro/money.html.twig"));

        
        $__internal_bd1b088a8f902925d2e8acaf4fa80e6b0c5250a4c5691b7926df9a13db9c957c->leave($__internal_bd1b088a8f902925d2e8acaf4fa80e6b0c5250a4c5691b7926df9a13db9c957c_prof);

        
        $__internal_f8dcd835d0f2e553c5b27f954db1c6c4ea06d15cbc16f0c7c9c0b1a90e74204c->leave($__internal_f8dcd835d0f2e553c5b27f954db1c6c4ea06d15cbc16f0c7c9c0b1a90e74204c_prof);

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
            $__internal_1f8fe9df3fe0423ea744b40883257a629c292634744856f1f8e4475a584cc31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1f8fe9df3fe0423ea744b40883257a629c292634744856f1f8e4475a584cc31b->enter($__internal_1f8fe9df3fe0423ea744b40883257a629c292634744856f1f8e4475a584cc31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            $__internal_9fc0dec2f73cb5b8b9fcedb6a12833f6a9ec9d524ba35871186953c19a9d3bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9fc0dec2f73cb5b8b9fcedb6a12833f6a9ec9d524ba35871186953c19a9d3bd8->enter($__internal_9fc0dec2f73cb5b8b9fcedb6a12833f6a9ec9d524ba35871186953c19a9d3bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), array((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new Twig_Error_Runtime('Variable "amount" does not exist.', 2, $this->getSourceContext()); })()), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 2, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "user", array()), "localeCode", array()))), "html", null, true);
            
            $__internal_9fc0dec2f73cb5b8b9fcedb6a12833f6a9ec9d524ba35871186953c19a9d3bd8->leave($__internal_9fc0dec2f73cb5b8b9fcedb6a12833f6a9ec9d524ba35871186953c19a9d3bd8_prof);

            
            $__internal_1f8fe9df3fe0423ea744b40883257a629c292634744856f1f8e4475a584cc31b->leave($__internal_1f8fe9df3fe0423ea744b40883257a629c292634744856f1f8e4475a584cc31b_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Common/Macro/money.html.twig";
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
", "@SyliusAdmin/Common/Macro/money.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Common\\Macro\\money.html.twig");
    }
}
