<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_53a7963e0e849a1dcf89fe2ea93989670587af3a9007f664834380db4934e68a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d1659ddaec48fc5ebc778f39eb9f05d6d7819f8ae7fd4647f3c6d28d59a6b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1659ddaec48fc5ebc778f39eb9f05d6d7819f8ae7fd4647f3c6d28d59a6b67->enter($__internal_2d1659ddaec48fc5ebc778f39eb9f05d6d7819f8ae7fd4647f3c6d28d59a6b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_21bfffa2ef46a8365d4d35c916f4dd8f6db0aa462dc3d981a1e6302c494f3c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bfffa2ef46a8365d4d35c916f4dd8f6db0aa462dc3d981a1e6302c494f3c9c->enter($__internal_21bfffa2ef46a8365d4d35c916f4dd8f6db0aa462dc3d981a1e6302c494f3c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1659ddaec48fc5ebc778f39eb9f05d6d7819f8ae7fd4647f3c6d28d59a6b67->leave($__internal_2d1659ddaec48fc5ebc778f39eb9f05d6d7819f8ae7fd4647f3c6d28d59a6b67_prof);

        
        $__internal_21bfffa2ef46a8365d4d35c916f4dd8f6db0aa462dc3d981a1e6302c494f3c9c->leave($__internal_21bfffa2ef46a8365d4d35c916f4dd8f6db0aa462dc3d981a1e6302c494f3c9c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b6820dea0ab7dba50d7d924e921df7a566f227633628ff7c65656505b09e787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6820dea0ab7dba50d7d924e921df7a566f227633628ff7c65656505b09e787->enter($__internal_1b6820dea0ab7dba50d7d924e921df7a566f227633628ff7c65656505b09e787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_53ce4c885b826143585bf6206582642e50711c3969a657bf5e0b756cbc38bdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ce4c885b826143585bf6206582642e50711c3969a657bf5e0b756cbc38bdf1->enter($__internal_53ce4c885b826143585bf6206582642e50711c3969a657bf5e0b756cbc38bdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_53ce4c885b826143585bf6206582642e50711c3969a657bf5e0b756cbc38bdf1->leave($__internal_53ce4c885b826143585bf6206582642e50711c3969a657bf5e0b756cbc38bdf1_prof);

        
        $__internal_1b6820dea0ab7dba50d7d924e921df7a566f227633628ff7c65656505b09e787->leave($__internal_1b6820dea0ab7dba50d7d924e921df7a566f227633628ff7c65656505b09e787_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
