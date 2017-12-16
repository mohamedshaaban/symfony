<?php

/* SyliusAdminBundle:Email:shipmentConfirmation.html.twig */
class __TwigTemplate_9048cce26e3010004b7e096684acb4e6bbd6604957a4af366704353cb97561e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af45258ac8d029c610002ccbfa329e901d98e60d3d34322a7d44406205cda3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af45258ac8d029c610002ccbfa329e901d98e60d3d34322a7d44406205cda3d8->enter($__internal_af45258ac8d029c610002ccbfa329e901d98e60d3d34322a7d44406205cda3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Email:shipmentConfirmation.html.twig"));

        $__internal_f75b6c9f5e3ae29e83df170c8e8a93c2d4bd811c9feab0be539a30b5ae80fdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75b6c9f5e3ae29e83df170c8e8a93c2d4bd811c9feab0be539a30b5ae80fdce->enter($__internal_f75b6c9f5e3ae29e83df170c8e8a93c2d4bd811c9feab0be539a30b5ae80fdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Email:shipmentConfirmation.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_af45258ac8d029c610002ccbfa329e901d98e60d3d34322a7d44406205cda3d8->leave($__internal_af45258ac8d029c610002ccbfa329e901d98e60d3d34322a7d44406205cda3d8_prof);

        
        $__internal_f75b6c9f5e3ae29e83df170c8e8a93c2d4bd811c9feab0be539a30b5ae80fdce->leave($__internal_f75b6c9f5e3ae29e83df170c8e8a93c2d4bd811c9feab0be539a30b5ae80fdce_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_465ae20020b0ce825a425005c4d831ad08925652b7cbe2d66773657737b00873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465ae20020b0ce825a425005c4d831ad08925652b7cbe2d66773657737b00873->enter($__internal_465ae20020b0ce825a425005c4d831ad08925652b7cbe2d66773657737b00873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_90b920a0e2afb3f9d050439d14deb6d1113371f791ce9016afc4a0a7fec44630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b920a0e2afb3f9d050439d14deb6d1113371f791ce9016afc4a0a7fec44630->enter($__internal_90b920a0e2afb3f9d050439d14deb6d1113371f791ce9016afc4a0a7fec44630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Shipment confirmation
";
        
        $__internal_90b920a0e2afb3f9d050439d14deb6d1113371f791ce9016afc4a0a7fec44630->leave($__internal_90b920a0e2afb3f9d050439d14deb6d1113371f791ce9016afc4a0a7fec44630_prof);

        
        $__internal_465ae20020b0ce825a425005c4d831ad08925652b7cbe2d66773657737b00873->leave($__internal_465ae20020b0ce825a425005c4d831ad08925652b7cbe2d66773657737b00873_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59b9dd4ee116fc5e871e1d0e7f0032b9628e5a80f92d29aa3b4f683adf2722be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b9dd4ee116fc5e871e1d0e7f0032b9628e5a80f92d29aa3b4f683adf2722be->enter($__internal_59b9dd4ee116fc5e871e1d0e7f0032b9628e5a80f92d29aa3b4f683adf2722be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec9f4d9badc6d7bcd30ac96075dedad49fd28fe62542f39f859b6161686ef4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9f4d9badc6d7bcd30ac96075dedad49fd28fe62542f39f859b6161686ef4e4->enter($__internal_ec9f4d9badc6d7bcd30ac96075dedad49fd28fe62542f39f859b6161686ef4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "        Your order with number ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 7, $this->getSourceContext()); })()), "number", array()), "html", null, true);
        echo " has been sent using ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 7, $this->getSourceContext()); })()), "method", array()), "html", null, true);
        echo ".
        <br/>
        You can check it's location with the \"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 9, $this->getSourceContext()); })()), "tracking", array()), "html", null, true);
        echo "\" tracking code.
        <br/><br/>
        Thank you for a successful transaction.
    ";
        
        $__internal_ec9f4d9badc6d7bcd30ac96075dedad49fd28fe62542f39f859b6161686ef4e4->leave($__internal_ec9f4d9badc6d7bcd30ac96075dedad49fd28fe62542f39f859b6161686ef4e4_prof);

        
        $__internal_59b9dd4ee116fc5e871e1d0e7f0032b9628e5a80f92d29aa3b4f683adf2722be->leave($__internal_59b9dd4ee116fc5e871e1d0e7f0032b9628e5a80f92d29aa3b4f683adf2722be_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Email:shipmentConfirmation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 9,  73 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    Shipment confirmation
{% endblock %}

{% block body %}
    {% autoescape %}
        Your order with number {{ order.number }} has been sent using {{ shipment.method }}.
        <br/>
        You can check it's location with the \"{{ shipment.tracking }}\" tracking code.
        <br/><br/>
        Thank you for a successful transaction.
    {% endautoescape %}
{% endblock %}
", "SyliusAdminBundle:Email:shipmentConfirmation.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Email/shipmentConfirmation.html.twig");
    }
}
