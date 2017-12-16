<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4a033595feb702d3910b51db66f062d0b7a28025c151e9a67c078c10f4f55c29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2231a44b4a757695d283804695aaa52356e2e462e8a139310ef981c19b6a14bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2231a44b4a757695d283804695aaa52356e2e462e8a139310ef981c19b6a14bc->enter($__internal_2231a44b4a757695d283804695aaa52356e2e462e8a139310ef981c19b6a14bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a173fa167d6e0aaf344d002fc84916ccbaf4373f9f99fc3710da26528a52a410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a173fa167d6e0aaf344d002fc84916ccbaf4373f9f99fc3710da26528a52a410->enter($__internal_a173fa167d6e0aaf344d002fc84916ccbaf4373f9f99fc3710da26528a52a410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2231a44b4a757695d283804695aaa52356e2e462e8a139310ef981c19b6a14bc->leave($__internal_2231a44b4a757695d283804695aaa52356e2e462e8a139310ef981c19b6a14bc_prof);

        
        $__internal_a173fa167d6e0aaf344d002fc84916ccbaf4373f9f99fc3710da26528a52a410->leave($__internal_a173fa167d6e0aaf344d002fc84916ccbaf4373f9f99fc3710da26528a52a410_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb67f1d2d2d5e2eed71f2f8a586b422647fa01fff44bf4dc6ae2482c8e1c918b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb67f1d2d2d5e2eed71f2f8a586b422647fa01fff44bf4dc6ae2482c8e1c918b->enter($__internal_fb67f1d2d2d5e2eed71f2f8a586b422647fa01fff44bf4dc6ae2482c8e1c918b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4cc32bce493e9208ec5cbb3177554a4a0fcc02d8f4b69217449d1ff7314c532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cc32bce493e9208ec5cbb3177554a4a0fcc02d8f4b69217449d1ff7314c532->enter($__internal_f4cc32bce493e9208ec5cbb3177554a4a0fcc02d8f4b69217449d1ff7314c532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f4cc32bce493e9208ec5cbb3177554a4a0fcc02d8f4b69217449d1ff7314c532->leave($__internal_f4cc32bce493e9208ec5cbb3177554a4a0fcc02d8f4b69217449d1ff7314c532_prof);

        
        $__internal_fb67f1d2d2d5e2eed71f2f8a586b422647fa01fff44bf4dc6ae2482c8e1c918b->leave($__internal_fb67f1d2d2d5e2eed71f2f8a586b422647fa01fff44bf4dc6ae2482c8e1c918b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_94a67445c049a27119d9d838e3fb59dd32ac9ff9a360ff999fa0da294dffeaf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a67445c049a27119d9d838e3fb59dd32ac9ff9a360ff999fa0da294dffeaf4->enter($__internal_94a67445c049a27119d9d838e3fb59dd32ac9ff9a360ff999fa0da294dffeaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ef01e8c3c20210ac5579a2914df835ea25152f44f1d96664e255f333f7f6246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef01e8c3c20210ac5579a2914df835ea25152f44f1d96664e255f333f7f6246->enter($__internal_3ef01e8c3c20210ac5579a2914df835ea25152f44f1d96664e255f333f7f6246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3ef01e8c3c20210ac5579a2914df835ea25152f44f1d96664e255f333f7f6246->leave($__internal_3ef01e8c3c20210ac5579a2914df835ea25152f44f1d96664e255f333f7f6246_prof);

        
        $__internal_94a67445c049a27119d9d838e3fb59dd32ac9ff9a360ff999fa0da294dffeaf4->leave($__internal_94a67445c049a27119d9d838e3fb59dd32ac9ff9a360ff999fa0da294dffeaf4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
