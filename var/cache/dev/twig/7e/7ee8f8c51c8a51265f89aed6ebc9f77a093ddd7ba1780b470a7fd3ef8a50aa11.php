<?php

/* SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig */
class __TwigTemplate_0e8bf2a17f3bec38fe37b427b4f26219a88cca184efd7a34f73c0f76ce61ae6e extends Twig_Template
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
        $__internal_0e7bd9151399185531d92ac23dfdf41253b0f0156fc74ed55e19f1d3d29a0e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7bd9151399185531d92ac23dfdf41253b0f0156fc74ed55e19f1d3d29a0e73->enter($__internal_0e7bd9151399185531d92ac23dfdf41253b0f0156fc74ed55e19f1d3d29a0e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig"));

        $__internal_045cd404ad6a3eb18ecde6d1a4fafcbc0ffa0ffa9c2a92945447aff0d6f50a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045cd404ad6a3eb18ecde6d1a4fafcbc0ffa0ffa9c2a92945447aff0d6f50a7b->enter($__internal_045cd404ad6a3eb18ecde6d1a4fafcbc0ffa0ffa9c2a92945447aff0d6f50a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotions"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_index")), 2 => array("label" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 6, $this->getSourceContext()); })()), "promotion", array()), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 6, $this->getSourceContext()); })()), "promotion", array()), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.coupons"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(),         // line 7
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 7, $this->getSourceContext()); })()), "getRouteName", array(0 => "index"), "method"), array("promotionId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 7, $this->getSourceContext()); })()), "promotion", array()), "id", array())))), 4 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new")));
        // line 11
        echo "
";
        // line 12
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 12, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_0e7bd9151399185531d92ac23dfdf41253b0f0156fc74ed55e19f1d3d29a0e73->leave($__internal_0e7bd9151399185531d92ac23dfdf41253b0f0156fc74ed55e19f1d3d29a0e73_prof);

        
        $__internal_045cd404ad6a3eb18ecde6d1a4fafcbc0ffa0ffa9c2a92945447aff0d6f50a7b->leave($__internal_045cd404ad6a3eb18ecde6d1a4fafcbc0ffa0ffa9c2a92945447aff0d6f50a7b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  34 => 11,  32 => 7,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: 'sylius.ui.promotions'|trans, url: path('sylius_admin_promotion_index') },
        { label: resource.promotion.code, url: path('sylius_admin_promotion_update', {'id': resource.promotion.id}) },
        { label: 'sylius.ui.coupons'|trans, url: path(configuration.getRouteName('index'), {'promotionId': resource.promotion.id}) },
        { label: 'sylius.ui.new'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:PromotionCoupon/Create:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PromotionCoupon/Create/_breadcrumb.html.twig");
    }
}
