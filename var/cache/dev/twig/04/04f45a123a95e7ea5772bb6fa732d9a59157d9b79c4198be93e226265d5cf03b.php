<?php

/* SyliusAdminBundle:CustomerGroup:_form.html.twig */
class __TwigTemplate_415e0ad01d71ef9b6bc0dfc965684a360892ca16a574bd3a8951b4ae601688a6 extends Twig_Template
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
        $__internal_4a1a564f849ae2af7cf2de7f7d834c719267ae93515e01eab391c6d39a5503a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1a564f849ae2af7cf2de7f7d834c719267ae93515e01eab391c6d39a5503a7->enter($__internal_4a1a564f849ae2af7cf2de7f7d834c719267ae93515e01eab391c6d39a5503a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:CustomerGroup:_form.html.twig"));

        $__internal_2a3ac9b009e63de5cd0417c2b35219e2f250c90803afcc64c5db456e250ff984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3ac9b009e63de5cd0417c2b35219e2f250c90803afcc64c5db456e250ff984->enter($__internal_2a3ac9b009e63de5cd0417c2b35219e2f250c90803afcc64c5db456e250ff984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:CustomerGroup:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'errors');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
";
        
        $__internal_4a1a564f849ae2af7cf2de7f7d834c719267ae93515e01eab391c6d39a5503a7->leave($__internal_4a1a564f849ae2af7cf2de7f7d834c719267ae93515e01eab391c6d39a5503a7_prof);

        
        $__internal_2a3ac9b009e63de5cd0417c2b35219e2f250c90803afcc64c5db456e250ff984->leave($__internal_2a3ac9b009e63de5cd0417c2b35219e2f250c90803afcc64c5db456e250ff984_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:CustomerGroup:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}
{{ form_row(form.code) }}
{{ form_row(form.name) }}
", "SyliusAdminBundle:CustomerGroup:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/CustomerGroup/_form.html.twig");
    }
}
