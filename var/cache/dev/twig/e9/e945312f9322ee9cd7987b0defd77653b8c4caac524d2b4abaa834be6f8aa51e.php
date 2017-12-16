<?php

/* @SyliusShop/Cart/_widget.html.twig */
class __TwigTemplate_5dd07345c19bb1f85af2ab0c5de5df52d10549b5fc80e35d206516f61ea33946 extends Twig_Template
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
        $__internal_2c6001ec110569490563554ccde71d3871af673aad9e9ea553aa293bf100b47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6001ec110569490563554ccde71d3871af673aad9e9ea553aa293bf100b47d->enter($__internal_2c6001ec110569490563554ccde71d3871af673aad9e9ea553aa293bf100b47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/_widget.html.twig"));

        $__internal_b64de7bff4d0cac5b76c41ed15dc79a119e1bb3c9cf5b2c86a5fc8ec1caf4ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64de7bff4d0cac5b76c41ed15dc79a119e1bb3c9cf5b2c86a5fc8ec1caf4ef6->enter($__internal_b64de7bff4d0cac5b76c41ed15dc79a119e1bb3c9cf5b2c86a5fc8ec1caf4ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/_widget.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Cart/_widget.html.twig", 1);
        // line 2
        echo "
<div id=\"sylius-cart-button\" class=\"ui circular cart button\">
    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.before_widget_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 4, $this->getSourceContext()); })()))));
        echo "

    <i class=\"cart icon\"></i>
    <span id=\"sylius-cart-total\">
        ";
        // line 8
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 8, $this->getSourceContext()); })()), "itemsTotal", array()));
        echo "
    </span>
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("sylius.ui.item.choice", twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 10, $this->getSourceContext()); })()), "items", array())), array(), "messages");
        // line 11
        echo "
    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.after_widget_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 12, $this->getSourceContext()); })()))));
        echo "
</div>
<div class=\"ui large flowing cart hidden popup\">
    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.before_popup_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 15, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 17
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 17, $this->getSourceContext()); })()), "empty", array())) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.your_cart_is_empty"), "html", null, true);
            echo ".
    ";
        } else {
            // line 20
            echo "    <div class=\"ui list\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 21, $this->getSourceContext()); })()), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "        <div class=\"item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "quantity", array()), "html", null, true);
                echo " x <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "product", array()), "html", null, true);
                echo "</strong> ";
                echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "unitPrice", array()));
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        <div class=\"item\"><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subtotal"), "html", null, true);
            echo "</strong>: ";
            echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 24, $this->getSourceContext()); })()), "itemsTotal", array()));
            echo "</div>
    </div>
    <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_cart_summary");
            echo "\" class=\"ui fluid basic text button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_and_edit_cart"), "html", null, true);
            echo "</a>
    <div class=\"ui divider\"></div>
    <a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_start");
            echo "\" class=\"ui fluid primary button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.checkout"), "html", null, true);
            echo "</a>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.after_popup_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 31, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_2c6001ec110569490563554ccde71d3871af673aad9e9ea553aa293bf100b47d->leave($__internal_2c6001ec110569490563554ccde71d3871af673aad9e9ea553aa293bf100b47d_prof);

        
        $__internal_b64de7bff4d0cac5b76c41ed15dc79a119e1bb3c9cf5b2c86a5fc8ec1caf4ef6->leave($__internal_b64de7bff4d0cac5b76c41ed15dc79a119e1bb3c9cf5b2c86a5fc8ec1caf4ef6_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  109 => 30,  102 => 28,  95 => 26,  87 => 24,  74 => 22,  70 => 21,  67 => 20,  61 => 18,  59 => 17,  54 => 15,  48 => 12,  45 => 11,  43 => 10,  38 => 8,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<div id=\"sylius-cart-button\" class=\"ui circular cart button\">
    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.before_widget_content', {'cart': cart}) }}

    <i class=\"cart icon\"></i>
    <span id=\"sylius-cart-total\">
        {{ money.convertAndFormat(cart.itemsTotal) }}
    </span>
    {% transchoice cart.items|length %}sylius.ui.item.choice{% endtranschoice %}

    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.after_widget_content', {'cart': cart}) }}
</div>
<div class=\"ui large flowing cart hidden popup\">
    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.before_popup_content', {'cart': cart}) }}

    {% if cart.empty %}
        {{ 'sylius.ui.your_cart_is_empty'|trans }}.
    {% else %}
    <div class=\"ui list\">
        {% for item in cart.items %}
        <div class=\"item\">{{ item.quantity }} x <strong>{{ item.product }}</strong> {{ money.convertAndFormat(item.unitPrice) }}</div>
        {% endfor %}
        <div class=\"item\"><strong>{{ 'sylius.ui.subtotal'|trans }}</strong>: {{ money.convertAndFormat(cart.itemsTotal) }}</div>
    </div>
    <a href=\"{{ path('sylius_shop_cart_summary') }}\" class=\"ui fluid basic text button\">{{ 'sylius.ui.view_and_edit_cart'|trans }}</a>
    <div class=\"ui divider\"></div>
    <a href=\"{{ path('sylius_shop_checkout_start') }}\" class=\"ui fluid primary button\">{{ 'sylius.ui.checkout'|trans }}</a>
    {% endif %}

    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.after_popup_content', {'cart': cart}) }}
</div>
", "@SyliusShop/Cart/_widget.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Cart\\_widget.html.twig");
    }
}
