<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_55dd130222862568fd5e2142b08dae97a2d3d6e887f99ad221caca5715a9cb23 extends Twig_Template
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
        $__internal_46c087f3af82adbdd66033dac96b3f0a8840a74f366fe4195cd1d3c7c0f4024c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c087f3af82adbdd66033dac96b3f0a8840a74f366fe4195cd1d3c7c0f4024c->enter($__internal_46c087f3af82adbdd66033dac96b3f0a8840a74f366fe4195cd1d3c7c0f4024c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $__internal_91e9b7d1804ccbce816b473f964a24f84075b2ec203f91e139fef6bfd37cd9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e9b7d1804ccbce816b473f964a24f84075b2ec203f91e139fef6bfd37cd9ab->enter($__internal_91e9b7d1804ccbce816b473f964a24f84075b2ec203f91e139fef6bfd37cd9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/error404.html.twig", "TwigBundle:Exception:error404.html.twig", 1)->display($context);
        
        $__internal_46c087f3af82adbdd66033dac96b3f0a8840a74f366fe4195cd1d3c7c0f4024c->leave($__internal_46c087f3af82adbdd66033dac96b3f0a8840a74f366fe4195cd1d3c7c0f4024c_prof);

        
        $__internal_91e9b7d1804ccbce816b473f964a24f84075b2ec203f91e139fef6bfd37cd9ab->leave($__internal_91e9b7d1804ccbce816b473f964a24f84075b2ec203f91e139fef6bfd37cd9ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/error404.html.twig' %}
", "TwigBundle:Exception:error404.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
