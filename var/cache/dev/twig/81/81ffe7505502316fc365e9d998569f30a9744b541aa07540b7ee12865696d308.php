<?php

/* SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig */
class __TwigTemplate_01045b41cbb9875a55aa7f5d51a6cf5386bab64c7323957aa8d473dbe515796a extends Twig_Template
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
        $__internal_5c1e4cd02ad41539a2b0058a14e5c09cc3f1b662fa35f9eb0b55a8043de2b1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1e4cd02ad41539a2b0058a14e5c09cc3f1b662fa35f9eb0b55a8043de2b1b2->enter($__internal_5c1e4cd02ad41539a2b0058a14e5c09cc3f1b662fa35f9eb0b55a8043de2b1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig"));

        $__internal_e65725950b8ef41b6ef62721707545cc7a88e885ef5b567ec7f8bcd42917e9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65725950b8ef41b6ef62721707545cc7a88e885ef5b567ec7f8bcd42917e9cb->enter($__internal_e65725950b8ef41b6ef62721707545cc7a88e885ef5b567ec7f8bcd42917e9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig", 1);
        // line 2
        echo "
<div class=\"column\">
    ";
        // line 4
        echo $context["headers"]->macro_default(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new Twig_Error_Runtime('Variable "promotion" does not exist.', 4, $this->getSourceContext()); })()), "name", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "tags")) : ("tags")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.manage_coupons")) : ("sylius.ui.manage_coupons"))));
        echo "

    ";
        // line 6
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig", 6)->display($context);
        // line 7
        echo "</div>
";
        
        $__internal_5c1e4cd02ad41539a2b0058a14e5c09cc3f1b662fa35f9eb0b55a8043de2b1b2->leave($__internal_5c1e4cd02ad41539a2b0058a14e5c09cc3f1b662fa35f9eb0b55a8043de2b1b2_prof);

        
        $__internal_e65725950b8ef41b6ef62721707545cc7a88e885ef5b567ec7f8bcd42917e9cb->leave($__internal_e65725950b8ef41b6ef62721707545cc7a88e885ef5b567ec7f8bcd42917e9cb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

<div class=\"column\">
    {{ headers.default(promotion.name, configuration.vars.icon|default('tags'), configuration.vars.subheader|default('sylius.ui.manage_coupons')|trans) }}

    {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig') %}
</div>
", "SyliusAdminBundle:PromotionCoupon/Index:_promotionHeader.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PromotionCoupon/Index/_promotionHeader.html.twig");
    }
}
