<?php

/* SyliusShopBundle:Common/Order:_shipments.html.twig */
class __TwigTemplate_2236a5544773f9cdd19dd07ae033ccf25fefa5bb94664b7296695541685c1a80 extends Twig_Template
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
        $__internal_a003a9e954a1e314fbb2418266c7bf25801edd8cb8a19e87216dd78ded9f403d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a003a9e954a1e314fbb2418266c7bf25801edd8cb8a19e87216dd78ded9f403d->enter($__internal_a003a9e954a1e314fbb2418266c7bf25801edd8cb8a19e87216dd78ded9f403d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_shipments.html.twig"));

        $__internal_8973f70bb9ab5a07bcab36b2e052d23c465cbfba05a75e2c283f49dc8bbc89a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8973f70bb9ab5a07bcab36b2e052d23c465cbfba05a75e2c283f49dc8bbc89a2->enter($__internal_8973f70bb9ab5a07bcab36b2e052d23c465cbfba05a75e2c283f49dc8bbc89a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_shipments.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 1, $this->getSourceContext()); })()), "shipments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
            // line 2
            echo "    <div class=\"ui large icon message\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"header\" id=\"sylius-shipping-method\">
                ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["shipment"], "method", array()), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a003a9e954a1e314fbb2418266c7bf25801edd8cb8a19e87216dd78ded9f403d->leave($__internal_a003a9e954a1e314fbb2418266c7bf25801edd8cb8a19e87216dd78ded9f403d_prof);

        
        $__internal_8973f70bb9ab5a07bcab36b2e052d23c465cbfba05a75e2c283f49dc8bbc89a2->leave($__internal_8973f70bb9ab5a07bcab36b2e052d23c465cbfba05a75e2c283f49dc8bbc89a2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_shipments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for shipment in order.shipments %}
    <div class=\"ui large icon message\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"header\" id=\"sylius-shipping-method\">
                {{ shipment.method }}
            </div>
        </div>
    </div>
{% endfor %}
", "SyliusShopBundle:Common/Order:_shipments.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/_shipments.html.twig");
    }
}
