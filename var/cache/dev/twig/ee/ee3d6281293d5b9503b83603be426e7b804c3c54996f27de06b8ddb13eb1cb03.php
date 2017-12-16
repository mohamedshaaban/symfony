<?php

/* SyliusAdminBundle:Crud/Update:_header.html.twig */
class __TwigTemplate_39f34944e7fa9291762f3705269bb863677c75d812cab787f4ead2221fbc3d47 extends Twig_Template
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
        $__internal_e2dfe001ad1590aa903532f9c618fd1d6d85c771890579a5b47e60868d860082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2dfe001ad1590aa903532f9c618fd1d6d85c771890579a5b47e60868d860082->enter($__internal_e2dfe001ad1590aa903532f9c618fd1d6d85c771890579a5b47e60868d860082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_header.html.twig"));

        $__internal_2344a1c1521d5c4df81eecd9fc554f7a466b14f5f6884c1e957909795c1afb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2344a1c1521d5c4df81eecd9fc554f7a466b14f5f6884c1e957909795c1afb98->enter($__internal_2344a1c1521d5c4df81eecd9fc554f7a466b14f5f6884c1e957909795c1afb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_header.html.twig"));

        // line 1
        echo "<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        ";
        // line 3
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array()), "@SyliusAdmin/Crud/Update/_headerTitle.html.twig")) : ("@SyliusAdmin/Crud/Update/_headerTitle.html.twig")), "SyliusAdminBundle:Crud/Update:_header.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig")) : ("@SyliusAdmin/Crud/Update/_breadcrumb.html.twig")), "SyliusAdminBundle:Crud/Update:_header.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 6, $this->getSourceContext()); })()) . ".header"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 6, $this->getSourceContext()); })()))));
        echo "
    </div>
    <div class=\"middle aligned column\">
        ";
        // line 9
        try {
            $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "toolbar", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "toolbar", array()), "@SyliusAdmin/Crud/_toolbar.html.twig")) : ("@SyliusAdmin/Crud/_toolbar.html.twig")), "SyliusAdminBundle:Crud/Update:_header.html.twig", 9)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 10
        echo "    </div>
</div>
";
        
        $__internal_e2dfe001ad1590aa903532f9c618fd1d6d85c771890579a5b47e60868d860082->leave($__internal_e2dfe001ad1590aa903532f9c618fd1d6d85c771890579a5b47e60868d860082_prof);

        
        $__internal_2344a1c1521d5c4df81eecd9fc554f7a466b14f5f6884c1e957909795c1afb98->leave($__internal_2344a1c1521d5c4df81eecd9fc554f7a466b14f5f6884c1e957909795c1afb98_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Update:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  43 => 9,  37 => 6,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        {% include configuration.vars.templates.header_title|default('@SyliusAdmin/Crud/Update/_headerTitle.html.twig') %}
        {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/Crud/Update/_breadcrumb.html.twig') %}

        {{ sonata_block_render_event(event_prefix ~ '.header', {'resource': resource}) }}
    </div>
    <div class=\"middle aligned column\">
        {% include configuration.vars.templates.toolbar|default('@SyliusAdmin/Crud/_toolbar.html.twig') ignore missing %}
    </div>
</div>
", "SyliusAdminBundle:Crud/Update:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Update/_header.html.twig");
    }
}
