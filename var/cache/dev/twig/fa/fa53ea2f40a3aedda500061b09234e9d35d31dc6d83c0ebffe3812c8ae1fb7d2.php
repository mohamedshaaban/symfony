<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_b0f296e286d1fc930108066bb213901638e8e6eb7dda2f8dedba47b985e8ea41 extends Twig_Template
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
        $__internal_c4272d598037c2b89f7ddc2dff1dbe0888bda69deea27fa46485ef2bd6ad2220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4272d598037c2b89f7ddc2dff1dbe0888bda69deea27fa46485ef2bd6ad2220->enter($__internal_c4272d598037c2b89f7ddc2dff1dbe0888bda69deea27fa46485ef2bd6ad2220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $__internal_163c3a30f6d79ceea3ab2305088108178b6f100e506dc04b37b56a9fd82af3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163c3a30f6d79ceea3ab2305088108178b6f100e506dc04b37b56a9fd82af3d6->enter($__internal_163c3a30f6d79ceea3ab2305088108178b6f100e506dc04b37b56a9fd82af3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/error500.html.twig", "TwigBundle:Exception:error500.html.twig", 1)->display($context);
        
        $__internal_c4272d598037c2b89f7ddc2dff1dbe0888bda69deea27fa46485ef2bd6ad2220->leave($__internal_c4272d598037c2b89f7ddc2dff1dbe0888bda69deea27fa46485ef2bd6ad2220_prof);

        
        $__internal_163c3a30f6d79ceea3ab2305088108178b6f100e506dc04b37b56a9fd82af3d6->leave($__internal_163c3a30f6d79ceea3ab2305088108178b6f100e506dc04b37b56a9fd82af3d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/error500.html.twig' %}
", "TwigBundle:Exception:error500.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\app/Resources/TwigBundle/views/Exception/error500.html.twig");
    }
}
