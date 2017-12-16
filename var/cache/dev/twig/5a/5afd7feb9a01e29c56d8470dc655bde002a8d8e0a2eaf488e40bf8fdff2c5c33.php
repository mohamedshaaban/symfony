<?php

/* SyliusShopBundle:Order:thankYou.html.twig */
class __TwigTemplate_1a13ce978446cf067379d435adc660f0dcd11b87d3101f89881ed839455bc7bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Order:thankYou.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dc6d368d00ee5fbd6409b858fab70432800ec1b73891f636c99d9d7f4385f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc6d368d00ee5fbd6409b858fab70432800ec1b73891f636c99d9d7f4385f5a->enter($__internal_4dc6d368d00ee5fbd6409b858fab70432800ec1b73891f636c99d9d7f4385f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:thankYou.html.twig"));

        $__internal_aa68e0aed4db0130187f5f417fce28d97b2620714312f831189248080ee28827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa68e0aed4db0130187f5f417fce28d97b2620714312f831189248080ee28827->enter($__internal_aa68e0aed4db0130187f5f417fce28d97b2620714312f831189248080ee28827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:thankYou.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc6d368d00ee5fbd6409b858fab70432800ec1b73891f636c99d9d7f4385f5a->leave($__internal_4dc6d368d00ee5fbd6409b858fab70432800ec1b73891f636c99d9d7f4385f5a_prof);

        
        $__internal_aa68e0aed4db0130187f5f417fce28d97b2620714312f831189248080ee28827->leave($__internal_aa68e0aed4db0130187f5f417fce28d97b2620714312f831189248080ee28827_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab6d260bd2c149ca27286e83e05174c73eeac34c2f47070d7be11ee43a87a744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6d260bd2c149ca27286e83e05174c73eeac34c2f47070d7be11ee43a87a744->enter($__internal_ab6d260bd2c149ca27286e83e05174c73eeac34c2f47070d7be11ee43a87a744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b653aa27074cb7f0cc2156a004ed3ce7d5bd1d25257fec4919c80ac0fbc07437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b653aa27074cb7f0cc2156a004ed3ce7d5bd1d25257fec4919c80ac0fbc07437->enter($__internal_b653aa27074cb7f0cc2156a004ed3ce7d5bd1d25257fec4919c80ac0fbc07437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
        <div class=\"center aligned sixteen wide column\">
            <h1 class=\"ui icon header\">
                ";
        // line 8
        $context["lastPayment"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->getSourceContext()); })()), "payments", array()), "last", array(), "method");
        // line 9
        echo "                <i class=\"circular rocket icon\"></i>
                <div class=\"content\" id=\"sylius-thank-you\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.thank_you"), "html", null, true);
        echo "
                    <div class=\"sub header\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.placed_an_order"), "html", null, true);
        echo "</div>
                </div>
            </h1>

            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.order.thank_you.after_message", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 16, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 18
        if (((isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new Twig_Error_Runtime('Variable "lastPayment" does not exist.', 18, $this->getSourceContext()); })()) != false)) {
            // line 19
            echo "                ";
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new Twig_Error_Runtime('Variable "lastPayment" does not exist.', 19, $this->getSourceContext()); })()), "method", array()), "instructions", array()))) {
                // line 20
                echo "                    <div id=\"sylius-payment-method-instructions\" class=\"ui segment\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new Twig_Error_Runtime('Variable "lastPayment" does not exist.', 21, $this->getSourceContext()); })()), "method", array()), "instructions", array()), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 24
            echo "                <div class=\"ui hidden divider\"></div>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_order_show", array("tokenValue" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 25, $this->getSourceContext()); })()), "tokenValue", array()))), "html", null, true);
            echo "\" id=\"sylius-show-order\" class=\"ui large blue button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_your_order_or_change_payment_method"), "html", null, true);
            echo "</a>
            ";
        }
        // line 27
        echo "        </div>
    </div>
";
        
        $__internal_b653aa27074cb7f0cc2156a004ed3ce7d5bd1d25257fec4919c80ac0fbc07437->leave($__internal_b653aa27074cb7f0cc2156a004ed3ce7d5bd1d25257fec4919c80ac0fbc07437_prof);

        
        $__internal_ab6d260bd2c149ca27286e83e05174c73eeac34c2f47070d7be11ee43a87a744->leave($__internal_ab6d260bd2c149ca27286e83e05174c73eeac34c2f47070d7be11ee43a87a744_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Order:thankYou.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  94 => 25,  91 => 24,  85 => 21,  82 => 20,  79 => 19,  77 => 18,  72 => 16,  65 => 12,  61 => 11,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
        <div class=\"center aligned sixteen wide column\">
            <h1 class=\"ui icon header\">
                {% set lastPayment = order.payments.last() %}
                <i class=\"circular rocket icon\"></i>
                <div class=\"content\" id=\"sylius-thank-you\">
                    {{ 'sylius.ui.thank_you'|trans }}
                    <div class=\"sub header\">{{ 'sylius.ui.placed_an_order'|trans }}</div>
                </div>
            </h1>

            {{ sonata_block_render_event('sylius.shop.order.thank_you.after_message', {'order': order}) }}

            {% if lastPayment != false %}
                {%  if lastPayment.method.instructions is not null %}
                    <div id=\"sylius-payment-method-instructions\" class=\"ui segment\">
                        {{ lastPayment.method.instructions }}
                    </div>
                {% endif %}
                <div class=\"ui hidden divider\"></div>
                <a href=\"{{ path('sylius_shop_order_show', {'tokenValue': order.tokenValue}) }}\" id=\"sylius-show-order\" class=\"ui large blue button\">{{ 'sylius.ui.view_your_order_or_change_payment_method'|trans }}</a>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Order:thankYou.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Order/thankYou.html.twig");
    }
}
