<?php

/* SyliusShopBundle:Common/Form:_address.html.twig */
class __TwigTemplate_80efdf138b3fcd059dd60519732376e26e4d1dbdc2fe6354876f8c53f6c65100 extends Twig_Template
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
        $__internal_c09b47648da4ec136f01ffe6a433d84482138e3677eb86987c28b0adc055daa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09b47648da4ec136f01ffe6a433d84482138e3677eb86987c28b0adc055daa6->enter($__internal_c09b47648da4ec136f01ffe6a433d84482138e3677eb86987c28b0adc055daa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_address.html.twig"));

        $__internal_49cd2b894b33e3e086a4ad3f6bd3bb93037fd5e430139fa5adaa81cbbfe34103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cd2b894b33e3e086a4ad3f6bd3bb93037fd5e430139fa5adaa81cbbfe34103->enter($__internal_49cd2b894b33e3e086a4ad3f6bd3bb93037fd5e430139fa5adaa81cbbfe34103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_address.html.twig"));

        // line 1
        echo "<div class=\"two fields\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "firstName", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "lastName", array()), 'row');
        echo "
</div>
";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "company", array()), 'row');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "street", array()), 'row');
        echo "

";
        // line 8
        $this->loadTemplate("@SyliusShop/Common/Form/_countryCode.html.twig", "SyliusShopBundle:Common/Form:_address.html.twig", 8)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "countryCode", array()))));
        // line 9
        echo "
<div class=\"province-container field\" data-url=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_ajax_render_province_form");
        echo "\">
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "provinceCode", array(), "any", true, true)) {
            // line 12
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "provinceCode", array()), 'row', array("attr" => array("class" => "ui dropdown")));
            echo "
    ";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 13
($context["form"] ?? null), "provinceName", array(), "any", true, true)) {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "provinceName", array()), 'row');
            echo "
    ";
        }
        // line 16
        echo "</div>

";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "provinceCode", array(), "any", true, true)) {
            // line 19
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
            echo "
";
        }
        // line 21
        echo "
<div class=\"two fields\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "city", array()), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "postcode", array()), 'row');
        echo "
</div>
";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "phoneNumber", array()), 'row');
        echo "
";
        
        $__internal_c09b47648da4ec136f01ffe6a433d84482138e3677eb86987c28b0adc055daa6->leave($__internal_c09b47648da4ec136f01ffe6a433d84482138e3677eb86987c28b0adc055daa6_prof);

        
        $__internal_49cd2b894b33e3e086a4ad3f6bd3bb93037fd5e430139fa5adaa81cbbfe34103->leave($__internal_49cd2b894b33e3e086a4ad3f6bd3bb93037fd5e430139fa5adaa81cbbfe34103_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Form:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  90 => 24,  86 => 23,  82 => 21,  76 => 19,  74 => 18,  70 => 16,  64 => 14,  62 => 13,  57 => 12,  55 => 11,  51 => 10,  48 => 9,  46 => 8,  41 => 6,  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"two fields\">
    {{ form_row(form.firstName) }}
    {{ form_row(form.lastName) }}
</div>
{{ form_row(form.company) }}
{{ form_row(form.street) }}

{% include '@SyliusShop/Common/Form/_countryCode.html.twig' with {'form': form.countryCode} %}

<div class=\"province-container field\" data-url=\"{{ path('sylius_shop_ajax_render_province_form') }}\">
    {% if form.provinceCode is defined %}
        {{ form_row(form.provinceCode, {'attr': {'class': 'ui dropdown'}}) }}
    {% elseif form.provinceName is defined %}
        {{ form_row(form.provinceName) }}
    {% endif %}
</div>

{% if form.provinceCode is defined %}
    {{ form_errors(form) }}
{% endif %}

<div class=\"two fields\">
    {{ form_row(form.city) }}
    {{ form_row(form.postcode) }}
</div>
{{ form_row(form.phoneNumber) }}
", "SyliusShopBundle:Common/Form:_address.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Form/_address.html.twig");
    }
}
