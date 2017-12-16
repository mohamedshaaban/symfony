<?php

/* SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig */
class __TwigTemplate_06f5762b9f97e033f79cd94a09367f854f78ea288abc431834d189216e2fd99d extends Twig_Template
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
        $__internal_2d9bebcd523bd5e44bcc4ddcc5a9596bb326f71808a16f76045b48d97bff4eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9bebcd523bd5e44bcc4ddcc5a9596bb326f71808a16f76045b48d97bff4eb8->enter($__internal_2d9bebcd523bd5e44bcc4ddcc5a9596bb326f71808a16f76045b48d97bff4eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig"));

        $__internal_3a8c43ca7768f15e9e155a7831662d467408dac422012a1cbcc88e0ed328e096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8c43ca7768f15e9e155a7831662d467408dac422012a1cbcc88e0ed328e096->enter($__internal_3a8c43ca7768f15e9e155a7831662d467408dac422012a1cbcc88e0ed328e096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customers"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_index")), 2 => array("label" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "id"), "method")), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 11, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_2d9bebcd523bd5e44bcc4ddcc5a9596bb326f71808a16f76045b48d97bff4eb8->leave($__internal_2d9bebcd523bd5e44bcc4ddcc5a9596bb326f71808a16f76045b48d97bff4eb8_prof);

        
        $__internal_3a8c43ca7768f15e9e155a7831662d467408dac422012a1cbcc88e0ed328e096->leave($__internal_3a8c43ca7768f15e9e155a7831662d467408dac422012a1cbcc88e0ed328e096_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig";
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
        { label: 'sylius.ui.customers'|trans, url: path('sylius_admin_customer_index') },
        { label: app.request.attributes.get('id') },
        { label: 'sylius.ui.orders'|trans },
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Order/Index/_breadcrumb.html.twig");
    }
}
