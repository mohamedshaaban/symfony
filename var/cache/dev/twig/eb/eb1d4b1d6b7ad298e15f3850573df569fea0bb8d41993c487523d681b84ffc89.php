<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_05d8f7613b4b767e83744bbdf779677aa84051ff05d32a700eaa0bf2096fbf4c extends Twig_Template
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
        $__internal_0cb8a52330e0bbafe90120d25b1e29bb26b9794ebbac067b01b4dae030a52e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb8a52330e0bbafe90120d25b1e29bb26b9794ebbac067b01b4dae030a52e38->enter($__internal_0cb8a52330e0bbafe90120d25b1e29bb26b9794ebbac067b01b4dae030a52e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0b1a1943aa2732bef64dda2005ecb4f7dbc8ef8311424a7aae676ceb2650e799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1a1943aa2732bef64dda2005ecb4f7dbc8ef8311424a7aae676ceb2650e799->enter($__internal_0b1a1943aa2732bef64dda2005ecb4f7dbc8ef8311424a7aae676ceb2650e799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0cb8a52330e0bbafe90120d25b1e29bb26b9794ebbac067b01b4dae030a52e38->leave($__internal_0cb8a52330e0bbafe90120d25b1e29bb26b9794ebbac067b01b4dae030a52e38_prof);

        
        $__internal_0b1a1943aa2732bef64dda2005ecb4f7dbc8ef8311424a7aae676ceb2650e799->leave($__internal_0b1a1943aa2732bef64dda2005ecb4f7dbc8ef8311424a7aae676ceb2650e799_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
