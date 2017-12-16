<?php

/* SyliusAdminBundle:ProductAssociationType:_form.html.twig */
class __TwigTemplate_ed1adfdd9cf3fbaf0ebc1f23f725f3ecd9d69dca37a89d800e1cff85c38d8c53 extends Twig_Template
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
        $__internal_62b0431ba417972d5681df07ad46009f0753fff08237e17f8877557cf33570ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b0431ba417972d5681df07ad46009f0753fff08237e17f8877557cf33570ec->enter($__internal_62b0431ba417972d5681df07ad46009f0753fff08237e17f8877557cf33570ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAssociationType:_form.html.twig"));

        $__internal_f2b72555072b1b0d273b15e200939d05d261c8895c31a00d52b04be4cdd15d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b72555072b1b0d273b15e200939d05d261c8895c31a00d52b04be4cdd15d1d->enter($__internal_f2b72555072b1b0d273b15e200939d05d261c8895c31a00d52b04be4cdd15d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAssociationType:_form.html.twig"));

        // line 1
        $context["__internal_b59e2145e95ffb907e430419c386ff74ebc8bd37b80b434c53fc0e2769ff2ae7"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductAssociationType:_form.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'errors');
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
";
        // line 5
        echo $context["__internal_b59e2145e95ffb907e430419c386ff74ebc8bd37b80b434c53fc0e2769ff2ae7"]->macro_translationForm(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "translations", array()));
        echo "
";
        
        $__internal_62b0431ba417972d5681df07ad46009f0753fff08237e17f8877557cf33570ec->leave($__internal_62b0431ba417972d5681df07ad46009f0753fff08237e17f8877557cf33570ec_prof);

        
        $__internal_f2b72555072b1b0d273b15e200939d05d261c8895c31a00d52b04be4cdd15d1d->leave($__internal_f2b72555072b1b0d273b15e200939d05d261c8895c31a00d52b04be4cdd15d1d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductAssociationType:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

{{ form_errors(form) }}
{{ form_row(form.code) }}
{{ translationForm(form.translations) }}
", "SyliusAdminBundle:ProductAssociationType:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductAssociationType/_form.html.twig");
    }
}
