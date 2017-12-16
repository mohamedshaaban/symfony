<?php

/* SyliusShopBundle:Cart/Summary:_items.html.twig */
class __TwigTemplate_0ec517858a956e96cebd080bccb9488cf504a95417546a11febbdb83d6e15ef5 extends Twig_Template
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
        $__internal_d808d362e8b24387e7e7ae16fed21203abe39669899ef393d205a86c03e34b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d808d362e8b24387e7e7ae16fed21203abe39669899ef393d205a86c03e34b4b->enter($__internal_d808d362e8b24387e7e7ae16fed21203abe39669899ef393d205a86c03e34b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_items.html.twig"));

        $__internal_eaebc2e6b6fd15110b9f076d7e6afad3d12e53825d5a0a810f4d917dda7904a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaebc2e6b6fd15110b9f076d7e6afad3d12e53825d5a0a810f4d917dda7904a4->enter($__internal_eaebc2e6b6fd15110b9f076d7e6afad3d12e53825d5a0a810f4d917dda7904a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_items.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_cart_save"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'errors');
        echo "
        <input type=\"hidden\" name=\"_method\" value=\"PATCH\"/>

        ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.items", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 6, $this->getSourceContext()); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()))));
        echo "

        <table id=\"sylius-cart-items\" class=\"ui very basic celled table\">
            <thead>
            <tr>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.item"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.unit_price"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.qty"), "html", null, true);
        echo "</th>
                <th></th>
                <th class=\"right aligned\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 19, $this->getSourceContext()); })()), "items", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                    ";
            $this->loadTemplate("@SyliusShop/Cart/Summary/_item.html.twig", "SyliusShopBundle:Cart/Summary:_items.html.twig", 20)->display(array_merge($context, array("item" => $context["item"], "form" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "items", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), array(), "array"))));
            // line 21
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </tbody>
        </table>
        ";
        // line 24
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "promotionCoupon", array(), "any", true, true)) {
            // line 25
            echo "            <div class=\"ui hidden divider\"></div>

            ";
            // line 27
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_coupon", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 27, $this->getSourceContext()); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()))));
            echo "

            ";
            // line 29
            $this->loadTemplate("@SyliusShop/Cart/Summary/_coupon.html.twig", "SyliusShopBundle:Cart/Summary:_items.html.twig", 29)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "promotionCoupon", array()))));
            // line 30
            echo "
            ";
            // line 31
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_coupon", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 31, $this->getSourceContext()); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()))));
            echo "
        ";
        }
        // line 33
        echo "        <div class=\"ui hidden divider\"></div>
        ";
        // line 34
        $this->loadTemplate("@SyliusShop/Cart/Summary/_update.html.twig", "SyliusShopBundle:Cart/Summary:_items.html.twig", 34)->display($context);
        // line 35
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_d808d362e8b24387e7e7ae16fed21203abe39669899ef393d205a86c03e34b4b->leave($__internal_d808d362e8b24387e7e7ae16fed21203abe39669899ef393d205a86c03e34b4b_prof);

        
        $__internal_eaebc2e6b6fd15110b9f076d7e6afad3d12e53825d5a0a810f4d917dda7904a4->leave($__internal_eaebc2e6b6fd15110b9f076d7e6afad3d12e53825d5a0a810f4d917dda7904a4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  130 => 35,  128 => 34,  125 => 33,  120 => 31,  117 => 30,  115 => 29,  110 => 27,  106 => 25,  104 => 24,  100 => 22,  86 => 21,  83 => 20,  66 => 19,  59 => 15,  54 => 13,  50 => 12,  46 => 11,  38 => 6,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_start(form, {'action': path('sylius_shop_cart_save'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
        {{ form_errors(form) }}
        <input type=\"hidden\" name=\"_method\" value=\"PATCH\"/>

        {{ sonata_block_render_event('sylius.shop.cart.summary.items', {'cart': cart, 'form': form}) }}

        <table id=\"sylius-cart-items\" class=\"ui very basic celled table\">
            <thead>
            <tr>
                <th>{{ 'sylius.ui.item'|trans }}</th>
                <th>{{ 'sylius.ui.unit_price'|trans }}</th>
                <th>{{ 'sylius.ui.qty'|trans }}</th>
                <th></th>
                <th class=\"right aligned\">{{ 'sylius.ui.total'|trans }}</th>
            </tr>
            </thead>
            <tbody>
                {% for item in cart.items %}
                    {% include '@SyliusShop/Cart/Summary/_item.html.twig' with {'item': item, 'form': form.items[loop.index0]} %}
                {% endfor %}
            </tbody>
        </table>
        {% if form.promotionCoupon is defined %}
            <div class=\"ui hidden divider\"></div>

            {{ sonata_block_render_event('sylius.shop.cart.summary.before_coupon', {'cart': cart, 'form': form}) }}

            {% include '@SyliusShop/Cart/Summary/_coupon.html.twig' with {'form': form.promotionCoupon} %}

            {{ sonata_block_render_event('sylius.shop.cart.summary.after_coupon', {'cart': cart, 'form': form}) }}
        {% endif %}
        <div class=\"ui hidden divider\"></div>
        {% include '@SyliusShop/Cart/Summary/_update.html.twig' %}
        {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "SyliusShopBundle:Cart/Summary:_items.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Cart/Summary/_items.html.twig");
    }
}
