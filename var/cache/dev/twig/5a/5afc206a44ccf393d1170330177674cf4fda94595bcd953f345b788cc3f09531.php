<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_726b94f600d4a91c07b06a612b02abb01094fb9e4797fbe6cc3a1c07034c2c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_da0169ced8bff094b72423611a5696aedc95629a8d790538c65e73296cea6b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0169ced8bff094b72423611a5696aedc95629a8d790538c65e73296cea6b2c->enter($__internal_da0169ced8bff094b72423611a5696aedc95629a8d790538c65e73296cea6b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a7e60d29d8316b5cf4e9e77ad2631b2b37671f4b011669c2a67a3d315bc92fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e60d29d8316b5cf4e9e77ad2631b2b37671f4b011669c2a67a3d315bc92fe8->enter($__internal_a7e60d29d8316b5cf4e9e77ad2631b2b37671f4b011669c2a67a3d315bc92fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da0169ced8bff094b72423611a5696aedc95629a8d790538c65e73296cea6b2c->leave($__internal_da0169ced8bff094b72423611a5696aedc95629a8d790538c65e73296cea6b2c_prof);

        
        $__internal_a7e60d29d8316b5cf4e9e77ad2631b2b37671f4b011669c2a67a3d315bc92fe8->leave($__internal_a7e60d29d8316b5cf4e9e77ad2631b2b37671f4b011669c2a67a3d315bc92fe8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c77b3a4a4667b14d38ebdb0c4566888ea45c69e1156d706a70c254a39594865e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77b3a4a4667b14d38ebdb0c4566888ea45c69e1156d706a70c254a39594865e->enter($__internal_c77b3a4a4667b14d38ebdb0c4566888ea45c69e1156d706a70c254a39594865e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0068c2ed5b396ddfac13b327097d51595e0cab3fe35ca00517a09bce080e553b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0068c2ed5b396ddfac13b327097d51595e0cab3fe35ca00517a09bce080e553b->enter($__internal_0068c2ed5b396ddfac13b327097d51595e0cab3fe35ca00517a09bce080e553b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0068c2ed5b396ddfac13b327097d51595e0cab3fe35ca00517a09bce080e553b->leave($__internal_0068c2ed5b396ddfac13b327097d51595e0cab3fe35ca00517a09bce080e553b_prof);

        
        $__internal_c77b3a4a4667b14d38ebdb0c4566888ea45c69e1156d706a70c254a39594865e->leave($__internal_c77b3a4a4667b14d38ebdb0c4566888ea45c69e1156d706a70c254a39594865e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
