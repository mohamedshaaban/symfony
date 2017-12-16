<?php

/* SyliusUiBundle:Grid/Field:percent.html.twig */
class __TwigTemplate_9d45dd13a4db5ce96aff0a536b4679da9319da635a90216477f6a0d632e57b34 extends Twig_Template
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
        $__internal_e1114b8f661f8352abc084fb84723e9e2bf7cd266ef8d59307925a2527a5c2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1114b8f661f8352abc084fb84723e9e2bf7cd266ef8d59307925a2527a5c2e1->enter($__internal_e1114b8f661f8352abc084fb84723e9e2bf7cd266ef8d59307925a2527a5c2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:percent.html.twig"));

        $__internal_9357cd5475429220ac8e49fec6e3ae4e5c4a87834cdeae4d9a00740cfbeebbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9357cd5475429220ac8e49fec6e3ae4e5c4a87834cdeae4d9a00740cfbeebbd4->enter($__internal_9357cd5475429220ac8e49fec6e3ae4e5c4a87834cdeae4d9a00740cfbeebbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:percent.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, ((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()) * twig_number_format_filter($this->env, 100, 2)), "html", null, true);
        echo "%
";
        
        $__internal_e1114b8f661f8352abc084fb84723e9e2bf7cd266ef8d59307925a2527a5c2e1->leave($__internal_e1114b8f661f8352abc084fb84723e9e2bf7cd266ef8d59307925a2527a5c2e1_prof);

        
        $__internal_9357cd5475429220ac8e49fec6e3ae4e5c4a87834cdeae4d9a00740cfbeebbd4->leave($__internal_9357cd5475429220ac8e49fec6e3ae4e5c4a87834cdeae4d9a00740cfbeebbd4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:percent.html.twig";
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
        return new Twig_Source("{{ data * 100 |number_format(2) }}%
", "SyliusUiBundle:Grid/Field:percent.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/percent.html.twig");
    }
}
