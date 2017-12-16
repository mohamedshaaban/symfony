<?php

/* SyliusUiBundle:Form/Buttons:_cancel.html.twig */
class __TwigTemplate_e958d3247b01e01c4987fdbe85696095bfa4a535cd2733688b1f6b31ace284f2 extends Twig_Template
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
        $__internal_b1143605e869fc53c3eb6e386dfc2bfa8903ab14fc02e0d3fd88afb7ed50a0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1143605e869fc53c3eb6e386dfc2bfa8903ab14fc02e0d3fd88afb7ed50a0c7->enter($__internal_b1143605e869fc53c3eb6e386dfc2bfa8903ab14fc02e0d3fd88afb7ed50a0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_cancel.html.twig"));

        $__internal_b84bf822d557a0aa9f392ba12a6edbc3baa8a24696ccaf21821f2c0eba10ad2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84bf822d557a0aa9f392ba12a6edbc3baa8a24696ccaf21821f2c0eba10ad2b->enter($__internal_b84bf822d557a0aa9f392ba12a6edbc3baa8a24696ccaf21821f2c0eba10ad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_cancel.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("path", $context)) ? (_twig_default_filter((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"))), "html", null, true);
        echo "\" class=\"ui button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
        echo "</a>
";
        
        $__internal_b1143605e869fc53c3eb6e386dfc2bfa8903ab14fc02e0d3fd88afb7ed50a0c7->leave($__internal_b1143605e869fc53c3eb6e386dfc2bfa8903ab14fc02e0d3fd88afb7ed50a0c7_prof);

        
        $__internal_b84bf822d557a0aa9f392ba12a6edbc3baa8a24696ccaf21821f2c0eba10ad2b->leave($__internal_b84bf822d557a0aa9f392ba12a6edbc3baa8a24696ccaf21821f2c0eba10ad2b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Form/Buttons:_cancel.html.twig";
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
", "SyliusUiBundle:Form/Buttons:_cancel.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Form/Buttons/_cancel.html.twig");
    }
}
