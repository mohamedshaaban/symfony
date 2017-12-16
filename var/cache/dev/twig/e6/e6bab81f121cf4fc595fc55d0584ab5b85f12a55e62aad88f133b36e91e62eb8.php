<?php

/* SyliusChannelBundle:Collector:channel.html.twig */
class __TwigTemplate_b57e9013af836efb739a9c5f8ea351d8acf52c4a6c5fb6eddda8363bb73873f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "SyliusChannelBundle:Collector:channel.html.twig", 1);
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
        $__internal_7b0676de220b5f490764d21a46196bc943fbbd70cbd9200bdb9f3766b12a2f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0676de220b5f490764d21a46196bc943fbbd70cbd9200bdb9f3766b12a2f7a->enter($__internal_7b0676de220b5f490764d21a46196bc943fbbd70cbd9200bdb9f3766b12a2f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusChannelBundle:Collector:channel.html.twig"));

        $__internal_3f9d23237046f7aef4d8f0ff42d648c6b8c180c057c07118c6c0323738efdf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9d23237046f7aef4d8f0ff42d648c6b8c180c057c07118c6c0323738efdf47->enter($__internal_3f9d23237046f7aef4d8f0ff42d648c6b8c180c057c07118c6c0323738efdf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusChannelBundle:Collector:channel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b0676de220b5f490764d21a46196bc943fbbd70cbd9200bdb9f3766b12a2f7a->leave($__internal_7b0676de220b5f490764d21a46196bc943fbbd70cbd9200bdb9f3766b12a2f7a_prof);

        
        $__internal_3f9d23237046f7aef4d8f0ff42d648c6b8c180c057c07118c6c0323738efdf47->leave($__internal_3f9d23237046f7aef4d8f0ff42d648c6b8c180c057c07118c6c0323738efdf47_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af144a546b621bd2e1225ac896652d5f526469fe460a38586eba5e7e13b02d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af144a546b621bd2e1225ac896652d5f526469fe460a38586eba5e7e13b02d52->enter($__internal_af144a546b621bd2e1225ac896652d5f526469fe460a38586eba5e7e13b02d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_65ce6759588c5e6b48fee28d9e4f5d72d2504e628f950a7d424b5f9a2fce8939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ce6759588c5e6b48fee28d9e4f5d72d2504e628f950a7d424b5f9a2fce8939->enter($__internal_65ce6759588c5e6b48fee28d9e4f5d72d2504e628f950a7d424b5f9a2fce8939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["status_color"] = (((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "channel", array()))) ? ("red") : (""));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        echo twig_include($this->env, $context, "@SyliusChannel/Collector/Icon/channel.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "channel", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "channel", array(), "any", false, true), "name", array()), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Channels</b>
            <span class=\"sf-toolbar-status ";
        // line 14
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "channels", array()))) {
            echo "sf-toolbar-status-red";
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "channels", array())), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 17, $this->getSourceContext()); })()), "channels", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 18
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["channel"], "name", array()), "html", null, true);
            echo "</b>
                <span>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["channel"], "hostname", array()), "html", null, true);
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 20, $this->getSourceContext()); })()), "isChannelChangeSupported", array())) {
                echo " (<a href=\"?_channel_code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["channel"], "code", array()), "html", null, true);
                echo "\">change</a>)";
            }
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
    ";
        // line 25
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false, "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 25, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_65ce6759588c5e6b48fee28d9e4f5d72d2504e628f950a7d424b5f9a2fce8939->leave($__internal_65ce6759588c5e6b48fee28d9e4f5d72d2504e628f950a7d424b5f9a2fce8939_prof);

        
        $__internal_af144a546b621bd2e1225ac896652d5f526469fe460a38586eba5e7e13b02d52->leave($__internal_af144a546b621bd2e1225ac896652d5f526469fe460a38586eba5e7e13b02d52_prof);

    }

    public function getTemplateName()
    {
        return "SyliusChannelBundle:Collector:channel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  114 => 24,  111 => 23,  97 => 20,  93 => 19,  90 => 18,  86 => 17,  76 => 14,  72 => 12,  70 => 11,  67 => 10,  62 => 8,  57 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set status_color = collector.channel is null ? 'red' : '' %}

    {% set icon %}
        {{ include('@SyliusChannel/Collector/Icon/channel.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.channel.name|default('Undefined') }}</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Channels</b>
            <span class=\"sf-toolbar-status {% if collector.channels is empty %}sf-toolbar-status-red{% endif %}\">{{ collector.channels|length }}</span>
        </div>

        {% for channel in collector.channels %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ channel.name }}</b>
                <span>{{ channel.hostname }}{% if collector.isChannelChangeSupported %} (<a href=\"?_channel_code={{ channel.code }}\">change</a>){% endif %}</span>
            </div>
        {% endfor %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false, status: status_color }) }}
{% endblock %}
", "SyliusChannelBundle:Collector:channel.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle/Resources/views/Collector/channel.html.twig");
    }
}
