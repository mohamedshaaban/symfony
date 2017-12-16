<?php

/* SyliusShopBundle:Cart/Summary:_header.html.twig */
class __TwigTemplate_9aeaa592e0deded7233dc5837c5ef6e6efc74f9ea26c7990cf959e542210fd34 extends Twig_Template
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
        $__internal_5ab649677579c042370f77ddb16aeeb5937a2e34b0a2caf149ef40f553c79880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab649677579c042370f77ddb16aeeb5937a2e34b0a2caf149ef40f553c79880->enter($__internal_5ab649677579c042370f77ddb16aeeb5937a2e34b0a2caf149ef40f553c79880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_header.html.twig"));

        $__internal_8fbc62acd03bd087a48f1b61cb6c4f9507cdf3969186ab6f9c44a5e36fbe5526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbc62acd03bd087a48f1b61cb6c4f9507cdf3969186ab6f9c44a5e36fbe5526->enter($__internal_8fbc62acd03bd087a48f1b61cb6c4f9507cdf3969186ab6f9c44a5e36fbe5526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_header.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusShopBundle:Cart/Summary:_header.html.twig", 1);
        // line 2
        echo "
<div class=\"ui hidden divider\"></div>
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 6
        echo $context["headers"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 6, $this->getSourceContext()); })())), "cart", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit_your_items_apply_coupon_or_proceed_to_the_checkout"));
        echo "
    </div>
    <div class=\"middle aligned column\">
        <form method=\"post\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_cart_clear");
        echo "\" >
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 11, $this->getSourceContext()); })()), "id", array())), "html", null, true);
        echo "\" />
            <button type=\"submit\" id=\"sylius-cart-clear\" class=\"ui right floated basic red button\">
                <i class=\"icon remove\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.clear_cart"), "html", null, true);
        echo "
            </button>
        </form>
    </div>
</div>
";
        
        $__internal_5ab649677579c042370f77ddb16aeeb5937a2e34b0a2caf149ef40f553c79880->leave($__internal_5ab649677579c042370f77ddb16aeeb5937a2e34b0a2caf149ef40f553c79880_prof);

        
        $__internal_8fbc62acd03bd087a48f1b61cb6c4f9507cdf3969186ab6f9c44a5e36fbe5526->leave($__internal_8fbc62acd03bd087a48f1b61cb6c4f9507cdf3969186ab6f9c44a5e36fbe5526_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  44 => 11,  39 => 9,  33 => 6,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/headers.html.twig' as headers %}

<div class=\"ui hidden divider\"></div>
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        {{ headers.default(header|trans, 'cart', 'sylius.ui.edit_your_items_apply_coupon_or_proceed_to_the_checkout'|trans) }}
    </div>
    <div class=\"middle aligned column\">
        <form method=\"post\" action=\"{{ path('sylius_shop_cart_clear') }}\" >
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(cart.id) }}\" />
            <button type=\"submit\" id=\"sylius-cart-clear\" class=\"ui right floated basic red button\">
                <i class=\"icon remove\"></i> {{ 'sylius.ui.clear_cart'|trans }}
            </button>
        </form>
    </div>
</div>
", "SyliusShopBundle:Cart/Summary:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Cart/Summary/_header.html.twig");
    }
}
