<?php

/* SyliusUiBundle:Layout:centered.html.twig */
class __TwigTemplate_dbb86d1eaa99c6ebb0dd73fd5c16e00be23485cbe7542413e34649d18d52affa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pre_content' => array($this, 'block_pre_content'),
            'content' => array($this, 'block_content'),
            'post_content' => array($this, 'block_post_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_293b6ce600f2eeb31814bbb6def3ce5f7d0c62c36d50516bf5d4c9d338ee49c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293b6ce600f2eeb31814bbb6def3ce5f7d0c62c36d50516bf5d4c9d338ee49c6->enter($__internal_293b6ce600f2eeb31814bbb6def3ce5f7d0c62c36d50516bf5d4c9d338ee49c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Layout:centered.html.twig"));

        $__internal_b09f9bb3bc89eba677b3baa824cbb9bd7c04f15e273a67e49e7694f42734f5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09f9bb3bc89eba677b3baa824cbb9bd7c04f15e273a67e49e7694f42734f5d5->enter($__internal_b09f9bb3bc89eba677b3baa824cbb9bd7c04f15e273a67e49e7694f42734f5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Layout:centered.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 12
        $this->displayBlock('metatags', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
<body class=\"centered\">
";
        // line 19
        $this->displayBlock('pre_content', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('post_content', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "</body>
</html>
";
        
        $__internal_293b6ce600f2eeb31814bbb6def3ce5f7d0c62c36d50516bf5d4c9d338ee49c6->leave($__internal_293b6ce600f2eeb31814bbb6def3ce5f7d0c62c36d50516bf5d4c9d338ee49c6_prof);

        
        $__internal_b09f9bb3bc89eba677b3baa824cbb9bd7c04f15e273a67e49e7694f42734f5d5->leave($__internal_b09f9bb3bc89eba677b3baa824cbb9bd7c04f15e273a67e49e7694f42734f5d5_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d51c716949b04a0803f1d3fe4a6793af0a28b09eb53e9b8bca6ab028671a82c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51c716949b04a0803f1d3fe4a6793af0a28b09eb53e9b8bca6ab028671a82c5->enter($__internal_d51c716949b04a0803f1d3fe4a6793af0a28b09eb53e9b8bca6ab028671a82c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_947d45ae35af7d100e4d080dd09d1df5dab3a6ce7e015f4d856a7493a75df6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947d45ae35af7d100e4d080dd09d1df5dab3a6ce7e015f4d856a7493a75df6ac->enter($__internal_947d45ae35af7d100e4d080dd09d1df5dab3a6ce7e015f4d856a7493a75df6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_947d45ae35af7d100e4d080dd09d1df5dab3a6ce7e015f4d856a7493a75df6ac->leave($__internal_947d45ae35af7d100e4d080dd09d1df5dab3a6ce7e015f4d856a7493a75df6ac_prof);

        
        $__internal_d51c716949b04a0803f1d3fe4a6793af0a28b09eb53e9b8bca6ab028671a82c5->leave($__internal_d51c716949b04a0803f1d3fe4a6793af0a28b09eb53e9b8bca6ab028671a82c5_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_ac69905ddb33227c97b0ea98575356ba81a4fadba30d6107203403bc9ad51416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac69905ddb33227c97b0ea98575356ba81a4fadba30d6107203403bc9ad51416->enter($__internal_ac69905ddb33227c97b0ea98575356ba81a4fadba30d6107203403bc9ad51416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_da61922eb29cee0e53570c76219b556732b1200f1aa161f7f487f0297568bb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da61922eb29cee0e53570c76219b556732b1200f1aa161f7f487f0297568bb0a->enter($__internal_da61922eb29cee0e53570c76219b556732b1200f1aa161f7f487f0297568bb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_da61922eb29cee0e53570c76219b556732b1200f1aa161f7f487f0297568bb0a->leave($__internal_da61922eb29cee0e53570c76219b556732b1200f1aa161f7f487f0297568bb0a_prof);

        
        $__internal_ac69905ddb33227c97b0ea98575356ba81a4fadba30d6107203403bc9ad51416->leave($__internal_ac69905ddb33227c97b0ea98575356ba81a4fadba30d6107203403bc9ad51416_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3c48566ed3294c00027b776837a8b28cd4e238404bcd93cc4ae8ff7797cf31d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c48566ed3294c00027b776837a8b28cd4e238404bcd93cc4ae8ff7797cf31d->enter($__internal_e3c48566ed3294c00027b776837a8b28cd4e238404bcd93cc4ae8ff7797cf31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b5f79fe25b37bd384377ceb582c6f434ebec1a872c3b7fabeae03384c1c424b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f79fe25b37bd384377ceb582c6f434ebec1a872c3b7fabeae03384c1c424b8->enter($__internal_b5f79fe25b37bd384377ceb582c6f434ebec1a872c3b7fabeae03384c1c424b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    ";
        
        $__internal_b5f79fe25b37bd384377ceb582c6f434ebec1a872c3b7fabeae03384c1c424b8->leave($__internal_b5f79fe25b37bd384377ceb582c6f434ebec1a872c3b7fabeae03384c1c424b8_prof);

        
        $__internal_e3c48566ed3294c00027b776837a8b28cd4e238404bcd93cc4ae8ff7797cf31d->leave($__internal_e3c48566ed3294c00027b776837a8b28cd4e238404bcd93cc4ae8ff7797cf31d_prof);

    }

    // line 19
    public function block_pre_content($context, array $blocks = array())
    {
        $__internal_21fd835b2386f66618650b3747143ced4137900ca3a58197b95b211874d6e553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fd835b2386f66618650b3747143ced4137900ca3a58197b95b211874d6e553->enter($__internal_21fd835b2386f66618650b3747143ced4137900ca3a58197b95b211874d6e553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_content"));

        $__internal_0025a47064edfbfe29b53678aa40e0fb357c519eca064b5b694d9f363f952ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0025a47064edfbfe29b53678aa40e0fb357c519eca064b5b694d9f363f952ed7->enter($__internal_0025a47064edfbfe29b53678aa40e0fb357c519eca064b5b694d9f363f952ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_content"));

        
        $__internal_0025a47064edfbfe29b53678aa40e0fb357c519eca064b5b694d9f363f952ed7->leave($__internal_0025a47064edfbfe29b53678aa40e0fb357c519eca064b5b694d9f363f952ed7_prof);

        
        $__internal_21fd835b2386f66618650b3747143ced4137900ca3a58197b95b211874d6e553->leave($__internal_21fd835b2386f66618650b3747143ced4137900ca3a58197b95b211874d6e553_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_e477a2bfa299e30f687f32a5e1e475f55f338be353ecdca4f96146fb80013bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e477a2bfa299e30f687f32a5e1e475f55f338be353ecdca4f96146fb80013bd2->enter($__internal_e477a2bfa299e30f687f32a5e1e475f55f338be353ecdca4f96146fb80013bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_47a3f76d3079aaa58381d6e42b62734a6d91d6e0be76e6569121b922b0096d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a3f76d3079aaa58381d6e42b62734a6d91d6e0be76e6569121b922b0096d44->enter($__internal_47a3f76d3079aaa58381d6e42b62734a6d91d6e0be76e6569121b922b0096d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_47a3f76d3079aaa58381d6e42b62734a6d91d6e0be76e6569121b922b0096d44->leave($__internal_47a3f76d3079aaa58381d6e42b62734a6d91d6e0be76e6569121b922b0096d44_prof);

        
        $__internal_e477a2bfa299e30f687f32a5e1e475f55f338be353ecdca4f96146fb80013bd2->leave($__internal_e477a2bfa299e30f687f32a5e1e475f55f338be353ecdca4f96146fb80013bd2_prof);

    }

    // line 25
    public function block_post_content($context, array $blocks = array())
    {
        $__internal_896c7f344a2daea3f2f45416fc02e76316906625f6177f2fa2f00df3524835b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896c7f344a2daea3f2f45416fc02e76316906625f6177f2fa2f00df3524835b1->enter($__internal_896c7f344a2daea3f2f45416fc02e76316906625f6177f2fa2f00df3524835b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_content"));

        $__internal_6d7582d024f06cc3ed25142102e89b064d50efe76034a075f37c2469aa83a2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7582d024f06cc3ed25142102e89b064d50efe76034a075f37c2469aa83a2e0->enter($__internal_6d7582d024f06cc3ed25142102e89b064d50efe76034a075f37c2469aa83a2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_content"));

        
        $__internal_6d7582d024f06cc3ed25142102e89b064d50efe76034a075f37c2469aa83a2e0->leave($__internal_6d7582d024f06cc3ed25142102e89b064d50efe76034a075f37c2469aa83a2e0_prof);

        
        $__internal_896c7f344a2daea3f2f45416fc02e76316906625f6177f2fa2f00df3524835b1->leave($__internal_896c7f344a2daea3f2f45416fc02e76316906625f6177f2fa2f00df3524835b1_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf3798d5e9c823b5b2ec3569f6f6ac6602b3ba0abd3eea33ca35645dbc780b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3798d5e9c823b5b2ec3569f6f6ac6602b3ba0abd3eea33ca35645dbc780b0f->enter($__internal_cf3798d5e9c823b5b2ec3569f6f6ac6602b3ba0abd3eea33ca35645dbc780b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_be50b9c30004cc7add963307738f770dc9e745587beb86bc0649391e0296c06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be50b9c30004cc7add963307738f770dc9e745587beb86bc0649391e0296c06b->enter($__internal_be50b9c30004cc7add963307738f770dc9e745587beb86bc0649391e0296c06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be50b9c30004cc7add963307738f770dc9e745587beb86bc0649391e0296c06b->leave($__internal_be50b9c30004cc7add963307738f770dc9e745587beb86bc0649391e0296c06b_prof);

        
        $__internal_cf3798d5e9c823b5b2ec3569f6f6ac6602b3ba0abd3eea33ca35645dbc780b0f->leave($__internal_cf3798d5e9c823b5b2ec3569f6f6ac6602b3ba0abd3eea33ca35645dbc780b0f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Layout:centered.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 28,  178 => 25,  161 => 22,  144 => 19,  134 => 16,  125 => 15,  115 => 13,  106 => 12,  88 => 8,  76 => 30,  74 => 28,  71 => 27,  69 => 25,  66 => 24,  64 => 22,  61 => 21,  59 => 19,  55 => 17,  53 => 15,  50 => 14,  48 => 12,  41 => 8,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% block title %}Sylius{% endblock %}</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {% block metatags %}
    {% endblock %}

    {% block stylesheets %}
    {% endblock %}
</head>
<body class=\"centered\">
{% block pre_content %}
{% endblock %}

{% block content %}
{% endblock %}

{% block post_content %}
{% endblock %}

{% block javascripts %}
{% endblock %}
</body>
</html>
", "SyliusUiBundle:Layout:centered.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Layout/centered.html.twig");
    }
}
