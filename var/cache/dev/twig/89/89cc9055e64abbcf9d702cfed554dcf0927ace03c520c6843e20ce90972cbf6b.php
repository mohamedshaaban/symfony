<?php

/* SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig */
class __TwigTemplate_96ce828f8a9ff12d12afb2a50bfcf48b8556e58e390bd412fffe9d7d3e001ea7 extends Twig_Template
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
        $__internal_081ec004f66bcdbb89a9030939ab3f26ae298133e9b360499a9702d5e966400c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081ec004f66bcdbb89a9030939ab3f26ae298133e9b360499a9702d5e966400c->enter($__internal_081ec004f66bcdbb89a9030939ab3f26ae298133e9b360499a9702d5e966400c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig"));

        $__internal_5142df15358eb4dc6e1990d11cdad6dd2e9c49cf533a9f54f2702ffe61895337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5142df15358eb4dc6e1990d11cdad6dd2e9c49cf533a9f54f2702ffe61895337->enter($__internal_5142df15358eb4dc6e1990d11cdad6dd2e9c49cf533a9f54f2702ffe61895337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["name"] => $context["attributeType"]) {
            // line 2
            echo "    ";
            $context["createRouteName"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 2, $this->getSourceContext()); })()), "applicationName", array()) . "_admin_") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 2, $this->getSourceContext()); })()), "name", array())) . "_create");
            // line 3
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["createRouteName"]) || array_key_exists("createRouteName", $context) ? $context["createRouteName"] : (function () { throw new Twig_Error_Runtime('Variable "createRouteName" does not exist.', 3, $this->getSourceContext()); })()), array("type" => $context["name"])), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"item\">
        ";
            // line 4
            $context["label"] = ("sylius.form.attribute_type." . twig_get_attribute($this->env, $this->getSourceContext(), $context["attributeType"], "type", array()));
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 5, $this->getSourceContext()); })())), "html", null, true);
            echo "
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['attributeType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_081ec004f66bcdbb89a9030939ab3f26ae298133e9b360499a9702d5e966400c->leave($__internal_081ec004f66bcdbb89a9030939ab3f26ae298133e9b360499a9702d5e966400c_prof);

        
        $__internal_5142df15358eb4dc6e1990d11cdad6dd2e9c49cf533a9f54f2702ffe61895337->leave($__internal_5142df15358eb4dc6e1990d11cdad6dd2e9c49cf533a9f54f2702ffe61895337_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  39 => 4,  32 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for name, attributeType in types %}
    {% set createRouteName = metadata.applicationName~'_admin_'~metadata.name~'_create' %}
    <a href=\"{{ path(createRouteName, { 'type': name }) }}\" id=\"{{ name }}\" class=\"item\">
        {% set label = 'sylius.form.attribute_type.' ~ attributeType.type %}
        {{ label|trans }}
    </a>
{% endfor %}
", "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductAttribute/Types/attributeTypes.html.twig");
    }
}
