<?php

/* SyliusAdminBundle:Order/Show:_breadcrumb.html.twig */
class __TwigTemplate_4434656e635036c541d476ab6641d0a22772d39fe5ad938d56b1167b6b115a64 extends Twig_Template
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
        $__internal_d8cfe1703e7386d5aef65ca0e7c0a9add56823ddfef0a74e5ecc5f4d57d23f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8cfe1703e7386d5aef65ca0e7c0a9add56823ddfef0a74e5ecc5f4d57d23f1b->enter($__internal_d8cfe1703e7386d5aef65ca0e7c0a9add56823ddfef0a74e5ecc5f4d57d23f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_breadcrumb.html.twig"));

        $__internal_0fccbf3d67414e9f8326296908a19905a18fad84dbf2898a4acc60718e7784b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fccbf3d67414e9f8326296908a19905a18fad84dbf2898a4acc60718e7784b1->enter($__internal_0fccbf3d67414e9f8326296908a19905a18fad84dbf2898a4acc60718e7784b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Order/Show:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_index")), 2 => array("label" => ("#" . twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "number", array()))));
        // line 9
        echo "
";
        // line 10
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 10, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_d8cfe1703e7386d5aef65ca0e7c0a9add56823ddfef0a74e5ecc5f4d57d23f1b->leave($__internal_d8cfe1703e7386d5aef65ca0e7c0a9add56823ddfef0a74e5ecc5f4d57d23f1b_prof);

        
        $__internal_0fccbf3d67414e9f8326296908a19905a18fad84dbf2898a4acc60718e7784b1->leave($__internal_0fccbf3d67414e9f8326296908a19905a18fad84dbf2898a4acc60718e7784b1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  33 => 9,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: 'sylius.ui.orders'|trans, url: path('sylius_admin_order_index') },
        { label: '#'~order.number }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Order/Show:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/_breadcrumb.html.twig");
    }
}
