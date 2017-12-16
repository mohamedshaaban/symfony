<?php

/* SyliusShopBundle:Checkout/SelectShipping:_unavailable.html.twig */
class __TwigTemplate_447827fd7ca2baa3234b0198d1b66cbc480fd5642bf98940c746abe1158ff71c extends Twig_Template
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
        $__internal_108d2c9fce2eec186ffb17ea06a0c41f53f75575dba156ea521b8c62498d92f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108d2c9fce2eec186ffb17ea06a0c41f53f75575dba156ea521b8c62498d92f3->enter($__internal_108d2c9fce2eec186ffb17ea06a0c41f53f75575dba156ea521b8c62498d92f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_unavailable.html.twig"));

        $__internal_01cb6983cc85298e28eb84e5eb1a000e3122cd31aac8ea71a0b7f5010004393e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cb6983cc85298e28eb84e5eb1a000e3122cd31aac8ea71a0b7f5010004393e->enter($__internal_01cb6983cc85298e28eb84e5eb1a000e3122cd31aac8ea71a0b7f5010004393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_unavailable.html.twig"));

        // line 1
        echo "<div class=\"ui icon message\" id=\"sylius-order-cannot-be-shipped\">
    <i class=\"warning sign icon\"></i>
    <div class=\"content\">
        <div class=\"header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.warning"), "html", null, true);
        echo "</div>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_shipping_methods_available"), "html", null, true);
        echo ".</p>
    </div>
</div>
";
        
        $__internal_108d2c9fce2eec186ffb17ea06a0c41f53f75575dba156ea521b8c62498d92f3->leave($__internal_108d2c9fce2eec186ffb17ea06a0c41f53f75575dba156ea521b8c62498d92f3_prof);

        
        $__internal_01cb6983cc85298e28eb84e5eb1a000e3122cd31aac8ea71a0b7f5010004393e->leave($__internal_01cb6983cc85298e28eb84e5eb1a000e3122cd31aac8ea71a0b7f5010004393e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_unavailable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui icon message\" id=\"sylius-order-cannot-be-shipped\">
    <i class=\"warning sign icon\"></i>
    <div class=\"content\">
        <div class=\"header\">{{ 'sylius.ui.warning'|trans }}</div>
        <p>{{ 'sylius.ui.no_shipping_methods_available'|trans }}.</p>
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectShipping:_unavailable.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/SelectShipping/_unavailable.html.twig");
    }
}
