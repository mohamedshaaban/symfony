<?php

/* SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig */
class __TwigTemplate_9767b2f6ea11d5299c8e9f1aa307dd80f338938a61acea77881b8faabb3149ed extends Twig_Template
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
        $__internal_270fd8fb52a864576e33a31b7742d855bfc7c1afadc17e84ca673e3c9976f930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270fd8fb52a864576e33a31b7742d855bfc7c1afadc17e84ca673e3c9976f930->enter($__internal_270fd8fb52a864576e33a31b7742d855bfc7c1afadc17e84ca673e3c9976f930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig"));

        $__internal_2ecefe7f3adf5aa47ec872784a5fb1e7dbdfd974ab5c89c260dd0d22c4e3050f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecefe7f3adf5aa47ec872784a5fb1e7dbdfd974ab5c89c260dd0d22c4e3050f->enter($__internal_2ecefe7f3adf5aa47ec872784a5fb1e7dbdfd974ab5c89c260dd0d22c4e3050f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["headers"]->macro_default(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 3, $this->getSourceContext()); })()), "product", array()), "name", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "plus")) : ("plus")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })()))) : ((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })())))));
        echo "
";
        
        $__internal_270fd8fb52a864576e33a31b7742d855bfc7c1afadc17e84ca673e3c9976f930->leave($__internal_270fd8fb52a864576e33a31b7742d855bfc7c1afadc17e84ca673e3c9976f930_prof);

        
        $__internal_2ecefe7f3adf5aa47ec872784a5fb1e7dbdfd974ab5c89c260dd0d22c4e3050f->leave($__internal_2ecefe7f3adf5aa47ec872784a5fb1e7dbdfd974ab5c89c260dd0d22c4e3050f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/headers.html.twig' as headers %}

{{ headers.default(resource.product.name, configuration.vars.icon|default('plus'), configuration.vars.subheader|default(header)|trans) }}
", "SyliusAdminBundle:ProductVariant/Create:_headerTitle.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Create/_headerTitle.html.twig");
    }
}
