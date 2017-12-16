<?php

/* SyliusUiBundle:Grid/Action:update.html.twig */
class __TwigTemplate_4e7472bca50219a353e14d8ab782c442e9f9070759ee2e32ac5fb618dedc365b extends Twig_Template
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
        $__internal_9bc822f536f96610cbc5ea634780a5b1d0d033c0df7da794139e4ada9d1e7b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc822f536f96610cbc5ea634780a5b1d0d033c0df7da794139e4ada9d1e7b47->enter($__internal_9bc822f536f96610cbc5ea634780a5b1d0d033c0df7da794139e4ada9d1e7b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:update.html.twig"));

        $__internal_0e04623ced611f57c6adf114bd55765b996a6819d2ceccddb533a70ceff8b574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e04623ced611f57c6adf114bd55765b996a6819d2ceccddb533a70ceff8b574->enter($__internal_0e04623ced611f57c6adf114bd55765b996a6819d2ceccddb533a70ceff8b574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:update.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Grid/Action:update.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 3, $this->getSourceContext()); })()), "requestConfiguration", array()), "getRouteName", array(0 => "update"), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 3, $this->getSourceContext()); })()), "requestConfiguration", array()), "getRouteName", array(0 => "update"), "method"))), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "id", array())))) : (array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "id", array()))))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "route", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 3, $this->getSourceContext()); })()), "requestConfiguration", array()), "getRouteName", array(0 => "update"), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 3, $this->getSourceContext()); })()), "requestConfiguration", array()), "getRouteName", array(0 => "update"), "method"))), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "parameters", array()), array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "id", array())))) : (array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "id", array())))))));
        // line 4
        echo "
";
        // line 5
        echo $context["buttons"]->macro_edit((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 5, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 5, $this->getSourceContext()); })()), "label", array()));
        echo "
";
        
        $__internal_9bc822f536f96610cbc5ea634780a5b1d0d033c0df7da794139e4ada9d1e7b47->leave($__internal_9bc822f536f96610cbc5ea634780a5b1d0d033c0df7da794139e4ada9d1e7b47_prof);

        
        $__internal_0e04623ced611f57c6adf114bd55765b996a6819d2ceccddb533a70ceff8b574->leave($__internal_0e04623ced611f57c6adf114bd55765b996a6819d2ceccddb533a70ceff8b574_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:update.html.twig";
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

{% set path = options.link.url|default(path(options.link.route|default(grid.requestConfiguration.getRouteName('update')), options.link.parameters|default({'id': data.id}))) %}

{{ buttons.edit(path, action.label) }}
", "SyliusUiBundle:Grid/Action:update.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Action/update.html.twig");
    }
}
