<?php

/* SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig */
class __TwigTemplate_bd9ea585e00f0e6c8c6d6bdde5d6e4ee38603c5b4f16efdc8f4dfed1f09dc8b8 extends Twig_Template
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
        $__internal_e36c357d43ad8b8fb642ac6a217a665f79d9685394982f111c7f4f1991c9dd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36c357d43ad8b8fb642ac6a217a665f79d9685394982f111c7f4f1991c9dd2c->enter($__internal_e36c357d43ad8b8fb642ac6a217a665f79d9685394982f111c7f4f1991c9dd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig"));

        $__internal_6ccd3cf8e95aaae957ea5f5a64b27863af39e875f44eccc3062c03cd022b40cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccd3cf8e95aaae957ea5f5a64b27863af39e875f44eccc3062c03cd022b40cf->enter($__internal_6ccd3cf8e95aaae957ea5f5a64b27863af39e875f44eccc3062c03cd022b40cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotions"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_index")), 2 => array("label" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 6, $this->getSourceContext()); })()), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 6, $this->getSourceContext()); })()), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.coupons"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_coupon_index", array("promotionId" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 7
(isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 7, $this->getSourceContext()); })()), "id", array())))), 4 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.generate")));
        // line 11
        echo "
";
        // line 12
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 12, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_e36c357d43ad8b8fb642ac6a217a665f79d9685394982f111c7f4f1991c9dd2c->leave($__internal_e36c357d43ad8b8fb642ac6a217a665f79d9685394982f111c7f4f1991c9dd2c_prof);

        
        $__internal_6ccd3cf8e95aaae957ea5f5a64b27863af39e875f44eccc3062c03cd022b40cf->leave($__internal_6ccd3cf8e95aaae957ea5f5a64b27863af39e875f44eccc3062c03cd022b40cf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig";
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
        { label: promotion.code, url: path('sylius_admin_promotion_update', {'id': promotion.id}) },
        { label: 'sylius.ui.coupons'|trans, url: path('sylius_admin_promotion_coupon_index', {'promotionId': promotion.id}) },
        { label: 'sylius.ui.generate'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:PromotionCoupon/Generate:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PromotionCoupon/Generate/_breadcrumb.html.twig");
    }
}
