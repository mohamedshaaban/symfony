<?php

/* SyliusShopBundle:Checkout:_summary.html.twig */
class __TwigTemplate_67164d8564125ef42b3f6812c46d6ffee171b9a17e3558412e02f3eb682b274b extends Twig_Template
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
        $__internal_cabf2fe5f11e1f0716f32eb9590e5167ab51d7dfb89a515fd3d5ab90ab5ddc3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabf2fe5f11e1f0716f32eb9590e5167ab51d7dfb89a515fd3d5ab90ab5ddc3b->enter($__internal_cabf2fe5f11e1f0716f32eb9590e5167ab51d7dfb89a515fd3d5ab90ab5ddc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_summary.html.twig"));

        $__internal_26a8473200fd4f037e653fc259b84a8e75d030ef49a365df7b81ce0f452fba88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a8473200fd4f037e653fc259b84a8e75d030ef49a365df7b81ce0f452fba88->enter($__internal_26a8473200fd4f037e653fc259b84a8e75d030ef49a365df7b81ce0f452fba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_summary.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Checkout:_summary.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    <table class=\"ui very basic table\" id=\"sylius-checkout-subtotal\">
        <thead>
        <tr>
            <th class=\"sylius-table-column-item\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.item"), "html", null, true);
        echo "</th>
            <th class=\"sylius-table-column-qty\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.quantity"), "html", null, true);
        echo "</th>
            <th class=\"sylius-table-column-subtotal\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "getVariant", array()), "product", array()), "name", array()), "html", null, true);
            echo "</td>
                <td class=\"center aligned\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "quantity", array()), "html", null, true);
            echo "
                </td>
                <td id=\"sylius-item-";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "variant", array()), "product", array()), "slug", array()), "html", null, true);
            echo "-subtotal\">";
            echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "subtotal", array()));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_cabf2fe5f11e1f0716f32eb9590e5167ab51d7dfb89a515fd3d5ab90ab5ddc3b->leave($__internal_cabf2fe5f11e1f0716f32eb9590e5167ab51d7dfb89a515fd3d5ab90ab5ddc3b_prof);

        
        $__internal_26a8473200fd4f037e653fc259b84a8e75d030ef49a365df7b81ce0f452fba88->leave($__internal_26a8473200fd4f037e653fc259b84a8e75d030ef49a365df7b81ce0f452fba88_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  66 => 19,  61 => 17,  56 => 15,  53 => 14,  49 => 13,  42 => 9,  38 => 8,  34 => 7,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <table class=\"ui very basic table\" id=\"sylius-checkout-subtotal\">
        <thead>
        <tr>
            <th class=\"sylius-table-column-item\">{{ 'sylius.ui.item'|trans }}</th>
            <th class=\"sylius-table-column-qty\">{{ 'sylius.ui.quantity'|trans }}</th>
            <th class=\"sylius-table-column-subtotal\">{{ 'sylius.ui.subtotal'|trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for item in order.items %}
            <tr>
                <td>{{ item.getVariant.product.name }}</td>
                <td class=\"center aligned\">
                    {{ item.quantity }}
                </td>
                <td id=\"sylius-item-{{ item.variant.product.slug }}-subtotal\">{{ money.convertAndFormat(item.subtotal) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "SyliusShopBundle:Checkout:_summary.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/_summary.html.twig");
    }
}
