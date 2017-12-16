<?php

/* @SyliusUi/Grid/Action/create.html.twig */
class __TwigTemplate_fa24fbd15a628fd842d4b0922e4abcff8ff421cd161c3b0a093360e186590f41 extends Twig_Template
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
        $__internal_5f1f2448faedc330c21767d5af63302bb4cda495a59f44aed9c3f753e1e5847a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1f2448faedc330c21767d5af63302bb4cda495a59f44aed9c3f753e1e5847a->enter($__internal_5f1f2448faedc330c21767d5af63302bb4cda495a59f44aed9c3f753e1e5847a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Action/create.html.twig"));

        $__internal_12b2ff0cc5ccd0757fe5d7a754c5b2c59122045c3f296915a79331cb40e77982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b2ff0cc5ccd0757fe5d7a754c5b2c59122045c3f296915a79331cb40e77982->enter($__internal_12b2ff0cc5ccd0757fe5d7a754c5b2c59122045c3f296915a79331cb40e77982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Action/create.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusUi/Grid/Action/create.html.twig", 1);
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
        
        $__internal_5f1f2448faedc330c21767d5af63302bb4cda495a59f44aed9c3f753e1e5847a->leave($__internal_5f1f2448faedc330c21767d5af63302bb4cda495a59f44aed9c3f753e1e5847a_prof);

        
        $__internal_12b2ff0cc5ccd0757fe5d7a754c5b2c59122045c3f296915a79331cb40e77982->leave($__internal_12b2ff0cc5ccd0757fe5d7a754c5b2c59122045c3f296915a79331cb40e77982_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Action/create.html.twig";
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
", "@SyliusUi/Grid/Action/create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Grid\\Action\\create.html.twig");
    }
}
