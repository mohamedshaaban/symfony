<?php

/* SyliusAdminBundle:Order/Update:_breadcrumb.html.twig */
class __TwigTemplate_0d521fe608a5618ab3b2488def9aede90b6726bdb1faf1b039eca988a55c4cea extends Twig_Template
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
        $__internal_93167c9f038c7a341377424fc59a30bc2849b17547b350b09afe9550cceaa4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93167c9f038c7a341377424fc59a30bc2849b17547b350b09afe9550cceaa4ef->enter($__internal_93167c9f038c7a341377424fc59a30bc2849b17547b350b09afe9550cceaa4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Update:_breadcrumb.html.twig"));

        $__internal_e217355e0ac2ba4f891413754971e365ba49574522c99e35e1dae35c597d41c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e217355e0ac2ba4f891413754971e365ba49574522c99e35e1dae35c597d41c8->enter($__internal_e217355e0ac2ba4f891413754971e365ba49574522c99e35e1dae35c597d41c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Update:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Order/Update:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_index")), 2 => array("label" => ("#" . twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "number", array())), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 11, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_93167c9f038c7a341377424fc59a30bc2849b17547b350b09afe9550cceaa4ef->leave($__internal_93167c9f038c7a341377424fc59a30bc2849b17547b350b09afe9550cceaa4ef_prof);

        
        $__internal_e217355e0ac2ba4f891413754971e365ba49574522c99e35e1dae35c597d41c8->leave($__internal_e217355e0ac2ba4f891413754971e365ba49574522c99e35e1dae35c597d41c8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Update:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  33 => 10,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: 'sylius.ui.orders'|trans, url: path('sylius_admin_order_index') },
        { label: '#'~order.number, url: path('sylius_admin_order_show', {'id': order.id}) },
        { label: 'sylius.ui.edit'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Order/Update:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Update/_breadcrumb.html.twig");
    }
}
