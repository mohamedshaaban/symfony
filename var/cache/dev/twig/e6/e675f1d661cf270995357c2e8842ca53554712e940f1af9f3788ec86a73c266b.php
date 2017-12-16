<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_28baeceb5eb35f255a8f937e0801673cbd1c57e31ea939daa0f6b64cadd6a621 extends Twig_Template
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
        $__internal_9de2cb26d0b3e023755fac7bf5d2c003ca0c4ebb19b0cf62e4c30471d0576761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de2cb26d0b3e023755fac7bf5d2c003ca0c4ebb19b0cf62e4c30471d0576761->enter($__internal_9de2cb26d0b3e023755fac7bf5d2c003ca0c4ebb19b0cf62e4c30471d0576761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9d728ed0914046d37fa9f16ffb649ad1a9b0b5fb6afff8664d0e6301de62eb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d728ed0914046d37fa9f16ffb649ad1a9b0b5fb6afff8664d0e6301de62eb93->enter($__internal_9d728ed0914046d37fa9f16ffb649ad1a9b0b5fb6afff8664d0e6301de62eb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9de2cb26d0b3e023755fac7bf5d2c003ca0c4ebb19b0cf62e4c30471d0576761->leave($__internal_9de2cb26d0b3e023755fac7bf5d2c003ca0c4ebb19b0cf62e4c30471d0576761_prof);

        
        $__internal_9d728ed0914046d37fa9f16ffb649ad1a9b0b5fb6afff8664d0e6301de62eb93->leave($__internal_9d728ed0914046d37fa9f16ffb649ad1a9b0b5fb6afff8664d0e6301de62eb93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
