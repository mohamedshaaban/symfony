<?php

/* @SyliusAdmin/Crud/Index/_header.html.twig */
class __TwigTemplate_79266363cee1f5060506c2b6e6f99424986175737e3ef771286b16fae4847b7e extends Twig_Template
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
        $__internal_7ba0498a7a1feb34409e1a6adddc445bb19059a82a50862617d571c40275582e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba0498a7a1feb34409e1a6adddc445bb19059a82a50862617d571c40275582e->enter($__internal_7ba0498a7a1feb34409e1a6adddc445bb19059a82a50862617d571c40275582e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_header.html.twig"));

        $__internal_9f40b367d0adb99f03a97174b5ad0d35582a921bbb2a7f37eb4733615787a8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f40b367d0adb99f03a97174b5ad0d35582a921bbb2a7f37eb4733615787a8fb->enter($__internal_9f40b367d0adb99f03a97174b5ad0d35582a921bbb2a7f37eb4733615787a8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_header.html.twig"));

        // line 1
        echo "<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        ";
        // line 3
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array()), "@SyliusAdmin/Crud/Index/_headerTitle.html.twig")) : ("@SyliusAdmin/Crud/Index/_headerTitle.html.twig")), "@SyliusAdmin/Crud/Index/_header.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Crud/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/Crud/Index/_breadcrumb.html.twig")), "@SyliusAdmin/Crud/Index/_header.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 6, $this->getSourceContext()); })()) . ".header"), array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 6, $this->getSourceContext()); })()))));
        echo "
    </div>

    ";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "@SyliusAdmin/Crud/Index/_header.html.twig", 9)->display($context);
        // line 10
        echo "</div>
";
        
        $__internal_7ba0498a7a1feb34409e1a6adddc445bb19059a82a50862617d571c40275582e->leave($__internal_7ba0498a7a1feb34409e1a6adddc445bb19059a82a50862617d571c40275582e_prof);

        
        $__internal_9f40b367d0adb99f03a97174b5ad0d35582a921bbb2a7f37eb4733615787a8fb->leave($__internal_9f40b367d0adb99f03a97174b5ad0d35582a921bbb2a7f37eb4733615787a8fb_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Index/_header.html.twig";
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
", "@SyliusAdmin/Crud/Index/_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Index\\_header.html.twig");
    }
}
