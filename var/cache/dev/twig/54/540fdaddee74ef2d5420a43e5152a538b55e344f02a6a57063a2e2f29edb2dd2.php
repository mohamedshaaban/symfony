<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3eae813789079fb5d519884d501909ee3c97f2742393297485b6a7bef6bf02da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_127ec3870d2dda9787c42370b77afbe66816e3d55576f5a7566eb8bd1d425f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127ec3870d2dda9787c42370b77afbe66816e3d55576f5a7566eb8bd1d425f4a->enter($__internal_127ec3870d2dda9787c42370b77afbe66816e3d55576f5a7566eb8bd1d425f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b3cb71967167e324a184a5ece70c13fa0297cb2d0fff9346a1d861d67f5274d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3cb71967167e324a184a5ece70c13fa0297cb2d0fff9346a1d861d67f5274d6->enter($__internal_b3cb71967167e324a184a5ece70c13fa0297cb2d0fff9346a1d861d67f5274d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_127ec3870d2dda9787c42370b77afbe66816e3d55576f5a7566eb8bd1d425f4a->leave($__internal_127ec3870d2dda9787c42370b77afbe66816e3d55576f5a7566eb8bd1d425f4a_prof);

        
        $__internal_b3cb71967167e324a184a5ece70c13fa0297cb2d0fff9346a1d861d67f5274d6->leave($__internal_b3cb71967167e324a184a5ece70c13fa0297cb2d0fff9346a1d861d67f5274d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9ce18086794522cccfef3a20b926e6aa15909756a89330ec9f0e53e02e82b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ce18086794522cccfef3a20b926e6aa15909756a89330ec9f0e53e02e82b36->enter($__internal_e9ce18086794522cccfef3a20b926e6aa15909756a89330ec9f0e53e02e82b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d0d3bb961d33abffee510b302225cd2684a0edfffce6f600c53535e4348f2f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d3bb961d33abffee510b302225cd2684a0edfffce6f600c53535e4348f2f23->enter($__internal_d0d3bb961d33abffee510b302225cd2684a0edfffce6f600c53535e4348f2f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d0d3bb961d33abffee510b302225cd2684a0edfffce6f600c53535e4348f2f23->leave($__internal_d0d3bb961d33abffee510b302225cd2684a0edfffce6f600c53535e4348f2f23_prof);

        
        $__internal_e9ce18086794522cccfef3a20b926e6aa15909756a89330ec9f0e53e02e82b36->leave($__internal_e9ce18086794522cccfef3a20b926e6aa15909756a89330ec9f0e53e02e82b36_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7043a009b3c535df5210b1b028d950da0752281260a8d1bff0f974a61e66dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7043a009b3c535df5210b1b028d950da0752281260a8d1bff0f974a61e66dc1->enter($__internal_c7043a009b3c535df5210b1b028d950da0752281260a8d1bff0f974a61e66dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_57c8bfe9fec4c508a52d43d2245c4e10920172419658e9d42e17d3cee7cc5583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c8bfe9fec4c508a52d43d2245c4e10920172419658e9d42e17d3cee7cc5583->enter($__internal_57c8bfe9fec4c508a52d43d2245c4e10920172419658e9d42e17d3cee7cc5583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_57c8bfe9fec4c508a52d43d2245c4e10920172419658e9d42e17d3cee7cc5583->leave($__internal_57c8bfe9fec4c508a52d43d2245c4e10920172419658e9d42e17d3cee7cc5583_prof);

        
        $__internal_c7043a009b3c535df5210b1b028d950da0752281260a8d1bff0f974a61e66dc1->leave($__internal_c7043a009b3c535df5210b1b028d950da0752281260a8d1bff0f974a61e66dc1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4dc941cdc456cbc06b74a76d57ebf1964f4ebd83016d391dd15044d946493b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc941cdc456cbc06b74a76d57ebf1964f4ebd83016d391dd15044d946493b34->enter($__internal_4dc941cdc456cbc06b74a76d57ebf1964f4ebd83016d391dd15044d946493b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_42e2e2e8c5a140c39ac3eece831f0d59a26de13bb33767b7fbd7995f4343953a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e2e2e8c5a140c39ac3eece831f0d59a26de13bb33767b7fbd7995f4343953a->enter($__internal_42e2e2e8c5a140c39ac3eece831f0d59a26de13bb33767b7fbd7995f4343953a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_42e2e2e8c5a140c39ac3eece831f0d59a26de13bb33767b7fbd7995f4343953a->leave($__internal_42e2e2e8c5a140c39ac3eece831f0d59a26de13bb33767b7fbd7995f4343953a_prof);

        
        $__internal_4dc941cdc456cbc06b74a76d57ebf1964f4ebd83016d391dd15044d946493b34->leave($__internal_4dc941cdc456cbc06b74a76d57ebf1964f4ebd83016d391dd15044d946493b34_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
