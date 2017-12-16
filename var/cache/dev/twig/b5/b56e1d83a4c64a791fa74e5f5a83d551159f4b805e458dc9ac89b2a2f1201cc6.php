<?php

/* SyliusAdminBundle:Security:login.html.twig */
class __TwigTemplate_1d4a514ceb333146b4d8ea9e8061881a04a0e63a9ea62d10870a238a48719d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Layout/centered.html.twig", "SyliusAdminBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Layout/centered.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ae873b66d70cc7d854c4f1aeedda1dc358410f8833732176540dd989907bbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae873b66d70cc7d854c4f1aeedda1dc358410f8833732176540dd989907bbb5->enter($__internal_8ae873b66d70cc7d854c4f1aeedda1dc358410f8833732176540dd989907bbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Security:login.html.twig"));

        $__internal_2e6840adb74ce358d2d1d47e10f49747556c4a6ae4b5b898eeca54f650f57bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6840adb74ce358d2d1d47e10f49747556c4a6ae4b5b898eeca54f650f57bcb->enter($__internal_2e6840adb74ce358d2d1d47e10f49747556c4a6ae4b5b898eeca54f650f57bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae873b66d70cc7d854c4f1aeedda1dc358410f8833732176540dd989907bbb5->leave($__internal_8ae873b66d70cc7d854c4f1aeedda1dc358410f8833732176540dd989907bbb5_prof);

        
        $__internal_2e6840adb74ce358d2d1d47e10f49747556c4a6ae4b5b898eeca54f650f57bcb->leave($__internal_2e6840adb74ce358d2d1d47e10f49747556c4a6ae4b5b898eeca54f650f57bcb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c6468e027804b5ea3bf1a3dfe8d264fe87d6b339a61dab732162633444947f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6468e027804b5ea3bf1a3dfe8d264fe87d6b339a61dab732162633444947f6->enter($__internal_9c6468e027804b5ea3bf1a3dfe8d264fe87d6b339a61dab732162633444947f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e992ce399b552b3e96c4b73075b96187d0a1c61661e703becb7c880105f15d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e992ce399b552b3e96c4b73075b96187d0a1c61661e703becb7c880105f15d2->enter($__internal_3e992ce399b552b3e96c4b73075b96187d0a1c61661e703becb7c880105f15d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration_panel_login"), "html", null, true);
        
        $__internal_3e992ce399b552b3e96c4b73075b96187d0a1c61661e703becb7c880105f15d2->leave($__internal_3e992ce399b552b3e96c4b73075b96187d0a1c61661e703becb7c880105f15d2_prof);

        
        $__internal_9c6468e027804b5ea3bf1a3dfe8d264fe87d6b339a61dab732162633444947f6->leave($__internal_9c6468e027804b5ea3bf1a3dfe8d264fe87d6b339a61dab732162633444947f6_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50464cda5f7ac62d22858024143f86511fc7f493928194453aa14b15827edb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50464cda5f7ac62d22858024143f86511fc7f493928194453aa14b15827edb31->enter($__internal_50464cda5f7ac62d22858024143f86511fc7f493928194453aa14b15827edb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0c096ee774ecfb5bde3160084d8df54c06f0208c3d036cfa32608913f80f31aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c096ee774ecfb5bde3160084d8df54c06f0208c3d036cfa32608913f80f31aa->enter($__internal_0c096ee774ecfb5bde3160084d8df54c06f0208c3d036cfa32608913f80f31aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "SyliusAdminBundle:Security:login.html.twig", 6)->display(array_merge($context, array("path" => "assets/admin/css/style.css")));
        
        $__internal_0c096ee774ecfb5bde3160084d8df54c06f0208c3d036cfa32608913f80f31aa->leave($__internal_0c096ee774ecfb5bde3160084d8df54c06f0208c3d036cfa32608913f80f31aa_prof);

        
        $__internal_50464cda5f7ac62d22858024143f86511fc7f493928194453aa14b15827edb31->leave($__internal_50464cda5f7ac62d22858024143f86511fc7f493928194453aa14b15827edb31_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_60a5efab90eea8b9ea5c4cc9995d8e6e3ffe4d9cf548bdbfa317f498098e5b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a5efab90eea8b9ea5c4cc9995d8e6e3ffe4d9cf548bdbfa317f498098e5b70->enter($__internal_60a5efab90eea8b9ea5c4cc9995d8e6e3ffe4d9cf548bdbfa317f498098e5b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6ff91a0fdbeff31f513510f3d9334fb278160cf8d4cb7eb97665d1f90cfcd109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff91a0fdbeff31f513510f3d9334fb278160cf8d4cb7eb97665d1f90cfcd109->enter($__internal_6ff91a0fdbeff31f513510f3d9334fb278160cf8d4cb7eb97665d1f90cfcd109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.before_content", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()))));
        echo "

";
        // line 12
        $this->loadTemplate("@SyliusUi/Security/_login.html.twig", "SyliusAdminBundle:Security:login.html.twig", 12)->display(array_merge($context, array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_login_check"), "paths" => array("logo" => "assets/admin/img/logo.png"))));
        // line 13
        echo "
";
        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.after_content", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6ff91a0fdbeff31f513510f3d9334fb278160cf8d4cb7eb97665d1f90cfcd109->leave($__internal_6ff91a0fdbeff31f513510f3d9334fb278160cf8d4cb7eb97665d1f90cfcd109_prof);

        
        $__internal_60a5efab90eea8b9ea5c4cc9995d8e6e3ffe4d9cf548bdbfa317f498098e5b70->leave($__internal_60a5efab90eea8b9ea5c4cc9995d8e6e3ffe4d9cf548bdbfa317f498098e5b70_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e6baf2a6d4ca4b177ce9571c0a3f039f37df9f0565709e3c9fbc40d671aec96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6baf2a6d4ca4b177ce9571c0a3f039f37df9f0565709e3c9fbc40d671aec96->enter($__internal_6e6baf2a6d4ca4b177ce9571c0a3f039f37df9f0565709e3c9fbc40d671aec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f71f0f2817d487a88ad42acfcf28287d337806ea405ab3ec3dbb31a0223725e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71f0f2817d487a88ad42acfcf28287d337806ea405ab3ec3dbb31a0223725e4->enter($__internal_f71f0f2817d487a88ad42acfcf28287d337806ea405ab3ec3dbb31a0223725e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    ";
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "SyliusAdminBundle:Security:login.html.twig", 18)->display(array_merge($context, array("path" => "assets/admin/js/app.js")));
        
        $__internal_f71f0f2817d487a88ad42acfcf28287d337806ea405ab3ec3dbb31a0223725e4->leave($__internal_f71f0f2817d487a88ad42acfcf28287d337806ea405ab3ec3dbb31a0223725e4_prof);

        
        $__internal_6e6baf2a6d4ca4b177ce9571c0a3f039f37df9f0565709e3c9fbc40d671aec96->leave($__internal_6e6baf2a6d4ca4b177ce9571c0a3f039f37df9f0565709e3c9fbc40d671aec96_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 18,  113 => 17,  101 => 14,  98 => 13,  96 => 12,  91 => 10,  82 => 9,  71 => 6,  62 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Layout/centered.html.twig' %}

{% block title %}Sylius | {{ 'sylius.ui.administration_panel_login'|trans }}{% endblock %}

{% block stylesheets %}
    {% include '@SyliusUi/_stylesheets.html.twig' with {'path': 'assets/admin/css/style.css'} %}
{% endblock %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.login.before_content', {'form': form}) }}

{% include '@SyliusUi/Security/_login.html.twig' with {'action': path('sylius_admin_login_check'), 'paths': {'logo': 'assets/admin/img/logo.png'}} %}

{{ sonata_block_render_event('sylius.admin.login.after_content', {'form': form}) }}
{% endblock %}

{% block javascripts %}
    {% include '@SyliusUi/_javascripts.html.twig' with {'path': 'assets/admin/js/app.js'} %}
{% endblock %}
", "SyliusAdminBundle:Security:login.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Security/login.html.twig");
    }
}
