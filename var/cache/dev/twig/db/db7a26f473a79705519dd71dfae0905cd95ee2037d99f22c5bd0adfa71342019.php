<?php

/* SyliusUiBundle:Grid/Action:create.html.twig */
class __TwigTemplate_ef82150724f0306c5e1fcf983a5aad74a6abfca630e3fefe621aaf29eda6cf66 extends Twig_Template
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
        $__internal_f4d11fe2a615bcd81c02fa513b032d971f0cee71bc04203ffc1c613f9d0d21b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d11fe2a615bcd81c02fa513b032d971f0cee71bc04203ffc1c613f9d0d21b3->enter($__internal_f4d11fe2a615bcd81c02fa513b032d971f0cee71bc04203ffc1c613f9d0d21b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:create.html.twig"));

        $__internal_c37f5374fb49363cdd4f09c1a04e91176d5698874e6eb18d9f6b64a2e286f44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37f5374fb49363cdd4f09c1a04e91176d5698874e6eb18d9f6b64a2e286f44d->enter($__internal_c37f5374fb49363cdd4f09c1a04e91176d5698874e6eb18d9f6b64a2e286f44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:create.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Grid/Action:create.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 3, $this->getSourceContext()); })()), "requestConfiguration", array()), "getRouteName", array(0 => "create"), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 3, $this->getSourceContext()); })()), "requestConfiguration", array()), "getRouteName", array(0 => "create"), "method"))), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array())) : (array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 3, $this->getSourceContext()); })()), "requestConfiguration", array()), "getRouteName", array(0 => "create"), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 3, $this->getSourceContext()); })()), "requestConfiguration", array()), "getRouteName", array(0 => "create"), "method"))), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array())) : (array())))));
        // line 4
        echo "
";
        // line 5
        echo $context["buttons"]->macro_create((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 5, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 5, $this->getSourceContext()); })()), "label", array()));
        echo "
";
        
        $__internal_f4d11fe2a615bcd81c02fa513b032d971f0cee71bc04203ffc1c613f9d0d21b3->leave($__internal_f4d11fe2a615bcd81c02fa513b032d971f0cee71bc04203ffc1c613f9d0d21b3_prof);

        
        $__internal_c37f5374fb49363cdd4f09c1a04e91176d5698874e6eb18d9f6b64a2e286f44d->leave($__internal_c37f5374fb49363cdd4f09c1a04e91176d5698874e6eb18d9f6b64a2e286f44d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% set path = options.link.url|default(path(options.link.route|default(grid.requestConfiguration.getRouteName('create')), options.link.parameters|default([]))) %}

{{ buttons.create(path, action.label) }}
", "SyliusUiBundle:Grid/Action:create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Action/create.html.twig");
    }
}
