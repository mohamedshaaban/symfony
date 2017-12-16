<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_5f6a51091e5188aea9d5df9da26a3996be5f87c6847f5bb7f059b493ac4faf77 extends Twig_Template
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
        $__internal_73bbad632561c44021a8677b02c12a12bf4c4dbbd63a90ba90227895af541b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73bbad632561c44021a8677b02c12a12bf4c4dbbd63a90ba90227895af541b32->enter($__internal_73bbad632561c44021a8677b02c12a12bf4c4dbbd63a90ba90227895af541b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_1512e1e500e4a1e2ad707d2a2ec3e63b3f4f5a43452957b20c8f6e2d5795476a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1512e1e500e4a1e2ad707d2a2ec3e63b3f4f5a43452957b20c8f6e2d5795476a->enter($__internal_1512e1e500e4a1e2ad707d2a2ec3e63b3f4f5a43452957b20c8f6e2d5795476a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/error.html.twig", "TwigBundle:Exception:error.html.twig", 1)->display($context);
        
        $__internal_73bbad632561c44021a8677b02c12a12bf4c4dbbd63a90ba90227895af541b32->leave($__internal_73bbad632561c44021a8677b02c12a12bf4c4dbbd63a90ba90227895af541b32_prof);

        
        $__internal_1512e1e500e4a1e2ad707d2a2ec3e63b3f4f5a43452957b20c8f6e2d5795476a->leave($__internal_1512e1e500e4a1e2ad707d2a2ec3e63b3f4f5a43452957b20c8f6e2d5795476a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/error.html.twig' %}
", "TwigBundle:Exception:error.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
