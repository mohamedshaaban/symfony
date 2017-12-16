<?php

/* SyliusAdminBundle:Order/Grid/Field:channel.html.twig */
class __TwigTemplate_750c168e78a2c696b96a1ab68dd8ab06dab8556aed2ef900085092e1efe937a6 extends Twig_Template
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
        $__internal_be9e0715d5c3d664b58829b2d09d834c86ddd9e7cb5d0167fd79c452f4f44594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9e0715d5c3d664b58829b2d09d834c86ddd9e7cb5d0167fd79c452f4f44594->enter($__internal_be9e0715d5c3d664b58829b2d09d834c86ddd9e7cb5d0167fd79c452f4f44594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:channel.html.twig"));

        $__internal_1a225bfe14162a44de94222973976de47576e86dab7bc027f0756d06c87098cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a225bfe14162a44de94222973976de47576e86dab7bc027f0756d06c87098cc->enter($__internal_1a225bfe14162a44de94222973976de47576e86dab7bc027f0756d06c87098cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:channel.html.twig"));

        // line 1
        echo "<span class=\"ui small horizontal circular label\" style=\"background-color: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "color", array()), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo "
";
        
        $__internal_be9e0715d5c3d664b58829b2d09d834c86ddd9e7cb5d0167fd79c452f4f44594->leave($__internal_be9e0715d5c3d664b58829b2d09d834c86ddd9e7cb5d0167fd79c452f4f44594_prof);

        
        $__internal_1a225bfe14162a44de94222973976de47576e86dab7bc027f0756d06c87098cc->leave($__internal_1a225bfe14162a44de94222973976de47576e86dab7bc027f0756d06c87098cc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Grid/Field:channel.html.twig";
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
        return new Twig_Source("<span class=\"ui small horizontal circular label\" style=\"background-color: {{ data.color }}\"></span> {{ data.code }}
", "SyliusAdminBundle:Order/Grid/Field:channel.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Grid/Field/channel.html.twig");
    }
}
