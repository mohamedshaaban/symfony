<?php

/* SyliusAdminBundle:Order/History:_addresses.html.twig */
class __TwigTemplate_c56d3cbd3a60fad8534a61a43d9b31c813568eb79a1599362063d9695a7047ea extends Twig_Template
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
        $__internal_626d3dc98e46bd9aa25f3fd659901b1778847b043c005c2f67bf55b85c36920b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626d3dc98e46bd9aa25f3fd659901b1778847b043c005c2f67bf55b85c36920b->enter($__internal_626d3dc98e46bd9aa25f3fd659901b1778847b043c005c2f67bf55b85c36920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_addresses.html.twig"));

        $__internal_ffd94f92a6519dc0560c9a820be684d75d3656f33941bdd3b0e9c556a53fc9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd94f92a6519dc0560c9a820be684d75d3656f33941bdd3b0e9c556a53fc9ae->enter($__internal_ffd94f92a6519dc0560c9a820be684d75d3656f33941bdd3b0e9c556a53fc9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_addresses.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            ";
        // line 4
        $this->loadTemplate("@SyliusAdmin/Order/History/_address.html.twig", "SyliusAdminBundle:Order/History:_addresses.html.twig", 4)->display(array_merge($context, array("type" => "shipping", "address" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 4, $this->getSourceContext()); })()), "shippingAddress", array()))));
        // line 5
        echo "        </div>
        <div class=\"column\">
            ";
        // line 7
        $this->loadTemplate("@SyliusAdmin/Order/History/_address.html.twig", "SyliusAdminBundle:Order/History:_addresses.html.twig", 7)->display(array_merge($context, array("type" => "billing", "address" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 7, $this->getSourceContext()); })()), "billingAddress", array()))));
        // line 8
        echo "        </div>
    </div>
</div>
";
        
        $__internal_626d3dc98e46bd9aa25f3fd659901b1778847b043c005c2f67bf55b85c36920b->leave($__internal_626d3dc98e46bd9aa25f3fd659901b1778847b043c005c2f67bf55b85c36920b_prof);

        
        $__internal_ffd94f92a6519dc0560c9a820be684d75d3656f33941bdd3b0e9c556a53fc9ae->leave($__internal_ffd94f92a6519dc0560c9a820be684d75d3656f33941bdd3b0e9c556a53fc9ae_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  36 => 7,  32 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            {% include '@SyliusAdmin/Order/History/_address.html.twig' with {'type': 'shipping', address: order.shippingAddress} %}
        </div>
        <div class=\"column\">
            {% include '@SyliusAdmin/Order/History/_address.html.twig' with {'type': 'billing', address: order.billingAddress} %}
        </div>
    </div>
</div>
", "SyliusAdminBundle:Order/History:_addresses.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/History/_addresses.html.twig");
    }
}
