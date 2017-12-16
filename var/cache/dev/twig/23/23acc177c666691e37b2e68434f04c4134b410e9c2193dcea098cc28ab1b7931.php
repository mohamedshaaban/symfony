<?php

/* SyliusUiBundle:Grid/Filter:string.html.twig */
class __TwigTemplate_83a4afda22d9fe9d60c4797b0b5d82baa6c042cdbefb0b2ef13a489164c3a058 extends Twig_Template
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
        $__internal_0925bcf866e04ac19f20c6ec4ba99a1ba2ef2feece5b26e4d1fb7c9412fef5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0925bcf866e04ac19f20c6ec4ba99a1ba2ef2feece5b26e4d1fb7c9412fef5aa->enter($__internal_0925bcf866e04ac19f20c6ec4ba99a1ba2ef2feece5b26e4d1fb7c9412fef5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:string.html.twig"));

        $__internal_d9729fe88b063de886327ab5cd93d671c02e9d9f1a41e2841d125b0aa8a103de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9729fe88b063de886327ab5cd93d671c02e9d9f1a41e2841d125b0aa8a103de->enter($__internal_d9729fe88b063de886327ab5cd93d671c02e9d9f1a41e2841d125b0aa8a103de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:string.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "type", array(), "any", true, true)) {
            // line 4
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "type", array()), 'row', array("label" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 4, $this->getSourceContext()); })()), "label", array())));
            echo "
";
        }
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "value", array()), 'row', array("label" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "type", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "value", array()), "vars", array()), "label", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 6, $this->getSourceContext()); })()), "label", array())))));
        echo "
";
        
        $__internal_0925bcf866e04ac19f20c6ec4ba99a1ba2ef2feece5b26e4d1fb7c9412fef5aa->leave($__internal_0925bcf866e04ac19f20c6ec4ba99a1ba2ef2feece5b26e4d1fb7c9412fef5aa_prof);

        
        $__internal_d9729fe88b063de886327ab5cd93d671c02e9d9f1a41e2841d125b0aa8a103de->leave($__internal_d9729fe88b063de886327ab5cd93d671c02e9d9f1a41e2841d125b0aa8a103de_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% if form.type is defined %}
{{ form_row(form.type, {'label': filter.label}) }}
{% endif %}
{{ form_row(form.value, {'label': form.type is defined ? form.value.vars.label : filter.label}) }}
", "SyliusUiBundle:Grid/Filter:string.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Filter/string.html.twig");
    }
}
