<?php

/* SyliusAdminBundle:PromotionCoupon/Index:_header.html.twig */
class __TwigTemplate_1a954749cec0052d0aa230b57e7a78997ada85bdccc77d6c1a5213f27c2914d9 extends Twig_Template
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
        $__internal_a7b5029b7400205b02a6d7083a1a13dcc5cf0e19a0efc624a16c372478938c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b5029b7400205b02a6d7083a1a13dcc5cf0e19a0efc624a16c372478938c95->enter($__internal_a7b5029b7400205b02a6d7083a1a13dcc5cf0e19a0efc624a16c372478938c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_header.html.twig"));

        $__internal_39465589d363b6924505b37c3e1c4661515b4b48a72463be92283723570f8b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39465589d363b6924505b37c3e1c4661515b4b48a72463be92283723570f8b1c->enter($__internal_39465589d363b6924505b37c3e1c4661515b4b48a72463be92283723570f8b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_header.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_promotion_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 2
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "promotionId"), "method"), "template" => "@SyliusAdmin/PromotionCoupon/Index/_promotionHeader.html.twig", "vars" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 4
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 4, $this->getSourceContext()); })()), "vars", array()))));
        // line 5
        echo "
";
        
        $__internal_a7b5029b7400205b02a6d7083a1a13dcc5cf0e19a0efc624a16c372478938c95->leave($__internal_a7b5029b7400205b02a6d7083a1a13dcc5cf0e19a0efc624a16c372478938c95_prof);

        
        $__internal_39465589d363b6924505b37c3e1c4661515b4b48a72463be92283723570f8b1c->leave($__internal_39465589d363b6924505b37c3e1c4661515b4b48a72463be92283723570f8b1c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Index:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  26 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ render(url('sylius_admin_partial_promotion_show', {
    'id': app.request.attributes.get('promotionId'),
    'template': '@SyliusAdmin/PromotionCoupon/Index/_promotionHeader.html.twig',
    'vars': configuration.vars
})) }}
", "SyliusAdminBundle:PromotionCoupon/Index:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PromotionCoupon/Index/_header.html.twig");
    }
}
