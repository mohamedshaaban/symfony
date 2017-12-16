<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_55cb95668f89e7ad4e04574a6cd24905bf1d37f1dc4d07e7dd43a2ef92d781b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_d8038dcdf50b32a84d8b5ca2da15b3516755f6d80436e784c2379ce63c48bb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8038dcdf50b32a84d8b5ca2da15b3516755f6d80436e784c2379ce63c48bb97->enter($__internal_d8038dcdf50b32a84d8b5ca2da15b3516755f6d80436e784c2379ce63c48bb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_36387db317cca83457b60f0d2e80f0053fced76d85a260bdf0a0e16d22f580b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36387db317cca83457b60f0d2e80f0053fced76d85a260bdf0a0e16d22f580b4->enter($__internal_36387db317cca83457b60f0d2e80f0053fced76d85a260bdf0a0e16d22f580b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8038dcdf50b32a84d8b5ca2da15b3516755f6d80436e784c2379ce63c48bb97->leave($__internal_d8038dcdf50b32a84d8b5ca2da15b3516755f6d80436e784c2379ce63c48bb97_prof);

        
        $__internal_36387db317cca83457b60f0d2e80f0053fced76d85a260bdf0a0e16d22f580b4->leave($__internal_36387db317cca83457b60f0d2e80f0053fced76d85a260bdf0a0e16d22f580b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3faf5f87a9c768ae29bf1fe148caed402f7cc86eb2c82d34f16de96fc903237a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3faf5f87a9c768ae29bf1fe148caed402f7cc86eb2c82d34f16de96fc903237a->enter($__internal_3faf5f87a9c768ae29bf1fe148caed402f7cc86eb2c82d34f16de96fc903237a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad2d203ff64d14ca88edad64021ddf0c6e41f1a9fc6e6a32d046e6e1cdf077ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2d203ff64d14ca88edad64021ddf0c6e41f1a9fc6e6a32d046e6e1cdf077ba->enter($__internal_ad2d203ff64d14ca88edad64021ddf0c6e41f1a9fc6e6a32d046e6e1cdf077ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ad2d203ff64d14ca88edad64021ddf0c6e41f1a9fc6e6a32d046e6e1cdf077ba->leave($__internal_ad2d203ff64d14ca88edad64021ddf0c6e41f1a9fc6e6a32d046e6e1cdf077ba_prof);

        
        $__internal_3faf5f87a9c768ae29bf1fe148caed402f7cc86eb2c82d34f16de96fc903237a->leave($__internal_3faf5f87a9c768ae29bf1fe148caed402f7cc86eb2c82d34f16de96fc903237a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_17789d5ec6dfa44bfa809f05562593c5f22edc02795e69b6e001b9a3d44d51a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17789d5ec6dfa44bfa809f05562593c5f22edc02795e69b6e001b9a3d44d51a1->enter($__internal_17789d5ec6dfa44bfa809f05562593c5f22edc02795e69b6e001b9a3d44d51a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c2de2e8f5fd9b51a17e36d91064212c696926ae38f0a8aa6076cef70c3436f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2de2e8f5fd9b51a17e36d91064212c696926ae38f0a8aa6076cef70c3436f3->enter($__internal_5c2de2e8f5fd9b51a17e36d91064212c696926ae38f0a8aa6076cef70c3436f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c2de2e8f5fd9b51a17e36d91064212c696926ae38f0a8aa6076cef70c3436f3->leave($__internal_5c2de2e8f5fd9b51a17e36d91064212c696926ae38f0a8aa6076cef70c3436f3_prof);

        
        $__internal_17789d5ec6dfa44bfa809f05562593c5f22edc02795e69b6e001b9a3d44d51a1->leave($__internal_17789d5ec6dfa44bfa809f05562593c5f22edc02795e69b6e001b9a3d44d51a1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
