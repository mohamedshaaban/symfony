<?php

/* SyliusAdminBundle:Customer/Show:_address.html.twig */
class __TwigTemplate_f7e4e9fc26d975d176dc3fcc70b1c350f0ee3de96340565654a82e29caf846ab extends Twig_Template
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
        $__internal_30a239fbf3a6788c07fa13cd21057e18387f85f04574c43f39719b651a26e2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a239fbf3a6788c07fa13cd21057e18387f85f04574c43f39719b651a26e2a4->enter($__internal_30a239fbf3a6788c07fa13cd21057e18387f85f04574c43f39719b651a26e2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_address.html.twig"));

        $__internal_2386d4cd3cd8875d800890eb960eb49dfc81a2e7c93af87cce073fa283392ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2386d4cd3cd8875d800890eb960eb49dfc81a2e7c93af87cce073fa283392ec3->enter($__internal_2386d4cd3cd8875d800890eb960eb49dfc81a2e7c93af87cce073fa283392ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_address.html.twig"));

        // line 1
        echo "<div class=\"eight wide column\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.before_address", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 2, $this->getSourceContext()); })()))));
        echo "

    <h4 class=\"ui top attached styled header\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.default_address"), "html", null, true);
        echo "
    </h4>

    <div class=\"ui attached segment\" id=\"default-address\">
        ";
        // line 9
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 9, $this->getSourceContext()); })()), "defaultAddress", array()))) {
            // line 10
            echo "            ";
            $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "SyliusAdminBundle:Customer/Show:_address.html.twig", 10)->display(array_merge($context, array("address" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 10, $this->getSourceContext()); })()), "defaultAddress", array()))));
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.this_customer_does_not_have_a_default_address"), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "    </div>

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_address", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 16, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_30a239fbf3a6788c07fa13cd21057e18387f85f04574c43f39719b651a26e2a4->leave($__internal_30a239fbf3a6788c07fa13cd21057e18387f85f04574c43f39719b651a26e2a4_prof);

        
        $__internal_2386d4cd3cd8875d800890eb960eb49dfc81a2e7c93af87cce073fa283392ec3->leave($__internal_2386d4cd3cd8875d800890eb960eb49dfc81a2e7c93af87cce073fa283392ec3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  55 => 14,  49 => 12,  46 => 11,  43 => 10,  41 => 9,  34 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"eight wide column\">
    {{ sonata_block_render_event('sylius.admin.customer.show.before_address', {'resource': resource}) }}

    <h4 class=\"ui top attached styled header\">
        {{ 'sylius.ui.default_address'|trans }}
    </h4>

    <div class=\"ui attached segment\" id=\"default-address\">
        {% if customer.defaultAddress is not null %}
            {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': customer.defaultAddress} %}
        {% else %}
            {{ 'sylius.ui.this_customer_does_not_have_a_default_address'|trans }}
        {% endif %}
    </div>

    {{ sonata_block_render_event('sylius.admin.customer.show.after_address', {'resource': resource}) }}
</div>
", "SyliusAdminBundle:Customer/Show:_address.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Show/_address.html.twig");
    }
}
