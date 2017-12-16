<?php

/* SyliusAdminBundle:ProductOption:_form.html.twig */
class __TwigTemplate_4851088e5387f0d4ba4bcfbfdded8c4e4fe9473b5cbac3d409576a3f8a887789 extends Twig_Template
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
        $__internal_cb3a0f28edc64ad46c6e2467c34802111c13ffa8272e54f1ca051d5ce435d12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb3a0f28edc64ad46c6e2467c34802111c13ffa8272e54f1ca051d5ce435d12d->enter($__internal_cb3a0f28edc64ad46c6e2467c34802111c13ffa8272e54f1ca051d5ce435d12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductOption:_form.html.twig"));

        $__internal_c09be09e901d4d97bb26d31780d0761a05dc6a91c72a81ed3c1579459d947e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09be09e901d4d97bb26d31780d0761a05dc6a91c72a81ed3c1579459d947e31->enter($__internal_c09be09e901d4d97bb26d31780d0761a05dc6a91c72a81ed3c1579459d947e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductOption:_form.html.twig"));

        // line 1
        $context["__internal_3e2500aa2d79453e86f2e70ce68ea18cadb86caf7e0897a2f2380e625f047d16"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductOption:_form.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "
    <div class=\"two fields\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "position", array()), 'row');
        echo "
    </div>
    ";
        // line 9
        echo $context["__internal_3e2500aa2d79453e86f2e70ce68ea18cadb86caf7e0897a2f2380e625f047d16"]->macro_translationForm(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "translations", array()));
        echo "
</div>
<h4 class=\"ui dividing header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.values"), "html", null, true);
        echo "</h4>
";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "values", array()), 'row');
        echo "
";
        
        $__internal_cb3a0f28edc64ad46c6e2467c34802111c13ffa8272e54f1ca051d5ce435d12d->leave($__internal_cb3a0f28edc64ad46c6e2467c34802111c13ffa8272e54f1ca051d5ce435d12d_prof);

        
        $__internal_c09be09e901d4d97bb26d31780d0761a05dc6a91c72a81ed3c1579459d947e31->leave($__internal_c09be09e901d4d97bb26d31780d0761a05dc6a91c72a81ed3c1579459d947e31_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductOption:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  50 => 11,  45 => 9,  40 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

<div class=\"ui segment\">
    {{ form_errors(form) }}
    <div class=\"two fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.position) }}
    </div>
    {{ translationForm(form.translations) }}
</div>
<h4 class=\"ui dividing header\">{{ 'sylius.ui.values'|trans }}</h4>
{{ form_row(form.values) }}
", "SyliusAdminBundle:ProductOption:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductOption/_form.html.twig");
    }
}
