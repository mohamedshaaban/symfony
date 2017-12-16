<?php

/* SyliusUiBundle:Grid/Filter:money.html.twig */
class __TwigTemplate_04161e63b9a1dc3d16ddf1778d4036093352bf3c498c07c0f23ace6a37696233 extends Twig_Template
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
        $__internal_be0c51505251244ff7f70bce2f082d7147190ee970ff1166b0912b6d13dd651b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0c51505251244ff7f70bce2f082d7147190ee970ff1166b0912b6d13dd651b->enter($__internal_be0c51505251244ff7f70bce2f082d7147190ee970ff1166b0912b6d13dd651b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:money.html.twig"));

        $__internal_2b5b135ee05d19d61f1a8a06597a1814212eaa2d291af3825530a07a657ca366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5b135ee05d19d61f1a8a06597a1814212eaa2d291af3825530a07a657ca366->enter($__internal_2b5b135ee05d19d61f1a8a06597a1814212eaa2d291af3825530a07a657ca366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:money.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "greaterThan", array()), 'row', array("label" => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 3, $this->getSourceContext()); })()), "label", array())) . " | ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "greaterThan", array()), "vars", array()), "label", array())))));
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "lessThan", array()), 'row');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "currency", array()), 'row');
        echo "
";
        
        $__internal_be0c51505251244ff7f70bce2f082d7147190ee970ff1166b0912b6d13dd651b->leave($__internal_be0c51505251244ff7f70bce2f082d7147190ee970ff1166b0912b6d13dd651b_prof);

        
        $__internal_2b5b135ee05d19d61f1a8a06597a1814212eaa2d291af3825530a07a657ca366->leave($__internal_2b5b135ee05d19d61f1a8a06597a1814212eaa2d291af3825530a07a657ca366_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:money.html.twig";
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
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{{ form_row(form.greaterThan, {'label': filter.label|trans ~ ' | ' ~ form.greaterThan.vars.label|trans}) }}
{{ form_row(form.lessThan) }}
{{ form_row(form.currency) }}
", "SyliusUiBundle:Grid/Filter:money.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Filter/money.html.twig");
    }
}
