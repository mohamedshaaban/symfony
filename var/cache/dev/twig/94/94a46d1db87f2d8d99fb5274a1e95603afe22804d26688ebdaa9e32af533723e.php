<?php

/* SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig */
class __TwigTemplate_41fe0d48dbb695bcb51db435bea5fa18882d3f4cdd00cac31800e6edd31f927f extends Twig_Template
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
        $__internal_bee649822b6001252c9d5f3da93b2565acfede49d23f0b39fc180cb5a618cec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee649822b6001252c9d5f3da93b2565acfede49d23f0b39fc180cb5a618cec6->enter($__internal_bee649822b6001252c9d5f3da93b2565acfede49d23f0b39fc180cb5a618cec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig"));

        $__internal_af289967bf9873f040a49bc2a35dc9f8fd0b3f4a361432a9a3208b1dd4ba089c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af289967bf9873f040a49bc2a35dc9f8fd0b3f4a361432a9a3208b1dd4ba089c->enter($__internal_af289967bf9873f040a49bc2a35dc9f8fd0b3f4a361432a9a3208b1dd4ba089c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["breadcrumb"]->macro_crumble(array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.inventory"))));
        // line 6
        echo "
";
        
        $__internal_bee649822b6001252c9d5f3da93b2565acfede49d23f0b39fc180cb5a618cec6->leave($__internal_bee649822b6001252c9d5f3da93b2565acfede49d23f0b39fc180cb5a618cec6_prof);

        
        $__internal_af289967bf9873f040a49bc2a35dc9f8fd0b3f4a361432a9a3208b1dd4ba089c->leave($__internal_af289967bf9873f040a49bc2a35dc9f8fd0b3f4a361432a9a3208b1dd4ba089c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{{ breadcrumb.crumble([
    { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
    { label: 'sylius.ui.inventory'|trans },
]) }}
", "SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Inventory/Index/_breadcrumb.html.twig");
    }
}
