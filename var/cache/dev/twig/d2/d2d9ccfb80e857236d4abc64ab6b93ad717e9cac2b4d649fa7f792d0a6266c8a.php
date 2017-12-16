<?php

/* SyliusAdminBundle:Order/Show:_customer.html.twig */
class __TwigTemplate_031761def71e4374ad19c0d2db4448d5eb3b7e2b693517d4560f046584771534 extends Twig_Template
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
        $__internal_4bc09ad38bc9f94cd5bda37dc9fe3abe65a809de758cfb8b0e7293153b030937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc09ad38bc9f94cd5bda37dc9fe3abe65a809de758cfb8b0e7293153b030937->enter($__internal_4bc09ad38bc9f94cd5bda37dc9fe3abe65a809de758cfb8b0e7293153b030937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_customer.html.twig"));

        $__internal_2662505f0d1f155f63e52074830d35731bebbe4dec1a39c8e1d53c156136370f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2662505f0d1f155f63e52074830d35731bebbe4dec1a39c8e1d53c156136370f->enter($__internal_2662505f0d1f155f63e52074830d35731bebbe4dec1a39c8e1d53c156136370f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_customer.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Customer/_info.html.twig", "SyliusAdminBundle:Order/Show:_customer.html.twig", 1)->display($context);
        
        $__internal_4bc09ad38bc9f94cd5bda37dc9fe3abe65a809de758cfb8b0e7293153b030937->leave($__internal_4bc09ad38bc9f94cd5bda37dc9fe3abe65a809de758cfb8b0e7293153b030937_prof);

        
        $__internal_2662505f0d1f155f63e52074830d35731bebbe4dec1a39c8e1d53c156136370f->leave($__internal_2662505f0d1f155f63e52074830d35731bebbe4dec1a39c8e1d53c156136370f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_customer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusAdmin/Customer/_info.html.twig' %}
", "SyliusAdminBundle:Order/Show:_customer.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/_customer.html.twig");
    }
}
