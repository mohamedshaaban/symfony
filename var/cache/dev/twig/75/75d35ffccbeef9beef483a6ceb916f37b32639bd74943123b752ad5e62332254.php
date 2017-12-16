<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0f6c11c12ddee68a6e3980ce397d7ddcc4d0caf694a1921af745801582b76321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d5777ee27f9dd15e1b3f411e802c3abf5fb5b51a8f3a8d6af7f7375de054c6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5777ee27f9dd15e1b3f411e802c3abf5fb5b51a8f3a8d6af7f7375de054c6dc->enter($__internal_d5777ee27f9dd15e1b3f411e802c3abf5fb5b51a8f3a8d6af7f7375de054c6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9f1ab49f82513cbb646342fa1348219815392af28489d36fc741310adc0d6558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1ab49f82513cbb646342fa1348219815392af28489d36fc741310adc0d6558->enter($__internal_9f1ab49f82513cbb646342fa1348219815392af28489d36fc741310adc0d6558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5777ee27f9dd15e1b3f411e802c3abf5fb5b51a8f3a8d6af7f7375de054c6dc->leave($__internal_d5777ee27f9dd15e1b3f411e802c3abf5fb5b51a8f3a8d6af7f7375de054c6dc_prof);

        
        $__internal_9f1ab49f82513cbb646342fa1348219815392af28489d36fc741310adc0d6558->leave($__internal_9f1ab49f82513cbb646342fa1348219815392af28489d36fc741310adc0d6558_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b15b9999c30ffe266b57f080720f74d438e3ee4e2a567677838c95b21bbabe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b15b9999c30ffe266b57f080720f74d438e3ee4e2a567677838c95b21bbabe0->enter($__internal_3b15b9999c30ffe266b57f080720f74d438e3ee4e2a567677838c95b21bbabe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b1bf44c6a6d295f3fd5594d3605d6060876f8c853b83f05add1492cbc8a72759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bf44c6a6d295f3fd5594d3605d6060876f8c853b83f05add1492cbc8a72759->enter($__internal_b1bf44c6a6d295f3fd5594d3605d6060876f8c853b83f05add1492cbc8a72759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1bf44c6a6d295f3fd5594d3605d6060876f8c853b83f05add1492cbc8a72759->leave($__internal_b1bf44c6a6d295f3fd5594d3605d6060876f8c853b83f05add1492cbc8a72759_prof);

        
        $__internal_3b15b9999c30ffe266b57f080720f74d438e3ee4e2a567677838c95b21bbabe0->leave($__internal_3b15b9999c30ffe266b57f080720f74d438e3ee4e2a567677838c95b21bbabe0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f24193d10d59b03ae1af5ac44bdd6e181e50c9c9576c8575aa3588af40cb0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f24193d10d59b03ae1af5ac44bdd6e181e50c9c9576c8575aa3588af40cb0a0->enter($__internal_1f24193d10d59b03ae1af5ac44bdd6e181e50c9c9576c8575aa3588af40cb0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a51bb4e7f61a6ba17d9704f6f9a9d54b2e735bb34ede3fd5071359a30c502a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51bb4e7f61a6ba17d9704f6f9a9d54b2e735bb34ede3fd5071359a30c502a4e->enter($__internal_a51bb4e7f61a6ba17d9704f6f9a9d54b2e735bb34ede3fd5071359a30c502a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a51bb4e7f61a6ba17d9704f6f9a9d54b2e735bb34ede3fd5071359a30c502a4e->leave($__internal_a51bb4e7f61a6ba17d9704f6f9a9d54b2e735bb34ede3fd5071359a30c502a4e_prof);

        
        $__internal_1f24193d10d59b03ae1af5ac44bdd6e181e50c9c9576c8575aa3588af40cb0a0->leave($__internal_1f24193d10d59b03ae1af5ac44bdd6e181e50c9c9576c8575aa3588af40cb0a0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a5d3f506dc3dde78d42179dc7ccd1a6e1dab3ac365d7ef2fe393ee6a9e18d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5d3f506dc3dde78d42179dc7ccd1a6e1dab3ac365d7ef2fe393ee6a9e18d54->enter($__internal_5a5d3f506dc3dde78d42179dc7ccd1a6e1dab3ac365d7ef2fe393ee6a9e18d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd3dedb168efdc8720e9e4c70db32f8f1878901d710b07c5666af936190452a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3dedb168efdc8720e9e4c70db32f8f1878901d710b07c5666af936190452a4->enter($__internal_bd3dedb168efdc8720e9e4c70db32f8f1878901d710b07c5666af936190452a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_bd3dedb168efdc8720e9e4c70db32f8f1878901d710b07c5666af936190452a4->leave($__internal_bd3dedb168efdc8720e9e4c70db32f8f1878901d710b07c5666af936190452a4_prof);

        
        $__internal_5a5d3f506dc3dde78d42179dc7ccd1a6e1dab3ac365d7ef2fe393ee6a9e18d54->leave($__internal_5a5d3f506dc3dde78d42179dc7ccd1a6e1dab3ac365d7ef2fe393ee6a9e18d54_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
