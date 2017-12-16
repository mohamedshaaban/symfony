<?php

/* @SyliusShop/Account/layout.html.twig */
class __TwigTemplate_0fe31bd3235a308aaea3736483b59e61bfbbbe2c66191e386dad56c1418defd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Account/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0475d27e3491b5ddfa0ade3749e797c482e65accd7481b8cd6a21d8633f4a7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0475d27e3491b5ddfa0ade3749e797c482e65accd7481b8cd6a21d8633f4a7fe->enter($__internal_0475d27e3491b5ddfa0ade3749e797c482e65accd7481b8cd6a21d8633f4a7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/layout.html.twig"));

        $__internal_90852a4d3d06b2bde59c62a8a3722162dbd08f366d093b88f99e90e84cda1a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90852a4d3d06b2bde59c62a8a3722162dbd08f366d093b88f99e90e84cda1a61->enter($__internal_90852a4d3d06b2bde59c62a8a3722162dbd08f366d093b88f99e90e84cda1a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0475d27e3491b5ddfa0ade3749e797c482e65accd7481b8cd6a21d8633f4a7fe->leave($__internal_0475d27e3491b5ddfa0ade3749e797c482e65accd7481b8cd6a21d8633f4a7fe_prof);

        
        $__internal_90852a4d3d06b2bde59c62a8a3722162dbd08f366d093b88f99e90e84cda1a61->leave($__internal_90852a4d3d06b2bde59c62a8a3722162dbd08f366d093b88f99e90e84cda1a61_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_77f439b38d0c0d5cc22d4c5e9f811834de8170abc4ecb91b5343299ba79e45df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f439b38d0c0d5cc22d4c5e9f811834de8170abc4ecb91b5343299ba79e45df->enter($__internal_77f439b38d0c0d5cc22d4c5e9f811834de8170abc4ecb91b5343299ba79e45df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_13065acfc3ee8952087b63f338a6a54885d0ef2bb54535f6027b314656441f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13065acfc3ee8952087b63f338a6a54885d0ef2bb54535f6027b314656441f8c->enter($__internal_13065acfc3ee8952087b63f338a6a54885d0ef2bb54535f6027b314656441f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 6
        echo "
    <div class=\"ui stackable grid\">
        <div class=\"four wide column\">
            ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.before_menu"));
        echo "

            ";
        // line 11
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sylius.shop.account", array("template" => "@SyliusUi/Menu/simple.html.twig"));
        echo "

            ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.after_menu"));
        echo "
        </div>
        <div class=\"twelve wide column\">
            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.before_subcontent"));
        echo "

            ";
        // line 18
        $this->displayBlock('subcontent', $context, $blocks);
        // line 20
        echo "
            ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.after_subcontent"));
        echo "
        </div>
    </div>
";
        
        $__internal_13065acfc3ee8952087b63f338a6a54885d0ef2bb54535f6027b314656441f8c->leave($__internal_13065acfc3ee8952087b63f338a6a54885d0ef2bb54535f6027b314656441f8c_prof);

        
        $__internal_77f439b38d0c0d5cc22d4c5e9f811834de8170abc4ecb91b5343299ba79e45df->leave($__internal_77f439b38d0c0d5cc22d4c5e9f811834de8170abc4ecb91b5343299ba79e45df_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2754caaf9c507f1b3c48161e4601392628fa6f01502dd2f63e9efc36c7ebe48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2754caaf9c507f1b3c48161e4601392628fa6f01502dd2f63e9efc36c7ebe48b->enter($__internal_2754caaf9c507f1b3c48161e4601392628fa6f01502dd2f63e9efc36c7ebe48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_4b5b27ff097cbbb013fa2f34f59a0806910eb7f21cd453b788ccee700dcc2ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5b27ff097cbbb013fa2f34f59a0806910eb7f21cd453b788ccee700dcc2ddd->enter($__internal_4b5b27ff097cbbb013fa2f34f59a0806910eb7f21cd453b788ccee700dcc2ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "    ";
        
        $__internal_4b5b27ff097cbbb013fa2f34f59a0806910eb7f21cd453b788ccee700dcc2ddd->leave($__internal_4b5b27ff097cbbb013fa2f34f59a0806910eb7f21cd453b788ccee700dcc2ddd_prof);

        
        $__internal_2754caaf9c507f1b3c48161e4601392628fa6f01502dd2f63e9efc36c7ebe48b->leave($__internal_2754caaf9c507f1b3c48161e4601392628fa6f01502dd2f63e9efc36c7ebe48b_prof);

    }

    // line 18
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_4d54d1d8c7332793153fca0f419e1cb14ab5c87e8bae5902fb5a03b8047e4381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d54d1d8c7332793153fca0f419e1cb14ab5c87e8bae5902fb5a03b8047e4381->enter($__internal_4d54d1d8c7332793153fca0f419e1cb14ab5c87e8bae5902fb5a03b8047e4381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_ab131293488cb90c7d57edf4a20eb1a59a94cca34f1329088c30dec39357aec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab131293488cb90c7d57edf4a20eb1a59a94cca34f1329088c30dec39357aec1->enter($__internal_ab131293488cb90c7d57edf4a20eb1a59a94cca34f1329088c30dec39357aec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 19
        echo "            ";
        
        $__internal_ab131293488cb90c7d57edf4a20eb1a59a94cca34f1329088c30dec39357aec1->leave($__internal_ab131293488cb90c7d57edf4a20eb1a59a94cca34f1329088c30dec39357aec1_prof);

        
        $__internal_4d54d1d8c7332793153fca0f419e1cb14ab5c87e8bae5902fb5a03b8047e4381->leave($__internal_4d54d1d8c7332793153fca0f419e1cb14ab5c87e8bae5902fb5a03b8047e4381_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 19,  118 => 18,  108 => 5,  99 => 4,  85 => 21,  82 => 20,  80 => 18,  75 => 16,  69 => 13,  64 => 11,  59 => 9,  54 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    {% block breadcrumb %}
    {% endblock %}

    <div class=\"ui stackable grid\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.shop.account.layout.before_menu') }}

            {{ knp_menu_render('sylius.shop.account', {'template': '@SyliusUi/Menu/simple.html.twig'}) }}

            {{ sonata_block_render_event('sylius.shop.account.layout.after_menu') }}
        </div>
        <div class=\"twelve wide column\">
            {{ sonata_block_render_event('sylius.shop.account.layout.before_subcontent') }}

            {% block subcontent %}
            {% endblock %}

            {{ sonata_block_render_event('sylius.shop.account.layout.after_subcontent') }}
        </div>
    </div>
{% endblock %}
", "@SyliusShop/Account/layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/layout.html.twig");
    }
}
