<?php

/* SyliusUiBundle:Grid/Filter:boolean.html.twig */
class __TwigTemplate_f19ba615693759f8765763cdf494cd64d6bc2930c3923c4306dea9177d2a81c0 extends Twig_Template
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
        $__internal_3ee012dc95cceeacb149c0da6bcc87025856f78e350509fa6a6d13a9e32031d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee012dc95cceeacb149c0da6bcc87025856f78e350509fa6a6d13a9e32031d9->enter($__internal_3ee012dc95cceeacb149c0da6bcc87025856f78e350509fa6a6d13a9e32031d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:boolean.html.twig"));

        $__internal_a9e1d3614ecdcd828112f77d2e18b53247809c893e792a3fe0cc62416f618527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e1d3614ecdcd828112f77d2e18b53247809c893e792a3fe0cc62416f618527->enter($__internal_a9e1d3614ecdcd828112f77d2e18b53247809c893e792a3fe0cc62416f618527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:boolean.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'row', array("label" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 3, $this->getSourceContext()); })()), "label", array())));
        echo "
";
        
        $__internal_3ee012dc95cceeacb149c0da6bcc87025856f78e350509fa6a6d13a9e32031d9->leave($__internal_3ee012dc95cceeacb149c0da6bcc87025856f78e350509fa6a6d13a9e32031d9_prof);

        
        $__internal_a9e1d3614ecdcd828112f77d2e18b53247809c893e792a3fe0cc62416f618527->leave($__internal_a9e1d3614ecdcd828112f77d2e18b53247809c893e792a3fe0cc62416f618527_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:boolean.html.twig";
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

{{ form_row(form, {'label': filter.label}) }}
", "SyliusUiBundle:Grid/Filter:boolean.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Filter/boolean.html.twig");
    }
}
