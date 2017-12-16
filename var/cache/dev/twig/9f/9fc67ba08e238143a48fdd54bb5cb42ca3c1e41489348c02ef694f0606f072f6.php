<?php

/* SyliusAdminBundle:ExchangeRate:_form.html.twig */
class __TwigTemplate_22557e4e15ef4885fb52422546802b522eceb7dc45de983ed952ffda52819719 extends Twig_Template
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
        $__internal_f5648ae38e38dd81bbabb92d2b177603041bc6b05afc3905039cf55aa2a3fef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5648ae38e38dd81bbabb92d2b177603041bc6b05afc3905039cf55aa2a3fef0->enter($__internal_f5648ae38e38dd81bbabb92d2b177603041bc6b05afc3905039cf55aa2a3fef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate:_form.html.twig"));

        $__internal_f9e07ee2c339ca344f07ea520864802e1eb9c7f7aee50972441f61b1f20fa8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e07ee2c339ca344f07ea520864802e1eb9c7f7aee50972441f61b1f20fa8ad->enter($__internal_f9e07ee2c339ca344f07ea520864802e1eb9c7f7aee50972441f61b1f20fa8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'errors');
        echo "
<div class=\"three fields\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "sourceCurrency", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "targetCurrency", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "ratio", array()), 'row');
        echo "
</div>
";
        
        $__internal_f5648ae38e38dd81bbabb92d2b177603041bc6b05afc3905039cf55aa2a3fef0->leave($__internal_f5648ae38e38dd81bbabb92d2b177603041bc6b05afc3905039cf55aa2a3fef0_prof);

        
        $__internal_f9e07ee2c339ca344f07ea520864802e1eb9c7f7aee50972441f61b1f20fa8ad->leave($__internal_f9e07ee2c339ca344f07ea520864802e1eb9c7f7aee50972441f61b1f20fa8ad_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ExchangeRate:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  30 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}
<div class=\"three fields\">
    {{ form_row(form.sourceCurrency) }}
    {{ form_row(form.targetCurrency) }}
    {{ form_row(form.ratio) }}
</div>
", "SyliusAdminBundle:ExchangeRate:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ExchangeRate/_form.html.twig");
    }
}
