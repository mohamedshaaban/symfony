<?php

/* SyliusAdminBundle:Order/Show:_addresses.html.twig */
class __TwigTemplate_8c0a2eba45bc4cdbb8f9d2f5a0fbbe4a350b69179c6c758058e34c73d68741a6 extends Twig_Template
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
        $__internal_fdc32b19559459575bd3589cbfd770af89f28b83b5e5faaffe0fe734438af335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc32b19559459575bd3589cbfd770af89f28b83b5e5faaffe0fe734438af335->enter($__internal_fdc32b19559459575bd3589cbfd770af89f28b83b5e5faaffe0fe734438af335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_addresses.html.twig"));

        $__internal_118cc1f3b9db46d02ae780eb80d0fb05ba45ed64e98e996bc6a9aa9bb93750ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118cc1f3b9db46d02ae780eb80d0fb05ba45ed64e98e996bc6a9aa9bb93750ca->enter($__internal_118cc1f3b9db46d02ae780eb80d0fb05ba45ed64e98e996bc6a9aa9bb93750ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_addresses.html.twig"));

        // line 1
        echo "<h4 class=\"ui top attached styled header\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "
</h4>
<div class=\"ui attached segment\" id=\"shipping-address\">
    ";
        // line 5
        $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "SyliusAdminBundle:Order/Show:_addresses.html.twig", 5)->display(array_merge($context, array("address" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->getSourceContext()); })()), "shippingAddress", array()))));
        // line 6
        echo "</div>
<h4 class=\"ui attached styled header\">
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.billing_address"), "html", null, true);
        echo "
</h4>
<div class=\"ui attached segment\" id=\"billing-address\">
    ";
        // line 11
        $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "SyliusAdminBundle:Order/Show:_addresses.html.twig", 11)->display(array_merge($context, array("address" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->getSourceContext()); })()), "billingAddress", array()))));
        // line 12
        echo "    <div class=\"ui segment\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"ui icon labeled tiny fluid button\">
            <i class=\"pencil icon\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
        
        $__internal_fdc32b19559459575bd3589cbfd770af89f28b83b5e5faaffe0fe734438af335->leave($__internal_fdc32b19559459575bd3589cbfd770af89f28b83b5e5faaffe0fe734438af335_prof);

        
        $__internal_118cc1f3b9db46d02ae780eb80d0fb05ba45ed64e98e996bc6a9aa9bb93750ca->leave($__internal_118cc1f3b9db46d02ae780eb80d0fb05ba45ed64e98e996bc6a9aa9bb93750ca_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 13,  48 => 12,  46 => 11,  40 => 8,  36 => 6,  34 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui top attached styled header\">
    {{ 'sylius.ui.shipping_address'|trans }}
</h4>
<div class=\"ui attached segment\" id=\"shipping-address\">
    {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': order.shippingAddress} %}
</div>
<h4 class=\"ui attached styled header\">
    {{ 'sylius.ui.billing_address'|trans }}
</h4>
<div class=\"ui attached segment\" id=\"billing-address\">
    {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': order.billingAddress} %}
    <div class=\"ui segment\">
        <a href=\"{{ path('sylius_admin_order_update', {'id': order.id}) }}\" class=\"ui icon labeled tiny fluid button\">
            <i class=\"pencil icon\"></i> {{ 'sylius.ui.edit'|trans }}
        </a>
    </div>
</div>
", "SyliusAdminBundle:Order/Show:_addresses.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/_addresses.html.twig");
    }
}
