<?php

/* @SyliusAdmin/Dashboard/_orders.html.twig */
class __TwigTemplate_7eacc7050982efb9c81f15d52a8c6cf37a3e99d0bcbd8439845c722736346f52 extends Twig_Template
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
        $__internal_c0dd216e0d2093e2ffc6d0f5dc203fb9a0d81aaa6d64b3e980272a3c96f1835f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dd216e0d2093e2ffc6d0f5dc203fb9a0d81aaa6d64b3e980272a3c96f1835f->enter($__internal_c0dd216e0d2093e2ffc6d0f5dc203fb9a0d81aaa6d64b3e980272a3c96f1835f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_orders.html.twig"));

        $__internal_e620966d58e97731f5f3709d53b757f21833d5086d15b5b32df160bc5bfabbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e620966d58e97731f5f3709d53b757f21833d5086d15b5b32df160bc5bfabbb3->enter($__internal_e620966d58e97731f5f3709d53b757f21833d5086d15b5b32df160bc5bfabbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_orders.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 2);
        // line 3
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 3);
        // line 4
        echo "
<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new_orders"), "html", null, true);
        echo "</h3>

    ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 8, $this->getSourceContext()); })())) > 0)) {
            // line 9
            echo "        <table class=\"ui stackable table\" id=\"orders\">
            <thead>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order"), "html", null, true);
            echo "</th>
                <th>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.items"), "html", null, true);
            echo "</th>
                <th>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total"), "html", null, true);
            echo "</th>
                <th></th>
            </thead>
            <tbody>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 17, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 18
                echo "                <tr>
                    <td>
                        <strong>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "customer", array()), "fullName", array()), "html", null, true);
                echo "</strong><br>
                        ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "customer", array()), "email", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "totalQuantity", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 27
                echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "total", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "currencyCode", array()));
                echo "
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            ";
                // line 31
                echo $context["buttons"]->macro_show($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "id", array()))));
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 39
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
    ";
        }
        // line 41
        echo "</div>

";
        
        $__internal_c0dd216e0d2093e2ffc6d0f5dc203fb9a0d81aaa6d64b3e980272a3c96f1835f->leave($__internal_c0dd216e0d2093e2ffc6d0f5dc203fb9a0d81aaa6d64b3e980272a3c96f1835f_prof);

        
        $__internal_e620966d58e97731f5f3709d53b757f21833d5086d15b5b32df160bc5bfabbb3->leave($__internal_e620966d58e97731f5f3709d53b757f21833d5086d15b5b32df160bc5bfabbb3_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  108 => 39,  103 => 36,  92 => 31,  85 => 27,  79 => 24,  73 => 21,  69 => 20,  65 => 18,  61 => 17,  54 => 13,  50 => 12,  46 => 11,  42 => 9,  40 => 8,  35 => 6,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:messages.html.twig' as messages %}
{% import 'SyliusUiBundle:Macro:buttons.html.twig' as buttons %}
{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.new_orders'|trans }}</h3>

    {% if orders|length > 0 %}
        <table class=\"ui stackable table\" id=\"orders\">
            <thead>
                <th>{{ 'sylius.ui.order'|trans }}</th>
                <th>{{ 'sylius.ui.items'|trans }}</th>
                <th>{{ 'sylius.ui.total'|trans }}</th>
                <th></th>
            </thead>
            <tbody>
            {% for order in orders %}
                <tr>
                    <td>
                        <strong>{{ order.customer.fullName }}</strong><br>
                        {{ order.customer.email }}
                    </td>
                    <td>
                        {{ order.totalQuantity }}
                    </td>
                    <td>
                        {{ money.format(order.total, order.currencyCode) }}
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            {{ buttons.show(path('sylius_admin_order_show', {'id': order.id})) }}
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        {{ messages.info('sylius.ui.no_results_to_display') }}
    {% endif %}
</div>

", "@SyliusAdmin/Dashboard/_orders.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Dashboard\\_orders.html.twig");
    }
}
