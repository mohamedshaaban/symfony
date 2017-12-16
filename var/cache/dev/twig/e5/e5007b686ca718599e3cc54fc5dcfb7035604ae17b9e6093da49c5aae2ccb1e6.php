<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_afad0056d99015941b4540417a73c181517133e08493f98e887d5b3894316692 extends Twig_Template
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
        $__internal_9fab762dc857902135e84ce0bcdd154d518c681392b475f1ed1eb7f248167bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fab762dc857902135e84ce0bcdd154d518c681392b475f1ed1eb7f248167bcb->enter($__internal_9fab762dc857902135e84ce0bcdd154d518c681392b475f1ed1eb7f248167bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_858ed0f7a69e6ae66bb8c7f6bba4729eb30e425ae560cbb1e017d7c23837e641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858ed0f7a69e6ae66bb8c7f6bba4729eb30e425ae560cbb1e017d7c23837e641->enter($__internal_858ed0f7a69e6ae66bb8c7f6bba4729eb30e425ae560cbb1e017d7c23837e641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_9fab762dc857902135e84ce0bcdd154d518c681392b475f1ed1eb7f248167bcb->leave($__internal_9fab762dc857902135e84ce0bcdd154d518c681392b475f1ed1eb7f248167bcb_prof);

        
        $__internal_858ed0f7a69e6ae66bb8c7f6bba4729eb30e425ae560cbb1e017d7c23837e641->leave($__internal_858ed0f7a69e6ae66bb8c7f6bba4729eb30e425ae560cbb1e017d7c23837e641_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
