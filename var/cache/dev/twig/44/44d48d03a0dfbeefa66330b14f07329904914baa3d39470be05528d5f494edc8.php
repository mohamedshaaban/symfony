<?php

/* SyliusUiBundle:Grid/Field:label.html.twig */
class __TwigTemplate_fb5935fd8f3be001fb78b8d0627e2cdcde9531ddcc27473449c7f951ed0ebe58 extends Twig_Template
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
        $__internal_bba132bc7fd1d558711c5478a32c8d962376ecd818f7a2585248b5372304160f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba132bc7fd1d558711c5478a32c8d962376ecd818f7a2585248b5372304160f->enter($__internal_bba132bc7fd1d558711c5478a32c8d962376ecd818f7a2585248b5372304160f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:label.html.twig"));

        $__internal_a5b8a5f0049a4a35dba332e54a2b4eeeee65371c2f55643d1d8b50e26d44c69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b8a5f0049a4a35dba332e54a2b4eeeee65371c2f55643d1d8b50e26d44c69b->enter($__internal_a5b8a5f0049a4a35dba332e54a2b4eeeee65371c2f55643d1d8b50e26d44c69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:label.html.twig"));

        // line 1
        $context["value"] = ("sylius.ui." . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()));
        // line 2
        echo "
";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "vars", array(), "any", false, true), "labels", array(), "any", true, true)) {
            // line 4
            echo "    ";
            $this->loadTemplate(array(0 => (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 4, $this->getSourceContext()); })()), "vars", array()), "labels", array()) . "/") . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 4, $this->getSourceContext()); })())) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"), "SyliusUiBundle:Grid/Field:label.html.twig", 4)->display(array_merge($context, array("value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()))));
        } else {
            // line 6
            echo "    ";
            $this->loadTemplate("@SyliusUi/Label/_default.html.twig", "SyliusUiBundle:Grid/Field:label.html.twig", 6)->display(array_merge($context, array("value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 6, $this->getSourceContext()); })()))));
        }
        
        $__internal_bba132bc7fd1d558711c5478a32c8d962376ecd818f7a2585248b5372304160f->leave($__internal_bba132bc7fd1d558711c5478a32c8d962376ecd818f7a2585248b5372304160f_prof);

        
        $__internal_a5b8a5f0049a4a35dba332e54a2b4eeeee65371c2f55643d1d8b50e26d44c69b->leave($__internal_a5b8a5f0049a4a35dba332e54a2b4eeeee65371c2f55643d1d8b50e26d44c69b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = 'sylius.ui.' ~ data %}

{% if options.vars.labels is defined %}
    {% include [(options.vars.labels ~ '/' ~ data ~ '.html.twig'), '@SyliusUi/Label/_default.html.twig'] with {'value': value} %}
{% else %}
    {% include '@SyliusUi/Label/_default.html.twig' with {'value': value} %}
{% endif %}
", "SyliusUiBundle:Grid/Field:label.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/label.html.twig");
    }
}
