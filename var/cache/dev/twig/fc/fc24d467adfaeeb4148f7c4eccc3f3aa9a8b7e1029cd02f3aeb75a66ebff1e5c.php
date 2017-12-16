<?php

/* SyliusAdminBundle:Crud:update.html.twig */
class __TwigTemplate_efe67d8ebed66068633acb3f08dd6c0a22a2e48a7a2c08ecfa1466bf6058e004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_899496421e427d36f1b0a15529e54c336104df496f635e6e70f2e05220a62dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899496421e427d36f1b0a15529e54c336104df496f635e6e70f2e05220a62dcb->enter($__internal_899496421e427d36f1b0a15529e54c336104df496f635e6e70f2e05220a62dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:update.html.twig"));

        $__internal_16f3f9d1482e93f8c2e1288a50fd3f6cdaada6c107adc0f94eb55af2cf12ac65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f3f9d1482e93f8c2e1288a50fd3f6cdaada6c107adc0f94eb55af2cf12ac65->enter($__internal_16f3f9d1482e93f8c2e1288a50fd3f6cdaada6c107adc0f94eb55af2cf12ac65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:update.html.twig"));

        // line 3
        $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.edit_") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "name", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.edit_") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "name", array()))));
        // line 4
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 4, $this->getSourceContext()); })()), "applicationName", array()) . ".admin.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 4, $this->getSourceContext()); })()), "name", array())) . ".update");
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), array(0 => "@SyliusAdmin/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_899496421e427d36f1b0a15529e54c336104df496f635e6e70f2e05220a62dcb->leave($__internal_899496421e427d36f1b0a15529e54c336104df496f635e6e70f2e05220a62dcb_prof);

        
        $__internal_16f3f9d1482e93f8c2e1288a50fd3f6cdaada6c107adc0f94eb55af2cf12ac65->leave($__internal_16f3f9d1482e93f8c2e1288a50fd3f6cdaada6c107adc0f94eb55af2cf12ac65_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3ef954c9a17e7a9f4618b58e0378caec119900f20070feeb9c6d085700f4e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ef954c9a17e7a9f4618b58e0378caec119900f20070feeb9c6d085700f4e76->enter($__internal_c3ef954c9a17e7a9f4618b58e0378caec119900f20070feeb9c6d085700f4e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51b7a81e94be32281678f3989f2c2f52b42672ef7ceb4a3ff6ec33a639271130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b7a81e94be32281678f3989f2c2f52b42672ef7ceb4a3ff6ec33a639271130->enter($__internal_51b7a81e94be32281678f3989f2c2f52b42672ef7ceb4a3ff6ec33a639271130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_51b7a81e94be32281678f3989f2c2f52b42672ef7ceb4a3ff6ec33a639271130->leave($__internal_51b7a81e94be32281678f3989f2c2f52b42672ef7ceb4a3ff6ec33a639271130_prof);

        
        $__internal_c3ef954c9a17e7a9f4618b58e0378caec119900f20070feeb9c6d085700f4e76->leave($__internal_c3ef954c9a17e7a9f4618b58e0378caec119900f20070feeb9c6d085700f4e76_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0e39d756115cb6ac20266752ec3054b3e7603acc469bb78153c100e4615fa02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e39d756115cb6ac20266752ec3054b3e7603acc469bb78153c100e4615fa02->enter($__internal_f0e39d756115cb6ac20266752ec3054b3e7603acc469bb78153c100e4615fa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a60b312d8cc7b638393691fa8a672dd0281ca9799906ff784b8245964b104108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60b312d8cc7b638393691fa8a672dd0281ca9799906ff784b8245964b104108->enter($__internal_a60b312d8cc7b638393691fa8a672dd0281ca9799906ff784b8245964b104108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 11, $this->getSourceContext()); })()) . ".before_header"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 11, $this->getSourceContext()); })()))));
        echo "

";
        // line 13
        $this->loadTemplate("@SyliusAdmin/Crud/Update/_header.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 13)->display($context);
        // line 14
        echo "
";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 15, $this->getSourceContext()); })()) . ".after_header"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 15, $this->getSourceContext()); })()))));
        echo "

";
        // line 17
        $this->loadTemplate("@SyliusAdmin/Crud/Update/_content.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 17)->display($context);
        // line 18
        echo "
";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 19, $this->getSourceContext()); })()) . ".after_content"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 19, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a60b312d8cc7b638393691fa8a672dd0281ca9799906ff784b8245964b104108->leave($__internal_a60b312d8cc7b638393691fa8a672dd0281ca9799906ff784b8245964b104108_prof);

        
        $__internal_f0e39d756115cb6ac20266752ec3054b3e7603acc469bb78153c100e4615fa02->leave($__internal_f0e39d756115cb6ac20266752ec3054b3e7603acc469bb78153c100e4615fa02_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7785f977614e8cd4759b5a4b4f0c64871f18012d4dd9e9023be17f0dfc768237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7785f977614e8cd4759b5a4b4f0c64871f18012d4dd9e9023be17f0dfc768237->enter($__internal_7785f977614e8cd4759b5a4b4f0c64871f18012d4dd9e9023be17f0dfc768237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_603f16d2679e6106f4d4a89fafe8721ddd4d8b253e876908aef05b43f4f3e012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603f16d2679e6106f4d4a89fafe8721ddd4d8b253e876908aef05b43f4f3e012->enter($__internal_603f16d2679e6106f4d4a89fafe8721ddd4d8b253e876908aef05b43f4f3e012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 25, $this->getSourceContext()); })()) . ".stylesheets")));
        echo "
";
        
        $__internal_603f16d2679e6106f4d4a89fafe8721ddd4d8b253e876908aef05b43f4f3e012->leave($__internal_603f16d2679e6106f4d4a89fafe8721ddd4d8b253e876908aef05b43f4f3e012_prof);

        
        $__internal_7785f977614e8cd4759b5a4b4f0c64871f18012d4dd9e9023be17f0dfc768237->leave($__internal_7785f977614e8cd4759b5a4b4f0c64871f18012d4dd9e9023be17f0dfc768237_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_037bc171fe3883a0ceface9a3777600ccaa364de20f220d4a26c1f84b7a4ef78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037bc171fe3883a0ceface9a3777600ccaa364de20f220d4a26c1f84b7a4ef78->enter($__internal_037bc171fe3883a0ceface9a3777600ccaa364de20f220d4a26c1f84b7a4ef78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3292be514d6830eac99e24823ddd966b46662d6ed69634358393500aa7976284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3292be514d6830eac99e24823ddd966b46662d6ed69634358393500aa7976284->enter($__internal_3292be514d6830eac99e24823ddd966b46662d6ed69634358393500aa7976284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 31, $this->getSourceContext()); })()) . ".javascripts")));
        echo "
";
        
        $__internal_3292be514d6830eac99e24823ddd966b46662d6ed69634358393500aa7976284->leave($__internal_3292be514d6830eac99e24823ddd966b46662d6ed69634358393500aa7976284_prof);

        
        $__internal_037bc171fe3883a0ceface9a3777600ccaa364de20f220d4a26c1f84b7a4ef78->leave($__internal_037bc171fe3883a0ceface9a3777600ccaa364de20f220d4a26c1f84b7a4ef78_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 31,  147 => 29,  138 => 28,  126 => 25,  120 => 23,  111 => 22,  99 => 19,  96 => 18,  94 => 17,  89 => 15,  86 => 14,  84 => 13,  79 => 11,  70 => 10,  50 => 6,  40 => 1,  38 => 8,  36 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.edit_'~metadata.name) %}
{% set event_prefix = metadata.applicationName ~ '.admin.' ~ metadata.name ~ '.update' %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% form_theme form '@SyliusAdmin/Form/theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event(event_prefix ~ '.before_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Crud/Update/_header.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Crud/Update/_content.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_content', {'resource': resource}) }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.stylesheets') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.javascripts') }}
{% endblock %}
", "SyliusAdminBundle:Crud:update.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/update.html.twig");
    }
}
