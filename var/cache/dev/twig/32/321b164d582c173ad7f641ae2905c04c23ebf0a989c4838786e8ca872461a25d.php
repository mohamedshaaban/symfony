<?php

/* PayumBundle:Profiler:payum.html.twig */
class __TwigTemplate_2161a3eda2c63757f49cd31880bfeb4695686fec64bd07a73666f66c3fc42429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "PayumBundle:Profiler:payum.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82894f1339ad05d93241773de83bf5d4ff571ed8f92e59828379ea360af9f11a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82894f1339ad05d93241773de83bf5d4ff571ed8f92e59828379ea360af9f11a->enter($__internal_82894f1339ad05d93241773de83bf5d4ff571ed8f92e59828379ea360af9f11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $__internal_4498cfcb1d79132734af29250f8e0e52c8c01069e0315998b482df72debbb103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4498cfcb1d79132734af29250f8e0e52c8c01069e0315998b482df72debbb103->enter($__internal_4498cfcb1d79132734af29250f8e0e52c8c01069e0315998b482df72debbb103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82894f1339ad05d93241773de83bf5d4ff571ed8f92e59828379ea360af9f11a->leave($__internal_82894f1339ad05d93241773de83bf5d4ff571ed8f92e59828379ea360af9f11a_prof);

        
        $__internal_4498cfcb1d79132734af29250f8e0e52c8c01069e0315998b482df72debbb103->leave($__internal_4498cfcb1d79132734af29250f8e0e52c8c01069e0315998b482df72debbb103_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9bdd792570a118fa5ec98064ff7a7323f63db35123976a16c4d54fa5b8ee250d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdd792570a118fa5ec98064ff7a7323f63db35123976a16c4d54fa5b8ee250d->enter($__internal_9bdd792570a118fa5ec98064ff7a7323f63db35123976a16c4d54fa5b8ee250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8dd87c8c0f8877aedca053bf0cec2a641345d0318b3cc46c55f097a30e8b61ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd87c8c0f8877aedca053bf0cec2a641345d0318b3cc46c55f097a30e8b61ff->enter($__internal_8dd87c8c0f8877aedca053bf0cec2a641345d0318b3cc46c55f097a30e8b61ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <span class=\"sf-toolbar-status\">Payum</span>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
            ";
        // line 11
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "
";
        
        $__internal_8dd87c8c0f8877aedca053bf0cec2a641345d0318b3cc46c55f097a30e8b61ff->leave($__internal_8dd87c8c0f8877aedca053bf0cec2a641345d0318b3cc46c55f097a30e8b61ff_prof);

        
        $__internal_9bdd792570a118fa5ec98064ff7a7323f63db35123976a16c4d54fa5b8ee250d->leave($__internal_9bdd792570a118fa5ec98064ff7a7323f63db35123976a16c4d54fa5b8ee250d_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4e8fc8d8ab397ffa87b29f6fa12c27cc5d0bb0b01bdb74948f509e4eb6593e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e8fc8d8ab397ffa87b29f6fa12c27cc5d0bb0b01bdb74948f509e4eb6593e4->enter($__internal_a4e8fc8d8ab397ffa87b29f6fa12c27cc5d0bb0b01bdb74948f509e4eb6593e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d319616be14b86be2bd27582fd2ed668a82e6f52294fc32189411295fd102f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d319616be14b86be2bd27582fd2ed668a82e6f52294fc32189411295fd102f87->enter($__internal_d319616be14b86be2bd27582fd2ed668a82e6f52294fc32189411295fd102f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "    ";
        // line 19
        echo "    <span class=\"label\">
        <strong>Payum</strong>
    </span>
";
        
        $__internal_d319616be14b86be2bd27582fd2ed668a82e6f52294fc32189411295fd102f87->leave($__internal_d319616be14b86be2bd27582fd2ed668a82e6f52294fc32189411295fd102f87_prof);

        
        $__internal_a4e8fc8d8ab397ffa87b29f6fa12c27cc5d0bb0b01bdb74948f509e4eb6593e4->leave($__internal_a4e8fc8d8ab397ffa87b29f6fa12c27cc5d0bb0b01bdb74948f509e4eb6593e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60d12b51143bd3f45158cde0880882afe1fa29a320d9f50973760d92eaf988fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d12b51143bd3f45158cde0880882afe1fa29a320d9f50973760d92eaf988fd->enter($__internal_60d12b51143bd3f45158cde0880882afe1fa29a320d9f50973760d92eaf988fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f1e25da3b84bce811228a3680faaf3728dbdacf40391ff1a6e32703bdf99cac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e25da3b84bce811228a3680faaf3728dbdacf40391ff1a6e32703bdf99cac0->enter($__internal_f1e25da3b84bce811228a3680faaf3728dbdacf40391ff1a6e32703bdf99cac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Gateway execution graph</h2>

    <pre>";
        // line 27
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "dump", array(), "method");
        echo "</pre>
";
        
        $__internal_f1e25da3b84bce811228a3680faaf3728dbdacf40391ff1a6e32703bdf99cac0->leave($__internal_f1e25da3b84bce811228a3680faaf3728dbdacf40391ff1a6e32703bdf99cac0_prof);

        
        $__internal_60d12b51143bd3f45158cde0880882afe1fa29a320d9f50973760d92eaf988fd->leave($__internal_60d12b51143bd3f45158cde0880882afe1fa29a320d9f50973760d92eaf988fd_prof);

    }

    public function getTemplateName()
    {
        return "PayumBundle:Profiler:payum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  115 => 25,  106 => 24,  93 => 19,  91 => 18,  82 => 17,  70 => 14,  67 => 13,  63 => 11,  60 => 9,  58 => 8,  55 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <span class=\"sf-toolbar-status\">Payum</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            {# ... #}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <strong>Payum</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Gateway execution graph</h2>

    <pre>{{ collector.dump()|raw }}</pre>
{% endblock %}", "PayumBundle:Profiler:payum.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\payum\\payum-bundle/Resources/views/Profiler/payum.html.twig");
    }
}
