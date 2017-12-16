<?php

/* SyliusAdminBundle:Channel:_form.html.twig */
class __TwigTemplate_7e9f12bb6f2b06ff4ed23a6bb4cb96389265bf6c4e31665f05ccf88a56bdb7eb extends Twig_Template
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
        $__internal_142859ef785acbb62cd996dec98cfa42770e817c0772e40815efefa609b1f024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142859ef785acbb62cd996dec98cfa42770e817c0772e40815efefa609b1f024->enter($__internal_142859ef785acbb62cd996dec98cfa42770e817c0772e40815efefa609b1f024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel:_form.html.twig"));

        $__internal_6dc63fd375d5097bcf29665e9bb8c7cb1258f7d5771906a997accf1cbbdef535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc63fd375d5097bcf29665e9bb8c7cb1258f7d5771906a997accf1cbbdef535->enter($__internal_6dc63fd375d5097bcf29665e9bb8c7cb1258f7d5771906a997accf1cbbdef535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'errors');
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'errors');
        echo "
            <div class=\"two fields\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
            </div>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "description", array()), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "enabled", array()), 'row');
        echo "
            <div class=\"two fields\">
                <div class=\"field\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "hostname", array()), 'label');
        echo "
                    <div class=\"ui labeled input\">
                        <div class=\"ui label\">http://</div>
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "hostname", array()), 'widget');
        echo "
                    </div>
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "hostname", array()), 'errors');
        echo "
                </div>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "contactEmail", array()), 'row');
        echo "
            </div>
            <div class=\"two fields\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "color", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "themeName", array()), 'row');
        echo "
            </div>
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "locales", array()), 'row');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "defaultLocale", array()), 'row');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "currencies", array()), 'row');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "baseCurrency", array()), 'row');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "defaultTaxZone", array()), 'row');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "taxCalculationStrategy", array()), 'row');
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "skippingShippingStepAllowed", array()), 'row');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "skippingPaymentStepAllowed", array()), 'row');
        echo "
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "accountVerificationRequired", array()), 'row');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_142859ef785acbb62cd996dec98cfa42770e817c0772e40815efefa609b1f024->leave($__internal_142859ef785acbb62cd996dec98cfa42770e817c0772e40815efefa609b1f024_prof);

        
        $__internal_6dc63fd375d5097bcf29665e9bb8c7cb1258f7d5771906a997accf1cbbdef535->leave($__internal_6dc63fd375d5097bcf29665e9bb8c7cb1258f7d5771906a997accf1cbbdef535_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Channel:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  82 => 25,  78 => 24,  72 => 21,  67 => 19,  62 => 17,  56 => 14,  50 => 11,  46 => 10,  41 => 8,  37 => 7,  32 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ form_errors(form) }}
            <div class=\"two fields\">
                {{ form_row(form.code) }}
                {{ form_row(form.name) }}
            </div>
            {{ form_row(form.description) }}
            {{ form_row(form.enabled) }}
            <div class=\"two fields\">
                <div class=\"field\">
                    {{ form_label(form.hostname) }}
                    <div class=\"ui labeled input\">
                        <div class=\"ui label\">http://</div>
                        {{ form_widget(form.hostname) }}
                    </div>
                    {{ form_errors(form.hostname) }}
                </div>
                {{ form_row(form.contactEmail) }}
            </div>
            <div class=\"two fields\">
                {{ form_row(form.color) }}
                {{ form_row(form.themeName) }}
            </div>
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ form_row(form.locales) }}
            {{ form_row(form.defaultLocale) }}
            {{ form_row(form.currencies) }}
            {{ form_row(form.baseCurrency) }}
            {{ form_row(form.defaultTaxZone) }}
            {{ form_row(form.taxCalculationStrategy) }}
            {{ form_row(form.skippingShippingStepAllowed) }}
            {{ form_row(form.skippingPaymentStepAllowed) }}
            {{ form_row(form.accountVerificationRequired) }}
        </div>
    </div>
</div>
", "SyliusAdminBundle:Channel:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Channel/_form.html.twig");
    }
}
