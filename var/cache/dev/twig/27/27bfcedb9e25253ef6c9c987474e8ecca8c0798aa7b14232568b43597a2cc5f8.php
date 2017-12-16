<?php

/* SyliusUiBundle:Layout:sidebar.html.twig */
class __TwigTemplate_375d48cff5a871582605fc838ca49870a5ba8a8ff1654a158f0057b9098c2b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'topbar' => array($this, 'block_topbar'),
            'pre_content' => array($this, 'block_pre_content'),
            'content' => array($this, 'block_content'),
            'post_content' => array($this, 'block_post_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5bc6c6f709da54ac93403154466404663469a37394b9b410c330628fb7d51a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bc6c6f709da54ac93403154466404663469a37394b9b410c330628fb7d51a0->enter($__internal_c5bc6c6f709da54ac93403154466404663469a37394b9b410c330628fb7d51a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Layout:sidebar.html.twig"));

        $__internal_b3056a9057bad2bc07fee07fee206ceb834bbecda87e62e53b4ecb7933e4670b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3056a9057bad2bc07fee07fee206ceb834bbecda87e62e53b4ecb7933e4670b->enter($__internal_b3056a9057bad2bc07fee07fee206ceb834bbecda87e62e53b4ecb7933e4670b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Layout:sidebar.html.twig"));

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

<body class=\"pushable\">
<div class=\"ui sidebar vertical inverted menu visible left\" id=\"sidebar\">
    ";
        // line 21
        $this->displayBlock('sidebar', $context, $blocks);
        // line 23
        echo "</div>
<div class=\"ui fixed inverted menu\">
    ";
        // line 25
        $this->displayBlock('topbar', $context, $blocks);
        // line 27
        echo "</div>
<div class=\"pusher\">
    <div class=\"full height\" id=\"wrapper\">
        <div id=\"content\">
            ";
        // line 31
        $this->loadTemplate("@SyliusUi/_flashes.html.twig", "SyliusUiBundle:Layout:sidebar.html.twig", 31)->display($context);
        // line 32
        echo "
            ";
        // line 33
        $this->displayBlock('pre_content', $context, $blocks);
        // line 35
        echo "
            ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "
            ";
        // line 39
        $this->displayBlock('post_content', $context, $blocks);
        // line 41
        echo "        </div>
    </div>
</div>

";
        // line 45
        $this->loadTemplate("@SyliusUi/Modal/_confirmation.html.twig", "SyliusUiBundle:Layout:sidebar.html.twig", 45)->display($context);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "</body>
</html>
";
        
        $__internal_c5bc6c6f709da54ac93403154466404663469a37394b9b410c330628fb7d51a0->leave($__internal_c5bc6c6f709da54ac93403154466404663469a37394b9b410c330628fb7d51a0_prof);

        
        $__internal_b3056a9057bad2bc07fee07fee206ceb834bbecda87e62e53b4ecb7933e4670b->leave($__internal_b3056a9057bad2bc07fee07fee206ceb834bbecda87e62e53b4ecb7933e4670b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_b19f451665d8e8cb4284a90db602b1eb9c1c1406180b183a9b48362740d3d390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19f451665d8e8cb4284a90db602b1eb9c1c1406180b183a9b48362740d3d390->enter($__internal_b19f451665d8e8cb4284a90db602b1eb9c1c1406180b183a9b48362740d3d390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_751fe005abbd9c5018977e2b238f59c18054ac3e42826a5e206fd206f72c2ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751fe005abbd9c5018977e2b238f59c18054ac3e42826a5e206fd206f72c2ea9->enter($__internal_751fe005abbd9c5018977e2b238f59c18054ac3e42826a5e206fd206f72c2ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_751fe005abbd9c5018977e2b238f59c18054ac3e42826a5e206fd206f72c2ea9->leave($__internal_751fe005abbd9c5018977e2b238f59c18054ac3e42826a5e206fd206f72c2ea9_prof);

        
        $__internal_b19f451665d8e8cb4284a90db602b1eb9c1c1406180b183a9b48362740d3d390->leave($__internal_b19f451665d8e8cb4284a90db602b1eb9c1c1406180b183a9b48362740d3d390_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_3567db5fe4b6df9677a515df691975c8327fcb8be26659a066a7772c19266257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3567db5fe4b6df9677a515df691975c8327fcb8be26659a066a7772c19266257->enter($__internal_3567db5fe4b6df9677a515df691975c8327fcb8be26659a066a7772c19266257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_e4f1ca7be8f0590a826d7cc9184a9a05a1486a15dab1ab7c92ef71c4b1280f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f1ca7be8f0590a826d7cc9184a9a05a1486a15dab1ab7c92ef71c4b1280f74->enter($__internal_e4f1ca7be8f0590a826d7cc9184a9a05a1486a15dab1ab7c92ef71c4b1280f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_e4f1ca7be8f0590a826d7cc9184a9a05a1486a15dab1ab7c92ef71c4b1280f74->leave($__internal_e4f1ca7be8f0590a826d7cc9184a9a05a1486a15dab1ab7c92ef71c4b1280f74_prof);

        
        $__internal_3567db5fe4b6df9677a515df691975c8327fcb8be26659a066a7772c19266257->leave($__internal_3567db5fe4b6df9677a515df691975c8327fcb8be26659a066a7772c19266257_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_054b32995b9b2aed6cad197e23883a92b7e7446afa2a54eae77b99b6e2bd660c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054b32995b9b2aed6cad197e23883a92b7e7446afa2a54eae77b99b6e2bd660c->enter($__internal_054b32995b9b2aed6cad197e23883a92b7e7446afa2a54eae77b99b6e2bd660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5142e2ac32ea6074ffdf95a3361fcdc2124498d1f2f60667760c8b5f8924aeaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5142e2ac32ea6074ffdf95a3361fcdc2124498d1f2f60667760c8b5f8924aeaf->enter($__internal_5142e2ac32ea6074ffdf95a3361fcdc2124498d1f2f60667760c8b5f8924aeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    ";
        
        $__internal_5142e2ac32ea6074ffdf95a3361fcdc2124498d1f2f60667760c8b5f8924aeaf->leave($__internal_5142e2ac32ea6074ffdf95a3361fcdc2124498d1f2f60667760c8b5f8924aeaf_prof);

        
        $__internal_054b32995b9b2aed6cad197e23883a92b7e7446afa2a54eae77b99b6e2bd660c->leave($__internal_054b32995b9b2aed6cad197e23883a92b7e7446afa2a54eae77b99b6e2bd660c_prof);

    }

    // line 21
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d04f4aa0478c13d7406ca10ee9aff225925ef6d7c39fc30d2f09708ecd5b7de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04f4aa0478c13d7406ca10ee9aff225925ef6d7c39fc30d2f09708ecd5b7de9->enter($__internal_d04f4aa0478c13d7406ca10ee9aff225925ef6d7c39fc30d2f09708ecd5b7de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_b68dd0df4aa2d6c6d41dfb87da81f8c60b64e26f1d4e769e79b315f5894a2c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68dd0df4aa2d6c6d41dfb87da81f8c60b64e26f1d4e769e79b315f5894a2c8f->enter($__internal_b68dd0df4aa2d6c6d41dfb87da81f8c60b64e26f1d4e769e79b315f5894a2c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 22
        echo "    ";
        
        $__internal_b68dd0df4aa2d6c6d41dfb87da81f8c60b64e26f1d4e769e79b315f5894a2c8f->leave($__internal_b68dd0df4aa2d6c6d41dfb87da81f8c60b64e26f1d4e769e79b315f5894a2c8f_prof);

        
        $__internal_d04f4aa0478c13d7406ca10ee9aff225925ef6d7c39fc30d2f09708ecd5b7de9->leave($__internal_d04f4aa0478c13d7406ca10ee9aff225925ef6d7c39fc30d2f09708ecd5b7de9_prof);

    }

    // line 25
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_1644f7d5d7fac76782331d7be0543b5fec09e148b78bde88ed65cccb51911a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1644f7d5d7fac76782331d7be0543b5fec09e148b78bde88ed65cccb51911a7c->enter($__internal_1644f7d5d7fac76782331d7be0543b5fec09e148b78bde88ed65cccb51911a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_b8da64551b1aa1162cf9d04922f92a19325386976d2cfded61d50241537e946d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8da64551b1aa1162cf9d04922f92a19325386976d2cfded61d50241537e946d->enter($__internal_b8da64551b1aa1162cf9d04922f92a19325386976d2cfded61d50241537e946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 26
        echo "    ";
        
        $__internal_b8da64551b1aa1162cf9d04922f92a19325386976d2cfded61d50241537e946d->leave($__internal_b8da64551b1aa1162cf9d04922f92a19325386976d2cfded61d50241537e946d_prof);

        
        $__internal_1644f7d5d7fac76782331d7be0543b5fec09e148b78bde88ed65cccb51911a7c->leave($__internal_1644f7d5d7fac76782331d7be0543b5fec09e148b78bde88ed65cccb51911a7c_prof);

    }

    // line 33
    public function block_pre_content($context, array $blocks = array())
    {
        $__internal_72d030345dd8bb97f2a1a7e3ceee410ee2566eb91855772d65a4623cbdcc473c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d030345dd8bb97f2a1a7e3ceee410ee2566eb91855772d65a4623cbdcc473c->enter($__internal_72d030345dd8bb97f2a1a7e3ceee410ee2566eb91855772d65a4623cbdcc473c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_content"));

        $__internal_516fed404c0f19172933259f1383563b72ef2a99a76d84fe85e837d4ffd9bdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516fed404c0f19172933259f1383563b72ef2a99a76d84fe85e837d4ffd9bdaa->enter($__internal_516fed404c0f19172933259f1383563b72ef2a99a76d84fe85e837d4ffd9bdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_content"));

        // line 34
        echo "            ";
        
        $__internal_516fed404c0f19172933259f1383563b72ef2a99a76d84fe85e837d4ffd9bdaa->leave($__internal_516fed404c0f19172933259f1383563b72ef2a99a76d84fe85e837d4ffd9bdaa_prof);

        
        $__internal_72d030345dd8bb97f2a1a7e3ceee410ee2566eb91855772d65a4623cbdcc473c->leave($__internal_72d030345dd8bb97f2a1a7e3ceee410ee2566eb91855772d65a4623cbdcc473c_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d43532c6c740dd3530558db9c7983f3905ee38af89bc84d36b9a04cffcbe645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d43532c6c740dd3530558db9c7983f3905ee38af89bc84d36b9a04cffcbe645->enter($__internal_0d43532c6c740dd3530558db9c7983f3905ee38af89bc84d36b9a04cffcbe645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_538823b9cf57a5008e83ad0d28d9bca56a4e006276261e13c76af055c2216745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538823b9cf57a5008e83ad0d28d9bca56a4e006276261e13c76af055c2216745->enter($__internal_538823b9cf57a5008e83ad0d28d9bca56a4e006276261e13c76af055c2216745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "            ";
        
        $__internal_538823b9cf57a5008e83ad0d28d9bca56a4e006276261e13c76af055c2216745->leave($__internal_538823b9cf57a5008e83ad0d28d9bca56a4e006276261e13c76af055c2216745_prof);

        
        $__internal_0d43532c6c740dd3530558db9c7983f3905ee38af89bc84d36b9a04cffcbe645->leave($__internal_0d43532c6c740dd3530558db9c7983f3905ee38af89bc84d36b9a04cffcbe645_prof);

    }

    // line 39
    public function block_post_content($context, array $blocks = array())
    {
        $__internal_4a3edad3ec40c0f892ecb0fff0967f77b0d7ebe51889dad04f090196c52180e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3edad3ec40c0f892ecb0fff0967f77b0d7ebe51889dad04f090196c52180e3->enter($__internal_4a3edad3ec40c0f892ecb0fff0967f77b0d7ebe51889dad04f090196c52180e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_content"));

        $__internal_3e120ec17d4aada78c2ba8289d1c1d10740268462417621ea8f019ba42b725b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e120ec17d4aada78c2ba8289d1c1d10740268462417621ea8f019ba42b725b9->enter($__internal_3e120ec17d4aada78c2ba8289d1c1d10740268462417621ea8f019ba42b725b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_content"));

        // line 40
        echo "            ";
        
        $__internal_3e120ec17d4aada78c2ba8289d1c1d10740268462417621ea8f019ba42b725b9->leave($__internal_3e120ec17d4aada78c2ba8289d1c1d10740268462417621ea8f019ba42b725b9_prof);

        
        $__internal_4a3edad3ec40c0f892ecb0fff0967f77b0d7ebe51889dad04f090196c52180e3->leave($__internal_4a3edad3ec40c0f892ecb0fff0967f77b0d7ebe51889dad04f090196c52180e3_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de834e5e57a2778e4bee719af0d7fc2b7662d02f3aad23f8b5bb357dadf9ccb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de834e5e57a2778e4bee719af0d7fc2b7662d02f3aad23f8b5bb357dadf9ccb9->enter($__internal_de834e5e57a2778e4bee719af0d7fc2b7662d02f3aad23f8b5bb357dadf9ccb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_078eeed31bcea26cc652173cfc0b655fb9dbd6f9afc3248dfedc7db432f02dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078eeed31bcea26cc652173cfc0b655fb9dbd6f9afc3248dfedc7db432f02dd4->enter($__internal_078eeed31bcea26cc652173cfc0b655fb9dbd6f9afc3248dfedc7db432f02dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_078eeed31bcea26cc652173cfc0b655fb9dbd6f9afc3248dfedc7db432f02dd4->leave($__internal_078eeed31bcea26cc652173cfc0b655fb9dbd6f9afc3248dfedc7db432f02dd4_prof);

        
        $__internal_de834e5e57a2778e4bee719af0d7fc2b7662d02f3aad23f8b5bb357dadf9ccb9->leave($__internal_de834e5e57a2778e4bee719af0d7fc2b7662d02f3aad23f8b5bb357dadf9ccb9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Layout:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 47,  260 => 40,  251 => 39,  241 => 37,  232 => 36,  222 => 34,  213 => 33,  203 => 26,  194 => 25,  184 => 22,  175 => 21,  165 => 16,  156 => 15,  146 => 13,  137 => 12,  119 => 8,  107 => 49,  105 => 47,  102 => 46,  100 => 45,  94 => 41,  92 => 39,  89 => 38,  87 => 36,  84 => 35,  82 => 33,  79 => 32,  77 => 31,  71 => 27,  69 => 25,  65 => 23,  63 => 21,  57 => 17,  55 => 15,  52 => 14,  50 => 12,  43 => 8,  34 => 1,);
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

<body class=\"pushable\">
<div class=\"ui sidebar vertical inverted menu visible left\" id=\"sidebar\">
    {% block sidebar %}
    {% endblock %}
</div>
<div class=\"ui fixed inverted menu\">
    {% block topbar %}
    {% endblock %}
</div>
<div class=\"pusher\">
    <div class=\"full height\" id=\"wrapper\">
        <div id=\"content\">
            {% include '@SyliusUi/_flashes.html.twig' %}

            {% block pre_content %}
            {% endblock %}

            {% block content %}
            {% endblock %}

            {% block post_content %}
            {% endblock %}
        </div>
    </div>
</div>

{% include '@SyliusUi/Modal/_confirmation.html.twig' %}

{% block javascripts %}
{% endblock %}
</body>
</html>
", "SyliusUiBundle:Layout:sidebar.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Layout\\sidebar.html.twig");
    }
}
