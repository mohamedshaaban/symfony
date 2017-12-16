<?php

/* @SyliusUi/Layout/centered.html.twig */
class __TwigTemplate_5fc551c7a3491b47bd9360115dd819ee60e156d198a0b8174de85ef44117ccce extends Twig_Template
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
        $__internal_7bc1637584ba8de8c70499c7dd0619227970924df4973ad39e057b8ad5850ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc1637584ba8de8c70499c7dd0619227970924df4973ad39e057b8ad5850ca1->enter($__internal_7bc1637584ba8de8c70499c7dd0619227970924df4973ad39e057b8ad5850ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Layout/centered.html.twig"));

        $__internal_da3344511863012f336ac10df3f2b3b3544ebfef877e83f2e7576a47131ea071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3344511863012f336ac10df3f2b3b3544ebfef877e83f2e7576a47131ea071->enter($__internal_da3344511863012f336ac10df3f2b3b3544ebfef877e83f2e7576a47131ea071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Layout/centered.html.twig"));

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
        
        $__internal_7bc1637584ba8de8c70499c7dd0619227970924df4973ad39e057b8ad5850ca1->leave($__internal_7bc1637584ba8de8c70499c7dd0619227970924df4973ad39e057b8ad5850ca1_prof);

        
        $__internal_da3344511863012f336ac10df3f2b3b3544ebfef877e83f2e7576a47131ea071->leave($__internal_da3344511863012f336ac10df3f2b3b3544ebfef877e83f2e7576a47131ea071_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a24800eb0f7a98bb5d67887fadf6c2b9c2cc983ac0e78f1edf96f7a62129c0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24800eb0f7a98bb5d67887fadf6c2b9c2cc983ac0e78f1edf96f7a62129c0b8->enter($__internal_a24800eb0f7a98bb5d67887fadf6c2b9c2cc983ac0e78f1edf96f7a62129c0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08220fd3666e9abd135aef7bffb77d514d5c1793ed4919102b7f980997fae2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08220fd3666e9abd135aef7bffb77d514d5c1793ed4919102b7f980997fae2a9->enter($__internal_08220fd3666e9abd135aef7bffb77d514d5c1793ed4919102b7f980997fae2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_08220fd3666e9abd135aef7bffb77d514d5c1793ed4919102b7f980997fae2a9->leave($__internal_08220fd3666e9abd135aef7bffb77d514d5c1793ed4919102b7f980997fae2a9_prof);

        
        $__internal_a24800eb0f7a98bb5d67887fadf6c2b9c2cc983ac0e78f1edf96f7a62129c0b8->leave($__internal_a24800eb0f7a98bb5d67887fadf6c2b9c2cc983ac0e78f1edf96f7a62129c0b8_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_1225f8cac23d38f642e6662ae3f99e38d46910c9ad1f438f5ccffad2f5e9a5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1225f8cac23d38f642e6662ae3f99e38d46910c9ad1f438f5ccffad2f5e9a5eb->enter($__internal_1225f8cac23d38f642e6662ae3f99e38d46910c9ad1f438f5ccffad2f5e9a5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_d9f39a31c4dcd3564399061cd946c7fad1e79eb354af0bd70ac21991d13738ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f39a31c4dcd3564399061cd946c7fad1e79eb354af0bd70ac21991d13738ef->enter($__internal_d9f39a31c4dcd3564399061cd946c7fad1e79eb354af0bd70ac21991d13738ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_d9f39a31c4dcd3564399061cd946c7fad1e79eb354af0bd70ac21991d13738ef->leave($__internal_d9f39a31c4dcd3564399061cd946c7fad1e79eb354af0bd70ac21991d13738ef_prof);

        
        $__internal_1225f8cac23d38f642e6662ae3f99e38d46910c9ad1f438f5ccffad2f5e9a5eb->leave($__internal_1225f8cac23d38f642e6662ae3f99e38d46910c9ad1f438f5ccffad2f5e9a5eb_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cf4f133e06ff33048f52e712f34add1af2bc94effc5bb9e0f22810bb58804c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf4f133e06ff33048f52e712f34add1af2bc94effc5bb9e0f22810bb58804c3->enter($__internal_8cf4f133e06ff33048f52e712f34add1af2bc94effc5bb9e0f22810bb58804c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c5b71c20fb6b97cecbfb4f69990c98bb0ede58a40f81b86b5a5a1d6c1175475c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b71c20fb6b97cecbfb4f69990c98bb0ede58a40f81b86b5a5a1d6c1175475c->enter($__internal_c5b71c20fb6b97cecbfb4f69990c98bb0ede58a40f81b86b5a5a1d6c1175475c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    ";
        
        $__internal_c5b71c20fb6b97cecbfb4f69990c98bb0ede58a40f81b86b5a5a1d6c1175475c->leave($__internal_c5b71c20fb6b97cecbfb4f69990c98bb0ede58a40f81b86b5a5a1d6c1175475c_prof);

        
        $__internal_8cf4f133e06ff33048f52e712f34add1af2bc94effc5bb9e0f22810bb58804c3->leave($__internal_8cf4f133e06ff33048f52e712f34add1af2bc94effc5bb9e0f22810bb58804c3_prof);

    }

    // line 19
    public function block_pre_content($context, array $blocks = array())
    {
        $__internal_8812270ed4107df7c72fcab6624a6873d82502ce3bdb3f19989cf25f5c03313d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8812270ed4107df7c72fcab6624a6873d82502ce3bdb3f19989cf25f5c03313d->enter($__internal_8812270ed4107df7c72fcab6624a6873d82502ce3bdb3f19989cf25f5c03313d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_content"));

        $__internal_bdef21d7f1559270df61923a3353cd22d6c0c580390909981e4d5744cb2e1413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdef21d7f1559270df61923a3353cd22d6c0c580390909981e4d5744cb2e1413->enter($__internal_bdef21d7f1559270df61923a3353cd22d6c0c580390909981e4d5744cb2e1413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_content"));

        
        $__internal_bdef21d7f1559270df61923a3353cd22d6c0c580390909981e4d5744cb2e1413->leave($__internal_bdef21d7f1559270df61923a3353cd22d6c0c580390909981e4d5744cb2e1413_prof);

        
        $__internal_8812270ed4107df7c72fcab6624a6873d82502ce3bdb3f19989cf25f5c03313d->leave($__internal_8812270ed4107df7c72fcab6624a6873d82502ce3bdb3f19989cf25f5c03313d_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_a924c8ffca5373feaf9958a1a3ec3da8e7ddd58aba6bac9dcf30a982835e4d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a924c8ffca5373feaf9958a1a3ec3da8e7ddd58aba6bac9dcf30a982835e4d50->enter($__internal_a924c8ffca5373feaf9958a1a3ec3da8e7ddd58aba6bac9dcf30a982835e4d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5f97914221d9abe95be87834b6993429abd9afb27f51171138613cb8ff19519d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f97914221d9abe95be87834b6993429abd9afb27f51171138613cb8ff19519d->enter($__internal_5f97914221d9abe95be87834b6993429abd9afb27f51171138613cb8ff19519d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5f97914221d9abe95be87834b6993429abd9afb27f51171138613cb8ff19519d->leave($__internal_5f97914221d9abe95be87834b6993429abd9afb27f51171138613cb8ff19519d_prof);

        
        $__internal_a924c8ffca5373feaf9958a1a3ec3da8e7ddd58aba6bac9dcf30a982835e4d50->leave($__internal_a924c8ffca5373feaf9958a1a3ec3da8e7ddd58aba6bac9dcf30a982835e4d50_prof);

    }

    // line 25
    public function block_post_content($context, array $blocks = array())
    {
        $__internal_51090701e2ba3708dce1f4412ca0c4638a33fcf4345c788a9abafb4b237e56a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51090701e2ba3708dce1f4412ca0c4638a33fcf4345c788a9abafb4b237e56a5->enter($__internal_51090701e2ba3708dce1f4412ca0c4638a33fcf4345c788a9abafb4b237e56a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_content"));

        $__internal_dc8a32ce6643cafc839a376a0bc91e02c5890fe57dd4be738753414880b4785c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8a32ce6643cafc839a376a0bc91e02c5890fe57dd4be738753414880b4785c->enter($__internal_dc8a32ce6643cafc839a376a0bc91e02c5890fe57dd4be738753414880b4785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_content"));

        
        $__internal_dc8a32ce6643cafc839a376a0bc91e02c5890fe57dd4be738753414880b4785c->leave($__internal_dc8a32ce6643cafc839a376a0bc91e02c5890fe57dd4be738753414880b4785c_prof);

        
        $__internal_51090701e2ba3708dce1f4412ca0c4638a33fcf4345c788a9abafb4b237e56a5->leave($__internal_51090701e2ba3708dce1f4412ca0c4638a33fcf4345c788a9abafb4b237e56a5_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3093e972c8eb6a3aae0cf3c9d40101781b9dd676bcff560de5fe0f149afcdc5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3093e972c8eb6a3aae0cf3c9d40101781b9dd676bcff560de5fe0f149afcdc5f->enter($__internal_3093e972c8eb6a3aae0cf3c9d40101781b9dd676bcff560de5fe0f149afcdc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_10a52f943a005831000075cbabb5f64a991fae1e2ff1f93cd7532a7a9b1913d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a52f943a005831000075cbabb5f64a991fae1e2ff1f93cd7532a7a9b1913d7->enter($__internal_10a52f943a005831000075cbabb5f64a991fae1e2ff1f93cd7532a7a9b1913d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10a52f943a005831000075cbabb5f64a991fae1e2ff1f93cd7532a7a9b1913d7->leave($__internal_10a52f943a005831000075cbabb5f64a991fae1e2ff1f93cd7532a7a9b1913d7_prof);

        
        $__internal_3093e972c8eb6a3aae0cf3c9d40101781b9dd676bcff560de5fe0f149afcdc5f->leave($__internal_3093e972c8eb6a3aae0cf3c9d40101781b9dd676bcff560de5fe0f149afcdc5f_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Layout/centered.html.twig";
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
", "@SyliusUi/Layout/centered.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Layout\\centered.html.twig");
    }
}
