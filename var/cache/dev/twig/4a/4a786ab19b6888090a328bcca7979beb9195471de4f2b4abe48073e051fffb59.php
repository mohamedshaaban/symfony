<?php

/* SyliusUiBundle:Grid/Filter:exists.html.twig */
class __TwigTemplate_0277286c65462590013c62b09c7678018b524467950a444d799a08c558931e84 extends Twig_Template
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
        $__internal_2b8c3d12a5b8a1a75287340969da3943013e1986fea212dbdef268d5e461e67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8c3d12a5b8a1a75287340969da3943013e1986fea212dbdef268d5e461e67f->enter($__internal_2b8c3d12a5b8a1a75287340969da3943013e1986fea212dbdef268d5e461e67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:exists.html.twig"));

        $__internal_8a17e0792be183a349e3ba0fe74ae7e157d3f1d0d376a2989e206ef22289c327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a17e0792be183a349e3ba0fe74ae7e157d3f1d0d376a2989e206ef22289c327->enter($__internal_8a17e0792be183a349e3ba0fe74ae7e157d3f1d0d376a2989e206ef22289c327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:exists.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 3, $this->getSourceContext()); })()), "label", array()))));
        echo "
";
        
        $__internal_2b8c3d12a5b8a1a75287340969da3943013e1986fea212dbdef268d5e461e67f->leave($__internal_2b8c3d12a5b8a1a75287340969da3943013e1986fea212dbdef268d5e461e67f_prof);

        
        $__internal_8a17e0792be183a349e3ba0fe74ae7e157d3f1d0d376a2989e206ef22289c327->leave($__internal_8a17e0792be183a349e3ba0fe74ae7e157d3f1d0d376a2989e206ef22289c327_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:exists.html.twig";
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
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{{ form_row(form, {'label': filter.label|trans}) }}
", "SyliusUiBundle:Grid/Filter:exists.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Filter/exists.html.twig");
    }
}
