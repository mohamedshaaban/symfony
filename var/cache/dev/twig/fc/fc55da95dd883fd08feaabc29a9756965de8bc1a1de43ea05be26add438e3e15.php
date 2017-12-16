<?php

/* SyliusAdminBundle::layout.html.twig */
class __TwigTemplate_c326a8ceb14584b5c8fbcaa15481396bb001b22b784ee5c0751a536d1ea73128 extends Twig_Template
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
        $__internal_677dfe136f92387c047a5a70f009e02199783303e7a25c841f53bfafca7de9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677dfe136f92387c047a5a70f009e02199783303e7a25c841f53bfafca7de9aa->enter($__internal_677dfe136f92387c047a5a70f009e02199783303e7a25c841f53bfafca7de9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::layout.html.twig"));

        $__internal_fd296654f0bf08e3c1065472da85043773903e7caccb328b3779f6b5aa4d8066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd296654f0bf08e3c1065472da85043773903e7caccb328b3779f6b5aa4d8066->enter($__internal_fd296654f0bf08e3c1065472da85043773903e7caccb328b3779f6b5aa4d8066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_677dfe136f92387c047a5a70f009e02199783303e7a25c841f53bfafca7de9aa->leave($__internal_677dfe136f92387c047a5a70f009e02199783303e7a25c841f53bfafca7de9aa_prof);

        
        $__internal_fd296654f0bf08e3c1065472da85043773903e7caccb328b3779f6b5aa4d8066->leave($__internal_fd296654f0bf08e3c1065472da85043773903e7caccb328b3779f6b5aa4d8066_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92acc6df12ae8b183b2dbffcc468dab0b30886345f3679ff07dde41b87ad0aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92acc6df12ae8b183b2dbffcc468dab0b30886345f3679ff07dde41b87ad0aec->enter($__internal_92acc6df12ae8b183b2dbffcc468dab0b30886345f3679ff07dde41b87ad0aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_143d4ecadfcf49d030a9af98fe2ab29381eecec9cd123e24dba71693b7ac008c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143d4ecadfcf49d030a9af98fe2ab29381eecec9cd123e24dba71693b7ac008c->enter($__internal_143d4ecadfcf49d030a9af98fe2ab29381eecec9cd123e24dba71693b7ac008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Sylius";
        
        $__internal_143d4ecadfcf49d030a9af98fe2ab29381eecec9cd123e24dba71693b7ac008c->leave($__internal_143d4ecadfcf49d030a9af98fe2ab29381eecec9cd123e24dba71693b7ac008c_prof);

        
        $__internal_92acc6df12ae8b183b2dbffcc468dab0b30886345f3679ff07dde41b87ad0aec->leave($__internal_92acc6df12ae8b183b2dbffcc468dab0b30886345f3679ff07dde41b87ad0aec_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9490eb7d96ea25eeff6cb17d2fa298fe069a425e678c061805ae7335dae9b012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9490eb7d96ea25eeff6cb17d2fa298fe069a425e678c061805ae7335dae9b012->enter($__internal_9490eb7d96ea25eeff6cb17d2fa298fe069a425e678c061805ae7335dae9b012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bb80ecdef180995cad0fa49fdb630913b68b8bffa3fb317bb10af775d13473e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb80ecdef180995cad0fa49fdb630913b68b8bffa3fb317bb10af775d13473e4->enter($__internal_bb80ecdef180995cad0fa49fdb630913b68b8bffa3fb317bb10af775d13473e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bb80ecdef180995cad0fa49fdb630913b68b8bffa3fb317bb10af775d13473e4->leave($__internal_bb80ecdef180995cad0fa49fdb630913b68b8bffa3fb317bb10af775d13473e4_prof);

        
        $__internal_9490eb7d96ea25eeff6cb17d2fa298fe069a425e678c061805ae7335dae9b012->leave($__internal_9490eb7d96ea25eeff6cb17d2fa298fe069a425e678c061805ae7335dae9b012_prof);

    }

    // line 11
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_989d7ef3d0a28f881edcff33c894b16d4d71f8bc116728ff72de1518d7a8af63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989d7ef3d0a28f881edcff33c894b16d4d71f8bc116728ff72de1518d7a8af63->enter($__internal_989d7ef3d0a28f881edcff33c894b16d4d71f8bc116728ff72de1518d7a8af63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_262d28e1b493be14cff6e7ff45f72aeee2f05a752916e0a35c44552fda3452c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262d28e1b493be14cff6e7ff45f72aeee2f05a752916e0a35c44552fda3452c9->enter($__internal_262d28e1b493be14cff6e7ff45f72aeee2f05a752916e0a35c44552fda3452c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

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
        
        $__internal_262d28e1b493be14cff6e7ff45f72aeee2f05a752916e0a35c44552fda3452c9->leave($__internal_262d28e1b493be14cff6e7ff45f72aeee2f05a752916e0a35c44552fda3452c9_prof);

        
        $__internal_989d7ef3d0a28f881edcff33c894b16d4d71f8bc116728ff72de1518d7a8af63->leave($__internal_989d7ef3d0a28f881edcff33c894b16d4d71f8bc116728ff72de1518d7a8af63_prof);

    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2ffef066673f645902fc5de3e47c5ce9f09b8b64f4f2e9e5e07b0a228f4f6e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffef066673f645902fc5de3e47c5ce9f09b8b64f4f2e9e5e07b0a228f4f6e31->enter($__internal_2ffef066673f645902fc5de3e47c5ce9f09b8b64f4f2e9e5e07b0a228f4f6e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_a7aca80b20a99f69dc3cc633cc579e3e779b68b9f0be10d33600a58c6508e19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7aca80b20a99f69dc3cc633cc579e3e779b68b9f0be10d33600a58c6508e19d->enter($__internal_a7aca80b20a99f69dc3cc633cc579e3e779b68b9f0be10d33600a58c6508e19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_a7aca80b20a99f69dc3cc633cc579e3e779b68b9f0be10d33600a58c6508e19d->leave($__internal_a7aca80b20a99f69dc3cc633cc579e3e779b68b9f0be10d33600a58c6508e19d_prof);

        
        $__internal_2ffef066673f645902fc5de3e47c5ce9f09b8b64f4f2e9e5e07b0a228f4f6e31->leave($__internal_2ffef066673f645902fc5de3e47c5ce9f09b8b64f4f2e9e5e07b0a228f4f6e31_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_90fd762c995de2a010b34855c22a32c67b3aff54a01f992a0695561bd66a3613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90fd762c995de2a010b34855c22a32c67b3aff54a01f992a0695561bd66a3613->enter($__internal_90fd762c995de2a010b34855c22a32c67b3aff54a01f992a0695561bd66a3613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5ad7558551abef584ef2eeec4efc4cd64f21169750ff5365832e057146ed2ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad7558551abef584ef2eeec4efc4cd64f21169750ff5365832e057146ed2ba5->enter($__internal_5ad7558551abef584ef2eeec4efc4cd64f21169750ff5365832e057146ed2ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.org\" target=\"_blank\">Sylius</a>.
";
        
        $__internal_5ad7558551abef584ef2eeec4efc4cd64f21169750ff5365832e057146ed2ba5->leave($__internal_5ad7558551abef584ef2eeec4efc4cd64f21169750ff5365832e057146ed2ba5_prof);

        
        $__internal_90fd762c995de2a010b34855c22a32c67b3aff54a01f992a0695561bd66a3613->leave($__internal_90fd762c995de2a010b34855c22a32c67b3aff54a01f992a0695561bd66a3613_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9124ba7ce4240fc46b35318dadb44a954081118eaea62365d0680b285b2d64c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9124ba7ce4240fc46b35318dadb44a954081118eaea62365d0680b285b2d64c2->enter($__internal_9124ba7ce4240fc46b35318dadb44a954081118eaea62365d0680b285b2d64c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e96601a93b7c6278e092988b59709e31114a36fb5f438ab0dd4a1ddc0e5c51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e96601a93b7c6278e092988b59709e31114a36fb5f438ab0dd4a1ddc0e5c51b->enter($__internal_3e96601a93b7c6278e092988b59709e31114a36fb5f438ab0dd4a1ddc0e5c51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3e96601a93b7c6278e092988b59709e31114a36fb5f438ab0dd4a1ddc0e5c51b->leave($__internal_3e96601a93b7c6278e092988b59709e31114a36fb5f438ab0dd4a1ddc0e5c51b_prof);

        
        $__internal_9124ba7ce4240fc46b35318dadb44a954081118eaea62365d0680b285b2d64c2->leave($__internal_9124ba7ce4240fc46b35318dadb44a954081118eaea62365d0680b285b2d64c2_prof);

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
", "SyliusAdminBundle::layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\layout.html.twig");
    }
}
