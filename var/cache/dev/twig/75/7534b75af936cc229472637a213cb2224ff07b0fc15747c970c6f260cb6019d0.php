<?php

/* SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig */
class __TwigTemplate_3d0f53fb7e35857b37a1da35ad43a6bf8cbc8a98c79039e0a8c82fcfb78aefee extends Twig_Template
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
        $__internal_d0ff2465a1517163a28d073e1c589b343fbda040868dee5b1cb3aec44173012e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ff2465a1517163a28d073e1c589b343fbda040868dee5b1cb3aec44173012e->enter($__internal_d0ff2465a1517163a28d073e1c589b343fbda040868dee5b1cb3aec44173012e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig"));

        $__internal_30d07f21098c3e4b2b56d30b9b36476c233977311c22a187f615332d35af00e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d07f21098c3e4b2b56d30b9b36476c233977311c22a187f615332d35af00e6->enter($__internal_30d07f21098c3e4b2b56d30b9b36476c233977311c22a187f615332d35af00e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotions"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_index")), 2 => array("label" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 6, $this->getSourceContext()); })()), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 6, $this->getSourceContext()); })()), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.coupons")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 11, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_d0ff2465a1517163a28d073e1c589b343fbda040868dee5b1cb3aec44173012e->leave($__internal_d0ff2465a1517163a28d073e1c589b343fbda040868dee5b1cb3aec44173012e_prof);

        
        $__internal_30d07f21098c3e4b2b56d30b9b36476c233977311c22a187f615332d35af00e6->leave($__internal_30d07f21098c3e4b2b56d30b9b36476c233977311c22a187f615332d35af00e6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig";
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
        { label: 'sylius.ui.promotions'|trans, url: path('sylius_admin_promotion_index') },
        { label: promotion.code, url: path('sylius_admin_promotion_update', {'id': promotion.id}) },
        { label: 'sylius.ui.coupons'|trans },
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PromotionCoupon/Index/_breadcrumb.html.twig");
    }
}
