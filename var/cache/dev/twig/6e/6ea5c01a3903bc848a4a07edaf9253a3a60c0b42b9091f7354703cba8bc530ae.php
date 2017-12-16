<?php

/* SyliusUiBundle:Macro:common.html.twig */
class __TwigTemplate_266065c242910aac79cc9b31a91bc581acd0c67b84c3896731f12a53a71a1625 extends Twig_Template
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
        $__internal_e2fef9b2cab766dac211096d87293ec473ce072243aa620ee57bad83a33e3938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fef9b2cab766dac211096d87293ec473ce072243aa620ee57bad83a33e3938->enter($__internal_e2fef9b2cab766dac211096d87293ec473ce072243aa620ee57bad83a33e3938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:common.html.twig"));

        $__internal_98e71e6e1622754dc0af5ab9c8a97d5077d2d5ac1d0b6b4be2996b4857616b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e71e6e1622754dc0af5ab9c8a97d5077d2d5ac1d0b6b4be2996b4857616b5c->enter($__internal_98e71e6e1622754dc0af5ab9c8a97d5077d2d5ac1d0b6b4be2996b4857616b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:common.html.twig"));

        
        $__internal_e2fef9b2cab766dac211096d87293ec473ce072243aa620ee57bad83a33e3938->leave($__internal_e2fef9b2cab766dac211096d87293ec473ce072243aa620ee57bad83a33e3938_prof);

        
        $__internal_98e71e6e1622754dc0af5ab9c8a97d5077d2d5ac1d0b6b4be2996b4857616b5c->leave($__internal_98e71e6e1622754dc0af5ab9c8a97d5077d2d5ac1d0b6b4be2996b4857616b5c_prof);

    }

    // line 1
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_92fb453e7797b1de4a6e7f6c173dab66c63c3b05b811787577b834e63b77e895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_92fb453e7797b1de4a6e7f6c173dab66c63c3b05b811787577b834e63b77e895->enter($__internal_92fb453e7797b1de4a6e7f6c173dab66c63c3b05b811787577b834e63b77e895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_27bcdbd60d70c9914334fff9090a3c61ad19b87335f038ae5418ba31b7e60f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_27bcdbd60d70c9914334fff9090a3c61ad19b87335f038ae5418ba31b7e60f98->enter($__internal_27bcdbd60d70c9914334fff9090a3c61ad19b87335f038ae5418ba31b7e60f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 2, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_27bcdbd60d70c9914334fff9090a3c61ad19b87335f038ae5418ba31b7e60f98->leave($__internal_27bcdbd60d70c9914334fff9090a3c61ad19b87335f038ae5418ba31b7e60f98_prof);

            
            $__internal_92fb453e7797b1de4a6e7f6c173dab66c63c3b05b811787577b834e63b77e895->leave($__internal_92fb453e7797b1de4a6e7f6c173dab66c63c3b05b811787577b834e63b77e895_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:common.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  56 => 3,  51 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro attributes(attributes) %}
    {% for name, value in attributes %}
        {%- if value is not none and value is not same as(false) -%}
            {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
        {%- endif -%}
    {%- endfor -%}
{% endmacro %}
", "SyliusUiBundle:Macro:common.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/common.html.twig");
    }
}
