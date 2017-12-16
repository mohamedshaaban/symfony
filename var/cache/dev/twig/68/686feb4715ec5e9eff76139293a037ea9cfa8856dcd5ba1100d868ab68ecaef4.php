<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_57059957636394979e6c23cdbb6a1a4bc9a27fc252656d53a51e28f3a30fc7d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d02ab1c5ef83a21e29d5a33b61f65d745e9fda7b8a026e819dae4ceca9d2b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d02ab1c5ef83a21e29d5a33b61f65d745e9fda7b8a026e819dae4ceca9d2b3e->enter($__internal_5d02ab1c5ef83a21e29d5a33b61f65d745e9fda7b8a026e819dae4ceca9d2b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_282308e4d300291ca0866a17e4c723f2aa3b6db077c1aa08b9c28363cac9b523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282308e4d300291ca0866a17e4c723f2aa3b6db077c1aa08b9c28363cac9b523->enter($__internal_282308e4d300291ca0866a17e4c723f2aa3b6db077c1aa08b9c28363cac9b523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d02ab1c5ef83a21e29d5a33b61f65d745e9fda7b8a026e819dae4ceca9d2b3e->leave($__internal_5d02ab1c5ef83a21e29d5a33b61f65d745e9fda7b8a026e819dae4ceca9d2b3e_prof);

        
        $__internal_282308e4d300291ca0866a17e4c723f2aa3b6db077c1aa08b9c28363cac9b523->leave($__internal_282308e4d300291ca0866a17e4c723f2aa3b6db077c1aa08b9c28363cac9b523_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b31f0abd74d33ee7925235d7d1f0c41e1b13352f7d33e3dd9b5fc99b76c5e3f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31f0abd74d33ee7925235d7d1f0c41e1b13352f7d33e3dd9b5fc99b76c5e3f3->enter($__internal_b31f0abd74d33ee7925235d7d1f0c41e1b13352f7d33e3dd9b5fc99b76c5e3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a7baa7ee2524b72c3bdd5cd9383942006cf72c5b5bdc7e2f0d1c6c4557f76b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7baa7ee2524b72c3bdd5cd9383942006cf72c5b5bdc7e2f0d1c6c4557f76b7->enter($__internal_0a7baa7ee2524b72c3bdd5cd9383942006cf72c5b5bdc7e2f0d1c6c4557f76b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0a7baa7ee2524b72c3bdd5cd9383942006cf72c5b5bdc7e2f0d1c6c4557f76b7->leave($__internal_0a7baa7ee2524b72c3bdd5cd9383942006cf72c5b5bdc7e2f0d1c6c4557f76b7_prof);

        
        $__internal_b31f0abd74d33ee7925235d7d1f0c41e1b13352f7d33e3dd9b5fc99b76c5e3f3->leave($__internal_b31f0abd74d33ee7925235d7d1f0c41e1b13352f7d33e3dd9b5fc99b76c5e3f3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_712e171c5cb07a6106803661c0463386dac214e176f69b2735d27818a2d465fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712e171c5cb07a6106803661c0463386dac214e176f69b2735d27818a2d465fa->enter($__internal_712e171c5cb07a6106803661c0463386dac214e176f69b2735d27818a2d465fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15501a565fc54ca2fe75bfe2dc7e705d0e4ace8553861733164ceab761942819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15501a565fc54ca2fe75bfe2dc7e705d0e4ace8553861733164ceab761942819->enter($__internal_15501a565fc54ca2fe75bfe2dc7e705d0e4ace8553861733164ceab761942819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_15501a565fc54ca2fe75bfe2dc7e705d0e4ace8553861733164ceab761942819->leave($__internal_15501a565fc54ca2fe75bfe2dc7e705d0e4ace8553861733164ceab761942819_prof);

        
        $__internal_712e171c5cb07a6106803661c0463386dac214e176f69b2735d27818a2d465fa->leave($__internal_712e171c5cb07a6106803661c0463386dac214e176f69b2735d27818a2d465fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
