<?php

/* SyliusAdminBundle:Order/Show:_shipments.html.twig */
class __TwigTemplate_e32d085548a5ac156af1a491c4f1dfb32acd788af0a4836b051902e6ab8b1478 extends Twig_Template
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
        $__internal_f65ea40dc8a220a512016b00a8d44ae8b294029c8024416f7b8b9d48737a7972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65ea40dc8a220a512016b00a8d44ae8b294029c8024416f7b8b9d48737a7972->enter($__internal_f65ea40dc8a220a512016b00a8d44ae8b294029c8024416f7b8b9d48737a7972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipments.html.twig"));

        $__internal_23671df5be70710a0dddd831b7c6feff44b8c9cadd9fe57c277dcf8e7b222292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23671df5be70710a0dddd831b7c6feff44b8c9cadd9fe57c277dcf8e7b222292->enter($__internal_23671df5be70710a0dddd831b7c6feff44b8c9cadd9fe57c277dcf8e7b222292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipments.html.twig"));

        // line 1
        echo "<div class=\"ui segment\" id=\"shipping-state\">
    ";
        // line 2
        $this->loadTemplate((("@SyliusAdmin/Order/Label/ShippingState/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 2, $this->getSourceContext()); })()), "shippingState", array())) . ".html.twig"), "SyliusAdminBundle:Order/Show:_shipments.html.twig", 2)->display(array_merge($context, array("value" => ("sylius.ui." . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 2, $this->getSourceContext()); })()), "shippingState", array())), "attached" => true)));
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 3, $this->getSourceContext()); })()), "hasShipments", array())) {
            // line 4
            echo "        <h3 class=\"ui dividing header\" id=\"shipping-state\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipments"), "html", null, true);
            echo "</h3>
        <div class=\"ui relaxed divided list\" id=\"sylius-shipments\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "shipments", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
                // line 7
                echo "                ";
                $this->loadTemplate("@SyliusAdmin/Order/Show/_shipment.html.twig", "SyliusAdminBundle:Order/Show:_shipments.html.twig", 7)->display($context);
                // line 8
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div>
    ";
        }
        // line 11
        echo "</div>
";
        
        $__internal_f65ea40dc8a220a512016b00a8d44ae8b294029c8024416f7b8b9d48737a7972->leave($__internal_f65ea40dc8a220a512016b00a8d44ae8b294029c8024416f7b8b9d48737a7972_prof);

        
        $__internal_23671df5be70710a0dddd831b7c6feff44b8c9cadd9fe57c277dcf8e7b222292->leave($__internal_23671df5be70710a0dddd831b7c6feff44b8c9cadd9fe57c277dcf8e7b222292_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_shipments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  73 => 9,  59 => 8,  56 => 7,  39 => 6,  33 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\" id=\"shipping-state\">
    {% include '@SyliusAdmin/Order/Label/ShippingState/' ~ order.shippingState ~ '.html.twig' with { 'value': 'sylius.ui.' ~ order.shippingState, 'attached': true } %}
    {% if order.hasShipments %}
        <h3 class=\"ui dividing header\" id=\"shipping-state\">{{ 'sylius.ui.shipments'|trans }}</h3>
        <div class=\"ui relaxed divided list\" id=\"sylius-shipments\">
            {% for shipment in order.shipments %}
                {% include '@SyliusAdmin/Order/Show/_shipment.html.twig' %}
            {% endfor %}
        </div>
    {% endif %}
</div>
", "SyliusAdminBundle:Order/Show:_shipments.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/_shipments.html.twig");
    }
}
