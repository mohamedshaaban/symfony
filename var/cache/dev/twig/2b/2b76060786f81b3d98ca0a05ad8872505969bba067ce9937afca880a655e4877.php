<?php

/* SyliusAdminBundle::layout.html.twig */
class __TwigTemplate_6a464ac2ff1a3bd1eeebe07d2c056787943edf015ec6b276e4401ce8eaed139a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusUiBundle:Layout:sidebar.html.twig", "SyliusAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topbar' => array($this, 'block_topbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusUiBundle:Layout:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28130a726660166ce56c59e9d2ca97e8f31ee865bea0153b828a293e83946933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28130a726660166ce56c59e9d2ca97e8f31ee865bea0153b828a293e83946933->enter($__internal_28130a726660166ce56c59e9d2ca97e8f31ee865bea0153b828a293e83946933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::layout.html.twig"));

        $__internal_a5a9ab502cead67cc05d2df7ede228043b352d1be7394463c1a9c9de56144f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a9ab502cead67cc05d2df7ede228043b352d1be7394463c1a9c9de56144f1e->enter($__internal_a5a9ab502cead67cc05d2df7ede228043b352d1be7394463c1a9c9de56144f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28130a726660166ce56c59e9d2ca97e8f31ee865bea0153b828a293e83946933->leave($__internal_28130a726660166ce56c59e9d2ca97e8f31ee865bea0153b828a293e83946933_prof);

        
        $__internal_a5a9ab502cead67cc05d2df7ede228043b352d1be7394463c1a9c9de56144f1e->leave($__internal_a5a9ab502cead67cc05d2df7ede228043b352d1be7394463c1a9c9de56144f1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f1c661ed49f3a3cc38e7075883b9979f2c3999ac5e4eff0f855d2b56cd7fa1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1c661ed49f3a3cc38e7075883b9979f2c3999ac5e4eff0f855d2b56cd7fa1a->enter($__internal_4f1c661ed49f3a3cc38e7075883b9979f2c3999ac5e4eff0f855d2b56cd7fa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2e688eb659bab535a89b0a5a75d768909f09a42e9bab5f182cba93aa5ac168d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e688eb659bab535a89b0a5a75d768909f09a42e9bab5f182cba93aa5ac168d->enter($__internal_b2e688eb659bab535a89b0a5a75d768909f09a42e9bab5f182cba93aa5ac168d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Sylius";
        
        $__internal_b2e688eb659bab535a89b0a5a75d768909f09a42e9bab5f182cba93aa5ac168d->leave($__internal_b2e688eb659bab535a89b0a5a75d768909f09a42e9bab5f182cba93aa5ac168d_prof);

        
        $__internal_4f1c661ed49f3a3cc38e7075883b9979f2c3999ac5e4eff0f855d2b56cd7fa1a->leave($__internal_4f1c661ed49f3a3cc38e7075883b9979f2c3999ac5e4eff0f855d2b56cd7fa1a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df8a68d9a35b694405ea7143c7283267311aedc1b521c5f12f2a681c5f0f2645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8a68d9a35b694405ea7143c7283267311aedc1b521c5f12f2a681c5f0f2645->enter($__internal_df8a68d9a35b694405ea7143c7283267311aedc1b521c5f12f2a681c5f0f2645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f0745b6c42be4c93735f06cfde682578ba761e03e79f759005696dd86529471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0745b6c42be4c93735f06cfde682578ba761e03e79f759005696dd86529471->enter($__internal_2f0745b6c42be4c93735f06cfde682578ba761e03e79f759005696dd86529471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_stylesheets.html.twig", "SyliusAdminBundle::layout.html.twig", 6)->display(array_merge($context, array("path" => "assets/admin/css/style.css")));
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.stylesheets"));
        echo "
";
        
        $__internal_2f0745b6c42be4c93735f06cfde682578ba761e03e79f759005696dd86529471->leave($__internal_2f0745b6c42be4c93735f06cfde682578ba761e03e79f759005696dd86529471_prof);

        
        $__internal_df8a68d9a35b694405ea7143c7283267311aedc1b521c5f12f2a681c5f0f2645->leave($__internal_df8a68d9a35b694405ea7143c7283267311aedc1b521c5f12f2a681c5f0f2645_prof);

    }

    // line 11
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_1a41862a547e8e22f2cf782e8c79fe6d44b45fe395ca81c2bfa80ea2bcda6961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a41862a547e8e22f2cf782e8c79fe6d44b45fe395ca81c2bfa80ea2bcda6961->enter($__internal_1a41862a547e8e22f2cf782e8c79fe6d44b45fe395ca81c2bfa80ea2bcda6961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_afdb8c9cbd343167411f1500f174cb4c9835ace802ec8175a19d2056d381402c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdb8c9cbd343167411f1500f174cb4c9835ace802ec8175a19d2056d381402c->enter($__internal_afdb8c9cbd343167411f1500f174cb4c9835ace802ec8175a19d2056d381402c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 12
        echo "    <a class=\"icon item\" id=\"sidebar-toggle\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.toggle_sidebar"), "html", null, true);
        echo "\">
        <i class=\"sidebar icon\"></i>
    </a>

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_left"));
        echo "

    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_channel_index", array("template" => "@SyliusAdmin/_channelLinks.html.twig")));
        echo "
    ";
        // line 19
        $this->loadTemplate("@SyliusAdmin/_search.html.twig", "SyliusAdminBundle::layout.html.twig", 19)->display($context);
        // line 20
        echo "
    <div class=\"ui left floated dividing empty item\"></div>

    ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_middle"));
        echo "

    <div class=\"ui right floated dividing empty item\"></div>

    ";
        // line 27
        echo $this->env->getExtension('Sylius\Bundle\AdminBundle\Twig\NotificationWidgetExtension')->renderWidget($this->env);
        echo "
    ";
        // line 28
        $this->loadTemplate("@SyliusAdmin/_security.html.twig", "SyliusAdminBundle::layout.html.twig", 28)->display($context);
        // line 29
        echo "
    ";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_right"));
        echo "
";
        
        $__internal_afdb8c9cbd343167411f1500f174cb4c9835ace802ec8175a19d2056d381402c->leave($__internal_afdb8c9cbd343167411f1500f174cb4c9835ace802ec8175a19d2056d381402c_prof);

        
        $__internal_1a41862a547e8e22f2cf782e8c79fe6d44b45fe395ca81c2bfa80ea2bcda6961->leave($__internal_1a41862a547e8e22f2cf782e8c79fe6d44b45fe395ca81c2bfa80ea2bcda6961_prof);

    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_89743cb173fe6be600c4697f93f007666e0056991ed077293c8f29809686140f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89743cb173fe6be600c4697f93f007666e0056991ed077293c8f29809686140f->enter($__internal_89743cb173fe6be600c4697f93f007666e0056991ed077293c8f29809686140f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_9ebc0d03e8c848d6281e5c95812cfcdaa11f4c6811d3e74acfd0e73c571947e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebc0d03e8c848d6281e5c95812cfcdaa11f4c6811d3e74acfd0e73c571947e4->enter($__internal_9ebc0d03e8c848d6281e5c95812cfcdaa11f4c6811d3e74acfd0e73c571947e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 34
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.sidebar_top"));
        echo "

    <a class=\"item\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard");
        echo "\"><b>Sylius</b></a>
    ";
        // line 37
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sylius.admin.main", array("template" => "SyliusUiBundle:Menu:sidebar.html.twig", "currentClass" => "active"));
        echo "

    ";
        // line 39
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.sidebar_down"));
        echo "
";
        
        $__internal_9ebc0d03e8c848d6281e5c95812cfcdaa11f4c6811d3e74acfd0e73c571947e4->leave($__internal_9ebc0d03e8c848d6281e5c95812cfcdaa11f4c6811d3e74acfd0e73c571947e4_prof);

        
        $__internal_89743cb173fe6be600c4697f93f007666e0056991ed077293c8f29809686140f->leave($__internal_89743cb173fe6be600c4697f93f007666e0056991ed077293c8f29809686140f_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0d4a66903c4d62bc6749562fb49207533b36b9e3b515326c2ce7b68a1281e3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4a66903c4d62bc6749562fb49207533b36b9e3b515326c2ce7b68a1281e3d2->enter($__internal_0d4a66903c4d62bc6749562fb49207533b36b9e3b515326c2ce7b68a1281e3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_11b079b016863f35834d893b009ffddd93c28b9ab10d6f5869b462615f7094f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b079b016863f35834d893b009ffddd93c28b9ab10d6f5869b462615f7094f4->enter($__internal_11b079b016863f35834d893b009ffddd93c28b9ab10d6f5869b462615f7094f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.org\" target=\"_blank\">Sylius</a>.
";
        
        $__internal_11b079b016863f35834d893b009ffddd93c28b9ab10d6f5869b462615f7094f4->leave($__internal_11b079b016863f35834d893b009ffddd93c28b9ab10d6f5869b462615f7094f4_prof);

        
        $__internal_0d4a66903c4d62bc6749562fb49207533b36b9e3b515326c2ce7b68a1281e3d2->leave($__internal_0d4a66903c4d62bc6749562fb49207533b36b9e3b515326c2ce7b68a1281e3d2_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6231260e1e2d936b41900a32880d46a857160c77bd7cb7a037d0916e919e9c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6231260e1e2d936b41900a32880d46a857160c77bd7cb7a037d0916e919e9c94->enter($__internal_6231260e1e2d936b41900a32880d46a857160c77bd7cb7a037d0916e919e9c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5be7f46b0ce9f97f64b9fd9032cda4676fae001914e10010ab873f44d71f27b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be7f46b0ce9f97f64b9fd9032cda4676fae001914e10010ab873f44d71f27b9->enter($__internal_5be7f46b0ce9f97f64b9fd9032cda4676fae001914e10010ab873f44d71f27b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "SyliusAdminBundle::layout.html.twig", 47)->display(array_merge($context, array("path" => "assets/admin/js/app.js")));
        // line 48
        echo "
    ";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.javascripts"));
        echo "
";
        
        $__internal_5be7f46b0ce9f97f64b9fd9032cda4676fae001914e10010ab873f44d71f27b9->leave($__internal_5be7f46b0ce9f97f64b9fd9032cda4676fae001914e10010ab873f44d71f27b9_prof);

        
        $__internal_6231260e1e2d936b41900a32880d46a857160c77bd7cb7a037d0916e919e9c94->leave($__internal_6231260e1e2d936b41900a32880d46a857160c77bd7cb7a037d0916e919e9c94_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 49,  221 => 48,  218 => 47,  209 => 46,  196 => 43,  187 => 42,  175 => 39,  170 => 37,  166 => 36,  160 => 34,  151 => 33,  139 => 30,  136 => 29,  134 => 28,  130 => 27,  123 => 23,  118 => 20,  116 => 19,  112 => 18,  107 => 16,  99 => 12,  90 => 11,  78 => 8,  75 => 7,  72 => 6,  63 => 5,  45 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusUiBundle:Layout:sidebar.html.twig' %}

{% block title %} | Sylius{% endblock %}

{% block stylesheets %}
    {% include 'SyliusUiBundle::_stylesheets.html.twig' with {'path': 'assets/admin/css/style.css'} %}

    {{ sonata_block_render_event('sylius.admin.layout.stylesheets') }}
{% endblock %}

{% block topbar %}
    <a class=\"icon item\" id=\"sidebar-toggle\" title=\"{{ 'sylius.ui.toggle_sidebar'|trans }}\">
        <i class=\"sidebar icon\"></i>
    </a>

    {{ sonata_block_render_event('sylius.admin.layout.topbar_left') }}

    {{ render(url('sylius_admin_partial_channel_index', {'template': '@SyliusAdmin/_channelLinks.html.twig'})) }}
    {% include '@SyliusAdmin/_search.html.twig' %}

    <div class=\"ui left floated dividing empty item\"></div>

    {{ sonata_block_render_event('sylius.admin.layout.topbar_middle') }}

    <div class=\"ui right floated dividing empty item\"></div>

    {{ sylius_render_notifications_widget() }}
    {% include '@SyliusAdmin/_security.html.twig' %}

    {{ sonata_block_render_event('sylius.admin.layout.topbar_right') }}
{% endblock %}

{% block sidebar %}
    {{ sonata_block_render_event('sylius.admin.layout.sidebar_top') }}

    <a class=\"item\" href=\"{{ path('sylius_admin_dashboard') }}\"><b>Sylius</b></a>
    {{ knp_menu_render('sylius.admin.main', {'template': 'SyliusUiBundle:Menu:sidebar.html.twig', 'currentClass': 'active'}) }}

    {{ sonata_block_render_event('sylius.admin.layout.sidebar_down') }}
{% endblock %}

{% block footer %}
    {{ 'sylius.ui.powered_by'|trans }} <a href=\"http://sylius.org\" target=\"_blank\">Sylius</a>.
{% endblock %}

{% block javascripts %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'assets/admin/js/app.js'} %}

    {{ sonata_block_render_event('sylius.admin.layout.javascripts') }}
{% endblock %}
", "SyliusAdminBundle::layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/layout.html.twig");
    }
}
