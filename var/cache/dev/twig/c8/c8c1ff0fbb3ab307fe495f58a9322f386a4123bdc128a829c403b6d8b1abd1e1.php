<?php

/* SyliusAdminBundle:Order/Show:_payment.html.twig */
class __TwigTemplate_9c70d29191f2919ffc2978bea3725f6abd26a4b1680f146f8c7b66b8e79c7ce9 extends Twig_Template
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
        $__internal_0733235b55fa0af5e23b43f048c01820f9bd874b1370c26cb1d7a76d52014ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0733235b55fa0af5e23b43f048c01820f9bd874b1370c26cb1d7a76d52014ceb->enter($__internal_0733235b55fa0af5e23b43f048c01820f9bd874b1370c26cb1d7a76d52014ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_payment.html.twig"));

        $__internal_ce88198f61d7d6e49516f773ec6b7b75cc28628cc41d89b67d89c50905ada9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce88198f61d7d6e49516f773ec6b7b75cc28628cc41d89b67d89c50905ada9a7->enter($__internal_ce88198f61d7d6e49516f773ec6b7b75cc28628cc41d89b67d89c50905ada9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_payment.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Show:_payment.html.twig", 1);
        // line 2
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Order/Show:_payment.html.twig", 2);
        // line 3
        echo "
<div class=\"item\">
    <div class=\"right floated content\">
        ";
        // line 6
        echo $context["label"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("sylius.ui." . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 6, $this->getSourceContext()); })()), "state", array()))));
        echo "
    </div>
    <i class=\"large payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 11, $this->getSourceContext()); })()), "method", array()), "html", null, true);
        echo "
        </div>
        <div class=\"description\">
            ";
        // line 14
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 14, $this->getSourceContext()); })()), "amount", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 14, $this->getSourceContext()); })()), "order", array()), "currencyCode", array()));
        echo "
        </div>
    </div>
    ";
        // line 17
        if ($this->env->getExtension('SM\Extension\Twig\SMExtension')->can((isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 17, $this->getSourceContext()); })()), "complete", "sylius_payment")) {
            // line 18
            echo "    <div class=\"ui segment\">
        <form action=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_payment_complete", array("orderId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 19, $this->getSourceContext()); })()), "id", array()), "id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 19, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" method=\"post\" novalidate>
            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
            <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.complete"), "html", null, true);
            echo "</button>
        </form>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if ($this->env->getExtension('SM\Extension\Twig\SMExtension')->can((isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 25, $this->getSourceContext()); })()), "refund", "sylius_payment")) {
            // line 26
            echo "        <div class=\"ui segment\">
            <form action=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_payment_refund", array("orderId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->getSourceContext()); })()), "id", array()), "id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 27, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" method=\"post\" novalidate>
                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                <button type=\"submit\" class=\"ui icon labeled tiny yellow fluid loadable button\"><i class=\"reply all icon\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.refund"), "html", null, true);
            echo "</button>
            </form>
        </div>
    ";
        }
        // line 33
        echo "</div>
";
        
        $__internal_0733235b55fa0af5e23b43f048c01820f9bd874b1370c26cb1d7a76d52014ceb->leave($__internal_0733235b55fa0af5e23b43f048c01820f9bd874b1370c26cb1d7a76d52014ceb_prof);

        
        $__internal_ce88198f61d7d6e49516f773ec6b7b75cc28628cc41d89b67d89c50905ada9a7->leave($__internal_ce88198f61d7d6e49516f773ec6b7b75cc28628cc41d89b67d89c50905ada9a7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  82 => 29,  77 => 27,  74 => 26,  71 => 25,  64 => 21,  59 => 19,  56 => 18,  54 => 17,  48 => 14,  42 => 11,  34 => 6,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}
{% import '@SyliusUi/Macro/labels.html.twig' as label %}

<div class=\"item\">
    <div class=\"right floated content\">
        {{ label.default(('sylius.ui.'~payment.state)|trans) }}
    </div>
    <i class=\"large payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            {{ payment.method }}
        </div>
        <div class=\"description\">
            {{ money.format(payment.amount, payment.order.currencyCode) }}
        </div>
    </div>
    {% if sm_can(payment, 'complete', 'sylius_payment') %}
    <div class=\"ui segment\">
        <form action=\"{{ path('sylius_admin_order_payment_complete', {'orderId': order.id, 'id': payment.id}) }}\" method=\"post\" novalidate>
            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
            <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> {{ 'sylius.ui.complete'|trans }}</button>
        </form>
    </div>
    {% endif %}
    {% if sm_can(payment, 'refund', 'sylius_payment') %}
        <div class=\"ui segment\">
            <form action=\"{{ path('sylius_admin_order_payment_refund', {'orderId': order.id, 'id': payment.id}) }}\" method=\"post\" novalidate>
                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                <button type=\"submit\" class=\"ui icon labeled tiny yellow fluid loadable button\"><i class=\"reply all icon\"></i> {{ 'sylius.ui.refund'|trans }}</button>
            </form>
        </div>
    {% endif %}
</div>
", "SyliusAdminBundle:Order/Show:_payment.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/_payment.html.twig");
    }
}
