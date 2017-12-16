<?php

/* SyliusChannelBundle:Collector:channel.html.twig */
class __TwigTemplate_ba5f3e9f2ee88d2c05ad7a12296a533b5035079aa59612030a79267c6ac22d32 extends Twig_Template
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
        $__internal_052b7165b3cb78390347fc7470774cda65a02a434676072fd55f275d0c0f82d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052b7165b3cb78390347fc7470774cda65a02a434676072fd55f275d0c0f82d7->enter($__internal_052b7165b3cb78390347fc7470774cda65a02a434676072fd55f275d0c0f82d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusChannelBundle:Collector:channel.html.twig"));

        $__internal_b093c216cbf12daa5d6f31a173af5183e27311915bafc880539cc29e204f2a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b093c216cbf12daa5d6f31a173af5183e27311915bafc880539cc29e204f2a99->enter($__internal_b093c216cbf12daa5d6f31a173af5183e27311915bafc880539cc29e204f2a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusChannelBundle:Collector:channel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_052b7165b3cb78390347fc7470774cda65a02a434676072fd55f275d0c0f82d7->leave($__internal_052b7165b3cb78390347fc7470774cda65a02a434676072fd55f275d0c0f82d7_prof);

        
        $__internal_b093c216cbf12daa5d6f31a173af5183e27311915bafc880539cc29e204f2a99->leave($__internal_b093c216cbf12daa5d6f31a173af5183e27311915bafc880539cc29e204f2a99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49515980e5204327483b8014408b7986b152f2c2afe2d355c8e69bbf8d42cb24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49515980e5204327483b8014408b7986b152f2c2afe2d355c8e69bbf8d42cb24->enter($__internal_49515980e5204327483b8014408b7986b152f2c2afe2d355c8e69bbf8d42cb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b9cb56d2853ed37e25d8a8cca7a1d1f3ca958f2a5c194f6cde4f47bb6ecfb2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cb56d2853ed37e25d8a8cca7a1d1f3ca958f2a5c194f6cde4f47bb6ecfb2ba->enter($__internal_b9cb56d2853ed37e25d8a8cca7a1d1f3ca958f2a5c194f6cde4f47bb6ecfb2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b9cb56d2853ed37e25d8a8cca7a1d1f3ca958f2a5c194f6cde4f47bb6ecfb2ba->leave($__internal_b9cb56d2853ed37e25d8a8cca7a1d1f3ca958f2a5c194f6cde4f47bb6ecfb2ba_prof);

        
        $__internal_49515980e5204327483b8014408b7986b152f2c2afe2d355c8e69bbf8d42cb24->leave($__internal_49515980e5204327483b8014408b7986b152f2c2afe2d355c8e69bbf8d42cb24_prof);

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
", "SyliusChannelBundle:Collector:channel.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ChannelBundle\\Resources\\views\\Collector\\channel.html.twig");
    }
}
