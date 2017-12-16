<?php

/* SyliusAdminBundle:Order/Show:_payments.html.twig */
class __TwigTemplate_55107e836bb7d3309caf55b463a1a9a81656d48fcfcd8913bf53b98aa8e85b44 extends Twig_Template
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
        $__internal_76212d1493b3af8ba7ce0c7238d1e72d799f21923a1c44a4a19933a04d4fb4a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76212d1493b3af8ba7ce0c7238d1e72d799f21923a1c44a4a19933a04d4fb4a8->enter($__internal_76212d1493b3af8ba7ce0c7238d1e72d799f21923a1c44a4a19933a04d4fb4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_payments.html.twig"));

        $__internal_44ae856019ca78e865dd4925756f82551e7a67433bcb0a7444e547738f529660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ae856019ca78e865dd4925756f82551e7a67433bcb0a7444e547738f529660->enter($__internal_44ae856019ca78e865dd4925756f82551e7a67433bcb0a7444e547738f529660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_payments.html.twig"));

        // line 1
        echo "<div class=\"ui segment\" id=\"payment-state\">
    ";
        // line 2
        $this->loadTemplate((("@SyliusAdmin/Order/Label/PaymentState/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 2, $this->getSourceContext()); })()), "paymentState", array())) . ".html.twig"), "SyliusAdminBundle:Order/Show:_payments.html.twig", 2)->display(array_merge($context, array("value" => ("sylius.ui." . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 2, $this->getSourceContext()); })()), "paymentState", array())), "attached" => true)));
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 3, $this->getSourceContext()); })()), "hasPayments", array())) {
            // line 4
            echo "        <h3 class=\"ui dividing header\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.payments"), "html", null, true);
            echo "</h3>
        <div class=\"ui relaxed divided list\" id=\"sylius-payments\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "payments", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 7
                echo "                ";
                $this->loadTemplate("@SyliusAdmin/Order/Show/_payment.html.twig", "SyliusAdminBundle:Order/Show:_payments.html.twig", 7)->display($context);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div>
    ";
        }
        // line 11
        echo "</div>
";
        
        $__internal_76212d1493b3af8ba7ce0c7238d1e72d799f21923a1c44a4a19933a04d4fb4a8->leave($__internal_76212d1493b3af8ba7ce0c7238d1e72d799f21923a1c44a4a19933a04d4fb4a8_prof);

        
        $__internal_44ae856019ca78e865dd4925756f82551e7a67433bcb0a7444e547738f529660->leave($__internal_44ae856019ca78e865dd4925756f82551e7a67433bcb0a7444e547738f529660_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_payments.html.twig";
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
        return new Twig_Source("<div class=\"ui segment\" id=\"payment-state\">
    {% include '@SyliusAdmin/Order/Label/PaymentState/' ~ order.paymentState ~ '.html.twig' with { 'value': 'sylius.ui.' ~ order.paymentState, 'attached': true } %}
    {% if order.hasPayments %}
        <h3 class=\"ui dividing header\">{{ 'sylius.ui.payments'|trans }}</h3>
        <div class=\"ui relaxed divided list\" id=\"sylius-payments\">
            {% for payment in order.payments %}
                {% include '@SyliusAdmin/Order/Show/_payment.html.twig' %}
            {% endfor %}
        </div>
    {% endif %}
</div>
", "SyliusAdminBundle:Order/Show:_payments.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/_payments.html.twig");
    }
}
