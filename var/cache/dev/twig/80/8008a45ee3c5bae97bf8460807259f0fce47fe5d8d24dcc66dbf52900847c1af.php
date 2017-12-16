<?php

/* SyliusAdminBundle:PromotionCoupon:_form.html.twig */
class __TwigTemplate_9ef922bfaa6b32f2cfee08849ef7a83307e5ea8155c01e1ee7b901ae9640d01b extends Twig_Template
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
        $__internal_af0c2122dd5efa591ed243042e221cb7595c27ecb6131f7b32a2171b5418d951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0c2122dd5efa591ed243042e221cb7595c27ecb6131f7b32a2171b5418d951->enter($__internal_af0c2122dd5efa591ed243042e221cb7595c27ecb6131f7b32a2171b5418d951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:_form.html.twig"));

        $__internal_13073f665c1f90493dedfabd361418cc1b343f78be026504c33699368161a79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13073f665c1f90493dedfabd361418cc1b343f78be026504c33699368161a79e->enter($__internal_13073f665c1f90493dedfabd361418cc1b343f78be026504c33699368161a79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:_form.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'errors');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.expiration_and_usage_limits"), "html", null, true);
        echo "</h4>
    <div class=\"three fields\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "expiresAt", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "usageLimit", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "perCustomerUsageLimit", array()), 'row');
        echo "
    </div>
</div>
";
        
        $__internal_af0c2122dd5efa591ed243042e221cb7595c27ecb6131f7b32a2171b5418d951->leave($__internal_af0c2122dd5efa591ed243042e221cb7595c27ecb6131f7b32a2171b5418d951_prof);

        
        $__internal_13073f665c1f90493dedfabd361418cc1b343f78be026504c33699368161a79e->leave($__internal_13073f665c1f90493dedfabd361418cc1b343f78be026504c33699368161a79e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  43 => 8,  38 => 6,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_errors(form) }}
    {{ form_row(form.code) }}
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.expiration_and_usage_limits'|trans }}</h4>
    <div class=\"three fields\">
        {{ form_row(form.expiresAt) }}
        {{ form_row(form.usageLimit) }}
        {{ form_row(form.perCustomerUsageLimit) }}
    </div>
</div>
", "SyliusAdminBundle:PromotionCoupon:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PromotionCoupon/_form.html.twig");
    }
}
