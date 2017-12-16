<?php

/* @SyliusUi/Form/Buttons/_cancel.html.twig */
class __TwigTemplate_2c4e56efbd0210d01dfe4d9c61122d1fa2cad40cec6d281146a9ab3cb62e62ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f5ce951bc60759c3adfd37b610b7bc48de8a2f918d983864fce46708d158047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5ce951bc60759c3adfd37b610b7bc48de8a2f918d983864fce46708d158047->enter($__internal_6f5ce951bc60759c3adfd37b610b7bc48de8a2f918d983864fce46708d158047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_cancel.html.twig"));

        $__internal_3b22658e03831b48752d9a39057b1d4458ecb344162ab356f9efc6ea099ee35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b22658e03831b48752d9a39057b1d4458ecb344162ab356f9efc6ea099ee35c->enter($__internal_3b22658e03831b48752d9a39057b1d4458ecb344162ab356f9efc6ea099ee35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_cancel.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("path", $context)) ? (_twig_default_filter((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"))), "html", null, true);
        echo "\" class=\"ui button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
        echo "</a>
";
        
        $__internal_6f5ce951bc60759c3adfd37b610b7bc48de8a2f918d983864fce46708d158047->leave($__internal_6f5ce951bc60759c3adfd37b610b7bc48de8a2f918d983864fce46708d158047_prof);

        
        $__internal_3b22658e03831b48752d9a39057b1d4458ecb344162ab356f9efc6ea099ee35c->leave($__internal_3b22658e03831b48752d9a39057b1d4458ecb344162ab356f9efc6ea099ee35c_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/Buttons/_cancel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ path|default(app.request.headers.get('referer')) }}\" class=\"ui button\">{{ 'sylius.ui.cancel'|trans }}</a>
", "@SyliusUi/Form/Buttons/_cancel.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Form\\Buttons\\_cancel.html.twig");
    }
}
