<?php

/* SyliusAdminBundle:Order/History:_header.html.twig */
class __TwigTemplate_2cf015ece468afef7c5edabcbb3fec07be98a3f17e1ac414df790bcc82aa37a8 extends Twig_Template
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
        $__internal_d5f7253efc9373d6df48a7343e9c49d9fcda0669c041971a21d0ec1a9bd9fb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f7253efc9373d6df48a7343e9c49d9fcda0669c041971a21d0ec1a9bd9fb43->enter($__internal_d5f7253efc9373d6df48a7343e9c49d9fcda0669c041971a21d0ec1a9bd9fb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_header.html.twig"));

        $__internal_34d04b8ffe3e19699db8d352b9ba5c845baba46e220d5bde1f294491fb7ac0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d04b8ffe3e19699db8d352b9ba5c845baba46e220d5bde1f294491fb7ac0d8->enter($__internal_34d04b8ffe3e19699db8d352b9ba5c845baba46e220d5bde1f294491fb7ac0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_header.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Order/Show/_header.html.twig", "SyliusAdminBundle:Order/History:_header.html.twig", 1)->display($context);
        
        $__internal_d5f7253efc9373d6df48a7343e9c49d9fcda0669c041971a21d0ec1a9bd9fb43->leave($__internal_d5f7253efc9373d6df48a7343e9c49d9fcda0669c041971a21d0ec1a9bd9fb43_prof);

        
        $__internal_34d04b8ffe3e19699db8d352b9ba5c845baba46e220d5bde1f294491fb7ac0d8->leave($__internal_34d04b8ffe3e19699db8d352b9ba5c845baba46e220d5bde1f294491fb7ac0d8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusAdmin/Order/Show/_header.html.twig' %}
", "SyliusAdminBundle:Order/History:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/History/_header.html.twig");
    }
}
