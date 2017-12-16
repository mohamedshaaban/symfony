<?php

/* SyliusAdminBundle:Crud/Index:_header.html.twig */
class __TwigTemplate_b5e8e50459ff34e16b0f91da65f2d6932032a6b186eb0bd4fc97a689df4d3873 extends Twig_Template
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
        $__internal_7b5c243223d37a4f6f94051210bf4a1a545df863da1e659abccb47b00a3d278f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5c243223d37a4f6f94051210bf4a1a545df863da1e659abccb47b00a3d278f->enter($__internal_7b5c243223d37a4f6f94051210bf4a1a545df863da1e659abccb47b00a3d278f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_header.html.twig"));

        $__internal_2159410447b3c9aaaa5b615d11bb8bf3f92ddcf106494667d2d5d91be71aa401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2159410447b3c9aaaa5b615d11bb8bf3f92ddcf106494667d2d5d91be71aa401->enter($__internal_2159410447b3c9aaaa5b615d11bb8bf3f92ddcf106494667d2d5d91be71aa401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_header.html.twig"));

        // line 1
        echo "<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        ";
        // line 3
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array()), "@SyliusAdmin/Crud/Index/_headerTitle.html.twig")) : ("@SyliusAdmin/Crud/Index/_headerTitle.html.twig")), "SyliusAdminBundle:Crud/Index:_header.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Crud/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/Crud/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:Crud/Index:_header.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 6, $this->getSourceContext()); })()) . ".header"), array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 6, $this->getSourceContext()); })()))));
        echo "
    </div>

    ";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:Crud/Index:_header.html.twig", 9)->display($context);
        // line 10
        echo "</div>
";
        
        $__internal_7b5c243223d37a4f6f94051210bf4a1a545df863da1e659abccb47b00a3d278f->leave($__internal_7b5c243223d37a4f6f94051210bf4a1a545df863da1e659abccb47b00a3d278f_prof);

        
        $__internal_2159410447b3c9aaaa5b615d11bb8bf3f92ddcf106494667d2d5d91be71aa401->leave($__internal_2159410447b3c9aaaa5b615d11bb8bf3f92ddcf106494667d2d5d91be71aa401_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  43 => 9,  37 => 6,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        {% include configuration.vars.templates.header_title|default('@SyliusAdmin/Crud/Index/_headerTitle.html.twig') %}
        {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/Crud/Index/_breadcrumb.html.twig') %}

        {{ sonata_block_render_event(event_prefix ~ '.header', {'resources': resources}) }}
    </div>

    {% include '@SyliusAdmin/Crud/Index/_actions.html.twig' %}
</div>
", "SyliusAdminBundle:Crud/Index:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Index/_header.html.twig");
    }
}
