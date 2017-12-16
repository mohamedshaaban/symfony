<?php

/* SyliusAdminBundle:Security:login.html.twig */
class __TwigTemplate_013c63123e80ffa9f48eb0736905bd90497cffe9a5c2edd3ddb79520824376dd extends Twig_Template
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
        $__internal_4d300ce6db0424e04fd55314f1c9b3ec9e79130397af93841e62f25edd082d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d300ce6db0424e04fd55314f1c9b3ec9e79130397af93841e62f25edd082d9d->enter($__internal_4d300ce6db0424e04fd55314f1c9b3ec9e79130397af93841e62f25edd082d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Security:login.html.twig"));

        $__internal_28ec28cb26ed495e2d5668ad6b41071d02deaced187db38b0729b93506b0833d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ec28cb26ed495e2d5668ad6b41071d02deaced187db38b0729b93506b0833d->enter($__internal_28ec28cb26ed495e2d5668ad6b41071d02deaced187db38b0729b93506b0833d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d300ce6db0424e04fd55314f1c9b3ec9e79130397af93841e62f25edd082d9d->leave($__internal_4d300ce6db0424e04fd55314f1c9b3ec9e79130397af93841e62f25edd082d9d_prof);

        
        $__internal_28ec28cb26ed495e2d5668ad6b41071d02deaced187db38b0729b93506b0833d->leave($__internal_28ec28cb26ed495e2d5668ad6b41071d02deaced187db38b0729b93506b0833d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_adc7a22b6fbb993108402f7bf3dbee02e1ba5ac7ad9b86d32d9bbbb1f4edf5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc7a22b6fbb993108402f7bf3dbee02e1ba5ac7ad9b86d32d9bbbb1f4edf5a0->enter($__internal_adc7a22b6fbb993108402f7bf3dbee02e1ba5ac7ad9b86d32d9bbbb1f4edf5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3e106ca38598e046d2c51c1983745390526c656976a4b1e82c1e249cef039ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e106ca38598e046d2c51c1983745390526c656976a4b1e82c1e249cef039ac->enter($__internal_c3e106ca38598e046d2c51c1983745390526c656976a4b1e82c1e249cef039ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration_panel_login"), "html", null, true);
        
        $__internal_c3e106ca38598e046d2c51c1983745390526c656976a4b1e82c1e249cef039ac->leave($__internal_c3e106ca38598e046d2c51c1983745390526c656976a4b1e82c1e249cef039ac_prof);

        
        $__internal_adc7a22b6fbb993108402f7bf3dbee02e1ba5ac7ad9b86d32d9bbbb1f4edf5a0->leave($__internal_adc7a22b6fbb993108402f7bf3dbee02e1ba5ac7ad9b86d32d9bbbb1f4edf5a0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93fc52019a28cce0a5982afca6596b40f5eaf64cd084b1746514749825004e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fc52019a28cce0a5982afca6596b40f5eaf64cd084b1746514749825004e72->enter($__internal_93fc52019a28cce0a5982afca6596b40f5eaf64cd084b1746514749825004e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dfb98b0ec8375c9bf78be41f7a49d3755dfc13e19f5e01c8c1a241bc94e15209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb98b0ec8375c9bf78be41f7a49d3755dfc13e19f5e01c8c1a241bc94e15209->enter($__internal_dfb98b0ec8375c9bf78be41f7a49d3755dfc13e19f5e01c8c1a241bc94e15209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "SyliusAdminBundle:Security:login.html.twig", 6)->display(array_merge($context, array("path" => "assets/admin/css/style.css")));
        
        $__internal_dfb98b0ec8375c9bf78be41f7a49d3755dfc13e19f5e01c8c1a241bc94e15209->leave($__internal_dfb98b0ec8375c9bf78be41f7a49d3755dfc13e19f5e01c8c1a241bc94e15209_prof);

        
        $__internal_93fc52019a28cce0a5982afca6596b40f5eaf64cd084b1746514749825004e72->leave($__internal_93fc52019a28cce0a5982afca6596b40f5eaf64cd084b1746514749825004e72_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b09b3555b93929f35d509c638ddbf43fb9e3e3dbb894fbe0846ca70d9d0dbbf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09b3555b93929f35d509c638ddbf43fb9e3e3dbb894fbe0846ca70d9d0dbbf2->enter($__internal_b09b3555b93929f35d509c638ddbf43fb9e3e3dbb894fbe0846ca70d9d0dbbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dcdbfd7778354f8fd94d2681cd1e6257e56b34a29f345f6fef531fd670c47242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdbfd7778354f8fd94d2681cd1e6257e56b34a29f345f6fef531fd670c47242->enter($__internal_dcdbfd7778354f8fd94d2681cd1e6257e56b34a29f345f6fef531fd670c47242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_dcdbfd7778354f8fd94d2681cd1e6257e56b34a29f345f6fef531fd670c47242->leave($__internal_dcdbfd7778354f8fd94d2681cd1e6257e56b34a29f345f6fef531fd670c47242_prof);

        
        $__internal_b09b3555b93929f35d509c638ddbf43fb9e3e3dbb894fbe0846ca70d9d0dbbf2->leave($__internal_b09b3555b93929f35d509c638ddbf43fb9e3e3dbb894fbe0846ca70d9d0dbbf2_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0a53c5c17fb924880df407525638691691d941ea3a72336aa1be978bd63e0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a53c5c17fb924880df407525638691691d941ea3a72336aa1be978bd63e0f1->enter($__internal_a0a53c5c17fb924880df407525638691691d941ea3a72336aa1be978bd63e0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_68287be0677045d11c9463e5960afa6decdb74ca86111d56ec851bae2531ff70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68287be0677045d11c9463e5960afa6decdb74ca86111d56ec851bae2531ff70->enter($__internal_68287be0677045d11c9463e5960afa6decdb74ca86111d56ec851bae2531ff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    ";
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "SyliusAdminBundle:Security:login.html.twig", 18)->display(array_merge($context, array("path" => "assets/admin/js/app.js")));
        
        $__internal_68287be0677045d11c9463e5960afa6decdb74ca86111d56ec851bae2531ff70->leave($__internal_68287be0677045d11c9463e5960afa6decdb74ca86111d56ec851bae2531ff70_prof);

        
        $__internal_a0a53c5c17fb924880df407525638691691d941ea3a72336aa1be978bd63e0f1->leave($__internal_a0a53c5c17fb924880df407525638691691d941ea3a72336aa1be978bd63e0f1_prof);

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
", "SyliusAdminBundle:Security:login.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
