<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_97df5892bb4cba773969a223840013ec4b6fd0e5564edee5d8195a83e4a19c30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0f2ddd34b6b030f3a60ca50aa535be0b38210be1dbdd53a4a065f1aeb68ad61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f2ddd34b6b030f3a60ca50aa535be0b38210be1dbdd53a4a065f1aeb68ad61->enter($__internal_d0f2ddd34b6b030f3a60ca50aa535be0b38210be1dbdd53a4a065f1aeb68ad61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_56c16c9362cf90d28ffff74bc8213c6d495bfd3f7992b95b124c8ea82f22e0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c16c9362cf90d28ffff74bc8213c6d495bfd3f7992b95b124c8ea82f22e0f1->enter($__internal_56c16c9362cf90d28ffff74bc8213c6d495bfd3f7992b95b124c8ea82f22e0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0f2ddd34b6b030f3a60ca50aa535be0b38210be1dbdd53a4a065f1aeb68ad61->leave($__internal_d0f2ddd34b6b030f3a60ca50aa535be0b38210be1dbdd53a4a065f1aeb68ad61_prof);

        
        $__internal_56c16c9362cf90d28ffff74bc8213c6d495bfd3f7992b95b124c8ea82f22e0f1->leave($__internal_56c16c9362cf90d28ffff74bc8213c6d495bfd3f7992b95b124c8ea82f22e0f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e9755d39063c1db6b4188604ce765d489f51b96c01307cc34916c260d9d44b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9755d39063c1db6b4188604ce765d489f51b96c01307cc34916c260d9d44b6->enter($__internal_6e9755d39063c1db6b4188604ce765d489f51b96c01307cc34916c260d9d44b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8724681dd21e42fe0b49d0c00cc77d531f6e048be95159f713dcf39603a23f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8724681dd21e42fe0b49d0c00cc77d531f6e048be95159f713dcf39603a23f00->enter($__internal_8724681dd21e42fe0b49d0c00cc77d531f6e048be95159f713dcf39603a23f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8724681dd21e42fe0b49d0c00cc77d531f6e048be95159f713dcf39603a23f00->leave($__internal_8724681dd21e42fe0b49d0c00cc77d531f6e048be95159f713dcf39603a23f00_prof);

        
        $__internal_6e9755d39063c1db6b4188604ce765d489f51b96c01307cc34916c260d9d44b6->leave($__internal_6e9755d39063c1db6b4188604ce765d489f51b96c01307cc34916c260d9d44b6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_084cb0b86d514f2d4f9cb3b0bd999b2b1ab6e6cccccfd8a06015eea9e6152152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084cb0b86d514f2d4f9cb3b0bd999b2b1ab6e6cccccfd8a06015eea9e6152152->enter($__internal_084cb0b86d514f2d4f9cb3b0bd999b2b1ab6e6cccccfd8a06015eea9e6152152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0bb2fea523589cb9b3e03180fbf33e960d6f2c94aa3f9f5bb5531fcab39900a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb2fea523589cb9b3e03180fbf33e960d6f2c94aa3f9f5bb5531fcab39900a6->enter($__internal_0bb2fea523589cb9b3e03180fbf33e960d6f2c94aa3f9f5bb5531fcab39900a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0bb2fea523589cb9b3e03180fbf33e960d6f2c94aa3f9f5bb5531fcab39900a6->leave($__internal_0bb2fea523589cb9b3e03180fbf33e960d6f2c94aa3f9f5bb5531fcab39900a6_prof);

        
        $__internal_084cb0b86d514f2d4f9cb3b0bd999b2b1ab6e6cccccfd8a06015eea9e6152152->leave($__internal_084cb0b86d514f2d4f9cb3b0bd999b2b1ab6e6cccccfd8a06015eea9e6152152_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f22fabef156f7d15652df8732dc37bfe69b91e677658d6b35931971db57d5433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22fabef156f7d15652df8732dc37bfe69b91e677658d6b35931971db57d5433->enter($__internal_f22fabef156f7d15652df8732dc37bfe69b91e677658d6b35931971db57d5433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09ade8bc3ede2a54ecb1436e43b82883996638a5c863100543d604a418fc5fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ade8bc3ede2a54ecb1436e43b82883996638a5c863100543d604a418fc5fa2->enter($__internal_09ade8bc3ede2a54ecb1436e43b82883996638a5c863100543d604a418fc5fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_09ade8bc3ede2a54ecb1436e43b82883996638a5c863100543d604a418fc5fa2->leave($__internal_09ade8bc3ede2a54ecb1436e43b82883996638a5c863100543d604a418fc5fa2_prof);

        
        $__internal_f22fabef156f7d15652df8732dc37bfe69b91e677658d6b35931971db57d5433->leave($__internal_f22fabef156f7d15652df8732dc37bfe69b91e677658d6b35931971db57d5433_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
