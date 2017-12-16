<?php

/* PayumBundle:Profiler:payum.html.twig */
class __TwigTemplate_69d498831f89506107a99034919acd1fdb4c4847abf24b3dbe737f845bc245f7 extends Twig_Template
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
        $__internal_d873e0c7c4cb9cbc96ab9f793acd2ba892b2c81734aa973460f969ebc529dba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d873e0c7c4cb9cbc96ab9f793acd2ba892b2c81734aa973460f969ebc529dba4->enter($__internal_d873e0c7c4cb9cbc96ab9f793acd2ba892b2c81734aa973460f969ebc529dba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $__internal_b8c9ef5a3b747805cf4ed00f21f70cd7c46e52e0b84e22ab08825ce41122699d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c9ef5a3b747805cf4ed00f21f70cd7c46e52e0b84e22ab08825ce41122699d->enter($__internal_b8c9ef5a3b747805cf4ed00f21f70cd7c46e52e0b84e22ab08825ce41122699d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d873e0c7c4cb9cbc96ab9f793acd2ba892b2c81734aa973460f969ebc529dba4->leave($__internal_d873e0c7c4cb9cbc96ab9f793acd2ba892b2c81734aa973460f969ebc529dba4_prof);

        
        $__internal_b8c9ef5a3b747805cf4ed00f21f70cd7c46e52e0b84e22ab08825ce41122699d->leave($__internal_b8c9ef5a3b747805cf4ed00f21f70cd7c46e52e0b84e22ab08825ce41122699d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b3479faf0d685f791aca3db0e8e2684e58e771296758df0269f5e8bc14ed01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3479faf0d685f791aca3db0e8e2684e58e771296758df0269f5e8bc14ed01e->enter($__internal_6b3479faf0d685f791aca3db0e8e2684e58e771296758df0269f5e8bc14ed01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e3a029cbd23b407a19cd63f501e1f8901cfdd9f75052501b8b80724c2a9b6c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a029cbd23b407a19cd63f501e1f8901cfdd9f75052501b8b80724c2a9b6c00->enter($__internal_e3a029cbd23b407a19cd63f501e1f8901cfdd9f75052501b8b80724c2a9b6c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e3a029cbd23b407a19cd63f501e1f8901cfdd9f75052501b8b80724c2a9b6c00->leave($__internal_e3a029cbd23b407a19cd63f501e1f8901cfdd9f75052501b8b80724c2a9b6c00_prof);

        
        $__internal_6b3479faf0d685f791aca3db0e8e2684e58e771296758df0269f5e8bc14ed01e->leave($__internal_6b3479faf0d685f791aca3db0e8e2684e58e771296758df0269f5e8bc14ed01e_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4bb012b8ee1586ad8c579ece0bce488de71a521a5a9ba1900e21bbccba65dca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb012b8ee1586ad8c579ece0bce488de71a521a5a9ba1900e21bbccba65dca7->enter($__internal_4bb012b8ee1586ad8c579ece0bce488de71a521a5a9ba1900e21bbccba65dca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_38decaf78f1f0f3fe3b89ec43c3ca242cf67f85068f132bf93cf424ea77503fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38decaf78f1f0f3fe3b89ec43c3ca242cf67f85068f132bf93cf424ea77503fe->enter($__internal_38decaf78f1f0f3fe3b89ec43c3ca242cf67f85068f132bf93cf424ea77503fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "    ";
        // line 19
        echo "    <span class=\"label\">
        <strong>Payum</strong>
    </span>
";
        
        $__internal_38decaf78f1f0f3fe3b89ec43c3ca242cf67f85068f132bf93cf424ea77503fe->leave($__internal_38decaf78f1f0f3fe3b89ec43c3ca242cf67f85068f132bf93cf424ea77503fe_prof);

        
        $__internal_4bb012b8ee1586ad8c579ece0bce488de71a521a5a9ba1900e21bbccba65dca7->leave($__internal_4bb012b8ee1586ad8c579ece0bce488de71a521a5a9ba1900e21bbccba65dca7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2adad24aff3e110cfade73ec2695a1dc786547af0fac21a4cec879ef62a39d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adad24aff3e110cfade73ec2695a1dc786547af0fac21a4cec879ef62a39d23->enter($__internal_2adad24aff3e110cfade73ec2695a1dc786547af0fac21a4cec879ef62a39d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48eab479bc94ec850f56bc4f886c1f2df718188dd57aa225ec56933b2eea6845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48eab479bc94ec850f56bc4f886c1f2df718188dd57aa225ec56933b2eea6845->enter($__internal_48eab479bc94ec850f56bc4f886c1f2df718188dd57aa225ec56933b2eea6845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Gateway execution graph</h2>

    <pre>";
        // line 27
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "dump", array(), "method");
        echo "</pre>
";
        
        $__internal_48eab479bc94ec850f56bc4f886c1f2df718188dd57aa225ec56933b2eea6845->leave($__internal_48eab479bc94ec850f56bc4f886c1f2df718188dd57aa225ec56933b2eea6845_prof);

        
        $__internal_2adad24aff3e110cfade73ec2695a1dc786547af0fac21a4cec879ef62a39d23->leave($__internal_2adad24aff3e110cfade73ec2695a1dc786547af0fac21a4cec879ef62a39d23_prof);

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
{% endblock %}", "PayumBundle:Profiler:payum.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\payum\\payum-bundle\\Resources\\views\\Profiler\\payum.html.twig");
    }
}
