<?php

/* SyliusShopBundle:Common/Order:_payments.html.twig */
class __TwigTemplate_41ff1b47044378c0af99690f9f3de16e0afc5e6df697285cc2a566c535570279 extends Twig_Template
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
        $__internal_39ae9fb7b9070f8abc4bcb40aa4ceab379de224c8d7335b7045f25b36dd58737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ae9fb7b9070f8abc4bcb40aa4ceab379de224c8d7335b7045f25b36dd58737->enter($__internal_39ae9fb7b9070f8abc4bcb40aa4ceab379de224c8d7335b7045f25b36dd58737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_payments.html.twig"));

        $__internal_a923f6ed3dff7054daf2d3bcaa1e78975190cc66866bfec3ca08224b5a48fafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a923f6ed3dff7054daf2d3bcaa1e78975190cc66866bfec3ca08224b5a48fafb->enter($__internal_a923f6ed3dff7054daf2d3bcaa1e78975190cc66866bfec3ca08224b5a48fafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_payments.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order:_payments.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 3, $this->getSourceContext()); })()), "payments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 4
            echo "<div class=\"ui large icon message\">
    <i class=\"payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\" id=\"sylius-payment-method\">
            ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["payment"], "method", array()), "html", null, true);
            echo "
        </div>
        <p>";
            // line 10
            echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), $context["payment"], "amount", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["payment"], "currencyCode", array()));
            echo "</p>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_39ae9fb7b9070f8abc4bcb40aa4ceab379de224c8d7335b7045f25b36dd58737->leave($__internal_39ae9fb7b9070f8abc4bcb40aa4ceab379de224c8d7335b7045f25b36dd58737_prof);

        
        $__internal_a923f6ed3dff7054daf2d3bcaa1e78975190cc66866bfec3ca08224b5a48fafb->leave($__internal_a923f6ed3dff7054daf2d3bcaa1e78975190cc66866bfec3ca08224b5a48fafb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  40 => 8,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% for payment in order.payments %}
<div class=\"ui large icon message\">
    <i class=\"payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\" id=\"sylius-payment-method\">
            {{ payment.method }}
        </div>
        <p>{{ money.format(payment.amount, payment.currencyCode) }}</p>
    </div>
</div>
{% endfor %}
", "SyliusShopBundle:Common/Order:_payments.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/_payments.html.twig");
    }
}
